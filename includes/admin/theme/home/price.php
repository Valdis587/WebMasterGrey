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
		'title'            => esc_html__( 'Прайс', 'your-textdomain-here' ),
		'id'               => 'price',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'price-home-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Стоимость разработки сайта',
			),
            array(
				'id'       => 'price-home-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Приведены ориентировочные цены разработки сайта под ключв Москве и СПб. Для уточнения стоимости создания необходима консультация со специалистом.',
			),
        ),
        )
    );