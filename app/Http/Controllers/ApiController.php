// app/Http/Controllers/ApiController.php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function fetchIdeas()
    {
        $response = Http::withOptions([
            'proxy' => 'https://suitmedia-backend.suitdev.com/api/ideas',
            'verify' => false, // Hanya jika Anda ingin menonaktifkan verifikasi SSL
        ])->post('https://suitmedia-backend.suitdev.com/api/ideas', [
            'page' => [
                'number' => 1,
                'size' => 10,
            ],
            'append' => ['small_image', 'medium_image'],
            'sort' => '-published_at',
        ]);

        return $response->json();
    }
}
