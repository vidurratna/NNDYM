<?php 

    $args = array(
        'posts_per_page' => 5,
    );

    $query = new WP_Query( $args );

    // dd($query);

    $count = 0;

    if ( $query->have_posts() ) :
?>
    <div class="sm:grid sm:grid-cols-2 md:grid-cols-4 md:grid-rows-2 h-post-cover">
        <?php while ( $query->have_posts()  ) : $query->the_post();?>
            <div data-aos="zoom-in" data-aos-duration="800" data-aos-once="true" data-aos-delay="<?php echo $count ?>" class="relative overflow-hidden img-hover cursor-pointer  <?php if($count == 0){echo"row-start-1 row-end-3 col-start-1 col-end-3";} ?>">
                
                <?php 

                    global $thumbnailType;

                    if($count == 0){
                        get_template_part('template-parts/content/thumbnail/home', 'large' );
                    } else {
                        get_template_part('template-parts/content/thumbnail/post', 'small' );
                    }

                    
                ?>
                
                <div  onClick="handleURL('<?php echo esc_url( get_permalink() ) ?>')" class="absolute bottom-0 left-0 h-full w-full bg-black opacity-50"></div>
                <div class="absolute bottom-0 left-0 text-white p-4">
                    <a class="px-4 py-2 bg-red-700 uppercase mb-1 inline-block rounded-md hover:bg-red-900 transition ease-in-out duration-200" href="<?php echo get_category_link( get_the_category( )[0] ) ?>"><?php echo get_the_category( )[0]->name ?></a>
                    <a href="<?php echo esc_url( get_permalink() ) ?>">
                    <?php 
                        if($count == 0){
                            the_title( '<h1 class="text-xl sm:text-5xl font-montserrat hover:text-gray-500 transition ease-in-out duration-200">', '</h1>' );
                        } else {
                            the_title( '<h1 class="text-xl lg:text-2xl font-montserrat hover:text-gray-500 transition ease-in-out duration-200">', '</h1>' );
                    } ?>
                    </a>
                    
                    <a class="text-sm text-gray-500 hover:text-white md:text-base transition ease-in-out duration-200" href="<?php echo get_home_url( ).'/author/'. get_the_author_meta( 'user_login' ) ?>"><i class="fas fa-user mr-2"></i>by <?php echo get_the_author_meta( 'display_name' ) ?></a>
                    <a class="text-sm text-gray-500 hover:text-white md:text-base ml-4 transition ease-in-out duration-200" href="<?php echo get_day_link( get_the_date( 'Y' ), get_the_date( 'm' ), get_the_date( 'd' )) ?>"><i class="fas fa-calendar-day mr-2"></i><?php echo get_the_date( 'Y/m/d' ) ?> </a>
                    
                </div>
                
            </div>
        <?php $count = $count+ 200; endwhile; ?>
    </div>
<?php 
    else :
?>
    <div data-aos="fade-in" data-aos-duration="800" data-aos-once="true" data-aos-delay="800" class="w-full bg-black text-white h-128 flex justify-center items-center flex-col z-0">
        <i class="far fa-sad-tear text-6xl"></i>
        <h1 class="text-4xl uppercase font-light tracking-wider mt-4">No posts were found!</h1>
    </div>
<?php 
    endif;
?>