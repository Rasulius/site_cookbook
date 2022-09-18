<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждения

spl_autoload_register('myAutoloader');

 function myAutoloader($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает имя класска получая из него путь
    include_once($path .".php");//подключает php файл по полученному пути	
 } 

?>