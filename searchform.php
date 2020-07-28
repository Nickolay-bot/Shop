<!--Форма поиска-->

<form action="<?php echo home_url( '/' ) ?>" class="form-inline d-none d-sm-block mt-5 ">
	<input style="border-color: #9D8977;" type="text" name="s" id="s" class="form-control mr-sm-2" placeholder="Поиск" aria-label="Поиск" value="<?php echo get_search_query() ?>">
	<button class="btn btn-outline-secondary "><img src="<?php echo get_template_directory_uri(); ?>/images/Vector.png"  width="25" height="25" alt=""></button>
</form>