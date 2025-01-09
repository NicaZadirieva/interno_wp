<?php
    /**
     * This is a about content for index.php
     * 
     */
?>
<?php
    /**TODO: сделать изменяемыми через wordpress */
    /** VARIABLES */
    $about_title = 'We Create The Art Of Stylish Living Stylishly';
    $about_text = 'It is a long established fact that a reader will be distracted by the of readable content of a
                        page
                        when lookings at its layouts the points of using
                        that it has a more-or-less normal.';
    $about_phone_number = '012345678';

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