<?php?>
<div id="desktop-menu" class="bg-white hidden w-full h-screen fixed top-0 left-0 flex items-center justify-center">
    <a id="desktop-menu-close" class="fixed top-0 right-0 m-8 text-black hover:text-nndym-blue text-3xl transform ease-in-out duration-300"><i class="fas fa-times"></i></a>
    <div class="w-1/2 flex items-center justify-center">
        <a id="mobile-logo" class=" transform ease-in-out duration-300 hover:rotate-12" href="<?php echo get_home_url( ) ?>"><img class="h-64" src="<?php echo get_template_directory_uri(  ) ?>/src/svg/logo.svg" alt="" srcset=""></a>
    </div>
    <div class="w-1/2">
    <?php 
            wp_nav_menu(
                array(
                    'items_wrap' => '%3$s',
                    'link_before' => '<h1 class="hover:text-nndym-blue transition ease-in-out duration-200 m-4">',
                    'link_after' => '</h1 >',
                    'container_class' => 'grid grid-cols-2 h-64 list-none text-black text-3xl uppercase font-bold',
                    'theme_location' => 'sidebar',
                    'container_id' => 'desktop-sidebar-list',
                )
            );
            
        ?>
    </div>
</div>