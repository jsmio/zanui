<?php get_header(); ?>
<!-- content srart -->

<div class="am-g am-g-fixed" id="main-content">
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


<?php echo pods_field_display('Post','pods-settings-Post','ishome'); ?>
	
<!-- banner end -->
<section class="cat-box recent-box recent-blog">	
<div class="cat-box-title"><h2>最新文章</h2>
	</div>	
	<div class="cat-box-content">  
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="am-g blog-entry-article">
            <?php  if(wpjam_has_post_thumbnail()){?>
			<div class="am-u-lg-6 am-u-md-12 am-u-sm-12">
			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php wpjam_post_thumbnail(array(349,196),$crop=1,$class="am-img-responsive");?></a>
			</div>
			<?php } ?> 
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <h3><a href="<?php echo get_permalink(); ?>"</a><?php the_title_attribute(); ?></h3>
                <span><a href="" class="blog-color"><?php the_category(', ') ?>&nbsp;</a></span>
                <span>@<?php the_author();?>  &nbsp;</span>
                <span><?php echo get_the_date( 'Y/m/d' ); ?></span>
				<div class="entry">
                <p>
                <?php echo wp_trim_words( get_the_excerpt(), 50 );?>
                </p>
                <a class="am-btn am-btn-danger am-radius am-btn-xs" target="_blank"  title="<?php the_title_attribute(); ?>" href="<?php echo get_permalink(); ?>">阅读全文 »</a>
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

<div class="am-u-md-4 am-u-sm-12">
		<?php get_sidebar(); ?>
</div>

</div>

<!-- content end -->
<?php get_footer(); ?>