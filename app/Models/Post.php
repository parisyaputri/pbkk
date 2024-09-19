<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return 
        [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Parisya Putri',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione commodi, ullam optio repellendus recusandae dicta veritatis quae ab? Aspernatur, repellat eligendi. Velit unde debitis consequatur adipisci rem laboriosam impedit culpa!'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Parisya Putri',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione commodi, ullam optio repellendus recusandae dicta veritatis quae ab? Aspernatur, repellat eligendi. Velit unde debitis consequatur adipisci rem laboriosam impedit culpa!'
            ]
            ];
    
    }
    public static function find($slug): array 
{
    $post =  Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    if (! $post) {
        abort(404);
    }

    return $post;
}
}

