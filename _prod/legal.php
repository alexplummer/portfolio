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
        @charset "UTF-8";.inner{-webkit-box-orient:horizontal}a{margin:0 0 .75rem}a{padding:.75rem 0 0}h1,h2{font-family:Sanchez,sans-serif}a,li,p,span,ul{font-family:Quicksand,sans-serif;font-size:1rem}a,li,p{font-family:Quicksand,sans-serif}span,ul{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2,li,p{color:#272729}h1{font-size:3rem}h2{font-size:2.25rem}h1,h2{line-height:3rem}a,li,p{line-height:1.5rem}span,ul{line-height:1.5rem}h1,h2{margin:0;padding:0}li,p,span,ul{margin:0 0 .75rem;padding:.75rem 0 0}a{color:#ce0176}h1{padding-top:2.25rem;margin-bottom:2.25rem}h2{padding-top:1.5rem}h2{margin-bottom:1.5rem}@media (max-width:991px){body h1{font-size:2.25rem;line-height:3rem}body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:1.5rem;margin-bottom:1.5rem}}@media (max-width:767px){body h1,body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:.75rem;margin-bottom:.75rem}}ul{margin-left:1.5rem}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;-webkit-backface-visibility:hidden}article,footer,header,main,nav{display:block}a{background-color:transparent;-webkit-text-decoration-skip:objects}svg:not(:root){overflow:hidden}.news-article .content-left>p:first-of-type{font-weight:700}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}body>footer,header{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}.inner{-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-moz-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-box-direction:normal;-moz-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-1.5rem;margin-left:-1.5rem}.news-article .content-left{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}@media only screen and (min-width:768px){body>footer,header{width:100%}.news-article .content-left{-webkit-box-flex:0;-webkit-box-sizing:border-box;box-sizing:border-box;padding-right:1.5rem;padding-left:1.5rem}.news-article .content-left{-moz-flex-grow:0;-ms-flex-positive:0;-webkit-box-flex:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;-ms-flex-preferred-size:66.66667%;flex-basis:66.66667%;max-width:66.66667%}}@media only screen and (min-width:992px){body>footer,header{width:100%}}@media only screen and (min-width:1200px){body>footer,header{width:100%}}.footer{max-width:100%}body,html{overflow-x:hidden;background:#fff}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-backface-visibility:hidden;backface-visibility:hidden}.news-article .content-left>p:first-of-type{padding-bottom:1.5rem;margin-bottom:.75rem;border-bottom:1px solid #272729}.footer{width:100%;margin-left:1.5rem}.footer h2,.footer h2 span,.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{font-family:Quicksand,sans-serif;font-weight:100;letter-spacing:15px;font-size:1.125rem;text-transform:uppercase}.footer h2,.nav-vertical .logo-main h2{position:relative;z-index:51}.footer h2 span,.nav-vertical .logo-main h2 span{font-size:2.25rem;font-weight:500;letter-spacing:30px;display:block}@media (max-width:767px){.news-article .content-left{padding-left:0;padding-right:0}.footer{max-width:100%;width:100%;padding:.75rem}.footer h2,.nav-vertical .logo-main h2{font-size:.75rem;letter-spacing:6px;line-height:.5625rem;margin-bottom:1.5rem}.footer h2 span,.nav-vertical .logo-main h2 span{font-size:1rem;letter-spacing:18px}}.footer nav a{font-size:1.5rem;font-family:Quicksand,sans-serif;font-weight:500;text-transform:uppercase}a,li,p,span,ul{font-size:1.5rem;line-height:2.25rem}@media (max-width:1199px){p{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){p{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){a{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){a{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){li{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){li{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){ul{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){ul{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){span{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){span{font-size:1rem;line-height:1.5rem}}.footer .legal a,.footer .legal p,.footer nav a{font-size:1rem}.footer{padding-top:3rem;margin:0}.footer .inner{display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;-moz-justify-content:space-between;justify-content:space-between;margin-left:0;margin-right:0;position:relative}.footer .legal a,.footer .legal li,.footer .legal p,.footer .legal ul{float:left;vertical-align:baseline;margin:0;padding:0}.footer .legal ul{list-style:none}.footer .legal ul li{margin-left:.75rem}.footer nav{-webkit-align-self:end;-moz-align-self:end;-ms-flex-itealign:end;-ms-flex-item-align:end;align-self:end;text-align:right}.footer nav a{display:block;color:#272729;margin-bottom:1.5rem;text-decoration:none;position:relative;line-height:1.5rem;padding-left:2.25rem}.footer nav a svg{width:1.5rem;height:1.5rem;display:inline-block;position:absolute;top:14px;left:0;background-size:100% 100%;background-repeat:no-repeat;overflow:visible}@media (max-width:767px){.footer{padding:.75rem;margin-left:0}.footer .legal h2{padding-top:0}.footer .legal a,.footer .legal p{font-size:.75rem;display:block;float:none;margin-bottom:0;padding-top:0}.footer .legal ul li{margin:0 .75rem 0 0}.footer nav{top:.75rem}.footer nav a{font-size:.75rem;font-weight:100;margin-bottom:.75rem}}.nav-vertical{position:absolute;z-index:100;top:6rem;left:100%;line-height:3rem;width:100%}.nav-vertical .logo-main{display:none;position:fixed;top:1.5rem;left:1.5rem}.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{color:#fff}.nav-vertical .logo-main h2{margin:0;padding:0}.nav-vertical .logo-main span{padding-top:0}.nav-vertical .skip-main{position:absolute;top:-18rem;right:calc(100vw - 3rem);margin:0;width:200px}.nav-vertical .nav-inner{-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transform-origin:left top;transform-origin:left top;position:absolute}.nav-vertical a{color:#272729;font-size:1rem;margin-right:3rem;text-decoration:none;position:relative;line-height:1.5rem}.nav-vertical a svg{width:1.5rem;height:1.5rem;display:inline-block;position:absolute;bottom:-3rem;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-size:100% 100%;background-repeat:no-repeat;overflow:visible}@media (max-width:900px){.nav-vertical{-webkit-transform:none;transform:none;position:fixed;opacity:0;top:0;left:0;height:100%;width:100%}.nav-vertical .logo-main{display:block}.nav-vertical .nav-inner{position:absolute;-webkit-transform:rotate(0) translate(-50%,-50%);transform:rotate(0) translate(-50%,-50%);left:50%;top:50%}.nav-vertical a{font-family:Sanchez,sans-serif;font-size:2.25rem;display:block;padding-left:3rem;color:#fff;margin-bottom:1.5rem;border-bottom:1px solid rgba(250,250,250,.4);margin-right:0;padding-bottom:1.5rem;letter-spacing:6px}.nav-vertical a svg{bottom:40%;left:0;-webkit-transform:translateX(0);transform:translateX(0)}.nav-vertical a:last-of-type{border-bottom:0;padding-bottom:0;margin-bottom:0}.nav-vertical a:last-of-type svg{bottom:0}.nav-vertical:before{content:"";-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);position:fixed;width:200vw;height:200vh;background:#ce0176;z-index:-2}}.menu-toggle{width:150px;height:150px;position:fixed;top:0;right:0;z-index:1000;background:#ce0176;border-radius:50%;-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle span{background:#fff;display:block;line-height:0;margin:0;padding:0;border-radius:15px}.menu-toggle.inactive{-webkit-transform:translate(100%,-100%);transform:translate(100%,-100%)}.menu-toggle .off{position:absolute;height:100%;width:100%}.menu-toggle .off span{width:35px;height:4px;margin:10px 0;position:relative;left:31%;top:52%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on{position:absolute;height:100%;width:100%;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.menu-toggle .on span:nth-child(1){height:0%;width:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on span:nth-child(2){width:0%;height:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.news-article{padding-left:0;margin:0 0 3rem}@media (max-width:900px){.menu-toggle{width:125px;height:125px}.menu-toggle.inactive{-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle .off span{width:30px;height:3px;top:55%;left:33%;margin:7px 0}.news-article{padding:0;margin:0 0 3rem}}
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

<body class="stub">
    <cms:template title="Legal"></cms:template>
    <cms:editable name="group_stub_header" label="Stub header" desc="Header for stub page" type="group"></cms:editable>
    <cms:editable name="group_stub_body" label="Stub body" desc="Body content for stub page" type="group"></cms:editable>
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
    <header role="banner" style="padding: 0;">
        <h1><cms:editable name="stub_heading" group="group_stub_header" type="text"></cms:editable></h1>
    </header>
    <main class="news-article" role="main" id="maincontent">
        <article class="content-left">
            <p>
                <cms:editable name="stub_standfirst" group="group_stub_body" type="text"></cms:editable>
            </p>
            <cms:editable name="stub_body" group="group_stub_body" type="richtext"></cms:editable>
        </article>
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
