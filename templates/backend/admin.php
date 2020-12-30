<?php
/**
 * @package MB Mobile Contact Bar
 * Admin Display Custom Fields
 * 
 */

?>

<div class="wrap">
	<h1>MB Mobile Contact Bar</h1>

    <?php settings_errors(); ?>

    <form method="post" action="options.php">
        <?php
            settings_fields('mbc_options_group');

            do_settings_sections('mbc_contact_mobile_bar');

            submit_button()    
        ?>
    </form>
</div>
