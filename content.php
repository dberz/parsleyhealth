<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-item">

			<a href="<?php the_permalink(); ?>">
					<div class="image">
						<?php the_post_thumbnail('large'); ?>
					</div><!-- .image -->
			</a>

			<div class="content">

				<div class="title">
					<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h4>
				</div><!-- .title -->

				<div class="post-meta">
					<p>
						<?php the_date('F j, Y'); ?><!-- &nbsp;in&nbsp;<?php the_category(' &bull; '); ?> -->	
					</p>
				</div><!-- .post-meta -->

				<div class="inner-content">
					<div class="post-excerpt">
						<?php the_excerpt(); ?>
							<div class="read-more">
								<a class="button-small learn-more" href="<?php the_permalink(); ?>">Read more <i class="fa fa-angle-double-right 3x"></i></a>
							</div>
					</div>
				</div><!-- .inner-content -->

			</div><!-- .content -->

		<div class="clearfix"></div><!-- .clearfix -->

	</div> <!-- .item -->

	<hr />

</article>
