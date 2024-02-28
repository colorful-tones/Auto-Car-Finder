<?php
/**
 * Car Price block.
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
$block_classes = 'vehicle-price-block';
if ( ! empty( $block['className'] ) ) {
	$block_classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_classes .= ' align' . $block['align'];
}

// Text field.
$price = get_field( 'demo_vehicle_price', $post_id );
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

	<?php if ( $price ) : ?>
		<span class="vehicle-price">
			<?php echo esc_html( $price ); ?>
		</span>	
	<?php endif; ?>

<?php if ( ! $is_preview ) : ?>
	</div>
<?php endif; ?>
