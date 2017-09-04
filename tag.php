<?php get_header(); ?>
<!-- content srart -->
<div class="am-g am-g-fixed" id="main-content">
<div class="am-u-md-8 am-u-sm-12">
<!-- banner end -->
<section class="cat-box">
	<div class="cat-box-title">
		<h1><?php printf(__('标签存档： %s', ATOM), '<span class="alt">'.single_cat_title('', false).'</span>'); ?>
		</h1>
	</div>	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="am-g blog-entry-article" id="post-<?php the_ID();?>" >
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/f10.jpg" alt="" class="am-u-sm-12">
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <h3><a href="<?php echo get_permalink(); ?>"</a><?php the_title_attribute(); ?></h3>
                <span><a href="" class="blog-color"><?php the_category(', ') ?>&nbsp;</a></span>
                <span>@<?php the_author();?>  &nbsp;</span>
                <span><?php echo get_the_date( 'Y/m/d' ); ?></span>
				<div class="entry">
                <p>
                <?php echo wp_trim_words( get_the_excerpt(), 50 );?>
                </p>
                </div>
                <a class="am-btn am-btn-danger am-radius am-btn-xs" target="_blank"  title="<?php the_title_attribute(); ?>" href="<?php echo get_permalink(); ?>">阅读全文 »</a>                
            </div>	
        </article>  	
	<?php endwhile; endif; ?>
</section>
</div>

<div class="am-u-md-4 am-u-sm-12">
		<?php get_sidebar(); ?>
</div>

</div>

<!-- content end -->
<?php get_footer(); ?>