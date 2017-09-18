<!DOCTYPE html>
<html>
<head>
	<title><?php echo bloginfo( 'title' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<img src="https://www.bolnetwork.com/assets/images/logo.png" alt="">
			</div>
			<div class="col-md-4" id="social-links">
				<h3 class="lead">Call us on<span id="phone-number"> - 03047495078</span>
					<a href="http://www.facebook.com/" target="_blank"><i class="fa fa-facebook fa-3"></i></a>
					<a href="http://www.facebook.com/" target="_blank"><i class="fa fa-twitter fa-3"></i></a>
					<a href="http://www.facebook.com/" target="_blank"><i class="fa fa-google-plus fa-3"></i></a>
					<a href="http://www.facebook.com/" target="_blank"><i class="fa fa-youtube fa-3"></i></a>
				</h3>

			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse">
	  <div class="container">    
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
	     	 <?php
	            wp_nav_menu( array(
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => false,            
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
        	?>
	      <form method="get" class="navbar-form navbar-right" role="search" action="<?php echo esc_url(home_url('/')); ?>">
	      <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain'); ?></label>
	       <div class="form-group">
	       		<input type="text" class="form-control" name="s" id="navbar-search">
	       </div>
	       <button type="submit" class="btn btn-default"><?php _e('Search', 'textdomain'); ?></button>
	      </form>   
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>