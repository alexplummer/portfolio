!function(){"use strict";function t(i){if(!i)throw new Error("No options passed to Waypoint constructor");if(!i.element)throw new Error("No element option passed to Waypoint constructor");if(!i.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,i),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=i.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),n[this.key]=this,e+=1}var e=0,n={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete n[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.invokeAll=function(t){var e=[];for(var i in n)e.push(n[i]);for(var o=0,r=e.length;o<r;o++)e[o][t]()},t.destroyAll=function(){t.invokeAll("destroy")},t.disableAll=function(){t.invokeAll("disable")},t.enableAll=function(){t.invokeAll("enable")},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=o.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+n,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,i[t.waypointContextKey]=this,n+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var n=0,i={},o=window.Waypoint,r=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete i[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,o.requestAnimationFrame(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){e.didScroll&&!o.isTouch||(e.didScroll=!0,o.requestAnimationFrame(t))})},e.prototype.handleResize=function(){o.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var n in e){var i=e[n],o=i.newScroll>i.oldScroll?i.forward:i.backward;for(var r in this.waypoints[n]){var s=this.waypoints[n][r],l=i.oldScroll<s.triggerPoint,a=i.newScroll>=s.triggerPoint,c=l&&a,h=!l&&!a;(c||h)&&(s.queueTrigger(o),t[s.group.id]=s.group)}}for(var u in t)t[u].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element==this.element.window?o.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element==this.element.window?o.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var n in this.waypoints[e])t.push(this.waypoints[e][n]);for(var i=0,o=t.length;i<o;i++)t[i].destroy()},e.prototype.refresh=function(){var t,e=this.element==this.element.window,n=e?void 0:this.adapter.offset(),i={};this.handleScroll(),t={horizontal:{contextOffset:e?0:n.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:n.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var r in t){var s=t[r];for(var l in this.waypoints[r]){var a,c,h,u,d,p=this.waypoints[r][l],f=p.options.offset,g=p.triggerPoint,y=0,m=null==g;p.element!==p.element.window&&(y=p.adapter.offset()[s.offsetProp]),"function"==typeof f?f=f.apply(p):"string"==typeof f&&(f=parseFloat(f),p.options.offset.indexOf("%")>-1&&(f=Math.ceil(s.contextDimension*f/100))),a=s.contextScroll-s.contextOffset,p.triggerPoint=y+a-f,c=g<s.oldScroll,h=p.triggerPoint>=s.oldScroll,u=c&&h,d=!c&&!h,!m&&u?(p.queueTrigger(s.backward),i[p.group.id]=p.group):!m&&d?(p.queueTrigger(s.forward),i[p.group.id]=p.group):m&&s.oldScroll>=p.triggerPoint&&(p.queueTrigger(s.forward),i[p.group.id]=p.group)}}return o.requestAnimationFrame(function(){for(var t in i)i[t].flushTriggers()}),this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in i)i[t].refresh()},e.findByElement=function(t){return i[t.waypointContextKey]},window.onload=function(){r&&r(),e.refreshAll()},o.requestAnimationFrame=function(e){(window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t).call(window,e)},o.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function n(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),i[this.axis][this.name]=this}var i={vertical:{},horizontal:{}},o=window.Waypoint;n.prototype.add=function(t){this.waypoints.push(t)},n.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},n.prototype.flushTriggers=function(){for(var n in this.triggerQueues){var i=this.triggerQueues[n],o="up"===n||"left"===n;i.sort(o?e:t);for(var r=0,s=i.length;r<s;r+=1){var l=i[r];(l.options.continuous||r===i.length-1)&&l.trigger([n])}}this.clearTriggerQueues()},n.prototype.next=function(e){this.waypoints.sort(t);var n=o.Adapter.inArray(e,this.waypoints);return n===this.waypoints.length-1?null:this.waypoints[n+1]},n.prototype.previous=function(e){this.waypoints.sort(t);var n=o.Adapter.inArray(e,this.waypoints);return n?this.waypoints[n-1]:null},n.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},n.prototype.remove=function(t){var e=o.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},n.prototype.first=function(){return this.waypoints[0]},n.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},n.findOrCreate=function(t){return i[t.axis][t.name]||new n(t)},o.Group=n}(),function(){"use strict";function t(t){return t===t.window}function e(e){return t(e)?e:e.defaultView}function n(t){this.element=t,this.handlers={}}var i=window.Waypoint;n.prototype.innerHeight=function(){return t(this.element)?this.element.innerHeight:this.element.clientHeight},n.prototype.innerWidth=function(){return t(this.element)?this.element.innerWidth:this.element.clientWidth},n.prototype.off=function(t,e){function n(t,e,n){for(var i=0,o=e.length-1;i<o;i++){var r=e[i];n&&n!==r||t.removeEventListener(r)}}var i=t.split("."),o=i[0],r=i[1],s=this.element;if(r&&this.handlers[r]&&o)n(s,this.handlers[r][o],e),this.handlers[r][o]=[];else if(o)for(var l in this.handlers)n(s,this.handlers[l][o]||[],e),this.handlers[l][o]=[];else if(r&&this.handlers[r]){for(var a in this.handlers[r])n(s,this.handlers[r][a],e);this.handlers[r]={}}},n.prototype.offset=function(){if(!this.element.ownerDocument)return null;var t=this.element.ownerDocument.documentElement,n=e(this.element.ownerDocument),i={top:0,left:0};return this.element.getBoundingClientRect&&(i=this.element.getBoundingClientRect()),{top:i.top+n.pageYOffset-t.clientTop,left:i.left+n.pageXOffset-t.clientLeft}},n.prototype.on=function(t,e){var n=t.split("."),i=n[0],o=n[1]||"__default",r=this.handlers[o]=this.handlers[o]||{};(r[i]=r[i]||[]).push(e),this.element.addEventListener(i,e)},n.prototype.outerHeight=function(e){var n,i=this.innerHeight();return e&&!t(this.element)&&(n=window.getComputedStyle(this.element),i+=parseInt(n.marginTop,10),i+=parseInt(n.marginBottom,10)),i},n.prototype.outerWidth=function(e){var n,i=this.innerWidth();return e&&!t(this.element)&&(n=window.getComputedStyle(this.element),i+=parseInt(n.marginLeft,10),i+=parseInt(n.marginRight,10)),i},n.prototype.scrollLeft=function(){var t=e(this.element);return t?t.pageXOffset:this.element.scrollLeft},n.prototype.scrollTop=function(){var t=e(this.element);return t?t.pageYOffset:this.element.scrollTop},n.extend=function(){for(var t=Array.prototype.slice.call(arguments),e=1,n=t.length;e<n;e++)!function(t,e){if("object"==typeof t&&"object"==typeof e)for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])}(t[0],t[e]);return t[0]},n.inArray=function(t,e,n){return null==e?-1:e.indexOf(t,n)},n.isEmptyObject=function(t){for(var e in t)return!1;return!0},i.adapters.push({name:"noframework",Adapter:n}),i.Adapter=n}(),function(t){"use strict";var e=function(e,n,i){function o(t){if(l.body)return t();setTimeout(function(){o(t)})}function r(){a.addEventListener&&a.removeEventListener("load",r),a.media=i||"all"}var s,l=t.document,a=l.createElement("link");if(n)s=n;else{var c=(l.body||l.getElementsByTagName("head")[0]).childNodes;s=c[c.length-1]}var h=l.styleSheets;a.rel="stylesheet",a.href=e,a.media="only x",o(function(){s.parentNode.insertBefore(a,n?s:s.nextSibling)});var u=function(t){for(var e=a.href,n=h.length;n--;)if(h[n].href===e)return t();setTimeout(function(){u(t)})};return a.addEventListener&&a.addEventListener("load",r),a.onloadcssdefined=u,u(r),a};"undefined"!=typeof exports?exports.loadCSS=e:t.loadCSS=e}("undefined"!=typeof global?global:this);var app=function(){"use strict";var t=function(t){console.log(t)},e=function(e,n){var i=new XMLHttpRequest;i.open("GET",e,!0),i.onload=function(){this.status>=200&&this.status<400?n(this.response):t("ajaxGet failed")},i.onerror=function(){t("ajaxGet failed to connect")},i.send()},n=function(){for(var t=document.querySelectorAll(".svg"),n=0;n<t.length;n++)!function(n){var i=t[n],o=i.classList;e(i.getAttribute("src"),function(t){i.insertAdjacentHTML("afterend",t);for(var e=0;e<o.length;e++)i.nextSibling.classList.add(o[e]);i.parentNode.removeChild(i)})}(n)},i=function(){new Waypoint({element:document.querySelector(".toggle-left"),handler:function(t){Waypoint.viewportWidth()>768&&document.querySelector(".items-holder").classList.toggle("slide-in")},offset:"90%"});Waypoint.viewportWidth()<768&&document.querySelector(".items-holder").classList.add("slide-in")},o=function(){function t(){e.classList.toggle("active"),n.classList.toggle("active"),document.querySelector(".slider").querySelector(".items-left").classList.toggle("active"),document.querySelector(".slider").querySelector(".items-right").classList.toggle("active"),document.querySelector(".slider").querySelector(".items-left").classList.toggle("inactive"),document.querySelector(".slider").querySelector(".items-right").classList.toggle("inactive"),i.classList.toggle("right"),i.className.indexOf("right")>-1?i.innerHTML="SOME OF THE TECHY STUFF":i.innerHTML="SOME OF THE PRETTY STUFF"}var e=document.querySelector(".slider").querySelector(".toggle-left"),n=document.querySelector(".slider").querySelector(".toggle-right"),i=document.querySelector(".slider").querySelector(".title");e.addEventListener("click",function(n){n.preventDefault(),e.className.indexOf("active")<1&&t()}),n.addEventListener("click",function(e){e.preventDefault(),n.className.indexOf("active")<1&&t()})},r=function(){new Waypoint({element:document.getElementById("first-splash"),handler:function(t){Waypoint.viewportWidth()>768&&document.getElementById("first-splash").classList.toggle("splash-in")},offset:"80%"});Waypoint.viewportWidth()<768&&document.getElementById("first-splash").classList.add("splash-in")},s=function(){new Waypoint({element:document.getElementById("second-splash"),handler:function(t){Waypoint.viewportWidth()>768&&document.getElementById("second-splash").classList.toggle("splash-in")},offset:"80%"});Waypoint.viewportWidth()<768&&document.getElementById("second-splash").classList.add("splash-in")},l=function(){new Waypoint({element:document.querySelector(".list-skills"),handler:function(t){Waypoint.viewportWidth()>768&&document.querySelector(".list-skills").classList.toggle("spin-in")},offset:"10%"});Waypoint.viewportWidth()<768&&document.querySelector(".list-skills").classList.add("spin-in")},a=a||{};return function(t){var e=setInterval(function(){document&&"complete"===document.readyState&&(clearInterval(e),t())},10)}(function(){n(),i(),o(),r(),s(),l()}),a}();
//# sourceMappingURL=script.js.map
