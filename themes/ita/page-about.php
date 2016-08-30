<?php get_header(); ?>
	<script>
		window.onhashchange = function() {
		$('.active').removeClass('active');
		var hash = window.location.hash;
		$( "a[href='"+hash+"']" ).addClass('active');
	}
	$(function() {
		$('.accordeon .item .acc-title').on('click', function() {
			$(this).toggleClass('open');
			$(this).next().slideToggle();
		});
	});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="container small">
			<div class="sidemenu">
				<ul>
					<li><a href="#why" class="active">Why Choose US</a></li>
					<li><a href="#founder">Our Founder</a></li>
					<li><a href="#history">School History</a></li>
					<li><a href="#facultystaff">Faculty and Staff</a></li>
					<li><a href="#community">Community Involvement</a></li>
					<li><a href="#students">Our Students Say</a></li>
				</ul>
			</div>
			<article class="page">
				<div class="entry_content">
						<div id="why">
								<h2 class="entry_title">
									<span>Why Choose US</span>
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

							<div class="accordeon">
								<div class="item">
									<p class="acc-title open">Mission</p>
									<p class="acc-content">Our mission is to provide high quality of vocational training to our students and empower them to realize their professional goals in their chosen careers. The Academy is dedicated to nurturing its diverse, multicultural family of learners, promoting academic excellence and professionalism, and positively impacting local communities.</p>
								</div>

								<div class="item">
									<p class="acc-title">History</p>
									<p class="acc-content">Our mission is to provide high quality of vocational training to our students and empower them to realize their professional goals in their chosen careers. The Academy is dedicated to nurturing its diverse, multicultural family of learners, promoting academic excellence and professionalism, and positively impacting local communities.</p>
								</div>

								<div class="item">
									<p class="acc-title">The Name</p>
									<p class="acc-content">Our mission is to provide high quality of vocational training to our students and empower them to realize their professional goals in their chosen careers. The Academy is dedicated to nurturing its diverse, multicultural family of learners, promoting academic excellence and professionalism, and positively impacting local communities.</p>
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

						<div id="facultystaff">
							<div class="text-center">
								<h2 class="entry_title">
									<span>Faculty and Staff</span>
								</h2>
							</div>

							<p class="name">Dr. Natalia Doran</p>
							<p><strong>Dr. Natalia Doran is the founder and president of the International Training Academy.</strong> With more than 30 years of experience as a <strong>Dermatologist in Europe, and as an Esthetics and Medical Assisting teacher in the United States</strong>, Dr. Doran still continues to works relentlessly to improve the level of skin care professionals and revolutionize methods and techniques used in the industry. </p>

							<p>Dr. Doran’s knowledge, medical education, practical experience, and passion make her uniquely qualified to provide the highest standards of training in esthetics. To her, an Esthetician’s training is about the knowledge and unique techniques that maintain lasting results. Dr. Doran holds a secret to ultimate skincare treatments that she shares only with her students. It is her goal to give her students the confidence, knowledge, and practical skills they need to make the superior estheticians.</p>

							<p><strong>Dr. Doran has received her Medical Degree in Dermatology, as well as a M.S. in Educational Psychology</strong>. She is a frequent public speaker and a published author.  Although she no longer practices dermatology, to stay abreast the new developments in science and medicine, Dr. Doran regularly attends Dermatology Round Tables. She is also actively involved with several non-profit organizations. Dr. Doran is fluent in English and Russian.</p>
						
							<div class="row drs">
								<div class="col-sm-6">
									<p class="name">Ms. Anastasia</p>
									<p><strong>Ms. Anastasia has earned both her undergraduate and graduate degrees from Northwestern University.</strong> She had worked in finance and consulting before being selected for a prestigious congressional fellowship in Germany. While abroad, Ms. Anastasia had an opportunity to gain invaluable work experience with one of the world’s largest cosmetics companies.</p>
									<p>She joined International Skin Beauty Academy as the Academy’s manager, with focus on operations and strategic development. Ms. Anastasia brings with her extensive international experience (her studies and work have taken her to Western and Eastern Europe and Asia), dedication to the highest standards and practices, and passion for skin care. Ms. Anastasia strongly believes in the importance of social engagement and is involved with several educational and human rights organizations. She is fluent in English, Russian, and German.</p>

									<p class="name">Ms. Helen</p>
									<p><strong>Ms. Helen has both her educations from ITA and she is a Nationally Certified Medical Assistant and a licensed Esthetician.</strong> Her extensive real-life experience – from assisting professors in large teaching hospitals to working with a dermatologist and vascular surgeon in an elite practice – has allowed Ms. Helen to become a highly respected healthcare professional. Ms. Helen’s acute sense of professionalism and phenomenal understanding of medical subject, ensure that her students become extraordinarily and successful Medical Assistants. She is fluent in English and Spanish.</p>

									<p class="name">Ms. Kim</p>
									<p><strong>MMs. Kim’s exceptional knowledge, skills, and desire to go farther are extremely valuable to ISBA.</strong> A former student of Dr. Doran herself, Ms. Kim completely shares ISBA’s passion for nurturing true Skin whisperers. <br>Ms. Kim, a licensed Esthetics Teacher, is also a successful spa owner. She has extensive experience as an Esthetician, and a keen understanding of skin care-related topics from basic to advance. Currently Ms. Kim is focusing on growing her private business and expands her practice beyond Esthetics.</p>
								</div>
								<div class="col-sm-6">
									<p class="name">Ms. Carrie</p>
									<p><strong>Ms. Carrie is a Cosmetologist, Esthetician, Esthetics Teacher, and a former salon owner.</strong>After of being a salon owner for over 20 years she realized that her heart calls to skin care and she was one of the first ITA’s graduates.  During her practice as a medical Esthetician she decided to be a part of ITA team and completed Esthetics Teacher program. Ms. Carrie brings unparalleled knowledge and experience, having owned her own thriving salon for over two decades. Ms. Carrie has an unbelievable breadth and depth of experience, and is able to teach our students what it takes to succeed in the real world.</p>

									<p class="name">Ms. Nancy</p>
									<p><strong>Few people understand – or can teach Makeup better than Ms. Nancy.</strong> After receiving her BFA in Photography from the University of Illinois at Chicago, Ms. Nancy decided that she wanted more than to capture the world around her – she wanted to make it more beautiful! As a professional photographer and a makeup artist for many years, she completed her Esthetics program at ITA. She is a licensed esthetician and a certified makeup artist. She is one of the best professionals working in the Greater Chicago area. From private events, to large commercial shoots for Fortune 500 companies, Ms. Nancy has been a Makeup Artist in demand for two decades.<br>In addition to her successful business, Ms. Nancy has also taught Makeup classes to cancer patients and survivors. She is fluent in English and Italian.</p>

									<p class="name">Ms. Sandra</p>
									<p><strong>Ms. Sandra, an extremely intelligent person and is another future Doctor who is ready to change the world!!!</strong> Originally came to ISBA as a transfer Esthetics student, disappointed by the low level of education at her previous school. Studying under Dr. Doran gave Ms. Sandra an opportunity to understand Skin and Esthetics from a different perspective and inspired her to become an Esthetics Teacher. She became one of first team players who shared Dr. Doran’s philosophy and desire to take the skin care field to another level, by raising the bar for Estheticians.</p>
									<p>Ms. Sandra earned her BA in Liberal Arts from the University of Illinois at Chicago and attended Soma Institute Massage Therapy School. Licensed both in massage and esthetics, Ms. Sandra has gained advanced skills and knowledge through diverse settings. Additionally, Ms. Sandra has worked in a cosmetic dermatologist’s practice performing laser procedures for skin resurfacing,veins, and hair removal; she also has experience dealing with acne of all grades. Ms. Sandra’s extensive education and vast professional experience, as well as passion and commitment to skin care, made her an outstanding instructor and mentor.</p>
									<p><strong>Inspired by Dr. Doran she applied for Medical school and Ms. Sandra is currently pursuing her medical degree.</strong> She is fluent in English and Spanish.</p>
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