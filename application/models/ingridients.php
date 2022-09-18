<?php

/*
	Модель просмотра рецепта
	
*/

 class Application_Models_Ingridients
  {	  
      // Получить рецепты по типу
  
	function getRecipes($id)
	{ 
		$sql = "SELECT * FROM recipes WHERE id=$id;";
		
		//echo $sql;		
		 
		$connect = Db::getInstance();
		
		 
		$result = mysqli_query($connect, $sql); 
		
		
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