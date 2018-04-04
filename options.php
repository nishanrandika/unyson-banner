<?php if (!defined('FW')) { die('Forbidden'); }

$options = array(
    //Banner Tab
    'tab_banner' => array(
        'type' => 'tab',
        'title' => __('Banner', 'fw'),
        'options' => array(
            'e25_image_upload' => array(
                'type'  => 'multi-picker',
                'label' => false,
                'desc'  => false,
                'picker' => array(
                    'gadget' => array(
                        'label'   => __('Banner Type', 'fw'),
                        'type'    => 'select',
                        'choices' => array(
                            'image'  => __('Image Banner', 'fw'),
                            'video' => __('Video Banner', 'fw'),
                            'slider' => __('Slider Banner', 'fw'),
                        ),
                        'desc'    => __('Select your banner type', 'fw'),
                    )
                ),    
                'choices' => array(
                    'image' => array(
                        'image' => array(
                            'type'  => 'background-image',
                            'label' => __('Image', 'fw'),
                            'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw'),
                            'images_only' => true,                    
                        ),
                        'content' => array(
                            'type' => 'text',
                            'label' => __('Content', 'fw'),
                            'desc' => __('This is the text that appears on your header', 'fw')
                        ),
                        'boxes' => array(
                            'type'  => 'addable-option',
                            'value' => array('', ''),
                            'label' => __('Boxes', 'fw'),
                            'desc'  => __('Click to add or edit / Drag to reorder', 'fw'),
                            'option' => array( 'type' => 'text' ),
                            'add-button-text' => __('Add', 'fw'),
                            'sortable' => true,
                        ),
                    ),
                    'video' => array(
                        'url'    => array(
                            'type'  => 'text',
                            'label' => __( 'Insert Video URL', 'fw' ),
                            'desc'  => __( 'Insert Video URL to embed this video', 'fw' )
                        ),
                        'width'  => array(
                            'type'  => 'text',
                            'label' => __( 'Video Width', 'fw' ),
                            'desc'  => __( 'Enter a value for the width', 'fw' ),
                            'value' => 300
                        ),
                        'height' => array(
                            'type'  => 'text',
                            'label' => __( 'Video Height', 'fw' ),
                            'desc'  => __( 'Enter a value for the height', 'fw' ),
                            'value' => 200
                        )
                    ),
                    'slider' => array(
                        'group' => array(
                            'type' => 'addable-popup',
                            'value' => array(
                                array(
                                    'image' => '',
                                    'title' => '',
                                    'content' => '',
                                )
                            ),
                            'label' => __('Slider', 'fw'),
                            'desc'  => __('Click to add or edit / Drag to reorder.', 'fw'),
                            'template' => '{{- title }}',
                            'popup-title' => null,
                            'size' => 'medium',
                            'limit' => 5,
                            'add-button-text' => __('Add', 'fw'),
                            'sortable' => true,
                            'popup-options' => array(
                                'image' => array(
                                    'type'  => 'background-image',
                                    'label' => __('Image', 'fw'),
                                    'desc'  => __('Either upload a new, or choose an existing image from your media library', 'fw'),
                                    'images_only' => true,                    
                                ),
                                'title' => array('type' => 'text'),
                                'content' => array(
                                    'type' => 'text',
                                    'label' => __('Content', 'fw'),
                                    'desc' => __('This is the text that appears on your header', 'fw')
                                ),
                                'boxes' => array(
                                    'type'  => 'addable-option',
                                    'value' => array('', ''),
                                    'label' => __('Boxes', 'fw'),
                                    'desc'  => __('Click to add or edit / Drag to reorder', 'fw'),
                                    'option' => array( 'type' => 'text' ),
                                    'add-button-text' => __('Add', 'fw'),
                                    'sortable' => true,
                                ),
                            )
                        )
                    )
                ),
                'show_borders' => false,
            )
        )
    ),
    
    //Style Tab
    'tab_style' => array(
        'type' => 'tab',
        'title' => __('Style', 'fw'),
        'options' => array(
            'e25_content_color' => array(
                'type' => 'color-picker',
                'label' => 'Content Text Color',
                'desc' => __('This is the text that appears on your slider', 'fw')
            ),
            'e25_content_shadow' => array(
                'type' => 'switch',
                'label' => 'Content Text shadow',
                'desc' => __('This is the text that appears on your slider', 'fw'),                
                'false-choice' => array(
                    'value' => 'false',
                    'label' => __('False', 'fw'),
                ),
                'true-choice' => array(
                    'value' => 'true',
                    'label' => __('True', 'fw'),
                ),
            ),
            'e25_box_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Color',
                'desc' => __('This is the text that appears on your slider boxes', 'fw')
            ),
            'e25_box_hover_background_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Background Hover Color',
                'desc' => __('This color appears on your box, when hover', 'fw')
            ),
            'e25_box_hover_text_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Text Hover Color',
                'desc' => __('This color appears on your box content, when hover', 'fw')
            ),
            'e25_box_border_color' => array(
                'type' => 'color-picker',
                'label' => 'Box Border Color',
                'desc' => __('This color appears on your box border', 'fw')
            ),
        )
    ),
);