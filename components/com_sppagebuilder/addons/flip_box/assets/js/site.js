
jQuery(function ($) {

  if ($('.sppb-addon-sppb-flibox.flipon-click').length > 0) {
    $('.sppb-addon-sppb-flibox.flipon-click .sppb-flipbox-panel').on('click', function (event) {
        $(this).toggleClass('flip');
    });
  }

  if ($('.sppb-addon-sppb-flibox.flipon-hover').length > 0) {
    $('.sppb-addon-sppb-flibox.flipon-hover .sppb-flipbox-panel').hover(function(){
      $(this).addClass('flip');
    },function(){
      $(this).removeClass('flip');
    });
  }


});
