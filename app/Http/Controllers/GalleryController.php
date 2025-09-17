<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get($this->baseUrl .'/galleries');

        $data = [
            'data' => $response->json(),
        ];

        return view('pages.gallery', $data);
    }
}
