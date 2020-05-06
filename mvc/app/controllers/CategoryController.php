<?php
namespace App\Controllers;
use App\Models\Category;
class CategoryController{

    public function categories(){
        $categories = Category::all();
        include_once './app/views/categories.php';
    }
    public function addCate(){
      return "Thêm sản phẩm ở đây";
    }
}

?>