const modal = document.querySelector(".modal"),
    body = document.querySelector("body"),
    showModal = function(t) { modal.classList.toggle("hidden"), modal.classList.contains("hidden") ? body.style.overflow = "auto" : body.style.overflow = "hidden" };
$(function() {
    function t() {
        $(".prg-count").each(function() {
            var t = $(this);
            if (t.isOnScreen()) {
                var e = t.attr("data-count");
                $({ countNum: t.text() }).animate({ countNum: e }, { duration: 2300, easing: "linear", step: function() { t.text(Math.floor(this.countNum)) }, complete: function() { t.text(this.countNum) } })
            }
        })
    }

    function e() {
        $(".year-count").each(function() {
            var t = $(this);
            if (t.isOnScreen()) {
                var e = t.attr("data-count");
                $({ countNum: t.text() }).animate({ countNum: e }, { duration: 1800, easing: "linear", step: function() { t.text(Math.floor(this.countNum)) }, complete: function() { t.text(this.countNum) } })
            }
        })
    }
    AOS.init(), $(".scroll-down").click(function() { return $("html, body").animate({ scrollTop: $("section.who-we-are-section").offset().top }, "slow"), !1 }), $("#navmenu").click(function() { $("#SidebarWrapper").addClass("sidebar-wrapper-active"), $("#SidebarWrapper").removeClass("sidebar-close-active") }), $("#SidebarCloseIcon").click(function() { $("#SidebarWrapper").addClass("sidebar-close-active"), $("#SidebarWrapper").removeClass("sidebar-wrapper-active") }), $("#NavbarToggler").click(function() { $("#SidebarWrapper").addClass("sidebar-wrapper-active"), $("#SidebarWrapper").removeClass("sidebar-close-active") }), $(document).ready(function() { t(), $(window).on("resize scroll", function() { t() }) }), $(document).ready(function() { e(), $(window).on("resize scroll", function() { e() }) }), $(".multipleitems").slick({ infinite: !0, slidesToShow: 2, dots: !0, arrows: !1, slidesToScroll: 2, responsive: [{ breakpoint: 1201, settings: { slidesToShow: 3, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 1199, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 1, infinite: !0, dots: !0 } }, { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }, { breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }), $(".inter-multipleitems").slick({ infinite: !0, slidesToShow: 5, dots: !0, arrows: !1, slidesToScroll: 2, responsive: [{ breakpoint: 1201, settings: { slidesToShow: 5, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 1199, settings: { slidesToShow: 3, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 1, infinite: !0, dots: !0 } }, { breakpoint: 768, settings: { slidesToShow: 2, slidesToScroll: 1 } }, { breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }), $(".autoplay").slick({ slidesToShow: 4, slidesToScroll: 2, autoplaySpeed: 2e3, arrows: !1, dots: !0, responsive: [{ breakpoint: 1201, settings: { slidesToShow: 4, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 1199, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 992, settings: { slidesToShow: 2, slidesToScroll: 2, infinite: !0, dots: !0 } }, { breakpoint: 768, settings: { slidesToShow: 1, slidesToScroll: 1 } }, { breakpoint: 576, settings: { slidesToShow: 1, slidesToScroll: 1 } }] }), $(".responsive").slick({ dots: !0, infinite: !1, speed: 300, slidesToShow: 4, slidesToScroll: 1, responsive: [{ breakpoint: 1200, settings: { slidesToShow: 4, slidesToScroll: 1, infinite: !0, dots: !0 } }, { breakpoint: 991, settings: { slidesToShow: 3, slidesToScroll: 1, infinite: !0, dots: !0 } }, { breakpoint: 767, settings: { slidesToShow: 2, slidesToScroll: 1 } }, { breakpoint: 575, settings: { slidesToShow: 1, slidesToScroll: 1 } }] })
});
var galleryThumbs = new Swiper(".gallery-thumbs", { effect: "coverflow", grabCursor: !0, centeredSlides: !0, slidesPerView: "3", direction: "vertical", coverflowEffect: { rotate: 0, stretch: 0, depth: 50, modifier: 2, slideShadows: !1 } }),
    galleryTop = new Swiper(".swiper-container.testimonial", { speed: 400, spaceBetween: 50, autoplay: { delay: 3e3, disableOnInteraction: !1 }, direction: "horizontal", pagination: { clickable: !0, el: ".swiper-pagination", type: "bullets" }, thumbs: { swiper: galleryThumbs } });
! function(t, e) {
    "use strict";
    t.MixItUp = function() {
        var e = this;
        e._execAction("_constructor", 0), t.extend(e, { selectors: { target: ".mix", filter: ".filter", sort: ".sort" }, animation: { enable: !0, effects: "fade scale", duration: 600, easing: "ease", perspectiveDistance: "3000", perspectiveOrigin: "50% 50%", queue: !0, queueLimit: 1, animateChangeLayout: !1, animateResizeContainer: !0, animateResizeTargets: !1, staggerSequence: !1, reverseOut: !1 }, callbacks: { onMixLoad: !1, onMixStart: !1, onMixBusy: !1, onMixEnd: !1, onMixFail: !1, _user: !1 }, controls: { enable: !0, live: !1, toggleFilterButtons: !1, toggleLogic: "or", activeClass: "active" }, layout: { display: "inline-block", containerClass: "", containerClassFail: "fail" }, load: { filter: "all", sort: !1 }, _$body: null, _$container: null, _$targets: null, _$parent: null, _$sortButtons: null, _$filterButtons: null, _suckMode: !1, _mixing: !1, _sorting: !1, _clicking: !1, _loading: !0, _changingLayout: !1, _changingClass: !1, _changingDisplay: !1, _origOrder: [], _startOrder: [], _newOrder: [], _activeFilter: null, _toggleArray: [], _toggleString: "", _activeSort: "default:asc", _newSort: null, _startHeight: null, _newHeight: null, _incPadding: !0, _newDisplay: null, _newClass: null, _targetsBound: 0, _targetsDone: 0, _queue: [], _$show: t(), _$hide: t() }), e._execAction("_constructor", 1)
    }, t.MixItUp.prototype = {
        constructor: t.MixItUp,
        _instances: {},
        _handled: { _filter: {}, _sort: {} },
        _bound: { _filter: {}, _sort: {} },
        _actions: {},
        _filters: {},
        extend: function(e) { for (var i in e) t.MixItUp.prototype[i] = e[i] },
        addAction: function(e, i, n, o) { t.MixItUp.prototype._addHook("_actions", e, i, n, o) },
        addFilter: function(e, i, n, o) { t.MixItUp.prototype._addHook("_filters", e, i, n, o) },
        _addHook: function(e, i, n, o, r) {
            var a = t.MixItUp.prototype[e],
                s = {};
            r = 1 === r || "post" === r ? "post" : "pre", s[i] = {}, s[i][r] = {}, s[i][r][n] = o, t.extend(!0, a, s)
        },
        _init: function(e, i) {
            var n = this;
            if (n._execAction("_init", 0, arguments), i && t.extend(!0, n, i), n._$body = t("body"), n._domNode = e, n._$container = t(e), n._$container.addClass(n.layout.containerClass), n._id = e.id, n._platformDetect(), n._brake = n._getPrefixedCSS("transition", "none"), n._refresh(!0), n._$parent = n._$targets.parent().length ? n._$targets.parent() : n._$container, n.load.sort && (n._newSort = n._parseSort(n.load.sort), n._newSortString = n.load.sort, n._activeSort = n.load.sort, n._sort(), n._printSort()), n._activeFilter = "all" === n.load.filter ? n.selectors.target : "none" === n.load.filter ? "" : n.load.filter, n.controls.enable && n._bindHandlers(), n.controls.toggleFilterButtons) { n._buildToggleArray(); for (var o = 0; o < n._toggleArray.length; o++) n._updateControls({ filter: n._toggleArray[o], sort: n._activeSort }, !0) } else n.controls.enable && n._updateControls({ filter: n._activeFilter, sort: n._activeSort });
            n._filter(), n._init = !0, n._$container.data("mixItUp", n), n._execAction("_init", 1, arguments), n._buildState(), n._$targets.css(n._brake), n._goMix(n.animation.enable)
        },
        _platformDetect: function() {
            var t = this,
                i = ["Webkit", "Moz", "O", "ms"],
                n = ["webkit", "moz"],
                o = window.navigator.appVersion.match(/Chrome\/(\d+)\./) || !1,
                r = "undefined" != typeof InstallTrigger,
                a = function(t) {
                    for (var e = 0; e < i.length; e++)
                        if (i[e] + "Transition" in t.style) return { prefix: "-" + i[e].toLowerCase() + "-", vendor: i[e] };
                    return "transition" in t.style && ""
                }(t._domNode);
            t._execAction("_platformDetect", 0), t._chrome = !!o && parseInt(o[1], 10), t._ff = !!r && parseInt(window.navigator.userAgent.match(/rv:([^)]+)\)/)[1]), t._prefix = a.prefix, t._vendor = a.vendor, t._suckMode = !window.atob || !t._prefix, t._suckMode && (t.animation.enable = !1), t._ff && t._ff <= 4 && (t.animation.enable = !1);
            for (var s = 0; s < n.length && !window.requestAnimationFrame; s++) window.requestAnimationFrame = window[n[s] + "RequestAnimationFrame"];
            "function" != typeof Object.getPrototypeOf && (Object.getPrototypeOf = "object" == typeof "test".__proto__ ? function(t) { return t.__proto__ } : function(t) { return t.constructor.prototype }), t._domNode.nextElementSibling === e && Object.defineProperty(Element.prototype, "nextElementSibling", {
                get: function() {
                    for (var t = this.nextSibling; t;) {
                        if (1 === t.nodeType) return t;
                        t = t.nextSibling
                    }
                    return null
                }
            }), t._execAction("_platformDetect", 1)
        },
        _refresh: function(t, i) {
            var n = this;
            n._execAction("_refresh", 0, arguments), n._$targets = n._$container.find(n.selectors.target);
            for (var o = 0; o < n._$targets.length; o++) {
                if ((d = n._$targets[o]).dataset === e || i) {
                    d.dataset = {};
                    for (var r = 0; r < d.attributes.length; r++) {
                        var a = d.attributes[r],
                            s = a.name,
                            l = a.value;
                        if (s.indexOf("data-") > -1) {
                            var c = n._helpers._camelCase(s.substring(5, s.length));
                            d.dataset[c] = l
                        }
                    }
                }
                d.mixParent === e && (d.mixParent = n._id)
            }
            if (n._$targets.length && t || !n._origOrder.length && n._$targets.length) {
                n._origOrder = [];
                for (o = 0; o < n._$targets.length; o++) {
                    var d = n._$targets[o];
                    n._origOrder.push(d)
                }
            }
            n._execAction("_refresh", 1, arguments)
        },
        _bindHandlers: function() {
            var i = this,
                n = t.MixItUp.prototype._bound._filter,
                o = t.MixItUp.prototype._bound._sort;
            i._execAction("_bindHandlers", 0), i.controls.live ? i._$body.on("click.mixItUp." + i._id, i.selectors.sort, function() { i._processClick(t(this), "sort") }).on("click.mixItUp." + i._id, i.selectors.filter, function() { i._processClick(t(this), "filter") }) : (i._$sortButtons = t(i.selectors.sort), i._$filterButtons = t(i.selectors.filter), i._$sortButtons.on("click.mixItUp." + i._id, function() { i._processClick(t(this), "sort") }), i._$filterButtons.on("click.mixItUp." + i._id, function() { i._processClick(t(this), "filter") })), n[i.selectors.filter] = n[i.selectors.filter] === e ? 1 : n[i.selectors.filter] + 1, o[i.selectors.sort] = o[i.selectors.sort] === e ? 1 : o[i.selectors.sort] + 1, i._execAction("_bindHandlers", 1)
        },
        _processClick: function(i, n) {
            var o = this,
                r = function(i, n, r) {
                    var a = t.MixItUp.prototype;
                    a._handled["_" + n][o.selectors[n]] = a._handled["_" + n][o.selectors[n]] === e ? 1 : a._handled["_" + n][o.selectors[n]] + 1, a._handled["_" + n][o.selectors[n]] === a._bound["_" + n][o.selectors[n]] && (i[(r ? "remove" : "add") + "Class"](o.controls.activeClass), delete a._handled["_" + n][o.selectors[n]])
                };
            if (o._execAction("_processClick", 0, arguments), !o._mixing || o.animation.queue && o._queue.length < o.animation.queueLimit) {
                if (o._clicking = !0, "sort" === n) {
                    var a = i.attr("data-sort");
                    (!i.hasClass(o.controls.activeClass) || a.indexOf("random") > -1) && (t(o.selectors.sort).removeClass(o.controls.activeClass), r(i, n), o.sort(a))
                }
                if ("filter" === n) {
                    var s, l = i.attr("data-filter"),
                        c = "or" === o.controls.toggleLogic ? "," : "";
                    o.controls.toggleFilterButtons ? (o._buildToggleArray(), i.hasClass(o.controls.activeClass) ? (r(i, n, !0), s = o._toggleArray.indexOf(l), o._toggleArray.splice(s, 1)) : (r(i, n), o._toggleArray.push(l)), o._toggleArray = t.grep(o._toggleArray, function(t) { return t }), o._toggleString = o._toggleArray.join(c), o.filter(o._toggleString)) : i.hasClass(o.controls.activeClass) || (t(o.selectors.filter).removeClass(o.controls.activeClass), r(i, n), o.filter(l))
                }
                o._execAction("_processClick", 1, arguments)
            } else "function" == typeof o.callbacks.onMixBusy && o.callbacks.onMixBusy.call(o._domNode, o._state, o), o._execAction("_processClickBusy", 1, arguments)
        },
        _buildToggleArray: function() {
            var t = this,
                e = t._activeFilter.replace(/\s/g, "");
            if (t._execAction("_buildToggleArray", 0, arguments), "or" === t.controls.toggleLogic) t._toggleArray = e.split(",");
            else { t._toggleArray = e.split("."), !t._toggleArray[0] && t._toggleArray.shift(); for (var i, n = 0; i = t._toggleArray[n]; n++) t._toggleArray[n] = "." + i }
            t._execAction("_buildToggleArray", 1, arguments)
        },
        _updateControls: function(i, n) {
            var o = this,
                r = { filter: i.filter, sort: i.sort },
                a = function(t, e) { try { n && "filter" === s && "none" !== r.filter && "" !== r.filter ? t.filter(e).addClass(o.controls.activeClass) : t.removeClass(o.controls.activeClass).filter(e).addClass(o.controls.activeClass) } catch (t) {} },
                s = "filter",
                l = null;
            o._execAction("_updateControls", 0, arguments), i.filter === e && (r.filter = o._activeFilter), i.sort === e && (r.sort = o._activeSort), r.filter === o.selectors.target && (r.filter = "all");
            for (var c = 0; 2 > c; c++)(l = o.controls.live ? t(o.selectors[s]) : o["_$" + s + "Buttons"]) && a(l, "[data-" + s + '="' + r[s] + '"]'), s = "sort";
            o._execAction("_updateControls", 1, arguments)
        },
        _filter: function() {
            var e = this;
            e._execAction("_filter", 0);
            for (var i = 0; i < e._$targets.length; i++) {
                var n = t(e._$targets[i]);
                n.is(e._activeFilter) ? e._$show = e._$show.add(n) : e._$hide = e._$hide.add(n)
            }
            e._execAction("_filter", 1)
        },
        _sort: function() {
            var t = this;
            t._execAction("_sort", 0), t._startOrder = [];
            for (var e = 0; e < t._$targets.length; e++) {
                var i = t._$targets[e];
                t._startOrder.push(i)
            }
            switch (t._newSort[0].sortBy) {
                case "default":
                    t._newOrder = t._origOrder;
                    break;
                case "random":
                    t._newOrder = function(t) {
                        for (var e = t.slice(), i = e.length, n = i; n--;) {
                            var o = parseInt(Math.random() * i),
                                r = e[n];
                            e[n] = e[o], e[o] = r
                        }
                        return e
                    }(t._startOrder);
                    break;
                case "custom":
                    t._newOrder = t._newSort[0].order;
                    break;
                default:
                    t._newOrder = t._startOrder.concat().sort(function(e, i) { return t._compare(e, i) })
            }
            t._execAction("_sort", 1)
        },
        _compare: function(t, e, i) {
            i = i || 0;
            var n = this,
                o = n._newSort[i].order,
                r = function(t) { return t.dataset[n._newSort[i].sortBy] || 0 },
                a = isNaN(1 * r(t)) ? r(t).toLowerCase() : 1 * r(t),
                s = isNaN(1 * r(e)) ? r(e).toLowerCase() : 1 * r(e);
            return s > a ? "asc" === o ? -1 : 1 : a > s ? "asc" === o ? 1 : -1 : a === s && n._newSort.length > i + 1 ? n._compare(t, e, i + 1) : 0
        },
        _printSort: function(t) {
            var e = this,
                i = t ? e._startOrder : e._newOrder,
                n = e._$parent[0].querySelectorAll(e.selectors.target),
                o = n.length ? n[n.length - 1].nextElementSibling : null,
                r = document.createDocumentFragment();
            e._execAction("_printSort", 0, arguments);
            for (var a = 0; a < n.length; a++) {
                var s = n[a],
                    l = s.nextSibling;
                "absolute" !== s.style.position && (l && "#text" === l.nodeName && e._$parent[0].removeChild(l), e._$parent[0].removeChild(s))
            }
            for (a = 0; a < i.length; a++) {
                var c = i[a];
                if ("default" !== e._newSort[0].sortBy || "desc" !== e._newSort[0].order || t) r.appendChild(c), r.appendChild(document.createTextNode(" "));
                else {
                    var d = r.firstChild;
                    r.insertBefore(c, d), r.insertBefore(document.createTextNode(" "), c)
                }
            }
            o ? e._$parent[0].insertBefore(r, o) : e._$parent[0].appendChild(r), e._execAction("_printSort", 1, arguments)
        },
        _parseSort: function(t) {
            for (var e = "string" == typeof t ? t.split(" ") : [t], i = [], n = 0; n < e.length; n++) {
                var o = "string" == typeof t ? e[n].split(":") : ["custom", e[n]],
                    r = { sortBy: this._helpers._camelCase(o[0]), order: o[1] || "asc" };
                if (i.push(r), "default" === r.sortBy || "random" === r.sortBy) break
            }
            return this._execFilter("_parseSort", i, arguments)
        },
        _parseEffects: function() {
            var t = this,
                e = { opacity: "", transformIn: "", transformOut: "", filter: "" },
                i = function(e, i, n) { if (t.animation.effects.indexOf(e) > -1) { if (i) { var o = t.animation.effects.indexOf(e + "("); if (o > -1) { var r = t.animation.effects.substring(o); return { val: /\(([^)]+)\)/.exec(r)[1] } } } return !0 } return !1 },
                n = function(t, e) { return e ? "-" === t.charAt(0) ? t.substr(1, t.length) : "-" + t : t },
                o = function(t, o) {
                    for (var r = [
                            ["scale", ".01"],
                            ["translateX", "20px"],
                            ["translateY", "20px"],
                            ["translateZ", "20px"],
                            ["rotateX", "90deg"],
                            ["rotateY", "90deg"],
                            ["rotateZ", "180deg"]
                        ], a = 0; a < r.length; a++) {
                        var s = r[a][0],
                            l = r[a][1],
                            c = o && "scale" !== s;
                        e[t] += i(s) ? s + "(" + n(i(s, !0).val || l, c) + ") " : ""
                    }
                };
            return e.opacity = i("fade") ? i("fade", !0).val || "0" : "1", o("transformIn"), t.animation.reverseOut ? o("transformOut", !0) : e.transformOut = e.transformIn, e.transition = {}, e.transition = t._getPrefixedCSS("transition", "all " + t.animation.duration + "ms " + t.animation.easing + ", opacity " + t.animation.duration + "ms linear"), t.animation.stagger = !!i("stagger"), t.animation.staggerDuration = parseInt(i("stagger") && i("stagger", !0).val ? i("stagger", !0).val : 100), t._execFilter("_parseEffects", e)
        },
        _buildState: function(t) { var e, i = this; return i._execAction("_buildState", 0), e = { activeFilter: "" === i._activeFilter ? "none" : i._activeFilter, activeSort: t && i._newSortString ? i._newSortString : i._activeSort, fail: !i._$show.length && "" !== i._activeFilter, $targets: i._$targets, $show: i._$show, $hide: i._$hide, totalTargets: i._$targets.length, totalShow: i._$show.length, totalHide: i._$hide.length, display: t && i._newDisplay ? i._newDisplay : i.layout.display }, t ? i._execFilter("_buildState", e) : (i._state = e, void i._execAction("_buildState", 1)) },
        _goMix: function(t) {
            var e = this,
                i = function() { e._chrome && 31 === e._chrome && r(e._$parent[0]), e._setInter(), n() },
                n = function() {
                    var t = window.pageYOffset,
                        i = window.pageXOffset;
                    document.documentElement.scrollHeight, e._getInterMixData(), e._setFinal(), e._getFinalMixData(), window.pageYOffset !== t && window.scrollTo(i, t), e._prepTargets(), window.requestAnimationFrame ? requestAnimationFrame(o) : setTimeout(function() { o() }, 20)
                },
                o = function() { e._animateTargets(), 0 === e._targetsBound && e._cleanUp() },
                r = function(t) {
                    var e = t.parentElement,
                        i = document.createElement("div"),
                        n = document.createDocumentFragment();
                    e.insertBefore(i, t), n.appendChild(t), e.replaceChild(t, i)
                },
                a = e._buildState(!0);
            e._execAction("_goMix", 0, arguments), !e.animation.duration && (t = !1), e._mixing = !0, e._$container.removeClass(e.layout.containerClassFail), "function" == typeof e.callbacks.onMixStart && e.callbacks.onMixStart.call(e._domNode, e._state, a, e), e._$container.trigger("mixStart", [e._state, a, e]), e._getOrigMixData(), t && !e._suckMode ? window.requestAnimationFrame ? requestAnimationFrame(i) : i() : e._cleanUp(), e._execAction("_goMix", 1, arguments)
        },
        _getTargetData: function(t, e) {
            var i;
            t.dataset[e + "PosX"] = t.offsetLeft, t.dataset[e + "PosY"] = t.offsetTop, this.animation.animateResizeTargets && (i = this._suckMode ? { marginBottom: "", marginRight: "" } : window.getComputedStyle(t), t.dataset[e + "MarginBottom"] = parseInt(i.marginBottom), t.dataset[e + "MarginRight"] = parseInt(i.marginRight), t.dataset[e + "Width"] = t.offsetWidth, t.dataset[e + "Height"] = t.offsetHeight)
        },
        _getOrigMixData: function() {
            var t = this,
                e = t._suckMode ? { boxSizing: "" } : window.getComputedStyle(t._$parent[0]),
                i = e.boxSizing || e[t._vendor + "BoxSizing"];
            t._incPadding = "border-box" === i, t._execAction("_getOrigMixData", 0), !t._suckMode && (t.effects = t._parseEffects()), t._$toHide = t._$hide.filter(":visible"), t._$toShow = t._$show.filter(":hidden"), t._$pre = t._$targets.filter(":visible"), t._startHeight = t._incPadding ? t._$parent.outerHeight() : t._$parent.height();
            for (var n = 0; n < t._$pre.length; n++) {
                var o = t._$pre[n];
                t._getTargetData(o, "orig")
            }
            t._execAction("_getOrigMixData", 1)
        },
        _setInter: function() {
            var t = this;
            t._execAction("_setInter", 0), t._changingLayout && t.animation.animateChangeLayout ? (t._$toShow.css("display", t._newDisplay), t._changingClass && t._$container.removeClass(t.layout.containerClass).addClass(t._newClass)) : t._$toShow.css("display", t.layout.display), t._execAction("_setInter", 1)
        },
        _getInterMixData: function() {
            var t = this;
            t._execAction("_getInterMixData", 0);
            for (var e = 0; e < t._$toShow.length; e++) {
                var i = t._$toShow[e];
                t._getTargetData(i, "inter")
            }
            for (e = 0; e < t._$pre.length; e++) {
                i = t._$pre[e];
                t._getTargetData(i, "inter")
            }
            t._execAction("_getInterMixData", 1)
        },
        _setFinal: function() {
            var t = this;
            t._execAction("_setFinal", 0), t._sorting && t._printSort(), t._$toHide.removeStyle("display"), t._changingLayout && t.animation.animateChangeLayout && t._$pre.css("display", t._newDisplay), t._execAction("_setFinal", 1)
        },
        _getFinalMixData: function() {
            var t = this;
            t._execAction("_getFinalMixData", 0);
            for (var e = 0; e < t._$toShow.length; e++) {
                var i = t._$toShow[e];
                t._getTargetData(i, "final")
            }
            for (e = 0; e < t._$pre.length; e++) {
                i = t._$pre[e];
                t._getTargetData(i, "final")
            }
            t._newHeight = t._incPadding ? t._$parent.outerHeight() : t._$parent.height(), t._sorting && t._printSort(!0), t._$toShow.removeStyle("display"), t._$pre.css("display", t.layout.display), t._changingClass && t.animation.animateChangeLayout && t._$container.removeClass(t._newClass).addClass(t.layout.containerClass), t._execAction("_getFinalMixData", 1)
        },
        _prepTargets: function() {
            var e = this,
                i = { _in: e._getPrefixedCSS("transform", e.effects.transformIn), _out: e._getPrefixedCSS("transform", e.effects.transformOut) };
            e._execAction("_prepTargets", 0), e.animation.animateResizeContainer && e._$parent.css("height", e._startHeight + "px");
            for (var n = 0; n < e._$toShow.length; n++) {
                var o = e._$toShow[n],
                    r = t(o);
                o.style.opacity = e.effects.opacity, o.style.display = e._changingLayout && e.animation.animateChangeLayout ? e._newDisplay : e.layout.display, r.css(i._in), e.animation.animateResizeTargets && (o.style.width = o.dataset.finalWidth + "px", o.style.height = o.dataset.finalHeight + "px", o.style.marginRight = -(o.dataset.finalWidth - o.dataset.interWidth) + 1 * o.dataset.finalMarginRight + "px", o.style.marginBottom = -(o.dataset.finalHeight - o.dataset.interHeight) + 1 * o.dataset.finalMarginBottom + "px")
            }
            for (n = 0; n < e._$pre.length; n++) {
                o = e._$pre[n], r = t(o);
                var a = { x: o.dataset.origPosX - o.dataset.interPosX, y: o.dataset.origPosY - o.dataset.interPosY };
                i = e._getPrefixedCSS("transform", "translate(" + a.x + "px," + a.y + "px)");
                r.css(i), e.animation.animateResizeTargets && (o.style.width = o.dataset.origWidth + "px", o.style.height = o.dataset.origHeight + "px", o.dataset.origWidth - o.dataset.finalWidth && (o.style.marginRight = -(o.dataset.origWidth - o.dataset.interWidth) + 1 * o.dataset.origMarginRight + "px"), o.dataset.origHeight - o.dataset.finalHeight && (o.style.marginBottom = -(o.dataset.origHeight - o.dataset.interHeight) + 1 * o.dataset.origMarginBottom + "px"))
            }
            e._execAction("_prepTargets", 1)
        },
        _animateTargets: function() {
            var e = this;
            e._execAction("_animateTargets", 0), e._targetsDone = 0, e._targetsBound = 0, e._$parent.css(e._getPrefixedCSS("perspective", e.animation.perspectiveDistance + "px")).css(e._getPrefixedCSS("perspective-origin", e.animation.perspectiveOrigin)), e.animation.animateResizeContainer && e._$parent.css(e._getPrefixedCSS("transition", "height " + e.animation.duration + "ms ease")).css("height", e._newHeight + "px");
            for (var i = 0; i < e._$toShow.length; i++) {
                var n = e._$toShow[i],
                    o = t(n),
                    r = { x: n.dataset.finalPosX - n.dataset.interPosX, y: n.dataset.finalPosY - n.dataset.interPosY },
                    a = e._getDelay(i),
                    s = {};
                n.style.opacity = "";
                for (var l = 0; 2 > l; l++) {
                    var c = 0 === l ? c = e._prefix : "";
                    e._ff && e._ff <= 20 && (s[c + "transition-property"] = "all", s[c + "transition-timing-function"] = e.animation.easing + "ms", s[c + "transition-duration"] = e.animation.duration + "ms"), s[c + "transition-delay"] = a + "ms", s[c + "transform"] = "translate(" + r.x + "px," + r.y + "px)"
                }(e.effects.transform || e.effects.opacity) && e._bindTargetDone(o), e._ff && e._ff <= 20 ? o.css(s) : o.css(e.effects.transition).css(s)
            }
            for (i = 0; i < e._$pre.length; i++) {
                n = e._$pre[i], o = t(n), r = { x: n.dataset.finalPosX - n.dataset.interPosX, y: n.dataset.finalPosY - n.dataset.interPosY }, a = e._getDelay(i);
                (n.dataset.finalPosX !== n.dataset.origPosX || n.dataset.finalPosY !== n.dataset.origPosY) && e._bindTargetDone(o), o.css(e._getPrefixedCSS("transition", "all " + e.animation.duration + "ms " + e.animation.easing + " " + a + "ms")), o.css(e._getPrefixedCSS("transform", "translate(" + r.x + "px," + r.y + "px)")), e.animation.animateResizeTargets && (n.dataset.origWidth - n.dataset.finalWidth && 1 * n.dataset.finalWidth && (n.style.width = n.dataset.finalWidth + "px", n.style.marginRight = -(n.dataset.finalWidth - n.dataset.interWidth) + 1 * n.dataset.finalMarginRight + "px"), n.dataset.origHeight - n.dataset.finalHeight && 1 * n.dataset.finalHeight && (n.style.height = n.dataset.finalHeight + "px", n.style.marginBottom = -(n.dataset.finalHeight - n.dataset.interHeight) + 1 * n.dataset.finalMarginBottom + "px"))
            }
            e._changingClass && e._$container.removeClass(e.layout.containerClass).addClass(e._newClass);
            for (i = 0; i < e._$toHide.length; i++) {
                n = e._$toHide[i], o = t(n), a = e._getDelay(i);
                var d = {};
                for (l = 0; 2 > l; l++) { d[(c = 0 === l ? c = e._prefix : "") + "transition-delay"] = a + "ms", d[c + "transform"] = e.effects.transformOut, d.opacity = e.effects.opacity }
                o.css(e.effects.transition).css(d), (e.effects.transform || e.effects.opacity) && e._bindTargetDone(o)
            }
            e._execAction("_animateTargets", 1)
        },
        _bindTargetDone: function(e) {
            var i = this,
                n = e[0];
            i._execAction("_bindTargetDone", 0, arguments), n.dataset.bound || (n.dataset.bound = !0, i._targetsBound++, e.on("webkitTransitionEnd.mixItUp transitionend.mixItUp", function(o) {
                (o.originalEvent.propertyName.indexOf("transform") > -1 || o.originalEvent.propertyName.indexOf("opacity") > -1) && t(o.originalEvent.target).is(i.selectors.target) && (e.off(".mixItUp"), n.dataset.bound = "", i._targetDone())
            })), i._execAction("_bindTargetDone", 1, arguments)
        },
        _targetDone: function() {
            var t = this;
            t._execAction("_targetDone", 0), t._targetsDone++, t._targetsDone === t._targetsBound && t._cleanUp(), t._execAction("_targetDone", 1)
        },
        _cleanUp: function() {
            var e = this,
                i = e.animation.animateResizeTargets ? "transform opacity width height margin-bottom margin-right" : "transform opacity";
            e._execAction("_cleanUp", 0), e._changingLayout ? e._$show.css("display", e._newDisplay) : e._$show.css("display", e.layout.display), e._$targets.css(e._brake), e._$targets.removeStyle(i, e._prefix).removeAttr("data-inter-pos-x data-inter-pos-y data-final-pos-x data-final-pos-y data-orig-pos-x data-orig-pos-y data-orig-height data-orig-width data-final-height data-final-width data-inter-width data-inter-height data-orig-margin-right data-orig-margin-bottom data-inter-margin-right data-inter-margin-bottom data-final-margin-right data-final-margin-bottom"), e._$hide.removeStyle("display"), e._$parent.removeStyle("height transition perspective-distance perspective perspective-origin-x perspective-origin-y perspective-origin perspectiveOrigin", e._prefix), e._sorting && (e._printSort(), e._activeSort = e._newSortString, e._sorting = !1), e._changingLayout && (e._changingDisplay && (e.layout.display = e._newDisplay, e._changingDisplay = !1), e._changingClass && (e._$parent.removeClass(e.layout.containerClass).addClass(e._newClass), e.layout.containerClass = e._newClass, e._changingClass = !1), e._changingLayout = !1), e._refresh(), e._buildState(), e._state.fail && e._$container.addClass(e.layout.containerClassFail), e._$show = t(), e._$hide = t(), window.requestAnimationFrame && requestAnimationFrame(function() { e._$targets.removeStyle("transition", e._prefix) }), e._mixing = !1, "function" == typeof e.callbacks._user && e.callbacks._user.call(e._domNode, e._state, e), "function" == typeof e.callbacks.onMixEnd && e.callbacks.onMixEnd.call(e._domNode, e._state, e), e._$container.trigger("mixEnd", [e._state, e]), e._state.fail && ("function" == typeof e.callbacks.onMixFail && e.callbacks.onMixFail.call(e._domNode, e._state, e), e._$container.trigger("mixFail", [e._state, e])), e._loading && ("function" == typeof e.callbacks.onMixLoad && e.callbacks.onMixLoad.call(e._domNode, e._state, e), e._$container.trigger("mixLoad", [e._state, e])), e._queue.length && (e._execAction("_queue", 0), e.multiMix(e._queue[0][0], e._queue[0][1], e._queue[0][2]), e._queue.splice(0, 1)), e._execAction("_cleanUp", 1), e._loading = !1
        },
        _getPrefixedCSS: function(t, e, i) {
            var n = {},
                o = "",
                r = -1;
            for (r = 0; 2 > r; r++) n[(o = 0 === r ? this._prefix : "") + t] = i ? o + e : e;
            return this._execFilter("_getPrefixedCSS", n, arguments)
        },
        _getDelay: function(t) {
            var e = this,
                i = "function" == typeof e.animation.staggerSequence ? e.animation.staggerSequence.call(e._domNode, t, e._state) : t,
                n = e.animation.stagger ? i * e.animation.staggerDuration : 0;
            return e._execFilter("_getDelay", n, arguments)
        },
        _parseMultiMixArgs: function(t) {
            for (var e = { command: null, animate: this.animation.enable, callback: null }, i = 0; i < t.length; i++) {
                var n = t[i];
                null !== n && ("object" == typeof n || "string" == typeof n ? e.command = n : "boolean" == typeof n ? e.animate = n : "function" == typeof n && (e.callback = n))
            }
            return this._execFilter("_parseMultiMixArgs", e, arguments)
        },
        _parseInsertArgs: function(e) { for (var i = this, n = { index: 0, $object: t(), multiMix: { filter: i._state.activeFilter }, callback: null }, o = 0; o < e.length; o++) { var r = e[o]; "number" == typeof r ? n.index = r : "object" == typeof r && r instanceof t ? n.$object = r : "object" == typeof r && i._helpers._isElement(r) ? n.$object = t(r) : "object" == typeof r && null !== r ? n.multiMix = r : "boolean" != typeof r || r ? "function" == typeof r && (n.callback = r) : n.multiMix = !1 } return i._execFilter("_parseInsertArgs", n, arguments) },
        _execAction: function(t, e, i) {
            var n = this,
                o = e ? "post" : "pre";
            if (!n._actions.isEmptyObject && n._actions.hasOwnProperty(t))
                for (var r in n._actions[t][o]) n._actions[t][o][r].call(n, i)
        },
        _execFilter: function(t, e, i) { var n = this; if (n._filters.isEmptyObject || !n._filters.hasOwnProperty(t)) return e; for (var o in n._filters[t]) return n._filters[t][o].call(n, i) },
        _helpers: { _camelCase: function(t) { return t.replace(/-([a-z])/g, function(t) { return t[1].toUpperCase() }) }, _isElement: function(t) { return window.HTMLElement ? t instanceof HTMLElement : null !== t && 1 === t.nodeType && "string" === t.nodeName } },
        isMixing: function() { return this._execFilter("isMixing", this._mixing) },
        filter: function() {
            var t = this,
                e = t._parseMultiMixArgs(arguments);
            t._clicking && (t._toggleString = ""), t.multiMix({ filter: e.command }, e.animate, e.callback)
        },
        sort: function() {
            var t = this._parseMultiMixArgs(arguments);
            this.multiMix({ sort: t.command }, t.animate, t.callback)
        },
        changeLayout: function() {
            var t = this._parseMultiMixArgs(arguments);
            this.multiMix({ changeLayout: t.command }, t.animate, t.callback)
        },
        multiMix: function() {
            var t = this,
                i = t._parseMultiMixArgs(arguments);
            if (t._execAction("multiMix", 0, arguments), t._mixing) t.animation.queue && t._queue.length < t.animation.queueLimit ? (t._queue.push(arguments), t.controls.enable && !t._clicking && t._updateControls(i.command), t._execAction("multiMixQueue", 1, arguments)) : ("function" == typeof t.callbacks.onMixBusy && t.callbacks.onMixBusy.call(t._domNode, t._state, t), t._$container.trigger("mixBusy", [t._state, t]), t._execAction("multiMixBusy", 1, arguments));
            else {
                t.controls.enable && !t._clicking && (t.controls.toggleFilterButtons && t._buildToggleArray(), t._updateControls(i.command, t.controls.toggleFilterButtons)), t._queue.length < 2 && (t._clicking = !1), delete t.callbacks._user, i.callback && (t.callbacks._user = i.callback);
                var n = i.command.sort,
                    o = i.command.filter,
                    r = i.command.changeLayout;
                t._refresh(), n && (t._newSort = t._parseSort(n), t._newSortString = n, t._sorting = !0, t._sort()), o !== e && (o = "all" === o ? t.selectors.target : o, t._activeFilter = o), t._filter(), r && (t._newDisplay = "string" == typeof r ? r : r.display || t.layout.display, t._newClass = r.containerClass || "", (t._newDisplay !== t.layout.display || t._newClass !== t.layout.containerClass) && (t._changingLayout = !0, t._changingClass = t._newClass !== t.layout.containerClass, t._changingDisplay = t._newDisplay !== t.layout.display)), t._$targets.css(t._brake), t._goMix(i.animate ^ t.animation.enable ? i.animate : t.animation.enable), t._execAction("multiMix", 1, arguments)
            }
        },
        insert: function() {
            var t = this,
                e = t._parseInsertArgs(arguments),
                i = "function" == typeof e.callback ? e.callback : null,
                n = document.createDocumentFragment(),
                o = (t._refresh(), t._$targets.length ? e.index < t._$targets.length || !t._$targets.length ? t._$targets[e.index] : t._$targets[t._$targets.length - 1].nextElementSibling : t._$parent[0].children[0]);
            if (t._execAction("insert", 0, arguments), e.$object) {
                for (var r = 0; r < e.$object.length; r++) {
                    var a = e.$object[r];
                    n.appendChild(a), n.appendChild(document.createTextNode(" "))
                }
                t._$parent[0].insertBefore(n, o)
            }
            t._execAction("insert", 1, arguments), "object" == typeof e.multiMix && t.multiMix(e.multiMix, i)
        },
        prepend: function() {
            var t = this._parseInsertArgs(arguments);
            this.insert(0, t.$object, t.multiMix, t.callback)
        },
        append: function() {
            var t = this,
                e = t._parseInsertArgs(arguments);
            t.insert(t._state.totalTargets, e.$object, e.multiMix, e.callback)
        },
        getOption: function(t) {
            var i = this;
            return t ? i._execFilter("getOption", function(t, i) {
                for (var n = i.split("."), o = n.pop(), r = n.length, a = 1, s = n[0] || i;
                    (t = t[s]) && r > a;) s = n[a], a++;
                return t !== e ? t[o] !== e ? t[o] : t : void 0
            }(i, t), arguments) : i
        },
        setOptions: function(e) {
            var i = this;
            i._execAction("setOptions", 0, arguments), "object" == typeof e && t.extend(!0, i, e), i._execAction("setOptions", 1, arguments)
        },
        getState: function() { var t = this; return t._execFilter("getState", t._state, t) },
        forceRefresh: function() { this._refresh(!1, !0) },
        destroy: function(e) {
            var i = this,
                n = t.MixItUp.prototype._bound._filter,
                o = t.MixItUp.prototype._bound._sort;
            i._execAction("destroy", 0, arguments), i._$body.add(t(i.selectors.sort)).add(t(i.selectors.filter)).off(".mixItUp");
            for (var r = 0; r < i._$targets.length; r++) {
                var a = i._$targets[r];
                e && (a.style.display = ""), delete a.mixParent
            }
            i._execAction("destroy", 1, arguments), n[i.selectors.filter] && n[i.selectors.filter] > 1 ? n[i.selectors.filter]-- : 1 === n[i.selectors.filter] && delete n[i.selectors.filter], o[i.selectors.sort] && o[i.selectors.sort] > 1 ? o[i.selectors.sort]-- : 1 === o[i.selectors.sort] && delete o[i.selectors.sort], delete t.MixItUp.prototype._instances[i._id]
        }
    }, t.fn.mixItUp = function() {
        var i, n = arguments,
            o = [];
        return i = this.each(function() {
            if (n && "string" == typeof n[0]) {
                var i = t.MixItUp.prototype._instances[this.id];
                if ("isLoaded" === n[0]) o.push(!!i);
                else {
                    var r = i[n[0]](n[1], n[2], n[3]);
                    r !== e && o.push(r)
                }
            } else ! function(e, i) {
                var n = new t.MixItUp;
                n._execAction("_instantiate", 0, arguments), e.id = e.id ? e.id : "MixItUp" + ("00000" + (16777216 * Math.random() << 0).toString(16)).substr(-6).toUpperCase(), n._instances[e.id] || (n._instances[e.id] = n, n._init(e, i)), n._execAction("_instantiate", 1, arguments)
            }(this, n[0])
        }), o.length ? o.length > 1 ? o : o[0] : i
    }, t.fn.removeStyle = function(i, n) {
        return n = n || "", this.each(function() {
            for (var o = this, r = i.split(" "), a = 0; a < r.length; a++)
                for (var s = 0; 4 > s; s++) {
                    switch (s) {
                        case 0:
                            var l = r[a];
                            break;
                        case 1:
                            l = t.MixItUp.prototype._helpers._camelCase(l);
                            break;
                        case 2:
                            l = n + r[a];
                            break;
                        case 3:
                            l = t.MixItUp.prototype._helpers._camelCase(n + r[a])
                    }
                    if (o.style[l] !== e && "unknown" != typeof o.style[l] && o.style[l].length > 0 && (o.style[l] = ""), !n && 1 === s) break
                }
            o.attributes && o.attributes.style && o.attributes.style !== e && "" === o.attributes.style.value && o.attributes.removeNamedItem("style")
        })
    }
}(jQuery);
class Cursor {
    constructor() { this.initCursor(), this.initHovers() }
    initCursor() {
        const { Back: t } = window;
        this.outerCursor = document.querySelector(".circle-cursor--outer"), this.innerCursor = document.querySelector(".circle-cursor--inner"), this.outerCursorBox = this.outerCursor.getBoundingClientRect(), this.outerCursorSpeed = 0, this.easing = t.easeOut.config(1.7), this.clientX = -100, this.clientY = -100, this.showCursor = !1;
        const e = () => { TweenMax.set(this.innerCursor, { x: this.clientX, y: this.clientY }), TweenMax.set(this.outerCursor, { x: this.clientX - this.outerCursorBox.width / 2, y: this.clientY - this.outerCursorBox.height / 2 }), setTimeout(() => { this.outerCursorSpeed = .2 }, 100), this.showCursor = !0 };
        document.addEventListener("mousemove", e), document.addEventListener("mousemove", t => { this.clientX = t.clientX, this.clientY = t.clientY });
        const i = () => { TweenMax.set(this.innerCursor, { x: this.clientX, y: this.clientY }), this.isStuck || TweenMax.to(this.outerCursor, this.outerCursorSpeed, { x: this.clientX - this.outerCursorBox.width / 2, y: this.clientY - this.outerCursorBox.height / 2 }), this.showCursor && document.removeEventListener("mousemove", e), requestAnimationFrame(i) };
        requestAnimationFrame(i)
    }
    initHovers() {
        const t = t => {
                this.isStuck = !0;
                const e = t.currentTarget.getBoundingClientRect();
                this.outerCursorOriginals = { width: this.outerCursorBox.width, height: this.outerCursorBox.height }, TweenMax.to(this.outerCursor, .2, { x: e.left, y: e.top, width: e.width, height: e.height, opacity: .4, borderColor: "#000" })
            },
            e = () => { this.isStuck = !1, TweenMax.to(this.outerCursor, .2, { width: this.outerCursorOriginals.width, height: this.outerCursorOriginals.height, borderColor: "#000" }) };
        document.querySelectorAll(".link").forEach(i => { i.addEventListener("mouseenter", t), i.addEventListener("mouseleave", e) });
        const i = TweenMax.to(this.outerCursor, .3, { backgroundColor: "#337AB7", borderColor: "#337AB7", ease: this.easing, paused: !0 }),
            n = () => { this.outerCursorSpeed = 0, TweenMax.set(this.innerCursor, { opacity: 0 }), i.play() },
            o = () => { this.outerCursorSpeed = .3, TweenMax.set(this.innerCursor, { opacity: 1 }), i.reverse() };
        document.querySelectorAll(".nav-link").forEach(t => { t.addEventListener("mouseenter", n), t.addEventListener("mouseleave", o) })
    }
}
$(document).ready(function() { new Cursor }), $(document).ready(function() {
    var t = $("#PopupOne").attr("src");
    $("#Popupone").on("hide.bs.modal", function() { $("#PopupOne").attr("src", "") }), $("#Popupone").on("show.bs.modal", function() { $("#PopupOne").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#PopupTwo").attr("src");
    $("#Popuptwo").on("hide.bs.modal", function() { $("#PopupTwo").attr("src", "") }), $("#Popuptwo").on("show.bs.modal", function() { $("#PopupTwo").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#PopupThree").attr("src");
    $("#Popupthree").on("hide.bs.modal", function() { $("#PopupThree").attr("src", "") }), $("#Popupthree").on("show.bs.modal", function() { $("#PopupThree").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#PopupFour").attr("src");
    $("#Popupfour").on("hide.bs.modal", function() { $("#PopupFour").attr("src", "") }), $("#Popupfour").on("show.bs.modal", function() { $("#PopupFour").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#PopupFive").attr("src");
    $("#Popupfive").on("hide.bs.modal", function() { $("#PopupFive").attr("src", "") }), $("#Popupfive").on("show.bs.modal", function() { $("#PopupFive").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#EnvironmentOne").attr("src");
    $("#Environmentone").on("hide.bs.modal", function() { $("#EnvironmentOne").attr("src", "") }), $("#Environmentone").on("show.bs.modal", function() { $("#EnvironmentOne").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#EnvironmentTwo").attr("src");
    $("#Environmenttwo").on("hide.bs.modal", function() { $("#EnvironmentTwo").attr("src", "") }), $("#Environmenttwo").on("show.bs.modal", function() { $("#EnvironmentTwo").attr("src", t) })
}), $(document).ready(function() {
    var t = $("#CompanyOne").attr("src");
    $("#Company").on("hide.bs.modal", function() { $("#CompanyOne").attr("src", "") }), $("#Company").on("show.bs.modal", function() { $("#CompanyOne").attr("src", t) })
});


$('.like-btn').on('click', function() {
    $(this).toggleClass('like-active');
});

$('.clap-btn').on('click', function() {
    $(this).toggleClass('clap-active');
});


// new Vue({
//     el: "#vue",
//     data: {
//         counter: 0
//     },
//     methods: {
//         clapClick() {
//             const clickCounter = this.$refs.clicker
//             clickCounter.textContent = `+${++this.counter}`
//             if (clickCounter.classList.contains('first')) {
//                 this.runAnimation(clickCounter, 'act')
//             } else {
//                 this.runAnimation(clickCounter, 'first')
//             }
//             this.runAnimation(this.$refs.clap, 'scale')
//         },
//         runAnimation(element, className) {
//             if (element && !element.classList.contains(className)) {
//                 element.classList.add(className)
//             } else {
//                 element.classList.remove(className)
//                     // se
//                     // }, 1)tTimeout(() => {
//                 element.style.width = element.offsetWidth
//                 element.classList.add(className)
//             }
//         }
//     }
// })

var initScrollTop = $(window).scrollTop();

// Set the image's vertical background position based on the scroll top when the page is loaded.
$(parallax1).css({ 'background-position-y': (initScrollTop / 75) + '%' });

// When the user scrolls...
$(window).scroll(function() {

    // Find the new scroll top.
    var scrollTop = $(window).scrollTop();

    // Set the new background position.
    $(parallax1).css({ 'background-position-y': (scrollTop / 75) + '%' });

});