'use strict';
const isDevice = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),
    isAndroid = /Android/i.test(navigator.userAgent),
    isIos = /iPhone|iPad|iPod/i.test(navigator.userAgent),
    isMobile = $(window).width() < 768,
    mobileWidth = 767,
    deviceWidth = 1024,
    isIE11 = !!(navigator.userAgent.match(/Trident/) && navigator.userAgent.match(/rv[ :]11/));
const FE = {
    global: {
        equalHeightByRow: (obj, notRunMobile) => {
            let widthTarget = 0;
            if ($(obj).length) {
                $(obj).height('auto');
                widthTarget = (notRunMobile === true) ? 768 : 0;
                if ($(window).width() >= widthTarget) {
                    var currentTallest = 0,
                        currentRowStart = 0,
                        rowDivs = [],
                        currentDiv = 0,
                        $el,
                        topPosition = 0;
                    $(obj).each(function() {
                        if ($(this).is(':visible') === true) {
                            $el = $(this);
                            topPosition = $el.offset().top;
                            if (currentRowStart !== topPosition) {
                                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                                    rowDivs[currentDiv].innerHeight(currentTallest);
                                }
                                rowDivs = [];
                                currentRowStart = topPosition;
                                currentTallest = $el.innerHeight();
                                rowDivs.push($el);
                            } else {
                                rowDivs.push($el);
                                currentTallest = (currentTallest < $el.innerHeight()) ? ($el.innerHeight()) : (currentTallest);
                            }
                            for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                                rowDivs[currentDiv].innerHeight(currentTallest);
                            }
                        }
                    });
                }
            }
        },
        detectDevices: () => {
            let a = isDevice === true ? ' device' : ' pc',
                b = isAndroid === true ? ' android' : ' not-android',
                c = isIos === true ? ' ios' : ' not-ios',
                d = isMobile ? ' mobile' : ' desktop',
                e = isIE11 ? ' ie11' : ' ',
                htmlClass = a + b + c + d + e;
            $('html').addClass(htmlClass);
        },
        replaceImgToBackground: img => {
            $.each(img, function() {
                if ($(this).css('visibility') == 'visible') {
                    $(this).parent().css('background-image', 'url(' + $(this).attr('src') + ')');
                };
            });
        },
        dropDown: () => {
            $.each($('.style-select'), (index, value) => {
                if ($(this).find('select option:selected').text() !== '') {
                    $(this).find('span').text($(this).find('select option:selected').text());
                }
            });
            $('body').on('change', '.style-select select', function() {
                $(this).prev().text($(this).find('option:selected').text());
            });
        },
        clickOutside: (method, box, targetElement) => {
            let action = isDevice === true ? 'touchend' : 'click';
            $('html').on(action, 'body', e => {
                var container = $(box);
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    switch (method) {
                        case 'fade':
                            $(targetElement).stop().fadeOut(500);
                            break;
                        case 'slide':
                            $(targetElement).stop().slideUp();
                            break;
                        case 'active':
                            $(targetElement).stop().removeClass('active');
                            break;
                    }
                }
            });
        },
        styleSelect: () => {
            $('select.styleSelect').each(function() {
                var select = $('<div>').append($(this).clone()).html(),
                    selectText = $(this).find('option:selected').text(),
                    selectTemplate =
                    '<div class="style-select">' +
                    '<span>' + selectText + '</span>' +
                    select +
                    '<div>';
                $(this).replaceWith(selectTemplate);
                $('.style-select > div:last-child').remove();
            });
        },
        clickActive: () => {
            $('.item-category').on('click', function() {
                $(this).parent().siblings().find('.item-category').removeClass('active');
                $(this).addClass('active');
                $(this).next().find('input').prop('checked', 'checked');
                var ele = $(this).closest('.form-group').next();
                ele.removeClass('section-collapsed');
                $('html, body').animate({
                    scrollTop: $(ele).offset().top - 60
                }, 1000);
            });
        },
        slickSlider: () => {
            let slidesToShowMd = 1;
            let slidesToScrollMd = 1;
            let slidesToShowSm = 1;
            let slidesToScrollSm = 1;
            let slidesToShowXs = 1;
            let slidesToScrollXs = 1;
            if ($('.slick-slider').hasClass('slick-slider-product')) {
                slidesToShowMd = 5;
                slidesToScrollMd = 5;
                slidesToShowSm = 3;
                slidesToScrollSm = 3;
            }
            $('.slick-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: slidesToShowMd,
                slidesToScroll: slidesToScrollMd,
                adaptiveHeight: true,
                arrows: false,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: slidesToShowSm,
                        slidesToScroll: slidesToScrollSm
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: slidesToShowXs,
                        slidesToScroll: slidesToScrollXs
                    }
                }]
            });
        },
        customeAccordion: () => {
            $('.panel-group .panel-title a').on('click', function() {
                $('.panel-group .panel-default').removeClass('panel-open');
                $(this).closest('.panel-default').toggleClass('panel-open');
            });
        },
        onOffTxt: () => {
            var ele = $('.switchery').closest('.switch-state');
            if ($('.switchery').hasClass('off')) {
                ele.find('.pull-right').removeClass('off');
                ele.find('.pull-left').addClass('off');
            } else {
                ele.find('.pull-left').removeClass('off');
                ele.find('.pull-right').addClass('off');
            }
        },
        switchBtn: () => {
          $('.switchery').on('click', function() {
            $(this).toggleClass('off');
            FE.global.onOffTxt();
            if (!$(this).hasClass('off')) {
              $('.unit span').text('monthly');
              $('#standard').text('69');
              $('#advanced').text('102');
              $('#multioutlet').text('169');
            } else {
              $('.unit span').text('annually');
              $('#standard').text('59');
              $('#advanced').text('89');
              $('#multioutlet').text('159');
            }
          });
        },
        gotoArea: function(target) {
            if (isMobile) {
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);
            } else {
                $('html, body').animate({
                    scrollTop: $(target).offset().top - 110
                }, 1000);
            }
        },
        removeActiveClass: () => {
            $('.navbar-nav li').on('click', function() {
                $('.navbar-nav li').removeClass('active');
                $(this).removeClass('active');
            });
        },
        /*triggerClickRadioBtn: () => {
            $(".trial-block-content .item-category").click(function() {
                $(this).next().find('input').prop("checked", "checked");
            });
        },*/
        init: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.styleSelect();
            FE.global.dropDown();
            FE.global.detectDevices();
            FE.global.equalHeightByRow('.blog-item');
            FE.global.clickActive();
            FE.global.slickSlider();
            FE.global.customeAccordion();
            FE.global.switchBtn();
            FE.global.replaceImgToBackground($('.blog-thumb .bg-image'));
            FE.global.removeActiveClass();
            
        },
        loaded: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.equalHeightByRow('.blog-item');
            FE.global.replaceImgToBackground($('.blog-thumb .bg-image'));
            FE.global.removeActiveClass();
        },
        resize: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.equalHeightByRow('.blog-item');
            FE.global.replaceImgToBackground($('.blog-thumb .bg-image'));
        },
        scroll: () => {}
    },
    pages: {
        home: {
            playvideo: () => {
                $('.video-tabs .nav li a').on('click', function(e) {
                    $('.video-tabs .tab-content .tab-video').trigger('pause');
                });
                $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                    $('.video-tabs .tab-content .active').find('.tab-video').trigger('play');
                })
            },
            init: () => {
                FE.pages.home.playvideo();
            },
            loaded: () => {},
            resize: () => {}
        },
        fearture: {
            leftMenu: () => {
                $('.fearture .left-menu li a').on('click', function() {
                    if ($(this).hasClass('active')) {
                        return;
                    } else {
                        $('.fearture .left-menu li a').removeClass('active');
                        $(this).addClass('active');
                        var itemSelected = $(this).attr('data-value');
                        if (isMobile) {
                            $('html, body').animate({
                                scrollTop: $(itemSelected).offset().top
                            }, 1000);
                        } else {
                            $('html, body').animate({
                                scrollTop: $(itemSelected).offset().top - 60
                            }, 1000);
                        }
                    }
                });
                if (!isMobile) {
                    if ($('.fearture').length) {
                        $(window).scroll(function() {
                            setTimeout(function() {
                                var menuLeftTop = $('.fearture').offset().top;
                                var menuLeftBottom = $('.omni-quotes').offset().top;
                                if (menuLeftTop < $(document).scrollTop()) {
                                    $('.left-menu').addClass('fixed');
                                } else {
                                    $('.left-menu').removeClass('fixed');
                                };
                                if (menuLeftBottom - $('.left-menu').height() * 2 < $(document).scrollTop()) {
                                    $('.left-menu').css('top', menuLeftBottom - $('.left-menu').height() * 2).addClass('position');
                                } else {
                                    $('.left-menu').removeClass('position');
                                    $('.left-menu').css('top', '70px');
                                };
                            }, 100);
                        })
                    }
                }
            },
            init: () => {
                FE.pages.fearture.leftMenu();
            },
            loaded: () => {},
            resize: () => {}
        }
    }
};

$(() => {
    FE.global.init();
    FE.pages.home.init();
    FE.pages.fearture.init();
});

$(window).load(() => {
    FE.global.loaded();
    FE.pages.home.loaded();
    FE.pages.fearture.init();
});

// Window resize
var width = $(window).width();
var resize = 0;
$(window).resize(() => {
    var _self = $(this);
    resize++;
    setTimeout(() => {
        resize--;
        if (resize === 0) {
            // Done resize ...
            if (_self.width() !== width) {
                width = _self.width();
                // Done resize width ...
                FE.pages.home.resize();
                FE.pages.fearture.init();
            }
        }
    }, 100);
});

$(window).scroll(() => {
    FE.global.scroll();
});
