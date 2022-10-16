<?php
  class application_controllers_addrecipe extends Lib_BaseController
  {  
    function index()
	 {		
		    /*Получаем список типов рецептов*/		
		  $model=new Application_Models_AddRecipe;
		  $RecipeTypes = $model->getRecipeCategory();	
	      $this->RecipeTypes=$RecipeTypes;
	 
				
		   $this->dislpay_form = true; // показывать форму ввода данных
			if(isset($_REQUEST["to_order"])){  // если пришли данные с формы
				
				echo "попытка добавить";
				//$error=$model->isValidData($_REQUEST);  //проверяем на корректность вода
				/*if($error)$this->error=$error; // если есть ошиби заносим их в переменную 
				else{			
					//если ошибок нет, то добавляем заказ в БД
					$order_id=$model->addOrder();
					Lib_SmalCart::getInstance()->setCartData();// пересчитываем маленькую корзину
					header('Location: /order?thanks='.$order_id);
					exit;
				}*/
			}
			
			if(isset($_REQUEST["thanks"])){
			   //формируем сообщение 
					//$this->message="Ваша заявка <strong>№ ".$_REQUEST["thanks"]."</strong> принята";
					//$this->dislpay_form = false;//  форму ввода данных больше не покзываем
					
			}
	 }
  }

?>