<?php get_header(); ?>

<main class="main-content" role="main">
	<div class="contain">
		
		<?php get_sidebar(); ?>

		<section class="content-column">
			<?php the_post(); ?>
				
				<div class="entry">
					<h1 class="page-title"><?php the_title(); ?></h1>
					<p>Thanks for your interest in sponsoring Bytesize! We're looking for sponsors whose products or services will really benefit our listeners.</p>

		      <h3>The Nitty Gritty</h3>
		      <ul>
		        <li>The show can have up to two sponsor slots. These are done at the top of the show.</li>
		        <li>By sponsoring, you get: a 30&ndash;60 second read at the top of the show, a permanent link in the show notes (which shows up in the RSS feed), and a mention from The East Wing twitter account.</li>
		      </ul>
		      <p>Fill out the form below, and we'll get back to you as soon as possible!</p>
		      
		      <?php gravity_form('Sponsorship', false, false, false, '', true); ?>

				</div><!-- .entry -->

		</section><!-- .content-column -->
	</div><!-- .contain -->
</main>


<?php get_footer(); ?>
