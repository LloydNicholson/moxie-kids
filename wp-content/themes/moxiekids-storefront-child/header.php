<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light bg-light d-md-none navbar-custom">
        <a class="navbar-brand" href="#">
            <img src="http://www.moxiekids.co.za/wp-content/uploads/2019/11/MK-Logo-scaled.png" width="200"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/shop">Subscribe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product-tag/one-box-shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/my-account">My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/basket">Basket</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php do_action('storefront_before_site'); ?>

    <div id="page" class="hfeed site">
        <?php do_action('storefront_before_header'); ?>

        <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

            <?php
            /**
             * Functions hooked into storefront_header action
             *
             * @hooked storefront_header_container                 - 0
             * @hooked storefront_skip_links                       - 5
             * @hooked storefront_social_icons                     - 10
             * @hooked storefront_site_branding                    - 20
             * @hooked storefront_secondary_navigation             - 30
             * @hooked storefront_product_search                   - 40
             * @hooked storefront_header_container_close           - 41
             * @hooked storefront_primary_navigation_wrapper       - 42
             * @hooked storefront_primary_navigation               - 50
             * @hooked storefront_header_cart                      - 60
             * @hooked storefront_primary_navigation_wrapper_close - 68
             */
            do_action('storefront_header');
            ?>

        </header><!-- #masthead -->

        <?php
        /**
         * Functions hooked in to storefront_before_content
         *
         * @hooked storefront_header_widget_region - 10
         * @hooked woocommerce_breadcrumb - 10
         */
        do_action('storefront_before_content');
        ?>

        <div id="content" class="site-content" tabindex="-1">
            <div class="col-full">

                <?php
                do_action('storefront_content_top');
