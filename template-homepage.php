<?php
/**
 * Template name: Homepage Template
 */

get_header();
?>
<main>
    <?php 
        get_template_part("partials/main", "hero"); 
        
    ?>
</main>
 <div class="container offset">
    <?php 
        get_template_part("partials/main", "about"); 
        get_template_part("partials/main", "slider"); 
        get_template_part("partials/main", "brands"); 
        get_template_part("partials/main", "stats"); ?>
        <div class="container offset">
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