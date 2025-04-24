<?php

namespace App\Controllers;

use Velto\Core\Controller;

class DocsController extends Controller
{
    public function docs()
    {
        $latestVersion = $this->getLatestVeltoVersion();

        return view('docs.home', [
            'latestVersion' => $latestVersion,
        ]);
    }


    

    public function pre_requisites() 
    {

        return view('docs.pre-requisites');

    }

    public function installation() 
    {

        return view('docs.installation');

    }

    private function getLatestVeltoVersion()
    {
        // Tentukan lokasi direktori cache
        $cacheDir = dirname(__DIR__, 2) . '/storage/cache';
        $cacheFile = $cacheDir . '/version.cache';
        $cacheTTL = 86400; // 1 hari dalam detik

        // Cek dan buat folder cache jika belum ada
        if (!is_dir($cacheDir)) {
            mkdir($cacheDir, 0755, true); // Buat folder dan subfolder
        }

        // Jika cache ada dan masih valid
        if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < $cacheTTL) {
            // Ambil data dari cache dan kembalikan
            return trim(file_get_contents($cacheFile));
        }

        // Jika cache tidak ada atau sudah kadaluarsa, ambil data dari GitHub
        $url = 'https://api.github.com/repos/veltophp/velto/tags';
        $token = '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';
        
        // Setup header untuk request ke GitHub
        $options = [
            "http" => [
                "header" => "User-Agent: VeltoClient\r\nAuthorization: token $token\r\n"
            ]
        ];

        // Ambil data dari GitHub
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);

        if ($response === false) {
            // Jika gagal ambil data, return 'Unknown' atau nilai default
            return 'Unknown';
        }

        // Decode hasil dari JSON
        $tags = json_decode($response, true);
        $latest = $tags[0]['name'] ?? 'Unknown'; // Ambil versi terbaru, default jika tidak ada

        // Simpan hasil ke dalam cache
        file_put_contents($cacheFile, $latest);

        // Kembalikan hasil versi terbaru
        return $latest;
    }

}
