var Layout = function () {
    var e = !1,
        a = !1,
        t = !1,
        o = !1,
        i = !1,
        n = [],
        s = function () {
            for (var e in n) {
                n[e].call()
            }
        };
    return {
        init: function () {
            var n, l;
            r(), "rtl" === $("body").css("direction") && (e = !0), a = !!navigator.userAgent.match(/MSIE 8.0/), t = !!navigator.userAgent.match(/MSIE 9.0/), o = !!navigator.userAgent.match(/MSIE 10.0/), i = !!navigator.userAgent.match(/MSIE 11.0/), o && jQuery("html").addClass("ie10"), i && jQuery("html").addClass("ie11"), a ? $(window).resize(function () {
                l != document.documentElement.clientHeight && (n && clearTimeout(n), n = setTimeout(function () {
                    s()
                }, 50), l = document.documentElement.clientHeight)
            }) : $(window).resize(function () {
                n && clearTimeout(n), n = setTimeout(function () {
                    s()
                }, 50)
            }), (a || t) && jQuery("input[placeholder]:not(.placeholder-no-fix), textarea[placeholder]:not(.placeholder-no-fix)").each(function () {
                var e = jQuery(this);
                "" == e.val() && "" != e.attr("placeholder") && e.addClass("placeholder").val(e.attr("placeholder")), e.focus(function () {
                    e.val() == e.attr("placeholder") && e.val("")
                }), e.blur(function () {
                    "" != e.val() && e.val() != e.attr("placeholder") || e.val(e.attr("placeholder"))
                })
            }), $(".search-btn").click(function () {
                if ($(".search-btn").hasClass("show-search-icon")) $(window).width() > 767 ? $(".search-box").fadeOut(300) : ($(".search-box").fadeOut(200), $(".site-header-ak").css("display", "inline-block"), $(".search-box").css("width", "auto"), $(".search-btn").css("display", "inline-block")), $(".search-btn").removeClass("show-search-icon");
                else {
                    if ($(window).width() > 767) $(".search-box").fadeIn(300);
                    else {
                        var e = $(window).width();
                        e = 90 * e / 100, $(".search-btn").css("display", "none"), $(".site-header-ak").css("display", "none"), $(".search-box").css("width", e), $(".search-box").fadeIn(200)
                    }
                    $(".search-btn").addClass("show-search-icon")
                }
            }), 0 != $(".search-btn").size() && ($(".search-box, .search-btn").on("click", function (e) {
                e.stopPropagation()
            }), $("body").on("click", function () {
                $(".search-btn").hasClass("show-search-icon") && ($(".search-btn").removeClass("show-search-icon"), $(".search-box").fadeOut(0), $(".site-header-ak").css("display", "inline-block"), $(".search-btn").css("display", "inline-block"))
            })), jQuery.fancybox && (jQuery(".fancybox-fast-view").fancybox(), jQuery(".fancybox-button").size() > 0 && (jQuery(".fancybox-button").fancybox({
                groupAttr: "data-rel",
                prevEffect: "none",
                nextEffect: "none",
                closeBtn: !0,
                helpers: {
                    title: {
                        type: "inside"
                    }
                }
            }), $(".fancybox-video").fancybox({
                type: "iframe"
            }))), $(".header .navbar-toggle span:nth-child(2)").addClass("short-icon-bar"), $(".header .navbar-toggle span:nth-child(4)").addClass("short-icon-bar"), $(".sidebar .dropdown > a").click(function (e) {
                $(this).next().hasClass("dropdown-menu") && (e.preventDefault(), 0 == $(this).hasClass("collapsed") ? ($(this).addClass("collapsed"), $(this).siblings(".dropdown-menu").slideDown(300)) : ($(this).removeClass("collapsed"), $(this).siblings(".dropdown-menu").slideUp(300)))
            }), jQuery("body").on("shown.bs.collapse", ".accordion.scrollable", function (e) {
                Layout.scrollTo($(e.target), -100)
            }), $(".header .navbar-toggle").click(function () {
                $(".header .navbar-collapse").hasClass("open") ? $(".header .navbar-collapse").slideDown(300).removeClass("open") : $(".header .navbar-collapse").slideDown(300).addClass("open")
            }), $(".scroller").each(function () {
                var a;
                a = $(this).attr("data-height") ? $(this).attr("data-height") : $(this).css("height"), $(this).slimScroll({
                    allowPageScroll: !0,
                    size: "7px",
                    color: $(this).attr("data-handle-color") ? $(this).attr("data-handle-color") : "#bbb",
                    railColor: $(this).attr("data-rail-color") ? $(this).attr("data-rail-color") : "#eaeaea",
                    position: e ? "left" : "right",
                    height: a,
                    alwaysVisible: "1" == $(this).attr("data-always-visible"),
                    railVisible: "1" == $(this).attr("data-rail-visible"),
                    disableFadeOut: !0
                })
            }), $(".header-navigation .dropdown").on("hover", function () {
                $(this).children(".header-navigation-content-ext").show() && $(".header-navigation-content-ext").height() >= $(".header-navigation-description").height() && $(".header-navigation-description").css("height", $(".header-navigation-content-ext").height() + 22)
            }), $(".mobi-toggler").on("click", function (e) {
                e.preventDefault(), $(".header").toggleClass("menuOpened"), $(".header").find(".header-navigation").toggle(300)
            })
        },
        initOWL: function () {
            $(".owl-carousel6-brands").owlCarousel({
                pagination: !1,
                navigation: !0,
                items: 6,
                addClassActive: !0,
                itemsCustom: [
                    [0, 1],
                    [320, 1],
                    [480, 2],
                    [700, 3],
                    [975, 5],
                    [1200, 6],
                    [1400, 6],
                    [1600, 6]
                ]
            }), $(".owl-carousel5").owlCarousel({
                pagination: !1,
                navigation: !0,
                items: 5,
                addClassActive: !0,
                itemsCustom: [
                    [0, 3],
                    [320, 3],
                    [480, 3],
                    [660, 3],
                    [700, 4],
                    [768, 4],
                    [992, 4],
                    [1024, 4],
                    [1200, 5],
                    [1400, 5],
                    [1600, 5]
                ]
            }), $(".owl-carousel4").owlCarousel({
                pagination: !1,
                navigation: !0,
                items: 4,
                addClassActive: !0
            }), $(".owl-carousel3").owlCarousel({
                pagination: !1,
                navigation: !0,
                items: 3,
                addClassActive: !0,
                itemsCustom: [
                    [0, 1],
                    [320, 1],
                    [480, 2],
                    [700, 3],
                    [768, 2],
                    [1024, 3],
                    [1200, 3],
                    [1400, 3],
                    [1600, 3]
                ]
            }), $(".owl-carousel2").owlCarousel({
                pagination: !1,
                navigation: !0,
                items: 2,
                addClassActive: !0,
                itemsCustom: [
                    [0, 1],
                    [320, 1],
                    [480, 2],
                    [700, 3],
                    [975, 2],
                    [1200, 2],
                    [1400, 2],
                    [1600, 2]
                ]
            })
        }
    }
}();