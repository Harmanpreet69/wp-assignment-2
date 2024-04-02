<?php
/*
Template Name: My Account Page
*/

get_header();

?>

<main id="main" class="site-main" role="main">
    <div class="container">
        <div class="my-account-page">
            <div class="my-account-content">
                <h2><?php _e('My Account', 'textdomain'); ?></h2>
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