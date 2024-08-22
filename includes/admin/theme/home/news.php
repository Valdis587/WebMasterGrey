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
		'title'            => esc_html__( 'Новости', 'your-textdomain-here' ),
		'id'               => 'news-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'news-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Новости разработки',
			),
            array(
				'id'       => 'news-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Рекламировать себя онлайн – наиболее рациональное решение при ситуации, когда речь идёт о решении конкретных задач (увеличение рыночной доли, рост продаж, повышение личной репутации либо узнаваемости бренда).',
			),
        ),
)
);