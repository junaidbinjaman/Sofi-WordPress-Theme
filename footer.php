<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sofi
 */

?>

<!-- COPYRIGHT -->
<div class="sofi_section">
	<?php
	$sofi_footer_background_color = get_option( 'sofi_options' )['sofi_footer_background'];
	?>
	<div class="sofi_copyright" style="background-color: <?php echo esc_html( $sofi_footer_background_color ); ?>">
		<div class="container">
			<div class="copyright_inner">
				<div class="text wow fadeInLeft" data-wow-duration="1.5s">
					<?php
					$sofi_footer_copy_right_text = get_option( 'sofi_options' )['sofi_copyright_text'];
					?>
					<p><?php echo esc_html( $sofi_footer_copy_right_text ); ?></p>
					
				</div>
				<div class="social wow fadeInRight" data-wow-duration="1.5s">
					<ul>
						<?php
						$sofi_footer_social_links = get_option( 'sofi_options' )['sofi_social_links'];

						foreach ( $sofi_footer_social_links as $social ) {
							?>
						<li class="sofi_footer_social_icons">
							<?php
							$sofi_platform_url             = $social['sofi_social_platform_profile_url'];
							$sofi_footer_social_icon_color = get_option( 'sofi_options' )['sofi_footer_social_icon_color'];
							$sofi_social_icon              = $social['sofi_social_icon'];
							?>
							<a href="<?php echo esc_url( $sofi_platform_url ); ?>">
								<i style="color: <?php echo esc_html( $sofi_footer_social_icon_color ); ?>" class="<?php echo esc_html( $sofi_social_icon ); ?>"></i>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /COPYRIGHT -->

<!-- AUDIO FOR CLICK -->
<audio id="audio1">
	<source src="<?php echo esc_url( get_template_directory_uri() ) . '/assets'; ?>/audio/1.mp3">
</audio>
<audio id="audio2">
	<source src="<?php echo esc_url( get_template_directory_uri() ) . '/assets'; ?>/audio/2.mp3">
</audio>
<!-- /AUDIO FOR CLICK -->

<!-- MAGIC CURSOR -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->

<?php wp_footer(); ?>

</body>

</html>