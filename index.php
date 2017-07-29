<?php get_header(); ?>
<!-- nav end -->


<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
  <!-- banner start -->
   <div class="am-u-md-8 am-u-sm-12">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img data-echo="<?php echo get_template_directory_uri(); ?>/assets/i/b1.jpg">
            <div class="blog-slider-desc am-slider-desc ">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span class="blog-bor">2015/10/9</span>
                    <br><br><br><br><br><br><br>                
                </div>
            </div>
      </li>
      <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>那时候刚好下着雨，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/b3.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>修改，柏油路面湿冷冷的，还闪烁着青、黄、红颜色的灯火。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
      <li>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/b2.jpg">
            <div class="am-slider-desc blog-slider-desc">
                <div class="blog-text-center blog-slider-con">
                    <span><a href="" class="blog-color">Article &nbsp;</a></span>               
                    <h1 class="blog-h-margin"><a href="">总在思考一句积极的话</a></h1>
                    <p>showbar。
                    </p>
                    <span>2015/10/9</span>                
                </div>
            </div>
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->
    <div class="am-u-md-8 am-u-sm-12 blog-bor">
      <h2 class="blog-text-center blog-title"><span>最新文章</span></h2>
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
    </div>
	<?php get_sidebar(); ?>
</div>
<!-- content end -->
<?php get_footer(); ?>