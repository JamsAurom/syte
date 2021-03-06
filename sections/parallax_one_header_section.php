<?php
/**
 * Header section
 *
 * @package parallax-one
 */

$paralax_one_header_logo = get_theme_mod( 'paralax_one_header_logo', parallax_get_file( '/images/logo-2.png' ) );
$paralax_one_header_logo = apply_filters( 'parallax_one_translate_single_string', $paralax_one_header_logo, 'Big Title Section' );

$parallax_one_header_title = get_theme_mod( 'parallax_one_header_title', esc_html__( 'Simple, Reliable and Awesome.', 'parallax-one' ) );
$parallax_one_header_title = apply_filters( 'parallax_one_translate_single_string', $parallax_one_header_title, 'Big Title Section' );

$parallax_one_header_subtitle = get_theme_mod( 'parallax_one_header_subtitle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' );
$parallax_one_header_subtitle = apply_filters( 'parallax_one_translate_single_string', $parallax_one_header_subtitle, 'Big Title Section' );

$parallax_one_header_button_text = get_theme_mod( 'parallax_one_header_button_text', esc_html__( 'GET STARTED', 'parallax-one' ) );
$parallax_one_header_button_text = apply_filters( 'parallax_one_translate_single_string', $parallax_one_header_button_text, 'Big Title Section' );

$parallax_one_header_button_link = get_theme_mod( 'parallax_one_header_button_link', '#' );
$parallax_one_header_button_link = apply_filters( 'parallax_one_translate_single_string', $parallax_one_header_button_link, 'Big Title Section' );
if ( ! empty( $parallax_one_header_button_link ) && strpos( $parallax_one_header_button_link, '#' ) === 0 ) {
	$parallax_one_go_to = 'onclick="return false;" data-anchor="' . esc_attr( $parallax_one_header_button_link ) . '"';
} else {
	$parallax_one_go_to = 'onclick="parent.location=\'' . esc_url( $parallax_one_header_button_link ) . '\'" data-anchor=""';
}

$parallax_one_enable_move = get_theme_mod( 'paralax_one_enable_move' );
$parallax_one_first_layer = get_theme_mod( 'paralax_one_first_layer', parallax_get_file( '/images/background1.png' ) );
$parallax_one_first_layer = apply_filters( 'parallax_one_translate_single_string', $parallax_one_first_layer, 'Big Title Section' );

$parallax_one_second_layer = get_theme_mod( 'paralax_one_second_layer', parallax_get_file( '/images/background2.png' ) );
$parallax_one_second_layer = apply_filters( 'parallax_one_translate_single_string', $parallax_one_second_layer, 'Big Title Section' );


if ( ! empty( $paralax_one_header_logo ) || ! empty( $parallax_one_header_title ) || ! empty( $parallax_one_header_subtitle ) || ! empty( $parallax_one_header_button_text ) ) {

	if ( ! empty( $parallax_one_enable_move ) && $parallax_one_enable_move ) {

		echo '<ul id="parallax_move">';


		if ( empty( $parallax_one_first_layer ) && empty( $parallax_one_second_layer ) ) {

			$parallax_one_header_image2 = get_header_image();
			$parallax_one_header_image2 = apply_filters( 'parallax_one_translate_single_string', $parallax_one_header_image2, 'Big Title Section' );

			echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $parallax_one_header_image2 . ');"></li>';

		} else {

			if ( ! empty( $parallax_one_first_layer ) ) {
				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . $parallax_one_first_layer . ');"></li>';
			}
			if ( ! empty( $parallax_one_second_layer ) ) {
				echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . $parallax_one_second_layer . ');"></li>';
			}
		}

		echo '</ul>';

	} ?>

	<?php parallax_hook_heading_before(); ?>
	<div class="overlay-layer-wrap">
		<?php parallax_hook_heading_top(); ?>
		<div class="container overlay-layer" id="parallax_header">
			<!-- ONLY LOGO ON HEADER -->
			<?php
			if ( ! empty( $paralax_one_header_logo ) ) {
				echo '<div class="only-logo"><div id="only-logo-inner" class="navbar"><div id="parallax_only_logo" class="navbar-header"><img src="' . esc_url( $paralax_one_header_logo ) . '" alt="' . get_bloginfo( 'title' ) . '"></div></div></div>';
			} elseif ( is_customize_preview() ) {
				echo '<div class="only-logo"><div id="only-logo-inner" class="navbar"><div id="parallax_only_logo" class="navbar-header"><img src="" alt="' . get_bloginfo( 'title' ) . '"></div></div></div>';
			}
			?>
			<!-- /END ONLY LOGO ON HEADER -->

			<div class="row">
				<div class="col-md-12 intro-section-text-wrap">

					<!-- HEADING AND BUTTONS -->
					<?php
					if ( ! empty( $paralax_one_header_logo ) || ! empty( $parallax_one_header_title ) || ! empty( $parallax_one_header_subtitle ) || ! empty( $parallax_one_header_button_text ) ) {
					?>
						<div id="intro-section" class="intro-section">

							<!-- WELCOM MESSAGE -->
							<?php
							if ( ! empty( $parallax_one_header_title ) ) {
								echo '<h2 id="intro_section_text_1" class="intro white-text">' . wp_kses_post( $parallax_one_header_title ) . '</h2>';
							} elseif ( is_customize_preview() ) {
								echo '<h2 id="intro_section_text_1" class="intro white-text paralax_one_only_customizer"></h2>';
							}

							if ( ! empty( $parallax_one_header_subtitle ) ) {
								echo '<h5 id="intro_section_text_2" class="white-text">' . wp_kses_post( $parallax_one_header_subtitle ) . '</h5>';
							} elseif ( is_customize_preview() ) {
								echo '<h5 id="intro_section_text_2" class="white-text paralax_one_only_customizer"></h5>';
							}
							?>

							

						</div>
						<!-- /END HEADNING AND BUTTONS -->
						<?php
					} // End if().
					?>
				</div>
			</div>
		</div>
		<?php parallax_hook_heading_bottom(); ?>
	</div>
	<?php parallax_hook_heading_after(); ?>
	<?php
} // End if(). ?>
