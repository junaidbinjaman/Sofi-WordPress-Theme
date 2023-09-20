<?php
/**
 * The template for displaying the front page
 *
 * This template displays the frontpage contents
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sofi
 */

get_header();
?>

<!-- HERO -->
<?php
	$sofi_hero_heading                   = get_option( 'sofi_options' )['sofi_hero_heading'];
	$sofi_hero_desc                      = get_option( 'sofi_options' )['sofi_hero_description'];
	$sofi_hero_desc_color                = get_option( 'sofi_options' )['sofi_hero_desc_font_color'];
	$sofi_hero_knowledge_title           = get_option( 'sofi_options' )['sofi_hero_knowledge_title'];
	$sofi_hero_knowledge_icons           = get_option( 'sofi_options' )['sofi_hero_knowledge_icons'];
	$sofi_hero_knowledge_tech_icon_color = get_option( 'sofi_options' )['sofi_hero_knowledge_tech_icon_color'];
	$sofi_hero_knowledge_tech_icon_size  = get_option( 'sofi_options' )['sofi_hero_knowledge_tech_icon_size'];
	$sofi_hero_knowledge_tech_icon_size  = $sofi_hero_knowledge_tech_icon_size . 'px';
	$sofi_hero_knowledge_icons           = array_slice( $sofi_hero_knowledge_icons, 0, 4 );
	$sofi_hero_profile_img               = get_option( 'sofi_options' )['sofi_hero_profile_img']['url'];
?>
<div class="sofi_section" id="home">
		<div class="sofi_hero">
			<div class="container">
				<div class="content">
					<div class="texts">
						<div class="job">
							<video playsinline autoplay muted loop>
								<source src="<?php echo esc_url( get_template_directory_uri() . '/assets' ); ?>/video/1.mp4" type="video/mp4">
							</video>
							<h3>
								<?php echo esc_html( $sofi_hero_heading ); ?>
							</h3>
						</div>
						<div class="desc">
							<p style="color: <?php echo esc_html( $sofi_hero_desc_color ); ?>">
								<?php echo esc_html( $sofi_hero_desc ); ?>
							</p>
						</div>
						<div class="short_skills">
							<div class="text">
								<span><?php echo wp_kses( $sofi_hero_knowledge_title, array( 'br' => array() ) ); ?></span>
							</div>
							<div class="icons">
								<ul>
									<?php
									foreach ( $sofi_hero_knowledge_icons as $knowledge_icon ) {
										?>
									<li>
										<i class="<?php echo esc_html( $knowledge_icon['sofi_hero_knowledge_tech_icon'] ); ?>"
											style="
											color: <?php echo esc_html( $sofi_hero_knowledge_tech_icon_color ); ?>;
											font-size: <?php echo esc_html( $sofi_hero_knowledge_tech_icon_size ); ?>
											"
										></i>
									</li>
										<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>
					<div class="avatar">
						<div class="image" data-img-url="<?php echo esc_url( $sofi_hero_profile_img ); ?>"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /HERO -->

	<!-- ABOUT -->
	<?php
	$sofi_about_img_src             = get_option( 'sofi_options' )['sofi_about_image']['url'];
	$sofi_about_img_alt             = get_option( 'sofi_options' )['sofi_about_image']['alt'];
	$sofi_about_exper_year          = get_option( 'sofi_options' )['sofi_about_exper_year'];
	$sofi_about_exper_year_bg       = get_option( 'sofi_options' )['sofi_about_exper_bg_img']['url'];
	$sofi_about_exper_circle_text   = get_option( 'sofi_options' )['sofi_about_exper_circle_text'];
	$sofi_about_section_title       = get_option( 'sofi_options' )['sofi_about_section_title'];
	$sofi_about_section_title_color = get_option( 'sofi_options' )['sofi_about_section_title_color'];
	$sofi_about_section_desc = get_option( 'sofi_options' )['sofi_about_section_desc'];
	$sofi_about_section_desc_color = get_option( 'sofi_options' )['sofi_about_section_desc_color'];
	?>
	<div class="sofi_section" id="about">
		<div class="sofi_about">
			<div class="container">
				<div class="about_inner">
					<div class="left wow fadeInLeft" data-wow-duration="1.5s">
						<div class="image">
							<img src="<?php echo esc_url( $sofi_about_img_src ); ?>" alt="<?php echo esc_attr( $sofi_about_img_alt ); ?>" />
							<div class="main" data-img-url="<?php echo esc_url( $sofi_about_img_src ); ?>"></div>
							<div class="experience">
								<h3 class="year" data-img-url="<?php echo esc_url( $sofi_about_exper_year_bg ); ?>">
								<?php echo esc_html( $sofi_about_exper_year ); ?>
								</h3>
								<div id="circle">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
										<defs>
											<path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
										</defs>
										<circle cx="150" cy="100" r="75" fill="none"/>
										<g>
											<use xlink:href="#circlePath" fill="none"/>
											<text fill="#000">
												<textpath xlink:href="#circlePath">
													<?php echo esc_html( $sofi_about_exper_circle_text ); ?>
												</textpath>
											</text>
										</g>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="right wow fadeInRight" data-wow-duration="1.5s">
						<div class="sofi_title">
							<span>About Me</span>
							<h3 style="color: <?php echo esc_html( $sofi_about_section_title_color ); ?>"><?php echo esc_html( $sofi_about_section_title ); ?></h3>
						</div>
						<div class="text">
							<p style="color: <?php echo esc_html( $sofi_about_section_desc_color ); ?>"><?php echo esc_html( $sofi_about_section_desc ); ?></p>
						</div>
						<div class="signature">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets' ); ?>/img/signature.png" alt="" />
						</div>
						<div class="sofi_button">
							<a href="#">Download CV</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /ABOUT -->

<?php
get_footer();