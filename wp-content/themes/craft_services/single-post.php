<?php
get_header(); ?>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 content">
			<?php
			if(have_posts()): while(have_posts()): the_post();
			$url = get_permalink($post->ID);
			$share = make_bitly_url($url);
			the_date('M d Y', '<date>', '</date>'); ?>
			<h2><?php the_title(); ?></h2>
			<author>Posted by: <?php the_author(); ?></author>
			<?php the_content(); ?>
			<ul class="social">
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/facebook-icon-2x.png" alt="" border="0" width="25"></a></li>
				<li><a href="https://twitter.com/home?status=<?php echo get_the_title(); ?>:<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/twitter-icon-2x.png" alt="" border="0" width="25"></a></li>
				<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share ?>&title=<?php echo get_the_title(); ?>&summary=<?php get_the_title(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/linkedin-icon-2x.png" alt="" border="0" width="25"></a></li>
			</ul>
			<?php endwhile; endif; wp_reset_query();
			?>
		</div>

		<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12 sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>