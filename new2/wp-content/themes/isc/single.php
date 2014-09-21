<?php get_header(); ?>

<section class="wrap">
	<div class="row">
	
		<div class="row page-header">
	        <div class="cnt-page-hd twelve columns">
	    	   <h2 class="page-title">The ISC Blog</h2>
	        </div>
		</div><!-- /.page-header -->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-content row clearfix">
            	<div class="alpha four columns">
                    <div class="post-img">
                    <?php if (get_field('featured_image')): ?>
                        <?php $image = get_field('featured_image'); ?>
                        <img src="<?php echo $image['sizes']['post-thumb']; ?>" alt="">
                    <?php endif; ?>
                    </div>
                    <div class="post-social mod-social">
		    			<ul class="h-list icon-list">
		    				<li>Help us spread<br>the word:</li>
                            <li>
                                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="75" data-show-faces="false" data-font="lucida grande"></div>
                            </li>
                            <li>
                                <a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-via="illinoisscience" data-lang="en" data-related="anywhereTheJavascriptAPI" data-count="vertical">Tweet</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </li>
                            
		    			</ul>
					</div>
            	</div><!-- /.four.columns -->
                <div class="box post-bd omega eight columns">
                	<h2 class="post-title"><?php the_title(); ?></h2>
                	<ul class="entry-meta">
                		<li class="meta-date font-ext">Posted on <?php the_time('F jS, Y') ?> <?php the_time() ?></li>
                	</ul>
            	    <?php the_content(); ?>
	                <div class="meta-category">blog category: <a href=""><?php the_category(', ') ?></a></div>
                </div><!-- /.eight.columns -->
            </div><!-- /.post-content -->
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        
        <div class="recent-posts row">
        	<div class="row">
	        	<div class="twelve columns">
		            <h2 class="page-title">More Blog Posts</h2>
		        </div><!-- /.twelve.columns -->
        	</div>
        	
        	<div class="row">
                
                <?php
                	$args = array( 'numberposts' => '3' );
                	$recent_posts = wp_get_recent_posts( $args );
                	foreach($recent_posts as $recent): ?>
                    
                    
            		<div class="four mobile-one columns">
            			<div class="mod-blog mod-overlay">
                            <?php $pimage = get_field('featured_image', $recent['ID']); ?>
                            <img src="<?php echo $pimage['sizes']['post-thumb']; ?>" alt="">
    			            <a href="<?php the_permalink(); ?>" class="overlay mod-blog-overlay">
                                <div class="vertical-wrap"><h4 class="overlay-title">View Article</h4></div>
    		                	<span class="icon arrow-east ir">&raquo;</span>
    		                </a>
    			        </div>
    			        <h3><a class="mod-title" href="<?php get_permalink($recent["ID"]) ?>"><?php echo $recent["post_title"] ?></a></h3>
            		</div><!-- /.four.columns -->
                    
                    
                <?php endforeach; ?>
                        
                        
            </div><!-- /.row -->
                
        </div><!-- /.recent-posts -->
	
    </div><!-- /.row -->
</section><!-- /.wrap -->
<?php get_footer(); ?>