<?php

namespace App\Models;

class Sandi 
{
    private static $blog_posts = [
        [
            "title" => "Judul Blog Pertama",
            "slug" => "judul-blog-pertama",
            "author" => "Mohammad Adib",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia quam vero a nostrum neque molestiae sapiente? Nihil eveniet quasi eius quibusdam suscipit? Debitis, aliquam harum? Animi aliquid in, reprehenderit sunt architecto consequatur maxime officiis, omnis at tempora, cum saepe! Quae, velit. Perspiciatis nisi esse explicabo, sunt magnam aut debitis? Dolorum excepturi quibusdam harum minima fuga sed. Ratione dolorem laboriosam nesciunt, soluta atque cum neque rem deserunt, voluptates sunt adipisci vero quasi optio, libero dignissimos expedita quia voluptas fugit iste quas. Sapiente animi iusto deleniti pariatur beatae molestias maiores amet natus blanditiis sed totam hic, distinctio necessitatibus voluptate nam dolorum?."
        ],
        [
            "title" => "Judul Blog Kedua",
            "slug" => "judul-blog-kedua",
            "author" => "Aisyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa mollitia quam vero a nostrum neque molestiae sapiente? Nihil eveniet quasi eius quibusdam suscipit? Debitis, aliquam harum? Animi aliquid in, reprehenderit sunt architecto consequatur maxime officiis, omnis at tempora, cum saepe! Quae, velit. Perspiciatis nisi esse explicabo, sunt magnam aut debitis? Dolorum excepturi quibusdam harum minima fuga sed. Ratione dolorem laboriosam nesciunt, soluta atque cum neque rem deserunt, voluptates sunt adipisci vero quasi optio, libero dignissimos expedita quia voluptas fugit iste quas. Sapiente animi iusto deleniti pariatur beatae molestias maiores amet natus blanditiis sed totam hic, distinctio necessitatibus voluptate nam dolorum?."
        ]
    ];

    // contoh pakai collections agar array lebih sakti membahana lagi
    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($id)
    {
        $posts = static::all();

        return $posts->firstWhere('id', $id);
    }
}
