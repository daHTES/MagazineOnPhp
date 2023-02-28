<?php

namespace app\controllers;

use shop\App;
use shop\Cache;

class MainController extends AppController{

    public function indexAction(){
        $brands = \R::find('brand', 'LIMIT 3');
        $hits = \R::find('product', "hit='1' AND status = '1'");
        $this->setMeta('Главная страница', 'Описание', 'Ключи');
        $this->set(compact('brands', 'hits'));
    }
}



?>