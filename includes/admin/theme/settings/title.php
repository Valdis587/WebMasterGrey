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
		'title'            => esc_html__( 'Заголовок шапки', 'your-textdomain-here' ),
		'id'               => 'title-header',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'title-head',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Заголовок шапки', 'your-textdomain-here' ),
				'default'  => 'Разработка и создание сайтов под ключ',
			),
        ),
        )
    );