<?php
//контролер обрабатывает данные каталога
  class application_controllers_viewrecipe extends Lib_BaseController
  {
     function index()
	 {
		 echo "view recipe";
	     $model=new Application_Models_ViewRecipe;
		 $recipe = $model->getRecipe(1);	
		 $this->recipe=$recipe;		
	 }
  }
?>