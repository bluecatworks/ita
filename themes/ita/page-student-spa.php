<?php get_header(); ?>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/in-icon-act.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<article class="page">
						<div class="entry_content">
							<?php the_content(); ?>
							<h3>About Our Student Spa</h3>
							<p>All procedures are performed by advanced students under the supervision of instructors. Each skin care student has to pass a practical evaluation, to ensure that they are ready to provide services at the highest professional level!
							The experience also gives our students a significant advantage in the eyes of employers by gaining extensive professional expertise – and allows our clients to receive high-quality services at an affordable price.
							We are extremely proud to announce that the profits from the procedures are donated to charity! Some of the non-profit organizations with whom we have been involved are:</p>
							<ul>
								<li><a href="#">The American Red Cross</a></li>
								<li><a href="#">The Leukemia & Lymphoma Society</a></li>
								<li><a href="#">Marklund</a></li>
								<li><a href="#">Hemophylia Foundation of Illinois</a></li>
								<li><a href="#">LivingWell Cancer Resource Center</a></li>
							</ul>

							<h3>Appointments</h3>
							<p>ISBA’s Student Spa is open to the public by appointment only.<br />
							To schedule an appointment please call us at 847-995-1932 or email <a href="mailto:#">skinbeautyacademy@gmail.com.</a></p>

							<h3 class="bold">We offer services during the following times:</h3>

							<div class="schedule">
								<div class="row headings">
									<div class="col-sm-6">
										Day
									</div>
									<div class="col-sm-6">
										Hours
									</div>	
								</div>
								<div class="row">
									<div class="col-sm-6 item">
										Tuesday
									</div>
									<div class="col-sm-6">
										9:15 a.m. – 1:00 p.m.
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										Thursday
									</div>
									<div class="col-sm-6">
										9:15 a.m. – 1:00 p.m.
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										Friday
									</div>
									<div class="col-sm-6">
										9:15 a.m. – 1:00 p.m.
									</div>
								</div>
							</div>

							<h3>Facial Procedures</h3>
							<h3 class="bold">Age-Control Facial ($40.00) – 1 hour</h3>
							<p>Experience a surgery-free mini face lift – a phenomenal facial procedure developed by Dr. Natalia Doran. Age-Control Facial leads to outstanding results- your skin will look rejuvenated and rested, your facial muscles will become more toned and firm! This procedure is especially well-suited for clients with normal, dry, or ageing skin. But Age-Control Facial is great for clients of all ages, as your esthetician will customize the treatment!</p>

							<h3 class="bold">Express Facial ($25.00) – 30 minutes</h3>
							<p>A great maintenance treatment for people on the go!</p>

							<h3>Age-Control Facial ($40.00) – 1 hour</h3>
							<p>Experience a surgery-free mini face lift – a phenomenal facial procedure developed by Dr. Natalia Doran. Age-Control Facial leads to outstanding results- your skin will look rejuvenated and rested, your facial muscles will become more toned and firm! This procedure is especially well-suited for clients with normal, dry, or ageing skin. But Age-Control Facial is great for clients of all ages, as your esthetician will customize the treatment!</p>

							<h3 class="bold">Radiant Peeling Treatment ($50.00)</h3>
							<p>Experience the ultimate exfoliation! A fruit acid removes surface cells and gives your skin a fresh, revitalized appearance! This advanced potent yet gentle treatment delivers powerful, age-defying results: it unclogs the pores, diminishes surface wrinkles, and promotes a smoother, evenly-toned complexion. A series of at four weekly treatments is recommended.</p>

							<h3 class="bold">Diamond Microdermabrasion ($35.00)</h3>
							<p>An advanced method of exfoliating and gently resurfacing the skin, this procedure is easy, painless and effective. Diamond-based treatments produce none of the dangerous dust that results from crystals and allow us to work on the delicate eye area and skin around the lips (usually where the first fine lines and wrinkles appear). This procedure should be performed on a consistent basis to achieve and maintain best results.</p>

							<h3 class="bold">Age-Control Facial + Radiant Peeling Treatment ($60.00)</h3>
							<p>Receive the benefits of both Age-Control Facial and Radiant Peeling Treatment in one visit!</p>

							<h3 class="bold">Age-Control Facial + Diamond Microdermabrasion ($55.00)</h3>
							<p>Receive the benefits of both Age-Control Facial and Diamond Microdermabrasion in one visit!</p>

							<h3 class="bold">Hair Removal (Waxing)</h3>

							<div class="row prices">
								<div class="col-sm-6">
									<div class="col-sm-6 item">
										<div>Eyebrows</div>
										<div>Lip</div>
										<div>Chin</div>
										<div>Side of Face</div>
										<div>Underarm</div>
										<div>1/2 Arms</div>
										<div>Full Arms</div>
										<div>1/2 Legs</div>
									</div>
									<div class="col-sm-6 item">
										<div>$10.00</div>
										<div>$5.00</div>
										<div>$5.00</div>
										<div>$15.00</div>
										<div>$15.00</div>
										<div>$12.00</div>
										<div>$20.00</div>
										<div>$20.00</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="col-sm-6 item">
										<div>Full Legs</div>
										<div>Chest</div>
										<div>Back</div>
										<div>Panty Line</div>
										<div>Bikini Line</div>
										<div>French</div>
										<div>Brazilian</div>
									</div>
									<div class="col-sm-6 item">
										<div>$35.00</div>
										<div>$20.00 and up</div>
										<div>$20.00 and up</div>
										<div>$10.00</div>
										<div>$15.00</div>
										<div>$25.00</div>
										<div>$35.00</div>
									</div>
								</div>
							</div>

							<h3>Special Offers</h3>
							<p>LIKE US ON FACEBOOK AND RECEIVE 10% OFF YOUR NEXT SERVICE!<br>
							Want to receive updates about our special offers? Follow us on <a href="#">Facebook</a> or <a href="#">Twitter</a>!</p>
						</div>
					</article>
				</div>
				
				<div class="col-md-3">
					<?php include (TEMPLATEPATH . '/sidebar-right.php'); ?>
				</div>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>