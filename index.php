<?php

error_reporting(E_ALL);
require_once "./config.php"; //файл настроек
require_once ("connection.php");
//-------------------------------------
$router=new Lib_Application; //создаем объект, который будет искать нуджные контролеры
$member=$router->Run();//Начинаем поиск нужного контролера
$member['init']=0;
foreach ($member as $key => $value)
{
	$$key= $value;
}
	
//==================подключаем шаблон сайта===========//	
// Вывод шапки
require_once "./template/header.php";
// Вывод контента
 $view=$router->getView(); 
 //echo $view;
	
 include ($view); 
// Вывод подвала
require_once "./template/footer.php";