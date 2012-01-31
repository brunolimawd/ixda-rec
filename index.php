<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="pt-br" xmlns:og="http://ogp.me/ns#" xmlns:og="http://ogp.me/fb#"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="pt-br" xmlns:og="http://ogp.me/ns#" xmlns:og="http://ogp.me/fb#"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="pt-br" xmlns:og="http://ogp.me/ns#" xmlns:og="http://ogp.me/fb#"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="no-js" lang="pt-br" xmlns:og="http://ogp.me/ns#" xmlns:og="http://ogp.me/fb#"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title( ' - ', true, 'right' );bloginfo( 'name' ); ?></title>
	<meta name="author" content="humans.txt"> 
	<meta name="Description" content="<?php bloginfo('description'); ?>">
	<meta name="Keywords" content=" ">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- </meta tags default> -->
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/layout/ixda-recife-avatar.png">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta property="og:description" content="<?php bloginfo('description'); ?>">
	<!-- </meta tags Open Graph protocol> -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/layout/favicon.ico">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/layout/favicon.ico">
	<link rel="apple-touch-icon" href=" ">
	<!-- </favicon> -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<!-- </style> -->
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.js"></script>
	<!-- </script> -->
	<!--[if IE 6]>
		<script src="<?php bloginfo('template_directory'); ?>/js/libs/pngfix.js" type="text/javascript"></script>
		<script>
			DD_belatedPNG.fix('*');
		</script>
		<script type="text/javascript">
			var IE6UPDATE_OPTIONS = {
				icons_path: "<?php bloginfo('template_directory'); ?>/js/libs/ie6update/images/"
			}
		</script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/libs/ie6update/ie6update.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="screen-reader">
		<a href="#content" accesskey="c">Alt + Shift + C ir para o conteúdo</a>
		<a href="#nav" accesskey="m">Alt + Shift + M ir para o menu</a>
		<a href="#search" accesskey="b">Alt + Shift + B ir para a busca</a>
		<a href="#footer" accesskey="f">Alt + Shift + F ir para o rodapé</a>
	</nav><!-- </skipNav> -->
	<div id="wrap">
		<div id="container">
			<header id="header">
				<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
				<nav class="social-media">
					<ul>
						<li class="facebook"><a href="http://www.facebook.com/groups/155127471236121/" title="O IxDA no Facebook" rel="external">Facebook</a></li>
						<li class="twitter"><a href="http://twitter.com/ixdarecife" title="O IxDA no Twitter" rel="external">Twitter</a></li>
						<li class="flickr"><a href="http://www.flickr.com" title="O IxDA no Flickr" rel="external">Flickr</a></li>
						<li class="rss"><a href="<?php bloginfo('rss_url'); ?>" title="Assine o RSS do IxDA Recife" rel="external">RSS</a></li>
					</ul>
				</nav>
			</header><!-- </header> -->
			<section id="content">
				<section id="about">
					<h2>.sobre</h2>
				</section>
				<section id="events">
					<h2>.eventos</h2>
				</section>
				<section id="blog">
					<h2>.blog</h2>
				</section>
				<section id="candidature">
					<h2>.candidatura</h2>
				</section>
				<section id="contact">
					<h2>.contato</h2>
				</section>
			</section><!-- </content> -->
			<footer id="footer">
				<section class="developer">
					<a rel="external" title="" href="#"></a>
				</section>
			</footer><!-- </footer> -->
		</div><!-- </container> -->
	</div><!-- </wrap> -->
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/easing.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>
	<!-- </script> -->
	<!-- <google analytics>-->
	
	<!-- </google analytics>-->
</body>
</html>