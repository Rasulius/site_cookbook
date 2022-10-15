<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
		function getList()
		{ 
			
			// Вызов singleton класса		
			$connect = DbConn::getDbConn();
			// получаем типы рецептов
			$sql = "SELECT * FROM category";
		
			$result = mysqli_query($connect, $sql); 
	
			while ($row = mysqli_fetch_assoc($result))
			{		 
				$сatalogItems[]=array(
					"id"=>$row['id'],
					"name"=>$row['name'],
					"description"=>$row['description']
				);
			}	
		
			return $сatalogItems; 
		}
	} 
?>  
  