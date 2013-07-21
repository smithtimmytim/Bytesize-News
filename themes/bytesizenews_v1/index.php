<?php get_header(); ?>


<main class="main-content" role="main">
	<div class="contain">
		
		<?php get_sidebar(); ?>

		<section class="content-column">
			<div class="description">
				<h1>Bytesize</h1>
				<p>A weekly news update focused on the tech, design and development industries. It's the news you need to know. Unbiased, and to the point.</p>
			</div>
			
			<div class="posts">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article class="entry">
						<h2><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>">#<?php the_field('episode_number');?>: <?php the_title(); ?></a></h2>
						<p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> &middot; <?php the_field('episode_length'); ?> minutes</p>
						<?php the_excerpt(); ?>
					</article>

				<?php endwhile; endif; ?>
			</div><!-- .posts -->

			<div class="page__navigation">
				<?php wp_pagenavi(); ?>
			</div>
		</section><!-- .content-column -->
	</div><!-- .contain -->
</main>

<?php get_footer(); ?>
