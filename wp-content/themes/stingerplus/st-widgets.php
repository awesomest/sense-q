<?php
//フォームウィジェットを登録
class Form_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'form_widget', // Base ID
               __( '02_STINGER問合せボタン', 'st' ), // Name
               array( 'description' => __( '問合せボタンを表示するウィジェットです。', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_form'] ) ) {
			if ( ! empty( $instance['st_title'] ) ) {
				$formname = $instance['st_title'];
			}else{
				$formname = 'Contact Form';
			}
			$formbtn = '<a class="st-formbtnlink" href="'.esc_url($instance['st_form']).'"><p class="st-formbtn"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="originalbtn-bold">'.esc_html($formname).'</span></p></a> ';
               echo apply_filters( 'widget_st_form', $formbtn );
          }
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function form( $instance ) {
          $st_form = ! empty( $instance['st_form'] ) ? $instance['st_form'] : __( '', 'st' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'st' );
          ?>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'st_title' ); ?>" name="<?php echo $this->get_field_name( 'st_title' ); ?>" type="text" value="<?php echo esc_attr( $st_title ); ?>">
		</p>
          <p>
          <label for="<?php echo $this->get_field_id( 'st_form' ); ?>">url:</label> 
          <input class="widefat" id="<?php echo $this->get_field_id( 'st_form' ); ?>" name="<?php echo $this->get_field_name( 'st_form' ); ?>" type="text" value="<?php echo esc_attr( $st_form ); ?>">
          </p>
          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          $instance['st_form'] = ( ! empty( $new_instance['st_form'] ) ) ? strip_tags( $new_instance['st_form'] ) : '';
          $instance['st_title'] = ( ! empty( $new_instance['st_title'] ) ) ? strip_tags( $new_instance['st_title'] ) : '';
          return $instance;
     }

} 

function register_form_widget() {
    register_widget( 'Form_Widget' );
}
add_action( 'widgets_init', 'register_form_widget' );

//サイドメニューウィジェットを登録
class Sidemenu_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'sidemenu_widget', // Base ID
               __( '01_STINGERサイドバーメニュー', 'st' ), // Name
               array( 'description' => __( 'サイドメニューを表示します。項目や並び順は「カスタムメニュー」で設定して下さい', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div id="sidebg">';
			get_template_part( 'st-sidepage-link' );
	echo '</div>';
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function sidemenu( $instance ) {

          ?>

          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_sidemenu_widget() {
    register_widget( 'Sidemenu_Widget' );
}
add_action( 'widgets_init', 'register_sidemenu_widget' );



//NEWSウィジェットを登録
class News_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'news_widget', // Base ID
               __( '03_STINGERフリーボックス', 'st' ), // Name
               array( 'description' => __( 'トピックス風の自由なボックスです。', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_body'] ) ) {
			if ( ! empty( $instance['st_title'] ) ) {
				$freetitle = '<p class="p-free"><span class="p-entry-f">'.$instance['st_title'].'</span></p>';
			}else{
				$freetitle = '';
			}
			$newsbox = '<div class="freebox">'.$freetitle.'<div class="free-inbox">'.nl2br($instance['st_body']).'</div></div>';
               echo apply_filters( 'widget_st_body', $newsbox );
          }
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function form( $instance ) {
          $st_body = ! empty( $instance['st_body'] ) ? $instance['st_body'] : __( '', 'st' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'st' );
          ?>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル（※15文字まで）</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'st_title' ); ?>" name="<?php echo $this->get_field_name( 'st_title' ); ?>" type="text" value="<?php echo esc_attr( $st_title ); ?>">
		</p>

                  <p>
           <label for="<?php echo $this->get_field_id('st_body'); ?>">テキストエリア</label>
           <textarea  class="widefat" rows="16" colls="20" id="<?php echo $this->get_field_id('st_body'); ?>" name="<?php echo $this->get_field_name('st_body'); ?>"><?php echo $st_body; ?></textarea>
        </p>
          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          $instance['st_body'] = ( ! empty( $new_instance['st_body'] ) ) ? trim( $new_instance['st_body'] ) : '';
          $instance['st_title'] = ( ! empty( $new_instance['st_title'] ) ) ? strip_tags( $new_instance['st_title'],'<i>' ) : '';
          return $instance;
     }

} 

function register_news_widget() {
    register_widget( 'News_Widget' );
}
add_action( 'widgets_init', 'register_news_widget' );

//RSSウィジェットを登録
class Rss_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'rss_widget', // Base ID
               __( '04_STINGER_RSSボタン', 'st' ), // Name
               array( 'description' => __( 'RSS配信用ボタンです', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div class="rssbox"><a href="';
	echo esc_url( home_url( '/' ) );
	echo '/?feed=rss2"><i class="fa fa-rss-square"></i>&nbsp;購読する</a></div>';
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function rss( $instance ) {

          ?>

          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_rss_widget() {
    register_widget( 'Rss_Widget' );
}
add_action( 'widgets_init', 'register_rss_widget' );

//新着投稿一覧ウィジェットを登録
class Newentry_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'newentry_widget', // Base ID
               __( '05_STINGER最新の投稿一覧', 'st' ), // Name
               array( 'description' => __( '新着投稿一覧を表示します', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
	echo '<div class="newentrybox">';
	get_template_part( 'newpost' );
	echo '</div>';
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function newentry( $instance ) {

          ?>

          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          return $instance;
     }

} 

function register_newentry_widget() {
    register_widget( 'Newentry_Widget' );
}
add_action( 'widgets_init', 'register_newentry_widget' );

//オリジナルボタンウィジェットを登録
class Form2_Widget extends WP_Widget {
     function __construct() {
          parent::__construct(
               'form2_widget', // Base ID
               __( '06_STINGERオリジナルボタン', 'st' ), // Name
               array( 'description' => __( 'オリジナルボタンを表示するウィジェットです。', 'st' ), ) // Args
          );
     }

     /**
      * ウィジェットのフロントエンド表示
      */
     public function widget( $args, $instance ) {
        echo $args['before_widget'];
          if ( ! empty( $instance['st_form'] ) ) {
			//タイトル
			if ( ! empty( $instance['st_title'] ) ) {
				$formname = $instance['st_title'];
			}else{
				$formname = 'Contact Form2';
			}
			//Webフォント
			if ( ! empty( $instance['st_webfont'] ) ) {
				$st_webfont = $instance['st_webfont'];
			}else{ //メモ
				$st_webfont = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>';
			}
			
			
			$formbtn = '<a class="st-formbtnlink st-originallink" href="'.esc_url($instance['st_form']).'"><p class="st-formbtn st-originalbtn">'.$st_webfont.'<span class="originalbtn-bold">'.esc_html($formname).'</span></p></a> ';
               echo apply_filters( 'widget_st_form', $formbtn );
          }
        echo $args['after_widget'];
     }

     /**
      * バックエンドのウィジェットフォーム
      */
     public function form( $instance ) {
          $st_form = ! empty( $instance['st_form'] ) ? $instance['st_form'] : __( '', 'st' );
          $st_title = ! empty( $instance['st_title'] ) ? $instance['st_title'] : __( '', 'st' );
	  $st_webfont = ! empty( $instance['st_webfont'] ) ? $instance['st_webfont'] : '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>';
          ?>
                    <p>
		<label for="<?php echo $this->get_field_id( 'st_webfont' ); ?>">Webフォント</label> 
     <select class="widefat" name="<?php echo $this->get_field_name( 'st_webfont' ); ?>" id="<?php echo $this->get_field_id( 'st_webfont' ); ?>">
          <option <?php if ( $st_webfont === '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'>メモ
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-trophy" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-trophy" aria-hidden="true"></i>'>トロフィー
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>'>注意
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-map-marker" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-map-marker" aria-hidden="true"></i>'>マップ
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-download" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-download" aria-hidden="true"></i>'>ダウンロード
          </option>
          <option <?php if ( $st_webfont === '<i class="fa fa-calendar" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-calendar" aria-hidden="true"></i>'>カレンダー
          <option <?php if ( $st_webfont === '<i class="fa fa-camera-retro" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-camera-retro" aria-hidden="true"></i>'>写真
          <option <?php if ( $st_webfont === '<i class="fa fa-video-camera" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-video-camera" aria-hidden="true"></i>'>ビデオ
          <option <?php if ( $st_webfont === '<i class="fa fa-comments" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-comments" aria-hidden="true"></i>'>コメント
          <option <?php if ( $st_webfont === '<i class="fa fa-user" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-user" aria-hidden="true"></i>'>人物
          <option <?php if ( $st_webfont === '<i class="fa fa-calculator" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-calculator" aria-hidden="true"></i>'>電卓
          <option <?php if ( $st_webfont === '<i class="fa fa-eye" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-eye" aria-hidden="true"></i>'>目
          <option <?php if ( $st_webfont === '<i class="fa fa-gift" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-gift" aria-hidden="true"></i>'>プレゼント
          <option <?php if ( $st_webfont === '<i class="fa fa-file-text" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-file-text" aria-hidden="true"></i>'>ファイル
          <option <?php if ( $st_webfont === '<i class="fa fa-heart" aria-hidden="true"></i>' ) {
               echo 'selected="selected"';
          } ?> value='<i class="fa fa-heart" aria-hidden="true"></i>'>ハート
          </option>
          </option>
          </option>
          </option>
          </option>
          </option>
          </option>
          </option>
     </select>
     
		</p>
<p>
		<label for="<?php echo $this->get_field_id( 'st_title' ); ?>">タイトル</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'st_title' ); ?>" name="<?php echo $this->get_field_name( 'st_title' ); ?>" type="text" value="<?php echo esc_attr( $st_title ); ?>">
		</p>
          <p>
          <label for="<?php echo $this->get_field_id( 'st_form' ); ?>">url:</label> 
          <input class="widefat" id="<?php echo $this->get_field_id( 'st_form' ); ?>" name="<?php echo $this->get_field_name( 'st_form' ); ?>" type="text" value="<?php echo esc_attr( $st_form ); ?>">
          </p>
          <?php 
     }

     /**
      * ウィジェットフォームの値を保存用にサニタイズ
      */
     public function update( $new_instance, $old_instance ) {
          $instance = array();
          $instance['st_form'] = ( ! empty( $new_instance['st_form'] ) ) ? strip_tags( $new_instance['st_form'] ) : '';
          $instance['st_title'] = ( ! empty( $new_instance['st_title'] ) ) ? strip_tags( $new_instance['st_title'] ) : '';
	  $instance['st_webfont'] = ( ! empty( $new_instance['st_webfont'] ) ) ? strip_tags( $new_instance['st_webfont'],'<i>' ) : '';
          return $instance;
     }

} 

function register_form2_widget() {
    register_widget( 'Form2_Widget' );
}
add_action( 'widgets_init', 'register_form2_widget' );