<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name'=>'Technology', 'description'=>'This is description for Technology'],
            ['name'=>'Education', 'description'=>'This is description for Education']
        ];

        foreach($items as $item){
            Category::create($item);
        }
    }
}
