<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined('ABSPATH') || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if (!function_exists('wc_get_gallery_image_html')) {
    return;
}

global $post;
$post_slug = $post->post_name;

$product = get_page_by_path($post_slug, OBJECT, 'product');
$product_obj = wc_get_product($product->ID);

?>
<div>
    <div class="left-image" style="width: 300px; margin-bottom: 50px;">
        <?php

        $attachment_ids = $product_obj->get_gallery_image_ids();

        if ($attachment_ids && $product_obj->get_image_id()) { ?>
            <?php
            $id = 1;
            foreach ($attachment_ids as $attachment_id) {
                ?>
                <div id="<?php echo 'img-0' . $id ?>">
                    <img src="<?php echo wp_get_attachment_url($attachment_id) ?>"
                         alt="<?php echo wp_get_attachment_url($attachment_id) ?>"
                         width="100%">
                </div>
                <?php
                $id += 1;
            }
        }
        ?>

    </div>
</div>
