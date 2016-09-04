<?php get_header(); ?>
	<script>
		window.onhashchange = function() {
		$('.active').removeClass('active');
		var hash = window.location.hash;
		$( "a[href='"+hash+"']" ).addClass('active');
	}
	$(function() {
		$('.active').removeClass('active');
		var hash = window.location.hash;
		$( "a[href='"+hash+"']" ).addClass('active');
	});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="container small">
			<div class="sidemenu">
				<ul>
					<li><a href="#why" class="active">Why Choose Us</a></li>
					<li><a href="#founder">Our Founder</a></li>
					<li><a href="#history">School History</a></li>
					<li><a href="#community">Community Involvement</a></li>
					<li><a href="#students">Our Students Say</a></li>
				</ul>
			</div>
			<article class="page">
				<div class="entry_content">
						<div id="why">
								<h2 class="entry_title">
									<span>Why Choose Us</span>
								</h2>
							<p>We are founded and led by Dr. Doran, who was trained as a doctor of Dermatology<br>
							We have built a reputation as one of the best vocational school in Illinois<br>
							We are an elite school, which has been called “Harvard of Skin care” by Spa owners<br>
							We offer the most advanced and updated Clinical Esthetics and Medical Assisting programs<br>
							We teach unique techniques and will make you the best in your profession<br>
							We believe that we can make the world a better place, by changing the lives of our students<br>
							We believe that professional development and education rises from a balance of support and challengeWe are a team fully invested in helping each student succeed in a new career<br>
							We take pride in the quality of education we provide for Skin Care, Medical Assisting, and Continuing Education!<br>
							We have developed high moral, ethical, and educational standards<br>
							We are committed to making our graduates the best they can be<br>
							We know that each student’s success is our success, and we share in their accomplishments<br>
							We have a 100% state licensure exam with one of the highest scores nationwide<br>
							We have a 100% graduation rate<br>
							All of our graduates are employed or self-employed</p>
							<p class="p1">The  philosophy  of  our  school  can  be  simply  described  by  three  inseparable  words: <strong>Quality, Professionalism, and Excellence!</strong></p>
						</div>
						<div id="founder">
							<div class="text-center">
								<h2 class="entry_title">
									<span>Our Founder</span>
								</h2>
							</div>

							<div class="img">
								<img src="<?php bloginfo('template_url'); ?>/images/natalia.png" >
							</div>

							<div class="text">
								<p class="p-title">Passion and Desire to Change People’s Lives </p>
								<p>The founder of International Training Academy, Dr. Natalia Doran, has more than 30 years of experience as a dermatologist in Europe, and as an Esthetics and Medical Assisting teacher in the United States. Her knowledge, medical education, practical experience, and passion make her uniquely qualified to provide unmatched standards of training in esthetics and health care.  </p>

								<p>She has spent many years trying to build the school of her dreams, which was founded in 2004, When asked what drives her, Dr. Doran speaks with conviction only a dedicated professional, who sacrificed her personal time off and vacations for four years has: “Passion and desire to change people’s lives”. Her hard work has paid off – Dr. Doran has trained hundreds of consummate skin care and health care professionals, many of whom went on to open their own successful businesses.  </p>
								<div class="clearfix"></div>
								<p>
									When Dr. Doran founded her school to fill the void in quality skin care education, she named it International Skin Beauty Academy. After many years of careful research, Dr. Doran has developed a number of outstanding skincare treatments, including the famous Age-Control Facial™, which she passes on her students. Together with a group of highly qualified, well educated, intelligent, and extremely motivated instructors, whom she personally trained, Dr. Doran developed an extremely successful esthetics program. 
								</p>
								<p>
									The Academy has also been dubbed the “School of Second Chances” for allowing women and men to finally pursue their passion and build a successful career. The students have come from near and far – both literally and metaphorically! We have trained women from almost 30 countries and are used to students driving from Indiana and Wisconsin to attend classes. But then students from other parts of the country - North Dakota, Arkansas, Virginia, Iowa and Florida - chose to move to Illinois to learn at the Academy. The list of current and former students includes licensed physicians, registered nurses, licensed estheticians, cosmetologists, and massage therapists. 
								</p>

								<p class="p-title">Next Level of Success</p>
								<p>
									After  establishing  its  reputation  as  one  of  the  best  skin  care  schools  in  the country,  and  changing  a multitude of lives for the better, we were ready to grow further and take it to the next level. The idea for the  new  direction  came  to  Dr.  Doran  after  she  started  attending  Chicago  Dermatological  Society meetings and round-tables at Rush and Cook County  hospitals. Many hospitals and doctors are looking (and struggling) to find well-trained employees who can perform a variety of functions at their practices. 
								</p>
								<p>
									Dr.  Doran  realized  that  training  in  both  Medical  Esthetics  and  Medical Assisting  would  be  a  unique opportunity  for  the  future  success.  Each  profession  itself  has  a  potential  for a  great  earning.  The combination would not only double a graduate’s income and give benefits; it would also make a person indispensable  to  the  medical  office  and  their  team.  The  Academy’s  outstanding  medical  programs include: Administrative and Clinical Medical Assisting, EKG, Phlebotomy, and Massage Therapy.
								</p>
							</div>
						</div>
						<div id="history">
							<div class="text-center">
								<h2 class="entry_title">
									<span>School History</span>
								</h2>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<p>At our Academy, we continually strive for excellence in everything that we do. Our revolutionary approach to study combined with advanced techniques foster an atmosphere of accelerated professional and personal growth. Our passionate commitment to innovative ideas expands far beyond the health care education.</p>

									<p>Quite simply, we want you to have the best experience possible when studying with us. This experience will then allow you to achieve all of your professional goals, and will allow you to lead a happy, fulfilled, and financially secure life.</p>
								</div>

								<div class="col-sm-4">
									<img src="<?php bloginfo('template_url'); ?>/images/history.png">
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6 values">
									<h3 class="text-center">Values</h3>
									<p><strong>The values of the faculty, students, and staff of International Training Academy are:</strong><br>
									• Professional integrity in education, research, and service<br>
									• Compassion, equity, and social justice<br>
									• Multidisciplinary collaborative approach to problems<br>
									• Passion for knowledge and desire to improve and innovate<br>
									• Respect for and inclusion of diversity and community</p>
								</div>

								<div class="col-sm-6 goals">
									<h3 class="text-center">Goals</h3>
									<p><strong>The goals of International Training Academy are to:</strong><br>
									• Provide high quality training, which enables students to find positions in their chosen field<br>
									• Continue to operate an efficient institution, according to fiscally responsible practices<br>
									• Create an inclusive and positive environment for all students<br>
									• Provide a positive work environment for staff<br>
									• Develop and maintain ties with the community</p>
								</div>
							</div>
						</div>

						<div id="community" class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="text-center">
									<h2 class="entry_title">
										<span>Community Involvement</span>
									</h2>
								</div>

								<p class="subheading text-center">We believe it is incredibly important.</p>
								<p>We are extremely proud to announce that the profits from the procedures are donated to charity! Some of the non-profit organizations with whom we have been involved are:</p>

								• <a target="_blank" href="http://www.redcross.org/">The American Red Cross</a><br>
								• <a target="_blank" href="http://www.lls.org/">The Leukemia & Lymphoma Society</a><br>
								• <a target="_blank" href="http://www.marklund.org/">Marklund</a><br>
								• <a target="_blank" href="http://www.hemophiliaillinois.org/">Hemophylia Foundation of Illinois</a><br>
								• <a target="_blank" href="http://www.livingwellcrc.org/">LivingWell Cancer Resource Center</a>
							</div>
						</div>
						<div id="students">
							<div class="text-center">
								<h2 class="entry_title">
									<span>Our Students Say</span>
								</h2>
							</div>
							<iframe width="420" height="315" src="https://www.youtube.com/embed/szWuGoo1KB0" frameborder="0" allowfullscreen></iframe>
							<iframe width="560" height="315" src="https://www.youtube.com/embed/8VJePsNbFr8" frameborder="0" allowfullscreen></iframe>
							<iframe width="420" height="315" src="https://www.youtube.com/embed/74N-tBuxtwA" frameborder="0" allowfullscreen></iframe>
							<p>We take pride in having incredibly successful students who work not only in a number of U.S. States, but also in several countries!</p>

							<div class="video">
								<!--iframe width="640" height="380" src="https://www.youtube.com/embed/szWuGoo1KB0" frameborder="0" allowfullscreen></iframe-->
							</div>

							<div class="social-media">
								<h3>Social Media About ITA</h3>
								<div class="logos">
									<a target="_blank" href="http://www.yelp.com/biz/international-skin-beauty-academy-schaumburg-3">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp</span>
									</a>
									<a target="_blank" href="http://www.insiderpages.com/b/15249570804/international-skin-beauty-academy-schaumburg">
										<img src="<?php bloginfo('template_url'); ?>/images/ip.png"><br>
										<span>InsiderPages</span>
									</a>
									<a target="_blank" href="http://www.merchantcircle.com/business/International.Skin.Beauty.Academy.International.Training.Academy.Schaumburg.IL.847-995-1932">
										<img src="<?php bloginfo('template_url'); ?>/images/mc.png"><br>
										<span>MerchantCircle</span>
									</a>
									<a target="_blank" href="http://local.yahoo.com/info-31676187-international-skin-beauty-academy-schaumburg;_ylt=AnRLWzMAbjM1PvJtXHRhHQSHNcIF;_ylv=3?csz=Schaumburg%2C+IL">
										<img src="<?php bloginfo('template_url'); ?>/images/yah.png"><br>
										<span>YahooLocal</span>
									</a>
									<a target="_blank" href="http://www.dexknows.com/business_profiles/international_skin_beauty_academy-b2137588">
										<img src="<?php bloginfo('template_url'); ?>/images/dex.png"><br>
										<span>DexKnows</span>
									</a>
									<a target="_blank" href="http://www.yelp.com/filtered_reviews/xj1sC4XLERSfH_l6td1E6w?fsid=5M3LyAKN1u-2MrCvvatH9g">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp Reviews ISBA</span>
									</a>
									<a target="_blank" href="http://www.yelp.com/filtered_reviews/vKkJ_eeijcAaP_2krw1gxA?fsid=bleR5IA7C6HGCgYKECOP4g">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp Reviews ITA</span>
									</a>
								</div>
							</div>



							<div class="find">
								<h3>Find an Esthetician</h3>
								<p>Many graduates of International Training Academy work in prestigious salons, elite spas, and with top medical professionals. And a number have started their own successful businesses.</p>

								<div class="row labels">
									<div class="text-center cell">
										<strong>Name</strong>
									</div>
									<div class="text-center cell">
										<strong>City</strong>
									</div>
									<div class="text-center cell">
										<strong>Phone</strong>
									</div>
									<div class="text-center cell-big">
										<strong>Website</strong>
									</div>
								</div>
								<div class="row">
									<div class="text-center cell">
										Si Belle Spa
									</div>
									<div class="text-center cell">
										Itasca
									</div>
									<div class="text-center cell">
										(224) 210-9648
									</div>
									<div class="text-center cell-big">
										<a href="http://www.sibellespa.com">www.sibellespa.com</a>
									</div>
								</div>
								<div class="row">
									<div class="text-center cell">
										Skin Wellness
									</div>
									<div class="text-center cell">
										Lake Zurich
									</div>
									<div class="text-center cell">
										(847) 847-7763	
									</div>
									<div class="text-center cell-big">
										<a href="http://www.skinwellnessbyrenee.skincaretherapy.net">www.skinwellnessbyrenee.skincaretherapy.net</a>
									</div>
								</div>
								<div class="row">
									<div class="text-center cell">
										ALovishSpa
									</div>
									<div class="text-center cell">
										Oakbrook Terrace
									</div>
									<div class="text-center cell">
										(630) 359-4819
									</div>
									<div class="text-center cell-big">
										<a href="http://www.alovishspa.com">www.alovishspa.com</a>
									</div>
								</div>
								<div class="row">
									<div class="text-center cell">
										Replenish 224
									</div>
									<div class="text-center cell">
										Roselle
									</div>
									<div class="text-center cell">
										(630) 624-3450
									</div>
									<div class="text-center cell-big">
										<a href="http://www.facebook.com/Replenish224/info">www.facebook.com/Replenish224/info</a>
									</div>
								</div>
								<div class="row">
									<div class="text-center cell">
										FOG Cosmetics
									</div>
									<div class="text-center cell">
										Homewood
									</div>
									<div class="text-center cell">
										(708) 535-2500
									</div>
									<div class="text-center cell-big">
										<a href="http://www.fogcosmetics.com">www.fogcosmetics.com</a>
									</div>
								</div>
							</div>
						</div>
					<?php the_content(); ?>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>