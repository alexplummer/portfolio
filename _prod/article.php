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
        @charset "UTF-8";h1,h2{font-family:Sanchez,sans-serif}a,br,img,p,span,time{font-family:Quicksand,sans-serif;font-size:1rem}br,img,span,time{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2,p{color:#272729}a,p{line-height:1.5rem}br,img,span,time{line-height:1.5rem}h1,h2{margin:0;padding:0}h2{padding-top:1.5rem}article,aside,header,main,nav{display:block}.news-article .content,header{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}.heading-image h1,.news-article .content-left{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}a,br,img,p,span,time{font-size:1.5rem;line-height:2.25rem}a,br,button,img,li,p,span,time,ul{font-family:Quicksand,sans-serif;font-size:1rem}a,li,p{font-family:Quicksand,sans-serif}br,button,img,span,time,ul{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2,h3,li,p{color:#272729}a,h3,li,p{line-height:1.5rem}br,button,img,span,time,ul{line-height:1.5rem}br,img,li,p,span,time,ul{margin:0 0 .75rem;padding:.75rem 0 0}@media (max-width:991px){body h1{font-size:2.25rem;line-height:3rem}body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:1.5rem;margin-bottom:1.5rem}}@media (max-width:767px){body h1,body h2{font-size:1.5rem;line-height:1.5rem}body h1,body h2{padding-top:.75rem;margin-bottom:.75rem}.heading-image h1,.news-article .content-left{padding-left:0;padding-right:0}}ul{margin-left:1.5rem}article,aside,footer,header,main,nav,section{display:block}.news-article .content,body>footer,header,section{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}@media only screen and (min-width:768px){.news-article .content,body>footer,header,section{width:100%}.news-article .content-right{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:33.33333%;flex-basis:33.33333%;max-width:33.33333%}.related-news article{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.news-article .content-left{-webkit-box-flex:0;-webkit-box-sizing:border-box;box-sizing:border-box;padding-right:1.5rem;padding-left:1.5rem}.news-article .content-left{-moz-flex-grow:0;-ms-flex-positive:0;-webkit-box-flex:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;-ms-flex-preferred-size:66.66667%;flex-basis:66.66667%;max-width:66.66667%}}.footer,.heading-image{max-width:100%}.footer{width:100%;margin-left:1.5rem}.footer h2,.footer h2 span,.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{font-family:Quicksand,sans-serif;font-weight:100;letter-spacing:15px;font-size:1.125rem;text-transform:uppercase}.footer h2,.nav-vertical .logo-main h2{position:relative;z-index:51}.footer h2 span,.nav-vertical .logo-main h2 span{font-size:2.25rem;font-weight:500;letter-spacing:30px;display:block}@media (max-width:767px){.footer{max-width:100%;width:100%;padding:.75rem}.footer h2,.nav-vertical .logo-main h2{font-size:.75rem;letter-spacing:6px;line-height:.5625rem;margin-bottom:1.5rem}.footer h2 span,.nav-vertical .logo-main h2 span{font-size:1rem;letter-spacing:18px}}.footer nav a{font-size:1.5rem;font-family:Quicksand,sans-serif;font-weight:500;text-transform:uppercase}a,br,button,img,li,p,span,time,ul{font-size:1.5rem;line-height:2.25rem}@media (max-width:1199px){li{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){li{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){ul{font-size:1.125rem;line-height:1.4625rem}}.footer .legal a,.footer .legal p,.footer nav a{font-size:1rem}.footer{padding-top:3rem;margin:0}.footer .inner{display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;-moz-justify-content:space-between;justify-content:space-between;margin-left:0;margin-right:0;position:relative}.footer .legal a,.footer .legal li,.footer .legal p,.footer .legal ul{float:left;vertical-align:baseline;margin:0;padding:0}.footer .legal ul{list-style:none}.footer .legal ul li{margin-left:.75rem}.footer nav{-webkit-align-self:end;-moz-align-self:end;-ms-flex-itealign:end;-ms-flex-item-align:end;align-self:end;text-align:right}.footer nav a{display:block;color:#272729;margin-bottom:1.5rem;text-decoration:none;position:relative;line-height:1.5rem;padding-left:2.25rem}.footer nav a svg{width:1.5rem;height:1.5rem;display:inline-block;position:absolute;top:14px;left:0;background-size:100% 100%;background-repeat:no-repeat;overflow:visible}@media (max-width:991px){ul{font-size:1rem;line-height:1.5rem}body h1{font-size:2.25rem;line-height:3rem}body h2,body h3{font-size:1.5rem;line-height:1.5rem}body h1,body h2,body h3{padding-top:1.5rem;margin-bottom:1.5rem}}button{overflow:visible}.inner{-webkit-box-orient:horizontal}a{margin:0 0 .75rem}a{padding:.75rem 0 0}h1,h2,h3{font-family:Sanchez,sans-serif}a,br,button,img,p,span,time{font-family:Quicksand,sans-serif;font-size:1rem}a,p{font-family:Quicksand,sans-serif}br,button,img,span,time{font-family:Quicksand,sans-serif;color:#272729}a,h1,h2,h3,p{color:#272729}h1{font-size:3rem}h2{font-size:2.25rem}h3{font-size:1.5rem}h1,h2{line-height:3rem}a,h3,p{line-height:1.5rem}br,button,img,span,time{line-height:1.5rem}h1,h2,h3{margin:0;padding:0}br,img,p,span,time{margin:0 0 .75rem;padding:.75rem 0 0}img{margin-top:1.5rem}a{color:#ce0176}img{padding-top:0}h1{padding-top:2.25rem;margin-bottom:2.25rem}h2,h3{padding-top:1.5rem}h2{margin-bottom:1.5rem}h3{margin-bottom:.75rem}@media (max-width:767px){.footer{padding:.75rem;margin-left:0}.footer .legal h2{padding-top:0}.footer .legal a,.footer .legal p{font-size:.75rem;display:block;float:none;margin-bottom:0;padding-top:0}.footer .legal ul li{margin:0 .75rem 0 0}.footer nav{top:.75rem}.footer nav a{font-size:.75rem;font-weight:100;margin-bottom:.75rem}body h1,body h2,body h3{font-size:1.5rem;line-height:1.5rem}body h1,body h2,body h3{padding-top:.75rem;margin-bottom:.75rem}}button{background:#ce0176;border-radius:5px;padding:.75rem 1.5rem;color:#272729;border:0}html button{font-family:Quicksand,sans-serif}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0;-webkit-backface-visibility:hidden}article,aside,header,main,nav,section{display:block}a{background-color:transparent;-webkit-text-decoration-skip:objects}img{border-style:none}svg:not(:root){overflow:hidden}button{font:inherit;margin:0}.news-article .content-left>p:first-of-type{font-weight:700}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:ButtonText dotted 1px}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}.news-article .content-left .details:after{content:"";display:table;clear:both}.news-article .content,header,section{-webkit-box-sizing:border-box;box-sizing:border-box;max-width:1400px;margin:0 auto;padding-left:3rem;padding-right:3rem}.inner{-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-moz-flex;display:-ms-flexbox;display:flex;-webkit-box-flex:0;-moz-flex:0 1 auto;-ms-flex:0 1 auto;flex:0 1 auto;-webkit-box-direction:normal;-moz-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-1.5rem;margin-left:-1.5rem}.heading-image h1,.news-article .content-left,.related-news article,.related-news h2{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:100%;flex-basis:100%;max-width:100%}@media only screen and (min-width:768px){.news-article .content,header,section{width:100%}.news-article .content-right{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:33.33333%;flex-basis:33.33333%;max-width:33.33333%}.related-news article{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:0;-moz-flex-grow:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;padding-right:1.5rem;padding-left:1.5rem;-ms-flex-preferred-size:50%;flex-basis:50%;max-width:50%}.news-article .content-left{-webkit-box-flex:0;-webkit-box-sizing:border-box;box-sizing:border-box;padding-right:1.5rem;padding-left:1.5rem}.news-article .content-left{-moz-flex-grow:0;-ms-flex-positive:0;-webkit-box-flex:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;-ms-flex-preferred-size:66.66667%;flex-basis:66.66667%;max-width:66.66667%}}@media only screen and (min-width:992px){.news-article .content,header,section{width:100%}}@media only screen and (min-width:1200px){.news-article .content,header,section{width:100%}}.heading-image{max-width:100%}.news-link picture{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}.news-link picture{-webkit-animation-duration:.75s;animation-duration:.75s}@-webkit-keyframes flipOutY{0%{-webkit-transform:perspective(400px) rotateY(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateY(90deg);opacity:0}}@keyframes flipOutY{0%{-webkit-transform:perspective(400px) rotateY(0);transform:perspective(400px) rotateY(0);opacity:1}100%{-webkit-transform:perspective(400px) rotateY(90deg);transform:perspective(400px) rotateY(90deg);opacity:0}}.news-link picture{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;-webkit-animation-name:flipOutY;animation-name:flipOutY}body,html{overflow-x:hidden;background:#fff}*{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-backface-visibility:hidden;backface-visibility:hidden}.heading-image,.heading-image .inner{position:relative}.heading-image .inner:after,.heading-image .inner:before,.heading-image:after,.heading-image:before{content:"";background-size:cover;background-repeat:no-repeat;position:absolute;left:0;top:0}.news-article .content-left .details,.news-article .content-left>p:first-of-type{padding-bottom:1.5rem;margin-bottom:.75rem;border-bottom:1px solid #272729}button{display:inline-block;border:2px solid #ce0176;margin-top:.75rem;background:0 0;border-radius:50px;text-decoration:none;color:#ce0176;font-weight:500;white-space:nowrap;padding:.375rem 1.5rem}.news-link picture{display:block;text-align:center;margin-bottom:.75rem;width:200px;height:200px;border-radius:50%;overflow:hidden}.news-link picture img{height:100%;padding:0;position:relative;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);margin:0}.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{font-family:Quicksand,sans-serif;font-weight:100;letter-spacing:15px;font-size:1.125rem;text-transform:uppercase}.nav-vertical .logo-main h2{position:relative;z-index:51}.nav-vertical .logo-main h2 span{font-size:2.25rem;font-weight:500;letter-spacing:30px;display:block}@media (max-width:767px){.heading-image h1,.news-article .content-left,.related-news article,.related-news h2{padding-left:0;padding-right:0}.nav-vertical .logo-main h2{font-size:.75rem;letter-spacing:6px;line-height:.5625rem;margin-bottom:1.5rem}.nav-vertical .logo-main h2 span{font-size:1rem;letter-spacing:18px}}.news-link h3{font-family:Quicksand,sans-serif;font-size:1.5rem;font-weight:500}h3{font-size:2.25rem;font-family:Quicksand,sans-serif;font-weight:400;text-transform:uppercase}a,br,button,img,p,span,time{font-size:1.5rem;line-height:2.25rem}@media (max-width:1199px){p{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){p{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){a{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){a{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){button{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){button{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){br{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){br{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){span{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){span{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){time{font-size:1.125rem;line-height:1.4625rem}}@media (max-width:991px){time{font-size:1rem;line-height:1.5rem}}@media (max-width:1199px){img{font-size:1.125rem;line-height:1.4625rem}}.heading-image{margin:3rem;padding:0;width:100%}.heading-image:before{width:calc(100vw - 7.15rem);height:100%;background:#e6eaf0}.heading-image .inner{position:relative;margin:0 3rem 0 0;padding-right:6rem}.heading-image .inner:before{width:calc(100% - 3rem);height:100%;background:url(img/bg-trapezium.svg) bottom no-repeat;background-size:contain;opacity:.9;z-index:50}.heading-image .inner:after{top:calc(100% - 16rem);left:calc(100% - 16rem);z-index:50;width:1282px;height:985px;background:url(img/shape-splat.svg) no-repeat;background-size:100%}.heading-image picture{width:100%;overflow:hidden}.heading-image picture img{width:100%;margin:0 0 -4px}.heading-image h1{position:absolute;bottom:1.5rem;left:0;text-transform:uppercase;font-weight:100;width:50%;margin:0;color:#fff;z-index:51}@media (max-width:1250px){.heading-image .inner h1{width:75%}.heading-image .inner:after{width:782px;left:calc(100% - 12rem);top:calc(100% - 4rem)}}@media (max-width:767px){.heading-image .inner h1{padding-left:1.5rem;width:100%}.heading-image .inner:after{display:none}}@media (max-width:479px){.heading-image .inner h1{font-size:1.125rem;bottom:.75rem}}.news-link h3{font-family:Sanchez,sans-serif}.nav-vertical{position:absolute;z-index:100;top:6rem;left:100%;line-height:3rem;width:100%}.nav-vertical .logo-main{display:none;position:fixed;top:1.5rem;left:1.5rem}.nav-vertical .logo-main h2,.nav-vertical .logo-main h2 span{color:#fff}.nav-vertical .logo-main h2{margin:0;padding:0}.nav-vertical .logo-main span{padding-top:0}.nav-vertical .skip-main{position:absolute;top:-18rem;right:calc(100vw - 3rem);margin:0;width:200px}.nav-vertical .nav-inner{-webkit-transform:rotate(90deg);transform:rotate(90deg);-webkit-transform-origin:left top;transform-origin:left top;position:absolute}.nav-vertical a{color:#272729;font-size:1rem;margin-right:3rem;text-decoration:none;position:relative;line-height:1.5rem}.nav-vertical a svg{width:1.5rem;height:1.5rem;display:inline-block;position:absolute;bottom:-3rem;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%);background-size:100% 100%;background-repeat:no-repeat;overflow:visible}@media (max-width:900px){.heading-image{margin:0}.heading-image .inner{margin:0;padding:0}.heading-image .inner:before{width:100%}.nav-vertical{-webkit-transform:none;transform:none;position:fixed;opacity:0;top:0;left:0;height:100%;width:100%}.nav-vertical .logo-main{display:block}.nav-vertical .nav-inner{position:absolute;-webkit-transform:rotate(0) translate(-50%,-50%);transform:rotate(0) translate(-50%,-50%);left:50%;top:50%}.nav-vertical a{font-family:Sanchez,sans-serif;font-size:2.25rem;display:block;padding-left:3rem;color:#fff;margin-bottom:1.5rem;border-bottom:1px solid rgba(250,250,250,.4);margin-right:0;padding-bottom:1.5rem;letter-spacing:6px}.nav-vertical a svg{bottom:40%;left:0;-webkit-transform:translateX(0);transform:translateX(0)}.nav-vertical a:last-of-type{border-bottom:0;padding-bottom:0;margin-bottom:0}.nav-vertical a:last-of-type svg{bottom:0}.nav-vertical:before{content:"";-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);position:fixed;width:200vw;height:200vh;background:#ce0176;z-index:-2}}.menu-toggle{width:150px;height:150px;position:fixed;top:0;right:0;z-index:1000;background:#ce0176;border-radius:50%;-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle span{background:#fff;display:block;line-height:0;margin:0;padding:0;border-radius:15px}.menu-toggle.inactive{-webkit-transform:translate(100%,-100%);transform:translate(100%,-100%)}.menu-toggle .off{position:absolute;height:100%;width:100%}.menu-toggle .off span{width:35px;height:4px;margin:10px 0;position:relative;left:31%;top:52%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on{position:absolute;height:100%;width:100%;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.menu-toggle .on span:nth-child(1){height:0%;width:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.menu-toggle .on span:nth-child(2){width:0%;height:4px;position:absolute;top:75%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}@media (max-width:900px){.menu-toggle{width:125px;height:125px}.menu-toggle.inactive{-webkit-transform:translate(50%,-50%);transform:translate(50%,-50%)}.menu-toggle .off span{width:30px;height:3px;top:55%;left:33%;margin:7px 0}}.news-article{padding-left:0;margin:0 0 3rem}.news-article .content-left .details{margin-bottom:.75rem;padding-top:0;padding-bottom:0}.news-article .content-left .details .author{float:left;margin-bottom:1.5rem}.news-article .content-left .details .author p{margin:0;padding:0;font-size:1.125rem;line-height:1.125rem}.news-article .content-left .details .author span{font-size:1.125rem;line-height:1.125rem;font-weight:700;text-transform:uppercase;margin-right:.75rem}.news-article .content-left .details .author .pubdate time{padding-top:0;font-size:1rem;text-transform:none}.news-article .content-left .details .author .pubdate span{display:none}.news-article .content-left .details .social-share{float:right}.news-article .content-right{position:relative}.news-article .content-right img{max-width:calc(100% - 3rem);position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%)}@media (max-width:900px){.news-article{padding:0;margin:0 0 3rem}.news-article .content-left .details{padding-top:.75rem;padding-bottom:0;margin-bottom:1.5rem}}.news-link{position:relative}.news-link picture{position:absolute;top:0}.news-link button,.news-link h3,.news-link p,.news-link time{margin-left:225px;text-decoration:none}.news-link h3{text-transform:none}.news-link p,.news-link time{margin-bottom:1.5rem;font-size:1.125rem;line-height:1.5rem}.news-link time{font-size:1rem;padding:.375rem;border-top:1px solid #272729;border-bottom:1px solid #272729}.news-link a{text-decoration:none}@media (max-width:1250px){.news-link picture{width:150px;height:150px}.news-link button,.news-link h3,.news-link p,.news-link time{margin-left:175px}}@media (max-width:1080px){.news-link picture{width:120px;height:120px}.news-link button,.news-link h3,.news-link p,.news-link time{margin-left:145px}.news-link h3{font-size:1.125rem;padding-bottom:.75rem;margin-bottom:0}.news-link p{font-size:1rem}}@media (max-width:767px){.news-article .content-left .details{padding:1.5rem 0 .75rem}.news-article .content-left .details .author p{padding:0}.news-article .content-left .details .author p span{display:block;padding:0;margin:0 0 .75rem}.news-article .content-left .details .social-share{float:none}.news-article .content-right{display:none}.news-link{margin-bottom:6rem}.news-link picture{width:80px;height:80px}.news-link h3{padding-top:0}.news-link button,.news-link h3,.news-link p,.news-link time{margin-left:100px}}@media (max-width:475px){.news-link{position:relative;margin-bottom:9rem}.news-link p{margin-bottom:1.5rem}.news-link button{clear:both;margin:0;text-align:center;position:absolute;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}}.related-news{margin-bottom:3rem;width:100%;max-width:100%}.related-news .inner{background:#e6eaf0;margin:0;padding:.75rem 1.5rem 3rem}.related-news h2{margin-bottom:3rem}@media (max-width:991px){img{font-size:1rem;line-height:1.5rem}.related-news{padding:0}}@media (max-width:767px){.related-news article{margin-bottom:6rem}.related-news article:last-of-type{margin-bottom:1.5rem}}
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

<body class="article">
    <cms:template title="Article" clonable="1" dynamic_folders="1"></cms:template>
    <cms:editable name="group_news_article_header" label="News article header" desc="Header for news article" type="group"></cms:editable>
    <header class="heading-image" role="banner">
        <div class="inner">
            <picture>
                <cms:hide>
                    <cms:editable name="article_image" group="group_news_article_header" label="Article image" type="image"></cms:editable>
                    <cms:editable name="article_image_alt" group="group_news_article_header" label="Article image alt" type="text"></cms:editable>
                </cms:hide>
                <img src="<cms:show article_image />" alt="<cms:show article_image_alt />">
            </picture>
            <h1><cms:show k_page_title/></h1>
        </div>
    </header>
    <cms:hide>
        <cms:editable name="article_thumb" group="group_news_article_header" label="Article thumb image" type="image"></cms:editable>
        <cms:editable name="article_thumb_alt" group="group_news_article_header" label="Article thumb alt" type="text"></cms:editable>
    </cms:hide>
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
        <cms:editable name="group_news_article_body" label="News article body" desc="Body for news article" type="group"></cms:editable>
        <div class="news-article">
            <div class="content">
                <div class="inner">
                    <article class="content-left" role="article">
                        <div class="details">
                            <div class="author">
                                <p rel="author"><span>Written by:</span>
                                    <cms:editable name="article_author" group="group_news_article_header" type="text"></cms:editable>
                                </p>
                                <div class="pubdate">
                                    <p><span>Published: </span>
                                        <time pubdate="pubdate">
                                            <cms:date k_page_date format="jS F, Y" /></time>
                                    </p>
                                </div>
                            </div>
                            <div class="social-share">
                                <div class="addthis_inline_share_toolbox_xdz8"></div>
                            </div>
                        </div>
                        <p>
                            <cms:editable name="article_standfirst" group="group_news_article_body" type="text"></cms:editable>
                        </p>
                        <cms:editable name="article_body" group="group_news_article_body" type="richtext"></cms:editable>
                        <br>
                        <br>
                        <h2>Comments</h2>
                        <div id="disqus_thread"></div>
                        <script>
                            var disqus_config = function () {
                            this.page.url = '<cms:show k_page_link /> ';  
                            this.page.identifier = '<cms:show k_page_title/> ';
                            };
                             
                            (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document, s = d.createElement('script');
                            s.src = 'https://alex-plummer.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                            })();
                        </script>
                    </article>
                    <aside class="content-right" role="complementary">
                        <cms:hide>
                            <cms:editable name="article_support_image" group="group_news_article_body" label="Article support image" type="image"></cms:editable>
                            <cms:editable name="article_support_image_alt" group="group_news_article_body" label="Article support image alt" type="text"></cms:editable>
                        </cms:hide>
                        <cms:if article_support_image>
                            <img data-src="<cms:show article_support_image />" alt="<cms:show article_support_image_alt />">
                        </cms:if>
                    </aside>
                </div>
            </div>
        </div>
        <section class="related-news">
            <div class="inner">
                <h2>Further reading</h2>
                <cms:pages masterpage="article.php" limit="2" id="NOT <cms:show k_page_id />">
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
                </cms:pages>
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
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55c6759b75b46ce8"></script>
    <script src="<cms:show k_site_link />script/script.js" async></script>
    <!-- Google fonts -->
    <script>
        WebFontConfig={google:{families:["Quicksand:400,500","Sanchez"]}},function(e){var n=e.createElement("script"),o=e.scripts[0];n.src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js",n.async=!0,o.parentNode.insertBefore(n,o)}(document);
    </script>
</body>

</html>
<?php COUCH::invoke(); ?>
