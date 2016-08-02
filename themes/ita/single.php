<?php get_header(); ?>
	<div class="container">
		<?php if(have_posts()): the_post(); ?>
			<article class="post single">
				<h2 class="entry_title">
					<?php the_title(); ?>
				</h2>
				<div class="entry_image">
					<?php
						if ( has_post_thumbnail() )
						{
							the_post_thumbnail('full');
						}
					?>
				</div>
				<div class="entry_date">
					<?php the_date(); ?>
				</div>
				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>