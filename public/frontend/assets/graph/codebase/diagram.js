/*
@license

dhtmlxDiagram v.3.0.3 Professional

This software can be used only as part of dhtmlx.com site.
You are not allowed to use it on any other site

(c) XB Software.

*/
if (
    (window.dhx && ((window.dhx_legacy = dhx), delete window.dhx),
    (function (t, e) {
        "object" == typeof exports && "object" == typeof module ? (module.exports = e()) : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? (exports.dhx = e()) : (t.dhx = e());
    })(window, function () {
        return (
            (i = {}),
            (r.m = n = [
                function (t, c, i) {
                    "use strict";
                    (function (t) {
                        Object.defineProperty(c, "__esModule", { value: !0 });
                        var e = i(49);
                        (c.el = e.defineElement), (c.sv = e.defineSvgElement), (c.view = e.defineView), (c.create = e.createView), (c.inject = e.injectView), (c.KEYED_LIST = e.KEYED_LIST);
                        var u = [
                            "animate",
                            "animateMotion",
                            "animateTransform",
                            "circle",
                            "clipPath",
                            "color-profile",
                            "defs",
                            "desc",
                            "discard",
                            "ellipse",
                            "feBlend",
                            "feColorMatrix",
                            "feComponentTransfer",
                            "feComposite",
                            "feConvolveMatrix",
                            "feDiffuseLighting",
                            "feDisplacementMap",
                            "feDistantLight",
                            "feDropShadow",
                            "feFlood",
                            "feFuncA",
                            "feFuncB",
                            "feFuncG",
                            "feFuncR",
                            "feGaussianBlur",
                            "feImage",
                            "feMerge",
                            "feMergeNode",
                            "feMorphology",
                            "feOffset",
                            "fePointLight",
                            "feSpecularLighting",
                            "feSpotLight",
                            "feTile",
                            "feTurbulence",
                            "filter",
                            "foreignObject",
                            "g",
                            "hatch",
                            "hatchpath",
                            "image",
                            "line",
                            "linearGradient",
                            "marker",
                            "mask",
                            "mesh",
                            "meshgradient",
                            "meshpatch",
                            "meshrow",
                            "metadata",
                            "mpath",
                            "path",
                            "pattern",
                            "polygon",
                            "polyline",
                            "radialGradient",
                            "rect",
                            "script",
                            "set",
                            "solidcolor",
                            "stop",
                            "style",
                            "svg",
                            "switch",
                            "symbol",
                            "text",
                            "textPath",
                            "title",
                            "tspan",
                            "unknown",
                            "use",
                            "view",
                        ];
                        function n(n) {
                            function e(t) {
                                var e = t.el.offsetHeight,
                                    t = t.el.offsetWidth;
                                n(t, e);
                            }
                            var i = window.ResizeObserver;
                            return i
                                ? c.el("div.dhx-resize-observer", {
                                      _hooks: {
                                          didInsert: function (t) {
                                              new i(function () {
                                                  return e(t);
                                              }).observe(t.el);
                                          },
                                      },
                                  })
                                : c.el("iframe.dhx-resize-observer", {
                                      _hooks: {
                                          didInsert: function (t) {
                                              (t.el.contentWindow.onresize = function () {
                                                  return e(t);
                                              }),
                                                  e(t);
                                          },
                                      },
                                  });
                        }
                        (c.disableHelp = function () {
                            (e.DEVMODE.mutations = !1), (e.DEVMODE.warnings = !1), (e.DEVMODE.verbose = !1), (e.DEVMODE.UNKEYED_INPUT = !1);
                        }),
                            (c.resizer = n),
                            (c.xmlToJson = function t(e) {
                                var n = {};
                                if (1 === e.nodeType) {
                                    if (0 < e.attributes.length) {
                                        n["@attributes"] = {};
                                        for (var i = 0; i < e.attributes.length; i++) {
                                            var r = e.attributes.item(i);
                                            n["@attributes"][r.nodeName] = r.nodeValue;
                                        }
                                    }
                                } else 3 === e.nodeType && (n = e.nodeValue);
                                if (e.hasChildNodes())
                                    for (var o = 0; o < e.childNodes.length; o++) {
                                        var s,
                                            a = e.childNodes.item(o),
                                            l = a.nodeName;
                                        void 0 === n[l] ? (n[l] = t(a)) : (void 0 === n[l].push && ((s = n[l]), (n[l] = []), n[l].push(s)), n[l].push(t(a)));
                                    }
                                return n;
                            }),
                            (c.jsonToVDOM = function t(e) {
                                var n,
                                    i,
                                    r,
                                    o = Object.keys(e)[0],
                                    s = e[o],
                                    a = s["#text"] ? [s["#text"]] : [];
                                for (r in s)
                                    if (s.hasOwnProperty(r) && "@attributes" !== r && "#text" !== r)
                                        if (Array.isArray(s[r])) for (var l in s[r]) s[r].hasOwnProperty(l) && a.push(t((((n = {})[r] = s[r][l]), n)));
                                        else a.push(t((((i = {})[r] = s[r]), i)));
                                return -1 !== u.indexOf(o) ? c.sv(o, s["@attributes"] || {}, a) : c.el(o, s["@attributes"] || {}, a);
                            }),
                            (c.resizeHandler = function (t, e) {
                                return c
                                    .create({
                                        render: function () {
                                            return n(e);
                                        },
                                    })
                                    .mount(t);
                            }),
                            (c.awaitRedraw = function () {
                                return new t(function (t) {
                                    requestAnimationFrame(function () {
                                        t();
                                    });
                                });
                            });
                    }.call(this, i(8)));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(2),
                        r = new Date().valueOf();
                    (e.uid = function () {
                        return "u" + r++;
                    }),
                        (e.extend = function t(e, n, i) {
                            if ((void 0 === i && (i = !0), n))
                                for (var r in n) {
                                    var o = n[r],
                                        s = e[r];
                                    void 0 === o ? delete e[r] : !i || "object" != typeof s || s instanceof Date || s instanceof Array ? (e[r] = o) : t(s, o);
                                }
                            return e;
                        }),
                        (e.copy = function (t, e) {
                            var n,
                                i = {};
                            for (n in t) (e && n.startsWith("$")) || (i[n] = t[n]);
                            return i;
                        }),
                        (e.naturalSort = function (t) {
                            return t.sort(function (t, e) {
                                return "string" == typeof t ? t.localeCompare(e) : t - e;
                            });
                        }),
                        (e.findIndex = function (t, e) {
                            for (var n = t.length, i = 0; i < n; i++) if (e(t[i])) return i;
                            return -1;
                        }),
                        (e.isEqualString = function (t, e) {
                            if (t.length > e.length) return !1;
                            for (var n = 0; n < t.length; n++) if (t[n].toLowerCase() !== e[n].toLowerCase()) return !1;
                            return !0;
                        }),
                        (e.singleOuterClick = function (e) {
                            var n = function (t) {
                                e(t) && document.removeEventListener("click", n);
                            };
                            document.addEventListener("click", n);
                        }),
                        (e.detectWidgetClick = function (e, n) {
                            function t(t) {
                                return n(i.locate(t, "dhx_widget_id") === e);
                            }
                            return (
                                document.addEventListener("click", t),
                                function () {
                                    return document.removeEventListener("click", t);
                                }
                            );
                        }),
                        (e.unwrapBox = function (t) {
                            return Array.isArray(t) ? t[0] : t;
                        }),
                        (e.wrapBox = function (t) {
                            return Array.isArray(t) ? t : [t];
                        }),
                        (e.isDefined = function (t) {
                            return null != t;
                        }),
                        (e.range = function (t, e) {
                            if (e < t) return [];
                            for (var n = []; t <= e; ) n.push(t++);
                            return n;
                        }),
                        (e.isNumeric = function (t) {
                            return !isNaN(t - parseFloat(t));
                        }),
                        (e.downloadFile = function (t, e, n) {
                            void 0 === n && (n = "text/plain");
                            var i,
                                r,
                                n = new Blob([t], { type: n });
                            window.navigator.msSaveOrOpenBlob
                                ? window.navigator.msSaveOrOpenBlob(n, e)
                                : ((i = document.createElement("a")),
                                  (r = URL.createObjectURL(n)),
                                  (i.href = r),
                                  (i.download = e),
                                  document.body.appendChild(i),
                                  i.click(),
                                  setTimeout(function () {
                                      document.body.removeChild(i), window.URL.revokeObjectURL(r);
                                  }, 0));
                        }),
                        (e.debounce = function (r, o, s) {
                            var a;
                            return function () {
                                for (var t = this, e = [], n = 0; n < arguments.length; n++) e[n] = arguments[n];
                                var i = s && !a;
                                clearTimeout(a),
                                    (a = setTimeout(function () {
                                        (a = null), s || r.apply(t, e);
                                    }, o)),
                                    i && r.apply(this, e);
                            };
                        }),
                        (e.compare = function t(e, n) {
                            for (var i in e) {
                                if (e.hasOwnProperty(i) !== n.hasOwnProperty(i)) return !1;
                                switch (typeof e[i]) {
                                    case "object":
                                        if (!t(e[i], n[i])) return !1;
                                        break;
                                    case "function":
                                        if (void 0 === n[i] || ("compare" !== i && e[i].toString() !== n[i].toString())) return !1;
                                        break;
                                    default:
                                        if (e[i] !== n[i]) return !1;
                                }
                            }
                            for (var i in n) if (void 0 === e[i]) return !1;
                            return !0;
                        }),
                        (e.isType = function (t) {
                            return ((Object.prototype.toString.call(t).match(/^\[object (\S+?)\]$/) || [])[1] || "undefined").toLowerCase();
                        }),
                        (e.isEmptyObj = function (t) {
                            for (var e in t) return !1;
                            return !0;
                        });
                },
                function (t, e, n) {
                    "use strict";
                    var u =
                        (this && this.__assign) ||
                        function () {
                            return (u =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    function i(t, e, n) {
                        for (void 0 === e && (e = "dhx_id"), void 0 === n && (n = "target"), t instanceof Event && (t = t[n]); t; ) {
                            if (t.getAttribute && t.getAttribute(e)) return t;
                            t = t.parentNode;
                        }
                    }
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        (e.toNode = function (t) {
                            return "string" == typeof t ? document.getElementById(t) || document.querySelector(t) || document.body : t || document.body;
                        }),
                        (e.eventHandler = function (s, a) {
                            var l = Object.keys(a);
                            return function (t) {
                                for (var e = s(t), n = t.target; n; ) {
                                    var i = (n.getAttribute && n.getAttribute("class")) || "";
                                    if (i.length) for (var r = i.split(" "), o = 0; o < l.length; o++) if (r.includes(l[o])) return a[l[o]](t, e);
                                    n = n.parentNode;
                                }
                                return !0;
                            };
                        }),
                        (e.locateNode = i),
                        (e.locate = function (t, e) {
                            return void 0 === e && (e = "dhx_id"), (t = i(t, e)) ? t.getAttribute(e) : "";
                        }),
                        (e.locateNodeByClassName = function (t, e) {
                            for (t instanceof Event && (t = t.target); t; ) {
                                if (e) {
                                    if (t.classList && t.classList.contains(e)) return t;
                                } else if (t.getAttribute && t.getAttribute("dhx_id")) return t;
                                t = t.parentNode;
                            }
                        }),
                        (e.getBox = function (t) {
                            var e = t.getBoundingClientRect(),
                                n = document.body,
                                i = window.pageYOffset || n.scrollTop,
                                t = window.pageXOffset || n.scrollLeft;
                            return { top: e.top + i, left: e.left + t, right: n.offsetWidth - e.right, bottom: n.offsetHeight - e.bottom, width: e.right - e.left, height: e.bottom - e.top };
                        });
                    var r = -1;
                    function o(t) {
                        t = t.getBoundingClientRect();
                        return { left: t.left + window.pageXOffset, right: t.right + window.pageXOffset, top: t.top + window.pageYOffset, bottom: t.bottom + window.pageYOffset };
                    }
                    function c() {
                        return { rightBorder: window.pageXOffset + window.innerWidth, bottomBorder: window.pageYOffset + window.innerHeight };
                    }
                    function l(t, e) {
                        var n,
                            i,
                            r,
                            o = c(),
                            s = o.rightBorder,
                            a = o.bottomBorder - t.bottom - e.height,
                            l = t.top - e.height;
                        if (("bottom" === e.mode ? (0 <= a ? (n = t.bottom) : 0 <= l && (n = l)) : 0 <= l ? (n = l) : 0 <= a && (n = t.bottom), a < 0 && l < 0)) {
                            if (e.auto) return h(t, u(u({}, e), { mode: "right", auto: !1 }));
                            n = l < a ? t.bottom : l;
                        }
                        return {
                            left: e.centering
                                ? ((i = t), (r = e.width), (o = s), (a = (r - (i.right - i.left)) / 2), (l = i.left - a), (a = i.right + a), 0 <= l && a <= o ? l : l < 0 ? 0 : o - r)
                                : ((s = s - t.left - e.width), (e = t.right - e.width), 0 <= s || (!(0 <= e) && s < e) ? t.left : e),
                            top: n,
                        };
                    }
                    function h(t, e) {
                        var n,
                            i,
                            r = c(),
                            o = r.rightBorder,
                            s = r.bottomBorder,
                            a = o - t.right - e.width,
                            r = t.left - e.width;
                        if (("right" === e.mode ? (0 <= a ? (i = t.right) : 0 <= r && (i = r)) : 0 <= r ? (i = r) : 0 <= a && (i = t.right), r < 0 && a < 0)) {
                            if (e.auto) return l(t, u(u({}, e), { mode: "bottom", auto: !1 }));
                            i = a < r ? r : t.right;
                        }
                        return {
                            left: i,
                            top: e.centering
                                ? ((a = t), (n = e.height), (r = o), (i = (n - (a.bottom - a.top)) / 2), (o = a.top - i), (i = a.bottom + i), 0 <= o && i <= r ? o : o < 0 ? 0 : r - n)
                                : ((n = t.bottom - e.height), !(0 <= (e = s - t.top - e.height)) && (0 < n || e < n) ? n : t.top),
                        };
                    }
                    function s(t, e) {
                        var n = ("bottom" === e.mode || "top" === e.mode ? l : h)(t, e),
                            t = n.left,
                            n = n.top;
                        return { left: Math.round(t) + "px", top: Math.round(n) + "px", minWidth: Math.round(e.width) + "px", position: "absolute" };
                    }
                    (e.getScrollbarWidth = function () {
                        if (-1 < r) return r;
                        var t = document.createElement("div");
                        return document.body.appendChild(t), (t.style.cssText = "position: absolute;left: -99999px;overflow:scroll;width: 100px;height: 100px;"), (r = t.offsetWidth - t.clientWidth), document.body.removeChild(t), r;
                    }),
                        (e.isIE = function () {
                            var t = window.navigator.userAgent;
                            return t.includes("MSIE ") || t.includes("Trident/");
                        }),
                        (e.getRealPosition = o),
                        (e.calculatePosition = s),
                        (e.fitPosition = function (t, e) {
                            return s(o(t), e);
                        }),
                        (e.getStrSize = function (t, e) {
                            void 0 === e && (e = { fontSize: "14px", fontFamily: "Arial", lineHeight: "14px", fontWeight: "normal", fontStyle: "normal" });
                            var n = document.createElement("span"),
                                i = e.fontSize,
                                r = e.fontFamily,
                                o = e.lineHeight,
                                s = e.fontWeight,
                                e = e.fontStyle;
                            return (
                                (n.style.fontSize = i),
                                (n.style.fontFamily = r),
                                (n.style.lineHeight = o),
                                (n.style.fontWeight = s),
                                (n.style.fontStyle = e),
                                (n.style.display = "inline-flex"),
                                (n.innerText = t),
                                document.body.appendChild(n),
                                (e = n.offsetWidth),
                                (t = n.clientHeight),
                                document.body.removeChild(n),
                                { width: e, height: t }
                            );
                        });
                    var a = function (t) {
                        return (
                            t.href &&
                            -1 === t.ownerNode.outerHTML.indexOf(window.location.origin) &&
                            (-1 !== t.ownerNode.outerHTML.indexOf("http") || -1 !== t.ownerNode.outerHTML.indexOf("https") || -1 !== t.ownerNode.outerHTML.indexOf('href="//'))
                        );
                    };
                    (e.getPageInlineCss = function () {
                        for (var t = [], e = 0; e < document.styleSheets.length; e++) {
                            var n = document.styleSheets[e];
                            if (!a(n))
                                for (var i = ("cssRules" in n) && n.cssRules.length ? n.cssRules : n.rules, r = 0; r < i.length; r++) {
                                    var o = i[r];
                                    "cssText" in o ? t.push(o.cssText) : t.push(o.selectorText + " {\n" + o.style.cssText + "\n}\n");
                                }
                        }
                        return t.join("\n");
                    }),
                        (e.getPageLinksCss = function () {
                            for (var t = [], e = 0; e < document.styleSheets.length; e++) {
                                var n = document.styleSheets[e];
                                a(n) && t.push('<link href="' + n.href + '" rel="stylesheet"/>');
                            }
                            return t.join("\n");
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        (e.en = {
                            applyAll: "Apply all",
                            exportData: "Export Data",
                            importData: "Import Data",
                            resetChanges: "Reset Changes",
                            autoLayout: "Auto Layout",
                            arrange: "Arrange",
                            position: "Position",
                            size: "Size",
                            color: "Color",
                            title: "Title",
                            text: "Text",
                            image: "Image",
                            fill: "Fill",
                            textProps: "Text",
                            stroke: "Stroke",
                            gridStep: "Grid step",
                            shapeSections: "Shapes",
                            imageUpload: "Click to upload",
                            emptyState: "Select a shape or a connector",
                        }),
                        (e.default = e.en);
                },
                function (t, e, n) {
                    "use strict";
                    var i;
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        ((i = e.TreeFilterType || (e.TreeFilterType = {})).all = "all"),
                        (i.level = "level"),
                        (i.leafs = "leafs"),
                        ((i = e.DropPosition || (e.DropPosition = {})).top = "top"),
                        (i.bot = "bot"),
                        (i.in = "in"),
                        ((i = e.DataEvents || (e.DataEvents = {})).afterAdd = "afteradd"),
                        (i.beforeAdd = "beforeadd"),
                        (i.removeAll = "removeall"),
                        (i.beforeRemove = "beforeremove"),
                        (i.afterRemove = "afterremove"),
                        (i.change = "change"),
                        (i.load = "load"),
                        (i.loadError = "loaderror"),
                        (i.beforeLazyLoad = "beforelazyload"),
                        (i.afterLazyLoad = "afterlazyload"),
                        ((i = e.DragEvents || (e.DragEvents = {})).beforeDrag = "beforedrag"),
                        (i.beforeDrop = "beforeDrop"),
                        (i.dragStart = "dragstart"),
                        (i.dragEnd = "dragend"),
                        (i.canDrop = "candrop"),
                        (i.cancelDrop = "canceldrop"),
                        (i.dropComplete = "dropcomplete"),
                        (i.dragOut = "dragOut"),
                        (i.dragIn = "dragIn"),
                        (i.beforeColumnDrag = "beforeColumnDrag"),
                        (i.beforeColumnDrop = "beforeColumnDrop"),
                        ((e = e.DataDriver || (e.DataDriver = {})).json = "json"),
                        (e.csv = "csv"),
                        (e.xml = "xml");
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(10),
                        r = n(27);
                    (e.isEqualObj = function (t, e) {
                        for (var n in t) if (t[n] !== e[n]) return !1;
                        return !0;
                    }),
                        (e.naturalCompare = function (t, e) {
                            if (isNaN(t) || isNaN(e)) {
                                var i = [],
                                    r = [];
                                for (
                                    t.replace(/(\d+)|(\D+)/g, function (t, e, n) {
                                        i.push([e || 1 / 0, n || ""]);
                                    }),
                                        e.replace(/(\d+)|(\D+)/g, function (t, e, n) {
                                            r.push([e || 1 / 0, n || ""]);
                                        });
                                    i.length && r.length;

                                ) {
                                    var n = i.shift(),
                                        o = r.shift(),
                                        o = n[0] - o[0] || n[1].localeCompare(o[1]);
                                    if (o) return o;
                                }
                                return i.length - r.length;
                            }
                            return t - e;
                        }),
                        (e.findByConf = function (t, e) {
                            if ("function" == typeof e) {
                                if (e.call(this, t)) return t;
                            } else if (e.by && e.match && t[e.by] === e.match) return t;
                        }),
                        (e.isDebug = function () {
                            var t = window.dhx;
                            if (void 0 !== t) return void 0 !== t.debug && t.debug;
                        }),
                        (e.dhxWarning = function (t) {
                            console.warn(t);
                        }),
                        (e.dhxError = function (t) {
                            throw new Error(t);
                        }),
                        (e.toProxy = function (t) {
                            var e = typeof t;
                            return "string" == e ? new i.DataProxy(t) : "object" == e ? t : void 0;
                        }),
                        (e.toDataDriver = function (t) {
                            if ("string" == typeof t) {
                                var e = window.dhx,
                                    e = (e && e.dataDrivers) || r.dataDrivers;
                                if (e[t]) return new e[t]();
                                console.warn("Incorrect data driver type:", t), console.warn("Available types:", JSON.stringify(Object.keys(e)));
                            } else if ("object" == typeof t) return t;
                        }),
                        (e.copyWithoutInner = function (t, e) {
                            var n,
                                i = {};
                            for (n in t) n.startsWith("$") || (e && e[n]) || (i[n] = t[n]);
                            return i;
                        }),
                        (e.isTreeCollection = function (t) {
                            return Boolean(t.getRoot);
                        }),
                        (e.hasJsonOrArrayStructure = function (t) {
                            if ("object" == typeof t) return !0;
                            if ("string" != typeof t) return !1;
                            try {
                                var e = JSON.parse(t);
                                return "[object Object]" === Object.prototype.toString.call(e) || Array.isArray(e);
                            } catch (t) {
                                return !1;
                            }
                        });
                },
                function (t, i, e) {
                    "use strict";
                    var r =
                        (this && this.__assign) ||
                        function () {
                            return (r =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    Object.defineProperty(i, "__esModule", { value: !0 });
                    var n = e(0),
                        e = e(3);
                    (i.meta = {
                        grid: {
                            id: "gridStep",
                            type: "inputsGroup",
                            label: e.default.gridStep,
                            validate: "number",
                            options: [
                                {
                                    id: "step",
                                    value: 0,
                                    icon: function () {
                                        return n.el(".dxi.dxi-grid-step");
                                    },
                                    validate: "number",
                                },
                            ],
                        },
                        arrange: {
                            id: "arrange",
                            type: "inputsGroup",
                            label: e.default.arrange,
                            validate: "number",
                            options: [
                                { id: "x", value: "1000", label: "x", validate: "number" },
                                { id: "y", value: "999", label: "y", validate: "number" },
                                { id: "width", value: "1000", label: "w", validate: "number" },
                                { id: "height", value: "999", label: "h", validate: "number" },
                                {
                                    id: "angle",
                                    value: "999",
                                    label: "y",
                                    validate: "number",
                                    icon: function () {
                                        return n.el(".dxi.dxi-rotate-right.rotate_icon");
                                    },
                                },
                            ],
                        },
                        position: {
                            id: "position",
                            type: "inputsGroup",
                            label: e.default.position,
                            validate: "number",
                            options: [
                                { id: "dx", value: "1000", label: "dx", validate: "number" },
                                { id: "dy", value: "999", label: "dy", validate: "number" },
                            ],
                        },
                        size: {
                            id: "size",
                            type: "inputsGroup",
                            label: e.default.size,
                            options: [
                                { id: "width", value: "1000", label: "w", validate: "number" },
                                { id: "height", value: "999", label: "h", validate: "number" },
                            ],
                        },
                        color: { id: "headerColor", type: "color", label: e.default.color },
                        title: { id: "title", type: "textarea", label: e.default.title },
                        text: { id: "text", type: "textarea", label: e.default.text },
                        img: { id: "img", type: "image", label: e.default.image },
                        fill: { id: "fill", type: "color", label: e.default.fill },
                        textProps: { id: "textProps", type: "textProps", label: e.default.textProps },
                        strokeProps: { id: "strokeProps", type: "stroke", label: e.default.stroke },
                    }),
                        (i.getMeta = function (t) {
                            return t.map(function (t) {
                                var e = t.type,
                                    n = t.label,
                                    t = t.property;
                                return r(r({}, i.meta[e]), { id: t || i.meta[e].id, label: n || i.meta[e].label });
                            });
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i =
                        ((r.prototype.on = function (t, e, n) {
                            t = t.toLowerCase();
                            (this.events[t] = this.events[t] || []), this.events[t].push({ callback: e, context: n || this.context });
                        }),
                        (r.prototype.detach = function (t, e) {
                            var t = t.toLowerCase(),
                                n = this.events[t];
                            if (e && n && n.length) for (var i = n.length - 1; 0 <= i; i--) n[i].context === e && n.splice(i, 1);
                            else this.events[t] = [];
                        }),
                        (r.prototype.fire = function (t, e) {
                            void 0 === e && (e = []);
                            t = t.toLowerCase();
                            return (
                                !this.events[t] ||
                                !this.events[t]
                                    .map(function (t) {
                                        return t.callback.apply(t.context, e);
                                    })
                                    .includes(!1)
                            );
                        }),
                        (r.prototype.clear = function () {
                            this.events = {};
                        }),
                        r);
                    function r(t) {
                        (this.events = {}), (this.context = t || this);
                    }
                    (e.EventSystem = i),
                        (e.EventsMixin = function (t) {
                            var e = new i((t = t || {}));
                            (t.detachEvent = e.detach.bind(e)), (t.attachEvent = e.on.bind(e)), (t.callEvent = e.fire.bind(e));
                        });
                },
                function (t, e, n) {
                    (function (r, o) {
                        !(function () {
                            var e = 1,
                                n = {},
                                i = !1;
                            function c(t) {
                                r.setImmediate ? o(t) : r.importScripts ? setTimeout(t) : ((n[++e] = t), r.postMessage(e, "*"));
                            }
                            function h(t) {
                                "use strict";
                                if ("function" != typeof t && null != t) throw TypeError();
                                if ("object" != typeof this || (this && this.then)) throw TypeError();
                                var e,
                                    n,
                                    i = this,
                                    o = 0,
                                    s = 0,
                                    r = [];
                                ((i.promise = i).resolve = function (t) {
                                    return (e = i.fn), (n = i.er), o || ((s = t), (o = 1), c(u)), i;
                                }),
                                    (i.reject = function (t) {
                                        return (e = i.fn), (n = i.er), o || ((s = t), (o = 2), c(u)), i;
                                    }),
                                    (i._d = 1),
                                    (i.then = function (t, e) {
                                        if (1 != this._d) throw TypeError();
                                        var n = new h();
                                        return (n.fn = t), (n.er = e), 3 == o ? n.resolve(s) : 4 == o ? n.reject(s) : r.push(n), n;
                                    }),
                                    (i.catch = function (t) {
                                        return i.then(null, t);
                                    });
                                var a = function (t) {
                                    (o = t || 4),
                                        r.map(function (t) {
                                            (3 == o && t.resolve(s)) || t.reject(s);
                                        });
                                };
                                try {
                                    "function" == typeof t && t(i.resolve, i.reject);
                                } catch (t) {
                                    i.reject(t);
                                }
                                return i;
                                function l(t, e, n, i) {
                                    if (2 == o) return i();
                                    if (("object" != typeof s && "function" != typeof s) || "function" != typeof t) i();
                                    else
                                        try {
                                            var r = 0;
                                            t.call(
                                                s,
                                                function (t) {
                                                    r++ || ((s = t), e());
                                                },
                                                function (t) {
                                                    r++ || ((s = t), n());
                                                }
                                            );
                                        } catch (t) {
                                            (s = t), n();
                                        }
                                }
                                function u() {
                                    var t;
                                    try {
                                        t = s && s.then;
                                    } catch (t) {
                                        return (s = t), (o = 2), u();
                                    }
                                    l(
                                        t,
                                        function () {
                                            (o = 1), u();
                                        },
                                        function () {
                                            (o = 2), u();
                                        },
                                        function () {
                                            try {
                                                1 == o && "function" == typeof e ? (s = e(s)) : 2 == o && "function" == typeof n && ((s = n(s)), (o = 1));
                                            } catch (t) {
                                                return (s = t), a();
                                            }
                                            s == i
                                                ? ((s = TypeError()), a())
                                                : l(
                                                      t,
                                                      function () {
                                                          a(3);
                                                      },
                                                      a,
                                                      function () {
                                                          a(1 == o && 3);
                                                      }
                                                  );
                                        }
                                    );
                                }
                            }
                            (r = this).setImmediate ||
                                r.addEventListener("message", function (t) {
                                    if (t.source == r)
                                        if (i) c(n[t.data]);
                                        else {
                                            i = !0;
                                            try {
                                                n[t.data]();
                                            } catch (t) {}
                                            delete n[t.data], (i = !1);
                                        }
                                }),
                                (h.resolve = function (e) {
                                    if (1 != this._d) throw TypeError();
                                    return e instanceof h
                                        ? e
                                        : new h(function (t) {
                                              t(e);
                                          });
                                }),
                                (h.reject = function (n) {
                                    if (1 != this._d) throw TypeError();
                                    return new h(function (t, e) {
                                        e(n);
                                    });
                                }),
                                (h.all = function (i) {
                                    if (1 != this._d) throw TypeError();
                                    if (!(i instanceof Array)) return h.reject(TypeError());
                                    var r = new h();
                                    return (
                                        (function n(t, e) {
                                            return e
                                                ? r.resolve(e)
                                                : t
                                                ? r.reject(t)
                                                : (0 ==
                                                      i.reduce(function (t, e) {
                                                          return e && e.then ? t + 1 : t;
                                                      }, 0) && r.resolve(i),
                                                  void i.map(function (t, e) {
                                                      t &&
                                                          t.then &&
                                                          t.then(function (t) {
                                                              return (i[e] = t), n(), t;
                                                          }, n);
                                                  }));
                                        })(),
                                        r
                                    );
                                }),
                                (h.race = function (i) {
                                    if (1 != this._d) throw TypeError();
                                    if (!(i instanceof Array)) return h.reject(TypeError());
                                    if (0 == i.length) return new h();
                                    var r = new h();
                                    return (
                                        (function n(t, e) {
                                            return e
                                                ? r.resolve(e)
                                                : t
                                                ? r.reject(t)
                                                : (0 ==
                                                      i.reduce(function (t, e) {
                                                          return e && e.then ? t + 1 : t;
                                                      }, 0) && r.resolve(i),
                                                  void i.map(function (t, e) {
                                                      t &&
                                                          t.then &&
                                                          t.then(function (t) {
                                                              n(null, t);
                                                          }, n);
                                                  }));
                                        })(),
                                        r
                                    );
                                }),
                                (h._d = 1),
                                (t.exports = h);
                        })();
                    }.call(this, n(17), n(46).setImmediate));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(1),
                        r = n(2),
                        n =
                            ((o.prototype.mount = function (t, e) {
                                e && (this._view = e),
                                    t && this._view && this._view.mount && ((this._container = r.toNode(t)), this._container.tagName ? this._view.mount(this._container) : this._container.attach && this._container.attach(this));
                            }),
                            (o.prototype.unmount = function () {
                                var t = this.getRootView();
                                t && t.node && (t.unmount(), (this._view = null));
                            }),
                            (o.prototype.getRootView = function () {
                                return this._view;
                            }),
                            (o.prototype.getRootNode = function () {
                                return this._view && this._view.node && this._view.node.el;
                            }),
                            (o.prototype.paint = function () {
                                this._view && (this._view.node || this._container) && ((this._doNotRepaint = !1), this._view.redraw());
                            }),
                            o);
                    function o(t, e) {
                        (this._uid = i.uid()), (this.config = e || {});
                    }
                    (e.View = n),
                        (e.toViewLike = function (e) {
                            return {
                                getRootView: function () {
                                    return e;
                                },
                                paint: function () {
                                    return e.node && e.redraw();
                                },
                                mount: function (t) {
                                    return e.mount(t);
                                },
                            };
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(18),
                        n =
                            ((r.prototype.updateUrl = function (t, e) {
                                for (var n in (void 0 === e && (e = {}), (this._url = this.url = t || this._url), (this.url += "?"), e)) (this.config[n] = e[n]), (this.url += n + "=" + encodeURIComponent(e[n]) + "&");
                                this.url = this.url.slice(0, -1);
                            }),
                            (r.prototype.load = function () {
                                return i.ajax.get(this.url, null, { responseType: "text" });
                            }),
                            (r.prototype.save = function (t, e) {
                                switch (e) {
                                    case "delete":
                                        return i.ajax.delete(this.url, t);
                                    case "update":
                                    case "insert":
                                    default:
                                        return i.ajax.post(this.url, t);
                                }
                            }),
                            r);
                    function r(t, e) {
                        (this.url = this._url = t), (this.config = e);
                    }
                    e.DataProxy = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(6),
                        n =
                            ((r.prototype.isConnector = function () {
                                return !1;
                            }),
                            (r.prototype.canResize = function () {
                                return !0;
                            }),
                            (r.prototype.getCenter = function () {
                                var t = this.config;
                                return { x: Math.abs(t.width / 2), y: Math.abs(t.height / 2) };
                            }),
                            (r.prototype.getBox = function () {
                                var t = this.config,
                                    e = t.x + (t.dx || 0),
                                    n = e + t.width,
                                    i = t.y + (t.dy || 0);
                                return { left: e, right: n, top: i, bottom: i + t.height };
                            }),
                            (r.prototype.getMetaInfo = function () {
                                return [i.meta.text];
                            }),
                            (r.prototype.move = function (t, e) {
                                this.update({ x: t, y: e });
                            }),
                            (r.prototype.resize = function (t, e) {
                                this.update({ width: t, height: e });
                            }),
                            (r.prototype.rotate = function (t) {
                                this.update({ angle: t });
                            }),
                            (r.prototype.update = function (t) {
                                for (var e in t) (this.config[e] = t[e]), this.config.id && (this.id = this.config.id);
                            }),
                            (r.prototype.render = function () {
                                return "";
                            }),
                            (r.prototype.getPoint = function (t, e) {
                                var n = this.config;
                                if (n.angle) {
                                    var i = n.x + n.width / 2,
                                        r = n.y + n.height / 2,
                                        n = n.angle * (Math.PI / 180);
                                    return { x: (t - i) * Math.cos(n) - (e - r) * Math.sin(n) + i, y: (t - i) * Math.sin(n) + (e - r) * Math.cos(n) + r };
                                }
                                return { x: t, y: e };
                            }),
                            (r.prototype.setCss = function (t) {
                                this.config.css = t;
                            }),
                            (r.prototype.getCss = function () {
                                return (this.config.$selected ? "dhx_selected " : this.config.$blockSelected ? "dhx_blockselected " : "") + (this.config.css || "");
                            }),
                            (r.prototype.setDefaults = function (t, e) {
                                return t;
                            }),
                            (r.prototype.getCoords = function (t) {
                                var e = t.x,
                                    n = t.y;
                                return t.dx && (e = t.x + t.dx), t.dy && (n = t.y + t.dy), { x: e, y: n };
                            }),
                            r);
                    function r(t, e) {
                        (this.config = this.setDefaults(t, e.defaults)),
                            (this.id = t.id),
                            t.width && (t.width = parseFloat(t.width)),
                            t.height && (t.height = parseFloat(t.height)),
                            t.x && (t.x = parseFloat(t.x)),
                            t.y && (t.y = parseFloat(t.y)),
                            t.strokeWidth && (t.strokeWidth = parseFloat(t.strokeWidth));
                    }
                    e.BaseShape = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(25);
                    e.SelectionEvents = i.SelectionEvents;
                    n = n(15);
                    (e.DataEvents = n.DataEvents),
                        ((e = e.DiagramEvents || (e.DiagramEvents = {})).scroll = "scroll"),
                        (e.beforeCollapse = "beforecollapse"),
                        (e.afterCollapse = "aftercollapse"),
                        (e.beforeExpand = "beforeexpand"),
                        (e.afterExpand = "afterexpand"),
                        (e.shapeMouseDown = "shapemousedown"),
                        (e.shapeClick = "shapeclick"),
                        (e.shapedDblClick = "shapedblclick"),
                        (e.shapeIconClick = "shapeiconclick"),
                        (e.beforeRender = "beforerender"),
                        (e.shapeHover = "shapeHover"),
                        (e.emptyAreaClick = "emptyAreaClick"),
                        (e.emptyAreaMouseDown = "emptyAreaMouseDown"),
                        (e.lineClick = "lineClick");
                },
                ,
                ,
                function (t, n, e) {
                    "use strict";
                    function i(t) {
                        for (var e in t) n.hasOwnProperty(e) || (n[e] = t[e]);
                    }
                    Object.defineProperty(n, "__esModule", { value: !0 }), i(e(4)), i(e(26)), i(e(57)), i(e(58)), i(e(10)), i(e(60)), i(e(5)), i(e(29)), i(e(28)), i(e(61)), i(e(27)), i(e(18));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o = n(0);
                    (e.getCircleTpl = function (t) {
                        if ((!t.$count && !1 !== t.open) || !t.$kids) return "";
                        var e = "vertical" === t.dir,
                            n = !1 === t.open,
                            i = t.width / 2,
                            r = t.height / 2,
                            r = { x: e ? 0 : i, y: e ? r : t.height };
                        return o.el("div", { dhx_diagram: "hide", class: n ? "dhx_expand_icon" : "dhx_hide_icon", style: { position: "absolute", top: r.y, left: r.x } }, [
                            o.el("div.dhx_icon-container", { style: { background: t.$expandColor } }, [o.el("i.dxi", { class: n ? " dxi-plus" : " dxi-minus" })]),
                        ]);
                    }),
                        (e.getHeaderTpl = function (t) {
                            var e = t.width,
                                t = t.headerColor || "#20b6e2";
                            return o.el("div", { class: "dhx_item_header", style: { height: 4, width: e, top: 0, left: 0, position: "absolute", background: t } });
                        }),
                        (e.getTextTemplate = function (t, e) {
                            var n = t.width,
                                i = t.height;
                            return "string" == typeof t.text || "string" == typeof t.title
                                ? o.el("div.shape_content-container", { style: { width: n, height: i, top: 0, left: 0, overflow: "hidden", transform: "translate(0 0)", position: "absolute" } }, [
                                      o.el("div", { class: "shape_content", style: { width: t.width, height: t.height, wordBreak: "break-word", whiteSpace: "pre-wrap", overflow: "hidden" } }, e),
                                  ])
                                : null;
                        }),
                        (e.getShapeCss = function (t) {
                            return {
                                width: t.width,
                                height: t.height,
                                display: "flex",
                                "flex-direction": "column",
                                "justify-content": { bottom: "flex-end", top: "flex-start", center: "center" }[t.textVerticalAlign],
                                "text-align": t.textAlign,
                                "line-height": t.lineHeight,
                                "font-size": t.fontSize,
                                "font-style": t.fontStyle,
                                "font-weight": t.fontWeight,
                                color: t.fontColor,
                                "word-break": "break-word",
                                "white-space": "pre-wrap",
                            };
                        });
                },
                function (t, e) {
                    var n = (function () {
                        return this;
                    })();
                    try {
                        n = n || new Function("return this")();
                    } catch (t) {
                        "object" == typeof window && (n = window);
                    }
                    t.exports = n;
                },
                function (t, e, n) {
                    "use strict";
                    (function (u) {
                        Object.defineProperty(e, "__esModule", { value: !0 });
                        var c = n(4),
                            h = n(5);
                        function f(t) {
                            return t ? (t.includes("json") ? "json" : t.includes("xml") ? "xml" : "text") : "text";
                        }
                        function i(r, o, s, t, a) {
                            var i,
                                l = t || {};
                            return (
                                a && (l.Accept = "application/" + a),
                                "GET" !== s && (l["Content-Type"] = l["Content-Type"] || "application/json"),
                                "GET" === s &&
                                    ((t =
                                        o && "object" == typeof o
                                            ? ((i = o),
                                              Object.keys(i)
                                                  .reduce(function (t, e) {
                                                      var n = "object" == typeof i[e] ? JSON.stringify(i[e]) : i[e];
                                                      return t.push(e + "=" + encodeURIComponent(n)), t;
                                                  }, [])
                                                  .join("&"))
                                            : o && "string" == typeof o
                                            ? o
                                            : "") && ((r += r.includes("?") ? "&" : "?"), (r += t)),
                                    (o = null)),
                                window.fetch
                                    ? window.fetch(r, { method: s, body: o ? JSON.stringify(o) : null, headers: l }).then(function (e) {
                                          if (!e.ok)
                                              return e.text().then(function (t) {
                                                  return u.reject({ status: e.status, statusText: e.statusText, message: t });
                                              });
                                          var t = a || f(e.headers.get("Content-Type"));
                                          if ("raw" === t) return { headers: Object.fromEntries(e.headers.entries()), url: e.url, body: e.body };
                                          if (204 !== e.status)
                                              switch (t) {
                                                  case "json":
                                                      return e.json();
                                                  case "xml":
                                                      var n = h.toDataDriver(c.DataDriver.xml);
                                                      return n
                                                          ? e.text().then(function (t) {
                                                                return n.toJsonObject(t);
                                                            })
                                                          : e.text();
                                                  default:
                                                      return e.text();
                                              }
                                      })
                                    : new u(function (t, e) {
                                          var n,
                                              i = new XMLHttpRequest();
                                          for (n in ((i.onload = function () {
                                              200 <= i.status && i.status < 300
                                                  ? ("raw" === a &&
                                                        t({
                                                            url: i.responseURL,
                                                            headers: i
                                                                .getAllResponseHeaders()
                                                                .trim()
                                                                .split(/[\r\n]+/)
                                                                .reduce(function (t, e) {
                                                                    e = e.split(": ");
                                                                    return (t[e[0]] = e[1]), t;
                                                                }, {}),
                                                            body: i.response,
                                                        }),
                                                    204 === i.status
                                                        ? t()
                                                        : t(
                                                              (function (t, e) {
                                                                  switch (e) {
                                                                      case "json":
                                                                          return JSON.parse(t);
                                                                      case "text":
                                                                          return t;
                                                                      case "xml":
                                                                          var n = h.toDataDriver(c.DataDriver.xml);
                                                                          return n ? n.toJsonObject(t) : { parseError: "Incorrect data driver type: 'xml'" };
                                                                      default:
                                                                          return t;
                                                                  }
                                                              })(i.responseText, a || f(i.getResponseHeader("Content-Type")))
                                                          ))
                                                  : e({ status: i.status, statusText: i.statusText });
                                          }),
                                          (i.onerror = function () {
                                              e({ status: i.status, statusText: i.statusText, message: i.responseText });
                                          }),
                                          i.open(s, r),
                                          l))
                                              i.setRequestHeader(n, l[n]);
                                          switch (s) {
                                              case "POST":
                                              case "DELETE":
                                              case "PUT":
                                                  i.send(void 0 !== o ? JSON.stringify(o) : "");
                                                  break;
                                              case "GET":
                                              default:
                                                  i.send();
                                          }
                                      })
                            );
                        }
                        e.ajax = {
                            get: function (t, e, n) {
                                return i(t, e, "GET", n && n.headers, void 0 !== n ? n.responseType : void 0);
                            },
                            post: function (t, e, n) {
                                return i(t, e, "POST", n && n.headers, void 0 !== n ? n.responseType : void 0);
                            },
                            put: function (t, e, n) {
                                return i(t, e, "PUT", n && n.headers, void 0 !== n ? n.responseType : void 0);
                            },
                            delete: function (t, e, n) {
                                return i(t, e, "DELETE", n && n.headers, void 0 !== n ? n.responseType : void 0);
                            },
                        };
                    }.call(this, n(8)));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i =
                        ((r.prototype.copy = function () {
                            var e = this,
                                n = new r();
                            return (
                                (n.nodes = this.nodes.map(function (t) {
                                    return { id: t.id, w: t.w, h: t.h, x: t.x, y: t.y, kids: [], links: [], isn: t.isn, iss: t.iss };
                                })),
                                (n.hash = {}),
                                n.nodes.forEach(function (t) {
                                    n.hash[t.id] = t;
                                }),
                                n.nodes.forEach(function (t) {
                                    (t.kids = e.hash[t.id].kids.map(function (t) {
                                        return n.hash[t.id];
                                    })),
                                        (t.links = e.hash[t.id].links.map(function (t) {
                                            return n.hash[t.id];
                                        }));
                                }),
                                (n._tbounds = [].concat(this._tbounds)),
                                (n._ybounds = [].concat(this._ybounds)),
                                (n._bounds = this._bounds
                                    ? this._bounds.map(function (t) {
                                          return [].concat(t);
                                      })
                                    : []),
                                (n.routes = this.routes),
                                (n._root = this._root ? n.hash[this._root.id] : null),
                                n
                            );
                        }),
                        (r.prototype.collectSubNodes = function (t, e) {
                            for (var n = 0; n < t.kids.length; n++) {
                                var i = t.kids[n];
                                e.push(i), i.kids && this.collectSubNodes(i, e);
                            }
                        }),
                        (r.prototype.getLevelBounds = function () {
                            return this._bounds;
                        }),
                        (r.prototype.getBounds = function (t, e, n) {
                            t = n ? this._tbounds : this._bounds[t];
                            return [t[0] ? t[0] - e / 4 : 0, t[1] ? t[1] + e / 4 : 0];
                        }),
                        (r.prototype.addEdge = function (t, e) {
                            (t = this.hash[t]), (e = this.hash[e]);
                            t.links.push(e), e.links.push(t);
                        }),
                        (r.prototype.importNodes = function (t) {
                            var e = this;
                            t.forEach(function (t) {
                                (e.hash[t.id] = t), e.nodes.push(t);
                            });
                        }),
                        (r.prototype.split = function (e) {
                            var n = this,
                                i = [];
                            if (
                                ((this.nodes = this.nodes.filter(function (t) {
                                    return !e(t) || (delete n.hash[t.id], i.push(t), !1);
                                })),
                                !i.length)
                            )
                                return null;
                            var t = new r();
                            return t.importNodes(i), t;
                        }),
                        (r.prototype.addNode = function (t) {
                            (t.kids = []), (t.links = []), this._root || (this._root = t), (this.hash[t.id] = t), this.nodes.push(t);
                        }),
                        (r.prototype.getNode = function (t) {
                            return this.hash[t];
                        }),
                        (r.prototype.getRoot = function () {
                            return this._root;
                        }),
                        (r.prototype.getLevels = function () {
                            return this._deep;
                        }),
                        (r.prototype.clean = function () {
                            this.nodes.forEach(function (e) {
                                var n;
                                1 < e.links.length &&
                                    ((n = []),
                                    (e.links = e.links.filter(function (t) {
                                        return !n.includes(t) && e !== t && (n.push(t), !0);
                                    })));
                            });
                        }),
                        (r.prototype.getNodes = function () {
                            return this.nodes;
                        }),
                        (r.prototype.getBox = function () {
                            return [this._tbounds, this._ybounds];
                        }),
                        (r.prototype.setGlobalBox = function () {
                            var r, o, s, a;
                            this.nodes.length &&
                                ((s = r = 1 / 0),
                                (a = o = -1 / 0),
                                this.nodes.forEach(function (t) {
                                    var e = t.x - t.w / 2,
                                        n = t.x + t.w / 2,
                                        i = t.y - t.h / 2,
                                        t = t.y + t.h / 2;
                                    e < s && (s = e), i < r && (r = i), a < n && (a = n), o < t && (o = t);
                                }),
                                (this._tbounds = [s, a]),
                                (this._ybounds = [r, o]));
                        }),
                        (r.prototype.translate = function (e) {
                            if (
                                (this.nodes.forEach(function (t) {
                                    (t.x += e.x), (t.y += e.y);
                                }),
                                (this._tbounds[0] += e.x),
                                (this._tbounds[1] += e.x),
                                this._bounds)
                            )
                                for (var t = 0; t < this._bounds.length; t++) (this._bounds[t][0] += e.x), (this._bounds[t][1] += e.x);
                            this._ybounds && ((this._ybounds[0] += e.y), (this._ybounds[1] += e.y));
                        }),
                        (r.prototype.rotate = function (t) {
                            var i = t.x,
                                r = t.y;
                            this.nodes.forEach(function (t) {
                                var e = t.x * r - t.y * i,
                                    n = t.x * i + t.y * r;
                                (t.x = e), (t.y = n);
                            });
                            var e = this._tbounds,
                                n = e[0],
                                o = e[1],
                                t = this._ybounds,
                                e = t[0],
                                t = t[1];
                            (this._tbounds = [n * r - e * i, o * r - t * i].sort()), (this._ybounds = [n * i + e * r, o * i + t * r].sort());
                        }),
                        (r.prototype.setBox = function () {
                            var t = this._deep[this._deep.length - 1],
                                e = -1 / 0;
                            t.forEach(function (t) {
                                t = t.y + t.h / 2;
                                e < t && (e = t);
                            }),
                                (this._ybounds = [this._root.y - this._root.h / 2, e]);
                        }),
                        (r.prototype.mirror = function () {
                            this.nodes.forEach(function (t) {
                                t.x = -t.x;
                            });
                            for (var t = 0; t < this._bounds.length; t++) {
                                var e = this._bounds[t],
                                    n = e[0],
                                    e = e[1];
                                this._bounds[t] = [-e, -n];
                            }
                            var i = this._tbounds,
                                r = i[0],
                                i = i[1];
                            this._tbounds = [-i, -r];
                        }),
                        (r.prototype.nonLeaves = function (t) {
                            return t.kids.filter(function (t) {
                                return 0 < t.kids.length;
                            });
                        }),
                        (r.prototype.toTree = function (t) {
                            return (
                                (t && this.hash[t.id]) || (t = this._detectRoot()),
                                this.nodes.forEach(function (t) {
                                    return (t.kids = []);
                                }),
                                this.setKids(t),
                                t
                            );
                        }),
                        (r.prototype.root = function (t, e) {
                            this._deep = [[t]];
                            e = Math.round((e && e.rotate ? t.h : t.w) / 2);
                            (this._tbounds = [-e, e]), (this._bounds = [[-e, e]]), (this._leaves = []), (this._root = t), this._setLevels(t, 1), (this._width = 1);
                            for (var n = 0; n < this._deep.length; n++) {
                                var i = this._deep[n].length;
                                i > this._width && (this._width = i);
                            }
                        }),
                        (r.prototype.setKids = function (e) {
                            var n = this;
                            e.links.forEach(function (t) {
                                t.kids.length || (e.kids.push(t), n.setKids(t));
                            });
                        }),
                        (r.prototype._detectRoot = function () {
                            for (
                                var n = {}, t = this.nodes, i = [];
                                i.forEach(function (t) {
                                    return (n[t] = 1);
                                }),
                                    (i = []),
                                    (t = t.filter(function (t) {
                                        var e =
                                            1 <
                                            t.links
                                                .map(function (t) {
                                                    return n[t.id] ? 0 : 1;
                                                })
                                                .reduce(function (t, e) {
                                                    return t + e;
                                                }, 0);
                                        return e || i.push(t.id), e;
                                    })),
                                    2 < t.length && i.length;

                            );
                            return t[0] || this.nodes[0];
                        }),
                        (r.prototype._setLevels = function (t, e) {
                            for (var n = t.kids, i = 0; i < n.length; i++) {
                                var r = n[i],
                                    o = this._deep[e];
                                o ? o.push(r) : ((this._deep[e] = [r]), (this._bounds[e] = [0, 0])), r.kids.length ? this._setLevels(r, e + 1) : this._leaves.push(r);
                            }
                        }),
                        (r.prototype.getIString = function () {
                            for (var t = [], e = 0; e < this._leaves.length; e++) (this._leaves[e].isn = 0), (this._leaves[e].iss = "");
                            for (e = this._deep.length - 2; 0 <= e; e--) {
                                for (
                                    var n = this._deep[e].filter(function (t) {
                                            return 0 < t.kids.length;
                                        }),
                                        i = 0;
                                    i < n.length;
                                    i++
                                )
                                    for (var r = n[i], o = 0; o < r.kids.length; o++)
                                        r.iss = r.kids
                                            .map(function (t) {
                                                return t.isn;
                                            })
                                            .sort()
                                            .join(",");
                                n.sort(function (t, e) {
                                    return t.iss > e.iss ? 1 : -1;
                                }),
                                    t.push(
                                        n
                                            .map(function (t) {
                                                return t.iss;
                                            })
                                            .join("|")
                                    );
                                for (var s = n[0].iss, a = 1, i = 0; i < n.length; i++) s !== n[i].iss && ((s = n[i].iss), a++), (n[i].isn = a);
                            }
                            return t.join(";");
                        }),
                        r);
                    function r(t, e, n) {
                        (this._tbounds = [0, 0]), t ? ((this.nodes = [e]), t.collectSubNodes(e, this.nodes), (this.hash = t.hash), this.root(e, n)) : ((this.nodes = []), (this.hash = {}));
                    }
                    e.default = i;
                },
                ,
                ,
                function (t, f, e) {
                    "use strict";
                    var i,
                        n =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(f, "__esModule", { value: !0 });
                    var r,
                        d = e(0),
                        o = e(6),
                        s = e(16),
                        a = e(11),
                        l = e(3),
                        n =
                            ((r = a.BaseShape),
                            n(u, r),
                            (u.prototype.getMetaInfo = function () {
                                return o.getMeta([
                                    { type: "grid", label: l.default.gridStep },
                                    { type: "arrange", label: l.default.arrange },
                                    { type: "fill", label: l.default.fill },
                                    { type: "text", label: l.default.text },
                                    { type: "strokeProps", label: l.default.stroke },
                                    { type: "textProps", label: l.default.textProps },
                                ]);
                            }),
                            (u.prototype.render = function () {
                                this.config.strokeType && ("dash" === this.config.strokeType && (this.config.strokeDash = "5,5"), "none" === this.config.strokeType && (this.config.stroke = "none"));
                                var t = this.config,
                                    e = t.id,
                                    n = t.angle,
                                    i = t.width,
                                    r = t.height,
                                    o = t.strokeWidth,
                                    t = this.getCoords(this.config),
                                    o = o / 2;
                                return d.el(
                                    "div",
                                    {
                                        _key: e,
                                        class: "dhx_diagram_flow_item " + this.getCss(),
                                        dhx_id: e,
                                        style: { transform: "rotate(" + (n || 0) + "deg)", zIndex: this.config.$selected ? 1 : 0, position: "absolute", height: r, width: i, top: t.y, left: t.x },
                                    },
                                    [
                                        d.sv("svg", { xmlns: "http://www.w3.org/2000/svg", height: r, width: i, viewBox: -o + " " + -o + " " + (i + o) + " " + (r + o), reserveAspectRatio: "none" }, [this._getShapeContour()]),
                                        s.getTextTemplate(this.config, this.getContent()),
                                        s.getCircleTpl(this.config),
                                    ]
                                );
                            }),
                            (u.prototype.setDefaults = function (t, e) {
                                var n = t.width,
                                    i = t.height,
                                    r = t.stroke,
                                    o = t.extraLinesStroke,
                                    s = t.fill,
                                    a = t.strokeWidth,
                                    l = t.fontColor,
                                    u = t.strokeDash,
                                    c = t.textAlign,
                                    h = t.lineHeight,
                                    f = t.fontStyle,
                                    d = t.textVerticalAlign,
                                    p = t.type,
                                    g = t.fontSize,
                                    v = t.text,
                                    y = t.preview,
                                    _ = t.x,
                                    m = t.y,
                                    x = "roll" === p ? "#DEDEDE" : o || "#FFF";
                                t.extraLinesStroke = e.extraLinesStroke || x;
                                var b = ["circle", "or", "junction"].includes(p),
                                    w = e.width ? parseFloat(e.width) : b ? 90 : 140,
                                    o = e.height ? parseFloat(e.height) : 90,
                                    x = e.lineHeight ? parseFloat(e.lineHeight) : 14,
                                    p = e.fontSize ? parseFloat(e.fontSize) : 14,
                                    b = e.strokeWidth ? parseFloat(e.strokeWidth) : 1;
                                return (
                                    (t.strokeWidth = a || b),
                                    (t.width = n || w),
                                    (t.height = i || o),
                                    (t.fontSize = g || p),
                                    (t.lineHeight = h || x),
                                    (t.strokeDash = u || e.strokeDash || ""),
                                    (t.fill = s || e.fill || "#DEDEDE"),
                                    (t.stroke = r || e.stroke || "#DEDEDE"),
                                    (t.text = "string" == typeof v ? v : e.text || ""),
                                    (t.textAlign = c || e.textAlign || "center"),
                                    (t.textVerticalAlign = d || e.textVerticalAlign || "center"),
                                    (t.fontStyle = f || e.fontStyle || "normal"),
                                    (t.fontColor = l || e.fontColor || "#4C4C4C"),
                                    (t.preview = y || e.preview),
                                    (t.x = _ || 0),
                                    (t.y = m || 0),
                                    t
                                );
                            }),
                            (u.prototype.getContent = function () {
                                return [d.el("div", { class: "shape_content", style: s.getShapeCss(this.config) }, this.config.text)];
                            }),
                            (u.prototype._getShapeContour = function () {
                                var t,
                                    e,
                                    n = this.config,
                                    i = n.width,
                                    r = n.height,
                                    o = n.stroke,
                                    s = n.fill,
                                    a = n.strokeWidth,
                                    l = n.strokeDash,
                                    u = n.extraLinesStroke,
                                    c = n.type,
                                    h = f.flowShapes[c],
                                    n = Math.round(i / 12),
                                    c = i - a / 2,
                                    i = r - a / 2,
                                    r = h.path(c, i, n),
                                    n = h.additionalPath(c, i, n);
                                return [
                                    ((e = r), d.sv("path", { d: e, class: "dhx_diagram_flow_shape dhx_item_shape ", stroke: o, fill: s, "stroke-width": a, "stroke-dasharray": l })),
                                    ((t = n), d.sv("path", { d: t, fill: "none", stroke: u, class: "dhx_diagram_extra_lines" })),
                                ];
                            }),
                            u);
                    function u(t, e) {
                        e = r.call(this, t, e) || this;
                        return (e.config = t), (e.id = e.config.id), e;
                    }
                    (f.DiagramFlowShape = n),
                        (f.flowShapes = {
                            circle: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + t / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + "," + e + "\n\t\t\tA " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + ",0 Z";
                                },
                                additionalPath: function () {},
                            },
                            rectangle: {
                                path: function (t, e) {
                                    return "M 0,0 L 0," + e + " L " + t + "," + e + " L " + t + ",0 Z";
                                },
                                additionalPath: function () {},
                            },
                            triangle: {
                                path: function (t, e) {
                                    return "M " + t / 2 + " 0 L" + t + " " + e + " L 0 " + e + " z";
                                },
                                additionalPath: function () {},
                            },
                            start: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + e / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + e / 2 + "," + e + "\n\t\t\tH " + (t - e / 2) + " A " + e / 2 + "," + e / 2 + " 0 1 0 " + (t - e / 2) + ",0 H " + e / 2 + " Z";
                                },
                                additionalPath: function () {},
                            },
                            end: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + e / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + e / 2 + "," + e + "\n\t\t\tH " + (t - e / 2) + " A " + e / 2 + "," + e / 2 + " 0 1 0 " + (t - e / 2) + ",0 H " + e / 2 + " Z";
                                },
                                additionalPath: function () {},
                            },
                            process: {
                                path: function (t, e) {
                                    return "M 0,0 L 0," + e + " L " + t + "," + e + " L " + t + ",0 Z";
                                },
                                additionalPath: function () {},
                            },
                            output: {
                                path: function (t, e, n) {
                                    return "M " + 2 * n + ",0 " + t + ",0 " + (t - 2 * n) + "," + e + " 0," + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            decision: {
                                path: function (t, e) {
                                    return "M 0 " + e / 2 + " L " + t / 2 + " 0 L " + t + " " + e / 2 + " L " + t / 2 + " " + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            display: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0 " + e / 2 + " L " + t / 4 + " 0 H " + (3 * t) / 4 + "\n\t\t\tA " + t / 4 + "," + e / 2 + " 0 1 1 " + (3 * t) / 4 + "," + e + "\n\t\t\tH " + t / 4 + " Z";
                                },
                                additionalPath: function () {},
                            },
                            document: {
                                path: function (t, e) {
                                    return (
                                        "M0 " +
                                        (e -= 8) +
                                        " C\n\t\t\t" +
                                        t / 6 +
                                        " " +
                                        (10 * e) / 9 +
                                        ",\n\t\t\t" +
                                        t / 3 +
                                        " " +
                                        (10 * e) / 9 +
                                        ",\n\t\t\t" +
                                        t / 2 +
                                        " " +
                                        e +
                                        " S\n\t\t\t" +
                                        (5 * t) / 6 +
                                        " " +
                                        (8 * e) / 9 +
                                        ",\n\t\t\t" +
                                        t +
                                        " " +
                                        e +
                                        "\n\t\t\tV 0 H 0 Z"
                                    );
                                },
                                additionalPath: function () {},
                            },
                            data: {
                                path: function (t, e, n) {
                                    return "M " + n + " 0 Q\n\t\t\t" + -n + " " + e / 2 + ",\n\t\t\t" + n + " " + e + " H " + t + " Q\n\t\t\t" + (t - 2 * n) + " " + e / 2 + ",\n\t\t\t" + t + " 0 Z";
                                },
                                additionalPath: function () {},
                            },
                            database: {
                                path: function (t, e, n) {
                                    return "M 0 " + n + " A " + t / 2 + "," + n + " 0 1 0 " + t + "," + n + "\n\t\t\tA " + t / 2 + "," + n + " 0 1 0 0," + n + "\n\t\t\tV " + e + " H " + t + " V " + n;
                                },
                                additionalPath: function (t, e, n) {
                                    return "M 0 " + n + " A " + t / 2 + "," + n + " 0 1 0 " + t + "," + n;
                                },
                            },
                            internal: {
                                path: function (t, e) {
                                    return "M 0,0 L 0," + e + " L " + t + "," + e + " L " + t + ",0 Z";
                                },
                                additionalPath: function (t, e, n) {
                                    return "M " + n + " 0 V " + e + " M 0 " + n + " H " + t;
                                },
                            },
                            offline: {
                                path: function (t, e) {
                                    return "M 0,0 " + t + ",0 " + t / 2 + "," + e + " Z";
                                },
                                additionalPath: function (t, e, n) {
                                    var i = e / Math.sqrt(Math.pow(t / 2, 2) + Math.pow(e, 2)),
                                        i = Math.sqrt(Math.pow(n / i, 2) - Math.pow(n, 2));
                                    return "M " + (t / 2 - i) + " " + (e - n) + " h " + 2 * i;
                                },
                            },
                            delay: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0 0 H " + (3 * t) / 4 + "\n\t\t\tA " + t / 4 + "," + e / 2 + " 0 1 1 " + (3 * t) / 4 + "," + e + "\n\t\t\tH 0 Z";
                                },
                                additionalPath: function () {},
                            },
                            page: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0,0\n\t\t\t" + t + ",0\n\t\t\t" + t + "," + e / 2 + "\n\t\t\t" + t / 2 + "," + e + "\n\t\t\t0," + e / 2 + " Z";
                                },
                                additionalPath: function () {},
                            },
                            input: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0," + e / 3 + "\n\t\t\t" + t + ",0\n\t\t\t" + t + "," + e + "\n\t\t\t0," + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            operation: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0,0\n\t\t\t" + t + ",0\n\t\t\t" + (3 * t) / 4 + "," + e + "\n\t\t\t" + t / 4 + "," + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            punchcard: {
                                path: function (t, e) {
                                    return "\n\t\t\tM 0," + e / 4 + "\n\t\t\t" + t / 4 + ",0\n\t\t\t" + t + ",0\n\t\t\t" + t + "," + e + "\n\t\t\t0," + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            subroutine: {
                                path: function (t, e) {
                                    return "M 0,0 L 0," + e + " L " + t + "," + e + " L " + t + ",0 Z";
                                },
                                additionalPath: function (t, e, n) {
                                    return "M " + n + " 0 V " + e + " M " + (t - n) + " 0 V " + e;
                                },
                            },
                            comment: {
                                path: function (t, e) {
                                    return "M " + t + " 0 H 0 V " + e + " H" + t + " V" + (e - 4) + " H4 V4 H" + t;
                                },
                                additionalPath: function () {},
                            },
                            storage: {
                                path: function (t, e) {
                                    return "M 0,0 " + t + ",0 " + t / 2 + "," + e + " Z";
                                },
                                additionalPath: function () {},
                            },
                            extract: {
                                path: function (t, e) {
                                    return "M 0," + e + " " + t + "," + e + " " + t / 2 + ",0 Z";
                                },
                                additionalPath: function () {},
                            },
                            collate: {
                                path: function (t, e) {
                                    return "M " + t / 2 + " " + e / 2 + " L 0 0 H " + t + " L 0 " + e + " H " + t + " Z";
                                },
                                additionalPath: function () {},
                            },
                            or: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + t / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + "," + e + "\n\t\t\tA " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + ",0 Z";
                                },
                                additionalPath: function (t, e) {
                                    return "\n\t\t\tM" + (t - e) / 2 + " " + e / 2 + " " + (t - (t - e) / 2) + " " + e / 2 + "\n\t\t\tM" + t / 2 + " 0 " + t / 2 + " " + e;
                                },
                            },
                            junction: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + t / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + "," + e + "\n\t\t\tA " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + ",0 Z";
                                },
                                additionalPath: function (t, e) {
                                    return (
                                        "\n\t\t\tM " +
                                        (t / 2 - (e * Math.SQRT2) / 4) +
                                        " " +
                                        (e / 2 - (e * Math.SQRT2) / 4) +
                                        " L " +
                                        (t / 2 + (e * Math.SQRT2) / 4) +
                                        " " +
                                        (e / 2 + (e * Math.SQRT2) / 4) +
                                        "\n\t\t\tM " +
                                        (t / 2 - (e * Math.SQRT2) / 4) +
                                        " " +
                                        (e / 2 + (e * Math.SQRT2) / 4) +
                                        " L " +
                                        (t / 2 + (e * Math.SQRT2) / 4) +
                                        " " +
                                        (e / 2 - (e * Math.SQRT2) / 4)
                                    );
                                },
                            },
                            keyring: {
                                path: function (t, e, n) {
                                    return "\n\t\t\tM " + n + " 0 A " + n + "," + e / 2 + " 0 1 0 " + n + "," + e + "\n\t\t\tH " + (t - n) + " A " + n + "," + e / 2 + " 0 1 0 " + (t - n) + ",0 H " + n + " Z";
                                },
                                additionalPath: function () {},
                            },
                            tape: {
                                path: function (t, e) {
                                    return (
                                        "\n\t\t\tM0 " +
                                        (e - 12) +
                                        " C\n\t\t\t" +
                                        t / 6 +
                                        " " +
                                        (10 * (e - 8)) / 9 +
                                        ",\n\t\t\t" +
                                        t / 3 +
                                        " " +
                                        (10 * (e - 8)) / 9 +
                                        ",\n\t\t\t" +
                                        t / 2 +
                                        " " +
                                        (e - 8) +
                                        " S\n\t\t\t" +
                                        (5 * t) / 6 +
                                        " " +
                                        (8 * (e - 8)) / 9 +
                                        ",\n\t\t\t" +
                                        t +
                                        " " +
                                        e +
                                        "\n\t\t\tV 12 C\n\t\t\t" +
                                        (5 * t) / 6 +
                                        " " +
                                        -e / 9 +
                                        ",\n\t\t\t" +
                                        (2 * t) / 3 +
                                        " " +
                                        e / 9 / 2 +
                                        ",\n\t\t\t" +
                                        t / 2 +
                                        " 8 S\n\t\t\t" +
                                        t / 6 +
                                        " " +
                                        e / 9 +
                                        ",\n\t\t\t0 0 Z"
                                    );
                                },
                                additionalPath: function () {},
                            },
                            preparation: {
                                path: function (t, e) {
                                    return "M0 " + e / 2 + "L20 0H" + (t - 20) + "L " + t + " " + e / 2 + "L" + (t - 20) + " " + e + "H20L0 " + e / 2 + "Z";
                                },
                                additionalPath: function () {},
                            },
                            endpoint: {
                                path: function (t, e) {
                                    return "M0 " + e / 2 + "  L" + t / 2 + " 0 L " + t / 2 + " " + e + " z";
                                },
                                additionalPath: function () {},
                            },
                            roll: {
                                path: function (t, e) {
                                    return "\n\t\t\tM " + t / 2 + " 0 A " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + "," + e + "\n\t\t\tA " + e / 2 + "," + e / 2 + " 0 1 0 " + t / 2 + ",0 Z";
                                },
                                additionalPath: function (t, e) {
                                    return "M " + t / 2 + " " + e + " H " + t;
                                },
                            },
                        });
                },
                ,
                function (t, e, n) {
                    "use strict";
                    var d =
                        (this && this.__assign) ||
                        function () {
                            return (d =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    function p(t, e, n) {
                        switch (n) {
                            case "top":
                                return t.$shape.getPoint(t.x + t.width / 2, t.y - e);
                            case "bottom":
                                return t.$shape.getPoint(t.x + t.width / 2, t.y + t.height + e);
                            case "left":
                                return t.$shape.getPoint(t.x - e, t.y + t.height / 2);
                            case "right":
                                return t.$shape.getPoint(t.x + t.width + e, t.y + t.height / 2);
                            case "center":
                                return t.$shape.getPoint(t.x + t.width / 2, t.y + t.height / 2);
                        }
                    }
                    function g(t, e, n, i, r, o) {
                        if ((void 0 === o && (o = 10), !r)) {
                            var s = n.y === i.y ? +o : 0,
                                a = n.x === i.x ? +o : 0;
                            return [t, { x1: n.x, y1: n.y, x: n.x + s, y: n.y + a }, { x: i.x - s, y: i.y - a }, { x1: i.x, y1: i.y, x: e.x, y: e.y }];
                        }
                        var l = i.x < r.x ? -1 : 1,
                            u = i.y < r.y ? -1 : 1,
                            c = n.x > r.x ? 1 : -1,
                            h = n.y > r.y ? 1 : -1,
                            f = d({}, r),
                            s = d({}, i),
                            a = { x1: r.x, y1: r.y, x: r.x, y: r.y + o * u };
                        return (
                            n.x === r.x && ((f.y += o * h), (s.x -= o * l), (a = { x1: r.x, y1: r.y, x: r.x + o * l, y: r.y })),
                            n.y === r.y && ((f.x += o * c), (s.y -= o * u), (a = { x1: r.x, y1: r.y, x: r.x, y: r.y + o * u })),
                            [t, n, f, a, s, { x1: i.x, y1: i.y, x: e.x, y: e.y }]
                        );
                    }
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var v = ["top", "bottom", "right", "left", "center"];
                    function o(t, e, a, n, i, r, o) {
                        var s, l;
                        void 0 === r && (r = ""), void 0 === o && (o = "");
                        var u,
                            c,
                            h = i && n < i ? i : n || 0;
                        if ("center" === r && "center" === o)
                            return [
                                { x: e.x + e.width / 2, y: e.y + e.height / 2 },
                                { x: a.x + a.width / 2, y: a.y + a.height / 2 },
                            ];
                        r && ((s = p(e, 0, r)), (u = p(e, n, r))),
                            o && ((l = p(a, 0, o)), (c = p(a, h, o))),
                            (r && o) ||
                                ((u = (f = v
                                    .map(function (o) {
                                        var s = p(e, n, o);
                                        return v
                                            .map(function (t) {
                                                var e,
                                                    n,
                                                    i,
                                                    r = p(a, h, t),
                                                    e = ((e = s), (i = (n = r).x - e.x), (e = n.y - e.y), Math.sqrt(i * i + e * e));
                                                return [s, r, e, o, t];
                                            })
                                            .sort(function (t, e) {
                                                return t[2] - e[2];
                                            })[0];
                                    })
                                    .sort(function (t, e) {
                                        return t[2] - e[2];
                                    })[0])[0]),
                                (c = f[1]),
                                (r = f[3]),
                                (o = f[4]),
                                (t.fromSide = r),
                                (t.toSide = o),
                                (s = p(e, 0, r)),
                                (l = p(a, 0, o)));
                        i = ("bottom" === r && "top" === o) || ("top" === r && "bottom" === o) ? Math.abs(l.y - s.y) : 0;
                        0 < (i = i || (("left" === r && "right" === o) || ("right" === r && "left" === o) ? Math.abs(l.x - s.x) : 0)) && i <= h + n && (c = p(a, (h = i - n), o));
                        var f = [];
                        return (
                            u.x === c.x || u.y === c.y
                                ? (s.x === u.x && u.x === l.x) || (s.y === u.y && u.y === l.y)
                                    ? (f = [s, l])
                                    : ((f = [s, u, c, l]), t.cornersRadius && "straight" !== t.connectType && (f = g(s, l, u, c, null, t.cornersRadius)))
                                : ((r = u.x < s.x && u.x < c.x),
                                  (i = u.y > s.y && u.y > c.y),
                                  (o = s.x === u.x || r ? { x: u.x, y: c.y } : { x: c.x, y: u.y }),
                                  (o = i ? { x: c.x, y: u.y } : o),
                                  (f = "curved" === t.connectType ? ((r = l), [s, { x1: (i = o).x, y1: i.y, x: r.x, y: r.y }]) : t.cornersRadius && "straight" !== t.connectType ? g(s, l, u, c, o, t.cornersRadius) : [s, u, o, c, l])),
                            f
                        );
                    }
                    (e.nearestLinkPath = function (t, e, n, i) {
                        if (e && n) {
                            var r = o(t, e, n, i.lineGap, t.customGap, t.fromSide, t.toSide);
                            if ("straight" === t.connectType) return (t.points = [r[0], r[r.length - 1]]);
                            t.points
                                ? (t.points.length === r.length
                                      ? (t.points = t.points.map(function (t, e) {
                                            return t && r[e] && !t.$custom ? r[e] : t;
                                        }))
                                      : ((i = t.points.filter(function (t) {
                                            return t.$custom;
                                        })),
                                        (t.points = i.length ? t.points : r)),
                                  t.$move || ((t.points[0] = r[0]), (t.points[t.points.length - 1] = r[r.length - 1])))
                                : (t.points = r);
                        }
                    }),
                        (e.directLinkPath = function (t, e, n, i) {
                            var r, o, s, a, l, u, c, h, f;
                            t &&
                                ((r = e.x + (e.dx || 0)),
                                (o = e.y + (e.dy || 0)),
                                (s = n.x + (n.dx || 0)),
                                (a = n.y + (n.dy || 0)),
                                "vertical" === e.dir
                                    ? ((l = r),
                                      (u = Math.round(o + e.height / 2)),
                                      (c = s),
                                      (h = Math.round(a + n.height / 2)),
                                      (f = 0.5 - Math.round(i.margin.itemX / 2)),
                                      (t.points = [
                                          { x: l, y: u },
                                          { x: l + f, y: u },
                                          { x: l + f, y: h },
                                          { x: c, y: h },
                                      ]))
                                    : ((l = Math.round(r + e.width / 2)),
                                      (u = o + e.height),
                                      (c = Math.round(s + n.width / 2)),
                                      (h = a),
                                      (f = Math.round(i.margin.itemY / 2) + 0.5),
                                      (t.points = [
                                          { x: l, y: u },
                                          { x: l, y: u + f },
                                          { x: c, y: u + f },
                                          { x: c, y: h },
                                      ])));
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        ((e = e.SelectionEvents || (e.SelectionEvents = {})).beforeUnSelect = "beforeunselect"),
                        (e.afterUnSelect = "afterunselect"),
                        (e.beforeSelect = "beforeselect"),
                        (e.afterSelect = "afterselect");
                },
                function (t, e, n) {
                    "use strict";
                    var s =
                        (this && this.__assign) ||
                        function () {
                            return (s =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(7),
                        r = n(53),
                        o = n(56),
                        a = n(10),
                        l = n(5),
                        u = n(4),
                        p = n(1),
                        n =
                            ((c.prototype.add = function (t, n) {
                                var i = this;
                                if (this.events.fire(u.DataEvents.beforeAdd, [t]))
                                    return Array.isArray(t)
                                        ? t.map(function (t, e) {
                                              return 0 !== e && (n += 1), i._add(t, n);
                                          })
                                        : this._add(t, n);
                            }),
                            (c.prototype.remove = function (t) {
                                var e = this;
                                t &&
                                    (t instanceof Array
                                        ? t.map(function (t) {
                                              e._remove(t);
                                          })
                                        : this._remove(t));
                            }),
                            (c.prototype.removeAll = function () {
                                this._removeAll(), this.events.fire(u.DataEvents.removeAll), this.events.fire(u.DataEvents.change);
                            }),
                            (c.prototype.exists = function (t) {
                                return !!this._pull[t];
                            }),
                            (c.prototype.getNearId = function (t) {
                                if (!this._pull[t]) return this._order[0].id || "";
                            }),
                            (c.prototype.getItem = function (t) {
                                return this._pull[t];
                            }),
                            (c.prototype.update = function (t, e, n) {
                                var i = this.getItem(t);
                                i
                                    ? l.isEqualObj(e, i) ||
                                      (e.id && t !== e.id
                                          ? (l.dhxWarning("this method doesn't allow change id"), l.isDebug())
                                          : (p.extend(this._pull[t], e, !1), this.config.update && this.config.update(this._pull[t]), n || this._onChange("update", t, this._pull[t])))
                                    : l.dhxWarning("item not found");
                            }),
                            (c.prototype.getIndex = function (e) {
                                if (!e) return -1;
                                var t = p.findIndex(this._order, function (t) {
                                    return t.id.toString() === e.toString();
                                });
                                return this._pull[e] && 0 <= t ? t : void 0;
                            }),
                            (c.prototype.getId = function (t) {
                                if (this._order[t]) return this._order[t].id;
                            }),
                            (c.prototype.getLength = function () {
                                return this._order.length;
                            }),
                            (c.prototype.isDataLoaded = function (t, e) {
                                return (
                                    void 0 === t && (t = 0),
                                    void 0 === e && (e = this._order.length),
                                    p.isNumeric(t) && p.isNumeric(e)
                                        ? 0 ===
                                          this._order.slice(t, e).filter(function (t) {
                                              return t.$empty;
                                          }).length
                                        : !this.find(function (t) {
                                              return t.$empty;
                                          })
                                );
                            }),
                            (c.prototype.filter = function (t, e) {
                                this.isDataLoaded()
                                    ? ((e = p.extend({ add: !1, multiple: !0 }, e)).add || ((this._order = this._initOrder || this._order), (this._initOrder = null)),
                                      (this._filters = this._filters || {}),
                                      (e.multiple && t) || (this._filters = {}),
                                      t &&
                                          ("function" == typeof t
                                              ? (this._filters._ = { match: "_", compare: t })
                                              : t.match
                                              ? ((t.compare =
                                                    t.compare ||
                                                    function (t, e) {
                                                        return t === e;
                                                    }),
                                                (this._filters[t.by] = t))
                                              : delete this._filters[t.by],
                                          this._applyFilters()),
                                      this.events.fire(u.DataEvents.change))
                                    : l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype.find = function (t) {
                                for (var e in this._pull) {
                                    var n = l.findByConf(this._pull[e], t);
                                    if (n) return n;
                                }
                                return null;
                            }),
                            (c.prototype.findAll = function (t) {
                                var e,
                                    n = [];
                                for (e in this._pull) {
                                    var i = l.findByConf(this._pull[e], t);
                                    i && n.push(i);
                                }
                                return n;
                            }),
                            (c.prototype.sort = function (t) {
                                if (this.isDataLoaded()) {
                                    if (t) this._sort.sort(this._order, t), this._initOrder && this._initOrder.length && this._sort.sort(this._initOrder, t);
                                    else {
                                        for (var e in ((this._order = []), this._pull)) this._order.push(this._pull[e]);
                                        this._applyFilters();
                                    }
                                    this.events.fire(u.DataEvents.change);
                                } else l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype.copy = function (t, n, i, r) {
                                var o = this;
                                return t instanceof Array
                                    ? t.map(function (t, e) {
                                          return o._copy(t, n, i, r, e);
                                      })
                                    : this._copy(t, n, i, r);
                            }),
                            (c.prototype.move = function (t, n, i, r) {
                                var o = this;
                                return t instanceof Array
                                    ? t.map(function (t, e) {
                                          return o._move(t, n, i, r, e);
                                      })
                                    : this._move(t, n, i, r);
                            }),
                            (c.prototype.forEach = function (t) {
                                for (var e = 0; e < this._order.length; e++) t.call(this, this._order[e], e, this._order);
                            }),
                            (c.prototype.load = function (t, e) {
                                return "string" == typeof t && (this.dataProxy = t = new a.DataProxy(t)), (this.dataProxy = t), this._loader.load(t, e);
                            }),
                            (c.prototype.parse = function (t, e) {
                                return this._removeAll(), this._loader.parse(t, e);
                            }),
                            (c.prototype.$parse = function (t) {
                                var e = this.config.approximate;
                                e && (t = this._approximate(t, e.value, e.maxNum)), this._parse_data(t), this.events.fire(u.DataEvents.change, ["load"]), this.events.fire(u.DataEvents.load);
                            }),
                            (c.prototype.save = function (t) {
                                this._loader.save(t);
                            }),
                            (c.prototype.changeId = function (t, e, n) {
                                var i;
                                void 0 === e && (e = p.uid()),
                                    n || this.isDataLoaded()
                                        ? (i = this.getItem(t))
                                            ? ((i.id = e), p.extend(this._pull[t], i), (this._pull[e] = this._pull[t]), n || this._onChange("update", e, this._pull[e]), delete this._pull[t])
                                            : l.dhxWarning("item not found")
                                        : l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype.isSaved = function () {
                                return !this._changes.order.length;
                            }),
                            (c.prototype.map = function (t) {
                                for (var e = [], n = 0; n < this._order.length; n++) e.push(t.call(this, this._order[n], n, this._order));
                                return e;
                            }),
                            (c.prototype.mapRange = function (t, e, n) {
                                t < 0 && (t = 0), e > this._order.length - 1 && (e = this._order.length - 1);
                                for (var i = this._order.slice(t, e), r = [], o = t; o <= e; o++) r.push(n.call(this, this._order[o], o, i));
                                return r;
                            }),
                            (c.prototype.reduce = function (t, e) {
                                for (var n = 0; n < this._order.length; n++) e = t.call(this, e, this._order[n], n);
                                return e;
                            }),
                            (c.prototype.serialize = function (t) {
                                void 0 === t && (t = u.DataDriver.json);
                                var e = this.map(function (t) {
                                        var e = s({}, t);
                                        return (
                                            Object.keys(e).forEach(function (t) {
                                                t.startsWith("$") && delete e[t];
                                            }),
                                            e
                                        );
                                    }),
                                    t = l.toDataDriver(t);
                                if (t) return t.serialize(e);
                            }),
                            (c.prototype.getInitialData = function () {
                                return this._initOrder;
                            }),
                            (c.prototype._add = function (t, e) {
                                if (this.isDataLoaded()) {
                                    e = this._addCore(t, e);
                                    return this._onChange("add", t.id, t), this.events.fire(u.DataEvents.afterAdd, [t]), e;
                                }
                                l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype._remove = function (t) {
                                if (this.isDataLoaded()) {
                                    var e = this._pull[t];
                                    if (e) {
                                        if (!this.events.fire(u.DataEvents.beforeRemove, [e])) return;
                                        this._removeCore(e.id), this._onChange("remove", t, e);
                                    }
                                    this.events.fire(u.DataEvents.afterRemove, [e]);
                                } else l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype._copy = function (t, e, n, i, r) {
                                if (this.isDataLoaded()) {
                                    if (!this.exists(t)) return null;
                                    var o = p.uid();
                                    return (r && (e = -1 === e ? -1 : e + r), n)
                                        ? n instanceof c || !i
                                            ? n.exists(t)
                                                ? (n.add(s(s({}, l.copyWithoutInner(this.getItem(t))), { id: o }), e), o)
                                                : (n.add(l.copyWithoutInner(this.getItem(t)), e), t)
                                            : void n.add(l.copyWithoutInner(this.getItem(t)), e)
                                        : (this.add(s(s({}, l.copyWithoutInner(this.getItem(t))), { id: o }), e), o);
                                }
                                l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype._move = function (t, e, n, i, r) {
                                if (this.isDataLoaded()) {
                                    if ((r && (e = -1 === e ? -1 : e + r), n && n !== this && this.exists(t))) {
                                        var o = p.copy(this.getItem(t), !0);
                                        return n.exists(t) && (o.id = p.uid()), i && (o.parent = i), n.add(o, e), this.remove(t), o.id;
                                    }
                                    if (this.getIndex(t) === e) return null;
                                    o = this._order.splice(this.getIndex(t), 1)[0];
                                    return -1 === e && (e = this._order.length), this._order.splice(e, 0, o), this.events.fire(u.DataEvents.change), t;
                                }
                                l.dhxWarning("the method doesn't work with lazyLoad");
                            }),
                            (c.prototype._removeAll = function () {
                                (this._pull = {}), (this._order = []), (this._changes.order = []), (this._initOrder = null);
                            }),
                            (c.prototype._addCore = function (t, e) {
                                return (
                                    this.config.init && (t = this.config.init(t)),
                                    (t.id = t.id ? t.id.toString() : p.uid()),
                                    this._pull[t.id] && l.dhxError("Item already exist"),
                                    this._initOrder && this._initOrder.length && this._addToOrder(this._initOrder, t, e),
                                    this._addToOrder(this._order, t, e),
                                    t.id
                                );
                            }),
                            (c.prototype._removeCore = function (e) {
                                0 <= this.getIndex(e) &&
                                    ((this._order = this._order.filter(function (t) {
                                        return t.id !== e;
                                    })),
                                    delete this._pull[e]),
                                    this._initOrder &&
                                        this._initOrder.length &&
                                        (this._initOrder = this._initOrder.filter(function (t) {
                                            return t.id !== e;
                                        }));
                            }),
                            (c.prototype._parse_data = function (t) {
                                var e = this._order.length;
                                this.config.prep && (t = this.config.prep(t));
                                for (var n = 0, i = t; n < i.length; n++) {
                                    var r = i[n];
                                    this.config.init && (r = this.config.init(r)), (r.id = r.id || 0 === r.id ? r.id : p.uid()), (this._pull[r.id] = r), (this._order[e++] = r);
                                }
                            }),
                            (c.prototype._approximate = function (t, e, n) {
                                for (var i = t.length, r = e.length, o = Math.floor(i / n), s = Array(Math.ceil(i / o)), a = 0, l = 0; l < i; l += o) {
                                    for (var u = p.copy(t[l]), c = Math.min(i, l + o), h = 0; h < r; h++) {
                                        for (var f = 0, d = l; d < c; d++) f += t[d][e[h]];
                                        u[e[h]] = f / (c - l);
                                    }
                                    s[a++] = u;
                                }
                                return s;
                            }),
                            (c.prototype._onChange = function (t, e, n) {
                                for (var i = 0, r = this._changes.order; i < r.length; i++) {
                                    var o = r[i];
                                    if (o.id === e && !o.saving) return o.error && (o.error = !1), (o = s(s({}, o), { obj: n, status: t })), void this.events.fire(u.DataEvents.change, [e, t, n]);
                                }
                                this._changes.order.push({ id: e, status: t, obj: s({}, n), saving: !1 }), this.events.fire(u.DataEvents.change, [e, t, n]);
                            }),
                            (c.prototype._addToOrder = function (t, e, n) {
                                0 <= n && t[n] ? ((this._pull[e.id] = e), t.splice(n, 0, e)) : ((this._pull[e.id] = e), t.push(e));
                            }),
                            (c.prototype._applyFilters = function () {
                                var t,
                                    n = this;
                                this._filters &&
                                    Object.keys(this._filters).length &&
                                    ((t = this._order.filter(function (e) {
                                        return Object.keys(n._filters).every(function (t) {
                                            return e[t] ? n._filters[t].compare(e[t], n._filters[t].match, e) : n._filters[t].compare(e);
                                        });
                                    })),
                                    this._initOrder || (this._initOrder = this._order),
                                    (this._order = t));
                            }),
                            c);
                    function c(t, e) {
                        (this.config = t || {}),
                            (this._order = []),
                            (this._pull = {}),
                            (this._changes = { order: [] }),
                            (this._initOrder = null),
                            (this._sort = new o.Sort()),
                            (this._loader = new r.Loader(this, this._changes)),
                            (this.events = e || new i.EventSystem(this)),
                            this.events.on(u.DataEvents.loadError, function (t) {
                                "string" != typeof t ? l.dhxError(t) : l.dhxWarning(t);
                            });
                    }
                    e.DataCollection = n;
                },
                function (t, e, n) {
                    "use strict";
                    var i =
                        (this && this.__assign) ||
                        function () {
                            return (i =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var r = n(28),
                        o = n(29),
                        n = n(54);
                    (e.dataDrivers = { json: r.JsonDriver, csv: o.CsvDriver }), (e.dataDriversPro = i(i({}, e.dataDrivers), { xml: n.XMLDriver }));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i =
                        ((r.prototype.toJsonArray = function (t) {
                            return this.getRows(t);
                        }),
                        (r.prototype.serialize = function (t) {
                            return t;
                        }),
                        (r.prototype.getFields = function (t) {
                            return t;
                        }),
                        (r.prototype.getRows = function (t) {
                            return "string" == typeof t ? JSON.parse(t) : t;
                        }),
                        r);
                    function r() {}
                    e.JsonDriver = i;
                },
                function (t, e, n) {
                    "use strict";
                    var i =
                        (this && this.__assign) ||
                        function () {
                            return (i =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var r =
                        ((o.prototype.getFields = function (t, e) {
                            for (var n = t.trim().split(this.config.columnDelimiter), i = {}, r = 0; r < n.length; r++) i[e ? e[r] : r + 1] = n[r];
                            return i;
                        }),
                        (o.prototype.getRows = function (t) {
                            return t.trim().split(this.config.rowDelimiter);
                        }),
                        (o.prototype.toJsonArray = function (t) {
                            var e = this,
                                n = this.getRows(t),
                                i = this.config.names;
                            return (
                                this.config.skipHeader && ((t = n.splice(0, this.config.skipHeader)), this.config.nameByHeader && (i = t[0].trim().split(this.config.columnDelimiter))),
                                n.map(function (t) {
                                    return e.getFields(t, i);
                                })
                            );
                        }),
                        (o.prototype.serialize = function (t, e) {
                            var n = t[0]
                                    ? Object.keys(t[0])
                                          .filter(function (t) {
                                              return !t.startsWith("$");
                                          })
                                          .join(this.config.columnDelimiter)
                                    : "",
                                t = this._serialize(t);
                            return e ? t : n + t;
                        }),
                        (o.prototype._serialize = function (t) {
                            var r = this;
                            return t.reduce(function (t, i) {
                                var e = Object.keys(i).reduce(function (t, e, n) {
                                    return e.startsWith("$") || "items" === e ? t : "" + t + i[e] + (n === i.length - 1 ? "" : r.config.columnDelimiter);
                                }, "");
                                return i.items ? t + "\n" + e + r._serialize(i.items) : "" + t + r.config.rowDelimiter + e;
                            }, "");
                        }),
                        o);
                    function o(t) {
                        (this.config = i(i({}, { skipHeader: 0, nameByHeader: !1, rowDelimiter: "\n", columnDelimiter: "," }), t)), this.config.nameByHeader && (this.config.skipHeader = 1);
                    }
                    e.CsvDriver = r;
                },
                function (t, i, e) {
                    "use strict";
                    Object.defineProperty(i, "__esModule", { value: !0 });
                    var n,
                        r = e(62),
                        o = e(31),
                        s = e(63),
                        a = e(22),
                        l = e(64),
                        u = e(36);
                    for (n in ((i.shapes = { line: r.Line, dash: r.Line, card: o.OrgChartCard, "img-card": s.OrgChartImgCard, text: l.DiagramTextShape }), a.flowShapes)) i.shapes[n] = a.DiagramFlowShape;
                    i.shapesFactory = function (t, e) {
                        var n = i.shapes[t.type];
                        return new (!n && ((n = i.shapes.card), e.shapes[t.type]) ? u.DiagramCustomShape : n)(t, e);
                    };
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o,
                        s = n(0),
                        a = n(6),
                        l = n(3),
                        u = n(11),
                        c = n(16),
                        r =
                            ((o = u.BaseShape),
                            r(h, o),
                            (h.prototype.render = function () {
                                var t = this.config,
                                    e = t.id,
                                    n = t.angle,
                                    i = t.width,
                                    r = t.height,
                                    o = t.headerColor,
                                    t = this.config.$selected ? o : "#E4E4E4",
                                    o = this.getCoords(this.config);
                                return s.el("div", { _key: e, dhx_id: e, class: "dhx_diagram_org_item " + this.getCss(), style: { transform: "rotate(" + (n || 0) + "deg)", position: "absolute", top: o.y, left: o.x, zIndex: 0 } }, [
                                    s.el("div", { class: "dhx_item_shape", id: e, style: { height: r, width: i, border: "1px solid " + t, borderRadius: "1px" } }),
                                    c.getHeaderTpl(this.config),
                                    c.getTextTemplate(this.config, this.getContent()),
                                    c.getCircleTpl(this.config),
                                ]);
                            }),
                            (h.prototype.getMetaInfo = function () {
                                return a.getMeta([
                                    { type: "grid", label: l.default.gridStep },
                                    { type: "color", label: l.default.color },
                                    { type: "position", label: l.default.position },
                                    { type: "size", label: l.default.size },
                                    { type: "text", label: l.default.text },
                                ]);
                            }),
                            (h.prototype.getCss = function () {
                                return "dhx_diagram_item " + o.prototype.getCss.call(this);
                            }),
                            (h.prototype.setDefaults = function (t, e) {
                                var n = t.width,
                                    i = t.height,
                                    r = t.text,
                                    o = t.headerColor,
                                    s = e.width ? parseFloat(e.width) : 140,
                                    a = e.height ? parseFloat(e.height) : 90;
                                return (t.width = n || s), (t.height = i || a), (t.text = "string" == typeof r ? r : e.text || ""), (t.headerColor = o || e.headerColor || ""), t;
                            }),
                            (h.prototype.getContent = function () {
                                return this.config.text;
                            }),
                            h);
                    function h(t, e) {
                        e = o.call(this, t, e) || this;
                        return (e.config = t), (e.id = e.config.id), e;
                    }
                    e.OrgChartCard = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i, r;
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        ((r = e.LineMode || (e.LineMode = {}))[(r.Direct = 1)] = "Direct"),
                        (r[(r.Edges = 2)] = "Edges"),
                        ((r = i = e.Direction || (e.Direction = {}))[(r.Top = 1)] = "Top"),
                        (r[(r.Bottom = 2)] = "Bottom"),
                        (r[(r.Right = 3)] = "Right"),
                        (r[(r.Left = 4)] = "Left"),
                        (e.DirVectors = (((e = {})[i.Bottom] = { x: 0, y: 1 }), (e[i.Top] = { x: 0, y: -1 }), (e[i.Right] = { x: 1, y: 0 }), (e[i.Left] = { x: -1, y: 0 }), e));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        (e.sign = function (t) {
                            return 0 === (t = +t) || isNaN(t) ? t : 0 < t ? 1 : -1;
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(1),
                        n =
                            ((r.prototype.update = function () {
                                document.head.appendChild(this._styleCont), (this._styleCont.innerHTML = this._generateCss());
                            }),
                            (r.prototype.remove = function (t) {
                                delete this._classes[t], this.update();
                            }),
                            (r.prototype.add = function (t, e, n) {
                                void 0 === n && (n = !1);
                                var i = this._toCssString(t),
                                    t = this._findSameClassId(i);
                                return t && e && e !== t ? ((this._classes[e] = this._classes[t]), e) : t || this._addNewClass(i, e, n);
                            }),
                            (r.prototype.get = function (t) {
                                if (this._classes[t]) {
                                    for (var e = {}, n = 0, i = this._classes[t].split(";"); n < i.length; n++) {
                                        var r = i[n];
                                        r && (e[(r = r.split(":"))[0]] = r[1]);
                                    }
                                    return e;
                                }
                                return null;
                            }),
                            (r.prototype._findSameClassId = function (t) {
                                for (var e in this._classes) if (t === this._classes[e]) return e;
                                return null;
                            }),
                            (r.prototype._addNewClass = function (t, e, n) {
                                e = e || "dhx_generated_class_" + i.uid();
                               // return (this._classes[e] = t), n || this.update(), e;
                            }),
                            (r.prototype._toCssString = function (t) {
                                var e,
                                    n = "";
                                for (e in t) {
                                    var i = t[e];
                                    n +=
                                        e.replace(/[A-Z]{1}/g, function (t) {
                                            return "-" + t.toLowerCase();
                                        }) +
                                        ":" +
                                        i +
                                        ";";
                                }
                                return n;
                            }),
                            (r.prototype._generateCss = function () {
                                var t,
                                    e = "";
                                for (t in this._classes) e += "." + t + "{" + this._classes[t] + "}\n";
                                return e;
                            }),
                            r);
                    function r() {
                        this._classes = {};
                        var t = document.createElement("style");
                        (t.id = "dhx_generated_styles"), (this._styleCont = document.head.appendChild(t));
                    }
                    (e.CssManager = n), (e.cssManager = new n());
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            }),
                        c =
                            (this && this.__assign) ||
                            function () {
                                return (c =
                                    Object.assign ||
                                    function (t) {
                                        for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                        return t;
                                    }).apply(this, arguments);
                            },
                        o =
                            (this && this.__spreadArrays) ||
                            function () {
                                for (var t = 0, e = 0, n = arguments.length; e < n; e++) t += arguments[e].length;
                                for (var i = Array(t), r = 0, e = 0; e < n; e++) for (var o = arguments[e], s = 0, a = o.length; s < a; s++, r++) i[r] = o[s];
                                return i;
                            };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var s,
                        a = n(7),
                        l = n(1),
                        h = n(0),
                        u = n(2),
                        f = n(9),
                        d = n(50),
                        p = n(24),
                        g = n(51),
                        v = n(52),
                        y = n(30),
                        _ = n(22),
                        m = n(37),
                        x = n(65),
                        b = n(12),
                        w = n(19),
                        k = n(32),
                        M = n(66),
                        C = n(70),
                        D = n(71),
                        r =
                            ((s = f.View),
                            r(O, s),
                            (O.prototype.addShape = function (t, e) {
                                if (o(["line", "dash", "card", "img-card", "text"], Object.keys(this.flowShapes)).includes(t)) throw new Error("Cannot reassign existing type");
                                if ("function" != typeof e.template) throw new Error("The template property must be set as a function");
                                e.defaults && (this.config.defaults[t] = c({}, e.defaults)), e.properties && (this.config.properties[t] = o(e.properties)), (this.flowShapes[t] = e.template);
                            }),
                            (O.prototype.locate = function (t) {
                                (t = u.locate(t, "dhx_id")), (t = this.data.getItem(t));
                                return t ? t.$shape : null;
                            }),
                            (O.prototype.collapseItem = function (t) {
                                this.events.fire(b.DiagramEvents.beforeCollapse, [t]) && (this.data.update(t, { open: !1 }), this.events.fire(b.DiagramEvents.afterCollapse, [t]));
                            }),
                            (O.prototype.expandItem = function (t) {
                                this.events.fire(b.DiagramEvents.beforeExpand, [t]) && (this.data.update(t, { open: !0 }), this.events.fire(b.DiagramEvents.afterExpand, [t]));
                            }),
                            (O.prototype.getScrollState = function () {
                                var t = this.getRootView().node.el;
                                return { x: t.scrollLeft, y: t.scrollTop };
                            }),
                            (O.prototype.scrollTo = function (t, e) {
                                var n = this.getRootView().node.el;
                                (n.scrollLeft = t), (n.scrollTop = e);
                            }),
                            (O.prototype.showItem = function (t) {
                                var e = this.getRootView().node.el,
                                    n = this.data.getItem(t);
                                n && ((t = n.$shape.getBox()), (n = e.offsetWidth / 2), (e = e.offsetHeight / 2), this.scrollTo(t.right + 10 - n, t.bottom + 10 - e));
                            }),
                            (O.prototype.autoPlace = function (t) {
                                var i = this,
                                    e = this.config,
                                    n = e.autoplacement,
                                    e = e.type,
                                    r = (t && t.mode) || n.mode || "direct",
                                    o = (t && t.root) || this.selection.getId();
                                if ("org" === e) throw new Error("This method does not work with this type of diagram");
                                var s = new w.default();
                                this.data.map(function (t) {
                                    "line" !== t.type && "dash" !== t.type && s.addNode({ id: t.id.toString(), w: t.width, h: t.height, x: t.x, y: t.y });
                                }),
                                    this.data.map(function (t) {
                                        ("line" === t.type || "dash" === t.type) && t.from && t.to
                                            ? (i.data.update(t.id, { fromSide: "direct" === r ? "center" : void 0, toSide: "direct" === r ? "center" : void 0 }), s.addEdge(t.from.toString(), t.to.toString()))
                                            : ("line" !== t.type && "dash" !== t.type) || i.data.remove(t.id);
                                    }),
                                    s.clean();
                                var a = new M.default(),
                                    e = C.compose(
                                        D.decompose(s).map(function (t) {
                                            return (
                                                (t = a.layout(t, {
                                                    mode: r,
                                                    root: o,
                                                    dir: (n && n.direction) || k.Direction.Bottom,
                                                    wide: n && n.wide,
                                                    itemPadding: (n && n.itemPadding) || 0,
                                                    levelPadding: (n && n.levelPadding) || 0,
                                                    full: !0,
                                                    preserveLocation: !1,
                                                })).setGlobalBox(),
                                                t
                                            );
                                        }),
                                        { padding: "number" == typeof n.graphPadding ? (t && t.graphPadding) || n.graphPadding : 200 }
                                    ),
                                    t = e.getBox();
                                e.translate({ x: -t[0][0], y: -t[1][0] }),
                                    e.getNodes().forEach(function (t) {
                                        var e = Math.floor(t.x - t.w / 2),
                                            n = Math.floor(t.y - t.h / 2);
                                        i.data.update(t.id, { x: e, y: n });
                                    });
                            }),
                            (O.prototype.destructor = function () {
                                this.events.clear(), this.unmount();
                            }),
                            (O.prototype._render = function (t) {
                                if (this._doNotRepaint && t.node) return t.node;
                                this._doNotRepaint = !0;
                                var e = this._getContent(),
                                    n = e.size,
                                    i = e.svgContent,
                                    r = e.htmlContent;
                                this.events.fire(b.DiagramEvents.beforeRender, [n]);
                                var o = n.x - n.left + 2 * this.config.margin.x,
                                    s = n.y - n.top + 2 * this.config.margin.y,
                                    a = "org" === this.config.type ? "dhx_org_chart" : "dhx_free_diagram";
                                (n.left -= this.config.margin.x), (n.top -= this.config.margin.y);
                                var l = n.top + this.config.margin.y < 0 ? Math.abs(n.top) : this.config.margin.y,
                                    t = n.left + this.config.margin.x < 0 ? Math.abs(n.left) : this.config.margin.x,
                                    e = null;
                                !this.toolbar || ((u = this.selection.getId()) && (e = this.toolbar.render(this.data.getItem(u), c(c({}, n), { scale: this.config.scale }))));
                                var u = [];
                                return (
                                    this.config.$svg && (u = this.config.$svg(n)),
                                    h.el(".dhx_diagram.dhx_widget", c({}, this._htmlevents), [
                                        h.el("div.dhx_diagram__container", { class: a, style: { height: s * this.config.scale, width: o * this.config.scale } }, [
                                            h.el(
                                                ".dhx_wrapper",
                                                { style: { transform: "scale(" + this.config.scale + ")", position: "absolute", top: 0, left: 0, transformOrigin: "top", zIndex: "org" === this.config.type && this._active ? 1 : 0 } },
                                                [
                                                    h.el("div.dhx_diagram__scale-container", [
                                                        h.sv("svg", { xmlns: "http://www.w3.org/2000/svg", width: o, height: s, viewBox: n.left + " " + n.top + " " + o + " " + s }, [
                                                            h.sv("defs", [
                                                                h.sv("filter", { x: 0, y: 0, width: 1, height: 1, id: "dhx_text_background" }, [h.sv("feFlood", { "flood-color": "white" }), h.sv("feComposite", { in: "SourceGraphic" })]),
                                                            ]),
                                                            h.sv("g", { "shape-rendering": 1 === this.config.scale && "org" === this.config.type ? "crispedges" : "auto" }, i),
                                                        ]),
                                                        h.el(".dhx_shape-container", { style: { position: "absolute", top: l, left: t } }, r),
                                                    ]),
                                                ]
                                            ),
                                            u,
                                            e,
                                        ]),
                                    ])
                                );
                            }),
                            (O.prototype._init_events = function () {
                                var r = this;
                                this._htmlevents = {
                                    onscroll: function () {
                                        r.events.fire(b.DiagramEvents.scroll, [r.getScrollState()]);
                                    },
                                    onmousedown: u.eventHandler(
                                        function (t) {
                                            return r.locate(t);
                                        },
                                        {
                                            dhx_diagram_item: function (t, e) {
                                                (r._active = !0), r.events.fire(b.DiagramEvents.shapeMouseDown, [e.id, t]);
                                            },
                                            dhx_diagram_flow_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeMouseDown, [e.id, t]);
                                            },
                                            dhx_diagram_connector: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeMouseDown, [e.id, t, r._getPoint(t.clientX, t.clientY)]);
                                            },
                                            dhx_diagram: function (t) {
                                                var e = t.target,
                                                    n = e.getAttribute && (e.getAttribute("class") || "").match(/dhx_diagram\b/),
                                                    i = "svg" === e.tagName;
                                                u.locateNodeByClassName(e, "dhx_popup_toolbar") || (!n && !i) || r.events.fire(b.DiagramEvents.emptyAreaMouseDown, [t]);
                                            },
                                        }
                                    ),
                                    onmouseout: u.eventHandler(
                                        function (t) {
                                            return r.locate(t);
                                        },
                                        {
                                            dhx_selected: function () {
                                                (r._active = !1), r.paint();
                                            },
                                        }
                                    ),
                                    onmouseover: u.eventHandler(
                                        function (t) {
                                            return r.locate(t);
                                        },
                                        {
                                            dhx_selected: function () {
                                                (r._active = !0), r.paint();
                                            },
                                            dhx_diagram_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeHover, [e.id, t]);
                                            },
                                            dhx_diagram_flow_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeHover, [e.id, t]);
                                            },
                                            dhx_diagram_connector: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeHover, [e.id, t]);
                                            },
                                        }
                                    ),
                                    onclick: u.eventHandler(
                                        function (t) {
                                            return r.locate(t);
                                        },
                                        {
                                            dhx_expand_icon: function (t, e) {
                                                return r.expandItem(e.id);
                                            },
                                            dhx_hide_icon: function (t, e) {
                                                return r.collapseItem(e.id);
                                            },
                                            dhx_diagram_connector: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeClick, [e.id, t]);
                                            },
                                            dhx_diagram_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeClick, [e.id, t]), !r.config.select || t.shiftKey || t.altKey || r.selection.add(e.id || e.config.id);
                                            },
                                            dhx_diagram_flow_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapeClick, [e.id, t]);
                                            },
                                            dhx_diagram_line: function (t, e) {
                                                r.events.fire(b.DiagramEvents.lineClick, [e.id, t]);
                                            },
                                            dhx_diagram: function (t) {
                                                var e = t.target,
                                                    n = e.getAttribute && (e.getAttribute("class") || "").match(/dhx_diagram\b/),
                                                    e = "svg" === e.tagName;
                                                (n || e) && r.events.fire(b.DiagramEvents.emptyAreaClick, [t]);
                                            },
                                        }
                                    ),
                                    ondblclick: u.eventHandler(
                                        function (t) {
                                            return r.locate(t);
                                        },
                                        {
                                            dhx_diagram_connector: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapedDblClick, [e.id, t]);
                                            },
                                            dhx_diagram_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapedDblClick, [e.id, t]);
                                            },
                                            dhx_diagram_flow_item: function (t, e) {
                                                r.events.fire(b.DiagramEvents.shapedDblClick, [e.id, t]);
                                            },
                                        }
                                    ),
                                };
                            }),
                            (O.prototype._set_defaults = function () {
                                this.config = l.extend(
                                    {
                                        defaultShapeType: "card",
                                        defaultLinkType: "line",
                                        lineGap: 10,
                                        scale: 1,
                                        margin: { x: 40, y: 40, itemX: 40, itemY: 40 },
                                        gridStep: 10,
                                        defaults: {},
                                        properties: {},
                                        autoplacement: { mode: "direct", graphPadding: 200 },
                                    },
                                    this.config
                                );
                            }),
                            (O.prototype._init_struct = function () {
                                var n = this;
                                (this.events = new a.EventSystem(this)),
                                    (this.flowShapes = c({}, _.flowShapes)),
                                    (this.data = new m.ShapesCollection(
                                        {
                                            init: function (t) {
                                                var e = "from" in t ? n.config.defaultLinkType : n.config.defaultShapeType;
                                                return (
                                                    (t.type = t.type || e),
                                                    "org" !== n.config.type && t.from && (t.stroke = t.stroke || "#2196F3"),
                                                    (t.$shape = y.shapesFactory(t, { defaults: n.config.defaults[t.type] || {}, properties: n.config.properties[t.type] || {}, shapes: n.flowShapes })),
                                                    t
                                                );
                                            },
                                            update: function (t) {
                                                t.$shape.config = t;
                                            },
                                            type: this.config.type,
                                        },
                                        this.events
                                    )),
                                    (this.selection = new v.Selection({}, this.data, this.events)),
                                    (this.export = new d.Exporter("diagram", this.version, this)),
                                    this.data.events.on(b.DataEvents.change, function () {
                                        return n.paint();
                                    }),
                                    this.events.on(b.SelectionEvents.afterSelect, function () {
                                        return n.paint();
                                    });
                            }),
                            (O.prototype._getContent = function () {
                                var e = this,
                                    n = !1;
                                "org" === this.config.type && (g.placeOrgonogram(this.data, this.config), (n = !0));
                                var i = { x: 0, y: 0, left: 0, top: 0, scale: this.config.scale },
                                    r = [],
                                    o = [];
                                return (
                                    this.data.mapVisible(function (t) {
                                        t &&
                                            (t.$shape.isConnector() ? (n || p.nearestLinkPath(t, e.data.getItem(t.from), e.data.getItem(t.to), e.config), r.push(t.$shape.render())) : o.push(t.$shape.render()),
                                            (t = t.$shape.getBox()).right > i.x && (i.x = t.right),
                                            t.left < i.left && (i.left = t.left),
                                            t.bottom > i.y && (i.y = t.bottom),
                                            t.top < i.top && (i.top = t.top));
                                    }),
                                    { size: i, svgContent: r, htmlContent: o }
                                );
                            }),
                            (O.prototype._getPoint = function (t, e) {
                                var n = this.getRootView().node.el.getBoundingClientRect();
                                return { x: t - n.left - this.config.margin.x, y: e - n.top - this.config.margin.y };
                            }),
                            O);
                    function O(t, e) {
                        var n = s.call(this, t, e) || this;
                        (n.version = "3.0.3"), n._set_defaults(), n._init_events(), n._init_struct(), n.config.toolbar && (n.toolbar = new x.Toolbar(n.events, n.config.toolbar));
                        e = h.create(
                            {
                                render: function (t) {
                                    return n._render(t);
                                },
                            },
                            n
                        );
                        return n.mount(t, e), n;
                    }
                    e.Diagram = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o,
                        s = n(0),
                        a = n(1),
                        d = n(6),
                        l = n(16),
                        u = n(11),
                        p = n(3),
                        r =
                            ((o = u.BaseShape),
                            r(c, o),
                            (c.prototype.getMetaInfo = function () {
                                return this._getMetaInfoStructure(this.config);
                            }),
                            (c.prototype.render = function () {
                                var t = this.config,
                                    e = t.id,
                                    n = t.angle,
                                    i = t.width,
                                    r = t.height,
                                    t = this.getCoords(this.config);
                                return s.el(
                                    "div",
                                    {
                                        _key: e,
                                        class: "dhx_diagram_flow_item " + this.getCss(),
                                        dhx_id: e,
                                        style: { transform: "rotate(" + (n || 0) + "deg)", zIndex: this.config.$selected ? 1 : 0, position: "absolute", height: r, width: i, top: t.y, left: t.x },
                                    },
                                    [this._getCustomContent(), l.getCircleTpl(this.config)]
                                );
                            }),
                            (c.prototype.setDefaults = function (e, n) {
                                Object.keys(n).forEach(function (t) {
                                    e[t] = e[t] || n[t];
                                });
                                var t = n.width ? parseFloat(n.width) : 140,
                                    i = n.height ? parseFloat(n.height) : 90;
                                return (e.width = e.width || t), (e.height = e.height || i), (e.x = e.x || 0), (e.y = e.y || 0), e;
                            }),
                            (c.prototype._getMetaInfoStructure = function (t) {
                                return a.isEmptyObj(this._properties) ? this._getBaseMetaInfoStructure(t) : d.getMeta(this._properties);
                            }),
                            (c.prototype._getBaseMetaInfoStructure = function (t) {
                                var e = t.text,
                                    n = t.title,
                                    i = t.img,
                                    r = t.fill,
                                    o = t.stroke,
                                    s = t.strokeWidth,
                                    a = t.textAlign,
                                    l = t.lineHeight,
                                    u = t.fontStyle,
                                    c = t.textVerticalAlign,
                                    h = t.fontSize,
                                    f = [],
                                    f = t.$expandColor
                                        ? d.getMeta([
                                              { type: "grid", label: p.default.gridStep },
                                              { type: "position", label: p.default.position },
                                              { type: "size", label: p.default.size },
                                          ])
                                        : d.getMeta([
                                              { type: "grid", label: p.default.gridStep },
                                              { type: "arrange", label: p.default.arrange },
                                          ]);
                                return (
                                    r && f.push(d.getMeta([{ type: "fill", label: p.default.fill }])[0]),
                                    n && f.push(d.getMeta([{ type: "title", label: p.default.title }])[0]),
                                    e && f.push(d.getMeta([{ type: "text", label: p.default.text }])[0]),
                                    o && s && f.push(d.getMeta([{ type: "strokeProps", label: p.default.stroke }])[0]),
                                    a && l && u && c && h && f.push(d.getMeta([{ type: "textProps", label: p.default.textProps }])[0]),
                                    i && f.push(d.getMeta([{ type: "img", label: p.default.image }])[0]),
                                    f
                                );
                            }),
                            (c.prototype._getCustomContent = function () {
                                var t = this.config,
                                    e = t.type,
                                    n = t.width,
                                    t = t.height,
                                    e = this.shapes[e];
                                if ("function" == typeof e) return [s.el("div", { class: "dhx_diagram_flow_shape dhx_item_shape ", style: { width: n, height: t } }, this._getShapeFromFunction(e))];
                            }),
                            (c.prototype._getShapeFromFunction = function (t) {
                                t = new DOMParser().parseFromString(t(this.config), "text/xml");
                                return [s.jsonToVDOM(s.xmlToJson(t))];
                            }),
                            c);
                    function c(t, e) {
                        var n = o.call(this, t, e) || this;
                        return (n.config = t), (n.id = n.config.id), (n.shapes = e.shapes), (n._properties = e.properties), n;
                    }
                    e.DiagramCustomShape = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o,
                        s = n(15),
                        a = n(12),
                        r =
                            ((o = s.DataCollection),
                            r(l, o),
                            (l.prototype.getNearId = function (t) {
                                t = this._pull[t];
                                if (!t) return this._order.length ? this._order[0].id : "";
                                for (var e = t; this._orgMode && e.$parent; ) if (!1 === (e = this._pull[this._pull[e.$parent].from]).open) return e.id;
                                return t.id;
                            }),
                            (l.prototype.mapVisible = function (i) {
                                var r = this,
                                    o = [];
                                if (this._orgMode) for (var t = this.getRoots(), e = 0; e < t.length; e++) this._eachBranch(this.getItem(t[e]), i, o);
                                else
                                    this.map(function (t) {
                                        if (!t.hidden) {
                                            if (t.$shape.isConnector()) {
                                                var e = r.getItem(t.from) || {},
                                                    n = r.getItem(t.to) || {};
                                                if (e.hidden || n.hidden) return;
                                            }
                                            o.push(i(t));
                                        }
                                    });
                                return o;
                            }),
                            (l.prototype.getRoots = function () {
                                return this._roots;
                            }),
                            (l.prototype._removeNested = function (t) {
                                var e = t.$kids;
                                if (e) for (var n = 0; n < e.length; n++) this._orgMode && (this._removeNested(this.getItem(e[n][1])), this._removeCore(e[n][1])), this._removeCore(e[n][0]);
                            }),
                            (l.prototype._eachBranch = function (t, e, n) {
                                if (!t.hidden && (n.push(e(t)), !1 !== t.open)) {
                                    var i = t.$kids;
                                    if (i)
                                        for (var r = 0; r < i.length; r++) {
                                            var o = this.getItem(i[r][1]);
                                            o.hidden || (n.push(e(this.getItem(i[r][0]))), this._eachBranch(o, e, n));
                                        }
                                }
                            }),
                            (l.prototype._parse_data = function (t) {
                                for (var e = [], n = !1, i = 0; i < t.length; i++) {
                                    var r = t[i];
                                    r.parent && !n && e.push({ from: r.parent, to: r.id }), r.from && (n = !0);
                                }
                                e.length && !n && (t = t.concat(e)), o.prototype._parse_data.call(this, t);
                            }),
                            (l.prototype._mark_chains = function () {
                                var e = this;
                                this._roots = [];
                                var n = {},
                                    i = {};
                                this.map(function (t) {
                                    var e;
                                    t.$shape.isConnector() && ((i[(e = t).to] = e.id), (n[e.from] = n[e.from] || []).push([t.id, e.to]));
                                }),
                                    this.map(function (t) {
                                        t.$shape.isConnector() || ((t.$parent = i[t.id]), (t.$kids = n[t.id]), t.$parent || e._roots.push(t.id));
                                    });
                            }),
                            l);
                    function l(t, e) {
                        var i = o.call(this, t, e) || this;
                        return (
                            (i._roots = []),
                            (i._orgMode = "org" === t.type),
                            i.events.on(a.DataEvents.change, function (t, e, n) {
                                "remove" === e && (i._removeNested(n), i._removeCore(n.$parent)), "add" === e && n.parent && i._addCore({ from: n.parent, to: n.id }, -1), i._mark_chains();
                            }),
                            i
                        );
                    }
                    e.ShapesCollection = r;
                },
                ,
                ,
                function (t, e) {
                    Object.values =
                        Object.values ||
                        function (e) {
                            var t = Object.prototype.toString.call(e);
                            if (null == e) throw new TypeError("Cannot convert undefined or null to object");
                            if (~["[object String]", "[object Object]", "[object Array]", "[object Function]"].indexOf(t)) {
                                if (Object.keys)
                                    return Object.keys(e).map(function (t) {
                                        return e[t];
                                    });
                                var n,
                                    i = [];
                                for (n in e) e.hasOwnProperty(n) && i.push(e[n]);
                                return i;
                            }
                            return [];
                        };
                },
                function (t, e) {
                    Array.prototype.includes ||
                        Object.defineProperty(Array.prototype, "includes", {
                            value: function (t, e) {
                                if (null == this) throw new TypeError('"this" is null or not defined');
                                var n = Object(this),
                                    i = n.length >>> 0;
                                if (0 == i) return !1;
                                var r,
                                    o,
                                    e = 0 | e,
                                    s = Math.max(0 <= e ? e : i - Math.abs(e), 0);
                                for (; s < i; ) {
                                    if ((r = n[s]) === (o = t) || ("number" == typeof r && "number" == typeof o && isNaN(r) && isNaN(o))) return !0;
                                    s++;
                                }
                                return !1;
                            },
                            configurable: !0,
                            writable: !0,
                        }),
                        Array.prototype.find ||
                            Object.defineProperty(Array.prototype, "find", {
                                value: function (t) {
                                    if (null == this) throw new TypeError('"this" is null or not defined');
                                    var e = Object(this),
                                        n = e.length >>> 0;
                                    if ("function" != typeof t) throw new TypeError("predicate must be a function");
                                    for (var i = arguments[1], r = 0; r < n; ) {
                                        var o = e[r];
                                        if (t.call(i, o, r, e)) return o;
                                        r++;
                                    }
                                },
                                configurable: !0,
                                writable: !0,
                            });
                },
                function (t, e) {
                    String.prototype.includes ||
                        (String.prototype.includes = function (t, e) {
                            "use strict";
                            return "number" != typeof e && (e = 0), !(e + t.length > this.length) && -1 !== this.indexOf(t, e);
                        }),
                        String.prototype.startsWith ||
                            Object.defineProperty(String.prototype, "startsWith", {
                                enumerable: !1,
                                configurable: !0,
                                writable: !0,
                                value: function (t, e) {
                                    return (e = e || 0), this.indexOf(t, e) === e;
                                },
                            });
                },
                function (t, e) {
                    var n;
                    Element && !Element.prototype.matches && ((n = Element.prototype).matches = n.matchesSelector || n.mozMatchesSelector || n.msMatchesSelector || n.oMatchesSelector || n.webkitMatchesSelector),
                        "classList" in SVGElement.prototype ||
                            Object.defineProperty(SVGElement.prototype, "classList", {
                                get: function () {
                                    var n = this;
                                    return {
                                        contains: function (t) {
                                            return -1 !== n.className.baseVal.split(" ").indexOf(t);
                                        },
                                        add: function (t) {
                                            return n.setAttribute("class", n.getAttribute("class") + " " + t);
                                        },
                                        remove: function (t) {
                                            var e = n.getAttribute("class").replace(new RegExp("(\\s|^)".concat(t, "(\\s|$)"), "g"), "$2");
                                            n.classList.contains(t) && n.setAttribute("class", e);
                                        },
                                        toggle: function (t) {
                                            this.contains(t) ? this.remove(t) : this.add(t);
                                        },
                                    };
                                },
                                configurable: !0,
                            });
                },
                function (t, e, n) {
                    "use strict";
                    n.r(e);
                    var r = n(34),
                        e = n(45),
                        o = [
                            "aG9zdG5hbWU=",
                            "aW5jbHVkZXM=",
                            "ZGh0bWx4LmNvbQ==",
                            "ZGh0bWx4LnJ1",
                            "ZGh0bWx4Y29kZS5jb20=",
                            "d2ViaXhjb2RlLmNvbQ==",
                            "b25sb2Fk",
                            "Z2V0Q29tcHV0ZWRTdHlsZQ==",
                            "OmFmdGVy",
                            "Z2V0UHJvcGVydHlWYWx1ZQ==",
                            "Y29udGVudA==",
                            "bm9uZQ==",
                            "Y3JlYXRlRWxlbWVudA==",
                            "ZGl2",
                            "YWRkRXZlbnRMaXN0ZW5lcg==",
                            "Y2xpY2s=",
                            "Ym9keQ==",
                            "cmVtb3ZlQ2hpbGQ=",
                            "b3Blbg==",
                            "aHR0cHM6Ly9kaHRtbHguY29tL2RvY3MvcHJvZHVjdHMvZGh0bWx4RGlhZ3JhbS9kb3dubG9hZC5zaHRtbA==",
                            "X2JsYW5r",
                            "ZGlzcGxheQ==",
                            "YmxvY2sgIWltcG9ydGFudA==",
                            "YmFja2dyb3VuZA==",
                            "I2ZmNTI1MiAhaW1wb3J0YW50",
                            "Y29sb3I=",
                            "d2hpdGUgIWltcG9ydGFudA==",
                            "cGFkZGluZw==",
                            "MTJweA==",
                            "cG9zaXRpb24=",
                            "YWJzb2x1dGUgIWltcG9ydGFudA==",
                            "bWF4V2lkdGg=",
                            "MjYwcHg=",
                            "dG9w",
                            "MiUgIWltcG9ydGFudA==",
                            "cmlnaHQ=",
                            "Zm9udFNpemU=",
                            "MTRweCAhaW1wb3J0YW50",
                            "Ym94U2hhZG93",
                            "MCAxcHggNnB4IHJnYmEoMCwwLDAsLjEpLCAwIDEwcHggMjBweCByZ2JhKDAsMCwwLC4xKQ==",
                            "Y3Vyc29y",
                            "cG9pbnRlcg==",
                            "Ym9yZGVyUmFkaXVz",
                            "MnB4",
                            "Zm9udEZhbWlseQ==",
                            "Um9ib3Rv",
                            "YWRk",
                            "IlRoaXMgdmVyc2lvbiBvZiBESFRNTFggRGlhZ3JhbSBpcyBpbnRlbmRlZCBmb3IgZGVtb25zdHJhdGlvbiBvbmx5LiBEb3dubG9hZCBhbiBvZmZpY2lhbCBldmFsdWF0aW9uIHZlcnNpb24gdG8gdHJ5IERIVE1MWCBEaWFncmFtIGluIHlvdXIgcHJvamVjdC4iICFpbXBvcnRhbnQ=",
                            "Y2xhc3NMaXN0",
                            "YXBwZW5kQ2hpbGQ=",
                        ],
                        s = function (t, e) {
                            var n = o[(t = +t)];
                            void 0 === s.QMLrRK &&
                                ((function () {
                                    try {
                                        var e = Function('return (function() {}.constructor("return this")( ));')();
                                    } catch (t) {
                                        e = window;
                                    }
                                    e.atob ||
                                        (e.atob = function (t) {
                                            for (
                                                var e, n, i = String(t).replace(/=+$/, ""), r = "", o = 0, s = 0;
                                                (n = i.charAt(s++));
                                                ~n && ((e = o % 4 ? 64 * e + n : n), o++ % 4) && (r += String.fromCharCode(255 & (e >> ((-2 * o) & 6))))
                                            )
                                                n = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(n);
                                            return r;
                                        });
                                })(),
                                (s.HBfUTY = function (t) {
                                    for (var e = atob(t), n = [], i = 0, r = e.length; i < r; i++) n += "%" + ("00" + e.charCodeAt(i).toString(16)).slice(-2);
                                    return decodeURIComponent(n);
                                }),
                                (s.LtWzlO = {}),
                                (s.QMLrRK = !0));
                            var i = s.LtWzlO[t];
                            return void 0 === i ? ((n = s.HBfUTY(n)), (s.LtWzlO[t] = n)) : (n = i), n;
                        };
                    location[s("0x0")][s("0x1")](s("0x2")) ||
                        location[s("0x0")][s("0x1")](s("0x3")) ||
                        location[s("0x0")][s("0x1")](s("0x4")) ||
                        location[s("0x0")][s("0x1")](s("0x5")) ||
                        (window[s("0x6")] = function () {
                            var i;
                            function e() {
                                (i = document[s("0xc")](s("0xd")))[s("0xe")](s("0xf"), function () {
                                    document[s("0x10")][s("0x11")](i), window[s("0x12")](s("0x13"), s("0x14"));
                                });
                                var t = new r.CssManager(),
                                    e = {};
                                (e[s("0x15")] = s("0x16")),
                                    (e[s("0x17")] = s("0x18")),
                                    (e[s("0x19")] = s("0x1a")),
                                    (e[s("0x1b")] = s("0x1c")),
                                    (e[s("0x1d")] = s("0x1e")),
                                    (e[s("0x1f")] = s("0x20")),
                                    (e[s("0x21")] = s("0x22")),
                                    (e[s("0x23")] = s("0x22")),
                                    (e[s("0x24")] = s("0x25")),
                                    (e[s("0x26")] = s("0x27")),
                                    (e[s("0x28")] = s("0x29")),
                                    (e[s("0x2a")] = s("0x2b")),
                                    (e[s("0x2c")] = s("0x2d"));
                                var n = t[s("0x2e")](e),
                                    e = {};
                                (e[s("0xa")] = s("0x2f")), (e[s("0x24")] = s("0x25")), (e[s("0x17")] = s("0x18")), (e[s("0x19")] = s("0x1a")), t[s("0x2e")](e, n + s("0x8")), i[s("0x30")][s("0x2e")](n), document[s("0x10")][s("0x31")](i);
                            }
                            setInterval(function () {
                                var t = window[s("0x7")](i, s("0x8"));
                                (t && t[s("0x9")](s("0xa")) && t[s("0x9")](s("0xa")) !== s("0xb")) || e();
                            }, 6e4),
                                e();
                        });
                },
                function (t, e, n) {},
                function (t, r, o) {
                    (function (t) {
                        var e = (void 0 !== t && t) || ("undefined" != typeof self && self) || window,
                            n = Function.prototype.apply;
                        function i(t, e) {
                            (this._id = t), (this._clearFn = e);
                        }
                        (r.setTimeout = function () {
                            return new i(n.call(setTimeout, e, arguments), clearTimeout);
                        }),
                            (r.setInterval = function () {
                                return new i(n.call(setInterval, e, arguments), clearInterval);
                            }),
                            (r.clearTimeout = r.clearInterval = function (t) {
                                t && t.close();
                            }),
                            (i.prototype.unref = i.prototype.ref = function () {}),
                            (i.prototype.close = function () {
                                this._clearFn.call(e, this._id);
                            }),
                            (r.enroll = function (t, e) {
                                clearTimeout(t._idleTimeoutId), (t._idleTimeout = e);
                            }),
                            (r.unenroll = function (t) {
                                clearTimeout(t._idleTimeoutId), (t._idleTimeout = -1);
                            }),
                            (r._unrefActive = r.active = function (t) {
                                clearTimeout(t._idleTimeoutId);
                                var e = t._idleTimeout;
                                0 <= e &&
                                    (t._idleTimeoutId = setTimeout(function () {
                                        t._onTimeout && t._onTimeout();
                                    }, e));
                            }),
                            o(47),
                            (r.setImmediate = ("undefined" != typeof self && self.setImmediate) || (void 0 !== t && t.setImmediate) || (this && this.setImmediate)),
                            (r.clearImmediate = ("undefined" != typeof self && self.clearImmediate) || (void 0 !== t && t.clearImmediate) || (this && this.clearImmediate));
                    }.call(this, o(17)));
                },
                function (t, e, n) {
                    (function (t, p) {
                        !(function (n, i) {
                            "use strict";
                            var r, o, e, s, a, l, u, c, t;
                            function h(t) {
                                delete o[t];
                            }
                            function f(t) {
                                if (e) setTimeout(f, 0, t);
                                else {
                                    var n = o[t];
                                    if (n) {
                                        e = !0;
                                        try {
                                            !(function () {
                                                var t = n.callback,
                                                    e = n.args;
                                                switch (e.length) {
                                                    case 0:
                                                        t();
                                                        break;
                                                    case 1:
                                                        t(e[0]);
                                                        break;
                                                    case 2:
                                                        t(e[0], e[1]);
                                                        break;
                                                    case 3:
                                                        t(e[0], e[1], e[2]);
                                                        break;
                                                    default:
                                                        t.apply(i, e);
                                                }
                                            })();
                                        } finally {
                                            h(t), (e = !1);
                                        }
                                    }
                                }
                            }
                            function d(t) {
                                t.source === n && "string" == typeof t.data && 0 === t.data.indexOf(c) && f(+t.data.slice(c.length));
                            }
                            n.setImmediate ||
                                ((r = 1),
                                (e = !(o = {})),
                                (s = n.document),
                                (t = (t = Object.getPrototypeOf && Object.getPrototypeOf(n)) && t.setTimeout ? t : n),
                                (a =
                                    "[object process]" === {}.toString.call(n.process)
                                        ? function (t) {
                                              p.nextTick(function () {
                                                  f(t);
                                              });
                                          }
                                        : (function () {
                                              if (n.postMessage && !n.importScripts) {
                                                  var t = !0,
                                                      e = n.onmessage;
                                                  return (
                                                      (n.onmessage = function () {
                                                          t = !1;
                                                      }),
                                                      n.postMessage("", "*"),
                                                      (n.onmessage = e),
                                                      t
                                                  );
                                              }
                                          })()
                                        ? ((c = "setImmediate$" + Math.random() + "$"),
                                          n.addEventListener ? n.addEventListener("message", d, !1) : n.attachEvent("onmessage", d),
                                          function (t) {
                                              n.postMessage(c + t, "*");
                                          })
                                        : n.MessageChannel
                                        ? (((u = new MessageChannel()).port1.onmessage = function (t) {
                                              f(t.data);
                                          }),
                                          function (t) {
                                              u.port2.postMessage(t);
                                          })
                                        : s && "onreadystatechange" in s.createElement("script")
                                        ? ((l = s.documentElement),
                                          function (t) {
                                              var e = s.createElement("script");
                                              (e.onreadystatechange = function () {
                                                  f(t), (e.onreadystatechange = null), l.removeChild(e), (e = null);
                                              }),
                                                  l.appendChild(e);
                                          })
                                        : function (t) {
                                              setTimeout(f, 0, t);
                                          }),
                                (t.setImmediate = function (t) {
                                    "function" != typeof t && (t = new Function("" + t));
                                    for (var e = new Array(arguments.length - 1), n = 0; n < e.length; n++) e[n] = arguments[n + 1];
                                    return (t = { callback: t, args: e }), (o[r] = t), a(r), r++;
                                }),
                                (t.clearImmediate = h));
                        })("undefined" == typeof self ? (void 0 === t ? this : t) : self);
                    }.call(this, n(17), n(48)));
                },
                function (t, e) {
                    var n,
                        i,
                        t = (t.exports = {});
                    function r() {
                        throw new Error("setTimeout has not been defined");
                    }
                    function o() {
                        throw new Error("clearTimeout has not been defined");
                    }
                    function s(e) {
                        if (n === setTimeout) return setTimeout(e, 0);
                        if ((n === r || !n) && setTimeout) return (n = setTimeout), setTimeout(e, 0);
                        try {
                            return n(e, 0);
                        } catch (t) {
                            try {
                                return n.call(null, e, 0);
                            } catch (t) {
                                return n.call(this, e, 0);
                            }
                        }
                    }
                    !(function () {
                        try {
                            n = "function" == typeof setTimeout ? setTimeout : r;
                        } catch (t) {
                            n = r;
                        }
                        try {
                            i = "function" == typeof clearTimeout ? clearTimeout : o;
                        } catch (t) {
                            i = o;
                        }
                    })();
                    var a,
                        l = [],
                        u = !1,
                        c = -1;
                    function h() {
                        u && a && ((u = !1), a.length ? (l = a.concat(l)) : (c = -1), l.length && f());
                    }
                    function f() {
                        if (!u) {
                            var t = s(h);
                            u = !0;
                            for (var e = l.length; e; ) {
                                for (a = l, l = []; ++c < e; ) a && a[c].run();
                                (c = -1), (e = l.length);
                            }
                            (a = null),
                                (u = !1),
                                (function (e) {
                                    if (i === clearTimeout) return clearTimeout(e);
                                    if ((i === o || !i) && clearTimeout) return (i = clearTimeout), clearTimeout(e);
                                    try {
                                        i(e);
                                    } catch (t) {
                                        try {
                                            return i.call(null, e);
                                        } catch (t) {
                                            return i.call(this, e);
                                        }
                                    }
                                })(t);
                        }
                    }
                    function d(t, e) {
                        (this.fun = t), (this.array = e);
                    }
                    function p() {}
                    (t.nextTick = function (t) {
                        var e = new Array(arguments.length - 1);
                        if (1 < arguments.length) for (var n = 1; n < arguments.length; n++) e[n - 1] = arguments[n];
                        l.push(new d(t, e)), 1 !== l.length || u || s(f);
                    }),
                        (d.prototype.run = function () {
                            this.fun.apply(null, this.array);
                        }),
                        (t.title = "browser"),
                        (t.browser = !0),
                        (t.env = {}),
                        (t.argv = []),
                        (t.version = ""),
                        (t.versions = {}),
                        (t.on = p),
                        (t.addListener = p),
                        (t.once = p),
                        (t.off = p),
                        (t.removeListener = p),
                        (t.removeAllListeners = p),
                        (t.emit = p),
                        (t.prependListener = p),
                        (t.prependOnceListener = p),
                        (t.listeners = function (t) {
                            return [];
                        }),
                        (t.binding = function (t) {
                            throw new Error("process.binding is not supported");
                        }),
                        (t.cwd = function () {
                            return "/";
                        }),
                        (t.chdir = function (t) {
                            throw new Error("process.chdir is not supported");
                        }),
                        (t.umask = function () {
                            return 0;
                        });
                },
                function (t, e, n) {
                    /**
                     * Copyright (c) 2017, Leon Sorokin
                     * All rights reserved. (MIT Licensed)
                     *
                     * domvm.js (DOM ViewModel)
                     * A thin, fast, dependency-free vdom view layer
                     * @preserve https://github.com/leeoniya/domvm (v3.2.6, micro build)
                     */
                    t.exports = (function () {
                        "use strict";
                        var O = 1,
                            l = 2,
                            S = 3,
                            E = 4,
                            P = 5,
                            t = typeof window !== "undefined",
                            e,
                            o = (t ? window : {}).requestAnimationFrame,
                            u = {};
                        function n() {}
                        var p = Array.isArray;
                        function c(t) {
                            return t != null;
                        }
                        function s(t) {
                            return t != null && t.constructor === Object;
                        }
                        function r(t, e, n, i) {
                            t.splice.apply(t, [n, i].concat(e));
                        }
                        function a(t) {
                            var e = typeof t;
                            return e === "string" || e === "number";
                        }
                        function h(t) {
                            return typeof t === "function";
                        }
                        function f(t) {
                            return typeof t === "object" && h(t.then);
                        }
                        function d(t) {
                            var e = arguments;
                            for (var n = 1; n < e.length; n++) for (var i in e[n]) t[i] = e[n][i];
                            return t;
                        }
                        function g(t, e, n) {
                            var i;
                            while ((i = e.shift()))
                                if (e.length === 0) t[i] = n;
                                else t[i] = t = t[i] || {};
                        }
                        function v(t, e) {
                            var n = [];
                            for (var i = e; i < t.length; i++) n.push(t[i]);
                            return n;
                        }
                        function y(t, e) {
                            for (var n in t) if (t[n] !== e[n]) return false;
                            return true;
                        }
                        function _(t, e) {
                            var n = t.length;
                            if (e.length !== n) return false;
                            for (var i = 0; i < n; i++) if (t[i] !== e[i]) return false;
                            return true;
                        }
                        function m(t) {
                            if (!o) return t;
                            var e, n, i;
                            function r() {
                                e = 0;
                                t.apply(n, i);
                            }
                            return function () {
                                n = this;
                                i = arguments;
                                if (!e) e = o(r);
                            };
                        }
                        function x(t, e, n) {
                            return function () {
                                return t.apply(n, e);
                            };
                        }
                        function b(t) {
                            var e = t.slice();
                            var n = [];
                            n.push(0);
                            var i;
                            var r;
                            for (var o = 0, s = t.length; o < s; ++o) {
                                var a = n[n.length - 1];
                                if (t[a] < t[o]) {
                                    e[o] = a;
                                    n.push(o);
                                    continue;
                                }
                                i = 0;
                                r = n.length - 1;
                                while (i < r) {
                                    var l = ((i + r) / 2) | 0;
                                    if (t[n[l]] < t[o]) i = l + 1;
                                    else r = l;
                                }
                                if (t[o] < t[n[i]]) {
                                    if (i > 0) e[o] = n[i - 1];
                                    n[i] = o;
                                }
                            }
                            i = n.length;
                            r = n[i - 1];
                            while (i-- > 0) {
                                n[i] = r;
                                r = e[r];
                            }
                            return n;
                        }
                        function w(t, e) {
                            var n = 0;
                            var i = e.length - 1;
                            var r;
                            var o = i <= 2147483647 ? true : false;
                            if (o)
                                while (n <= i) {
                                    r = (n + i) >> 1;
                                    if (e[r] === t) return r;
                                    else if (e[r] < t) n = r + 1;
                                    else i = r - 1;
                                }
                            else
                                while (n <= i) {
                                    r = Math.floor((n + i) / 2);
                                    if (e[r] === t) return r;
                                    else if (e[r] < t) n = r + 1;
                                    else i = r - 1;
                                }
                            return n == e.length ? null : n;
                        }
                        function k(t) {
                            return t[0] === "o" && t[1] === "n";
                        }
                        function M(t) {
                            return t[0] === "_";
                        }
                        function C(t) {
                            return t === "style";
                        }
                        function D(t) {
                            t && t.el && t.el.offsetHeight;
                        }
                        function j(t) {
                            return t.node != null && t.node.el != null;
                        }
                        function I(t, e) {
                            switch (e) {
                                case "value":
                                case "checked":
                                case "selected":
                                    return true;
                            }
                            return false;
                        }
                        function T(t) {
                            t = t || u;
                            while (t.vm == null && t.parent) t = t.parent;
                            return t.vm;
                        }
                        function A() {}
                        var i = (A.prototype = {
                            constructor: A,
                            type: null,
                            vm: null,
                            key: null,
                            ref: null,
                            data: null,
                            hooks: null,
                            ns: null,
                            el: null,
                            tag: null,
                            attrs: null,
                            body: null,
                            flags: 0,
                            _class: null,
                            _diff: null,
                            _dead: false,
                            _lis: false,
                            idx: null,
                            parent: null,
                        });
                        function L(t) {
                            var e = new A();
                            e.type = l;
                            e.body = t;
                            return e;
                        }
                        var N = {},
                            R = /\[(\w+)(?:=(\w+))?\]/g;
                        function H(t) {
                            {
                                var e = N[t];
                                if (e == null) {
                                    var n, i, r, o;
                                    N[t] = e = { tag: (n = t.match(/^[-\w]+/)) ? n[0] : "div", id: (i = t.match(/#([-\w]+)/)) ? i[1] : null, class: (r = t.match(/\.([-\w.]+)/)) ? r[1].replace(/\./g, " ") : null, attrs: null };
                                    while ((o = R.exec(t))) {
                                        if (e.attrs == null) e.attrs = {};
                                        e.attrs[o[1]] = o[2] || "";
                                    }
                                }
                                return e;
                            }
                        }
                        var F = 1,
                            z = 2,
                            B = 4,
                            W = 8;
                        function V(t, e, n, i) {
                            var r = new A();
                            r.type = O;
                            if (c(i)) r.flags = i;
                            r.attrs = e;
                            var o = H(t);
                            r.tag = o.tag;
                            if (o.id || o.class || o.attrs) {
                                var s = r.attrs || {};
                                if (o.id && !c(s.id)) s.id = o.id;
                                if (o.class) {
                                    r._class = o.class;
                                    s.class = o.class + (c(s.class) ? " " + s.class : "");
                                }
                                if (o.attrs) for (var a in o.attrs) if (!c(s[a])) s[a] = o.attrs[a];
                                r.attrs = s;
                            }
                            var l = r.attrs;
                            if (c(l)) {
                                if (c(l._key)) r.key = l._key;
                                if (c(l._ref)) r.ref = l._ref;
                                if (c(l._hooks)) r.hooks = l._hooks;
                                if (c(l._data)) r.data = l._data;
                                if (c(l._flags)) r.flags = l._flags;
                                if (!c(r.key))
                                    if (c(r.ref)) r.key = r.ref;
                                    else if (c(l.id)) r.key = l.id;
                                    else if (c(l.name)) r.key = l.name + (l.type === "radio" || l.type === "checkbox" ? l.value : "");
                            }
                            if (n != null) r.body = n;
                            return r;
                        }
                        function G(t, e, n) {
                            var i = ["refs"].concat(e.split("."));
                            g(t, i, n);
                        }
                        function Z(t) {
                            while ((t = t.parent)) t.flags |= F;
                        }
                        function $(t, e, n, i) {
                            if (t.type === P || t.type === E) return;
                            t.parent = e;
                            t.idx = n;
                            t.vm = i;
                            if (t.ref != null) G(T(t), t.ref, t);
                            var r = t.hooks,
                                o = i && i.hooks;
                            if ((r && (r.willRemove || r.didRemove)) || (o && (o.willUnmount || o.didUnmount))) Z(t);
                            if (p(t.body)) Y(t);
                            else;
                        }
                        function Y(t) {
                            var e = t.body;
                            for (var n = 0; n < e.length; n++) {
                                var i = e[n];
                                if (i === false || i == null) e.splice(n--, 1);
                                else if (p(i)) r(e, i, n--, 1);
                                else {
                                    if (i.type == null) e[n] = i = L("" + i);
                                    if (i.type === l)
                                        if (i.body == null || i.body === "") e.splice(n--, 1);
                                        else if (n > 0 && e[n - 1].type === l) {
                                            e[n - 1].body += i.body;
                                            e.splice(n--, 1);
                                        } else $(i, t, n, null);
                                    else $(i, t, n, null);
                                }
                            }
                        }
                        var U = {
                            animationIterationCount: true,
                            boxFlex: true,
                            boxFlexGroup: true,
                            boxOrdinalGroup: true,
                            columnCount: true,
                            flex: true,
                            flexGrow: true,
                            flexPositive: true,
                            flexShrink: true,
                            flexNegative: true,
                            flexOrder: true,
                            gridRow: true,
                            gridColumn: true,
                            order: true,
                            lineClamp: true,
                            borderImageOutset: true,
                            borderImageSlice: true,
                            borderImageWidth: true,
                            fontWeight: true,
                            lineHeight: true,
                            opacity: true,
                            orphans: true,
                            tabSize: true,
                            widows: true,
                            zIndex: true,
                            zoom: true,
                            fillOpacity: true,
                            floodOpacity: true,
                            stopOpacity: true,
                            strokeDasharray: true,
                            strokeDashoffset: true,
                            strokeMiterlimit: true,
                            strokeOpacity: true,
                            strokeWidth: true,
                        };
                        function J(t, e) {
                            return !isNaN(e) && !U[t] ? e + "px" : e;
                        }
                        function X(t, e) {
                            var n = (t.attrs || u).style;
                            var i = e ? (e.attrs || u).style : null;
                            if (n == null || a(n)) t.el.style.cssText = n;
                            else {
                                for (var r in n) {
                                    var o = n[r];
                                    if (i == null || (o != null && o !== i[r])) t.el.style[r] = J(r, o);
                                }
                                if (i) for (var s in i) if (n[s] == null) t.el.style[s] = "";
                            }
                        }
                        var Q = [];
                        function q(t, e, n, i, r) {
                            if (t != null) {
                                var o = n.hooks[e];
                                if (o)
                                    if (e[0] === "d" && e[1] === "i" && e[2] === "d") r ? D(n.parent) && o(n, i) : Q.push([o, n, i]);
                                    else return o(n, i);
                            }
                        }
                        function K(t) {
                            if (Q.length) {
                                D(t.node);
                                var e;
                                while ((e = Q.shift())) e[0](e[1], e[2]);
                            }
                        }
                        var tt = t ? document : null;
                        function et(t) {
                            while (t._node == null) t = t.parentNode;
                            return t._node;
                        }
                        function nt(t, e) {
                            if (e != null) return tt.createElementNS(e, t);
                            return tt.createElement(t);
                        }
                        function it(t) {
                            return tt.createTextNode(t);
                        }
                        function rt(t) {
                            return tt.createComment(t);
                        }
                        function ot(t) {
                            return t.nextSibling;
                        }
                        function st(t) {
                            return t.previousSibling;
                        }
                        function at(t) {
                            var e = t.vm;
                            var n = e != null && q(e.hooks, "willUnmount", e, e.data);
                            var i = q(t.hooks, "willRemove", t);
                            if ((t.flags & F) === F && p(t.body)) for (var r = 0; r < t.body.length; r++) at(t.body[r]);
                            return n || i;
                        }
                        function lt(t, e, n) {
                            var i = e._node,
                                r = i.vm;
                            if (p(i.body))
                                if ((i.flags & F) === F) for (var o = 0; o < i.body.length; o++) lt(e, i.body[o].el);
                                else ct(i);
                            delete e._node;
                            t.removeChild(e);
                            q(i.hooks, "didRemove", i, null, n);
                            if (r != null) {
                                q(r.hooks, "didUnmount", r, r.data, n);
                                r.node = null;
                            }
                        }
                        function ut(t, e) {
                            var n = e._node;
                            if (n._dead) return;
                            var i = at(n);
                            if (i != null && f(i)) {
                                n._dead = true;
                                i.then(x(lt, [t, e, true]));
                            } else lt(t, e);
                        }
                        function ct(t) {
                            var e = t.body;
                            for (var n = 0; n < e.length; n++) {
                                var i = e[n];
                                delete i.el._node;
                                if (i.vm != null) i.vm.node = null;
                                if (p(i.body)) ct(i);
                            }
                        }
                        function ht(t) {
                            var e = t.el;
                            if ((t.flags & F) === 0) {
                                p(t.body) && ct(t);
                                e.textContent = null;
                            } else {
                                var n = e.firstChild;
                                do {
                                    var i = ot(n);
                                    ut(e, n);
                                } while ((n = i));
                            }
                        }
                        function ft(t, e, n) {
                            var i = e._node,
                                r = e.parentNode != null;
                            var o = e === n || !r ? i.vm : null;
                            if (o != null) q(o.hooks, "willMount", o, o.data);
                            q(i.hooks, r ? "willReinsert" : "willInsert", i);
                            t.insertBefore(e, n);
                            q(i.hooks, r ? "didReinsert" : "didInsert", i);
                            if (o != null) q(o.hooks, "didMount", o, o.data);
                        }
                        function dt(t, e, n) {
                            ft(t, e, n ? ot(n) : null);
                        }
                        var pt = {};
                        function gt(t) {
                            d(pt, t);
                        }
                        function vt(t) {
                            var e = this,
                                n = e,
                                i = v(arguments, 1).concat(n, n.data);
                            do {
                                var r = e.onemit,
                                    r = r ? r[t] : null;
                                if (r) {
                                    r.apply(e, i);
                                    break;
                                }
                            } while ((e = e.parent()));
                            if (pt[t]) pt[t].apply(e, i);
                        }
                        var yt = n;
                        function _t(t) {
                            yt = t.onevent || yt;
                            if (t.onemit) gt(t.onemit);
                        }
                        function mt(t, e, n) {
                            t[e] = n;
                        }
                        function xt(t, e, n, i, r) {
                            var o = t.apply(r, e.concat([n, i, r, r.data]));
                            r.onevent(n, i, r, r.data, e);
                            yt.call(null, n, i, r, r.data, e);
                            if (o === false) {
                                n.preventDefault();
                                n.stopPropagation();
                            }
                        }
                        function bt(t) {
                            var e = et(t.target);
                            var n = T(e);
                            var i = t.currentTarget._node.attrs["on" + t.type],
                                r,
                                o;
                            if (p(i)) {
                                r = i[0];
                                o = i.slice(1);
                                xt(r, o, t, e, n);
                            } else
                                for (var s in i)
                                    if (t.target.matches(s)) {
                                        var a = i[s];
                                        if (p(a)) {
                                            r = a[0];
                                            o = a.slice(1);
                                        } else {
                                            r = a;
                                            o = [];
                                        }
                                        xt(r, o, t, e, n);
                                    }
                        }
                        function wt(t, e, n, i) {
                            if (n === i) return;
                            var r = t.el;
                            if (n == null || h(n)) mt(r, e, n);
                            else if (i == null) mt(r, e, bt);
                        }
                        function kt(t, e, n) {
                            if (e[0] === ".") {
                                e = e.substr(1);
                                n = true;
                            }
                            if (n) t.el[e] = "";
                            else t.el.removeAttribute(e);
                        }
                        function Mt(t, e, n, i, r) {
                            var o = t.el;
                            if (n == null) !r && kt(t, e, false);
                            else if (t.ns != null) o.setAttribute(e, n);
                            else if (e === "class") o.className = n;
                            else if (e === "id" || typeof n === "boolean" || i) o[e] = n;
                            else if (e[0] === ".") o[e.substr(1)] = n;
                            else o.setAttribute(e, n);
                        }
                        function Ct(t, e, n) {
                            var i = t.attrs || u;
                            var r = e.attrs || u;
                            if (i === r);
                            else {
                                for (var o in i) {
                                    var s = i[o];
                                    var a = I(t.tag, o);
                                    var l = a ? t.el[o] : r[o];
                                    if (s === l);
                                    else if (C(o)) X(t, e);
                                    else if (M(o));
                                    else if (k(o)) wt(t, o, s, l);
                                    else Mt(t, o, s, a, n);
                                }
                                for (var o in r) !(o in i) && !M(o) && kt(t, o, I(t.tag, o) || k(o));
                            }
                        }
                        function Dt(t, e, n, i) {
                            if (t.type === E) {
                                e = t.data;
                                n = t.key;
                                i = t.opts;
                                t = t.view;
                            }
                            return new $t(t, e, n, i);
                        }
                        function Ot(t) {
                            for (var e = 0; e < t.body.length; e++) {
                                var n = t.body[e];
                                var i = n.type;
                                if (i <= S) ft(t.el, St(n));
                                else if (i === E) {
                                    var r = Dt(n.view, n.data, n.key, n.opts)._redraw(t, e, false);
                                    i = r.node.type;
                                    ft(t.el, St(r.node));
                                } else if (i === P) {
                                    var r = n.vm;
                                    r._redraw(t, e);
                                    i = r.node.type;
                                    ft(t.el, r.node.el);
                                }
                            }
                        }
                        function St(t, e) {
                            if (t.el == null)
                                if (t.type === O) {
                                    t.el = e || nt(t.tag, t.ns);
                                    if (t.attrs != null) Ct(t, u, true);
                                    if ((t.flags & W) === W) t.body.body(t);
                                    if (p(t.body)) Ot(t);
                                    else if (t.body != null && t.body !== "") t.el.textContent = t.body;
                                } else if (t.type === l) t.el = e || it(t.body);
                                else if (t.type === S) t.el = e || rt(t.body);
                            t.el._node = t;
                            return t.el;
                        }
                        function Et(t, e) {
                            return e[t.idx + 1];
                        }
                        function Pt(t, e) {
                            return e[t.idx - 1];
                        }
                        function jt(t) {
                            return t.parent;
                        }
                        window.lisMove = Lt;
                        var It = 1,
                            Tt = 2;
                        function At(l, u, c, h, f, d, p, g) {
                            return function (t, e, n, i, r, o) {
                                var s, a;
                                if (i[h] != null) {
                                    if ((s = i[h]._node) == null) {
                                        i[h] = l(i[h]);
                                        return;
                                    }
                                    if (jt(s) !== t) {
                                        a = l(i[h]);
                                        s.vm != null ? s.vm.unmount(true) : ut(e, i[h]);
                                        i[h] = a;
                                        return;
                                    }
                                }
                                if (i[f] == r) return Tt;
                                else if (i[f].el == null) {
                                    c(e, St(i[f]), i[h]);
                                    i[f] = u(i[f], n);
                                } else if (i[f].el === i[h]) {
                                    i[f] = u(i[f], n);
                                    i[h] = l(i[h]);
                                } else if (!o && s === i[p]) {
                                    a = i[h];
                                    i[h] = l(a);
                                    g(e, a, i[d]);
                                    i[d] = a;
                                } else {
                                    if (o && i[h] != null) return Lt(l, u, c, h, f, e, n, s, i);
                                    return It;
                                }
                            };
                        }
                        function Lt(t, e, n, i, r, o, s, a, l) {
                            if (a._lis) {
                                n(o, l[r].el, l[i]);
                                l[r] = e(l[r], s);
                            } else {
                                var u = w(a.idx, l.tombs);
                                a._lis = true;
                                var c = t(l[i]);
                                n(o, l[i], u != null ? s[l.tombs[u]].el : u);
                                if (u == null) l.tombs.push(a.idx);
                                else l.tombs.splice(u, 0, a.idx);
                                l[i] = c;
                            }
                        }
                        var Nt = At(ot, Et, ft, "lftSib", "lftNode", "rgtSib", "rgtNode", dt),
                            Rt = At(st, Pt, dt, "rgtSib", "rgtNode", "lftSib", "lftNode", ft);
                        function Ht(t, e) {
                            var n = e.body,
                                i = t.el,
                                r = t.body,
                                o = { lftNode: r[0], rgtNode: r[r.length - 1], lftSib: (n[0] || u).el, rgtSib: (n[n.length - 1] || u).el };
                            t: while (1) {
                                while (1) {
                                    var s = Nt(t, i, r, o, null, false);
                                    if (s === It) break;
                                    if (s === Tt) break t;
                                }
                                while (1) {
                                    var a = Rt(t, i, r, o, o.lftNode, false);
                                    if (a === It) break;
                                    if (a === Tt) break t;
                                }
                                Ft(t, i, r, o);
                                break;
                            }
                        }
                        function Ft(t, e, n, i) {
                            var r = Array.prototype.slice.call(e.childNodes);
                            var o = [];
                            for (var s = 0; s < r.length; s++) {
                                var a = r[s]._node;
                                if (a.parent === t) o.push(a.idx);
                            }
                            var l = b(o).map(function (t) {
                                return o[t];
                            });
                            for (var u = 0; u < l.length; u++) n[l[u]]._lis = true;
                            i.tombs = l;
                            while (1) {
                                var c = Nt(t, e, n, i, null, true);
                                if (c === Tt) break;
                            }
                        }
                        function zt(t) {
                            return t.el._node.parent !== t.parent;
                        }
                        function Bt(t, e, n) {
                            return e[n];
                        }
                        function Wt(t, e, n) {
                            for (; n < e.length; n++) {
                                var i = e[n];
                                if (i.vm != null) {
                                    if ((t.type === E && i.vm.view === t.view && i.vm.key === t.key) || (t.type === P && i.vm === t.vm)) return i;
                                } else if (!zt(i) && t.tag === i.tag && t.type === i.type && t.key === i.key && (t.flags & ~F) === (i.flags & ~F)) return i;
                            }
                            return null;
                        }
                        function Vt(t, e, n) {
                            return e[e._keys[t.key]];
                        }
                        function Gt(t, e) {
                            q(e.hooks, "willRecycle", e, t);
                            var n = (t.el = e.el);
                            var i = e.body;
                            var r = t.body;
                            n._node = t;
                            if (t.type === l && r !== i) {
                                n.nodeValue = r;
                                return;
                            }
                            if (t.attrs != null || e.attrs != null) Ct(t, e, false);
                            var o = p(i);
                            var s = p(r);
                            var a = (t.flags & W) === W;
                            if (o) {
                                if (s || a) Zt(t, e);
                                else if (r !== i)
                                    if (r != null) n.textContent = r;
                                    else ht(e);
                            } else if (s) {
                                ht(e);
                                Ot(t);
                            } else if (r !== i)
                                if (n.firstChild) n.firstChild.nodeValue = r;
                                else n.textContent = r;
                            q(e.hooks, "didRecycle", e, t);
                        }
                        function Zt(t, e) {
                            var n = t.body,
                                i = n.length,
                                r = e.body,
                                o = r.length,
                                s = (t.flags & W) === W,
                                a = (t.flags & z) === z,
                                l = (t.flags & B) === B,
                                u = !a && t.type === O,
                                c = true,
                                h = l ? Vt : a || s ? Bt : Wt;
                            if (l) {
                                var f = {};
                                for (var d = 0; d < r.length; d++) f[r[d].key] = d;
                                r._keys = f;
                            }
                            if (u && i === 0) {
                                ht(e);
                                if (s) t.body = [];
                                return;
                            }
                            var p,
                                g,
                                v,
                                y = 0,
                                _ = false,
                                m = 0;
                            if (s) {
                                var x = { key: null };
                                var b = Array(i);
                            }
                            for (var d = 0; d < i; d++) {
                                if (s) {
                                    var w = false;
                                    var k = null;
                                    if (c) {
                                        if (l) x.key = n.key(d);
                                        p = h(x, r, m);
                                    }
                                    if (p != null) {
                                        v = p.idx;
                                        k = n.diff(d, p);
                                        if (k === true) {
                                            g = p;
                                            g.parent = t;
                                            g.idx = d;
                                            g._lis = false;
                                        } else w = true;
                                    } else w = true;
                                    if (w) {
                                        g = n.tpl(d);
                                        $(g, t, d);
                                        g._diff = k != null ? k : n.diff(d);
                                        if (p != null) Gt(g, p);
                                    } else;
                                    b[d] = g;
                                } else {
                                    var g = n[d];
                                    var M = g.type;
                                    if (M <= S) {
                                        if ((p = c && h(g, r, m))) {
                                            Gt(g, p);
                                            v = p.idx;
                                        }
                                    } else if (M === E) {
                                        if ((p = c && h(g, r, m))) {
                                            v = p.idx;
                                            var C = p.vm._update(g.data, t, d);
                                        } else var C = Dt(g.view, g.data, g.key, g.opts)._redraw(t, d, false);
                                        M = C.node.type;
                                    } else if (M === P) {
                                        var D = j(g.vm);
                                        var C = g.vm._update(g.data, t, d, D);
                                        M = C.node.type;
                                    }
                                }
                                if (!l && p != null) {
                                    if (v === m) {
                                        m++;
                                        if (m === o && i > o) {
                                            p = null;
                                            c = false;
                                        }
                                    } else _ = true;
                                    if (o > 100 && _ && ++y % 10 === 0) while (m < o && zt(r[m])) m++;
                                }
                            }
                            if (s) t.body = b;
                            u && Ht(t, e);
                        }
                        function $t(t, e, n, i) {
                            var r = this;
                            r.view = t;
                            r.data = e;
                            r.key = n;
                            if (i) {
                                r.opts = i;
                                r.config(i);
                            }
                            var o = s(t) ? t : t.call(r, r, e, n, i);
                            if (h(o)) r.render = o;
                            else {
                                r.render = o.render;
                                r.config(o);
                            }
                            r._redrawAsync = m(function (t) {
                                return r.redraw(true);
                            });
                            r._updateAsync = m(function (t) {
                                return r.update(t, true);
                            });
                            r.init && r.init.call(r, r, r.data, r.key, i);
                        }
                        var Yt = ($t.prototype = {
                            constructor: $t,
                            _diff: null,
                            init: null,
                            view: null,
                            key: null,
                            data: null,
                            state: null,
                            api: null,
                            opts: null,
                            node: null,
                            hooks: null,
                            onevent: n,
                            refs: null,
                            render: null,
                            mount: Ut,
                            unmount: Jt,
                            config: function (t) {
                                var e = this;
                                if (t.init) e.init = t.init;
                                if (t.diff) e.diff = t.diff;
                                if (t.onevent) e.onevent = t.onevent;
                                if (t.hooks) e.hooks = d(e.hooks || {}, t.hooks);
                                if (t.onemit) e.onemit = d(e.onemit || {}, t.onemit);
                            },
                            parent: function () {
                                return T(this.node.parent);
                            },
                            root: function () {
                                var t = this.node;
                                while (t.parent) t = t.parent;
                                return t.vm;
                            },
                            redraw: function (t) {
                                var e = this;
                                t ? e._redraw(null, null, j(e)) : e._redrawAsync();
                                return e;
                            },
                            update: function (t, e) {
                                var n = this;
                                e ? n._update(t, null, null, j(n)) : n._updateAsync(t);
                                return n;
                            },
                            _update: qt,
                            _redraw: Qt,
                            _redrawAsync: null,
                            _updateAsync: null,
                        });
                        function Ut(t, e) {
                            var n = this;
                            if (e) {
                                ht({ el: t, flags: 0 });
                                n._redraw(null, null, false);
                                if (t.nodeName.toLowerCase() !== n.node.tag) {
                                    St(n.node);
                                    ft(t.parentNode, n.node.el, t);
                                    t.parentNode.removeChild(t);
                                } else ft(t.parentNode, St(n.node, t), t);
                            } else {
                                n._redraw(null, null);
                                if (t) ft(t, n.node.el);
                            }
                            if (t) K(n);
                            return n;
                        }
                        function Jt(t) {
                            var e = this;
                            var n = e.node;
                            var i = n.el.parentNode;
                            ut(i, n.el);
                            if (!t) K(e);
                        }
                        function Xt(t, e, n, i) {
                            if (n != null) {
                                n.body[i] = e;
                                e.idx = i;
                                e.parent = n;
                                e._lis = false;
                            }
                            return t;
                        }
                        function Qt(t, e, n) {
                            var i = t == null;
                            var r = this;
                            var o = r.node && r.node.el && r.node.el.parentNode;
                            var s = r.node,
                                a,
                                l;
                            if (r.diff != null) {
                                a = r._diff;
                                r._diff = l = r.diff(r, r.data);
                                if (s != null) {
                                    var u = p(a) ? _ : y;
                                    var c = a === l || u(a, l);
                                    if (c) return Xt(r, s, t, e);
                                }
                            }
                            o && q(r.hooks, "willRedraw", r, r.data);
                            var h = r.render.call(r, r, r.data, a, l);
                            if (h === s) return Xt(r, s, t, e);
                            r.refs = null;
                            if (r.key != null && h.key !== r.key) h.key = r.key;
                            r.node = h;
                            if (t) {
                                $(h, t, e, r);
                                t.body[e] = h;
                            } else if (s && s.parent) {
                                $(h, s.parent, s.idx, r);
                                s.parent.body[s.idx] = h;
                            } else $(h, null, null, r);
                            if (n !== false)
                                if (s)
                                    if (s.tag !== h.tag || s.key !== h.key) {
                                        s.vm = h.vm = null;
                                        var f = s.el.parentNode;
                                        var d = ot(s.el);
                                        ut(f, s.el);
                                        ft(f, St(h), d);
                                        s.el = h.el;
                                        h.vm = r;
                                    } else Gt(h, s);
                                else St(h);
                            o && q(r.hooks, "didRedraw", r, r.data);
                            if (i && o) K(r);
                            return r;
                        }
                        function qt(t, e, n, i) {
                            var r = this;
                            if (t != null)
                                if (r.data !== t) {
                                    q(r.hooks, "willUpdate", r, t);
                                    r.data = t;
                                }
                            return r._redraw(e, n, i);
                        }
                        function Kt(t, e, n, i) {
                            var r, o;
                            if (n == null)
                                if (s(e)) r = e;
                                else o = e;
                            else {
                                r = e;
                                o = n;
                            }
                            return V(t, r, o, i);
                        }
                        var te = "http://www.w3.org/2000/svg";
                        function ee(t, e, n, i) {
                            var r = Kt(t, e, n, i);
                            r.ns = te;
                            return r;
                        }
                        function ne(t) {
                            var e = new A();
                            e.type = S;
                            e.body = t;
                            return e;
                        }
                        function ie(t, e, n, i) {
                            this.view = t;
                            this.data = e;
                            this.key = n;
                            this.opts = i;
                        }
                        function re(t, e, n, i) {
                            return new ie(t, e, n, i);
                        }
                        function oe(t) {
                            this.vm = t;
                        }
                        function se(t) {
                            return new oe(t);
                        }
                        function ae(t) {
                            var e = new A();
                            e.type = O;
                            e.el = e.key = t;
                            return e;
                        }
                        function le(o, s) {
                            var r = o.length;
                            var a = {
                                items: o,
                                length: r,
                                key: function (t) {
                                    return s.key(o[t], t);
                                },
                                diff: function (t, e) {
                                    var n = s.diff(o[t], t);
                                    if (e == null) return n;
                                    var i = e._diff;
                                    var r = n === i || p(i) ? _(n, i) : y(n, i);
                                    return r || n;
                                },
                                tpl: function (t) {
                                    return s.tpl(o[t], t);
                                },
                                map: function (t) {
                                    s.tpl = t;
                                    return a;
                                },
                                body: function (t) {
                                    var e = Array(r);
                                    for (var n = 0; n < r; n++) {
                                        var i = a.tpl(n);
                                        i._diff = a.diff(n);
                                        e[n] = i;
                                        $(i, t, n);
                                    }
                                    t.body = e;
                                },
                            };
                            return a;
                        }
                        (ie.prototype = { constructor: ie, type: E, view: null, data: null, key: null, opts: null }), (oe.prototype = { constructor: oe, type: P, vm: null });
                        var ue = {
                            config: _t,
                            ViewModel: $t,
                            VNode: A,
                            createView: Dt,
                            defineElement: Kt,
                            defineSvgElement: ee,
                            defineText: L,
                            defineComment: ne,
                            defineView: re,
                            injectView: se,
                            injectElement: ae,
                            lazyList: le,
                            FIXED_BODY: z,
                            DEEP_REMOVE: F,
                            KEYED_LIST: B,
                            LAZY_LIST: W,
                        };
                        function ce(t, e) {
                            !(function (t, e, n) {
                                {
                                    var i, r;
                                    null != e.type
                                        ? null == t.vm && ($(e, t.parent, t.idx, null), Gt((t.parent.body[t.idx] = e), t), n && D(e), K(T(e)))
                                        : (((i = Object.create(t)).attrs = d({}, t.attrs)), (r = d(t.attrs, e)), null != t._class && ((e = r.class), (r.class = null != e && "" !== e ? t._class + " " + e : t._class)), Ct(t, i), n && D(t));
                                }
                            })(this, t, e);
                        }
                        function he(t, e, n) {
                            if (null != e.type) null == t.vm && ($(e, t.parent, t.idx, null), Gt((t.parent.body[t.idx] = e), t), n && D(e), K(T(e)));
                            else {
                                var i = Object.create(t);
                                (i = Object.create(t)).attrs = d({}, t.attrs);
                                var r = d(t.attrs, e),
                                    e;
                                null != t._class && ((e = r.class), (r.class = null != e && "" !== e ? t._class + " " + e : t._class)), Ct(t, i), n && D(t);
                            }
                        }
                        function fe(t, e) {
                            var n = t.body;
                            if (p(n))
                                for (var i = 0; i < n.length; i++) {
                                    var r = n[i];
                                    if (r.vm != null) e.push(r.vm);
                                    else fe(r, e);
                                }
                            return e;
                        }
                        function de(t) {
                            var e = arguments;
                            var n = e.length;
                            var i, r;
                            if (n > 1) {
                                var o = 1;
                                if (s(e[1])) {
                                    r = e[1];
                                    o = 2;
                                }
                                if (n === o + 1 && (a(e[o]) || p(e[o]) || (r && (r._flags & W) === W))) i = e[o];
                                else i = v(e, o);
                            }
                            return V(t, r, i);
                        }
                        function pe() {
                            var t = de.apply(null, arguments);
                            return (t.ns = te), t;
                        }
                        return (
                            (i.patch = function (t, e) {
                                !(function (t, e, n) {
                                    var i, r;
                                    null != e.type
                                        ? null == t.vm && ($(e, t.parent, t.idx, null), Gt((t.parent.body[t.idx] = e), t), n && D(e), K(T(e)))
                                        : (((i = Object.create(t)).attrs = d({}, t.attrs)), (r = d(t.attrs, e)), null != t._class && ((e = r.class), (r.class = null != e && "" !== e ? t._class + " " + e : t._class)), Ct(t, i), n && D(t));
                                })(this, t, e);
                            }),
                            (Yt.emit = function (t) {
                                var e = this,
                                    n = e,
                                    i = v(arguments, 1).concat(n, n.data);
                                do {
                                    var r = e.onemit,
                                        r = r ? r[t] : null;
                                    if (r) {
                                        r.apply(e, i);
                                        break;
                                    }
                                } while ((e = e.parent()));
                                pt[t] && pt[t].apply(e, i);
                            }),
                            (Yt.onemit = null),
                            (Yt.body = function () {
                                return (function t(e, n) {
                                    var i = e.body;
                                    if (p(i))
                                        for (var r = 0; r < i.length; r++) {
                                            var o = i[r];
                                            null != o.vm ? n.push(o.vm) : t(o, n);
                                        }
                                    return n;
                                })(this.node, []);
                            }),
                            (ue.defineElementSpread = de),
                            (ue.defineSvgElementSpread = function () {
                                var t = de.apply(null, arguments);
                                return (t.ns = te), t;
                            }),
                            ue
                        );
                    })();
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o = n(2),
                        n =
                            ((i.prototype.pdf = function (t) {
                                this._rawExport(t, "pdf", this._view);
                            }),
                            (i.prototype.png = function (t) {
                                this._rawExport(t, "png", this._view);
                            }),
                            (i.prototype._rawExport = function (t, e, n) {
                                var i = this;
                                ((t = t || {}).url = t.url || "https://export.dhtmlx.ru/" + this._name + "/" + e), (t.url += "/" + this._version);
                                var n = ("\n\t\t\t\t" + o.getPageLinksCss() + "\n\t\t\t\t<style>" + o.getPageInlineCss() + "</style>\n\t\t\t\t" + n.getRootView().node.el.parentNode.innerHTML + "\n\t\t\t").replace(
                                        /(src|href)=("(.+?\.(jpeg|jpg|png|apng|gif|svg|bmp|ico))")/gm,
                                        function (t) {
                                            if (t.includes("://")) return t;
                                            var e = t.replace(/(src|href)="/, "").replace('"', "");
                                            return /(src|href)="/.exec(t)[0] + i._normalizeLink(e) + '"';
                                        }
                                    ),
                                    r = document.createElement("form");
                                r.setAttribute("method", "POST"),
                                    r.setAttribute("action", t.url),
                                    (r.innerHTML = '<input type="hidden" name="raw"><input type="hidden" name="config">'),
                                    (r.childNodes[0].value = n),
                                    (r.childNodes[1].value = JSON.stringify(t)),
                                    document.body.appendChild(r),
                                    r.submit(),
                                    setTimeout(function () {
                                        r.parentNode.removeChild(r);
                                    }, 100);
                            }),
                            (i.prototype._normalizeLink = function (t) {
                                var e = window.location.pathname.split("/");
                                return "" === e[0] && (e.shift(), e.pop()), window.location.origin + "/" + e.join("/") + ("/" !== t[0] ? "/" + t : t);
                            }),
                            i);
                    function i(t, e, n) {
                        (this._name = t), (this._version = e), (this._view = n);
                    }
                    e.Exporter = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var p = n(24),
                        g = ["#FF9800", "#607D8B", "#00C7B5", "#03A9F4", "#9575CD", "#F06292"];
                    e.placeOrgonogram = function (t, e) {
                        var n = t.getRoots();
                        1 === n.length &&
                            ((n = t.getItem(n[0])),
                            (function t(e, n, i, r, o) {
                                var s = n.$kids;
                                var a = "vertical" === n.dir;
                                var l = a ? i.margin.itemX / 2 : 0;
                                var u = 0;
                                if (!1 !== n.open && s) {
                                    for (var c = 0, h = 0; h < s.length; h++) {
                                        var f = e.getItem(s[h][1]);
                                        f.hidden || ((f = t(e, f, i, r + l, l)), a ? (u = Math.max(u, f)) : (u += f), c++);
                                    }
                                    c && !a && (u += (c - 1) * i.margin.itemX), (n.$count = c);
                                }
                                u = Math.max(n.width, u);
                                {
                                    var d, p;
                                    a ? (n.x = r) : ((d = i.gridStep || 1), (p = (u - n.width) / 2 + r), (n.x = Math.ceil(p / d) * d));
                                }
                                n.y = 0;
                                n.$width = u;
                                return u + o;
                            })(t, n, e, 0, 0),
                            (function t(e, n, i, r, o, s) {
                                var a = n.$kids;
                                var l = "vertical" === n.dir;
                                var u = 0;
                                n.x += i;
                                n.y += r;
                                o.gridStep && (n.y = Math.ceil(n.y / o.gridStep) * o.gridStep);
                                r += n.height + o.margin.itemY;
                                if (!1 !== n.open && a)
                                    for (var c, h = void 0, f = 0; f < a.length; f++)
                                        (h = e.getItem(a[f][1])).hidden ||
                                            ((c = t(e, h, i, r, o, s + 1)),
                                            l ? ((r += c + o.margin.itemY), (u += c + o.margin.itemY)) : ((u = Math.max(u, c + o.margin.itemY)), (i += h.$width + o.margin.itemX)),
                                            p.directLinkPath(e.getItem(a[f][0]), n, h, o));
                                {
                                    var d;
                                    a && ((d = e.getItem(a[0][1]).headerColor), (n.$expandColor = d || g[(s + 1) % g.length]));
                                }
                                n.headerColor = n.headerColor || g[s % g.length];
                                return n.height + u;
                            })(t, n, 0, 0, e, 0));
                    };
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var r = n(7),
                        o = n(12),
                        n =
                            ((i.prototype.getId = function () {
                                return this._selected;
                            }),
                            (i.prototype.getItem = function () {
                                return this._selected ? this._data.getItem(this._selected) : null;
                            }),
                            (i.prototype.remove = function (t) {
                                return (
                                    !(t = t || this._selected) ||
                                    (!!this.events.fire(o.SelectionEvents.beforeUnSelect, [t]) && (this._data.update(t, { $selected: !1 }, !0), (this._selected = null), this.events.fire(o.SelectionEvents.afterUnSelect, [t]), !0))
                                );
                            }),
                            (i.prototype.add = function (t) {
                                this._selected !== t &&
                                    (this.remove(), this.events.fire(o.SelectionEvents.beforeSelect, [t]) && ((this._selected = t), this._data.update(t, { $selected: !0 }, !0), this.events.fire(o.SelectionEvents.afterSelect, [t])));
                            }),
                            i);
                    function i(t, e, n) {
                        var i = this;
                        (this.events = n || new r.EventSystem()),
                            (this._data = e),
                            this._data.events.on(o.DataEvents.removeAll, function () {
                                i._selected = null;
                            }),
                            this._data.events.on(o.DataEvents.change, function () {
                                var t, e;
                                !i._selected || ((t = i._data.getNearId(i._selected)) !== i._selected && ((e = i._data.getItem(i._selected)) && (e.$selected = !1), (i._selected = null), t && i.add(t)));
                            });
                    }
                    e.Selection = n;
                },
                function (t, n, i) {
                    "use strict";
                    (function (s) {
                        var l =
                            (this && this.__assign) ||
                            function () {
                                return (l =
                                    Object.assign ||
                                    function (t) {
                                        for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                        return t;
                                    }).apply(this, arguments);
                            };
                        Object.defineProperty(n, "__esModule", { value: !0 });
                        var u = i(5),
                            c = i(4),
                            t =
                                ((e.prototype.load = function (t, e) {
                                    var n = this;
                                    if (!t.config || this._parent.events.fire(c.DataEvents.beforeLazyLoad, []))
                                        return (this._parent.loadData = t
                                            .load()
                                            .then(function (t) {
                                                return t ? n.parse(t, e) : [];
                                            })
                                            .catch(function (t) {
                                                n._parent.events.fire(c.DataEvents.loadError, [t]);
                                            }));
                                }),
                                (e.prototype.parse = function (t, e) {
                                    var i = this;
                                    if (
                                        (void 0 === e && (e = "json"),
                                        "json" !== e || u.hasJsonOrArrayStructure(t) || this._parent.events.fire(c.DataEvents.loadError, ["Uncaught SyntaxError: Unexpected end of input"]),
                                        !((t = (e = u.toDataDriver(e)).toJsonArray(t)) instanceof Array))
                                    ) {
                                        var n = t.total_count - 1,
                                            r = t.from;
                                        if (((t = t.data), 0 !== this._parent.getLength()))
                                            return (
                                                t.forEach(function (t, e) {
                                                    var n = r + e,
                                                        e = i._parent.getId(n);
                                                    e ? (n = i._parent.getItem(e)) && n.$empty && (i._parent.changeId(e, t.id, !0), i._parent.update(t.id, l(l({}, t), { $empty: void 0 }), !0)) : u.dhxWarning("item not found");
                                                }),
                                                this._parent.events.fire(c.DataEvents.afterLazyLoad, [r, t.length]),
                                                this._parent.events.fire(c.DataEvents.change),
                                                t
                                            );
                                        for (var o = [], s = 0, a = 0; s <= n; s++) r <= s && s <= r + t.length - 1 ? (o.push(t[a]), a++) : o.push({ $empty: !0 });
                                        t = o;
                                    }
                                    return this._parent.getInitialData() && this._parent.removeAll(), this._parent.$parse(t), t;
                                }),
                                (e.prototype.save = function (r) {
                                    for (var o = this, e = this, t = 0, n = this._changes.order; t < n.length; t++)
                                        !(function (n) {
                                            var i, t;
                                            n.saving || n.pending
                                                ? u.dhxWarning("item is saving")
                                                : (i = e._findPrevState(n.id)) && i.saving
                                                ? ((t = new s(function (t, e) {
                                                      i.promise
                                                          .then(function () {
                                                              (n.pending = !1), t(o._setPromise(n, r));
                                                          })
                                                          .catch(function (t) {
                                                              o._removeFromOrder(i), o._setPromise(n, r), u.dhxWarning(t), e(t);
                                                          });
                                                  })),
                                                  e._addToChain(t),
                                                  (n.pending = !0))
                                                : e._setPromise(n, r);
                                        })(n[t]);
                                    this._parent.saveData.then(function () {
                                        o._saving = !1;
                                    });
                                }),
                                (e.prototype._setPromise = function (e, t) {
                                    var n = this;
                                    return (
                                        (e.promise = t.save(e.obj, e.status)),
                                        e.promise
                                            .then(function () {
                                                n._removeFromOrder(e);
                                            })
                                            .catch(function (t) {
                                                (e.saving = !1), (e.error = !0), u.dhxError(t);
                                            }),
                                        (e.saving = !0),
                                        (this._saving = !0),
                                        this._addToChain(e.promise),
                                        e.promise
                                    );
                                }),
                                (e.prototype._addToChain = function (t) {
                                    this._parent.saveData && this._saving
                                        ? (this._parent.saveData = this._parent.saveData.then(function () {
                                              return t;
                                          }))
                                        : (this._parent.saveData = t);
                                }),
                                (e.prototype._findPrevState = function (t) {
                                    for (var e = 0, n = this._changes.order; e < n.length; e++) {
                                        var i = n[e];
                                        if (i.id === t) return i;
                                    }
                                    return null;
                                }),
                                (e.prototype._removeFromOrder = function (e) {
                                    this._changes.order = this._changes.order.filter(function (t) {
                                        return !u.isEqualObj(t, e);
                                    });
                                }),
                                e);
                        function e(t, e) {
                            (this._parent = t), (this._changes = e);
                        }
                        n.Loader = t;
                    }.call(this, i(8)));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(55);
                    (r.prototype.toJsonArray = function (t) {
                        return this.getRows(t);
                    }),
                        (r.prototype.toJsonObject = function (t) {
                            var e;
                            return (
                                "string" == typeof t && (e = this._fromString(t)),
                                (function t(e, n) {
                                    n = n || {};
                                    var i = e.attributes;
                                    if (i && i.length) for (var r = 0; r < i.length; r++) n[i[r].name] = i[r].value;
                                    for (var o, s = e.childNodes, r = 0; r < s.length; r++) 1 === s[r].nodeType && (n[(o = s[r].tagName)] ? ("function" != typeof n[o].push && (n[o] = [n[o]]), n[o].push(t(s[r], {}))) : (n[o] = t(s[r], {})));
                                    return n;
                                })(e)
                            );
                        }),
                        (r.prototype.serialize = function (t) {
                            return i.jsonToXML(t);
                        }),
                        (r.prototype.getFields = function (t) {
                            return t;
                        }),
                        (r.prototype.getRows = function (t) {
                            if (("string" == typeof t && (t = this._fromString(t)), t)) {
                                t = t.childNodes && t.childNodes[0] && t.childNodes[0].childNodes;
                                return t && t.length ? this._getRows(t) : null;
                            }
                            return [];
                        }),
                        (r.prototype._getRows = function (t) {
                            for (var e = [], n = 0; n < t.length; n++) "item" === t[n].tagName && e.push(this._nodeToJS(t[n]));
                            return e;
                        }),
                        (r.prototype._fromString = function (t) {
                            try {
                                return new DOMParser().parseFromString(t, "text/xml");
                            } catch (t) {
                                return null;
                            }
                        }),
                        (r.prototype._nodeToJS = function (t) {
                            var e = {};
                            if (this._haveAttrs(t))
                                for (var n = t.attributes, i = 0; i < n.length; i++) {
                                    var r = n[i],
                                        o = r.name,
                                        r = r.value;
                                    e[o] = this._toType(r);
                                }
                            if (3 === t.nodeType) return (e.value = e.value || this._toType(t.textContent)), e;
                            var s = t.childNodes;
                            if (s)
                                for (i = 0; i < s.length; i++) {
                                    var a = s[i],
                                        l = a.tagName;
                                    l && ("items" === l && a.childNodes ? (e[l] = this._getRows(a.childNodes)) : this._haveAttrs(a) ? (e[l] = this._nodeToJS(a)) : (e[l] = this._toType(a.textContent)));
                                }
                            return e;
                        }),
                        (r.prototype._toType = function (t) {
                            return "false" === t || "true" === t ? "true" === t : isNaN(t) ? t : Number(t);
                        }),
                        (r.prototype._haveAttrs = function (t) {
                            return t.attributes && t.attributes.length;
                        }),
                        (n = r);
                    function r() {}
                    e.XMLDriver = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o = 4;
                    function s(t) {
                        return " ".repeat(t);
                    }
                    e.jsonToXML = function (t, e) {
                        void 0 === e && (e = "root");
                        for (var n = '<?xml version="1.0" encoding="iso-8859-1"?>\n<' + e + ">", i = 0; i < t.length; i++)
                            n +=
                                "\n" +
                                (function e(t, n) {
                                    void 0 === n && (n = o);
                                    var i,
                                        r = s(n) + "<item>\n";
                                    for (i in t)
                                        Array.isArray(t[i])
                                            ? ((r += s(n + o) + "<" + i + ">\n"),
                                              (r +=
                                                  t[i]
                                                      .map(function (t) {
                                                          return e(t, n + 2 * o);
                                                      })
                                                      .join("\n") + "\n"),
                                              (r += s(n + o) + "</" + i + ">\n"))
                                            : (r += s(n + o) + ("<" + i + ">" + t[i]) + "</" + i + ">\n");
                                    return (r += s(n) + "</item>");
                                })(t[i]);
                        return n + "\n</" + e + ">";
                    };
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var r = n(5),
                        n =
                            ((i.prototype.sort = function (t, n) {
                                var i = this;
                                n.rule && "function" == typeof n.rule
                                    ? this._sort(t, n)
                                    : n.by &&
                                      ((n.rule = function (t, e) {
                                          (t = i._checkVal(n.as, t[n.by])), (e = i._checkVal(n.as, e[n.by]));
                                          return r.naturalCompare(t.toString(), e.toString());
                                      }),
                                      this._sort(t, n));
                            }),
                            (i.prototype._checkVal = function (t, e) {
                                return t ? t.call(this, e) : e;
                            }),
                            (i.prototype._sort = function (t, n) {
                                var i = this,
                                    r = { asc: 1, desc: -1 };
                                return t.sort(function (t, e) {
                                    return n.rule.call(i, t, e) * (r[n.dir] || r.asc);
                                });
                            }),
                            i);
                    function i() {}
                    e.Sort = n;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            }),
                        o =
                            (this && this.__spreadArrays) ||
                            function () {
                                for (var t = 0, e = 0, n = arguments.length; e < n; e++) t += arguments[e].length;
                                for (var i = Array(t), r = 0, e = 0; e < n; e++) for (var o = arguments[e], s = 0, a = o.length; s < a; s++, r++) i[r] = o[s];
                                return i;
                            };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var c = n(1),
                        s = n(26),
                        a = n(10),
                        h = n(5),
                        d = n(4);
                    function l(t, e, n, i) {
                        void 0 !== i && -1 !== i && t[n] && t[n][i] ? t[n].splice(i, 0, e) : (t[n] || (t[n] = []), t[n].push(e));
                    }
                    var u,
                        r =
                            ((u = s.DataCollection),
                            r(f, u),
                            (f.prototype.add = function (t, n, i) {
                                var r = this;
                                return (
                                    void 0 === n && (n = -1),
                                    void 0 === i && (i = this._root),
                                    "object" != typeof t && (t = { value: t }),
                                    Array.isArray(t)
                                        ? t.map(function (t, e) {
                                              return r._add(t, n, i, e);
                                          })
                                        : this._add(t, n, i)
                                );
                            }),
                            (f.prototype.getRoot = function () {
                                return this._root;
                            }),
                            (f.prototype.getParent = function (t, e) {
                                if ((void 0 === e && (e = !1), !this._pull[t])) return null;
                                t = this._pull[t].parent;
                                return e ? this._pull[t] : t;
                            }),
                            (f.prototype.getItems = function (t) {
                                return this._childs && this._childs[t] ? this._childs[t] : [];
                            }),
                            (f.prototype.getLength = function (t) {
                                return void 0 === t && (t = this._root), this._childs[t] ? this._childs[t].length : null;
                            }),
                            (f.prototype.removeAll = function (t) {
                                if (t) {
                                    if (this._childs[t])
                                        for (var e = 0, n = o(this._childs[t]); e < n.length; e++) {
                                            var i = n[e];
                                            this.remove(i.id);
                                        }
                                } else {
                                    u.prototype.removeAll.call(this);
                                    var r = this._root;
                                    (this._initChilds = null), (this._childs = (((t = {})[r] = []), t));
                                }
                            }),
                            (f.prototype.getIndex = function (e) {
                                var t = this.getParent(e);
                                return t && this._childs[t]
                                    ? c.findIndex(this._childs[t], function (t) {
                                          return t.id === e;
                                      })
                                    : -1;
                            }),
                            (f.prototype.sort = function (t) {
                                var e = this;
                                if (t) {
                                    for (var n in this._childs) this._sort.sort(this._childs[n], t);
                                    if (this._initChilds && Object.keys(this._initChilds).length) for (var n in this._initChilds) this._sort.sort(this._initChilds[n], t);
                                } else if (
                                    ((this._childs = {}),
                                    this._parse_data(
                                        Object.keys(this._pull).map(function (t) {
                                            return e._pull[t];
                                        })
                                    ),
                                    this._filters)
                                )
                                    for (var n in this._filters) {
                                        var i = this._filters[n];
                                        this.filter(i.rule, i.config);
                                    }
                                this.events.fire(d.DataEvents.change);
                            }),
                            (f.prototype.filter = function (t, e) {
                                var i,
                                    r = this;
                                void 0 === e && (e = {}),
                                    t
                                        ? (this._initChilds || (this._initChilds = this._childs),
                                          (e.type = e.type || d.TreeFilterType.all),
                                          (this._filters = {}),
                                          (this._filters._ = { rule: t, config: e }),
                                          (i = {}),
                                          this._recursiveFilter(t, e, this._root, 0, i),
                                          Object.keys(i).forEach(function (t) {
                                              for (var e = r.getParent(t), n = r.getItem(t); e; )
                                                  i[e] || (i[e] = []),
                                                      n &&
                                                          !i[e].find(function (t) {
                                                              return t.id === n.id;
                                                          }) &&
                                                          i[e].push(n),
                                                      (n = r.getItem(e)),
                                                      (e = r.getParent(e));
                                          }),
                                          (this._childs = i),
                                          this.events.fire(d.DataEvents.change))
                                        : this.restoreOrder();
                            }),
                            (f.prototype.restoreOrder = function () {
                                this._initChilds && ((this._childs = this._initChilds), (this._initChilds = null)), this.events.fire(d.DataEvents.change);
                            }),
                            (f.prototype.copy = function (t, n, i, r) {
                                var o = this;
                                return (
                                    void 0 === i && (i = this),
                                    void 0 === r && (r = this._root),
                                    t instanceof Array
                                        ? t.map(function (t, e) {
                                              return o._copy(t, n, i, r, e);
                                          })
                                        : this._copy(t, n, i, r)
                                );
                            }),
                            (f.prototype.move = function (t, n, i, r) {
                                var o = this;
                                return (
                                    void 0 === i && (i = this),
                                    void 0 === r && (r = this._root),
                                    t instanceof Array
                                        ? t.map(function (t, e) {
                                              return o._move(t, n, i, r, e);
                                          })
                                        : this._move(t, n, i, r)
                                );
                            }),
                            (f.prototype.forEach = function (t, e, n) {
                                if ((void 0 === e && (e = this._root), void 0 === n && (n = 1 / 0), this.haveItems(e) && !(n < 1)))
                                    for (var i = this._childs[e], r = 0; r < i.length; r++) t.call(this, i[r], r, i), this.haveItems(i[r].id) && this.forEach(t, i[r].id, --n);
                            }),
                            (f.prototype.eachChild = function (t, e, n, i) {
                                if (
                                    (void 0 === n && (n = !0),
                                    void 0 === i &&
                                        (i = function () {
                                            return !0;
                                        }),
                                    this.haveItems(t))
                                )
                                    for (var r = 0; r < this._childs[t].length; r++) e.call(this, this._childs[t][r], r), n && i(this._childs[t][r]) && this.eachChild(this._childs[t][r].id, e, n, i);
                            }),
                            (f.prototype.getNearId = function (t) {
                                return t;
                            }),
                            (f.prototype.loadItems = function (e, n) {
                                var i = this;
                                void 0 === n && (n = "json");
                                var t = this.config.autoload + "?id=" + e;
                                new a.DataProxy(t).load().then(function (t) {
                                    (t = (n = h.toDataDriver(n)).toJsonArray(t)), i._parse_data(t, e), i.events.fire(d.DataEvents.change);
                                });
                            }),
                            (f.prototype.refreshItems = function (t, e) {
                                void 0 === e && (e = "json"), this.removeAll(t), this.loadItems(t, e);
                            }),
                            (f.prototype.eachParent = function (t, e, n) {
                                void 0 === n && (n = !1);
                                t = this.getItem(t);
                                t && (n && e.call(this, t), t.parent !== this._root && ((n = this.getItem(t.parent)), e.call(this, n), this.eachParent(t.parent, e)));
                            }),
                            (f.prototype.haveItems = function (t) {
                                return t in this._childs;
                            }),
                            (f.prototype.canCopy = function (e, t) {
                                if (e === t) return !1;
                                var n = !0;
                                return (
                                    this.eachParent(t, function (t) {
                                        return t.id === e ? (n = !1) : null;
                                    }),
                                    n
                                );
                            }),
                            (f.prototype.serialize = function (t, e) {
                                void 0 === t && (t = d.DataDriver.json);
                                (e = this._serialize(this._root, e)), (t = h.toDataDriver(t));
                                if (t) return t.serialize(e);
                            }),
                            (f.prototype.getId = function (t, e) {
                                if ((void 0 === e && (e = this._root), this._childs[e] && this._childs[e][t])) return this._childs[e][t].id;
                            }),
                            (f.prototype.map = function (t, e, n) {
                                void 0 === e && (e = this._root), void 0 === n && (n = !0);
                                var i = [];
                                if (!this.haveItems(e)) return i;
                                for (var r, o = 0; o < this._childs[e].length; o++) i.push(t.call(this, this._childs[e][o], o, this._childs)), n && ((r = this.map(t, this._childs[e][o].id, n)), (i = i.concat(r)));
                                return i;
                            }),
                            (f.prototype._add = function (t, e, n, i) {
                                void 0 === e && (e = -1), void 0 === n && (n = this._root), (t.parent = t.parent ? t.parent.toString() : n), 0 < i && -1 !== e && (e += 1);
                                e = u.prototype._add.call(this, t, e);
                                if (Array.isArray(t.items))
                                    for (var r = 0, o = t.items; r < o.length; r++) {
                                        var s = o[r];
                                        this.add(s, -1, t.id);
                                    }
                                return e;
                            }),
                            (f.prototype._copy = function (t, e, n, i, r) {
                                if ((void 0 === n && (n = this), void 0 === i && (i = this._root), !this.exists(t))) return null;
                                var o = this._childs[t];
                                if ((r && (e = -1 === e ? -1 : e + r), n === this && !this.canCopy(t, i))) return null;
                                r = h.copyWithoutInner(this.getItem(t), { items: !0 });
                                if ((n.exists(t) && (r.id = c.uid()), h.isTreeCollection(n))) {
                                    if ((this.exists(t) && ((r.parent = i), n !== this && i === this._root && (r.parent = n.getRoot()), n.add(r, e), (t = r.id)), o))
                                        for (var s = 0, a = o; s < a.length; s++) {
                                            var l = a[s].id,
                                                u = this.getIndex(l);
                                            "string" == typeof t && this.copy(l, u, n, t);
                                        }
                                    return t;
                                }
                                n.add(r, e);
                            }),
                            (f.prototype._move = function (t, e, n, i, r) {
                                if ((void 0 === n && (n = this), void 0 === i && (i = this._root), !this.exists(t))) return null;
                                if ((r && (e = -1 === e ? -1 : e + r), n !== this)) {
                                    if (!h.isTreeCollection(n)) return n.add(h.copyWithoutInner(this.getItem(t)), e), void this.remove(t);
                                    var o = this.copy(t, e, n, i);
                                    return this.remove(t), o;
                                }
                                if (!this.canCopy(t, i)) return null;
                                (n = this.getParent(t)), (o = this.getIndex(t)), (o = this._childs[n].splice(o, 1)[0]);
                                return (
                                    (o.parent = i),
                                    this._childs[n].length || delete this._childs[n],
                                    this.haveItems(i) || (this._childs[i] = []),
                                    -1 === e ? (e = this._childs[i].push(o)) : this._childs[i].splice(e, 0, o),
                                    this.events.fire(d.DataEvents.change),
                                    t
                                );
                            }),
                            (f.prototype._removeAll = function (t) {
                                if (t)
                                    for (var e = 0, n = o(this._childs[t]); e < n.length; e++) {
                                        var i = n[e];
                                        this.remove(i.id);
                                    }
                                else {
                                    u.prototype._removeAll.call(this);
                                    var r = this._root;
                                    (this._initChilds = null), (this._childs = (((t = {})[r] = []), t));
                                }
                            }),
                            (f.prototype._removeCore = function (e) {
                                var t;
                                this._pull[e] &&
                                    ((t = this.getParent(e)),
                                    (this._childs[t] = this._childs[t].filter(function (t) {
                                        return t.id !== e;
                                    })),
                                    t === this._root || this._childs[t].length || delete this._childs[t],
                                    this._initChilds &&
                                        this._initChilds[t] &&
                                        ((this._initChilds[t] = this._initChilds[t].filter(function (t) {
                                            return t.id !== e;
                                        })),
                                        t === this._root || this._initChilds[t].length || delete this._initChilds[t]),
                                    this._fastDeleteChilds(this._childs, e),
                                    this._initChilds && this._fastDeleteChilds(this._initChilds, e));
                            }),
                            (f.prototype._addToOrder = function (t, e, n) {
                                var i = this._childs,
                                    r = this._initChilds,
                                    o = e.parent;
                                l(i, (this._pull[e.id] = e), o, n), r && l(r, e, o, n);
                            }),
                            (f.prototype._parse_data = function (t, e) {
                                void 0 === e && (e = this._root);
                                for (var n = 0, i = t; n < i.length; n++) {
                                    var r = i[n];
                                    this.config.init && (r = this.config.init(r)),
                                        "object" != typeof r && (r = { value: r }),
                                        (r.id = r.id ? r.id.toString() : c.uid()),
                                        (r.parent = r.parent ? r.parent.toString() : e),
                                        (this._pull[r.id] = r),
                                        this._childs[r.parent] || (this._childs[r.parent] = []),
                                        this._childs[r.parent].push(r),
                                        r.items && r.items instanceof Object && this._parse_data(r.items, r.id);
                                }
                            }),
                            (f.prototype._fastDeleteChilds = function (t, e) {
                                if ((this._pull[e] && delete this._pull[e], t[e])) {
                                    for (var n = 0; n < t[e].length; n++) this._fastDeleteChilds(t, t[e][n].id);
                                    delete t[e];
                                }
                            }),
                            (f.prototype._recursiveFilter = function (e, n, t, i, r) {
                                var o = this,
                                    s = this._childs[t];
                                if (s) {
                                    var a,
                                        l,
                                        u = function (t) {
                                            switch (n.type) {
                                                case d.TreeFilterType.all:
                                                    return !0;
                                                case d.TreeFilterType.level:
                                                    return i === n.level;
                                                case d.TreeFilterType.leafs:
                                                    return !o.haveItems(t.id);
                                            }
                                        };
                                    "function" == typeof e
                                        ? ((a = function (t) {
                                              return u(t) && e(t);
                                          }),
                                          (l = s.filter(a)).length && (r[t] = l))
                                        : e.by &&
                                          e.match &&
                                          ((a = function (t) {
                                              return u(t) && t[e.by] && -1 !== t[e.by].toString().toLowerCase().indexOf(e.match.toString().toLowerCase());
                                          }),
                                          (l = s.filter(a)).length && (r[t] = l));
                                    for (var c = 0, h = s; c < h.length; c++) {
                                        var f = h[c];
                                        this._recursiveFilter(e, n, f.id, i + 1, r);
                                    }
                                }
                            }),
                            (f.prototype._serialize = function (t, i) {
                                var r = this;
                                return (
                                    void 0 === t && (t = this._root),
                                    this.map(
                                        function (t) {
                                            var e,
                                                n = {};
                                            for (e in t) "parent" !== e && "items" !== e && (n[e] = t[e]);
                                            return i && (n = i(n)), r.haveItems(t.id) && (n.items = r._serialize(t.id, i)), n;
                                        },
                                        t,
                                        !1
                                    )
                                );
                            }),
                            f);
                    function f(t, e) {
                        var n = u.call(this, t, e) || this,
                            t = (n._root = "_ROOT_" + c.uid());
                        return (n._childs = (((e = {})[t] = []), e)), (n._initChilds = null), n;
                    }
                    e.TreeCollection = r;
                },
                function (t, e, n) {
                    "use strict";
                    var f =
                        (this && this.__assign) ||
                        function () {
                            return (f =
                                Object.assign ||
                                function (t) {
                                    for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                    return t;
                                }).apply(this, arguments);
                        };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var s = n(2),
                        o = n(59),
                        d = n(4),
                        p = n(5);
                    var i =
                        ((r.prototype.setItem = function (t, e) {
                            o.collectionStore.setItem(t, e);
                        }),
                        (r.prototype.onMouseDown = function (t, e, n) {
                            var i, r, o;
                            1 === t.which &&
                                (t.preventDefault(),
                                document.addEventListener("mousemove", this._onMouseMove),
                                document.addEventListener("mouseup", this._onMouseUp),
                                (r = (i = s.locateNode(t, "dhx_id")) && i.getAttribute("dhx_id")),
                                (o = s.locate(t, "dhx_widget_id")),
                                e && e.includes(r) && 1 < e.length ? ((this._selectedIds = e), (this._itemsForGhost = n)) : ((this._selectedIds = []), (this._itemsForGhost = null)),
                                r &&
                                    o &&
                                    ((n = (e = s.getBox(i)).left),
                                    (e = e.top),
                                    (this._transferData.initXOffset = t.pageX - n),
                                    (this._transferData.initYOffset = t.pageY - e),
                                    (this._transferData.x = t.pageX),
                                    (this._transferData.y = t.pageY),
                                    (this._transferData.targetId = o),
                                    (this._transferData.id = r),
                                    (this._transferData.item = i)));
                        }),
                        (r.prototype._moveGhost = function (t, e) {
                            this._transferData.ghost && ((this._transferData.ghost.style.left = t - this._transferData.initXOffset + "px"), (this._transferData.ghost.style.top = e - this._transferData.initYOffset + "px"));
                        }),
                        (r.prototype._removeGhost = function () {
                            document.body.removeChild(this._transferData.ghost);
                        }),
                        (r.prototype._onDrop = function () {
                            var t, e;
                            this._canMove &&
                                ((t = (e = o.collectionStore.getItem(this._lastCollectionId)) && e.config),
                                e &&
                                    "source" !== t.dragMode &&
                                    e.events.fire(d.DragEvents.beforeDrop, [this._lastId, this._transferData.target, this._transferData.id]) &&
                                    ((t = { id: this._lastId, target: e }),
                                    (e = { id: this._transferData.id, target: this._transferData.target }),
                                    this._move(e, t),
                                    t.target.events.fire(d.DragEvents.dropComplete, [t.id, this._transferData.dropPosition]))),
                                this._endDrop();
                        }),
                        (r.prototype._onDragStart = function (t, e) {
                            var n = o.collectionStore.getItem(e),
                                i = n.config;
                            if ("target" === i.dragMode) return null;
                            var r = n.data.getItem(t),
                                e = (function (t, e, n) {
                                    void 0 === n && (n = !1);
                                    var i = t.getBoundingClientRect(),
                                        r = document.createElement("div"),
                                        o = t.cloneNode(!0);
                                    return (
                                        (o.style.width = i.width + "px"),
                                        (o.style.height = i.height + "px"),
                                        (o.style.maxHeight = i.height + "px"),
                                        (o.style.fontSize = window.getComputedStyle(t.parentElement).fontSize),
                                        (o.style.opacity = "0.8"),
                                        (o.style.fontSize = window.getComputedStyle(t.parentElement).fontSize),
                                        (n && e && e.length) || r.appendChild(o),
                                        e &&
                                            e.length &&
                                            e.forEach(function (t, e) {
                                                t = t.cloneNode(!0);
                                                (t.style.width = i.width + "px"),
                                                    (t.style.height = i.height + "px"),
                                                    (t.style.maxHeight = i.height + "px"),
                                                    (t.style.top = 12 * (e + 1) - i.height - i.height * e + "px"),
                                                    (t.style.left = 12 * (e + 1) + "px"),
                                                    (t.style.opacity = "0.6"),
                                                    (t.style.zIndex = "" + (-e - 1)),
                                                    r.appendChild(t);
                                            }),
                                        (r.className = "dhx_drag-ghost"),
                                        r
                                    );
                                })(this._transferData.item, this._itemsForGhost, "column" === i.dragItem);
                            return n.events.fire(d.DragEvents.beforeDrag, [r, e, t]) && t
                                ? (n.events.fire(d.DragEvents.dragStart, [t, this._selectedIds]), this._toggleTextSelection(!0), (this._transferData.target = n), (this._transferData.dragConfig = i), e)
                                : null;
                        }),
                        (r.prototype._onDrag = function (t) {
                            var e = t.clientX,
                                n = t.clientY,
                                i = document.elementFromPoint(e, n),
                                e = s.locate(i, "dhx_widget_id");
                            if (e) {
                                (n = o.collectionStore.getItem(e)), (i = s.locate(i, "dhx_id"));
                                if (!i) return this._cancelCanDrop(), (this._lastCollectionId = e), (this._lastId = null), void this._canDrop();
                                if ("complex" === n.config.dropBehaviour) {
                                    var r = ((t = (r = t).clientY), (r = s.locateNode(r)) ? ((r = r.childNodes[0].getBoundingClientRect()), (t - r.top) / r.height) : null);
                                    this._transferData.dropPosition = r <= 0.25 ? d.DropPosition.top : 0.75 <= r ? d.DropPosition.bot : d.DropPosition.in;
                                } else if (this._lastId === i && this._lastCollectionId === e) return;
                                r = { id: this._transferData.id, target: this._transferData.target };
                                "source" !== n.config.dragMode &&
                                    (r.target.events.fire(d.DragEvents.dragOut, [i, n]),
                                    e !== this._transferData.targetId || !p.isTreeCollection(r.target.data) || (p.isTreeCollection(r.target.data) && r.target.data.canCopy(r.id, i))
                                        ? (this._cancelCanDrop(),
                                          (this._lastId = i),
                                          (this._lastCollectionId = e),
                                          r.target.events.fire(d.DragEvents.dragIn, [i, this._transferData.dropPosition, o.collectionStore.getItem(e)]) && this._canDrop())
                                        : this._cancelCanDrop());
                            } else this._canMove && this._cancelCanDrop();
                        }),
                        (r.prototype._move = function (e, n) {
                            var i = e.target.data,
                                r = n.target.data,
                                o = 0,
                                s = n.id,
                                t = p.isTreeCollection(r) ? n.target.config.dropBehaviour : void 0,
                                a = e.target.config.columns ? e.target.config : void 0;
                            if (
                                a &&
                                ("complex" === a.dragItem || "column" === a.dragItem) &&
                                a.columns
                                    .map(function (t) {
                                        return t.id;
                                    })
                                    .filter(function (t) {
                                        return t === e.id || t === n.id;
                                    }).length &&
                                e.target === n.target &&
                                e.id !== n.id
                            ) {
                                var l = e.target,
                                    u = l.config.columns.map(function (t) {
                                        return f({}, t);
                                    }),
                                    c = u.findIndex(function (t) {
                                        return t.id === e.id;
                                    }),
                                    a = u.findIndex(function (t) {
                                        return t.id === n.id;
                                    });
                                return u.splice(a, 0, u.splice(c, 1)[0]), l.setColumns(u), void l.paint();
                            }
                            switch (t) {
                                case "child":
                                    break;
                                case "sibling":
                                    (s = r.getParent(s)), (o = r.getIndex(n.id) + 1);
                                    break;
                                case "complex":
                                    var h = this._transferData.dropPosition;
                                    h === d.DropPosition.top ? ((s = r.getParent(s)), (o = r.getIndex(n.id))) : h === d.DropPosition.bot && ((s = r.getParent(s)), (o = r.getIndex(n.id) + 1));
                                    break;
                                default:
                                    o = n.id ? (e.target === n.target && r.getIndex(e.id) < r.getIndex(n.id) ? r.getIndex(n.id) - 1 : r.getIndex(n.id)) : -1;
                            }
                            this._transferData.dragConfig.dragCopy
                                ? this._selectedIds instanceof Array && 1 < this._selectedIds.length
                                    ? this._selectedIds.map(function (t) {
                                          i.copy(t, o, r, s), -1 < o && o++;
                                      })
                                    : i.copy(e.id, o, r, s)
                                : this._selectedIds instanceof Array && 1 < this._selectedIds.length
                                ? this._selectedIds.map(function (t) {
                                      i.move(t, o, r, s), -1 < o && o++;
                                  })
                                : i.move(e.id, o, r, s);
                        }),
                        (r.prototype._endDrop = function () {
                            this._toggleTextSelection(!1),
                                this._transferData.target && this._transferData.target.events.fire(d.DragEvents.dragEnd, [this._transferData.id, this._selectedIds]),
                                this._cancelCanDrop(),
                                (this._canMove = !0),
                                (this._transferData = {}),
                                (this._lastId = null),
                                (this._lastCollectionId = null);
                        }),
                        (r.prototype._cancelCanDrop = function () {
                            this._canMove = !1;
                            var t = o.collectionStore.getItem(this._lastCollectionId);
                            t && this._lastId && t.events.fire(d.DragEvents.cancelDrop, [this._lastId]), (this._lastCollectionId = null), (this._lastId = null);
                        }),
                        (r.prototype._canDrop = function () {
                            this._canMove = !0;
                            var t = o.collectionStore.getItem(this._lastCollectionId);
                            t && this._lastId && t.events.fire(d.DragEvents.canDrop, [this._lastId, this._transferData.dropPosition]);
                        }),
                        (r.prototype._toggleTextSelection = function (t) {
                            t ? document.body.classList.add("dhx_no-select") : document.body.classList.remove("dhx_no-select");
                        }),
                        r);
                    function r() {
                        var r = this;
                        (this._transferData = {}),
                            (this._canMove = !0),
                            (this._selectedIds = []),
                            (this._onMouseMove = function (t) {
                                if (r._transferData.id) {
                                    var e = t.pageX,
                                        n = t.pageY;
                                    if (!r._transferData.ghost) {
                                        if (Math.abs(r._transferData.x - e) < 3 && Math.abs(r._transferData.y - n) < 3) return;
                                        var i = r._onDragStart(r._transferData.id, r._transferData.targetId);
                                        if (!i) return void r._endDrop();
                                        (r._transferData.ghost = i), document.body.appendChild(r._transferData.ghost);
                                    }
                                    r._moveGhost(e, n), r._onDrag(t);
                                }
                            }),
                            (this._onMouseUp = function () {
                                r._transferData.x && (r._transferData.ghost ? (r._removeGhost(), r._onDrop()) : r._endDrop(), document.removeEventListener("mousemove", r._onMouseMove), document.removeEventListener("mouseup", r._onMouseUp));
                            });
                    }
                    n = window.dhxHelpers = window.dhxHelpers || {};
                    (n.dragManager = n.dragManager || new i()), (e.dragManager = n.dragManager);
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i =
                        ((r.prototype.setItem = function (t, e) {
                            this._store[t] = e;
                        }),
                        (r.prototype.getItem = function (t) {
                            return this._store[t] || null;
                        }),
                        r);
                    function r() {
                        this._store = {};
                    }
                    var o = (window.dhxHelpers = window.dhxHelpers || {});
                    (o.collectionStore = o.collectionStore || new i()), (e.collectionStore = o.collectionStore);
                },
                function (t, l, u) {
                    "use strict";
                    (function (t) {
                        var i,
                            e =
                                (this && this.__extends) ||
                                ((i = function (t, e) {
                                    return (i =
                                        Object.setPrototypeOf ||
                                        ({ __proto__: [] } instanceof Array &&
                                            function (t, e) {
                                                t.__proto__ = e;
                                            }) ||
                                        function (t, e) {
                                            for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                        })(t, e);
                                }),
                                function (t, e) {
                                    function n() {
                                        this.constructor = t;
                                    }
                                    i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                                });
                        Object.defineProperty(l, "__esModule", { value: !0 });
                        var r,
                            n = u(10),
                            o = u(1),
                            s = u(18),
                            e =
                                ((r = n.DataProxy),
                                e(a, r),
                                (a.prototype.load = function () {
                                    var e = this;
                                    return new t(function (t) {
                                        e._timeout
                                            ? (clearTimeout(e._timeout),
                                              (e._timeout = setTimeout(function () {
                                                  s.ajax.get(e.url, { responseType: "text" }).then(t), (e._cooling = !0);
                                              }, e.config.delay)),
                                              e._cooling && (t(null), (e._cooling = !1)))
                                            : (s.ajax.get(e.url, { responseType: "text" }).then(t), (e._cooling = !0), (e._timeout = setTimeout(function () {})));
                                    });
                                }),
                                a);
                        function a(t, e) {
                            var n = r.call(this, t) || this;
                            return (n.config = o.extend({ from: 0, limit: 50, delay: 50, prepare: 0 }, e)), n.updateUrl(t, { from: n.config.from, limit: n.config.limit }), n;
                        }
                        l.LazyDataProxy = e;
                    }.call(this, u(8)));
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var r = n(7),
                        i = n(25),
                        o = n(4),
                        n =
                            ((s.prototype.getId = function () {
                                return this._selected;
                            }),
                            (s.prototype.getItem = function () {
                                return this._selected ? this._data.getItem(this._selected) : null;
                            }),
                            (s.prototype.remove = function (t) {
                                return (
                                    !(t = t || this._selected) ||
                                    (!!this.events.fire(i.SelectionEvents.beforeUnSelect, [t]) && (this._data.update(t, { $selected: !1 }), (this._selected = null), this.events.fire(i.SelectionEvents.afterUnSelect, [t]), !0))
                                );
                            }),
                            (s.prototype.add = function (t) {
                                this._selected !== t &&
                                    (this.remove(), this.events.fire(i.SelectionEvents.beforeSelect, [t]) && ((this._selected = t), this._data.update(t, { $selected: !0 }), this.events.fire(i.SelectionEvents.afterSelect, [t])));
                            }),
                            s);
                    function s(t, e, n) {
                        var i = this;
                        (this.events = n || new r.EventSystem(this)),
                            (this._data = e),
                            this._data.events.on(o.DataEvents.removeAll, function () {
                                i._selected = null;
                            }),
                            this._data.events.on(o.DataEvents.change, function () {
                                var t;
                                !i._selected || ((t = i._data.getNearId(i._selected)) !== i._selected && ((i._selected = null), t && i.add(t)));
                            });
                    }
                    e.Selection = n;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            }),
                        o =
                            (this && this.__assign) ||
                            function () {
                                return (o =
                                    Object.assign ||
                                    function (t) {
                                        for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                        return t;
                                    }).apply(this, arguments);
                            },
                        s =
                            (this && this.__spreadArrays) ||
                            function () {
                                for (var t = 0, e = 0, n = arguments.length; e < n; e++) t += arguments[e].length;
                                for (var i = Array(t), r = 0, e = 0; e < n; e++) for (var o = arguments[e], s = 0, a = o.length; s < a; s++, r++) i[r] = o[s];
                                return i;
                            };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var a,
                        h = n(0),
                        l = n(6),
                        u = n(11),
                        c = n(3),
                        r =
                            ((a = u.BaseShape),
                            r(f, a),
                            (f.prototype.isConnector = function () {
                                return !0;
                            }),
                            (f.prototype.getMetaInfo = function () {
                                var t = l.getMeta([{ type: "grid", label: c.default.gridStep }]);
                                return t.push({ id: "strokeProps", type: "stroke", label: "Stroke", connector: !0 }), t;
                            }),
                            (f.prototype.setDefaults = function (t) {
                                return (t.connectType = t.connectType || "elbow"), (t.stroke = t.stroke || "#CCC"), (t.strokeWidth = t.strokeWidth || 2), (t.cornersRadius = t.cornersRadius || 0), t;
                            }),
                            (f.prototype.render = function () {
                                var t = this.config.$selected;
                                this.id = this.config.id;
                                var e = this._getPoints(),
                                    n = this._getArrowLine() || [];
                                return h.sv(
                                    "g",
                                    { dhx_id: this.config.id || "", _key: this.config.id, class: "dhx_diagram_connector " + this.getCss() },
                                    s(
                                        [
                                            h.sv("path", {
                                                d: e,
                                                fill: "none",
                                                class: "dhx_diagram_line " + (t ? "dhx_diagram_line--selected" : ""),
                                                "stroke-dasharray": this._getType(),
                                                "stroke-linejoin": "round",
                                                stroke: this.config.stroke,
                                                "stroke-width": this.config.strokeWidth,
                                            }),
                                        ],
                                        n
                                    )
                                );
                            }),
                            (f.prototype.getBox = function () {
                                var t = o({}, this.config),
                                    e = t.points.reduce(
                                        function (t, e) {
                                            return (t.x = Math.max(t.x, e.x)), (t.y = Math.max(t.y, e.y)), t;
                                        },
                                        { x: 0, y: 0 }
                                    ),
                                    n = e.x - t.x,
                                    i = e.y - t.y,
                                    e = t.x,
                                    n = e + n,
                                    t = t.y;
                                return { left: e, right: n, top: t, bottom: t + i };
                            }),
                            (f.prototype._getType = function () {
                                if ((this.config.strokeType && (this.config.type = this.config.strokeType), this.config.type))
                                    switch (this.config.type) {
                                        case "line":
                                            return "";
                                        case "dash":
                                            return "5, 5";
                                        default:
                                            return "";
                                    }
                            }),
                            (f.prototype._getPoints = function () {
                                return this._getStringPoints();
                            }),
                            (f.prototype._getStringPoints = function () {
                                return (
                                    (this.config.width = Math.abs(this.config.points[this.config.points.length - 1].x - this.config.points[0].x)),
                                    (this.config.height = Math.abs(this.config.points[this.config.points.length - 1].y - this.config.points[0].y)),
                                    (this.config.x = this.config.points[0].x),
                                    (this.config.y = this.config.points[0].y),
                                    "M " +
                                        this.config.x +
                                        "," +
                                        this.config.y +
                                        this.config.points
                                            .map(function (t) {
                                                return t.x1 && t.y1 ? "Q" + t.x1 + "," + t.y1 + " " + t.x + "," + t.y : "L " + t.x + "," + t.y;
                                            })
                                            .join(" ")
                                );
                            }),
                            (f.prototype._getArrowLine = function () {
                                var t = this.config.points,
                                    e = this.config.backArrow,
                                    n = this.config.forwardArrow;
                                if (e || n)
                                    return [
                                        e ? ("straight" === this.config.connectType ? this._angleArrow(t[1], t[0]) : this._arrow(t[1], t[0])) : null,
                                        n ? ("straight" === this.config.connectType ? this._angleArrow(t[t.length - 2], t[t.length - 1]) : this._arrow(t[t.length - 2], t[t.length - 1])) : null,
                                    ];
                            }),
                            (f.prototype._angleArrow = function (t, e) {
                                var n = t.x - e.x,
                                    i = t.y - e.y,
                                    r = 1 / Math.sqrt(Math.pow(n, 2) + Math.pow(i, 2)),
                                    o = n * r,
                                    s = i * r,
                                    a = e.x,
                                    l = e.y,
                                    u = e.x - 5,
                                    c = e.y - 5,
                                    n = e.x + 5,
                                    i = e.y - 5,
                                    r = Math.atan((e.x - t.x) / (e.y - t.y)) * (-180 / 3.14);
                                return (
                                    t.y > e.y && (r += 180),
                                    h.sv("path", {
                                        d: "M" + u + "," + c + " L" + a + "," + l + " L" + n + "," + i + " Z",
                                        class: "dhx_diagram_arrow",
                                        "shape-rendering": "auto",
                                        stroke: this.config.stroke,
                                        fill: this.config.stroke,
                                        transform: "translate(" + o + " " + s + ") rotate(" + r + "," + a + "," + l + ")",
                                    })
                                );
                            }),
                            (f.prototype._arrow = function (t, e) {
                                var n = t.x !== e.x,
                                    i = (n ? t.x < e.x : t.y < e.y) ? 1 : -1,
                                    r = e.x - (n ? i : 0),
                                    o = e.y - (n ? 0 : i),
                                    s = e.x - (n ? 7 * i : 5 * i),
                                    a = e.y - (n ? 5 : 7 * i),
                                    t = e.x + (n ? -7 * i : 5 * i),
                                    i = e.y - (n ? -5 : 7 * i);
                                return h.sv("path", { d: "M" + s + "," + a + " L" + r + "," + o + " L" + t + "," + i + " Z", class: "dhx_diagram_arrow", "shape-rendering": "auto", stroke: this.config.stroke, fill: this.config.stroke });
                            }),
                            f);
                    function f(t, e) {
                        return a.call(this, t, e) || this;
                    }
                    e.Line = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o,
                        s = n(0),
                        a = n(3),
                        l = n(6),
                        n = n(31),
                        r =
                            ((o = n.OrgChartCard),
                            r(u, o),
                            (u.prototype.getMetaInfo = function () {
                                return l.getMeta([
                                    { type: "grid", label: a.default.gridStep },
                                    { type: "color", label: a.default.color },
                                    { type: "position", label: a.default.position },
                                    { type: "size", label: a.default.size },
                                    { type: "title", label: a.default.title },
                                    { type: "text", label: a.default.text },
                                    { type: "img", label: a.default.image },
                                ]);
                            }),
                            (u.prototype.setDefaults = function (t, e) {
                                var n = t.width,
                                    i = t.height,
                                    r = t.text,
                                    o = t.title,
                                    s = t.headerColor,
                                    a = e.width ? parseFloat(e.width) : 210,
                                    l = e.height ? parseFloat(e.height) : 90;
                                return (t.width = n || a), (t.height = i || l), (t.title = "string" == typeof o ? o : e.title || ""), (t.text = "string" == typeof r ? r : e.text || ""), (t.headerColor = s || e.headerColor || ""), t;
                            }),
                            (u.prototype.getCss = function () {
                                return "dhx_diagram_image " + o.prototype.getCss.call(this);
                            }),
                            (u.prototype.getContent = function () {
                                var t = this.config,
                                    e = t.img,
                                    n = t.headerColor,
                                    i = t.title,
                                    r = t.text,
                                    o = t.width,
                                    t = e ? "" + e : null;
                                return [
                                    s.el("img.dhx_orgcard__img", { style: { backgroundColor: e ? null : n }, src: t }),
                                    s.el("div.dhx_orgcard__title", i),
                                    s.el("div.dhx_orgcard__text", { class: i ? "" : "dhx_content_text-alone", style: { maxWidth: o - 80, marginLeft: 80 } }, r),
                                ];
                            }),
                            u);
                    function u() {
                        return (null !== o && o.apply(this, arguments)) || this;
                    }
                    e.OrgChartImgCard = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            }),
                        o =
                            (this && this.__assign) ||
                            function () {
                                return (o =
                                    Object.assign ||
                                    function (t) {
                                        for (var e, n = 1, i = arguments.length; n < i; n++) for (var r in (e = arguments[n])) Object.prototype.hasOwnProperty.call(e, r) && (t[r] = e[r]);
                                        return t;
                                    }).apply(this, arguments);
                            };
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var s,
                        a = n(0),
                        l = n(6),
                        u = n(11),
                        y = n(2),
                        c = n(16),
                        h = n(3),
                        r =
                            ((s = u.BaseShape),
                            r(f, s),
                            (f.prototype.render = function () {
                                var t = this.getCoords(this.config),
                                    e = this.config,
                                    n = e.id,
                                    i = e.angle,
                                    r = e.text,
                                    e = { fontSize: e.fontSize + "px", fontFamily: "Roboto, Arial, Tahoma, Verdana, sans-serif", lineHeight: e.lineHeight + "px", fontWeight: e.fontWeight, fontStyle: e.fontStyle };
                                return (
                                    this._oldText && this.config.text !== this._oldText && ((e = y.getStrSize(r, e)), (this.config.width = e.width + 4), (this.config.height = e.height + 2)),
                                    (this._oldText = this.config.text),
                                    a.el(
                                        "div",
                                        {
                                            _key: n,
                                            class: "dhx_diagram_flow_item " + this.getCss(),
                                            dhx_id: n,
                                            zIndex: 2,
                                            style: o({ position: "absolute", top: t.y, left: t.x, transform: "rotate(" + (i || 0) + "deg)" }, c.getShapeCss(this.config)),
                                        },
                                        [this.getContent()]
                                    )
                                );
                            }),
                            (f.prototype.getMetaInfo = function () {
                                var t = l.getMeta([
                                    { type: "grid", label: h.default.gridStep },
                                    { type: "arrange", label: h.default.arrange },
                                    { type: "text", label: h.default.text },
                                ]);
                                return t.push({ id: "textProps", type: "textProps", label: h.default.textProps, alignments: !1 }), t;
                            }),
                            (f.prototype.setDefaults = function (t, e) {
                                var n = t.width,
                                    i = t.height,
                                    r = t.fontColor,
                                    o = t.fontSize,
                                    s = t.fontStyle,
                                    a = t.textAlign,
                                    l = t.lineHeight,
                                    u = t.textVerticalAlign,
                                    c = t.text,
                                    h = t.fontWeight,
                                    f = t.x,
                                    d = t.y,
                                    p = e.lineHeight ? parseFloat(e.lineHeight) : 14,
                                    g = e.fontSize ? parseFloat(e.fontSize) : 14,
                                    v = { fontSize: (o || g) + "px", fontFamily: "Roboto, Arial, Tahoma, Verdana, sans-serif", lineHeight: (l || p) + "px", fontWeight: h, fontStyle: s },
                                    h = y.getStrSize(c, v),
                                    v = e.width ? parseFloat(e.width) : h.width + 4,
                                    h = e.height ? parseFloat(e.height) : h.height + 2;
                                return (
                                    (t.width = n || v),
                                    (t.height = i || h),
                                    (t.lineHeight = l || p),
                                    (t.fontSize = o || g),
                                    (t.text = c || e.text || ""),
                                    (t.fontColor = r || e.fontColor || "rgba(0,0,0,0.70)"),
                                    (t.textAlign = a || e.textAlign || "center"),
                                    (t.fontStyle = s || e.fontStyle || "normal"),
                                    (t.textVerticalAlign = u || e.textVerticalAlign || "center"),
                                    (t.x = f || 0),
                                    (t.y = d || 0),
                                    t
                                );
                            }),
                            (f.prototype.getContent = function () {
                                return a.el("span.dhx_item_shape", this.config.text);
                            }),
                            f);
                    function f(t, e) {
                        e = s.call(this, t, e) || this;
                        return (e.config = t), (e.id = e.config.id), e;
                    }
                    e.DiagramTextShape = r;
                },
                function (t, e, n) {
                    "use strict";
                    var i,
                        r =
                            (this && this.__extends) ||
                            ((i = function (t, e) {
                                return (i =
                                    Object.setPrototypeOf ||
                                    ({ __proto__: [] } instanceof Array &&
                                        function (t, e) {
                                            t.__proto__ = e;
                                        }) ||
                                    function (t, e) {
                                        for (var n in e) e.hasOwnProperty(n) && (t[n] = e[n]);
                                    })(t, e);
                            }),
                            function (t, e) {
                                function n() {
                                    this.constructor = t;
                                }
                                i(t, e), (t.prototype = null === e ? Object.create(e) : ((n.prototype = e.prototype), new n()));
                            });
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var o,
                        s = n(0),
                        a = n(2),
                        l = n(12),
                        n = n(9),
                        r =
                            ((o = n.View),
                            r(u, o),
                            (u.prototype.render = function (t, e) {
                                var n = this.config,
                                    i = this._getIcons(t, n.icons),
                                    r = n.iconWidth * i.length + n.gap,
                                    n = this._getCoords(t, r / e.scale, n.height / e.scale);
                                return s.el(
                                    "div",
                                    {
                                        class: "dhx_popup_toolbar",
                                        style: { display: this._hidden ? "none" : "block", maxHeight: this.config.height, width: r, top: (n.y - e.top) * e.scale, left: (n.x - e.left) * e.scale },
                                        onclick: this._handlers.onclick,
                                    },
                                    [s.el("div", { class: "dhx_item_toolbar" }, i)]
                                );
                            }),
                            (u.prototype.hide = function () {
                                (this._hidden = !0), this.paint();
                            }),
                            (u.prototype.show = function () {
                                (this._hidden = !1), this.paint();
                            }),
                            (u.prototype._getIcons = function (t, e) {
                                for (var n = [], i = 0; i < e.length; i++) {
                                    var r,
                                        o = e[i];
                                    (o.check && !o.check(t)) ||
                                        ((r = o.css ? o.css(t) : ""),
                                        (r = { _key: o.id, class: "dhx_icon " + r, dhx_id: o.id }),
                                        "string" == typeof (o = "function" == typeof o.content ? o.content(t) : o.content) ? ((r[".innerHTML"] = o), n.push(s.el("div", r))) : n.push(s.el("div", r, [o])));
                                }
                                return n;
                            }),
                            (u.prototype._getCoords = function (t, e, n) {
                                if (t.$shape.isConnector()) return this._pressCoords ? { x: this._pressCoords.x - 50, y: this._pressCoords.y - 50 } : { x: t.points[0].x, y: t.points[0].y };
                                t = t.$shape.getBox();
                                return { x: t.right / 2 + t.left / 2 - e / 2, y: t.top - n - 8 };
                            }),
                            u);
                    function u(t, e) {
                        var i = o.call(this, null, { height: 50, iconWidth: 30, gap: 16, icons: e }) || this;
                        return (
                            (i.events = t),
                            (i._handlers = {
                                onclick: a.eventHandler(
                                    function (t) {
                                        return a.locate(t);
                                    },
                                    {
                                        dhx_icon: function (t, e) {
                                            i.events.fire(l.DiagramEvents.shapeIconClick, [e, t]);
                                        },
                                    }
                                ),
                            }),
                            i.events.on(l.DiagramEvents.shapeMouseDown, function (t, e, n) {
                                i._pressCoords = n;
                            }),
                            i.events.on(l.DiagramEvents.emptyAreaClick, function () {
                                i._pressCoords = null;
                            }),
                            i
                        );
                    }
                    e.Toolbar = r;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var l = n(67),
                        u = n(68),
                        c = n(69),
                        a = n(33),
                        n =
                            ((i.prototype.layout = function (t, e) {
                                if (((t.routes = new u.default()), !e.full)) {
                                    var n = h(t, e);
                                    return e.preserveLocation || f(n.n, n.size), d(n.mx, n.n, n.n, n.size), n.n, t.setGlobalBox(), t;
                                }
                                var i = c.split(t);
                                if (1 == i.length && null !== i[0].root) return new l.default().layout(i[0].g, e);
                                (t = i[0].g).routes = new u.default();
                                var r,
                                    o,
                                    s,
                                    a,
                                    n = h(t, e);
                                return (
                                    e.preserveLocation || f(n.n, n.size),
                                    d(n.mx, n.n, n.n, n.size),
                                    n.n,
                                    e.full &&
                                        ((function (h, t, e, f) {
                                            e.length,
                                                e.forEach(function (t) {
                                                    return (t.iss = "");
                                                });
                                            var n = []
                                                .concat(e)
                                                .filter(function (t) {
                                                    return 3 <= t.links.length;
                                                })
                                                .sort(function (t, e) {
                                                    return t.links.length > e.links.length ? -1 : t.links.length == e.links.length ? 0 : 1;
                                                });
                                            n
                                                .map(function (r) {
                                                    var o = [];
                                                    return (
                                                        r.links.forEach(function (t) {
                                                            var e = Math.atan2(t.x - r.x, t.y - r.y) + Math.PI,
                                                                n = 2 * Math.ceil(e / (2 * p)) * p,
                                                                i = 2 * Math.floor(e / (2 * p)) * p;
                                                            o.push([t, n, Math.abs(e - n)]), o.push([t, i, Math.abs(e - i)]);
                                                        }),
                                                        o.sort(function (t, e) {
                                                            return t[2] > e[2] ? 1 : -1;
                                                        }),
                                                        [r, o]
                                                    );
                                                })
                                                .forEach(function (t) {
                                                    var e = t[0],
                                                        n = t[1],
                                                        i = e.x,
                                                        r = e.y;
                                                    (e.x = Math.round(e.x / f) * f), (e.y = Math.round(e.y / f) * f);
                                                    for (var o = 0; o < n.length; o++) {
                                                        var s,
                                                            a,
                                                            l,
                                                            u = n[o],
                                                            c = u[0];
                                                        h.getRoute(e.id, c.id) ||
                                                            ((s = (l = v(e, c, u[1], f, i, r))[0]), (a = l[1]), (u = l[2]), (l = l[3]), h.hasRoute(e.id, u, l) || h.isAligned(c.id) || ((c.x += s), (c.y += a), h.addRoute(e.id, c.id, u, l)));
                                                    }
                                                }),
                                                d(
                                                    t,
                                                    e,
                                                    e.filter(function (t) {
                                                        return !h.isAligned(t.id);
                                                    }),
                                                    f
                                                ),
                                                n.forEach(function (e) {
                                                    h.isAligned(e.id) || ((e.x = Math.round(e.x / f) * f), (e.y = Math.round(e.y / f) * f)),
                                                        e.links.forEach(function (t) {
                                                            2 == t.links.length && g(e, t, h, f);
                                                        });
                                                }),
                                                0 === n.length && ((n = e[0]), ((e = e[0].links[0]).x = Math.round(e.x / f) * f), (e.y = Math.round(e.y / f) * f), g(n, e, h, f));
                                        })(t.routes, n.mx, n.n, n.size),
                                        (r = t),
                                        (o = n.mx),
                                        (i = i.slice(1).sort(x)),
                                        (s = n.size),
                                        (a = r.getNodes().length),
                                        i.forEach(function (t) {
                                            var e = t.g,
                                                n = t.root;
                                            new l.default().layout(e, { root: e.getNodes()[0].id });
                                            var u,
                                                c,
                                                h,
                                                f,
                                                d,
                                                p,
                                                i =
                                                    ((u = o),
                                                    (c = r),
                                                    (h = e),
                                                    (f = n),
                                                    (d = s),
                                                    (p = a),
                                                    y
                                                        .map(function (t) {
                                                            if (!t[2] && !t[3] && c.routes.hasRoute(f, t[0], t[1])) return null;
                                                            var e = h.copy(),
                                                                n = c.copy(),
                                                                i = e.getRoot(),
                                                                r = n.hash[f];
                                                            e.rotate({ x: -t[0], y: t[1] });
                                                            var o,
                                                                s = e.getBox(),
                                                                a = s[0][1] - s[0][0],
                                                                l = s[1][1] - s[1][0];
                                                            !(function (t, e, n, i, r, o, s, a) {
                                                                var l,
                                                                    u,
                                                                    c,
                                                                    h,
                                                                    f = e.x + (a[2] || a[0]) * s,
                                                                    d = e.y + (a[3] || a[1]) * s;
                                                                if (m(t, f - s / 2, f + s / 2, d - s / 2, d + s / 2)) return _(t, f - (s / 2) * a[0], d - (s / 2) * a[1], n, i, a, s);
                                                                (a[0] ? n : i) / s - 1 <= 0 ||
                                                                    ((e = 0.45 * s),
                                                                    (e = a[0]
                                                                        ? ((u = f + (s / 2) * a[0]), (c = u + n * a[0]), (h = d - i / 2 - e - o) + i + 2 * e)
                                                                        : ((c = (u = f - n / 2 - e - r) + n + 2 * e), (h = d + (s / 2) * a[1]) + i * a[1])) < h && ((h = (l = [e, h])[0]), (e = l[1])),
                                                                    c < u && ((u = (l = [c, u])[0]), (c = l[1])),
                                                                    m(t, u, c, h, e) && _(t, f, d, n, i, a, s));
                                                            })(n, r, a, l, i.x - s[0][0] - a / 2, i.y - s[1][0] - l / 2, d, t),
                                                                (o = n),
                                                                (a = e),
                                                                (s = i),
                                                                (l = d),
                                                                (e = t),
                                                                (r = (i = r).x + l * (e[0] || e[2]) - s.x),
                                                                (s = i.y + l * (e[1] || e[3]) - s.y),
                                                                a.translate({ x: r, y: s }),
                                                                o.importNodes(a.getNodes());
                                                            a = (function (t, e) {
                                                                for (var n, i = e.length, r = 0, o = 0; o < i; o++) {
                                                                    n = 0;
                                                                    for (var s, a, l, u, c, h = e[o], f = t[h.isn], d = 0; d < i; d++)
                                                                        h.isn != d &&
                                                                            ((c = e[d]),
                                                                            (s = f[c.isn]),
                                                                            (a = 0.5 / (s * s)),
                                                                            (l = h.x - c.x),
                                                                            (u = h.y - c.y),
                                                                            (c = Math.sqrt(Math.pow(l, 2) + Math.pow(u, 2))) && ((n += a * (l - (s * l) / c)), (n += a * (u - (s * u) / c))));
                                                                    r += Math.sqrt(Math.pow(n, 2) + Math.pow(0, 2));
                                                                }
                                                                return r;
                                                            })(u, n.getNodes().slice(0, p));
                                                            return { g: n, s: a, dir: t };
                                                        })
                                                        .reduce(function (t, e) {
                                                            return !t || (e && e.s < t.s) ? e : t;
                                                        }));
                                            if (i) {
                                                r = i.g;
                                                t = e.getRoot().id;
                                                return i.dir[2] || i.dir[3] || r.routes.addRoute(n, e.getRoot().id, i.dir[0], i.dir[1]), r.hash[n].links.push(r.hash[t]), void r.hash[t].links.push(r.hash[n]);
                                            }
                                            console.log("Can't position sub tree");
                                        }),
                                        (t = r)),
                                    t.setGlobalBox(),
                                    t
                                );
                            }),
                            i);
                    function i() {}
                    function h(t, e) {
                        var n = t.getNodes(),
                            i = 0;
                        return (
                            n.forEach(function (t, e) {
                                (t.isn = e), (i += t.w + t.h);
                            }),
                            (i = Math.round(i / (2 * n.length))),
                            e.itemPadding ? (i += e.itemPadding) : (i *= 2),
                            {
                                n: n,
                                mx: (function (t) {
                                    for (var e = [], n = t.getNodes(), i = 0; i < n.length; i++) {
                                        var r = (e[i] = []);
                                        (r[n[i].isn] = 0),
                                            (function (t, e, n, i) {
                                                for (var r = [t], o = []; r.length; ) {
                                                    for (var s = 0; s < r.length; s++)
                                                        for (var a = r[s], l = 0; l < a.links.length; l++) {
                                                            var u = a.links[l],
                                                                c = u.isn;
                                                            c == n || e[c] || ((e[c] = i), o.push(u));
                                                        }
                                                    i++, (r = o), (o = []);
                                                }
                                            })(n[i], r, i, 1);
                                    }
                                    return e;
                                })(t),
                                size: i,
                            }
                        );
                    }
                    function f(t, e) {
                        var n = (2 * Math.PI) / t.length,
                            i = 0,
                            r = 5 * e;
                        t.forEach(function (t, e) {
                            (t.x = Math.round(Math.cos(i) * r)), (t.y = Math.round(Math.sin(i) * r)), (i += n);
                        });
                    }
                    function d(t, e, n, i) {
                        for (var r = 0; r++ < 100; ) {
                            var o = (function (t, e, n, i) {
                                    for (var r, o, s = 0, a = 0, l = 0, u = 0, c = e.length, h = n.length, f = 0; f < h; f++) {
                                        o = r = 0;
                                        for (var d = n[f], p = t[d.isn], g = 0; g < c; g++)
                                            d.isn != g &&
                                                ((m = 0.5 / ((_ = p[(y = e[g]).isn]) * _)),
                                                (x = d.x - y.x),
                                                (b = d.y - y.y),
                                                (M = Math.sqrt(Math.pow(x, 2) + Math.pow(b, 2))) && ((r += m * (x - (i * _ * x) / M)), (o += m * (b - (i * _ * b) / M))));
                                        var v = Math.sqrt(Math.pow(r, 2) + Math.pow(o, 2));
                                        a < v && ((s = d.isn), (a = v), (l = r), (u = o));
                                    }
                                    for (var y, _, m, x, b, w, k, M, C, D = 0, O = 0, S = 0, E = e[s], P = t[s], g = 0; g < c; g++)
                                        s != g &&
                                            ((m = 0.5 / ((_ = P[(y = e[g]).isn]) * _)),
                                            (w = (x = E.x - y.x) * x),
                                            (k = (b = E.y - y.y) * b),
                                            (M = Math.sqrt(Math.pow(w + k, 3))) && ((D += m * (1 - (i * _ * k) / M)), (O += (m * i * _ * b * x) / M), (S += m * (1 - (i * _ * w) / M))));
                                    return [s, a, (C = (-l / D + (O * u) / (S * D)) / (1 + (O * O) / (S * D))), (-u - O * C) / S];
                                })(t, e, n, i),
                                s = o[0],
                                a = o[1],
                                l = o[2],
                                o = o[3];
                            if (a < 10) break;
                            (e[s].x += l), (e[s].y += o);
                        }
                    }
                    e.default = n;
                    var p = Math.PI / 4;
                    function g(t, e, n, i) {
                        for (;;) {
                            var r = e.links[0];
                            if ((r == t && (r = e.links[1]), (t = e), 2 < (e = r).links.length)) break;
                            for (
                                var o = Math.atan2(e.x - t.x, e.y - t.y) + Math.PI, s = 2 * Math.ceil(o / (2 * p)) * p, r = 2 * Math.floor(o / (2 * p)) * p, a = Math.abs(o - s) < Math.abs(o - r) ? [s, r] : [r, s], l = 0;
                                l < a.length;
                                l++
                            ) {
                                var u = v(t, e, a[l], i, t.x, t.y),
                                    c = u[0],
                                    h = u[1],
                                    f = u[2],
                                    u = u[3];
                                if (!n.hasRoute(t.id, f, u)) {
                                    if (n.isAligned(e.id)) return;
                                    (e.x += c), (e.y += h), n.addRoute(t.id, e.id, f, u);
                                    break;
                                }
                            }
                        }
                    }
                    function v(t, e, n, i, r, o) {
                        return n <= p || 7 * p < n
                            ? [t.x - e.x, s(t.y, e.y, o, i), 0, -1]
                            : n <= 3 * p && p < n
                            ? [s(t.x, e.x, r, i), t.y - e.y, -1, 0]
                            : n <= 5 * p && 3 * p < n
                            ? [t.x - e.x, s(t.y, e.y, o, i), 0, 1]
                            : [s(t.x, e.x, r, i), t.y - e.y, 1, 0];
                    }
                    function s(t, e, n, i) {
                        var r = a.sign(n - e);
                        return t - e - (Math.round((n - e) / i) || r) * i;
                    }
                    var y = [
                        [0, 1, 0, 0],
                        [1, 0, 0, 0],
                        [-1, 0, 0, 0],
                        [0, -1, 0, 0],
                    ].concat([
                        [0, 1, -1, 1],
                        [-1, 0, -1, 1],
                        [0, 1, 1, 1],
                        [1, 0, 1, 1],
                        [1, 0, 1, -1],
                        [0, -1, 1, -1],
                        [-1, 0, -1, -1],
                        [0, -1, -1, -1],
                    ]);
                    function _(t, e, n, i, r, o, s) {
                        t.getNodes().forEach(function (t) {
                            o[1] ? a.sign(t.y - n) == o[1] && (t.y += (r + s / 2) * o[1]) : o[0] && a.sign(t.x - e) == o[0] && (t.x += (i + s / 2) * o[0]);
                        });
                    }
                    function m(t, e, n, i, r) {
                        for (var o = t.getNodes(), s = 0; s < o.length; s++) {
                            var a = o[s];
                            if (a.x >= e && a.x <= n && a.y >= i && a.y <= r) return 1;
                        }
                    }
                    function x(t, e) {
                        (t = t.g.getNodes().length), (e = e.g.getNodes().length);
                        return e < t ? -1 : t === e ? 0 : 1;
                    }
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(32),
                        c = n(19),
                        n =
                            ((r.prototype.layout = function (t, e) {
                                t.root(t.toTree(t.hash[e.root]));
                                var n = t.getNodes();
                                (e.levelPadding = e.levelPadding || this._getStep(n)),
                                    (e.itemPadding = e.itemPadding || this._getStep(n)),
                                    (e.dir = e.dir || i.Direction.Bottom),
                                    (e.rotate = e.dir === i.Direction.Right || e.dir === i.Direction.Left);
                                n = i.DirVectors[e.dir];
                                this._layout(t, e), t.setBox(), e.dir !== i.Direction.Bottom && t.rotate(n);
                                n = t.getBox();
                                return t.translate({ x: -1 * n[0][0], y: -1 * n[1][0] }), t.setBox(), t;
                            }),
                            (r.prototype._layout = function (e, n) {
                                var i = this,
                                    t = e.getRoot();
                                if (((t.x = t.y = 0), 1 == e.getLevels().length)) return (e._symmetry = !0), "0";
                                var r = t.kids.map(function (t) {
                                        return new c.default(e, t, n);
                                    }),
                                    s = {};
                                r.forEach(function (t) {
                                    var e = i._layout(t, n);
                                    s[e] ? s[e].push(t) : (s[e] = [t]);
                                });
                                for (
                                    var o = Object.keys(s).sort(function (t, e) {
                                            var n = s[t][0],
                                                i = s[e][0],
                                                r = n._width,
                                                o = i._width;
                                            if (o < r) return -1;
                                            if (r < o) return 1;
                                            (n = n.getLevels().length), (i = i.getLevels().length);
                                            return !(i < n) && (n < i || t < e) ? 1 : -1;
                                        }),
                                        a = 0,
                                        l = 0,
                                        u = 0;
                                    u < o.length;
                                    u++
                                )
                                    s[o[u]].length % 2 == 1 && (a++, (l = u));
                                (t = !1), (r = !1);
                                return 1 == a ? (s[o[l]][0]._symmetry && (r = !0), (t = !0), 0 !== l && (o.unshift(o[l]), o.splice(l + 1, 1))) : 0 === a && (r = !0), (e._symmetry = r), this._layout_place(e, s, o, t, n), e.getIString();
                            }),
                            (r.prototype._layout_place = function (v, t, e, y, _) {
                                for (var m = { x: 0, y: _.levelPadding }, x = !0, n = 0; n < e.length; n++)
                                    t[e[n]].forEach(function (t) {
                                        if (y) {
                                            (y = !1), t.translate(m);
                                            for (var e = 0, n = 0, i = t.getLevelBounds(), r = 0; r < i.length; r++) {
                                                var o = i[r],
                                                    s = o[0],
                                                    o = o[1];
                                                (v._bounds[r + 1] = [s, o]), s < e && (e = s), n < o && (n = o);
                                            }
                                            v._tbounds = [e, n];
                                        } else {
                                            var a = x ? 1 : 0,
                                                l = x ? 0 : 1;
                                            x && t.mirror();
                                            for (var u = void 0, c = void 0, c = (u = 999999 * (x ? -1 : 1)), h = _.itemPadding, f = 0; f < t._bounds.length; f++) {
                                                var d = v.getBounds(f + 1, h, _.wide)[a] - t.getBounds(f, h, _.wide)[l];
                                                ((x && c < d) || (!x && d < c)) && (c = d);
                                            }
                                            t.translate({ x: c, y: m.y });
                                            for (var p = 0; p < v._bounds.length; p++) {
                                                var g = void 0,
                                                    g = 0 == p || p > t._bounds.length ? v._bounds[p][a] : (v._bounds[p][a] = t._bounds[p - 1][a]);
                                                ((x && u < g) || (!x && g < u)) && (u = g);
                                            }
                                            (v._tbounds[a] = u), (x = !x);
                                        }
                                    });
                            }),
                            (r.prototype._getStep = function (t) {
                                var e, n;
                                return (
                                    0 === this._step &&
                                        ((e = t.length),
                                        (n = 0),
                                        t.forEach(function (t) {
                                            return (n += t.w + t.h);
                                        }),
                                        (this._step = n / e)),
                                    this._step
                                );
                            }),
                            r);
                    function r() {
                        this._step = 0;
                    }
                    e.default = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(33),
                        r = [1, 2, 4, 8, 0, 16, 32, 64, 128],
                        n =
                            ((o.prototype.getRoute = function (t, e) {
                                t = this._map[t];
                                return (t && t.map[e]) || null;
                            }),
                            (o.prototype.addRoute = function (t, e, n, i) {
                                this.addPath(t, e, n, i), this.addPath(e, t, -n, -i);
                            }),
                            (o.prototype.hasRoute = function (t, e, n) {
                                t = this._map[t];
                                return !!t && 0 < (t.dir & this._code(e, n));
                            }),
                            (o.prototype.isAligned = function (t) {
                                return !!this._map[t];
                            }),
                            (o.prototype.isAxisAligned = function (t, e, n) {
                                var i,
                                    r = this._map[t];
                                if (!r) return null;
                                for (i in r.map) {
                                    var o = r.map[i];
                                    if ((e && o.dy) || (n && o.dx)) return !1;
                                }
                                return !0;
                            }),
                            (o.prototype.addPath = function (t, e, n, i, r) {
                                var o = this._map[t];
                                ((o = o || (this._map[t] = { map: {}, dir: 0 })).map[e] = { dx: n, dy: i, points: r }), (o.dir = o.dir | this._code(n, i));
                            }),
                            (o.prototype._code = function (t, e) {
                                return r[i.sign(t) + 1 + 3 * (i.sign(e) + 1)];
                            }),
                            o);
                    function o() {
                        this._map = {};
                    }
                    e.default = n;
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 });
                    var i = n(19);
                    function a(t, e) {
                        var n = new i.default();
                        return n.importNodes(t), { g: n, root: e };
                    }
                    e.split = function (n) {
                        var t = n.getNodes();
                        if (t.length < 3) return [{ g: n }];
                        for (var e = t[0], i = [], r = t.length + 1; r != t.length; )
                            (r = t.length),
                                (t = t.filter(function (e) {
                                    if (1 != e.links.length) return !0;
                                    var t = n.hash[e.links[0].id];
                                    return (
                                        t &&
                                            (t.links = t.links.filter(function (t) {
                                                return t.id != e.id;
                                            })),
                                        i.push(e),
                                        !1
                                    );
                                }));
                        if (t.length < 2)
                            return (
                                i
                                    .filter(function (t) {
                                        return 0 < t.links.length;
                                    })
                                    .forEach(function (t) {
                                        t.links[0].links.push(t);
                                    }),
                                n.root(n.toTree(e)),
                                [{ g: n }]
                            );
                        var o = {};
                        return (
                            i.forEach(function (t) {
                                return (o[t.id] = t);
                            }),
                            (e = i
                                .filter(function (t) {
                                    return !o[t.links[0].id];
                                })
                                .map(function (t) {
                                    return [t];
                                })),
                            i.forEach(function (t) {
                                var e = o[t.links[0].id];
                                e && e.links.push(t);
                            }),
                            (e = e.map(function (t) {
                                for (var e, n = 0; (e = t[n++]); ) {
                                    var i = e.links.length;
                                    if (1 < i)
                                        for (var r = 1; r < i; r++) {
                                            var o = e.links[r];
                                            t.push(o);
                                        }
                                }
                                var s = t[0].links.splice(0, 1)[0].id;
                                return a(t, s);
                            })),
                            [a(t, null)].concat(e)
                        );
                    };
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        (e.compose = function (t, i) {
                            if (t.length < 2) return t[0] || null;
                            var r = t[0].getBox(),
                                o = i.padding,
                                e = t.reduce(function (t, e) {
                                    var n = e.getBox();
                                    return e.translate({ x: r[0][1] - n[0][0] + o, y: r[1][0] - n[1][0] }), t.importNodes(e.getNodes()), (o += i.padding + n[0][1] - n[0][0]), t;
                                });
                            return t.length && e.setGlobalBox(), e;
                        });
                },
                function (t, e, n) {
                    "use strict";
                    Object.defineProperty(e, "__esModule", { value: !0 }),
                        (e.decompose = function (n) {
                            for (
                                var i = [],
                                    t = function () {
                                        var e = {},
                                            t = n.getNodes();
                                        if (!t.length) return { value: i };
                                        !(function e(t, n) {
                                            n[t.id] = 1;
                                            t.links.forEach(function (t) {
                                                n[t.id] || e(t, n);
                                            });
                                        })(t[0], e);
                                        t = n.split(function (t) {
                                            return !e[t.id];
                                        });
                                        if ((i.push(n), !t)) return { value: i };
                                        n = t;
                                    };
                                ;

                            ) {
                                var e = t();
                                if ("object" == typeof e) return e.value;
                            }
                        });
                },
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                ,
                function (t, e, n) {
                    n(40), n(41), n(42), n(43), n(44), (t.exports = n(95));
                },
                function (t, r, e) {
                    "use strict";
                    Object.defineProperty(r, "__esModule", { value: !0 }), e(96);
                    var n = e(35);
                    r.Diagram = n.Diagram;
                    n = e(0);
                    r.awaitRedraw = n.awaitRedraw;
                    (n = e(3)), (e = window);
                    (r.i18n = e.dhx && e.dhx.i18n ? e.dhx.i18 : {}),
                        (r.i18n.setLocale = function (t, e) {
                            var n,
                                i = r.i18n[t];
                            for (n in e) i[n] = e[n];
                        }),
                        (r.i18n.diagram = r.i18n.diagram || n.default);
                },
                function (t, e, n) {},
            ]),
            (r.c = i),
            (r.d = function (t, e, n) {
                r.o(t, e) || Object.defineProperty(t, e, { enumerable: !0, get: n });
            }),
            (r.r = function (t) {
                "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(t, "__esModule", { value: !0 });
            }),
            (r.t = function (e, t) {
                if ((1 & t && (e = r(e)), 8 & t)) return e;
                if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                var n = Object.create(null);
                if ((r.r(n), Object.defineProperty(n, "default", { enumerable: !0, value: e }), 2 & t && "string" != typeof e))
                    for (var i in e)
                        r.d(
                            n,
                            i,
                            function (t) {
                                return e[t];
                            }.bind(null, i)
                        );
                return n;
            }),
            (r.n = function (t) {
                var e =
                    t && t.__esModule
                        ? function () {
                              return t.default;
                          }
                        : function () {
                              return t;
                          };
                return r.d(e, "a", e), e;
            }),
            (r.o = function (t, e) {
                return Object.prototype.hasOwnProperty.call(t, e);
            }),
            (r.p = "/codebase/"),
            r((r.s = 94))
        );
        function r(t) {
            if (i[t]) return i[t].exports;
            var e = (i[t] = { i: t, l: !1, exports: {} });
            return n[t].call(e.exports, e, e.exports, r), (e.l = !0), e.exports;
        }
        var n, i;
    }),
    window.dhx_legacy)
) {
    if (window.dhx) for (var key in dhx) dhx_legacy[key] = dhx[key];
    (window.dhx = dhx_legacy), delete window.dhx_legacy;
}
//# sourceMappingURL=diagram.js.map
