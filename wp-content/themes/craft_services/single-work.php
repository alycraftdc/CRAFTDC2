<?php get_header(); ?>

<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
<?php
	if(have_posts()): while(have_posts()): the_post();
	$post_thumbnail_id = get_post_thumbnail_id();
	$thumb = wp_get_attachment_url( $post_thumbnail_id );
	$site_url = get_post_meta($post->ID, "work_site_url", true);
	$youtube = get_post_meta($post->ID, "work_yt_id", true);
	$url = get_permalink($post->ID);
	$share = make_bitly_url($url);
	$tweet = get_post_meta($post->ID, "work_tweet", true);
	$body = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true); ?>
	<h1><?php echo get_the_title(); ?></h1>
	<hr />
	<?php
	if (has_term( 'media', 'work_category' )) { 
		echo '<div class="work-video"><iframe width="100%" height="600" src="https://www.youtube.com/embed/'.$youtube.'" frameborder="0" allowfullscreen></iframe></div>';
	} else { ?>
		<div class="work-preview"><img src="<?php the_field('preview_image'); ?>" /></div>
	<?php }
	?>
	<?php the_content();
	if (has_term( 'digital', 'work_category' )) { 
		echo '<p class="site-link"><a href="'.$site_url.'" target="_blank">Click to View</a></p>';
	} else {
	} ?>
	<ul class="social">
		<li><a href="mailto:name@example.com?subject=Check out CRAFT's work for <?php echo get_the_title(); ?>&body=<?php echo $body ?> <?php echo $share ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/email-icon-2x.png" alt="" border="0" width="25"></a></li>
		<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/facebook-icon-2x.png" alt="" border="0" width="25"></a></li>
		<li><a href="https://twitter.com/home?status=<?php echo $tweet ?>: <?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/twitter-icon-2x.png" alt="" border="0" width="25"></a></li>
		<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/social-icons-2x/linkedin-icon-2x.png" alt="" border="0" width="25"></a></li>
	</ul>
	<?php
	endwhile; endif; wp_reset_query();
?>
</div>

<?php get_footer(); ?>