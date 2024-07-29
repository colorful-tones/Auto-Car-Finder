<?php
/**
 * Car Details (condensed) block.
 *
 * @param array  $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool   $is_preview True during backend preview render.
 * @param int    $post_id The post ID the block is rendering content against.
 *                     This is either the post ID currently being displayed inside a query loop,
 *                     or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

// Number field.
$mileage = get_field( 'demo_vehicle_mileage', $post_id );
// Select field.
$drive_type = get_field( 'demo_drive_type', $post_id );
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

	<ul class="vehicle-details unlist">
		<?php if ( $mileage ) : ?>
			<li class="vehicle-mileage">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"/><path d="M3.34 19a10 10 0 1 1 17.32 0"/></svg>
				<?php echo esc_html( $mileage ); ?> miles
			</li>
		<?php endif; ?>

		<?php if ( $drive_type ) : ?>
			<li class="vehicle-drive-type">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"/><circle cx="7" cy="17" r="2"/><path d="M9 17h6"/><circle cx="17" cy="17" r="2"/></svg>
				<?php echo esc_html( $drive_type['value'] ); ?>
			</li>
		<?php endif; ?>
	</ul>

<?php if ( ! $is_preview ) : ?>
	</div>
<?php endif; ?>
