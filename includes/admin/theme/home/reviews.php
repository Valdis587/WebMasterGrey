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
		'title'            => esc_html__( 'Отзывы', 'your-textdomain-here' ),
		'id'               => 'reviews-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'reviews-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Отзывы о разработке',
			),
            array(
				'id'       => 'reviews-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'WebSites Master поэтапно производит разработку сайтов под ключ. Заказчик всегда знает о происходящем - контролирует процесс разработки под ключ, тратит минимум времени.',
			),
        ),
)
);