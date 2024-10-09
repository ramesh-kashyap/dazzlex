/* Toastify js 1.6.1 */
!function(t,o){"object"==typeof module&&module.exports?module.exports=o():t.Toastify=o()}(this,function(t){var o=function(t){return new o.lib.init(t)};function i(t,o){return!(!t||"string"!=typeof o)&&!!(t.className&&t.className.trim().split(/\s+/gi).indexOf(o)>-1)}return o.lib=o.prototype={toastify:"1.6.1",constructor:o,init:function(t){return t||(t={}),this.options={},this.toastElement=null,this.options.text=t.text||"Hi there!",this.options.duration=t.duration||3e3,this.options.selector=t.selector,this.options.callback=t.callback||function(){},this.options.destination=t.destination,this.options.newWindow=t.newWindow||!1,this.options.close=t.close||!1,this.options.gravity="bottom"==t.gravity?"toastify-bottom":"toastify-top",this.options.positionLeft=t.positionLeft||!1,this.options.position=t.position||"",this.options.backgroundColor=t.backgroundColor,this.options.avatar=t.avatar||"",this.options.className=t.className||"",this.options.stopOnFocus=void 0===t.stopOnFocus||t.stopOnFocus,this},buildToast:function(){if(!this.options)throw"Toastify is not initialized";var t=document.createElement("div");if(t.className="toastify on "+this.options.className,this.options.position?t.className+=" toastify-"+this.options.position:!0===this.options.positionLeft?(t.className+=" toastify-left",console.warn("Property `positionLeft` will be depreciated in further versions. Please use `position` instead.")):t.className+=" toastify-right",t.className+=" "+this.options.gravity,this.options.backgroundColor&&(t.style.background=this.options.backgroundColor),t.innerHTML=this.options.text,""!==this.options.avatar){var o=document.createElement("img");o.src=this.options.avatar,o.className="toastify-avatar","left"==this.options.position||!0===this.options.positionLeft?t.appendChild(o):t.insertAdjacentElement("beforeend",o)}if(!0===this.options.close){var i=document.createElement("span");if(i.innerHTML="&#10006;",i.className="toast-close",i.addEventListener("click",function(t){t.stopPropagation(),this.removeElement(t.target.parentElement),window.clearTimeout(t.target.parentElement.timeOutValue)}.bind(this)),this.options.stopOnFocus&&this.options.duration>0){var e=this;t.addEventListener("mouseover",function(o){window.clearTimeout(t.timeOutValue)}),t.addEventListener("mouseleave",function(){t.timeOutValue=window.setTimeout(function(){e.removeElement(t)},e.options.duration)})}var s=window.innerWidth>0?window.innerWidth:screen.width;("left"==this.options.position||!0===this.options.positionLeft)&&s>360?t.insertAdjacentElement("afterbegin",i):t.appendChild(i)}return void 0!==this.options.destination&&t.addEventListener("click",function(t){t.stopPropagation(),!0===this.options.newWindow?window.open(this.options.destination,"_blank"):window.location=this.options.destination}.bind(this)),t},showToast:function(){var t;if(this.toastElement=this.buildToast(),!(t=void 0===this.options.selector?document.body:document.getElementById(this.options.selector)))throw"Root element is not defined";return t.insertBefore(this.toastElement,t.firstChild),o.reposition(),this.options.duration>0&&(this.toastElement.timeOutValue=window.setTimeout(function(){this.removeElement(this.toastElement)}.bind(this),this.options.duration)),this},hideToast:function(){this.toastElement.timeOutValue&&clearTimeout(this.toastElement.timeOutValue),this.removeElement(this.toastElement)},removeElement:function(t){t.className=t.className.replace(" on",""),window.setTimeout(function(){t.parentNode.removeChild(t),this.options.callback.call(t),o.reposition()}.bind(this),400)}},o.reposition=function(){for(var t,o=$("#header:not(.header-home)").outerHeight()||0,e=window.pageYOffset||document.documentElement.scrollTop,s={top:20,bottom:20},n={top:e>=o?20:parseFloat(o+20-e),bottom:20},a={top:20,bottom:20},r=document.getElementsByClassName("toastify"),l=0;l<r.length;l++){t=!0===i(r[l],"toastify-top")?"toastify-top":"toastify-bottom";var p=r[l].offsetHeight;t=t.substr(9,t.length-1);(window.innerWidth>0?window.innerWidth:screen.width)<=360?(r[l].style[t]=a[t]+"px",a[t]+=p+15):!0===i(r[l],"toastify-left")?(r[l].style[t]=s[t]+"px",s[t]+=p+15):(r[l].style[t]=n[t]+"px",n[t]+=p+15)}return this},o.lib.init.prototype=o.lib,o});

/*  jquery.sumoselect - v3.0.3 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):"undefined"!=typeof exports?module.exports=e(require("jquery")):e(jQuery)}(function(c){c.fn.SumoSelect=function(l){var o=c.extend({placeholder:"Select Here",csvDispCount:3,captionFormat:"{0} Selected",captionFormatAllSelected:"{0} all selected!",floatWidth:400,forceCustomRendering:!1,nativeOnDevice:["Android","BlackBerry","iPhone","iPad","iPod","Opera Mini","IEMobile","Silk"],outputAsCSV:!1,csvSepChar:",",okCancelInMulti:!1,isClickAwayOk:!1,triggerChangeCombined:!0,selectAll:!1,choices:!1,search:!1,searchText:"Search...",searchFn:function(e,t){return e.toLowerCase().indexOf(t.toLowerCase())<0},noMatch:'No matches for "{0}"',prefix:"",locale:["OK","Cancel","Select All"],up:!1,showTitle:!0},l),e=this.each(function(){var n=this;!this.sumo&&c(this).is("select")&&(this.sumo={E:c(n),is_multi:c(n).attr("multiple"),select:"",caption:"",placeholder:"",captionFormatText:!!c(n).data("caption-format")&&c(n).data("caption-format"),optDiv:"",CaptionCont:"",ul:"",is_floating:!1,is_opened:!1,mob:!1,Pstate:[],lastUnselected:null,createElems:function(){var e=this;e.E.wrap('<div class="SumoSelect" tabindex="0" role="button" aria-expanded="false">'),e.select=e.E.parent(),e.caption=c("<span>"),e.CaptionCont=c('<p class="CaptionCont SelectBox" ><label><i></i></label></p>').attr("style",e.E.attr("style")).prepend(e.caption),e.select.append(e.CaptionCont),e.is_multi||(o.okCancelInMulti=!1),e.E.attr("disabled")&&e.select.addClass("disabled").removeAttr("tabindex"),o.outputAsCSV&&e.is_multi&&e.E.attr("name")&&(e.select.append(c('<input class="HEMANT123" type="hidden" />').attr("name",e.E.attr("name")).val(e.getSelStr())),e.E.removeAttr("name")),!e.isMobile()||o.forceCustomRendering?(e.E.attr("name")&&e.select.addClass("sumo_"+e.E.attr("name").replace(/\[\]/,"")),e.E.addClass("SumoUnder").attr("tabindex","-1"),e.optDiv=c('<div class="optWrapper '+(o.up?"up":"")+'">'),e.choiceList=c('<div class="select-choice-list">'),o.choices&&e.is_multi&&e.select.parent().append(e.choiceList),e.floatingList(),e.ul=c('<ul class="options">'),e.optDiv.append(e.ul),o.selectAll&&e.is_multi&&e.SelAll(),o.search&&e.Search(),e.ul.append(e.prepItems(e.E.children())),e.is_multi&&e.multiSelelect(),e.select.append(e.optDiv),e.basicEvents(),e.selAllState()):e.setNativeMobile()},prepItems:function(e,l){var i=[],a=this;return c(e).each(function(e,t){t=c(t),i.push(t.is("optgroup")?c('<li class="group '+(t[0].disabled?"disabled":"")+'"><label>'+t.attr("label")+"</label><ul></ul></li>").find("ul").append(a.prepItems(t.children(),t[0].disabled)).end():a.createLi(t,l))}),i},createLi:function(e,t){e.attr("value")||e.attr("value",e.val());var l=e.data("icon")?'<i class="'+e.data("icon")+'"></i> ':"",i=e.data("html")?e.data("html"):"",a=c('<li class="opt">'+l+"<label>"+e.text()+"</label>"+i+"</li>");return a.data("opt",e),e.data("li",a),this.is_multi&&a.prepend("<span><i></i></span>"),(e[0].disabled||t)&&(a=a.addClass("disabled")),this.onOptClick(a),e[0].selected&&a.addClass("selected"),e.attr("class")&&a.addClass(e.attr("class")),e.attr("title")&&a.attr("title",e.attr("title")),a},getSelStr:function(){var e=[];return this.E.find("option:selected").each(function(){e.push(c(this).val())}),e.join(o.csvSepChar)},multiSelelect:function(){var l=this;l.optDiv.addClass("multiple"),l.okbtn=c('<p tabindex="0" class="btnOk">'+o.locale[0]+"</p>").click(function(){l._okbtn(),l.hideOpts()}),l.cancelBtn=c('<p tabindex="0" class="btnCancel">'+o.locale[1]+"</p>").click(function(){l._cnbtn(),l.hideOpts()});var e=l.okbtn.add(l.cancelBtn);l.optDiv.append(c('<div class="MultiControls">').append(e)),e.on("keydown.sumo",function(e){var t=c(this);switch(e.which){case 32:case 13:t.trigger("click");break;case 9:if(t.hasClass("btnOk"))return;case 27:return l._cnbtn(),void l.hideOpts()}e.stopPropagation(),e.preventDefault()})},_okbtn:function(){var l=this,i=0;o.triggerChangeCombined&&(l.E.find("option:selected").length!==l.Pstate.length?i=1:l.E.find("option").each(function(e,t){t.selected&&l.Pstate.indexOf(e)<0&&(i=1)}),i&&(l.callChange(),l.setText()))},_cnbtn:function(){var e=this;e.E.find("option:selected").each(function(){this.selected=!1}),e.optDiv.find("li.selected").removeClass("selected");for(var t=0;t<e.Pstate.length;t++)e.E.find("option")[e.Pstate[t]].selected=!0,e.ul.find("li.opt").eq(e.Pstate[t]).addClass("selected");e.selAllState()},SelAll:function(){var e=this;e.is_multi&&(e.selAll=c('<p class="select-all"><span><i></i></span><label>'+o.locale[2]+"</label></p>"),e.optDiv.addClass("selall"),e.selAll.on("click",function(){e.selAll.toggleClass("selected"),e.toggSelAll(e.selAll.hasClass("selected"),1)}),e.optDiv.prepend(e.selAll))},Search:function(){var i=this,e=i.CaptionCont.addClass("search"),t=c('<p class="no-match">'),a=l.searchFn&&"function"==typeof l.searchFn?l.searchFn:o.searchFn;i.ftxt=c('<input type="text" class="search-txt" value="" placeholder="'+o.searchText+'">').on("click",function(e){e.stopPropagation()}),e.append(i.ftxt),i.optDiv.children("ul").after(t),i.ftxt.on("keyup.sumo",function(){var e=i.optDiv.find("ul.options li.opt").each(function(e,t){var l=(t=c(t)).data("opt")[0];l.hidden=a(t.text(),i.ftxt.val()),t.toggleClass("hidden",l.hidden)}).not(".hidden");t.html(o.noMatch.replace(/\{0\}/g,"<em></em>")).toggle(!e.length),t.find("em").text(i.ftxt.val()),i.selAllState()})},selAllState:function(){var e=this;if(o.selectAll&&e.is_multi){var l=0,i=0;e.optDiv.find("li.opt").not(".hidden").each(function(e,t){c(t).hasClass("selected")&&l++,c(t).hasClass("disabled")||i++}),l===i?e.selAll.removeClass("partial").addClass("selected"):0===l?e.selAll.removeClass("selected partial"):e.selAll.addClass("partial")}},showOpts:function(){var t=this;if(!t.E.attr("disabled")){if(t.E.trigger("sumo:opening",t),t.is_opened=!0,t.select.addClass("open").attr("aria-expanded","true"),t.E.trigger("sumo:opened",t),t.ftxt?t.ftxt.focus():t.select.focus(),c(document).on("click.sumo",function(e){if(!t.select.is(e.target)&&0===t.select.has(e.target).length){if(!t.is_opened)return;t.hideOpts(),o.okCancelInMulti&&(o.isClickAwayOk?t._okbtn():t._cnbtn())}}),t.is_floating){var e=t.optDiv.children("ul").outerHeight()+2;t.is_multi&&(e+=parseInt(t.optDiv.css("padding-bottom"))),t.optDiv.css("height",e),c("body").addClass("sumoStopScroll")}t.setPstate()}},setPstate:function(){var l=this;l.is_multi&&(l.is_floating||o.okCancelInMulti)&&(l.Pstate=[],l.E.find("option").each(function(e,t){t.selected&&l.Pstate.push(e)}))},callChange:function(){this.E.trigger("change").trigger("click")},hideOpts:function(){var e=this;e.is_opened&&(e.E.trigger("sumo:closing",e),e.is_opened=!1,e.select.removeClass("open").attr("aria-expanded","true").find("ul li.sel").removeClass("sel"),e.E.trigger("sumo:closed",e),c(document).off("click.sumo"),e.select.focus(),c("body").removeClass("sumoStopScroll"),o.search&&(e.ftxt.val(""),e.ftxt.trigger("keyup.sumo")))},setOnOpen:function(){var e=this.optDiv.find("li.opt:not(.hidden)").eq(o.search?0:this.E[0].selectedIndex);e.hasClass("disabled")&&!(e=e.next(":not(disabled)")).length||(this.optDiv.find("li.sel").removeClass("sel"),e.addClass("sel"),this.showOpts())},nav:function(e){var t,l=this,i=l.ul.find("li.opt:not(.disabled, .hidden)"),a=l.ul.find("li.opt.sel:not(.hidden)"),s=i.index(a);if(l.is_opened&&a.length){if(e&&0<s)t=i.eq(s-1);else{if(!(!e&&s<i.length-1&&-1<s))return;t=i.eq(s+1)}a.removeClass("sel"),a=t.addClass("sel");var n=l.ul,o=n.scrollTop(),c=a.position().top+o;c>=o+n.height()-a.outerHeight()&&n.scrollTop(c-n.height()+a.outerHeight()),c<o&&n.scrollTop(c)}else l.setOnOpen()},basicEvents:function(){var t=this;t.CaptionCont.click(function(e){t.E.trigger("click"),t.is_opened?t.hideOpts():t.showOpts(),e.stopPropagation()}),t.select.on("keydown.sumo",function(e){switch(e.which){case 38:t.nav(!0);break;case 40:t.nav(!1);break;case 65:if(t.is_multi&&e.ctrlKey){t.toggSelAll(!e.shiftKey,1);break}return;case 32:if(o.search&&t.ftxt.is(e.target))return;case 13:t.is_opened?t.optDiv.find("ul li.sel").trigger("click"):t.setOnOpen();break;case 9:return void(o.okCancelInMulti||t.hideOpts());case 27:return o.okCancelInMulti&&t._cnbtn(),void t.hideOpts();default:return}e.preventDefault()}),c(window).on("resize.sumo",function(){t.floatingList()})},onOptClick:function(e){var t=this;e.click(function(){var e=c(this);if(!e.hasClass("disabled")){t.is_multi?(e.toggleClass("selected"),e.data("opt")[0].selected=e.hasClass("selected"),!1===e.data("opt")[0].selected&&(t.lastUnselected=e.data("opt")[0].textContent),t.selAllState()):(e.parent().find("li.selected").removeClass("selected"),e.toggleClass("selected"),e.data("opt")[0].selected=!0),t.is_multi&&o.triggerChangeCombined&&(t.is_floating||o.okCancelInMulti)||(t.setText(),t.callChange()),t.is_multi||t.hideOpts()}})},setText:function(){var e=this;e.placeholder="",e.placeholderItems="";var t=!1;if(e.is_multi){var l=e.E.find(":selected").not(":disabled");e.captionFormatText?o.captionFormat=o.captionFormatAllSelected=e.captionFormatText:o.captionFormat=o.captionFormatAllSelected=o.placeholder+" <b>{0}</b>";for(var i=0;i<l.length;i++){if(i+1>=o.csvDispCount&&o.csvDispCount){l.length===e.E.find("option").length&&o.captionFormatAllSelected?e.placeholder=o.captionFormatAllSelected.replace(/\{0\}/g,l.length)+",":e.placeholder=o.captionFormat.replace(/\{0\}/g,l.length)+",";break}e.placeholder+=c(l[i]).text()+", "}e.placeholder=e.placeholder.replace(/,([^,]*)$/,"$1");for(var a=0;a<l.length;a++)e.placeholderItems+='<span class="select-choice">'+c(l[a]).text()+' <a class="select-choice-close" data-option-array-index="'+c(l[a]).val()+'"><i class="flaticon-close"></i></a></span>';o.choices&&(e.choiceList.html(e.placeholderItems),e.choiceList.find(".select-choice-close").on("click",function(){e.unSelectItem(c(this).data("option-array-index"))}))}else{ t=e.E.find(":selected").not(":disabled").data("icon"),th=e.E.find(":selected").not(":disabled").data("html")}e.placeholder=e.E.find(":selected").not(":disabled").text();var s=!1;e.placeholder||(s=!0,e.placeholder=e.E.data("placeholder"),e.placeholder||(e.placeholder=e.E.data("placeholder"))),e.placeholder=e.placeholder?o.prefix+" "+e.placeholder:o.placeholder,t?e.caption.html('<i class="ficon '+t+'"></i> '+e.placeholder):e.caption.html((th?th:'') + e.placeholder),o.showTitle&&e.CaptionCont.attr("title",e.placeholder);var n=e.select.find("input.HEMANT123");return n.length&&n.val(e.getSelStr()),s?(e.caption.addClass("placeholder"),e.CaptionCont.removeClass("selected")):(e.caption.removeClass("placeholder"),e.CaptionCont.addClass("selected")),e.placeholder},isMobile:function(){for(var e=navigator.userAgent||navigator.vendor||window.opera,t=0;t<o.nativeOnDevice.length;t++)if(0<e.toString().toLowerCase().indexOf(o.nativeOnDevice[t].toLowerCase()))return o.nativeOnDevice[t];return!1},setNativeMobile:function(){var e=this;e.E.addClass("SelectClass"),e.mob=!0,e.E.change(function(){e.setText()})},floatingList:function(){var e=this;e.is_floating=c(window).width()<=o.floatWidth,e.optDiv.toggleClass("isFloating",e.is_floating),e.is_floating||e.optDiv.css("height",""),e.optDiv.toggleClass("okCancelInMulti",o.okCancelInMulti&&!e.is_floating)},vRange:function(e){if(this.E.find("option").length<=e||e<0)throw"index out of bounds";return this},toggSel:function(e,t){var l,i=this;(l=o.choices&&i.is_multi?i.E.find('option[value="'+t+'"]')[0]||0:"number"==typeof t?(i.vRange(t),i.E.find("option")[t]):i.E.find('option[value="'+t+'"]')[0]||0)&&!l.disabled&&l.selected!==e&&(l.selected=e,i.mob||c(l).data("li").toggleClass("selected",e),i.callChange(),i.setPstate(),i.setText(),i.selAllState())},toggDis:function(e,t){var l=this.vRange(t);(l.E.find("option")[t].disabled=e)&&(l.E.find("option")[t].selected=!1),l.mob||l.optDiv.find("ul.options li").eq(t).toggleClass("disabled",e).removeClass("selected"),l.setText()},toggSumo:function(e){var t=this;return t.enabled=e,t.select.toggleClass("disabled",e),e?(t.E.attr("disabled","disabled"),t.select.removeAttr("tabindex")):(t.E.removeAttr("disabled"),t.select.attr("tabindex","0")),t},toggSelAll:function(i,e){var t=this;t.E.find("option:not(:disabled)").each(function(e,t){var l=t.selected;(t=c(t).data("li")).hasClass("hidden")||(i?l||t.trigger("click"):l&&t.trigger("click"))}),e||(!t.mob&&t.selAll&&t.selAll.removeClass("partial").toggleClass("selected",!!i),t.callChange(),t.setText(),t.setPstate())},reload:function(){var e=this.unload();return c(e).SumoSelect(o)},unload:function(){var e=this;return e.select.before(e.E),e.E.show(),o.outputAsCSV&&e.is_multi&&e.select.find("input.HEMANT123").length&&e.E.attr("name",e.select.find("input.HEMANT123").attr("name")),e.select.remove(),delete n.sumo,n},add:function(e,t,l){if(void 0===e)throw"No value to add";var i=this,a=i.E.find("option");"number"==typeof t&&(l=t,t=e),void 0===t&&(t=e);var s=c("<option></option>").val(e).html(t);if(a.length<l)throw"index out of bounds";return void 0===l||a.length===l?(i.E.append(s),i.mob||i.ul.append(i.createLi(s))):(a.eq(l).before(s),i.mob||i.ul.find("li.opt").eq(l).before(i.createLi(s))),n},remove:function(e){var t=this.vRange(e);t.E.find("option").eq(e).remove(),t.mob||t.optDiv.find("ul.options li").eq(e).remove(),t.setText()},removeAll:function(){for(var e=this.E.find("option"),t=e.length-1;0<=t;t--)!0!==e[t].selected&&this.remove(t)},find:function(e){var t=this.E.find("option");for(var l in t)if(t[l].value===e)return parseInt(l);return-1},selectItem:function(e){this.toggSel(!0,e)},unSelectItem:function(e){this.toggSel(!1,e)},selectAll:function(){this.toggSelAll(!0)},unSelectAll:function(){this.toggSelAll(!1)},disableItem:function(e){this.toggDis(!0,e)},enableItem:function(e){this.toggDis(!1,e)},enabled:!0,enable:function(){return this.toggSumo(!1)},disable:function(){return this.toggSumo(!0)},init:function(){return this.createElems(),this.setText(),this}},n.sumo.init())});return 1===e.length?e[0]:e}});


/* Tooltips */
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(jQuery),+function(t){"use strict";function e(e){return this.each(function(){var o=t(this),n=o.data("bs.tooltip"),s="object"==typeof e&&e;!n&&/destroy|hide/.test(e)||(n||o.data("bs.tooltip",n=new i(this,s)),"string"==typeof e&&n[e]())})}var i=function(t,e){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",t,e)};i.VERSION="3.3.7",i.TRANSITION_DURATION=150,i.DEFAULTS={animation:!0,placement:"bottom",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},i.prototype.init=function(e,i,o){if(this.enabled=!0,this.type=e,this.$element=t(i),this.options=this.getOptions(o),this.$viewport=this.options.viewport&&t(t.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var n=this.options.trigger.split(" "),s=n.length;s--;){var r=n[s];if("click"==r)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=r){var a="hover"==r?"mouseenter":"focusin",l="hover"==r?"mouseleave":"focusout";this.$element.on(a+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},i.prototype.getDefaults=function(){return i.DEFAULTS},i.prototype.getOptions=function(e){return e=t.extend({},this.getDefaults(),this.$element.data(),e),e.delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},i.prototype.getDelegateOptions=function(){var e={},i=this.getDefaults();return this._options&&t.each(this._options,function(t,o){i[t]!=o&&(e[t]=o)}),e},i.prototype.enter=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i)),e instanceof t.Event&&(i.inState["focusin"==e.type?"focus":"hover"]=!0),i.tip().hasClass("in")||"in"==i.hoverState?void(i.hoverState="in"):(clearTimeout(i.timeout),i.hoverState="in",i.options.delay&&i.options.delay.show?void(i.timeout=setTimeout(function(){"in"==i.hoverState&&i.show()},i.options.delay.show)):i.show())},i.prototype.isInStateTrue=function(){for(var t in this.inState)if(this.inState[t])return!0;return!1},i.prototype.leave=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i)),e instanceof t.Event&&(i.inState["focusout"==e.type?"focus":"hover"]=!1),i.isInStateTrue()?void 0:(clearTimeout(i.timeout),i.hoverState="out",i.options.delay&&i.options.delay.hide?void(i.timeout=setTimeout(function(){"out"==i.hoverState&&i.hide()},i.options.delay.hide)):i.hide())},i.prototype.show=function(){var e=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(e);var o=t.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(e.isDefaultPrevented()||!o)return;var n=this,s=this.tip(),r=this.getUID(this.type);this.setContent(),s.attr("id",r),this.$element.attr("aria-describedby",r),this.options.animation&&s.addClass("fade");var a="function"==typeof this.options.placement?this.options.placement.call(this,s[0],this.$element[0]):this.options.placement,l=/\s?auto?\s?/i,p=l.test(a);p&&(a=a.replace(l,"")||"top"),s.detach().css({top:0,left:0,display:"block"}).addClass(a).data("bs."+this.type,this),this.options.container?s.appendTo(this.options.container):s.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var h=this.getPosition(),f=s[0].offsetWidth,u=s[0].offsetHeight;if(p){var c=a,d=this.getPosition(this.$viewport);a="bottom"==a&&h.bottom+u>d.bottom?"top":"top"==a&&h.top-u<d.top?"bottom":"right"==a&&h.right+f>d.width?"left":"left"==a&&h.left-f<d.left?"right":a,s.removeClass(c).addClass(a)}var v=this.getCalculatedOffset(a,h,f,u);this.applyPlacement(v,a);var g=function(){var t=n.hoverState;n.$element.trigger("shown.bs."+n.type),n.hoverState=null,"out"==t&&n.leave(n)};g()}},i.prototype.applyPlacement=function(e,i){var o=this.tip(),n=o[0].offsetWidth,s=o[0].offsetHeight,r=parseInt(o.css("margin-top"),10),a=parseInt(o.css("margin-left"),10);isNaN(r)&&(r=0),isNaN(a)&&(a=0),e.top+=r,e.left+=a,t.offset.setOffset(o[0],t.extend({using:function(t){o.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),o.addClass("in");var l=o[0].offsetWidth,p=o[0].offsetHeight;"top"==i&&p!=s&&(e.top=e.top+s-p);var h=this.getViewportAdjustedDelta(i,e,l,p);h.left?e.left+=h.left:e.top+=h.top;var f=/top|bottom/.test(i),u=f?2*h.left-n+l:2*h.top-s+p,c=f?"offsetWidth":"offsetHeight";o.offset(e),this.replaceArrow(u,o[0][c],f)},i.prototype.replaceArrow=function(t,e,i){this.arrow().css(i?"left":"top",50*(1-t/e)+"%").css(i?"top":"left","")},i.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},i.prototype.hide=function(e){function o(){"in"!=n.hoverState&&s.detach(),n.$element&&n.$element.removeAttr("aria-describedby").trigger("hidden.bs."+n.type),e&&e()}var n=this,s=t(this.$tip),r=t.Event("hide.bs."+this.type);return this.$element.trigger(r),r.isDefaultPrevented()?void 0:(s.removeClass("in"),o(),this.hoverState=null,this)},i.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},i.prototype.hasContent=function(){return this.getTitle()},i.prototype.getPosition=function(e){e=e||this.$element;var i=e[0],o="BODY"==i.tagName,n=i.getBoundingClientRect();null==n.width&&(n=t.extend({},n,{width:n.right-n.left,height:n.bottom-n.top}));var s=window.SVGElement&&i instanceof window.SVGElement,r=o?{top:0,left:0}:s?null:e.offset(),a={scroll:o?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop()},l=o?{width:t(window).width(),height:t(window).height()}:null;return t.extend({},n,a,l,r)},i.prototype.getCalculatedOffset=function(t,e,i,o){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-i/2}:"top"==t?{top:e.top-o,left:e.left+e.width/2-i/2}:"left"==t?{top:e.top+e.height/2-o/2,left:e.left-i}:{top:e.top+e.height/2-o/2,left:e.left+e.width}},i.prototype.getViewportAdjustedDelta=function(t,e,i,o){var n={top:0,left:0};if(!this.$viewport)return n;var s=this.options.viewport&&this.options.viewport.padding||0,r=this.getPosition(this.$viewport);if(/right|left/.test(t)){var a=e.top-s-r.scroll,l=e.top+s-r.scroll+o;a<r.top?n.top=r.top-a:l>r.top+r.height&&(n.top=r.top+r.height-l)}else{var p=e.left-s,h=e.left+s+i;p<r.left?n.left=r.left-p:h>r.right&&(n.left=r.left+r.width-h)}return n},i.prototype.getTitle=function(){var t,e=this.$element,i=this.options;return t=e.attr("data-original-title")||("function"==typeof i.title?i.title.call(e[0]):i.title)},i.prototype.getUID=function(t){do t+=~~(1e6*Math.random());while(document.getElementById(t));return t},i.prototype.tip=function(){if(!this.$tip&&(this.$tip=t(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},i.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},i.prototype.enable=function(){this.enabled=!0},i.prototype.disable=function(){this.enabled=!1},i.prototype.toggleEnabled=function(){this.enabled=!this.enabled},i.prototype.toggle=function(e){var i=this;e&&(i=t(e.currentTarget).data("bs."+this.type),i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i))),e?(i.inState.click=!i.inState.click,i.isInStateTrue()?i.enter(i):i.leave(i)):i.tip().hasClass("in")?i.leave(i):i.enter(i)},i.prototype.destroy=function(){var t=this;clearTimeout(this.timeout),this.hide(function(){t.$element.off("."+t.type).removeData("bs."+t.type),t.$tip&&t.$tip.detach(),t.$tip=null,t.$arrow=null,t.$viewport=null,t.$element=null})};var o=t.fn.tooltip;t.fn.tooltip=e,t.fn.tooltip.Constructor=i,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=o,this}}(jQuery);


/* SimpleLightbox 1.12.1 */
!function(t,e,i,n){"use strict";t.fn.simpleLightbox=function(n){var a,n=t.extend({sourceAttr:"href",overlay:!0,spinner:!0,nav:!0,navText:["&lsaquo;","&rsaquo;"],captions:!0,captionDelay:0,captionSelector:"img",captionType:"attr",captionsData:"title",captionPosition:"bottom",captionClass:"",close:!0,closeText:"×",swipeClose:!0,showCounter:!0,fileExt:"png|jpg|jpeg|gif",animationSlide:!0,animationSpeed:250,preloading:!0,enableKeyboard:!0,loop:!0,rel:!1,docClose:!0,swipeTolerance:50,className:"simple-lightbox",widthRatio:.8,heightRatio:.9,disableRightClick:!1,disableScroll:!0,alertError:!0,alertErrorMessage:"Image not found, next image will be loaded",additionalHtml:!1,history:!0},n),o=(e.navigator.pointerEnabled||e.navigator.msPointerEnabled,0),s=0,l=t(),r=function(){var t=i.body||i.documentElement;return t=t.style,""===t.WebkitTransition?"-webkit-":""===t.MozTransition?"-moz-":""===t.OTransition?"-o-":""===t.transition&&""},c=!1,p=[],d=n.rel&&!1!==n.rel?function(e,i){return t(i.selector).filter(function(){return t(this).attr("rel")===e})}(n.rel,this):this,h=0,g=!1!==(r=r()),u="pushState"in history,f=!1,m=e.location,v=function(){return m.hash.substring(1)},b=v(),x=function(){v();var t="pid="+(D+1),e=m.href.split("#")[0]+"#"+t;u?history[f?"replaceState":"pushState"]("",i.title,e):f?m.replace(e):m.hash=t,f=!0},y=function(){u?history.pushState("",i.title,m.pathname+m.search):m.hash="",clearTimeout(a)},w=function(){f?a=setTimeout(x,800):x()},E="simplelb",C=t("<div>").addClass("sl-overlay"),T=t("<button>").addClass("sl-close").html(n.closeText),S=t("<div>").addClass("sl-spinner").html("<div></div>"),k=t("<div>").addClass("sl-navigation").html('<button class="sl-prev">'+n.navText[0]+'</button><button class="sl-next">'+n.navText[1]+"</button>"),I=t("<div>").addClass("sl-counter").html('<span class="sl-current"></span>/<span class="sl-total"></span>'),q=!1,D=0,M=t("<div>").addClass("sl-caption "+n.captionClass+" pos-"+n.captionPosition),A=t("<div>").addClass("sl-image"),R=t("<div>").addClass("sl-wrapper").addClass(n.className),O=function(e){if(!n.fileExt)return!0;var i=/\.([0-9a-z]+)(?=[?#])|(\.)(?:[\w]+)$/gim,a=t(e).attr(n.sourceAttr).match(i);return a&&"a"==t(e).prop("tagName").toLowerCase()&&new RegExp(".("+n.fileExt+")$","i").test(a)},P=function(e){e.trigger(t.Event("show.simplelightbox")),n.disableScroll&&(h=K("hide")),R.appendTo("body"),A.appendTo(R),n.overlay&&C.appendTo(t("body")),q=!0,D=d.index(e),l=t("<img/>").hide().attr("src",e.attr(n.sourceAttr)),-1==p.indexOf(e.attr(n.sourceAttr))&&p.push(e.attr(n.sourceAttr)),A.html("").attr("style",""),l.appendTo(A),X(),C.fadeIn("fast"),t(".sl-close").fadeIn("fast"),S.show(),k.fadeIn("fast"),t(".sl-wrapper .sl-counter .sl-current").text(D+1),I.fadeIn("fast"),z(),n.preloading&&Y(),setTimeout(function(){e.trigger(t.Event("shown.simplelightbox"))},n.animationSpeed)},z=function(i){if(l.length){var a=new Image,o=t(e).width()*n.widthRatio,s=t(e).height()*n.heightRatio;a.src=l.attr("src"),t(a).on("error",function(e){d.eq(D).trigger(t.Event("error.simplelightbox")),q=!1,c=!0,S.hide(),n.alertError&&alert(n.alertErrorMessage),j(1==i||-1==i?i:1)}),a.onload=function(){void 0!==i&&d.eq(D).trigger(t.Event("changed.simplelightbox")).trigger(t.Event((1===i?"nextDone":"prevDone")+".simplelightbox")),n.history&&w(),-1==p.indexOf(l.attr("src"))&&p.push(l.attr("src"));var r=a.width,u=a.height;if(r>o||u>s){var f=r/u>o/s?r/o:u/s;r/=f,u/=f}t(".sl-image").css({top:(t(e).height()-u)/2+"px",left:(t(e).width()-r-h)/2+"px"}),S.hide(),l.css({width:r+"px",height:u+"px"}).fadeIn("fast"),c=!0;var m,v="self"==n.captionSelector?d.eq(D):d.eq(D).find(n.captionSelector);if(m="data"==n.captionType?v.data(n.captionsData):"text"==n.captionType?v.html():v.prop(n.captionsData),n.loop||(0===D&&t(".sl-prev").hide(),D>=d.length-1&&t(".sl-next").hide(),D>0&&t(".sl-prev").show(),D<d.length-1&&t(".sl-next").show()),1==d.length&&t(".sl-prev, .sl-next").hide(),1==i||-1==i){var b={opacity:1};n.animationSlide&&(g?(W(0,100*i+"px"),setTimeout(function(){W(n.animationSpeed/1e3,"0px")},50)):b.left=parseInt(t(".sl-image").css("left"))+100*i+"px"),t(".sl-image").animate(b,n.animationSpeed,function(){q=!1,L(m)})}else q=!1,L(m);n.additionalHtml&&0===t(".sl-additional-html").length&&t("<div>").html(n.additionalHtml).addClass("sl-additional-html").appendTo(t(".sl-image"))}}},L=function(e){""!==e&&void 0!==e&&n.captions&&M.html(e).hide().appendTo(t(".sl-image")).delay(n.captionDelay).fadeIn("fast")},W=function(e,i){var n={};n[r+"transform"]="translateX("+i+")",n[r+"transition"]=r+"transform "+e+"s linear",t(".sl-image").css(n)},X=function(){t(e).on("resize."+E,z),t(i).on("click.simplelb touchstart."+E,".sl-close",function(t){t.preventDefault(),c&&H()}),n.history&&setTimeout(function(){t(e).on("hashchange."+E,function(){c&&v()===b&&H()})},40),k.on("click."+E,"button",function(e){e.preventDefault(),o=0,j(t(this).hasClass("sl-next")?1:-1)});var a=0,l=0,r=0,p=0,h=!1,u=0;A.on("touchstart.simplelb mousedown."+E,function(t){return!!h||(g&&(u=parseInt(A.css("left"))),h=!0,o=0,s=0,a=t.originalEvent.pageX||t.originalEvent.touches[0].pageX,r=t.originalEvent.pageY||t.originalEvent.touches[0].pageY,!1)}).on("touchmove.simplelb mousemove.simplelb pointermove MSPointerMove",function(t){if(!h)return!0;t.preventDefault(),l=t.originalEvent.pageX||t.originalEvent.touches[0].pageX,p=t.originalEvent.pageY||t.originalEvent.touches[0].pageY,o=a-l,s=r-p,n.animationSlide&&(g?W(0,-o+"px"):A.css("left",u-o+"px"))}).on("touchend.simplelb mouseup.simplelb touchcancel.simplelb mouseleave.simplelb pointerup pointercancel MSPointerUp MSPointerCancel",function(t){if(h){h=!1;var e=!0;n.loop||(0===D&&o<0&&(e=!1),D>=d.length-1&&o>0&&(e=!1)),Math.abs(o)>n.swipeTolerance&&e?j(o>0?1:-1):n.animationSlide&&(g?W(n.animationSpeed/1e3,"0px"):A.animate({left:u+"px"},n.animationSpeed/2)),n.swipeClose&&Math.abs(s)>50&&Math.abs(o)<n.swipeTolerance&&H()}})},N=function(){k.off("click","button"),t(i).off("click."+E,".sl-close"),t(e).off("resize."+E),t(e).off("hashchange."+E)},Y=function(){var e=D+1<0?d.length-1:D+1>=d.length-1?0:D+1,i=D-1<0?d.length-1:D-1>=d.length-1?0:D-1;t("<img />").attr("src",d.eq(e).attr(n.sourceAttr)).on("load",function(){-1==p.indexOf(t(this).attr("src"))&&p.push(t(this).attr("src")),d.eq(D).trigger(t.Event("nextImageLoaded.simplelightbox"))}),t("<img />").attr("src",d.eq(i).attr(n.sourceAttr)).on("load",function(){-1==p.indexOf(t(this).attr("src"))&&p.push(t(this).attr("src")),d.eq(D).trigger(t.Event("prevImageLoaded.simplelightbox"))})},j=function(e){d.eq(D).trigger(t.Event("change.simplelightbox")).trigger(t.Event((1===e?"next":"prev")+".simplelightbox"));var i=D+e;if(!(q||(i<0||i>=d.length)&&!1===n.loop)){D=i<0?d.length-1:i>d.length-1?0:i,t(".sl-wrapper .sl-counter .sl-current").text(D+1);var a={opacity:0};n.animationSlide&&(g?W(n.animationSpeed/1e3,-100*e-o+"px"):a.left=parseInt(t(".sl-image").css("left"))+-100*e+"px"),t(".sl-image").animate(a,n.animationSpeed,function(){setTimeout(function(){var i=d.eq(D);l.attr("src",i.attr(n.sourceAttr)),-1==p.indexOf(i.attr(n.sourceAttr))&&S.show(),t(".sl-caption").remove(),z(e),n.preloading&&Y()},100)})}},H=function(){if(!q){var e=d.eq(D),i=!1;e.trigger(t.Event("close.simplelightbox")),n.history&&y(),t(".sl-image img, .sl-overlay, .sl-close, .sl-navigation, .sl-image .sl-caption, .sl-counter").fadeOut("fast",function(){n.disableScroll&&K("show"),t(".sl-wrapper, .sl-overlay").remove(),N(),i||e.trigger(t.Event("closed.simplelightbox")),i=!0}),l=t(),c=!1,q=!1}},K=function(n){var a=0;if("hide"==n){var o=e.innerWidth;if(!o){var s=i.documentElement.getBoundingClientRect();o=s.right-Math.abs(s.left)}if(i.body.clientWidth<o){var l=i.createElement("div"),r=parseInt(t("body").css("padding-right"),10);l.className="sl-scrollbar-measure",t("body").append(l),a=l.offsetWidth-l.clientWidth,t(i.body)[0].removeChild(l),t("body").data("padding",r),a>0&&t("body").addClass("hidden-scroll").css({"padding-right":r+a})}}else t("body").removeClass("hidden-scroll").css({"padding-right":t("body").data("padding")});return a};return n.close&&T.appendTo(R),n.showCounter&&d.length>1&&(I.appendTo(R),I.find(".sl-total").text(d.length)),n.nav&&k.appendTo(R),n.spinner&&S.appendTo(R),d.on("click."+E,function(e){if(O(this)){if(e.preventDefault(),q)return!1;P(t(this))}}),t(i).on("click.simplelb touchstart."+E,function(e){c&&n.docClose&&0===t(e.target).closest(".sl-image").length&&0===t(e.target).closest(".sl-navigation").length&&H()}),n.disableRightClick&&t(i).on("contextmenu",".sl-image img",function(t){return!1}),n.enableKeyboard&&t(i).on("keyup."+E,function(t){if(o=0,c){t.preventDefault();var e=t.keyCode;27==e&&H(),37!=e&&39!=t.keyCode||j(39==t.keyCode?1:-1)}}),this.open=function(e){e=e||t(this[0]),P(e)},this.next=function(){j(1)},this.prev=function(){j(-1)},this.close=function(){H()},this.destroy=function(){t(i).off("click."+E).off("keyup."+E),H(),t(".sl-overlay, .sl-wrapper").remove(),this.off("click")},this.refresh=function(){this.destroy(),t(this).simpleLightbox(n)},this}}(jQuery,window,document);


/* Air datepicker */
!function(t,e,i){!function(){var s,a,n,h="2.2.3",o="datepicker",r=".datepicker-here",c=!1,d='<div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"></nav><div class="datepicker--content"></div></div>',l={classes:"",inline:!1,language:"ru",startDate:new Date,firstDay:"",weekends:[6,0],dateFormat:"",altField:"",altFieldDateFormat:"@",toggleSelected:!0,keyboardNav:!0,position:"bottom left",offset:12,view:"days",minView:"days",showOtherMonths:!0,selectOtherMonths:!0,moveToOtherMonthsOnSelect:!0,showOtherYears:!0,selectOtherYears:!0,moveToOtherYearsOnSelect:!0,minDate:"",maxDate:"",disableNavWhenOutOfRange:!0,multipleDates:!1,multipleDatesSeparator:",",range:!1,todayButton:!1,clearButton:!1,showEvent:"focus",autoClose:!1,monthsField:"monthsShort",prevHtml:'<svg><path d="M 17,12 l -5,5 l 5,5"></path></svg>',nextHtml:'<svg><path d="M 14,12 l 5,5 l -5,5"></path></svg>',navTitles:{days:"MM, <i>yyyy</i>",months:"yyyy",years:"yyyy1 - yyyy2"},timepicker:!1,onlyTimepicker:!1,dateTimeSeparator:" ",timeFormat:"",minHours:0,maxHours:24,minMinutes:0,maxMinutes:59,hoursStep:1,minutesStep:1,onSelect:"",onShow:"",onHide:"",onChangeMonth:"",onChangeYear:"",onChangeDecade:"",onChangeView:"",onRenderCell:""},u={ctrlRight:[17,39],ctrlUp:[17,38],ctrlLeft:[17,37],ctrlDown:[17,40],shiftRight:[16,39],shiftUp:[16,38],shiftLeft:[16,37],shiftDown:[16,40],altUp:[18,38],altRight:[18,39],altLeft:[18,37],altDown:[18,40],ctrlShiftUp:[16,17,38]},m=function(t,a){this.el=t,this.$el=e(t),this.opts=e.extend(!0,{},l,a,this.$el.data()),s==i&&(s=e("body")),this.opts.startDate||(this.opts.startDate=new Date),"INPUT"==this.el.nodeName&&(this.elIsInput=!0),this.opts.altField&&(this.$altField="string"==typeof this.opts.altField?e(this.opts.altField):this.opts.altField),this.inited=!1,this.visible=!1,this.silent=!1,this.currentDate=this.opts.startDate,this.currentView=this.opts.view,this._createShortCuts(),this.selectedDates=[],this.views={},this.keys=[],this.minRange="",this.maxRange="",this._prevOnSelectValue="",this.init()};n=m,n.prototype={VERSION:h,viewIndexes:["days","months","years"],init:function(){c||this.opts.inline||!this.elIsInput||this._buildDatepickersContainer(),this._buildBaseHtml(),this._defineLocale(this.opts.language),this._syncWithMinMaxDates(),this.elIsInput&&(this.opts.inline||(this._setPositionClasses(this.opts.position),this._bindEvents()),this.opts.keyboardNav&&!this.opts.onlyTimepicker&&this._bindKeyboardEvents(),this.$datepicker.on("mousedown",this._onMouseDownDatepicker.bind(this)),this.$datepicker.on("mouseup",this._onMouseUpDatepicker.bind(this))),this.opts.classes&&this.$datepicker.addClass(this.opts.classes),this.opts.timepicker&&(this.timepicker=new e.fn.datepicker.Timepicker(this,this.opts),this._bindTimepickerEvents()),this.opts.onlyTimepicker&&this.$datepicker.addClass("-only-timepicker-"),this.views[this.currentView]=new e.fn.datepicker.Body(this,this.currentView,this.opts),this.views[this.currentView].show(),this.nav=new e.fn.datepicker.Navigation(this,this.opts),this.view=this.currentView,this.$el.on("clickCell.adp",this._onClickCell.bind(this)),this.$datepicker.on("mouseenter",".datepicker--cell",this._onMouseEnterCell.bind(this)),this.$datepicker.on("mouseleave",".datepicker--cell",this._onMouseLeaveCell.bind(this)),this.inited=!0},_createShortCuts:function(){this.minDate=this.opts.minDate?this.opts.minDate:new Date(-86399999136e5),this.maxDate=this.opts.maxDate?this.opts.maxDate:new Date(86399999136e5)},_bindEvents:function(){this.$el.on(this.opts.showEvent+".adp",this._onShowEvent.bind(this)),this.$el.on("mouseup.adp",this._onMouseUpEl.bind(this)),this.$el.on("blur.adp",this._onBlur.bind(this)),this.$el.on("keyup.adp",this._onKeyUpGeneral.bind(this)),e(t).on("resize.adp",this._onResize.bind(this)),e("body").on("mouseup.adp",this._onMouseUpBody.bind(this))},_bindKeyboardEvents:function(){this.$el.on("keydown.adp",this._onKeyDown.bind(this)),this.$el.on("keyup.adp",this._onKeyUp.bind(this)),this.$el.on("hotKey.adp",this._onHotKey.bind(this))},_bindTimepickerEvents:function(){this.$el.on("timeChange.adp",this._onTimeChange.bind(this))},isWeekend:function(t){return-1!==this.opts.weekends.indexOf(t)},_defineLocale:function(t){"string"==typeof t?(this.loc=e.fn.datepicker.language[t],this.loc||(console.warn("Can't find language \""+t+'" in Datepicker.language, will use "ru" instead'),this.loc=e.extend(!0,{},e.fn.datepicker.language.ru)),this.loc=e.extend(!0,{},e.fn.datepicker.language.ru,e.fn.datepicker.language[t])):this.loc=e.extend(!0,{},e.fn.datepicker.language.ru,t),this.opts.dateFormat&&(this.loc.dateFormat=this.opts.dateFormat),this.opts.timeFormat&&(this.loc.timeFormat=this.opts.timeFormat),""!==this.opts.firstDay&&(this.loc.firstDay=this.opts.firstDay),this.opts.timepicker&&(this.loc.dateFormat=[this.loc.dateFormat,this.loc.timeFormat].join(this.opts.dateTimeSeparator)),this.opts.onlyTimepicker&&(this.loc.dateFormat=this.loc.timeFormat);var i=this._getWordBoundaryRegExp;(this.loc.timeFormat.match(i("aa"))||this.loc.timeFormat.match(i("AA")))&&(this.ampm=!0)},_buildDatepickersContainer:function(){c=!0,s.append('<div class="datepickers-container" id="datepickers-container"></div>'),a=e("#datepickers-container")},_buildBaseHtml:function(){var t,i=e('<div class="datepicker-inline">');t="INPUT"==this.el.nodeName?this.opts.inline?i.insertAfter(this.$el):a:i.appendTo(this.$el),this.$datepicker=e(d).appendTo(t),this.$content=e(".datepicker--content",this.$datepicker),this.$nav=e(".datepicker--nav",this.$datepicker)},_triggerOnChange:function(){if(!this.selectedDates.length){if(""===this._prevOnSelectValue)return;return this._prevOnSelectValue="",this.opts.onSelect("","",this)}var t,e=this.selectedDates,i=n.getParsedDate(e[0]),s=this,a=new Date(i.year,i.month,i.date,i.hours,i.minutes);t=e.map(function(t){return s.formatDate(s.loc.dateFormat,t)}).join(this.opts.multipleDatesSeparator),(this.opts.multipleDates||this.opts.range)&&(a=e.map(function(t){var e=n.getParsedDate(t);return new Date(e.year,e.month,e.date,e.hours,e.minutes)})),this._prevOnSelectValue=t,this.opts.onSelect(t,a,this)},next:function(){var t=this.parsedDate,e=this.opts;switch(this.view){case"days":this.date=new Date(t.year,t.month+1,1),e.onChangeMonth&&e.onChangeMonth(this.parsedDate.month,this.parsedDate.year);break;case"months":this.date=new Date(t.year+1,t.month,1),e.onChangeYear&&e.onChangeYear(this.parsedDate.year);break;case"years":this.date=new Date(t.year+10,0,1),e.onChangeDecade&&e.onChangeDecade(this.curDecade)}},prev:function(){var t=this.parsedDate,e=this.opts;switch(this.view){case"days":this.date=new Date(t.year,t.month-1,1),e.onChangeMonth&&e.onChangeMonth(this.parsedDate.month,this.parsedDate.year);break;case"months":this.date=new Date(t.year-1,t.month,1),e.onChangeYear&&e.onChangeYear(this.parsedDate.year);break;case"years":this.date=new Date(t.year-10,0,1),e.onChangeDecade&&e.onChangeDecade(this.curDecade)}},formatDate:function(t,e){e=e||this.date;var i,s=t,a=this._getWordBoundaryRegExp,h=this.loc,o=n.getLeadingZeroNum,r=n.getDecade(e),c=n.getParsedDate(e),d=c.fullHours,l=c.hours,u=t.match(a("aa"))||t.match(a("AA")),m="am",p=this._replacer;switch(this.opts.timepicker&&this.timepicker&&u&&(i=this.timepicker._getValidHoursFromDate(e,u),d=o(i.hours),l=i.hours,m=i.dayPeriod),!0){case/@/.test(s):s=s.replace(/@/,e.getTime());case/aa/.test(s):s=p(s,a("aa"),m);case/AA/.test(s):s=p(s,a("AA"),m.toUpperCase());case/dd/.test(s):s=p(s,a("dd"),c.fullDate);case/d/.test(s):s=p(s,a("d"),c.date);case/DD/.test(s):s=p(s,a("DD"),h.days[c.day]);case/D/.test(s):s=p(s,a("D"),h.daysShort[c.day]);case/mm/.test(s):s=p(s,a("mm"),c.fullMonth);case/m/.test(s):s=p(s,a("m"),c.month+1);case/MM/.test(s):s=p(s,a("MM"),this.loc.months[c.month]);case/M/.test(s):s=p(s,a("M"),h.monthsShort[c.month]);case/ii/.test(s):s=p(s,a("ii"),c.fullMinutes);case/i/.test(s):s=p(s,a("i"),c.minutes);case/hh/.test(s):s=p(s,a("hh"),d);case/h/.test(s):s=p(s,a("h"),l);case/yyyy/.test(s):s=p(s,a("yyyy"),c.year);case/yyyy1/.test(s):s=p(s,a("yyyy1"),r[0]);case/yyyy2/.test(s):s=p(s,a("yyyy2"),r[1]);case/yy/.test(s):s=p(s,a("yy"),c.year.toString().slice(-2))}return s},_replacer:function(t,e,i){return t.replace(e,function(t,e,s,a){return e+i+a})},_getWordBoundaryRegExp:function(t){var e="\\s|\\.|-|/|\\\\|,|\\$|\\!|\\?|:|;";return new RegExp("(^|>|"+e+")("+t+")($|<|"+e+")","g")},selectDate:function(t){var e=this,i=e.opts,s=e.parsedDate,a=e.selectedDates,h=a.length,o="";if(Array.isArray(t))return void t.forEach(function(t){e.selectDate(t)});if(t instanceof Date){if(this.lastSelectedDate=t,this.timepicker&&this.timepicker._setTime(t),e._trigger("selectDate",t),this.timepicker&&(t.setHours(this.timepicker.hours),t.setMinutes(this.timepicker.minutes)),"days"==e.view&&t.getMonth()!=s.month&&i.moveToOtherMonthsOnSelect&&(o=new Date(t.getFullYear(),t.getMonth(),1)),"years"==e.view&&t.getFullYear()!=s.year&&i.moveToOtherYearsOnSelect&&(o=new Date(t.getFullYear(),0,1)),o&&(e.silent=!0,e.date=o,e.silent=!1,e.nav._render()),i.multipleDates&&!i.range){if(h===i.multipleDates)return;e._isSelected(t)||e.selectedDates.push(t)}else i.range?2==h?(e.selectedDates=[t],e.minRange=t,e.maxRange=""):1==h?(e.selectedDates.push(t),e.maxRange?e.minRange=t:e.maxRange=t,n.bigger(e.maxRange,e.minRange)&&(e.maxRange=e.minRange,e.minRange=t),e.selectedDates=[e.minRange,e.maxRange]):(e.selectedDates=[t],e.minRange=t):e.selectedDates=[t];e._setInputValue(),i.onSelect&&e._triggerOnChange(),i.autoClose&&!this.timepickerIsActive&&(i.multipleDates||i.range?i.range&&2==e.selectedDates.length&&e.hide():e.hide()),e.views[this.currentView]._render()}},removeDate:function(t){var e=this.selectedDates,i=this;if(t instanceof Date)return e.some(function(s,a){return n.isSame(s,t)?(e.splice(a,1),i.selectedDates.length?i.lastSelectedDate=i.selectedDates[i.selectedDates.length-1]:(i.minRange="",i.maxRange="",i.lastSelectedDate=""),i.views[i.currentView]._render(),i._setInputValue(),i.opts.onSelect&&i._triggerOnChange(),!0):void 0})},today:function(){this.silent=!0,this.view=this.opts.minView,this.silent=!1,this.date=new Date,this.opts.todayButton instanceof Date&&this.selectDate(this.opts.todayButton)},clear:function(){this.selectedDates=[],this.minRange="",this.maxRange="",this.views[this.currentView]._render(),this._setInputValue(),this.opts.onSelect&&this._triggerOnChange()},update:function(t,i){var s=arguments.length,a=this.lastSelectedDate;return 2==s?this.opts[t]=i:1==s&&"object"==typeof t&&(this.opts=e.extend(!0,this.opts,t)),this._createShortCuts(),this._syncWithMinMaxDates(),this._defineLocale(this.opts.language),this.nav._addButtonsIfNeed(),this.opts.onlyTimepicker||this.nav._render(),this.views[this.currentView]._render(),this.elIsInput&&!this.opts.inline&&(this._setPositionClasses(this.opts.position),this.visible&&this.setPosition(this.opts.position)),this.opts.classes&&this.$datepicker.addClass(this.opts.classes),this.opts.onlyTimepicker&&this.$datepicker.addClass("-only-timepicker-"),this.opts.timepicker&&(a&&this.timepicker._handleDate(a),this.timepicker._updateRanges(),this.timepicker._updateCurrentTime(),a&&(a.setHours(this.timepicker.hours),a.setMinutes(this.timepicker.minutes))),this._setInputValue(),this},_syncWithMinMaxDates:function(){var t=this.date.getTime();this.silent=!0,this.minTime>t&&(this.date=this.minDate),this.maxTime<t&&(this.date=this.maxDate),this.silent=!1},_isSelected:function(t,e){var i=!1;return this.selectedDates.some(function(s){return n.isSame(s,t,e)?(i=s,!0):void 0}),i},_setInputValue:function(){var t,e=this,i=e.opts,s=e.loc.dateFormat,a=i.altFieldDateFormat,n=e.selectedDates.map(function(t){return e.formatDate(s,t)});i.altField&&e.$altField.length&&(t=this.selectedDates.map(function(t){return e.formatDate(a,t)}),t=t.join(this.opts.multipleDatesSeparator),this.$altField.val(t)),n=n.join(this.opts.multipleDatesSeparator),this.$el.val(n)},_isInRange:function(t,e){var i=t.getTime(),s=n.getParsedDate(t),a=n.getParsedDate(this.minDate),h=n.getParsedDate(this.maxDate),o=new Date(s.year,s.month,a.date).getTime(),r=new Date(s.year,s.month,h.date).getTime(),c={day:i>=this.minTime&&i<=this.maxTime,month:o>=this.minTime&&r<=this.maxTime,year:s.year>=a.year&&s.year<=h.year};return e?c[e]:c.day},_getDimensions:function(t){var e=t.offset();return{width:t.outerWidth(),height:t.outerHeight(),left:e.left,top:e.top}},_getDateFromCell:function(t){var e=this.parsedDate,s=t.data("year")||e.year,a=t.data("month")==i?e.month:t.data("month"),n=t.data("date")||1;return new Date(s,a,n)},_setPositionClasses:function(t){t=t.split(" ");var e=t[0],i=t[1],s="datepicker -"+e+"-"+i+"- -from-"+e+"-";this.visible&&(s+=" active"),this.$datepicker.removeAttr("class").addClass(s)},setPosition:function(t){t=t||this.opts.position;var e,i,s=this._getDimensions(this.$el),a=this._getDimensions(this.$datepicker),n=t.split(" "),h=this.opts.offset,o=n[0],r=n[1];switch(o){case"top":e=s.top-a.height-h;break;case"right":i=s.left+s.width+h;break;case"bottom":e=s.top+s.height+h;break;case"left":i=s.left-a.width-h}switch(r){case"top":e=s.top;break;case"right":i=s.left+s.width-a.width;break;case"bottom":e=s.top+s.height-a.height;break;case"left":i=s.left;break;case"center":/left|right/.test(o)?e=s.top+s.height/2-a.height/2:i=s.left+s.width/2-a.width/2}this.$datepicker.css({left:i,top:e})},show:function(){var t=this.opts.onShow;this.setPosition(this.opts.position),this.$datepicker.addClass("active"),this.visible=!0,t&&this._bindVisionEvents(t)},hide:function(){var t=this.opts.onHide;this.$datepicker.removeClass("active").css({left:"-100000px"}),this.focused="",this.keys=[],this.inFocus=!1,this.visible=!1,this.$el.blur(),t&&this._bindVisionEvents(t)},down:function(t){this._changeView(t,"down")},up:function(t){this._changeView(t,"up")},_bindVisionEvents:function(t){this.$datepicker.off("transitionend.dp"),t(this,!1),this.$datepicker.one("transitionend.dp",t.bind(this,this,!0))},_changeView:function(t,e){t=t||this.focused||this.date;var i="up"==e?this.viewIndex+1:this.viewIndex-1;i>2&&(i=2),0>i&&(i=0),this.silent=!0,this.date=new Date(t.getFullYear(),t.getMonth(),1),this.silent=!1,this.view=this.viewIndexes[i]},_handleHotKey:function(t){var e,i,s,a=n.getParsedDate(this._getFocusedDate()),h=this.opts,o=!1,r=!1,c=!1,d=a.year,l=a.month,u=a.date;switch(t){case"ctrlRight":case"ctrlUp":l+=1,o=!0;break;case"ctrlLeft":case"ctrlDown":l-=1,o=!0;break;case"shiftRight":case"shiftUp":r=!0,d+=1;break;case"shiftLeft":case"shiftDown":r=!0,d-=1;break;case"altRight":case"altUp":c=!0,d+=10;break;case"altLeft":case"altDown":c=!0,d-=10;break;case"ctrlShiftUp":this.up()}s=n.getDaysCount(new Date(d,l)),i=new Date(d,l,u),u>s&&(u=s),i.getTime()<this.minTime?i=this.minDate:i.getTime()>this.maxTime&&(i=this.maxDate),this.focused=i,e=n.getParsedDate(i),o&&h.onChangeMonth&&h.onChangeMonth(e.month,e.year),r&&h.onChangeYear&&h.onChangeYear(e.year),c&&h.onChangeDecade&&h.onChangeDecade(this.curDecade)},_registerKey:function(t){var e=this.keys.some(function(e){return e==t});e||this.keys.push(t)},_unRegisterKey:function(t){var e=this.keys.indexOf(t);this.keys.splice(e,1)},_isHotKeyPressed:function(){var t,e=!1,i=this,s=this.keys.sort();for(var a in u)t=u[a],s.length==t.length&&t.every(function(t,e){return t==s[e]})&&(i._trigger("hotKey",a),e=!0);return e},_trigger:function(t,e){this.$el.trigger(t,e)},_focusNextCell:function(t,e){e=e||this.cellType;var i=n.getParsedDate(this._getFocusedDate()),s=i.year,a=i.month,h=i.date;if(!this._isHotKeyPressed()){switch(t){case 37:"day"==e?h-=1:"","month"==e?a-=1:"","year"==e?s-=1:"";break;case 38:"day"==e?h-=7:"","month"==e?a-=3:"","year"==e?s-=4:"";break;case 39:"day"==e?h+=1:"","month"==e?a+=1:"","year"==e?s+=1:"";break;case 40:"day"==e?h+=7:"","month"==e?a+=3:"","year"==e?s+=4:""}var o=new Date(s,a,h);o.getTime()<this.minTime?o=this.minDate:o.getTime()>this.maxTime&&(o=this.maxDate),this.focused=o}},_getFocusedDate:function(){var t=this.focused||this.selectedDates[this.selectedDates.length-1],e=this.parsedDate;if(!t)switch(this.view){case"days":t=new Date(e.year,e.month,(new Date).getDate());break;case"months":t=new Date(e.year,e.month,1);break;case"years":t=new Date(e.year,0,1)}return t},_getCell:function(t,i){i=i||this.cellType;var s,a=n.getParsedDate(t),h='.datepicker--cell[data-year="'+a.year+'"]';switch(i){case"month":h='[data-month="'+a.month+'"]';break;case"day":h+='[data-month="'+a.month+'"][data-date="'+a.date+'"]'}return s=this.views[this.currentView].$el.find(h),s.length?s:e("")},destroy:function(){var t=this;t.$el.off(".adp").data("datepicker",""),t.selectedDates=[],t.focused="",t.views={},t.keys=[],t.minRange="",t.maxRange="",t.opts.inline||!t.elIsInput?t.$datepicker.closest(".datepicker-inline").remove():t.$datepicker.remove()},_handleAlreadySelectedDates:function(t,e){this.opts.range?this.opts.toggleSelected?this.removeDate(e):2!=this.selectedDates.length&&this._trigger("clickCell",e):this.opts.toggleSelected&&this.removeDate(e),this.opts.toggleSelected||(this.lastSelectedDate=t,this.opts.timepicker&&(this.timepicker._setTime(t),this.timepicker.update()))},_onShowEvent:function(t){this.visible||this.show()},_onBlur:function(){!this.inFocus&&this.visible&&this.hide()},_onMouseDownDatepicker:function(t){this.inFocus=!0},_onMouseUpDatepicker:function(t){this.inFocus=!1,t.originalEvent.inFocus=!0,t.originalEvent.timepickerFocus||this.$el.focus()},_onKeyUpGeneral:function(t){var e=this.$el.val();e||this.clear()},_onResize:function(){this.visible&&this.setPosition()},_onMouseUpBody:function(t){t.originalEvent.inFocus||this.visible&&!this.inFocus&&this.hide()},_onMouseUpEl:function(t){t.originalEvent.inFocus=!0,setTimeout(this._onKeyUpGeneral.bind(this),4)},_onKeyDown:function(t){var e=t.which;if(this._registerKey(e),e>=37&&40>=e&&(t.preventDefault(),this._focusNextCell(e)),13==e&&this.focused){if(this._getCell(this.focused).hasClass("-disabled-"))return;if(this.view!=this.opts.minView)this.down();else{var i=this._isSelected(this.focused,this.cellType);if(!i)return this.timepicker&&(this.focused.setHours(this.timepicker.hours),this.focused.setMinutes(this.timepicker.minutes)),void this.selectDate(this.focused);this._handleAlreadySelectedDates(i,this.focused)}}27==e&&this.hide()},_onKeyUp:function(t){var e=t.which;this._unRegisterKey(e)},_onHotKey:function(t,e){this._handleHotKey(e)},_onMouseEnterCell:function(t){var i=e(t.target).closest(".datepicker--cell"),s=this._getDateFromCell(i);this.silent=!0,this.focused&&(this.focused=""),i.addClass("-focus-"),this.focused=s,this.silent=!1,this.opts.range&&1==this.selectedDates.length&&(this.minRange=this.selectedDates[0],this.maxRange="",n.less(this.minRange,this.focused)&&(this.maxRange=this.minRange,this.minRange=""),this.views[this.currentView]._update())},_onMouseLeaveCell:function(t){var i=e(t.target).closest(".datepicker--cell");i.removeClass("-focus-"),this.silent=!0,this.focused="",this.silent=!1},_onTimeChange:function(t,e,i){var s=new Date,a=this.selectedDates,n=!1;a.length&&(n=!0,s=this.lastSelectedDate),s.setHours(e),s.setMinutes(i),n||this._getCell(s).hasClass("-disabled-")?(this._setInputValue(),this.opts.onSelect&&this._triggerOnChange()):this.selectDate(s)},_onClickCell:function(t,e){this.timepicker&&(e.setHours(this.timepicker.hours),e.setMinutes(this.timepicker.minutes)),this.selectDate(e)},set focused(t){if(!t&&this.focused){var e=this._getCell(this.focused);e.length&&e.removeClass("-focus-")}this._focused=t,this.opts.range&&1==this.selectedDates.length&&(this.minRange=this.selectedDates[0],this.maxRange="",n.less(this.minRange,this._focused)&&(this.maxRange=this.minRange,this.minRange="")),this.silent||(this.date=t)},get focused(){return this._focused},get parsedDate(){return n.getParsedDate(this.date)},set date(t){return t instanceof Date?(this.currentDate=t,this.inited&&!this.silent&&(this.views[this.view]._render(),this.nav._render(),this.visible&&this.elIsInput&&this.setPosition()),t):void 0},get date(){return this.currentDate},set view(t){return this.viewIndex=this.viewIndexes.indexOf(t),this.viewIndex<0?void 0:(this.prevView=this.currentView,this.currentView=t,this.inited&&(this.views[t]?this.views[t]._render():this.views[t]=new e.fn.datepicker.Body(this,t,this.opts),this.views[this.prevView].hide(),this.views[t].show(),this.nav._render(),this.opts.onChangeView&&this.opts.onChangeView(t),this.elIsInput&&this.visible&&this.setPosition()),t)},get view(){return this.currentView},get cellType(){return this.view.substring(0,this.view.length-1)},get minTime(){var t=n.getParsedDate(this.minDate);return new Date(t.year,t.month,t.date).getTime()},get maxTime(){var t=n.getParsedDate(this.maxDate);return new Date(t.year,t.month,t.date).getTime()},get curDecade(){return n.getDecade(this.date)}},n.getDaysCount=function(t){return new Date(t.getFullYear(),t.getMonth()+1,0).getDate()},n.getParsedDate=function(t){return{year:t.getFullYear(),month:t.getMonth(),fullMonth:t.getMonth()+1<10?"0"+(t.getMonth()+1):t.getMonth()+1,date:t.getDate(),fullDate:t.getDate()<10?"0"+t.getDate():t.getDate(),day:t.getDay(),hours:t.getHours(),fullHours:t.getHours()<10?"0"+t.getHours():t.getHours(),minutes:t.getMinutes(),fullMinutes:t.getMinutes()<10?"0"+t.getMinutes():t.getMinutes()}},n.getDecade=function(t){var e=10*Math.floor(t.getFullYear()/10);return[e,e+9]},n.template=function(t,e){return t.replace(/#\{([\w]+)\}/g,function(t,i){return e[i]||0===e[i]?e[i]:void 0})},n.isSame=function(t,e,i){if(!t||!e)return!1;var s=n.getParsedDate(t),a=n.getParsedDate(e),h=i?i:"day",o={day:s.date==a.date&&s.month==a.month&&s.year==a.year,month:s.month==a.month&&s.year==a.year,year:s.year==a.year};return o[h]},n.less=function(t,e,i){return t&&e?e.getTime()<t.getTime():!1},n.bigger=function(t,e,i){return t&&e?e.getTime()>t.getTime():!1},n.getLeadingZeroNum=function(t){return parseInt(t)<10?"0"+t:t},n.resetTime=function(t){return"object"==typeof t?(t=n.getParsedDate(t),new Date(t.year,t.month,t.date)):void 0},e.fn.datepicker=function(t){return this.each(function(){if(e.data(this,o)){var i=e.data(this,o);i.opts=e.extend(!0,i.opts,t),i.update()}else e.data(this,o,new m(this,t))})},e.fn.datepicker.Constructor=m,e.fn.datepicker.language={ru:{days:["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"],daysShort:["Вос","Пон","Вто","Сре","Чет","Пят","Суб"],daysMin:["Вс","Пн","Вт","Ср","Чт","Пт","Сб"],months:["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],monthsShort:["Янв","Фев","Мар","Апр","Май","Июн","Июл","Авг","Сен","Окт","Ноя","Дек"],today:"Сегодня",clear:"Очистить",dateFormat:"dd.mm.yyyy",timeFormat:"hh:ii",firstDay:1}},e(function(){e(r).datepicker()})}(),function(){var t={days:'<div class="datepicker--days datepicker--body"><div class="datepicker--days-names"></div><div class="datepicker--cells datepicker--cells-days"></div></div>',months:'<div class="datepicker--months datepicker--body"><div class="datepicker--cells datepicker--cells-months"></div></div>',years:'<div class="datepicker--years datepicker--body"><div class="datepicker--cells datepicker--cells-years"></div></div>'},s=e.fn.datepicker,a=s.Constructor;s.Body=function(t,i,s){this.d=t,this.type=i,this.opts=s,this.$el=e(""),this.opts.onlyTimepicker||this.init()},s.Body.prototype={init:function(){this._buildBaseHtml(),this._render(),this._bindEvents()},_bindEvents:function(){this.$el.on("click",".datepicker--cell",e.proxy(this._onClickCell,this))},_buildBaseHtml:function(){this.$el=e(t[this.type]).appendTo(this.d.$content),this.$names=e(".datepicker--days-names",this.$el),this.$cells=e(".datepicker--cells",this.$el)},_getDayNamesHtml:function(t,e,s,a){return e=e!=i?e:t,s=s?s:"",a=a!=i?a:0,a>7?s:7==e?this._getDayNamesHtml(t,0,s,++a):(s+='<div class="datepicker--day-name'+(this.d.isWeekend(e)?" -weekend-":"")+'">'+this.d.loc.daysMin[e]+"</div>",this._getDayNamesHtml(t,++e,s,++a))},_getCellContents:function(t,e){var i="datepicker--cell datepicker--cell-"+e,s=new Date,n=this.d,h=a.resetTime(n.minRange),o=a.resetTime(n.maxRange),r=n.opts,c=a.getParsedDate(t),d={},l=c.date;switch(e){case"day":n.isWeekend(c.day)&&(i+=" -weekend-"),c.month!=this.d.parsedDate.month&&(i+=" -other-month-",r.selectOtherMonths||(i+=" -disabled-"),r.showOtherMonths||(l=""));break;case"month":l=n.loc[n.opts.monthsField][c.month];break;case"year":var u=n.curDecade;l=c.year,(c.year<u[0]||c.year>u[1])&&(i+=" -other-decade-",r.selectOtherYears||(i+=" -disabled-"),r.showOtherYears||(l=""))}return r.onRenderCell&&(d=r.onRenderCell(t,e)||{},l=d.html?d.html:l,i+=d.classes?" "+d.classes:""),r.range&&(a.isSame(h,t,e)&&(i+=" -range-from-"),a.isSame(o,t,e)&&(i+=" -range-to-"),1==n.selectedDates.length&&n.focused?((a.bigger(h,t)&&a.less(n.focused,t)||a.less(o,t)&&a.bigger(n.focused,t))&&(i+=" -in-range-"),a.less(o,t)&&a.isSame(n.focused,t)&&(i+=" -range-from-"),a.bigger(h,t)&&a.isSame(n.focused,t)&&(i+=" -range-to-")):2==n.selectedDates.length&&a.bigger(h,t)&&a.less(o,t)&&(i+=" -in-range-")),a.isSame(s,t,e)&&(i+=" -current-"),n.focused&&a.isSame(t,n.focused,e)&&(i+=" -focus-"),n._isSelected(t,e)&&(i+=" -selected-"),(!n._isInRange(t,e)||d.disabled)&&(i+=" -disabled-"),{html:l,classes:i}},_getDaysHtml:function(t){var e=a.getDaysCount(t),i=new Date(t.getFullYear(),t.getMonth(),1).getDay(),s=new Date(t.getFullYear(),t.getMonth(),e).getDay(),n=i-this.d.loc.firstDay,h=6-s+this.d.loc.firstDay;n=0>n?n+7:n,h=h>6?h-7:h;for(var o,r,c=-n+1,d="",l=c,u=e+h;u>=l;l++)r=t.getFullYear(),o=t.getMonth(),d+=this._getDayHtml(new Date(r,o,l));return d},_getDayHtml:function(t){var e=this._getCellContents(t,"day");return'<div class="'+e.classes+'" data-date="'+t.getDate()+'" data-month="'+t.getMonth()+'" data-year="'+t.getFullYear()+'">'+e.html+"</div>"},_getMonthsHtml:function(t){for(var e="",i=a.getParsedDate(t),s=0;12>s;)e+=this._getMonthHtml(new Date(i.year,s)),s++;return e},_getMonthHtml:function(t){var e=this._getCellContents(t,"month");return'<div class="'+e.classes+'" data-month="'+t.getMonth()+'">'+e.html+"</div>"},_getYearsHtml:function(t){var e=(a.getParsedDate(t),a.getDecade(t)),i=e[0]-1,s="",n=i;for(n;n<=e[1]+1;n++)s+=this._getYearHtml(new Date(n,0));return s},_getYearHtml:function(t){var e=this._getCellContents(t,"year");return'<div class="'+e.classes+'" data-year="'+t.getFullYear()+'">'+e.html+"</div>"},_renderTypes:{days:function(){var t=this._getDayNamesHtml(this.d.loc.firstDay),e=this._getDaysHtml(this.d.currentDate);this.$cells.html(e),this.$names.html(t)},months:function(){var t=this._getMonthsHtml(this.d.currentDate);this.$cells.html(t)},years:function(){var t=this._getYearsHtml(this.d.currentDate);this.$cells.html(t)}},_render:function(){this.opts.onlyTimepicker||this._renderTypes[this.type].bind(this)()},_update:function(){var t,i,s,a=e(".datepicker--cell",this.$cells),n=this;a.each(function(a,h){i=e(this),s=n.d._getDateFromCell(e(this)),t=n._getCellContents(s,n.d.cellType),i.attr("class",t.classes)})},show:function(){this.opts.onlyTimepicker||(this.$el.addClass("active"),this.acitve=!0)},hide:function(){this.$el.removeClass("active"),this.active=!1},_handleClick:function(t){var e=t.data("date")||1,i=t.data("month")||0,s=t.data("year")||this.d.parsedDate.year,a=this.d;if(a.view!=this.opts.minView)return void a.down(new Date(s,i,e));var n=new Date(s,i,e),h=this.d._isSelected(n,this.d.cellType);return h?void a._handleAlreadySelectedDates.bind(a,h,n)():void a._trigger("clickCell",n)},_onClickCell:function(t){var i=e(t.target).closest(".datepicker--cell");i.hasClass("-disabled-")||this._handleClick.bind(this)(i)}}}(),function(){var t='<div class="datepicker--nav-action" data-action="prev">#{prevHtml}</div><div class="datepicker--nav-title">#{title}</div><div class="datepicker--nav-action" data-action="next">#{nextHtml}</div>',i='<div class="datepicker--buttons"></div>',s='<span class="datepicker--button" data-action="#{action}">#{label}</span>',a=e.fn.datepicker,n=a.Constructor;a.Navigation=function(t,e){this.d=t,this.opts=e,this.$buttonsContainer="",this.init()},a.Navigation.prototype={init:function(){this._buildBaseHtml(),this._bindEvents()},_bindEvents:function(){this.d.$nav.on("click",".datepicker--nav-action",e.proxy(this._onClickNavButton,this)),this.d.$nav.on("click",".datepicker--nav-title",e.proxy(this._onClickNavTitle,this)),this.d.$datepicker.on("click",".datepicker--button",e.proxy(this._onClickNavButton,this))},_buildBaseHtml:function(){this.opts.onlyTimepicker||this._render(),this._addButtonsIfNeed()},_addButtonsIfNeed:function(){this.opts.todayButton&&this._addButton("today"),this.opts.clearButton&&this._addButton("clear")},_render:function(){var i=this._getTitle(this.d.currentDate),s=n.template(t,e.extend({title:i},this.opts));this.d.$nav.html(s),"years"==this.d.view&&e(".datepicker--nav-title",this.d.$nav).addClass("-disabled-"),this.setNavStatus()},_getTitle:function(t){return this.d.formatDate(this.opts.navTitles[this.d.view],t)},_addButton:function(t){this.$buttonsContainer.length||this._addButtonsContainer();var i={action:t,label:this.d.loc[t]},a=n.template(s,i);e("[data-action="+t+"]",this.$buttonsContainer).length||this.$buttonsContainer.append(a)},_addButtonsContainer:function(){this.d.$datepicker.append(i),this.$buttonsContainer=e(".datepicker--buttons",this.d.$datepicker)},setNavStatus:function(){if((this.opts.minDate||this.opts.maxDate)&&this.opts.disableNavWhenOutOfRange){var t=this.d.parsedDate,e=t.month,i=t.year,s=t.date;switch(this.d.view){case"days":this.d._isInRange(new Date(i,e-1,1),"month")||this._disableNav("prev"),this.d._isInRange(new Date(i,e+1,1),"month")||this._disableNav("next");break;case"months":this.d._isInRange(new Date(i-1,e,s),"year")||this._disableNav("prev"),this.d._isInRange(new Date(i+1,e,s),"year")||this._disableNav("next");break;case"years":var a=n.getDecade(this.d.date);this.d._isInRange(new Date(a[0]-1,0,1),"year")||this._disableNav("prev"),this.d._isInRange(new Date(a[1]+1,0,1),"year")||this._disableNav("next")}}},_disableNav:function(t){e('[data-action="'+t+'"]',this.d.$nav).addClass("-disabled-")},_activateNav:function(t){e('[data-action="'+t+'"]',this.d.$nav).removeClass("-disabled-")},_onClickNavButton:function(t){var i=e(t.target).closest("[data-action]"),s=i.data("action");this.d[s]()},_onClickNavTitle:function(t){return e(t.target).hasClass("-disabled-")?void 0:"days"==this.d.view?this.d.view="months":void(this.d.view="years")}}}(),function(){var t='<div class="datepicker--time"><div class="datepicker--time-current">   <span class="datepicker--time-current-hours">#{hourVisible}</span>   <span class="datepicker--time-current-colon">:</span>   <span class="datepicker--time-current-minutes">#{minValue}</span></div><div class="datepicker--time-sliders">   <div class="datepicker--time-row">      <input type="range" name="hours" value="#{hourValue}" min="#{hourMin}" max="#{hourMax}" step="#{hourStep}"/>   </div>   <div class="datepicker--time-row">      <input type="range" name="minutes" value="#{minValue}" min="#{minMin}" max="#{minMax}" step="#{minStep}"/>   </div></div></div>',i=e.fn.datepicker,s=i.Constructor;i.Timepicker=function(t,e){this.d=t,this.opts=e,this.init()},i.Timepicker.prototype={init:function(){var t="input";this._setTime(this.d.date),this._buildHTML(),navigator.userAgent.match(/trident/gi)&&(t="change"),this.d.$el.on("selectDate",this._onSelectDate.bind(this)),this.$ranges.on(t,this._onChangeRange.bind(this)),this.$ranges.on("mouseup",this._onMouseUpRange.bind(this)),this.$ranges.on("mousemove focus ",this._onMouseEnterRange.bind(this)),this.$ranges.on("mouseout blur",this._onMouseOutRange.bind(this))},_setTime:function(t){var e=s.getParsedDate(t);this._handleDate(t),this.hours=e.hours<this.minHours?this.minHours:e.hours,this.minutes=e.minutes<this.minMinutes?this.minMinutes:e.minutes},_setMinTimeFromDate:function(t){this.minHours=t.getHours(),this.minMinutes=t.getMinutes(),this.d.lastSelectedDate&&this.d.lastSelectedDate.getHours()>t.getHours()&&(this.minMinutes=this.opts.minMinutes)},_setMaxTimeFromDate:function(t){
this.maxHours=t.getHours(),this.maxMinutes=t.getMinutes(),this.d.lastSelectedDate&&this.d.lastSelectedDate.getHours()<t.getHours()&&(this.maxMinutes=this.opts.maxMinutes)},_setDefaultMinMaxTime:function(){var t=23,e=59,i=this.opts;this.minHours=i.minHours<0||i.minHours>t?0:i.minHours,this.minMinutes=i.minMinutes<0||i.minMinutes>e?0:i.minMinutes,this.maxHours=i.maxHours<0||i.maxHours>t?t:i.maxHours,this.maxMinutes=i.maxMinutes<0||i.maxMinutes>e?e:i.maxMinutes},_validateHoursMinutes:function(t){this.hours<this.minHours?this.hours=this.minHours:this.hours>this.maxHours&&(this.hours=this.maxHours),this.minutes<this.minMinutes?this.minutes=this.minMinutes:this.minutes>this.maxMinutes&&(this.minutes=this.maxMinutes)},_buildHTML:function(){var i=s.getLeadingZeroNum,a={hourMin:this.minHours,hourMax:i(this.maxHours),hourStep:this.opts.hoursStep,hourValue:this.hours,hourVisible:i(this.displayHours),minMin:this.minMinutes,minMax:i(this.maxMinutes),minStep:this.opts.minutesStep,minValue:i(this.minutes)},n=s.template(t,a);this.$timepicker=e(n).appendTo(this.d.$datepicker),this.$ranges=e('[type="range"]',this.$timepicker),this.$hours=e('[name="hours"]',this.$timepicker),this.$minutes=e('[name="minutes"]',this.$timepicker),this.$hoursText=e(".datepicker--time-current-hours",this.$timepicker),this.$minutesText=e(".datepicker--time-current-minutes",this.$timepicker),this.d.ampm&&(this.$ampm=e('<span class="datepicker--time-current-ampm">').appendTo(e(".datepicker--time-current",this.$timepicker)).html(this.dayPeriod),this.$timepicker.addClass("-am-pm-"))},_updateCurrentTime:function(){var t=s.getLeadingZeroNum(this.displayHours),e=s.getLeadingZeroNum(this.minutes);this.$hoursText.html(t),this.$minutesText.html(e),this.d.ampm&&this.$ampm.html(this.dayPeriod)},_updateRanges:function(){this.$hours.attr({min:this.minHours,max:this.maxHours}).val(this.hours),this.$minutes.attr({min:this.minMinutes,max:this.maxMinutes}).val(this.minutes)},_handleDate:function(t){this._setDefaultMinMaxTime(),t&&(s.isSame(t,this.d.opts.minDate)?this._setMinTimeFromDate(this.d.opts.minDate):s.isSame(t,this.d.opts.maxDate)&&this._setMaxTimeFromDate(this.d.opts.maxDate)),this._validateHoursMinutes(t)},update:function(){this._updateRanges(),this._updateCurrentTime()},_getValidHoursFromDate:function(t,e){var i=t,a=t;t instanceof Date&&(i=s.getParsedDate(t),a=i.hours);var n=e||this.d.ampm,h="am";if(n)switch(!0){case 0==a:a=12;break;case 12==a:h="pm";break;case a>11:a-=12,h="pm"}return{hours:a,dayPeriod:h}},set hours(t){this._hours=t;var e=this._getValidHoursFromDate(t);this.displayHours=e.hours,this.dayPeriod=e.dayPeriod},get hours(){return this._hours},_onChangeRange:function(t){var i=e(t.target),s=i.attr("name");this.d.timepickerIsActive=!0,this[s]=i.val(),this._updateCurrentTime(),this.d._trigger("timeChange",[this.hours,this.minutes]),this._handleDate(this.d.lastSelectedDate),this.update()},_onSelectDate:function(t,e){this._handleDate(e),this.update()},_onMouseEnterRange:function(t){var i=e(t.target).attr("name");e(".datepicker--time-current-"+i,this.$timepicker).addClass("-focus-")},_onMouseOutRange:function(t){var i=e(t.target).attr("name");this.d.inFocus||e(".datepicker--time-current-"+i,this.$timepicker).removeClass("-focus-")},_onMouseUpRange:function(t){this.d.timepickerIsActive=!1}}}()}(window,jQuery);


/* SlimScroll Version: 1.3.8 */
!function(e){e.fn.extend({slimScroll:function(i){var s=e.extend({width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},i);return this.each(function(){var o,a,r,l,n,c,h,u,p="<div></div>",d=30,g=!1,f=e(this);if(f.parent().hasClass(s.wrapperClass)){var b=f.scrollTop();if(C=f.siblings("."+s.barClass),x=f.siblings("."+s.railClass),e.isPlainObject(i)){if("height"in i&&"auto"==i.height){f.parent().css("height","auto"),f.css("height","auto");var v=f.parent().parent().height();f.parent().css("height",v),f.css("height",v)}else if("height"in i){var w=i.height;f.parent().css("height",w),f.css("height",w)}if("scrollTo"in i)b=parseInt(s.scrollTo);else if("scrollBy"in i)b+=parseInt(s.scrollBy);else if("destroy"in i)return C.remove(),x.remove(),void f.unwrap();E(b,!1,!0)}}else if(!(e.isPlainObject(i)&&"destroy"in i)){s.height="auto"==s.height?f.parent().height():s.height;var m=e(p).addClass(s.wrapperClass).css({position:"relative",overflow:"hidden",width:s.width,height:s.height});f.css({overflow:"hidden",width:s.width,height:s.height});var y,x=e(p).addClass(s.railClass).css({width:s.size,height:"100%",position:"absolute",top:0,display:s.alwaysVisible&&s.railVisible?"block":"none","border-radius":s.railBorderRadius,background:s.railColor,opacity:s.railOpacity,zIndex:90}),C=e(p).addClass(s.barClass).css({background:s.color,width:s.size,position:"absolute",top:0,opacity:s.opacity,display:s.alwaysVisible?"block":"none","border-radius":s.borderRadius,BorderRadius:s.borderRadius,MozBorderRadius:s.borderRadius,WebkitBorderRadius:s.borderRadius,zIndex:99}),H="right"==s.position?{right:s.distance}:{left:s.distance};x.css(H),C.css(H),f.wrap(m),f.parent().append(C),f.parent().append(x),s.railDraggable&&C.bind("mousedown",function(i){var s=e(document);return r=!0,t=parseFloat(C.css("top")),pageY=i.pageY,s.bind("mousemove.slimscroll",function(e){currTop=t+e.pageY-pageY,C.css("top",currTop),E(0,C.position().top,!1)}),s.bind("mouseup.slimscroll",function(e){r=!1,M(),s.unbind(".slimscroll")}),!1}).bind("selectstart.slimscroll",function(e){return e.stopPropagation(),e.preventDefault(),!1}),x.hover(function(){D()},function(){M()}),C.hover(function(){a=!0},function(){a=!1}),f.hover(function(){o=!0,D(),M()},function(){o=!1,M()}),f.bind("touchstart",function(e,t){e.originalEvent.touches.length&&(n=e.originalEvent.touches[0].pageY)}),f.bind("touchmove",function(e){(g||e.originalEvent.preventDefault(),e.originalEvent.touches.length)&&(E((n-e.originalEvent.touches[0].pageY)/s.touchScrollStep,!0),n=e.originalEvent.touches[0].pageY)}),R(),"bottom"===s.start?(C.css({top:f.outerHeight()-C.outerHeight()}),E(0,!0)):"top"!==s.start&&(E(e(s.start).position().top,null,!0),s.alwaysVisible||C.hide()),y=this,window.addEventListener?(y.addEventListener("DOMMouseScroll",S,!1),y.addEventListener("mousewheel",S,!1)):document.attachEvent("onmousewheel",S)}function S(t){if(o){var i=0;(t=t||window.event).wheelDelta&&(i=-t.wheelDelta/120),t.detail&&(i=t.detail/3);var a=t.target||t.srcTarget||t.srcElement;e(a).closest("."+s.wrapperClass).is(f.parent())&&E(i,!0),t.preventDefault&&!g&&t.preventDefault(),g||(t.returnValue=!1)}}function E(e,t,i){g=!1;var o=e,a=f.outerHeight()-C.outerHeight();if(t&&(o=parseInt(C.css("top"))+e*parseInt(s.wheelStep)/100*C.outerHeight(),o=Math.min(Math.max(o,0),a),o=e>0?Math.ceil(o):Math.floor(o),C.css({top:o+"px"})),o=(h=parseInt(C.css("top"))/(f.outerHeight()-C.outerHeight()))*(f[0].scrollHeight-f.outerHeight()),i){var r=(o=e)/f[0].scrollHeight*f.outerHeight();r=Math.min(Math.max(r,0),a),C.css({top:r+"px"})}f.scrollTop(o),f.trigger("slimscrolling",~~o),D(),M()}function R(){c=Math.max(f.outerHeight()/f[0].scrollHeight*f.outerHeight(),d),C.css({height:c+"px"});var e=c==f.outerHeight()?"none":"block";C.css({display:e})}function D(){if(R(),clearTimeout(l),h==~~h){if(g=s.allowPageScroll,u!=h){var e=0==~~h?"top":"bottom";f.trigger("slimscroll",e)}}else g=!1;u=h,c>=f.outerHeight()?g=!0:(C.stop(!0,!0).fadeIn("fast"),s.railVisible&&x.stop(!0,!0).fadeIn("fast"))}function M(){s.alwaysVisible||(l=setTimeout(function(){s.disableFadeOut&&o||a||r||(C.fadeOut("slow"),x.fadeOut("slow"))},300))}}),this}}),e.fn.extend({slimscroll:e.fn.slimScroll})}(jQuery);




/* ------------------------------------
	Go to the element by class/id
------------------------------------ */
function GoTo(line, t) {
	t = (t == undefined)  ? 100 : t;
	$('html, body').animate({
		scrollTop: $(line).offset().top-t
	}, 500);
}


/* ------------------------------------
	Allow type only digits
------------------------------------ */
function only_number(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) 
            theEvent.preventDefault();
    }
}

/* ------------------------------------
	Toestify Init with settings
------------------------------------ */
function xToastify(type, txt){
	var opt, bgColor, toast, className, xscrollTop, headerHeight;
		
	if(type == 'error'){
		bgColor = "rgba(255,84,89, .9)";
	} else if(type == 'success') {
		bgColor = "rgba(33,100,210, .9)";
	} else {
		bgColor = "rgba(27,29,41, .9)";
	}
	
	/* xToastify position */
	xscrollTop = window.pageYOffset || document.documentElement.scrollTop;
	headerHeight = $('#header:not(.header-home)').outerHeight() || 0;
		
	if(xscrollTop >= headerHeight) {
		className = 'xtoastify-top';
	} else {
		className = 'toastify-top';
	}
	
	var opt = {
		text: txt,
		duration: 2500,
		gravity: "top",
		className: className,
		callback: function() { /**/ },
		close: false,
		//stopOnFocus: false,
		backgroundColor: bgColor,
	};
	
	toast = Toastify(opt);
	toast.showToast();
}

/* ------------------------------------
	Popup offer
------------------------------------ */
function popupOffer(cid, network, blogger, logo, title, price, quantity) {
	
	var icon, q_options;
	
	price = parseInt(price.replace(' ',''));
	
	if (network == 'youtube') {
		icon = '<span class="icon icon-youtube"></span><small>YouTube</small>';		
	} 
	else if (network == 'instagram') {
		icon = '<span class="icon icon-instagram"></span><small>Instagram</small>';	
	}
	
	
	$('#popup-offer').find('.fld-icon').html(icon);
	$('#popup-offer').find('.fld-name').html(blogger);
	$('#popup-offer').find('.fld-title').html(title);
	$('#popup-offer').find('.fld-logo').attr('src','/uploads/userpic/'+logo);
	$('#popup-offer').find('.fld-cid').val(cid);
	$('#popup-offer').find('.fld-calc-price').html('$'+price);
	$('#popup-offer').find('.fld-calc-quantity').html(1);
	
	for (var q = 1; q <= quantity; q++) {
		q_options += '<option value="'+q+'">'+q+' min - $'+parseFloat(q*price)+'</option>';	
	}
	
	$('#popup-offer').find('.fld-quantity').html(q_options);
	$('.js-select-quantity')[0].sumo.reload();
		
	popupOpen('#popup-offer');
	
	popupOfferCalc();

}


function popupOfferCalc() {
	
	var subtotal = 0, 
		fairpay = 0,
		total = 0,
		price = parseFloat($('#popup-offer').find('.fld-calc-price').text().replace('$','')),
		quantity = $('#popup-offer').find('.fld-quantity').val(),
		fairpay = ($('#popup-offer').find('.fld-fairpay:checked').val() != undefined) ? 1 : 0;
		
		subtotal = price*quantity;
		fairpay = (fairpay == 1) ? parseFloat((window.config['fairpay_fee']*subtotal)/100) : 0;
		total = subtotal + fairpay;
		
	$('#popup-offer').find('.fld-calc-price').html('$'+price);
	$('#popup-offer').find('.fld-calc-quantity').html(quantity);
	$('#popup-offer').find('.fld-calc-subtotal').html('$'+subtotal);
	$('#popup-offer').find('.fld-calc-fairpay').html('$'+fairpay);
	$('#popup-offer').find('.fld-calc-total').html('$'+total);
}


function offer_submit(form_name) {
	
	var form = 'form[name="'+form_name+'"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=submit';
	var loader = form + ' .loading';
		
	$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/offer.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			popupClose('#popup-offer');
			$('.fld-description').val('');
			$('.fld-url').val('');
			alerx(data['title'], data['message'], 'blue');
		}
		else {
			alerx(data['title'], data['message'], 'red');
		}
		
	}).done(function(){
		$(loader).fadeOut(100);
	});
	
	return false;
}

function offer_action(id, loader, act) {
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&id='+id+'&act='+act;
		
	$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/offer.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			alerx(data['title'], data['message'], 'blue');
			let z = setTimeout(function(){document.location.reload(true)}, 3000);
		}
		else {
			alerx(data['title'], data['message'], 'red');
		}
		
	}).done(function(){
		$(loader).fadeOut(100);
	});
	
	return false;
}

/* ------------------------------------
	Offers review popup open
------------------------------------ */
function offer_review(blogger_id, offer_id, loader) {
		
	$('#popup-review').find('[name=review_blogger_id]').val(blogger_id);
	$('#popup-review').find('[name=review_blogger_offer_id]').val(offer_id);
	
	$(loader).fadeIn(100);
	popupOpen('#popup-review');
	return false;
}


function send_review(form_name) {
	
	var form = 'form[name="'+form_name+'"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=submit';
	var loader = form + ' .loading';
		
	$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/reviews.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			$(form).find('.messages-area').html('<div class="popup-title"><h4>'+data['title']+'</h4></div>'+data['message']);
		}
		else {
			alerx(data['title'], data['message'], 'red');
		}
		
	}).done(function(){
		$(loader).fadeOut(100);
	});
	
	return false;
}


/* ------------------------------------
	Popup message
------------------------------------ */
function popupMessage(id, name) {
	
	$('#popup-messages').find('[name=user_id]').val(id);
	$('#popup-messages').find('.profile_name').html(name);
	
	popupOpen('#popup-messages');

}

/* ------------------------------------
	Copy text
------------------------------------ */
function copyText(inp) {
	var copyText = document.getElementById(inp);
		copyText.select();
		document.execCommand("Copy");
		

}

function CopyToClipboard(id) {
var r = document.createRange();
r.selectNode(document.getElementById(id));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
}



/* ------------------------------------
	Account: upload photo
------------------------------------ */
function account_photo_upload(input, visual_field, loader) {
	
	var status = $(visual_field).data("loading");
	var form = new FormData();
	
	$(visual_field).data("loading", 1);
	$(loader).fadeIn(0);
		
	form.append('photo', input.files[0]);
	
	$.ajax({
		url: "?page_load=ajax&url=/ajax/account-userpic.ajax",
		type: "POST",
		processData: false,
		contentType: false,
		dataType : "json",
		data: form
	
	}).done(function(data){
		
		if (data['file'] != undefined) {
		  	$('.field-dyn-userpic').prop('src', data['file']);
		}
		alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
		
		$(visual_field).data("loading", 0);
	
		$(loader).fadeOut(0);
		
	});
		
}
function account_photo_choose(file_field, visual_field) {
	var status = $(visual_field).data("loading");
	
	if (status == 0) {
		$(file_field).click();
	}
	else {
		alerx('Loading...', 'Please wait', 'red');
	}
	
}



function account_remove_channel(channel_id, txt_t, txt_c) {
	
	var loader 		= $(".loading-channels");
	var form_data 	= '&key='+getUniqueId()+'&lng='+window.config['lang']+'&channel_id='+channel_id;
	var width 		= ($(window).width() > 860) ? '540px' : '90%'; 
	
	$.confirm({
	    boxWidth: width,
	    useBootstrap: false,
	    theme: 'modern',
	    title: txt_t,
	    content: txt_c,
		type: 'red',
		typeAnimated: true,
		closeIcon: true,
		draggable: true,
	    
	    buttons: {
	        confirm: {
	            text: 'Remove',
	            btnClass: 'btn-red',
	            keys: ['enter', 'shift'],
	            action: function(){
	                
					$(loader).fadeIn(100);

					$.post("?page_load=ajax&url=/ajax/account-channel-delete.ajax", form_data ,function(data) { 
						data = JSON.parse(data);
						
						if (data['status'] == 1) {
							window.location = '/'+window.config['lang']+'/account/channels/';
						}
						else {
							alerx(data['title'],data['message'], 'red');
						}
					   
					}).done(function(){
						$(loader).fadeOut(500);
					});
	            }
	        } ,
	        cancel: function(){
		       
	        }
	    }
	});
	

	
}



	

/* ------------------------------------
	Account: Campaigns
------------------------------------ */		
							
function campaign_network_change() {
	
	var network_id 	= parseInt($("select[name=network_id] option:selected").val());
	var form 		= 'form[name="form-campaigns"]';
	var form_data 	= '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=types&network='+network_id;
	var loader 		= form + ' .loading';
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-campaigns.ajax", form_data ,function(data) { 
			
			data = JSON.parse(data); 
		  	
			if (data['status'] == 1) {
				
				var selected 		= '';
				var type_select 	= '';
				var channels_select = '';
				var edit_channel 	= parseInt(window.config['campaign_edit_channel']);
				var edit_network 	= parseInt(window.config['campaign_edit_network']);
				var edit_type 		= parseInt(window.config['campaign_edit_type']);
			
				$(data['types']).each(function( index, arr ) {
					selected = (edit_type == arr['i']) ? ' selected="selected" ' : '';
					type_select += '<option value="'+arr['i']+'" '+selected+'>'+arr['n']+'</option>';
				});
				
				$(data['channels']).each(function( index, arr ) {
					selected = (edit_channel == arr['i']) ? ' selected="selected" ' : '';
					channels_select += '<option data-html="<img src=\'/uploads/images/channels/'+arr['c']+'\'>" value="'+arr['i']+'" '+selected+'>'+arr['t']+'</option>';
				});
				
				$('select[name=type_id]').html(type_select);
				$('select[name=type_id]')[0].sumo.reload();
				
				$('select[name=channel_id]').html(channels_select);
				$('select[name=channel_id]')[0].sumo.reload();
				
				if (data['channels'] == 0) {
					$('#form-campaigns').addClass('blur');
					$('#addcampaign').append('<div class="locked"><div class="locked-inner"><h3>'+data['locked_t']+'</h3>'+data['locked_d']+'<button class="btn btn-ghost" onclick="campaign_close_alert();">Use other Social Network</button></div></div>');
				}
			}
			else {
				alerx(data['title'], data['message'], 'red');
			}
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
		
}


function campaign_close_alert() {
	$('#form-campaigns').removeClass('blur');
	$('#addcampaign .locked').remove();
}


function campaign_multiply_order(elm_dbl, elm_quantity) {
	
	$(elm_quantity).prop("disabled", ($(elm_dbl).is(":checked") == true) ? false : true);
	$(elm_quantity)[0].sumo.reload();

}

function campaign_new(elm) {
	if ($(elm).css('display') == 'none') {
		$(elm).fadeIn(0);
	}
	var cnw = setTimeout(function(){GoTo(elm);},100);
}



function campaign_submit(form, id) {
	
	var form 		= 'form[name="'+form+'"]';
	var form_data 	= $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=create&id='+id;
	var loader 		= form + ' .loading';
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-campaigns.ajax", form_data ,function(data) { 
			
			data = JSON.parse(data); 
			
			if (data['status'] == 1) {
				window.location = '/'+window.config['lang']+'/account/campaigns/';
			}
			else {
				alerx(data['title'], data['message'], 'red');
			}
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
	
}

function more_less(id) {
	var elm_more = $('.offer-item-'+id+' .offer-item-text .more');
	var elm_dots = $('.offer-item-'+id+' .offer-item-text .dots');
	var elm_btn = $('.offer-item-'+id+' .offer-item-text .control');
	var display = elm_more.css('display');
	
	if (display == 'none') {
		$(elm_more).fadeIn(200);
		$(elm_dots).fadeOut(100);
		elm_btn.text(window.config['lng_btn_less']);
	}
	else {
		$(elm_more).fadeOut(200);
		$(elm_dots).fadeIn(100);
		elm_btn.text(window.config['lng_btn_more']);
	}

}

function campaign_remove(id, txt_t, txt_c) {
	
	var loader 		= $('.offer-item-'+id+' .loading');
	var form_data 	= '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=remove&id='+id;
	var width 		= ($(window).width() > 860) ? '540px' : '90%'; 
	
	$.confirm({
	    boxWidth: width,
	    useBootstrap: false,
	    theme: 'modern',
	    title: txt_t,
	    content: txt_c,
		type: 'red',
		typeAnimated: true,
		closeIcon: true,
		draggable: true,
	    
	    buttons: {
	        confirm: {
	            text: 'Remove',
	            btnClass: 'btn-red',
	            keys: ['enter', 'shift'],
	            action: function(){
	                
					$(loader).fadeIn(0);
					
					$.post("?page_load=ajax&url=/ajax/account-campaigns.ajax", form_data ,function(data) { 
						
						data = JSON.parse(data); 
						
						if (data['status'] == 1) {
							window.location = '/'+window.config['lang']+'/account/campaigns/';
						}
						else {
							alerx(data['title'], data['message'], 'red');
						}
					   
					}).done(function(){
						$(loader).fadeOut(500);
					});
	            }
	        } ,
	        cancel: function(){
		       
	        }
	    }
	});
	
	
	
}




function campaign_change_status(id) {
	
	var form_data 	= '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=status&id='+id;
	var loader 		= $('.offer-item-'+id+' .loading');
	
		$(loader).fadeIn(0);
		
	$.post("?page_load=ajax&url=/ajax/account-campaigns.ajax", form_data ,function(data) { 
		
		data = JSON.parse(data); 
		
		if (data['status'] == 1) {
			window.location = '/'+window.config['lang']+'/account/campaigns/';
		}
		else {
			alerx(data['title'], data['message'], 'red');
		}
	   
	}).done(function(){
		$(loader).fadeOut(500);
	});
}
				
					
function campaign_remove_proof(file_id) {
	$.post("?page_load=ajax&url=/ajax/account-dropzone.ajax", '&act=remove&file_id='+encodeURI(file_id)+'&key='+getUniqueId(), function(data) {
		data = JSON.parse(data);
		xToastify('error', data['message']);
		
		$('#dzp-'+file_id).fadeOut(100, function(){
			$('#dzp-'+file_id).remove();
		});
	});
}

	

/* ------------------------------------
	Account: save user data
------------------------------------ */
function account_edit() {
	
	var form = 'form[name="form-account-edit"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&a=edit';
	var loader = form + ' .loading';
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-edit.ajax", form_data ,function(data) { 
			data = JSON.parse(data);
		  	
			alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
			
			if (data['reload'] == 1) {
				var wr = setTimeout(function(){window.location = '/'+window.config['lang']+'/account/settings/';}, 3000);
			}
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
}

	

/* ------------------------------------
	Account: resend email verification link
------------------------------------ */
function account_resend_email(loader) {
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&a=email';
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-edit.ajax", form_data ,function(data) { 
			data = JSON.parse(data);
			alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
}
function account_check_email(loader, fld) {
	
	var code = $(fld).val();
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&a=email_check&code='+code;
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-edit.ajax", form_data ,function(data) { 
			data = JSON.parse(data);
			alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
			
			if (data['status'] == 1) {
				var wr = setTimeout(function(){window.location = '/'+window.config['lang']+'/account/settings/';}, 3000);
			}
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
}

	

/* ------------------------------------
	Account: resend sms code
------------------------------------ */
function account_resend_sms(loader) {
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&a=sms';
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-edit.ajax", form_data ,function(data) { 
			data = JSON.parse(data);
			alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
}
function account_check_sms(loader, fld) {
	
	var code = $(fld).val();
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&a=sms_check&code='+code;
	
		$(loader).fadeIn(100);
		
		$.post("?page_load=ajax&url=/ajax/account-edit.ajax", form_data ,function(data) { 
			data = JSON.parse(data);
			alerx(data['title'], data['message'], (data['status'] == 1) ? 'blue' : 'red');
			
			if (data['status'] == 1) {
				var wr = setTimeout(function(){window.location = '/'+window.config['lang']+'/account/settings/';}, 5000);
			}
		   
		}).done(function(){
			$(loader).fadeOut(500);
		});
}

	

/* ------------------------------------
	Account: Messages
------------------------------------ */
function send_first_message(form_name) {
	
	var form = 'form[name="'+form_name+'"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=send&first=1';
	var loader = form + ' .loading';
		
	$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/messages.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			$(form).find('.messages-area').html('<div class="popup-title"><h4>'+data['title']+'</h4></div>'+data['message']);
		}
		else {
			alerx(data['title'], data['message'], 'red');
		}
		
	}).done(function(){
		$(loader).fadeOut(100);
	});
	
	return false;
}

function send_message(box, section) {
	
	let loading = $(box+' .loading');
	let message = $(box+' textarea').val();
	let user_id = parseInt(window.config['message_userid']);
	let form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=send&user_id='+user_id+'&message='+encodeURI(message)+'&key='+getUniqueId();
	
	loading.fadeIn(10);
	
	$.post("?page_load=ajax&url=/ajax/messages.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			$(box+' textarea').val("");
			xToastify('success', data['message']);
			
			if (section == 'account') {
				get_messages_by_timer(false);
			}
		}
		else {
			xToastify('error', data['message']);
		}
		
	}).done(function(){
		loading.fadeOut();
	});
	
	
}

function get_messages(id) {
	
	if( $('#contact-'+id).hasClass('__selected') ) return;
	$('.messages-contacts-list .js-msg').removeClass('__selected');
	$('#contact-'+id).addClass('__selected');
	
	window.config['message_userid'] = id;
	window.config['message_lastid'] = 0;
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=get&user_id='+id+'&key='+getUniqueId();
	
	$('#messages-loading').fadeIn(0);


	$.post("?page_load=ajax&url=/ajax/messages.ajax", form_data ,function(data) {
		
		data = JSON.parse(data);
	  	
		if (data['status'] == 1) {
			
			var result 		= data['result'];
			var messages 	= result['messages'];
			var user 		= result['user'];
			var my 			= result['my'];
			
			if (data['message'] != 0) {
				
				xToastify('success', data['message']);
				$('#messages').html('');
				
			}
			else {
				
				var msg_bubbles = '';
				var msg_pic1 = (my['userpic'].length > 3) ? '<img src="/uploads/userpic/'+my['userpic']+'" />' : '<i class="flaticon-user"></i>';
				var msg_pic2 = (user['userpic'].length > 3) ? '<img src="/uploads/userpic/'+user['userpic']+'" />' : '<i class="flaticon-user"></i>';
				
				$( messages ).each(function( index, message ) {
					
					let msg_self 	= (message['from'] == user['id']) ? ' __self ' : '';
					let msg_photo 	= (message['from'] == user['id']) ? msg_pic2 : msg_pic1;
					
						if (parseInt(message['id']) > window.config['message_lastid']) {
							window.config['message_lastid'] = parseInt(message['id']);
						}
					
					msg_bubbles += `<div class="messages-box--item `+msg_self+`">
							<div class="icon">`+msg_photo+`</div>
							<div class="msg">`+message['text']+`</div>
							<small>`+message['time']+`</small>
						</div>`;
				});
					
				$('#messages').html(msg_bubbles);
				
				chat_scroll_bottom();
				
			}
			$('#messages-info').fadeOut(100);
			
		}
		else {
			alerx(data['title'], data['message'], 'red');
			$('#messages-info').html(data['message']);
			$('#messages-info').fadeIn(100);
		}
	   
	}).done(function(){
		$('#messages-loading').fadeOut(0);
	});
	
	
}




function get_messages_by_timer(recursion) {
	
	var user_id = parseInt(window.config['message_userid']) || 0;
	var last_id = parseInt(window.config['message_lastid']) || 0; 
	
	if (user_id > 0) {
	
		var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=get&user_id='+user_id+'&last_id='+last_id+'&key='+getUniqueId();

		$.post("?page_load=ajax&url=/ajax/messages.ajax", form_data ,function(data) {
			
			data = JSON.parse(data);
		  	
			if (data['status'] == 1) {
				
				var result 		= data['result'];
				var messages 	= result['messages'];
				var user 		= result['user'];
				var my 			= result['my'];
				
				if (data['message'] == 0) {
					
					var msg_bubbles = '';
					var msg_pic1 = (my['userpic'].length > 3) ? '<img src="/uploads/userpic/'+my['userpic']+'" />' : '<i class="flaticon-user"></i>';
					var msg_pic2 = (user['userpic'].length > 3) ? '<img src="/uploads/userpic/'+user['userpic']+'" />' : '<i class="flaticon-user"></i>';
					
					$( messages ).each(function( index, message ) {
						
						let msg_self 	= (message['from'] == user['id']) ? ' __self ' : '';
						let msg_photo 	= (message['from'] == user['id']) ? msg_pic2 : msg_pic1;
						
						if (parseInt(message['id']) > window.config['message_lastid']) {
							window.config['message_lastid'] = parseInt(message['id']);
						}
						
						
						msg_bubbles += `<div class="messages-box--item `+msg_self+`">
								<div class="icon">`+msg_photo+`</div>
								<div class="msg">`+message['text']+`</div>
								<small>`+message['time']+`</small>
							</div>`;
					});
						
					$('#messages').append(msg_bubbles);
					chat_scroll_bottom();
						
				}
				
				
			}
		   
		}).done(function(){
			if (recursion) {
				var messages_timer = setTimeout(function(){get_messages_by_timer(true);}, 5000);
			}
		});
	
	}
	else {
		var messages_timer = setTimeout(function(){get_messages_by_timer(true);}, 5000);
	}
	
}




function chat_scroll_bottom() {
	
	var timer = 200;
	var scroll = 999999;
	var animate = 10;
	
	if (window.config['messages_scroll_lock'] || $(".messages-box-list .messages-box--item").length < 1) return;
	
	var x = setTimeout(function(){
		
		var curr 		= parseInt($(".messages-box-list").scrollTop());
		var offset_top 	= parseInt($(".messages-box-list .messages-box--item").last().offset().top);
			
			if (offset_top > 500)
				$(".messages-box-list").animate({ scrollTop: scroll+'px' }, animate);
				
		}, timer);
}


/* ------------------------------------
	Notifications: hide premium box
------------------------------------ */
function disable_premium_notification(count) {
	
	var form_data 	= '&type=premium&status=1&key='+getUniqueId()+'&lng='+window.config['lang']+'&count='+count;

		update_bubble('notify', count, false);
		
		$.post("?page_load=ajax&url=/ajax/notifications.ajax", form_data, function(data) { 
			
		});
	
}


/* ------------------------------------
	Notifications: mark all as read
------------------------------------ */
function notification_mark_as_read(count) {
	
	var form_data 	= '&type=all&status=1&key='+getUniqueId()+'&lng='+window.config['lang']+'&count='+count;

		update_bubble('notify', count, false);
		
		$.post("?page_load=ajax&url=/ajax/notifications.ajax", form_data, function(data) { 
			$('.account-notification').removeClass('__active');
			$('.btn.btn-1').prop('disabled','disabled');
		});
	
}

/* ------------------------------------
	Contacts: send message
------------------------------------ */
function contacts_message() {
	
	var form = 'form[name="form-feedback"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang'];
	var loader = form + ' .loading';
		
		$(loader).fadeIn(100);
		
	
		$.post("?page_load=ajax&url=/ajax/feedback.ajax", form_data ,function(data) {
			data = JSON.parse(data);
			
			/* success */
			if (data['status'] == 1) {
				$(form).html('<div class="success">'+data['message']+'</div>');
			}
			/* error */
			else {
				alerx(data['title'],data['message'], 'red');
			}
			   
		}).done(function(){
			$(loader).fadeOut(500);
		});
	
}

/* ------------------------------------
	Payment: Choose Payment Method
------------------------------------ */
function choose_payment_gate(gate, elm) {
	
	$('.methods .method').removeClass('active');
	$('#method-'+gate).addClass('active');
	$(elm).val(gate);
	
	/*$('#payform').prop('action', '/'+window.config['lang']+'/payment/go/'+gate+'/');*/
	
}


/* ------------------------------------
	Catalog functions
------------------------------------ */
function catalog_sort(by, text, elm) {
	
	$(elm).text(text);
	$('.js-xselect').trigger('click');
	
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=sort&by='+by;
	
	$.post("?page_load=ajax&url=/ajax/filters.ajax", form_data, function(data) { 
		
		window.location = '/'+window.config['lang']+'/c/';
		
	});
}



function catalog_search(form_name) {
	
	var form = 'form[name="'+form_name+'"]';
	var form_data = $( form ).serialize()+'&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=search';
	var loader = form + ' .loading';
		
	$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/filters.ajax", form_data, function(data) {

		data = JSON.parse(data);
		
		if (data['status'] == 1) {
			window.location = data['message'];
		}
		else {
			alerx(data['title'],data['message'], 'red');
		}
		
		$(loader).fadeOut(100);
		
	});
	
}

/* ------------------------------------
	Profile functions
------------------------------------ */
function get_reviews(area, btn, id, page) {
						
	var form_data = '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=get&id='+window.config['reviews_uid']+'&page='+window.config['reviews_page'];
	var loader = $(btn + ' .loading');
	
		$(loader).fadeIn(100);
	
	$.post("?page_load=ajax&url=/ajax/reviews.ajax", form_data, function(data) { 

		data = JSON.parse(data);
		
		if (data['status'] == 1) {
			
			var tpl = '';
			var num = 0;
			
			$(data['message']).each(function( index, arr ) {
			
				var v1 = (arr['rating'] < 1) ? `<i class="flaticon-dislike"></i>` : `<i class="flaticon-like"></i>`; 
					num = parseInt(arr['n']);
				
				tpl += `<div class="reviews-list reviews-list-`+num+`">
					<div class="reviews-item">
						<div class="reviews-item-img"><img src="/uploads/userpic/`+arr['buyer']['userpic']+`" alt=""></div>
						<div class="reviews-item-info">
							
							<div class="reviews-item--head">
								`+v1+`
								<div class="i1">
									<strong>`+arr['buyer']['name']+`</strong>
									<span>`+arr['date']+`</span>
								</div>
							</div>
							
							<div class="reviews-item--text">
								<p>`+arr['text']+`</p>
							</div>
						</div>
					</div>`;
					
			});
			
					
			$(area).append(tpl);

			if (data['page'] > 1 && num > 0) {
				GoTo('.reviews-list-'+num, 100);
			}
			
			window.config['reviews_page'] = data['page'];
			
			if (data['end'] == 1 || data['message'] == null) {
				$(btn).fadeOut(10);
			}
			else {
				$(btn).fadeIn(10);
			}
			
					
		}
		else {
			$(area).html('<div class="error">'+data['message']+'</div>');
			$(btn).fadeOut(10);
		}
		
		$(loader).fadeOut(100);
		
	});
	
}




/* ------------------------------------
	O N   L O A D
------------------------------------ */
$(function(){	
		
	/* Dropdown */
	$(".js-dropdown-link").on("click", function(){
		$(this).closest('.js-dropdown').find('.js-dropdown-content').slideToggle(100);
		$(this).closest('.js-dropdown').toggleClass("is_open");
	});
	
    /* Xselect */
	$('.js-xselect').on('click', function(){
  		$(this).closest('.xselect').toggleClass('opened');
	});	
	
	/* Select */
	$('.js-select').SumoSelect({
		 nativeOnDevice: [],
		 search: false,
		 up: false,
		 isFloating: false,
		 floatWidth: 300
	 });
	 
	
	/* Favorite */
	$('.js-favorite').on('click', function(){
		
		var id 				= $(this).data('id');
		var state_current 	= $(this).data('state');
		var state_reverse 	= (state_current == 0) ? 1 : 0;
		var form_data 		= '&key='+getUniqueId()+'&lng='+window.config['lang']+'&act=manage&id='+id+'&state='+state_reverse;

		var t1 = $(this).data('original-title');
		var t2 = $(this).data('reverse-title');
			
			$(this).data('original-title', t2);
			$(this).data('reverse-title', t1);
			$(this).attr('data-original-title', t2);
			$(this).attr('data-reverse-title', t1);
			$(this).data('state', state_reverse);
			$(this).children('i').removeClass('flaticon-star-'+state_current).addClass('flaticon-star-'+state_reverse);
			
			$.post("?page_load=ajax&url=/ajax/favorites.ajax", form_data, function(data) {
				data = JSON.parse(data);
				
				if (data['status'] == 1) {
					xToastify('success', data['message']);
				}
				else {
					xToastify('error', data['message']);
				}
			});
			
	}); 

	
	
	
	
	
	/* Filters popup */
	$('.filter-mob-link').on('click', function(e){
		e.preventDefault();
				
		$('html, body').animate({
			scrollTop: $('body').offset().top
		}, 200);
  
		$(".filter-wp").css("transform","translate(-50%,-300%)");
		$(".catalog-aside").fadeIn(1, function(){
			$(".catalog-aside").css("opacity", "1");
			$(".filter-wp").css("transform","translate(-50%, 0%)");
		});
		
	});
	
	$('.filter-mob-close').on('click', function(e){
		e.preventDefault();
		$(".filter-wp").css("transform","translate(-50%, -300%)");
		$(".catalog-aside").css("opacity","0");
		setTimeout(function(){
			$(".catalog-aside").hide(0);
		}, 800);
	});
	
	/* Thumbnails images popup */	
	if($('.js-thumbs').length) {
		var lighboxWidthRatio = '0.8';
	    var lighboxHeightRatio = '0.9';
	    if (windowWidth() < 480) {
	        var lighboxWidthRatio = '0.8';
	        var lighboxHeightRatio = '1.0';
	    }
	    
	    var simpleLightboxOpt = {
	        history: false,
	        showCounter: true,
	        captions: false,
	        nav: true,
	        overlay: true,
	        sourceAttr: 'href',
	        disableRightClick: true,
	        docClose: false,
	        animationSlide: false,
	        widthRatio: lighboxWidthRatio,
			heightRatio: lighboxHeightRatio,
	        alertErrorMessage: 'Image is missing somewhere :('
		}
	    	
		//$('.js-thumbs a').simpleLightbox(simpleLightboxOpt); 
		
		$('.js-thumbs').each(function(){
			$('a', this).simpleLightbox(simpleLightboxOpt);
		});
	
	}	
	
	
	/* Datepicker */
	(function ($) { $.fn.datepicker.language['en'] = {
	    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
	    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
	    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
	    months: ['January','February','March','April','May','June', 'July','August','September','October','November','December'],
	    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
	    today: 'Today',
	    clear: 'Clear',
	    dateFormat: 'mm/dd/yyyy',
	    timeFormat: 'hh:ii aa',
	    firstDay: 0
	}; })(jQuery);
	
	var xNewD = new Date();
	var datePick = $(".js-datepicker-here").datepicker({
		autoClose: true,
		minDate: new Date(),
		maxDate: new Date( xNewD.setMonth(xNewD.getMonth() + 1) ),		
	}).data('datepicker');
	
	if($(".js-datepicker-here").length > 0) {
		datePick.selectDate(new Date());
	}	
	
	
	/* Box close */
	$('.js-box-close').on('click', function(e){
		e.preventDefault();
		$(this).closest('.js-box-wp').fadeOut(100);
	});
	
	/* Account menu */
	$('.js-account-menu').on('click', function(e){
		e.preventDefault();
		$('.account-menu').toggleClass('_open');
	});
	
	/* SlimScroll */
	$('.messages-contacts-list').slimScroll({
    	start:'top',
    	railVisible: false, 
    	alwaysVisible: false, 
    	distance:'3px', 
    	size: '3px',
    	//touchScrollStep: 50, 
    	height: ($('.messages-contacts').outerHeight() - 70) + 'px'
	});
	/*
	$('.messages-box-list').slimScroll({
    	start:'top',
    	railVisible: false, 
    	alwaysVisible: false, 
    	distance:'3px', 
    	touchScrollStep: 50, 
    	wheelStep:7,
    	size: '3px',
    	height: ($('.messages-box').outerHeight() - 120) + 'px'
	});
	*/

	/*
	$('.js-msg').on('click', function(){
		
		if( $(this).hasClass('__selected') ) return;
		
		$('.messages-box').find('.loading').remove();
		
		$('.messages-contacts-list .js-msg').removeClass('__selected');
		$(this).addClass('__selected');
		
		$('.messages-box').append('<div style="display:block;" class="loading"></div>');
		
	});*/
	
	/* Upload file */	
	$('.js-upload').on('click', function() {
		var node = this,
			formFile = new FormData(),
			$inp 	 = $(this).find("input");
	
		$('#form-upload').remove();
	
		$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
	
		$('#form-upload input[name=\'file\']').trigger('click');
	
		if (typeof uplTimer != 'undefined') {
	    	clearInterval(uplTimer);
		}
	
		uplTimer = setInterval(function() {
			if ($('#form-upload input[name=\'file\']').val() != '') {
				clearInterval(uplTimer);
				
				var file = $('#form-upload input[name=\'file\']')[0].files;
				formFile.append($inp.attr("name"), file[0]);
				
				$inp.val(file[0].name);
														
				// upload save script (data: formFile)
	
			}
		}, 500);
	});
	
	
	/* Form campaigns */
	$('#form-campaigns').on('reset', function(){
		var obj = [];
	    $(this).find('option:selected').each(function () {
	        obj.push($(this).index());
	    });
	
	    for (var i = 0; i < obj.length; i++) {
	        $('.js-select')[i].sumo.unSelectItem(obj[i]);
	    }
	});
	 
	/* Tooltip */
	$('[data-toggle="tooltip"]').tooltip({ html:true, container: 'html'});	
	
	
	
	/* Document click */
  	$(document.body).on("click",function(e){
		if( !e.target.closest(".xselect")) {
			$(".xselect").removeClass("opened");
		}
	});	
	
});
// Get the modal
function openModal(modal)
{
  var modal = document.getElementById(modal);
    modal.style.display = "block";
    var span = document.querySelector("#"+modal.id+" .close");
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
}