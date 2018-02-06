/**
* @package Helix3 Framework
* @author JoomShaper http://www.joomshaper.com
* @copyright Copyright (c) 2010 - 2015 JoomShaper
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
jQuery(function($) {

    $('#offcanvas-toggler').on('click', function(event){
        event.preventDefault();
        $('body').addClass('offcanvas');
    });

    $( '<div class="offcanvas-overlay"></div>' ).insertBefore( '.body-innerwrapper > .offcanvas-menu' );

    //$('.offcanvas-menu').append( '<div class="offcanvas-overlay"></div>' );

    $('.close-offcanvas, .offcanvas-overlay').on('click', function(event){
        event.preventDefault();
        $('body').removeClass('offcanvas');
    });


    //Mega Menu
    $('.sp-megamenu-wrapper').parent().parent().css('position','static').parent().css('position', 'relative');
    $('.sp-menu-full').each(function(){
        $(this).parent().addClass('menu-justify');
    });
    //Sticky Menu
    $(document).ready(function(){
        $("body.sticky-header").find('#sp-header').sticky({topSpacing:0})
    });


    //wrap bottom and footer in a div
    $("section#sp-bottom, footer#sp-footer").wrapAll('<div class="sp-bottom-footer"></div>');
    
    //title-second word
    $('.sp-page-title h2').html(function(){  
        // separate the text by spaces
        var text= $(this).text().split(' ');
        // drop the last word and store it in a variable
        var last = text.pop();
        // join the text back and if it has more than 1 word add the span tag
        // to the last word
        return text.join(" ") + (text.length > 0 ? ' <span class="last">'+last+'</span>' : last);   
    });

    // has social share
    if ( $( ".revibe-social-share-icon" ).length) {
        // social share
        $('.prettySocial').prettySocial();
    };

    

    //

    // Has carousel
    if ( $( '#carousel' ).is( '.flexslider' ) ) {

        // Thumb Gallery
        var $sppbTgOptions = $('.sppb-tg-slider');

        // Autoplay
        var $autoplay   = $sppbTgOptions.data('sppb-tg-autoplay');
        //if ($autoplay == 'true') { var $autoplay = true; } else { var $autoplay = false};

        // arrows
        var $arrows   = $sppbTgOptions.data('sppb-tg-arrows');
        //if ($arrows == 'true') { var $arrows = true; } else { var $arrows = false};

        $(window).load(function(){
          $('#carousel').flexslider({
            animation: 'slide', 
            controlNav: false,
            directionNav: $arrows,
            animationLoop: false,
            slideshow: $autoplay,
            itemWidth: 160,
            itemMargin: 30,
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "fade",
            controlNav: false,
            directionNav: $arrows,
            animationLoop: false,
            slideshow: $autoplay,
            sync: "#carousel"
        });
      });

    }; // END:: has carousel    

    //Tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    $(document).on('click', '.sp-rating .star', function(event) {
        event.preventDefault();

        var data = {
            'action':'voting',
            'user_rating' : $(this).data('number'),
            'id' : $(this).closest('.post_rating').attr('id')
        };

        var request = {
                'option' : 'com_ajax',
                'plugin' : 'helix3',
                'data'   : data,
                'format' : 'json'
            };

        $.ajax({
            type   : 'POST',
            data   : request,
            beforeSend: function(){
                $('.post_rating .ajax-loader').show();
            },
            success: function (response) {
                var data = $.parseJSON(response.data);

                $('.post_rating .ajax-loader').hide();

                if (data.status == 'invalid') {
                    $('.post_rating .voting-result').text('You have already rated this entry!').fadeIn('fast');
                }else if(data.status == 'false'){
                    $('.post_rating .voting-result').text('Somethings wrong here, try again!').fadeIn('fast');
                }else if(data.status == 'true'){
                    var rate = data.action;
                    $('.voting-symbol').find('.star').each(function(i) {
                        if (i < rate) {
                           $( ".star" ).eq( -(i+1) ).addClass('active');
                        }
                    });

                    $('.post_rating .voting-result').text('Thank You!').fadeIn('fast');
                }

            },
            error: function(){
                $('.post_rating .ajax-loader').hide();
                $('.post_rating .voting-result').text('Failed to rate, try again!').fadeIn('fast');
            }
        });
    });

});