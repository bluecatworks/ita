<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="#clinic" data-toggle="tab">Clinical Esthetics</a></li>
		<li><a href="#esthet" data-toggle="tab">750-Hour Esthetics</a></li>
		<li><a href="#edu" data-toggle="tab">Continuing Education</a></li>
		<li><a href="#med" data-toggle="tab">Medical assisting</a></li>
		<li><a href="#laser" data-toggle="tab">Laser (by AMMP)</a></li>
		<li><a href="#stud" data-toggle="tab">International Students</a></li>
	</ul>
	
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="clinic">1</div>
		<div role="tabpanel" class="tab-pane" id="esthet">.2</div>
		<div role="tabpanel" class="tab-pane" id="edu">.3</div>
		<div role="tabpanel" class="tab-pane" id="med">..4</div>
		<div role="tabpanel" class="tab-pane" id="laser">5.</div>
		<div role="tabpanel" class="tab-pane" id="stud">.6</div>
	</div>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/programs-banner.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container">
			<article class="page">

				<div class="entry_content">
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>