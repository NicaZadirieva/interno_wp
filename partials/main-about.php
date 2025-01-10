<?php
    /**
     * This is a about content for index.php
     * 
     */
?>
<?php

    /** VARIABLES */
    $recent_metadata_id = wp_get_recent_posts( [
	'numberposts'      => 1,
	'orderby'          => 'post_date',
	'order'            => 'DESC',
	'post_type'        => 'Main_settings'
    ], OBJECT )[0]->ID;

    $settings_meta = get_post_custom( $recent_metadata_id );
    $about_title = $settings_meta['about_title'][0];
    $about_text = $settings_meta['about_text'][0];
    $about_phone_number = $settings_meta['about_phone_number'][0];

?>


<div class="about">
    <div class="about__text">
        <h2 class="h2"><?php echo $about_title ?></h2>
        <p><?php echo $about_text ?></p>
        <div class="about__tel">
            <a href="tel:<?php echo $about_phone_number?>">
                <button class="about__tel__button" style="background-image: url('<?php echo get_site_url()."/phone-icon" ?>');">
                </button>
            </a>
            <div class="about__tel-content">
                <a href="tel:<?php echo $about_phone_number?>"  class="tel-content__link">
                       <?php echo $about_phone_number?>
                </a>
                <p>Call Us Anytime</p>
            </div>
        </div>
        <a href="#" class="about__button button-container">
            <button class="button" type="button">
                <span>Get Free Estimate</span>
                <img src="<?php echo get_site_url().'/arrow-next-icon'?>" alt="Изображение стрелки" />
            </button>
        </a>
    </div>
    <div class="about__thumb">
        <img src="<?php echo get_site_url().'/art'?>" class="about__img" alt="Изображение приоритета компании" />
    </div>
</div>