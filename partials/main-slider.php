<?php
    /**
     * This is a slider for index.php
     * 
     */
?>
<?php
    /**TODO: сделать изменяемыми через wordpress */
    /** VARIABLES */
    $slider_items = array(
        array(
            'author' => 'BUNNY WILLIAMS',
            'title' => 'What our Customers says...',
            'text' => "I like an interior that defies labeling. 
            I don't really want someone to walk into a room and know that I did it",
        ),
        array(
            'author' => 'BUNNY WILLIAMS',
            'title' => 'What our Customers says...',
            'text' => "I like an interior that defies labeling. 
            I don't really want someone to walk into a room and know that I did it",
        ),
        array(
            'author' => 'BUNNY WILLIAMS',
            'title' => 'What our Customers says...',
            'text' => "I like an interior that defies labeling. 
            I don't really want someone to walk into a room and know that I did it",
        )
    )
?>


<div class="swiper swiper-feedback page">
    <div class="swiper-wrapper">
        <?php foreach ($slider_items as $item):?>
            <div class="swiper-slide swiper-feedback__slide">
                <h2 class="title"><?php echo $item['title']?></h2>
                <p class="swiper-feedback__text"><?php echo $item['text']?></p>
                <span class="swiper-feedback__author">
                            -<?php echo $item['author']?>
                </span>
                
            </div>
        <?php endforeach;?>
    </div>
    <div class="swiper-feedback__next swiper-button-next"></div>
    <div class="swiper-feedback__prev swiper-button-prev"></div>
</div>