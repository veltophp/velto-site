<?php

namespace App\Controllers;

use Velto\Core\Controller;
use League\CommonMark\CommonMarkConverter;


class DocsController extends Controller
{
    public function docs()
    {
        return view('docs.docs');
    }
    
    public function welcome($folder, $file)
    {
        $doc = "$folder/$file";

        $cleanDocTitle = ''; // default
        $parts = explode('/', $doc);

        if (count($parts) == 2) {
            $folderPart = preg_replace('/^\d+\./', '', $parts[0]);
            $folderPart = str_replace('-', ' ', $folderPart);

            $filePart = preg_replace('/^\d+(?:\.\d+)*\./', '', $parts[1]);
            $filePart = pathinfo($filePart, PATHINFO_FILENAME);
            $filePart = str_replace('-', ' ', $filePart);

            $cleanDocTitle = ucwords($folderPart) . ' | ' . $filePart;
        }

    
        $doc = trim($doc, '/');
        if (strpos($doc, '..') !== false) {
            abort(400, 'Invalid document path');
        }
    
        $filePath = root_path("docs/$doc.md");
    
        if (!file_exists($filePath)) {
            abort(404, 'Documentation not found');
        }
    
        $markdown = file_get_contents($filePath);
        $converter = new CommonMarkConverter();
        $html = (string) $converter->convert($markdown);
    
        $files = $this->getAllDocsFiles(root_path('docs'));
    
        $docsList = array_map(function ($path) {
            return str_replace('\\', '/', substr($path, strlen(root_path('docs/') ))); 
        }, $files);
    
        usort($docsList, function ($a, $b) {
            return version_compare($a, $b);
        });
    
        $docsCategories = [];
        $docsSubCategories = [];
    
        foreach ($docsList as $item) {
            $parts = explode('/', $item);
            if (count($parts) == 2) {
                $folder = $parts[0];
                $filename = $parts[1];
        
                $cleanFolderTitle = preg_replace('/^\d+\./', '', $folder);        
                $cleanFolderTitle = str_replace('-', ' ', $cleanFolderTitle);    
                $cleanFolderTitle = ucwords($cleanFolderTitle);
        
                if (!isset($docsCategories[$folder])) {
                    $docsCategories[$folder] = [
                        'key' => $folder,
                        'title' => $cleanFolderTitle,
                    ];
                }
        
                if (preg_match('/^\d+(?:\.\d+)*\.(.+)$/', $filename, $m)) {
                    $nameWithoutExtension = pathinfo($m[1], PATHINFO_FILENAME); 
                    $cleanFileTitle = preg_replace('/^\d+\./', '', $nameWithoutExtension); 
                    $cleanFileTitle = str_replace('-', ' ', $cleanFileTitle);            
                    // $cleanFileTitle = ucwords($cleanFileTitle);                
        
                    $docsSubCategories[$folder][] = [
                        'key' => $item,
                        'title' => $cleanFileTitle,
                    ];
                }
            }
        }
        
    
        return view('docs/docs-veltophp', [
            'content' => $html,
            'doc' => $doc,
            'cleanDocTitle' => $cleanDocTitle,
            'docsCategories' => $docsCategories,
            'docsSubCategories' => $docsSubCategories,
            'docsList' => $docsList,
        ]);
    }
    
    /**
     * Fungsi rekursif ambil semua file .md dari folder dan subfolder
     */
    private function getAllDocsFiles($dir)
    {
        $files = [];
        $items = scandir($dir);
    
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $path = $dir . DIRECTORY_SEPARATOR . $item;
    
            if (is_dir($path)) {
                $files = array_merge($files, $this->getAllDocsFiles($path));
            } elseif (is_file($path) && pathinfo($path, PATHINFO_EXTENSION) === 'md') {
                $files[] = $path;
            }
        }
    
        return $files;
    }
    

}
