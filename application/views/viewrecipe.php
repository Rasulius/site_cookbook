<!-- h1>Весь рецепт</h1-->


<main class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="row-md-6 px-0">
		<h1 class="display-4 fst-italic"><?=$recipe['name']?></h1>
        <p><img src="/images/<?=$recipe['id']?>.jpg"></p>		        
        
    </div>
	</div>



  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Описание рецепта:
      </h3>

      <article class="blog-post">
        <p class="blog-post-meta">1 января 2021 года <a href="#">Расуль</a></p>
		<p><?=$recipe['description']?></p>      
      
        
        <h3>Ингридиенты</h3>
        <p>Это дополнительный контент-заполнитель абзаца. Это немного более короткая версия другого часто повторяющегося основного текста, используемого повсюду. Это пример неупорядоченного списка:</p>
        <ul>
          <li>Мясо (либо мякоть с небольшим жирком, либо мозговая косточка с мясом) — 400 г</li>
          <li>Картофель (зависит от кастрюли. У меня средняя) — 5 шт</li>          
		   <li>Свекла — 3 шт</li>
			 <li>Морковь — 3 шт</li>
			 <li>Капуста белокочанная / Капустa — 1 вилок</li>
			 <li>Помидор (большой) — 1 шт</li>
			 <li>Уксус — 2 ст. л.</li>
			 <li>Сахар — 1 ст. л.</li>
			 <li>Соль</li>
			 <li>Укроп</li>
			 <li>Чеснок</li>		  
		  
        </ul>       
		
	<!-- Расщет пищевой ценности -->	
		<h3>Пищевая и энергетическая ценность:</h3>
        <p>Готового блюда:</p>
        <table class="table">
          <thead>
            <tr>
              <th>Ккал</th>
              <th>Белки</th>
              <th>Жиры</th>
			  <th>Углеводы</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2166.9</td>
              <td>51.9 г	</td>
              <td>3 г	</td>
			  <td>284 г</td>
            </tr>            
          </tbody>
          
        </table>
		
		<p>Порции:</p>
		<table class="table">
          <thead>
            <tr>
              <th>Ккал</th>
              <th>Белки</th>
              <th>Жиры</th>
			  <th>Углеводы</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2166.9</td>
              <td>51.9 г	</td>
              <td>3 г	</td>
			  <td>284 г</td>
            </tr>            
          </tbody>
		</table>  
		  <p>100г Блюда:</p>
		<table class="table">
          <thead>
            <tr>
              <th>Ккал</th>
              <th>Белки</th>
              <th>Жиры</th>
			  <th>Углеводы</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2166.9</td>
              <td>51.9 г	</td>
              <td>3 г	</td>
			  <td>284 г</td>
            </tr>            
          </tbody>
         </table>
		 
		 <!-- Рецепт по шагам -->
		 
		 <h3>По шаговое приготовление</h3>		 
		 
		 <!-- 1 step -->
		 
		 <div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
				<img src="/images/<?=$recipe['id']?>.jpg" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Заголовок карточки</h5>
						<p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
						<p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
					</div>
				</div>
			</div>
		</div>
		
		<!-- 2 step -->
		
		 <div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
				<img src="/images/<?=$recipe['id']?>.jpg" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Заголовок карточки</h5>
						<p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
						<p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- 3 step -->
		
		 <div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
				<img src="/images/<?=$recipe['id']?>.jpg" class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Заголовок карточки</h5>
						<p class="card-text">Это более широкая карта с вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту. Этот контент немного длиннее.</p>
						<p class="card-text"><small class="text-muted">Последнее обновление 3 мин. назад</small></p>
					</div>
				</div>
			</div>
		</div>
		

      <!-- nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Старее</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Новее</a>
      </nav-->

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">О нас</h4>
          <p class="mb-0">Настройте этот раздел, чтобы рассказать вашим посетителям немного о вашей публикации, авторах, контенте или о чем-то еще. Все зависит от вас.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Архивы</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">Март 2021</a></li>
            <li><a href="#">Февраль 2021</a></li>
            <li><a href="#">Январь 2021</a></li>
            <li><a href="#">Декабрь 2020</a></li>
            <li><a href="#">Ноябрь 2020</a></li>
            <li><a href="#">Октябрь 2020</a></li>
            <li><a href="#">Сентябрь 2020</a></li>
            <li><a href="#">Август 2020</a></li>
            <li><a href="#">Июль 2020</a></li>
            <li><a href="#">Июнь 2020</a></li>
            <li><a href="#">Май 2020</a></li>
            <li><a href="#">Апрель 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">В другом месте</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

	

</main>

<footer class="blog-footer">  
  <p>
    <a href="#">Вернуться наверх</a>
  </p>
</footer>


    
  

