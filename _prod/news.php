<?php require_once( 'couch/cms.php' ); ?>
<cms:editable name="group_meta" label="Meta" desc="Page meta information" type="group"></cms:editable>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Primary meta-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no">
    <title>
        <cms:editable name="meta_title" label="Page Title" desc="Page title used for meta and OG" group="group_meta" type="text"></cms:editable>
    </title>
    <link rel="author" href="humans.txt">
    <link rel="canonical" href="#">
    <!-- DNS Prefetch-->
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/">
    <!-- Meta, OG, Twitter, Apple-->
    <meta name="description" content="<cms:editable name='meta_description' label='Page Description' desc='Page description used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta property="article:author" content="Alex Plummer">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#009DC9">
    <meta property="fb:app_id" content="123456789">
    <meta property="og:url" content="http://wwww.alexplummer.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<cms:editable name='meta_title' label='Page Title' desc='Page title used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta property="og:description" content="<cms:editable name='meta_description' label='Page Description' desc='Page description used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta property="og:site_name" content="Alex Plummer | Frontend Web Designer London">
    <meta property="og:locale" content="en_UK">
    <cms:hide>
        <cms:editable name="meta_image" group="group_meta" label="Meta image" type="image"></cms:editable>
    </cms:hide>
    <meta property="og:image" content="<cms:show meta_image />">
    <meta name="twitter:image" content="<cms:show meta_image />">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="http://wwww.alexplummer.com">
    <meta name="twitter:title" content="<cms:editable name='meta_title' label='Page Title' desc='Page title used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="twitter:description" content="<cms:editable name='meta_description' label='Page Description' desc='Page description used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="apple-mobile-web-app-title" content="<cms:editable name='meta_title' label='Page Title' desc='Page title used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <style type="text/css">
        @charset "UTF-8";h1,h2{font-family:Sanchez,sans-serif}a,span{font-family:Quicksand,sans-serif;font-size:1rem}a{font-family:Quicksand,sans-serif}span{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2{color:#272729}a{line-height:1.5rem}span{line-height:1.5rem}h1,h2{margin:0;padding:0}span{margin:0 0 .75rem;padding:.75rem 0 0}header,nav{display:block}.intro-with-description,header{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}.intro-with-description,.intro-with-description .inner .lined-heading h1{position:relative}.intro-with-description .inner .lined-heading h1:after,.intro-with-description .inner .lined-heading h1:before,.intro-with-description:after,.intro-with-description:before{content:"";background-size:cover;background-repeat:no-repeat;position:absolute;left:0;top:0}a,span{font-size:1.5rem;line-height:2.25rem}@font-face{font-family:fontello;src:url(font/fontello.eot?1665543);src:url(font/fontello.eot?1665543#iefix) format("embedded-opentype"),url(font/fontello.woff2?1665543) format("woff2"),url(font/fontello.woff?1665543) format("woff"),url(font/fontello.ttf?1665543) format("truetype"),url(font/fontello.svg?1665543#fontello) format("svg");font-weight:400;font-style:normal}@media (max-width:500px){.intro-with-description{padding:0 3rem;margin-bottom:-310px}.intro-with-description:after{display:none}.intro-with-description .inner{display:block}.intro-with-description .inner .lined-heading{max-width:100%;width:100%;margin-left:0;padding-left:0;padding-right:0}.news .intro-with-description{margin-bottom:-340px}}@media (max-width:991px){body h1{font-size:2.25rem;line-height:3rem}body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:1.5rem;margin-bottom:1.5rem}}@media (max-width:767px){body h1,body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:.75rem;margin-bottom:.75rem}}.inner{-webkit-box-orient:horizontal}a{margin:0 0 .75rem}a{padding:.75rem 0 0}h1,h2,h4{font-family:Sanchez,sans-serif}a,li,span,ul{font-family:Quicksand,sans-serif;font-size:1rem}a,li{font-family:Quicksand,sans-serif}span,ul{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2,h4,li{color:#272729}h1{font-size:3rem}h2{font-size:2.25rem}h4{font-size:1.5rem}h1,h2{line-height:3rem}a,h4,li{line-height:1.5rem}span,ul{line-height:1.5rem}h1,h2,h4{margin:0;padding:0}li,span,ul{margin:0 0 .75rem;padding:.75rem 0 0}a{color:#ce0176}h1{padding-top:2.25rem;margin-bottom:2.25rem}h2{padding-top:1.5rem}h2{margin-bottom:1.5rem}h4{padding-top:.75rem;margin-bottom:.75rem}@media (max-width:991px){body h1{font-size:2.25rem;line-height:3rem}body h2{font-size:1.5rem;line-height:1.5rem}body h4{font-size:1.125rem;line-height:1.5rem}body h1,body h2,body h4{padding-top:1.5rem;margin-bottom:1.5rem}}@media (max-width:767px){body h1,body h2{font-size:1.5rem;line-height:1.5rem}body h4{font-size:1.125rem;line-height:1.5rem}body h1,body h2,body h4{padding-top:.75rem;margin-bottom:.75rem}}ul{margin-left:1.5rem}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;-webkit-backface-visibility:hidden}article,header,main,nav,section{display:block}a{background-color:transparent;-webkit-text-decoration-skip:objects}svg:not(:root){overflow:hidden}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}.intro-with-description,header,section{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}.inner{-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-moz-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-box-direction:normal;-moz-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-1.5rem;margin-left:-1.5rem}.intro-with-description .inner .lined-heading{-ms-flex-preferred-size:33.33333%;flex-basis:33.33333%;max-width:33.33333%}.intro-with-description .inner article,.news-highlights .news-search .search-wrap,.news-highlights .news-search .tags-wrap{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.intro-with-description .inner .lined-heading{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;margin-left:8.33333%}@media only screen and (min-width:768px){.intro-with-description,header,section{width:100%}.intro-with-description .inner .lined-heading{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.intro-with-description .inner article{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:41.66667%;flex-basis:41.66667%;max-width:41.66667%}.intro-with-description .inner .lined-heading{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;margin-left:16.66667%}}@media only screen and (min-width:992px){.intro-with-description,header,section{width:100%}}@media only screen and (min-width:1200px){.intro-with-description .inner .lined-heading{-webkit-box-sizing:border-box;box-sizing:border-box;padding-right:1.5rem;padding-left:1.5rem}.intro-with-description,header,section{width:100%}.intro-with-description .inner .lined-heading{-ms-flex-preferred-size:25%;flex-basis:25%;max-width:25%}.intro-with-description .inner .lined-heading{-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;margin-left:16.66667%}}[class^=icon-]:before,[class^=icon]:before{font-family:fontello;font-style:normal;font-weight:400;speak:none;display:inline-block;width:1em;margin-right:.2em;font-variant:normal;text-transform:none;line-height:1em;margin-left:.2em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;text-align:center}[class^=icon]:before{text-decoration:inherit}[class^=icon-]:before{text-decoration:inherit}.icon-search:before{content:'\e803'}.icon-th:before{content:'\e804'}body,html{overflow-x:hidden;background:#fff}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-backface-visibility:hidden;backface-visibility:hidden}.intro-with-description .inner .lined-heading h1:before{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAYAAACNbyblAAAAF0lEQVQYV2PcuvvIf29XG0YGJMBIA0EAq9wUBqYv3ckAAAAASUVORK5CYII=)}.intro-with-description,.intro-with-description .inner .lined-heading h1,.news-highlights{position:relative}.intro-with-description .inner .lined-heading h1:after,.intro-with-description .inner .lined-heading h1:before,.intro-with-description:after,.intro-with-description:before,.news-highlights:after,.news-highlights:before{content:"";background-size:cover;background-repeat:no-repeat;position:absolute;left:0;top:0}.intro-with-description .inner .lined-heading h1{padding:6rem 0;position:relative;display:inline-block;margin-bottom:0}.intro-with-description .inner .lined-heading h1:before{background-size:auto;background-repeat:space;z-index:-1;width:100%;height:100%}.intro-with-description .inner .lined-heading h1{text-align:right}@media (max-width:1250px){.intro-with-description .inner .lined-heading h1{font-size:3rem;line-height:3rem}}@media (max-width:700px){.intro-with-description .inner .lined-heading h1{font-size:2.25rem;line-height:2.25rem}}.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{font-family:Quicksand,sans-serif;font-weight:100;letter-spacing:15px;font-size:1.125rem;text-transform:uppercase}.nav-vertical .logo-main h2{position:relative;z-index:51}.nav-vertical .logo-main h2 span{font-size:2.25rem;font-weight:500;letter-spacing:30px;display:block}.intro-with-description .inner .lined-heading h1{font-size:6rem;font-weight:100;text-transform:uppercase;line-height:6rem;font-family:Sanchez,sans-serif}a,li,span,ul{font-size:1.5rem;line-height:2.25rem}@media (max-width:1199px){a{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){a{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){li{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){li{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){ul{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){ul{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){span{font-size:1.125rem;line-height:1.4625rem}}.intro-with-description{height:1000px;max-width:100%;width:100%;padding:0;margin:0 0 -180px}.intro-with-description:before{width:calc(100% - 6rem);height:100%;left:3rem;top:3rem;background:#e6eaf0}.intro-with-description:after{background:url(img/shape-splat.svg);width:1070px;height:814px;left:auto;top:auto;right:-600px;-webkit-transform:rotate(210deg);transform:rotate(210deg);bottom:-430px}.intro-with-description .inner .lined-heading{min-width:355px;position:relative;overflow:hidden;top:3rem}.intro-with-description .inner .lined-heading h1{-webkit-transform:skewY(8deg);transform:skewY(8deg);padding:280px 0 3rem;top:-30px;position:relative;width:310px}.intro-with-description .inner .lined-heading h1 svg{position:absolute;width:120px;height:auto;top:50%;left:50%;-webkit-transform:skewY(-8deg) translate(-50%,-75%);transform:skewY(-8deg) translate(-50%,-75%)}.intro-with-description .inner .lined-heading .header-bg-under{display:block;left:0;z-index:50;width:310px;height:auto;margin-top:-20px}.intro-with-description .inner article{display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-direction:normal;-webkit-box-orient:vertical;-moz-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:end;-ms-flex-pack:end;-moz-justify-content:flex-end;justify-content:flex-end;position:relative;top:3rem}.news .intro-with-description:after{display:none}.news .intro-with-description{margin-bottom:-240px}.news .intro-with-description .inner .lined-heading h1 svg{width:90px}@media (max-width:1250px){.intro-with-description{height:830px}.intro-with-description .inner .lined-heading{min-width:155px}.intro-with-description .inner .lined-heading h1{font-size:3rem;padding:280px 0 3rem;top:-30px;width:155px}.intro-with-description .inner .lined-heading h1 svg{position:absolute;width:120px;height:auto;top:50%;left:50%;-webkit-transform:skewY(-8deg) translate(-50%,-75%);transform:skewY(-8deg) translate(-50%,-75%)}.intro-with-description .inner .lined-heading .header-bg-under{display:block;left:0;z-index:50;width:155px;height:auto;margin-top:-20px}}@media (max-width:991px){span{font-size:1rem;line-height:1.5rem}.news .intro-with-description{margin-bottom:-240px}}@media (max-width:900px){.intro-with-description{margin-bottom:-330px}.intro-with-description:before{width:100%;left:0;top:0}.intro-with-description .inner .lined-heading{top:0}.intro-with-description .inner .lined-heading h1{padding:160px 0 0}}@media (max-width:767px){.nav-vertical .logo-main h2{font-size:.75rem;letter-spacing:6px;line-height:.5625rem;margin-bottom:1.5rem}.nav-vertical .logo-main h2 span{font-size:1rem;letter-spacing:18px}.intro-with-description{height:900px;margin-bottom:-400px}.news .intro-with-description{margin-bottom:-420px}}@media (max-width:500px){.intro-with-description{padding:0 3rem;margin-bottom:-310px}.intro-with-description:after{display:none}.intro-with-description .inner{display:block}.intro-with-description .inner .lined-heading{max-width:100%;width:100%;margin-left:0;padding-left:0;padding-right:0}.intro-with-description .inner article{max-width:100%;width:100%;margin-top:-1.5rem;padding-left:0;padding-right:0}.news .intro-with-description{margin-bottom:-340px}}@media (max-width:400px){.intro-with-description{height:950px}}.nav-vertical{position:absolute;z-index:100;top:6rem;left:100%;line-height:3rem;width:100%}.nav-vertical .logo-main{display:none;position:fixed;top:1.5rem;left:1.5rem}.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{color:#fff}.nav-vertical .logo-main h2{margin:0;padding:0}.nav-vertical .logo-main span{padding-top:0}.nav-vertical .skip-main{position:absolute;top:-18rem;right:calc(100vw - 3rem);margin:0;width:200px}.nav-vertical .nav-inner{-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transform-origin:left top;transform-origin:left top;position:absolute}.nav-vertical a{color:#272729;font-size:1rem;margin-right:3rem;text-decoration:none;position:relative;line-height:1.5rem}.nav-vertical a svg{width:1.5rem;height:1.5rem;display:inline-block;position:absolute;bottom:-3rem;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-size:100% 100%;background-repeat:no-repeat;overflow:visible}@media (max-width:900px){.nav-vertical{-webkit-transform:none;transform:none;position:fixed;opacity:0;top:0;left:0;height:100%;width:100%}.nav-vertical .logo-main{display:block}.nav-vertical .nav-inner{position:absolute;-webkit-transform:rotate(0) translate(-50%,-50%);transform:rotate(0) translate(-50%,-50%);left:50%;top:50%}.nav-vertical a{font-family:Sanchez,sans-serif;font-size:2.25rem;display:block;padding-left:3rem;color:#fff;margin-bottom:1.5rem;border-bottom:1px solid rgba(250,250,250,.4);margin-right:0;padding-bottom:1.5rem;letter-spacing:6px}.nav-vertical a svg{bottom:40%;left:0;-webkit-transform:translateX(0);transform:translateX(0)}.nav-vertical a:last-of-type{border-bottom:0;padding-bottom:0;margin-bottom:0}.nav-vertical a:last-of-type svg{bottom:0}.nav-vertical:before{content:"";-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);position:fixed;width:200vw;height:200vh;background:#ce0176;z-index:-2}}.menu-toggle{width:150px;height:150px;position:fixed;top:0;right:0;z-index:1000;background:#ce0176;border-radius:50%;-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle span{background:#fff;display:block;line-height:0;margin:0;padding:0;border-radius:15px}.menu-toggle.inactive{-webkit-transform:translate(100%,-100%);transform:translate(100%,-100%)}.menu-toggle .off{position:absolute;height:100%;width:100%}.menu-toggle .off span{width:35px;height:4px;margin:10px 0;position:relative;left:31%;top:52%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on{position:absolute;height:100%;width:100%;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.menu-toggle .on span:nth-child(1){height:0%;width:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on span:nth-child(2){width:0%;height:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}@media (max-width:900px){.menu-toggle{width:125px;height:125px}.menu-toggle.inactive{-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle .off span{width:30px;height:3px;top:55%;left:33%;margin:7px 0}}.news-highlights{padding:0;width:100%;max-width:none;margin-bottom:150px}.news-highlights:before{position:absolute;width:calc(100% - 6rem);left:3rem;background:#e6eaf0;top:-800px;height:calc(100% + 950px)}.news-highlights .inner{padding:.75rem;margin:0}.news-highlights .news-search{position:relative;z-index:50;background:#fca504;padding-top:4.5rem;margin-bottom:6rem}.news-highlights .news-search h4:before{margin-right:.75rem}.news-highlights .news-search .search-listing{margin:0;padding:0}.news-highlights .news-search .search-listing:last-of-type{margin-bottom:4.5rem}.news-highlights .news-search .search-listing h4,.news-highlights .news-search .search-listing h4 a{font-weight:400;color:#fff}.news-highlights .news-search .tags-wrap ul{margin:0 0 1.5rem;list-style:none;overflow:hidden}.news-highlights .news-search .tags-wrap ul li{float:left;margin-right:1.5rem}.news .news-highlights{padding:0 3rem;margin-bottom:40px}.news .news-highlights:before{position:absolute;width:calc(100% - 6rem);left:3rem;background:#e6eaf0;top:0;height:calc(100% + 3rem)}@media (max-width:1199px){.news-highlights{padding:0 3rem}}@media (max-width:991px){.news-highlights .news-search h4{margin-bottom:0}}@media (max-width:900px){.news-highlights{padding:0;margin-bottom:100px}.news-highlights:before{width:100%;left:0;height:calc(100% + 900px)}.news .news-highlights{padding:0}.news .news-highlights:before{width:100%;left:0}}@media (max-width:700px){.news-highlights .news-search{padding-top:1.5rem}.news-highlights .news-search .search-wrap,.news-highlights .news-search .tags-wrap{width:100%;max-width:100%;-ms-flex-preferred-size:100%;flex-basis:100%}}@media (max-width:475px){.news-highlights:before{width:100%;left:0}}@media (max-width:767px){.news-highlights{margin-bottom:0}.news-highlights:before{height:calc(100% + 800px)}.news-highlights .news-search .search-listing h4,.news-highlights .news-search .search-listing h4 a{font-weight:800}}
    </style>
    <link rel="preload" href="<cms:show k_site_link />style/style.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="<cms:show k_site_link />style/style.css"></noscript>
    <script>!function(e){"use strict";var t=function(t,n,r){function o(e){if(i.body)return e();setTimeout(function(){o(e)})}function a(){d.addEventListener&&d.removeEventListener("load",a),d.media=r||"all"}var l,i=e.document,d=i.createElement("link");if(n)l=n;else{var s=(i.body||i.getElementsByTagName("head")[0]).childNodes;l=s[s.length-1]}var u=i.styleSheets;d.rel="stylesheet",d.href=t,d.media="only x",o(function(){l.parentNode.insertBefore(d,n?l:l.nextSibling)});var f=function(e){for(var t=d.href,n=u.length;n--;)if(u[n].href===t)return e();setTimeout(function(){f(e)})};return d.addEventListener&&d.addEventListener("load",a),d.onloadcssdefined=f,f(a),d};"undefined"!=typeof exports?exports.loadCSS=t:e.loadCSS=t}("undefined"!=typeof global?global:this),function(e){if(e.loadCSS){var t=loadCSS.relpreload={};if(t.support=function(){try{return e.document.createElement("link").relList.supports("preload")}catch(e){return!1}},t.poly=function(){for(var t=e.document.getElementsByTagName("link"),n=0;n<t.length;n++){var r=t[n];"preload"===r.rel&&"style"===r.getAttribute("as")&&(e.loadCSS(r.href,r,r.getAttribute("media")),r.rel=null)}},!t.support()){t.poly();var n=e.setInterval(t.poly,300);e.addEventListener&&e.addEventListener("load",function(){t.poly(),e.clearInterval(n)}),e.attachEvent&&e.attachEvent("onload",function(){e.clearInterval(n)})}}}(this);</script>
    <link rel="apple-touch-icon" sizes="76x76" href="<cms:show k_site_link />img/brand/favicons/apple-touch-icon.png?v=6">
    <link rel="icon" type="image/png" href="<cms:show k_site_link />img/brand/favicons/favicon-32x32.png?v=6" sizes="32x32">
    <link rel="icon" type="image/png" href="<cms:show k_site_link />img/brand/favicons/favicon-16x16.png?v=6" sizes="16x16">
    <link rel="manifest" href="<cms:show k_site_link />img/brand/favicons/manifest.json?v=6">
    <link rel="mask-icon" href="<cms:show k_site_link />img/brand/favicons/safari-pinned-tab.svg?v=6" color="#009DC9">
    <link rel="shortcut icon" href="<cms:show k_site_link />img/brand/favicons/favicon.ico?v=6">
    <meta name="apple-mobile-web-app-title" content="app_name">
    <meta name="application-name" content="app_name">
    <meta name="msapplication-TileColor" content="#009DC9">
    <meta name="msapplication-config" content="img/brand/favicons/browserconfig.xml?v=6">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107949728-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-107949728-1');
    </script>
</head>

<body class="news">
    <cms:template title="News"></cms:template>
    <cms:editable name="group_intro" label="Intro" desc="Intro to page" type="group"></cms:editable>
    <header class="intro-with-description" role="banner">
        <div class="inner">
            <div class="lined-heading no-under">
                <h1 class="news">News<svg viewbox="0 0 26 31" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill="#272729" fill-rule="evenodd"><path d="M10.135 26.186c0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.632 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.6 2.098-4.6 4.686 0 2.36 1.714 4.307 3.943 4.633v12.156c-2.229.325-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542-.001 4.602-2.1 4.602-4.687zM2.247 4.764c0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zm0 21.422c0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zM6.848 4.764c0-.74-.589-1.339-1.315-1.339-.725 0-1.314.6-1.314 1.339s.588 1.339 1.314 1.339c.727 0 1.315-.6 1.315-1.34zm0 21.422c0-.74-.589-1.34-1.315-1.34-.725 0-1.314.6-1.314 1.34 0 .739.588 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34z" class="line-1"/><path d="M19.995 4.764c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.6-1.314 1.339zm0 21.422c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.599-1.314 1.339zM16.708 4.764c0 2.36 1.715 4.307 3.944 4.632v12.157c-2.229.326-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542 0 4.602-2.098 4.602-4.686 0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.633 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.601 2.098-4.601 4.686zm7.888 21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347zm0-21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347z" class="line-2"/></g></svg></h1>
                <svg viewbox="0 0 424 313" xmlns="http://www.w3.org/2000/svg" class="header-bg-under" aria-hidden="true" role="presentation"><g fill="#CE0176" fill-rule="evenodd"><g transform="rotate(99 186.34 213.598)"><circle cx="22" cy="175" r="21"/><circle cx="21.65" cy="96.08" r="21"/><circle cx="21.93" cy="21.12" r="21"/><circle cx="22" cy="252" r="21"/><circle cx="22" cy="330" r="21"/><circle cx="22" cy="407" r="21"/></g><g transform="rotate(99 156.447 248.598)"><circle cx="22" cy="175" r="21"/><circle cx="21.65" cy="96.08" r="21"/><circle cx="21.93" cy="21.12" r="21"/><circle cx="22" cy="252" r="21"/><circle cx="22" cy="330" r="21"/><circle cx="22" cy="407" r="21"/></g><g transform="rotate(99 126.554 283.598)"><circle cx="22" cy="175" r="21"/><circle cx="21.65" cy="96.08" r="21"/><circle cx="21.93" cy="21.12" r="21"/><circle cx="22" cy="252" r="21"/><circle cx="22" cy="330" r="21"/><circle cx="22" cy="407" r="21"/></g><g transform="rotate(99 96.661 318.598)"><circle cx="22" cy="175" r="21"/><circle cx="21.65" cy="96.08" r="21"/><circle cx="21.93" cy="21.12" r="21"/><circle cx="21.93" cy="21.12" r="21"/><circle cx="22" cy="252" r="21"/><circle cx="22" cy="330" r="21"/><circle cx="22" cy="407" r="21"/></g></g></svg>
            </div>
            <article>
                <h2><cms:editable name="intro_subheading" label="Intro subheading" desc="Subheading for the intro" group="group_intro" type="text"></cms:editable></h2>
                <cms:editable name="intro_content" label="Intro content" desc="Content for the intro" group="group_intro" type="richtext"></cms:editable>
            </article>
        </div>
    </header>
    <div class="menu-toggle inactive">
        <div class="off"><span></span><span></span><span></span>
        </div>
        <div class="on"><span></span><span></span>
        </div>
    </div>
    <nav class="nav-vertical">
        <div class="logo-main">
            <h2><span>Alex</span> Plummer</h2>
        </div><a class="skip-main" href="#maincontent">Skip to main content</a>
        <div class="nav-inner" role="navigation"><a class="home" href="<cms:show k_site_link />index.php">HOME<svg viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><path d="M12.375 9.554c-1.61 0-2.917 1.32-2.917 2.946 0 1.627 1.306 2.946 2.917 2.946 1.61 0 2.917-1.319 2.917-2.946 0-1.627-1.306-2.946-2.917-2.946zm0 4.714c-.967 0-1.75-.792-1.75-1.768s.783-1.768 1.75-1.768 1.75.792 1.75 1.768-.783 1.768-1.75 1.768zm0-14.268L0 12.5 12.375 25 24.75 12.5 12.375 0zM1.65 12.5L12.375 1.667 23.1 12.501 12.375 23.334 1.65 12.5z" fill="#272729" fill-rule="evenodd"/></svg></a><a class="work" href="<cms:show k_site_link />work.php">WORK<svg viewbox="0 0 128 99" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill-rule="nonzero" fill="#27272A"><path class="line-1" d="M45.95 12.974l26.059 32.02 21.389-21.021 29.147 34.582 5.353-4.51L93.88 13.683 72.585 34.612 46.371 2.402 25.213 24.539 5.705.779.295 5.221l24.52 29.865z"/><path class="line-2" d="M72.009 84.993l21.389-21.02 29.147 34.582 5.353-4.51L93.88 53.683 72.585 74.612l-26.214-32.21-21.158 22.137-19.508-23.76-5.41 4.442 24.52 29.865L45.95 52.974z"/></g></svg></a>
            <a class="news" href="<cms:show k_site_link />news.php">NEWS
                <svg viewbox="0 0 26 31" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill="#272729" fill-rule="evenodd"><path d="M10.135 26.186c0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.632 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.6 2.098-4.6 4.686 0 2.36 1.714 4.307 3.943 4.633v12.156c-2.229.325-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542-.001 4.602-2.1 4.602-4.687zM2.247 4.764c0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zm0 21.422c0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zM6.848 4.764c0-.74-.589-1.339-1.315-1.339-.725 0-1.314.6-1.314 1.339s.588 1.339 1.314 1.339c.727 0 1.315-.6 1.315-1.34zm0 21.422c0-.74-.589-1.34-1.315-1.34-.725 0-1.314.6-1.314 1.34 0 .739.588 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34z" class="line-1"/><path d="M19.995 4.764c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.6-1.314 1.339zm0 21.422c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.599-1.314 1.339zM16.708 4.764c0 2.36 1.715 4.307 3.944 4.632v12.157c-2.229.326-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542 0 4.602-2.098 4.602-4.686 0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.633 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.601 2.098-4.601 4.686zm7.888 21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347zm0-21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347z" class="line-2"/></g></svg>
                </a><a class="chat" href="<cms:show k_site_link />chat.php">CHAT<svg viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><path d="M12.398 0C5.55 0 0 5.596 0 12.5S5.55 25 12.398 25c6.847 0 12.397-5.596 12.397-12.5S19.245 0 12.398 0zm.516 1.055c5.864.265 10.558 5.012 10.823 10.924h-4.132c-.254-3.61-3.11-6.488-6.69-6.745v-4.18zm0 11.966h5.658c-.25 3.035-2.647 5.452-5.658 5.703V13.02zm5.658-1.042h-5.658V6.276c3.01.251 5.409 2.668 5.658 5.703zm-6.69 0H6.223c.249-3.035 2.647-5.452 5.657-5.703v5.703zm0-10.924v4.18C8.3 5.49 5.444 8.368 5.19 11.978H1.058C1.323 6.067 6.017 1.32 11.881 1.055zm0 22.89c-5.865-.264-10.56-5.012-10.824-10.924H5.19c.255 3.61 3.11 6.488 6.691 6.745v4.18zM6.223 13.021h5.657v5.703c-3.01-.251-5.408-2.668-5.657-5.703zm6.69 10.924v-4.18c3.581-.255 6.437-3.134 6.69-6.744h4.133c-.264 5.912-4.959 10.66-10.823 10.924z" fill="#272729" fill-rule="evenodd"/></svg></a>
        </div>
    </nav>
    <main role="main" id="maincontent">
        <section class="news-highlights">
            <div class="inner news-search">
                <div class="tags-wrap">
                    <h4 class="icon-th">Categories</h4>
                    <ul>
                        <cms:folders masterpage="article.php">
                            <li>
                                <a href="<cms:add_querystring "<cms:link masterpage='news.php' />" "cat=<cms:show k_folder_name/>" />"#k_search_form><cms:show k_folder_title /></a> <br>
                            </li>
                            
                    </cms:folders></ul>
                </div>
                <div class="search-wrap">
                    <h4 class="icon-search">Search all news</h4>
                    <cms:search_form msg="Enter keyword..." /> <cms:search masterpage="article.php" limit="10">
                        <cms:if k_paginated_top>
                            <div class="record-listing">
                                <h4>Pages found: <cms:show k_total_records /></h4>
                            </div>
                        </cms:if>
                        <div class="search-listing">
                            <h4>&rsaquo; <a href="<cms:show k_site_link /><cms:show k_search_link />"><cms:show k_search_title /></a></h4>
                            <cms:no_results>
                                <h4>No pages found for <cms:show k_search_query /></h4>
                            </cms:no_results>
                        </div>
                        <cms:paginator /></cms:search>
                </div>
            </div>
            <div class="inner">
                <cms:pages masterpage="article.php" folder="<cms:gpc 'cat' />" limit="8" paginate="1">
                    <article class="news-link">
                        <a href="<cms:show k_page_link />">
                            <picture>
                                <img data-src="<cms:show article_thumb />">
                            </picture>
                            <h3><cms:show k_page_title /></h3>
                            <time pubdate="pubdate">
                                <cms:date k_page_date format="jS F, Y" /></time>
                                    <p>
                                        <cms:excerpthtml count="70" ignore="img">
                                            <cms:show article_standfirst /></cms:excerpthtml>
                                    </p>
                                    <button>Continue reading</button>
                        </a>
                    </article>
                    <cms:paginator /></cms:pages>
            </div>
        </section>
    </main>
    <footer class="footer" role="contentinfo">
        <div class="inner">
            <div class="legal">
                <h2 class="logo-main"><span>Alex</span> Plummer</h2>
                <p>© Copyright 2017</p>
                <ul role="navigation">
                    <li> <a href="<cms:show k_site_link />legal.php">Legal</a>
                    </li>
                    <li> <a href="<cms:show k_site_link />credits.php">Credits</a>
                    </li>
                </ul>
            </div>
            <nav><a class="home" href="<cms:show k_site_link />index.php">HOME<svg viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><path d="M12.375 9.554c-1.61 0-2.917 1.32-2.917 2.946 0 1.627 1.306 2.946 2.917 2.946 1.61 0 2.917-1.319 2.917-2.946 0-1.627-1.306-2.946-2.917-2.946zm0 4.714c-.967 0-1.75-.792-1.75-1.768s.783-1.768 1.75-1.768 1.75.792 1.75 1.768-.783 1.768-1.75 1.768zm0-14.268L0 12.5 12.375 25 24.75 12.5 12.375 0zM1.65 12.5L12.375 1.667 23.1 12.501 12.375 23.334 1.65 12.5z" fill="#272729" fill-rule="evenodd"/></svg></a><a class="work" href="<cms:show k_site_link />work.php">WORK<svg viewbox="0 0 128 99" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill-rule="nonzero" fill="#27272A"><path class="line-1" d="M45.95 12.974l26.059 32.02 21.389-21.021 29.147 34.582 5.353-4.51L93.88 13.683 72.585 34.612 46.371 2.402 25.213 24.539 5.705.779.295 5.221l24.52 29.865z"/><path class="line-2" d="M72.009 84.993l21.389-21.02 29.147 34.582 5.353-4.51L93.88 53.683 72.585 74.612l-26.214-32.21-21.158 22.137-19.508-23.76-5.41 4.442 24.52 29.865L45.95 52.974z"/></g></svg></a>
                <a class="news" href="<cms:show k_site_link />news.php">NEWS
                    <svg viewbox="0 0 26 31" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill="#272729" fill-rule="evenodd"><path d="M10.135 26.186c0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.632 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.6 2.098-4.6 4.686 0 2.36 1.714 4.307 3.943 4.633v12.156c-2.229.325-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542-.001 4.602-2.1 4.602-4.687zM2.247 4.764c0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zm0 21.422c0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347 0 1.848-1.472 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347zM6.848 4.764c0-.74-.589-1.339-1.315-1.339-.725 0-1.314.6-1.314 1.339s.588 1.339 1.314 1.339c.727 0 1.315-.6 1.315-1.34zm0 21.422c0-.74-.589-1.34-1.315-1.34-.725 0-1.314.6-1.314 1.34 0 .739.588 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34z" class="line-1"/><path d="M19.995 4.764c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.6-1.314 1.339zm0 21.422c0 .739.589 1.339 1.314 1.339.727 0 1.315-.6 1.315-1.34 0-.739-.588-1.338-1.315-1.338-.725 0-1.314.599-1.314 1.339zM16.708 4.764c0 2.36 1.715 4.307 3.944 4.632v12.157c-2.229.326-3.944 2.273-3.944 4.633 0 2.588 2.06 4.686 4.601 4.686 2.542 0 4.602-2.098 4.602-4.686 0-2.36-1.715-4.307-3.944-4.633V9.397c2.229-.326 3.944-2.273 3.944-4.633 0-2.588-2.06-4.686-4.602-4.686-2.54 0-4.601 2.098-4.601 4.686zm7.888 21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.849 1.472-3.347 3.286-3.347 1.816 0 3.287 1.498 3.287 3.347zm0-21.422c0 1.848-1.471 3.347-3.287 3.347-1.814 0-3.286-1.499-3.286-3.347 0-1.848 1.472-3.347 3.286-3.347 1.816 0 3.287 1.499 3.287 3.347z" class="line-2"/></g></svg>
                    </a><a class="chat" href="<cms:show k_site_link />chat.php">CHAT<svg viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><path d="M12.398 0C5.55 0 0 5.596 0 12.5S5.55 25 12.398 25c6.847 0 12.397-5.596 12.397-12.5S19.245 0 12.398 0zm.516 1.055c5.864.265 10.558 5.012 10.823 10.924h-4.132c-.254-3.61-3.11-6.488-6.69-6.745v-4.18zm0 11.966h5.658c-.25 3.035-2.647 5.452-5.658 5.703V13.02zm5.658-1.042h-5.658V6.276c3.01.251 5.409 2.668 5.658 5.703zm-6.69 0H6.223c.249-3.035 2.647-5.452 5.657-5.703v5.703zm0-10.924v4.18C8.3 5.49 5.444 8.368 5.19 11.978H1.058C1.323 6.067 6.017 1.32 11.881 1.055zm0 22.89c-5.865-.264-10.56-5.012-10.824-10.924H5.19c.255 3.61 3.11 6.488 6.691 6.745v4.18zM6.223 13.021h5.657v5.703c-3.01-.251-5.408-2.668-5.657-5.703zm6.69 10.924v-4.18c3.581-.255 6.437-3.134 6.69-6.744h4.133c-.264 5.912-4.959 10.66-10.823 10.924z" fill="#272729" fill-rule="evenodd"/></svg></a>
            </nav>
        </div>
    </footer>
    <script type="application/ld+json">
        [<cms:editable name='json_ld' label='JSON_LD' desc='JSON_LD for the page' group='group_meta' type='textarea' no_xss_check='1'>{ 
            '@context': 'http://schema.org', 
            '@type': 'WebSite', 
            'url': 'http://www.example.com/', 
            'name': 'Generally the title',
            'author': {
                '@type': 'Person',
                'name': 'Jane Doe'
            },
            'description': 'Any sort of description, I'd keep it short',
            'publisher': 'publisher name',
            'potentialAction': { 
                '@type': 'SearchAction', 
                'target': 'http://www.example.com/?s={search_term}', 
                'query-input': 'required name=search_term' 
            } 
        },{
            '@context': 'http://schema.org',
            '@type': 'NewsArticle',
            'headline': '<cms:show k_page_title />',
            'author': 'Alex Plummer',
            'datePublished': '<cms:date k_page_date format="jS F, Y" />',
            'dateline': 'LN, UK',
            'mainEntityOfPage': 'true',
            'image': {
                '@type': 'imageObject',
                'url': '<cms:show article_thumb />',
                'height': '200',
                'width': '200'
            },
            'publisher': {
                '@type': 'Organization',
                'name': 'Alex Plummer Web Design',
                'logo': {
                    '@type': 'imageObject',
                    'url': '<cms:show k_site_link />/img/brand/logo_vector.svg'
                }
            }
        },</cms:editable>]
    </script>
    <script src="<cms:show k_site_link />script/script.js" async></script>
    <!-- Google fonts -->
    <script>
        WebFontConfig={google:{families:["Quicksand:400,500","Sanchez"]}},function(e){var n=e.createElement("script"),o=e.scripts[0];n.src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js",n.async=!0,o.parentNode.insertBefore(n,o)}(document);
    </script>
</body>

</html>
<?php COUCH::invoke(); ?>
