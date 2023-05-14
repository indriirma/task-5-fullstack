<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post  
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama ",
            "slug" => "judul-post-pertama",
            "author" => "Irma",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem eos eveniet similique veritatis obcaecati ratione accusantium? Impedit optio corporis provident quisquam ipsam! Vitae accusantium quod placeat inventore exercitationem pariatur, eveniet obcaecati quisquam minima debitis, nostrum autem fuga voluptate aliquam maxime, rerum ipsum deleniti perferendis nobis est. Recusandae culpa eius fugit asperiores ea fuga numquam, minus tempore unde blanditiis odio tenetur magnam ut molestiae illum cupiditate?"
        ],
        [
            "title" => "Judul Post Kedua ",
            "slug" => "judul-post-kedua",
            "author" => "Lala",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem eos eveniet similique veritatis obcaecati ratione accusantium? Impedit optio corporis provident quisquam ipsam! Vitae accusantium quod placeat inventore exercitationem pariatur, eveniet obcaecati quisquam minima debitis, nostrum autem fuga voluptate aliquam maxime, rerum ipsum deleniti perferendis nobis est. Recusandae culpa eius fugit asperiores ea fuga numquam, minus tempore unde blanditiis odio tenetur magnam ut molestiae illum cupiditate?"            
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach($posts as $post){
        //     if($post['slug']==$slug){
        //         $new_post = $post;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
