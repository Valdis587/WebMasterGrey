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
		'title'            => esc_html__( 'Вопросы', 'your-textdomain-here' ),
		'id'               => 'faq-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'faq-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Вопросы о разработке сайтов',
			),
            array(
				'id'       => 'faq-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Здесь можно найти некоторые ответы из наиболее распространенных вопросов о создании сайта под ключ в Москве и СПб . Если остались другие вопросы, обращайтесь через мессенджеры.',
			),
        ),
)
);