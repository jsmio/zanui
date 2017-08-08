<?php get_header(); ?>
<!-- nav end -->
<!-- content srart -->

<div class="am-g am-g-fixed">
<div class="am-show-ld-up am-g">
	<div class="am-u-md-6">
		<!-- 广告位：顶部广告左一 -->
		<script>
		(function() {
			var s = "_" + Math.random().toString(36).slice(2);
			document.write('<div id="' + s + '"></div>');
			(window.slotbydup=window.slotbydup || []).push({
				id: '4637741',
				container: s,
				size: '580,90',
				display: 'inlay-fix'
			});
		})();
		</script>
	</div>
	<div class="am-u-md-6">
		<!-- 广告位：顶部广告左一 -->
		<script>
		(function() {
			var s = "_" + Math.random().toString(36).slice(2);
			document.write('<div id="' + s + '"></div>');
			(window.slotbydup=window.slotbydup || []).push({
				id: '4637741',
				container: s,
				size: '580,90',
				display: 'inlay-fix'
			});
		})();
		</script>
	</div>
</div>	
<!-- banner start -->
<div class="am-u-md-8 am-u-sm-12">
  <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{"controlNav:false","directionNav":false}' >
	<ul class="am-slides">
		<li>
			<img src="http://s.amazeui.org/media/i/demos/bing-1.jpg">

		</li>
		<li>
			<img src="http://s.amazeui.org/media/i/demos/bing-2.jpg">

		</li>
		<li>
			<img src="http://s.amazeui.org/media/i/demos/bing-3.jpg">

		</li>
		<li>
			<img src="http://s.amazeui.org/media/i/demos/bing-4.jpg">

		</li>
	</ul>
</div>

<!-- banner end -->
<section class="cat-box">
	<div class="cat-box-title"><h2>最新文章</h2>
	</div>	
	<div class="cat-box-content">  
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <h3><a href="<?php echo get_permalink(); ?><?php the_title_attribute(); ?>"</a></h3>
                <span><a href="" class="blog-color"><?php the_category(', ') ?>&nbsp;</a></span>
                <span>@<?php the_author();?>  &nbsp;</span>
                <span><?php echo get_the_date( 'Y/m/d' ); ?></span>
				<div class="entry"><?php the_excerpt(40); ?>
                <a class="am-btn am-btn-danger am-radius am-btn-xs" target="_blank" href="<?php echo get_permalink(); ?>">阅读全文 »</a>
                </div>                
            </div>
        </article>                
    	<?php endwhile;?>
<!--
		<div class="posts-nav">
		<?php echo paginate_links(array(
			'prev_next'          => 1,
			'before_page_number' => '',
			'mid_size'           => 9,
		));?>
		</div>  	   	
-->
   	   	<?php endif; ?>
    	<?php wp_reset_query(); ?>       
<!--
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a href="" class="blog-color">article &nbsp;</a></span>
                <span> @amazeUI &nbsp;</span>
                <span>2015/10/9</span>
                <h1><a href="">我本楚狂人，凤歌笑孔丘</a></h1>
                <p>测试
                </p>
                <p><a href="" class="blog-continue">continue reading</a></p>
            </div>
        </article>
-->
	</section>
</div>

<div class="am-u-md-4 am-u-sm-12 blog-sidebar">
		<?php get_sidebar(); ?>
</div>

</div>
</div>

<!-- content end -->
<?php get_footer(); ?>