/*--------------------------------
 広告のフロート
 -------------------------------*/
if( window.matchMedia('(max-width:781px)').matches ){
//780以下の時の処理
}else{
//780以上の時の処理
	;(function ($) {
		'use strict';

		$(function () {
			var $main = $('main'); // メインカラムのID
			var $side = $('#side aside'); // サイドバーのID
			var $wrapper = $('#scrollad'); // 広告を包む要素のID

			if ($main.length === 0 || $side.length === 0 || $wrapper.length === 0) {
				return;
			}

			var $window = $(window);
			var wrapperHeight = $wrapper.outerHeight();
			var wrapperTop = $wrapper.offset().top;
			var sideLeft = $side.offset().left;

			var sideMargin = {
				top: $side.css('margin-top') ? $side.css('margin-top') : 0,
				right: $side.css('margin-right') ? $side.css('margin-right') : 0,
				bottom: $side.css('margin-bottom') ? $side.css('margin-bottom') : 0,
				left: $side.css('margin-left') ? $side.css('margin-left') : 0
			};

			var winLeft;
			var pos;

			var scrollAdjust = function () {
				var sideHeight = $side.outerHeight();
				var mainHeight = $main.outerHeight();
				var mainAbs = $main.offset().top + mainHeight;
				var winTop = $window.scrollTop();
				var winHeight = $window.height();
				var nf = (winTop > wrapperTop) && (mainHeight > sideHeight) ? true : false;

				winLeft = $window.scrollLeft();
				pos = !nf ? 'static' : (winTop + wrapperHeight) > mainAbs ? 'absolute' : 'fixed';

				if (pos === 'fixed') {
					$side.css({
						position: pos,
						top: '',
						bottom: winHeight - wrapperHeight,
						left: sideLeft - winLeft,
						margin: 0
					});
				} else if (pos === 'absolute') {
					$side.css({
						position: pos,
						top: mainAbs - sideHeight,
						bottom: '',
						left: sideLeft,
						margin: 0
					});
				} else {
					$side.css({
						position: pos,
						marginTop: sideMargin.top,
						marginRight: sideMargin.right,
						marginBottom: sideMargin.bottom,
						marginLeft: sideMargin.left
					});
				}
			};

			var resizeAdjust = function () {
				$side.css({
					position: 'static',
					marginTop: sideMargin.top,
					marginRight: sideMargin.right,
					marginBottom: sideMargin.bottom,
					marginLeft: sideMargin.left
				});

				sideLeft = $side.offset().left;
				winLeft = $window.scrollLeft();

				if (pos === 'fixed') {
					$side.css({
						position: pos,
						left: sideLeft - winLeft,
						margin: 0
					});
				} else if (pos === 'absolute') {
					$side.css({
						position: pos,
						left: sideLeft,
						margin: 0
					});
				}
			};

			scrollAdjust();

			$window.on('scroll', scrollAdjust);
			$window.on('resize', function () {
				scrollAdjust();
				resizeAdjust();
			});
		});
	})(jQuery);

}
