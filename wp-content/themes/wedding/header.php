<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  		<link href='http://fonts.googleapis.com/css?family=Copse|Six+Caps' rel='stylesheet' type='text/css'>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->	
		
			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->	
	</head>
	
	<body <?php body_class(); ?>>
		
		<div class="container-fluid">
			<div id="content" class="clearfix row">
				<div class="col-md-offset-2 col-md-8 home-panel">
					<div class="header"></div>
					<div class="mid">

					<h1>We're Getting Married</h1>
					<p class="sub-title">Saturday 27<sup>th</sup> June 2015</p>

					<div class="head_names">
		            	<div class="head_name_left">
			            	<span class="head_name">
			                	<strong>RICK</strong> <em>BURGESS</em>
			                </span>
		                </div>
		                <span class="head_amp"></span>                
		                <div class="head_name_right">
			                <span class="head_name">
			                	<strong>LOUISE</strong> <em>DUNNE</em>
			                </span>
		                </div>
		            </div>

		            <nav id="topmenu">  			
		        		<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_class' => 'nav-menu' ) ); ?>
		        	</nav>



