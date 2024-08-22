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
		'title'            => esc_html__( 'Услуги', 'your-textdomain-here' ),
		'id'               => 'serv-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'serv-title-home', 
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Услуги создания сайтов',
			),
            array(
				'id'       => 'serv-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'В зависимости от решаемых задач, сайты подразделяются следующими категориями, каждая из которых имеет собственную специфику структуры, технологии исполнения:',
			),

        ),
)
);