<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
         $categories =[
        ['id' => 1,'name'=> 'iPhone' ],
        ['id' => 2,'name'=> 'Android'],
        ['id' => 3,'name'=> 'Website'],
        ['id' => 4, 'name'=> 'UI/UX Design'],
    ];
    Category::insert($categories);
    }
}
