!function($){var t={width:function(t){var i=$("<span>"+t+"</span>").css({position:"absolute","white-space":"nowrap",visibility:"hidden"}).css("font",this.css("font"));$("body").append(i);var n=i.width();return i.remove(),n},bestfit:function(){for(var t=parseInt(this.css("font-size"),10),s=i(this);s.height()>this.height();)this.css("font-size",--t+"px");return this.css("font-size",--t+"px"),n(s),this},truncate:function(t){for(var s=i(this),e;s.height()>this.height();)e=s.html(),s.html(e.substring(0,e.length-4)),s.append("...");return n(s),this}};$.fn.textfit=function(i){return this.length>1?void this.each(function(){$(this).textfit(i)}):t[i]?t[i].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof i&&i?void $.error("Method "+i+" does not exist on jQuery.textfit"):t.init.apply(this,arguments)};var i=function(t){return t.wrapInner($("<div id='textfit-inner'></div>").css("width",t.css("width"))),$("#textfit-inner")},n=function(t){t.replaceWith(t.contents())}}(jQuery);