<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<section class="wrap">
	
	<!-- Hero -->
	<div class="row">
		<div class="twelve columns">
			
			<?php include('carousel.php'); ?>
			
		</div><!-- /.twelve -->
	</div><!-- /.row -->


	<!-- Historical Featured Events -->
	<div class="row">
	    <?php $i=-1; ?>
		<?php global $post;
		$upcoming = tribe_get_events( array('eventDisplay'=>'upcoming', 'posts_per_page'=>2, 'meta_query' => array(
			array(
				'key'  => 'feature_this_event' ,
				'compare'  => '=' ,
				'value'  => "Yes",
			)
		)  ) );
		foreach($upcoming as $post):
	        setup_postdata($post); ?>
	        <?php $image = get_field('highlight_image'); $i++; ?>
	    <?php if($i % 4 === 0) ?>
	    <div class="six columns" id="loop-<?php echo $i; ?>">
	        <div class="mod-event mod-overlay">
	        	<img src="<?php echo $image['sizes']['event-home']; ?>" alt="" />
	            <a href="<?php the_permalink(); ?>" class="overlay mod-event-overlay">
	                <div class="vertical-wrap"><h3 class="overlay-title"><?php the_title(); ?></h3></div>
	                <span class="icon arrow-east ir">&raquo;</span>
	            </a>
	            <div class="date-display">
	                <div class="month"><?php echo tribe_get_start_date(null,false,'M') ?></div>
	                <div class="day"><?php echo tribe_get_start_date(null,false,'d') ?></div>
	            </div>
	        </div>
	    </div>
	    <?php endforeach; ?>
    </div><!-- /.row -->

    <div class="row">
    
    	<div class="eight columns">
	    	<div class="row">
	    		<div class="six columns">
			    <?php query_posts('showposts=1'); ?>
		            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		            <div class="mod-blog mod-overlay">
			            <?php if (get_field('featured_image')): ?>
			                <?php $image = get_field('featured_image'); ?>
			                <img src="<?php echo $image['sizes']['post-home']; ?>" alt="" />
			                <a class="overlay mod-blog-overlay" href="<?php the_permalink(); ?>">
			                	<div class="vertical-wrap"><h4 class="overlay-title"><?php the_title(); ?></h4></div>
			                	<span class="icon arrow-east ir">&raquo;</span>
			                </a>
			            <?php endif; ?>
		            </div>
		            <?php endwhile; else: ?>
		        <?php endif; ?>
			    </div><!-- /.six -->
			    
			    <div class="six columns mod-text">
			        <h4 class="mod-text-title">Donate to the cause</h4>
			        <p>Put your money where your mind is!  Making science accessible to the public requires people power, brainpower and considerable time.  Please consider a tax-deductible donation to ISC.</p>
			        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
				        <input type="hidden" name="cmd" value="_s-xclick">
				        <input type="hidden" name="hosted_button_id" value="7FUVCUXGTEJ34">
				        <input type="submit" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" value="contribute" class="btn btn-alt btn-orange" />
			        </form>
			    </div><!-- /.four -->
	    	</div><!-- /.row -->
	    	
	    	<div class="row">
	    		<div class="six columns">
	    			<div class="mod-text mod-email-list">
					    <h4 class="mod-text-title">Interested in science?</h4>
					    <p>Do you think any aspect of science, technology, engineering or math (STEM) is awesome?  Or are you maybe just a little curious about some of it?  Then you should know about what ISC has to offer!</p>
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
				</div><!-- /.six -->
				
				<div class="six columns">
		        	<div class="mod-alt mod-social">
		        		<h4 class="mod-text-title">Stay in touch:</h4>
		        		<ul class="social-text">
		        			<li><a href="https://www.facebook.com/illinoissciencecouncil" rel="external"><span class="icon facebook"></span>Find us on Facebook</a></li>
		        			<li><a href="https://twitter.com/IllinoisScience" rel="external"><span class="icon twitter"></span>Follow us on Twitter</a></li>
		        		</ul>
		        	</div>
		        </div><!-- /.six -->
				
	    	</div><!-- /.row -->
    	</div><!-- /.eight -->

		<div class="four columns">
        	<div class="mod-feed">
        		<h4 class="mod-text-title">Talk Nerdy to Me</h4>
        		<p>Join in the conversation on Twitter with the hashtag <a target="_blank" href="https://twitter.com/search/realtime?q=%23IllinoisScience&src=typd" rel="external">#IllinoisScience</a>.</p>
                
                <div id="js-tweet">
                    
                    
                </div>
                
                
        	</div>
        </div><!-- /.four -->
        
    </div><!-- /.row -->

</section>

<?php get_footer(); ?>