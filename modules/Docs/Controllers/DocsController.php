<?php

namespace Modules\Docs\Controllers;

use Velto\Core\Controller\Controller;

require_once __DIR__ . '/../Helpers/helper.php';

class DocsController extends Controller
{
    public function docs(string $page = 'documentation')
    {
        $pages = getDocPages();
        $matched = null;
    
        // Tangani khusus jika halaman adalah 'index' (yaitu /docs)
        if ($page === 'documentation') {
            $indexPath = __DIR__ . '/../Contents/documentation.md';
        
            if (!file_exists($indexPath)) {
                http_response_code(404);
                $html = '<h2>404 - Halaman tidak ditemukan.</h2>';
            } else {
                $markdown = file_get_contents($indexPath);
                $html = markdown($markdown);
            }
        
            return view('docs.docs', [
                'html' => $html,
                'currentPage' => $page,
                'docPages' => $pages
            ]);
        }
        
    
        // Lanjutkan proses pencocokan seperti biasa
        foreach ($pages as $group) {
            if (isset($group['slug'])) {
                if ($group['slug'] === $page) {
                    $matched = $group;
                    break;
                }
            } elseif (is_array($group)) {
                foreach ($group as $item) {
                    if ($item['slug'] === $page) {
                        $matched = $item;
                        break 2;
                    }
                }
            }
        }
    
        if (!$matched || !file_exists($matched['path'])) {
            http_response_code(404);
            $html = '<h2>404 - Halaman tidak ditemukan.</h2>';
        } else {
            $markdown = file_get_contents($matched['path']);
            $html = markdown($markdown);
        }
    
        return view('docs.docs', [
            'html' => $html,
            'currentPage' => $page,
            'docPages' => $pages
        ]);
    }
    
    
    
}    
