<?php get_header(); ?>


<nav id="slider">
	<ul>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image1.jpg" alt="一人ひとりに向き合った医療を" width="830" height="355"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image2.jpg" alt="充実の検査を快適な空間で　ソライロ病院の人間ドッグ" width="830" height="355"></li>
		<li><img src="<?php echo get_template_directory_uri(); ?>/images/visual_image3.jpg" alt="看護師募集中" width="830" height="355"></li>
	</ul>
</nav>

<div class="contents">
	<main>
		<section class="topics">
			<h2>トピックス</h2>
			<ul>
				<?php
					$args = array(
						'posts_per_page' => 5
					);
					query_posts( $args );
					while( have_posts() ) : the_post();
				?>
					<li>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</time>
						<?php the_title(); ?>
					</li>
				<?php endwhile; ?>
			</ul>
		</section>
	</main>

	<?php
		get_sidebar();
		get_footer();
