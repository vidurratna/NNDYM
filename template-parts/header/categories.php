<?php
?>
<div data-aos="fade-in" data-aos-duration="800" data-aos-once="true"  data-aos-delay="400" id="header-menu" class="bg-nndym-blue w-full z-40">
    <div class="w-11/12 m-auto h-16  ">
        <div class="md:flex justify-between items-center hidden h-full">
            <?php 
                wp_nav_menu(
                    array(
                        'items_wrap' => '%3$s',
                        'link_before' => '<h1 class="hover:text-blue-700 transition ease-in-out duration-200">',
                        'link_after' => '</h1>',
                        'container_class' => 'list-none flex justify-between items-center w-full text-white uppercase',
                        'theme_location' => 'bar',
                    )
                );
            ?>
        </div>
        <div class="md:hidden justify-between items-center flex h-full text-base uppercase  tracking-wider text-white">
            <a id="mobile-serach-open" class="hover:text-nndym-blue transition ease-in-out duration-300" ><i class="fas fa-search"></i> Search</a>
            <a id="mobile-logo" data-aos="fade-in" data-aos-duration="800" class="transform ease-in-out duration-300 hover:rotate-12 hidden" href="<?php echo get_home_url( ) ?>"><img class="h-10" src="<?php echo get_template_directory_uri(  ) ?>/src/svg/logo-white.svg" alt="" srcset=""></a>
            <a id="mobile-menu-open" class="hover:text-nndym-blue transition ease-in-out duration-300" >Menu <i class="fas fa-bars"></i></a>
        </div>
    </div>
</div>