<?php
    function slan_customize_register($wp_customize)
    {
        // AGREGAR NUEVAS SECCIONES
  // HEADER PANEL 
  $wp_customize->add_panel('slan_header_panel', array(
    'title' => __('Kopfzeile', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 1
  ));

  // Header
  $wp_customize->add_section('slan_header_top', array(
    'title' => __('Text in der Kopfzeile', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 1,
    'panel' => 'slan_header_panel'
  ));

  //////////////////////////////////////////////

  // TEXT IN TOP HEADER
  $wp_customize->add_setting('slan_settings[top_header_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('top_header_text', array(
    'type' => 'textarea',
    'label' => __('Text in der Kopfzeile', 'slan'),
    'description' => __('Text, der unterhalb des Namens eingeblendet wird', 'slan'),
    'section' => 'slan_header_top',
    'settings' => 'slan_settings[top_header_text]'
  ));
  // FOOTER PANEL 
  $wp_customize->add_panel('slan_footer_panel', array(
    'title' => __('Fusszeile', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 90
  ));

  // FOOTER
  $wp_customize->add_section('slan_footer_links', array(
    'title' => __('Links und Texte in der Fusszeile', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 1,
    'panel' => 'slan_footer_panel'
  ));

  //////////////////////////////////////////////

  
  // LINKEDIN TEXT
  $wp_customize->add_setting('slan_settings[linkedin_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('linkedin_text', array(
    'label' => __('Text des LinkedIn-Profils', 'slan'),
    'description' => __('Der Name des LinkedIn-Profils', 'slan'),
    'section' => 'slan_footer_links',
    'settings' => 'slan_settings[linkedin_text]'
  ));

  // LINKEDIN URL
  $wp_customize->add_setting('slan_settings[linkedin_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('linkedin_link', array(
    'type' => 'url',
    'label' => __('URL des LinkedIn', 'slan'),
    'description' => __('Die URL des LinkedIn-Profils', 'slan'),
    'section' => 'slan_footer_links',
    'settings' => 'slan_settings[linkedin_link]'
  ));
  // ADDRESS TEXT
  $wp_customize->add_setting('slan_settings[address_text]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('address_text', array(
    'label' => __('Text der Adresse', 'slan'),
    'description' => __('Die Adresse des Unternehmens', 'slan'),
    'section' => 'slan_footer_links',
    'settings' => 'slan_settings[address_text]'
  ));

  // MAPS URL
  $wp_customize->add_setting('slan_settings[map_link]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('map_link', array(
    'type' => 'url',
    'label' => __('URL der Karte', 'slan'),
    'description' => __(' Die URL der Karten-API', 'slan'),
    'section' => 'slan_footer_links',
    'settings' => 'slan_settings[map_link]'
  ));
  // PHONE NUMBER
  $wp_customize->add_setting('slan_settings[phone_number]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('phone_number', array(
    'type' => 'tel',
    'label' => __('Text der Telefonnummer', 'slan'),
    'description' => __('Telefonnummer', 'slan'),
    'section' => 'slan_footer_links',
    'settings' => 'slan_settings[phone_number]'
  ));
   // INDEX PANEL 
   $wp_customize->add_panel('slan_index_panel', array(
    'title' => __('Startseite', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 2
  ));

  // Index
  $wp_customize->add_section('slan_index_texts', array(
    'title' => __('Texte in der Startseite', 'slan'),
    'description' => __('Texte anpassen', 'slan'),
    'priority' => 1,
    'panel' => 'slan_index_panel'
  ));

  //////////////////////////////////////////////

  // TEXT IN TOP INDEX
  $wp_customize->add_setting('slan_settings[index_text_slogan]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('index_text_slogan', array(
    'label' => __('Slogan', 'slan'),
    'description' => __('Text, der als Slogan angezeigt wird.', 'slan'),
    'section' => 'slan_index_texts',
    'settings' => 'slan_settings[index_text_slogan]'
  ));
  // TEXT IN TOP INDEX
  $wp_customize->add_setting('slan_settings[index_text_bot', array(
    'default' => '',
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control('index_text_bot', array(
    'label' => __('Intro Text', 'slan'),
    'description' => __('Intro Text', 'slan'),
    'section' => 'slan_index_texts',
    'settings' => 'slan_settings[index_text_bot]'
  ));
  // PARAGRAPH INDEX
  $wp_customize->add_setting('slan_settings[index_paragraph]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));

  $wp_customize->add_control('index_paragraph', array(
    'type' => 'textarea',
    'label' => __('Einführungstext', 'slan'),
    'description' => __('Text, der neben dem Bild steht', 'slan'),
    'section' => 'slan_index_texts',
    'settings' => 'slan_settings[index_paragraph]'
  ));
  // Index IMAGE
  $wp_customize->add_section('slan_index_images', array(
    'title' => __('Bilder in der Startseite', 'slan'),
    'description' => __('Bilder in der Startseite', 'slan'),
    'priority' => 2,
    'panel' => 'slan_index_panel'
  ));
  // Potraid
  $wp_customize->add_setting('slan_settings[profile]', array(
    'default' => '',
    'type' => 'theme_mod'
  ));
  //controlador para añadir imagenes
  $wp_customize->add_control(new WP_customize_Image_Control($wp_customize, 'profile', array(
    'label' => __('Porträtfoto hochladen', 'slan'),
    'section' => 'slan_index_images',
    'settings' => 'slan_settings[profile]'
  )) );
    }
    add_action('customize_register', 'slan_customize_register');
?>