<?php
// константы для БД
define("DB_HOST",'');   // ip базы данных
define("DB_ADMIN",'');  // логин админа БД
define("DB_PASS",'');   // пароь админа БД
define("DB_USER",'');   // имя пользователя БД


// Подключаем Smarty
require 'C:/Development/Projects/browser/query/mysmarty/smarty/Smarty.class.php';

//Объявляем класс-наследник с именем Smarty_Page
Class Smarty_Page extends Smarty
{
    Public function _construct()
    {   //Конструктор класса Smarty
        $this->Smarty();
        $this->template_dir="C:/Development/Projects/browser/query/templates";
        $this->compile_dir="C:/Development/Projects/browser/query/templates_c/";
        $this->config_dir="C:/Development/Projects/browser/query/configs/";
        $this->cache_dir="C:/Development/Projects/browser/query/cache/";
    }
}
?>