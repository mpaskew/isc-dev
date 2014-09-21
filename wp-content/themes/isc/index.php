<?php
/*
Template Name: Index
*/
?>
<?php 
	function isMobile() {
	    return preg_match("/(android|avantgo|bada|blackberry|bolt|boost|cricket|docomo|fone|hiptop|ipod|iphone|ipad|kindle|mini|mobi|palm|phone|pie|symbian|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
	}
	get_header(); ?>

<!-- <div class="row"> -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
	<section class="wrap">
		<div class="row">
			<?php the_content(); ?>
		</div>
	</section>
    
    
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
<!-- </div> -->

<?php get_footer(); ?>