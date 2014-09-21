<?php
/**
 * Grid view template.  This file loads the TEC month view, specifically the
 * month view navigation.  The actual rendering if the calendar happens in the
 * table.php template.
 *
 * You can customize this view by putting a replacement file of the same name (gridview.php) in the events/ directory of your theme.
 */

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
$tribe_ecp = TribeEvents::instance();
?>

	<div id="tribe-events-content" class="grid" data-title="<?php wp_title(); ?>">
	
		<div class="page-header twelve columns">
	        <div class="cnt-page-hd">
	    	   <h2 class="page-title">Calendar</h2>
	        </div>
	    </div><!--/page-header-->
	
	    <div id='tribe-events-calendar-header' class="nav-page twelve columns clearfix">
	    	<ul class='nav-page-view tribe-events-calendar-buttons left h-list'>
				<li><a class='list tribe-events-button-off' href='<?php echo tribe_get_listview_link(); ?>'><?php _e('Event List', 'tribe-events-calendar'); ?></a></li>
				<li><a class='cal tribe-events-button-on' href='<?php echo tribe_get_gridview_link(); ?>'><?php _e('Calendar', 'tribe-events-calendar'); ?></a></li>
			</ul>
	    	
	    	<ul class="nav-page-filter right h-list tribe-events-month-nav">
				<li class='tribe-events-prev-month'>
					<a href='<?php echo tribe_get_previous_month_link(); ?>' > <!-- class="tribe-pjax">  THREAD BIT DISABLED CLASS ON 2/15/2014 DUE TO ERRORS -->
					&#x2190; <?php echo tribe_get_previous_month_text(); ?>
					</a>
				</li>
				<li class='tribe-events-next-month'>
					<a href='<?php echo tribe_get_next_month_link(); ?>' > <!-- class="tribe-pjax">  THREAD BIT DISABLED CLASS ON 2/15/2014 DUE TO ERRORS -->
					<?php echo tribe_get_next_month_text(); ?> &#x2192;
					</a>
					<img src="<?php echo esc_url( admin_url( 'images/wpspin_light.gif' ) ); ?>" class="ajax-loading" id="ajax-loading" alt="" style='display: none'/>
				</li>
	    	</ul>

			<!-- <?php tribe_month_year_dropdowns( "tribe-events-" ); ?> -->
		</div><!--/tribe-events-calendar-header -->	
	
	
		<?php tribe_calendar_grid(); // See the views/table.php template for customization ?>

<!--
      <?php if( function_exists( 'tribe_get_ical_link' ) ): ?>
         <a title="<?php esc_attr_e('iCal Import', 'tribe-events-calendar'); ?>" class="ical" href="<?php echo tribe_get_ical_link(); ?>"><?php _e('iCal Import', 'tribe-events-calendar'); ?></a>
      <?php endif; ?>
 -->
		<?php if (tribe_get_option('donate-link', false) == true) { ?>
			<p class="tribe-promo-banner"><?php echo apply_filters('tribe_promo_banner', sprintf( __('Calendar powered by %sThe Events Calendar%s', 'tribe-events-calendar'), '<a href="http://tri.be/wordpress-events-calendar/">', '</a>' ) ); ?></p>
		<?php } ?>
	</div>