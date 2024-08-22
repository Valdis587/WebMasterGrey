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
		'title'            => esc_html__( 'Контакты', 'your-textdomain-here' ),
		'id'               => 'contacts',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'time-york',
				'type'     => 'text',
				'title'    => esc_html__( 'Время работы', 'your-textdomain-here' ),
				'default'  => 'c 9-00 до 21-00',
			),
            array(
				'id'       => 'adres',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'default'  => 'Санкт-Петербург, Дальневосточный проспект, 42Е',
			),
            array(
				'id'       => 'phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
				'default'  => '+7 (905)265-54-45',
			),
            array(
				'id'       => 'email',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'default'  => 'info@websites-master.ru',
			),
            array(
				'id'       => 'tg',
				'type'     => 'text',
				'title'    => esc_html__( 'Телеграм', 'your-textdomain-here' ),
				'default'  => 'Vlad237',
			),
            array(
				'id'       => 'sk',
				'type'     => 'text',
				'title'    => esc_html__( 'Скайп', 'your-textdomain-here' ),
				'default'  => 'www.gal78',
			),
            array(
				'id'       => 'vb',
				'type'     => 'text',
				'title'    => esc_html__( 'Вайбер', 'your-textdomain-here' ),
				'default'  => '79052655445',
			),
            array(
				'id'       => 'wh',
				'type'     => 'text',
				'title'    => esc_html__( 'Вотсапп', 'your-textdomain-here' ),
				'default'  => '+79052655445',
			),
            array(
				'id'       => 'map',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Карта', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );