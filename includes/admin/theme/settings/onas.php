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
		'title'            => esc_html__( 'О нас', 'your-textdomain-here' ),
		'id'               => 'onas',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'onas-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'О нас', 'your-textdomain-here' ),
				'default'  => 'Сегодня веб-сайт - необходимый инструмент любой фирмы. Сайт предоставит информацию о Вашей деятельности всем пользователям всемирной сети. Предлагаем Вам неограниченные возможности - размещайте в сети Интернет информацию о Ваших услугах, продукцию, взаимодействуйте с вашими клиентами, дилерами и удалёнными сотрудниками при помощи всемирной сети Интернет, приобретайте новых клиентов и партнеров! ',
			),
        ),
        )
    );