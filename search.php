<?php get_header(); ?>

	<div class="container">	
		<div class="row justify-content-center">
				<div class="col" style="display: contents;">
					<div class="d-flex justify-content-center">
						<a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="160" height="135" alt=""></a>
					</div>
				</div>

				<div class="col" style="display: contents;">
					<?php get_search_form(); ?>
				</div>

		
			<div class="col " style="display: contents;">
				<div class="call-form mt-5 ml-3 mb-3">
					
						<img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" class="ml-3" alt="">
						<b>+7 999 666 99 66</b>
						<button class="btn btn-secondary d-block mt-1"  onmouseover="this.style.backgroundColor='#886E58'; this.style.color='rgba(255,255,255,.75)'" onmouseout="this.style.backgroundColor='#5E3719'; this.style.color='#B2A496'" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="">Ответим на Ваш вопрос</button>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
						    <div class="modal-content bg-custom">

								<div class="row">
									<div class="col col-sm-offset-3 ">
									    <div class="well" style="text-align: center; color: #9D8977">
									    <h3>Напишите нам</h3>
									   									    
									    <div class="row d-flex justify-content-center">

										<form action="index.php" method="post">
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

										        <input type="submit" value="Отправить" class="btn  btn-lg mt-2 ">
										        
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





	<div class="container">
		<div class=" d-flex justify-content-center" >

			<nav class="dropdown-menu-group ">
				<div class="btn-group collapse navbar-collapse" role="group" aria-label="Button group with nested dropdown">

					<ul class="nav dnav-pills flex-column flex-sm-row list-unstyled mr-auto ">
						
						<li class="nav-item flex-sm-fill text-sm-center nav-link dropdown ">
							<a class="nav-link" href="catalog" role="button" aria-haspopup="true" aria-expanded="false">
								Торты
							</a>
						</li>
					
						
						<li class="nav-item flex-sm-fill text-sm-center nav-link dropdown ">
							<a class="nav-link" href="catalog" role="button" aria-haspopup="true" aria-expanded="false">
								Сладкие сеты
							</a>
						</li>
						
						<li class="nav-item flex-sm-fill text-sm-center nav-link dropdown ">
							<a class="nav-link" href="catalog" role="button" aria-haspopup="true" aria-expanded="false">
								Капкейки
							</a>
						</li>

						<li class="nav-item flex-sm-fill text-sm-center nav-link dropdown ">
							<a class="nav-link" href="catalog" role="button" aria-haspopup="true" aria-expanded="false">
								Конфеты
							</a>
						</li>
						
						<li class="nav-item flex-sm-fill text-sm-center nav-link dropdown ">
							<a class="nav-link" href="catalog" role="button" aria-haspopup="true" aria-expanded="false">
								Открытки
							</a>
						</li>
						
					</ul>	
				</div>
			</nav>
		</div>
	</div>	
	
	<div class="container">
		<div class="row">
			<?php if (have_posts()): ?>
				<?php while (have_posts()): the_post(); ?>
					
					<div class="mt-3 mr3 ml 3">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>

			
					</div>
				<?php endwhile; ?>
				
				<?php else: ?>
				<h2>Ничего не найдено</h2>
			<?php endif; ?>
		</div>
	</div>



<?php get_footer(); ?>