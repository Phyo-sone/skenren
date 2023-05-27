//PageTop
$(function() {
    var TopBtn = $('#pageTop');
    TopBtn.hide();
    //スクロール位置が300でボタンを表示
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            TopBtn.slideDown();
        }
        else {
            TopBtn.slideUp();
        }
    });
    //ボタンを押下するとトップへ移動
    TopBtn.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });
});

// サイトアクセス時フェードイン
$(function(){
    $('body').hide();
    $('body').fadeIn(500);
});

//Navigation
(function($) {
    $(function() {
        var $header = $('#head');
        // Nav Fixed
        $(window).scroll(function() {
            if ($(window).scrollTop() > 200) {
                $header.addClass('fixed');
            } else {
                $header.removeClass('fixed');
            }
        });
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
        $('#globalnavi').click(function(){
            $header.removeClass('open');
        });
    });
})(jQuery);

