<h1>Рецепты</h1>
<?php
//представление каталога рецептов

	

	foreach($Recipes as $recipe)
	{
		
		
			// дробим по 3 рецепта на страницу	
			if($i%3==0): ?> 			
				<div style="clear:both;"></div>			
				<?php endif;?>
				
				<div class="recipe">
					<h1><?=$recipe["name"]?></h1> <!--выводим наименование рецепта-->
				
				
					<div class="product_image">
						<a href="/recipe_detail/<?=$recipe["id"]?>"><image src="/images/<?=$recipe["image"]?>" /></a>
					</div>
					
					</p>	
				
								
				<div class="product_buy">
				<a href="/ingridients?type=1">Просмотреть</a>
				</div>
				
				
			</div> 
			 <?php
			$i++;
			
			
			
			
	}
	
?>