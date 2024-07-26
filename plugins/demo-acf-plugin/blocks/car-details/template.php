<?php
/**
 * Car Details block.
 *
 * @param array  $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id The post ID the block is rendering content against.
 *                     This is either the post ID currently being displayed inside a query loop,
 *                     or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

// Support custom id values.
$block_id = '';
if ( ! empty( $block['anchor'] ) ) {
	$block_id = esc_attr( $block['anchor'] );
}

// Create class attribute allowing for custom "className" and "align" values.
$block_classes = 'vehicle-details-block';
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_classes .= ' align' . $block['align'];
}

// Number field.
$mileage = get_field( 'demo_vehicle_mileage', $post_id );
// Select field.
$drive_type = get_field( 'demo_drive_type', $post_id );
// Group field w/ sub-fields.
$mpg = get_field( 'demo_miles_per_gallon', $post_id );
// Group field w/ sub-fields.
$colors = get_field( 'demo_vehicle_colors', $post_id );
// Gallery field.
$gallery = get_field( 'demo_vehicle_gallery', $post_id );
?>

<?php if ( ! $is_preview ) : ?>
	<div
		<?php
		echo wp_kses_data(
			get_block_wrapper_attributes(
				array(
					'id'    => esc_attr( $block_id ),
					'class' => $block_classes,
				)
			)
		);
		?>
	>
<?php endif; ?>

	<div class="vehicle-gallery">
		<?php
		if ( has_post_thumbnail() ) :
			$image_id           = get_post_thumbnail_id();
			$image_url          = wp_get_attachment_image_src( $image_id, 'large' );
			$image_caption      = get_the_post_thumbnail_caption( $image_id );
			$featured_image_url = $image_url[0];
			?>
		<div class="vehicle-featured-image">
			<a href="<?php echo esc_url( $featured_image_url ); ?>" title="<?php echo esc_html( $image_caption ); ?>" class="vehicle-gallery__link thickbox">
				<?php echo wp_get_attachment_image( $image_id, 'large', '', array( 'class' => 'vehicle-image' ) ); ?>
			</a>
		</div>
		<?php endif; ?>

		<?php if ( $gallery ) : ?>
			<?php
			// Grab each image.
			foreach ( $gallery as $image ) :
				$image_id      = $image['ID'];
				$image_url     = $image['url'];
				$image_caption = $image['caption'];
				?>
				<a href="<?php echo esc_url( $image_url ); ?>" title="<?php echo esc_html( $image_caption ); ?>" class="vehicle-gallery__link thickbox">
					<?php echo wp_get_attachment_image( $image_id, 'thumbnail', '', array( 'class' => 'vehicle-image' ) ); ?>
				</a>
				<?php endforeach; ?>
		<?php endif; ?>
	</div><!-- .vehicle-gallery -->

	<ul class="vehicle-details">
		<?php if ( $mileage ) : ?>
			<li class="vehicle-mileage">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>
				<?php echo esc_html( $mileage ); ?> miles
			</li>
		<?php endif; ?>

		<?php if ( $drive_type ) : ?>
			<li class="vehicle-drive-type">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
				<?php echo esc_html( $drive_type['value'] ); ?>
			</li>
		<?php endif; ?>

		<?php if ( $mpg ) : ?>
			<li class="vehicle-mpg vehicle-mpg--city">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="15" y1="22" y2="22"/><line x1="4" x2="14" y1="9" y2="9"/><path d="M14 22V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v18"/><path d="M14 13h2a2 2 0 0 1 2 2v2a2 2 0 0 0 2 2h0a2 2 0 0 0 2-2V9.83a2 2 0 0 0-.59-1.42L18 5"/></svg>
				<?php echo esc_html( $mpg['demo_city_mpg'] ); ?> City / <?php echo esc_html( $mpg['demo_highway_mpg'] ); ?> Hwy
			</li>
		<?php endif; ?>

		<?php if ( $colors ) : ?>
			<li class="vehicle-color">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8"/><path d="M7 14h.01"/><path d="M17 14h.01"/><rect width="18" height="8" x="3" y="10" rx="2"/><path d="M5 18v2"/><path d="M19 18v2"/></svg>
				<div>
					<div>
						<span class="vehicle-color-swatch" style="background-color:<?php echo esc_attr( $colors['demo_exterior_color_hex'] ); ?>"></span>
						<?php echo esc_html( $colors['demo_exterior_color'] ); ?> Exterior
					</div>
					<div>
						<span class="vehicle-color-swatch" style="background-color:<?php echo esc_attr( $colors['demo_interior_color_hex'] ); ?>"></span>
						<?php echo esc_html( $colors['demo_interior_color'] ); ?> Interior
					</div>
				</div>
			</li>
		<?php endif; ?>
	</ul>

<?php if ( ! $is_preview ) : ?>
	</div>
<?php endif; ?>
