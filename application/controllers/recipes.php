<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Recipes extends Lib_BaseController
  {
     function index()
	 {
	     $model=new Application_Models_Recipes;
		 $Recipes = $model->getRecepies();	
		 $this->Recipes=$Recipes;		
	 }
  }
?>