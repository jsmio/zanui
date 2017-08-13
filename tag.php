<?php get_header(); ?>
<!-- content srart -->
<div class="am-g" id="main-content">
<div class="am-u-md-8 am-u-sm-12">
<!-- banner end -->
<section class="cat-box">
	<div class="cat-box-title">
		<h2><?php printf(__('Posts tagged %s', ATOM), '<span class="alt">'.single_cat_title('', false).'</span>'); ?>
		</h2>
	</div>	

<ul>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<li>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</li>
		<div class="entry">
		111
		</div>
	</div>
	<?php endwhile; endif; ?>
	 </ul>
</section>
</div>

<div class="am-u-md-4 am-u-sm-12">
		<?php get_sidebar(); ?>
</div>

</div>

<!-- content end -->
<?php get_footer(); ?>