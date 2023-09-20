<?php
/**
 * Template Name: Temp
 *
 * @package Sofi
 */

get_header();
?>
	
	<!-- SERVICES -->
	<div class="sofi_section" id="service">
		<div class="sofi_services">
			<div class="container">
				<div class="services_inner">
					<div class="left">
						<div class="sofi_title">
							<span>Services</span>
							<h3>I offer a Full-cycle of Web Development Services</h3>
						</div>
						<div class="text">
							<p>For more than 20 years our experts have been accomplishing enough with modern Web Development, new generation programming language, and Full Stack developers to deliver cost-effective solutions.</p>
						</div>
						<div class="sofi_tm_progress">
							<div class="progress_inner" data-value="95">
								<span><span class="label">HTML &amp; CSS</span><span class="number">95%</span></span>
								<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
							</div>
							<div class="progress_inner" data-value="80" >
								<span><span class="label">JavaScript</span><span class="number">80%</span></span>
								<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
							</div>
							<div class="progress_inner" data-value="90">
								<span><span class="label">WordPress</span><span class="number">90%</span></span>
								<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
							</div>
						</div>
					</div>
					<div class="right">
						<ul class="grid">
							<li class="grid-item wow fadeInUp" data-wow-duration="1.5s">
								<div class="list_inner">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/design.svg" alt="" />
									<h3 class="title">Design</h3>
								</div>
							</li>
							<li class="grid-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
								<div class="list_inner">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/code.svg" alt="" />
									<h3 class="title">Development</h3>
								</div>
							</li>
							<li class="grid-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
								<div class="list_inner">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/award.svg" alt="" />
									<h3 class="title">Quality</h3>
								</div>
							</li>
							<li class="grid-item wow fadeInUp" data-wow-duration="1.5s">
								<div class="list_inner">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/tools.svg" alt="" />
									<h3 class="title">Maintain</h3>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /SERVICES -->
	
	<!-- PORTFOLIO -->
	<div class="sofi_section" id="portfolio">
		<div class="sofi_portfolio">
			<div class="container">
				<div class="portfolio_inner">
					<div class="sofi_title">
						<span>Portfolio</span>
						<h3>Each project is a unique piece of development</h3>
					</div>
					<div class="portfolio_list">
						<ul class="gallery_zoom">
							<li class="wow fadeInUp" data-wow-duration="1.5s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/1.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>Water Drops</h3>
										<span>Vimeo</span>
									</div>
									<a class="sofi_full_link popup-vimeo" href="https://vimeo.com/312334044"></a>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/2.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>Sweet Cherry</h3>
										<span>Youtube</span>
									</div>
									<a class="sofi_full_link popup-youtube" href="https://www.youtube.com/watch?v=Amq-qlqbjYA"></a>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/3.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>Red Nike</h3>
										<span>Soundcloud</span>
									</div>
									<a class="sofi_full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/252739311&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-duration="1.5s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/6.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>Blue Lemon</h3>
										<span>Detail</span>
									</div>
									<a class="sofi_full_link popup_info" href="#"></a>
								</div>
								
								<!-- Hidden informations for popup begin -->
								<div class="portfolio_hidden_infos">
									<div class="popup_details">
										<div class="top_image"></div>
										<div class="portfolio_main_title"></div>
										<div class="main_details">
											<div class="textbox">
												<p>The origin of the lemon is unknown, though lemons are thought to have first grown in Assam (a region in northeast India), northern Burma or China. A genomic study of the lemon indicated it was a hybrid between bitter orange and citron.</p>
												<p>The first substantial cultivation of lemons in Europe began in Genoa in the middle of the 15th century. The lemon was later introduced to the Americas in 1493 when Christopher Columbus brought lemon seeds to Hispaniola on his voyages. Spanish conquest throughout the New World helped spread lemon seeds.</p>
											</div>
											<div class="detailbox">
												<ul>
													<li>
														<span class="first">Client</span>
														<span>Alvaro Morata</span>
													</li>
													<li>
														<span class="first">Category</span>
														<span><a href="#">Detail</a></span>
													</li>
													<li>
														<span class="first">Date</span>
														<span>March 07, 2021</span>
													</li>
													<li>
														<span class="first">Share</span>
														<ul class="share">
															<li><a href="#"><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/social/facebook.svg" alt="" /></a></li>
															<li><a href="#"><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/social/twitter.svg" alt="" /></a></li>
															<li><a href="#"><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/social/instagram.svg" alt="" /></a></li>
															<li><a href="#"><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/social/dribbble.svg" alt="" /></a></li>
															<li><a href="#"><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/social/tik-tok.svg" alt="" /></a></li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
										<div class="additional_images">
											<ul>
												<li>
													<div class="list_inner">
														<div class="my_image">
															<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-2.jpg" alt="" />
															<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/7.jpg"></div>
														</div>
													</div>
												</li>
												<li>
													<div class="list_inner">
														<div class="my_image">
															<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-2.jpg" alt="" />
															<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/8.jpg"></div>
														</div>
													</div>
												</li>
												<li>
													<div class="list_inner">
														<div class="my_image">
															<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-2.jpg" alt="" />
															<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/9.jpg"></div>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- Hidden informations for popup end -->
								
							</li>
							<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/5.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>Pantone</h3>
										<span>Image</span>
									</div>
									<a class="sofi_full_link zoom" href="img/portfolio/5.jpg"></a>
								</div>
							</li>
							<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
								<div class="list_inner">
									<div class="image">
										<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/1-1.jpg" alt="" />
										<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/portfolio/4.jpg"></div>
									</div>
									<div class="overlay"></div>
									<div class="details">
										<h3>New Telephone</h3>
										<span>Image</span>
									</div>
									<a class="sofi_full_link zoom" href="img/portfolio/4.jpg"></a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /PORTFOLIO -->
	
	<!-- VIDEO -->
	<div class="sofi_section">
		<div class="sofi_video">
			<div class="background">
				<div class="image jarallax" data-speed="0" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/hero/1.jpg"></div>
				<div class="overlay"></div>
			</div>
			<div class="content">
				<div class="container">
					<div class="content_inner">
						<span class="rounded"><a class="popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo"></a></span>
						<h3 class="text wow fadeInUp" data-wow-duration="1.5s">I am delivering beautiful digital products for my clients</h3>
						<div class="sofi_button wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=ICr_bOuM9Zo">Watch Video</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /VIDEO -->
	
	<!-- TESTIMONIALS -->
	<div class="sofi_section">
		<div class="sofi_testimonials">
			<div id="grouploop">
				<div class="item-wrap">
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
					<div class="item"><span>Testimonials</span></div>
				</div>
			</div>
			<div class="container">
				<div class="testimonials_list">
					<div class="wrapper owl-carousel">
						<div class="wr_in item">
							<div class="list_inner">
								<ul class="stars">
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
								</ul>
								<div class="text">
									<p>I rarely like to write reviews, but the developer truly deserve a standing ovation for their customer support, customisation and most importantly, friendliness and professionalism. Very satisfying!!!</p>
								</div>
								<div class="details">
									<h3 class="author"><span>Albert Einstein</span></h3>
									<h3 class="job"><span>Freelancer</span></h3>
								</div>
								<div class="avatar">
									<div class="image" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/about/2.jpg"></div>
								</div>
								<img class="svg myquote" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/quote.svg" alt="" />
							</div>
						</div>
						<div class="wr_in item">
							<div class="list_inner">
								<ul class="stars">
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
								</ul>
								<div class="text">
									<p>The quality of the design is very high, and with a bit of knowledge about HTML and CSS also very easy to customize. Overall a good design, that I am quite happy with. Really appreciate that.</p>
								</div>
								<div class="details">
									<h3 class="author"><span>Avon Smith</span></h3>
									<h3 class="job"><span>Designer</span></h3>
								</div>
								<div class="avatar">
									<div class="image" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/about/1.jpg"></div>
								</div>
								<img class="svg myquote" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/quote.svg" alt="" />
							</div>
						</div>
						<div class="wr_in item">
							<div class="list_inner">
								<ul class="stars">
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
									<li><img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/star.svg" alt="" /></li>
								</ul>
								<div class="text">
									<p>I had a problem finding something, asked the support team, got a reply and a solution within a few minutes. Brilliant support! very happy with the website I bought. Thank you developers!!</p>
								</div>
								<div class="details">
									<h3 class="author"><span>Bruce Kennedy</span></h3>
									<h3 class="job"><span>Photographer</span></h3>
								</div>
								<div class="avatar">
									<div class="image" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/about/3.jpg"></div>
								</div>
								<img class="svg myquote" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/quote.svg" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TESTIMONIALS -->
	
	<!-- NEWS -->
	<div class="sofi_section" id="news">
		<div class="sofi_news">
			<div class="container">
				<div class="sofi_title">
					<span>News</span>
					<h3>Check out the latest breaking news headlines on development</h3>
				</div>
				<div class="news_list">
					<ul>
						<li class="wow fadeInUp" data-wow-duration="1.5s">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-3.jpg" alt="" />
									<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/news/1.jpg"></div>
									<a class="sofi_full_link" href="#"></a>
								</div>
								<div class="details">
									<span>August 15, 2021 <a href="#">Branding</a></span>
									<h3 class="title"><a href="#">Good Travel</a></h3>
								</div>
								<div class="hide_content">
									<div class="descriptions">
										<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
										<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
										<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
										<div class="quotebox">
											<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
										</div>
										<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
										<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
									</div>
								</div>
							</div>
						</li>
						<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-3.jpg" alt="" />
									<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/news/2.jpg"></div>
									<a class="sofi_full_link" href="#"></a>
								</div>
								<div class="details">
									<span>July 25, 2021 <a href="#">Design</a></span>
									<h3 class="title"><a href="#">National Geographic</a></h3>
								</div>
								<div class="hide_content">
									<div class="descriptions">
										<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
										<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
										<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
										<div class="quotebox">
											<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
										</div>
										<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
										<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
									</div>
								</div>
							</div>
						</li>
						<li class="wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.4s">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/thumbs/4-3.jpg" alt="" />
									<div class="main" data-img-url="<?php echo get_template_directory_uri() . '/assets'; ?>/img/news/3.jpg"></div>
									<a class="sofi_full_link" href="#"></a>
								</div>
								<div class="details">
									<span>June 02, 2021 <a href="#">Nature</a></span>
									<h3 class="title"><a href="#">Famous Lake</a></h3>
								</div>
								<div class="hide_content">
									<div class="descriptions">
										<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
										<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
										<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
										<div class="quotebox">
											<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
										</div>
										<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
										<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /NEWS -->
	
	<!-- CONTACT -->
	<div class="sofi_section" id="contact">
		<div class="sofi_contact">
			<div class="container">
				<div class="sofi_title">
					<span>Contact</span>
					<h3>Feel free to contact me if any assistance is needed in the future</h3>
				</div>
				<div class="short_info wow fadeInUp" data-wow-duration="1.5s">
					<ul>
						<li>
							<div class="list_inner">
								<div class="logo">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/location-2.svg" alt="" />
								</div>
								<div class="info">
									<h3>Location</h3>
									<span>123 Ave street, USA</span>
								</div>
							</div>
						</li>
						<li>
							<div class="list_inner">
								<div class="logo">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/telephone-2.svg" alt="" />
								</div>
								<div class="info">
									<h3>Phone</h3>
									<span>+77 022 155 02 02</span>
								</div>
							</div>
						</li>
						<li>
							<div class="list_inner">
								<div class="logo">
									<img class="svg" src="<?php echo get_template_directory_uri() . '/assets'; ?>/img/svg/email-2.svg" alt="" />
								</div>
								<div class="info">
									<h3>Mail</h3>
									<span>sofi_tm@gmail.com</span>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="wrapper">
					<div class="left wow fadeInUp" data-wow-duration="1.5s">
						<div class="fields">
							<form action="/" method="post" class="contact_form" id="contact_form">
								<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
								<div class="empty_notice"><span>Please Fill Required Fields</span></div>
								<div class="first">
									<ul>
										<li>
											<input id="name" type="text" placeholder="Name" autocomplete="off">
										</li>
										<li>
											<input id="email" type="text" placeholder="Email" autocomplete="off">
										</li>
									</ul>
								</div>
								<div class="last">
									<textarea id="message" placeholder="Message"></textarea>
								</div>
								<div class="sofi_button" data-color="dark">
									<a id="send_message" href="#">Send Message</a>
								</div>

								<!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

							</form>
						</div>
					</div>
					<div class="right wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
						<div class="map_wrap">
							<div class="map" id="ieatmaps"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /CONTACT -->

<?php
get_footer();