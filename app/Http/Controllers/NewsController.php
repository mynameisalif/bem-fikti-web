<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news',[
            "title" => "News",
            "berita"=> News::all()
        ]);
    }
    public function show($slug)
    {
        return view('newsdetails',[
            "title" => "News",
            "berita"=> News::all()
        ]);
    }
}
