<?php get_header(); ?>
<div class="am-g am-g-fixed" id="main-content">
    <div class="am-u-md-8 am-u-sm-12 post-listing">
	<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ) : the_post(); ?>       
       <article class="am-article post-inner">
        <div class="am-article-hd">
          <h1 class="am-article-title blog-text-center"><?php the_title(); ?></h1>
          <p class="am-article-meta blog-text-center">
              <span><a href="#" class="blog-color"><?php the_category(', ') ?></a></span>-
              <span><a href="#"><?php the_author(); ?></a></span>-
              <span><a href="#"><?php echo get_the_date( 'Y/m/d' ); ?></a></span>
          </p>
        </div> 
     
        <div class="am-article-bd">
			<!-- 广告位：single-文章标题下 -->
			<script>
			(function() {
				var s = "_" + Math.random().toString(36).slice(2);
				document.write('<div id="' + s + '"></div>');
				(window.slotbydup=window.slotbydup || []).push({
					id: '4659823',
					container: s,
					size: '728,90',
					display: 'inlay-fix'
				});
			})();
			</script>
		<p class="am-article-lead">
		<?php the_excerpt(200); ?> 
		</p>
		<?php the_content(); ?>
        </div>
       </article>
        
        <div class="am-g blog-article-widget blog-article-margin">
          <div class="am-u-lg-4 am-u-md-5 am-u-sm-7 am-u-sm-centered blog-text-center">
            <span class="am-icon-tags"> &nbsp;</span>
			<?php
			echo get_the_tag_list();
			?>
            <hr>
            <a href=""><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
            <a href=""><span class="am-icon-wechat am-icon-fw blog-icon"></span></a>
            <a href=""><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
          </div>
        </div>

        <hr>
        <div class="am-g blog-author blog-article-margin">
          <div class="am-u-sm-3 am-u-md-3 am-u-lg-2">
            <img src="assets/i/f15.jpg" alt="" class="blog-author-img am-circle">
          </div>
          <div class="am-u-sm-9 am-u-md-9 am-u-lg-10">
          <h3><span>作者 &nbsp;: &nbsp;</span><span class="blog-color">amazeui</span></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <hr>
        <ul class="am-pagination blog-article-margin">
          <li class="am-pagination-prev"><a href="#" class="">&laquo; 一切的回顾</a></li>
          <li class="am-pagination-next"><a href="">不远的未来 &raquo;</a></li>
        </ul>
        
        <hr>

         <form class="am-form am-g">
            <h3 class="blog-comment">评论</h3>
          <fieldset>
            <div class="am-form-group am-u-sm-4 blog-clear-left">
              <input type="text" class="" placeholder="名字">
            </div>
            <div class="am-form-group am-u-sm-4">
              <input type="email" class="" placeholder="邮箱">
            </div>

            <div class="am-form-group am-u-sm-4 blog-clear-right">
              <input type="password" class="" placeholder="网站">
            </div>
        
            <div class="am-form-group">
              <textarea class="" rows="5" placeholder="一字千金"></textarea>
            </div>
        
            <p><button type="submit" class="am-btn am-btn-default">发表评论</button></p>
          </fieldset>
        </form>

        <hr>
    </div>
<?php endwhile; ?>
<?php endif; ?> 
 <div class="am-u-md-4 am-u-sm-12 am-show-md-up">
	<?php get_sidebar(); ?>
 </div>
</div>
<!-- content end -->
<?php get_footer(); ?>