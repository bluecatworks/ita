<?php get_header(); ?>
	<ul class="second-menu" data-tabs="tabs">
		<li class="active"><a href="" data-toggle="tab">Q&A with Dr. Doran</a></li>
		<li><a href="" data-toggle="tab">Financial assistance</a></li>
		<li><a href="" data-toggle="tab">International Students</a></li>
	</ul>
	<script>
		$(function() {
			$('.qa .item .q').on('click', function() {
				$(this).next().slideToggle();
			});
		});
	</script>
	<?php if(have_posts()): the_post(); ?>
		<div class="banner">
			<img src="<?php bloginfo('template_url'); ?>/images/faqbanner.png" />
			<h2 class="entry_title">
				<span><?php the_title(); ?></span>
			</h2>
		</div>
		<div class="container">
			<article class="page">

				<div class="entry_content">
					<?php the_content(); ?>

					<div class="qa">
						<div class="item">
							<p class="q">Q: Dr. Doran, what is your educational background?</p>
							<p class="a">A: I graduated from medical school, specializing in Dermatology, and worked as a doctor for 20 years in Russia and Lithuania. I do not practice medicine currently. I also have a Master’s in Educational Psychology and I am licensed Teacher of Esthetics and a Nationally Certified MA.<br>
							The Illinois Department of Financial and Professional Regulations ordered me to cease and desist using the designation “M.D, Dermatologist” in order not to confuse people looking for medical treatments. However, when you have a medical degree and are a Medical Doctor you have recognition of your education, regardless of whether you are a licensed doctor or not.</p>
						</div>
						<div class="item">
							<p class="q">Q: Why did you decide to open an Esthetics (Aesthetics) school?</p>
							<p class="a"></p>
						</div>

						<div class="item">
							<p class="q">Q: What makes your school unique?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: For skin care training, what difference between your and CIDESCO programs?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Why did you decide to also offer a Medical Assisting program?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Other schools offer medical/paramedical training also and give additional certificates. How does they differ from your program?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: What do you think about competition among skin care schools?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: What credentials does your Academy have?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Your Clinical Esthetics Program has open enrollment. How does it affect the quality of education?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Do you provide laser training at your school?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Is it true that you have most diverse group of students from different states and countries?</p>
							<p class="a"></p>
						</div>	
						<div class="item">
							<p class="q">Q: Do your students work with real clients?</p>
							<p class="a"></p>
						</div>	
					</div>

					<h3 class="bigger text-center">— Financial Assistance —</h3>

					<div class="row">
						<div class="col-sm-6">
							<p>ITA is not a Title IV school, but we are approved as sponsors for several State and Federal programs. We also accept both governmental and private scholarships.</p>
						</div>

						<div class="col-sm-6">
							<div class="row">
								<div class="col-md-6">
									<p>We are excited to extend our helping hand to the workers, who lost their jobs as a result of Dominick’s stores’ closing. We will award 100 scholarships for Medical Assisting and Esthetics, worth $1,000 each!</p>
								</div>

								<div class="col-md-6">
									<img src="<?php bloginfo('template_url'); ?>/images/faqban.png">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<h3>Veterans and Families</h3>
							<p>International Training Academy is approved by the U.S. Veterans Affairs (VA), so eligible students may use their GI Bill educational benefits towards this program.<br>
							The Military Spouse Career Advancement Accounts (MyCAA) program provides up to $4,000 of Financial Assistance for military spouses<br>
							If you want to find out whether you are eligible to use these benefits for your education, contact International Training Academy today!</p>
						</div>

						<div class="col-sm-6">
							<h3>Unemployment Grants</h3>
							<p>If you are currently receiving unemployment benefits, you may be eligible to receive a Workforce Investment Act (WIA) grant. This program has been created to help men and women receive training in in-demand professions, such as Medical Assisting!<br>
 							You can find more information and the office closest to you by visiting the official site for WIA Works Illinois.</p>
						</div>
					</div>

					<h3 class="bigger text-center">— International Students —</h3>
					<p>International Training Academy is approved as an M1 Visa sponsor to study in the U.S. All international students who wish to complete one of our programs should apply for an M1 visa. Applicants will be required to demonstrate that they have sufficient funds to support themselves for the duration of their course and that they intend to return to their home country upon completion of their studies.</p>
				</div>
			</article>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>