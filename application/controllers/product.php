<?php
//контролер обрабатывает данные каталога
  class Application_Controllers_Product extends Lib_BaseController
  {
     function index()
	 {
		 echo "сработал контролер prodfuct";		 
	     $model=new Application_Models_Product;
		 $product = $model->getProduct($_REQUEST['id']);	
		 $this->product=$product;
		
	 }
  }
?>