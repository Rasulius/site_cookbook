<?php
  class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
	  
		
      if (!isset(self::$instance)) {
        define('HOST', 'localhost'); 		//сервер
		define('USER', 'root'); 			//пользователь
		define('PASSWORD', ''); 			//пароль
		define('NAME_BD', 'LifeExampleShop');		//база
 
		$instance = mysqli_connect(HOST, USER, PASSWORD, NAME_BD)or die("Невозможно установить соединение c базой данных".mysql_error( )); 
		
		mysqli_query($instance, 'SET names "utf8"');   //база устанавливаем кодировку данных в базе
		
		self::$instance = $instance;
      }
      return self::$instance;
    }
  }
?>