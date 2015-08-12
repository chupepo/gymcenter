
/* Modernizr 2.6.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-touch-shiv-teststyles-testprop-prefixes-load
 */
;window.Modernizr=function(a,b,c){function v(a){i.cssText=a}function w(a,b){return v(l.join(a+";")+(b||""))}function x(a,b){return typeof a===b}function y(a,b){return!!~(""+a).indexOf(b)}function z(a,b){for(var d in a){var e=a[d];if(!y(e,"-")&&i[e]!==c)return b=="pfx"?e:!0}return!1}function A(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:x(f,"function")?f.bind(d||b):f}return!1}var d="2.6.3",e={},f=b.documentElement,g="modernizr",h=b.createElement(g),i=h.style,j,k={}.toString,l=" -webkit- -moz- -o- -ms- ".split(" "),m={},n={},o={},p=[],q=p.slice,r,s=function(a,c,d,e){var h,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:g+(d+1),l.appendChild(j);return h=["&#173;",'<style id="s',g,'">',a,"</style>"].join(""),l.id=g,(m?l:n).innerHTML+=h,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=f.style.overflow,f.style.overflow="hidden",f.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),f.style.overflow=k),!!i},t={}.hasOwnProperty,u;!x(t,"undefined")&&!x(t.call,"undefined")?u=function(a,b){return t.call(a,b)}:u=function(a,b){return b in a&&x(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=q.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(q.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(q.call(arguments)))};return e}),m.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:s(["@media (",l.join("touch-enabled),("),g,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c};for(var B in m)u(m,B)&&(r=B.toLowerCase(),e[r]=m[B](),p.push((e[r]?"":"no-")+r));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)u(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof enableClasses!="undefined"&&enableClasses&&(f.className+=" "+(b?"":"no-")+a),e[a]=b}return e},v(""),h=j=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._prefixes=l,e.testProp=function(a){return z([a])},e.testStyles=s,e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
/**
 * StyleFix 1.0.3 & PrefixFree 1.0.7
 * @author Lea Verou
 * MIT license
 */
(function(){function t(e,t){return[].slice.call((t||document).querySelectorAll(e))}if(!window.addEventListener)return;var e=window.StyleFix={link:function(t){try{if(t.rel!=="stylesheet"||t.hasAttribute("data-noprefix"))return}catch(n){return}var r=t.href||t.getAttribute("data-href"),i=r.replace(/[^\/]+$/,""),s=(/^[a-z]{3,10}:/.exec(i)||[""])[0],o=(/^[a-z]{3,10}:\/\/[^\/]+/.exec(i)||[""])[0],u=/^([^?]*)\??/.exec(r)[1],a=t.parentNode,f=new XMLHttpRequest,l;f.onreadystatechange=function(){f.readyState===4&&l()};l=function(){var n=f.responseText;if(n&&t.parentNode&&(!f.status||f.status<400||f.status>600)){n=e.fix(n,!0,t);if(i){n=n.replace(/url\(\s*?((?:"|')?)(.+?)\1\s*?\)/gi,function(e,t,n){return/^([a-z]{3,10}:|#)/i.test(n)?e:/^\/\//.test(n)?'url("'+s+n+'")':/^\//.test(n)?'url("'+o+n+'")':/^\?/.test(n)?'url("'+u+n+'")':'url("'+i+n+'")'});var r=i.replace(/([\\\^\$*+[\]?{}.=!:(|)])/g,"\\$1");n=n.replace(RegExp("\\b(behavior:\\s*?url\\('?\"?)"+r,"gi"),"$1")}var l=document.createElement("style");l.textContent=n;l.media=t.media;l.disabled=t.disabled;l.setAttribute("data-href",t.getAttribute("href"));a.insertBefore(l,t);a.removeChild(t);l.media=t.media}};try{f.open("GET",r);f.send(null)}catch(n){if(typeof XDomainRequest!="undefined"){f=new XDomainRequest;f.onerror=f.onprogress=function(){};f.onload=l;f.open("GET",r);f.send(null)}}t.setAttribute("data-inprogress","")},styleElement:function(t){if(t.hasAttribute("data-noprefix"))return;var n=t.disabled;t.textContent=e.fix(t.textContent,!0,t);t.disabled=n},styleAttribute:function(t){var n=t.getAttribute("style");n=e.fix(n,!1,t);t.setAttribute("style",n)},process:function(){t('link[rel="stylesheet"]:not([data-inprogress])').forEach(StyleFix.link);t("style").forEach(StyleFix.styleElement);t("[style]").forEach(StyleFix.styleAttribute)},register:function(t,n){(e.fixers=e.fixers||[]).splice(n===undefined?e.fixers.length:n,0,t)},fix:function(t,n,r){for(var i=0;i<e.fixers.length;i++)t=e.fixers[i](t,n,r)||t;return t},camelCase:function(e){return e.replace(/-([a-z])/g,function(e,t){return t.toUpperCase()}).replace("-","")},deCamelCase:function(e){return e.replace(/[A-Z]/g,function(e){return"-"+e.toLowerCase()})}};(function(){setTimeout(function(){t('link[rel="stylesheet"]').forEach(StyleFix.link)},10);document.addEventListener("DOMContentLoaded",StyleFix.process,!1)})()})();(function(e){function t(e,t,r,i,s){e=n[e];if(e.length){var o=RegExp(t+"("+e.join("|")+")"+r,"gi");s=s.replace(o,i)}return s}if(!window.StyleFix||!window.getComputedStyle)return;var n=window.PrefixFree={prefixCSS:function(e,r,i){var s=n.prefix;n.functions.indexOf("linear-gradient")>-1&&(e=e.replace(/(\s|:|,)(repeating-)?linear-gradient\(\s*(-?\d*\.?\d*)deg/ig,function(e,t,n,r){return t+(n||"")+"linear-gradient("+(90-r)+"deg"}));e=t("functions","(\\s|:|,)","\\s*\\(","$1"+s+"$2(",e);e=t("keywords","(\\s|:)","(\\s|;|\\}|$)","$1"+s+"$2$3",e);e=t("properties","(^|\\{|\\s|;)","\\s*:","$1"+s+"$2:",e);if(n.properties.length){var o=RegExp("\\b("+n.properties.join("|")+")(?!:)","gi");e=t("valueProperties","\\b",":(.+?);",function(e){return e.replace(o,s+"$1")},e)}if(r){e=t("selectors","","\\b",n.prefixSelector,e);e=t("atrules","@","\\b","@"+s+"$1",e)}e=e.replace(RegExp("-"+s,"g"),"-");e=e.replace(/-\*-(?=[a-z]+)/gi,n.prefix);return e},property:function(e){return(n.properties.indexOf(e)?n.prefix:"")+e},value:function(e,r){e=t("functions","(^|\\s|,)","\\s*\\(","$1"+n.prefix+"$2(",e);e=t("keywords","(^|\\s)","(\\s|$)","$1"+n.prefix+"$2$3",e);return e},prefixSelector:function(e){return e.replace(/^:{1,2}/,function(e){return e+n.prefix})},prefixProperty:function(e,t){var r=n.prefix+e;return t?StyleFix.camelCase(r):r}};(function(){var e={},t=[],r={},i=getComputedStyle(document.documentElement,null),s=document.createElement("div").style,o=function(n){if(n.charAt(0)==="-"){t.push(n);var r=n.split("-"),i=r[1];e[i]=++e[i]||1;while(r.length>3){r.pop();var s=r.join("-");u(s)&&t.indexOf(s)===-1&&t.push(s)}}},u=function(e){return StyleFix.camelCase(e)in s};if(i.length>0)for(var a=0;a<i.length;a++)o(i[a]);else for(var f in i)o(StyleFix.deCamelCase(f));var l={uses:0};for(var c in e){var h=e[c];l.uses<h&&(l={prefix:c,uses:h})}n.prefix="-"+l.prefix+"-";n.Prefix=StyleFix.camelCase(n.prefix);n.properties=[];for(var a=0;a<t.length;a++){var f=t[a];if(f.indexOf(n.prefix)===0){var p=f.slice(n.prefix.length);u(p)||n.properties.push(p)}}n.Prefix=="Ms"&&!("transform"in s)&&!("MsTransform"in s)&&"msTransform"in s&&n.properties.push("transform","transform-origin");n.properties.sort()})();(function(){function i(e,t){r[t]="";r[t]=e;return!!r[t]}var e={"linear-gradient":{property:"backgroundImage",params:"red, teal"},calc:{property:"width",params:"1px + 5%"},element:{property:"backgroundImage",params:"#foo"},"cross-fade":{property:"backgroundImage",params:"url(a.png), url(b.png), 50%"}};e["repeating-linear-gradient"]=e["repeating-radial-gradient"]=e["radial-gradient"]=e["linear-gradient"];var t={initial:"color","zoom-in":"cursor","zoom-out":"cursor",box:"display",flexbox:"display","inline-flexbox":"display",flex:"display","inline-flex":"display",grid:"display","inline-grid":"display","min-content":"width"};n.functions=[];n.keywords=[];var r=document.createElement("div").style;for(var s in e){var o=e[s],u=o.property,a=s+"("+o.params+")";!i(a,u)&&i(n.prefix+a,u)&&n.functions.push(s)}for(var f in t){var u=t[f];!i(f,u)&&i(n.prefix+f,u)&&n.keywords.push(f)}})();(function(){function s(e){i.textContent=e+"{}";return!!i.sheet.cssRules.length}var t={":read-only":null,":read-write":null,":any-link":null,"::selection":null},r={keyframes:"name",viewport:null,document:'regexp(".")'};n.selectors=[];n.atrules=[];var i=e.appendChild(document.createElement("style"));for(var o in t){var u=o+(t[o]?"("+t[o]+")":"");!s(u)&&s(n.prefixSelector(u))&&n.selectors.push(o)}for(var a in r){var u=a+" "+(r[a]||"");!s("@"+u)&&s("@"+n.prefix+u)&&n.atrules.push(a)}e.removeChild(i)})();n.valueProperties=["transition","transition-property"];e.className+=" "+n.prefix;StyleFix.register(n.prefixCSS)})(document.documentElement);
/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
/*! NOTE: If you're already including a window.matchMedia polyfill via Modernizr or otherwise, you don't need this part */
window.matchMedia=window.matchMedia||function(a){"use strict";var c,d=a.documentElement,e=d.firstElementChild||d.firstChild,f=a.createElement("body"),g=a.createElement("div");return g.id="mq-test-1",g.style.cssText="position:absolute;top:-100em",f.style.background="none",f.appendChild(g),function(a){return g.innerHTML='&shy;<style media="'+a+'"> #mq-test-1 { width: 42px; }</style>',d.insertBefore(f,e),c=42===g.offsetWidth,d.removeChild(f),{matches:c,media:a}}}(document);

/*! Respond.js v1.1.0: min/max-width media query polyfill. (c) Scott Jehl. MIT/GPLv2 Lic. j.mp/respondjs  */
(function(a){"use strict";function x(){u(!0)}var b={};if(a.respond=b,b.update=function(){},b.mediaQueriesSupported=a.matchMedia&&a.matchMedia("only all").matches,!b.mediaQueriesSupported){var q,r,t,c=a.document,d=c.documentElement,e=[],f=[],g=[],h={},i=30,j=c.getElementsByTagName("head")[0]||d,k=c.getElementsByTagName("base")[0],l=j.getElementsByTagName("link"),m=[],n=function(){for(var b=0;l.length>b;b++){var c=l[b],d=c.href,e=c.media,f=c.rel&&"stylesheet"===c.rel.toLowerCase();d&&f&&!h[d]&&(c.styleSheet&&c.styleSheet.rawCssText?(p(c.styleSheet.rawCssText,d,e),h[d]=!0):(!/^([a-zA-Z:]*\/\/)/.test(d)&&!k||d.replace(RegExp.$1,"").split("/")[0]===a.location.host)&&m.push({href:d,media:e}))}o()},o=function(){if(m.length){var b=m.shift();v(b.href,function(c){p(c,b.href,b.media),h[b.href]=!0,a.setTimeout(function(){o()},0)})}},p=function(a,b,c){var d=a.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),g=d&&d.length||0;b=b.substring(0,b.lastIndexOf("/"));var h=function(a){return a.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,"$1"+b+"$2$3")},i=!g&&c;b.length&&(b+="/"),i&&(g=1);for(var j=0;g>j;j++){var k,l,m,n;i?(k=c,f.push(h(a))):(k=d[j].match(/@media *([^\{]+)\{([\S\s]+?)$/)&&RegExp.$1,f.push(RegExp.$2&&h(RegExp.$2))),m=k.split(","),n=m.length;for(var o=0;n>o;o++)l=m[o],e.push({media:l.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/)&&RegExp.$2||"all",rules:f.length-1,hasquery:l.indexOf("(")>-1,minw:l.match(/\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:l.match(/\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}u()},s=function(){var a,b=c.createElement("div"),e=c.body,f=!1;return b.style.cssText="position:absolute;font-size:1em;width:1em",e||(e=f=c.createElement("body"),e.style.background="none"),e.appendChild(b),d.insertBefore(e,d.firstChild),a=b.offsetWidth,f?d.removeChild(e):e.removeChild(b),a=t=parseFloat(a)},u=function(b){var h="clientWidth",k=d[h],m="CSS1Compat"===c.compatMode&&k||c.body[h]||k,n={},o=l[l.length-1],p=(new Date).getTime();if(b&&q&&i>p-q)return a.clearTimeout(r),r=a.setTimeout(u,i),void 0;q=p;for(var v in e)if(e.hasOwnProperty(v)){var w=e[v],x=w.minw,y=w.maxw,z=null===x,A=null===y,B="em";x&&(x=parseFloat(x)*(x.indexOf(B)>-1?t||s():1)),y&&(y=parseFloat(y)*(y.indexOf(B)>-1?t||s():1)),w.hasquery&&(z&&A||!(z||m>=x)||!(A||y>=m))||(n[w.media]||(n[w.media]=[]),n[w.media].push(f[w.rules]))}for(var C in g)g.hasOwnProperty(C)&&g[C]&&g[C].parentNode===j&&j.removeChild(g[C]);for(var D in n)if(n.hasOwnProperty(D)){var E=c.createElement("style"),F=n[D].join("\n");E.type="text/css",E.media=D,j.insertBefore(E,o.nextSibling),E.styleSheet?E.styleSheet.cssText=F:E.appendChild(c.createTextNode(F)),g.push(E)}},v=function(a,b){var c=w();c&&(c.open("GET",a,!0),c.onreadystatechange=function(){4!==c.readyState||200!==c.status&&304!==c.status||b(c.responseText)},4!==c.readyState&&c.send(null))},w=function(){var b=!1;try{b=new a.XMLHttpRequest}catch(c){b=new a.ActiveXObject("Microsoft.XMLHTTP")}return function(){return b}}();n(),b.update=n,a.addEventListener?a.addEventListener("resize",x,!1):a.attachEvent&&a.attachEvent("onresize",x)}})(this);
/*
 * easing.js
 * https://github.com/danheberden/easing.js
 *
 * Copyright (c) 2012 Dan Heberden
 * Licensed under the MIT license.
 */
(function(c){var h=c.easing=function(a,e,d,g){var b=/(InOut|In|Out)(\w+)?/.exec(a),c=l.In,f;d=d||0;g=g||1;b&&(c=b[2],f=m[c],c=l[b[1]]);f=f||[];a.call||(a=f[0]||h.easings[a]||function(a){return a});return 0>=e?d:1<=e?g:c(a,e,f[1],f[2])*(g-d)+d},l={In:function(a,e,d,b){return a(e,d,b)},Out:function(a,e,d,b){return 1-a(1-e,d,b)},InOut:function(a,b,d,c){return 0.5>b?a(2*b,d,c)/2:a(-2*b+2,d,c)/-2+1}},b={s:function(a,b,d){return 1-Math.pow(Math.sqrt(1-Math.pow(a,b||2)),d||2)},e:function(a,c){return 0.97*
Math.sin(2*Math.PI-a*Math.PI*(c+c-0.5))*b.s(a,2,1)},b:function(a,c){var d=4/7+c/50,g=1+a/(d/(Math.pow(2,c)-1)),h=~~(Math.log(g)/Math.log(2));return a>d?1-b.s(1-(-d+a)/(1-d),2):Math.sqrt(1-Math.pow(2*(g/Math.pow(2,h)-1)-1,2))*b.s((h+1)/c*d,3)},back:function(a){return a*a*(3*a-2)}},m=h.mappings={Quad:[b.s,2],Cubic:[b.s,3],Quart:[b.s,4],Quint:[b.s,5],Expo:[b.s,6,1],Sine:[b.s,2],Circ:[b.s,2,1],Elastic:[b.e,3],Bounce:[b.b,3],Back:[b.back]},k=c.jQuery;for(c=1;7>c;c++)m[c]=[b.s,c+1,4<c?1:2];h.easings={};
k&&k.each(m,function(a){k.each(l,function(b){var c="ease"+b+a;k.easing[c]=function(b,a,e,f,k){return h(c,a/k,e,f-e)}})})})(this);


$(document).ready(function() {
	
	$("a[href$='.pdf']").attr('target','_blank');
	
	// Verona doppelt in Studio-Header, zweites ausblenden
	// $('.site_it .list_studios_header li:nth-child(2)').hide().remove();
	
	// Qi² Schreibweise News
	setTimeout( function(){
		
		
		var headlinesqi = $(".news :header").filter(':contains("Qi²")');
		$(headlinesqi).each(function(){
		
			$(headlinesqi).removeAttr('title');
			var text = $(this).html();
			//console.log(text);
			var replaced = text.replace('Qi²', '<span class="McFitClass">Q<span style="text-transform:none;font-family: Arial, sans-serif;font-weight:bold">i</span>²</span>');
			//console.log(replaced);
			$(this).html(replaced);
		});
		
		var headlinesqia = $(".news-archiv :header a").filter(':contains("Qi²")');
		$(headlinesqia).each(function(){
		
			$(headlinesqia).removeAttr('title');
			var text = $(this).html();
			//console.log(text);
			var replaced = text.replace('Qi²', '<span class="McFitClass">Q<span style="text-transform:none;font-family: Arial, sans-serif;font-weight:bold">i</span>²</span>');
			//console.log(replaced);
			$(this).html(replaced);
		});
		
		var btnqi = $(".btn").filter(':contains("Qi²")');
		$(btnqi).each(function(){
		
			$(btnqi).removeAttr('title');
			var text = $(this).html();
			//console.log(text);
			var replaced = text.replace('Qi²', '<span class="McFitClass">Q<span style="text-transform:none;font-family: Arial, sans-serif;">i</span>²</span>');
			//console.log(replaced);
			$(this).html(replaced);
		});
		
		
		var headlinesqi = $(".btn, #main-breadcrump span").filter(':contains("McFIT")');
		$(headlinesqi).each(function(){
		
			$(headlinesqi).removeAttr('title');
			var text = $(this).html();
			 var replaced = text.replace('McFIT', '<span class="McFitClass">M<span style="text-transform:none;">c</span>FIT</span>');
			$(this).html(replaced);
		});
		
		var headlinemcfit = $(".news-archiv :header a,.news :header,.presse :header a,.presse :header,.presse h2").filter(':contains("McFIT")');
		$(headlinemcfit).each(function(){
		
			$(headlinemcfit).removeAttr('title');
			var text = $(this).html();
			var replaced = text.replace('McFIT', '<span class="McFitClass">M<span class="Msmall">c</span>FIT</span>');
			$(this).html(replaced);
		});
		
		var headlinemcfit2 = $(".presse h2").filter(':contains("MCFIT")');
		$(headlinemcfit2).each(function(){
			var text = $(this).html();
			//console.log(text);
			var replaced = text.replace('McFIT', '<span class="McFitClass">M<span class="Msmall">c</span>FIT</span>');
			$(this).html(replaced);
		});
		
		var headlinemcfit3 = $("h6").filter(':contains("McFIT")');
		$(headlinemcfit3).each(function(){
			var text = $(this).html();
			//console.log(text);
			var replaced = text.replace('McFIT', '<span class="McFitClass">M<span class="Msmall">c</span>FIT</span>');
			$(this).html(replaced);
		});
		
	}
	,10 ); 

// tooltip demo
    $('.headMod').tooltip();
    $('.popover-test').popover();
    

    // MMainnav
	var url = window.location.pathname;
	var filename = url.substring(url.lastIndexOf('/')+1);
			
    $("ul.level_1 li.NavTraining").replaceWith($("#varTraining"));
    $("#varTraining").css('display','block');
    $("ul.level_1 li.NavMitgliedschaft ").replaceWith($("#varMitgliedschaft"));
    $("#varMitgliedschaft").css('display','block');
	// Only show Flyout for Studios in DE
	if(url.substring(0,4) == '/de/') {
    	$("ul.level_1 li.nav_studio ").replaceWith($("#varStudios"));
    	$("#varStudios").css('display','block');
  	}
    $( ".site_de #varTraining" ).before( '<li class="onlyPhone"><a class=" " href="de/startseite.html">HOME</a></li>');
    $( ".site_at #varTraining" ).before( '<li class="onlyPhone"><a class=" " href="at/startseite.html">HOME</a></li>');
    $( ".site_it #varTraining" ).before( '<li class="onlyPhone"><a class=" " href="it/pagina-iniziale.html">HOME</a></li>');
    $( ".site_es #varTraining" ).before( '<li class="onlyPhone"><a class=" " href="es/pagina-principal.html">HOME</a></li>');
    $( ".site_pl #varTraining" ).before( '<li class="onlyPhone"><a class=" " href="pl/stronastartowa.html">HOME</a></li>');
    
    $( "li.probetrainingLink " ).before( '<li class="onlyPhone"><h4>PROBETRAINING</h4></li>');
    $( "li.probetrainingLinkIT" ).before( '<li class="onlyPhone"><h4>ALLENAMENTO DI PROVA</h4></li>');
    
    $( ".site_es li.es_probe " ).before( '<li class="onlyPhone"><h4>PRUEBA McFIT</h4></li>');
    
    $( ".site_de #varStudios" ).before( '<li class="onlyPhone"><h4>STUDIOS</h4></li>');
    $( ".site_at #varStudios" ).before( '<li class="onlyPhone"><h4>STUDIOS</h4></li>');
    $( ".site_it #varStudios" ).before( '<li class="onlyPhone"><h4>PALESTRE</h4></li>');
    $( ".site_es #varStudios" ).before( '<li class="onlyPhone"><h4>GIMNASIO</h4></li>');
    $( ".site_pl #varStudios" ).before( '<li class="onlyPhone"><h4>STUDIA</h4></li>');
    
    $( ".site_de li.modelwerden" ).before( '<li class="onlyPhone"><h4>MODEL WERDEN</h4></li>');
    
         
    $( ".site_de li.nav_studio" ).after( '<li class="onlyPhone"><a href="de/studiogesamtliste.html" title="McFIT Studios" class="nav_studio" rel="follow">Studio-Gesamtliste</a></li><li class="onlyPhone"><a href="de/umbauten.html" title="McFIT Studios Umbauten" class="nav_studio" rel="follow">Umbauten</a></li>');
    
   	
	sub_Mitgliedschaft = false;
	sub_Training = false;
	sub_Studio = false;

    
       $(screen).resize(function() {
            if(screen.width > 767){
				/*
				if ($('body').hasClass('webkit') && $('body').hasClass('chrome') && $('body').hasClass('phone')) {
					$('body').removeClass('phone').addClass('computer');
				}*/

          /* Selectfelder */
          $('select').not('select.pt-select').not('select.pt-selectSmall').wrap('<div class="styled-select" />');
				  // Select     
            // $('.pt-select').wrap('<div class="styled-select" />');
          $('.pt-selectSmall').wrap('<div class="styled-select small" />');
          
          // Mainnav
             $(".computer li#varStudios").not("ul.level_2 li.submenu").hoverIntent(function() {
              	$('#sub_Studio').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
              	//console.log('hover');
              });
			
			
			 $( ".tablet #varStudios a.dropdown-toggle" ).click(function( event ) {
				  event.preventDefault();
  				 $('#sub_Studio').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
  				 $('#sub_training').css('display','none');
  				 $('#sub_Mitgliedschaft').css('display','none');
  					
			 });
          
              $(".computer li#varMitgliedschaft").not("ul.level_2 li.submenu").hoverIntent(function() {
              	$('#sub_Mitgliedschaft').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
              });
			
			
			 $( ".tablet #varMitgliedschaft a.dropdown-toggle" ).click(function( event ) {
				  event.preventDefault();
  				 $('#sub_Mitgliedschaft').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
  				 $('#sub_training').css('display','none');
  				 $('#sub_Studio').css('display','none');
  					
			 });
			$( ".tablet #varTraining a.dropdown-toggle" ).click(function( event ) {
				  event.preventDefault();
  					$('#sub_training').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
  					 $('#sub_Mitgliedschaft').css('display','none');
  					 $('#sub_Studio').css('display','none');
			});
		
              	$(".computer li#varTraining").not("ul.level_2 li.submenu").hoverIntent(function() {
             	    $('#sub_training').stop(true, true).slideToggle('fast', "easeOutBack", function () {
					
                					if ($(this).is(':hidden')) {
                							sub_Training = false;
                						} else {
                							sub_Training = true;
                						}
                						// console.log('sub_Training' + ' is ' + sub_Training);
                						return false;
                    });
            	   });
            }else{
            	$(".computer ul.level_1 li.NavTraining").not("ul.level_2 li.submenu").hoverIntent(function() {
              	   $('ul.level_1 li.NavTraining ul.level_2').stop(true, true).slideToggle('fast', "easeOutBack", function () { });
             	});               
            }
        }).resize();


	$('.icon-chevron-up').click(function (e) {
		e.preventDefault();
		// console.log('sub_Training check is ' + sub_Training);
		$('.dropdown-menu:visible').hide();
		$("li#varTraining").not("ul.level_2 li.submenu").unbind();
		$("li#varTraining").not("ul.level_2 li.submenu").hoverIntent(function() {
             	   $('#sub_training').stop(true, true).slideToggle('fast', "easeOutBack", function () {
					
					if ($(this).is(':hidden')) {
							sub_Training = false;
						} else {
							sub_Training = true;
						}
					//	console.log('sub_Training2' + ' is ' + sub_Training);
						return false;
					});
        });
	});

  
   
	var $subs = $("li.submenu a.submenu,li.submenu span.submenu");
	$subs.append('  <b class="caret"></b>'); 
	
// News Achiv link 
	//$("#newsm").prepend("<p class='news_lnk'><i class='icon-angle-right'></i> <a href='de/news-archiv.html'  title='zum News-Archiv' >zum News-Archiv</a></p>");

	var social_classes ={de:"social_de", es:"social_es", at:"social_de", it:"social_it", pl:"social_pl"};
	var country=document.documentElement.lang;

 if ($(".owl-carousel").length > 0) {
	 $(".owl-carousel").owlCarousel({
	     //Basic Speeds
      slideSpeed : 200,
      paginationSpeed : 800,
   
      //Autoplay
      autoPlay : false,
      goToFirst : true,
      goToFirstSpeed : 1000,
   
      // Navigation
      navigation : false,
      navigationText : ["prev","next"],
      pagination : true,
      paginationNumbers: false,
   
      // Responsive 
      responsive: true,
      items : 5,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [980,5],
      itemsTablet: [767,5],
      itemsMobile : [479,5],
      
      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme"

	});

	 //Country settings social bar
	 $('[class^="social_"]').each(function(){$(this).hide();});
	 var wrapperelement = $('#SocialFooter .owl-wrapper-outer');
	 wrapperelement.css('margin', '0 auto');
	 $('.'+social_classes[country]).show();

	 var items = $('.'+social_classes[country]).size();
	 //console.log("Anzahl Items: "+items);
	 if(items<5){
		 console.log("Land: "+country);
		 social_width(social_classes[country], items);
	 }

	 $(window).on('resize', function(){
		 if(items < 5) {
			 social_width(social_classes[country], items);
		 }
	 });
}
	function social_width (social_class, item_size){
		var item_width = $('a.'+social_class).width();
		var wrapper_width = item_width*item_size;
		$('#SocialFooter .owl-wrapper-outer').width(wrapper_width);
	}

	if ($(".mobExplorer").length > 0) {
	 $(".mobExplorer").owlCarousel({
	  
      pagination : true,
       
      // Responsive 
      responsive: true,
      items : 4,
      itemsDesktop : [1392,3],
      itemsDesktopSmall : [1020,2],
      itemsTablet: [768,2],
      itemsMobile : [684,1],
      // Navigation
      navigation : false,
      navigationText : ["prev","next"],
      pagination : true,
      paginationNumbers: false,
      
      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme"


		});

	}
	if ($(".newsSlider").length > 0) {
	 $(".newsSlider").owlCarousel({
	  
      pagination : true,
       
      // Responsive 
      responsive: true,
      items : 4,
      itemsDesktop : [1200,3],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,3],
      itemsMobile : [479,1],
      
      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme"


		});

	}

if(screen.width<768){

   // Studiolink in Nav austauschen
   $( ".site_de li.nav_studio" ).html( '<a href="de/studios.html" title="McFIT Studios" class="nav_studio" rel="follow">Studiosuche</a>');
   $( ".site_at li.nav_studio" ).html( '<a href="at/studios.html" title="McFIT Studios" class="nav_studio" rel="follow">Studiosuche</a>');  
   $( ".site_de li.probetrainingLink" ).html( '<a href="de/probetraining.html" title="McFIT Probetraining" class="allgemein probetrainingLink sibling" rel="follow">Probetraining vereinbaren</a>');
   $( ".site_at li.probetrainingLink" ).html( '<a href="at/probetraining.html" title="McFIT Probetraining" class="allgemein probetrainingLink sibling" rel="follow">Probetraining vereinbaren</a>');
    $( ".site_it li.probetrainingLinkIT " ).html( '<a href="it/allenamento-di-prova.html" title="McFIT Allenamento di prova" class="allgemein terminalClassD probetrainingLinkIT sibling">Prova McFIT</a>');
     $( ".site_de li.modelwerden" ).html( '<a href="de/model-werden.html" title="McFIT Model werden" class="allgemein modelwerden sibling" rel="follow">McFIT Models</a>');    
   

  if ($(".TrainSlide").length > 0) {
   $(".TrainSlide").owlCarousel({
    
      pagination : true,
       
      // Responsive 
      responsive: true,
      
      itemsDesktop : [1200,3],
      itemsDesktopSmall : [980,3],
      itemsTablet: [768,1],
      itemsMobile : [479,1],
      
      // CSS Styles
      baseClass : "owl-carousel",
      theme : "owl-theme"


    });
  }
  }
	

// Footer ACCOrdion
    	$('.footer h4').click(function() {
      		$(this).toggleClass('open');
      		$(this).parent().find('ul').toggleClass('open');
      	});


// HEADER Unternehmen ACCOrdion
    	$('#SubNav h4').click(function() {
      		$(this).toggleClass('open');
      		$(this).parent().find('ul').toggleClass('open');
      	});


			function scrollOff(){
				 window.onmousewheel = document.onmousewheel = function(e) {
							e = e || window.event;
							if (e.preventDefault)
								e.preventDefault();
							e.returnValue = false;
				};
			}
			
			
			function scrollOn(){
				window.onmousewheel = document.onmousewheel = function(e) {
				 e = e || window.event;
				 e.returnValue = true;
				};
			}
                      
              // Fancybox Kursdetails
              $(".fancybox").fancybox({
              		'width'				: 900,
              		'height'			: 570,
              		'padding'			: 30,
              		'autoScale'			: true,
              		'transitionIn'		: 'fade',
              		'transitionOut'		: 'fade',
              		'type'				: 'iframe',
              		'centerOnScroll'	: true,
					'scrolling'			: 'no',
              		'overlayColor'		: '#000',
              		'overlayOpacity'	: 0.6,
					'onStart': function() { 
							$("body").css({'overflow':'hidden'}); 
							$("#fancybox-overlay").css({"position":"fixed"});
							}, 
							
					'onClosed': function() { 
							$("body").css({"overflow":"visible"}); 
							scrollOn();
							},
					'onComplete': function(){
						   scrollOff();
					}
              	});
              	
              // Fancybox Moods
              $(".areas").fancybox({
              		// 'width'				: 900,
              		 'height'			: 570,
              		'padding'			: 30,
              		'centerOnScroll'	: true,
              		'overlayColor'		: '#000',
              		'overlayOpacity'	: 0.6,
              		'autoScale'			: true,
              		'scrolling'			: 'no',
              		'autoDimensions'    : true,
              		'transitionIn'		: 'fade',
              		'transitionOut'		: 'fade',
					'onStart': function() { 
							$("body").css({'overflow':'hidden'}); 
							$("#fancybox-overlay").css({"position":"fixed"});
					},
					'onClosed': function() { 
						$("body").css({"overflow":"visible"});
						scrollOn(); 
					},
					'onComplete': function(){
						   scrollOff();
					}
              		
              	});
              	
              // Fancybox allgemein
              $(".fb").fancybox({
              		'width'				: 550,
              		'height'			: 600,
              		'padding'			: 0,
              		'centerOnScroll'	: true,
              		'autoScale'     	: false,
              		'scrolling'			: 'yes',
                      'transitionIn'		: 'none',
              		'transitionOut'		: 'none',
              		'overlayColor'		: '#000',
              		'overlayOpacity'	: 0.6,
              		'type'				: 'iframe',
					'onStart': function() { 
					$("body").css({'overflow':'hidden'}); 
						$("#fancybox-overlay").css({"position":"fixed"});
					}, 
					
					'onClosed': function() { 
					$("body").css({"overflow":"visible"});
					scrollOn(); 
					},
					'onComplete': function(){
						   scrollOff();
					}	
              	});


	
// McFit-Schreibweise
   var elem = $('h1:contains("McFIT"),h2:contains("McFIT"),a:contains("McFIT"),h3:contains("McFIT"),h4:contains("McFIT"),h5:contains("McFIT")');
    $(elem).each(function() {
    	var title = $(elem).find('a').attr('title');
    	$(elem).removeAttr('title');
    	var text = $(this).html();
    	var replaced = text.replace('McFIT', '<span class="McFitClass">M<span class="Msmall">c</span>FIT</span>');
    	$(this).html(replaced);
    	$(elem).find('a').attr('title', title);
    });
	
	var elem3 = $('figcaption:contains("McFIT")');
	  $(elem3).each(function() {
      	$(elem3).removeAttr('title');
	    var text = $(this).html();
	    var replaced = text.replace('McFIT', '<span class="McFitClass">M<span style="text-transform:none;">c</span>FIT</span>');
	    $(this).html(replaced);
	});

	  
	// Qi2-Schreibweise
    var elem2 = $('figcaption:contains("Qi²")');
	  $(elem2).each(function() {
      	$(elem2).removeAttr('title');
	    var text = $(this).html();
		
		//console.log(text);
	    var replaced = text.replace('Qi²', '<span class="McFitClass">Q<span style="text-transform:none;">i</span>²</span>');
	    $(this).html(replaced);
	});


	// Ultimate NY Body Plan kürzen

	var num = 20;
	$.each($('.tab-pane [class^=name] a'), function(){
		var cont= $(this).text(); 
		//if(cont.length >= num && cont.indexOf("II") == -1){ --> alte Abfrage
		if(cont.length >= num){
			cont = cont.substring(0,num)+'...';
			$(this).text(cont);}
	});
	
// scroll to
$(".scroll, .faqToc a").click(function(e){		
	e.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top-150}, 800);
});	

// back to top plugin
$(function() {
	$('.backToTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});

		
// Keyfacts Boxhöhe
	
var boxHoehe = [];
var greybox = $('.span4.greyBox');

if (greybox.length > 0) {
	$.each(greybox, function(){
		//console.log(navigator);	
		boxHoehe.push($(this).outerHeight());
		
	});
	var highestCol = Math.max.apply(Math, boxHoehe);
	
	var FIREFOX = /Firefox/i.test(navigator.userAgent);
	if (FIREFOX) {
		greybox.css('height', highestCol);
	}
	else {
		greybox.outerHeight(highestCol);
	}
}


var boxHoehe2 = [];
var greybox2 = $('.unternehmen-kontakt .greyBox');

if (greybox2.length > 0) {
	$.each(greybox2, function(){
		//console.log(navigator);	
		boxHoehe2.push($(this).outerHeight());
		
	});
	var highestCol2 = Math.max.apply(Math, boxHoehe2);
	
	var FIREFOX = /Firefox/i.test(navigator.userAgent);
	if (FIREFOX) {
		greybox2.css('height', highestCol2);
	}
	else {
		greybox2.outerHeight(highestCol2);
	}
}		
		


  $("#ctrl_1").not('.studioSidebar #ctrl_1').focus();

 $("#header input:text:visible:first").focus();
 $('input').attr({
    autocomplete: 'off',
    autocorrect: 'off',
	autocapitalize: 'off',
	spellcheck:'false' 
 });

 // Studiodetail 

$('.SpecialSlide' ).children().eq(3).addClass('noPadding');
// $('.TrainSlide').children()[3].addClass('test');




if ($("#mySliderTabs").length > 0) {
	$("#mySliderTabs").sliderTabs({
		autoplay: 12000,
		// Width of tab arrows in pixels
		classes: { // Custom classes to attach
			leftArrow: '', //  - Left arrow
			panel: '', //  - All content panels
			panelActive: '', //  - The selected content panel
			panelsContainer: '', //  - Parent div containing all hidden and shown panels
			rightArrow: '', //  - Right arrow
			tab: '', //  - All tabs (<li> elements)
			tabActive: '', //  - The selected tab
			tabsList: '', //  - The list of tabs (<ul> element)
		},
		defaultTab: 1, // Index of the default tab OR the jQuery object of the <li> element
		height: '', // Integer or '': Height in pixels of the whole widget. '' means fluid height
		position: "top", // 'top' or 'bottom': Orientation of the tabs relative to the content
		tabSliders: true, // Use sliding tabs. If false, overflow tabs are hidden
		tabSlideLength: 100, // Length in pixels to slide tabs when an arrow is clicked
		tabSlideSpeed: 200, // Time (in milliseconds) of the tab sliding animation
		transition: 'slide', // 'slide' or 'fade': The transition to use when changing panels
		transitionSpeed: 200,
		indicators: true,
		panelArrows: true,
		mousewheel: false,
		panelArrowsShowOnHover: true,
		arrowWidth: 35 // Time (in milliseconds) of the transition animation
	});
}

//Header MAIN NAV Vorbereitung Mobile 
$(".navbar-fixed-top").addClass( "static" );
$("#header").addClass( "raum" );


// ®-Schreibweise
    var elem = $('.ce_kursteaser_viewer h1:contains("®"),.ce_kursteaser_viewer p:contains("®"),.headerContainer h1:contains("®"),.ce_infogallery_viewer h1:contains("®"),.ce_infogallery_viewer h2:contains("®"),.ce_infogallery_viewer a:contains("®"),.ce_infogallery_viewer h3:contains("®")');
    $(elem).each(function() {
      $(elem).removeAttr('title');
      var text = $(this).html();
      var replaced = text.replace('®', '<sup>®</sup>');
      $(this).html(replaced);
    });

// $(window).resize(function() {
//   if ($(window).width() < 767) {
if(screen.width<768){


$('a.fancybox').click(function (e){
     e.preventDefault();
 });

// facebook like menu 
  /*  
 * jQuery mmenu v4.0.2
 * @requires jQuery 1.7.0 or later
 *
 * mmenu.frebsite.nl
 *  
 * Copyright (c) Fred Heusschen
 * www.frebsite.nl
 *
 * Dual licensed under the MIT and GPL licenses.
 * http://en.wikipedia.org/wiki/MIT_License
 * http://en.wikipedia.org/wiki/GNU_General_Public_License
 */


	!function(d){function p(a,b,g){if("object"!=typeof a&&(a={}),g)return"boolean"!=typeof a.isMenu&&(g=g.children(),a.isMenu=1==g.length&&g.is(b.panelNodeType)),a;if("object"!=typeof a.onClick&&(a.onClick={}),"undefined"!=typeof a.onClick.setLocationHref&&(d[f].deprecated("onClick.setLocationHref option","!onClick.preventDefault"),"boolean"==typeof a.onClick.setLocationHref&&(a.onClick.preventDefault=!a.onClick.setLocationHref)),a=d.extend(!0,{},d[f].defaults,a),d[f].useOverflowScrollingFallback()){switch(a.position){case "top":case "right":case "bottom":d[f].debug('position: "'+
a.position+'" not supported when using the overflowScrolling-fallback.'),a.position="left"}switch(a.zposition){case "front":case "next":d[f].debug('z-position: "'+a.zposition+'" not supported when using the overflowScrolling-fallback.'),a.zposition="back"}}return a}function s(a){return"object"!=typeof a&&(a={}),a=d.extend(!0,{},d[f].configuration,a),"string"!=typeof a.pageSelector&&(a.pageSelector="> "+a.pageNodetype),a}function t(){c.$wndw=d(window);c.$html=d("html");c.$body=d("body");c.$allMenus=
d();d.each([b,h,e],function(a,b){b.add=function(a){a=a.split(" ");for(var d in a)b[a[d]]=b.mm(a[d])}});b.mm=function(a){return"mm-"+a};b.add("menu ismenu panel list current highest hidden page blocker modal background opened opening subopen fullsubopen subclose subopened subtitle selected label nooverflowscrolling");b.umm=function(a){return"mm-"==a.slice(0,3)&&(a=a.slice(3)),a};h.mm=function(a){return"mm-"+a};h.add("parent style scrollTop offetLeft");e.mm=function(a){return a+".mm"};e.add("toggle open opening opened close closing closed keydown resize setPage setSelected transitionend touchstart touchend click scroll");
d[f].support.touch||(e.touchstart=e.mm("mousedown"),e.touchend=e.mm("mouseup"));d[f]._c=b;d[f]._d=h;d[f]._e=e;d[f].glbl=c;d[f].useOverflowScrollingFallback(q)}function r(a,b,g){var c=d[f].support.transition;"webkitTransition"==c?a.one("webkitTransitionEnd",b):c?a.one(e.transitionend,b):setTimeout(b,g)}function m(a,b,g,c){"string"==typeof a&&(a=d(a));g=g?e.touchstart:e.click;c||a.off(g);a.on(g,function(a){a.preventDefault();a.stopPropagation();b.call(this,a)})}var f="mmenu";if(!d[f]){var c={$wndw:null,
$html:null,$body:null,$page:null,$blck:null,$allMenus:null,$scrollTopNode:null},b={},e={},h={},u=0;d[f]=function(a,b,d){return c.$allMenus=c.$allMenus.add(a),this.$menu=a,this.opts=b,this.conf=d,this.serialnr=u++,this._init(),this};d[f].prototype={open:function(){return this._openSetup(),this._openFinish(),"open"},_openSetup:function(){var a=(c.$scrollTopNode||(0!=c.$html.scrollTop()?c.$scrollTopNode=c.$html:0!=c.$body.scrollTop()&&(c.$scrollTopNode=c.$body)),c.$scrollTopNode?c.$scrollTopNode.scrollTop():
0);this.$menu.addClass(b.current);c.$allMenus.not(this.$menu).trigger(e.close);c.$page.data(h.style,c.$page.attr("style")||"").data(h.scrollTop,a).data(h.offetLeft,c.$page.offset().left);var d=0;c.$wndw.off(e.resize).on(e.resize,function(a,e){if(c.$html.hasClass(b.opened)||e){var f=c.$wndw.width();f!=d&&(d=f,c.$page.width(f-c.$page.data(h.offetLeft)))}}).trigger(e.resize,[!0]);this.conf.preventTabbing&&c.$wndw.off(e.keydown).on(e.keydown,function(a){return 9==a.keyCode?(a.preventDefault(),!1):void 0});
this.opts.modal&&c.$html.addClass(b.modal);this.opts.moveBackground&&c.$html.addClass(b.background);"left"!=this.opts.position&&c.$html.addClass(b.mm(this.opts.position));"back"!=this.opts.zposition&&c.$html.addClass(b.mm(this.opts.zposition));this.opts.classes&&c.$html.addClass(this.opts.classes);c.$html.addClass(b.opened);this.$menu.addClass(b.opened);c.$page.scrollTop(a);this.$menu.scrollTop(0)},_openFinish:function(){$(".navbar-fixed-top").removeClass("static");$("#header").removeClass("raum");
var a=this;r(c.$page,function(){a.$menu.trigger(e.opened)},this.conf.transitionDuration);c.$html.addClass(b.opening);this.$menu.trigger(e.opening);window.scrollTo(0,1)},close:function(){$(".navbar-fixed-top").addClass("static");$("#header").addClass("raum");var a=this;return r(c.$page,function(){a.$menu.removeClass(b.current).removeClass(b.opened);c.$html.removeClass(b.opened).removeClass(b.modal).removeClass(b.background).removeClass(b.mm(a.opts.position)).removeClass(b.mm(a.opts.zposition));a.opts.classes&&
c.$html.removeClass(a.opts.classes);c.$wndw.off(e.resize).off(e.scroll);c.$page.attr("style",c.$page.data(h.style));c.$scrollTopNode&&c.$scrollTopNode.scrollTop(c.$page.data(h.scrollTop));a.$menu.trigger(e.closed)},this.conf.transitionDuration),c.$html.removeClass(b.opening),c.$wndw.off(e.keydown),this.$menu.trigger(e.closing),"close"},_init:function(){if(this.opts=p(this.opts,this.conf,this.$menu),this.direction=this.opts.slidingSubmenus?"horizontal":"vertical",this._initPage(c.$page),this._initMenu(),
this._initBlocker(),this._initPanles(),this._initLinks(),this._initOpenClose(),this._bindCustomEvents(),d[f].addons)for(var a=0;a<d[f].addons.length;a++)"function"==typeof this["_addon_"+d[f].addons[a]]&&this["_addon_"+d[f].addons[a]]()},_bindCustomEvents:function(){var a=this;this.$menu.off(e.open+" "+e.close+" "+e.setPage).on(e.open+" "+e.close+" "+e.setPage,function(a){a.stopPropagation()});this.$menu.on(e.open,function(c){return d(this).hasClass(b.current)?(c.stopImmediatePropagation(),!1):a.open(d(this),
a.opts,a.conf)}).on(e.close,function(c){return d(this).hasClass(b.current)?a.close(d(this),a.opts,a.conf):(c.stopImmediatePropagation(),!1)}).on(e.setPage,function(b,d){a._initPage(d);a._initOpenClose()});var c=this.$menu.find(this.opts.isMenu&&"horizontal"!=this.direction?"ul":"."+b.panel);c.off(e.toggle+" "+e.open+" "+e.close).on(e.toggle+" "+e.open+" "+e.close,function(a){a.stopPropagation()});"horizontal"==this.direction?c.on(e.open,function(){var c;c=d(this);var e=a.$menu;if(c.hasClass(b.current))c=
!1;else{var e=d("."+b.panel,e),f=e.filter("."+b.current);c=(e.removeClass(b.highest).removeClass(b.current).not(c).not(f).addClass(b.hidden),c.hasClass(b.opened)?f.addClass(b.highest).removeClass(b.opened).removeClass(b.subopened):(c.addClass(b.highest),f.addClass(b.subopened)),c.removeClass(b.hidden).removeClass(b.subopened).addClass(b.current).addClass(b.opened),"open")}return c}):c.on(e.toggle,function(){var a=d(this);return a.triggerHandler(a.parent().hasClass(b.opened)?e.close:e.open)}).on(e.open,
function(){return d(this).parent().addClass(b.opened),"open"}).on(e.close,function(){return d(this).parent().removeClass(b.opened),"close"})},_initBlocker:function(){var a=this;c.$blck||(c.$blck=d('<div id="'+b.blocker+'" />').appendTo(c.$body));m(c.$blck,function(){c.$html.hasClass(b.modal)||a.$menu.trigger(e.close)},!0,!0)},_initPage:function(a){a||(a=d(this.conf.pageSelector,c.$body),1<a.length&&(d[f].debug("Multiple nodes found for the page-node, all nodes are wrapped in one <"+this.conf.pageNodetype+
">."),a=a.wrapAll("<"+this.conf.pageNodetype+" />").parent()));a.addClass(b.page);c.$page=a},_initMenu:function(){this.conf.clone&&(this.$menu=this.$menu.clone(!0),this.$menu.add(this.$menu.find("*")).filter("[id]").each(function(){d(this).attr("id",b.mm(d(this).attr("id")))}));this.$menu.contents().each(function(){3==d(this)[0].nodeType&&d(this).remove()});this.$menu.prependTo("body").addClass(b.menu);this.$menu.addClass(b.mm(this.direction));this.opts.classes&&this.$menu.addClass(this.opts.classes);
this.opts.isMenu&&this.$menu.addClass(b.ismenu);"left"!=this.opts.position&&this.$menu.addClass(b.mm(this.opts.position));"back"!=this.opts.zposition&&this.$menu.addClass(b.mm(this.opts.zposition))},_initPanles:function(){var a=this;this.__refactorClass(d("ul."+this.conf.listClass,this.$menu),"list");this.opts.isMenu&&d("ul",this.$menu).not(".mm-nolist").addClass(b.list);var c=d("ul."+b.list+" > li",this.$menu);this.__refactorClass(c.filter("."+this.conf.selectedClass),"selected");this.__refactorClass(c.filter("."+
this.conf.labelClass),"label");c.off(e.setSelected).on(e.setSelected,function(a,e){a.stopPropagation();c.removeClass(b.selected);"boolean"!=typeof e&&(e=!0);e&&d(this).addClass(b.selected)});this.__refactorClass(d("."+this.conf.panelClass,this.$menu),"panel");this.$menu.children().filter(this.conf.panelNodeType).add(this.$menu.find("ul."+b.list).children().children().filter(this.conf.panelNodeType)).addClass(b.panel);var f=d("."+b.panel,this.$menu);f.each(function(c){var e=d(this);c=e.attr("id")||
b.mm("m"+a.serialnr+"-p"+c);e.attr("id",c)});f.find("."+b.panel).each(function(){var c=d(this),e=c.is("ul")?c:c.find("ul").first(),f=c.parent(),n=f.find("> a, > span"),g=f.closest("."+b.panel);if(c.data(h.parent,f),f.parent().is("ul."+b.list))c=d('<a class="'+b.subopen+'" href="#'+c.attr("id")+'" />').insertBefore(n),n.is("a")||c.addClass(b.fullsubopen),"horizontal"==a.direction&&e.prepend('<li class="'+b.subtitle+'"><a class="'+b.subclose+'" href="#'+g.attr("id")+'">'+n.text()+"</a></li>")});var k=
"horizontal"==this.direction?e.open:e.toggle;if(f.each(function(){var b=d(this),c=b.attr("id");m(d('a[href="#'+c+'"]',a.$menu),function(){b.trigger(k)})}),"horizontal"==this.direction){var l=d("ul."+b.list+" > li."+b.selected,this.$menu);l.add(l.parents("li")).parents("li").removeClass(b.selected).end().each(function(){var a=d(this),c=a.find("> ."+b.panel);c.length&&(a.parents("."+b.panel).addClass(b.subopened),c.addClass(b.opened))}).closest("."+b.panel).addClass(b.opened).parents("."+b.panel).addClass(b.subopened)}else d("li."+
b.selected,this.$menu).addClass(b.opened).parents("."+b.selected).removeClass(b.selected);l=f.filter("."+b.opened);l.length||(l=f.first());l.addClass(b.opened).last().addClass(b.current);"horizontal"==this.direction&&f.find("."+b.panel).appendTo(this.$menu)},_initLinks:function(){var a=this;d("ul."+b.list+" > li > a",this.$menu).not("."+b.subopen).not("."+b.subclose).not('[rel="external"]').not('[target="_blank"]').off(e.click).on(e.click,function(f){var g=d(this),k=g.attr("href");a.__valueOrFn(a.opts.onClick.setSelected,
g)&&g.parent().trigger(e.setSelected);(k=a.__valueOrFn(a.opts.onClick.preventDefault,g,"#"==k.slice(0,1)))&&(f.preventDefault(),f.stopPropagation());a.__valueOrFn(a.opts.onClick.blockUI,g,!k)&&c.$html.addClass(b.blocking);a.__valueOrFn(a.opts.onClick.close,g,k)&&a.$menu.triggerHandler(e.close)})},_initOpenClose:function(){var a=this,f=this.$menu.attr("id");f&&f.length&&(this.conf.clone&&(f=b.umm(f)),m(d('a[href="#'+f+'"]'),function(){a.$menu.trigger(e.open)}));(f=c.$page.attr("id"))&&f.length&&m(d('a[href="#'+
f+'"]'),function(){a.$menu.trigger(e.close)},!1,!0)},__valueOrFn:function(a,b,c){return"function"==typeof a?a.call(b[0]):"undefined"==typeof a&&"undefined"!=typeof c?c:a},__refactorClass:function(a,c){a.removeClass(this.conf[c+"Class"]).addClass(b[c])}};d.fn[f]=function(a,b){return c.$wndw||t(),a=p(a,b),b=s(b),this.each(function(){var c=d(this);c.data(f)||c.data(f,new d[f](c,a,b))})};d[f].version="4.0.2";d[f].defaults={position:"left",zposition:"back",moveBackground:!0,slidingSubmenus:!0,modal:!1,
classes:"",onClick:{setSelected:!0}};d[f].configuration={preventTabbing:!0,panelClass:"Panel",listClass:"List",selectedClass:"Selected",labelClass:"Label",pageNodetype:"div",panelNodeType:"ul, div",transitionDuration:400};(function(){var a=window.document,b=window.navigator.userAgent,c="ontouchstart"in a,a="WebkitOverflowScrolling"in a.documentElement.style,e;e=document.createElement("div").style;e="webkitTransition"in e?"webkitTransition":"transition"in e;b=0<=b.indexOf("Android")?2.4>parseFloat(b.slice(b.indexOf("Android")+
8)):!1;d[f].support={touch:c,transition:e,oldAndroidBrowser:b,overflowscrolling:c?a?!0:b?!1:!0:!0}})();d[f].useOverflowScrollingFallback=function(a){return c.$html?("boolean"==typeof a&&c.$html[a?"addClass":"removeClass"](b.nooverflowscrolling),c.$html.hasClass(b.nooverflowscrolling)):(q=a,a)};d[f].debug=function(){};d[f].deprecated=function(a,b){"undefined"!=typeof console&&"undefined"!=typeof console.warn&&console.warn("MMENU: "+a+" is deprecated, use "+b+" instead.")};var q=!d[f].support.overflowscrolling}}(jQuery);
  
      $(function() {
        $('nav#mainnav').mmenu({
        
          slidingSubmenus: false
        });
      });
 }     


});

<!-- +mg script für it welcome message -->

$(document).ready(function() {

  var hfModalTrigger = '#open-modal--happyfit',
      hfModalTriggerHref = $(hfModalTrigger).attr('href');

    openFullScreenModal = function(){


      $(hfModalTrigger).fancybox({
        'width': 1052,
        'height': 700,
        'padding': 0,
        'centerOnScroll': true,
        'overlayColor': '#000',
        'overlayOpacity': 0.6,
        'autoScale': true,
        'scrolling': 'no',
        'autoDimensions': false,
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'onStart': function() {
          $("body").css({'overflow':'hidden'});
          $("#fancybox-overlay").css({"position":"fixed"});
        },
        'onClosed': function() {
          $("body").css({"overflow":"visible"});
          //scrollOn();
        },
        'onComplete': function(){
          //scrollOff();
        }
      });

      $(hfModalTrigger).trigger('click');


    };

    var queryString = window.location.search;

    if (queryString == '?welcome-happyfit') {
  //console.log(queryString);
      var winHeight = $(window).height(),
          winWidth = $(window).width();

      $(hfModalTriggerHref).css({
        'height': winHeight,
        'width': winWidth
      });

      openFullScreenModal();
    };


  /* + mg add hidden Class to unused Form Container
   * @reuires /system/modules/w_studiosuche/assets/js/studiowidget.js */
  if ($('.studiosuche').length > 0) {
    var $hiddenFormParents = $('.hidden').parent('.styled-select, .submit_container');
    $hiddenFormParents.addClass('hidden');
  };

});

