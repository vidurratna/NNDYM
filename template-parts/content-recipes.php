<?php 

    $args = array(
        'posts_per_page' => 3,
        'tag' => 'recipes,recipe'
    );

    $query = new WP_Query( $args );

    // dd($query);

    $count = 0;
?>
<div data-aos="fade-up" data-aos-duration="800" data-aos-once="true" class="bg-white w-11/12 m-auto p-8 mt-4 shadow sm:shadow-md md:shadow-lg lg:shadow-xl">
    <h1 class="text-3xl text-orange-600 uppercase font-bold">New Recipes</h1>
    <span class="block w-2/12 bg-orange-500 h-1"></span>
    <?php
        if((int)$query->post_count < 3) :
    ?>
        <i class="far fa-sad-tear text-6xl mt-8 text-orange-600"></i>
        <h1 class="text-4xl uppercase text-orange-600 font-light tracking-wider mt-4">I think we ran out of recipes...</h1>
    <?php
        else :
    ?>
        <div class="md:grid grid-cols-3 gap-3 my-4">
            <?php  while ($query->have_posts()) : $query->the_post(); ?>
                <div onClick="handleURL('<?php echo esc_url( get_permalink() ) ?>')" class="cursor-pointer" data-aos="zoom-in" data-aos-duration="800" data-aos-once="true" data-aos-delay="<?php echo $count ?>">
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
            <?php $count = $count + 200; endwhile; ?>
        </div>
    <?php
        endif;
    ?>
</div>