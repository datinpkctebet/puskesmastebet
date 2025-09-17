<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'perpage' => 3,
            'page' => 1
        ];

        $galleries = Http::get($this->baseUrl .'/galleries', $params);

        $blogs = Http::get($this->baseUrl .'/blogs', $params);

        $data = [
            'galleries' => $galleries->json(),
            'blogs' => $blogs->json(),
        ];

        return view('pages.home', compact('data'));
    }
}
