<?php  if(has_post_thumbnail( )): ?>
    <img class="h-64 w-full object-cover transition ease-in-out duration-700" src="<?php echo get_the_post_thumbnail_url( $post, 'nndym-home-post-small' ) ?>" alt="eventbanner">
<?php return; endif; ?>
    <div class=" h-64 w-full bg-gradient-thumbnail-cover flex justify-center items-center">
        <img class="h-24 transition ease-in-out duration-700" src="<?php echo get_template_directory_uri(  ) ?>/src/svg/logo-white.svg" alt="" srcset="">
    </div>