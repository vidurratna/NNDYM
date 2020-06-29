<?php ?>
<div id="search-block" class="bg-white hidden w-full h-screen fixed top-0 left-0 flex items-center justify-center border-nndym-blue border-8">
    <a id="search-block-close" class="fixed top-0 right-0 m-8 text-black hover:text-nndym-blue text-3xl transform ease-in-out duration-300"><i class="fas fa-times"></i></a>
    <div class="w-full p-8 flex-col flex items-center justify-center">
    <form class="w-full" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
        <input type="text" class="w-full p-2 text-2xl md:p-8 md:text-6xl" name="s" id="s"  placeholder="Search!" />
        <input type="submit" class="hidden" name="submit" />
    </form>
    <h5 class="ml-auto w-fit">Hit enter to find what you are seraching for!</h5>
    </div>
</div>