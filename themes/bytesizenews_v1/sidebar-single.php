<aside class="sidebar" role="complementary">
	<figure class="artwork">
		<img src="<?php bloginfo('template_url'); ?>/assets/img/bytesize-artwork_500.png" alt="Bytesize Artwork">
	</figure>
	<div class="show__meta">
		<ul class="useful-links">
			<li><a href="#">Subscribe via iTunes</a></li>
			<li><a href="#">Subscribe via RSS</a></li>
			<li><a href="/sponsor">Sponsor Bytesize</a></li>
		</ul>

		<div class="hosted-by">
			<h4>Hosted By</h4>
			<figure class="host">
				<img src="<?php bloginfo('template_url'); ?>/assets/img/tim_100.png" alt="Tim Smith">
			</figure>
			<p><a href="http://ttimsmith.com">Tim Smith</a></p>
			<p><a href="https://twitter.com/ttimsmith" class="twitter-follow-button" data-show-count="false" data-dnt="true">Follow @ttimsmith</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></p>
		</div><!-- .hosted-by -->
		
		<div class="sharing-is-caring">
			<h4>Share</h4>
			<ul class="sharing-links">
				<li><a href="http://twitter.com/home?status=Bytesize <?php the_field('episode_number');?>: <?php the_title(); ?> - <?php the_permalink(); ?> (via @ttimsmith)" title="Share on Twitter" target="_blank">Share on Twitter</a></li>
				<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share on Facebook" target="blank">Share on Facebook</a></li>
			</ul>
		</div>


	</div><!-- .show__meta -->
</aside>