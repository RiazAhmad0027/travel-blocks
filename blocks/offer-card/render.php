<?php
/**
 * Offer Card block template.
 *
 * @var array $block Block settings and attributes.
 */
$image  = get_field( 'offer_image' );          // Image field, returns an array.
$title  = get_field( 'offer_title' ) ?: 'Your offer title';
$price  = get_field( 'offer_price' );
$nights = get_field( 'offer_nights' );
$link   = get_field( 'offer_link' );           // Link field, returns an array.

$classes = 'travel-offer-card';
if ( ! empty( $block['className'] ) ) {
	$classes .= ' ' . $block['className'];
}
$anchor = ! empty( $block['anchor'] ) ? $block['anchor'] : '';
?>
<div class="<?php echo esc_attr( $classes ); ?>"<?php echo $anchor ? ' id="' . esc_attr( $anchor ) . '"' : ''; ?>>
	<?php if ( $image ) : ?>
		<?php echo wp_get_attachment_image( $image['ID'], 'medium_large', false, array( 'class' => 'travel-offer-card__img' ) ); ?>
	<?php endif; ?>
	<div class="travel-offer-card__body">
		<h3 class="travel-offer-card__title"><?php echo esc_html( $title ); ?></h3>
		<?php if ( $price ) : ?>
			<p class="travel-offer-card__price">
				<?php echo esc_html( '$' . number_format_i18n( (float) $price ) ); ?>
				<?php if ( $nights ) : ?><span> / <?php echo esc_html( $nights ); ?> nights</span><?php endif; ?>
			</p>
		<?php endif; ?>
		<?php if ( have_rows( 'offer_features' ) ) : ?>
			<ul class="travel-offer-card__features">
				<?php while ( have_rows( 'offer_features' ) ) : the_row(); ?>
					<li><?php echo esc_html( get_sub_field( 'feature' ) ); ?></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<?php if ( $link ) : ?>
			<a class="wp-element-button travel-offer-card__btn" href="<?php echo esc_url( $link['url'] ); ?>"<?php echo ! empty( $link['target'] ) ? ' target="_blank" rel="noopener"' : ''; ?>>
				<?php echo esc_html( $link['title'] ? $link['title'] : 'Book now' ); ?>
			</a>
		<?php endif; ?>
	</div>
</div>