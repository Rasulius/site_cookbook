<?php
//Модель вывода каталога
 class Application_Models_ViewRecipe
  {	  
	  function getRecipe($id)
	  { 
		 $connect = DbConn::getDbConn();
		 $sql = "SELECT * FROM Recipe WHERE `id`=1";
		 		 
		 $result = mysqli_query($connect, $sql);
		 
		 
		 if($row = mysqli_fetch_assoc($result))
		 {				
		
			$recipe=array(
				"id"=>$row['id'],
				"name"=>$row['name'],
				"description"=>$row['description']				
			);
			echo $row['id'];			
		  }		  
		  return $recipe; 
	  }
  } 

?>  
  