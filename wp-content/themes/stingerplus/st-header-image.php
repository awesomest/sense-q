<?php

// 直接アクセスを禁止
if ( !defined( 'ABSPATH' ) ) {
     exit;
}?>

<?php
$show_on_all_pages = ( isset( $GLOBALS['stdata18'] ) && $GLOBALS['stdata18'] === 'yes' );
$show_as_slides    = ( isset( $GLOBALS['stdata30'] ) && $GLOBALS['stdata30'] === 'yes' );
$could_be_shown    = ( is_home() or is_front_page() || ( !is_home() && $show_on_all_pages ) );

if ( !$could_be_shown || !has_header_image() ) {
?>
<div id="gazou-wide">
	<?php get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー ?>
</div>
<?php
	return;
}

$header_images = get_uploaded_header_images();

shuffle($header_images);

$speed_ms    = (int) $GLOBALS['stdata32'];
$is_fade     = ($GLOBALS['stdata31'] === 'fade');
$is_rtl_lang = ($GLOBALS['stdata31'] === 'ltr');
$dir         = $is_rtl_lang ? ' dir="rtl"' : '';

$options = array(
	'slidesToShow'   => 1,
	'slidesToScroll' => 1,
	'autoplay'       => true,
	'autoplaySpeed'  => $speed_ms,
	'fade'           => $is_fade,
	'rtl'            => $is_rtl_lang,
);
?>

<?php if ( $show_as_slides ) : // スライドショー ?>
	<div id="gazou-wide">
		<?php if ( isset($GLOBALS['stdata35']) && $GLOBALS['stdata35'] === 'on' ) {
			get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー 
		} ?>

		<div id="header-slides"<?php echo $dir; ?> data-slick='<?php echo json_encode( $options, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP ); ?>'>
			<?php foreach ($header_images as $header) : ?>
				<div class="header-slides-slide">
					<img src="<?php echo esc_url($header['url']); ?>" alt="*" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" >
				</div>
			<?php endforeach; ?>
		</div>

		<?php if ( trim($GLOBALS['stdata35']) === '' ) {
			get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー 
		} ?>
	</div>

<?php else : // 通常のヘッダー画像 ?>

	<div id="gazou-wide">
		<?php if ( isset($GLOBALS['stdata35']) && $GLOBALS['stdata35'] === 'on' ) {
			get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー 
		} ?>

		<img src="<?php header_image(); ?>" alt="*" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" >

		<?php if ( trim($GLOBALS['stdata35']) === '' ) {
			get_template_part( 'st-header-menu' ); //カスタムヘッダーメニュー 
		} ?>
	</div>
<?php endif; ?>
<!-- /gazou -->