<?php
//Модель вывода каталога
 class Application_Models_Catalog
  {	  
	  function getList()
	  { 
         // получаем подключение
		 
		 $connect = Db::getInstance();
		 		
		 $sql = "SELECT * FROM dishes";
		 $result = mysqli_query($connect, $sql); 
	

	
		 while ($row = mysqli_fetch_assoc($result))
		 {		 
			
	 				 
			$сatalogItems[]=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"description"=>$row['image'],
				"url"=>$row['url']
			);					 
			
		  }	
		
		 return $сatalogItems; 
	  }
  } 
?>  
  