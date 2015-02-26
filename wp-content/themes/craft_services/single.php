<?php
get_header(); ?>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 content">
			<?php
			if(have_posts()): while(have_posts()): the_post();
			the_date('M d Y', '<date>', '</date>'); ?>
			<h2><?php the_title(); ?></h2>
			<author>Posted by: <?php the_author(); ?></author>
			<?php the_content();
			endwhile; endif; wp_reset_query();
			?>
		</div>

		<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12 sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>