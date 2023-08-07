<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

$avadanta_top_footer_enable = get_theme_mod('avadanta_top_footer_enable',0); 

?>	
<?php if($avadanta_top_footer_enable==0)
		{  
			$footer_background_image = get_theme_mod('footer_background_image','');

?>

    <footer class="section footer bg-dark-alt tc-light footer-s1">
        <div class="container">
            <div class="row gutter-vr-30px">
                    <?php
                       $avadanta_footer_widgets_column = get_theme_mod( 'avadanta_footer_widgets_column', 'mt-column-3' );
                        if( is_active_sidebar( 'avadanta-footer-area' ) )
                      {
                       
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $avadanta_footer_widgets_column ).'">';
                        dynamic_sidebar( 'avadanta-footer-area' );
                        echo '</div>';
                        }
                    ?>

                    <?php

                        if( is_active_sidebar( 'avadanta-footer-area-2' ) || $avadanta_footer_widgets_column == 'mt-column-1'){
                       
                      
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $avadanta_footer_widgets_column ).'">';
                        dynamic_sidebar( 'avadanta-footer-area-2' );
                        echo '</div>';
                         }
                    ?>
             
                    <?php
                    if( is_active_sidebar( 'avadanta-footer-area-3' ) || $avadanta_footer_widgets_column == 'mt-column-1' || $avadanta_footer_widgets_column == 'mt-column-2' ){
                      
                   
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $avadanta_footer_widgets_column ).'">';
                        dynamic_sidebar( 'avadanta-footer-area-3' );
                        echo '</div>';
                         }
                    ?>

                    <?php
                    if( is_active_sidebar( 'avadanta-footer-area-4' ) || $avadanta_footer_widgets_column != 'mt-column-4'){
                                                      
                        echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $avadanta_footer_widgets_column ).'">';
                        dynamic_sidebar( 'avadanta-footer-area-4' );
                        echo '</div>';
                        }
                    ?>
            </div> 
        </div> 
        <div class="bg-image bg-fixed">
            <img src="<?php echo esc_url($footer_background_image);?>" alt="">
        </div>
    </footer> 
 		<?php } 
			$avadanta_preloader_option = get_theme_mod('avadanta_preloader_option',0);
			 if($avadanta_preloader_option==0){
			?>
		<div class="preloader preloader-light preloader-dalas no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="<?php echo esc_url(AVADANTA_THEME_URI .'/assets/images/preload.gif') ?>" alt=""></span></div>
	<?php }
			$avadanta_copyright_text = get_theme_mod( 'avadanta_copyright_text');
            $avadanta_copyright_enable = get_theme_mod( 'avadanta_copyright_enable', 0 );
            if($avadanta_copyright_enable==0) :
            ?>
<div class="footer-2 avadanta-agency-foot tc-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
                    <div class="agency-copyright text-center my-20">
                         	<?php if( get_theme_mod( 'avadanta_copyright_text' ) ) : ?>
                            <p><?php echo wp_kses_post(  get_theme_mod('avadanta_copyright_text') ); ?> </p>
                            <?php else : ?>
                            <?php
                            printf( __( 'Proudly powered by', 'avadanta-firm' ) );
                            ?>
                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'avadanta-firm' ) ); ?>" class="imprint">
                            	
							<?php
                            printf( __( 'WordPress', 'avadanta-firm' ) );
                            ?>
                            </a>
                            
                            
                            <?php endif ; ?> 
                    </div>
                </div>
               
			</div> 
		</div> 
	</div><?php
			$avadanta_scroll_thumb = get_theme_mod('avadanta_scroll_thumb',0);
			 if($avadanta_scroll_thumb==0){
			?>
			<a href="#" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
			<?php } endif; ?>

<?php wp_footer();?>	
</body>
</html>