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
		'title'            => esc_html__( 'Заказать сайт', 'your-textdomain-here' ),
		'id'               => 'zak-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'zak-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'default'  => 'Заказать сайт под ключ',
			),
            array(
				'id'       => 'zak-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => 'Во время создания сайта, специалисты постоянно поддерживают контакт. Начиная со сбopa пepвичнoй информации, создания интернет сайта под ключ, дo обслуживания гoтoвoй площадки. ',
			),
            array(
				'id'       => 'zak-text-item1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 1', 'your-textdomain-here' ),
				'default'  => 'Заказчик может заказать создание сайта под ключ, предоставить материалы (тексты, картинки, фото, видео материалы, логотипы) для наполнения. Зачастую заниматься подбором материалов нет времени. Мастер самостоятельно найдёт всё необходимое, подберёт необходимые картинки, прочие материалы. У нас можно заказать landing page (одностраничник), визитку каталог, частным лицам, самозанятым гражданам.',
			),
			array(
				'id'       => 'zak-title-blue',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст 1', 'your-textdomain-here' ),
				'default'  => 'Способы связи, консультаций:',
			),
			array(
				'id'       => 'zak-text-item2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст 2', 'your-textdomain-here' ),
				'default'  => 'Рекомендуем оставлять заявки на разработку под ключв Москве и СПб, не по телефону, используя один из мессенджеров, таким образом клиент гарантированно получит обратную связь, обращение не будет потеряно, даже если обратится в нерабочее время, не сможет дозвониться по телефону.',
			),
        ),
)
);