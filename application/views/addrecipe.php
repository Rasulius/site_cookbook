<h1>Добавление рецепта</h1>	

<script>
      // Wait until the window finishes loaded before executing any script
      window.onload = function() {

        // Initialize the activityNumber
        var activityNumber = 3;

        // Select the add_activity button
        var addButton = document.getElementById("add_activity");

        // Select the table element
        var tracklistTable = document.getElementById("form-group");
		var ul = document.getElementById("pika");

        // Attach handler to the button click event
        addButton.onclick = function() {
			//alert('Hello Rasul');
			var li = document.createElement("li");
			li.className = "list-group-item list-group-item-primary";
			li.textContent = "dddd";
			ul.appendChild(li);
        }

      }

 </script>

<form>
  
  <div class="form-group">
    <label for="exampleFormControlInput1">Наименование рецепта</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Хенкали по грузинский">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Тип блюда</label>
    <select class="form-control" id="exampleFormControlSelect1">      
	  <?php 
		foreach($RecipeTypes as $item){
	  ?>	
		 <option><?=$item["name"]?><option>	
	  <?php
	    } 
	  ?>      
    </select>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Описание рецепта</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <div class="mb-3">
    <label for="formFile" class="form-label">Выберите фотографию рецепта</label>
    <input class="form-control" type="file" id="formFile">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlInput2">Ингридиент</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Хенкали по грузинский">
  </div>
  
  <button id="add_activity">Добавить ингридиент</button>
  <ul class="list-group" id="pika">
  <li class="list-group-item">Dapibus ac facilisis in</li>
  <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
  <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
  <li class="list-group-item list-group-item-success">This is a success list group item</li>
  <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
  <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
  <li class="list-group-item list-group-item-info">This is a info list group item</li>
  <li class="list-group-item list-group-item-light">This is a light list group item</li>
  <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
</ul>
  
  
</form>

