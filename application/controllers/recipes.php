<?php
//контролер обрабатывает обрабатывает все рецепты для отображения на странице
  class Application_Controllers_Recipes extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Recipes;
		 $Recipes = $model->getRecipes($_REQUEST['type']);	
		 $this->Recipes=$Recipes;
		 		
	 }
  }

?>