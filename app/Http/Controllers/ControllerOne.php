<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ControllerOne extends Controller
{
    public function index()
    {
        // Configurar el cliente Guzzle para desactivar la verificación del certificado SSL
        $client = new Client([
            'verify' => false
        ]);

        $url = 'https://api.github.com/users/2A2G/repos';
        
        try {
            $response = $client->get($url);
            $repos = json_decode($response->getBody()->getContents());

            // Arreglo para almacenar los datos de interés
            $reposData = [];

            // Iterar sobre cada repositorio y extraer los campos necesarios
            foreach ($repos as $repo) {
                $repoData = [
                    'name' => $repo->name,
                    'url' => $repo->html_url,
                    'description' => $repo->description,
                    'language' => $repo->language,
                ];

                // Agregar los datos del repositorio al arreglo
                $reposData[] = $repoData;
            }


            // return $reposData;
        } catch (RequestException $e) {
            // Manejar errores de solicitud
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
        return view('dashboard.dashboard', compact('reposData'));
    }


    public function contact()
    {
        return view('dashboard.contact');
    }
}
