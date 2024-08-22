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
		'title'            => esc_html__( 'Выполненные работы', 'your-textdomain-here' ),
		'id'               => 'job-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'job-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Созданные сайты',
			),
            array(
				'id'       => 'job-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Создание сайта – всесторонний, комплексный подход к разработке под ключ платформы. Это позволяет заказчику получить полностью готовый интернет продукт, соответствующий его потребностям, целям.',
			),
        ),
)
);