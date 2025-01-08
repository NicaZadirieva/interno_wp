<?php
/**
 * The template for displaying modal menu
 *
 * @package Interno_wp
 */

?>

    <div class="overlay" id="overlay">
        <div class="modal-search">
            <div class="container">
                <div class="modal-search__content">
                    <input class='modal-search__input' type="text" placeholder="Search" />
                    <button class='modal-search__submit' style="background-image: url('<?php echo get_site_url()."/arrow-next-icon-2" ?>');" type="submit">
                    </button>
                    <button style="background-image: url('<?php echo get_site_url()."/close-icon" ?>');" class='modal-search__close' type="button" onclick="closeModal();">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlayMenu">
        <div class="modal">
            <div class="container">
                <div class="modal__content">
                    <nav>
                        <ul class="ul header__nav">
                            <li class="header__item">
                                <a class="header__link" href="#">Home</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#">Our Projects</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#">Blog</a>
                            </li>
                            <li class="header__item">
                                <a class="header__link" href="#">Contact</a>
                            </li>


                        </ul>
                    </nav>
                    <button class='modal__close' type="button" onclick="closeModalMenu();">
                    </button>
                </div>

            </div>
        </div>
    </div>