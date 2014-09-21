<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>
<?php query_posts('posts_per_page=6'); ?>

<section class="wrap">
	
	<div class="row">
		<div class="twelve columns page-header">
			<div class="cnt-page-hd">
				<h2 class="page-title">The ISC Blog</h2>
			</div>
		</div>
		<div class="twelve columns nav-page clearfix">
			<ul class="nav-page-filter left h-list">
				<li><a href="/news" class="active">Everything</a></li>
				<li><a href="/blog/news">News</a></li>
				<li><a href="/blog/event-recaps">Event Recaps</a></li>
			</ul>
		</div>
	</div>
	
	<div class="blog-list-landing row">
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	    <div id="post-<?php the_ID(); ?>" <?php post_class('blog-entry twelve columns'); ?>>    	
	        <?php if (get_field('featured_image')): ?>
	            <?php $image = get_field('featured_image'); ?>
	            <div class="alpha entry-img four columns">
	                <img src="<?php echo $image['sizes']['post-thumb']; ?>" alt="">
	                <div class="date-display">
	                	<div class="month"><?php strtoupper(the_time('M')); ?></div>
	                	<div class="day"><?php the_time('d'); ?></div>
	                </div>
	            </div>
	        <?php endif; ?>
	        <div class="box entry-bd omega eight columns">
	            <div class="media-hd">
	                <h2 class="entry-title blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	            </div>
	            <div class="media-body">
	            	<ul class="entry-meta"><li class="meta-date font-ext">Posted on <?php the_time('F jS, Y') ?> <?php the_time() ?></li></ul>
	        	      <?php $content = get_the_content();
	                    $content = strip_tags($content);
	                    echo substr($content, 0, 220);
	                    ?>
	                <ul class="entry-footer">
	                	<li class="blog-cta"><a class="btn btn-purple offset" href="<?php the_permalink(); ?>">View Details</a></li>
	                </ul>
	            </div>
	        </div>
	    </div><!-- /.row -->
	    <?php endwhile;// posts ?>
	    <div class="row">
	    	<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				
				query_posts('posts_per_page=6&paged=' . $paged); 
			?>
	    </div>
    </div><!-- /.blog-list-landing -->
    
    <?php else :?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

    <?php endif; ?>


</section>
<?php get_footer(); ?>