jQuery(document).ready(function ($) {
    // Skip to content smooth scroll JavaScript

    $('.skip-link').click(function (skip) {
        skip.preventDefault();
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 500);
    });

    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 100) {
            $('.skip-link').fadeOut();
        } else {
            $('.skip-link').fadeIn();
        }
    });

    // Add class in navigation bar

    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height > 10) {
            $('.main-navigation').addClass('fixed');
        } else {
            $('.main-navigation').removeClass('fixed');
        }
    });

    // Added class on dropdown menu span

    if ($(document).width() < 1200) {
        $('.main-navigation .menu-item-has-children').append('<span class="caret"></span>');

        $('.caret').click(function () {
            $(this).parent().toggleClass('menu-open').siblings().removeClass('menu-open');
        });
    }

    // To top Java Script

    $(window).scroll(function () {
        var height = $(window).scrollTop();
        if (height >= 200) {
            $('#up-btn').addClass('view');
        } else {
            $('#up-btn').removeClass('view');
        }
    });
    $('#up-btn').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });

    // Add active on FAQS

    $('.section_faqs .sub_heading').click(function () {
        $(this).parent().toggleClass('active').siblings().removeClass('active');
    });


    // Add class in cart on click

    if ($(document).width() < 1200) {
        $('.main-navigation .btn-cart').click(function () {
            $('.kathmandu_cart').toggleClass('show');
        });

        $('.cart-wrap').prepend('<button class="btn-close"><i class="fas fa-times"></i></button>');

        $('.btn-close').click(function () {
            $('.kathmandu_cart').removeClass('show');
        });
    }

    // jQuery to open cart from kathmandu store menubar

    $(document).ready(function () {
        $('.kathmandu_store .btn-cart').click(function () {
            $('.kathmandu_store .kathmandu_cart').toggleClass('show');
        });

        $(document).click(function (e) {
            if ($(e.target).is('.kathmandu_store .btn-cart, .kathmandu_store .btn-cart i, .kathmandu_store .cart-total, .cart_content, .cart-wrap, .cart-wrap:before, .widget_edd_cart_widget, .edd-cart, .edd-cart li, .edd-cart span') === false) {
                $(".kathmandu_store .kathmandu_cart").removeClass("show");
            }
        });
    });

    // Adding class on kathmandu table

    $('.btn-pop').click(function () {
        $(this).parent('td').toggleClass('show');
    });

    $('.overlay, .cart-pop-up .btn-pop').click(function () {
        $('.kathmandu_table td').removeClass('show');
    });

    // Remove p tag from read more button

    var $torem = $('.more-link').parent('p');
    $torem.replaceWith(function () {
        return $('a', this);
    });

    // Remove section when cart is empty
    $('.edd-hide-on-empty').remove('section');

    // Remove item count from dropdown cart

    $('.edd-cart-number-of-items').remove();

    // Add btn in checkout button

    $('.edd_checkout a, .edd_go_to_checkout, .edd-add-to-cart, input[type="submit"], .comment-reply-link').addClass('btn btn-kathmandu');
    $('.edd_go_to_checkout, .edd-add-to-cart').removeClass('button blue edd-submit');

    $('.btn-kathmandu').removeClass('edd-submit blue button')

    // Added class in pop up ul

    var tr_count = $('.tracks-table tbody .track_lk').length;
    var i;
    for (i = 0; i < tr_count; i++) {
        var count = $('#track_lk_' + i + ' .cart-pop-up ul li, #track_lk_' + i + ' .cart-dropdown ul li').length;
        $('#track_lk_' + i + ' .cart-pop-up ul, #track_lk_' + i + ' .cart-dropdown ul').addClass('pop-up-list-' + count);
    }

    // Added and removed classes of checked radio button on checkout pop-up

    $('.cart-pop-up input[type="radio"]:checked, .cart-dropdown input[type="radio"]:checked').parent().addClass('checked');
    $('.cart-pop-up label, .cart-dropdown label').click(function () {
        $('.cart-pop-up label, .cart-dropdown label').removeClass('checked');
    });

    // Added [selected] class in list of checkout pop-up

    $('.cart-pop-up label.checked, .cart-dropdown label.checked').parent().addClass('selected');

    $('.cart-pop-up .edd_price_options li, .cart-dropdown .edd_price_options li').click(function () {
        $(this).addClass('selected').siblings().removeClass('selected');
    });

    $('.price_btn .btn-kathmandu.edd-add-to-cart').addClass('kathmandu-to-cart');
    $('.price_btn .btn-kathmandu').removeClass('edd-add-to-cart edd-has-js');
    $('.price_btn .btn-kathmandu.kathmandu-to-cart').css('display', 'block');
    $('.price_btn .edd-no-js.btn-kathmandu.kathmandu-to-cart').css('display', 'none');

    // Removing links from a tag

    $('.btn-pop a, .btn-drop a').removeAttr('href');

    // Added class in volume bar

    $('.mute-button').click(function () {
        $('.volume').toggleClass('muted');
    });

    $('.volume__controls').click(function () {
        $('.volume').removeClass('muted');
    });

    $('.volume.muted .volume__progress').css('display', 'none');

    // Add class in Nowplaying kathmandu that apears in bottom of site

    $('.show-player').click(function(){
        $('.now_playing').toggleClass('show');
    });

    // Remove Sidebar from Checkout page

    $('.page.edd-checkout #sidebar, .edd-success #sidebar').remove();

    // Added heading in checkout page

    var widgetHTML = $('legend').html();
    $('<h2 class=entry-title> ' + widgetHTML + ' </h2>').insertBefore('#edd_checkout_user_info');
    $('#edd_checkout_user_info legend').remove();

    $('.edd-success .entry-content h3').addClass('entry-title');

    // change cart values when adding or removing items.
    $('.cart-pop-up .edd-add-to-cart, .cart-dropdown .edd-add-to-cart').click(function () {
        setTimeout(function () {
            var contentadd = $('.widget_edd_cart_widget .cart-total').html();
            jQuery('span.cart-total').replaceWith('<span class = "cart-total">' + contentadd + '</span>');
        }, 1500);
    });

    $('.widget_edd_cart_widget').delegate('.edd-remove-from-cart', 'click', function () {
        setTimeout(function () {
            var contentremove = $('.section_kathmandu .widget_edd_cart_widget .cart-total').html();
            jQuery('span.cart-total').replaceWith('<span class = "cart-total">' + contentremove + '</span>');
        }, 1500);
    });

    // jQuery to keep player at bottom of window

    var $class = $('.kathmandu_table');
    var height = $(window);

    $(window).scroll(function () {
        var web_height = height.height();
        var web_top = height.scrollTop();

        $.each($class, function () {
            var col = $(this);
            var col_height = col.outerHeight();
            var col_top = col.offset().top;
            var col_bottom = (col_top + col_height);

            if (col_bottom <= web_top) {
                $('.kathmandu_store').addClass('player_fixed');
            } else {
                $('.kathmandu_store').removeClass('player_fixed');
            }
        });
    });

});

// Player jQuery

jQuery(document).ready(function ($) {
    if ($('.track_lk').hasClass('shared_track')) {
        $('.shared_track')[0].scrollIntoView({
            block: 'center'
        });
    }

    // iQuery to hide and show player details on click

    $('.play_track .btn-kathmandu').click(function () {
        $('#beat_player_wrapper').addClass('now_playing');
    });

    // Share Button jQuery

    $('.share_wrap .fa-share-alt').click(function () {
        $(this).parent().toggleClass('share_show');
    });

    $(document).click(function (e) {
        if ($(e.target).is('.share_wrap .fa-share-alt, .kathmandu_share, .kathmandu-form, .kathmandu_share .form-wrap, .share_wrap .form-content, .share_wrap h3, .share_wrap span, .share_wrap label, .share_wrap input, .share_wrap button') === false) {
            $('.share_wrap').removeClass('share_show');
        }
    });

    // jQuery to add class in kathmandu store to give margin after player apears

    $('.play_track .btn-kathmandu').click(function () {
        $('.kathmandu_store').addClass('margin');
    });

    // Jquery to copy URL

    $('.kathmandu-share-copy').click(function () {
        $('.share_url').select();
        document.execCommand('copy');
    });

    // jQuery to add class in dropdown price cart of tsble

    $('.btn-drop').click(function () {
        $(this).parent().parent().addClass('apear-cart');
    });

    $('.btn-drop').click(function () {
        $(this).parent().parent().siblings().removeClass('apear-cart');
    });

    $('.kathmandu_tocart_btn').click(function () {
        $(this).parent().removeClass('apear-cart');
    });

    if ($(document).width() < 991) {
        $('.kathmandu_store .kathmandu_cart.menu-item').click(function(){
            $('.kathmandu_store').css('z-index', '999')
            $(document).click(function (e) {
                if ($(e.target).is('.kathmandu_store .btn-cart, .kathmandu_store .cart-total, .cart_content, .cart-wrap, .cart-wrap:before, .widget_edd_cart_widget, .edd-cart, .edd-cart li, .edd-cart span') === false) {
                    $('.kathmandu_store').css('z-index', '100')
                }
            });
        });
    }
});