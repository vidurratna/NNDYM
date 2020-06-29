<?php?>
<div id="mobile-menu" class="bg-black hidden w-full h-screen fixed top-0 left-0 flex items-center justify-center flex-col ">
    <a id="mobile-menu-close" class="fixed top-0 right-0 m-8 text-white text-2xl"><i class="fas fa-times"></i></a>
    <a  class="transform m-8 ease-in-out duration-300 hover:rotate-12" href="<?php echo get_home_url( ) ?>"><img class="h-24" src="<?php echo get_template_directory_uri(  ) ?>/src/svg/logo-white.svg" alt="" srcset=""></a>
    <div  class="height-60-screen overflow-y-auto w-11/12">
        <?php 
            wp_nav_menu(
                array(
                    'items_wrap' => '%3$s',
                    'link_before' => '<h1 class="hover:text-blue-700 transition ease-in-out duration-200 m-4">',
                    'link_after' => '</h1 >',
                    'container_class' => 'list-none flex flex-col justify-between items-center w-full text-white text-lg uppercase font-normal',
                    'theme_location' => 'mobile',
                    'container_id' => 'mobile-menu-list',
                )
            );
            
        ?>
    </div>
    <i class="fas fa-sort-down text-white"></i>
</div>