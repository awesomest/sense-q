<?php
$st_theme_setting = get_theme_mod( 'st_theme_setting', '' ); //セッティング
if($st_theme_setting){

        $st_top_bordercolor = get_theme_mod( 'st_top_bordercolor', '' ); //サイト上部にボーダー
        $st_line100 = get_theme_mod( 'st_line100', '' ); //サイト上部ボーダーを100%に
        $st_line_height = get_theme_mod( 'st_line_height', '5px' ); //サイト上部ボーダーの高さ

        $st_wrapper_bgcolor = get_theme_mod( 'st_wrapper_bgcolor', '' ); //Wrapperの背景色

        $menu_logocolor = get_theme_mod( 'st_menu_logocolor', '' ); //サイトタイトル及びディスクリプション色

        $menu_maincolor = get_theme_mod( 'st_menu_maincolor', '' ); //コンテンツ背景色
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
        $menu_st_headerwidget_textcolor = get_theme_mod( 'st_headerwidget_textcolor', '' ); //ヘッダーウィジェットのテキスト色
        $menu_st_header_tel_color = get_theme_mod( 'st_header_tel_color', '' ); //ヘッダーの電話番号とリンク色

        //Webフォント
        $entrytitle_webfont = get_theme_mod( 'entrytitle_webfont', '' ); //記事タイトルにWebフォントを使用
        $menu_webfont = get_theme_mod( 'menu_webfont', '' ); //各メニューにWebフォントを使用
        $poprankno_webfont = get_theme_mod( 'poprankno_webfont', '' ); //任意記事ナンバーにWebフォントを使用
        $tel_webfont = get_theme_mod( 'tel_webfont', '' ); //電話番号にWebフォントを使用
        $form_webfont = get_theme_mod( 'form_webfont', '' ); //問合せウィジェットボタンにWebフォントを使用

	//投稿及び固定記事

        $st_h1_textcolor = get_theme_mod( 'st_h1_textcolor', '' ); //記事タイトルの文字色
        $st_kuzu_color = get_theme_mod( 'st_kuzu_color', '' ); //投稿日時・ぱんくず・タグ

        $menu_color = get_theme_mod( 'st_menu_color', '' ); //h2のテキスト色
        $menu_bgcolor = get_theme_mod( 'st_sub_patterncolor', '' ); //h2の背景色※
        $st_h2border_color = get_theme_mod( 'st_key_patterncolor', '' ); //h2のボーダー色※
        $st_h2_design = get_theme_mod( 'st_h2_design', '' ); //h2デザインの変更

        $menu_h3bgcolor = get_theme_mod( 'st_menu_h3bgcolor', '' ); //h3の背景色
        $menu_h3textcolor = get_theme_mod( 'st_key_patterncolor', '' ); //h3のテキスト色※
        $st_h3_design = get_theme_mod( 'st_h3_design', '' ); //h3デザインの変更

        $st_menu_h4_textcolor = get_theme_mod( 'st_menu_h4_textcolor', '' ); //h4の文字色
        $menu_h4bgcolor = get_theme_mod( 'st_sub_patterncolor', '' ); //h4の背景色※

        $st_blockquote_color = get_theme_mod( 'st_blockquote_color', '' ); //引用部分の背景色

        $menu_separator_color = get_theme_mod( 'st_text_patterncolor', '' ); //NEW ENTRYのテキスト色※
        $menu_separator_bgcolor = get_theme_mod( 'st_key_patterncolor', '' ); //NEW ENTRYの背景色※

        $st_catbg_color = get_theme_mod( 'st_sub_patterncolor', '' ); //カテゴリの背景色※
        $st_cattext_color = get_theme_mod( 'st_cattext_color', '' ); //カテゴリのテキスト色

	//お知らせ
        $menu_news_datecolor = get_theme_mod( 'st_main_patterncolor', '' ); //お知らせ日付のテキスト色※
        $menu_news_text_color = get_theme_mod( 'st_news_text_color', '' ); //お知らせのテキストと下線色
        $menu_newsbarcolor_t = get_theme_mod( 'st_menu_newsbarcolor_t', '' ); //お知らせの背景色上
        $menu_newsbarcolor = get_theme_mod( 'st_menu_newsbarcolor', '' ); //お知らせの背景色下
        $menu_newsbarbordercolor = get_theme_mod( 'st_key_patterncolor', '' ); //お知らせのボーダー色※
        $menu_newsbartextcolor = get_theme_mod( 'st_key_patterncolor', '' ); //お知らせのテキスト色※

	//メニュー
        $menu_navbar_topunder_color = get_theme_mod( 'st_key_patterncolor', '' ); //メニューの上下ボーダー色※
        $menu_navbar_side_color = get_theme_mod( 'st_key_patterncolor', '' ); //メニューの左右ボーダー色※
        $menu_navbar_right_color = get_theme_mod( 'st_main_patterncolor', '' ); //メニューの右ボーダー色※
        $menu_navbarcolor = get_theme_mod( 'st_key_patterncolor', '' ); //メニューの背景色下※
        $menu_navbarcolor_t = get_theme_mod( 'st_main_patterncolor', '' ); //メニューの背景色上※
        $menu_navbartextcolor = get_theme_mod( 'st_text_patterncolor', '' ); //メニューテキスト色※

        $menu_navbar_undercolor = get_theme_mod( 'st_main_patterncolor', '' ); //PCドロップダウン下層メニュー背景※

	//サイドメニュー
        $st_menu_icon = get_theme_mod( 'st_menu_icon', '' ); //メニュー第一階層のWebアイコン
        $st_undermenu_icon = get_theme_mod( 'st_undermenu_icon', '' ); //メニュー第二階層のWebアイコン

        $menu_pagelist_childtextcolor = get_theme_mod( 'st_key_patterncolor', '' ); //サイドメニュー下層のテキスト色※
        $menu_pagelist_bgcolor = get_theme_mod( 'st_sub_patterncolor', '' ); //サイドメニュー下層の背景色※
        $menu_pagelist_childtext_border_color = get_theme_mod( 'st_main_patterncolor', '' ); //サイドメニュー下層の下線色※

        $menu_h4sidetextcolor = get_theme_mod( 'st_key_patterncolor', '' ); //サイドバー見出し※
        $st_tagcloud_color = get_theme_mod( 'st_key_patterncolor', '' ); //タグクラウド色※
        $menu_rsscolor = get_theme_mod( 'st_key_patterncolor', '' ); //RSSボタン※

        $st_sns_btn = get_theme_mod( 'st_sns_btn', '' ); //SNSボタン背景
        $st_sns_btntext = get_theme_mod( 'st_sns_btntext', '' ); //SNSボタンテキスト

        $st_formbtn_textcolor = get_theme_mod( 'st_text_patterncolor', '' ); //ウィジェット問合せフォームのテキスト色※
        $st_formbtn_bgcolor = get_theme_mod( 'st_key_patterncolor', '' ); //ウィジェット問合せフォームの背景色※

        $st_formbtn2_textcolor = get_theme_mod( 'st_text_patterncolor', '' ); //ウィジェッオリジナルボタンのテキスト色※
        $st_formbtn2_bgcolor = get_theme_mod( 'st_key_patterncolor', '' ); //ウィジェッオリジナルボタンの背景色※

        $st_contactform7btn_textcolor = get_theme_mod( 'st_contactform7btn_textcolor', '' ); //コンタクトフォーム7の送信ボタンテキスト色
        $st_contactform7btn_bgcolor = get_theme_mod( 'st_contactform7btn_bgcolor', '' ); //コンタクトフォーム7の送信ボタンの背景色

        //任意記事
        $menu_osusumemidasitextcolor = get_theme_mod( 'st_text_patterncolor', '' ); //任意記事の見出しテキスト色※
        $menu_osusumemidasicolor = get_theme_mod( 'st_key_patterncolor', '' ); //任意記事の見出し背景色※
        $menu_osusumemidasinocolor = get_theme_mod( 'st_text_patterncolor', '' ); //任意記事のナンバー色※
        $menu_osusumemidasinobgcolor = get_theme_mod( 'st_key_patterncolor', '' ); //任意記事のナンバー背景色※
        $menu_popbox_color = get_theme_mod( 'st_sub_patterncolor', '' ); //任意記事の背景色※
        $menu_popbox_textcolor = get_theme_mod( 'st_menu_popbox_textcolor', '' ); //任意記事のテキスト色
        $st_nohidden = get_theme_mod( 'st_nohidden', '' ); //任意記事のナンバー削除

	//フリーボックスウィジェット
        $freebox_tittle_textcolor = get_theme_mod( 'st_text_patterncolor', '' ); //フリーボックスウィジェットの見出しテキスト色※
        $freebox_tittle_color = get_theme_mod( 'st_key_patterncolor', '' ); //フリーボックスウィジェットの見出背景色※
        $freebox_color = get_theme_mod( 'st_sub_patterncolor', '' ); //フリーボックスウィジェットの背景色※
        $freebox_textcolor = get_theme_mod( 'st_freebox_textcolor', '' ); //フリーボックスウィジェットのテキスト色

	//スマートフォンサイズ
        $menu_sumartmenutextcolor = get_theme_mod( 'st_menu_sumartmenutextcolor', '' ); //スマホメニュー
        $menu_sumart_bg_color = get_theme_mod( 'st_key_patterncolor', '' ); //スマホメニュー背景色※
        $menu_sumartcolor = get_theme_mod( 'st_main_patterncolor', '' ); //スマホwebアイコン※

}else{

        $st_top_bordercolor = get_theme_mod( 'st_top_bordercolor', '' ); //サイト上部にボーダー
        $st_line100 = get_theme_mod( 'st_line100', '' ); //サイト上部ボーダーを100%に
        $st_line_height = get_theme_mod( 'st_line_height', '5px' ); //サイト上部ボーダーの高さ

        $st_wrapper_bgcolor = get_theme_mod( 'st_wrapper_bgcolor', '' ); //Wrapperの背景色

        $menu_logocolor = get_theme_mod( 'st_menu_logocolor', '#1a1a1a' ); //サイトタイトル及びディスクリプション色

        $menu_maincolor = get_theme_mod( 'st_menu_maincolor', '#fff' ); //コンテンツ背景色
        $menu_main_bordercolor = get_theme_mod( 'st_menu_main_bordercolor', '' ); //コンテンツボーダー色
        $st_main_opacity = get_theme_mod( 'st_main_opacity', '' ); //メインコンテンツ背景の透過

        //一括カラー
        $st_main_textcolor = get_theme_mod( 'st_main_textcolor', '#000' ); //記事の文字色
        $st_side_textcolor = get_theme_mod( 'st_side_textcolor', '' ); //サイドバーの文字色
        $st_link_textcolor = get_theme_mod( 'st_link_textcolor', '#333' ); //記事のリンク色
        $st_link_hovertextcolor = get_theme_mod( 'st_link_hovertextcolor', '#333' ); //記事のリンクマウスオーバー色

        $st_footer_bg_text_color = get_theme_mod( 'st_footer_bg_text_color', '#000' ); //フッターテキスト色

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
        $menu_bgcolor = get_theme_mod( 'st_menu_bgcolor', '' ); //h2の背景色
        $st_h2border_color = get_theme_mod( 'st_h2border_color', '' ); //h2のボーダー色
        $st_h2_design = get_theme_mod( 'st_h2_design', '' ); //h2デザインの変更

        $menu_h3bgcolor = get_theme_mod( 'st_menu_h3bgcolor', '' ); //h3の背景色
        $menu_h3textcolor = get_theme_mod( 'st_menu_h3textcolor', '#000' ); //h3のテキスト色
        $st_h3_design = get_theme_mod( 'st_h3_design', '' ); //h3デザインの変更

        $st_menu_h4_textcolor = get_theme_mod( 'st_menu_h4_textcolor', '#000' ); //h4の文字色
        $menu_h4bgcolor = get_theme_mod( 'st_menu_h4bgcolor', '' ); //h4の背景色

        $st_blockquote_color = get_theme_mod( 'st_blockquote_color', '#f3f3f3' ); //引用部分の背景色

        $menu_separator_color = get_theme_mod( 'st_separator_color', '#f3f3f3' ); //NEW ENTRYのテキスト色
        $menu_separator_bgcolor = get_theme_mod( 'st_separator_bgcolor', '#1a1a1a' ); //NEW ENTRYの背景色

        $st_catbg_color = get_theme_mod( 'st_catbg_color', '#f3f3f3' ); //カテゴリの背景色
        $st_cattext_color = get_theme_mod( 'st_cattext_color', '#000' ); //カテゴリのテキスト色

	//お知らせ
        $menu_news_datecolor = get_theme_mod( 'st_news_datecolor', '#727272' ); //お知らせ日付のテキスト色
        $menu_news_text_color = get_theme_mod( 'st_news_text_color', '#000' ); //お知らせのテキストと下線色
        $menu_newsbarcolor_t = get_theme_mod( 'st_menu_newsbarcolor_t', '' ); //お知らせの背景色上
        $menu_newsbarcolor = get_theme_mod( 'st_menu_newsbarcolor', '' ); //お知らせの背景色下
        $menu_newsbarbordercolor = get_theme_mod( 'st_menu_newsbar_border_color', '' ); //お知らせのボーダー色
        $menu_newsbartextcolor = get_theme_mod( 'st_menu_newsbartextcolor', '#000' ); //お知らせのテキスト色

	//メニュー
        $menu_navbar_topunder_color = get_theme_mod( 'st_menu_navbar_topunder_color', '' ); //メニューの上下ボーダー色
        $menu_navbar_side_color = get_theme_mod( 'st_menu_navbar_side_color', '' ); //メニューの左右ボーダー色
        $menu_navbar_right_color = get_theme_mod( 'st_menu_navbar_right_color', '' ); //メニューの右ボーダー色
        $menu_navbarcolor = get_theme_mod( 'st_menu_navbarcolor', '' ); //メニューの背景色下
        $menu_navbarcolor_t = get_theme_mod( 'st_menu_navbarcolor_t', '' ); //メニューの背景色上
        $menu_navbartextcolor = get_theme_mod( 'st_menu_navbartextcolor', '#000' ); //PCメニューテキスト色

        $menu_navbar_undercolor = get_theme_mod( 'st_menu_navbar_undercolor', '#f3f3f3' ); //PCドロップダウン下層メニュー背景

	//サイドメニュー
        $st_menu_icon = get_theme_mod( 'st_menu_icon', '' ); //メニュー第一階層のWebアイコン
        $st_undermenu_icon = get_theme_mod( 'st_undermenu_icon', '' ); //メニュー第二階層のWebアイコン

        $menu_pagelist_childtextcolor = get_theme_mod( 'st_menu_pagelist_childtextcolor', '#000' ); //サイドメニュー下層のテキスト色
        $menu_pagelist_bgcolor = get_theme_mod( 'st_menu_pagelist_bgcolor', '#f3f3f3' ); //サイドメニュー下層の背景色
        $menu_pagelist_childtext_border_color = get_theme_mod( 'st_menu_pagelist_childtext_border_color', '#ccc' ); //サイドメニュー下層の下線色

        $menu_h4sidetextcolor = get_theme_mod( 'st_menu_h4sidetextcolor', '#000' ); //サイドバー見出し
        $st_tagcloud_color = get_theme_mod( 'st_tagcloud_color', '#1a1a1a' ); //タグクラウド色
        $menu_rsscolor = get_theme_mod( 'st_rss_color', '#87BF31' ); //RSSボタン

        $st_sns_btn = get_theme_mod( 'st_sns_btn', '' ); //SNSボタン背景
        $st_sns_btntext = get_theme_mod( 'st_sns_btntext', '' ); //SNSボタンテキスト

        $st_formbtn_textcolor = get_theme_mod( 'st_formbtn_textcolor', '#fff' ); //ウィジェット問合せフォームのテキスト色
        $st_formbtn_bgcolor = get_theme_mod( 'st_formbtn_bgcolor', '#616161' ); //ウィジェット問合せフォームの背景色

        $st_formbtn2_textcolor = get_theme_mod( 'st_formbtn2_textcolor', '#fff' ); //ウィジェッオリジナルボタンのテキスト色
        $st_formbtn2_bgcolor = get_theme_mod( 'st_formbtn2_bgcolor', '#616161' ); //ウィジェッオリジナルボタンの背景色

        $st_contactform7btn_textcolor = get_theme_mod( 'st_contactform7btn_textcolor', '#000' ); //コンタクトフォーム7の送信ボタンテキスト色
        $st_contactform7btn_bgcolor = get_theme_mod( 'st_contactform7btn_bgcolor', '#f3f3f3' ); //コンタクトフォーム7の送信ボタンの背景色

        //任意記事
        $menu_osusumemidasitextcolor = get_theme_mod( 'st_menu_osusumemidasitextcolor', '#fff' ); //任意記事の見出しテキスト色
        $menu_osusumemidasicolor = get_theme_mod( 'st_menu_osusumemidasicolor', '#FEB20A' ); //任意記事の見出し背景色
        $menu_osusumemidasinocolor = get_theme_mod( 'st_menu_osusumemidasinocolor', '#fff' ); //任意記事のナンバー色
        $menu_osusumemidasinobgcolor = get_theme_mod( 'st_menu_osusumemidasinobgcolor', '#FEB20A' ); //任意記事のナンバー背景色
        $menu_popbox_color = get_theme_mod( 'st_menu_popbox_color', '#f3f3f3' ); //任意記事の背景色
        $menu_popbox_textcolor = get_theme_mod( 'st_menu_popbox_textcolor', '' ); //任意記事のテキスト色
        $st_nohidden = get_theme_mod( 'st_nohidden', '' ); //任意記事のナンバー削除

	//フリーボックスウィジェット
        $freebox_tittle_textcolor = get_theme_mod( 'st_freebox_tittle_textcolor', '#fff' ); //フリーボックスウィジェットの見出しテキスト色
        $freebox_tittle_color = get_theme_mod( 'st_freebox_tittle_color', '#FEB20A' ); //フリーボックスウィジェットの見出背景色
        $freebox_color = get_theme_mod( 'st_freebox_color', '#f3f3f3' ); //フリーボックスウィジェットの背景色
        $freebox_textcolor = get_theme_mod( 'st_freebox_textcolor', '' ); //フリーボックスウィジェットのテキスト色

	//スマートフォンサイズ
        $menu_sumartmenutextcolor = get_theme_mod( 'st_menu_sumartmenutextcolor', '#000' ); //スマホメニュー
        $menu_sumart_bg_color = get_theme_mod( 'st_menu_sumart_bg_color', '#000' ); //スマホメニュー背景色
        $menu_sumartcolor = get_theme_mod( 'st_menu_sumartcolor', '#616161' ); //スマホwebアイコン

}