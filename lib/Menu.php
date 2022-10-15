<?php
//класс меню, возвращает html код для меню. 
//Экземпляр класса может быть вызван лишь один раз.
//Реализован патерн Singleton
  class Lib_Menu
  {
	public $MenuItem = array("Все рецепты"=>"/catalog", "Добавить"=>"/addrecipe", "Вход"=>"/enter");     
   
	protected static $instance; //(экземпляр объекта) Защищаем от создания через new Singleton
	private function __construct() {}	
	public static function getInstance() {//Возвращает единственный экземпляр класса
		if (!is_object(self::$instance)) self::$instance = new self;
		return self::$instance;
    }
	 
	public function  getMenu()
	 {	
	   $print="<ul>";	 
       foreach($this->MenuItem as $name=>$item ){
	    if ($name=="Вход" && $_SESSION["User"]!=""){
				$print.='<li><a href="/enter">'.$_SESSION["User"].'</a> [ <a href="/enter?out=1"><span style="font-size:10px">выйти</span></a> ]</li>';
			}			
		else $print.='<li><a href="'.$item.'">'.$name.'</a></li>';
	   }
	   $print.="</ul>";	
	   return  $print;		 
	 }
	 
	 
	public function getMenuH(){
		?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
    <a class="navbar-brand" href="#">Домашняя</a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
      <span class="navbar-toggler-icon"></span>
    </button >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <?php
			 foreach($this->MenuItem as $name=>$item ){
				$print = '<li class="nav-item active">
				<a class="nav-link" href="'.$item.'">'.$name.'<span class="sr-only"></span></a>
				</li>';		 								
				echo $print;
			}			
			
          ?>						             
      </ul>	  
      
    </div>
  </div>
</nav>

<?php
		
		
		
	} 
	 
 }
?>