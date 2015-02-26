<!DOCTYPE html>
<html>
    <head>
        <title><?php 
if (is_home() && is_front_page()) {
		bloginfo('name'); echo ' | '; bloginfo('description'); }
	else {
		   
bloginfo('name'); echo ' | '; wp_title(); }?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <?php wp_head(); ?>
        <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-2x.ico" />
    </head>
    
    <body <?php body_class(); ?>>
    <!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TF9ZSB"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TF9ZSB');</script>
		<!-- End Google Tag Manager -->
		<!-- Homepage Navbar -->
    <div id="sidemenu-wrapper">
      <?php 
        $navd = '';
        $navd .= '<li><a href="'.home_url().'/#nav-pursuit" class="scroll2 text-center">Pursuit</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-services" class="scroll2 text-center">Services</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-focus" class="scroll2 text-center">Focus</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-expertise" class="scroll2 text-center">Expertise</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-team" class="scroll2 text-center">Team</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-clients" class="scroll2 text-center">Clients</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-work" class="scroll2 text-center">Work</a></li>';
        $navd .= '<li><a href="'.home_url().'/#nav-contact" class="scroll2 text-center">Contact</a></li>';
        $navd .= '<li><a href="'.home_url().'/blog" class="text-center">Blog</a></li>';
        $navd .= '<li><a href="'.home_url().'/careers" class="text-center">Careers</a></li>';
        echo '<ul class="row-fluid nav navbar-nav" id="sticky">'.$navd.'</ul>';
      ?>
    </div>
		<div id="nav-wrapper">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header clearfix">
					<div id="nav">
<!-- 
						<button type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" class="navbar-toggle collapsed lines-button x">
							<span class="lines"></span>
						</button>
 -->
						<button id="ChangeToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<div id="nav-hamburger">
								<span class="sr-only">Toggle navigation</span>
								<!-- 
<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
 -->
 								<i id="nav-bars" class="fa fa-bars"></i>
							</div>
							<div id="nav-close" class="hidden">
								<i id="nav-x" class="fa fa-times"></i>
							</div>
						</button>

					</div>
					<div class="nav-brand clearfix" id="logo">
						<a href="<?php bloginfo('url'); ?>"><h1>CRAFT</h1></a>
					</div>
				</div>
				<div id="navbar" class="row-fluid navbar-collapse collapse">
					<div class="col-md-12 col-lg-12" id="navigation">
						<?php 
						$navd = '';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-pursuit" class="text-center">Pursuit</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-services" class="text-center">Services</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-focus" class="text-center">Focus</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-expertise" class="text-center">Expertise</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-team" class="text-center">Team</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-clients" class="text-center">Clients</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-work" class="text-center">Work</a></li>';
						$navd .= '<li><a class="scroll" href="'.home_url().'/#nav-contact" class="text-center">Contact</a></li>';
						$navd .= '<li><a href="'.home_url().'/blog" class="text-center">Blog</a></li>';
						$navd .= '<li><a href="'.home_url().'/careers" class="text-center">Careers</a></li>';
						echo '<ul class="row-fluid nav navbar-nav" id="sticky">'.$navd.'</ul>';
						?>
					</div>
				</div><!--/.nav-collapse -->
			</nav>
		</div>
    <div class="main col-lg-12">
      <div class="container-full">