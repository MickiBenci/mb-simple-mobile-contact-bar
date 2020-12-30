jQuery(document).ready(function ($) {   
    $('.color-picker').iris(
        {
            hide: true,
            palettes: true
        }
    );
    $(document).click(()=>{
        $('.color-picker').iris('hide');
    })
    $('.color-picker').click(function (e) {        
        $('.color-picker').iris('hide');
        return false;        
    });
    $('.color-picker').click(function (event) {
        $('.color-picker').iris('hide');
        $(this).iris('show');
        return false;
    });
});