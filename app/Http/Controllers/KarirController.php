<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get($this->baseUrl .'/karirs');

        $data = [
            'data' => $response->json(),
        ];

        return view('pages.karir.karirList', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $params = [
            'slug' => $slug,
        ];

        $response = Http::get($this->baseUrl .'/karirs', $params);

        $data = [
            'data' => $response->json(),
        ];

        return view('pages.karir.karirDetail', $data);
    }
}
