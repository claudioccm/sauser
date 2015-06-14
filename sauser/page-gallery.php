<?php get_header(); ?>
<div class="gallery-page">
<div class='entry-header'>
    <h1 class='entry-title'>Gallery</h1>
</div>
    <div class="gallery wrapper">
    <?php
        $args = array(
            'post_type' => 'attachment',
            'numberposts' => -1,
            'post_status' => null,
            'post_parent' => null,
            'post_mime_type' => 'image' // any parent
            ); 
        $attachments = get_posts($args);
        if ($attachments) {
            foreach ($attachments as $post) {
                the_attachment_link($post->ID, false);
            }
        }

        ?>
    </div>
</div>

<?php get_footer(); ?>

<!-- http://stackoverflow.com/questions/3307576/what-is-the-function-got-get-all-the-media-files-wordpress -->