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
		$('.testimonial-slider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  controls: false,
		  pager: true
		});
	});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="container small">
			<div class="sidemenu">
				<ul>
					<li><a href="#founder" class="active">Our Founder</a></li>
					<li><a href="#history">School History</a></li>
					<li><a href="#facultystaff">Faculty and Staff</a></li>
					<!--li><a href="#community">Community Involvement</a></li-->
					<li><a href="#students">Our Students Say</a></li>
				</ul>
			</div>
			<article class="page">
				<div class="entry_content">
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
								<p class="p-title">Dr. Natalia Doran</p>
								<p>Dr. Natalia Doran is the founder and president of the International Training Academy.</p>

								<p>With more than 30 years of experience as a Dermatologist in Europe and as an educator, Esthetics teacher, Esthetician, and Nationally Certified MA and MA instructor in the United States, Dr. Doran worked hard on bringing skin care education to the superior level by incorporating it with medical level knowledge.  </p>
								<div class="clearfix"></div>
								<p>
									Dr. Doran did a great job and revolutionized Esthetics program, methods, and techniques used in the skin care industry. Besides that she is trying to change Skin care education in the USA and bring it internationally to the highest level. She relentlessly continues to improve the level of skin care professionals and revolutionize methods and techniques used in the industry.Dr-Natalia-Doran-Skin-Whisperer
								</p>
								<p>
									Dr. Doran is fluent in English and Russian.
								</p>
								<p>
									Dr. Doran’s medical education, knowledge, practical experience, and passion make her uniquely qualified to provide the highest standards of training in Esthetics. To her, an Esthetician’s training is about the excessive knowledge, and unique techniques, and extremely professional skills that maintain lasting results.
								</p>
								<p>
									Many years ago after receiving a facial procedure from Dr. Doran, a client marveled at her improved skin in the mirror and exclaimed: “You are a true skin whisperer”!  The nickname stuck and to many generations of skin care professionals, she has been known simply as the Skin Whisperer™. So are called majority of her graduates! Spa owners have called International Training Academy the “Harvard of Skin Education”
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

							<p><strong>Dr. Natalia Doran is the founder and president of the International Skin Beauty Academy.</strong> With more than 30 years of experience as a <strong>Dermatologist in Europe, and as an Esthetics and Medical Assisting teacher in the United States</strong>, Dr. Doran still continues to works relentlessly to improve the level of skin care professionals and revolutionize methods and techniques used in the industry.</p>

							<p><strong>Dr. Doran has received her Medical Degree in Dermatology, as well as a M.S. in Educational Psychology</strong>. She is a frequent public speaker and a published author.  Although she no longer practices dermatology, to stay abreast the new developments in science and medicine, Dr. Doran regularly attends Dermatology Round Tables. She is also actively involved with several non-profit organizations. Dr. Doran is fluent in English and Russian.</p>
						
							<div class="row drs">
								<div class="col-sm-6">
									<p class="name">Ms. Anastasia</p>
									<p><strong>Ms. Anastasia has earned both her undergraduate and graduate degrees from Northwestern University</strong>. She had worked in finance and consulting before being selected for a prestigious congressional fellowship in Germany. While abroad, Ms. Anastasia had an opportunity to gain invaluable work experience with one of the world’s largest cosmetics companies.</p>
 
									<p>She joined International Skin Beauty Academy as the Academy’s manager, with focus on operations and strategic development. Ms. Anastasia brings with her extensive international experience (her studies and work have taken her to Western and Eastern Europe and Asia), dedication to the highest standards and practices, and passion for skin care. Ms. Anastasia strongly believes in the importance of social engagement and is involved with several educational and human rights organizations. She is fluent in English, Russian, and German.</p>

									<p class="name">Ms. Helen</p>
									<p><strong>Ms. Helen has both her educations from ITA and she is a Nationally Certified Medical Assistant and a licensed Esthetician</strong>. Her extensive real-life experience – from assisting professors in large teaching hospitals to working with a dermatologist and vascular surgeon in an elite practice – has allowed Ms. Helen to become a highly respected healthcare professional. Ms. Helen’s acute sense of professionalism and phenomenal understanding of medical subject, ensure that her students become extraordinarily and successful Medical Assistants. She is fluent in English and Spanish.</p>

									<p class="name">Ms. Kim</p>
									<p><strong>Ms. Kim’s exceptional knowledge, skills, and desire to go farther are extremely valuable to ISBA</strong>. A former student of Dr. Doran herself, Ms. Kim completely shares ISBA’s passion for nurturing true Skin whisperers.</p>

									<p>Ms. Kim, a licensed Esthetics Teacher, is also a successful spa owner. She has extensive experience as an Esthetician, and a keen understanding of skin care-related topics from basic to advance. Currently Ms. Kim is focusing on growing her private business and expands her practice beyond Esthetics.</p>
								</div>
								<div class="col-sm-6">
									<p class="name">Ms. Carrie</p>
									<p><strong>Ms. Carrie is a Cosmetologist, Esthetician, Esthetics Teacher, and a former salon owner</strong>.  After of being a salon owner for over 20 years she realized that her heart calls to skin care and she was one of the first ITA’s graduates.  During her practice as a medical Esthetician she decided to be a part of ITA team and completed Esthetics Teacher program. Ms. Carrie brings unparalleled knowledge and experience, having owned her own thriving salon for over two decades. Ms. Carrie has an unbelievable breadth and depth of experience, and is able to teach our students what it takes to succeed in the real world.</p>

									<p class="name">Ms. Nancy</p>
									<p><strong>Few people understand – or can teach Makeup better than Ms. Nancy</strong>. After receiving her BFA in Photography from the University of Illinois at Chicago, Ms. Nancy decided that she wanted more than to capture the world around her – she wanted to make it more beautiful! As a professional photographer and a makeup artist for many years, she completed her Esthetics program at ITA. She is a licensed esthetician and a certified makeup artist. She is one of the best professionals working in the Greater Chicago area. From private events, to large commercial shoots for Fortune 500 companies, Ms. Nancy has been a Makeup Artist in demand for two decades. In addition to her successful business, Ms. Nancy has also taught Makeup classes to cancer patients and survivors. She is fluent in English and Italian.</p>

									<p class="name">Ms. Sandra</p>
									<p><strong>Ms. Sandra, an extremely intelligent person and is another future Doctor who is ready to change the world!</strong> Originally came to ISBA as a transfer Esthetics student, disappointed by the low level of education at her previous school. Studying under Dr. Doran gave Ms. Sandra an opportunity to understand Skin and Esthetics from a different perspective and inspired her to become an Esthetics Teacher. She became one of first team players who shared Dr. Doran’s philosophy and desire to take the skin care field to another level, by raising the bar for Estheticians.</p>

									<p>Ms. Sandra earned her BA in Liberal Arts from the University of Illinois at Chicago and attended Soma Institute Massage Therapy School. Licensed both in massage and esthetics, Ms. Sandra has gained advanced skills and knowledge through diverse settings.</p>

									<p><strong>Inspired by Dr. Doran she applied for Medical school and Ms. Sandra is currently pursuing her medical degree</strong>. She is fluent in English and Spanish.  </p>
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

								• <a href="#">The American Red Cross</a><br>
								• <a href="#">The Leukemia & Lymphoma Society</a><br>
								• <a href="#">Marklund</a><br>
								• <a href="#">Hemophylia Foundation of Illinois</a><br>
								• <a href="#">LivingWell Cancer Resource Center</a>
							</div>
						</div>
						<div id="students">
							<div class="text-center">
								<h2 class="entry_title">
									<span>Our Students Say</span>
								</h2>
							</div>

							<p>We take pride in having incredibly successful students who work not only in a number of U.S. States, but also in several countries!</p>

							<div class="video">
								<!--iframe width="640" height="380" src="https://www.youtube.com/embed/szWuGoo1KB0" frameborder="0" allowfullscreen></iframe-->
							</div>

							<div class="social-media">
								<h3>Social Media About ITA</h3>
								<div class="logos">
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/ip.png"><br>
										<span>InsiderPages</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/mc.png"><br>
										<span>MerchantCircle</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/yah.png"><br>
										<span>YahooLocal</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/dex.png"><br>
										<span>DexKnows</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp Reviews ITA</span>
									</a>
									<a href="#">
										<img src="<?php bloginfo('template_url'); ?>/images/yelp.png"><br>
										<span>Yelp Reviews ITA</span>
									</a>
								</div>
							</div>

							<div class="testimonials">
								<h3>Testimonials</h3>
								<div class="testimonial-slider">
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
									<div class="item">
										Within the first five minutes of meeting with Dr. Doran, I know that this was the right school for me. I had never been so excited to go to school before. She makes learning so enjoyable and has a positive attitude. Dr. Doran puts her focus on making sure we are learning and understanding everything. I know that I will be a great esthetician because I have a great teacher. This school is like a second home. There other students are very friendly and helpful. I have not regretted coming to any class. This the best decision I have ever made.

										<div class="author">Shauna S.</div>
									</div>
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