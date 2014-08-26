<?php
/**
 * wssf-pinterest-pin.tpl.php, Jonathan Kissam, jk@webskillet.com, Nov 2013
 *
 * available variables:
 * $link: link to pin on Pinterest
 * $image_small: URL for small image (maximum width 236 pixels)
 * $image_large: URL for large image (maximum width 736 pixels)
 * $description: description
 * $description_plain: description with all HTML tags stripped
 */
?>
<li class="wssf-pin">
	<a href="<?php print $link; ?>" title="<?php print $description_plain; ?>"><img src="<?php print $image_large; ?>" alt="<?php print $description_plain; ?>" /></a>
</li>
