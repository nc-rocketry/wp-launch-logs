<?php


function launchlogs_settings() {
    register_setting( 'launchlogs', 'launchlogs_options' );


    add_settings_section('launchlogs_section_developers',
         __( 'The Matrix has you.', 'launchlogs' ),
         'launchlogs_section_developers_cb',
         'launchlogs'
    );
}

?>
