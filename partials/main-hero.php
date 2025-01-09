<?php
    /**
     * This is a hero content for index.php
     * 
     */
?>
<?php
    /**TODO: сделать изменяемыми через wordpress */
    /** VARIABLES */
    $hero_logo_path = get_site_url().'/header-main';
    $hero_title = 'Let Your Home Be Unique';
    $hero_text = 'There are many variations of the passages of Lorem Ipsum from available, variations of the passages.';
?>


<div class="hero">
    <img alt='Изображение первого блока сайта' class="hero__img" src="<?php echo $hero_logo_path ?>" />
    <div class="container">
        <h1 class="hero__title"><?php echo $hero_title ?></h1>
        <p class="hero__text"><?php echo $hero_text ?></p>
    </div>
</div>