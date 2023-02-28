<?php 

namespace shop;

use Exception;

class Db{

    use TSingleton;
    

    protected function __construct(){
        $db = require_once CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['password']);
        if(!\R::testConnection()){
            throw new Exception("Не удалось подключиться к базе {$db['dsn']} ", 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }
    }

}


?>