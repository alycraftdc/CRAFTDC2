<?php
/*
* Template Name: Our Work
*/
get_header(); ?>
<h1 class="head">Our Work</h1>
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
	<?php
	$work = array(
			'post_type' => 'work',
			'posts_per_page' => '-1',
			'orderby' => 'ID',
			'order' => 'ASC'
	);
	$q = new WP_Query($work);
	$i = 0;
	if($q->have_posts()): while($q->have_posts()): $q->the_post();
	$post_thumbnail_id = get_post_thumbnail_id();
	$thumb = wp_get_attachment_url( $post_thumbnail_id );
	//echo $i % 3 == 0  && $i > 0 ? '</div><div class="row">':'';
	echo '<div class="col-lg-6 col-md-6 col-sm-6 nopadding">
					<div class="icon grid">
						<figure class="effect-lily">
							<img src="'.$thumb.'">
							<figcaption>
								<div>
									<p>'.get_the_title().'</p>
								</div>
								<a href="'.get_permalink().'">View More</a>
							</figcaption>
						</figure>
					</div>';
	echo '</div>';
	$i++;
	endwhile; endif;
	?>
</div>

<?php get_footer(); ?>