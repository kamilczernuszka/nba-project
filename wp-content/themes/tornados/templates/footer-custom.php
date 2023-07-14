<?php
/**
 * The template to display default site footer
 *
 * @package WordPress
 * @subpackage TORNADOS
 * @since TORNADOS 1.0.10
 */

$tornados_footer_id = tornados_get_custom_footer_id();
$tornados_footer_meta = get_post_meta( $tornados_footer_id, 'trx_addons_options', true );
if ( ! empty( $tornados_footer_meta['margin'] ) ) {
	tornados_add_inline_css( sprintf( '.page_content_wrap{padding-bottom:%s}', esc_attr( tornados_prepare_css_value( $tornados_footer_meta['margin'] ) ) ) );
}
?>
<footer class="footer_wrap footer_custom footer_custom_<?php echo esc_attr( $tornados_footer_id ); ?> footer_custom_<?php echo esc_attr( sanitize_title( get_the_title( $tornados_footer_id ) ) ); ?>
						<?php
						if ( ! tornados_is_inherit( tornados_get_theme_option( 'footer_scheme' ) ) ) {
							echo ' scheme_' . esc_attr( tornados_get_theme_option( 'footer_scheme' ) );
						}
						?>
						">
	<?php
	// Custom footer's layout
	do_action( 'tornados_action_show_layout', $tornados_footer_id );
	?>
</footer><!-- /.footer_wrap -->
