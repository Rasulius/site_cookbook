<h1>Каталог</h1>
<?php
//представление каталога (страница каталога)
	foreach($Items as $item)
	{
			
			//echo "Это тест";
		   if($i%3==0): ?>
			<div style="clear:both;"></div>
			<?php endif;?>
			
			<div class="product">
				<h1>
				<?=$item["name"]?>
				</h1>
							
				
				<div class="product_image">
					<a href="/product/<?=$item["url"]?>">
					<image src="/images/<?=$item["id"]?>.jpg" /></a>
				</div>				
				</p>				
				
								
				<div class="product_buy">
				<a href="/recipes?type=1">Просмотреть</a>
				</div>
				
				
			</div> 
			<?php
			
			$i++;	
			
			
			
	}
	
?>