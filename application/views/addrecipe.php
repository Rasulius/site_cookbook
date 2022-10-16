<h1>Добавление рецепта</h1>
<br/>
<?if($error){ echo $error;}?><br/>
<?
/*
INSERT INTO `recipe` (`id`, `name`, `description`, `instructions`, `image_file_name`) VALUES
	(1, 'Вареное Яйцо', 'Одно варенное яйцо', 'Добавьте яцо в холодную воду и ожидайте приготовления', '1.png'),
	(2, 'Яичница в перцах', 'Оригинальная идея для завтрака - яичница в перце.', 'Приготовить все ингредиенты. Перцы вымыть.cookbook  Нарезать перец колечками толщиной 1,5 см и очистить от семян и перегородок. ', '2.png');

*/

if($dislpay_form){?>
<form class="row g-3 " action="" method="post">
  
	<div class="container px-4 gx-5">
	
		<!-- Название рецепта --> 
		<div class="col-md-6">
			<label for="exampleFormControlInput1">Наименование рецепта</label>
			<input type="" class="form-control" id="exampleFormControlInput1" placeholder="Хенкали по грузинский">
		</div>
		<!-- выбор типа рецепта --> 
		<div class="col-md-6">
			<label for="inputState" class="form-label">тип рецепта</label>
			
			<select id="inputState" class="form-select">			
			 <?php				 
			 foreach($RecipeTypes as $item){	?>	
			 <option><?=$item["name"]?><option>	
			 <?php    } ?>     
			</select>
			
		</div>	
		
		<!-- Описание --> 
		
		<div class="col-md-6">
		<label for="inputAddress" class="form-label">Описание</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Хенкали по грузинский"></textarea>	
		</div>
		
		<!-- Инструкция по приготовлению --> 
		
		<div class="col-md-6">
			<label for="exampleFormControlTextarea1">Инструкция по приготовлению</label>
			<textarea class="form-control" id="exampleFormControlTextarea2" rows="3" placeholder="Хенкали по грузинский"></textarea>			
		</div>		
		
		<!-- Кнопка добавить --> 
		
		<div class="col-md-6">		    
			<br/>
			<input type="submit" name="to_order" value="Добавить рецепт">
		</div>
		
		
	 </div>
  


  
  
  

</form>
<?}
else{ echo $message; };
?>
