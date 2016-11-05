<?php

// 直接アクセスを禁止
if ( !defined( 'ABSPATH' ) ) {
     exit;
}

// 管理画面ページ

$stdata1 = get_option( 'st-data1' );
$stdata2 = get_option( 'st-data2' );
$stdata3 = get_option( 'st-data3' );
$stdata4 = get_option( 'st-data4' );
$stdata5 = get_option( 'st-data5' ); //サムネイルの有無
$stdata6 = get_option( 'st-data6' );
$stdata7 = get_option( 'st-data7' );
$stdata8 = get_option( 'st-data8' );
$stdata9 = get_option( 'st-data9' );
$stdata10 = get_option( 'st-data10' );
$stdata11 = get_option( 'st-data11' );
$stdata12 = get_option( 'st-data12' );
$stdata13 = get_option( 'st-data13' );
$stdata14 = get_option( 'st-data14' );
$stdata15 = get_option( 'st-data15' ); //カテゴリーのindex
//$stdata16 = get_option( 'st-data16' ); //RSSボタン
$stdata17 = get_option( 'st-data17' ); //著者情報
$stdata18 = get_option( 'st-data18' ); //下層ページのヘッダー
$stdata19 = get_option( 'st-data19' ); //投稿記事のテキスト選択
$stdata20 = get_option( 'st-data20' ); //お知らせ欄
$stdata21 = get_option( 'st-data21' ); //お知らせ欄カテゴリID
$stdata22 = get_option( 'st-data22' ); //お知らせ欄表示件数
$stdata23 = get_option( 'st-data23' ); //アクセス解析タグ
$stdata24 = get_option( 'st-data24' ); //隠すクラス
$stdata25 = get_option( 'st-data25' ); //Twitterアカウント
$stdata26 = get_option( 'st-data26' ); //ファビコンURL
$stdata27 = get_option( 'st-data27' ); //appletouchicon
$stdata28 = get_option( 'st-data28' ); //お知らせに表示するカテゴリID
//$stdata29 = get_option( 'st-data29' ); //ヘッダー画像をワイドに
$stdata30 = get_option( 'st-data30' ); //ヘッダー画像をスライドショーで表示
$stdata31 = get_option( 'st-data31', 'fade' ); //スライドショーの表示方法 (fade, rtl, ltr)
$stdata32 = get_option( 'st-data32', 5000 ); //スライドショーのスピード
$stdata33 = get_option( 'st-data33' ); //タイトル
$stdata34 = get_option( 'st-data34' ); //メタディスクリプション
$stdata35 = get_option( 'st-data35' ); //メニューを非表示
$stdata36 = get_option( 'st-data36' ); //投稿の関連記事を非表示
$stdata37 = get_option( 'st-data37' ); //任意の記事一覧
$stdata38 = get_option( 'st-data38' ); //任意の記事一覧の見出し
$stdata39 = get_option( 'st-data39' ); //任意の記事一覧をスクロールバーに表示
$stdata40 = get_option( 'st-data40' ); //任意の記事一覧を投稿の記事下に表示
$stdata41 = get_option( 'st-data41' ); //任意の記事一覧を固定記事の記事下に表示
$stdata42 = get_option( 'st-data42' ); //電話番号
$stdata43 = get_option( 'st-data43' ); //ヘッダーにリンク追加の有無
$stdata44 = get_option( 'st-data44' ); //トップの新着を非表示
$stdata45 = get_option( 'st-data45' ); //ウィジェットにショートコード
$stdata46 = get_option( 'st-data46' ); //メタキーワード
$stdata47 = get_option( 'st-data47' ); //自動更新停止
$stdata48 = get_option( 'st-data48' ); //サムネイルを丸に
$stdata49 = get_option( 'st-data49' ); //Webフォント選択
$stdata50 = get_option( 'st-data50' ); //fb:admins
$stdata51 = get_option( 'st-data51' ); //Facebookpage
$stdata52 = get_option( 'st-data52' ); //ヘッダーを100%に
$stdata53 = get_option( 'st-data53' ); //アイキャッチ画像を挿入
$stdata54 = get_option( 'st-data54' ); //任意の記事一覧をトップの上部に表示
$stdata55 = get_option( 'st-data55' ); //旧式のナビに変更
$stdata56 = get_option( 'st-data56' ); //関連記事数
$stdata57 = get_option( 'st-data57' ); //トップにも新着を表示する
$stdata58 = get_option( 'st-data58' ); //RSSフィードを配信しない
$stdata59 = get_option( 'st-data59' ); //任意の記事一覧をトップの記事下に表示
$stdata60 = get_option( 'st-data60' ); //投稿記事タイトル上のカテゴリの非表示
$stdata61 = get_option( 'st-data61' ); //固定記事パーマリンクにhtml付与
$stdata62 = get_option( 'st-data62' ); //ヘッダータイトルの高さ変更
$stdata63 = get_option( 'st-data63' ); //関連記事一覧の見出し
$stdata64 = get_option( 'st-data64' ); //ページ内スクロール
$stdata65 = get_option( 'st-data65' ); //リセット警告
$stdata66 = get_option( 'st-data66' ); //新着記事の文字
$stdata67 = get_option( 'st-data67' ); //新着記事の表示件数
$stdata68 = get_option( 'st-data68' ); //カスタマイザーの基本カラー設定
$stdata69 = get_option( 'st-data69' ); //固定ページにSNS

//リセットした場合に再登録
if( trim( $stdata32 ) === '' ){
	$stdata32 = 5000;
}

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
     add_menu_page(
          __( 'STINGER 管理', 'my-custom-admin' ),
          __( 'STINGER 管理', 'my-custom-admin' ),
          'manage_options',
          'my-custom-admin',
          'my_custom_admin'
     );

     add_submenu_page(
	  'my-custom-admin',
          __( 'STINGER 管理リセット', 'my-custom-admin' ),
          __( 'STINGER 管理リセット', 'my-custom-admin' ),
          'manage_options',
          'my-submenu',
          'my_submenu'
     );
}

// 基本管理画面
function my_custom_admin() {
     ?>

     <div class="wrap">
          <h2 style="margin-bottom:20px">STINGER PLUS 基本管理画面</h2>

          <form id="my-main-form" method="post" action="">
               <?php wp_nonce_field( 'my-nonce-key', 'my-custom-admin' ); ?>

		<?php if( $GLOBALS["stdata65"] !== 'yes'){ ?>
			<p>※最初にテーマを設定した時や表示がおかしい時は「STINGER 管理リセット」を行ってください　
			<input type="checkbox" name="st-data65" value="yes" <?php if ( $GLOBALS["stdata65"] === 'yes' ) {
			echo 'checked';
			} ?>>
                    注意書きを今後表示しない</p>
		<?php }else{ ?>
			<input type="hidden" name="st-data65" value="yes" >
		<?php } ?>

			<div class="st-mokuzi">
			<h3 id="mokuzi"><i class="fa fa-book" aria-hidden="true"></i>目次</h3>
			<ul class="st-mokuzi-l">
				<li><a href="#layout-m"><i class="fa fa-desktop"></i>デザイン・レイアウト関連設定</a></li>
					<ol>
						<li>Googleフォント</li>
						<li> ヘッダー設定</li>
						<li>NEWS（お知らせ）の表示</li>
						<li> アイコン・ファビコン設定</li>
					</ol>
				<li><a href="#top-m"><i class="fa fa-home"></i>トップページのレイアウト設定</a></li>
					<ol>
						<li>固定記事挿入</li>
						<li>カラム数変更</li>
					</ol>
				<li><a href="#toukou-m"><i class="fa fa-pencil-square" aria-hidden="true"></i>投稿・固定記事設定</a></li>
					<ol>
						<li>投稿一覧（サムネイル表示など）</li>
					</ol>
				<li><a href="#header-m"><i class="fa fa-picture-o" aria-hidden="true"></i>ヘッダー画像とグローバルメニュー</a></li>
					<ol>
						<li>スライドショー</li>
						<li>PC用グランドメニュー</li>
					</ol>
				<li><a href="#recommend-m"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>おすすめ記事一覧の作成</a></li>
			</ul>

			<ul class="st-mokuzi-r">
				<li><a href="#sns-m"><i class="fa fa-share-alt" aria-hidden="true"></i>SNS設定</a></li>
					<ol>
						<li>OGP設定</li>
						<li>Twitter設定</li>
					</ol>
				<li><a href="#rss-m"><i class="fa fa-rss-square" aria-hidden="true"></i>RSS設定</a></li>
				<li><a href="#seo-m"><i class="fa fa-line-chart"></i>SEO関連設定</a></li>
					<ol>
						<li>タイトル設定</li>
						<li>メタキーワード</li>
						<li>メタディスクリプション</li>
						<li>その他</li>
					</ol>
				<li><a href="#google-m"><i class="fa fa-google"></i>Google連携に関する設定</a></li>
					<ol>
						<li>アナリティクスコード</li>
						<li>サーチコンソールHTMLタグ</li>
						<li>その他のアクセス解析</li>
					</ol>

<li style="">
<a href="//twitter.com/intent/tweet?button_hashtag=stingerplus" class="twitter-hashtag-button" data-size="large" data-related="WPSTINGER" data-url="">Tweet #stingerplus</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><br/>感想をシェアしてくれると喜びます
</li>
			</ul>


			<div style="clear:both;"></div>
			</div>

<hr/>
               <p>
                    <input type="submit" value="<?php echo esc_attr( __( 'save',
                         'my-custom-admin' ) ); ?>" class="button button-primary button-large">
               </p>

               <h3 id="layout-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-desktop"></i>デザイン・レイアウト関連設定</h3>

		<p>
			<input onclick="checkcolor(this,'colorchice')" type="checkbox" name="st-data1" value="yes" <?php if ( $GLOBALS["stdata1"] === 'yes' ) {
				echo 'checked';
			} ?>>
                    オリジナルテーマカスタマイザーを使用する（「外観」＞「テーマ」にて基本カラーを選択できます）</p>
		<p>

		<div id="colorchice">
		<p>カスタマイザーのデフォルトカラーセット※上記「カスタマイザーを使用する」をONにして利用して下さい</p>
               <p>
                    <input type="radio" name="st-data68" value="" <?php if ( $GLOBALS["stdata68"] === '' ) {
                         echo 'checked';
                    } ?>>
                    デフォルト（未設定トップページのレイアウト）
                    <input type="radio" name="st-data68" value="red" <?php if ( $GLOBALS["stdata68"] === 'red' ) {
                         echo 'checked';
                    } ?>>
                    赤（エレガント）
                    <input type="radio" name="st-data68" value="blue" <?php if ( $GLOBALS["stdata68"] === 'blue' ) {
                         echo 'checked';
                    } ?>>
                    青（ビジネス）
                    <input type="radio" name="st-data68" value="green" <?php if ( $GLOBALS["stdata68"] === 'green' ) {
                         echo 'checked';
                    } ?>>
                    緑（ナチュラル）
                    <input type="radio" name="st-data68" value="orange" <?php if ( $GLOBALS["stdata68"] === 'orange' ) {
                         echo 'checked';
                    } ?>>
		    オレンジ（元気）
                    <input type="radio" name="st-data68" value="pink" <?php if ( $GLOBALS["stdata68"] === 'pink' ) {
                         echo 'checked';
                    } ?>>
                    ピンク（可愛い）
                    <input type="radio" name="st-data68" value="glay" <?php if ( $GLOBALS["stdata68"] === 'glay' ) {
                         echo 'checked';
                    } ?>>
                    グレー（ダーク）

		</p>
		<p>※すでに変更済みのカラーは「色を選択」＞「デフォルト」で選択できます</p>
		</div>


			<input type="checkbox" name="st-data45" value="yes" <?php if ( $GLOBALS["stdata45"] === 'yes' ) {
				echo 'checked';
			} ?>>
                    ウィジェットにショートコードを使用する</p>

               <p>
                    <input type="checkbox" name="st-data64" value="yes" <?php if ( $GLOBALS["stdata64"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    ページ内スムーススクロールを使用する</p>

		<h3 id="top-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-home"></i>トップページのレイアウト</h3>

               <P>トップページに固定記事を挿入（記事ID）：
                    <input type="number" name="st-data9" value="<?php echo esc_attr( $GLOBALS["stdata9"] ); ?>" placeholder="2">
               </p>

               <p>
                    <input type="radio" name="st-data11" value="yes" <?php if ( $GLOBALS["stdata11"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    トップページを1カラムにする <br />
                    <input type="radio" name="st-data11" value="lp" <?php if ( $GLOBALS["stdata11"] === 'lp' ) {
                         echo 'checked';
                    } ?>>
                    トップページをLP化する<br />
                    <input type="radio" name="st-data11" value="" <?php if ( $GLOBALS["stdata11"] === '' ) {
                         echo 'checked';
                    } ?>>
                    トップページのレイアウトをリセットする</p>

               <h4><i class="fa fa-font"></i>英数字のGoogleフォント</h4>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=PT+Sans+Caption' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Meddon' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<p>タイトルや各見出しなどに反映されます。反映箇所はstyle.cssで修正できます</p>
               <p style="font-size:15px;line-height:25px;">
                    <input type="radio" name="st-data49" value="ptsans" <?php if ( $GLOBALS["stdata49"] === 'ptsans' ) {
                         echo 'checked';
                    } ?>>
                    PT Sans Caption（例：「<span style="font-family: PT Sans Caption">1234567890HappyBirthday!</span>」※デフォルト <br />

                    <input type="radio" name="st-data49" value="josefin" <?php if ( $GLOBALS["stdata49"] === 'josefin' ) {
                         echo 'checked';
                    } ?>>
                    Josefin Sans（例：「<span style="font-family: Josefin Sans">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="julius" <?php if ( $GLOBALS["stdata49"] === 'julius' ) {
                         echo 'checked';
                    } ?>>
                    Julius Sans One（例：「<span style="font-family: Julius Sans One">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="montserrat" <?php if ( $GLOBALS["stdata49"] === 'montserrat' ) {
                         echo 'checked';
                    } ?>>
                    Montserrat（例：「<span style="font-family: Montserrat">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="meddon" <?php if ( $GLOBALS["stdata49"] === 'meddon' ) {
                         echo 'checked';
                    } ?>>
                    Meddon（例：「<span style="font-family: Meddon">1234567890HappyBirthday!</span>」※スマホ時のSNSテキストが崩れるのでCSS調整が必要<br />

                    <input type="radio" name="st-data49" value="lobster" <?php if ( $GLOBALS["stdata49"] === 'lobster' ) {
                         echo 'checked';
                    } ?>>
                    Lobster（例：「<span style="font-family: Lobster">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="pacifico" <?php if ( $GLOBALS["stdata49"] === 'pacifico' ) {
                         echo 'checked';
                    } ?>>
                    Pacifico（例：「<span style="font-family: Pacifico">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="bilbo" <?php if ( $GLOBALS["stdata49"] === 'bilbo' ) {
                         echo 'checked';
                    } ?>>
                    Bilbo Swash Caps（例：「<span style="font-family: Bilbo Swash Caps">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="fredericka" <?php if ( $GLOBALS["stdata49"] === 'fredericka' ) {
                         echo 'checked';
                    } ?>>
                    Fredericka the Great（例：「<span style="font-family: Fredericka the Great">1234567890HappyBirthday!</span>」<br />

                    <input type="radio" name="st-data49" value="" <?php if ( $GLOBALS["stdata49"] === '' ) {
                         echo 'checked';
                    } ?>>
                    何も設定しない</p>

<h4><i class="fa fa-eye-slash"></i>ヘッダー設定</h4>

               <p>
                    <input type="checkbox" name="st-data52" value="yes" <?php if ( $GLOBALS["stdata52"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    ヘッダーを分割しない（タイトルなどが改行されません）</p>

               <p>
                    <input type="checkbox" name="st-data43" value="yes" <?php if ( $GLOBALS["stdata43"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    ヘッダー上部にフッター用リンクを追加する</p>




               <P>ヘッダーとフッターに電話番号を追加する<br/>
		<input type="text" placeholder="0120-222-3333" name="st-data42" size="30" value="<?php echo esc_attr( $GLOBALS["stdata42"] ); ?>" >例）000-222-3333
               </p>

	<h4><i class="fa fa-rss-square"></i>NEWS（お知らせ）の表示</h4>

               <p>
                    <input type="checkbox" name="st-data20" value="yes" <?php if ( $GLOBALS["stdata20"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                   お知らせをTOPページの一番上に表示する</p>

               <p>

               <P>お知らせタイトルバーに表示する文字：
                    <input type="text" name="st-data28" value="<?php echo esc_attr( $GLOBALS["stdata28"] ); ?>" size="30" placeholder="お知らせ" />
		<br/>※お知らせのタイトルバーに表示したい文字を記入して下さい。現在は<b>「
			<?php if ( trim( $GLOBALS["stdata28"] ) !== '' ) {
				$catname = esc_html( $GLOBALS["stdata28"] );
			}else{
				$catname = 'お知らせ';
				}
			echo $catname;
			?>
		」</b>です。
               </p>

               <P>お知らせに表示するカテゴリ（カテゴリID※デフォルトは「0（全て）」）：
                    <input type="text" pattern="^[0-9,]+$" name="st-data21" value="<?php echo esc_attr( $GLOBALS["stdata21"] ); ?>" placeholder="1,3,5"><br/>複数指定する場合は半角カンマ「,」で区切ってください
               </p>

               <P>お知らせに表示する件数：
                    <input type="number" name="st-data22" value="<?php echo esc_attr( $GLOBALS["stdata22"] ); ?>" placeholder="5">
               </p>

<h4><i class="fa fa-eye"></i>アイコン・ファビコン設定</h4>
		
<p>メディアより画像をアップロードして「ファイルのURL」を記入して下さい。（例：http://example.com/wp-content/uploads/2015/11/favicon.ico ）</p>
		<?php if ( empty( $GLOBALS["stdata26"] ) ) {
                    echo '<P>ファビコン画像のURL：<input type="text" name="st-data26" value="" size="30" style="ime-mode:disabled;" placeholder="http://example.com/hoge.ico">&nbsp;※16×16px、32×32pxのマルチアイコンが推奨されます</p>';
               } else {
                    echo '<p>現在のファビコン※32pxで表示<br/><img src="' . esc_url( ( $GLOBALS["stdata26"] ) ) . '" width="32px"></p>';
                    echo '<input type="checkbox" name="stdata26kesi" value="yes">' . '削除';
               }
               ?>

		<?php if ( empty( $GLOBALS["stdata27"] ) ) {
                    echo '<P><i class="fa fa-apple"></i>apple-touch-icon画像のURL：<input type="text" name="st-data27" value="" size="30" style="ime-mode:disabled;" placeholder="http://example.com/hoge.png">&nbsp;※png形式 152px以上推奨</p>';
               } else {
                    echo '<p><i class="fa fa-apple"></i>現在のapple-touch-icon※74pxで表示<br/><img src="' . esc_url( ( $GLOBALS["stdata27"] ) ) . '" width="74px"></p>';
                    echo '<input type="checkbox" name="stdata27kesi" value="yes">' . '削除';
               }
               ?>

<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>

<h3 id="toukou-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-pencil-square" aria-hidden="true"></i>投稿・固定記事設定</h3>


		<p>
			<input type="checkbox" name="st-data53" value="yes" <?php if ( $GLOBALS["stdata53"] === 'yes' ) {
				echo 'checked';
			} ?>>
                    投稿記事最上部にアイキャッチ画像を表示する</p>

               <p>
                    <input type="checkbox" name="st-data60" value="yes" <?php if ( $GLOBALS["stdata60"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    記事タイトル上のカテゴリを非表示にする</p>

               <p>
                    <input type="checkbox" name="st-data24" value="yes" <?php if ( $GLOBALS["stdata24"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    投稿に「投稿日」「更新日」を表示しない</p>


               <p>
                    <input type="checkbox" name="st-data6" value="yes" <?php if ( $GLOBALS["stdata6"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    コメント欄を非表示にする</p>

               <p>
                    <input type="checkbox" name="st-data17" value="yes" <?php if ( $GLOBALS["stdata17"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    著者情報を表示する</p>

               <p>
                    <input type="checkbox" name="st-data10" value="yes" <?php if ( $GLOBALS["stdata10"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    固定ページに子ページへのリンクを表示</p>

               <p>
                    <input type="checkbox" name="st-data3" value="yes" <?php if ( $GLOBALS["stdata3"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    H3タグにチェックマークを適応する</p>

<h4><i class="fa fa-th-list"></i>投稿一覧</h4>

               <p>
                    <input type="checkbox" name="st-data48" value="yes" <?php if ( $GLOBALS["stdata48"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                   一覧のサムネイルを丸くする</p>


               <p>
                    <input type="checkbox" name="st-data5" value="yes" <?php if ( $GLOBALS["stdata5"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                   一覧のサムネイルを表示しない</p>

               <p>

		<h5 class="sth5">新着記事</h5>

               <P>新着記事一覧に表示する見出し（15文字以内)：
                    <input type="text" name="st-data66" value="<?php echo esc_attr( $GLOBALS["stdata66"] ); ?>" size="30" placeholder="15文字以内" maxlength='15'/>
					<br/>※新着記事一覧の見出しに表示したい文字を記入して下さい。現在は<b>「
			<?php if ( trim( $GLOBALS["stdata66"] ) !== '' ) {
				$kanren_name = esc_html( $GLOBALS["stdata66"] );
			}else{
				$kanren_name = 'NEW ENTRY';
				}
			echo $kanren_name;
			?>
		」</b>です。
               </p>

               <P>新着記事に表示する件数（サイドバー）：
                    <input type="number" name="st-data67" value="<?php echo esc_attr( $GLOBALS["stdata67"] ); ?>" placeholder="5">
               </p>


               <p>
                    <input type="checkbox" name="st-data44" value="yes" <?php if ( $GLOBALS["stdata44"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    トップページのコンテンツ内の新着記事一覧を非表示にする</p>

               <p>
                    <input type="checkbox" name="st-data13" value="yes" <?php if ( $GLOBALS["stdata13"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    下層ページのサイドバーの新着記事一覧を非表示にする</p>

               <p>
                    <input type="checkbox" name="st-data57" value="yes" <?php if ( $GLOBALS["stdata57"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    トップページのサイドバーの新着記事一覧を非表示にする</p>

		<h5 class="sth5">関連記事</h5>

               <P>関連記事一覧に表示する見出し（※15文字以内）：
                    <input type="text" name="st-data63" value="<?php echo esc_attr( $GLOBALS["stdata63"] ); ?>" size="30" placeholder="15文字以内" maxlength='15'/>
					<br/>※おすすめ記事一覧の見出しに表示したい文字を記入して下さい。現在は<b>「
			<?php if ( trim( $GLOBALS["stdata63"] ) !== '' ) {
				$kanren_name = esc_html( $GLOBALS["stdata63"] );
			}else{
				$kanren_name = '関連記事';
				}
			echo $kanren_name;
			?>
		」</b>です。
               </p>

               <P>関連記事に表示する件数：
                    <input type="number" name="st-data56" value="<?php echo esc_attr( $GLOBALS["stdata56"] ); ?>" placeholder="5">
               </p>

               <p>
                    <input type="checkbox" name="st-data36" value="yes" <?php if ( $GLOBALS["stdata36"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    投稿の関連記事を非表示にする</p>



<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>
<h3 id="header-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-picture-o"></i>ヘッダー画像とグローバルメニュー</h3>

               <P>ヘッダー画像の高さ（デフォルトは400）：
                    <input type="number" name="st-data62" value="<?php echo esc_attr( $GLOBALS["stdata62"] ); ?>" placeholder="400">px
               </p>

               <p>

		<h4><i class="fa fa-youtube-play"></i>スライドショー設定</h4>

               <p>
                    <input type="checkbox" name="st-data30" value="yes" <?php if ( $GLOBALS["stdata30"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    ヘッダー画像をスライドショーで表示する
               <p>
               <p>
                    スライドショーの表方法:
                    <label><input type="radio" name="st-data31" value="fade" <?php checked( 'fade', $GLOBALS["stdata31"] ); ?>> フェードイン・アウト</label>&nbsp;
                    <label><input type="radio" name="st-data31" value="rtl" <?php checked( 'rtl', $GLOBALS["stdata31"] ); ?>> 右から左</label>&nbsp;
                    <label><input type="radio" name="st-data31" value="ltr" <?php checked( 'ltr', $GLOBALS["stdata31"] ); ?>> 左から右</label>&nbsp;
               <p>
               <p>
                    スライドショーの表示速度:
                    <input type="text" name="st-data32" size="4" value="<?php echo (int) $GLOBALS["stdata32"]; ?>"> ミリ秒
               <p>

               <p>
                    <input type="checkbox" name="st-data18" value="yes" <?php if ( $GLOBALS["stdata18"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    下層ページにもヘッダー画像を表示する</p>

               <h4><i class="fa fa-bars"></i>PC用メインメニュー</h4>


               <p>
                    <input type="radio" name="st-data35" value="on" <?php if ( $GLOBALS["stdata35"] === 'on' ) {
                         echo 'checked';
                    } ?>>
                    PC用メインメニューを上に表示する <br />
                    <input type="radio" name="st-data35" value="" <?php if ( $GLOBALS["stdata35"] === '' ) {
                         echo 'checked';
                    } ?>>
                    PC用メインメニューを下に表示する（デフォルト） <br />
                    <input type="radio" name="st-data35" value="kesu" <?php if ( $GLOBALS["stdata35"] === 'kesu' ) {
                         echo 'checked';
                    } ?>>
                    PC用メインメニューを表示しない</p>

               <p>
                    <input type="checkbox" name="st-data55" value="yes" <?php if ( $GLOBALS["stdata55"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    旧式のナビを使用する※表示は第一層のみ</p>

<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>
               <h3 id="recommend-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-trophy"></i>おすすめ記事一覧の作成</h3>

               <P>おすすめ記事一覧に表示する文字（※15文字以内）：
                    <input type="text" name="st-data38" value="<?php echo esc_attr( $GLOBALS["stdata38"] ); ?>" size="30" placeholder="15文字以内" maxlength='15'/>
		　　<br/>※おすすめ記事一覧の見出しに表示したい文字を記入して下さい。現在は<b>「
			<?php if ( trim( $GLOBALS["stdata38"] ) !== '' ) {
				$pop_name = esc_html( $GLOBALS["stdata38"] );
			}else{
				$pop_name = '表示しない';
				}
			echo $pop_name;
			?>
		」</b>です。
               </p>

               <P>任意の人気記事を指定（投稿又は固定記事ID）：
                    <input type="text" pattern="^[0-9,]+$" name="st-data37" value="<?php echo esc_attr( $GLOBALS["stdata37"] ); ?>" style="ime-mode:disabled;" placeholder="1,3,5"><br/>複数指定する場合は半角カンマ「,」で区切ってください
               </p>

               <p>
                    <input type="checkbox" name="st-data39" value="yes" <?php if ( $GLOBALS["stdata39"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    サイドのスクロールに表示にする</p>
               <p>
                    <input type="checkbox" name="st-data40" value="yes" <?php if ( $GLOBALS["stdata40"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    投稿の記事下に表示にする</p>
               <p>
                    <input type="checkbox" name="st-data41" value="yes" <?php if ( $GLOBALS["stdata41"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    固定記事の下に表示にする</p>

               <p>
                    <input type="checkbox" name="st-data54" value="yes" <?php if ( $GLOBALS["stdata54"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    トップの最上部表示にする</p>

               <p>
                    <input type="checkbox" name="st-data59" value="yes" <?php if ( $GLOBALS["stdata59"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    トップの挿入固定記事下に表示にする</p>

			<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>
			<h3 id="sns-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-share-alt" aria-hidden="true"></i>SNS設定</h3>

		<p>
                    <input type="checkbox" name="st-data69" value="yes" <?php if ( $GLOBALS["stdata69"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    SNSボタンを固定ページでも表示する</p>

		<p>
                    <input type="checkbox" name="st-data12" value="yes" <?php if ( $GLOBALS["stdata12"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    SNSボタンを非表示にする</p>

			<h4><i class="fa fa-facebook-square" aria-hidden="true"></i>OGP設定</h4>

               <P>fb:admins：
                    <input type="number" name="st-data50" value="<?php echo esc_attr( $GLOBALS["stdata50"] ); ?>" >
               </p>
		<?php if ( empty( $GLOBALS["stdata51"] ) ) {
                    echo '<P>FacebookページのURL：<input type="text" name="st-data51" value="" size="30" style="ime-mode:disabled;" placeholder="https://www.facebook.com/example/"></p>';
               } else {
                    echo '<p>現在のFacebookページのURL：'. esc_url( $GLOBALS["stdata51"] ) . '</p>';
                    echo '<input type="checkbox" name="stdata51kesi" value="yes">' . '削除';
               }
               ?>
			<h4><i class="fa fa-twitter"></i>Twitter設定</h4>

		<?php if ( empty( $GLOBALS["stdata25"] ) ) {
                    echo '<P>Twitterアカウント@：<input type="text" name="st-data25" value="" size="30" style="ime-mode:disabled;"></p>';
               } else {
                    echo '<p><i class="fa fa-twitter"></i>現在のTwitterアカウント@：' . esc_attr( ( $GLOBALS["stdata25"] ) ) . '</p>';
                    echo '<input type="checkbox" name="stdata25kesi" value="yes">' . '削除';
               }
               ?>

		<p>「<a href="//ja.wordpress.org/plugins/sns-count-cache/" target="_blank">SNS Count Cacheプラグイン</a>」を利用するとソーシャルカウントが表示されます（※Twitterは出ません）</p>

		<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>
               <h3 id="rss-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-rss-square" aria-hidden="true"></i>RSS設定</h3>

               <p>
                    <input type="checkbox" name="st-data58" value="yes" <?php if ( $GLOBALS["stdata58"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    RSSフィードを配信しない</p>

		<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>
               <h3 id="seo-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-line-chart"></i>SEO関連設定</h3>

               <P>トップタイトルを書き替え（ここに記述したタイトルが優先されます）<br/>
                    <input type="text" name="st-data33" size="70" value="<?php echo esc_attr( $GLOBALS["stdata33"] ); ?>">
               </p>

               <P>トップ用のメタキーワード（複数ある場合は半角カンマ「,」で区切る）<br/>
                    <input type="text" placeholder="松,竹,梅" name="st-data46" size="70" value="<?php echo esc_attr( $GLOBALS["stdata46"] ); ?>">
               </p>

               <P>トップ用のメタディスクリプション<br/>
			<textarea style="width:100%" rows="4" type="text" name="st-data34" /><?php echo esc_attr( $GLOBALS["stdata34"] ); ?></textarea>
			
               </p>

               <p>
                    <input type="checkbox" name="st-data2" value="yes" <?php if ( $GLOBALS["stdata2"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    ヘッダーソースを自動で綺麗にしない（Head Cleaner使用の場合など）</p>

               <p>
                    <input type="checkbox" name="st-data15" value="yes" <?php if ( $GLOBALS["stdata15"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                   カテゴリーをindexしない</p>


               <p>
                    <input type="checkbox" name="st-data4" value="yes" <?php if ( $GLOBALS["stdata4"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    日本語パーマリンクを自動変換する<span style="color:#ff0000;">※更新時にURLが変更されます</span></p>

               <p>
                    <input type="checkbox" name="st-data61" value="yes" <?php if ( $GLOBALS["stdata61"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    固定記事パーマリンクにhtmlを付与する<span style="color:#ff0000;">※更新時にURLが変更されます（パーマリンク設定で変更を保存）</span></p>

               <p>
                    <input type="checkbox" name="st-data19" value="yes" <?php if ( $GLOBALS["stdata19"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    テキスト選択不可にする※100%コピーを禁止できるわけではありません（コンタクトフォームやコメントの入力ができなくなります。個々の設定で解除できます。）</p>

               <p>


               <h3 id="google-m" style="padding:10px;margin-bottom:10px;border:1px solid #ccc;background-color:#f3f3f3;"><i class="fa fa-google"></i>Google連携に関する設定</h3>
               <?php if ( empty( $GLOBALS["stdata7"] ) ) {
                    echo '<P>アナリティクスコード（トラッキング ID）：UA-<input type="text" placeholder="00000000-1" name="st-data7" value="" size="30" style="ime-mode:disabled;"></p>';
               } else {
                    echo '<p>現在のトラッキングID：UA-' . stripslashes( ( $GLOBALS["stdata7"] ) ) . '</p>';
                    echo '<input type="checkbox" name="stdata7kesi" value="yes">' . '削除';
               }
               ?>
               
		<?php if ( empty( $GLOBALS["stdata14"] ) ) {
                    echo '<P>サーチコンソールHTMLタグ：<input type="text" name="st-data14" value="" size="30" style="ime-mode:disabled;"></p>';
               } else {
                    echo '<p>現在のサーチコンソールHTMLタグ：' . stripslashes( ( $GLOBALS["stdata14"] ) ) . '</p>';
                    echo '<input type="checkbox" name="stdata14kesi" value="yes">' . '削除';
               }
               ?>

               <h4><i class="fa fa-bar-chart"></i>その他のアクセス解析</h4>

		<p>※こちらはβ版機能です。設置後は必ず自身でも御確認下さい</p>

               <p>

		<?php if ( empty( $GLOBALS["stdata23"] ) ) {
                    echo '<P>その他アクセス解析タグ（β）：<input type="text" name="st-data23" value="" size="30" style="ime-mode:disabled;"></p>';
               } else {
                    echo '<p>現在のアクセス解析タグ：' . stripslashes( ( $GLOBALS["stdata23"] ) ) . '</p>';
                    echo '<input type="checkbox" name="stdata23kesi" value="yes">' . '削除';
               }
               ?>

<p><a href="#mokuzi"><i class="fa fa-angle-double-up" aria-hidden="true"></i>目次に戻る</a></p>

		<hr/>

               <p>
                    <input type="checkbox" name="st-data47" value="yes" <?php if ( $GLOBALS["stdata47"] === 'yes' ) {
                         echo 'checked';
                    } ?>>
                    WordPressの自動更新を停止する<span style="color:#ff0000">※非推奨</span>（100%更新停止を保証するものではありません）</p>

               <p>
                    <input type="submit" value="<?php echo esc_attr( __( 'save',
                         'my-custom-admin' ) ); ?>" class="button button-primary button-large">
               </p>
          </form>
     </div>
<?php }

// サブ管理画面
function my_submenu() {
     ?>

     <div class="wrap">
          <h2>STINGER 基本管理リセット画面</h2>
           <form id="my-main-form" method="post" action="">
               <?php wp_nonce_field( 'my-nonce-key', 'my-custom-admin' ); ?>
			<p style="color:#ff0000">※テーマを初めてセットした時及び「STINGER管理画面」に不具合が生じた場合、こちらからリセットできます。</p>

               <p>
			<input type="checkbox" name="st-data-reset" value="yes" onclick="window.alert('※チェックを入れて保存するとSTINGER管理画面のアナリティクスコード等が全てリセットされます');">
                    全てリセットする</p>

             

               <p>
                    <input type="submit" value="<?php echo esc_attr( __( 'save',
                         'my-custom-admin' ) ); ?>" class="button button-primary button-large">
               </p>
          </form>
     </div>
<?php }

//データ保存

add_action( 'admin_init', 'my_admin_init' );

function my_admin_init() {
     if ( isset( $_POST['my-custom-admin'] ) && $_POST['my-custom-admin'] ) {
          if ( check_admin_referer( 'my-nonce-key', 'my-custom-admin' ) ) {
	  if ( isset( $_POST['st-data-reset'] ) && $_POST['st-data-reset'] === 'yes' ) {
		 //リセット処理
		for( $i = 1; $i < 70 ; $i++ ){
			$st_delete_no = 'st-data'.$i;
			update_option( $st_delete_no , '' );
		}

	}else{

               if ( isset( $_POST['st-data1'] ) && $_POST['st-data1'] ) {
                    update_option( 'st-data1', $_POST['st-data1'] );
               } else {
                    update_option( 'st-data1', '' );
               }

               if ( isset( $_POST['st-data2'] ) && $_POST['st-data2'] ) {
                    update_option( 'st-data2', $_POST['st-data2'] );
               } else {
                    update_option( 'st-data2', '' );
               }

               if ( isset( $_POST['st-data3'] ) && $_POST['st-data3'] ) {
                    update_option( 'st-data3', $_POST['st-data3'] );
               } else {
                    update_option( 'st-data3', '' );
               }

               if ( isset( $_POST['st-data4'] ) && $_POST['st-data4'] ) {
                    update_option( 'st-data4', $_POST['st-data4'] );
               } else {
                    update_option( 'st-data4', '' );
               }

               if ( isset( $_POST['st-data5'] ) && $_POST['st-data5'] ) {
                    update_option( 'st-data5', $_POST['st-data5'] );
               } else {
                    update_option( 'st-data5', '' );
               }

               if ( isset( $_POST['st-data6'] ) && $_POST['st-data6'] ) {
                    update_option( 'st-data6', $_POST['st-data6'] );
               } else {
                    update_option( 'st-data6', '' );
               }

               if ( isset( $_POST['st-data7'] ) && $_POST['st-data7'] ) {
                    update_option( 'st-data7', $_POST['st-data7'] );
               } else {
                    if ( isset( $_POST['stdata7kesi'] ) && $_POST['stdata7kesi'] === 'yes' ) {
                         update_option( 'st-data7', '' );
                    }
               }

               if ( isset( $_POST['st-data8'] ) && $_POST['st-data8'] ) {
                    update_option( 'st-data8', $_POST['st-data8'] );
               } else {
                    update_option( 'st-data8', '' );
               }

               if ( isset( $_POST['st-data9'] ) && $_POST['st-data9'] ) {
                    update_option( 'st-data9', $_POST['st-data9'] );
               } else {
                    update_option( 'st-data9', '' );
               }

               if ( isset( $_POST['st-data10'] ) && $_POST['st-data10'] ) {
                    update_option( 'st-data10', $_POST['st-data10'] );
               } else {
                    update_option( 'st-data10', '' );
               }

               if ( isset( $_POST['st-data11'] ) && $_POST['st-data11'] ) {
                    update_option( 'st-data11', $_POST['st-data11'] );
               } else {
                    update_option( 'st-data11', '' );
               }

               if ( isset( $_POST['st-data12'] ) && $_POST['st-data12'] ) {
                    update_option( 'st-data12', $_POST['st-data12'] );
               } else {
                    update_option( 'st-data12', '' );
               }

               if ( isset( $_POST['st-data13'] ) && $_POST['st-data13'] ) {
                    update_option( 'st-data13', $_POST['st-data13'] );
               } else {
                    update_option( 'st-data13', '' );
               }

               if ( isset( $_POST['st-data14'] ) && $_POST['st-data14'] ) {
                    update_option( 'st-data14', $_POST['st-data14'] );
               } else {
                    if ( isset( $_POST['stdata14kesi'] ) && $_POST['stdata14kesi'] === 'yes' ) {
                         update_option( 'st-data14', '' );
                    }
               }

               if ( isset( $_POST['st-data15'] ) && $_POST['st-data15'] ) {
                    update_option( 'st-data15', $_POST['st-data15'] );
               } else {
                    update_option( 'st-data15', '' );
               }

               if ( isset( $_POST['st-data16'] ) && $_POST['st-data16'] ) {
                    update_option( 'st-data16', $_POST['st-data16'] );
               } else {
                    update_option( 'st-data16', '' );
               }

               if ( isset( $_POST['st-data17'] ) && $_POST['st-data17'] ) {
                    update_option( 'st-data17', $_POST['st-data17'] );
               } else {
                    update_option( 'st-data17', '' );
               }

               if ( isset( $_POST['st-data18'] ) && $_POST['st-data18'] ) {
                    update_option( 'st-data18', $_POST['st-data18'] );
               } else {
                    update_option( 'st-data18', '' );
               }

               if ( isset( $_POST['st-data19'] ) && $_POST['st-data19'] ) {
                    update_option( 'st-data19', $_POST['st-data19'] );
               } else {
                    update_option( 'st-data19', '' );
               }

               if ( isset( $_POST['st-data20'] ) && $_POST['st-data20'] ) {
                    update_option( 'st-data20', $_POST['st-data20'] );
               } else {
                    update_option( 'st-data20', '' );
               }

               if ( isset( $_POST['st-data21'] ) && $_POST['st-data21'] ) {
                    update_option( 'st-data21', $_POST['st-data21'] );
               } else {
                    update_option( 'st-data21', '' );
               }

               if ( isset( $_POST['st-data22'] ) && $_POST['st-data22'] ) {
                    update_option( 'st-data22', $_POST['st-data22'] );
               } else {
                    update_option( 'st-data22', '' );
               }

               if ( isset( $_POST['st-data23'] ) && $_POST['st-data23'] ) {
                    update_option( 'st-data23', $_POST['st-data23'] );
               } else {
                    if ( isset( $_POST['stdata23kesi'] ) && $_POST['stdata23kesi'] === 'yes' ) {
                         update_option( 'st-data23', '' );
                    }
               }

               if ( isset( $_POST['st-data24'] ) && $_POST['st-data24'] ) {
                    update_option( 'st-data24', $_POST['st-data24'] );
               } else {
                    update_option( 'st-data24', '' );
               }

               if ( isset( $_POST['st-data25'] ) && $_POST['st-data25'] ) {
                    update_option( 'st-data25', $_POST['st-data25'] );
               } else {
                    if ( isset( $_POST['stdata25kesi'] ) && $_POST['stdata25kesi'] === 'yes' ) {
                         update_option( 'st-data25', '' );
                    }
               }

               if ( isset( $_POST['st-data26'] ) && $_POST['st-data26'] ) {
                    update_option( 'st-data26', $_POST['st-data26'] );
               } else {
                    if ( isset( $_POST['stdata26kesi'] ) && $_POST['stdata26kesi'] === 'yes' ) {
                         update_option( 'st-data26', '' );
                    }
               }

               if ( isset( $_POST['st-data27'] ) && $_POST['st-data27'] ) {
                    update_option( 'st-data27', $_POST['st-data27'] );
               } else {
                    if ( isset( $_POST['stdata27kesi'] ) && $_POST['stdata27kesi'] === 'yes' ) {
                         update_option( 'st-data27', '' );
                    }
               }

               if ( isset( $_POST['st-data28'] ) && $_POST['st-data28'] ) {
                    update_option( 'st-data28', $_POST['st-data28'] );
               } else {
                    update_option( 'st-data28', '' );
               }


               if ( isset( $_POST['st-data30'] ) && $_POST['st-data30'] ) {
                    update_option( 'st-data30', $_POST['st-data30'] );
               } else {
                    update_option( 'st-data30', '' );
               }

               if ( isset( $_POST['st-data31'] ) && $_POST['st-data31'] ) {
                    $slides_type = in_array( $_POST['st-data31'], array( 'fade', 'rtl', 'ltr' ), true ) ? $_POST['st-data31'] : 'fade';
                    update_option( 'st-data31', $slides_type );
               } else {
                    update_option( 'st-data31', 'fade' );
               }

               if ( isset( $_POST['st-data32'] ) && $_POST['st-data32'] ) {
                    update_option( 'st-data32', (int) $_POST['st-data32'] );
               } else {
                    update_option( 'st-data32', 5000 );
               }

               if ( isset( $_POST['st-data33'] ) && $_POST['st-data33'] ) {
                    update_option( 'st-data33', $_POST['st-data33'] );
               } else {
                    update_option( 'st-data33', '' );
               }

                  if ( isset( $_POST['st-data34'] ) && $_POST['st-data34'] ) {
                    update_option( 'st-data34', $_POST['st-data34'] );
               } else {
                    update_option( 'st-data34', '' );
               }

                  if ( isset( $_POST['st-data35'] ) && $_POST['st-data35'] ) {
                    update_option( 'st-data35', $_POST['st-data35'] );
               } else {
                    update_option( 'st-data35', '' );
               }

                  if ( isset( $_POST['st-data36'] ) && $_POST['st-data36'] ) {
                    update_option( 'st-data36', $_POST['st-data36'] );
               } else {
                    update_option( 'st-data36', '' );
               }

                  if ( isset( $_POST['st-data37'] ) && $_POST['st-data37'] ) {
                    update_option( 'st-data37', $_POST['st-data37'] );
               } else {
                    update_option( 'st-data37', '' );
               }

                  if ( isset( $_POST['st-data38'] ) && $_POST['st-data38'] ) {
                    update_option( 'st-data38', $_POST['st-data38'] );
               } else {
                    update_option( 'st-data38', '' );
               }

                  if ( isset( $_POST['st-data39'] ) && $_POST['st-data39'] ) {
                    update_option( 'st-data39', $_POST['st-data39'] );
               } else {
                    update_option( 'st-data39', '' );
               }

                  if ( isset( $_POST['st-data40'] ) && $_POST['st-data40'] ) {
                    update_option( 'st-data40', $_POST['st-data40'] );
               } else {
                    update_option( 'st-data40', '' );
               }

                  if ( isset( $_POST['st-data41'] ) && $_POST['st-data41'] ) {
                    update_option( 'st-data41', $_POST['st-data41'] );
               } else {
                    update_option( 'st-data41', '' );
               }

                  if ( isset( $_POST['st-data42'] ) && $_POST['st-data42'] ) {
                    update_option( 'st-data42', $_POST['st-data42'] );
               } else {
                    update_option( 'st-data42', '' );
               }

                  if ( isset( $_POST['st-data43'] ) && $_POST['st-data43'] ) {
                    update_option( 'st-data43', $_POST['st-data43'] );
               } else {
                    update_option( 'st-data43', '' );
               }

                  if ( isset( $_POST['st-data44'] ) && $_POST['st-data44'] ) {
                    update_option( 'st-data44', $_POST['st-data44'] );
               } else {
                    update_option( 'st-data44', '' );
               }

                  if ( isset( $_POST['st-data45'] ) && $_POST['st-data45'] ) {
                    update_option( 'st-data45', $_POST['st-data45'] );
               } else {
                    update_option( 'st-data45', '' );
               }

                  if ( isset( $_POST['st-data46'] ) && $_POST['st-data46'] ) {
                    update_option( 'st-data46', $_POST['st-data46'] );
               } else {
                    update_option( 'st-data46', '' );
               }

                  if ( isset( $_POST['st-data47'] ) && $_POST['st-data47'] ) {
                    update_option( 'st-data47', $_POST['st-data47'] );
               } else {
                    update_option( 'st-data47', '' );
               }

                  if ( isset( $_POST['st-data48'] ) && $_POST['st-data48'] ) {
                    update_option( 'st-data48', $_POST['st-data48'] );
               } else {
                    update_option( 'st-data48', '' );
               }

                  if ( isset( $_POST['st-data49'] ) && $_POST['st-data49'] ) {
                    update_option( 'st-data49', $_POST['st-data49'] );
               } else {
                    update_option( 'st-data49', '' );
               }

                  if ( isset( $_POST['st-data50'] ) && $_POST['st-data50'] ) {
                    update_option( 'st-data50', $_POST['st-data50'] );
               } else {
                    update_option( 'st-data50', '' );
               }

               if ( isset( $_POST['st-data51'] ) && $_POST['st-data51'] ) {
                    update_option( 'st-data51', $_POST['st-data51'] );
               } else {
                    if ( isset( $_POST['stdata51kesi'] ) && $_POST['stdata51kesi'] === 'yes' ) {
                         update_option( 'st-data51', '' );
                    }
               }

                  if ( isset( $_POST['st-data52'] ) && $_POST['st-data52'] ) {
                    update_option( 'st-data52', $_POST['st-data52'] );
               } else {
                    update_option( 'st-data52', '' );
               }

                  if ( isset( $_POST['st-data53'] ) && $_POST['st-data53'] ) {
                    update_option( 'st-data53', $_POST['st-data53'] );
               } else {
                    update_option( 'st-data53', '' );
               }

                  if ( isset( $_POST['st-data54'] ) && $_POST['st-data54'] ) {
                    update_option( 'st-data54', $_POST['st-data54'] );
               } else {
                    update_option( 'st-data54', '' );
               }

                  if ( isset( $_POST['st-data55'] ) && $_POST['st-data55'] ) {
                    update_option( 'st-data55', $_POST['st-data55'] );
               } else {
                    update_option( 'st-data55', '' );
               }

                  if ( isset( $_POST['st-data56'] ) && $_POST['st-data56'] ) {
                    update_option( 'st-data56', $_POST['st-data56'] );
               } else {
                    update_option( 'st-data56', '' );
               }

                  if ( isset( $_POST['st-data57'] ) && $_POST['st-data57'] ) {
                    update_option( 'st-data57', $_POST['st-data57'] );
               } else {
                    update_option( 'st-data57', '' );
               }

                  if ( isset( $_POST['st-data58'] ) && $_POST['st-data58'] ) {
                    update_option( 'st-data58', $_POST['st-data58'] );
               } else {
                    update_option( 'st-data58', '' );
               }

                  if ( isset( $_POST['st-data59'] ) && $_POST['st-data59'] ) {
                    update_option( 'st-data59', $_POST['st-data59'] );
               } else {
                    update_option( 'st-data59', '' );
               }

                  if ( isset( $_POST['st-data60'] ) && $_POST['st-data60'] ) {
                    update_option( 'st-data60', $_POST['st-data60'] );
               } else {
                    update_option( 'st-data60', '' );
               }

                  if ( isset( $_POST['st-data61'] ) && $_POST['st-data61'] ) {
                    update_option( 'st-data61', $_POST['st-data61'] );
               } else {
                    update_option( 'st-data61', '' );
               }

                  if ( isset( $_POST['st-data62'] ) && $_POST['st-data62'] ) {
                    update_option( 'st-data62', $_POST['st-data62'] );
               } else {
                    update_option( 'st-data62', '' );
               }

                  if ( isset( $_POST['st-data63'] ) && $_POST['st-data63'] ) {
                    update_option( 'st-data63', $_POST['st-data63'] );
               } else {
                    update_option( 'st-data63', '' );
               }

                  if ( isset( $_POST['st-data64'] ) && $_POST['st-data64'] ) {
                    update_option( 'st-data64', $_POST['st-data64'] );
               } else {
                    update_option( 'st-data64', '' );
               }

                  if ( isset( $_POST['st-data65'] ) && $_POST['st-data65'] ) {
                    update_option( 'st-data65', $_POST['st-data65'] );
               } else {
                    update_option( 'st-data65', '' );
               }

                  if ( isset( $_POST['st-data66'] ) && $_POST['st-data66'] ) {
                    update_option( 'st-data66', $_POST['st-data66'] );
               } else {
                    update_option( 'st-data66', '' );
               }

                  if ( isset( $_POST['st-data67'] ) && $_POST['st-data67'] ) {
                    update_option( 'st-data67', $_POST['st-data67'] );
               } else {
                    update_option( 'st-data67', '' );
               }

                  if ( isset( $_POST['st-data68'] ) && $_POST['st-data68'] ) {
                    update_option( 'st-data68', $_POST['st-data68'] );
               } else {
                    update_option( 'st-data68', '' );
               }

                  if ( isset( $_POST['st-data69'] ) && $_POST['st-data69'] ) {
                    update_option( 'st-data69', $_POST['st-data69'] );
               } else {
                    update_option( 'st-data69', '' );
               }
            

	  }
	     wp_safe_redirect( menu_page_url( 'my-custom-admin', false ) );
          }
     }
}

//////////////////////////////////
// カラム数変更
//////////////////////////////////

add_action( 'admin_menu', 'add_columnchange' );
add_action( 'save_post', 'save_columnck' );

function add_columnchange() {
          add_meta_box( 'columnchange1', 'カラム変更', 'insert_columnchange', 'page', 'side', 'low' );
          add_meta_box( 'columnchange1', 'カラム変更', 'insert_columnchange', 'post', 'side', 'low' );
}

function insert_columnchange() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'st_kanri' );
     $column1 = get_post_meta( $post->ID, 'columnck', true );

     if ( $column1 === 'yes' ) {
          $columnchecked = 'checked';
          $columnchecked2 = '';
          $columnchecked3 = '';
     } elseif ( $column1 === 'lp' ) {
          $columnchecked = '';
          $columnchecked2 = 'checked';
          $columnchecked3 = '';
     } else {
          $columnchecked = '';
          $columnchecked2 = '';
          $columnchecked3 = 'checked';
     }

     echo '<label class="hidden" for="columnck">カラム数</label><input type="radio" name="columnck" value="yes" ' . $columnchecked . '/>1カラムに変更する';
     echo '<br/><input type="radio" name="columnck" value="lp" ' . $columnchecked2 . '/>LP化する';
     echo '<br/><input type="radio" name="columnck" value="" ' . $columnchecked3 . '/>レイアウトをリセットする';
}

function save_columnck( $post_id ) {
     $my_nonce = isset( $_POST['st_kanri'] ) ? $_POST['st_kanri'] : null;
     if ( !wp_verify_nonce( $my_nonce, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }
     $data = $_POST['columnck'];

     if ( get_post_meta( $post_id, 'columnck' ) == "" ) {
          add_post_meta( $post_id, 'columnck', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'columnck', true ) ) {
          update_post_meta( $post_id, 'columnck', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'columnck', get_post_meta( $post_id, 'columnck', true ) );
     }
}

//////////////////////////////////
// index操作
//////////////////////////////////

add_action( 'admin_menu', 'st_stmeta_robots_add_metaboxr' );
add_action( 'save_post', 'st_stmeta_robots_save_stmeta_robots' );

function st_stmeta_robots_add_metaboxr() {
          add_meta_box( 'stmeta', 'index変更', 'st_stmeta_robots_stmeta_robots_dropdown_box', 'page', 'side', 'low' );
          add_meta_box( 'stmeta', 'index変更', 'st_stmeta_robots_stmeta_robots_dropdown_box', 'post', 'side', 'low' );
}

// 挿入ページ

function st_stmeta_robots_stmeta_robots_dropdown_box() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'st_stmeta_robots' );
     $stmeta_robots = $post->stmeta_robots;

     ?>
     <label for="stmeta_robots"></label>
     <select name="stmeta_robots" id="stmeta_robots">
          <option <?php if ( $stmeta_robots === "index, follow" ) {
               echo 'selected="selected"';
          } ?>>index, follow
          </option>
          <option <?php if ( $stmeta_robots === "index, nofollow" ) {
               echo 'selected="selected"';
          } ?>>index, nofollow
          </option>
          <option <?php if ( $stmeta_robots === "noindex, follow" ) {
               echo 'selected="selected"';
          } ?>>noindex, follow
          </option>
          <option <?php if ( $stmeta_robots === "noindex, nofollow" ) {
               echo 'selected="selected"';
          } ?>>noindex, nofollow
          </option>
     </select>
     <?php
}

// データベース登録

function st_stmeta_robots_save_stmeta_robots( $post_id ) {
     $my_nonce = isset( $_POST['st_stmeta_robots'] ) ? $_POST['st_stmeta_robots'] : null;
     if ( !wp_verify_nonce( $my_nonce, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }
     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }

     $data = $_POST['stmeta_robots'];

     if ( get_post_meta( $post_id, 'stmeta_robots' ) === "" ) {
          add_post_meta( $post_id, 'stmeta_robots', $data, true );
     } elseif ( $data !== get_post_meta( $post_id, 'stmeta_robots', true ) ) {
          update_post_meta( $post_id, 'stmeta_robots', $data );
     } elseif ( $data === "" ) {
          delete_post_meta( $post_id, 'stmeta_robots', get_post_meta( $post_id, 'stmeta_robots', true ) );
     }
}

// 表示

function st_stmeta_robots_add_stmeta_robots_tag() {
     global $post;

     if ( is_single() || is_page() ) {
         if ( $GLOBALS["stdata9"] === '' || ( $GLOBALS["stdata9"] !== '' &&  $GLOBALS["stdata9"] != $post->ID ) ) {
              $stmeta_robots = ( empty( $post->stmeta_robots ) ) ? 'index, follow' : $post->stmeta_robots;
              echo '<meta name="robots" content="' . $stmeta_robots . '" />' . "\n";
         }
     } elseif ( !is_category() && is_archive() ) {
          echo '<meta name="robots" content="noindex, follow" />' . "\n";
     } else {

     }
}

add_action( 'wp_head', 'st_stmeta_robots_add_stmeta_robots_tag' );

//////////////////////////////////
// titleタグ
//////////////////////////////////

add_action( 'admin_menu', 'add_st_titlewords' );
add_action( 'save_post', 'save_st_titlewords' );

function add_st_titlewords() {
          add_meta_box( 'st_titlewords1', 'titleタグ', 'insert_st_titlewords', 'page', 'normal', 'high' );
          add_meta_box( 'st_titlewords1', 'titleタグ', 'insert_st_titlewords', 'post', 'normal', 'high' );
}

function insert_st_titlewords() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'my_stkeywords' );
     $sttitlewords = get_post_meta( $post->ID, 'st_titlewords', true );
     $sttitlewords = esc_attr( $sttitlewords );
     echo '<label class="hidden" for="st_titlewords">個別タイトル</label><p>※こちらの記述がタイトルに優先されます</p><input type="text" style="width:100%" placeholder="検索キーワードを含めた全角32文字以内が推奨されています" name="st_titlewords" value="'.$sttitlewords.'" />';

}

function save_st_titlewords( $post_id ) {
     $my_stkeywords = isset( $_POST['my_stkeywords'] ) ? $_POST['my_stkeywords'] : null;
     if ( !wp_verify_nonce( $my_stkeywords, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }
     $data = $_POST['st_titlewords'];

     if ( get_post_meta( $post_id, 'st_titlewords' ) == "" ) {
          add_post_meta( $post_id, 'st_titlewords', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'st_titlewords', true ) ) {
          update_post_meta( $post_id, 'st_titlewords', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'st_titlewords', get_post_meta( $post_id, 'st_titlewords', true ) );
     }
}

//////////////////////////////////
// メタキーワード
//////////////////////////////////

add_action( 'admin_menu', 'add_st_keywords' );
add_action( 'save_post', 'save_st_keywords' );

function add_st_keywords() {
          add_meta_box( 'st_keywords1', 'メタキーワード', 'insert_st_keywords', 'page', 'normal', 'high' );
          add_meta_box( 'st_keywords1', 'メタキーワード', 'insert_st_keywords', 'post', 'normal', 'high' );
}

function insert_st_keywords() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'my_stkeywords' );
     $stkeywords = get_post_meta( $post->ID, 'st_keywords', true );
     $stkeywords = esc_attr( $stkeywords );
     echo '<label class="hidden" for="st_keywords">メタキーワード</label><p>複数指定する場合は半角カンマ「,」で区切ってください</p><input type="text" style="width:100%" placeholder="松,竹,梅" name="st_keywords" value="'.$stkeywords.'" />';

}

function save_st_keywords( $post_id ) {
     $my_stkeywords = isset( $_POST['my_stkeywords'] ) ? $_POST['my_stkeywords'] : null;
     if ( !wp_verify_nonce( $my_stkeywords, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }
     $data = $_POST['st_keywords'];

     if ( get_post_meta( $post_id, 'st_keywords' ) == "" ) {
          add_post_meta( $post_id, 'st_keywords', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'st_keywords', true ) ) {
          update_post_meta( $post_id, 'st_keywords', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'st_keywords', get_post_meta( $post_id, 'st_keywords', true ) );
     }
}

// 表示

function st_keywords_source() {
     if ( is_single() or is_page() && !is_front_page() ) {
          global $wp_query;
          $postID = $wp_query->post->ID;
          $stkeywords = get_post_meta( $postID, 'st_keywords', true );
     } else {
          $stkeywords = '';
     };
     if (isset( $stkeywords ) && trim( $stkeywords ) !== '') {
     echo '<meta name="keywords" content="' . esc_attr($stkeywords) . '">'. "\n";
     }  else {
     }
}
add_action( 'wp_head', 'st_keywords_source' );

//////////////////////////////////
// メタディスクリプション
//////////////////////////////////

add_action( 'admin_menu', 'add_st_description' );
add_action( 'save_post', 'save_st_description' );

function add_st_description() {
          add_meta_box( 'st_description1', 'メタディスクリプション', 'insert_st_description', 'page', 'normal', 'high' );
          add_meta_box( 'st_description1', 'メタディスクリプション', 'insert_st_description', 'post', 'normal', 'high' );
}

function insert_st_description() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'my_stdescription' );
     $stdescription = get_post_meta( $post->ID, 'st_description', true );
     $stdescription = esc_html( $stdescription );
     echo '<label class="hidden" for="st_description">メタディスクリプション</label><p>全角120文字程度に納めましょう</p><textarea style="width:100%" rows="4" type="text" name="st_description" />'.$stdescription.'</textarea>';

}

function save_st_description( $post_id ) {
     $my_stdescription = isset( $_POST['my_stdescription'] ) ? $_POST['my_stdescription'] : null;
     if ( !wp_verify_nonce( $my_stdescription, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }

     if ( isset( $_POST['st_description'] ) && $_POST['st_description'] ) {
     	$data = $_POST['st_description'];
	}else{
     	$data = '';
	}

     if ( get_post_meta( $post_id, 'st_description' ) == "" ) {
          add_post_meta( $post_id, 'st_description', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'st_description', true ) ) {
          update_post_meta( $post_id, 'st_description', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'st_description', get_post_meta( $post_id, 'st_description', true ) );
     }
}

// 表示

function st_description_source() {
     if ( is_single() or is_page() && !is_front_page() ) {
          global $wp_query;
          $postID = $wp_query->post->ID;
          $stdescription = get_post_meta( $postID, 'st_description', true );
     } else {
          $stdescription = '';
     };
     if (isset( $stdescription ) && trim( $stdescription ) !== '') {
     echo '<meta name="description" content="' . esc_attr($stdescription) .'">'. "\n";
     }  else {
     }
}
add_action( 'wp_head', 'st_description_source' );

//////////////////////////////////
// テキストの選択
//////////////////////////////////

add_action( 'admin_menu', 'add_textcopyck' );
add_action( 'save_post', 'save_textcopyck' );

function add_textcopyck() {
          add_meta_box( 'textcopyck1', 'コピー防止', 'insert_textcopyck', 'page', 'side', 'low' );
          add_meta_box( 'textcopyck1', 'コピー防止', 'insert_textcopyck', 'post', 'side', 'low' );
}

function insert_textcopyck() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'st_kanri' );
     $textcopyckmark = get_post_meta( $post->ID, 'textcopyck', true );

     if ( $textcopyckmark === 'yes' ) {
          $textcopychecked = 'checked';
     } else {
          $textcopychecked = '';
     }

     echo '<label class="hidden" for="textcopyck">コピー防止</label><input type="checkbox"  name="textcopyck" value="yes" ' . $textcopychecked . '/>設定に関わらずテキスト選択可';
    
}

function save_textcopyck( $post_id ) {
     $my_nonce = isset( $_POST['st_kanri'] ) ? $_POST['st_kanri'] : null;
     if ( !wp_verify_nonce( $my_nonce, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }

     if ( isset( $_POST['textcopyck'] ) && $_POST['textcopyck'] ) {
     	$data = $_POST['textcopyck'];
	}else{
     	$data = '';
	}

     if ( get_post_meta( $post_id, 'textcopyck' ) == "" ) {
          add_post_meta( $post_id, 'textcopyck', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'textcopyck', true ) ) {
          update_post_meta( $post_id, 'textcopyck', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'textcopyck', get_post_meta( $post_id, 'textcopyck', true ) );
     }
}

//////////////////////////////////
// アイキャッチ設定の選択
//////////////////////////////////

add_action( 'admin_menu', 'add_eyecatch_set' );
add_action( 'save_post', 'save_eyecatch_set' );

function add_eyecatch_set() {
          add_meta_box( 'eyecatch_set1', 'アイキャッチ設定', 'insert_eyecatch_set', 'page', 'side', 'low' );
          add_meta_box( 'eyecatch_set1', 'アイキャッチ設定', 'insert_eyecatch_set', 'post', 'side', 'low' );
}

function insert_eyecatch_set() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'st_kanri' );
     $eyecatch_setmark = get_post_meta( $post->ID, 'eyecatch_set', true );

     if ( $eyecatch_setmark === 'yes' ) {
          $eyecatchchecked = 'checked';
     } else {
          $eyecatchchecked = '';
     }

     echo '<label class="hidden" for="eyecatch_set">アイキャッチ設定</label><input type="checkbox"  name="eyecatch_set" value="yes" ' . $eyecatchchecked . '/>設定に関わらずアイキャッチ挿入';
    
}

function save_eyecatch_set( $post_id ) {
     $my_nonce = isset( $_POST['st_kanri'] ) ? $_POST['st_kanri'] : null;
     if ( !wp_verify_nonce( $my_nonce, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }

     if ( isset( $_POST['eyecatch_set'] ) && $_POST['eyecatch_set'] ) {
     	$data = $_POST['eyecatch_set'];
	}else{
     	$data = '';
	}

     if ( get_post_meta( $post_id, 'eyecatch_set' ) == "" ) {
          add_post_meta( $post_id, 'eyecatch_set', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'eyecatch_set', true ) ) {
          update_post_meta( $post_id, 'eyecatch_set', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'eyecatch_set', get_post_meta( $post_id, 'eyecatch_set', true ) );
     }
}

//////////////////////////////////
// アイキャッチ画像Creditソース
//////////////////////////////////

add_action( 'admin_menu', 'add_st_copyurl' );
add_action( 'save_post', 'save_st_copyurl' );

function add_st_copyurl() {
          add_meta_box( 'st_copyurl1', 'アイキャッチ画像のクレジット', 'insert_st_copyurl', 'page', 'side', 'low' );
          add_meta_box( 'st_copyurl1', 'アイキャッチ画像のクレジット', 'insert_st_copyurl', 'post', 'side', 'low' );
}

function insert_st_copyurl() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'my_stcopyurl' );
     $stcopyurl = get_post_meta( $post->ID, 'st_copyurl', true );
     $stcopyurl = esc_attr( $stcopyurl );
     echo '<label class="hidden" for="st_copyurl">Photo Credit url</label><p>※記述に誤りがあるとレイアウトが崩れる恐れがあります</p><input type="text" style="width:100%" placeholder="<a href=\'//flickr.com/example\'>hoge</a>" name="st_copyurl" value="'.$stcopyurl.'" />';

}

function save_st_copyurl( $post_id ) {
     $my_stcopyurl = isset( $_POST['my_stcopyurl'] ) ? $_POST['my_stcopyurl'] : null;
     if ( !wp_verify_nonce( $my_stcopyurl, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }
     $data = $_POST['st_copyurl'];

     if ( get_post_meta( $post_id, 'st_copyurl' ) == "" ) {
          add_post_meta( $post_id, 'st_copyurl', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'st_copyurl', true ) ) {
          update_post_meta( $post_id, 'st_copyurl', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'st_copyurl', get_post_meta( $post_id, 'st_copyurl', true ) );
     }
}


//////////////////////////////////
// リダイレクト
//////////////////////////////////

add_action( 'admin_menu', 'add_st_redirect' );
add_action( 'save_post', 'save_st_redirect' );

function add_st_redirect() {
          add_meta_box( 'st_redirect1', 'リダイレクトURL', 'insert_st_redirect', 'page', 'normal', 'low' );
          add_meta_box( 'st_redirect1', 'リダイレクトURL', 'insert_st_redirect', 'post', 'normal', 'low' );
}

function insert_st_redirect() {
     global $post;
     wp_nonce_field( wp_create_nonce( __FILE__ ), 'my_stredirect' );
     $stredirect = get_post_meta( $post->ID, 'st_redirect', true );
     $stredirect = esc_url( $stredirect );
     echo '<label class="hidden" for="st_redirect">リダイレクトURL</label><p>リダイレクトするURL</p><input type="text" name="st_redirect" value="'.$stredirect.'" style="width:100%" />';

}

function save_st_redirect( $post_id ) {
     $my_stredirect = isset( $_POST['my_stredirect'] ) ? $_POST['my_stredirect'] : null;
     if ( !wp_verify_nonce( $my_stredirect, wp_create_nonce( __FILE__ ) ) ) {
          return $post_id;
     }

     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
          return $post_id;
     }
     if ( !current_user_can( 'edit_post', $post_id ) ) {
          return $post_id;
     }
     $data = $_POST['st_redirect'];

     if ( get_post_meta( $post_id, 'st_redirect' ) == "" ) {
          add_post_meta( $post_id, 'st_redirect', $data, true );
     } elseif ( $data != get_post_meta( $post_id, 'st_redirect', true ) ) {
          update_post_meta( $post_id, 'st_redirect', $data );
     } elseif ( $data == "" ) {
          delete_post_meta( $post_id, 'st_redirect', get_post_meta( $post_id, 'st_redirect', true ) );
     }
}

// 表示

function st_redirect_source() {
     if ( is_single() or is_page() && !is_front_page() ) {
          global $wp_query;
          $postID = $wp_query->post->ID;
          $stredirect = get_post_meta( $postID, 'st_redirect', true );
     } else {
          $stredirect = '';
     };
     if (isset( $stredirect ) && trim( $stredirect ) !== '') {
     echo '<meta http-equiv="refresh" content="0; URL='. stripslashes($stredirect) .'">';
     }  else {
     }
}
add_action( 'wp_head', 'st_redirect_source' );
