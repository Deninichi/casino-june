<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<header>
		<div class="container align-items-center">
			<div class="logo">
				<a href="<?php echo site_url(); ?>"><img src="<?php the_field( 'bear_logo', 'option' ); ?>" alt=""></a>
			</div>
			<nav class="main-menu nav-primary navbar navbar-animated navbar-expand-xl">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<?php wp_nav_menu( array(
					'theme_location'  => 'primary_menu',
					'menu'            => 'header_menu',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbarPrimary',
					'menu_class'      => 'navbar-nav ml-auto',
				) ); ?>
			</nav>
			<div class="top-socials d-none d-xl-block">
				<ul class="d-flex align-items-center">
					<?php 
						$socials = get_field( 'bear_socials', 'option' );
					?>
					<?php if ( $socials['facebook'] ): ?>
						<li><a href="<?php echo $socials['facebook'] ?>" rel="nofollow"><i class="fab fa-facebook-f"></i></a></li>
					<?php endif ?>
					
					<?php if ( $socials['twitter'] ): ?>
						<li><a href="<?php echo $socials['twitter'] ?>" rel="nofollow"><i class="fab fa-twitter"></i></a></li>
					<?php endif ?>
					
					<?php if ( $socials['instagram'] ): ?>
						<li><a href="<?php echo $socials['instagram'] ?>" rel="nofollow"><i class="fab fa-instagram"></i></a></li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</header>

	<div class="main container">