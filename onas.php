<?php
/*
Template Name: O nas
Template Post Type: post, page, product
*/
?>



<?php get_header(); ?>

	<div class="container">	
		<div class="row justify-content-center">
				<div class="col" style="display: contents;">
					<div class="d-flex justify-content-center">
						<a class="navbar-brand" href="http://localhost/mysitewp/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="160" height="135" alt=""></a>
					</div>
				</div>

				<div class="col" style="display: contents;">
					<?php get_search_form(); ?>
				</div>

		
			<div class="col " style="display: contents;">
				<div class="call-form mt-5 ml-3 mb-3">
					
						<img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" class="ml-3" alt="">
						<b>+7 999 666 99 66</b>
						<button class="btn btn-secondary d-block mt-1" style="background-color:#5E3719; color: #B2A496;"  onmouseover="this.style.backgroundColor='#886E58'; this.style.color='rgba(255,255,255,.75)'" onmouseout="this.style.backgroundColor='#5E3719'; this.style.color='#B2A496'" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="">Ответим на Ваш вопрос</button>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						    <div class="modal-content bg-custom">

								<div class="row">
									<div class="col col-sm-offset-3 ">
									    <div class="well" style="text-align: center; color: #9D8977">
									    <h3>Напишите нам</h3>
									   									    
									    <div class="row d-flex justify-content-center">

										<form action="index.php" class="forma" method="post" > 
											
										    <div class="form-group mw-100 col-sm-6">

									        	<label for="name" class="h4">Ваше имя</label>
									        	<input type="text" name="name" class="form-control" id="name" placeholder="Введите имя" required data-error="Заполните это поле.">
									    	</div>
									    	<div class="form-group mw-100 col-sm-6">
									        	<label for="email" class="h4">E-mail</label>
									    		<input name="email" type="email" class="form-control" id="email" placeholder="Введите e-mail" required data-error="Заполните это поле.">
									        </div>
									        <div class="help-block with-errors"></div>

									        <div class="form-group mw-100 col-sm-6">
									        	<label for="message" class="h4 ">Ваш номер</label>
									        	<input type="tel" name="phone" class="form-control" id="tel" placeholder="Введите номер телефона" required data-error="Заполните это поле.">
									    	</div>
											<div class="form-group">
										        <label for="message" class="h4 ">Ваш вопрос или предложение</label>
									        	<textarea name="message" id="message" class="form-control" rows="5" placeholder="Ваше сообщение" required></textarea>
									        	<div class="help-block with-errors"></div>
												<input type="reset" value="Очистить" class="btn buy btn-lg mt-2">
									    	
										        <input type="submit" value="Отправить"class="btn buy btn-lg mt-2 ml-3">
										    </div>   
										</form>
											
									    </div>

									    </div>
									</div>
								</div>
						    </div>
						</div>
						</div>
					
				</div>
			</div>
		</div>
	</div>

<?php get_sidebar() ?>

	<h2><p id="delivery" class="text-center mt-5">О нас</p></h2>
	<div class="About d-flex justify-content-center"><p class="text-left w-50 mt-2" >Наша компания – признанный лидер в изготовлении качественной кондитерской продукции из натуральных составляющих. Все продукты свежие и не содержат ГМО. Мы выпекаем сладкие шедевры без добавления усилителей вкуса и синтетических красителей, что очень важно, если нужно заказать торт ребенку. Мы изготавливаем торты на заказ в Нижнем Новгороде уже более 5 лет. Имеем опыт сотрудничества с крупными компаниями. Нашими услугами воспользовались такие гиганты, как Леруа Мерлен и Мегастрой. Мы выполняем торты на заказ любой сложности и предназначения. В нашем ассортименте Вы найдете домашние сливочные торты, изделия из мастики, чизкейки, капкейки, пряники.
	<br>
	<br>
	Преимущества нашей компании:
	<br>
	Выполняем заказы тортов на любые торжества (свадебный торт, торты на День Рождения, юбилей, детский торт, возможны варианты оформления торта для мальчика и для девочки). <br>	
	Изготовление в кратчайшие сроки. <br>
	Берем срочные заказы (за 1 день до торжественной даты). <br>
	Натуральные компоненты делают продукцию безопасной даже для маленьких детей. <br>
	Изготавливаем кондитерские изделия под заказ, а также уникальные десерты с фотопечатью.
	Разумное соотношение цены и качества (наш девиз: качественно и недорого). <br>
	 <br>
	Наши кондитеры с ювелирной точностью исполнят любой Ваш дизайнерский замысел. Формы тортов четкие, а элементы декора выполнены с огромным мастерством и любовью. Кроме того, мы не идем путем больших кондитерских корпораций, которые удешевляют производство посредством использования искусственных заменителей. Это снижает цену, но вместе с ней снижается и вкус. Наши торты на заказ в Нижнем Новгороде – вкусные, натуральные, с большим количеством начинки произведут настоящий фурор вкуса на любом празднике. А кондитерский шедевр с фотографией станет необычайно приятным подарком для виновника торжества. <br>
	<br>

	Заказать торт в Нижнем Новгороде у нашей компании очень просто. Вы можете оформить заказ в телефонном режиме, или оставить заявку на сайте. Можно прислать фото желаемого изделия, или выбрать желаемый торт из нашего каталога.</p>
	</div>

<?php the_content(); ?>


<?php get_footer(); ?>