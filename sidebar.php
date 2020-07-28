



	<div class="container">
		<div class=" d-flex justify-content-center" >


				<div class="btn-group collapse navbar-collapse flex-md-fill text-sm-center nav-link " role="group" aria-label="Button group with nested dropdown">
					<?php
						wp_nav_menu(array(
						'theme_location' => 'sidebarmenu',
						'menu_class' => 'nav dnav-pills flex-column flex-sm-row list-unstyled mr-auto justify-content-center' ,
						'walker' => new wp_bootstrap_navwalker() ) );
					?>
					
				</div>
			</nav>
		</div>
	</div>	
	
		
<?php dynamic_sidebar( 'right' ); ?>
