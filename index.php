

<?php get_header(); ?> 

<?php get_sidebar(); ?> 

<!-- container -->
<div id="container">
<?php if(have_posts()): ?>
<?php while(have_posts()) : the_post(); ?>
	<!-- 日志 -->
	<div class="post" id="post-<?php the_ID(); ?>">
		<!-- 标题 -->
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<!-- 元数据 -->
		<p class="postmetadata">
			<?php _e('Write in'); ?>
			<?php the_time('Y-n-j Ag:H') ?>
			<?php _e('by'); ?> <?php  the_author(); ?><br />
			<?php the_category(' ') ?>
			<?php _e('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'); ?>
			<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
			<?php edit_post_link('Edit', ' &#124; ', ''); ?><!-- ('链接文字'，‘链接前面的’,'链接后面的' ）-->
		</p>

		<!-- 内容 -->
		<div class="entry">
			<?php the_content(); ?>
		</div>

	</div>



<?php endwhile; ?>
	<!-- 导航 -->
	<div class="navigation">
		<?php posts_nav_link(); ?>
	</div>

	<!-- 没有文章 -->
	<?php else : ?>
	<div class="post">
		<h2><?php e_('Not Found'); ?></h2>
	</div>

<?php endif; ?>


</div>

<?php get_footer(); ?> 