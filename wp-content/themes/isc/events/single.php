<?php
/**
* A single event.  This displays the event title, description, meta, and
* optionally, the Google map for the event.
*
* You can customize this view by putting a replacement file of the same name (single.php) in the events/ directory of your theme.
*/

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>

<!-- <span class="back"><a href="<?php echo tribe_get_events_link(); ?>"><?php _e('&laquo; Back to Events', 'tribe-events-calendar'); ?></a></span>                 -->

<div id="tribe-events-event-meta" itemscope itemtype="http://schema.org/Event">

	<div class="entry-single eight columns">
    	<div class="entry-head row">
			<div class="entry-img six columns">
                <?php if (get_field('highlight_image')): ?>
                    <?php $image = get_field('highlight_image'); ?>
                    <img src="<?php echo $image['sizes']['post-home']; ?>" alt="" width="300" height="230" />
                <?php endif; ?>
                
            </div>
			<div class="entry-social mod-social six columns">
    			<ul class="h-list icon-list">
    				<li>Help us spread<br />the word:</li>
                    
                    <li>
                        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="75" data-show-faces="false" data-font="lucida grande"></div>
                    </li>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="illinoisscience" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </li>
    			</ul>
			</div>
    	</div>

    	<div class="entry-body row">
    		<h1 class="entry-title"><?php the_title(); ?></h1>
    		<ul class="entry-meta">
            	<li class="meta-list-item">
                	<div class="date meta-date font-ext"><?php echo tribe_get_start_date(); ?> to <?php echo tribe_get_end_date(); ?> <span class="cost">$<?php echo tribe_get_cost(); ?>/ticket</span></div>
            	</li>
            	<li class="meta-list-item">
                	<div class="location meta-list-loc font-ext"><?php echo tribe_get_venue( get_the_ID() ); ?><?php echo tribe_get_full_address( get_the_ID() ); ?></div>
            	</li>
    		</ul>
            <?php if (strtotime( tribe_get_end_date(get_the_ID(), false, 'Y-m-d G:i') . $gmt_offset ) <= time () ) { ?>
            <div class="recap">
            	<?php 
            		$recap = get_field('event_recap');
            		if ($recap !=""){
            			echo $recap;
            		} else {
            			echo "This event already happened. Let us know if you'd like to see it happen again!";
            		}
            	?>
            </div>
            </div>
            </div>
            <?php } else { ?>
	        <div class="description">
	            <?php the_content(); ?>
	        </div>

            
            <?php if(tribe_get_custom_field('Eventbrite ID')): ?>
	        <a href="http://www.eventbrite.com/event/<?php echo tribe_get_custom_field('Eventbrite ID'); ?>" target="_blank" class="btn btn-green">sign up</a>
            <?php endif; ?>
            
	    </div><!-- /.entry-body -->
        
        <!-- START address and map -->
		<?php if( tribe_address_exists( get_the_ID() ) ) : ?>
            
            <?php $encodedAddress = strip_tags(tribe_get_full_address( get_the_ID() )); ?>
            
        	<div class="entry-mod row location">
        		<div class="entry-mod-body">
        			<h2 class="entry-mod-title">Event Location</h2>
            		<p>Address:&nbsp;<a target="_blank" href="<?php echo tribe_get_map_link(); ?>"><?php echo tribe_get_full_address( get_the_ID() ); ?></a></p>
                    <iframe width="609" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=<?php echo $encodedAddress; ?>&amp;aq=&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
        		</div>
        	</div><!-- /.mod-map -->
        
		<?php endif; ?>
        <!-- END address and map -->
            <?php } ?>
    </div><!-- /.entry-single -->


	<div class="entry-sidebar four columns">
		<div class="side-mod side-quote row">
			<div class="twelve columns">
				<blockquote>“<?php the_field('quote_text', 'option'); ?>”</blockquote>
				<a href="/about">meet the team ></a>
			</div>
		</div>

		<div class="side-mod side-email-list mod-email-list row">
			<div class="twelve columns">
				<h5 class="side-mod-title">Join Our Email List</h5>
				<ul>
					<li class="input-container omega nine columns">

                        <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
                            <input type="text" name="ea" size="20" value="">

					</li>
					<li class="alpha three columns">
                        <input type="submit" name="go" value="GO" class="submit">
                        <input type="hidden" name="llr" value="y7bxphcab">
                        <input type="hidden" name="m" value="1101910476696">
                        <input type="hidden" name="p" value="oi"></form></li>
				</ul>
					
			</div>
		</div>

		<div class="side-mod side-events-list row">
			<div class="twelve columns">
				<h5 class="side-mod-title">Upcoming Events...</h5>
				<ul>



<?php $i=-1; ?>
    <?php global $post;
    $upcoming = tribe_get_events( array('eventDisplay'=>'upcoming', 'posts_per_page'=>2));
    foreach($upcoming as $post):
    setup_postdata($post); ?>
    <?php $image = get_field('highlight_image'); $i++; ?>
	
	<li class="side-mod-event mod-overlay">
	                <img src="<?php echo $image['sizes']['event-sidebar']; ?>" width="335" height="236" alt="" />
	                <a href="<?php the_permalink(); ?>" class="overlay mod-event-overlay">
	                        <div class="vertical-wrap"><h6 class="overlay-title"><?php the_title(); ?></h6></div>
	                        <span class="icon arrow-east">&raquo;</span>
	                </a>
	                <div class="date-display">
	        <div class="month"><?php echo tribe_get_start_date(null,false,'M') ?></div>
	        <div class="day"><?php echo tribe_get_start_date(null,false,'d') ?></div>
	</div>
	        </li>
	
<?php endforeach; ?>

				</ul>
			</div>
		</div>

	</div><!-- /.four.columns -->
</div>


<?php
	/*$gmt_offset = (get_option('gmt_offset') >= '0' ) ? ' +' . get_option('gmt_offset') : " " . get_option('gmt_offset');
 	$gmt_offset = str_replace( array( '.25', '.5', '.75' ), array( ':15', ':30', ':45' ), $gmt_offset );
 	if (strtotime( tribe_get_end_date(get_the_ID(), false, 'Y-m-d G:i') . $gmt_offset ) <= time() ) { ?><div class="event-passed"><?php  _e('This event has passed.', 'tribe-events-calendar'); ?></div><?php } */ ?>

<!--
	<?php if( function_exists('tribe_get_single_ical_link') ): ?>
	   <a class="ical single" href="<?php echo tribe_get_single_ical_link(); ?>"><?php _e('iCal Import', 'tribe-events-calendar'); ?></a>
	<?php endif; ?>
	<?php if( function_exists('tribe_get_gcal_link') ): ?>
	   <a href="<?php echo tribe_get_gcal_link(); ?>" class="gcal-add" title="<?php _e('Add to Google Calendar', 'tribe-events-calendar'); ?>"><?php _e('+ Google Calendar', 'tribe-events-calendar'); ?></a>
	<?php endif; ?>

	<div class="navlink tribe-previous"><?php tribe_previous_event_link(); ?></div>

	<div class="navlink tribe-next"><?php tribe_next_event_link(); ?></div>
 -->
<div style="clear:both"></div>
