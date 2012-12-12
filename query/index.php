<?php
    include "common.php";   //константы и Smarty

    $smarty = new Smarty_Page; //Создаём объект
    $smarty->assign("TITLE","DataBase"); // 3аголовок


    $link=mysqli_connect(DB_HOST,DB_ADMIN,DB_PASS,DB_USER); //подкл. к БД

    mysqli_query($link, 'SET NAMES utf8'); //кодировка, ожидаемая от БД
    $query="select ci.name as city, co.name as country, re.title as region
            from us_city ci join us_regions re join us_country  co
            ON ci.region_id=re.id and re.country_id=co.id;"; //запрос
    $result=mysqli_query($link,$query);

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) // пока будет присваивание
    {
        $arr[]=$row; // новый эл-т массива получает значения
    }
    mysqli_close($link);



    $smarty->assign("arr",$arr); //Передать в смарти массив
    $smarty->display("main.tpl"); // отобразить шаблон main.tpl
?>
