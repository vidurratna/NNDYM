<?php 

$args = array(
    'limit' => 1,
    'post_html' => '<a class="hover:text-red-400 transition ease-in-out duration-300" href="{url}">{text_title}</a>',
    'wpp_start' => '',
    'wpp_end' => '',
    'range' => 'all'
);

?>
<div data-aos="fade-down" data-aos-duration="800" data-aos-once="true" id="header-info" class="bg-gray-300">
    <div class="w-11/12 m-auto h-16 flex items-center font-montserrat">
        <div class="text-sm inline-block">
            <h5 class="justify-center items-center" ><i class="fas fa-calendar-day text-lg mr-1"></i> <?php echo date("Y/m/d"); ?></h5>
        </div>
        <div class="text-sm ml-4 hidden md:inline-block fade-in">
            <h5 class="justify-center items-center font-roboto uppercase text-red-400 inline" ><i class="fas fa-fire text-lg mr-1"></i> Trending:</h5>
            <?php wpp_get_mostpopular($args ); ?>
        </div>
        <div class="flex justify-center ml-auto fade-in">
            <a  class="hover:text-nndym-blue duration-300 transition ease-out" target="_blank" href="https://www.facebook.com/nndymcamp/"><i class="fab mx-1 fa-facebook-square text-2xl mb-2"></i></i></a>
            <a  class="hover:text-nndym-blue duration-300 transition ease-out" target="_blank" href="https://www.instagram.com/officialnndym/?hl=en"><i class="fab mx-1 fa-instagram-square text-2xl mb-2"></i></a>
            <a  class="hover:text-nndym-blue duration-300 transition ease-out" target="_blank" href="https://www.youtube.com/channel/UC8p4em51J4zPnumhHfGiADA"><i class="fab mx-1 fa-youtube-square text-2xl mb-2"></i></a>
            <a  class="hover:text-nndym-blue duration-300 transition ease-out" target="_blank" href="https://twitter.com/nndym?lang=en"><i class="fab mx-1 fa-twitter-square  text-2xl mb-2"></i></i></a>
        </div>
    </div>
</div>