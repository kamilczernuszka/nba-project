<?php
/**
 * The template to display the Structured Data Snippets
 *
 * @package WordPress
 * @subpackage TORNADOS
 * @since TORNADOS 1.0.30
 */

// Structured data snippets
if ( tornados_is_on( tornados_get_theme_option( 'seo_snippets' ) ) ) {
	?>
	<div class="structured_data_snippets">
		<meta itemprop="headline" content="<?php echo esc_attr( get_the_title() ); ?>">
		<meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'Y-m-d' ) ); ?>">
		<meta itemprop="dateModified" content="<?php echo esc_attr( get_the_modified_date( 'Y-m-d' ) ); ?>">
		<div itemscope itemprop="publisher" itemtype="https://schema.org/Organization">
			<meta itemprop="name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			<meta itemprop="telephone" content="">
			<meta itemprop="address" content="">
			<?php
			$tornados_logo_image = tornados_get_logo_image();
			if ( ! empty( $tornados_logo_image['logo'] ) ) {
				?>
				<meta itemprop="logo" itemtype="https://schema.org/ImageObject" content="<?php echo esc_url( $tornados_logo_image['logo'] ); ?>">
				<?php
			}
			?>
		</div>
		<?php
		if ( tornados_get_theme_option( 'show_author_info' ) != 1 || ! is_single() || is_attachment() || ! get_the_author_meta( 'description' ) ) {
			?>
			<div itemscope itemprop="author" itemtype="https://schema.org/Person">
				<meta itemprop="name" content="<?php echo esc_attr( get_the_author() ); ?>">
			</div>
			<?php
		}
		if ( ( is_singular() || is_attachment() ) && has_post_thumbnail() ) {
			?>
			<meta itemprop="image" itemtype="http://schema.org/ImageObject" content="<?php echo esc_url( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>">
			<?php
		}
		?>
	</div>
	<?php
}
