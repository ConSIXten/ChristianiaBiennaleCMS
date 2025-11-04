<?php
/**
 * Theme Customizer
 * 
 * @package ChristianiaBiennaleCMS
 * @since 1.0.0
 */

function christiania_biennale_customize_register($wp_customize) {
    
    /**
     * Events Page Section
     */
    $wp_customize->add_section('events_page_section', array(
        'title'    => __('Events Page Content', 'christiania-biennale'),
        'priority' => 30,
    ));
    
    // Header Text
    $wp_customize->add_setting('events_header_text', array(
        'default'           => 'Everything is free & everyone is welcome!',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));
    
    $wp_customize->add_control('events_header_text', array(
        'label'    => __('Header Text', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    // Event 1: Pusherstreet
    $wp_customize->add_setting('event_1_title', array(
        'default'           => 'Pusherstreet',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_1_title', array(
        'label'    => __('Event 1 - Title', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('event_1_artists', array(
        'default'           => 'Nina Beier, Exactitudes, Skjold Rambow, Almene Kunstklubber, Atelier Pusherstreet',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('event_1_artists', array(
        'label'    => __('Event 1 - Artists', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_1_description', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_1_description', array(
        'label'    => __('Event 1 - Description', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_1_details', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_1_details', array(
        'label'    => __('Event 1 - Details (dates, addresses)', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    // Event 2: Sculpturepark
    $wp_customize->add_setting('event_2_title', array(
        'default'           => 'Sculpturepark in Fremtidsskoven',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_2_title', array(
        'label'    => __('Event 2 - Title', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('event_2_artists', array(
        'default'           => 'Max Popov, FOS, Esben Weile Kjær, Lukas Danys, Tea E-Berglöw, Mille Qvist & Jörg Pulow',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('event_2_artists', array(
        'label'    => __('Event 2 - Artists', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_2_description', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_2_description', array(
        'label'    => __('Event 2 - Description', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_2_details', array(
        'default'           => 'Opening: 29th of August 6pm<br />On view: Day&night until september 29, 2025<br />Address: Fabriksområdet 97, 1440 Kbh K',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_2_details', array(
        'label'    => __('Event 2 - Details', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    // Event 3: Open air dub
    $wp_customize->add_setting('event_3_title', array(
        'default'           => 'Open air dub closing ceremony',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_3_title', array(
        'label'    => __('Event 3 - Title', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('event_3_artists', array(
        'default'           => 'FOS, Sham, Mikkel Ulriksen<br />Esteban, Dmitra & Soraya',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_3_artists', array(
        'label'    => __('Event 3 - Artists', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_3_description', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_3_description', array(
        'label'    => __('Event 3 - Description', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_3_details', array(
        'default'           => '31st of August, 4PM-9PM<br />Address: Fabriksområdet 97, 1440 Kbh K',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_3_details', array(
        'label'    => __('Event 3 - Details', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    // Event 4: Wonderland
    $wp_customize->add_setting('event_4_title', array(
        'default'           => 'Performance and music in Wonderland',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_4_title', array(
        'label'    => __('Event 4 - Title', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('event_4_artists', array(
        'default'           => 'Spatial design: inter.agcy<br />Skatesessions: Obviously<br />Intermission DJ: Franarchy<br />Live: Simin Ramezanali, Lovers Revenge, Tettix Hexer & Vio Lino',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_4_artists', array(
        'label'    => __('Event 4 - Artists', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_4_description', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_4_description', array(
        'label'    => __('Event 4 - Description', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_4_details', array(
        'default'           => 'August 29, 7PM-12AM<br />Address: Sydområdet 30, 1440 kbh k',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_4_details', array(
        'label'    => __('Event 4 - Details', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    // Event 5: Cabaret
    $wp_customize->add_setting('event_5_title', array(
        'default'           => 'Cabaret in Byens Lys',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('event_5_title', array(
        'label'    => __('Event 5 - Title', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'text',
    ));
    
    $wp_customize->add_setting('event_5_artists', array(
        'default'           => 'Directed by Lola: Bubberlybubbub<br />Cast & musicians: Lola, Ilmo Simonsen, Mona Wagner, Max Behrendt, Amandine Godet, Haochun Sun, Ronja Liv Hestad, Ditte Balslev.<br />Light design: Will Zawistowski',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_5_artists', array(
        'label'    => __('Event 5 - Artists', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_5_description', array(
        'default'           => '',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_5_description', array(
        'label'    => __('Event 5 - Description', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    $wp_customize->add_setting('event_5_details', array(
        'default'           => 'Premiere: August 30<br />8PM (doors open 7PM)<br />Address: Fabriksområdet 99, 1440 Kbh K',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('event_5_details', array(
        'label'    => __('Event 5 - Details', 'christiania-biennale'),
        'section'  => 'events_page_section',
        'type'     => 'textarea',
    ));
    
    /**
     * Programme Page Section
     */
    $wp_customize->add_section('programme_page_section', array(
        'title'    => __('Programme Page Content', 'christiania-biennale'),
        'priority' => 31,
    ));
    
    // Page Title
    $wp_customize->add_setting('programme_title', array(
        'default'           => 'Christiania Biennale',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('programme_title', array(
        'label'    => __('Page Title', 'christiania-biennale'),
        'section'  => 'programme_page_section',
        'type'     => 'text',
    ));
    
    // Subtitle
    $wp_customize->add_setting('programme_subtitle', array(
        'default'           => '29-31.08 2025',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('programme_subtitle', array(
        'label'    => __('Subtitle (Date)', 'christiania-biennale'),
        'section'  => 'programme_page_section',
        'type'     => 'text',
    ));
    
    // Tagline
    $wp_customize->add_setting('programme_tagline', array(
        'default'           => 'Everything is free & everyone is welcome!',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('programme_tagline', array(
        'label'    => __('Tagline', 'christiania-biennale'),
        'section'  => 'programme_page_section',
        'type'     => 'text',
    ));
    
    // Download Link Text
    $wp_customize->add_setting('programme_download_text', array(
        'default'           => 'DOWNLOAD HERE',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('programme_download_text', array(
        'label'    => __('Download Link Text', 'christiania-biennale'),
        'section'  => 'programme_page_section',
        'type'     => 'text',
    ));
    
    // Download Link URL
    $wp_customize->add_setting('programme_download_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('programme_download_url', array(
        'label'    => __('Download Link URL', 'christiania-biennale'),
        'section'  => 'programme_page_section',
        'type'     => 'url',
    ));
    
    // Programme Poster Image 1
    $wp_customize->add_setting('programme_poster_1', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'programme_poster_1', array(
        'label'      => __('Programme Poster Image 1', 'christiania-biennale'),
        'section'    => 'programme_page_section',
        'mime_type'  => 'image',
    )));
    
    // Programme Poster Image 2
    $wp_customize->add_setting('programme_poster_2', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'programme_poster_2', array(
        'label'      => __('Programme Poster Image 2', 'christiania-biennale'),
        'section'    => 'programme_page_section',
        'mime_type'  => 'image',
    )));
    
    // Programme Poster Image 3
    $wp_customize->add_setting('programme_poster_3', array(
        'default'           => '',
        'sanitize_callback' => 'absint',
    ));
    
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'programme_poster_3', array(
        'label'      => __('Programme Poster Image 3 (Optional)', 'christiania-biennale'),
        'section'    => 'programme_page_section',
        'mime_type'  => 'image',
    )));
}
add_action('customize_register', 'christiania_biennale_customize_register');
