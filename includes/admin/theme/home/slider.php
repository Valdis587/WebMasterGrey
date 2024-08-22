<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Слайдер', 'your-textdomain-here' ),
		'id'               => 'slider-home',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'          => 'item-slider',
				'type'        => 'repeater',
				'title'       => esc_html__( 'Слайдер', 'your-textdomain-here' ),
				'full_width'  => true,
				'item_name'   => '',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => array(
					array(
						'id'          => 'slider-title1',
						'type'        => 'textarea',
						'placeholder' => esc_html__( 'Заголвок большой', 'your-textdomain-here' ),
					),
					array(
						'id'          => 'slider-title2',
						'type'        => 'textarea',
						'placeholder' => esc_html__( 'Заголвок маленький', 'your-textdomain-here' ),
					),
				),
			),
			array(
				'id'          => 'slider-price',
				'type'        => 'text',
				'placeholder' => esc_html__( 'Цена', 'your-textdomain-here' ),
			),
        ),
        )
    );