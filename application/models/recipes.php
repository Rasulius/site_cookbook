<?php

/*
	Модель вывода рецептов
	получает список рецептов по типу, 
*/

 class Application_Models_Recipes
  {	  
      // Получить рецепты по типу
  
	function getRecipes($type)
	{ 
		$sql = "SELECT * FROM recipes WHERE type=$type";
		
		//echo $sql;		
		 
		$connect = Db::getInstance();
		
		 
		$result = mysqli_query($connect, $sql); 
		//echo $result;
		
		while ($row = mysqli_fetch_assoc($result))
		{		 
			
	 				 
			$recipes[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"image"=>$row['image'],
				"type_id"=>$row['type'],
				"url"=>$row['url']
			);					 
			
		}		
		
		return $recipes; 
	  }
  } 
 /*
  Автор: Расуль Шагимарданов 2022.
  e-mail: hotgang@mail.ru  
*/
?>  
  