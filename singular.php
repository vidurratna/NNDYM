<?php get_header() ?>

<?php 

get_template_part('template-parts/content/thumbnail/page' );
?>

<div class="w-11/12 m-auto relative bg-white page-fix shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-4 md:p-8">
    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="fade-in-bottom font-medium uppercase" id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="fade-in-bottom uppercase text-red-700 text-3xl md:text-4xl lg:text-5xl font-medium"><?php the_title(); ?></h1>
    <?php 
        if(! is_page( )){
            ?>
                <a class="fade-in-bottom text-sm text-gray-500 hover:text-red-700  md:text-base transition ease-in-out duration-200" href="<?php echo get_the_author_meta( 'user_url' ) ?>"><i class="fas fa-user mr-2"></i>by <?php echo get_the_author_meta( 'display_name' ) ?></a>
                    <a class="fade-in-bottom text-sm text-gray-500 hover:text-red-700  md:text-base ml-4 transition ease-in-out duration-200" href="<?php echo get_day_link( get_the_date( 'Y' ), get_the_date( 'm' ), get_the_date( 'd' )) ?>"><i class="fas fa-calendar-day mr-2"></i><?php echo get_the_date( 'Y/m/d' ) ?> </a>
            <?php
        }
    ?>
    <div class="my-8">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer() ?>
