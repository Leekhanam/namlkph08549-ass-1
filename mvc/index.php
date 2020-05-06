<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once './app/controllers/HomeController.php';
require_once './app/controllers/ProductController.php';
require_once './app/controllers/CategoryController.php';
require_once './app/models/BaseModel.php';
require_once './app/models/Product.php';
require_once './app/models/Category.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Models\Category;

switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    
    case 'detail':
        $ctr = new HomeController();
        echo $ctr->detail();
        break;
    
    case 'categories':
        $ctr = new CategoryController();    
        echo $ctr->categories();
        break;
    case 'categories/add':
        $ctr = new CategoryController();
        echo $ctr ->addCate();
    break;
    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addForm();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>