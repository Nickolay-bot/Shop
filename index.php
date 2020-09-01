<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>CCShop</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="style.css">
	    <link rel="stylesheet" href="normalize.css">
	    <link rel="shortcut icon" href="favicon.ico">
    

</head>
<body>


    <!--Шапка-->  
    <header class="navbar navbar-expand-lg justify-content-center navbar-dark bg-custom">
        <div class="container">     
            <!--Иконка для сэндвич-меню-->
            <button class="navbar-toggler" name="mainmenu" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
		 	
                <!--Верхнее меню-->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
              <ul class="navbar-nav text-center">
                <li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
                <li class="nav-item"><a href="#about-us" class="nav-link">О нас</a></li>
                <li class="nav-item"><a href="#delivery" class="nav-link">Доставка и оплата</a></li>
                <li class="nav-item"><a href="#review" class="nav-link">Отзывы</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link">Контакты</a></li>
                <li class="nav-item"><a href="" class="nav-link"><img src="images/basket.png"  width="25" height="25" style="display: block; " title="Корзина" alt=""></a>
                </li>
              </ul>        
            </div>

        </div>


        </div>
    </header>


	<div class="container">	
		<div class="row justify-content-center">
				<div class="col" style="display: contents;">
					<div class="d-flex justify-content-center">
						<a class="navbar-brand" href="index.php"><img src="images/logo.png" width="160" height="135" alt=""></a>
					</div>
				</div>

				<div class="col" style="display: contents;">
					<!--Форма поиска-->

					<form action="" class="form-inline d-none d-sm-block mt-5 ">
						<input style="border-color: #9D8977;" type="text" name="s" id="s" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск" >
						<button class="btn btn-outline-secondary "><img src="images/Vector.png"  width="25" height="25" alt=""></button>
					</form>
				</div>

		
			<div class="col " style="display: contents;">
				<div class="call-form mt-5 ml-3 mb-3">
					
						<img src="/images/phone.png" class="ml-3" alt="">
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

										<form action="index.html" class="forma" method="post" > 
											
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



	

	<div class="container">
		<div class=" d-flex justify-content-center" >

				<div class="btn-group collapse navbar-collapse flex-md-fill text-sm-center nav-link " role="group" aria-label="Button group with nested dropdown">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link" href="index.php?page=shop">Торты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Сладкие сеты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Капкейки</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Конфеты</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Открытки</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>	





 
	<div id="content">

	<?php 
	

		$arrayCake = [
		[
		'id' => 1,
		'name' => 'Торт "Черника в шоколаде"',
		'desc' => '(Шоколадный бисквит, шоколадный крем, черника) <br> Вес: от 1,5 кг',
		'img' => '/images/catalog/chernichn.jpg',
		'price' => '1500 руб.',
		],	
		[
		'id' => 2,
		'name' => 'Торт "Шоколадный с фруктами"',
		'desc' => '(Шоколадный бисквит, сметанный крем, прослойка с шоколадным сиропом, фрукты) <br> Вес: от 2 кг',
		'img' => '/images/catalog/chernichn.jpg',
		'price' => '1300 руб.',
		],	
		[
		'id' => 3,
		'name' => 'Торт "Мороженое"',
		'desc' => '(Мороженое ванильное, клубничное, шоколадное, песочный корж, фрукты, ягоды) <br> Вес: от 2 кг',
		'img' => '/images/catalog/chernichn.jpg',
		'price' => '1200 руб.',
		],
		[
		'id' => 4,
		'name' => 'Торт "Клубничный"',
		'desc' => '(Классический белый бисквит, сырный крем, клубника) <br>Вес: от 1,5 кг',
		'img' => '/images/catalog/chernichn.jpg',
		'price' => '1400 руб.',
		],
		];

	// foreach ($arrayCake as $key => $arraySearch) {

	// 	echo 'Ключ массива:' . $key . '<br>';
	// 	echo $arraySearch['id'] . '<br>';
	// 	echo $arraySearch['name'] . '<br>';
	// 	echo $arraySearch['desc'] . '<br>';
	// 	echo $arraySearch['img'] . '<br>';
	// 	echo $arraySearch['price'] . '<br>';
	// 	echo '<hr>';
	// } 

	

	$page = isset($_GET['page']) ? $_GET['page'] : null;
	if (!isset($page)) {
		require('templates/main.php') ;
	} elseif ($page == 'shop') {
		require('templates/shop.php') ;
	} elseif ($page == 'product') {
		echo 'Страница с открытым товаром';
	}




	?>


	<!-- -->
	</div>


	<!-- Footer -->
	<footer class="page-footer font-small teal pt-4 mt-5 bg-custom">
	  <div class="container-fluid text-center text-md-left">
	    <div class="row">
	      <div class="col-md-6 mt-md-0 mt-3">
	        <h5 class="text-center text-uppercase font-weight-bold" id="contacts">Контакты</h5>
				<p class="text-center">г. Нижний Новгород, <br>
			ул. Большая Покровская, д. 111 а <br>
			тел. +7 999 999 99 66 <br>
			ccshop@mail.ru <br>
				</p>
	      </div>
	      <hr class="clearfix w-100 d-md-none pb-3">
	      <div class="col-md-6 mb-md-0 mb-3">
	        <h5 class="text-center text-uppercase font-weight-bold">Режим работы</h5>
				<p class="text-center">Понедельник- пятница: 9:00-21:00  <br>
					Суббота, воскресенье: 10:00-18:00
				</p>
	      </div>
	    </div>
	  </div>
	  <div class="footer-copyright text-center py-3 ">© 2020 Copyright:
	    <a href="https://www.instagram.com/belkin_nikolay/"> belkin_nikolay</a>
	  </div>
	</footer>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/validator.min.js"></script>

<script>
$( '#exampleModal' ).on( 'shown.bs.modal', function() {
$( '.modal-content', this ).empty();
$( '.modal-content', this )[ 0 ],


<?php

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);
$fromMail = 'admin@CCShop';
$fromName = 'a0454061.xsph.ru Форма';
$emailTo = 'nickolaydep@yandex.ru';
$subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
$subject = 'Форма обратной связи';
$headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
$body = "Получено письмо с сайта http://a0454061.xsph.ru/ \nИмя: $name \nТелефон: $phone \nE-mail: $email \nСообщение: $message";
if (strlen($phone) > 0) {
    $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
}

?>
} );
</script>



</body>
</html>