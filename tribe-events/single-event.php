<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

global $thumbnailType;

$thumbnailType = 'nndym-page';


get_template_part('template-parts/content/thumbnail/page' );

?>
<div class="w-11/12 m-auto relative bg-white page-fix shadow sm:shadow-md md:shadow-lg lg:shadow-xl p-8">

    <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p class="fade-in-bottom font-medium uppercase" id="breadcrumbs">','</p>' );
        }
    ?>
    <h1 class="fade-in-bottom uppercase text-red-700 text-3xl md:text-4xl lg:text-5xl font-medium"><?php the_title(); ?></h1>


	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<div class="event-info">
		<?php echo tribe_events_event_schedule_details( $event_id, '<h2 class="text-2xl my-2">', '</h2>' ); ?>
		<?php if ( tribe_get_cost() ) : ?>
			<h2 class="text-2xl"><?php echo tribe_get_cost( null, true ) ?></h2>
		<?php endif; ?>
	</div>

	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination my-4" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav uppercase">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<i class="fas fa-arrow-left mr-2"></i> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <i class="fas fa-arrow-right ml-2"></i>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- Event content -->
			<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
			<div class="tribe-events-single-event-description tribe-events-content">
				<?php the_content(); ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

			<!-- Event meta -->
			<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
			<?php tribe_get_template_part( 'modules/meta' ); ?>
			<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		</div> <!-- #post-x -->
	<?php endwhile; ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div>