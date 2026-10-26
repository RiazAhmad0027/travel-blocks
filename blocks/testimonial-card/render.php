<?php
/**
 * Testimonial Card block template.
 *
 * @var array $block Block settings and attributes.
 */
$quote  = get_field( 'testimonial_quote' ) ?: 'Write the customer quote here.';
$name   = get_field( 'testimonial_name' ) ?: 'Customer name';
$role   = get_field( 'testimonial_role' );
$photo  = get_field( 'testimonial_photo' );
$rating = max( 0, min( 5, (int) get_field( 'testimonial_rating' ) ) ); // Always 0 to 5.

$classes = 'travel-testimonial';
if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
?>
<figure class="<?php echo esc_attr( $classes ); ?>">
	<?php if ( $rating ) : ?>
		<div class="travel-testimonial__stars" role="img" aria-label="<?php echo esc_attr( $rating . ' out of 5 stars' ); ?>">
			<?php echo esc_html( str_repeat( '★', $rating ) . str_repeat( '☆', 5 - $rating ) ); ?>
		</div>
	<?php endif; ?>
	<blockquote class="travel-testimonial__quote"><p><?php echo esc_html( $quote ); ?></p></blockquote>
	<figcaption class="travel-testimonial__person">
		<?php if ( $photo ) : ?>
			<?php echo wp_get_attachment_image( $photo['ID'], 'thumbnail', false, array( 'class' => 'travel-testimonial__photo' ) ); ?>
		<?php endif; ?>
		<span>
			<strong><?php echo esc_html( $name ); ?></strong>
			<?php if ( $role ) : ?><br><?php echo esc_html( $role ); ?><?php endif; ?>
		</span>
	</figcaption>
</figure>