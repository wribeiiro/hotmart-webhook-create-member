<?php

function hmu_plugin_opts_page() {
    ?>
<div class="wrap">
    <form action="options.php" method="POST">
        <?php 
            settings_fields( 'hmu_opts_group' );
            do_settings_sections( 'hmu_opts_sections' );
            submit_button();
        ?>
    </form>
</div>
<?php
}