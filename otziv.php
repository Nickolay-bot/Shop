<?php
/*
Template Name: Otziv
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



<?php the_content(); ?>


	<h2 id="review" class="text-center mt-5">Отзывы</h2>
	<div class="card col-md-6 mt-5 mb-5">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
			<div class="w-100 carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<div class="row">
							<div class="col-sm-3">
							<img src="https://bootstraptema.ru/snippets/icons/2016/mia/1.png" alt="" style="max-width: 130px;	max-height: 130px;" class="rounded-circle img-fluid"/>
							</div>
							<div class="col-sm-9 color-custom">
								Заказал тут тортик раз - закажешь ещё раз. А ещё я купил парик, но это уже совсем другая история.
								<div class="review-author">Джейсон Стейтем
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-caption">
						<div class="row">
							<div class="col-sm-3">
							<img src="https://bootstraptema.ru/snippets/icons/2016/mia/3.png" alt="" style="max-width: 130px;	max-height: 130px;" class="rounded-circle img-fluid">
							</div>
							<div class="col-sm-9">
								Отличный уровень сервиса. Доставили посылку за пару дней. Компания официально зарегистрирована, а это значит, что все налоги будут уплачены.
								<div class="review-author">Владимир Пудель
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="carousel-caption">
						<div class="row">
							<div class="col-sm-3">
							<img src="https://bootstraptema.ru/snippets/icons/2016/mia/5.png" alt="" style="max-width: 130px;	max-height: 130px;" class="rounded-circle img-fluid">
							</div>
							<div class="col-sm-9">
								Очень понравился тортик "Трюфель". Посылка пришла быстро. Заказывыл другу Владимиру в подарок. Теперь хочу для себя.
								<div class="review-author">Дмитрий Носков
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="float-right navi">
				<a class="" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon ico" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>


<?php get_footer(); ?>