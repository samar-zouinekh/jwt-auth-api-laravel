<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalApiController extends Controller
{
    public function fetchUsers()
    {
        $response = Http::get('https://jsonplaceholder.typicode.com/users');

        return response()->json($response->json());
    }
}
