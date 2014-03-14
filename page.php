

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

		<!-- 内容 -->
		<div class="entry">
			<?php the_content(); ?>

			<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
			<?php edit_post_link('Edit', '<p>', '</p>'); ?>
		</div>

	</div>



<?php endwhile; ?>

	<!-- 没有文章 -->
	<?php else : ?>
	<div class="post">
		<h2><?php e_('Not Found'); ?></h2>
	</div>

<?php endif; ?>


</div>

<?php get_footer(); ?> 