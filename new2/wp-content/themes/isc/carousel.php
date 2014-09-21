<?php if(get_field('carousel_slides')): ?>
<div class="flexslider carousel">
	<ul class="slides">
		<?php while(has_sub_field('carousel_slides')): ?>
		<li>
			<img src="<?php the_sub_field('bg_img'); ?>" alt="" />
			<div class="four columns slide-content">
				<div class="inner">
					<h2 class="slide-title"><?php the_sub_field('caption'); ?></h2>
					<div class="slide-cta"><a href="<?php the_sub_field('link'); ?>" class="btn btn-blue"><?php the_sub_field('btn_text'); ?></a></div>
				</div>
			</div>
		</li>
		<?php endwhile; ?>
	</ul><!-- /.slides -->
</div><!-- /.flexslider -->
<?php endif; ?>