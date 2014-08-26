<?php
/**
 * wssf-pinterest-block.tpl.php, Jonathan Kissam, jk@webskillet.com, Nov 2013
 *
 * available variables:
 * $pins: list of pins
 * $morelink: link to Pinterest page
 * $morelink_text: text for the link to the Pinterest page
 */
?>
<ul class="wssf-pins">
	<?php print $pins; ?>
</ul>
<div class="more-link"><a href="<?php print $morelink; ?>"><?php print $morelink_text; ?></a></div>
