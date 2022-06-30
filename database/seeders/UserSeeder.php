<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name'=>'Gayu', 'email'=>'gayu@gmail.com', 'password'=> Hash::make('gayuganz')],
            ['name'=>'Admin', 'email'=>'admin@gmail.com', 'password'=> Hash::make('admin321')],
            ['name'=>'User', 'email'=>'user@gmail.com', 'password'=> Hash::make('user321')],
        ];

        foreach ($items as $item) {
            User::create ($item);
        }
    }
}
