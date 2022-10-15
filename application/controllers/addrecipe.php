<?php
//контролер обрабатывает данные каталога
  class application_controllers_addrecipe extends Lib_BaseController
  {
     function index()
	 {
		 /*Получаем список типов рецептов*/		
		 $model=new Application_Models_AddRecipe;
		 $RecipeTypes = $model->getRecipeCategory();	
		 $this->RecipeTypes=$RecipeTypes;
	 }
  }
?>