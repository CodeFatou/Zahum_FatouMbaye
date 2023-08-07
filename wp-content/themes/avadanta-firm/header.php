<?php
/**
* Header file for the Avadanta WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		
	<?php wp_head();?>	
	</head>
	<body <?php body_class(); ?>>
	<?php
	if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() 
		{
			do_action( 'wp_body_open' );
		}
	} 
	?>
<div class="wrapper-area">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'avadanta-firm' ); ?></a>
		<?php 
	$avadanta_sticky_thumb = get_theme_mod('avadanta_sticky_thumb',0);
	 if($avadanta_sticky_thumb==0){
	?>
	<header class="is-sticky is-shrink is-boxed header-s1 <?php if(  is_user_logged_in() ) { ?> avndta-admn <?php } ?>" id="header">
	<?php } else { ?>
	<header class=" is-shrink is-boxed header-s1" id="header">
		<?php } ?>
	<div class="header-box">
		<div class="header-main">
			<div class="header-wrap">
				<div class="container-fluid">
                	<div class="row">
				<div class="col-lg-3 text-center ttc-title1">
					<div class="logo-wrap <?php if(has_custom_logo() ){ ?> avadanta-logo <?php } ?>">
					<div class="logo">
						  <?php
							if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
							the_custom_logo();
							} 
							if (display_header_text()==true){ 
							?>
							 <h1 class="avadanta-title">
								 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								 <?php esc_html(bloginfo( 'title' )); ?>
								 </a>
							 </h1>
							
						<?php } ?>
					</div>
				</div>
			</div>
			<?php
			$avadanta_navigation_url = get_theme_mod('avadanta_navigation_url'); ?>

			<div class="col-lg-<?php  if(!empty($avadanta_navigation_url)) { ?>7<?php } else { ?>9<?php } ?> ttc-title">
				<div class="header-navbar">
					<nav class="avadanta-navigate" id="site-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
						 <?php
						 if ( has_nav_menu( 'primary' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id'        => 'primary-menu',
							) );
						}
						else
						{ ?>
								<ul class="add-child-header">
                                    <li class="header-menus">
                                        <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ));  ?>"><?php echo esc_html__( 'Add Main Menu', 'avadanta-firm' ); ?>
                                        </a>
                                    </li>
                                </ul>
						<?php
						}
						 ?>
						
					</nav>
				</div> 
			  </div>
			  	<?php
			  		$avadanta_navigation_text = get_theme_mod('avadanta_navigation_text','Get A Quote');
					$avadanta_navigation_url = get_theme_mod('avadanta_navigation_url'); ?>
					<?php  if(!empty($avadanta_navigation_url)) { ?>
				<div class="col-lg-2 org-border">
					<ul class="menu-btns">
						<li><a href="<?php echo esc_url($avadanta_navigation_url); ?>" class="btn btn-sm"><?php echo esc_html($avadanta_navigation_text); ?></a></li>
						</ul>
					</div>
					<?php } ?>
			</div>
		</div>
	</div>
</div>
	</div>
</header>