
// メインページのアイキャッチアニメーション
var granimInstance = new Granim({
    element: '.canvas-basic',
    name: 'basic-gradient',
    direction: 'left-right', // 'diagonal', 'top-bottom', 'radial'
    opacity: [1, 1],
    isPausedWhenNotInView: true,
    states : {
        "default-state": {
            gradients: [
                ['#AA076B', '#61045F'],
                ['#02AAB0', '#00CDAC'],
                ['#DA22FF', '#9733EE']
            ]
        }
    }
});

// ナビバー関連のスクリプト
$(function() {
	var $win = $(window),
	    $main = $('main'),
	    $nav = $('nav'),
	    navHeight = $nav.outerHeight(),
	    footerHeight = $('footer').outerHeight(),
	    docmentHeight = $(document).height(),
	    navPos = $nav.offset().top,
	    fixedClass = 'is-fixed',
	    hideClass = 'is-hide';

	$win.on('load scroll', function() {
	  var value = $(this).scrollTop(),
	      scrollPos = $win.height() + value;

	  if ( value > navPos ) {
	    if ( docmentHeight - scrollPos <= footerHeight ) {
/*	      $nav.addClass(hideClass);*/
	    } else {
	      $nav.removeClass(hideClass);
	      $("nav").css("background","#ecf0f1");
	    }
	    $nav.addClass(fixedClass);
	    $main.css('margin-top', navHeight);
	    $("nav").css("background","linear-gradient(-135deg, #E4A972, #9941D8)");
	    $(".nav_logo").fadeIn();
	  } else {
	    $nav.removeClass(fixedClass);
	    $main.css('margin-top', '0');
	    $("nav").css("background","#ecf0f1");
	    $(".nav_logo").hide();
	  }
	});
});

$(function() {
    $.fatNav();
});

function go(url){
	window.location.href = url;
}