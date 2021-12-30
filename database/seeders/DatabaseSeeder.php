<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Mohammad Adib',
            'username' => 'Adib',
            'email' => 'mohammadadib@gmail.com',
            'password' => bcrypt('aaaa11')
        ]);

        User::create([
            'name' => 'Aisyah Insyofah',
            'username' => 'Aisyah',
            'email' => 'aisyah@gmail.com',
            'password' => bcrypt('aaaa11')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nostrum magni quidem doloremque reiciendis aut officia,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, nostrum magni quidem doloremque reiciendis aut officia, sit totam hic possimus voluptas earum modi nisi nemo neque odio minus esse similique! Repellat, minima aliquam, odio accusantium molestiae quaerat expedita est adipisci necessitatibus sunt harum quam temporibus quia nobis libero nesciunt optio, nihil sit. Dicta non nobis illo ut expedita quisquam? Modi molestias illo distinctio laudantium fugit, ullam recusandae, facilis deserunt totam alias quibusdam. Placeat vero nemo ad rerum corporis totam suscipit recusandae repudiandae enim ratione illum nobis ab esse expedita eveniet sed numquam minima quisquam rem sit dolores consectetur, soluta temporibus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
