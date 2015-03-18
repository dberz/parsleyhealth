<?php get_header(); ?>

	<div class="small-12 large-12 full-width post-photo" role="post-photo">

			<?php if ( has_post_thumbnail() ): ?>

				<div class="">

					<?php the_post_thumbnail('large', array('class' => 'post-photo-header')); ?>

				</div>

			<?php endif; ?>

	</div> <!-- post photo -->

<div class="post-content row">

	<div class="small-12 large-8 post-left columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<?php FoundationPress_entry_meta(); ?>

			</header>

			<?php do_action('foundationPress_post_before_entry_content'); ?>

			<div class="entry-content">

			<?php the_content(); ?>

			</div>

			<?php do_action('foundationPress_post_before_comments'); ?>

			<?php comments_template(); ?>

			<?php do_action('foundationPress_post_after_comments'); ?>
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
