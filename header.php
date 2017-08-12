<!doctype html>
<html>
<head>
  <?php wp_head(); ?>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BLOG index with sidebar & slider  | Amaze UI Examples</title>
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/i/favicon.png">
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<!-- 请置于所有广告位代码之前 -->
	<script src="https://dup.baidustatic.com/js/ds.js"></script>
</head>
<body>
<div id="wrapper" class="wide-layout">	
<header class="am-g am-g-fixed theme-header">
    <div class="am-u-sm-centered">
        <img width="200" src="http://s.amazeui.org/media/i/brand/amazeui-b.png" alt="真是赞 Logo"/>
        <h2 class="am-hide-sm-only"><?php bloginfo(‘name’); ?></h2>
    </div>
<!-- nav start -->
	<nav class="am-g-fixed">
	<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only blog-button" data-am-collapse="{target: '#blog-collapse'}" ><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

	  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
		<ul class="am-nav am-nav-pills am-topbar-nav">      
		  <li class="am-active"><a href="/">首页</a></li>
		  <li class="am-dropdown" data-am-dropdown>
			<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
			  首页布局 <span class="am-icon-caret-down"></span>
			</a>
			<ul class="am-dropdown-content">
			  <li><a href="index.php">1. blog-index-standard</a></li>         
			  <li><a href="lw-index-nosidebar.html">2. blog-index-nosidebar</a></li>
			  <li><a href="lw-index-center.html">3. blog-index-layout</a></li>
			  <li><a href="lw-index-noslider.html">4. blog-index-noslider</a></li>
			</ul>
		  </li>
		  <li><a href="lw-article.html">标准文章</a></li>
		  <li><a href="lw-img.html">图片库</a></li>
		  <li><a href="lw-article-fullwidth.html">全宽页面</a></li>
		  <li><a href="lw-timeline.html">存档</a></li>
		</ul>
		<form class="am-topbar-form am-topbar-right am-form-inline" role="search">
		  <div class="am-form-group">
			<input type="text" class="am-form-field am-input-sm" placeholder="搜索">
		  </div>
		</form>
	  </div>
	</nav>
</header>
