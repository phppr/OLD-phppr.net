<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();
?>

<div id="main-content" class="main-content">

    <?php
    if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
    // Include the featured content template.
    get_template_part( 'featured-content' );
    }
    ?>
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php
            while ( have_posts() ) : the_post();

            get_template_part( 'content', 'page' );
            endwhile;

            wp_reset_query();
            query_posts(array(
                'post_type' => 'oportunidades',
                'posts_per_page' => 10,
                'paged' => get_query_var('paged') )
            ); ?>
            <hr>
            <?php
            while ( have_posts() ) : the_post();
            ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php
                    the_title( '<header class="entry-header"><h2 class="entry-title" style="font-size: 20px;">', '</h2></header><!-- .entry-header -->' );
                ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <hr>
            </article>
            <?php
            endwhile;
            
            twentythirteen_paging_nav();
            ?>

        </div>
    </div>
<?php get_sidebar( 'content' ); ?>
</div>

<?php
get_sidebar();
get_footer();
