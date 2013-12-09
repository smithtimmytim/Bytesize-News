<aside class="sidebar" role="complementary">
	<figure class="artwork">
		<a href="/"><img src="<?php bloginfo('template_url'); ?>/assets/img/bytesize-artwork_500.png" alt="Bytesize Artwork"></a>
	</figure>
	<div class="show__meta">

		<div class="sidebar__module">
			<ul class="useful-links">
				<li><a href="https://itunes.apple.com/us/podcast/bytesize-news/id679659565">
					<span data-icon="i" aria-hidden="true"></span>
					<span>Subscribe via iTunes</span>
				</a></li>
				<li><a href="/feed/bytesize/">
					<span data-icon="r" aria-hidden="true"></span>
					<span>Subscribe via RSS</span>
				</a></li>
				<li><a href="/sponsorship">
					<span data-icon="h" aria-hidden="true"></span>
					<span>Sponsor Bytesize</span>
				</a></li>
			</ul><!-- .useful-links -->
		</div><!-- .sidebar__module -->

		<div class="hosted-by sidebar__module">
			<h4>Hosted By</h4>
			<figure class="host">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/kyle_100.png" alt="Kyle Roderick">
			</figure>
			<p><a href="http://www.kyleroderick.com/">Kyle Roderick</a></p>
			<p><a href="https://twitter.com/kyleroderick" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @kyleroderick</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
		</div><!-- .hosted-by -->

		<div class="episode-nav__wrapper sidebar__module">
			<h4>Episode Navigation</h4>
			<nav class="episode__nav">
				<p><?php previous_post_link('%link', 'Previous', TRUE); ?>
				<?php if(!get_adjacent_post(true, '', true)) {
				  echo '<span class="inactive">Previous</span>';
				} ?>
				&middot;
				<?php next_post_link('%link', 'Next', TRUE); ?>
				<?php if(!get_adjacent_post(true, '', false)) {
				  echo '<span class="inactive">Next</span>';
				} ?></p>
			</nav>
		</div>

		<div class="sharing-is-caring sidebar__module">
			<h4>Share</h4>
			<ul class="sharing-links">
				<li><a href="http://twitter.com/home?status=Bytesize <?php the_field('episode_number');?> with @kyleroderick: <?php the_title(); ?> - <?php the_permalink(); ?>" title="Share on Twitter" target="_blank">Share on Twitter</a></li>
				<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook" target="blank">Share on Facebook</a></li>
			</ul>
		</div>


	</div><!-- .show__meta -->
</aside>
