<?php
/*
Template Name: Checkout Page
*/

get_header();

?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="checkout-page">
            <div class="checkout-form">
                <h2><?php _e('Checkout', 'textdomain'); ?></h2>
                <?php
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
?>