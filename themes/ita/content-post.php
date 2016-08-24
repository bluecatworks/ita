<?php while(have_posts()): the_post(); ?>
	<div class="container">
	<article class="post">
		<h2 class="entry_title">
			<span><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
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
			<p><?php the_tags(); ?></p>
		</div>
		<div class="entry_content">
			<?php the_excerpt(); ?>
		</div>
	</article>
	</div>
	
<?php endwhile; ?>