<?php
get_header();
$sec = array(
    'post_type' => 'section',
    'posts_per_page' => '-1',
    'orderby' => 'date',
    'order' => 'ASC'
);

### SECTIONS POST TYPE ###
query_posts($sec);
if(have_posts()): while(have_posts()): the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );

    echo '<div id="'.$post->post_name.'" class="row">'.PHP_EOL;
    $cont =  get_the_content().PHP_EOL;
    if($post->post_name == 'hero'):
        echo get_the_content().'<img src="'.$thumb.'" class="img-repsonsive visible-xs">';
    elseif($post->post_name == 'face'):
        echo '<div class="col-lg-12"><img src="'.$thumb.'" class="face-img"></div>';
    elseif($post->post_name == 'pursuit'):
        echo '<div id="nav-pursuit"></div>
        	<div class="col-lg-12">
            <div class="head">Our Pursuit</div>
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
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h3 class="subhead">'.get_the_excerpt().'</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <p class="text">'.get_the_content().'</p>
              </div>
            </div>
          </div>
'.PHP_EOL;
    endif;
    echo '</div>'.PHP_EOL;
endwhile; endif; wp_reset_query();

$service = array(
    'post_type' => 'service',
    'posts_per_page' => '-1',
    'orderby' => 'ID',
    'order' => 'ASC'
);

### SERVICES POST TYPE ###
echo '<div id="services" class="row">
				<div id="nav-services"></div>
          <div class="col-lg-12">
            <div class="head">Our Services</div>
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
              <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-xl-8 col-xl-offset-2 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <div class="row">'.PHP_EOL;
query_posts($service);
if(have_posts()): while(have_posts()): the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
echo '<div class="col-lg-3 col-md-3 col-sm-6 icon-container">
    <a href="javascript:void(0);">
      <div class="icon">
        <img src="'.$thumb.'">
      </div>
      <div class="service-type">
        <div class="text">'.get_the_title().'</div>
      </div>
    </a>
  </div>';

endwhile; endif; wp_reset_query();
echo '</div>
      </div>
    </div>
  </div>
</div>';


### FOCUS POST TYPE
echo '<div id="focus" class="row">
				<div id="nav-focus"></div>
          <div class="col-lg-12">
            <div class="head">Our Focus</div>
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
                <div class="row">';
$cats = array(
    'corporate-association' => 'left',
    'advocacy' => 'middle',
    'industry' => 'right'
);
foreach($cats as $name => $class){
    $focus = array(
        'post_type' => 'focus',
        'category_name' => $name,
        'posts_per_page' => '-1',
        'orderby' => 'ID',
        'order' => 'ASC'
    );
    query_posts($focus);
      echo '<div class="col-lg-4 col-md-4 col-sm-4">
        <div class="slant-'.$class.' slant">
            <div class="slant-text">'.str_replace('&amp;','&amp;<br>',single_cat_title('',false)).'</div>
        </div>
            <ul class="slant-list-left">';
    if(have_posts()): while(have_posts()): the_post();
        echo '<li>'.get_the_title().'</li>'.PHP_EOL;
    endwhile; endif; wp_reset_query();
    echo '</ul></div>'.PHP_EOL;
}
echo '</div>
    </div>
    </div>
    </div>
    </div>'.PHP_EOL;

### EXPERTISE POST TYPE
echo '<div id="expertise" class="row">
				<div id="nav-expertise"></div>
          <div class="col-lg-12">
            <div class="head">Our Expertise</div>
            <div class="row">
              <div class="col-lg-12">
                <div class="line-row">
                  <div class="left-line"></div>
                  <div class="middle-dot">&bull;</div>
                  <div class="right-line"></div>
                </div>
              </div>
            </div>
            <div class="row">';
$exp = array(
    'post_type' => 'expertise',
    'posts_per_page' => '-1',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$q = new WP_Query($exp);
$i = 0;
if($q->have_posts()): while($q->have_posts()): $q->the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
echo $i % 3 == 0  && $i > 0 ? '</div><div class="row">':'';
echo '<div class="col-lg-4 col-md-4 col-sm-4 icon-holder">
        <div class="icon"><img src="'.$thumb.'"></div>
        <h4 class="title">'.get_the_title().'</h4>';
        the_content();
echo '</div>';
$i++;
endwhile; endif;
echo '</div></div>
        </div>'.PHP_EOL;

### TEAM POST TYPE
echo '<div id="team" class="row">
				<div id="nav-team"></div>
          <div class="col-lg-12">
            <div class="head">Our Team</div>
            <div class="row">
              <div class="col-lg-12">
                <div class="line-row">
                  <div class="left-line"></div>
                  <div class="middle-dot">&bull;</div>
                  <div class="right-line"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 clearfix">';
$team1 = array(
    'post_type' => 'team',
    'posts_per_page' => '3',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$team2 = array(
    'post_type' => 'team',
    'offset' => '3',
    'posts_per_page' => '100',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$q1 = new WP_Query($team1);
$i = 0;
if($q1->have_posts()): while($q1->have_posts()): $q1->the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
$title = get_post_meta($post->ID, "craft_staff_title", true);
$email = get_post_meta($post->ID, "craft_staff_email", true);
$facebook = get_post_meta($post->ID, "craft_staff_fb", true);
$twitter = get_post_meta($post->ID, "craft_staff_twitter", true);
$linkedin = get_post_meta($post->ID, "craft_staff_linkedin", true);
// echo $i % 3 == 0  && $i > 0 ? '</div><div class="row">':'';
echo '<div class="team-cutout col-lg-4 col-md-4 col-sm-4 col-xs-12 icon-holder">
        <div class="team-thumb icon"><a href="'.get_permalink().'"><img class="staff" src="'.$thumb.'"></a></div>
        <h4 class="staff-name">'.get_the_title().'</h4>';
        // the_content();
echo '<h4 class="staff-title">'.$title.'</h4>';
echo '<ul>';
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
echo '</div>';
$i++;
endwhile; endif;
echo '</div></div>'.PHP_EOL;

echo '<div class="col-lg-12" id="accordionTeam" role="tablist" aria-multiselectable="true">
  			<div class="panel panel-default">
					<div id="allTeam" class="col-lg-12 panel-collapse collapse in" role="tabpanel">
						<div class="panel-body row">';

$q2 = new WP_Query($team2);
$i = 0;
if($q2->have_posts()): while($q2->have_posts()): $q2->the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
$title = get_post_meta($post->ID, "craft_staff_title", true);
$email = get_post_meta($post->ID, "craft_staff_email", true);
$facebook = get_post_meta($post->ID, "craft_staff_fb", true);
$twitter = get_post_meta($post->ID, "craft_staff_twitter", true);
$linkedin = get_post_meta($post->ID, "craft_staff_linkedin", true);
echo $i % 3 == 0  && $i > 0 ? '</div><div class="panel-body row">':'';
echo '<div class="team-cutout col-md-4 col-sm-4 col-xs-12 icon-holder">
        <div class="team-thumb icon"><a href="'.get_permalink().'"><img class="staff" src="'.$thumb.'"></a></div>
        <h4 class="staff-name">'.get_the_title().'</h4>';
        // the_content();
echo '<h4 class="staff-title">'.$title.'</h4>';
echo '<ul>';
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
echo '</div>';
$i++;
endwhile; endif;
echo '</div></div>
        </div>'.PHP_EOL;
        
echo '</div></div>';

### CLIENTS POST TYPE
echo '<div id="clients" class="row">
				<div id="nav-clients"></div>
				<div class="col-lg-12">
					<div class="head">Our Clients</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="line-row">
								<div class="left-line"></div>
								<div class="middle-dot">&bull;</div>
								<div class="right-line"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 scale-up">
				<div class="accordionArea">
					<div class="accordion">
						<dl>';

				$customPostTaxonomies = get_object_taxonomies('clients');
				if(count($customPostTaxonomies) > 0) {
					foreach($customPostTaxonomies as $tax)
						{
							$args = array(
								'orderby' => 'slug',
								'show_count' => 0,
								'pad_counts' => 0,
								'hierarchical' => 1,
								'taxonomy' => $tax,
								'title_li' => ''
							);
							$clientcategories = get_categories($args);
							foreach($clientcategories as $category) { ?>
								<dt><a href="javascript:void(0);" class="accordionTitle"> <span class="accordionTitleText"><?php echo $category->name; ?></span></a></dt>
								<dd class="accordionItem accordionItemCollapsed">
									<?php
									$cslug = $category->slug; 
									$custom_category_name = $category->name;
									$custom_category_id = $category->term_id; 
									$type= 'clients';
									?>
									<?php
									$type = 'clients';
									$args=array(
										'post_type' => 'clients',
										'post_status' => 'publish',
										'client_category' => $category->slug,
										'posts_per_page' => -1
									);
									?>
									<div class="row-fluid clearfix">
									<?php
									$logo_query = null;
									$logo_query = new WP_Query($args);
									if( $logo_query->have_posts() ) {
										while ($logo_query->have_posts()) : $logo_query->the_post();
										$post_thumbnail_id = get_post_thumbnail_id();
										$thumb = wp_get_attachment_url( $post_thumbnail_id );
										if ( has_post_thumbnail() ) {
											echo '<div class="col-md-4 col-sm-4 col-xs-6"><img src="'.$thumb.'" border="0"></div>';
										} else {
										
										}
										endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
									</div>
									<ul class="client-list">
									<?php
									$my_query = null;
									$my_query = new WP_Query($args);
									if( $my_query->have_posts() ) {
										while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<li><?php the_title(); ?></li>
											<?php
										endwhile;
									}
									wp_reset_query();  // Restore global post data stomped by the_post().
									?>
									</ul>
								</dd>
							<?php } 
							//wp_list_categories( $args );
						}
					}

echo '</dl></div></div></div></div>'.PHP_EOL;

        
### WORK POST TYPE
echo '<div id="work" class="row">
				<div id="nav-work"></div>
          <div class="col-lg-12">
            <div class="head">Our Work</div>
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
              <div class="col-lg-12 col-md-12">
                <div class="row">';
$work = array(
    'post_type' => 'work',
    'posts_per_page' => '4',
    'orderby' => 'ID',
    'order' => 'ASC'
);
$q = new WP_Query($work);
$i = 0;
if($q->have_posts()): while($q->have_posts()): $q->the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
//echo $i % 3 == 0  && $i > 0 ? '</div><div class="row">':'';
echo '<div class="col-lg-6 col-md-6 col-sm-6 icon-holder">
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
echo '</div></div>
				<center><a href="work"><img class="work-more" src="'.get_stylesheet_directory_uri().'/assets/images/see-more-work-btn-2x.png" border="0" alt="See More Work"></a></center>
        </div></div></div>'.PHP_EOL;
        
### CONTACT
echo '<div id="contact" class="row">
				<div id="nav-contact"></div>
				<div class="wrap">
					<div class="head">Contact Us</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="line-row">
								<div class="left-line"></div>
								<div class="middle-dot">&bull;</div>
								<div class="right-line"></div>
							</div>
						</div>
					</div>
				</div>'; ?>
				<a href="https://goo.gl/maps/jncXW" target="_blank"><img width="100%" src="http://craftcampaigns.com/services/wp-content/uploads/2015/02/craft-map-2x.png" border="0" /></a>
<?php
$q = new WP_Query( 'page_id=174' );
if($q->have_posts()): while($q->have_posts()): $q->the_post();
$post_thumbnail_id = get_post_thumbnail_id();
$thumb = wp_get_attachment_url( $post_thumbnail_id );
echo '<div class="content">';
				the_content();
endwhile; endif;
echo '</div>	
			</div>'.PHP_EOL;
get_footer();
?>