<?php
/*
Template Name: Resources
*/
?>
<?php get_header(); ?>

<section class="wrap">

	<div class="row">
		<div class="twelve columns page-header">
			<div class="cnt-page-hd">
				<h2 class="page-title"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="twelve columns nav-page clearfix">
			<ul class="nav-page-filter left h-list">
				<li><a href="/resources" class="active">For Everyone</a></li>
				<li><a href="/scientists">For Scientists</a></li>
			</ul>
		</div>
	</div>
    
    <div class="resource-list-landing row">
	    <div class="twelve columns">
		<?php if (have_posts()) : while (have_posts()) : the_post();?>
			<div class="section-bd"><?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?></div>
		<?php endwhile; endif; ?>
	    </div>
        <?php if( get_field('resources') ): ?>
        	<?php while( has_sub_field("resources") ): ?>
        		<?php if(get_row_layout() == "link"): // layout: Link ?>
        		
        			<div class="resource-item row">
	                    <div class="entry-img alpha four columns">
	                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-link.jpg" alt="">
	                    </div><!-- /.entry-img -->
	                    
	                    <div class="box entry-bd omega eight columns">
	                    	<div class="alpha nine columns">
		                    	<div class="media-hd">
		                    		<h2 class="entry-title resource-title"><a href="<?php the_sub_field('link'); ?>" target="_blank" rel="external"><?php the_sub_field('title'); ?></a></h2>
		                    		<ul class="entry-meta">
		                    			<li class="meta-date font-ext">Posted <?php the_time('F jS, Y') ?> <?php the_time() ?></li>
		                    		</ul>
		                    	</div>
	                            <div class="media-body"><?php the_sub_field('description'); ?></div>
	                    	</div>
                            <div class="event-cta three columns omega">
                            	<a class="btn btn-blue offset" href="<?php the_sub_field('link'); ?>" target="_blank" rel="external">View</a>
                            </div>
	                    </div><!-- /.entry-bd -->
        			</div><!-- /.row -->

        		<?php elseif(get_row_layout() == "download"): // layout: File ?>
        		
        			<div class="resource-item row">
	                    <div class="entry-img alpha four columns">
	                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-file.jpg" alt="">
	                    </div><!-- /.entry-img -->
	                    
	                    <div class="box entry-bd omega eight columns">
	                    	<div class="alpha nine columns">
		                    	<div class="media-hd">
		                    		<h2 class="entry-title resource-title"><a href="<?php the_sub_field('download'); ?>" target="_blank" rel="external"><?php the_sub_field('title'); ?></a></h2>
		                    		<ul class="entry-meta">
		                    			<li class="meta-date font-ext">Posted <?php the_time('F jS, Y') ?> <?php the_time() ?></li>
		                    		</ul>
		                    	</div>
	                            <div class="media-body"><?php the_sub_field('description'); ?></div>
	                    	</div>
                            <div class="event-cta three columns omega">
                            	<a class="btn btn-blue offset" href="<?php the_sub_field('download'); ?>" target="_blank" rel="external">View</a>
                            </div>
	                    </div><!-- /.entry-bd -->
        			</div><!-- /.row -->

        		<?php elseif(get_row_layout() == "photo"): // layout: File ?>
        		
        			<div class="resource-item row">
	                    <div class="entry-img alpha four columns">
	                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-photo.jpg" alt="">
	                    </div><!-- /.entry-img -->
	                    
	                    <div class="box entry-bd omega eight columns">
	                    	<div class="alpha nine columns">
		                    	<div class="media-hd">
		                    		<h2 class="entry-title resource-title"><a href="<?php the_sub_field('link'); ?>" target="_blank" rel="external"><?php the_sub_field('title'); ?></a></h2>
		                    		<ul class="entry-meta">
		                    			<li class="meta-date font-ext">Posted <?php the_time('F jS, Y') ?> <?php the_time() ?></li>
		                    		</ul>
		                    	</div>
	                            <div class="media-body"><?php the_sub_field('description'); ?></div>
	                    	</div>
                            <div class="event-cta three columns omega">
                            	<a class="btn btn-blue offset" href="<?php the_sub_field('link'); ?>" target="_blank" rel="external">View</a>
                            </div>
	                    </div><!-- /.entry-bd -->
        			</div><!-- /.row -->

        		<?php elseif(get_row_layout() == "video"): // layout: File ?>
        		
        			<div class="resource-item row">
	                    <div class="entry-img alpha four columns">
	                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon-video.jpg" alt="">
	                    </div><!-- /.entry-img -->
	                    
	                    <div class="box entry-bd omega eight columns">
	                    	<div class="alpha nine columns">
		                    	<div class="media-hd">
		                    		<h2 class="entry-title resource-title"><a href="<?php the_sub_field('link'); ?>" target="_blank" rel="external"><?php the_sub_field('title'); ?></a></h2>
		                    		<ul class="entry-meta">
		                    			<li class="meta-date font-ext">Posted <?php the_time('F jS, Y') ?> <?php the_time() ?></li>
		                    		</ul>
		                    	</div>
	                            <div class="media-body"><?php the_sub_field('description'); ?></div>
	                    	</div>
                            <div class="event-cta three columns omega">
                            	<a class="btn btn-blue offset" href="<?php the_sub_field('link'); ?>" target="_blank" rel="external">View</a>
                            </div>
	                    </div><!-- /.entry-bd -->
        			</div><!-- /.row -->

                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
	    </div>
    </div><!-- /.resource-list-landing -->

</section>
<?php get_footer(); ?>