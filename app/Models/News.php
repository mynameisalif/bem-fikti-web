<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory, Sluggable;
    // protected $fillable =['title', 'author', 'excerpt', 'body'];
    protected $guarded = ['id'];
    protected $with = ['category', 'author'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
