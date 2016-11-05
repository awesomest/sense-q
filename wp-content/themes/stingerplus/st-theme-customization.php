<?php
function st_customize_register( $wp_customize ) {
	if( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'red' ){
		$basecolor = '#a61919'; //一番濃い色
		$maincolor = '#c81e1e'; //少し薄い色
		$subcolor = '#fce9e9'; //とても薄い色
		$accentcolor = '#c81e1e'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'blue' ){
		$basecolor = '#039BE5'; //一番濃い色
		$maincolor = '#13b0fc'; //少し薄い色
		$subcolor = '#fbfeff'; //とても薄い色
		$accentcolor = '#FDD835'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'green' ){
		$basecolor = '#7CB342'; //一番濃い色
		$maincolor = '#8fc25a'; //少し薄い色
		$subcolor = '#f0f7e9'; //とても薄い色
		$accentcolor = '#FDD835'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'pink' ){
		$basecolor = '#ff6893'; //一番濃い色
		$maincolor = '#ff9bb7'; //少し薄い色
		$subcolor = '#fff1f5'; //とても薄い色
		$accentcolor = '#ff6893'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'glay' ){
		$basecolor = '#212121'; //一番濃い色
		$maincolor = '#424242'; //少し薄い色
		$subcolor = '#FAFAFA'; //とても薄い色
		$accentcolor = '#C5BF3B'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'orange' ){
		$basecolor = '#febe31'; //一番濃い色
		$maincolor = '#fed271'; //少し薄い色
		$subcolor = '#fffde7'; //とても薄い色
		$accentcolor = '#f48fb1'; //アクセント
		$textcolor = '#fff'; //テキスト
	}else{
		$basecolor = ''; //一番濃い色
		$maincolor = ''; //少し薄い色
		$subcolor = ''; //とても薄い色
		$accentcolor = ''; //アクセント
		$textcolor = ''; //テキスト
	}


	$wp_customize->add_section( 'st_logo_image',
		array(
			'title' => 'ロゴ画像',
			'priority' => 10,
		) );

	$wp_customize->add_setting( 'st_logo_image',
		array(
			'default' => '',
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'esc_url_raw',
		) );

	$wp_customize->add_control( new WP_Customize_Image_Control(
		$wp_customize,
		'logo_Image',
		array(
			'label' => '画像',
			'section' => 'st_logo_image',
			'settings' => 'st_logo_image',
		)
	) );


		/*-------------------------------------------------------
		基本カラー
		-------------------------------------------------------*/

		$wp_customize->add_section( 'colors',
			array(
				'title' => __( '基本カラーと各メニュー設定', 'st' ),
				'description' => '[!] 細かく修正するには<b>テーマ管理画面にて「オリジナルテーマカスタマイザーを使用する」をオン</b>にする必要があります。',
				'priority' => 30,
			) );

if ( isset( $GLOBALS["stdata1"] ) && $GLOBALS["stdata1"] === 'yes' ) {

		/*-------------------------------------------------------
		各見出し
		-------------------------------------------------------*/

		//wrapperサイト全体背景

		$wp_customize->add_setting( 'st_wrapper_bgcolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_wrapper_bgcolor', array(
			'label' => __( 'サイト背景色', 'st' ),
			'description' => 'サイト全体を包括する背景色です',
			'section' => 'colors',

			'settings' => 'st_wrapper_bgcolor',
		) ) );

		//サイト上部にラインを入れる

		$wp_customize->add_setting( 'st_top_bordercolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_top_bordercolor', array(
			'label' => __( '', 'st' ),
			'description' => 'サイト上部にライン',
			'section' => 'colors',
			'settings' => 'st_top_bordercolor',
		) ) );

		$wp_customize->add_setting('st_line_height', 
			array( 
			'default'  => '5px', 
			'sanitize_callback' => 'st_sanitize_choices',
			));
		$wp_customize->add_control( 'st_line_height', array( 
			'section' => 'colors',
			'settings' => 'st_line_height', 
			'label' => '', 
			'description' => 'ラインの高さ（px）',
			'type'           => 'radio',
			'choices'        => array(
				'1px'   => __( '1px','st' ),
				'5px'  => __( '5px','st' )
		)));


		$wp_customize->add_setting('st_line100', 
			array( 
	  		  'default'  => '', 
			  'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'st_line100', array( 
			'section' => 'colors',
			'settings' => 'st_line100', 
			'label' => 'ラインの横幅を100%にする', 
			'description' => '',
			'type' => 'checkbox', 
		));

		//記事背景

		$wp_customize->add_setting( 'st_menu_maincolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_maincolor', array(
			'label' => __( '記事エリア背景色', 'st' ),
			'description' => 'メインコンテンツのエリアです',
			'section' => 'colors',

			'settings' => 'st_menu_maincolor',
		) ) );

		//記事背景の透過

		$wp_customize->add_setting('st_main_opacity', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'st_sanitize_choices',
			));
		$wp_customize->add_control( 'st_main_opacity', array( 
			'section' => 'colors',
			'settings' => 'st_main_opacity', 
			'label' => '', 
			'description' => '背景色透過※白のみ',
			'type' => 'select', 
			'choices' => array(
				''   => __( '透過しない','st' ),
				'20'   => __( '20%','st' ),
				'50'   => __( '50%','st' ) ,
				'80'   => __( '80%','st' ) ,
		)));

		$wp_customize->add_setting( 'st_menu_main_bordercolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_main_bordercolor', array(
			'label' => __( '', 'st' ),
			'description' => '周りのボーダー',
			'section' => 'colors',
			'settings' => 'st_menu_main_bordercolor',
		) ) );

		//メニューバー

		$wp_customize->add_setting( 'st_menu_navbarcolor_t',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor_t', array(
			'label' => __( 'PCメニュー', 'st' ),
			'section' => 'colors',
			'description' => '背景色上部（※上下共に指定）',
			'settings' => 'st_menu_navbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbarcolor',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbarcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => '背景色下部（※上下共に指定）*',
			'settings' => 'st_menu_navbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_topunder_color',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_topunder_color', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => 'ボーダー上下色*',
			'settings' => 'st_menu_navbar_topunder_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_side_color',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_side_color', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => 'ボーダー左右色*',
			'settings' => 'st_menu_navbar_side_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbar_right_color',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_right_color', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => 'ボーダー右色*',
			'settings' => 'st_menu_navbar_right_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_navbartextcolor',
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbartextcolor', array(
			'label' => __( '', 'st' ),
			'description' => '文字色*',
			'section' => 'colors',
			'settings' => 'st_menu_navbartextcolor',
		) ) );

		//ドロップダウンメニュー背景

		$wp_customize->add_setting( 'st_menu_navbar_undercolor',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_navbar_undercolor', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => '下層ドロップダウンメニュー背景色*',
			'settings' => 'st_menu_navbar_undercolor',
		) ) );

		//固定ページサイドメニュー

		//第二階層以下

		$wp_customize->add_setting( 'st_menu_pagelist_childtextcolor',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_pagelist_childtextcolor', array(
			'label' => __( 'サイド固定ページメニュー*', 'st' ),
			'section' => 'colors',
			'description' => '第二階層の文字色*',
			'settings' => 'st_menu_pagelist_childtextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_childtext_border_color',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_pagelist_childtext_border_color', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => '第二階層の下線色*',
			'settings' => 'st_menu_pagelist_childtext_border_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_pagelist_bgcolor',
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_pagelist_bgcolor', array(
			'label' => __( '', 'st' ),
			'description' => '背景色*',
			'section' => 'colors',
			'settings' => 'st_menu_pagelist_bgcolor',
		) ) );

		//Webアイコン

		$wp_customize->add_setting('st_menu_icon', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'st_sanitize_choices',
			));
		$wp_customize->add_control( 'st_menu_icon', array( 
			'section' => 'colors',
			'settings' => 'st_menu_icon', 
			'label' => 'Webアイコンを入れる', 
			'description' => '第一階層',
			'type' => 'select', 
			'choices' => array(
				''   => __( '設定しない','st' ),
				'f054'   => __( '矢印1','st' ) ,
				'f105'   => __( '矢印2','st' ),
				'f138'   => __( '矢印3','st' ) ,
				'f0a9'   => __( '矢印4','st' ) ,
				'f0da'   => __( '矢印5','st' ) ,
				'f152'   => __( '矢印6','st' ) ,
				'f18e'   => __( '矢印7','st' ) 
		)));

		$wp_customize->add_setting('st_undermenu_icon', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'st_sanitize_choices',
			));
		$wp_customize->add_control( 'st_undermenu_icon', array( 
			'section' => 'colors',
			'settings' => 'st_undermenu_icon', 
			'label' => '', 
			'description' => '第二階層以下',
			'type' => 'select', 
			'choices' => array(
				''   => __( '設定しない','st' ),
				'f054'   => __( '矢印1','st' ) ,
				'f105'   => __( '矢印2','st' ),
				'f138'   => __( '矢印3','st' ) ,
				'f0a9'   => __( '矢印4','st' ) ,
				'f0da'   => __( '矢印5','st' ) ,
				'f152'   => __( '矢印6','st' ) ,
				'f18e'   => __( '矢印7','st' ) 
		)));

		//スマホ基本色

		$wp_customize->add_setting( 'st_menu_sumartcolor',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartcolor', array(
			'label' => __( 'スマートフォン', 'st' ),
			'description' => 'アコーディオンメニューアイコン色*',
			'section' => 'colors',
			'settings' => 'st_menu_sumartcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_sumart_bg_color',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumart_bg_color', array(
			'label' => __( '', 'st' ),
			'description' => 'スマホメニューとページトップボタン背景色*',
			'section' => 'colors',
			'settings' => 'st_menu_sumart_bg_color',
		) ) );

		//スマホメニュー文字色

		$wp_customize->add_setting( 'st_menu_sumartmenutextcolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_sumartmenutextcolor', array(
			'label' => __( '', 'st' ),
			'description' => 'スマホメニュー文字色',
			'section' => 'colors',
			'settings' => 'st_menu_sumartmenutextcolor',
		) ) );

		/*ヘッダーウィジェットの背景色*/

		$wp_customize->add_setting( 'st_headerwidget_bgcolor', 
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_bgcolor', array(
			'label' => __( 'ヘッダーウィジェット', 'st' ),
			'section' => 'colors',
			'description' => '背景色',
			'settings' => 'st_headerwidget_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_headerwidget_textcolor', 
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_headerwidget_textcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'colors',
			'description' => '文字色',
			'settings' => 'st_headerwidget_textcolor',
		) ) );


		/*電話番号とヘッダーリンク*/

		$wp_customize->add_setting( 'st_header_tel_color', 
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_header_tel_color', array(
			'label' => __( '電話番号とヘッダーリンク', 'st' ),
			'section' => 'colors',
			'description' => '設定時のみ',
			'settings' => 'st_header_tel_color',
		) ) );



		
		/*-------------------------------------------------------
		各見出し
		-------------------------------------------------------*/

		$wp_customize->add_section( 'tagcolors',
			array(
				'title' => __( '[+] テキスト及び各見出し色', 'st' ),
				'description' => 'GoogleWebフォントの追加反映',
				'priority' => 40,
			) );

		/*Webフォントの使用
		-------------------------------------------------------*/
		/*タイトル見出し*/
		$wp_customize->add_setting('entrytitle_webfont', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'entrytitle_webfont_c', array( 
			'section' => 'tagcolors',
			'settings' => 'entrytitle_webfont', 
			'label' => '記事タイトル見出し', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*各メニュー*/
		$wp_customize->add_setting('menu_webfont', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'menu_webfont_c', array( 
			'section' => 'tagcolors',
			'settings' => 'menu_webfont', 
			'label' => 'メニュー（PCグローバル・サイド固定メニュー・スマートフォン）', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*任意記事ナンバー*/
		$wp_customize->add_setting('poprankno_webfont', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'poprankno_webfont_c', array( 
			'section' => 'tagcolors',
			'settings' => 'poprankno_webfont', 
			'label' => '任意記事のナンバー', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*電話番号*/
		$wp_customize->add_setting('tel_webfont', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'tel_webfont_c', array( 
			'section' => 'tagcolors',
			'settings' => 'tel_webfont', 
			'label' => '電話番号', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*問合せウィジェットボタン*/
		$wp_customize->add_setting('form_webfont', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'form_webfont_c', array( 
			'section' => 'tagcolors',
			'settings' => 'form_webfont', 
			'label' => '問合せウィジェットボタン', 
			'description' => '',
			'type' => 'checkbox', 
		));


		//タイトル色

		$wp_customize->add_setting( 'st_menu_logocolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_logocolor', array(
			'label' => __( 'サイトタイトル色', 'st' ),
			'description' => 'サイトタイトルとその下のキャプションのカラー',
			'section' => 'tagcolors',
			'settings' => 'st_menu_logocolor',
		) ) );

        /*記事タイトル*/

		$wp_customize->add_setting( 'st_h1_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h1_textcolor', array(
			'label' => __( '記事タイトル', 'st' ),
			'description' => '文字色',
			'section' => 'tagcolors',
			'settings' => 'st_h1_textcolor',
		) ) );

        /*投稿日時・ぱんくず・タグ*/

		$wp_customize->add_setting( 'st_kuzu_color', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_kuzu_color', array(
			'label' => __( '投稿日時・ぱんくず・タグ', 'st' ),
			'description' => '背景色',
			'section' => 'tagcolors',
			'settings' => 'st_kuzu_color',
		) ) );
            
        
        /*h2タグ*/

		//h2デザイン変更

		$wp_customize->add_setting( 'st_menu_color', 
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_color', array(
			'label' => __( 'H2タグ', 'st' ),
			'description' => '文字色',
			'section' => 'tagcolors',
			'settings' => 'st_menu_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_bgcolor', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_bgcolor', array(
			'label' => __( '', 'st' ),
			'description' => '背景色*',
			'section' => 'tagcolors',
			'settings' => 'st_menu_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_h2border_color', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_h2border_color', array(
			'label' => __( '', 'st' ),
			'description' => 'ボーダー色*',
			'section' => 'tagcolors',
			'settings' => 'st_h2border_color',
		) ) );

		$wp_customize->add_setting('st_h2_design', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'st_h2_design_c', array( 
			'section' => 'tagcolors',
			'settings' => 'st_h2_design', 
			'label' => '吹き出しデザインに変更', 
			'description' => '',
			'type' => 'checkbox', 
		));


		/*h3タグ*/

		$wp_customize->add_setting( 'st_menu_h3textcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h3textcolor', array(
			'label' => __( 'H3タグ', 'st' ),
			'description' => '文字と下線色*',
			'section' => 'tagcolors',
			'settings' => 'st_menu_h3textcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h3bgcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h3bgcolor', array(
			'label' => __( '', 'st' ),
			'description' => '背景色',
			'section' => 'tagcolors',
			'settings' => 'st_menu_h3bgcolor',
		) ) );

		$wp_customize->add_setting('st_h3_design', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'st_h3_design_c', array( 
			'section' => 'tagcolors',
			'settings' => 'st_h3_design', 
			'label' => '下線を左ボーダーに変える', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*h4タグ*/

		$wp_customize->add_setting( 'st_menu_h4_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4_textcolor', array(
			'label' => __( 'H4タグ', 'st' ),
			'section' => 'tagcolors',
			'description' => '文字色',
			'section' => 'tagcolors',
			'settings' => 'st_menu_h4_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_h4bgcolor', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4bgcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'tagcolors',
			'description' => '背景色*',
			'section' => 'tagcolors',
			'settings' => 'st_menu_h4bgcolor',
		) ) );

		/*サイドバー見出し色*/

		$wp_customize->add_setting( 'st_menu_h4sidetextcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_h4sidetextcolor', array(
			'label' => __( 'サイドバー見出し色*', 'st' ),
			'section' => 'tagcolors',
			'settings' => 'st_menu_h4sidetextcolor',
		) ) );


     		/*カテゴリ*/

		$wp_customize->add_setting( 'st_catbg_color', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_catbg_color', array(
			'label' => __( '記事タイトル上のカテゴリ', 'st' ),
			'description' => '背景色*',
			'section' => 'tagcolors',
			'settings' => 'st_catbg_color',
		) ) );

		$wp_customize->add_setting( 'st_cattext_color', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_cattext_color', array(
			'label' => __( '', 'st' ),
			'description' => '文字色',
			'section' => 'tagcolors',
			'settings' => 'st_cattext_color',
		) ) );

		/*引用*/

		$wp_customize->add_setting( 'st_blockquote_color', 
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_blockquote_color', array(
			'label' => __( '引用部分の背景色', 'st' ),
			'section' => 'tagcolors',
			'settings' => 'st_blockquote_color',
		) ) );


     		/*NEW及び関連記事*/

		$wp_customize->add_setting( 'st_separator_bgcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_bgcolor', array(
			'label' => __( 'NEW ENTRY & 関連記事', 'st' ),
			'description' => '背景色*',
			'section' => 'tagcolors',
			'settings' => 'st_separator_bgcolor',
		) ) );

		$wp_customize->add_setting( 'st_separator_color', 
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_separator_color', array(
			'label' => __( '', 'st' ),
			'description' => '文字色*',
			'section' => 'tagcolors',
			'settings' => 'st_separator_color',
		) ) );

		/*タグクラウド*/

		$wp_customize->add_setting( 'st_tagcloud_color', 			
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_tagcloud_color', array(
			'label' => __( 'タグクラウド', 'st' ),
			'description' => '文字とボーダー色*',
			'section' => 'tagcolors',
			'settings' => 'st_tagcloud_color',
		) ) );


        /*記事内テキスト*/

		$wp_customize->add_setting( 'st_main_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_main_textcolor', array(
			'label' => __( '一括テキスト色強制変更', 'st' ),
			'description' => '記事内のテキストなど※一括変更は注して御利用下さい（白背景に白文字が適応されると読めなくなります）',
			'section' => 'tagcolors',
			'settings' => 'st_main_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_side_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_side_textcolor', array(
			'label' => __( '', 'st' ),
			'description' => 'サイドの文字色',
			'section' => 'tagcolors',
			'settings' => 'st_side_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_footer_bg_text_color',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_footer_bg_text_color', array(
			'label' => __( '', 'st' ),
			'section' => 'tagcolors',
			'description' => 'フッター文字色',
			'settings' => 'st_footer_bg_text_color',
		) ) );

        /*記事内リンク色*/

		$wp_customize->add_setting( 'st_link_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_textcolor', array(
			'label' => __( '記事内リンク色', 'st' ),
			'description' => '',
			'section' => 'tagcolors',
			'settings' => 'st_link_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_link_hovertextcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_link_hovertextcolor', array(
			'label' => __( '', 'st' ),
			'description' => 'マウスオーバー色',
			'section' => 'tagcolors',
			'settings' => 'st_link_hovertextcolor',
		) ) );


		/*-------------------------------------------------------
		オプションカラー
		-------------------------------------------------------*/

		$wp_customize->add_section( 'optioncolors',
			array(
				'title' => __( '[+] オプションカラー', 'st' ),
				'description' => '管理画面で使用する事で表示されるアイテムのカラー調整',
				'priority' => 50,
			) );
            

		/*RSS（購読する）ボタン*/

		$wp_customize->add_setting( 'st_rss_color', 
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_rss_color', array(
			'label' => __( 'RSS（購読する）ボタン*', 'st' ),
			'section' => 'optioncolors',
			'settings' => 'st_rss_color',
		) ) );

		/*SNSボタン*/

		$wp_customize->add_setting( 'st_sns_btn',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btn', array(
			'label' => __( 'SNSボタン※一括', 'st' ),
			'section' => 'optioncolors',
			'description' => 'ボタン背景色',
			'settings' => 'st_sns_btn',
		) ) );

		$wp_customize->add_setting( 'st_sns_btntext',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sns_btntext', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'アイコンと文字色',
			'settings' => 'st_sns_btntext',
		) ) );
        
        
		//お知らせ

		$wp_customize->add_setting( 'st_menu_newsbarcolor_t',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor_t', array(
			'label' => __( 'お知らせ', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し背景色上部（※上下共に設定）',
			'settings' => 'st_menu_newsbarcolor_t',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbarcolor',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbarcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し背景色下部',
			'settings' => 'st_menu_newsbarcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbar_border_color',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbar_border_color', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出しボーダー色*',
			'settings' => 'st_menu_newsbar_border_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_newsbartextcolor',
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_newsbartextcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し文字色*',
			'settings' => 'st_menu_newsbartextcolor',
		) ) );

		/*日付の文字色*/

		$wp_customize->add_setting( 'st_news_datecolor',
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_datecolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '日付の文字色*',
			'settings' => 'st_news_datecolor',
		) ) );


		/*文字と下線色*/

		$wp_customize->add_setting( 'st_news_text_color',
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );

		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_news_text_color', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'お知らせ文字と下線色',
			'settings' => 'st_news_text_color',
		) ) );


		/*任意お薦め記事*/

		$wp_customize->add_setting( 'st_menu_osusumemidasitextcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasitextcolor', array(
			'label' => __( 'おすすめ記事', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し文字色*',
			'settings' => 'st_menu_osusumemidasitextcolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasicolor', 			
			array(
			'default' => $accentcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasicolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し背景色*',
			'settings' => 'st_menu_osusumemidasicolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_color', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_color', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'コンテンツ背景色*',
			'settings' => 'st_menu_popbox_color',
		) ) );

		$wp_customize->add_setting( 'st_menu_popbox_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_popbox_textcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '文字色',
			'settings' => 'st_menu_popbox_textcolor',
		) ) );


		/*任意お薦め記事No*/

		$wp_customize->add_setting( 'st_menu_osusumemidasinocolor', 			
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasinocolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'ナンバー色*',
			'settings' => 'st_menu_osusumemidasinocolor',
		) ) );

		$wp_customize->add_setting( 'st_menu_osusumemidasinobgcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_menu_osusumemidasinobgcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'ナンバー背景色*',
			'settings' => 'st_menu_osusumemidasinobgcolor',
		) ) );

		$wp_customize->add_setting('st_nohidden', 
			array( 
				'default'  => '', 
				'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'st_nohidden', array( 
			'section' => 'optioncolors',
			'settings' => 'st_nohidden', 
			'label' => 'ナンバーを非表示', 
			'description' => '',
			'type' => 'checkbox', 
		));

		/*フリーボックスウィジェット*/

		$wp_customize->add_setting( 'st_freebox_tittle_textcolor', 			
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_textcolor', array(
			'label' => __( 'フリーボックスウィジェット', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し文字色*',
			'settings' => 'st_freebox_tittle_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_freebox_tittle_color', 			
			array(
			'default' => $maincolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_tittle_color', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '見出し背景色*',
			'settings' => 'st_freebox_tittle_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_color', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_color', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => 'コンテンツ背景色*',
			'settings' => 'st_freebox_color',
		) ) );

		$wp_customize->add_setting( 'st_freebox_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_freebox_textcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '文字色',
			'settings' => 'st_freebox_textcolor',
		) ) );

		/*ウィジェット問合せフォームボタン*/

		$wp_customize->add_setting( 'st_formbtn_textcolor', 			
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_textcolor', array(
			'label' => __( 'ウィジェット問合せフォームボタン', 'st' ),
			'section' => 'optioncolors',
			'description' => '文字色*',
			'settings' => 'st_formbtn_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn_bgcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn_bgcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '背景色*',
			'settings' => 'st_formbtn_bgcolor',
		) ) );

		/*オリジナルウィジェットボタン*/

		$wp_customize->add_setting( 'st_formbtn2_textcolor', 			
			array(
			'default' => $textcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_textcolor', array(
			'label' => __( 'オリジナルウィジェットボタン', 'st' ),
			'section' => 'optioncolors',
			'description' => '文字色*',
			'settings' => 'st_formbtn2_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_formbtn2_bgcolor', 			
			array(
			'default' => $basecolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_formbtn2_bgcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '背景色*',
			'settings' => 'st_formbtn2_bgcolor',
		) ) );

		/*コンタクトフォーム7送信ボタン*/

		$wp_customize->add_setting( 'st_contactform7btn_textcolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_contactform7btn_textcolor', array(
			'label' => __( 'コンタクトフォーム7送信ボタン', 'st' ),
			'section' => 'optioncolors',
			'description' => '文字色',
			'settings' => 'st_contactform7btn_textcolor',
		) ) );

		$wp_customize->add_setting( 'st_contactform7btn_bgcolor', 			
			array(
			'default' => $subcolor,
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_contactform7btn_bgcolor', array(
			'label' => __( '', 'st' ),
			'section' => 'optioncolors',
			'description' => '背景色',
			'settings' => 'st_contactform7btn_bgcolor',
		) ) );



		/*-------------------------------------------------------
		簡単設定
		-------------------------------------------------------*/

		$wp_customize->add_section( 'stpattern',
			array(
				'title' => __( '全体カラー設定 - 初心者向け -', 'st' ),
				'description' => '基本カラー3色で簡単にサイト全体のカラーを設定できます。手早くサイトのカラーを設定したい場合に使用して下さい。',
				'priority' => 0,
			) );

		$wp_customize->add_setting('st_theme_setting', 
			array( 
				'default'  => '', 
			 	'sanitize_callback' => 'sanitize_checkbox',
			));
		$wp_customize->add_control( 'st_theme_setting', array( 
			'section' => 'stpattern',
			'settings' => 'st_theme_setting', 
			'label' => '簡単設定を使用する', 
			'description' => '※使用すると他の設定で「*」マークは変更できなくなります。',
			'type' => 'checkbox', 
		));
		//カラー設定
		$wp_customize->add_setting( 'st_key_patterncolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_key_patterncolor', array(
			'label' => __( '', 'st' ),
			'section' => 'stpattern',
			'description' => 'キーカラー（推奨：一番濃い色）',
			'settings' => 'st_key_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_main_patterncolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_main_patterncolor', array(
			'label' => __( '', 'st' ),
			'section' => 'stpattern',
			'description' => 'メインカラー（推奨：少し薄い色）',
			'settings' => 'st_main_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_sub_patterncolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_sub_patterncolor', array(
			'label' => __( '', 'st' ),
			'section' => 'stpattern',
			'description' => 'サブカラー（推奨：とても薄い色）',
			'settings' => 'st_sub_patterncolor',
		) ) );

		$wp_customize->add_setting( 'st_text_patterncolor', 			
			array(
			'default' => '',
			'sanitize_callback' => 'sanitize_hex_color',
			'sanitize_js_callback' => 'maybe_hash_hex_color',
			) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'st_text_patterncolor', array(
			'label' => __( '', 'st' ),
			'section' => 'stpattern',
			'description' => 'テキスト（一部）',
			'settings' => 'st_text_patterncolor',
		) ) );



	}
}

	add_action( 'customize_register', 'st_customize_register' );

if ( isset( $GLOBALS["stdata1"] ) && $GLOBALS["stdata1"] === 'yes' ) {

	function st_customize_css() {

if( trim($GLOBALS['stdata68']) !== '' ){
	if( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'red' ){
		$basecolor = '#a61919'; //一番濃い色
		$maincolor = '#c81e1e'; //少し薄い色
		$subcolor = '#fce9e9'; //とても薄い色
		$accentcolor = '#c81e1e'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'blue' ){
		$basecolor = '#039BE5'; //一番濃い色
		$maincolor = '#13b0fc'; //少し薄い色
		$subcolor = '#fbfeff'; //とても薄い色
		$accentcolor = '#FDD835'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'green' ){
		$basecolor = '#7CB342'; //一番濃い色
		$maincolor = '#8fc25a'; //少し薄い色
		$subcolor = '#f0f7e9'; //とても薄い色
		$accentcolor = '#FDD835'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'pink' ){
		$basecolor = '#ff6893'; //一番濃い色
		$maincolor = '#ff9bb7'; //少し薄い色
		$subcolor = '#fff1f5'; //とても薄い色
		$accentcolor = '#ff6893'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'glay' ){
		$basecolor = '#212121'; //一番濃い色
		$maincolor = '#424242'; //少し薄い色
		$subcolor = '#FAFAFA'; //とても薄い色
		$accentcolor = '#C5BF3B'; //アクセント
		$textcolor = '#fff'; //テキスト
	}elseif( isset($GLOBALS['stdata68']) && $GLOBALS['stdata68'] === 'orange' ){
		$basecolor = '#febe31'; //一番濃い色
		$maincolor = '#fed271'; //少し薄い色
		$subcolor = '#fffde7'; //とても薄い色
		$accentcolor = '#f48fb1'; //アクセント
		$textcolor = '#fff'; //テキスト
	}else{
		$basecolor = ''; //一番濃い色
		$maincolor = ''; //少し薄い色
		$subcolor = ''; //とても薄い色
		$accentcolor = ''; //アクセント
		$textcolor = ''; //テキスト
	}

        $st_top_bordercolor = get_theme_mod( 'st_top_bordercolor', '' ); //サイト上部にボーダー
        $st_line100 = get_theme_mod( 'st_line100', '' ); //サイト上部ボーダーを100%に
        $st_line_height = get_theme_mod( 'st_line_height', '5px' ); //サイト上部ボーダーの高さ

        $st_wrapper_bgcolor = get_theme_mod( 'st_wrapper_bgcolor', '' ); //Wrapperの背景色

        $menu_logocolor = get_theme_mod( 'st_menu_logocolor', '#1a1a1a' ); //サイトタイトル及びディスクリプション色

        $menu_maincolor = get_theme_mod( 'st_menu_maincolor', '#fff' ); //コンテンツ背景色
        $menu_main_bordercolor = get_theme_mod( 'st_menu_main_bordercolor', '' ); //コンテンツボーダー色
        $st_main_opacity = get_theme_mod( 'st_main_opacity', '' ); //メインコンテンツ背景の透過

        //一括カラー
        $st_main_textcolor = get_theme_mod( 'st_main_textcolor', '' ); //記事の文字色
        $st_side_textcolor = get_theme_mod( 'st_side_textcolor', '' ); //サイドバーの文字色
        $st_link_textcolor = get_theme_mod( 'st_link_textcolor', '' ); //記事のリンク色
        $st_link_hovertextcolor = get_theme_mod( 'st_link_hovertextcolor', '' ); //記事のリンクマウスオーバー色

        $st_footer_bg_text_color = get_theme_mod( 'st_footer_bg_text_color', '' ); //フッターテキスト色

	//ヘッダー
        $menu_st_headerwidget_bgcolor = get_theme_mod( 'st_headerwidget_bgcolor', '' ); //ヘッダーウィジェットの背景色
        $menu_st_headerwidget_textcolor = get_theme_mod( 'st_headerwidget_textcolor', '#000' ); //ヘッダーウィジェットのテキスト色
        $menu_st_header_tel_color = get_theme_mod( 'st_header_tel_color', '#000' ); //ヘッダーの電話番号とリンク色

        //Webフォント
        $entrytitle_webfont = get_theme_mod( 'entrytitle_webfont', '' ); //記事タイトルにWebフォントを使用
        $menu_webfont = get_theme_mod( 'menu_webfont', '' ); //各メニューにWebフォントを使用
        $poprankno_webfont = get_theme_mod( 'poprankno_webfont', '' ); //任意記事ナンバーにWebフォントを使用
        $tel_webfont = get_theme_mod( 'tel_webfont', '' ); //電話番号にWebフォントを使用
        $form_webfont = get_theme_mod( 'form_webfont', '' ); //問合せウィジェットボタンにWebフォントを使用

	//投稿及び固定記事
        $st_h1_textcolor = get_theme_mod( 'st_h1_textcolor', '#333' ); //記事タイトルの文字色
        $st_kuzu_color = get_theme_mod( 'st_kuzu_color', '#dbdbdb' ); //投稿日時・ぱんくず・タグ

        $menu_color = get_theme_mod( 'st_menu_color', '#1a1a1a' ); //h2のテキスト色
        $menu_bgcolor = get_theme_mod( 'st_menu_bgcolor', $subcolor ); //h2の背景色
        $st_h2border_color = get_theme_mod( 'st_h2border_color', $basecolor ); //h2のボーダー色
        $st_h2_design = get_theme_mod( 'st_h2_design', '' ); //h2デザインの変更

        $menu_h3bgcolor = get_theme_mod( 'st_menu_h3bgcolor', '' ); //h3の背景色
        $menu_h3textcolor = get_theme_mod( 'st_menu_h3textcolor', $basecolor ); //h3のテキスト色
        $st_h3_design = get_theme_mod( 'st_h3_design', '' ); //h3デザインの変更

        $st_menu_h4_textcolor = get_theme_mod( 'st_menu_h4_textcolor', '#000' ); //h4の文字色
        $menu_h4bgcolor = get_theme_mod( 'st_menu_h4bgcolor', $subcolor ); //h4の背景色

        $st_blockquote_color = get_theme_mod( 'st_blockquote_color', '#f3f3f3' ); //引用部分の背景色

        $menu_separator_color = get_theme_mod( 'st_separator_color', $textcolor ); //NEW ENTRYのテキスト色
        $menu_separator_bgcolor = get_theme_mod( 'st_separator_bgcolor', $basecolor ); //NEW ENTRYの背景色

        $st_catbg_color = get_theme_mod( 'st_catbg_color', $subcolor ); //カテゴリの背景色
        $st_cattext_color = get_theme_mod( 'st_cattext_color', '#000' ); //カテゴリのテキスト色

	//お知らせ
        $menu_news_datecolor = get_theme_mod( 'st_news_datecolor', $maincolor ); //お知らせ日付のテキスト色
        $menu_news_text_color = get_theme_mod( 'st_news_text_color', '#000' ); //お知らせのテキストと下線色
        $menu_newsbarcolor_t = get_theme_mod( 'st_menu_newsbarcolor_t', '' ); //お知らせの背景色上
        $menu_newsbarcolor = get_theme_mod( 'st_menu_newsbarcolor', '' ); //お知らせの背景色下
        $menu_newsbarbordercolor = get_theme_mod( 'st_menu_newsbar_border_color', $basecolor ); //お知らせのボーダー色
        $menu_newsbartextcolor = get_theme_mod( 'st_menu_newsbartextcolor', $basecolor ); //お知らせのテキスト色

	//メニュー
        $menu_navbar_topunder_color = get_theme_mod( 'st_menu_navbar_topunder_color', $basecolor ); //メニューの上下ボーダー色
        $menu_navbar_side_color = get_theme_mod( 'st_menu_navbar_side_color',  $basecolor ); //メニューの左右ボーダー色
        $menu_navbar_right_color = get_theme_mod( 'st_menu_navbar_right_color', $maincolor ); //メニューの右ボーダー色
        $menu_navbarcolor = get_theme_mod( 'st_menu_navbarcolor',  $basecolor ); //メニューの背景色下
        $menu_navbarcolor_t = get_theme_mod( 'st_menu_navbarcolor_t',  $maincolor ); //メニューの背景色上
        $menu_navbartextcolor = get_theme_mod( 'st_menu_navbartextcolor',  $textcolor ); //PCメニューテキスト色

        $menu_navbar_undercolor = get_theme_mod( 'st_menu_navbar_undercolor', $maincolor ); //PCドロップダウン下層メニュー背景

	//サイドメニュー
        $st_menu_icon = get_theme_mod( 'st_menu_icon', '' ); //メニュー第一階層のWebアイコン
        $st_undermenu_icon = get_theme_mod( 'st_undermenu_icon', '' ); //メニュー第二階層のWebアイコン

        $menu_pagelist_childtextcolor = get_theme_mod( 'st_menu_pagelist_childtextcolor', $basecolor ); //サイドメニュー下層のテキスト色
        $menu_pagelist_bgcolor = get_theme_mod( 'st_menu_pagelist_bgcolor', $subcolor ); //サイドメニュー下層の背景色
        $menu_pagelist_childtext_border_color = get_theme_mod( 'st_menu_pagelist_childtext_border_color', $maincolor ); //サイドメニュー下層の下線色

        $menu_h4sidetextcolor = get_theme_mod( 'st_menu_h4sidetextcolor', $basecolor ); //サイドバー見出し
        $st_tagcloud_color = get_theme_mod( 'st_tagcloud_color', $basecolor ); //タグクラウド色
        $menu_rsscolor = get_theme_mod( 'st_rss_color', $basecolor ); //RSSボタン

        $st_sns_btn = get_theme_mod( 'st_sns_btn', '' ); //SNSボタン背景
        $st_sns_btntext = get_theme_mod( 'st_sns_btntext', '' ); //SNSボタンテキスト

        $st_formbtn_textcolor = get_theme_mod( 'st_formbtn_textcolor', '#fff' ); //ウィジェット問合せフォームのテキスト色
        $st_formbtn_bgcolor = get_theme_mod( 'st_formbtn_bgcolor', '#616161' ); //ウィジェット問合せフォームの背景色

        $st_formbtn2_textcolor = get_theme_mod( 'st_formbtn2_textcolor', '#fff' ); //ウィジェッオリジナルボタンのテキスト色
        $st_formbtn2_bgcolor = get_theme_mod( 'st_formbtn2_bgcolor', '#616161' ); //ウィジェッオリジナルボタンの背景色

        $st_contactform7btn_textcolor = get_theme_mod( 'st_contactform7btn_textcolor', '#000' ); //コンタクトフォーム7の送信ボタンテキスト色
        $st_contactform7btn_bgcolor = get_theme_mod( 'st_contactform7btn_bgcolor', '#f3f3f3' ); //コンタクトフォーム7の送信ボタンの背景色

        //任意記事
        $menu_osusumemidasitextcolor = get_theme_mod( 'st_menu_osusumemidasitextcolor', $textcolor ); //任意記事の見出しテキスト色
        $menu_osusumemidasicolor = get_theme_mod( 'st_menu_osusumemidasicolor', $accentcolor ); //任意記事の見出し背景色
        $menu_osusumemidasinocolor = get_theme_mod( 'st_menu_osusumemidasinocolor', '#fff' ); //任意記事のナンバー色
        $menu_osusumemidasinobgcolor = get_theme_mod( 'st_menu_osusumemidasinobgcolor', $accentcolor ); //任意記事のナンバー背景色
        $menu_popbox_color = get_theme_mod( 'st_menu_popbox_color', $subcolor ); //任意記事の背景色
        $menu_popbox_textcolor = get_theme_mod( 'st_menu_popbox_textcolor', '' ); //任意記事のテキスト色
        $st_nohidden = get_theme_mod( 'st_nohidden', '' ); //任意記事のナンバー削除

	//フリーボックスウィジェット
        $freebox_tittle_textcolor = get_theme_mod( 'st_freebox_tittle_textcolor', $textcolor ); //フリーボックスウィジェットの見出しテキスト色
        $freebox_tittle_color = get_theme_mod( 'st_freebox_tittle_color', $accentcolor ); //フリーボックスウィジェットの見出背景色
        $freebox_color = get_theme_mod( 'st_freebox_color', $subcolor ); //フリーボックスウィジェットの背景色
        $freebox_textcolor = get_theme_mod( 'st_freebox_textcolor', '' ); //フリーボックスウィジェットのテキスト色

	//スマートフォンサイズ
        $menu_sumartmenutextcolor = get_theme_mod( 'st_menu_sumartmenutextcolor', '#000' ); //スマホメニュー
        $menu_sumart_bg_color = get_theme_mod( 'st_menu_sumart_bg_color', $basecolor ); //スマホメニュー背景色
        $menu_sumartcolor = get_theme_mod( 'st_menu_sumartcolor', $maincolor ); //スマホwebアイコン

}else{

		include_once( "st_customize_css_change.php" ); //カスタマイザー用CSS設定読み込み 

}


		?>

		<style type="text/css">
			/*グループ1
			------------------------------------------------------------*/
			/*サイト上部のボーダー色*/
			<?php if($st_top_bordercolor){ //サイト上部にボーダーを入れる ?>
				<?php if($st_line100){ //width100%の時 ?>
					body {
						border-top: <?php echo $st_line_height;?> solid <?php echo $st_top_bordercolor;
?>;	
					}
				<?php }else{ //サイト部のみの時 ?>
					#wrapper {
						border-top: <?php echo $st_line_height;?> solid <?php echo $st_top_bordercolor;
?>;
					}
				<?php } ?>
			<?php } ?>	


			/*サイトの背景色*/
			#wrapper {
				<?php if($st_wrapper_bgcolor){ ?>
				background: <?php echo $st_wrapper_bgcolor;
?>;
				<?php } ?>		
			}

			/*メインコンテンツのテキスト色*/
			.post > *{
				color: <?php echo $st_main_textcolor;
?>;				
			}
			input,textarea {
				color:#000;
			}

			/*メインコンテンツのリンク色*/

			a,.no-thumbitiran h3 a,.no-thumbitiran h5 a {
				color: <?php echo $st_link_textcolor;
?>;				
			}

			a:hover {
				color: <?php echo $st_link_hovertextcolor;
?>;				
			}

			/*サイドのテキスト色*/
			#side aside > *,#side aside .kanren .clearfix dd h5 a{
				color: <?php echo $st_side_textcolor;
?>;				
			}

			/*メインコンテンツの背景色*/
			main {
				background: <?php echo $menu_maincolor;
?>;				
			}


			/*メイン背景色の透過*/

			<?php if(isset($st_main_opacity) && ($st_main_opacity === '80')){ ?>
				main {
   					background-color: rgba( 255, 255, 255, 0.2 )!important;
				}
			<?php }elseif(isset($st_main_opacity) && ($st_main_opacity === '50')){ ?>
				main {
   					background-color: rgba( 255, 255, 255, 0.5 )!important;
				}
			<?php }elseif(isset($st_main_opacity) && ($st_main_opacity === '20')){ ?>
				main {
   					background-color: rgba( 255, 255, 255, 0.8 )!important;
				}

			<?php }else{ ?>

			<?php } ?>

			/*ブログタイトル*/

			header .sitename a {
				color: <?php echo $menu_logocolor;
?>;
			}

			/* メニュー */
			nav li a {
				color: <?php echo $menu_logocolor;
?>;
			}


			/*ページトップ*/
			#page-top a {
								background: <?php echo $menu_sumart_bg_color;
?>;
			}

			/*キャプション */

			header h1 {
				color: <?php echo $menu_logocolor;
?>;
			}

			header .descr {
				color: <?php echo $menu_logocolor;
?>;
			}

			/* アコーディオン */
			#s-navi dt.trigger .op {
				background: <?php echo $menu_sumart_bg_color;
?>;
				color: <?php echo $menu_sumartcolor;
?>;
			}

			.acordion_tree li a {
				color: <?php echo $menu_logocolor;
?>;
			}

			/* サイド見出し */
			aside h4 {
				color: <?php echo $menu_logocolor;
?>;
			}

			/* フッター文字 */
			#footer, #footer .copy, #footer .rcopy, #footer .copy a, #footer .rcopy a {
				color: <?php echo $menu_logocolor;
?>;
			}

			/* スマホメニュー文字 */
			.acordion_tree ul.menu li a, .acordion_tree ul.menu li {
				color: <?php echo $menu_sumartmenutextcolor;
?>;
			}

			.acordion_tree ul.menu li {
				border-bottom-color: <?php echo $menu_sumartmenutextcolor;
?>;
}


			/*グループ2
			------------------------------------------------------------*/
			/*Webフォント*/
			<?php if(trim($entrytitle_webfont) !== ''){ //タイトル見出し ?>
				.entry-title,.kanren .clearfix dd h5 a,h5.poprank-noh5 a,.no-thumbitiran h5 a {
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
				}
			<?php } ?>

			<?php if(trim($menu_webfont) !== ''){ //各メニュー ?>
				nav.smanone a, /*PCグローバルメニュー*/
				#side aside .st-pagelists ul li a, /*サイドバーの固定メニュー*/
				.acordion_tree ul.menu li a /*アコーディオンメニュー*/ 
				{
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
				}
			<?php } ?>

			<?php if(trim($poprankno_webfont) !== ''){ //任意記事のナンバー ?>
				.poprank-no2,.poprank-no {
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
				}
			<?php } ?>

			<?php if(trim($tel_webfont) !== ''){ //電話番号 ?>
				.head-telno a {
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
				}
			<?php } ?>

			<?php if(trim($form_webfont) !== ''){ //問合せウィジェットボタン ?>
				.st-formbtn {
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
				}
			<?php } ?>

			/* 投稿日時・ぱんくず・タグ */
			#breadcrumb, #breadcrumb div a, div#breadcrumb a, .blogbox p, .tagst {
				color: <?php echo $st_kuzu_color;
?>;
			}

			/* 記事タイトル */
			.entry-title {
				color: <?php echo $st_h1_textcolor;
?>;
			<?php if(trim($entrytitle_webfont) !== ''){ //Webフォント使用 ?>
					font-family: Josefin Sans,Julius Sans One,'Meddon',Lobster,Pacifico,Fredericka the Great,Bilbo Swash Caps,PT Sans Caption,Montserrat,"メイリオ", Meiryo, "ヒラギノ角ゴ Pro W3", Hiragino Kaku Gothic Pro, "ＭＳ Ｐゴシック", sans-serif!important;
			<?php } ?>
			}

			/* 中見出し */

<?php if(trim($st_h2_design) !== ''){ //吹き出しデザイン ?>

			h2 {
				background: <?php echo $menu_bgcolor;
?>;
				color: <?php echo $menu_color;
?>;
				position: relative;
				border:none;
			}

			h2:after {
				border-top: 10px solid <?php echo $menu_bgcolor;
?>;
				content: '';
				position: absolute;
				border-right: 10px solid transparent;
				border-left: 10px solid transparent;
				bottom: -10px;
				left: 30px;
				border-radius: 2px;
			}

			h2:before {
				border-top: 10px solid <?php echo $menu_bgcolor;
?>;
				content: '';
				position: absolute;
				border-right: 10px solid transparent;
				border-left: 10px solid transparent;
				bottom: -10px;
				left: 30px;
			}

			

			<?php }else{ //吹き出しじゃないデザイン ?>

			h2 {
				<?php if($menu_bgcolor){ ?>
					background: <?php echo $menu_bgcolor;
?>;
				<?php }else{ ?>
					background-color: transparent;
				<?php } ?>

				color: <?php echo $menu_color;
?>;
				<?php if($st_h2border_color){ ?>
					border-top:2px solid <?php echo $st_h2border_color;
?>;

					border-bottom:1px solid <?php echo $st_h2border_color;
?>;
				<?php }else{ ?>
					border:none;
				<?php } ?>

			}


			<?php } ?>

			/*小見出し*/
			.post h3:not(.rankh3) {

			<?php if($st_h3_design){ //下線を左ボーダーに変更 ?>
				color: <?php echo $menu_h3textcolor;
?>;
				padding: 5px 10px 5px 15px;
				border-left: 5px solid <?php echo $menu_h3textcolor;
?>;
				border-bottom: none;

				<?php if($menu_h3bgcolor){ ?>
					background-color: <?php echo $menu_h3bgcolor;
?>;
				<?php }else{ ?>
					background-color: transparent;
				<?php } ?>

			<?php }else{ //デフォルト ?>
				color: <?php echo $menu_h3textcolor;
?>;
				border-bottom-color: <?php echo $menu_h3textcolor;
?>;
				<?php if($menu_h3bgcolor){ ?>
					background-color: <?php echo $menu_h3bgcolor;
?>;
				<?php }else{ ?>
					background-color: transparent;
				<?php } ?>

			<?php } ?>
			}

			.post h4 {
				color: <?php echo $st_menu_h4_textcolor;
?>;
				<?php if($menu_h4bgcolor){ ?>
				background-color: <?php echo $menu_h4bgcolor;
?>;
				<?php }else{ ?>
				background-color: transparent;
				padding:0;
				<?php } ?>
			}


			/* サイド見出し */
			aside h4,#side aside h4 {
				color: <?php echo $menu_h4sidetextcolor;
?>;
			}

			/* タグクラウド */
			.tagcloud a {
				border-color: <?php echo $st_tagcloud_color;
?>;
    				color: <?php echo $st_tagcloud_color;
?>;
			}

			/* NEW ENTRY & 関連記事 */
			.post h4.point,.n-entry-t  {
				border-bottom-color:<?php echo $menu_separator_bgcolor;
?>;
			}
			.post h4 .point-in,.n-entry {
				background-color: <?php echo $menu_separator_bgcolor;
?>;
				color:<?php echo $menu_separator_color;
?>;
			}

			/* カテゴリ */
			.catname {
				background:<?php echo $st_catbg_color;
?>;
			}

			.post .st-catgroup a {
				color:<?php echo $st_cattext_color;
?>;
}


			/*グループ4
			------------------------------------------------------------*/
			/* RSSボタン */
			.rssbox a {
				background-color: <?php echo $menu_rsscolor;
?>;
			}

			/* SNSボタン */
			<?php if($st_sns_btn){ ?>
			.sns li a {
				background:<?php echo $st_sns_btn;
?>!important;
			}
			.sns a:hover {
				opacity:0.6;
			}
			<?php } ?>

			<?php if($st_sns_btntext){ ?>
			.snstext, .snscount, .sns li a  {
				color:<?php echo $st_sns_btntext;
?>;
			}

			.sns .fa,.sns .fa-hatena {
				border-right-color:<?php echo $st_sns_btntext;
?>!important;
				color:<?php echo $st_sns_btntext;
?>;
			}
			<?php } ?>

			.inyoumodoki, .post blockquote {
   				background-color: <?php echo $st_blockquote_color;
?>;
    				border-left-color: <?php echo $st_blockquote_color;
?>;
			}

			/*フリーボックスウィジェット
			------------------------------------------------------------*/
			/* ボックス */
			.freebox {
				border-top-color:<?php echo $freebox_tittle_color;
?>;
				background:<?php echo $freebox_color;
?>;
			}
			/* 見出し */
			.p-entry-f {
				background:<?php echo $freebox_tittle_color;
?>;
				color:<?php echo $freebox_tittle_textcolor;
?>;
			}
			/* エリア内テキスト */
			<?php if($freebox_textcolor){ ?>
			.freebox > * {
				color:<?php echo $freebox_textcolor;
?>;
			}
			<?php } ?>

			/*お知らせ
			------------------------------------------------------------*/
			/*お知らせバーの背景色*/
			#topnews-box div.rss-bar {
			<?php if($menu_newsbarbordercolor){ //ボーダーに色が設定されいる場合 ?>
				border-color: <?php echo $menu_newsbarbordercolor;
?>;
			<?php }else{ ?>
				border: none;
			<?php } ?>
			}

			#topnews-box div.rss-bar {
				color: <?php echo $menu_newsbartextcolor;
?>;

				/*Other Browser*/
				background: <?php echo $menu_newsbarcolor;?>;
				/*For Old WebKit*/
				background: -webkit-linear-gradient(
				<?php echo $menu_newsbarcolor_t;?> 0%,
				<?php echo $menu_newsbarcolor;?> 100%
				);
				/*For Modern Browser*/
				background: linear-gradient(
				<?php echo $menu_newsbarcolor_t;?> 0%,
				<?php echo $menu_newsbarcolor;?> 100%
				);

			
			}

			/*お知らせ日付の文字色*/
			#topnews-box dt {
				color: <?php echo $menu_news_datecolor;
?>;
			}
			#topnews-box div dl dd a {
				color: <?php echo $menu_news_text_color;
?>;
			}
			#topnews-box dd {
				border-bottom-color:  <?php echo $menu_news_text_color;
?>;
			}

			/*固定ページサイドメニュー
			------------------------------------------------------------*/
			/*背景色*/

			#sidebg {
				background:<?php echo $menu_pagelist_bgcolor;?>;
			}

			/*liタグの階層*/
			#side aside .st-pagelists ul li:not(.sub-menu) {
				<?php if($menu_navbar_topunder_color){ ?>
					border-top-color: <?php echo $menu_navbar_topunder_color;
?>;
				<?php }else{ ?>
					border-top: none;
				<?php } ?>

				<?php if($menu_navbar_side_color){ ?>
					border-left-color: <?php echo $menu_navbar_side_color;
?>;
					border-right-color: <?php echo $menu_navbar_side_color;
?>;
				<?php }else{ ?>
					border-left: none;
					border-right:none;
				<?php } ?>
			}

			#side aside .st-pagelists ul .sub-menu li {
				border:none;
			}

			#side aside .st-pagelists ul li:last-child {
				<?php if($menu_navbar_topunder_color){ ?>
					border-bottom: 1px solid <?php echo $menu_navbar_topunder_color;
?>;
				<?php }else{ ?>
					border-bottom:none;
				<?php } ?>
			}

			#side aside .st-pagelists ul .sub-menu li:first-child {
				<?php if($menu_navbar_topunder_color){ ?>
					border-top: 1px solid <?php echo $menu_navbar_topunder_color;
?>;
				<?php }else{ ?>
					border-top: none;
				<?php } ?>

			}

			#side aside .st-pagelists ul li li:last-child {
				border:none;
			}

			#side aside .st-pagelists ul .sub-menu .sub-menu li {
				border:none;
			}

			#side aside .st-pagelists ul li a {
				color: <?php echo $menu_navbartextcolor;
?>;


			<?php if( (trim($menu_navbarcolor) !== '') || (trim($menu_navbarcolor_t) !== '') ){ ?>

				/*Other Browser*/
				background: <?php echo $menu_navbarcolor;?>;
				/*For Old WebKit*/
				background: -webkit-linear-gradient(
				<?php echo $menu_navbarcolor_t;?> 0%,
				<?php echo $menu_navbarcolor;?> 100%
				);
				/*For Modern Browser*/
				background: linear-gradient(
				<?php echo $menu_navbarcolor_t;?> 0%,
				<?php echo $menu_navbarcolor;?> 100%
				);

			<?php }else{ //両方の色に値が無い場合 ?>
				background-color:transparent;
				background:none;
			<?php } ?>

			}

			#side aside .st-pagelists .sub-menu a {
				border-bottom-color: <?php echo $menu_pagelist_childtext_border_color;
				
?>;

				color: <?php echo $menu_pagelist_childtextcolor;
?>;
			}

			#side aside .st-pagelists .sub-menu li .sub-menu a,
			#side aside .st-pagelists .sub-menu li .sub-menu .sub-menu li a {
			color: <?php echo $menu_pagelist_childtextcolor;
?>;
			}

			/*Webアイコン*/
			<?php if($st_menu_icon){ ?>
				#side aside .st-pagelists ul li a:before {
					content: "\<?php echo $st_menu_icon; ?>  ";
					font-family: FontAwesome;
				}
				#side aside .st-pagelists li li a:before {
					content: none;
				}
			<?php } ?>

			<?php if($st_undermenu_icon){ ?>
				#side aside .st-pagelists li li a:before {
					content: "\<?php echo $st_undermenu_icon; ?>  ";
					font-family: FontAwesome;
				}
			<?php } ?>

			/*追加カラー
			------------------------------------------------------------*/
			/*フッター*/
			footer > *,footer a{
			<?php if($st_footer_bg_text_color){ ?>
				color:<?php echo $st_footer_bg_text_color;
?>!important;
			<?php } ?>
			}


			footer .footermenust li {
				border-right-color: <?php echo $st_footer_bg_text_color;
?>!important;
			}

			/*任意の人気記事
			------------------------------------------------------------*/

			.post .p-entry, #side .p-entry, .home-post .p-entry {
				background:<?php echo $menu_osusumemidasicolor;
?>;
				color:<?php echo $menu_osusumemidasitextcolor;
?>;
			}

			.pop-box,.nowhits .pop-box, .nowhits-eye .pop-box {
				border-top-color:<?php echo $menu_osusumemidasicolor;
?>;
				background:<?php echo $menu_popbox_color;
?>;
			}

			.kanren.pop-box .clearfix dd h5 a, .kanren.pop-box .clearfix dd p {
				color: <?php echo $menu_popbox_textcolor;
?>;
}
			<?php if($st_nohidden){ ?>
				.poprank-no2,.poprank-no{
					display:none;
				}
			<?php }else{ ?>
				.poprank-no2{
					background:<?php echo $menu_osusumemidasinobgcolor;
?>;
					color:<?php echo $menu_osusumemidasinocolor;
?>!important;
			}
				.poprank-no{
					background:<?php echo $menu_osusumemidasinobgcolor;
?>;
					color:<?php echo $menu_osusumemidasinocolor;
?>;
			}
			<?php } ?>


			/*ウィジェット問合せボタン*/

			.st-formbtn{
				background:<?php echo $st_formbtn_bgcolor;
?>;
			}

			.st-formbtn .fa {
				border-right-color:<?php echo $st_formbtn_textcolor
?>;
			}
			
			a.st-formbtnlink {
				color:<?php echo $st_formbtn_textcolor
?>;
			}


			/*ウィジェットオリジナルボタン*/

			.st-formbtn.st-originalbtn{
				background:<?php echo $st_formbtn2_bgcolor;
?>;
			}

			.st-formbtn.st-originalbtn .fa {
				border-right-color:<?php echo $st_formbtn2_textcolor
?>;
			}
			
			a.st-formbtnlink.st-originallink {
				color:<?php echo $st_formbtn2_textcolor
?>;
			}

			/*コンタクトフォーム7送信ボタン*/
			.wpcf7-submit{
				background:<?php echo $st_contactform7btn_bgcolor
?>;
				color:<?php echo $st_contactform7btn_textcolor
?>;
			}

			/*media Queries タブレットサイズ
			----------------------------------------------------*/
			@media only screen and (min-width: 600px) {

				/*追加カラー
				------------------------------------------------------------*/
				/*フッター*/
				footer{
					margin:0 -20px;
				}
			}

			/*media Queries PCサイズ
			----------------------------------------------------*/
			@media only screen and (min-width: 960px) {
				/*メインコンテンツのボーダー*/
				<?php if($menu_main_bordercolor){ ?>
				main {
					border:1px solid <?php echo $menu_main_bordercolor;
?>;
				}
				<?php } ?>



				nav.smanone {
				<?php if($menu_navbar_topunder_color){ ?>
					border-top-color: <?php echo $menu_navbar_topunder_color;
?>;
					border-bottom-color: <?php echo $menu_navbar_topunder_color;
?>;
				<?php }else{ ?>
					border-top: none;
					border-bottom:none;
				<?php } ?>

				<?php if($menu_navbar_side_color){ ?>
					border-left-color: <?php echo $menu_navbar_side_color;
?>;
					border-right-color: <?php echo $menu_navbar_side_color;
?>;
				<?php }else{ ?>
					border-left: none;
					border-right:none;
				<?php } ?>



				<?php if( (trim($menu_navbarcolor) !== '') || (trim($menu_navbarcolor_t) !== '') ){ ?>

					/*Other Browser*/
					background: <?php echo $menu_navbarcolor;?>;
					/*For Old WebKit*/
					background: -webkit-linear-gradient(
					<?php echo $menu_navbarcolor_t;?> 0%,
					<?php echo $menu_navbarcolor;?> 100%
					);
					/*For Modern Browser*/
					background: linear-gradient(
					<?php echo $menu_navbarcolor_t;?> 0%,
					<?php echo $menu_navbarcolor;?> 100%
					);

				<?php }else{ //両方の色に値が無い場合 ?>
					background-color:transparent;
					background:none;
				<?php } ?>
				
				}

				header .smanone ul.menu li{
				<?php if($menu_navbar_right_color){ ?>
					border-right-color:<?php echo $menu_navbar_right_color;
?>;
				<?php }else{ ?>
					border-right: none;
				<?php } ?>
				}

				header .smanone ul.menu li {
					border-right-color: <?php echo $menu_navbar_right_color;
?>;
				}

				header .smanone ul.menu li a {
					color: <?php echo $menu_navbartextcolor;
?>;

				}

				header .smanone ul.menu li li a{
					background: <?php echo $menu_navbar_undercolor;
?>;
					border-top-color: <?php echo $menu_navbarcolor;
?>;

				}

				/*ヘッダーウィジェット*/

				header .textwidget{
					background:<?php echo $menu_st_headerwidget_bgcolor;
?>;
					color:<?php echo $menu_st_headerwidget_textcolor;
?>;
				}

				/*ヘッダーの電話番号とリンク色*/

				.head-telno a, #header-r .footermenust a {
					color:<?php echo $menu_st_header_tel_color;
?>;
				}

				#header-r .footermenust li {
					border-right-color: <?php echo $menu_st_header_tel_color;
?>;
				}

				/*トップ用おすすめタイトル*/
				.nowhits .pop-box {
					border-top-color:<?php echo $menu_osusumemidasicolor;
?>;
				}



			}
		</style>

		<?php
	}

	add_action( 'wp_head', 'st_customize_css' );
}
