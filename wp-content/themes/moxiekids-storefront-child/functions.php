<?php

//function get_main_image_url_by_uri($uri)
//{
//    preg_match_all('~/\w+[-]*\w*[-]*\w*/\z~', $uri, $matches);
//    $image_item = trim($matches[0][0], '/');
//    $attachment_urls = 'http://www.moxiekids.co.za/wp-content/themes/moxiekids-storefront-child/img/' . $image_item . '.jpg';
//    return array($attachment_urls, $image_item);
//}

function wp_enqueue_moxie_scripts()
{
    wp_enqueue_style('blueprint', 'https://unpkg.com/blueprint-css@3.1.1/dist/blueprint.min.css');
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');

    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
}

add_action('wp_enqueue_scripts', 'wp_enqueue_moxie_scripts');

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function set_product_variation_id($variations_json)
{
?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            let phpAvailableVars = <?php echo $variations_json; ?>;
            phpAvailableVars.sort((a, b) => parseInt(a.attributes['attribute_pa_add-sibling']) - parseInt(b.attributes['attribute_pa_add-sibling']));
            let siblingSelect = jQuery("#pa_add-sibling");
            let input = jQuery(".variation_id");
            input.val(phpAvailableVars[0].variation_id);
            console.log('input :>> ', input);

            siblingSelect.change(function() {
                let selectedVariationId = phpAvailableVars[parseInt(siblingSelect.val())].variation_id;
                console.log('variationId :>> ', selectedVariationId);
                input.val(selectedVariationId);
            });
        });
    </script>
<?php
}

function set_subscription_variation_id($variations_json)
{
?>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            let phpAvailableVars = <?php echo $variations_json; ?>;
            phpAvailableVars.sort((a, b) => parseInt(a.attributes['attribute_pa_add-sibling']) - parseInt(b.attributes['attribute_pa_add-sibling']));
            let siblingSelect = jQuery("#add-sibling");
            let input = jQuery(".variation_id");
            input.val(phpAvailableVars[0].variation_id);
            console.log('input :>> ', input);

            console.log('php vars', phpAvailableVars);
            siblingSelect.change(function() {
                selectedVariationId = phpAvailableVars[parseInt(siblingSelect.val())].variation_id;
                console.log('variationId :>> ', selectedVariationId);
                input.val(selectedVariationId);
            });
        });
    </script>
<?php
}
