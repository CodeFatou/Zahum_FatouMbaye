<?php
if( get_theme_mod( 'overlay-social-email' ) ) :
    echo '<a href="' . esc_url( 'mailto:' . antispambot( get_theme_mod( 'overlay-social-email' ), 1 ) ) . '" title="' . esc_attr__( 'Send Us an Email', 'overlay' ) . '" class="social-icon social-email"><i class="far fa-envelope"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-skype' ) ) :
    echo '<a href="skype:' . esc_html( get_theme_mod( 'overlay-social-skype' ) ) . '?userinfo" title="' . esc_attr__( 'Contact Us on Skype', 'overlay' ) . '" class="social-icon social-skype"><i class="fab fa-skype"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-phone' ) ) :
    echo '<a href="' . esc_url( 'tel:' . antispambot( get_theme_mod( 'overlay-social-phone' ), 1 ) ) . '" title="' . esc_attr__( 'Call Us', 'overlay' ) . '" class="social-icon social-phone"><i class="fas fa-phone"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-whatsapp' ) ) :
    echo '<a href="https://wa.me/' . esc_html( get_theme_mod( 'overlay-social-whatsapp' ) ) . '" title="' . esc_attr__( 'Contact Us on Whatsapp', 'overlay' ) . '" class="social-icon social-whatsapp"><i class="fab fa-whatsapp"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-facebook' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-facebook' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Facebook', 'overlay' ) . '" class="social-icon social-facebook"><i class="fab fa-facebook"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-twitter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-twitter' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Twitter', 'overlay' ) . '" class="social-icon social-twitter"><i class="fab fa-twitter"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-google-plus' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-google-plus' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Google Plus', 'overlay' ) . '" class="social-icon social-gplus"><i class="fab fa-google-plus"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-snapchat' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-snapchat' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on SnapChat', 'overlay' ) . '" class="social-icon social-snapchat"><i class="fab fa-snapchat"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-tiktok' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-tiktok' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on TikTok', 'overlay' ) . '" class="social-icon social-tiktok"><i class="fab fa-tiktok"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-steam' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-steam' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Steam', 'overlay' ) . '" class="social-icon social-steam"><i class="fab fa-steam"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-amazon' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-amazon' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Amazon', 'overlay' ) . '" class="social-icon social-amazon"><i class="fab fa-amazon"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-etsy' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-etsy' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Etsy', 'overlay' ) . '" class="social-icon social-etsy"><i class="fab fa-etsy"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-yelp' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-yelp' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Yelp', 'overlay' ) . '" class="social-icon social-yelp"><i class="fab fa-yelp"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-youtube' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-youtube' ) ) . '" target="_blank" title="' . esc_attr__( 'View our YouTube Channel', 'overlay' ) . '" class="social-icon social-youtube"><i class="fab fa-youtube"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-vimeo' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-vimeo' ) ) . '" target="_blank" title="' . esc_attr__( 'View our Vimeo Channel', 'overlay' ) . '" class="social-icon social-vimeo"><i class="fab fa-vimeo-square"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-instagram' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-instagram' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Instagram', 'overlay' ) . '" class="social-icon social-instagram"><i class="fab fa-instagram"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-strava' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-strava' ) ) . '" target="_blank" title="' . esc_attr__( 'Follow Us on Strava', 'overlay' ) . '" class="social-icon social-strava"><i class="fab fa-strava"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-airbnb' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-airbnb' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Airbnb', 'overlay' ) . '" class="social-icon social-airbnb"><i class="fab fa-airbnb"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-pinterest' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-pinterest' ) ) . '" target="_blank" title="' . esc_attr__( 'Pin Us on Pinterest', 'overlay' ) . '" class="social-icon social-pinterest"><i class="fab fa-pinterest"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-medium' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-medium' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Medium', 'overlay' ) . '" class="social-icon social-medium"><i class="fab fa-medium"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-blogger' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-blogger' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Blogger', 'overlay' ) . '" class="social-icon social-blogger"><i class="fab fa-blogger"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-behance' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-behance' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Behance', 'overlay' ) . '" class="social-icon social-behance"><i class="fab fa-behance"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-soundcloud' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-soundcloud' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on SoundCloud', 'overlay' ) . '" class="social-icon social-soundcloud"><i class="fab fa-soundcloud"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-spotify' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-spotify' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Spotify', 'overlay' ) . '" class="social-icon social-spotify"><i class="fab fa-spotify"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-product-hunt' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-product-hunt' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Product Hunt', 'overlay' ) . '" class="social-icon social-product-hunt"><i class="fab fa-product-hunt"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-kickstarter' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-kickstarter' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Kickstarter', 'overlay' ) . '" class="social-icon social-kickstarter"><i class="fab fa-kickstarter"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-slack' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-slack' ) ) . '" target="_blank" title="' . esc_attr__( 'Find us on Slack', 'overlay' ) . '" class="social-icon social-slack"><i class="fab fa-slack"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-linkedin' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-linkedin' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on LinkedIn', 'overlay' ) . '" class="social-icon social-linkedin"><i class="fab fa-linkedin"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-tumblr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-tumblr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Tumblr', 'overlay' ) . '" class="social-icon social-tumblr"><i class="fab fa-tumblr"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-digg' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-digg' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Digg', 'overlay' ) . '" class="social-icon social-digg"><i class="fab fa-digg"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-flickr' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-flickr' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Flickr', 'overlay' ) . '" class="social-icon social-flickr"><i class="fab fa-flickr"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-houzz' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-houzz' ) ) . '" target="_blank" title="' . esc_attr__( 'Find our profile on Houzz', 'overlay' ) . '" class="social-icon social-houzz"><i class="fab fa-houzz"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-vine' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-vine' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Vine', 'overlay' ) . '" class="social-icon social-vine"><i class="fab fa-vine"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-vk' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-vk' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on VK', 'overlay' ) . '" class="social-icon social-vk"><i class="fab fa-vk"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-xing' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-xing' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Xing', 'overlay' ) . '" class="social-icon social-xing"><i class="fab fa-xing"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-stumbleupon' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-stumbleupon' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on StumbleUpon', 'overlay' ) . '" class="social-icon social-stumbleupon"><i class="fab fa-stumbleupon"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-tripadvisor' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-tripadvisor' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on TripAdvisor', 'overlay' ) . '" class="social-icon social-tripadvisor"><i class="fab fa-tripadvisor"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-github' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-github' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on GitHub', 'overlay' ) . '" class="social-icon social-github"><i class="fab fa-github"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-500px' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-500px' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on 500px', 'overlay' ) . '" class="social-icon social-500px"><i class="fab fa-500px"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-odnoklassniki' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-odnoklassniki' ) ) . '" target="_blank" title="' . esc_attr__( 'Find Us on Odnoklassniki', 'overlay' ) . '" class="social-icon social-odnoklassniki"><i class="fab fa-odnoklassniki"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-custom-class' ) && get_theme_mod( 'overlay-social-custom-url' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-custom-url' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fab ' . sanitize_html_class( get_theme_mod( 'overlay-social-custom-class' ) ) . '"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-custom-class-two' ) && get_theme_mod( 'overlay-social-custom-url-two' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-custom-url-two' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fab ' . sanitize_html_class( get_theme_mod( 'overlay-social-custom-class-two' ) ) . '"></i></a>';
endif;

if( get_theme_mod( 'overlay-social-custom-class-nobrand' ) && get_theme_mod( 'overlay-social-custom-url-nobrand' ) ) :
    echo '<a href="' . esc_url( get_theme_mod( 'overlay-social-custom-url-nobrand' ) ) . '" target="_blank" class="social-icon social-custom"><i class="fas ' . sanitize_html_class( get_theme_mod( 'overlay-social-custom-class-nobrand' ) ) . '"></i></a>';
endif;
