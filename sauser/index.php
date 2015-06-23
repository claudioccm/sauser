<?php get_header(); ?>

<!-- Social Media embeds -->
<div class="b-social-media-embbed">
    <div class="row">
        <div class="column large-6">
            <a class="twitter-timeline" href="https://twitter.com/sauserwind" data-widget-id="610137226333278208">Tweets by @sauserwind</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>

        <div class="column large-6">
	     <!-- https://wordpress.org/plugins/instagram-feed/installation/ -->
	    <?php echo do_shortcode( '[instagram-feed]' ); ?>
        </div>
    </div>
</div>

<?php

get_template_part('content/archive-header');


// The loop
if ( have_posts() ) :
    while (have_posts() ) :
        the_post();

        /* Blog */
        if(is_home()){

            /* Two-column Images Layout */
            if(get_theme_mod('premium_layouts_setting') == 'two-column-images'){
                get_template_part('licenses/content/content-two-column-images');
            }
            /* Full-width Images Layout */
            elseif(get_theme_mod('premium_layouts_setting') == 'full-width-images'){
                get_template_part('licenses/content/content-full-width-images');
            }
            /* Blog - No Premium Layout */
            else {
                get_template_part('content', 'archive');
            }
        }
        /* Post */
        elseif(is_singular('post')){
            get_template_part('content');
            comments_template();
        }
        /* Page */
        elseif(is_page()){
            get_template_part('content', 'page');
            comments_template();
        }
        /* Attachment */
        elseif(is_attachment()){
            get_template_part( 'content', 'attachment' );
            comments_template();
        }
        /* Archive */
        elseif(is_archive()){

            /* check if bbPress is active */
            if( function_exists( 'is_bbpress' ) ) {

                /* if is bbPress forum list */
                if( is_bbpress() ) {
                    get_template_part( 'content/bbpress' );
                }
                /* normal archive */
                else {
                    get_template_part('content', 'archive');
                }
            }
            elseif(get_theme_mod('premium_layouts_setting') == 'two-column-images'){
                get_template_part('licenses/content/content-two-column-images');
            }
            elseif(get_theme_mod('premium_layouts_setting') == 'full-width-images'){
                get_template_part('licenses/content/content-full-width-images');
            }
            else {
                get_template_part('content', 'archive');
            }
        }
        /* bbPress */
        elseif( function_exists( 'is_bbpress' ) && is_bbpress() ) {
            get_template_part( 'content/bbpress' );
        }
        /* Custom Post Types */
        else {
            get_template_part('content');
        }
    endwhile;
endif; ?>

<?php

// include loop pagination except for on bbPress Forum root
if( function_exists( 'is_bbpress' ) ) {

    if( ! ( is_bbpress() && is_archive() ) ) {
        ct_tracks_post_navigation();
    }

} else {
    ct_tracks_post_navigation();
}

?>


<?php get_footer(); ?>