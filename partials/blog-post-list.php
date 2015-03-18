<!-- 	RECENT POSTS -->

		<div class="homepage-posts blog-wrapper large-6 medium-6 small-12 columns">
			
		<div class="news-header">
			<h3 class="module-header">From The Parsley Blog</h3>
		</div>

			<?php
			$recentposts=get_posts('showposts=3');
			if ($recentposts) {
			foreach($recentposts as $post) {
			setup_postdata($post);
			?>

			<div class="post-item">

				<a href="<?php the_permalink(); ?>">
					<div class="image">
						<?php the_post_thumbnail('medium'); ?>
					</div><!-- .image -->
				</a>

				<div class="content">

					<div class="title">
						<h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></h4>
					</div><!-- .title -->

					<div class="post-meta">
						<p>
						Addded <?php the_date('F j, Y'); ?>, by  <?php the_author(); ?> </p>
					</div><!-- .post-meta -->

					<div class="post-excerpt">
						<?php the_excerpt(); ?>

						<div class="read-more">
							<a href="<?php the_permalink(); ?>">READ MORE <i class="fa fa-angle-double-right 3x"></i></a>
						</div>
					</div> <!-- .post-excerpt -->

				</div><!-- .content -->

			<div class="clearfix"></div><!-- .clearfix -->

			</div><!-- .item -->

		<hr>

		<?php		} }			?>

		<div class="read-more"><a href="index.php/blog"><h5>More from the Parsley Blog <i class="fa fa-angle-double-right 3x"></i></h5></a></div>

	</div>