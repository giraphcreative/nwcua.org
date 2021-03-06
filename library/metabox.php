<?php


// init cmb2
require_once( 'cmb2/init.php' );



// add metabox(es)
function page_metaboxes( $meta_boxes ) {


    // set up the colors
    $colors = array(
        'aqua' => 'Aqua',
        'grey-dark' => 'Grey - Dark',
        'grey-light' => 'Grey - Light',
        'forest' => 'Forest',
        'green' => 'Green',
        'lime' => 'Lime',
        'navy' => 'Navy',
        'orange' => 'Orange',
        'river' => 'River',
        'seafoam' => 'Seafoam',
        'teal' => 'Teal',
        'yellow' => 'Yellow'
    );



    // showcase metabox
    $title_metabox = new_cmb2_box( array(
        'id' => 'title_metabox',
        'title' => 'Large Title',
        'object_types' => array( 'page', 'person' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $title_metabox->add_field( array(
        'name' => 'Title',
        'id'   => CMB_PREFIX . 'large-title',
        'type' => 'text',
    ) );

    $title_metabox->add_field( array(
        'name' => 'Icon',
        'id'   => CMB_PREFIX . 'large-title-icon',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );

    $title_metabox->add_field( array(
        'name' => 'Color',
        'id'   => CMB_PREFIX . 'large-title-color',
        'type' => 'select',
        'default' => 'teal',
        'options' => $colors
    ) );



    // showcase metabox
    $showcase_metabox = new_cmb2_box( array(
        'id' => 'showcase_metabox',
        'title' => 'Showcase',
        'object_types' => array( 'page', 'person', 'post' ), // post type
        'show_on' => array(
            'key' => 'template',
            'value' => array( '', 'page-front' )
        ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $showcase_metabox_group = $showcase_metabox->add_field( array(
        'id' => CMB_PREFIX . 'showcase',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Slide', 'cmb2'),
            'remove_button' => __('Remove Slide', 'cmb2'),
            'group_title'   => __( 'Slide {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Subtitle',
        'id'   => 'subtitle',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Link',
        'id'   => 'link',
        'type' => 'text',
    ) );

    $showcase_metabox->add_group_field( $showcase_metabox_group, array(
        'name' => 'Image/Video',
        'id'   => 'image',
        'type' => 'file',
        'preview_size' => array( 200, 100 )
    ) );



    // showcase metabox
    $top_metabox = new_cmb2_box( array(
        'id' => 'top_metabox',
        'title' => 'Top Content',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
    ));

    $top_metabox->add_field( array(
        'name' => 'Top Content',
        'description' => 'Content to show below the excerpt, above both columns of the main content area.',
        'id'   => CMB_PREFIX . 'top_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );



    // showcase metabox
    $left_metabox = new_cmb2_box( array(
        'id' => 'left_metabox',
        'title' => 'Left Column',
        'object_types' => array( 'page' ), // post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => false, // Show field names on the left
    ));

    $left_metabox->add_field( array(
        'name' => 'Left Column Content',
        'description' => 'Enter text or ads for the left column.',
        'id'   => CMB_PREFIX . 'left_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );



    // job metabox
    $job_metabox = new_cmb2_box( array(
        'id' => 'job_metabox',
        'title' => 'Job',
        'object_types' => array( 'job' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $job_metabox->add_field( array(
        'name' => 'Region',
        'id'   => CMB_PREFIX . 'job_region',
        'type' => 'text',
    ) );

    $job_metabox->add_field( array(
        'name' => 'Company',
        'id'   => CMB_PREFIX . 'job_company',
        'type' => 'text',
    ) );

    $job_metabox->add_field( array(
        'name' => 'Job Type',
        'id'   => CMB_PREFIX . 'job_type',
        'type' => 'select',
        'options' => array(
            'Staff' => 'Staff',
            'Management' => 'Management'
        ),
        'default' => 'Staff'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Education',
        'id'   => CMB_PREFIX . 'job_education',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $job_metabox->add_field( array(
        'name' => 'Comments',
        'id'   => CMB_PREFIX . 'job_comments',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Name',
        'id'   => CMB_PREFIX . 'job_contact_name',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Title',
        'id'   => CMB_PREFIX . 'job_contact_title',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Email',
        'id'   => CMB_PREFIX . 'job_contact_email',
        'type' => 'text_email'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Phone',
        'id'   => CMB_PREFIX . 'job_contact_phone',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Contact Fax',
        'id'   => CMB_PREFIX . 'job_contact_fax',
        'type' => 'text'
    ) );

    $job_metabox->add_field( array(
        'name' => 'Job Expires',
        'id'   => CMB_PREFIX . 'job_expires',
        'type' => 'text_date',
        'date_format' => "Y-m-d"
    ) );



    // person metabox
    $person_metabox = new_cmb2_box( array(
        'id' => 'person_metabox',
        'title' => 'Person',
        'object_types' => array( 'person' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ));

    $person_metabox->add_field( array(
        'name' => 'First Name',
        'id'   => CMB_PREFIX . 'person_fname',
        'type' => 'text'
    ) );

    $person_metabox->add_field( array(
        'name' => 'Last Name',
        'id'   => CMB_PREFIX . 'person_lname',
        'type' => 'text'
    ) );

    $person_metabox->add_field( array(
        'name' => 'Title',
        'id'   => CMB_PREFIX . 'person_title',
        'type' => 'textarea_small',
        'options' => array( 'textarea_rows' => 2 )
    ) );

    $person_metabox->add_field( array(
        'name' => 'Email',
        'id'   => CMB_PREFIX . 'person_email',
        'type' => 'text_email'
    ) );

    $person_metabox->add_field( array(
        'name' => 'Phone',
        'id'   => CMB_PREFIX . 'person_phone',
        'type' => 'text'
    ) );

    $person_metabox->add_field( array(
        'name' => 'Phone (Toll Free)',
        'id'   => CMB_PREFIX . 'person_phone_tf',
        'type' => 'text'
    ) );

    $person_metabox->add_field( array(
        'name' => 'Company',
        'id'   => CMB_PREFIX . 'person_company',
        'type' => 'text',
    ) );

    $person_metabox->add_field( array(
        'name' => 'Education',
        'id'   => CMB_PREFIX . 'person_education',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $person_metabox->add_field( array(
        'name' => 'Comments',
        'id'   => CMB_PREFIX . 'person_comments',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $person_metabox->add_field( array(
        'name' => 'No Bio',
        'desc' => 'Do not link to the bio page from people listings.',
        'id'   => CMB_PREFIX . 'person_link',
        'type' => 'checkbox',
    ) );

    $person_metabox->add_field( array(
        'name' => 'sort',
        'desc' => 'Sort Value',
        'id'   => CMB_PREFIX . 'person_sort',
        'type' => 'text_small',
        'default' => 99
    ) );



    // event metabox
    $event_metabox = new_cmb2_box( array(
        'id' => 'event_metabox',
        'title' => 'Event',
        'object_types' => array( 'event' ), // post type
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Color',
        'id'   => CMB_PREFIX . 'event_color',
        'type' => 'select',
        'default' => 'green',
        'options' => $colors
    ) );

    $event_metabox->add_field( array(
        'name' => 'Start Date/Time',
        'id'   => CMB_PREFIX . 'event_start',
        'type' => 'text_datetime_timestamp'
    ) );

    $event_metabox->add_field( array(
        'name' => 'End Date/Time',
        'id'   => CMB_PREFIX . 'event_end',
        'type' => 'text_datetime_timestamp'
    ) );

    /*
    $event_metabox->add_field( array(
        'name' => 'Timezone',
        'id'   => CMB_PREFIX . 'event_timezone',
        'type' => 'select',
        'default' => 'P',
        'options' => array(
            'P' => 'Pacific Time',
            'M' => 'Mountain Time'
        )
    ) );
    */

    $event_metabox->add_field( array(
        'name' => 'Early Bird Deadline',
        'id'   => CMB_PREFIX . 'event_early_date',
        'type' => 'text_datetime_timestamp'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Early Bird Price',
        'id'   => CMB_PREFIX . 'event_early_price',
        'type' => 'text_money'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Regular Price',
        'id'   => CMB_PREFIX . 'event_price',
        'type' => 'text_money'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Late Registration Date',
        'id'   => CMB_PREFIX . 'event_late_date',
        'type' => 'text_datetime_timestamp'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Late Registration Price',
        'id'   => CMB_PREFIX . 'event_late_price',
        'type' => 'text_money'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Location Description',
        'id'   => CMB_PREFIX . 'event_location_text',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Map Embed URL',
        'id'   => CMB_PREFIX . 'event_location_link',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Venue',
        'id'   => CMB_PREFIX . 'event_venue',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Address',
        'id'   => CMB_PREFIX . 'event_address',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'City',
        'id'   => CMB_PREFIX . 'event_city',
        'type' => 'text_medium'
    ) );

    $event_metabox->add_field( array(
        'name' => 'State',
        'id'   => CMB_PREFIX . 'event_state',
        'type' => 'text_small'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Zipcode',
        'id'   => CMB_PREFIX . 'event_zipcode',
        'type' => 'text_small'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Email',
        'id'   => CMB_PREFIX . 'event_email',
        'type' => 'text_email'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Phone',
        'id'   => CMB_PREFIX . 'event_phone',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Fax',
        'id'   => CMB_PREFIX . 'event_fax',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Venue Website',
        'id'   => CMB_PREFIX . 'event_venue_website',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel',
        'id'   => CMB_PREFIX . 'event_hotel',
        'type' => 'text',
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Address',
        'id'   => CMB_PREFIX . 'event_hotel_address',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel City',
        'id'   => CMB_PREFIX . 'event_hotel_city',
        'type' => 'text_medium'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel State',
        'id'   => CMB_PREFIX . 'event_hotel_state',
        'type' => 'text_small'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Zipcode',
        'id'   => CMB_PREFIX . 'event_hotel_zipcode',
        'type' => 'text_small'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Email',
        'id'   => CMB_PREFIX . 'event_hotel_email',
        'type' => 'text_email'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Phone',
        'id'   => CMB_PREFIX . 'event_hotel_phone',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Rate',
        'id'   => CMB_PREFIX . 'event_hotel_price',
        'type' => 'text_money'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hotel Website',
        'id'   => CMB_PREFIX . 'event_hotel_website',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Event Website',
        'id'   => CMB_PREFIX . 'event_website',
        'desc' => 'If populated, links from the calendar/listings will go directly to this URL instead of the event page on this website.',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Registration Link (Override)',
        'id'   => CMB_PREFIX . 'event_registration',
        'desc' => 'Just in case we need to override the registration button URL.',
        'type' => 'text'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Hide Registration Link',
        'id'   => CMB_PREFIX . 'event_registration_hide',
        'desc' => 'Check to hide the registration link on the front-end.',
        'type' => 'checkbox'
    ) );

    $event_metabox->add_field( array(
        'name' => 'Save the Date (.ics)',
        'id'   => CMB_PREFIX . 'event_save_ical',
        'desc' => 'Upload an .ics (calendar format) to allow users to save events to Outlook/iCal.',
        'type' => 'file',
        'preview_size' => false
    ) );

    $event_metabox->add_field( array(
        'name' => 'Save the Date (Google)',
        'id'   => CMB_PREFIX . 'event_save_gcal',
        'desc' => 'Set a URL for a Google Calendar event so users can add it to Google.',
        'type' => 'text',
    ) );



    // accordion metabox
    $accordion_metabox = new_cmb2_box( array(
        'id' => 'accordion_metabox',
        'title' => 'General Accordions',
        'object_types' => array( 'page', 'post', 'event', 'person' ), // post type
        'show_on' => array(
            'key' => 'template',
            'value' => array( "" )
        ),
        'context' => 'normal',
        'priority' => 'high',
    ) );

    $accordion_metabox_group = $accordion_metabox->add_field( array(
        'id' => CMB_PREFIX . 'accordion',
        'type' => 'group',
        'options' => array(
            'add_button' => __('Add Box', 'cmb'),
            'remove_button' => __('Remove Box', 'cmb'),
            'group_title'   => __( 'Accordion Box {#}', 'cmb' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable' => true, // beta
        )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Icon',
        'id'   => 'icon',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Color',
        'id'   => 'color',
        'type' => 'select',
        'default' => 'teal',
        'options' => $colors
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Default State',
        'id'   => 'state',
        'type' => 'select',
        'default' => 'closed',
        'options' => array(
            'closed' => 'Closed',
            'open' => 'Open',
        )
    ) );

    $accordion_metabox->add_group_field( $accordion_metabox_group, array(
        'name' => 'Content',
        'id'   => 'content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );



    // brand metabox
    $brand_metabox = new_cmb2_box( array(
        'id' => 'brand_metabox',
        'title' => 'Branding',
        'object_types' => array( 'post' ), // post type
        'context' => 'side',
        'priority' => 'high',
        'show_names' => false
    ));

    $brand_metabox->add_field( array(
        'name' => 'Brand',
        'id'   => CMB_PREFIX . 'brand',
        'type' => 'select',
        'default' => 'anthem',
        'options' => array(
            'anthem' => 'Anthem',
            'nwcua' => 'NWCUA'
        )
    ) );



    // brand metabox
    $microsite_metabox = new_cmb2_box( array(
        'id' => 'microsite_metabox',
        'title' => 'Microsite',
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 
            'key' => 'page-template', 
            'value' => 'page-microsite.php' 
        ),
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Header',
        'id'   => CMB_PREFIX . 'microsite_header',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Content (Row #1)',
        'id'   => CMB_PREFIX . 'microsite_content_one',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Image (Row #1)',
        'id'   => CMB_PREFIX . 'microsite_image_one',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );
    
    $microsite_metabox->add_field( array(
        'name' => 'Sidebar Background Color (Row #1)',
        'id'   => CMB_PREFIX . 'microsite_color_one',
        'type' => 'select',
        'default' => 'seafoam',
        'options' => $colors
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Content (Row #2)',
        'id'   => CMB_PREFIX . 'microsite_content_two',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Image (Row #2)',
        'id'   => CMB_PREFIX . 'microsite_image_two',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );
    
    $microsite_metabox->add_field( array(
        'name' => 'Sidebar Background Color (Row #2)',
        'id'   => CMB_PREFIX . 'microsite_color_two',
        'type' => 'select',
        'default' => 'grey-light',
        'options' => $colors
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Content (Row #3)',
        'id'   => CMB_PREFIX . 'microsite_content_three',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Image (Row #3)',
        'id'   => CMB_PREFIX . 'microsite_image_three',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );
    
    $microsite_metabox->add_field( array(
        'name' => 'Sidebar Background Color (Row #3)',
        'id'   => CMB_PREFIX . 'microsite_color_three',
        'type' => 'select',
        'default' => 'lime',
        'options' => $colors
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Subfooter Content',
        'id'   => CMB_PREFIX . 'microsite_subfooter_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Subfooter Background',
        'id'   => CMB_PREFIX . 'microsite_subfooter_bg',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Footer Content',
        'id'   => CMB_PREFIX . 'microsite_footer_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Footer Image',
        'id'   => CMB_PREFIX . 'microsite_footer_image',
        'type' => 'file',
        'preview_size' => array( 30, 30 )
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Footer Link',
        'id'   => CMB_PREFIX . 'microsite_footer_link',
        'desc' => 'Set a URL for the footer image link.',
        'type' => 'text',
    ) );

    $microsite_metabox->add_field( array(
        'name' => 'Colophon Content',
        'id'   => CMB_PREFIX . 'microsite_colophon_content',
        'type' => 'wysiwyg',
        'options' => array( 'textarea_rows' => 7 )
    ) );



    // priority metabox
    $priority_metabox = new_cmb2_box( array(
        'id' => 'priority_metabox',
        'title' => 'Priority',
        'object_types' => array( 'page', 'post', 'event' ), // post type
        'context' => 'side',
        'priority' => 'high',
        'show_names' => false
    ));

    $priority_metabox->add_field( array(
        'name' => 'Priority',
        'id'   => CMB_PREFIX . 'priority',
        'type' => 'select',
        'default' => 0,
        'options' => array(
            -1 => 'Do Not Show',
            0 => 'Low',
            1 => 'Medium',
            2 => 'High'
        )
    ) );

}
add_filter( 'cmb2_init', 'page_metaboxes' );



// get CMB value
function get_cmb_value( $field ) {
    return get_post_meta( get_the_ID(), CMB_PREFIX . $field, 1 );
}


// get CMB value
function has_cmb_value( $field ) {
    $cval = get_cmb_value( $field );
    return ( !empty( $cval ) ? true : false );
}


// get CMB value
function show_cmb_value( $field ) {
    print get_cmb_value( $field );
}


// get CMB value
function show_cmb_wysiwyg_value( $field ) {
    print apply_filters( 'the_content', get_cmb_value( $field ) );
}


function cmb2_metabox_show_on_template( $display, $meta_box ) {
    if ( isset( $meta_box['show_on']['key'] ) && isset( $meta_box['show_on']['value'] ) ) :
        if( 'template' !== $meta_box['show_on']['key'] )
            return $display;

        // Get the current ID
        if( isset( $_GET['post'] ) ) $post_id = $_GET['post'];
        elseif( isset( $_POST['post_ID'] ) ) $post_id = $_POST['post_ID'];
        if( !isset( $post_id ) ) return false;

        $template_name = get_page_template_slug( $post_id );
        if ( !empty( $template_name ) ) $template_name = substr($template_name, 0, -4);

        // If value isn't an array, turn it into one
        $meta_box['show_on']['value'] = !is_array( $meta_box['show_on']['value'] ) ? array( $meta_box['show_on']['value'] ) : $meta_box['show_on']['value'];

        // See if there's a match
        return in_array( $template_name, $meta_box['show_on']['value'] );
    else:
        return $display;
    endif;
}
add_filter( 'cmb2_show_on', 'cmb2_metabox_show_on_template', 10, 2 );



