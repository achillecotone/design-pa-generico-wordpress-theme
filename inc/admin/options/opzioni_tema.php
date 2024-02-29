<?php

function dci_register_theme_options(){
    $prefix = '';

    /**
     * Opzioni Tema
     */
    $args = array(
        'id'           => 'dci_options_theme',
        'title'        => esc_html__( 'Tema', 'design_comuni_italia' ),
        'object_types' => array( 'options-page' ),
        'option_key'   => 'custom_theme',
        'capability'    => 'manage_options',
        'parent_slug'  => 'dci_options',
        'tab_group'    => 'dci_options',
        'tab_title'    => __('Tema', "design_comuni_italia"),	);

    // 'tab_group' property is supported in > 2.4.0.
    if ( version_compare( CMB2_VERSION, '2.4.0' ) ) {
        $args['display_cb'] = 'dci_options_display_with_tabs';
    }



    $social_themes = new_cmb2_box( $args );



    $social_themes->add_field( array(
        'id' => $prefix . 'themes_istruzioni',
        'name'        => __( 'Personalizza il Tema', 'design_comuni_italia' ),
        'desc' => __( 'scegli il colore del tema.' , 'design_comuni_italia' ),
        'type' => 'title',
    ) );





    $social_themes->add_field(array(
        'id' => $prefix . 'show_custom_tema',
        'name' => __('Attiva Custom Theme', 'design_comuni_italia'),
        'desc' => __('Abilita la possibilità di personalizzare i colori del tema ', 'design_comuni_italia'),
        'type' => 'radio_inline',
        'default' => 'false',
        'options' => array(
            'true' => __('Si', 'design_comuni_italia'),
            'false' => __('No', 'design_comuni_italia'),
        ),
        'attributes' => array(
            'data-conditional-value' => "false",
        ),
    ));

    $social_themes->add_field(array(
        'id' => $prefix . 'active_sticky',
        'name' => __('Attiva Sticky', 'design_comuni_italia'),
        'desc' => __('Abilita l\' opzione del menu sticky', 'design_comuni_italia'),
        'type' => 'radio_inline',
        'default' => 'false',
        'options' => array(
            'true' => __('Si', 'design_comuni_italia'),
            'false' => __('No', 'design_comuni_italia'),
        ),
        'attributes' => array(
            'data-conditional-value' => "false",
        ),
    ));

    $social_themes->add_field(array(
        'id' => $prefix . 'bg_slim_header',
        'name' => __('Slim Header', 'design_comuni_italia'),
        'desc' => __('seleziona il colore', 'design_comuni_italia'),
        'type' => 'colorpicker',
        'default' => '#0066CC',
    ));


    $social_themes->add_field(array(
        'id' => $prefix . 'bg_header',
        'name' => __('Header', 'design_comuni_italia'),
        'desc' => __('seleziona il colore header', 'design_comuni_italia'),
        'type' => 'colorpicker',
        'default' => '#0066CC',


    ));

    $social_themes->add_field(array(
        'id' => $prefix . 'bg_menu',
        'name' => __('Menu', 'design_comuni_italia'),
        'desc' => __('seleziona il colore del menu', 'design_comuni_italia'),
        'type' => 'colorpicker',
        'default' => '#0066CC',


    ));


    $social_themes->add_field(array(
        'id' => $prefix . 'bg_footer',
        'name' => __('Footer', 'design_comuni_italia'),
        'desc' => __('seleziona il colore del footer', 'design_comuni_italia'),
        'type' => 'colorpicker',
        'default' => '#0066CC',
    ));


    $social_themes->add_field(array(
        'id' => $prefix . 'colore_txt_principale',
        'name' => __('Colore Principale', 'design_comuni_italia'),
        'desc' => __('seleziona il colore del testo del menu', 'design_comuni_italia'),
        'type' => 'colorpicker',
        'default' => '#0066CC',


    ));


    $social_themes->add_field(array(
        'id' => $prefix . 'url_area_riservata',
        'name' => __('Link Area Riservata', 'design_comuni_italia'),
        'desc' => __('Indicare il link dell\'area riservata', 'design_comuni_italia'),
        'type' => 'text',

    ));


    $social_themes->add_field(array(
        'id' => $prefix . 'url_profilo',
        'name' => __('Link Profilo', 'design_comuni_italia'),
        'desc' => __('Indicare il link del profilo', 'design_comuni_italia'),
        'type' => 'text',

    ));



    $social_themes->add_field(array(
        'id' => $prefix . 'bg_eventi_img',
        'name' => __('Immagine Evidenza', 'design_comuni_italia'),
        'desc' => __('seleziona un immagine di sfondo', 'design_comuni_italia'),
        'type' => 'file',
        'options' => array(
            'url'=>false,
            ),
        'text'=> array(
            'add_upload_files_text'=> 'Aggiungi'
        ),
        'query_args' => array(
            'type' => array(
                'image/gif',
                'image/jpeg',
                'image/png'
            )
        ),
    ));



}