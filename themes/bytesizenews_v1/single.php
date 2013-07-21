<?php get_header(); ?>

<main class="main-content" role="main">
	<div class="contain">
		
		<?php get_sidebar('single'); ?>

		<section class="content-column">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<article class="entry">
					<h2>#<?php the_field('episode_number');?>: <?php the_title(); ?></h2>
					<p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> &middot; <?php the_field('episode_length'); ?> minutes</p>
					<?php the_content(); ?>
				</article>

			<?php endwhile; endif; ?>

			<div class="page__navigation">
				<?php wp_pagenavi(); ?>
			</div>
		</section><!-- .content-column -->
	</div><!-- .contain -->
</main>


<?php get_footer(); ?>
