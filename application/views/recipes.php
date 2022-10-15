<!-- h1>Рецепты</h1 -->
<div class="container">
	<div class="row g-4">

<?php
//представление каталога (страница каталога)

		for ($s = 1; $s <= 10; $s++) {			
			foreach($Recipes as $item)
			{

		?>		
				
		  <div class="col-sm">
			<div class="card h-100" style="width: 18rem;">
				<img class="rounded float-start" src="/images/<?=$item["id"]?>.jpg" alt="Card image cap" height = "200">
				<div class="card-body">
					<h5 class="card-title"><?=$item["name"]?></h5>
					<p class="card-text" ><?=$item["description"]?></p>					
				</div>
				<div class="card-footer">
					<a href="viewrecipe?type=1" class="btn btn-primary">Просмотреть</a>
				</div>
				
			</div>
		  </div>	
		<?php
			$i++;					
			}
		}			
		?>
	</div>	
</div>