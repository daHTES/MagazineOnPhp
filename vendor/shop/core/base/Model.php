<?php

namespace shop\base;

use shop\Db;
use Valitron\Validator;

abstract class Model{

    // МАССИВ СВОЙТСТВ МОДЕЛИ
    public $attributes = [];
    public $errors = [];
    // правила валидации данных
    public $rules = [];

    // подключение базы данных
    public function __construct(){     
            Db::instance();
    }

    public function load($data){
        foreach($this->attributes as $name => $value){
            if(isset($data[$name])){
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function validate($data){
        $v = new Validator($data);
        $v->rules($this->rules);
        if($v->validate()){
            return true;
        }
        $this->errors = $v->errors();
        return false;
    }

    public function getErrors(){
        $errors = '<ul>';
        foreach($this->errors as $error){
            foreach($error as $item){
            $errors .= "<li>$item</li>";
        }
    }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

    
}


?>