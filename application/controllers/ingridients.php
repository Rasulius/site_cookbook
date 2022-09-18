<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Ingridients extends Lib_BaseController
  {
     function index()
	 {   
		 echo "hello bibzian";
	     $model=new Application_Models_Ingridients;
		 $Recipes = $model->getRecipes($_REQUEST['type']);	
		 $this->Recipes=$Recipes;
		 		
	 }
  }

?>