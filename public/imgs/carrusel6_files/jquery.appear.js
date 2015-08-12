/*
 * jQuery.appear
 * http://code.google.com/p/jquery-appear/
 *
 * Copyright (c) 2009 Michael Hixson
 * Licensed under the MIT license (http://www.opensource.org/licenses/mit-license.php)
 */ (function(a){a.fn.appear=function(d,b){var e=a.extend({one:!0},b);return this.each(function(){var c=a(this);c.appeared=!1;if(d){var g=a(window),f=function(){if(c.is(":visible")){var a=g.scrollLeft(),d=g.scrollTop(),b=c.offset(),f=b.left,b=b.top;b+c.height()>=d&&b<=d+g.height()&&f+c.width()>=a&&f<=a+g.width()?c.appeared||c.trigger("appear",e.data):c.appeared=!1}else c.appeared=!1},b=function(){c.appeared=!0;if(e.one){g.unbind("scroll",f);var b=a.inArray(f,a.fn.appear.checks);0<=b&&a.fn.appear.checks.splice(b,
1)}d.apply(this,arguments)};if(e.one)c.one("appear",e.data,b);else c.bind("appear",e.data,b);g.scroll(f);a.fn.appear.checks.push(f);f()}else c.trigger("appear",e.data)})};a.extend(a.fn.appear,{checks:[],timeout:null,checkAll:function(){var d=a.fn.appear.checks.length;if(0<d)for(;d--;)a.fn.appear.checks[d]()},run:function(){a.fn.appear.timeout&&clearTimeout(a.fn.appear.timeout);a.fn.appear.timeout=setTimeout(a.fn.appear.checkAll,20)}});a.each("append prepend after before attr removeAttr addClass removeClass toggleClass remove css show hide".split(" "),
function(d,b){var e=a.fn[b];e&&(a.fn[b]=function(){var b=e.apply(this,arguments);a.fn.appear.run();return b})})})(jQuery);