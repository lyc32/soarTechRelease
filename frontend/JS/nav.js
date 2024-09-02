$(function(){
    // nav收缩展开
    $('.leftMenu-item>a').on('click',function(){
        if (!$('.leftMenu').hasClass('leftMenu-mini')) {
            if ($(this).next().css('display') == "none") {
                //展开未展开
                $('.leftMenu-item').children('ul').slideUp(300);
                $(this).next('ul').slideDown(300);
                $(this).parent('li').addClass('leftMenu-show').siblings('li').removeClass('leftMenu-show');
            }else{
                //收缩已展开
                $(this).next('ul').slideUp(300);
                $('.leftMenu-item.leftMenu-show').removeClass('leftMenu-show');
            }
        }
    });
});