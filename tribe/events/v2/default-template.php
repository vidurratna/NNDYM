<?php
/**
 * View: Default Template for Events
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/default-template.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @version 5.0.0
 */

use Tribe\Events\Views\V2\Template_Bootstrap;

get_header(); 
if(tribe_is_event() && is_single()){
    
    echo tribe_get_view();
} else {
    ?>
    <div data-aos="zoom-in" data-aos-duration="800" data-aos-once="true" class="bg-white m-auto w-11/12 mt-4 shadow sm:shadow-md md:shadow-lg lg:shadow-xl">
    <?Php
    echo tribe( Template_Bootstrap::class )->get_view_html();
    ?>
    </div>
    <?php
}

get_footer();
