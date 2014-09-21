<?php
/*
Template Name: About-Press Room
*/
?>
<?php get_header(); ?>
<section class="wrap">

    <div class="row">
    	<div class="twelve columns page-header">
			<div class="cnt-page-hd">
				<h2 class="page-title">About</h2>
			</div>
		</div><!-- /.page-header -->
		
        <div class="twelve columns nav-page clearfix">
            <ul class="nav-page-filter left h-list">
                <li><a href="/about">About</a></li>
                <li><a href="/about/get-involved">Get Involved</a></li>
                <li><a class="active" href="/about/press-room">Press Room</a></li>
		<li><a href="/associates-board">Associates Board</a></li>
            </ul>
        </div><!-- /.nav-page -->
    </div><!-- /.row -->
    
    <div class="row">
    	<div class="col-primary twelve columns">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="twelve columns">
	    		<h2 class="about-hd"><?php the_title(); ?></h2>
			    <?php the_content(); ?>
    		</div><!--/.twelve-->
    		
    		<div class="twelve columns">
    		<?php if( get_field('press_releases') ): ?>
		    	<div class="row press-releases">
		    	<?php while( has_sub_field('press_releases') ): ?>
			        <div class="box twelve columns">
			        	<h4 class="section-subhd"><?php the_sub_field('title'); ?></h4>
			        	<p>View <a href="<?php the_sub_field('pdf'); ?>">Press Release (PDF)</a></p>
			        </div>
		        <?php endwhile; ?>
		        </div><!-- /.press-releases -->
		    <?php endif; ?>
    		</div><!--/.twelve-->
		    
	    <?php endwhile; endif; ?>
    	</div><!--/.col-primary-->
    	
    	<!--
    	<div class="col-side four columns">
   			<div class="side-mod side-quote row">
				<div class="twelve columns">
					<blockquote>“<?php the_field('quote_text', 'option'); ?>”</blockquote>
					<a href="/about">meet the team ></a>
				</div>
			</div>
			
			<div class="side-mod side-events-list row">
				<div class="twelve columns">
					<h5 class="side-mod-title">More Upcoming Events...</h5>
					<ul>
						<li class="side-mod-event mod-overlay">
							<img src="http://dummyimage.com/335x236/000/fff.png" />
							<a href="<?php tribe_get_event_link() ?>" class="overlay mod-event-overlay">
								<div class="vertical-wrap"><h6 class="overlay-title"><?php the_title(); ?></h6></div>
								<span class="icon arrow-east">&raquo;</span>
							</a>
							<div class="date-display">
			                	<div class="month">Dec</div>
			                	<div class="day">06</div>
			                </div>
						</li>
					</ul>
				</div>
			</div>
    	</div><!--/.col-side-->
    	
    </div><!-- /.row -->
    
    
</section><!-- /.wrap -->
<?php get_footer(); ?>