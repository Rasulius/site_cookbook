<?php
Error_Reporting(E_ALL & ~E_NOTICE);//не выводить предупреждения

spl_autoload_register('myAutoloader');

 function myAutoloader($class_name) //автоматическая загрузка кслассов
 {
    $path=str_replace("_", "/", $class_name);//разбивает имя класска получая из него путь
    include_once($path .".php");//подключает php файл по полученному пути	
 }
 //константы для подключения к базе данных
 define('HOST', '127.0.0.1'); 		//сервер
 define('USER', 'root'); 			//пользователь
 define('PASSWORD', '3kmzghj3z'); 			//пароль
 define('NAME_BD', 'cookbook');		//база
 $connect = mysqli_connect(HOST, USER, PASSWORD, NAME_BD)or die("Невозможно установить соединение c базой данных".mysql_error( ));
 
 //mysqli_query($connect, 'SET names "utf8"');   //база устанавливаем кодировку данных в базе


/*
  Автор: Авдеев Марк.
  e-mail: mark-avdeev@mail.ru
  blog: lifeexample.ru
*/
?>