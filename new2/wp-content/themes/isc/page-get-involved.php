<?php
/*
Template Name: About-Get Involved
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
                <li><a class="active" href="/about/get-involved">Get Involved</a></li>
                <li><a href="/about/press-room">Press Room</a></li>
            </ul>
        </div><!-- /.nav-page -->
    </div><!-- /.row -->

    <div class="row">
    	<div class="col-primary twelve columns">
    		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="box twelve columns">
	    		<div class="block-alt mod-email-list ten columns">
	    			<h2 class="about-hd"><?php the_title(); ?></h2>
			        <?php the_content(); ?>
			        <h3 class="section-subhd">Join Our Email List</h3>
                        <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post">
			        <ul>
						<li class="input-container omega nine columns">
	<label for="emaillist-email" class="invisible">Enter email address</label>
							<input type="email" name="ea" placeholder="enter email address" />
                        <input type="hidden" name="llr" value="y7bxphcab">
                        <input type="hidden" name="m" value="1101910476696">
                        <input type="hidden" name="p" value="oi"></form></li>
						</li>
						<li class="alpha three columns"><input type="submit" class="btn btn-green" name="go" value="GO" /></li>
					</form></ul>
	    		</div><!--/.ten-->
    		</div><!--/.twelve-->
    		
    		<?php 
			$rows = get_field('about_block');
			if($rows) {
				foreach($rows as $row) {
					echo '<div class="involve-block">' . $row['block_type'] . '</div>';
				}
			} ?>
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
