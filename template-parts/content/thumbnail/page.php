<?php  if(has_post_thumbnail( )): ?>
    <img data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="h-page-cover w-full object-cover transition ease-in-out duration-700" src="<?php echo get_the_post_thumbnail_url( $post, "nndym-page" ) ?>" alt="page feature banner">
<?php return; endif; ?>
    <div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="h-page-cover w-full bg-gradient-thumbnail-cover flex justify-center items-center">
        <img class="h-24 transition ease-in-out duration-700" src="<?php echo get_template_directory_uri(  ) ?>/src/svg/logo-white.svg" alt="" srcset="">
    </div>