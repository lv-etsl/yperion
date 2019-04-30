
(function() {
    if (typeof window.CustomEvent === "function") return false;

    function CustomEvent(event, params) {
        params = params || {
            bubbles: false,
            cancelable: false,
            detail: undefined
        };
        var evt = document.createEvent('CustomEvent');
        evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
        return evt;
    }
    CustomEvent.prototype = window.Event.prototype;
    window.CustomEvent = CustomEvent;
})();;
(function($) {
    var windowH = $(window).height();
    $(window).resize(function() {
        if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
            windowH = window.screen.height;
        } else {
            windowH = $(window).height();
        }
        checkSize();
    })
    $(document).ready(function() {
        externalLinks();
        checkSize();
        goUp();
        if ($('.home').length > 0) {
            goDown();
            headerHeight();
            $(window).resize(function() {
                headerHeight();
            })
        }
        if ($(' .page-template').length > 0) {
            stickyNavArticlesInit();
            articleMB();
            $(window).resize(function() {
                articleMB();
            })
        }
        if ($('.pyramids').length > 0) {
            pyramid();
        }
        if ($('').length > 0) {
            relationSectionPos();
            relationSectionScroll();
            ressources_toggle();
            $(window).resize(function() {
                relationSectionPos();
                relationSectionScroll();
            })
            $(document).scroll(function() {
                relationSectionScroll();
            })
            relationActions();
        }
    })
    $(window).load(function() {
        if ($('.home').length > 0) {
            homeElements();
            $(window).resize(function() {
                homeElements();
            })
        }
    })

    function headerHeight() {
        $('.page-header-content').css('height', windowH - $('#masthead').height());
    }

    function checkSize() {
        if ($(window).width() > 925) {
            $('html').removeClass('small-screen');
        } else {
            $('html').addClass('small-screen');
        }
    }

    function externalLinks() {
        $('a:external').attr('target', '_blank').addClass('external');
    }
    $.expr[':'].external = function(obj) {
        return !obj.href.match(/^mailto\:/) && (obj.hostname != location.hostname) && !obj.href.match(/^javascript\:/) && !obj.href.match(/^$/)
    };

    function homeElements() {
        var halfH = 0;
        $('#actions article').each(function(i) {
            halfH = $(this).height() > halfH ? $(this).height() : halfH;
            if (i % 2 != 0) {
                $('#actions article').eq(i).css('height', halfH);
                $('#actions article').eq(i - 1).css('height', halfH);
                halfH = 0;
            }
        })
    }

    function goDown() {
        $('.page-header .godown').on('click', function(event) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: $('.page-header').height() + $('.page-header').offset().top
            }, 300);
        })
    }
    var currentArticle;
    var scrolling = false;

    function stickyNavArticlesInit(articleContainer) {
        var selector = typeof articleContainer === 'undefined' ? $('section.content') : articleContainer;
        var relation = selector.attr('class') == 'content' ? false : true;
        var nav;
        var navW;
        var navOW;
        var navT;
        var beforeH;
        if (!relation)
            currentArticle = $('.nav-sub-article-title', nav).first().data('article-id');
        stickyNavArticlesVars();
        stickyNavArticles();
        $(window).resize(function() {
            stickyNavArticlesVars();
        })
        if (!relation) {
            $(window).scroll(function() {
                stickyNavArticles();
            })
        } else {
            $(selector).scroll(function() {
                stickyNavArticles();
            })
        }
        stickyNavArticlesLink();
        articleAutoScroll();
        sommaire();

        function stickyNavArticlesLink() {
            $('.nav-article-title, .nav-sub-article-title', nav).on('click', function(event) {
                event.preventDefault();
                $(this).closest('.nav-sticky').removeClass('open');
                if ($(this).closest('.nav-article-title').length > 0) {
                    event.stopPropagation();
                }
                var articleId = $(this).data('article-id');
                scrolling = true;
                var scrollPos = !relation ? $('.' + articleId, selector).offset().top - beforeH : $('.' + articleId, selector).position().top + $(selector).scrollTop() - beforeH;
                if (!relation && scrollPos != $(document).scrollTop()) {
                    var current = $(this).hasClass('nav-article-title') ? $('.nav-sub-article-title', this).first() : $(this);
                    currentArticle = current.data('article-id');
                    changeRelation('down');
                }
                var scrolled = !relation ? $('html, body') : $(this).closest('.relation-nav').next('.relation-content');
                scrolled.stop().animate({
                    scrollTop: scrollPos + 1
                }, 300, function() {
                    scrolling = false;
                });
            })
        }

        function stickyNavArticlesVars() {
            beforeH = $('html').hasClass('small-screen') ? 0 : parseInt($('.content').css('padding-top'), 10);
            nav = !relation ? $('.nav-sticky', selector) : $('.nav-sticky', selector.prev());
            navArticle = !relation ? $('.nav-articles', selector) : $('.nav-articles', selector.prev());
            navW = nav.width();
            navOW = nav.outerWidth(true);
            navT = navArticle.offset().top;
        }

        function stickyNavArticles() {
            var windowS = $(window).scrollTop();
            if (!relation) {
                $('.thematique-content, .content .referentiel-content').css('padding-left', navOW);
                if (windowS >= navT - beforeH) {
                    nav.css({
                        position: 'fixed',
                        top: 5,
                        width: navW
                    })
                } else {
                    nav.css({
                        position: 'absolute',
                        top: beforeH
                    })
                }
            }
            $('.article-part', selector).each(function(i) {
                var part = $(this);
                var partH = part.height();
                var partT = part.offset().top;
                var partS = partT - windowS - beforeH;
                var percentage = 0;
                if (-partS > partH) {
                    percentage = 100;
                } else if (partS < 0) {
                    percentage = (-partS / partH) * 100;
                }
                if (percentage != 0 && percentage != 100) {
                    $('.nav-article-title .nav-sub-article', nav).eq(i).slideDown(200);
                    $('.nav-article-title .nav-article-title-inner', nav).eq(i).addClass('active');
                } else {
                    $('.nav-article-title .nav-sub-article', nav).eq(i).slideUp(200);
                    $('.nav-article-title .nav-article-title-inner', nav).eq(i).removeClass('active');
                }
                $('.nav-article-title-inner .read', nav).eq(i).css('width', percentage + '%');
            })
            var current = false;
            $('.sub-article-part', selector).each(function(i) {
                var part = $(this);
                var partH = part.height();
                var partT = part.offset().top;
                var partS = partT - windowS - beforeH;
                var percentage = 0;
                if (-partS > partH) {
                    percentage = 100;
                    $('.nav-article-title .nav-sub-article-title', nav).eq(i).removeClass('next');
                } else if (partS < 0) {
                    percentage = (-partS / partH) * 100;
                    $('.nav-article-title .nav-sub-article-title', nav).eq(i).removeClass('next');
                } else {
                    $('.nav-article-title .nav-sub-article-title', nav).eq(i).addClass('next');
                }
                if (percentage != 0 && percentage != 100) {
                    $('.nav-sub-article-title .nav-sub-article-title-inner', nav).eq(i).addClass('active');
                } else {
                    $('.nav-sub-article-title .nav-sub-article-title-inner', nav).eq(i).removeClass('active');
                }
                if (!relation) {
                    if (percentage > 0 && percentage < 100 && !scrolling) {
                        currentArticle = $('.nav-article-title .nav-sub-article-title', nav).eq(i).data('article-id');
                        current = true;
                    }
                }
                $('.nav-sub-article-title-inner .read', nav).eq(i).css('width', percentage + '%');
            })
            if (!current && !relation) {
                currentArticle = $('.nav-article-title .nav-sub-article-title.next', nav).first().data('article-id');
            }
        }

        function articleAutoScroll() {
            var articles = [];
            var flag = false;
            selectRelation();
            $(document).scroll(function() {
                selectRelation();
            })

            function selectRelation() {
                var documentS = $(document).scrollTop();
                var beforeH = parseInt($('.content').css('padding-top'), 10);
                $('.sub-article-part', selector).each(function() {
                    var id = $(this).data('id');
                    var articleT = $(this).offset().top;
                    var articleH = $(this).outerHeight(true);
                    if (articleT + articleH < documentS + windowH) {
                        if (articles[id] == 'bottom' && !flag) {
                            flag = true;
                            var next = $(this).next().length > 0 ? $(this).next() : $(this).parent().next();
                            if (next.length > 0) {
                                var nextSub = next.hasClass('article-part') ? $('.sub-article-part', next).first() : next;
                                if (!scrolling) {
                                    if (!relation) {
                                        currentArticle = nextSub.data('id');
                                        changeRelation('down');
                                    }
                                    flag = false;
                                } else {
                                    flag = false;
                                }
                            } else {
                                flag = false;
                            }
                        }
                        articles[id] = 'top';
                    } else {
                        if (articles[id] == 'top' && !scrolling && !relation) {
                            changeRelation('up');
                        }
                        articles[id] = 'bottom';
                    }
                })
            }
        }

        function changeRelation(dir) {
            if ($('.relation.active').length > 0) {
                if (dir == 'down')
                    $('.relation.active').stop().animate({
                        top: -100 + '%'
                    }, 300, function() {
                        $(this).removeClass('active')
                    });
                else if (dir == 'up')
                    $('.relation.active').stop().animate({
                        top: 100 + '%'
                    }, 300, function() {
                        $(this).removeClass('active')
                    });
                else
                    $('.relation.active').stop().animate({
                        left: 60
                    }, 300, function() {
                        $(this).removeClass('active')
                    });
            }
            var articleNow = currentArticle;
            if ($('.relation-' + articleNow).length > 0) {
                if (!$('.relation-' + articleNow).hasClass('loaded') && !$('.relation-' + articleNow).hasClass('loading') && $('#main').hasClass('relation-active')) {
                    var container = $('.relation-' + articleNow);
                    var pyramids = container.data('pyramid');
                    var theories = container.data('referentiel');
                    loadRelation(container, pyramids, theories);
                }
                if (dir == 'down')
                    $('.relation-' + articleNow).css('top', '100%');
                else if (dir == 'up')
                    $('.relation-' + articleNow).css('top', '-100%');
                else
                    $('.relation-' + articleNow).css('left', '60');
                $('.relation-' + articleNow).addClass('active').stop().animate({
                    top: 0,
                    left: 0
                }, 300);
            }
        }

        function sommaire() {
            $('.nav-title', nav).on('click', function() {
                $(this).parent().toggleClass('open');
            })
        }
    }

    function pyramid(articleContainer) {
        var selector = typeof articleContainer === 'undefined' ? $('body') : articleContainer;
        var title = typeof articleContainer === 'undefined' ? '' : '.visible';
        $('.pyramid-title' + title, selector).on('click', function() {
            var index = $(this).index();
            $(this).closest('.pyramids').find('.pyramid-content .active').removeClass('active').slideUp(200);
            $(this).closest('.pyramids').find('.pyramid-titles .active').removeClass('active');
            $(this).toggleClass('active').siblings().removeClass('active').parent().next().children('div').stop().eq(index).slideToggle(200).toggleClass('active').siblings().slideUp(200).removeClass('active');
        })
        $('.pyramid-content .close', selector).on('click', function() {
            $(this).parent().stop().slideUp(200).removeClass('active').parent().prev().children().removeClass('active');
        })
        $('.pyramid-category').on('click', function() {
            $(this).next('.pyramid-category-description').stop().slideToggle(200).siblings('.pyramid-category-description').stop().slideUp(200);
        })
        pyramidToggle();

        function pyramidToggle() {
            $('.pyramids ~ .toggle .toggle-title').on('click', function() {
                $(this).toggleClass('active').next('.toggle-content').stop().slideToggle(300);
            })
            $('.pyramids').each(function() {
                var toggleH = 0;
                $(this).nextAll('.toggle').each(function() {
                    var thisH = $(this).outerHeight(true);
                    if (thisH > toggleH)
                        toggleH = thisH;
                })
                $(this).nextAll('.toggle').css('min-height', toggleH);
            })
        }
    }

    function articleMB() {
        $('.sub-article-part').css('margin-bottom', windowH / 2);
    }

    function relationSectionPos() {
        var content = $('section.content');
        var top = content.position().top;
        var maxH = content.outerHeight();
        $('section.relations').css({
            display: 'block',
            height: windowH,
            top: top,
            maxHeight: maxH
        })
        var relationH = $('section.relations').height();
        $('.nav-relation-title').width(relationH);
    }

    function relationSectionScroll() {
        var documentS = $(document).scrollTop();
        var top = $('section.content').position().top;
        if (documentS > top) {
            $('section.relations').css({
                position: 'fixed',
                top: 0
            })
            var footerT = $('#colophon').offset().top;
            if (documentS >= footerT - windowH) {
                $('section.relations').css({
                    height: footerT - documentS
                })
            } else {
                $('section.relations').css({
                    height: windowH
                })
            }
            var relationH = $('section.relations').height();
            $('.nav-relation-title').width(relationH);
        } else {
            $('section.relations').css({
                position: 'absolute',
                top: top
            })
        }
    }

    function relationActions() {
        $('.nav-relation-title, .relation-nav .close').on('click', function() {
            $('#main').toggleClass('relation-active');
            if ($('#main').hasClass('relation-active')) {
                var container = $(this).parent();
                if (!container.hasClass('loaded')) {
                    var pyramids = container.data('pyramid');
                    var theories = container.data('referentiel');
                    loadRelation(container, pyramids, theories);
                    var articleNow = currentArticle;
                    $(' .relation-active .thematique .thematique-content').on('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(event) {
                        if ((event.originalEvent.propertyName == 'padding-left' || event.originalEvent.propertyName == 'padding') && $('#main').hasClass('relation-active')) {
                            scrolling = true;
                            $('html, body').stop().animate({
                                scrollTop: $('.thematique .' + articleNow).offset().top - 80
                            }, 300, function() {
                                scrolling = false;
                            })
                        }
                    })
                }
            }
        })
    }
    var loaded = [];

    function loadRelation(container, pyramids, theories) {
        var articleContainer = $('.relation-content', container);
        var loadedId = container.data('id');
        if (!articleContainer.hasClass('loading') && $.inArray(loadedId, loaded) == -1) {
            articleContainer.addClass('loading');
            loaded.push(container.data('id'));
            var data = {
                action: 'load_relation',
                pyramids: pyramids,
                theories: theories
            }
            $.post(ajaxurl, data, function(response) {
                var articleParts = JSON.parse(response);
                articleContainer.append(articleParts.content).addClass('loaded').removeClass('loading');
                articleContainer.prev().append(articleParts.nav);
                pyramid(articleContainer);
                stickyNavArticlesInit(articleContainer);
            })
        }
    }

    function goUp() {
        $(document).scroll(function() {
            if ($(document).scrollTop() > windowH) {
                $('.go-up').fadeIn(200);
            } else {
                $('.go-up').fadeOut(200);
            }
        })
        $('.go-up').on('click', function() {
            $('html, body').stop().animate({
                scrollTop: 0
            }, 300);
        })
    }

}(jQuery));
(function() {
    var isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,
        isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,
        isIE = navigator.userAgent.toLowerCase().indexOf('msie') > -1;
    if ((isWebkit || isOpera || isIE) && document.getElementById && window.addEventListener) {
        window.addEventListener('hashchange', function() {
            var id = location.hash.substring(1),
                element;
            if (!(/^[A-z0-9_-]+$/.test(id))) {
                return;
            }
            element = document.getElementById(id);
            if (element) {
                if (!(/^(?:a|select|input|button|textarea)$/i.test(element.tagName))) {
                    element.tabIndex = -1;
                }
                element.focus();
                window.scrollBy(0, -53);
            }
        }, false);
    }
})();
