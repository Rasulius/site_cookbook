<?php
//Модель вывода каталога
 class Application_Models_Recipes
  {	  
		function getRecepies()
		{ 
			
			// Вызов singleton класса		
			$connect = DbConn::getDbConn();
			// получаем типы рецептов
			$sql = "SELECT * FROM recipe";
		
			$result = mysqli_query($connect, $sql); 
	
			while ($row = mysqli_fetch_assoc($result))
			{		 
				$recipes[]=array(
					"id"=>$row['id'],
					"name"=>$row['name'],
					"description"=>$row['description']
				);
			}	
		
			return $recipes; 
		}
	} 
?>  
  