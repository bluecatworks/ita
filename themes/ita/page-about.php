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

							<div class="testimonials" id="testi">
								<h3>Testimonials</h3>
								<div class="testimonial-slider">
									<div class="item">
										At first I was very hesitant on where to go for aesthetics and medical assisting when finishing

college or if I should. I came across this school online and decided to go for an interview to see

the school and Doctor Doran. The minute I walked in, I was welcomed with open arms and had

all my questions answered. I decided to sign up for the programs. I just finished the aesthetics

program and could not be happier with my decision. Not only do you get the classroom

knowledge, but you get hands on training in the clinic each week from the teacher Mrs. Carrie.

Though what I loved the most is Dr.Doran who runs the school comes in and  teaches you on

days. She is not one to sit back, but rather wants everyone to be the best and teaches us to be. She

knows each student on a personal level, she becomes your teacher but best friend.  Your other

classmates are all different ages, ethic groups and past professions making you learn from them

and becoming a tight knit family. You are more than prepared for your boards as well!

										<div class="author">Nina K.</div>
									</div>
									<div class="item">
										The M.A course is totally worth it and the instructors truly care about your success, I looked

forward to every class. They also help you out with an externship at Rush Hospital to get your

career started!

Yo tome la clase de asistente médico y vale la pena las instructoras de verdad se interesan en que

seas una persona exitosa, yo siempre estaba contenta de ir a cada clase. Te ayudan a que hagas

algunas horas de experiencia en el Hospital Rush para empesar con tu carrera!

										<div class="author">Keren C.</div>
									</div>
									<div class="item">
										I am currently in the Medical Assistant program. This school I feel is very successful in helping

people find careers they love. I enjoy going to school every week, I love that we get to practice

on each other to help boost our confidence in what we will be doing in our careers. Also I love

how they set us up with an externship at Rush University to help with our experience in the field.

What drew me to the school was how short the program is, but you learn so much information,

and actually retain it. Also that everyone is so friendly and helpful. I really recommend this

school if you are interested in MA and, or Esthetics.

										<div class="author">Kelsey P.</div>
									</div>
									<div class="item">
										I took the esthetics program and I am currently taking the medical assistant program I feel that

this school has greatly prepared me to advance my education and further my knowledge when I

go for externship at Rush University I&#39;m happy and proud to be a student at ISBA and I thank my

Teachers and Dr. Doran for all that have taught me.

										<div class="author">Kristen P.</div>
									</div>
									<div class="item">
										I&#39;m taking the medical assisting program. Very glad i choose this school. Took me a while to get

back to school because the experiences I&#39;ve had at other vocational schools. Since day one i felt

welcomed and i continue to receive the same support and drive from the instructors. You can tell

they care about your success. I love the fact that the class is small because every single student

gets the attention of the instructors. From hands on training to medical book work. I&#39;m confident

that the time I&#39;ve spent here will have me ready for the career in the medical field.

										<div class="author">Rebeca G.</div>
									</div>
									<div class="item">
										If your dream is to be an Esthetician this is the school you need to attend.  The program is above

amazing.  World class education, GREAT understanding of skin, and a lot of hands on teaching.

 <br>

Ever client that gets my facials are in a wow state when I&#39;m done, and its all because of this

school and how I was taught.  I&#39;m so glad I picked this school to go too.  Their the BEST.

										<div class="author">Elaine D.</div>
									</div>
									<div class="item">
						The decision to go back and finish school was of very great importance to me. When I came

across ITA, I knew it was the perfect fit, given my background in esthetics and my goals of

continuing my education in healthcare.<br>

The CMA program combines theory and clinical experience, which facilitates a balanced

education.  The material is presented in an organized and structured way, while still maintaining

a supportive environment. ITA guides and encourages you to reach your full potential and for

that I am ever grateful to Dr. Doran &amp; Ms. Helen.<br>

I am now even more motivated, confident and prepared to go forward with my career in

healthcare. Additionally, my overall experience has allowed me to develop more compassion and

understanding, which will be helpful in providing the best quality of care to future patients.

										<div class="author">Courtney A.</div>
									</div>
									<div class="item">Where do I begin?! I feel so lucky to have found such an incredible school with incredibly

knowledgeable teachers. I am a student in the esthetics program and will be graduating at the end

of February. I feel very prepared and confident in everything I&#39;ve learned. My plan after

graduation is to work in a dermatologist or plastic surgeon office. In order to be prepared for that

field, I will be participating in the Medical Assisting program (MA). During the MA program, I

will be working with Rush dermatology, which I am so excited about!
<br>
 

If you&#39;re interested in esthetics or medical assisting, ISBA is for you. You will get one on one

attention, meet new friends and learn to love everything to do with skin!
										<div class="author">Kelly G.</div>
									</div>
									<div class="item">
									I joined the International Training Academy (ITA) for the Medical Assisting program.<br>

Dr. Doran was very accommodating and I was happy they offer flexible class schedules (Day

and Night classes).<br>

ITA teaches you everything you need to learn, including EKG/ECG and Phlebotomy.<br>

They supported and guided us, helped us learn and practice over and over until we do it right.

We were like a family supporting each other to reach our full potential. I learned a whole lot not

only in the theoretical part but more on practical skills.<br>

With all the hands-on experience I learned, coupled with my organizational skills and ability to

multi-task, I am more confident and prepared for a fulfilling and rewarding career as a Clinical

Medical Assistant.<br>

Thank you Dr. Doran for the opportunity to be a part of your school. My gratitude to Ms. Helen,

our instructor for all her support, knowledge and dedication.
										<div class="author">Cynthia P.</div>
									</div>
									<div class="item">
									With a million things going on at once in my life, I made a tough decision to go back to school. I

signed up for the Medical Esthetics and Medical Assisting Program and I have to say, it was the

best decision I ever made and also with choosing this school. With having 2 children, they have

day and evening programs available. This school is mostly hands on which is exactly what I

needed. Dr. Doran and the instructors are amazing, I can&#39;t say enough positive things about them.

Not only do they give you 150% of their effort to make you the best professional you can be, but

they are also like one big family! Thank you
										<div class="author">Tiffanee L.</div>
									</div>
									<div class="item">
									I attended this school over 2 years ago and I can tell you it was a great choice! I went for

Medical Asst and had no problem getting a job after I graduated. The staff and teachers are great,

and you finish your school in a short period of time which is nice. Because of this school I have a

wonderful job and career, and it was the best decision I made. I hope this review will help others

with deciding;) Good Luck to everyone out there, but make the right choice and choose this

school for your education.
										<div class="author">Sarah S.</div>
									</div>
									<div class="item">
									I finished my esthetics program last Friday at International Skin Beauty Academy and I am

confident and I am ready to provide superior services to my future clients!!  My time at ISBA

has been the best in that I was surrounded by my talented classmates  and I had the best teachers,

Dr. Doran, Ms. Kim, Ms. Carrie, and Anastasia.  They all pushed me to be the best esthetician

and they explained the material clearly so that I understood it.  They are all passionate about

what they do, energetic, inspiring, and caring.  I am so happy and thankful that I chose ISBA.

 Thank you so much!!!
										<div class="author">StaceeKai H.</div>
									</div>
									<div class="item">
									I am so glad my family suggested I go back to school, ISBA was a great choice! It worked

perfectly with my daily schedule. I&#39;m so looking forward to helping others with their skin care

needs. Dr. Doran and her staff have made a big difference in my experience in school. They have

changed my life. My next big step is the state test and with the preparation I received from them,

I am more than confident I will do well. I will miss all the teachers and classmates! Looking

forward to the schools continuing education classes.
										<div class="author">Suzanne F.</div>
									</div>
									<div class="item">
									I am about to finish school at ISBA in one week.  One week!  I can&#39;t believe it.  Someone pinch

me!  This has been a 10 year dream of mine!   I am so excited and so proud of myself and the

other students finishing next week.  We have worked so, so hard.  All we have left is the state

board exam in April!
<br>
I needed to take the time and write about ISBA for they have helped me make this dream of mine

a reality.  Dr. Doran and her staff LOVE this field and their students.  Though they push you to

be the best, they are passionate, supportive, and caring along the way.  Because of this,  I feel so

accomplished and strong in my facial and waxing abilities. I feel like I am one of the best.   I am

confident in my skills and I think that is what you want in a school.  I am ready to work in even

the best spas.  Dr. Doran and her staff are perfectionists but they make you be THE BEST you

can possibly be.  Thank you from the bottom of my heart.
										<div class="author">Karen O.</div>
									</div>
									<div class="item">
									Where to begin?...This school is outstanding, professional, clean, and fosters a nurturing

environment.  How do I know?  I attended 5 years ago and received my Esthetic License, then I

returned again this year and I am now a Medical Assistant!!  I am so proud to have attended ITA

 The instructors are genuine.  Thank you ITA!!!  Love you Dr. Doran!!
										<div class="author">SL. A.</div>
									</div>
									<div class="item">
									Dr. Doran, Ms. Kim &amp; Ms. Rasa all gave me the knowledge and techniques needed to become

one the best Estheticians. Dr. Doran is so loving, outgoing and truly cares about her students

needs! You become apart of the ISBA family as soon as you become a student. All of the

teachers reassure all of the girls how intelligent we are &amp; how much they love us. It&#39;s so nice to

hear! I truly enjoyed all of my time spent here as a student as well as an intern. I did not have to

look around at other schools, I knew ISBA was the perfect school for me. As a student you will

feel extremely confident taking all the tests within the curriculum as well as the state licensing

test. Thank you to all staff at ISBA!!!
										<div class="author">Melissa P.</div>
									</div>
									<div class="item">
									I usually never post reviews but this school is too good to be kept a secret. I just got my exam

result and guess what I passed!! I will be a Licensed Esthetician soon, and it&#39;s all because of

ISBA!! I can&#39;t describe in words how much I loved the school, the teachers and everyone else I

met there. They are the best when it comes about skin care. All the teachers have great passion

for what they do and they inspire the same feeling in you. So by the time I finished the school I

had great knowledge and not only, I have the confidence to go out there and claim I know how to

do my job.  Even after school I still go there sometimes, I always enjoy being there and always

feels like home. Thank you my dear teachers, I am so grateful to know you!!! Thank you Dr

Doran!!!!!
										<div class="author">Ali T.</div>
									</div>
									<div class="item">
									Being professional make-up artist working on commercial productions and weddings for over 15

years, I have always had a passion for skin care. Although I have obtained a college degree, I

have always wanted my license in esthetics so that I could provide additional skin care services

to my clients.  <br>

Because I am very particular, I wanted the best school around.  I knew that Dr. Doran and ISBA

would be a perfect fit for me because of their advanced curriculum, unique techniques, and hand-

on learning approach to esthetics.<br>

Today, I am grateful for the education that I have received through ISBA and for my extremely

knowledgeable and dedicated instructors that helped me rise to the top of the industry
										<div class="author">Nancy J.</div>
									</div>
									<div class="item">
									This is an Esthetics School and also a Spa.  It is just north of Woodfield Mall and you can get spa

services for next to nothing.  Services include facials, and all waxing services and most times

depending on what waxing you need, it will probably be free!  The student are very good and the

place is very clean.  High standards and great location.  Check it out, you won&#39;t be

disappointed!!!
										<div class="author">Sara A.</div>
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