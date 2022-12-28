<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => 'tony',
        'age' => 35,
        'nationality' => 'American'
        ];
        Author::create($param);
        $param = [
        'name' => 'jack',
        'age' => 20,
        'nationality' => 'British'
        ];
        Author::create($param);
        $param = [
        'name' => 'sara',
        'age' => 45,
        'nationality' => 'Egyptian'
        ];
        Author::create($param);
        $param = [
        'name' => 'saly',
        'age' => 31,
        'nationality' => 'Chinese'
        ];
        Author::create($param);
    }
}
