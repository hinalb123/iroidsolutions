<?php

use App\Models\Version;
use App\Models\BlogCategory;

function CacheVersion() {
    $admin = Version::select('version')->first();
    return $admin->version;
}

function BlogCategoryFilterName(){
    $categories = BlogCategory::pluck('category')->all();

    $categoryName = '';
    foreach($categories as $category){
        $categoryName  .= ".".strtolower($category).", ";
    }

    if($categoryName != ''){
        $categoryName = rtrim($categoryName, ', ');
    }

    return $categoryName;

}
?>
