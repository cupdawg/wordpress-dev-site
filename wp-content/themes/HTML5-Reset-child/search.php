<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
<!-- search.php -->
<div class="row">
    <section class="col-md-8">
	<?php if (have_posts()) : ?>

		<h2><?php _e('Search Results','html5reset'); ?></h2>

		<?php post_navigation(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php posted_on(); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>
    </section>
    <aside class="col-md-4">
        <?php get_sidebar(); ?>
    </aside>
</div>
<?php get_footer(); ?>
