<?php get_header(); ?>

<?php
	if(have_posts()): while(have_posts()): the_post();
	$post_thumbnail_id = get_post_thumbnail_id();
	$thumb = wp_get_attachment_url( $post_thumbnail_id );
	$name = get_the_title();
	$title = get_post_meta($post->ID, "craft_staff_title", true);
	$email = get_post_meta($post->ID, "craft_staff_email", true);
	$facebook = get_post_meta($post->ID, "craft_staff_fb", true);
	$twitter = get_post_meta($post->ID, "craft_staff_twitter", true);
	$linkedin = get_post_meta($post->ID, "craft_staff_linkedin", true);
	echo '<h1>'.get_the_title().'</h1>
				<div class="team-fullsize"><img src="'.$thumb.'"></div>';
	echo '<ul class="social-bar">';
	if( !empty($email) ) {
			echo '<li><a class="social" href="mailto:'.$email.'"><img src="'.get_stylesheet_directory_uri().'/assets/images/social-icons-2x/email-icon-2x.png" alt="" border="0" width="25"></a></li>';
	}
	if( !empty($facebook) ) {
			echo '<li><a class="social" href="'.$facebook.'" target="_blank"><img src="'.get_stylesheet_directory_uri().'/assets/images/social-icons-2x/facebook-icon-2x.png" alt="" border="0" width="25"></a></li>';
	}
	if( !empty($twitter) ) {
			echo '<li><a class="social" href="'.$twitter.'" target="_blank"><img src="'.get_stylesheet_directory_uri().'/assets/images/social-icons-2x/twitter-icon-2x.png" alt="" border="0" width="25"></a></li>';
	}
	if( !empty($linkedin) ) {
		echo '<li><a class="social" href="'.$linkedin.'" target="_blank"><img src="'.get_stylesheet_directory_uri().'/assets/images/social-icons-2x/linkedin-icon-2x.png" alt="" border="0" width="25"></a></li>';
	}
	echo '</ul>';
	echo '<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 content">';
	the_content();
	echo '</div>';
	endwhile; endif; wp_reset_query();
?>

	<div class="col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12 sidebar">
		<?php dynamic_sidebar( 'team-sidebar' ); ?>
	</div>
</div>

<?php get_footer(); ?>