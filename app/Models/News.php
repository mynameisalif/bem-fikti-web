<?php

namespace App\Models;



class News
{
  private static $berita = [
    [
    "title"=>"First News",
    "slug"=>"first-news-title",
    "author"=>"ilham kurniawan",
    "desc"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias molestiae maxime est quibusdam iure provident dicta adipisci distinctio dolores optio."
    ],
    [
    "title"=>"Second News",
    "slug"=>"second-news-title",
    "author"=>"Kang",
    "desc"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias molestiae maxime est quibusdam iure provident dicta adipisci distinctio dolores optio."
    ],
    [
    "title"=>"Second News",
    "slug"=>"third-news-title",
    "author"=>"mr negative",
    "desc"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias molestiae maxime est quibusdam iure provident dicta adipisci distinctio dolores optio."
    ]

    ];

    public static function all(){
        return collect(self::$berita) ;
    }
    public static function find($slug)
    {
        $news_details= static::all();
        return $news_details->firstWhere('slug',$slug);
    }
}
