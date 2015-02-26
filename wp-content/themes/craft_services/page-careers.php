<?php 
/*
* Template Name: Careers
*/
get_header(); ?>
<h1 class="head"><?php the_title(); ?></h1>
<div class="row">
	<div class="col-lg-12">
		<div class="line-row">
			<div class="left-line"></div>
			<div class="middle-dot">&bull;</div>
			<div class="right-line"></div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 content">
			<?php
			if(have_posts()): while(have_posts()): the_post();
			the_content();
			endwhile; endif; wp_reset_query();
			?>
		</div>

		<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12 sidebar">
			<?php dynamic_sidebar( 'team-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>