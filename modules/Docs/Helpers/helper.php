<?php

use League\CommonMark\CommonMarkConverter;


if (!function_exists('markdown')) {
    function markdown(?string $text): string
    {
        if (empty($text)) {
            return '';
        }

        $converter = new CommonMarkConverter([
            'html_input' => 'strip',
            'allow_unsafe_links' => false,
        ]);

        return $converter->convert($text)->getContent();
    }
}



if (!function_exists('getDocPages')) {

    function getDocPages(): array
    {
        $folder = __DIR__ . '/../Contents/';
        $pages = [];
    
        foreach (glob($folder . '*', GLOB_ONLYDIR) as $dir) {
            $dirname = basename($dir);
    
            // Pecah nama folder: 1.Prologue → prologue
            preg_match('/^\d+\.(.+)$/', $dirname, $dirMatch);
            $dirSlug = strtolower($dirMatch[1] ?? $dirname);
            $dirLabel = ucwords(str_replace(['-', '_'], ' ', $dirSlug));
    
            $files = glob($dir . '/*.md');
    
            foreach ($files as $file) {
                $filename = basename($file, '.md');
    
                // 1.1.release-notes → release-notes
                preg_match('/^\d+(\.\d+)?\.(.+)$/', $filename, $fileMatch);
                $fileSlug = strtolower($fileMatch[2] ?? $filename);
                $label = ucwords(str_replace(['-', '_'], ' ', $fileSlug));
    
                $slug = $dirSlug . '/' . $fileSlug;
    
                $pages[$dirLabel][] = [
                    'slug' => $slug, // dipakai untuk URL
                    'label' => $label,
                    'path' => $file // path asli, masih ada angkanya
                ];
            }
        }
    
        return $pages;
    }
    

}

