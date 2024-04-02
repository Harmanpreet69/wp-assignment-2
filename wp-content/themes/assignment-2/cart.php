<?php
/*
Template Name: Cart Page
*/

get_header();

?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="cart-page">
            <h2><?php _e('Your Cart', 'textdomain'); ?></h2>
            <div class="cart-table">
                <?php
                echo do_shortcode('[woocommerce_cart]');
                ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>