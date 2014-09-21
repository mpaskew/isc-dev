<?php
/**
* The TEC template for a list of events. This includes the Past Events and Upcoming Events views
* as well as those same views filtered to a specific category.
*
* You can customize this view by putting a replacement file of the same name (list.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

?>
<script type="text/javascript" src="/wp-content/themes/isc/assets/js/events-filter.js"></script>	
<section id="tribe-events-content" class="upcoming">

	<div class="page-header twelve columns">
        <div class="cnt-page-hd">
    	   <h2 class="page-title">Upcoming Events</h2>
        </div>
    </div><!--/page-header-->
        
	<?php if(!tribe_is_day()): // day view doesn't have a grid ?>
	<div id='tribe-events-calendar-header' class="nav-page twelve columns clearfix">
		<ul class='nav-page-view tribe-events-calendar-buttons left h-list'>
			<li><a class='list tribe-events-button-on' href='<?php echo tribe_get_listview_link(); ?>'><?php _e('Event List', 'tribe-events-calendar'); ?></a></li>
			<li><a class='cal tribe-events-button-off' href='<?php echo tribe_get_gridview_link(); ?>'><?php _e('Calendar', 'tribe-events-calendar'); ?></a></li>
		</ul>
	</div><!--/tribe-events-calendar-header-->
	<?php endif; ?>

	<!-- <div id="tribe-events-loop" class="tribe-events-events post-list clearfix"> -->

	<?php if (have_posts()) : ?>
	<?php $hasPosts = true; $first = true; ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php global $more; $more = false; ?>
		
		<div class="twelve columns event-list-landing toggle-event organizer-<?php echo tribe_get_organizer_id() ?>">
			<div data-organizer="<?php echo tribe_get_organizer_id() ?>" id="post-<?php the_ID(); ?>" <?php post_class('tribe-events-event clearfix'); ?> itemscope itemtype="http://schema.org/Event">
	            <div class="entry-img alpha four columns">
	                <?php if (get_field('highlight_image')): ?>
	                    <?php $image = get_field('highlight_image'); ?>
	                    <img src="<?php echo $image['sizes']['post-home']; ?>" alt="" width="300" height="230" />
	                <?php endif; ?>
	                <div class="date-display">
	                	<div class="month"><?php echo tribe_get_start_date(null,false,'M') ?></div>
	                	<div class="day"><?php echo tribe_get_start_date(null,false,'d') ?></div>
	                </div>
	            </div>
	            <div class="box entry-bd omega eight columns">
	    			<div class="alpha nine columns">
	                    <div class="media-hd">
	                        <?php the_title('<h2 class="entry-title event-title" itemprop="name"><a href="' . tribe_get_event_link() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>
	                    </div>
	                    <div class="media-body">
	                        <ul class="entry-meta">
	                            <li class="meta-list-item">
	                                <strong class="date meta-date font-ext"><?php echo tribe_get_start_date(); ?></strong>
	                            </li>
	                            <li class="meta-list-item">
	                                <strong class="location meta-list-loc font-ext"><?php echo tribe_get_full_address( get_the_ID() ); ?></strong>
	                            </li>
	                        </ul>
	              	      <?php $content = get_the_content();
	                          $content = strip_tags($content);
	                          echo substr($content, 0, 400) . "...";
	                          ?>
	                    </div>
	                </div>
	                <div class="event-cta three columns omega">
	                	<a class="btn btn-green offset" href="<?php echo tribe_get_event_link(); ?>">View Details</a>
	                </div>
	            </div>
	    		
			</div> <!-- End post -->
		</div> <!-- End .event-list-landing -->
	<?php endwhile;// posts ?>
	
	<?php else :?>
		<div class="tribe-events-no-entry">
		<?php
			$tribe_ecp = TribeEvents::instance();
			if ( is_tax( $tribe_ecp->get_event_taxonomy() ) ) {
				$cat = get_term_by( 'slug', get_query_var('term'), $tribe_ecp->get_event_taxonomy() );
				if( tribe_is_upcoming() ) {
					$is_cat_message = sprintf(__(' listed under %s. Check out past events for this category or view the full calendar.','tribe-events-calendar'),$cat->name);
				} else if( tribe_is_past() ) {
					$is_cat_message = sprintf(__(' listed under %s. Check out upcoming events for this category or view the full calendar.','tribe-events-calendar'),$cat->name);
				}
			}
		?>
		<?php if(tribe_is_day()): ?>
			<?php printf( __('No events scheduled for <strong>%s</strong>. Please try another day.', 'tribe-events-calendar'), date_i18n('F d, Y', strtotime(get_query_var('eventDate')))); ?>
		<?php endif; ?>

		<?php if(tribe_is_upcoming()){ ?>
			<?php _e('No upcoming events', 'tribe-events-calendar');
			echo !empty($is_cat_message) ? $is_cat_message : "."; ?>

		<?php }elseif(tribe_is_past()){ ?>
			<?php _e('No previous events' , 'tribe-events-calendar');
			echo !empty($is_cat_message) ? $is_cat_message : "."; ?>
		<?php } ?>
		</div>
	<?php endif; ?>


	</div><!-- #tribe-events-loop -->

	<div class="past-events-list">
		<div class="row">
	        <div class="twelve columns">
	            <h2 class="page-title">Jump In Our Time Machine</h2>
	        </div>
	    </div>
	    
		
	    <?php $i=-1; ?>
		<!-- Historical Featured Events -->
		<?php global $post;
		$upcoming = tribe_get_events( array('eventDisplay'=>'past', 'posts_per_page'=>8, 'meta_query' => array(
			array(
				'key'  => 'feature_this_event' ,
				'compare'  => '=' ,
				'value'  => "Yes",
			)
		)  ) );
		foreach($upcoming as $post):
	        setup_postdata($post); ?>
	        <?php $image = get_field('highlight_image'); $i++; ?>
	    <?php if($i % 4 === 0) { echo "</div><div class='row row-events'>"; }  ?>
	    <div class="three mobile-two columns">
	    	<div class="mod-event mod-overlay" id="loop-<?php echo $i; ?>">
	            <img src="<?php echo $image['sizes']['event-rect']; ?>" alt="" />
	            <a href="<?php the_permalink(); ?>" class="overlay mod-event-overlay">
                	<div class="vertical-wrap"><h3 class="overlay-title">View Recap</h3></div>
                	<span class="icon arrow-east ir">&raquo;</span>
                </a>
	        </div>
	        <h3><a class="mod-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	    </div>
	
	    <?php endforeach; ?>
	    </div>
	
	</div>

</section>
