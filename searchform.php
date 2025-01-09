<?php
/**
 * The template for displaying search
 *
 * @package Interno_wp
 */

?>
<form class="modal-search__content" method="get" action='<?php echo esc_url(home_url("/"))?>'>
    <input class='modal-search__input' type="text" placeholder="Search" name="s" value="<?php the_search_query(); ?>"/>
    <button class='modal-search__submit' style="background-image: url('<?php echo get_site_url()."/arrow-next-icon-2" ?>');" type="submit">
    </button>
    <button style="background-image: url('<?php echo get_site_url()."/close-icon" ?>');" class='modal-search__close' type="button" onclick="closeModal();">
    </button>
</form>