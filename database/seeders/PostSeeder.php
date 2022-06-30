<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['category_id' => 1, 'title' => 'Title 1', 'description' => 'This is description for title', 'image' => 'img1.jpg'],
            ['category_id' => 2, 'title' => 'Title 2', 'description' => 'This is description for title', 'image' => 'img2.jpg'],
            ['category_id' => 3, 'title' => 'Title 3', 'description' => 'This is description for title', 'image' => 'img3.jpg'],
            ['category_id' => 1, 'title' => 'Title 4', 'description' => 'This is description for title', 'image' => 'img4.jpg'],
            ['category_id' => 2, 'title' => 'Title 5', 'description' => 'This is description for title', 'image' => 'img5.jpg'],
            ['category_id' => 3, 'title' => 'Title 6', 'description' => 'This is description for title', 'image' => 'img6.jpg'],
            ['category_id' => 1, 'title' => 'Title 7', 'description' => 'This is description for title', 'image' => 'img7.jpg'],
            ['category_id' => 2, 'title' => 'Title 8', 'description' => 'This is description for title', 'image' => 'img8.jpg'],
            ['category_id' => 3, 'title' => 'Title 9', 'description' => 'This is description for title', 'image' => 'img9.jpg'],
            ['category_id' => 1, 'title' => 'Title 10', 'description' => 'This is description for title', 'image' => 'img10.jpg'],
            ['category_id' => 2, 'title' => 'Title 11', 'description' => 'This is description for title', 'image' => 'img11.jpg'],
            ['category_id' => 3, 'title' => 'Title 12', 'description' => 'This is description for title', 'image' => 'img12.jpg'],
            ['category_id' => 1, 'title' => 'Title 13', 'description' => 'This is description for title', 'image' => 'img13.jpg'],
            ['category_id' => 2, 'title' => 'Title 14', 'description' => 'This is description for title', 'image' => 'img14.jpg'],
            ['category_id' => 3, 'title' => 'Title 15', 'description' => 'This is description for title', 'image' => 'img15.jpg'],
            ['category_id' => 1, 'title' => 'Title 16', 'description' => 'This is description for title', 'image' => 'img16.jpg'],
            ['category_id' => 2, 'title' => 'Title 17', 'description' => 'This is description for title', 'image' => 'img17.jpg'],
            ['category_id' => 3, 'title' => 'Title 18', 'description' => 'This is description for title', 'image' => 'img18.jpg'],
            ['category_id' => 1, 'title' => 'Title 19', 'description' => 'This is description for title', 'image' => 'img19.jpg'],
            ['category_id' => 2, 'title' => 'Title 20', 'description' => 'This is description for title', 'image' => 'img20.jpg'],
            ['category_id' => 3, 'title' => 'Title 21', 'description' => 'This is description for title', 'image' => 'img21.jpg'],
            ['category_id' => 1, 'title' => 'Title 22', 'description' => 'This is description for title', 'image' => 'img22.jpg'],
            ['category_id' => 2, 'title' => 'Title 23', 'description' => 'This is description for title', 'image' => 'img23.jpg'],
            ['category_id' => 3, 'title' => 'Title 24', 'description' => 'This is description for title', 'image' => 'img24.jpg'],
            ['category_id' => 1, 'title' => 'Title 25', 'description' => 'This is description for title', 'image' => 'img25.jpg'],
            ['category_id' => 2, 'title' => 'Title 26', 'description' => 'This is description for title', 'image' => 'img26.jpg'],
            // ['category_id' => 3, 'title' => 'Title 27', 'description' => 'This is description for title', 'image' => 'img27.jpg'],
        ];

        foreach ($items as $item) {
            Post::create($item);
        }
    }
}
