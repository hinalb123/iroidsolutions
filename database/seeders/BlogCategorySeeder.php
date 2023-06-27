<?php

namespace Database\Seeders;

use App\Models\blogcategory;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category =[
            ['id' => 1,'category'=> 'development' ],
            ['id' => 2,'category'=> 'design'],
            ['id' => 3,'category'=> 'process'],
            ['id' => 4, 'category'=> 'technology'],
        ];
        blogcategory::insert($category);
    }
}
