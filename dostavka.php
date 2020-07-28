<?php
/*
Template Name: Dostavka
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

	<h2><p class="text-center mt-5">Доставка</p></h2>
	<div class="About d-flex justify-content-center"><p class="text-left w-50 mt-2" >

	Доставка производится в удобное для Вас время с 09:00 до 21:00 ч. Возможна доставка во внерабочее время (оговаривается отдельно). Стоимость доставки в Нижном Новгороде 200-500 руб, за город – от 20 руб/км. <br>
	Заказ считается принятым после подтверждения менеджером всех деталей, присвоения порядкового номера и внесения предоплаты в размере 50% от стоимости всего заказа. <br>
	</p>
	</div>
	
	<h2><p class="text-center mt-5">Оплата</p></h2>
	<div class="About d-flex justify-content-center"><p class="text-left w-50 mt-2" >
	Оплата путем перевода на банковскую карту <br>
	произвести перевод по номеру телефона, привязанному к банковской карте <br>
	оплатить выставленный счет через банк <br>
	с помощью платежной системы Киви <br>
	<br>
	Предоплата может быть внесена по безналичному расчету как от физического, так и от юридического лица. <br>
	Возможность внесения правок во внешний вид торта менее, чем за 3 дня до выдачи заказа всегда уточняйте у менеджера. <br>
	При отмене заказа клиентом менее, чем за 3 дня, предоплата не возвращается (Ваш заказ включается в план производства).
	</p>
	</div>

<?php the_content(); ?>


<?php get_footer(); ?>