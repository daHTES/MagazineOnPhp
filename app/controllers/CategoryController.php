<?php

namespace app\controllers;

use app\models\BreadCrumbs;
use app\models\Category;

class CategoryController extends AppController{

    public function viewAction(){
        $alias  = $this->route['alias'];
        $category = \R::findOne('category', 'alias = ?', [$alias]);
        if(!$category){
            throw new \Exception('Страница не найдена', 404);
        }
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        
        // хлебные
        $breadcrumbs = BreadCrumbs::getBreadCrumbs($category->id);


        $cat_model = new Category();
        $ids = $cat_model->getIds($category->id);
        $ids = !$ids ? $category->id : $ids . $category->id;

        $products = \R::find('product', "category_id IN ($ids)");
        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs'));
    }

}

?>