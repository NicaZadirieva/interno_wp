<?php
/**
 * The template for displaying the footer
 *
 * @package Interno_wp
 */

?>

<?php
	/**VARIABLES */
	$item_address = "55 East Birchwood Ave. <br /> Brooklyn, New York 11201";
	$item_email = "contact@interno.com";
	$item_pretty_phone = "(123) 456 - 7890";
	$item_phone = "1234567890";
?>

	<footer class="bg offset">
        <div class="container">
            <div class="footer">
                <a href="#" class="logo">
                    <img src="<?php echo get_site_url().'/logo' ?>" alt="Interno Logo" />
                </a>
                <ul class="ul footer__contacts">
                    <li class="contacts__item">
                        <div class='item__address'><?php echo $item_address ?></div>
                    </li>

                    <li class="contacts__item">
                        <a class="contacts__link" href="mailto:<?php echo $item_email?>">
							<?php echo $item_email?>
						</a>
                    </li>
                    <li class="contacts__item">
                        <a class="contacts__link" href="tel:<?php echo $item_phone?>">
							<?php echo $item_pretty_phone ?>
						</a>
                    </li>
                </ul>
            </div>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
