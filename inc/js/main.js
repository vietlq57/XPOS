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
        init: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.styleSelect();
            FE.global.dropDown();
            FE.global.detectDevices();
            FE.global.equalHeightByRow('.blog-item');
        },
        loaded: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.equalHeightByRow('.blog-item');
        },
        resize: () => {
            FE.global.equalHeightByRow('.eqh');
            FE.global.equalHeightByRow('.blog-item');
        },
        scroll: () => {

        }
    },
    pages: {
        home: {
            init: () => {},
            loaded: () => {},
            resize: () => {}
        }
    }
};

$(() => {
    FE.global.init();
    FE.pages.home.init();
});

$(window).load(() => {
    FE.global.loaded();
    FE.pages.home.loaded();
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
            }
        }
    }, 100);
});

$(window).scroll(() => {
    FE.global.scroll();
});
