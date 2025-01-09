 <?php
    /**
     * This is a feedback form for index.php
     * 
     */
?>
 
<div class="container page feedback-form-container">
    <h2 class="h2 feedback-form-container__h2">Creative project? Let's have a productive talk.</h2>
    <form class="feedback-form" action="#" method="POST">
        <input placeholder="Name" class="feedback-form__input" type="text" name="name" required />
        <input placeholder="Email" class="feedback-form__input" type="email" name="email" required />
        <textarea placeholder="Hello I am interested in" class="feedback-form__textarea" id="interested_in"
                    name="interested_in"></textarea>
        <button type="submit" class="button feedback-form__submit">
            <span>Send Now</span>
            <img src="<?php echo get_site_url().'/arrow-next-icon'?>" alt="Изображение стрелки" />
        </button>
    </form>
</div>