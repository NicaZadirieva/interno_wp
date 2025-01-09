<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Interno_wp
 */

get_header();
?>
<main>
    <?php 
        get_template_part("partials/main", "hero"); 
        
    ?>
</main>
 <div class="container page">
    <?php 
        get_template_part("partials/main", "about"); 
        get_template_part("partials/main", "slider"); 
        get_template_part("partials/main", "brands"); 
        get_template_part("partials/main", "stats"); ?>
        <div class="container page">
        <?php 
            get_template_part("partials/main", "articles"); 
            get_template_part("partials/main", "newsletter"); 
            get_template_part("partials/main", "feedback");  
        ?>
        </div>
</div>
<?php
get_sidebar();
get_footer();
get_template_part('/modal-menu');
