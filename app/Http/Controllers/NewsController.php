<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $params = [
            'perpage' => 10,
            'page' => $request->input('page')
        ];

        $data = Http::get($this->baseUrl .'/blogs', $params);

        return view('pages.news.newsList', compact('data'));
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

        $response = Http::get($this->baseUrl .'/blogs', $params);

        $data = [
            'data' => $response->json(),
        ];

        return view('pages.news.newsDetail', $data);
    }
}
