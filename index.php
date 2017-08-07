<?php get_header(); ?>
<!-- nav end -->
<!-- content srart -->

<div class="am-g am-g-fixed">
 
<div class="am-show-md-up">
	<div class="am-u-lg-6 am-g">
<a rel="nofollow" target="_blank" href="//www.wpdaxue.com/go/weix" title="性价比最高的香港ASP、PHP主机提供商"><img src="//img.wpdaxue.com/2015/03/wx0329.jpg" width="728" height="90" alt="性价比最高的香港ASP、PHP主机提供商"></a>	
	</div>
	<div class="am-u-lg-6 am-g ">
	<a rel="nofollow" target="_blank" href="https://www.wpdaxue.com/go/faisco2/" title="做网站，就上凡科建站"><img src="//img.wpdaxue.com/2017/06/fk01.png" width="560" height="70" alt="做网站，就上凡科建站"></a>	
	</div>
</div>  <!-- banner start -->
<div class="am-u-md-8 am-u-sm-12 cat-box">
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
<section class="cat-box recent-box recent-blog cat-box">
	<div class="cat-box-title"><h2>最新文章</h2>
	</div>	
	<div class="cat-box-content">  
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <h3><a href="<?php echo get_permalink(); ?>"><?php the_title_attribute(); ?>"</a></h3>
                <span><a href="" class="blog-color"><?php the_category(', ') ?>&nbsp;</a></span>
                <span> @<?php the_author();?>  &nbsp;</span>
                <span><?php echo get_the_date( 'Y/m/d' ); ?></span>
                <?php the_excerpt(55); ?>
                <p><a href="" class="blog-continue">continue reading</a></p>
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

<!-- content end -->
<?php get_footer(); ?>