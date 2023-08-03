<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news',[
            "title" => "Berita Terkini",
            "news"=> News::latest()->get()
        ]);
    }
    public function show(News $news)
    {
        return view('newsdetails',[
            "title" => "News",
            "berita"=>$news
        ]);
    }

}
