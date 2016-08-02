<?php while(have_posts()): the_post(); ?>

	<article class="post">
		<h2 class="entry_title">
			<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
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
			<?php echo get_the_date( 'F j, Y', $post->post_ID ); ?>
		</div>
		<div class="entry_content">
			<?php the_excerpt(); ?>
		</div>
	</article>
	
<?php endwhile; ?>