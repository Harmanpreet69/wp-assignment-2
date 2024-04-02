<?php

/**
 * Template Name: Homepage
 * Template Post Type: page
 *  */

get_header()
?>

<main id="main" class="site-main" role="main">
    <section class="hero-section">
        <div class="container">
            <h1>Welcome to Our Online Bookstore</h1>
            <p>Discover a world of knowledge with our vast collection of books.</p>
            <a href="<?php echo get_permalink(get_option('woocommerce_shop_page_id')); ?>" class="btn">Browse Books</a>
        </div>
    </section>

    <section class="featured-books-section">
        <div class="container">
            <h2>Featured Books</h2>
            <div class="featured-books">
                <?php
                do_action("woocommerce_before_shop_loop");
                echo do_shortcode('[products limit="5" columns="3"]');
                do_action("woocommerce_after_shop_loop");
                ?>
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container">
            <h2>Subscribe to Our Newsletter</h2>
            <p>Stay updated with our latest arrivals, promotions, and news.</p>
        </div>
    </section>
</main>

<?php
get_footer();
?>