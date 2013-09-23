<?php get_header(); ?>

<main class="main-content" role="main">
	<div class="contain">

		<?php get_sidebar('single'); ?>

		<section class="content-column">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article class="entry">
					<h2>#<?php the_field('episode_number');?>: <?php the_title(); ?></h2>
					<p class="pubdate"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y');?></time> &middot; <?php the_field('episode_length'); ?> minutes</p>

					<p><?php the_field('episode_lead'); ?></p>

					<?php if(get_field('episode_sponsor')) : ?>
						<div class="entry__sponsor">
							<p><strong>This week’s Bytesize is brought to you by:</strong></p>
							<p><?php the_field('episode_sponsor'); ?></p>
						</div>
						<!-- <hr> -->
					<?php endif; ?>

					<?php the_content(); ?>
				</article>

			<?php endwhile; endif; ?>
		</section><!-- .content-column -->
	</div><!-- .contain -->
</main>


<?php get_footer(); ?>
