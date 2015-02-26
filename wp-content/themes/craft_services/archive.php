<?php
get_header(); ?>
<h1 class="head">Archives <?php the_title(); ?></h1>
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
			$blog = array(
					'showposts' => '5',
					'posts_per_page' => '-1',
					'orderby' => 'ID',
					'order' => 'DESC'
			);
			query_posts($blog);
			if(have_posts()): while(have_posts()): the_post();
			$url = get_permalink($post->ID);
			$share = make_bitly_url($url);
			the_date('M d Y', '<date>', '</date>'); ?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<author>Posted by: <?php the_author(); ?></author>
			<?php the_excerpt(); ?>
			<ul class="social">
				<li><a href="mailto:name@example.com?subject=&body="><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/email-icon-2x.png" alt="" border="0" width="25"></a></li>
				<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/facebook-icon-2x.png" alt="" border="0" width="25"></a></li>
				<li><a href="https://twitter.com/home?status=<?php echo get_the_title(); ?>:<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/twitter-icon-2x.png" alt="" border="0" width="25"></a></li>
				<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share ?>&title=<?php echo get_the_title(); ?>&summary=<?php get_the_title(); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/linkedin-icon-2x.png" alt="" border="0" width="25"></a></li>
			</ul>
			<hr class="blog-posts">
			<?php
			endwhile; endif; wp_reset_query();
			?>
		</div>

		<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12 sidebar">
			<?php dynamic_sidebar( 'blog-sidebar' ); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>