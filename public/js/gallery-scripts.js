!function(t){var o={};function e(l){if(o[l])return o[l].exports;var r=o[l]={i:l,l:!1,exports:{}};return t[l].call(r.exports,r,r.exports,e),r.l=!0,r.exports}e.m=t,e.c=o,e.d=function(t,o,l){e.o(t,o)||Object.defineProperty(t,o,{enumerable:!0,get:l})},e.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},e.t=function(t,o){if(1&o&&(t=e(t)),8&o)return t;if(4&o&&"object"==typeof t&&t&&t.__esModule)return t;var l=Object.create(null);if(e.r(l),Object.defineProperty(l,"default",{enumerable:!0,value:t}),2&o&&"string"!=typeof t)for(var r in t)e.d(l,r,function(o){return t[o]}.bind(null,r));return l},e.n=function(t){var o=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(o,"a",o),o},e.o=function(t,o){return Object.prototype.hasOwnProperty.call(t,o)},e.p="/",e(e.s=3)}({3:function(t,o,e){t.exports=e("m6cL")},dwco:function(t,o,e){!function(){"use strict";t.exports={polyfill:function(){var t=window,o=document;if(!("scrollBehavior"in o.documentElement.style&&!0!==t.__forceSmoothScrollPolyfill__)){var e,l=t.HTMLElement||t.Element,r=468,n={scroll:t.scroll||t.scrollTo,scrollBy:t.scrollBy,elementScroll:l.prototype.scroll||s,scrollIntoView:l.prototype.scrollIntoView},i=t.performance&&t.performance.now?t.performance.now.bind(t.performance):Date.now,c=(e=t.navigator.userAgent,new RegExp(["MSIE ","Trident/","Edge/"].join("|")).test(e)?1:0);t.scroll=t.scrollTo=function(){void 0!==arguments[0]&&(!0!==f(arguments[0])?h.call(t,o.body,void 0!==arguments[0].left?~~arguments[0].left:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?~~arguments[0].top:t.scrollY||t.pageYOffset):n.scroll.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:t.scrollX||t.pageXOffset,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:t.scrollY||t.pageYOffset))},t.scrollBy=function(){void 0!==arguments[0]&&(f(arguments[0])?n.scrollBy.call(t,void 0!==arguments[0].left?arguments[0].left:"object"!=typeof arguments[0]?arguments[0]:0,void 0!==arguments[0].top?arguments[0].top:void 0!==arguments[1]?arguments[1]:0):h.call(t,o.body,~~arguments[0].left+(t.scrollX||t.pageXOffset),~~arguments[0].top+(t.scrollY||t.pageYOffset)))},l.prototype.scroll=l.prototype.scrollTo=function(){if(void 0!==arguments[0])if(!0!==f(arguments[0])){var t=arguments[0].left,o=arguments[0].top;h.call(this,this,void 0===t?this.scrollLeft:~~t,void 0===o?this.scrollTop:~~o)}else{if("number"==typeof arguments[0]&&void 0===arguments[1])throw new SyntaxError("Value could not be converted");n.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left:"object"!=typeof arguments[0]?~~arguments[0]:this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top:void 0!==arguments[1]?~~arguments[1]:this.scrollTop)}},l.prototype.scrollBy=function(){void 0!==arguments[0]&&(!0!==f(arguments[0])?this.scroll({left:~~arguments[0].left+this.scrollLeft,top:~~arguments[0].top+this.scrollTop,behavior:arguments[0].behavior}):n.elementScroll.call(this,void 0!==arguments[0].left?~~arguments[0].left+this.scrollLeft:~~arguments[0]+this.scrollLeft,void 0!==arguments[0].top?~~arguments[0].top+this.scrollTop:~~arguments[1]+this.scrollTop))},l.prototype.scrollIntoView=function(){if(!0!==f(arguments[0])){var e=u(this),l=e.getBoundingClientRect(),r=this.getBoundingClientRect();e!==o.body?(h.call(this,e,e.scrollLeft+r.left-l.left,e.scrollTop+r.top-l.top),"fixed"!==t.getComputedStyle(e).position&&t.scrollBy({left:l.left,top:l.top,behavior:"smooth"})):t.scrollBy({left:r.left,top:r.top,behavior:"smooth"})}else n.scrollIntoView.call(this,void 0===arguments[0]||arguments[0])}}function s(t,o){this.scrollLeft=t,this.scrollTop=o}function f(t){if(null===t||"object"!=typeof t||void 0===t.behavior||"auto"===t.behavior||"instant"===t.behavior)return!0;if("object"==typeof t&&"smooth"===t.behavior)return!1;throw new TypeError("behavior member of ScrollOptions "+t.behavior+" is not a valid value for enumeration ScrollBehavior.")}function a(t,o){return"Y"===o?t.clientHeight+c<t.scrollHeight:"X"===o?t.clientWidth+c<t.scrollWidth:void 0}function p(o,e){var l=t.getComputedStyle(o,null)["overflow"+e];return"auto"===l||"scroll"===l}function d(t){var o=a(t,"Y")&&p(t,"Y"),e=a(t,"X")&&p(t,"X");return o||e}function u(t){for(;t!==o.body&&!1===d(t);)t=t.parentNode||t.host;return t}function v(o){var e,l,n,c,s=(i()-o.startTime)/r;c=s=s>1?1:s,e=.5*(1-Math.cos(Math.PI*c)),l=o.startX+(o.x-o.startX)*e,n=o.startY+(o.y-o.startY)*e,o.method.call(o.scrollable,l,n),l===o.x&&n===o.y||t.requestAnimationFrame(v.bind(t,o))}function h(e,l,r){var c,f,a,p,d=i();e===o.body?(c=t,f=t.scrollX||t.pageXOffset,a=t.scrollY||t.pageYOffset,p=n.scroll):(c=e,f=e.scrollLeft,a=e.scrollTop,p=s),v({scrollable:c,method:p,startTime:d,startX:f,startY:a,x:l,y:r})}}}}()},m6cL:function(t,o,e){"use strict";e.r(o);var l=e("dwco");e.n(l).a.polyfill(),document.addEventListener("DOMContentLoaded",function(){var t=0,o=0,e=0,l=!1,r=0;window.matchMedia("(max-width: 768px)").matches&&(o=0,e=0,l=!1,t=.6,r="60vw"),window.matchMedia("(min-width: 992px)").matches&&(o=-300,e=20,t=.86,l=!0,r="30vw");var n=document.getElementById("animalito"),i=document.querySelector(".slogan-container");document.getElementById("scroll-btn").addEventListener("click",function(){document.getElementById("slogan-container").scrollIntoView({behavior:"smooth"})}),new IntersectionObserver(function(i){if(0!==i[0].intersectionRatio){var c=-1*i[0].boundingClientRect.top;if((c<o||c>e)&&l)return;c=i[0].intersectionRatio>=t?"".concat(c,"px + ").concat(r):"".concat(c,"px"),n.style.setProperty("--posX","".concat(c))}},{threshold:[0,.1,.2,.3,.4,.5,.6,.7,.8,.9,1]}).observe(i)})}});
//# sourceMappingURL=gallery-scripts.js.map