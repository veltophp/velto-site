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
        $url = 'https://api.github.com/repos/veltophp/velto/tags';

        $token = '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';
        $options = [
            "http" => [
                "header" => "User-Agent: VeltoClient\r\nAuthorization: token $token\r\n"
            ]
        ];
        $context = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $tags = json_decode($response, true);

        return $tags[0]['name'] ?? 'Unknown';
    }
}
