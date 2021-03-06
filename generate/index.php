<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">    


    <title>Gallery</title>


    <link href="http://dimsemenov.com/plugins/royal-slider/royalslider/royalslider.css" rel="stylesheet">
    <script src="http://dimsemenov.com/plugins/royal-slider/royalslider/jquery-1.8.3.min.js"></script>
    <script src="http://dimsemenov.com/plugins/royal-slider/royalslider/jquery.royalslider.min.js?v=9.3.6"></script>
    <link href="http://dimsemenov.com/plugins/royal-slider/preview-assets/css/reset.css?v=1.0.4" rel="stylesheet">
    <link href="http://dimsemenov.com/plugins/royal-slider/royalslider/skins/default-inverted/rs-default-inverted.css?v=1.0.4" rel="stylesheet">



    
    <style>
      #gallery-t-group {
  width: 100%;
  -webkit-user-select: none;
  -moz-user-select: none;  
  user-select: none;
}
.rsDefaultInv,
.rsDefaultInv .rsOverflow,
.rsDefaultInv .rsSlide,
.rsDefaultInv .rsVideoFrameHolder,
.rsDefaultInv .rsThumbs {
  background: #eee;
}

#gallery-t-group .rsThumb {
  float: left;
  overflow: hidden;
  width: 56px;
  height: 56px;
  margin-right: 1px;
}
#gallery-t-group .rsThumbs {
  width: 285px;
  height: 100%;
  position: absolute;
  top: 0;
  padding: 0 0 0 1px;
  right: 0;
}
#gallery-t-group .rsGCaption {
  right: 285px;
  line-height: 12px;
  padding: 1px 7px;
  font-size: 11px;
  background: #EEE;
  position: absolute;
  width: auto;
  bottom: 0;
  float: none;
  text-align: left;
}
@media screen and (min-width: 0px) and (max-width: 1200px) {  
  #gallery-t-group .rsThumbs {
    width: 228px;
  }
  #gallery-t-group .rsGCaption {
    right: 228px;
  }
}
@media screen and (min-width: 0px) and (max-width: 760px) {  
  #gallery-t-group .rsThumbs {
    left: 0;
    position: relative;
    width: 100%;
    height: auto;
    padding: 1px 0 0 1px;
  }
  #gallery-t-group .rsThumbsContainer {
    height: auto !important;
  }
  #gallery-t-group .rsGCaption { 
    right: 0;
  }

}

.royalSlider img {
    height: 100%;
    width: auto;
    margin: auto;
    display: -webkit-box;
}

    </style>
    
  </head>
  <body >
  <header  id="main-header" class="clearfix">  
    <div  class="page wrapper"> 
       <div class="col span_6">
         
       </div>
    </div>
  </header>
  <div  class="page wrapper main-wrapper">  

<div class="row clearfix">
  <div class="fwImage col span_6">
<div id="gallery-t-group" class="royalSlider rsDefaultInv">
  <?php

  if (!empty($_GET['site'])) {
    $load = $_GET['site'];
  } else {
    $load = "New Work";
  }


  // The directory we want to load
          $root = "USER-FILES/";
          $location = "/var/www/html/luke/demo.luke.sx/gillian-allard.com/USER-FILES/";
          $countLocation = strlen($location);
          // Displays
          $files = glob($location . $load ."/*.*");


          // creates the for loop that counts each photos
          for ($i=0; $i < count($files); $i++)
          {
            // sets num to the file number
            $num = $files[$i];

              if(isset($files[$i])){

                $str = $num;
                $str2 = substr($num, $countLocation); // "quick brown fox jumps over the lazy dog." 

                // loads the image
echo "
<a class='rsImg' href='http://gillian-allard.com/USER-FILES/" . $str2 . "'><img class='rsTmb' width='56' height='56' src='http://gillian-allard.com/USER-FILES/" . $str2 . "' alt='Image' />" . "</a>";

                $photocounter++;
              }
          }
              echo " 


              ";
  ?>
</div>
  </div>
</div>
  
    <script>
      jQuery(document).ready(function() {
  var win = $(window);
  var slider = $('#gallery-t-group').royalSlider({
    controlNavigation: 'thumbnails',
    thumbs: {
      orientation: 'vertical',
      navigation: false,
      fitInViewport: (win.width() < 760) ? false : true,
      spacing: 1,
      autoCenter: false
    },
    deeplinking: {
      enabled: true,
      change: true,
      prefix: 'image-'
    },
    fullscreen: {
      enabled: true,
      nativeFS: false
    },
    globalCaption: false,
    numImagesToPreload: 2,
    fadeinLoadedSlide: false,
    imageAlignCenter: false,
    imageScaleMode: 'none',
    transitionType:'fade',
    autoScaleSlider: false, 
    autoScaleSliderWidth: 900,     
    autoScaleSliderHeight: 400,
    arrowsNav:true,
    arrowsNavAutoHide: true,
    arrowsNavHideOnTouch: true,
    keyboardNavEnabled: true,
    loop: true,
    imgWidth: 792,
    imgHeight: 479
  }).data('royalSlider');

  win.resize(function() {
    if(win.width() < 760) {
      slider.st.thumbs.fitInViewport = false;
    } else {
      slider.st.thumbs.fitInViewport = true;
    }
  });
  $('#btn').click(function() {
    console.log('click');
    return false;
  });
});

    </script>
  

  
  <div style="display:none;"><script type="text/javascript">
  (function(w, c) {
      (w[c] = w[c] || []).push(function() {
          try {
              w.yaCounter11382601 = new Ya.Metrika({id:11382601, enableAll: true, trackHash:false, webvisor:true});
          }
          catch(e) { }
      });
  })(window, "yandex_metrika_callbacks");
  </script></div>
  <script type="text/javascript">
(function(f, g, M) {
    var V;

    function G(a, b) {
        return function() {
            try {
                return a.apply(this, arguments)
            } catch (c) {
                na(c, b)
            }
        }
    }

    function na(a, b) {
        if (0.01 > Math.random()) try {
            (new P).log("jserrs", ea, a.message, b, A.href, oa, "string" == typeof a.stack && a.stack.replace(/\n/g, "\\n"))
        } catch (c) {
            var d = ["cp: " + b, a.name + ": " + a.message, "debug: " + oa, "code: " + ea, "stack: " + a.stack];
            (new Image).src = "//an.yandex.ru/jserr/101500?cnt-class=100&errmsg=" + encodeURIComponent(d.join("; ").replace(/\r?\n/g, "\\n"))
        }
    }

    function R(a, b, c) {
        return f.setTimeout(G(a,
            c || "setTimeout"), b)
    }

    function w() {
        for (var a = {}, b = "hash host hostname href pathname port protocol search".split(" "), c = b.length, d = c; d--;) a[b[d]] = "";
        try {
            for (var e = f.location, d = c; d--;) {
                var t = b[d];
                a[t] = "" + e[t]
            }
        } catch (h) {
            A && (a = A)
        }
        return a
    }

    function jb(a) {
        return a ? ("" + a).replace(/^\s+/, "").replace(/\s+$/, "") : ""
    }

    function fa(a) {
        return -1 !== ("" + f.navigator.userAgent).toLowerCase().search(a)
    }

    function pa(a, b) {
        if (!a || !b) return !1;
        for (var c = [], d = 0; d < b.length; d++) c.push(b[d].replace(/\^/g, "\\^").replace(/\$/g, "\\$").replace(/\./g,
            "\\.").replace(/\[/g, "\\[").replace(/\]/g, "\\]").replace(/\|/g, "\\|").replace(/\(/g, "\\(").replace(/\)/g, "\\)").replace(/\?/g, "\\?").replace(/\*/g, "\\*").replace(/\+/g, "\\+").replace(/\{/g, "\\{").replace(/\}/g, "\\}"));
        return RegExp("\\.(" + c.join("|") + ")$", "i").test(a)
    }

    function Ja(a) {
        a = a.target || a.srcElement;
        if (!a) return !1;
        3 == a.nodeType && (a = a.parentNode);
        for (var b = a.nodeName.toString().toLowerCase(); a.parentNode && a.parentNode.nodeName && ("a" != b && "area" != b || !a.href);) a = a.parentNode, b = a.nodeName.toString().toLowerCase();
        return a.href ? a : !1
    }

    function Ka(a, b) {
        return (a ? a.replace(/^www\./, "") : "") == (b ? b.replace(/^www\./, "") : "")
    }

    function La(a, b) {
        function c(a) {
            a = a.split(":");
            a = a[1] || "";
            a = a.replace(/^\/*/, "").replace(/^www\./, "");
            return a.split("/")[0]
        }
        return a && b ? c(a) == c(b) : a || b ? !1 : !0
    }

    function qa() {
        var a = f.performance || f.webkitPerformance,
            b = [];
        if (a = a && a.timing) {
            var c = a.navigationStart;
            if (c)
                for (b = [a.domainLookupEnd - a.domainLookupStart, a.connectEnd - a.connectStart, a.responseStart - a.requestStart, a.responseEnd - a.responseStart,
                        a.fetchStart - c, a.redirectEnd - a.redirectStart, a.redirectCount
                    ], b.push(a.domInteractive && a.domLoading ? a.domInteractive - a.domLoading : null), b.push(a.domContentLoadedEventStart && a.domContentLoadedEventEnd ? a.domContentLoadedEventEnd - a.domContentLoadedEventStart : null), b.push(a.domComplete ? a.domComplete - c : null), b.push(a.loadEventStart ? a.loadEventStart - c : null), b.push(a.loadEventStart && a.loadEventEnd ? a.loadEventEnd - a.loadEventStart : null), b.push(a.domContentLoadedEventStart ? a.domContentLoadedEventStart - c : null),
                    a = 0; a < b.length; a++) c = b[a], null !== c && (0 > c || 36E5 < c) && (b[a] = null)
        }
        return b
    }

    function Ma(a) {
        var b = [],
            c = a._lastPerformanceTiming,
            d = qa();
        if (c)
            for (var e = 0, f = c.length; e < f; e++) null === d[e] ? b.push(d[e]) : b.push(c[e] === d[e] ? "" : d[e]);
        else b = d;
        a._lastPerformanceTiming = d;
        return b.join(",")
    }

    function Na() {
        var a;
        if ("object" == typeof f.chrome && f.chrome.loadTimes) {
            if (a = f.chrome.loadTimes(), a.requestTime && a.firstPaintTime) return~~ (1E3 * (a.firstPaintTime - a.requestTime))
        } else if (f.performance && f.performance.timing && (a = f.performance.timing,
            a.navigationStart && a.msFirstPaint)) return a.msFirstPaint - a.navigationStart;
        return null
    }

    function Oa(a) {
        var b = g.referrer || "";
        if (RegExp("^https?://" + A.host + "/").test(b)) return !1;
        for (var c = a.patterns, d = 0; d < c.length; d++)
            if (b.match(RegExp(c[d], "i"))) {
                var e = a.params || [];
                if (e.length)
                    for (var f = T((RegExp.$1 || "").replace(/\+/g, "%20")), h = 0; h < e.length; h++) {
                        if (f == T(e[h])) return !0
                    } else return !0
            }
        return !1
    }

    function ra(a, b) {
        var c = !1;
        if (a && "string" != typeof a && a.length)
            for (var d = 0; d < a.length; d++) {
                var e = a[d].selector,
                    f = a[d].text,
                    h = e.charAt(0),
                    e = e.slice(1);
                if ("#" == h) {
                    if (h = g.getElementById(e)) c = !0, b && N.unshift([h, h.innerHTML]), h.innerHTML = f
                } else if ("." == h)
                    for (h = n.getElementsByClassName(e), e = 0; e < h.length; e++) {
                        var c = !0,
                            l = h[e],
                            k = f;
                        b && N.unshift([l, l.innerHTML]);
                        l.innerHTML = k
                    }
            }
        return c
    }

    function ta() {
        for (var a = 0; a < N.length; a++) N[a][0].innerHTML = N[a][1]
    }

    function Pa(a, b) {
        a = a && a.replace(/^\?/, "");
        b = b && b.replace(/^#/, "");
        var c = "";
        if (a)
            for (var d = a.split("&"), e = 0; e < d.length; e++) {
                var f = d[e].split("=");
                "_openstat" == f[0] && (c =
                    f[1])
            }
        b && 0 == b.indexOf("_openstat=") && (c = b.slice(10));
        c && (c = -1 < c.indexOf(";") ? T(c) : Qa(c.replace(/[-*_]/g, function(a) {
            return {
                "*": "+",
                "-": "/",
                _: "="
            }[a] || a
        })));
        return c && (c = c.split(";"), 4 == c.length) ? {
            service: c[0],
            campaign: c[1],
            ad: c[2],
            source: c[3]
        } : null
    }

    function T(a) {
        try {
            return decodeURIComponent(a)
        } catch (b) {
            return ""
        }
    }

    function Qa(a) {
        for (; a.length % 4;) a += "=";
        var b, c, d, e, f, h = 0,
            g = "";
        do {
            b = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(h++));
            c = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(h++));
            e = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(h++));
            f = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=".indexOf(a.charAt(h++));
            if (0 > b || 0 > c || 0 > e || 0 > f) return null;
            d = b << 18 | c << 12 | e << 6 | f;
            b = d >> 16 & 255;
            c = d >> 8 & 255;
            d &= 255;
            g = 64 == e ? g + String.fromCharCode(b) : 64 == f ? g + String.fromCharCode(b, c) : g + String.fromCharCode(b, c, d)
        } while (h < a.length);
        a = g;
        e = "";
        for (b = g = h = f = 0; f < a.length;) h = a.charCodeAt(f), 128 > h ? (e += String.fromCharCode(h), f++) : 191 < h && 224 > h ? (g = a.charCodeAt(f +
            1), e += String.fromCharCode((h & 31) << 6 | g & 63), f += 2) : (g = a.charCodeAt(f + 1), b = a.charCodeAt(f + 2), e += String.fromCharCode((h & 15) << 12 | (g & 63) << 6 | b & 63), f += 3);
        return e
    }

    function ua(a) {
        try {
            delete f[a]
        } catch (b) {
            f[a] = M
        }
    }

    function va(a) {
        var b = g.createElement("script");
        b.type = "text/javascript";
        b.async = !0;
        b.src = a;
        try {
            var c = g.getElementsByTagName("html")[0];
            g.getElementsByTagName("head")[0] || c.appendChild(g.createElement("head"));
            var d = g.getElementsByTagName("head")[0];
            d.insertBefore(b, d.firstChild)
        } catch (e) {}
    }

    function Ra(a,
        b, c, d, e, t) {
        function h(a) {
            var b = (new Date).getTime();
            a && b < a && (Sa += a - b + S);
            R(function() {
                h(b)
            }, S, "timeCorrector")
        }

        function sa() {
            var a = (new Date).getTime() + Sa;
            a < Ta && (a = Ta + S / 2);
            return Ta = a
        }

        function v() {
            return Math.round((sa() - ib) / W)
        }

        function s(a, b) {
            b = Math.max(0, Math.min(b, 65535));
            l.mergeArrays(a, [b >> 8, b & 255])
        }

        function p(a, b) {
            l.mergeArrays(a, [b & 255])
        }

        function m(a, b) {
            for (b = Math.max(0, b | 0); 127 < b;) l.mergeArrays(a, [b & 127 | 128]), b >>= 7;
            l.mergeArrays(a, [b])
        }

        function u(a, b) {
            255 < b.length && (b = b.substr(0, 255));
            l.mergeArrays(a, [b.length]);
            for (var c = 0; c < b.length; c++) s(a, b.charCodeAt(c))
        }

        function r(a, b) {
            m(a, b.length);
            for (var c = 0; c < b.length; c++) m(a, b.charCodeAt(c))
        }

        function A(a, b, c, d, e, f) {
            for (; c && (!c.offsetWidth || !c.offsetHeight);) c = n.getElementParent(c);
            if (!c) return null;
            var g = c[B];
            if (!g || 0 > g) return null;
            var h = {
                mousemove: ca,
                click: Ha,
                dblclick: Ia,
                mousedown: fa,
                mouseup: Fa,
                touch: na
            }[b];
            if (!h) return null;
            var t = n.getElementXY(c);
            c = [];
            p(c, h);
            m(c, a);
            m(c, g);
            m(c, Math.max(0, d[0] - t[0]));
            m(c, Math.max(0, d[1] - t[1]));
            /^mouse(up|down)|click$/.test(b) &&
                (a = e || f, p(c, 2 > a ? Ja : a == (e ? 2 : 4) ? La : Ka));
            return c
        }

        function G(a, b, c, d) {
            b = b[B];
            if (!b || 0 > b) return null;
            var e = [];
            p(e, Ga);
            m(e, a);
            m(e, b);
            m(e, c[0]);
            m(e, c[1]);
            p(e, 0);
            p(e, 0);
            p(e, d);
            return e
        }

        function F(a, b) {
            var c = [];
            p(c, da);
            m(c, a);
            m(c, b[0]);
            m(c, b[1]);
            return c
        }

        function D(a, b, c) {
            var d = [];
            c = c[B];
            if (!c || 0 > c) return null;
            p(d, ea);
            m(d, a);
            m(d, b[0]);
            m(d, b[1]);
            m(d, c);
            return d
        }

        function C(a, b, c) {
            var d = [];
            p(d, Da);
            m(d, a);
            m(d, b[0]);
            m(d, b[1]);
            m(d, c[0]);
            m(d, c[1]);
            return d
        }

        function J(a, b, c, d) {
            var e = [];
            p(e, ia);
            m(e, a);
            s(e, b);
            p(e,
                c);
            a = d[B];
            if (!a || 0 > a) a = 0;
            m(e, a);
            return e
        }

        function E(a, b) {
            var c, d;
            0 == b.length ? d = c = "" : 100 >= b.length ? (c = b, d = "") : 200 >= b.length ? (c = b.substr(0, 100), d = b.substr(100)) : (c = b.substr(0, 97), d = b.substr(b.length - 97));
            var e = [];
            p(e, Ea);
            m(e, a);
            r(e, c);
            r(e, d);
            return e
        }

        function U(a) {
            var b = [];
            p(b, va);
            m(b, a);
            return b
        }

        function z(a) {
            var b = [];
            p(b, pa);
            m(b, a);
            return b
        }

        function Q(a) {
            var b = [];
            p(b, qa);
            m(b, a);
            return b
        }

        function Z(a, b) {
            var c = [];
            p(c, ra);
            m(c, a);
            m(c, b[B]);
            return c
        }

        function Bb(a, b) {
            var c = [];
            p(c, ta);
            m(c, a);
            m(c, b[B]);
            return c
        }

        function $(a, b, c) {
            var d = [];
            p(d, ua);
            m(d, a);
            m(d, b[B]);
            u(d, String(c));
            return d
        }

        function X(a) {
            var b = a[B];
            if (!b || 0 > b || !/^INPUT|SELECT|TEXTAREA$/.test(a.nodeName) || !a.form || n.classNameExists(a.form, "-metrika-noform")) return null;
            var c = n.getFormNumber(a.form);
            if (0 > c) return null;
            var d;
            d = "INPUT" == a.nodeName ? {
                text: 0,
                color: 0,
                date: 0,
                datetime: 0,
                "datetime-local": 0,
                email: 0,
                number: 0,
                range: 0,
                search: 0,
                tel: 0,
                time: 0,
                url: 0,
                month: 0,
                week: 0,
                password: 2,
                radio: 3,
                checkbox: 4,
                file: 6,
                image: 7
            }[a.type] : {
                SELECT: 1,
                TEXTAREA: 5
            }[a.nodeName];
            if ("number" != typeof d) return null;
            for (var e = -1, f = a.form.elements, g = f.length, h = 0, t = 0; h < g; h++)
                if (f[h].name == a.name) {
                    if (f[h] == a) {
                        e = t;
                        break
                    }
                    t++
                }
            if (0 > e) return null;
            f = [];
            p(f, ja);
            m(f, b);
            m(f, c);
            m(f, d);
            r(f, a.name || "");
            m(f, e);
            return f
        }

        function x(a, b) {
            var c = n.getFormNumber(b);
            if (0 > c) return null;
            for (var d = b.elements, e = d.length, f = [], g = 0; g < e; g++)
                if (!n.isEmptyField(d[g])) {
                    var h = d[g][B];
                    h && 0 < h && l.mergeArrays(f, [h])
                }
            d = [];
            p(d, ma);
            m(d, a);
            m(d, c);
            m(d, f.length);
            for (c = 0; c < f.length; c++) m(d, f[c]);
            return d
        }

        function H() {
            var a = [];
            p(a, oa);
            return a
        }

        function q(a, b, c) {
            a = a.apply(f, b);
            K.append(a, c)
        }

        function y(a) {
            if (a[B]) a: {
                var b = v(),
                    c = a[B];
                if (0 < c) {
                    var d = [];
                    a = n.getElementRegion(a);
                    var e = wa[c],
                        f = a[0] + "x" + a[1],
                        g = a[2] + "x" + a[3];
                    f != e.pos && (e.pos = f, p(d, ka), m(d, b), m(d, c), m(d, a[0]), m(d, a[1]));
                    g != e.size && (e.size = g, p(d, la), m(d, b), m(d, c), m(d, a[2]), m(d, a[3]));
                    if (d.length) {
                        a = d;
                        break a
                    }
                }
                a = null
            } else {
                (c = n.getElementParent(a)) && y(c);
                a[B] = Ua;
                wa[Ua] = {};
                Ua++;
                if (a.nodeName)
                    if (c = +a[B], !isFinite(c) || 0 >= c) b = null;
                    else {
                        var d = Pa,
                            e = 0,
                            h = n.getElementParent(a),
                            f = h && h[B] ? h[B] : 0;
                        0 > f && (f = 0);
                        var g = a.nodeName.toUpperCase(),
                            t = hb[g];
                        t || (d |= Ma);
                        var x = n.getElementNeighborPosition(a);
                        x || (d |= Na);
                        var l = n.getElementRegion(a);
                        (h = h ? n.getElementRegion(h) : null) && l[0] == h[0] && l[1] == h[1] && l[2] == h[2] && l[3] == h[3] && (d |= kb);
                        wa[c].pos = l[0] + "x" + l[1];
                        wa[c].size = l[2] + "x" + l[3];
                        a.id && "string" == typeof a.id && (d |= lb);
                        (h = n.calcTextChecksum(a)) && (d |= Oa);
                        var k = n.calcAttribChecksum(a);
                        k && (e |= Qa);
                        var q;
                        b: {
                            q = n.getElementChildren(n.getElementParent(a), a.tagName);
                            for (var H = 0; H < q.length; H++)
                                if ((!q[H].id ||
                                    "string" != typeof q[H].id) && n.calcAttribChecksum(q[H]) == k && n.calcTextChecksum(q[H]) == h) {
                                    q = !0;
                                    break b
                                }
                            q = !1
                        }
                        q && (d |= mb, b = n.calcChildrenChecksum(a));
                        q = [];
                        p(q, ba);
                        m(q, c);
                        p(q, d);
                        m(q, f);
                        t ? p(q, t) : u(q, g);
                        x && m(q, x);
                        d & kb || (m(q, l[0]), m(q, l[1]), m(q, l[2]), m(q, l[3]));
                        d & lb && u(q, a.id);
                        h && s(q, h);
                        d & mb && s(q, b);
                        p(q, e);
                        k && s(q, k);
                        b = q
                    } else a[B] = -1, b = null;
                K.append(b, void 0);
                a = X(a)
            }
            K.append(a, void 0)
        }

        function O(a) {
            var b = I.getTarget(a);
            if (b && "SCROLLBAR" != b.nodeName) {
                if (b && /^INPUT|SELECT|TEXTAREA|BUTTON$/.test(b.tagName))
                    if (b[B]) y(b);
                    else {
                        var c = b.form;
                        if (c)
                            for (var c = c.elements, d = c.length, e = 0; e < d; e++) /^INPUT|SELECT|TEXTAREA|BUTTON$/.test(c[e].tagName) && !c[e][B] && y(c[e]);
                        else y(b)
                    } else y(b);
                q(A, [v(), a.type, b, I.getPos(a), a.which, a.button])
            }
        }

        function nb(a) {
            O(a);
            a: {
                var b, c;
                f.getSelection ? (a = f.getSelection(), b = a.toString(), c = a.anchorNode) : g.selection && g.selection.createRange && (a = g.selection.createRange(), b = a.text, c = a.parentElement());
                if ("string" == typeof b) {
                    try {
                        for (; c && 1 != c.nodeType;) c = c.parentNode
                    } catch (d) {
                        break a
                    }
                    c && Va(c) || c && (/(?:^|\s)-metrika-nokeys(?:\s|$)/.test(c.className) ||
                        n.getElementsByClassName("-metrika-nokeys", c).length) || b == Wa || (Wa = b, q(E, [v(), b]))
                }
            }
        }

        function ob(a) {
            var b = sa(),
                c = b - pb;
            if (!(c < aa)) {
                var d = I.getPos(a),
                    e = Xa[0] - d[0],
                    f = Xa[1] - d[1],
                    e = e * e + f * f;
                0 >= e || 16 > e && 100 > c || 20 > c && 256 > e || (pb = b, Xa = d, O(a))
            }
        }

        function xa() {
            var a = n.getDocumentScroll(),
                b = sa();
            b - qb < aa || 10 > Math.abs(a[0] - Za[0]) && 10 > Math.abs(a[1] - Za[1]) || (qb = b, Za = a, q(F, [v(), a]))
        }

        function rb(a) {
            a = I.getTarget(a);
            var b = Math.random(),
                c = [a.scrollLeft, a.scrollTop];
            if (a.localId) {
                if (b = $a[a.localId], !b || 10 > Math.abs(c[0] -
                    b[0]) && 10 > Math.abs(c[1] - b[1])) return
            } else {
                for (; $a[b];) b = Math.random();
                a.localId = b
            }
            $a[a.localId] = c;
            a !== g && (y(a), q(D, [v(), c, a]))
        }

        function ab() {
            q(C, [v(), n.getViewportSize(), n.getDocumentSize()])
        }

        function ya() {
            q(H, [], !0)
        }

        function sb(a) {
            return (a.shiftKey ? tb : 0) | (a.ctrlKey ? bb : 0) | (a.altKey ? ub : 0) | (a.metaKey ? Ra : 0) | (a.ctrlKey || a.altKey ? za : 0)
        }

        function Va(a) {
            return "INPUT" == a.tagName ? "password" == a.type || a.name && vb.test(a.name) || a.id && vb.test(a.id) : !1
        }

        function wb(a, b, c) {
            a = I.getTarget(a);
            Va(a) || /(?:^|\s)-metrika-nokeys(?:\s|$)/.test(a.className) ||
                (y(a), q(J, [v(), b, c, a]))
        }

        function xb(a) {
            var b = a.keyCode,
                c = sb(a);
            if ({
                3: 1,
                8: 1,
                9: 1,
                13: 1,
                16: 1,
                17: 1,
                18: 1,
                19: 1,
                20: 1,
                27: 1,
                33: 1,
                34: 1,
                35: 1,
                36: 1,
                37: 1,
                38: 1,
                39: 1,
                40: 1,
                45: 1,
                46: 1,
                91: 1,
                92: 1,
                93: 1,
                106: 1,
                110: 1,
                111: 1,
                144: 1,
                145: 1
            }[b] || 112 <= b && 123 >= b || 96 <= b && 105 >= b || c & za) 19 == b && (c & ~za) == bb && (b = 144), wb(a, b, c | za), cb = !1, R(function() {
                cb = !0
            }, 1), 67 == b && c & bb && !(c & ub || c & tb) && db()
        }

        function yb(a) {
            cb && !eb && 0 !== a.which && (wb(a, a.charCode || a.keyCode, sb(a)), eb = !0, R(function() {
                eb = !1
            }, 1))
        }

        function db() {
            fb || (fb = !0, Wa && q(U, [v()]), R(function() {
                fb = !1
            }, 1))
        }

        function gb() {
            ga || (ga = !0, q(z, [v()]))
        }

        function ha() {
            ga && (ga = !1, q(Q, [v()]))
        }

        function zb(a) {
            (!ga || a && !a.fromElement) && gb()
        }

        function L(a) {
            a && !a.toElement && ha()
        }

        function M(a) {
            if ((a = I.getTarget(a)) && /^INPUT|SELECT|TEXTAREA|BUTTON$/.test(a.tagName)) {
                if (a[B]) y(a);
                else {
                    var b = a.form;
                    if (b)
                        for (var b = b.elements, c = b.length, d = 0; d < c; d++) /^INPUT|SELECT|TEXTAREA|BUTTON$/.test(b[d].tagName) && !b[d][B] && y(b[d]);
                    else y(a)
                }
                q(Z, [v(), a])
            }
        }

        function V(a) {
            (a = I.getTarget(a)) && /^INPUT|SELECT|TEXTAREA|BUTTON$/.test(a.tagName) &&
                (y(a), q(Bb, [v(), a]))
        }

        function P(a) {
            a = I.getTarget(a);
            if (!(Va(a) || a && /(?:^|\s)-metrika-nokeys(?:\s|$)/.test(a.className)) && a && /^INPUT|SELECT|TEXTAREA$/.test(a.tagName)) {
                var b = /^(checkbox|radio)$/.test(a.type) ? a.checked : a.value;
                y(a);
                q($, [v(), a, b])
            }
        }

        function T(a) {
            a = I.getTarget(a);
            if (!n.classNameExists(a, "-metrika-noform") && "FORM" == a.nodeName) {
                for (var b = a.elements, c = 0; c < b.length; c++) n.isEmptyField(b[c]) || y(b[c]);
                q(x, [v(), a], !0)
            }
        }

        function N(a) {
            xa();
            if (a.touches && a.touches.length) {
                var b = I.getTarget(a);
                if (b &&
                    b != g) {
                    y(b);
                    for (var c = 0; c < a.touches.length; c++) q(A, [v(), "touch", b, [a.touches[c].pageX, a.touches[c].pageY], 0, 0])
                }
            }
        }

        function Y(a) {
            var b = I.getTarget(a);
            if (b) {
                var c;
                "wheel" == a.type ? c = 0 < a.deltaY ? 1 : 0 > a.deltaY ? 2 : 0 : "mousewheel" == a.type && (c = 0 < a.wheelDelta ? 2 : 0 > a.wheelDelta ? 1 : 0);
                c && (y(b), q(G, [v(), b, I.getPos(a), c]))
            }
        }
        var K = new Ab({
            protocol: a,
            counterId: b,
            counterType: c,
            meta: {
                url: w().href,
                hitId: e,
                timezone: Aa,
                timestamp: Ba
            }
        }),
            S = 20,
            W = 50,
            aa = 10,
            ba = 1,
            ca = 2,
            da = 3,
            ea = 16,
            fa = 4,
            ia = 5,
            ja = 7,
            ka = 9,
            la = 10,
            ma = 11,
            na = 12,
            oa = 13,
            pa = 14,
            qa =
                15,
            ra = 17,
            ta = 18,
            ua = 19,
            va = 27,
            Da = 28,
            Ea = 29,
            Fa = 30,
            Ga = 31,
            Ha = 32,
            Ia = 33,
            Ja = 1,
            Ka = 2,
            La = 4,
            mb = 1,
            Ma = 2,
            Na = 4,
            kb = 8,
            Oa = 16,
            lb = 32,
            Pa = 64,
            Qa = 2,
            ub = 1,
            tb = 2,
            bb = 4,
            Ra = 8,
            za = 16,
            hb = {
                A: 1,
                ABBR: 2,
                ACRONYM: 3,
                ADDRESS: 4,
                APPLET: 5,
                AREA: 6,
                B: 7,
                BASE: 8,
                BASEFONT: 9,
                BDO: 10,
                BIG: 11,
                BLOCKQUOTE: 12,
                BODY: 13,
                BR: 14,
                BUTTON: 15,
                CAPTION: 16,
                CENTER: 17,
                CITE: 18,
                CODE: 19,
                COL: 20,
                COLGROUP: 21,
                DD: 22,
                DEL: 23,
                DFN: 24,
                DIR: 25,
                DIV: 26,
                DL: 27,
                DT: 28,
                EM: 29,
                FIELDSET: 30,
                FONT: 31,
                FORM: 32,
                FRAME: 33,
                FRAMESET: 34,
                H1: 35,
                H2: 36,
                H3: 37,
                H4: 38,
                H5: 39,
                H6: 40,
                HEAD: 41,
                HR: 42,
                HTML: 43,
                I: 44,
                IFRAME: 45,
                IMG: 46,
                INPUT: 47,
                INS: 48,
                ISINDEX: 49,
                KBD: 50,
                LABEL: 51,
                LEGEND: 52,
                LI: 53,
                LINK: 54,
                MAP: 55,
                MENU: 56,
                META: 57,
                NOFRAMES: 58,
                NOSCRIPT: 59,
                OBJECT: 60,
                OL: 61,
                OPTGROUP: 62,
                OPTION: 63,
                P: 64,
                PARAM: 65,
                PRE: 66,
                Q: 67,
                S: 68,
                SAMP: 69,
                SCRIPT: 70,
                SELECT: 71,
                SMALL: 72,
                SPAN: 73,
                STRIKE: 74,
                STRONG: 75,
                STYLE: 76,
                SUB: 77,
                SUP: 78,
                TABLE: 79,
                TBODY: 80,
                TD: 81,
                TEXTAREA: 82,
                TFOOT: 83,
                TH: 84,
                THEAD: 85,
                TITLE: 86,
                TR: 87,
                TT: 88,
                U: 89,
                UL: 90,
                VAR: 91,
                NOINDEX: 100
            }, Sa = 0;
        h(0);
        var Ta = 0,
            Ua = 1,
            pb = 0,
            Xa = [0, 0],
            qb = 0,
            Za = [0, 0],
            $a = {}, vb = /^(password|passwd|pswd)$/,
            cb = !0,
            eb = !1,
            Wa = "",
            fb = !1,
            ga = !0,
            ib = sa(),
            B = "metrikaId_" + Math.random(),
            wa = {}, Ca = ":submit" + Math.random();
        if ("MetrikaPlayer" != f.name) {
            k.on(g, "mousemove", ob);
            k.on(g, "click,dblclick,mousedown", O);
            k.on(g, "mouseup", nb);
            k.on(f, "scroll", xa);
            if ("onmousewheel" in g) k.on(g, "mousewheel", Y);
            else k.on(g, "wheel", Y);
            k.on(f, "beforeunload", ya);
            if (!Cb) k.on(f, "unload", ya);
            k.on(f, "resize", ab);
            k.on(g, "keydown", xb);
            k.on(g, "keypress", yb);
            k.on(g, "copy", db);
            k.on(g, "touchmove,touchstart", N);
            g.attachEvent && !f.opera ? (k.on(g, "focusin", zb), k.on(g, "focusout",
                L)) : (k.on(f, "focus", gb), k.on(f, "blur", ha), k.on(g, "blur", ha));
            g.addEventListener ? (k.on(g, "scroll", rb), k.on(g, "focus", M), k.on(g, "blur", V), k.on(g, "change", P), k.on(g, "submit", T)) : g.attachEvent && (k.on(g, "focusin", M), k.on(g, "focusout", V), function() {
                for (var a = g.getElementsByTagName("form"), b = 0; b < a.length; b++) {
                    for (var c = a[b].getElementsByTagName("*"), d = 0; d < c.length; d++)
                        if (/^INPUT|SELECT|TEXTAREA$/.test(c[d].tagName)) k.on(c[d], "change", P);
                    k.on(a[b], "submit", T)
                }
            }());
            (function() {
                var a = g.getElementsByTagName("form");
                if (a.length)
                    for (var b = 0; b < a.length; b++) {
                        var c = a[b].submit;
                        if ("function" == typeof c || "object" == typeof c && /^\s*function submit\(\)/.test(String(c))) a[b][Ca] = c, a[b].submit = function() {
                            T({
                                target: this
                            });
                            return this[Ca]()
                        }
                    }
            })();
            "0:0" != n.getDocumentScroll().join(":") && xa();
            ab();
            t.uploadPage = function(d) {
                if ("function" == typeof f.toStaticHTML && -1 < f.toStaticHTML.toString().indexOf("NoScript")) return !1;
                var h = g.documentElement;
                if (h && 19E4 < ("" + h.innerHTML).length) return !1;
                var t = f.XMLHttpRequest ? new f.XMLHttpRequest :
                    new ActiveXObject("Msxml2.XMLHTTP"),
                    l = n.getDocumentCharset(),
                    h = "text/html" + (l ? ";charset=" + l : ""),
                    x = new Db({
                        protocol: a,
                        counterId: b,
                        counterType: c
                    });
                if ("html" == d) return d = RegExp("<script [^>]*?//mc\\.yandex\\.ru/watch/.*?\x3c/script>", "gi"), x.sendContent(n.getDocumentHTML().replace(d, ""), h, e, Aa, Ba), !0;
                t && (t.open("get", w().href, !0), t.onreadystatechange = function() {
                    4 == t.readyState && x.sendContent(t.responseText, t.getResponseHeader("content-type"), e, Aa, Ba)
                }, t.overrideMimeType && l && t.overrideMimeType(h), t.send(null));
                return !0
            }
        }
        return {
            start: function() {
                K.activate()
            },
            stop: function() {
                K.clear();
                k.un(g, "mousemove", ob);
                k.un(g, "click,dblclick,mousedown", O);
                k.un(g, "mouseup", nb);
                k.un(g, "mousewheel,wheel", Y);
                k.un(f, "scroll", xa);
                k.un(f, "beforeunload", ya);
                k.un(f, "unload", ya);
                k.un(f, "resize", ab);
                k.un(g, "keydown", xb);
                k.un(g, "keypress", yb);
                k.un(g, "copy", db);
                k.un(g, "touchmove,touchstart", N);
                k.un(g, "focusin", zb);
                k.un(g, "focusout", L);
                k.un(f, "focus", gb);
                k.un(f, "blur", ha);
                k.un(g, "blur", ha);
                g.removeEventListener ? (k.un(g, "scroll", rb),
                    k.un(g, "focus", M), k.un(g, "blur", V), k.un(g, "change", P), k.un(g, "submit", T)) : g.detachEvent && (k.un(g, "focusin", M), k.un(g, "focusout", V), function() {
                    for (var a = g.getElementsByTagName("form"), b = 0; b < a.length; b++) {
                        for (var c = a[b].getElementsByTagName("*"), d = 0; d < c.length; d++) /^INPUT|SELECT|TEXTAREA$/.test(c[d].tagName) && k.un(c[d], "change", P);
                        k.un(a[b], "submit", T)
                    }
                }());
                (function() {
                    for (var a = g.getElementsByTagName("form"), b = 0; b < a.length; b++) a[b][Ca] && (a[b].submit = a[b][Ca])
                })()
            },
            uploadPages: function(a, b) {
                function c() {
                    k.un(g,
                        "DOMContentLoaded", c);
                    k.un(f, "load", c);
                    for (var d = a.split(/\n/), e = w().href, h = /regexp:/, l = 0; l < d.length; l++) {
                        var x = d[l];
                        if (x)
                            if (h.test(x)) {
                                x = jb(x.replace(h, ""));
                                try {
                                    var q = RegExp(x)
                                } catch (m) {}
                                if (q && q.test(e)) {
                                    t.uploadPage(b);
                                    break
                                }
                            } else if (-1 !== e.indexOf(x)) {
                            t.uploadPage(b);
                            break
                        }
                    }
                }
                "complete" == g.readyState ? c() : (k.on(g, "DOMContentLoaded", c), k.on(f, "load", c))
            }
        }
    }
    var hb = !1,
        oa = "",
        Cb = !fa(/webkit/) && fa(/gecko/),
        n = {
            getDocumentCharset: function() {
                return ("" + (g.characterSet || g.charset || "")).toLowerCase()
            },
            getDocumentHTML: function() {
                var a =
                    "",
                    b = "",
                    a = g.documentElement,
                    c = a.outerHTML;
                if (c) a = c;
                else {
                    for (var c = a.attributes, d = "", e = 0; e < c.length; e++) {
                        var f = c[e];
                        f && (d += " " + f.name + '="' + (f.value || "") + '"')
                    }
                    a = "<html" + d + ">" + a.innerHTML + "</html>"
                }(c = g.doctype) && (b = "<!DOCTYPE " + c.name + (c.publicId ? ' PUBLIC "' + c.publicId + '"' : "") + (c.systemId ? ' "' + c.systemId + '"' : "") + ">\n");
                return b + a
            },
            getRootElement: function() {
                var a = g.documentElement;
                return "CSS1Compat" == g.compatMode ? a : g.body || a
            },
            getViewportSize: function() {
                var a = n.getRootElement();
                return [a.clientWidth, a.clientHeight]
            },
            getDocumentSize: function() {
                var a = n.getRootElement(),
                    b = n.getViewportSize();
                return [Math.max(a.scrollWidth, b[0]), Math.max(a.scrollHeight, b[1])]
            },
            getDocumentScroll: function() {
                return [f.pageXOffset || g.documentElement && g.documentElement.scrollLeft || g.body && g.body.scrollLeft || 0, f.pageYOffset || g.documentElement && g.documentElement.scrollTop || g.body && g.body.scrollTop || 0]
            },
            getElementXY: function(a) {
                if (!a.ownerDocument || "PARAM" == a.tagName || a == g.body || a == g.documentElement) return [0, 0];
                if (a.getBoundingClientRect) {
                    a =
                        a.getBoundingClientRect();
                    var b = n.getDocumentScroll();
                    return [Math.round(a.left + b[0]), Math.round(a.top + b[1])]
                }
                for (var c = b = 0; a;) b += a.offsetLeft, c += a.offsetTop, a = a.offsetParent;
                return [b, c]
            },
            getElementParent: function(a) {
                return a == g.documentElement ? null : a == g.body ? g.documentElement : a.parentNode
            }
        }, l = {
            isArray: function(a) {
                return "function" == typeof Array.isArray ? Array.isArray(a) : "[object Array]" == Object.prototype.toString.call(a)
            },
            mergeArrays: function(a) {
                for (var b = 1; b < arguments.length; b++)
                    if (l.isArray(arguments[b]))
                        for (var c =
                            0; c < arguments[b].length; c++) a[a.length] = arguments[b][c];
                return a
            }
        };
    n.getElementChildren = function(a, b) {
        var c = [];
        if (a) {
            var d = a.childNodes;
            if (d)
                for (var e = 0, f = d.length; e < f; e++) {
                    var h = d[e];
                    "INPUT" == h.nodeName && h.type && "hidden" == h.type.toLocaleLowerCase() || b && h.nodeName != b || l.mergeArrays(c, [h])
                }
        }
        return c
    };
    n.getElementNeighborPosition = function(a) {
        var b = n.getElementParent(a);
        if (b)
            for (var c = 0, d = 0; d < b.childNodes.length; d++)
                if (a.nodeName == b.childNodes[d].nodeName) {
                    if (a == b.childNodes[d]) return c;
                    c++
                }
        return 0
    };
    n.getElementSize = function(a) {
        return a == g.body || a == g.documentElement ? n.getDocumentSize() : [a.offsetWidth, a.offsetHeight]
    };
    n.getElementRegion = function(a) {
        var b = n.getElementXY(a);
        a = n.getElementSize(a);
        return [b[0], b[1], a[0], a[1]]
    };
    l.fletcher = function(a) {
        for (var b = a.length, c = 0, d = 255, e = 255; b;) {
            var f = 21 < b ? 21 : b,
                b = b - f;
            do {
                var h = "string" == typeof a ? a.charCodeAt(c) : a[c];
                c++;
                if (255 < h) var g = h >> 8,
                h = h & 255, h = h ^ g;
                d += h;
                e += d
            } while (--f);
            d = (d & 255) + (d >> 8);
            e = (e & 255) + (e >> 8)
        }
        a = (d & 255) + (d >> 8) << 8 | (e & 255) + (e >> 8);
        return 65535 ==
            a ? 0 : a
    };
    n.calcTextChecksum = function(a) {
        var b = "";
        a = a.childNodes;
        for (var c = 0, d = a.length; c < d; c++) a[c] && 3 == a[c].nodeType && (b += a[c].nodeValue);
        return l.fletcher(b.replace(/[\u0000-\u0020]+/g, ""))
    };
    n.calcAttribChecksum = function(a) {
        var b = "",
            c = "width height align title alt name".split(" ");
        "IMG" == a.tagName && (b += a.src.toLowerCase());
        "A" == a.tagName && (b += a.href.toLowerCase());
        for (var b = b + String(a.className || "").toLowerCase(), d = 0; d < c.length; d++) a.getAttribute && (b += String(a.getAttribute(c[d]) || "").toLowerCase());
        return l.fletcher(b.replace(/[\u0000-\u0020]+/g, ""))
    };
    n.calcChildrenChecksum = function(a) {
        return l.fletcher((a.innerHTML || "").replace(/(<[^>]*>|[\u0000-\u0020])/g, ""))
    };
    n.getFormNumber = function(a) {
        for (var b = g.getElementsByTagName("form"), c = 0, d = b.length; c < d; c++)
            if (b[c] == a) return c;
        return -1
    };
    n.classNameExists = function(a, b) {
        return RegExp("(?:^|\\s)" + b + "(?:\\s|$)").test(a.className)
    };
    n.isEmptyField = function(a) {
        return "INPUT" == a.nodeName && "submit" != a.type && "image" != a.type && "hidden" != a.type ? "radio" == a.type ||
            "checkbox" == a.type ? !a.checked : !a.value : "TEXTAREA" == a.nodeName ? !a.value : "SELECT" == a.nodeName ? 0 > a.selectedIndex : !0
    };
    n.getElementsByClassName = function(a, b) {
        b = b || g;
        for (var c = b.getElementsByTagName("*"), d = [], e = 0; e < c.length; e++) n.classNameExists(c[e], a) && d.push(c[e]);
        return d
    };
    n.getDocumentTitle = function() {
        var a = g.title;
        "string" != typeof a && (a = (a = g.getElementsByTagName("title")) && a.length ? a[0].innerHTML : "");
        return a
    };
    var I = {
        getPos: function(a) {
            var b = n.getRootElement(),
                c = n.getDocumentScroll();
            return [a.pageX ||
                a.clientX + c[0] - (b.clientLeft || 0) || 0, a.pageY || a.clientY + c[1] - (b.clientTop || 0) || 0]
        },
        getTarget: function(a) {
            a = a.target || a.srcElement;
            !a.ownerDocument && a.documentElement && (a = a.documentElement);
            return a
        },
        getMouseButton: function(a) {
            return a.which || a.button == M ? a.which : a.button & 1 ? 1 : a.button & 2 ? 3 : a.button & 4 ? 2 : 0
        }
    };
    l.mixin = function(a) {
        for (var b = 1; b < arguments.length; b++)
            if (arguments[b]) {
                for (var c in arguments[b]) arguments[b].hasOwnProperty(c) && (a[c] = arguments[b][c]);
                arguments[b].hasOwnProperty("toString") && (a.toString =
                    arguments[b].toString)
            }
        return a
    };
    var C = function(a) {
        a = a || {};
        l.mixin(this, a);
        this._initComponent()
    };
    C.prototype._initComponent = function() {};
    C.inherit = function(a) {
        a = a || {};
        var b = "function" == typeof this ? this : Object;
        a.hasOwnProperty("constructor") || (a.constructor = function() {
            b.apply(this, arguments)
        });
        var c = function() {};
        c.prototype = b.prototype;
        a.constructor.prototype = new c;
        l.mixin(a.constructor.prototype, a);
        a.constructor.prototype.constructor = a.constructor;
        a.constructor.superclass = b.prototype;
        a.constructor.inherit =
            C.inherit;
        return a.constructor
    };
    var k = C.inherit({
        _initComponent: function() {
            k.superclass._initComponent.apply(this, arguments);
            this._listeners = []
        },
        on: function(a, b, c, d, e) {
            e = 5 > arguments.length ? !0 : !! e;
            for (var g = b.split(","), h = 0; h < g.length; h++) {
                var l = g[h],
                    k = G(function(a) {
                        c.call(d || this, a || f.event)
                    }, "on" + l);
                this._listeners[this._listeners.length] = [a, l, c, d, e, k];
                a.addEventListener ? a.addEventListener(l, k, e) : a.attachEvent && a.attachEvent("on" + l, k)
            }
        },
        un: function(a, b, c, d, e) {
            e = 5 > arguments.length ? !0 : !! e;
            for (var f =
                b.split(","), h = 0; h < f.length; h++)
                for (var g = f[h], l = 0; l < this._listeners.length; l++) {
                    var k = this._listeners[l];
                    if (k[0] == a && k[1] == g && k[2] == c && k[3] == d && k[4] == e) {
                        this._listeners.splice(l, 1);
                        this._removeListener(a, g, k[5], e);
                        return
                    }
                }
        },
        unAll: function() {
            for (var a = 0; a < this._listeners.length; a++) {
                var b = this._listeners[a];
                this._removeListener(b[0], b[1], b[5], b[4])
            }
            this._listeners.length = 0
        },
        _removeListener: function(a, b, c, d) {
            a.removeEventListener ? a.removeEventListener(b, c, d) : a.detachEvent && a.detachEvent("on" + b, c)
        }
    });
    k.on = function(a, b, c, d, e) {
        k._instance || (k._instance = new k);
        k._instance.on.apply(k._instance, arguments)
    };
    k.un = function(a, b, c, d, e) {
        k._instance && k._instance.un.apply(k._instance, arguments)
    };
    k.onDocumentVisible = function(a, b) {
        if ("prerender" == g.webkitVisibilityState) {
            var c = function() {
                "prerender" != g.webkitVisibilityState && (k.un(g, "webkitvisibilitychange", c), a.call(b, !0))
            };
            k.on(g, "webkitvisibilitychange", c)
        } else a.call(b, !1)
    };
    V = null;
    l.toJSON = function(a) {
        if (a === M) return "";
        if (null === a) return "null";
        switch (a.constructor) {
            case Boolean:
                return a.toString();
            case Number:
                return isFinite(a) ? a.toString() : "null";
            case String:
                return '"' + a.replace(/\\/g, "\\\\").replace(/"/g, '\\"').replace(/\n/g, "\\n").replace(/\r/g, "\\r") + '"';
            case Array:
                for (var b = [], c = 0, d = a.length; c < d; c++) b[b.length] = l.toJSON(a[c]);
                return "[" + b.join(",") + "]";
            case Object:
                b = [];
                for (c in a) a.hasOwnProperty(c) && a[c] !== M && (b[b.length] = l.toJSON(c) + ":" + l.toJSON(a[c]));
                return "{" + b.join(",") + "}";
            default:
                return "null"
        }
    };
    var $ = C.inherit({
        counterId: "",
        _initComponent: function() {
            $.superclass._initComponent.apply(this,
                arguments);
            this._ls = null;
            try {
                this._ls = f.localStorage
            } catch (a) {}
        },
        set: function(a, b) {
            if (this.isEnabled()) try {
                !b || b && l.isArray(b) && !b.length ? this.remove(a) : this._ls.setItem(this._getLsKey(a), l.toJSON(b))
            } catch (c) {}
        },
        get: function(a) {
            if (this.isEnabled()) try {
                return JSON.parse(this._ls.getItem(this._getLsKey(a)))
            } catch (b) {}
            return null
        },
        remove: function(a) {
            if (this.isEnabled()) try {
                this._ls.removeItem(this._getLsKey(a))
            } catch (b) {}
        },
        isEnabled: function() {
            return this._ls && f.JSON && "object" == typeof this._ls && "object" ==
                typeof f.JSON
        },
        getStorageId: function() {
            var a = this.get("lsid");
            a || (a = Math.round(Math.random() * new Date), this.set("lsid", a));
            return a
        },
        clearStorageId: function() {
            this.remove("lsid")
        },
        _getLsKey: function(a) {
            return "_ym" + this.counterId + "_" + a
        }
    }),
        Y = C.inherit({
            counterId: "",
            onlyCurrentDomain: !1,
            skipPrefix: !1,
            _initComponent: function() {
                Y.superclass._initComponent.apply(this, arguments);
                this._domain = null;
                if (!this.onlyCurrentDomain)
                    for (var a = A.host.split("."), b = 2;;)
                        if (b <= a.length) {
                            if (this._domain = "." + a.slice(-b).join("."),
                                b++, this.isEnabled()) break
                        } else {
                            this._domain = null;
                            break
                        }
            },
            create: function(a, b, c) {
                a = [this._prepareName(a) + "=" + encodeURIComponent(b)];
                c && (b = new Date, b.setTime(b.getTime() + 6E4 * c), a.push("expires=" + b.toGMTString()));
                this._domain && a.push("domain=" + this._domain);
                a.push("path=/");
                try {
                    g.cookie = a.join(";")
                } catch (d) {}
            },
            read: function(a) {
                try {
                    var b = g.cookie
                } catch (c) {}
                return b && b.match(RegExp("(?:^|;\\s*)" + this._prepareName(a) + "=([^;]*)")) ? decodeURIComponent(RegExp.$1) : null
            },
            erase: function(a) {
                this.create(a, "", -1)
            },
            isEnabled: function() {
                this.create("metrika_enabled", "1", 60);
                var a = !! this.read("metrika_enabled");
                this.erase("metrika_enabled");
                return a
            },
            _prepareName: function(a) {
                return (this.skipPrefix ? "" : "_ym_") + a + (this.counterId ? "_" + this.counterId : "")
            }
        });
    Y.isEnabled = function() {
        return (new Y({
            onlyCurrentDomain: !0
        })).isEnabled()
    };
    var r = C.inherit({
        transports: [],
        postParams: [],
        send: function(a, b, c, d) {
            c = c || function() {};
            (function t(f) {
                if (f < this.transports.length) try {
                    var g = new this.transports[f]({
                        postParams: this.postParams
                    });
                    g.request(a, b, function(a, b) {
                        a ? c.call(d, b) : t.call(this, f + 1)
                    }, this)
                } catch (l) {
                    na(l, "send by " + (g && g.id)), t.call(this, f + 1)
                }
            }).call(this, 0)
        }
    }),
        ia = {
            stringify: function(a) {
                var b = [],
                    c;
                for (c in a)
                    if (a.hasOwnProperty(c)) {
                        var d = a[c];
                        if (l.isArray(d))
                            for (var e = 0; e < d.length; e++) b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(d[e])));
                        else b.push(encodeURIComponent(c) + "=" + encodeURIComponent(String(d)))
                    }
                return b.join("&")
            }
        };
    l.forEachKey = function(a, b, c) {
        for (var d in a) a.hasOwnProperty(d) && b.call(c, d, a[d],
            a)
    };
    l.inArray = function(a, b) {
        for (var c = 0; c < a.length; c++)
            if (a[c] == b) return !0;
        return !1
    };
    var F = C.inherit({
        postParams: [],
        _buildUrl: function(a, b) {
            return a + (-1 < a.indexOf("?") ? "&" : "?") + ia.stringify(b)
        },
        _splitParams: function(a) {
            var b = {}, c = {};
            l.forEachKey(a, function(a, e) {
                l.inArray(this.postParams, a) ? c[a] = e : b[a] = e
            }, this);
            return {
                get: b,
                post: c
            }
        }
    });
    F.inherit({
        id: "beacon",
        request: function(a, b, c, d) {
            "function" == typeof D.sendBeacon ? (b = this._splitParams(b), c.call(d, D.sendBeacon(this._buildUrl(a, b.get), ia.stringify(b.post)))) :
                c.call(d, !1)
        }
    });
    var E = F.inherit({
        id: "XHR",
        request: function(a, b, c, d) {
            if (/[^a-z0-9.:-]/.test(A.host) && f.opera && "function" == typeof f.opera.version) {
                var e = f.opera.version();
                if ("string" == typeof e && "12" == e.split(".")[0]) return c.call(d, !1)
            }
            if (f.XMLHttpRequest) {
                var g = new XMLHttpRequest;
                if ("withCredentials" in g) {
                    b = this._splitParams(b);
                    a = this._buildUrl(a, b.get);
                    try {
                        g.open("POST", a, !0)
                    } catch (h) {
                        return c.call(d, !1)
                    }
                    g.withCredentials = !0;
                    g.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    g.send(ia.stringify(b.post));
                    (function() {
                        4 == g.readyState ? c.call(d, 200 == g.status) : R(arguments.callee, 50, "TransportXHR.request")
                    })();
                    return
                }
            }
            c.call(d, !1)
        }
    });
    l.random = function(a, b) {
        2 > arguments.length && (b = a, a = 0);
        1 > arguments.length && (b = 1073741824);
        return Math.floor(Math.random() * (b - a)) + a
    };
    var K = F.inherit({
        id: "form",
        enctype: "application/x-www-form-urlencoded",
        htmlfileOnly: !1,
        _initComponent: function() {
            K.superclass._initComponent.apply(this, arguments);
            "_htmlfile" in K.prototype || (K.prototype._htmlfile = this._createHtmlfile());
            this._doc =
                this._htmlfile || (this.htmlfileOnly ? null : g)
        },
        request: function(a, b, c, d) {
            var e = this._doc;
            if (!e) return c.call(d, !1);
            b = this._splitParams(b);
            var f = "ifr" + l.random(),
                g = e.createElement("div");
            g.style.position = "absolute";
            g.style.left = "-99999px";
            g.style.top = "-99999px";
            var k = ['<iframe name="', f, '"></iframe>', '<form action="', this._buildUrl(a, b.get), '" method="post" target="', f, '" enctype="', this.enctype, '">'];
            l.forEachKey(b.post, function(a) {
                l.mergeArrays(k, ['<textarea name="', a, '"></textarea>'])
            });
            l.mergeArrays(k, ["</form>"]);
            g.innerHTML = k.join("");
            e.body.appendChild(g);
            var n = g.getElementsByTagName("form")[0];
            l.forEachKey(b.post, function(a, b) {
                n[a].value = b
            });
            n.submit();
            R(function() {
                e.body.removeChild(g)
            }, 1E4, "TransportForm.request.2");
            return c.call(d, !0)
        },
        _createHtmlfile: function() {
            try {
                if (f.ActiveXObject) {
                    var a = new ActiveXObject("htmlfile");
                    a.open();
                    a.write("<html><body></body></html>");
                    a.close();
                    return a
                }
            } catch (b) {}
            return null
        }
    }),
        S = K.inherit({
            id: "htmlfile",
            htmlfileOnly: !0
        }),
        J = F.inherit({
            id: "img",
            request: function(a,
                b, c, d) {
                a = this._buildUrl(a, b);
                b = g.createElement("img");
                b.onload = G(function() {
                    c.call(d, !0)
                }, "TransportImage.request");
                b.onerror = G(function() {
                    c.call(d, !1)
                }, "TransportImage.request");
                b.src = a
            }
        });
    l.defer = function(a, b, c, d, e) {
        return R(function() {
            a.apply(c, d || [])
        }, b, e)
    };
    var U = r.inherit({
        protocol: "",
        host: "mc.yandex.ru",
        resource: "",
        counterId: "",
        counterType: 0,
        retry: !1,
        transports: [E, S, J],
        _initComponent: function() {
            U.superclass._initComponent.apply(this, arguments);
            this.retry && (this._storage = new $)
        },
        send: function(a,
            b, c, d) {
            var e = this._registerRequest(a, b);
            this._sendSavedRequest(e, a, b, c, d)
        },
        _sendSavedRequest: function(a, b, c, d, e) {
            var g = f.Ya._metrika.firstReqStatus;
            if ("process" == g) f.Ya._metrika.firstReqCallbacks = l.mergeArrays(f.Ya._metrika.firstReqCallbacks || [], [
                [this, arguments]
            ]);
            else {
                g || (f.Ya._metrika.firstReqStatus = "process");
                g = {};
                this.counterType && (g["cnt-class"] = this.counterType);
                l.mixin(g, b);
                c.st = Math.round((new Date).getTime() / 1E3);
                var h = [this.protocol, "//", this.host, "/" + this.resource + "/" + this.counterId].join(""),
                    k = [];
                c && (l.forEachKey(c, function(a, b) {
                    "t" != a && l.mergeArrays(k, [a, b])
                }), c.t && l.mergeArrays(k, ["t", c.t]));
                k.length && (g["browser-info"] = k.join(":"));
                return U.superclass.send.call(this, h, g, function() {
                    f.Ya._metrika.firstReqStatus = "complete";
                    this._unregisterRequest(a);
                    var b = f.Ya._metrika.firstReqCallbacks;
                    f.Ya._metrika.firstReqCallbacks = null;
                    if (b)
                        for (var c = 0; c < b.length; c++) b[c][0]._sendSavedRequest.apply(b[c][0], b[c][1]);
                    d && d.apply(e, arguments)
                }, this)
            }
        },
        _isRetryEnabled: function() {
            return this.retry && this._storage &&
                this._storage.isEnabled()
        },
        _registerRequest: function(a, b) {
            if (this._isRetryEnabled()) {
                b.rqnl = b.rqnl || 0;
                b.rqnl++;
                for (var c = this._storage.get("retryReqs") || {}, d = 1; c[d];) d++;
                c[d] = {
                    protocol: this.protocol,
                    host: this.host,
                    resource: this.resource,
                    counterId: this.counterId,
                    counterType: this.counterType,
                    postParams: this.postParams,
                    params: a,
                    browserInfo: b,
                    ghid: Ya._globalMetrikaHitId,
                    time: +new Date
                };
                this._storage.set("retryReqs", c);
                return d
            }
        },
        _unregisterRequest: function(a) {
            if (a && this._isRetryEnabled()) {
                var b = this._storage.get("retryReqs") || {};
                b[a] && (delete b[a], this._storage.set("retryReqs", b))
            }
        }
    });
    U.retransmit = function() {
        var a = new $,
            b = a.get("retryReqs") || {};
        a.remove("retryReqs");
        l.forEachKey(b, function(a, b) {
            f.Ya._metrika.firstReqStatus || (f.Ya._metrika.firstReqStatus = "complete");
            b.ghid && b.ghid != Ya._globalMetrikaHitId && b.time && b.time + 864E5 > +new Date && 2 >= b.browserInfo.rqnl && (new U({
                protocol: b.protocol,
                host: b.host,
                resource: b.resource,
                counterId: b.counterId,
                counterType: b.counterType,
                postParams: b.postParams || [],
                retry: !0
            })).send(b.params,
                b.browserInfo)
        })
    };
    var W = {
        abc: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",
        tail: "+/=",
        tailSafe: "*-_",
        encode: function(a, b) {
            for (var c = (W.abc + (b ? W.tailSafe : W.tail)).split(""), d = a.length, e = [], f = d - d % 3, g, k = 0; k < f; k += 3) g = (a[k] << 16) + (a[k + 1] << 8) + a[k + 2], l.mergeArrays(e, [c[g >> 18 & 63], c[g >> 12 & 63], c[g >> 6 & 63], c[g & 63]]);
            switch (d - f) {
                case 1:
                    g = a[f] << 4;
                    l.mergeArrays(e, [c[g >> 6 & 63], c[g & 63], c[64], c[64]]);
                    break;
                case 2:
                    g = (a[f] << 10) + (a[f + 1] << 2), l.mergeArrays(e, [c[g >> 12 & 63], c[g >> 6 & 63], c[g & 63], c[64]])
            }
            return e.join("")
        }
    },
        ib = {
            encode: function(a) {
                for (var b = [], c = 0, d = a.length; c < d; c++) {
                    var e = a.charCodeAt(c);
                    128 > e ? b.push(e) : (127 < e && 2048 > e ? b.push(e >> 6 | 192) : (b.push(e >> 12 | 224), b.push(e >> 6 & 63 | 128)), b.push(e & 63 | 128))
                }
                return b
            }
        }, Db = U.inherit({
            resource: "webvisor",
            transports: [E, K],
            postParams: ["wv-data"],
            sendContent: function(a, b, c, d, e, f, g) {
                if (!a) return !1; - 1 < a.indexOf("\r") && (a = a.replace(/\r\n/g, "\n"));
                a = {
                    "wv-type": 1,
                    "page-url": w().href,
                    "wv-hit": c,
                    "wv-data": W.encode(ib.encode(a))
                };
                return this.send(a, {
                    z: d,
                    i: e,
                    pct: b || ""
                }, f, g)
            }
        });
    l.trim =
        function(a, b) {
            a = String(a).replace(/^\s+|\s+$/g, "");
            b && a.length > b && (a = a.substr(0, b));
            return a
    };
    var u = {
        _jScriptVersion: 0,
        getJScriptVersion: function() {
            u._jScriptVersion || (u._jScriptVersion = (new Function("return /*@cc_on @_jscript_version @*/;"))());
            return u._jScriptVersion
        },
        _silverlightVersion: "",
        getSilverlightVersion: function() {
            if (!u._silverlightVersion)
                if (f.ActiveXObject) try {
                    var a = new ActiveXObject("AgControl.AgControl"),
                        b = function(a, b, c, d) {
                            for (; a.isVersionSupported(b[0] + "." + b[1] + "." + b[2] + "." + b[3]);) b[c] +=
                                d;
                            b[c] -= d
                        }, c = [1, 0, 0, 0];
                    b(a, c, 0, 1);
                    b(a, c, 1, 1);
                    b(a, c, 2, 1E4);
                    b(a, c, 2, 1E3);
                    b(a, c, 2, 100);
                    b(a, c, 2, 10);
                    b(a, c, 2, 1);
                    b(a, c, 3, 1);
                    u._silverlightVersion = c.join(".")
                } catch (d) {} else if (a = D.plugins["Silverlight Plug-In"]) u._silverlightVersion = a.description;
            return u._silverlightVersion || ""
        },
        _flashVersion: 0,
        getFlashVersion: function() {
            if (!u._flashVersion) {
                var a = f.navigator;
                if ("undefined" != typeof a.plugins && "object" == typeof a.plugins["Shockwave Flash"]) {
                    var b = a.plugins["Shockwave Flash"].description;
                    b && (a = a.mimeTypes,
                        "undefined" == typeof a || !a["application/x-shockwave-flash"] || a["application/x-shockwave-flash"].enabledPlugin) && (u._flashVersion = b.replace(/([a-zA-Z]|\s)+/, "").replace(/(\s+r|\s+b[0-9]+)/, "."))
                } else if ("undefined" != typeof f.ActiveXObject) try {
                    if (b = new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) {
                        var c = b.GetVariable("$version");
                        c && (u._flashVersion = c.split(" ")[1].replace(/,/g, ".").replace(/[^.\d]/g, ""))
                    }
                } catch (d) {}
            }
            return u._flashVersion
        },
        getLanguage: function() {
            return (f.navigator && (D.language || D.browserLanguage) ||
                "").toLowerCase()
        },
        getJavaEnabled: function() {
            try {
                return D.javaEnabled()
            } catch (a) {
                return !1
            }
        }
    };
    l.fnv32a = function(a) {
        for (var b = 2166136261, c = 0, d = a.length; c < d; ++c) b ^= a.charCodeAt(c), b += (b << 1) + (b << 4) + (b << 7) + (b << 8) + (b << 24);
        return b >>> 0
    };
    u.getFingerPrint = function() {
        var a = [];
        if (D.plugins && D.plugins.length)
            for (var b = 0; b < D.plugins.length; b++) {
                var c = D.plugins[b];
                l.mergeArrays(a, [c.name, c.version, c.description, c.filename])
            }
        if (D.mimeTypes && D.mimeTypes.length)
            for (b = 0; b < D.mimeTypes.length; b++) c = D.mimeTypes[b], l.mergeArrays(a, [c.type, c.description, c.suffixes]);
        return l.fnv32a(a.join(";")) + "01"
    };
    var aa = U.inherit({
        hitId: 0,
        trackHash: !1,
        trimParams: !1,
        webvisor: !1,
        counter: null,
        counterNum: 0,
        resource: "watch",
        retry: !0,
        postParams: ["site-info"],
        _initComponent: function() {
            aa.superclass._initComponent.apply(this, arguments);
            this._trackHash = this.trackHash
        },
        setTrackHash: function(a) {
            this._trackHash = a
        },
        sendHit: function(a, b, c, d, e) {
            this._hitExt(a, b, c, d, {
                ut: e,
                ar: !0,
                saveRef: !0
            })
        },
        sendAjaxHit: function(a, b, c, d) {
            this._hitExt(a, b, c, null, d)
        },
        sendParams: function(a) {
            this._hitExt(w().href,
                "", "", a, {
                    ar: !0,
                    pa: !0,
                    onlyData: !0
                })
        },
        sendGoal: function(a, b) {
            if (!/[\/&=?#]/.test(a)) {
                var c = a ? "goal://" + w().hostname + "/" + encodeURIComponent(a) : w().href,
                    d = n.getDocumentTitle(),
                    e = a ? w().href : g.referrer;
                this._hitExt(c, d, e, b, {
                    ar: !0
                })
            }
        },
        sendClickLink: function(a, b, c) {
            this._hitExt(a, b, w().href, null, c)
        },
        sendExtLink: function(a, b, c, d) {
            this._hitExt(a, "", w().href, d, {
                ar: !0,
                ln: !0,
                ut: ja
            })
        },
        sendFileUpload: function(a, b, c, d) {
            this._hitExt(a, "", w().href, d, {
                ar: !0,
                ln: !0,
                dl: !0
            })
        },
        sendNotBounce: function(a) {
            this._hitExt(w().href,
                "", "", null, {
                    cl: a,
                    ar: !0,
                    nb: !0,
                    onlyData: !0
                })
        },
        sendVideoAction: function(a, b, c, d) {
            this._hitExt(c, d || "", "", null, {
                ar: !0,
                va: a,
                vt: +b
            })
        },
        sendSocialClick: function(a, b, c) {
            this._hitExt(c || w().href, "", "", null, {
                ar: !0,
                sn: l.trim(a, 64),
                sa: l.trim(b, 64)
            })
        },
        _hitExt: function(a, b, c, d, e, g, h, k, n, s) {
            function p(a, b) {
                b && (m[a] = b)
            }
            e = e || {};
            g = g || {};
            if ("MetrikaPlayer" != f.name) {
                c = "undefined" != typeof c ? c : V;
                var m = {};
                e.ar && !e.onlyData && (c = this._prepareHitUrl(c), a = this._prepareHitUrl(a));
                p("page-ref", l.trim(c, ka));
                p("page-url", l.trim(a,
                    ka)); - 1 != w().hostname.search(/(?:^|\.)(?:ya|yandex|narod|narod2)\.(?:\w+|com\.\w+)$/) ? p("ut", ja) : "undefined" != typeof e.ut && p("ut", l.trim(e.ut, Eb));
                if (d)
                    if (a = l.toJSON(d), this.trimParams && a.length > Fb) var u = !0;
                    else p("site-info", a);
                e.saveRef && (V = c);
                l.mixin(g, this._getTechInfo(b, e, this.counterId, h, k, this._trackHash, this.hitId, this.webvisor, this.counter));
                this.send(m, g, function() {
                    u && (new aa({
                        protocol: this.protocol,
                        counterType: this.counterType,
                        counterId: this.counterId,
                        hitId: this.hitId,
                        trackHash: this.trackHash,
                        webvisor: this.webvisor,
                        counterNum: this.counterNum,
                        counter: this.counter
                    })).sendParams(d);
                    n && n.apply(s, arguments)
                }, this)
            }
        },
        _prepareHitUrl: function(a) {
            var b = w(),
                c = b.host,
                b = b.href;
            if (!a) return b;
            if (-1 != a.search(/^\w+:\/\//)) return a;
            var d = a.charAt(0);
            if ("?" == d) return d = b.search(/\?/), -1 == d ? b + a : b.substr(0, d) + a;
            if ("#" == d) return d = b.search(/#/), -1 == d ? b + a : b.substr(0, d) + a;
            if ("/" == d) {
                if (d = b.search(c), -1 != d) return b.substr(0, d + c.length) + a
            } else return c = b.split("/"), c[c.length - 1] = a, c.join("/");
            return a
        },
        _getTechInfo: function(a,
            b, c, d, e, g, h, k, v) {
            function s(a, b) {
                a && b && (m[a] = b)
            }

            function p(a) {
                s(a, b[a] ? "1" : "")
            }
            b = b || {};
            var m = {};
            d = d || L.getTimestamp();
            e = e || L.getTimezone();
            s("j", u.getJavaEnabled() ? "1" : "");
            ba && s("s", ba.width + "x" + ba.height + "x" + (ba.colorDepth || ba.pixelDepth));
            f.devicePixelRatio && s("sk", f.devicePixelRatio);
            s("f", u.getFlashVersion());
            s("l", u.getSilverlightVersion());
            s("fpr", u.getFingerPrint());
            s("cn", this.counterNum);
            if (!b.pa) {
                var r = n.getViewportSize();
                s("w", r[0] + "x" + r[1])
            }
            s("z", e);
            s("i", d);
            s("et", Math.round((new Date).getTime() /
                1E3));
            s("en", n.getDocumentCharset());
            s("v", ea);
            s("c", D.cookieEnabled ? "1" : "");
            s("jv", u.getJScriptVersion());
            s("la", u.getLanguage());
            g && s("wh", "1");
            e = "ar ln dl ad nb pa".split(" ");
            for (d = 0; d < e.length; d++) p(e[d]);
            e = ["va", "vt", "sn", "sa", "he"];
            b.nb && e.push("cl");
            for (d = 0; d < e.length; d++) g = e[d], s(g, b[g]);
            c = new $({
                counterId: c
            });
            c.isEnabled() && (d = c.getStorageId(), (e = c.get("reqNum")) ? e++ : e = 1, c.set("reqNum", e), c.get("reqNum") == e ? (s("ls", d), s("rqn", e)) : (c.remove("reqNum"), c.clearStorageId(), 1 < e && (s("ls", d), s("rqn",
                0))));
            s("rn", l.random());
            s("hid", h);
            s("ds", Ma(v));
            v._firstPaint || (v._firstPaint = Na(), s("fp", v._firstPaint));
            if (k) {
                f.name || (f.name = Math.round(65535 * Math.random()));
                if (h = +f.name) 0 > h && (h *= -1), h %= 65535;
                s("wn", h || l.fletcher(f.name));
                try {
                    f.history && s("hl", String(f.history.length))
                } catch (w) {}
            }
            a = "undefined" == typeof a ? (a = n.getDocumentTitle()) ? l.trim(a, Da) : "" : l.trim(a, Da);
            s("t", a);
            return m
        }
    });
    l.array2Props = function(a) {
        for (var b = a.length, c = {}, d = c, e = 0; e < b - 1; e++) {
            var f = a[e];
            d[f] = {};
            e < b - 2 && (d = d[f])
        }
        d[f] = a[b - 1];
        return c
    };
    var P = C.inherit({
        sampling: 1,
        counterId: 26302566,
        _initComponent: function() {
            P.superclass._initComponent.apply(this, arguments);
            this._sender = new aa({
                counterId: this.counterId,
                retry: !1,
                counter: {}
            })
        },
        log: function() {
            this.logParams(l.array2Props(arguments))
        },
        logParams: function(a) {
            Math.random() < this.sampling && this._sender.sendHit(A.href, "", "", a)
        }
    });
    l.throttle = function(a, b, c, d) {
        var e, f, g;
        return function() {
            f = arguments;
            g = this;
            e || function() {
                e = null;
                f && (a.apply || (new P).log("fn no apply", typeof a, typeof a.apply,
                    1), a.apply(c || g, f), f = null, e = R(arguments.callee, b, d))
            }()
        }
    };
    var Ea = C.inherit({
        storage: null,
        storageKey: "dataBuffer",
        maxBufferSize: 255,
        flushTimeout: 1E4,
        active: !0,
        meta: null,
        onFlush: function() {},
        onFlushCtx: null,
        bufferExpireTime: 864E5,
        _initComponent: function() {
            Ea.superclass._initComponent.apply(this, arguments);
            this._data = [];
            this._packetNumber = 0;
            this._flushTID = null;
            this._saveToStorageThrottled = l.throttle(this._saveToStorage, 300, this, "DataBuffer._saveToStorage");
            if (this.storage) {
                var a = this.storage.get(this.storageKey);
                a && a.data && a.meta && a.time && a.time + this.bufferExpireTime > +new Date && this.onFlush.call(this.onFlushCtx || this, a.data, a.meta, a.pnum);
                this.clear()
            }
        },
        append: function(a, b) {
            l.mergeArrays(this._data, a);
            this._saveToStorageThrottled();
            this.active && ((b || this._data.length >= this.maxBufferSize) && this._flush(), this._flushTID || (this._flushTID = l.defer(this._flush, this.flushTimeout, this, [], "DataBuffer._flush")))
        },
        activate: function() {
            this.active || (this.active = !0, this.append([]))
        },
        clear: function() {
            this._data.length = 0;
            this._flushTID = null;
            this.storage && this.storage.remove(this.storageKey)
        },
        _flush: function() {
            this.onFlush.call(this.onFlushCtx || this, this._data, this.meta, this._packetNumber);
            this._packetNumber++;
            this.clear()
        },
        _saveToStorage: function() {
            this.storage && this._data.length && this.storage.set(this.storageKey, {
                data: this._data,
                meta: this.meta,
                pnum: this._packetNumber,
                time: +new Date
            })
        }
    }),
        Gb = U.inherit({
            resource: "webvisor",
            retry: !0,
            postParams: ["wv-data"],
            sendPacket: function(a, b, c, d, e, g, k, n) {
                if (!a || !a.length) return !1;
                var u = W.encode(a, !0);
                0 == u.indexOf("AAAAAAAAADw") && f.Error && "string" == typeof Error().stack && (new P({
                    sampling: 0.1
                })).log("bad visor packet 5", 1);
                a = {
                    rn: l.random(),
                    "page-url": b,
                    wmode: 0,
                    "wv-type": 0,
                    "wv-hit": c,
                    "wv-part": d + 1,
                    "wv-check": l.fletcher(a),
                    "wv-data": u
                };
                return this.send(a, {
                    z: e,
                    i: g
                }, k, n)
            }
        }),
        Ab = Ea.inherit({
            protocol: "",
            counterId: "",
            counterType: "",
            meta: null,
            maxBufferSize: 7500,
            flushTimeout: 3E4,
            storageKey: "visorbuff",
            active: !1,
            _initComponent: function() {
                this.storage = new $({
                    counterId: this.counterId
                });
                this._sender =
                    new Gb({
                        protocol: this.protocol,
                        counterId: this.counterId,
                        counterType: this.counterType
                    });
                Ab.superclass._initComponent.apply(this, arguments)
            },
            onFlush: function(a, b, c) {
                this._sender.sendPacket(a, b.url, b.hitId, c, b.timezone, b.timestamp)
            }
        });
    u.isIE = function() {
        return 5.8 >= u.getJScriptVersion()
    };
    var ca = {
        log: function() {
            f.console && console.log && (-1 < A.href.indexOf("_ym_debug=1") || f._ym_debug) && console.log.apply(console, arguments)
        }
    }, Hb = U.inherit({
            resource: "clmap",
            retry: !0,
            transports: [J],
            sendClick: function(a, b, c, d) {
                this.send({
                    "page-url": a,
                    "pointer-click": b
                }, {}, c, d)
            }
        }),
        Ib = C.inherit({
            filter: null,
            ignoreTags: [],
            quota: 0,
            urlFilter: null,
            isTrackHash: !1,
            protocol: "",
            counterId: 0,
            counterType: 0,
            startTime: 0,
            MAX_LEN_PATH: 128,
            TIMEOUT_CLICK: 50,
            TIMEOUT_SAME_CLICKS: 1E3,
            DELTA_SAME_CLICKS: 2,
            tags: "A B BIG BODY BUTTON DD DIV DL DT EM FIELDSET FORM H1 H2 H3 H4 H5 H6 HR I IMG INPUT LI OL P PRE SELECT SMALL SPAN STRONG SUB SUP TABLE TBODY TD TEXTAREA TFOOT TH THEAD TR U UL ABBR AREA BLOCKQUOTE CAPTION CENTER CITE CODE CANVAS DFN EMBED FONT INS KBD LEGEND LABEL MAP OBJECT Q S SAMP STRIKE TT ARTICLE AUDIO ASIDE FOOTER HEADER MENU METER NAV PROGRESS SECTION TIME VIDEO NOINDEX NOBR MAIN".split(" "),
            _initComponent: function() {
                this._lastClick = null;
                this.hasQuota = !! this.quota;
                this._quota = this.quota;
                this._ignoreTags = [];
                if (this.ignoreTags)
                    for (var a = 0; a < this.ignoreTags.length; a++) this.ignoreTags[a] && l.mergeArrays(this._ignoreTags, [String(this.ignoreTags[a]).toUpperCase()]);
                this._cacheTags = {};
                for (var a = 59, b = String.fromCharCode, c = 0; c < this.tags.length; c++) this._cacheTags[this.tags[c]] = b(a), b(a), a++;
                this._sender = new Hb({
                    protocol: this.protocol,
                    counterId: this.counterId,
                    counterType: this.counterType
                });
                this._start = !1;
                this.start()
            },
            destroy: function() {
                this.stop()
            },
            start: function() {
                if (!this._start) k.on(g, "click", this._handler, this);
                this._start = !0
            },
            stop: function() {
                this._start && k.un(g, "click", this._handler, this);
                this._start = !1
            },
            setTrackHash: function(a) {
                this.isTrackHash = a
            },
            _handler: function(a) {
                a = {
                    el: I.getTarget(a),
                    pos: I.getPos(a),
                    button: I.getMouseButton(a),
                    time: +new Date
                };
                if (this._isTrackingClick(a)) {
                    var b = n.getElementSize(a.el),
                        c = n.getElementXY(a.el),
                        b = ["rn", l.random(), "x", Math.floor(65535 * (a.pos[0] - c[0]) / (b[0] ||
                            1)), "y", Math.floor(65535 * (a.pos[1] - c[1]) / (b[1] || 1)), "t", Math.floor((a.time - this.startTime) / 100), "p", this._getElPath(a.el)],
                        c = w().href;
                    this.isTrackHash ? l.mergeArrays(b, ["wh", "1"]) : c = c.split("#")[0];
                    "function" == typeof this.urlFilter && (c = this.urlFilter(c));
                    this._sender.sendClick(l.trim(c, ka), b.join(":"));
                    this._lastClick = a
                }
            },
            _isTrackingClick: function(a) {
                if (f.ymDisabledClickmap || "MetrikaPlayer" == f.name) return !1;
                var b = a.el.tagName;
                if ((2 == a.button || 3 == a.button) && "A" != b || this.filter && !this.filter(a.el, b)) return !1;
                for (var c = 0; c < this._ignoreTags.length; c++)
                    if (this._ignoreTags[c] == b) return !1;
                for (b = a.el; b;) {
                    if (n.classNameExists(b, "ym-clickmap-ignore")) return !1;
                    b = b.parentNode
                }
                if (this._lastClick) {
                    if (a.time - this._lastClick.time < this.TIMEOUT_CLICK) return !1;
                    var b = Math.abs(this._lastClick.pos[0] - a.pos[0]),
                        c = Math.abs(this._lastClick.pos[1] - a.pos[1]),
                        d = a.time - this._lastClick.time;
                    if (this._lastClick.el == a.el && b < this.DELTA_SAME_CLICKS && c < this.DELTA_SAME_CLICKS && d < this.TIMEOUT_SAME_CLICKS) return !1
                }
                if (this.hasQuota) {
                    if (!this._quota) return !1;
                    this._quota--
                }
                return !0
            },
            _getElPath: function(a) {
                for (var b = ""; a && a.parentNode && "BODY" != a.tagName && "HTML" != a.tagName;) b += this._cacheTags[a.tagName] || "*", b += n.getElementNeighborPosition(a) || "", a = a.parentNode;
                return l.trim(b, this.MAX_LEN_PATH)
            }
        }),
        Fa = C.inherit({
            _initComponent: function() {
                Fa.superclass._initComponent.apply(this, arguments);
                this._executedMsgs = {};
                k.on(f, "message", this.RemoteControl__onMessage, this)
            },
            RemoteControl__onMessage: function(a) {
                try {
                    var b = a.origin
                } catch (c) {}
                if (b && /^https?:\/\/(.*?\.)?(metr(i(ca?|ka))?|analytics|metrika-(dev|test|ps)(\.haze)?)\.yandex\.(ru|ua|by|kz|com(\.tr)?)(:\d+)?$/.test(b)) {
                    try {
                        var d =
                            (new Function("return " + a.data))()
                    } catch (e) {}
                    d && d.id && d.code && !this._executedMsgs[d.id] && (this._executedMsgs[d.id] = !0, (new Function("evt", d.code))(a))
                }
            }
        }),
        L = {};
    l.pad = function(a) {
        return (10 > a ? "0" : "") + a
    };
    L.getTimestamp = function() {
        for (var a = new Date, a = [a.getFullYear(), a.getMonth() + 1, a.getDate(), a.getHours(), a.getMinutes(), a.getSeconds()], b = "", c = 0; c < a.length; c++) b += l.pad(a[c]);
        return b
    };
    L.getTimezone = function() {
        return -(new Date).getTimezoneOffset()
    };
    var Ga = C.inherit({
        counter: null,
        _initComponent: function() {
            Ga.superclass._initComponent.apply(this,
                arguments);
            if (f.dataLayer && "function" == typeof f.dataLayer.push) {
                var a = this;
                a._send(f.dataLayer);
                var b = f.dataLayer.push;
                f.dataLayer.push = function() {
                    a._send([].slice.call(arguments, 0));
                    b.apply(this, arguments)
                }
            }
        },
        _send: function(a) {
            for (var b = [], c = 0; c < a.length; c++) a[c].ecommerce && (b[b.length] = a[c].ecommerce);
            b.length && this.counter.params({
                __ym: {
                    ecommerce: b
                }
            })
        }
    }),
        r = F.inherit({
            id: "script",
            request: function(a, b, c, d) {
                var e = "_ymjsp" + l.random(),
                    k = g.createElement("script");
                f[e] = G(function(a) {
                    try {
                        delete f[e]
                    } catch (b) {
                        f[e] =
                            M
                    }
                    c.call(d, !0, a);
                    k.parentNode && k.parentNode.removeChild(k)
                }, "transport.script");
                k.type = "text/javascript";
                k.src = this._buildUrl(a, l.mixin({
                    wmode: 5,
                    callback: e
                }, b));
                a = g.getElementsByTagName("head")[0];
                a.insertBefore(k, a.firstChild);
                return !0
            }
        }),
        Jb = aa.inherit({
            transports: [r],
            trimParams: !0,
            sendHit: function(a, b, c, d, e, f, g, k, l, n, p) {
                var m = {};
                f && (m.vc = f);
                g && (m.pr = 1);
                this._hitExt(a, b, c, d, e, m, k, l, n, p)
            }
        }),
        N = [];
    f.Ya = f.Ya || {};
    Ya._metrika = Ya._metrika || {};
    Ya._metrika.counters = Ya._metrika.counters || {};
    Ya._metrika.hitParam =
        Ya._metrika.hitParam || {};
    Ya._metrika.counterNum = Ya._metrika.counterNum || 0;
    Ya._globalMetrikaHitId = l.random();
    var A = w(),
        Aa = L.getTimezone(),
        Ba = L.getTimestamp(),
        D = f.navigator,
        ba = f.screen,
        Z = "https:" == A.protocol ? "https:" : "http:",
        ea = "ver616".slice(3),
        Eb = 64,
        ka = u.isIE() ? 512 : 2048,
        Fb = u.isIE() ? 512 : 2048,
        Da = u.isIE() ? 100 : 400,
        ja = "noindex",
        Ha = 50,
        Kb = 15E3,
        Ia = RegExp("\\.(3gp|7z|aac|ac3|acs|ai|avi|ape|apk|asf|bmp|bz2|cab|cdr|crc32|css|csv|cue|divx|dmg|djvu?|doc(x|m|b)?|emf|eps|exe|flac?|flv|iso|swf|gif|t?gz|jpe?g?|js|m3u8?|m4a|mp(3|4|e?g?)|m4v|md5|mkv|mov|msi|ods|og(g|m|v)|pdf|phps|png|ppt(x|m|b)?|psd|rar|rss|rtf|sea|sfv|sit|sha1|svg|tar|tif?f|torrent|ts|txt|vob|wave?|wma|wmv|wmf|webm|xls(x|m|b)?|xpi|g?zip)$",
            "i"),
        Lb = +new Date,
        la, da;
    f.Ya.Metrika = function(a, b, c, d) {
        var e = this;
        return G(function() {
            function t(x) {
                var H = !1;
                if (Ya._metrika.hitParam[E]) {
                    if (1 != c || Ya._metrika.counters[E]) return !1;
                    H = !0
                }
                Ya._metrika.counters[E] = e;
                Ya._metrika.hitParam[E] = 1;
                e._webvisor = !d && (z && z.webvisor || hb);
                e._directCampaign = z && z.directCampaign;
                z && z.trackHash && D(!0);
                if (!d && !H) {
                    e.replacePhones();
                    var q = new Y({
                        counterId: a
                    }),
                        y = q.read("visorc");
                    "b" != y && "w" != y && (y = "");
                    if (!q.isEnabled() || fa("opera mini")) y = "b";
                    la = +new Date;
                    var H = new Jb({
                        protocol: Z,
                        counterType: c,
                        counterId: a,
                        trackHash: X,
                        hitId: C,
                        webvisor: e._webvisor,
                        counter: e,
                        counterNum: J
                    }),
                        p = {
                            ut: K,
                            he: z ? ~~z.httpError : 0,
                            ad: 1 == c && f.Ya && f.Ya.Direct,
                            saveRef: !0
                        };
                    ca.log("PageView. Counter " + a + ". URL: " + A.href + ". Referer: " + g.referrer, ". Params: ", b);
                    H.sendHit(A.href, n.getDocumentTitle(), g.referrer, b, p, y, x, Ba, Aa, function(a) {
                        da || (da = +new Date);
                        a = a || {};
                        var b = a.webvisor || {};
                        if (L) {
                            var c = +b.recp;
                            if (!isFinite(c) || 0 > c || 1 < c) y = "w";
                            y || (y = C % 1E4 / 1E4 < c ? "w" : "b");
                            q.create("visorc", y, 30);
                            "w" == y ? (L.start(), c = b.arch_type, (b = b.urls) && c && L.uploadPages(b, c)) : L.stop()
                        }
                        b = a.mp2;
                        a = e;
                        q.erase("mp2_substs");
                        if (b) {
                            b: if ((c = b.conditions) && c.length)
                                for (var d = 0; d < c.length; d++) {
                                    var h;
                                    if ("ref" == c[d].type) h = Oa(c[d]);
                                    else if (h = "adv" == c[d].type) {
                                        var x = c[d],
                                            n = Ya._metrika.counter._directCampaign,
                                            m = x.ServiceNamePattern,
                                            H = x.RefererPattern;
                                        h = n ? x.direct_orders : x.direct_camp;
                                        var s = g.referrer,
                                            p = A.search,
                                            p = p && p.replace(/^\?/, ""),
                                            u = {};
                                        if (p)
                                            for (var p = p.split("&"), t = 0; t < p.length; t++) {
                                                var r = p[t].split("=");
                                                u[T(r[0])] = T(r[1])
                                            }
                                        for (var p = Pa(A.search,
                                            A.hash), t = {}, r = ["source", "medium", "campaign", "term", "content"], O = 0; O < r.length; O++) u["utm_" + r[O]] && (t[r[O]] = u["utm_" + r[O]]);
                                        O = n ? "direct.yandex.ru" : p && p.service || t.source;
                                        r = !1;
                                        if (!r && m && m.length)
                                            for (var w = 0; w < m.length; w++)
                                                if (RegExp(m[w], "i").test(O)) {
                                                    r = !0;
                                                    break
                                                }
                                        if (!r && H && H.length)
                                            for (m = 0; m < H.length; m++)
                                                if (RegExp(H[m], "i").test(s)) {
                                                    r = !0;
                                                    break
                                                }!r && x.google_adwords && u.gclid && (r = !0);
                                        !r && x.yandex_direct && u.yclid && (r = !0);
                                        if (r && h && h.length && (r = !1, x = n || p && p.campaign || t && t.campaign))
                                            for (n = 0; n < h.length; n++)
                                                if (h[n] ==
                                                    x) {
                                                    r = !0;
                                                    break
                                                }
                                        h = r
                                    }
                                    if (h) {
                                        c[d].track_id && q.create("mp2_track", c[d].track_id, 43200);
                                        break b
                                    }
                                }
                            c = q.read("mp2_track");
                            b = b.substs && b.substs[c];
                            c && b ? (q.create("mp2_substs", l.toJSON(b)), b = ra(b), a.params("__ym", b ? "mp_trackid" : "mp_trackid_bad", c)) : ta()
                        } else ta();
                        k.on(f, "load", e.replacePhones, e);
                        e._inited = !0
                    })
                }
                r();
                z && (z.enableAll ? (h(!0), s(!0), m()) : (z.clickmap && s(z.clickmap), z.trackLinks && h(z.trackLinks), z.accurateTrackBounce && m(z.accurateTrackBounce), z.ad && ad()), (z.useDataLayer || 0.01 > Math.random()) && new Ga({
                    counter: e
                }));
                e._webvisor && (L = new Ra(Z, a, c, z, C, e))
            }

            function h(a) {
                var b = {
                    delay: Ha
                };
                switch (typeof a) {
                    case "string":
                        b.on = !0;
                        break;
                    case "object":
                        b.on = !0;
                        b.delay = "number" != typeof a.delay ? Ha : a.delay;
                        break;
                    case "boolean":
                        b.on = a;
                        break;
                    default:
                        return
                }
                e._trackLinks = b
            }

            function r() {
                h(!1);
                k.on(g, "click", function(a) {
                    e._trackLinks.on && v(a)
                })
            }

            function v(a) {
                var b = Ja(a);
                if (b) {
                    var c = !1,
                        d = "" + b.href,
                        g = d ? d.split(/\?/)[0] : "",
                        k = function(a) {
                            var c = jb(b.innerHTML.replace(/<\/?[^>]+>/gi, ""));
                            Q.sendClickLink(d, d == c ? "" : c, a)
                        }, l = function() {
                            var c;
                            var d = b.target;
                            c = !1;
                            b.hostname ? (d && "_self" != d && "_top" != d && "_parent" != d || (c = !0), (d = a.shiftKey || a.ctrlKey || a.altKey) || a.modifiers && f.Event && (d = a.modifiers & f.Event.CONTROL_MASK || a.modifiers & f.Event.SHIFT_MASK || a.modifiers & f.Event.ALT_MASK), c = c && !d) : c = !1;
                            return c ? e._trackLinks.delay : 0
                        };
                    if (Ia.test(g) || Ia.test(d) || pa(d, N) || pa(g, N)) c = !0;
                    var h = n.classNameExists(b, "ym-disable-tracklink"),
                        g = n.classNameExists(b, "ym-external-link");
                    h || (h = {
                        ln: !0,
                        dl: c
                    }, g ? (h.delay = l(), k(h)) : Ka(w().hostname, b.hostname) ? c && (h.ln = !1, h.delay = l(), k(h)) : d && -1 != d.search(/^ *(data|javascript):/i) || (h.ut = ja, h.delay = l(), k(h)))
                }
            }

            function s(b) {
                "undefined" == typeof b && (b = !0);
                !0 === b && (b = {});
                e._clickmap && e._clickmap.destroy();
                b && (e._clickmap = new Ib({
                    filter: b.filter,
                    ignoreTags: b.ignoreTags,
                    quota: b.quota,
                    urlFilter: b.urlFilter,
                    isTrackHash: b.isTrackHash,
                    protocol: M,
                    counterId: a,
                    counterType: c,
                    startTime: Lb
                }))
            }

            function p(a, b) {
                function c() {
                    if (!w) {
                        t && clearTimeout(t);
                        var d = b,
                            e;
                        e = p ? r : r + +new Date - s;
                        d -= e;
                        0 > d && (d = 0);
                        t = R(function() {
                                w = !0;
                                l(!1);
                                a()
                            }, d,
                            "trackUserTime")
                    }
                }

                function d() {
                    p = n = m = !0;
                    r += +new Date - s;
                    s = +new Date;
                    c()
                }

                function e() {
                    n || m || (r = 0);
                    s = +new Date;
                    n = m = !0;
                    p = !1;
                    c()
                }

                function h() {
                    m || (n = !0, p = !1, m = !0, c())
                }

                function l(a) {
                    for (var b = 0; b < v.length; b += 3)
                        if (a) k.on(v[b], v[b + 1], v[b + 2]);
                        else k.un(v[b], v[b + 1], v[b + 2])
                }
                var n = !1,
                    m = !1,
                    p = !0,
                    r = 0,
                    s = +new Date,
                    t = null,
                    w = !1;
                if (u.isIE()) R(a, b, "trackUserTime");
                else {
                    var v = [f, "blur", d, f, "focus", e, g, "click", h, g, "mousemove", h, g, "keydown", h, g, "scroll", h];
                    l(!0);
                    c()
                }
            }

            function m(b) {
                "number" != typeof b && (b = Kb);
                if (!e._isAccurateTrackBounce) {
                    e._isAccurateTrackBounce = !0;
                    var c = new $({
                        counterId: a
                    }),
                        d = c.get("lastHit");
                    c.set("lastHit", +new Date);
                    ((c = c.get("lastHit")) && (!d || d < c - 18E5) || !La(g.referrer, w().href) || 0.1 > Math.random()) && p(function() {
                        e.notBounce()
                    }, b)
                }
            }

            function F(a) {
                function b() {
                    var a = w().hash.split("#")[1];
                    if ("undefined" == typeof a) return !1;
                    var c = a.indexOf("?");
                    0 < c && (a = a.substring(0, c));
                    return a
                }
                var c = b();
                (function O() {
                    var d = b();
                    d !== c && (a(), c = d);
                    W = R(O, 200, "trackHash")
                })()
            }

            function D(a) {
                if (!1 === a) X && ("onhashchange" in f ? k.un(f, "hashchange", I) : clearInterval(W),
                    X = !1);
                else if (a = I, !X) {
                    if ("onhashchange" in f) k.on(f, "hashchange", a);
                    else F(a);
                    X = !0
                }
                Q.setTrackHash(X);
                e._trackHash = X
            }

            function I() {
                S = V = P;
                var a = {
                    ut: K,
                    ad: 1 == c && f.Ya && f.Ya.Direct,
                    wh: !0,
                    saveRef: !0
                };
                Q.sendAjaxHit(w().href, n.getDocumentTitle(), S, a);
                P = w().href
            }
            var C = Math.round(1073741824 * Math.random());
            Ya._metrika.counterNum++;
            var J = Ya._metrika.counterNum,
                E, K = "",
                M = Z,
                P = V = A.href,
                S = "",
                z;
            Ya._metrika.counter || (Ya._metrika.counter = e);
            "object" == typeof a && (z = a, d = a.defer, K = a.ut, c = a.type, b = a.params, M = a.onlyHttps ? "https:" :
                Z, a = a.id);
            a = a || 0;
            /^\d+$/.test(a) || (a = 0);
            c = c || 0;
            E = a + ":" + c;
            if (Ya._metrika.counters[E]) return Ya._metrika.counters[E];
            U.retransmit();
            var Q = new aa({
                protocol: M,
                counterType: c,
                counterId: a,
                hitId: C,
                counter: e,
                counterNum: J
            }),
                L;
            e.replacePhones = G(function() {
                try {
                    var b = (new Y({
                        counterId: a
                    })).read("mp2_substs");
                    if (b) {
                        var c = (new Function("return " + b))();
                        c && ra(c, !0)
                    }
                } catch (d) {}
            }, "counter.replacePhones");
            e.reachGoal = G(function(b, c) {
                    ca.log("Reach goal. Counter: " + a + ". Goal id: " + b + ". Params: ", c);
                    Q.sendGoal(b, c);
                    return !0
                },
                "counter.reachGoal");
            e.trackLinks = G(function(a) {
                h(a)
            }, "counter.trackLinks");
            e.hit = G(function(b, c, d, e, f) {
                b && (ca.log("PageView. Counter " + a + ". URL: " + b + ". Referer: " + d + ". Params: ", e), Q.sendHit(b, c, d, e, f))
            }, "counter.hit");
            e.params = G(function(b) {
                b && (1 < arguments.length && (b = l.array2Props(arguments)), ca.log("User params. Counter " + a + ". Params: ", b), Q.sendParams(b))
            }, "counter.params");
            e.file = G(function(a, b, c, d) {
                a && Q.sendFileUpload(a, b, c, d)
            }, "counter.file");
            e.extLink = G(function(a, b, c, d) {
                a && Q.sendExtLink(a,
                    b, c, d)
            }, "counter.extLink");
            e.notBounce = G(function() {
                var a = 0;
                la && da && (a = da - la);
                Q.sendNotBounce(a)
            }, "counter.notBounce");
            var N = [];
            e.addFileExtension = function(a) {
                "string" == typeof a ? N.push(a) : N = N.concat(a)
            };
            e.clickmap = function(a) {
                s(a)
            };
            e.accurateTrackBounce = function(a) {
                m(a)
            };
            var W = null,
                X = !1;
            e.trackHash = function(a) {
                D(a)
            };
            e.video = G(function(a, b, c, d) {
                var e = ["end", "play", "pause", "seek"];
                if (a && c) {
                    a: {
                        for (var f = 0, g = e.length; f < g; f += 1)
                            if (a === e[f]) {
                                e = f;
                                break a
                            }
                        e = -1
                    } - 1 !== e && Q.sendVideoAction(a, b, c, d)
                }
            }, "counter.video");
            e.social = G(function(a, b, c) {
                a && b && Q.sendSocialClick(a, b, c)
            }, "counter.social");
            e.enableAll = function() {
                h(!0);
                s(!0);
                m()
            };
            e.uploadPage = function() {};
            e._performanceTiming = qa;
            if (a) k.onDocumentVisible(t)
        }, "init")()
    };
    if (f.performance && "function" == typeof performance.getEntries) {
        F = {
            2343947156: 1,
            1996539654: 1,
            2065498185: 1,
            823651274: 1,
            1417229093: 1,
            138396985: 1
        };
        E = performance.getEntries();
        S = {};
        for (r = 0; r < E.length; r++) {
            var J = E[r],
                ma = J.name.replace(/^https?:\/\//, "").split("?")[0],
                Mb = l.fnv32a(ma);
            F[Mb] && !S[ma] && 0 < J.duration &&
                (S[ma] = {
                dns: Math.round(J.domainLookupEnd - J.domainLookupStart),
                tcp: Math.round(J.connectEnd - J.connectStart),
                duration: Math.round(J.duration),
                response: Math.round(J.responseEnd - J.requestStart),
                pages: A.href
            })
        }(new P({
            sampling: 1E-4
        })).logParams({
            timings8: S
        })
    }
    f.Ya._metrika.remoteCtrlInited || (f.Ya._metrika.remoteCtrlInited = !0, new Fa);
    f.Ya.Metrika.counters = function() {
        var a = [];
        l.forEachKey(f.Ya._metrika.counters, function(b, c) {
            var d = b.split(":");
            a.push({
                id: +d[0],
                type: +d[1],
                accurateTrackBounce: c._isAccurateTrackBounce,
                clickmap: c._clickmap && c._clickmap._start,
                oldCode: !! f.ya_cid,
                trackHash: !! c._trackHash,
                trackLinks: c._trackLinks && c._trackLinks.on,
                webvisor: !! c._webvisor
            })
        });
        return a
    };
    f.ya_cid && new Ya.Metrika(f.ya_cid, f.ya_params, f.ya_class);
    f.ya_cid && !f.ya_hit && (f.ya_hit = function(a, b) {
        Ya._metrika.counter && Ya._metrika.counter.reachGoal(a, b)
    });
    r = f.yandex_metrika_callback;
    F = f.yandex_metrika_callbacks;
    "function" == typeof r && r();
    if ("object" == typeof F)
        for (r = 0; r < F.length; r++)
            if (E = F[r]) F[r] = null, E();
    ua("yandex_metrika_callback");
    ua("yandex_metrika_callbacks");
    F = ["link", "click", "scroll", "res"];
    for (r = 0; r < F.length; r++)
        if (E = F[r] + "map", -1 != A.href.search("ym_playback=" + E)) {
            va(Z + "//metrika.yandex.ru/js/" + E + "/_loader.js");
            break
        }
    f.Ya.Metrika.informer = function(a) {
        var b = !! Ya.Metrika._informer;
        Ya.Metrika._informer = a;
        b || va(Z + "//mc.yandex.ru/metrika/informer.js")
    };
    (function() {
        var a = function() {
            var a = g.getElementsByTagName("body")[0],
                b = g.createElement("iframe");
            b.src = "http://awaps.yandex.ru/0/2153/0.htm?ad=165746&pl=93829&rnd=" + l.random();
            b.setAttribute("style", "position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;visibility:hidden");
            a.appendChild(b);
            R(function() {
                b.parentNode && b.parentNode.removeChild(b)
            }, 1E4, "ad")
        }, b = function() {
                f.removeEventListener("load", b, !1);
                a()
            }, c = f.performance;
        l.random(200) || Ya._metrika.isAd || (Ya._metrika.isAd = !0, "http:" == Z && "object" == typeof c && f.addEventListener && (c.timing && c.timing.loadEventStart ? a() : f.addEventListener("load", b, !1)))
    })()
})(this, this.document);

  </script>

      
  </div>