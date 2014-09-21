<?php
/*
Template Name: About
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
                <li><a class="active" href="/about">About</a></li>
                <li><a href="/about/get-involved">Get Involved</a></li>
                <li><a href="/about/press-room">Press Room</a></li>
		<li><a href="/associates-board">Associates Board</a></li>
            </ul>
        </div><!-- /.nav-page -->
    </div><!-- /.row -->
    
    <div class="row about-content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="four columns section-hd">
            <h2 class="about-hd"><?php the_title(); ?></h2>
        </div>
        <div class="eight columns section-bd">
        	<?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
    </div><!-- /.about-content -->


	<!-- loop through board -->
	<?php if( get_field('board_of_directors') ): ?>
		<div class="row board-directors">
			<div class="row">
	        	<div class="twelve columns">
		            <h2 class="page-title">Board of Directors</h2>
		        </div><!-- /.twelve.columns -->
        	</div>
	 	<?php while( has_sub_field('board_of_directors') ): ?>
        	<div class="three columns">
            	<div class="media-media">
                	<?php $image = get_sub_field('photo'); ?>
                    <img src="<?php echo $image['sizes']['thumb-square-193']; ?>" alt="" height="193" width="193">
                </div>
                <div class="media-body"   style="min-height:360px;">
                	<h5 class="featured-hd"><?php the_sub_field('name'); ?></h5>
                    <h6 class="position font-ext"><?php the_sub_field('title'); ?></h6>
                    <span class="descrip"><?php the_sub_field('bio'); ?></span>
                </div>
            </div>
        <?php endwhile; ?>
        </div><!-- /.board-directors -->
    <?php endif; ?>


</section><!-- /.wrap -->
<?php get_footer(); ?>


