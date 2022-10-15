<!-- h1>Каталог</h1 -->
<div class="container">
  <div class="row g-4">
<?php
//представление каталога (страница каталога) 

foreach($Items as $item)
		{
			?>
			
  <div class="col">
	<div class="card h-100" style="width: 18rem;">
		<img class="rounded float-start" src="/images/<?=$item["id"]?>.jpg" alt="Card image cap" height = "200">
		<div class="card-body">			
			<h5 class="card-title"><?=$item["name"]?></h5>
			<p class="card-text"><?=$item["description"]?></p>		
		</div>
		<div class="card-footer">
			<a href="recipes?type=1" class="btn btn-primary">Просмотреть</a>
		</div>
	</div>
  </div>	
  
	<?php
	$i++;
	
		
	}
	
?>

</div>	
</div>