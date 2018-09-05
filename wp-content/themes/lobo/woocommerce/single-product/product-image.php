<?php
/**
 * Single Product Image
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.14
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $post, $woocommerce, $product;

?>
<div class="images wcif">

	<?php

	if ( has_post_thumbnail() ) {

		$attachment_count = count( $product->get_gallery_attachment_ids() );

		if ( $attachment_count > 0 ) {

			$gallery = '<div class="module default-module no-resize" data-size="4-2"><div class="royalSlider rsDefault">';

			foreach ( $product->get_gallery_attachment_ids() as $id) {

				$img_url = wp_get_attachment_image_src( $id, 'full');
				$img_title = esc_attr( get_the_title( $id ) );

				$gallery .= '<div><img src="' . aq_resize( $img_url[0], 960, 960, true ) . '" alt="" /></div>';

			}

			$gallery .= '</div></div>';

			echo $gallery;

		} else {

			$img_title = esc_attr( get_the_title( get_post_thumbnail_id() ) );
			$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');

			echo '<div class="module default-module" data-size="4-2" data-bgimage="' . aq_resize( $img_url[0], 960, 960, true ) . '"></div>';

		}

	} else {

		echo '<div class="module default-module" data-size="4-2" data-bgimage="' . wc_placeholder_img_src() . '"></div>';

	}

	?>

	<?php do_action( 'woocommerce_product_thumbnails' ); ?>

	<div class="insert-related"></div>

</div>
