<?php get_header() ?>

<div class="w-11/12 m-auto bg-white shadow sm:shadow-md md:shadow-lg lg:shadow-xl my-8 p-8">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="fade-in-bottom font-medium uppercase" id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="fade-in-bottom uppercase text-red-700 text-3xl md:text-4xl lg:text-5xl font-medium"><?php single_cat_title( ); ?></h1>
    <a class="fade-in-bottom border-nndym-blue border-2 rounded-sm py-4 transition ease-in-out duration-300 px-12 my-1 uppercase font-bold text-nndym-blue inline-block hover:text-white hover:bg-nndym-blue" href="<?php echo get_home_url( ).'/camps'?>"><i class="fas fa-campground mr-2"></i> See Camp Highlights</a>
    <div class="my-8">
        <?php if(have_posts(  )) : ?>
            <div class="grid md:grid-cols-4 gap-4">
                <?php  while (have_posts()) : the_post(); ?>
                <div data-aos="zoom-in" data-aos-duration="800" data-aos-once="true" data-aos-delay="<?php echo $count ?>">
                    <?php 
                    get_template_part('template-parts/content/thumbnail/post', 'smallmini' );
                    ?>
                <div class="my-4">
                    <a href="<?php echo esc_url( get_permalink() ) ?>">
                        <?php the_title( '<h1 class="text-2xl font-montserrat hover:text-orange-600 transition ease-in-out duration-200">', '</h1>' ); ?>
                    </a>
                    <a class="text-sm text-gray-500 hover:text-orange-600 md:text-base transition ease-in-out duration-200" href="<?php echo get_home_url( ).'/author/'. get_the_author_meta( 'user_login' ) ?>"><i class="fas fa-user mr-2"></i>by <?php echo get_the_author_meta( 'display_name' ) ?></a>
                    <a class="text-sm text-gray-500 hover:text-orange-600 md:text-base ml-4 transition ease-in-out duration-200" href="<?php echo get_day_link( get_the_date( 'Y' ), get_the_date( 'm' ), get_the_date( 'd' )) ?>"><i class="fas fa-calendar-day mr-2"></i><?php echo get_the_date( 'Y/m/d' ) ?> </a>
                </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="text-xl">
                <?php the_posts_pagination(
                    array(
                        'screen_reader_text' => 'Posts navigation',
                        'prev_text'          => '<span class="screen-reader-text hover:text-red-800">' . __( 'Previous page', 'nndym' ) . '</span>',
                        'next_text'          => '<span class="screen-reader-text hover:text-red-800">' . __( 'Next page', 'nndym' ) . '</span>',
                    )
                ); ?>
            </div>
        <?php else : ?>
            <i class="far fa-sad-tear text-6xl mt-8 text-red-700"></i>
            <h1 class="text-4xl uppercase text-red-700 font-light tracking-wider mt-4">I think we ran out of <?php single_cat_title( ); ?> posts...</h1>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>
