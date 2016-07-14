! function() {
    function a(a) {
        var n = "webkitAnimationEnd animationend";
        a.each(function() {
            var a = jQuery(this),
                i = a.data("animation");
            a.addClass(i).one(n, function() {
                a.removeClass(i)
            })
        })
    }
    var n = jQuery("#lnt-fs-header-carousel"),
        i = n.find(".item:first").find("[data-animation ^= 'animated']");
    n.carousel(), a(i), n.carousel("pause"), n.on("slide.bs.carousel", function(n) {
        var i = jQuery(n.relatedTarget).find("[data-animation ^= 'animated']");
        a(i)
    })
}(jQuery);