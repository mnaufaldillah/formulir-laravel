<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Article;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Article::factory(20)->create();

        User::create([
            'name' => 'Agus Budi',
            'username' => 'agus-budi',
            'email' => 'agus.budi@its.ac.id',
            'password' => bcrypt('123')
        ]);

        User::create([
            'name' => 'Fitrah Arie',
            'username' => 'fitrah-arie',
            'email' => 'fitrah@mhs.its.ac.id',
            'password' => bcrypt('123')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Analisis Algoritma',
            'slug' => 'analisis-algoritma'
        ]);

        Category::create([
            'name' => 'Catatan Harian',
            'slug' => 'catatan-harian'
        ]);

        Article::create([
            'title' => 'Judul Pertama',
            'category_id' => 1,
            'slug' => 'judul-pertama',
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>'
        ]);

        Article::create([
            'title' => 'Judul Kedua',
            'category_id' => 2,
            'slug' => 'judul-kedua',
            'user_id' => 2,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>'
        ]);

        Article::create([
            'title' => 'Judul Ketiga',
            'category_id' => 3,
            'slug' => 'judul-ketiga',
            'user_id' => 1,
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Dolor quas consectetur omnis est mollitia deserunt libero nesciunt fugiat perferendis corporis dolore ratione voluptatum eum distinctio deleniti odit officiis blanditiis at exercitationem odio, nihil, sequi, facilis nobis atque! Temporibus, est! Praesentium optio, maxime dolor modi incidunt velit animi, eum odio dignissimos ab dicta voluptate libero voluptatem reprehenderit placeat asperiores totam omnis illum necessitatibus hic voluptas. Incidunt esse voluptas amet magni eius voluptatum! Similique hic labore facere. Possimus sint tempora et cum animi qui mollitia veritatis repudiandae dolor vero itaque nobis, eum nam tenetur consectetur atque quia aperiam temporibus? Commodi rerum, saepe, iure earum assumenda maxime non, aliquam totam consequatur tempora illo odio! Omnis, <b>sapiente</b>! </p>'
        ]);

    }
}
