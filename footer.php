	

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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/validator.min.js"></script>

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


<?php wp_footer(); ?>
</body>
</html>