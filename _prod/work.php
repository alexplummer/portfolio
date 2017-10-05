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
    <meta name="twitter:image" content="http://wwww.alexplummer.com/img/logo-main.png">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@site_account">
    <meta name="twitter:creator" content="@individual_account">
    <meta name="twitter:url" content="http://wwww.alexplummer.com">
    <meta name="twitter:title" content="<cms:editable name='meta_title' label='Page Title' desc='Page title used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="twitter:description" content="<cms:editable name='meta_description' label='Page Description' desc='Page description used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="apple-mobile-web-app-title" content="<cms:editable name='meta_title' label='Page Title' desc='Page title used for meta and OG' group='group_meta' type='text'></cms:editable>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link rel="stylesheet" href="<cms:show k_site_link />style/style.css"/>
</head>

<body class="work">
    <cms:template title="Work"></cms:template>
    <cms:editable name="group_intro" label="Intro" desc="Intro to page" type="group"></cms:editable>
    <header class="intro-with-description" role="banner">
        <div class="inner">
            <div class="lined-heading no-under">
                <h1 class="work">Work<svg viewbox="0 0 128 99" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill-rule="nonzero" fill="#27272A"><path class="line-1" d="M45.95 12.974l26.059 32.02 21.389-21.021 29.147 34.582 5.353-4.51L93.88 13.683 72.585 34.612 46.371 2.402 25.213 24.539 5.705.779.295 5.221l24.52 29.865z"/><path class="line-2" d="M72.009 84.993l21.389-21.02 29.147 34.582 5.353-4.51L93.88 53.683 72.585 74.612l-26.214-32.21-21.158 22.137-19.508-23.76-5.41 4.442 24.52 29.865L45.95 52.974z"/></g></svg></h1>
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
        <article class="work-modal modal-inactive" tabindex="-1" role="dialog" hidden="hidden">
            <button class="close" title="Close the dialog"></button>
            <div class="inner">
                <div class="content"></div>
                <div class="screenshots">
                    <svg viewbox="0 0 619 504" xmlns="http://www.w3.org/2000/svg" class="svg" aria-hidden="true" role="presentation"><g fill="none" fill-rule="evenodd"><path fill="#757B80" d="M387.638 493.769H230.847l8.97-67.462h140.131l7.69 67.462"/><path d="M.046 369.808v41.656c0 8.456 6.92 15.377 15.381 15.377h587.635c8.451 0 15.371-6.921 15.371-15.377v-41.656H.046" fill="#C0C8CB"/><path d="M618.433 16.077c0-8.458-6.92-15.378-15.371-15.378H15.427C6.966.699.046 7.619.046 16.077v353.731h618.387V16.077" fill="#343534"/><path fill="#C0C8CB" d="M230.847 493.769h156.791l27.576 6.518-211.947.157 27.58-6.675"/><path fill="#757B80" d="M413.771 503.91H204.707l-1.386-3.466 211.893-.157-1.443 3.623"/><path d="M320.241 400.141c0 6.074-4.925 10.998-10.999 10.998-6.083 0-11.002-4.924-11.002-10.998 0-6.078 4.919-11.004 11.002-11.004 6.074 0 10.999 4.926 10.999 11.004" fill="#343534"/></g></svg>
                    <div class="screens"></div>
                    <div class="controls"></div>
                </div>
            </div>
        </article>
        <cms:editable name="group_work_digital" label="Work digital" desc="Digital work entries" type="group"></cms:editable>
        <cms:editable name="group_work_print" label="Work print" desc="Print work entries" type="group"></cms:editable>
        <cms:editable name="group_work_branding" label="Work branding" desc="Branding work entries" type="group"></cms:editable>
        <section class="work-showcase digital">
            <div class="inner">
                <div class="main-heading">
                    <h3>Digital</h3>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 37 37" aria-hidden="true" role="presentation"><path d="M36.6 29L26 18.4l7.2-7.2c1.1-1.1 1.6-2.4 1.6-3.9 0-1.4-.5-2.8-1.6-3.8-1-1-2.3-1.6-3.8-1.6-1.4 0-2.8.6-3.8 1.6L24 5l-5.6 5.7L8 .3c-.5-.4-1.1-.4-1.6 0L.3 6.4c-.2.2-.3.5-.3.8 0 .3.1.6.3.8l10.4 10.4-6 6-.1.1v.1h-.1v.2h-.1v.1l-2.3 8.4c-.1.4 0 .8.3 1.1.2.2.5.3.8.3 0 0 .1 0 .2-.1l8.5-2.3h.2v-.1h.1l.1-.1 6.1-6.1L29 36.6c.2.2.4.3.7.3.3 0 .6-.1.8-.3l6.1-6.1c.4-.4.4-1.1 0-1.5zM27.1 5c.6-.6 1.4-.9 2.3-.9.9 0 1.7.3 2.3.9.6.7 1 1.5 1 2.3 0 .9-.4 1.7-1 2.3l-.8.8-4.6-4.6.8-.8zM2.6 7.2l4.6-4.6 2 2-2.3 2.2c-.4.5-.4 1.1 0 1.6.2.2.5.3.8.3.3 0 .5-.1.7-.3l2.3-2.3 1.7 1.7L11.2 9c-.4.4-.4 1.1 0 1.5.2.2.5.4.8.4.3 0 .6-.2.8-.4l1.1-1.1 2.9 2.8-4.6 4.6-9.6-9.6zm22.2.1l1.5 1.6L8.5 26.7 7 25.2 24.8 7.3zM4.7 32L6 27.3l3.5 3.4L4.7 32zm6.9-2.2L10 28.2l17.9-17.8 1.5 1.5-5.7 5.7-12.1 12.2zm18.1 4.5l-9.8-9.8 4.6-4.6 3.1 3.1-1.2 1.2c-.4.4-.4 1.1 0 1.5.2.2.5.3.8.3.2 0 .5-.1.7-.3l1.2-1.2 1.7 1.7-2.2 2.3c-.5.4-.5 1.1 0 1.5.2.2.4.3.7.3.3 0 .6-.1.8-.3l2.3-2.2 1.9 1.9-4.6 4.6z" fill="#CE0176"/></svg>Design</p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 33" aria-hidden="true" role="presentation"><g fill="#CE0176"><path d="M33.8.1H2.2C1 .1 0 1.1 0 2.3v28.5c0 1.2 1 2.1 2.2 2.1h31.6c1.2 0 2.1-.9 2.1-2.1V2.3c0-1.2-.9-2.2-2.1-2.2zm-6.5 3.6c0-.4.3-.8.8-.8h.8c.4 0 .7.4.7.8v.9c0 .5-.3.8-.7.8h-.8c-.5 0-.8-.3-.8-.8v-.9zm-3.7 0c0-.4.3-.8.7-.8h.8c.5 0 .8.4.8.8v.9c0 .5-.3.8-.8.8h-.8c-.4 0-.7-.3-.7-.8v-.9zm9.7 26.6H2.6V7.9h30.7v22.4zm.1-25.7c0 .5-.4.8-.8.8h-.8c-.5 0-.8-.3-.8-.8v-.9c0-.4.3-.8.8-.8h.8c.4 0 .8.4.8.8v.9z"/><path d="M7.7 19.9l5.8 2.7c.1.1.3.1.5.1s.4 0 .6-.1c.3-.2.5-.6.5-1 0-.5-.3-.9-.7-1l-3.6-1.7 3.6-1.7c.4-.2.7-.6.7-1v-.1c0-.4-.2-.7-.5-.9-.2-.1-.4-.2-.6-.2-.2 0-.4 0-.5.1l-5.8 2.7c-.4.2-.6.6-.6 1v.1c0 .4.2.9.6 1zM15.1 25.4c.2.3.6.5.9.5h.1c.5 0 .9-.3 1-.8l3.8-11.8c.2-.4.1-.8-.1-1.1-.2-.2-.6-.4-.9-.4-.5 0-1 .3-1.1.8L15 24.4c-.1.4-.1.8.1 1zM20.8 16.2c0 .4.3.8.7 1l3.6 1.7-3.6 1.7c-.4.1-.7.5-.7 1 0 .4.2.8.6 1 .1.1.3.1.6.1.1 0 .3 0 .4-.1l5.8-2.7c.4-.1.7-.6.7-1v-.1c0-.4-.3-.8-.7-1l-5.8-2.7c-.1-.1-.3-.1-.4-.1-.3 0-.5.1-.6.2-.4.2-.6.5-.6.9v.1z"/></g></svg>Code</p>
                </div>
            </div>
            <cms:repeatable name="work_entry_digital" label="Work entry item digital" desc="A right item in the showreel" group="group_work_digital">
                <cms:editable name="work_entry_digital_title" label="Digital title" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_description" label="Digital description" input_width="600" col_width="600" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_orientation" label="Digital orientataion" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_skills" label="Digital skills" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_content" label="Digital content" input_width="600" col_width="600" type="richtext"></cms:editable>
                <cms:editable name="work_entry_digital_image_1" label="Digital image 1" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_digital_image_1_alt" label="Digital image 1 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_1_color_1" label="Digital image 1 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_1_color_2" label="Digital image 1 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_2" label="Digital image 2" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_digital_image_2_alt" label="Digital image 2 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_2_color_1" label="Digital image 2 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_2_color_2" label="Digital image 2 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_3" label="Digital image 3" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_digital_image_3_alt" label="Digital image 3 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_3_color_1" label="Digital image 3 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_image_3_color_2" label="Digital image 3 color 2" input_width="100" col_width="110" type="text"></cms:editable>
            </cms:repeatable>
            <cms:show_repeatable "work_entry_digital">
                <article class="<cms:show work_entry_digital_orientation /> <cms:show work_entry_digital_skills /> work-entry">
                    <div class="inner">
                        <div class="modal-content">
                            <cms:show work_entry_digital_content /></div>
                                <div class="screens">
                                    <div class="screen-1"><span class="side-left" style="background: <cms:show work_entry_digital_image_1_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_digital_image_1_color_2 />;"></span>
                                        <img data-src="<cms:show work_entry_digital_image_1 />" alt="<cms:show work_entry_digital_image_1_alt />">
                                    </div>
                                    <cms:if "<cms:not_empty work_entry_digital_image_2 />">
                                        <div class="screen-2"><span class="side-left" style="background: <cms:show work_entry_digital_image_2_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_digital_image_2_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_digital_image_2 />" alt="<cms:show work_entry_digital_image_2_alt />">
                                        </div>
                                    </cms:if>
                                    <cms:if "<cms:not_empty work_entry_digital_image_3 />">
                                        <div class="screen-3"><span class="side-left" style="background: <cms:show work_entry_digital_image_3_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_digital_image_3_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_digital_image_3 />" alt="<cms:show work_entry_digital_image_3_alt />">
                                        </div>
                                    </cms:if>
                                </div>
                                <div class="content">
                                    <h3><cms:show work_entry_digital_title /></h3>
                                    <p><cms:show work_entry_digital_description /></p>
                                    <button class="modal-toggle">Check it out</button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 37 37" aria-hidden="true" role="presentation"><path d="M36.6 29L26 18.4l7.2-7.2c1.1-1.1 1.6-2.4 1.6-3.9 0-1.4-.5-2.8-1.6-3.8-1-1-2.3-1.6-3.8-1.6-1.4 0-2.8.6-3.8 1.6L24 5l-5.6 5.7L8 .3c-.5-.4-1.1-.4-1.6 0L.3 6.4c-.2.2-.3.5-.3.8 0 .3.1.6.3.8l10.4 10.4-6 6-.1.1v.1h-.1v.2h-.1v.1l-2.3 8.4c-.1.4 0 .8.3 1.1.2.2.5.3.8.3 0 0 .1 0 .2-.1l8.5-2.3h.2v-.1h.1l.1-.1 6.1-6.1L29 36.6c.2.2.4.3.7.3.3 0 .6-.1.8-.3l6.1-6.1c.4-.4.4-1.1 0-1.5zM27.1 5c.6-.6 1.4-.9 2.3-.9.9 0 1.7.3 2.3.9.6.7 1 1.5 1 2.3 0 .9-.4 1.7-1 2.3l-.8.8-4.6-4.6.8-.8zM2.6 7.2l4.6-4.6 2 2-2.3 2.2c-.4.5-.4 1.1 0 1.6.2.2.5.3.8.3.3 0 .5-.1.7-.3l2.3-2.3 1.7 1.7L11.2 9c-.4.4-.4 1.1 0 1.5.2.2.5.4.8.4.3 0 .6-.2.8-.4l1.1-1.1 2.9 2.8-4.6 4.6-9.6-9.6zm22.2.1l1.5 1.6L8.5 26.7 7 25.2 24.8 7.3zM4.7 32L6 27.3l3.5 3.4L4.7 32zm6.9-2.2L10 28.2l17.9-17.8 1.5 1.5-5.7 5.7-12.1 12.2zm18.1 4.5l-9.8-9.8 4.6-4.6 3.1 3.1-1.2 1.2c-.4.4-.4 1.1 0 1.5.2.2.5.3.8.3.2 0 .5-.1.7-.3l1.2-1.2 1.7 1.7-2.2 2.3c-.5.4-.5 1.1 0 1.5.2.2.4.3.7.3.3 0 .6-.1.8-.3l2.3-2.2 1.9 1.9-4.6 4.6z" fill="#CE0176"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 33" aria-hidden="true" role="presentation"><g fill="#CE0176"><path d="M33.8.1H2.2C1 .1 0 1.1 0 2.3v28.5c0 1.2 1 2.1 2.2 2.1h31.6c1.2 0 2.1-.9 2.1-2.1V2.3c0-1.2-.9-2.2-2.1-2.2zm-6.5 3.6c0-.4.3-.8.8-.8h.8c.4 0 .7.4.7.8v.9c0 .5-.3.8-.7.8h-.8c-.5 0-.8-.3-.8-.8v-.9zm-3.7 0c0-.4.3-.8.7-.8h.8c.5 0 .8.4.8.8v.9c0 .5-.3.8-.8.8h-.8c-.4 0-.7-.3-.7-.8v-.9zm9.7 26.6H2.6V7.9h30.7v22.4zm.1-25.7c0 .5-.4.8-.8.8h-.8c-.5 0-.8-.3-.8-.8v-.9c0-.4.3-.8.8-.8h.8c.4 0 .8.4.8.8v.9z"/><path d="M7.7 19.9l5.8 2.7c.1.1.3.1.5.1s.4 0 .6-.1c.3-.2.5-.6.5-1 0-.5-.3-.9-.7-1l-3.6-1.7 3.6-1.7c.4-.2.7-.6.7-1v-.1c0-.4-.2-.7-.5-.9-.2-.1-.4-.2-.6-.2-.2 0-.4 0-.5.1l-5.8 2.7c-.4.2-.6.6-.6 1v.1c0 .4.2.9.6 1zM15.1 25.4c.2.3.6.5.9.5h.1c.5 0 .9-.3 1-.8l3.8-11.8c.2-.4.1-.8-.1-1.1-.2-.2-.6-.4-.9-.4-.5 0-1 .3-1.1.8L15 24.4c-.1.4-.1.8.1 1zM20.8 16.2c0 .4.3.8.7 1l3.6 1.7-3.6 1.7c-.4.1-.7.5-.7 1 0 .4.2.8.6 1 .1.1.3.1.6.1.1 0 .3 0 .4-.1l5.8-2.7c.4-.1.7-.6.7-1v-.1c0-.4-.3-.8-.7-1l-5.8-2.7c-.1-.1-.3-.1-.4-.1-.3 0-.5.1-.6.2-.4.2-.6.5-.6.9v.1z"/></g></svg>
                                </div>
                        </div>
                </article>
            </cms:show_repeatable>
        </section>
        <section class="work-showcase print">
            <div class="inner">
                <div class="main-heading">
                    <h3>Print</h3>
                    <svg viewbox="0 0 61 64" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation"><g fill-rule="nonzero" fill="#000"><path d="M.756 9.987l41.455 12.226a1.053 1.053 0 0 0 .834-.1l16.834-9.71c.37-.212.57-.621.51-1.036a1.044 1.044 0 0 0-.78-.859L18.154.033a1.068 1.068 0 0 0-.718.07L.602 8.061A1.03 1.03 0 0 0 .01 9.075c.033.426.33.788.746.912zM18.002 2.13l38.611 9.756-14.237 8.214L3.961 8.77l14.041-6.64z"/><path d="M58.814 14.723l-16.438 9.482L1.36 12.108a1.055 1.055 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.288l41.893 12.356 17.23-9.939c.503-.288.67-.922.375-1.415a1.06 1.06 0 0 0-1.44-.37z"/><path d="M58.814 18.828l-16.438 9.483L1.36 16.214a1.057 1.057 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.288l41.892 12.355 17.23-9.939c.503-.289.67-.923.375-1.415a1.058 1.058 0 0 0-1.439-.369z"/><path d="M58.814 22.931l-16.438 9.484L1.36 20.317a1.055 1.055 0 0 0-1.31.694A1.032 1.032 0 0 0 .756 22.3l41.892 12.356 17.23-9.94c.503-.288.67-.922.375-1.415a1.062 1.062 0 0 0-1.439-.369z"/><path d="M58.814 27.037L42.376 36.52 1.36 24.421a1.055 1.055 0 0 0-1.31.695 1.031 1.031 0 0 0 .706 1.288L42.648 38.76l17.23-9.94c.503-.288.67-.923.375-1.415a1.06 1.06 0 0 0-1.439-.369z"/><path d="M58.814 31.14l-16.438 9.484L1.36 28.527a1.056 1.056 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.289l41.892 12.355 17.23-9.939c.503-.289.67-.923.375-1.415a1.06 1.06 0 0 0-1.439-.37z"/><path d="M58.814 35.246L42.375 44.73 1.36 32.631a1.055 1.055 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.289L42.649 46.97l17.23-9.94c.503-.288.67-.922.375-1.415a1.062 1.062 0 0 0-1.44-.369z"/><path d="M58.814 39.352l-16.438 9.483L1.36 36.736a1.055 1.055 0 0 0-1.31.695 1.032 1.032 0 0 0 .706 1.288l41.892 12.356 17.23-9.94c.503-.289.67-.922.375-1.415a1.06 1.06 0 0 0-1.439-.368z"/><path d="M58.814 43.455l-16.438 9.483L1.36 40.84a1.057 1.057 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.289l41.892 12.355 17.23-9.94c.503-.287.67-.922.375-1.414a1.06 1.06 0 0 0-1.439-.369z"/><path d="M58.814 47.551l-16.438 9.483L1.36 44.936a1.057 1.057 0 0 0-1.31.694 1.031 1.031 0 0 0 .706 1.289l41.892 12.355 17.23-9.94c.503-.287.67-.922.375-1.414a1.061 1.061 0 0 0-1.439-.369z"/><path d="M58.814 51.656l-16.438 9.483L1.36 49.042a1.055 1.055 0 0 0-1.31.694 1.032 1.032 0 0 0 .706 1.288L42.648 63.38l17.23-9.939c.503-.289.67-.923.375-1.415a1.06 1.06 0 0 0-1.439-.37z"/></g></svg>
                </div>
            </div>
            <cms:repeatable name="work_entry_print" label="Work entry item print" desc="A right item in the showreel" group="group_work_print">
                <cms:editable name="work_entry_print_title" label="print title" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_print_description" label="print description" input_width="600" col_width="600" type="text"></cms:editable>
                <cms:editable name="work_entry_print_orientation" label="print orientataion" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_skills" label="Digital skills" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_print_content" label="print content" input_width="600" col_width="600" type="richtext"></cms:editable>
                <cms:editable name="work_entry_print_image_1" label="print image 1" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_print_image_1_alt" label="print image 1 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_1_color_1" label="print image 1 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_1_color_2" label="print image 1 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_2" label="print image 2" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_print_image_2_alt" label="print image 2 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_2_color_1" label="print image 2 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_2_color_2" label="print image 2 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_3" label="print image 3" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_print_image_3_alt" label="print image 3 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_3_color_1" label="print image 3 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_print_image_3_color_2" label="print image 3 color 2" input_width="100" col_width="110" type="text"></cms:editable>
            </cms:repeatable>
            <cms:show_repeatable "work_entry_print">
                <article class="<cms:show work_entry_print_orientation /> <cms:show work_entry_digital_skills /> work-entry">
                    <div class="inner">
                        <div class="modal-content">
                            <cms:show work_entry_print_content /></div>
                                <div class="screens">
                                    <div class="screen-1"><span class="side-left" style="background: <cms:show work_entry_print_image_1_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_print_image_1_color_2 />;"></span>
                                        <img data-src="<cms:show work_entry_print_image_1 />" alt="<cms:show work_entry_print_image_1_alt />">
                                    </div>
                                    <cms:if "<cms:not_empty work_entry_print_image_2 />">
                                        <div class="screen-2"><span class="side-left" style="background: <cms:show work_entry_print_image_2_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_print_image_2_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_print_image_2 />" alt="<cms:show work_entry_print_image_2_alt />">
                                        </div>
                                    </cms:if>
                                    <cms:if "<cms:not_empty work_entry_print_image_3 />">
                                        <div class="screen-3"><span class="side-left" style="background: <cms:show work_entry_print_image_3_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_print_image_3_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_print_image_3 />" alt="<cms:show work_entry_print_image_3_alt />">
                                        </div>
                                    </cms:if>
                                </div>
                                <div class="content">
                                    <h3><cms:show work_entry_print_title /></h3>
                                    <p><cms:show work_entry_print_description /></p>
                                    <button class="modal-toggle">Check it out</button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 37 37" aria-hidden="true" role="presentation"><path d="M36.6 29L26 18.4l7.2-7.2c1.1-1.1 1.6-2.4 1.6-3.9 0-1.4-.5-2.8-1.6-3.8-1-1-2.3-1.6-3.8-1.6-1.4 0-2.8.6-3.8 1.6L24 5l-5.6 5.7L8 .3c-.5-.4-1.1-.4-1.6 0L.3 6.4c-.2.2-.3.5-.3.8 0 .3.1.6.3.8l10.4 10.4-6 6-.1.1v.1h-.1v.2h-.1v.1l-2.3 8.4c-.1.4 0 .8.3 1.1.2.2.5.3.8.3 0 0 .1 0 .2-.1l8.5-2.3h.2v-.1h.1l.1-.1 6.1-6.1L29 36.6c.2.2.4.3.7.3.3 0 .6-.1.8-.3l6.1-6.1c.4-.4.4-1.1 0-1.5zM27.1 5c.6-.6 1.4-.9 2.3-.9.9 0 1.7.3 2.3.9.6.7 1 1.5 1 2.3 0 .9-.4 1.7-1 2.3l-.8.8-4.6-4.6.8-.8zM2.6 7.2l4.6-4.6 2 2-2.3 2.2c-.4.5-.4 1.1 0 1.6.2.2.5.3.8.3.3 0 .5-.1.7-.3l2.3-2.3 1.7 1.7L11.2 9c-.4.4-.4 1.1 0 1.5.2.2.5.4.8.4.3 0 .6-.2.8-.4l1.1-1.1 2.9 2.8-4.6 4.6-9.6-9.6zm22.2.1l1.5 1.6L8.5 26.7 7 25.2 24.8 7.3zM4.7 32L6 27.3l3.5 3.4L4.7 32zm6.9-2.2L10 28.2l17.9-17.8 1.5 1.5-5.7 5.7-12.1 12.2zm18.1 4.5l-9.8-9.8 4.6-4.6 3.1 3.1-1.2 1.2c-.4.4-.4 1.1 0 1.5.2.2.5.3.8.3.2 0 .5-.1.7-.3l1.2-1.2 1.7 1.7-2.2 2.3c-.5.4-.5 1.1 0 1.5.2.2.4.3.7.3.3 0 .6-.1.8-.3l2.3-2.2 1.9 1.9-4.6 4.6z" fill="#CE0176"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 33" aria-hidden="true" role="presentation"><g fill="#CE0176"><path d="M33.8.1H2.2C1 .1 0 1.1 0 2.3v28.5c0 1.2 1 2.1 2.2 2.1h31.6c1.2 0 2.1-.9 2.1-2.1V2.3c0-1.2-.9-2.2-2.1-2.2zm-6.5 3.6c0-.4.3-.8.8-.8h.8c.4 0 .7.4.7.8v.9c0 .5-.3.8-.7.8h-.8c-.5 0-.8-.3-.8-.8v-.9zm-3.7 0c0-.4.3-.8.7-.8h.8c.5 0 .8.4.8.8v.9c0 .5-.3.8-.8.8h-.8c-.4 0-.7-.3-.7-.8v-.9zm9.7 26.6H2.6V7.9h30.7v22.4zm.1-25.7c0 .5-.4.8-.8.8h-.8c-.5 0-.8-.3-.8-.8v-.9c0-.4.3-.8.8-.8h.8c.4 0 .8.4.8.8v.9z"/><path d="M7.7 19.9l5.8 2.7c.1.1.3.1.5.1s.4 0 .6-.1c.3-.2.5-.6.5-1 0-.5-.3-.9-.7-1l-3.6-1.7 3.6-1.7c.4-.2.7-.6.7-1v-.1c0-.4-.2-.7-.5-.9-.2-.1-.4-.2-.6-.2-.2 0-.4 0-.5.1l-5.8 2.7c-.4.2-.6.6-.6 1v.1c0 .4.2.9.6 1zM15.1 25.4c.2.3.6.5.9.5h.1c.5 0 .9-.3 1-.8l3.8-11.8c.2-.4.1-.8-.1-1.1-.2-.2-.6-.4-.9-.4-.5 0-1 .3-1.1.8L15 24.4c-.1.4-.1.8.1 1zM20.8 16.2c0 .4.3.8.7 1l3.6 1.7-3.6 1.7c-.4.1-.7.5-.7 1 0 .4.2.8.6 1 .1.1.3.1.6.1.1 0 .3 0 .4-.1l5.8-2.7c.4-.1.7-.6.7-1v-.1c0-.4-.3-.8-.7-1l-5.8-2.7c-.1-.1-.3-.1-.4-.1-.3 0-.5.1-.6.2-.4.2-.6.5-.6.9v.1z"/></g></svg>
                                </div>
                        </div>
                </article>
            </cms:show_repeatable>
        </section>
        <section class="work-showcase branding">
            <div class="inner">
                <div class="main-heading">
                    <h3>Branding</h3>
                    <svg viewbox="0 0 72 44" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation"><g fill-rule="nonzero" fill="#000"><path d="M69.982 0H1.49C.666 0 0 .655 0 1.464V42.46c0 .807.666 1.463 1.489 1.463h68.493c.82 0 1.488-.656 1.488-1.463V1.464C71.47.655 70.802 0 69.982 0zM68.49 40.993H2.978V2.93H68.49v38.064z"/><path d="M20.704 7.809l-5.202 8.95-2.74-4.488-6.807 11.154H29.78L20.704 7.81zM13.33 20.498h-2.115l1.548-2.536 1.044 1.713-.477.823zm3.43 0l3.944-6.787 3.943 6.787H16.76zM64.024 35.138H40.202c-.823 0-1.488.657-1.488 1.463 0 .81.665 1.467 1.488 1.467h23.822c.824 0 1.492-.656 1.492-1.467 0-.806-.668-1.463-1.492-1.463zM64.024 29.284h-11.91c-.823 0-1.491.654-1.491 1.462 0 .809.668 1.463 1.492 1.463h11.909c.824 0 1.492-.654 1.492-1.463 0-.808-.668-1.462-1.492-1.462z"/></g></svg>
                </div>
            </div>
            <cms:repeatable name="work_entry_branding" label="Work entry item branding" desc="A right item in the showreel" group="group_work_branding">
                <cms:editable name="work_entry_branding_title" label="branding title" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_description" label="branding description" input_width="600" col_width="600" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_orientation" label="branding orientataion" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_digital_skills" label="Digital skills" input_width="200" col_width="200" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_content" label="branding content" input_width="600" col_width="600" type="richtext"></cms:editable>
                <cms:editable name="work_entry_branding_image_1" label="branding image 1" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_branding_image_1_alt" label="branding image 1 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_1_color_1" label="branding image 1 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_1_color_2" label="branding image 1 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_2" label="branding image 2" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_branding_image_2_alt" label="branding image 2 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_2_color_1" label="branding image 2 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_2_color_2" label="branding image 2 color 2" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_3" label="branding image 3" show_preview="1" preview_width="200" input_width="200" col_width="230" type="image"></cms:editable>
                <cms:editable name="work_entry_branding_image_3_alt" label="branding image 3 alt" input_width="200" col_width="230" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_3_color_1" label="branding image 3 color 1" input_width="100" col_width="110" type="text"></cms:editable>
                <cms:editable name="work_entry_branding_image_3_color_2" label="branding image 3 color 2" input_width="100" col_width="110" type="text"></cms:editable>
            </cms:repeatable>
            <cms:show_repeatable "work_entry_branding">
                <article class="<cms:show work_entry_branding_orientation /> <cms:show work_entry_digital_skills /> work-entry">
                    <div class="inner">
                        <div class="modal-content">
                            <cms:show work_entry_branding_content /></div>
                                <div class="screens">
                                    <div class="screen-1"><span class="side-left" style="background: <cms:show work_entry_branding_image_1_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_branding_image_1_color_2 />;"></span>
                                        <img data-src="<cms:show work_entry_branding_image_1 />" alt="<cms:show work_entry_branding_image_1_alt />">
                                    </div>
                                    <cms:if "<cms:not_empty work_entry_branding_image_2 />">
                                        <div class="screen-2"><span class="side-left" style="background: <cms:show work_entry_branding_image_2_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_branding_image_2_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_branding_image_2 />" alt="<cms:show work_entry_branding_image_2_alt />">
                                        </div>
                                    </cms:if>
                                    <cms:if "<cms:not_empty work_entry_branding_image_3 />">
                                        <div class="screen-3"><span class="side-left" style="background: <cms:show work_entry_branding_image_3_color_1 />;"></span><span class="side-right" style="background: <cms:show work_entry_branding_image_3_color_2 />;"></span>
                                            <img data-src="<cms:show work_entry_branding_image_3 />" alt="<cms:show work_entry_branding_image_3_alt />">
                                        </div>
                                    </cms:if>
                                </div>
                                <div class="content">
                                    <h3><cms:show work_entry_branding_title /></h3>
                                    <p><cms:show work_entry_branding_description /></p>
                                    <button class="modal-toggle">Check it out</button>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 37 37" aria-hidden="true" role="presentation"><path d="M36.6 29L26 18.4l7.2-7.2c1.1-1.1 1.6-2.4 1.6-3.9 0-1.4-.5-2.8-1.6-3.8-1-1-2.3-1.6-3.8-1.6-1.4 0-2.8.6-3.8 1.6L24 5l-5.6 5.7L8 .3c-.5-.4-1.1-.4-1.6 0L.3 6.4c-.2.2-.3.5-.3.8 0 .3.1.6.3.8l10.4 10.4-6 6-.1.1v.1h-.1v.2h-.1v.1l-2.3 8.4c-.1.4 0 .8.3 1.1.2.2.5.3.8.3 0 0 .1 0 .2-.1l8.5-2.3h.2v-.1h.1l.1-.1 6.1-6.1L29 36.6c.2.2.4.3.7.3.3 0 .6-.1.8-.3l6.1-6.1c.4-.4.4-1.1 0-1.5zM27.1 5c.6-.6 1.4-.9 2.3-.9.9 0 1.7.3 2.3.9.6.7 1 1.5 1 2.3 0 .9-.4 1.7-1 2.3l-.8.8-4.6-4.6.8-.8zM2.6 7.2l4.6-4.6 2 2-2.3 2.2c-.4.5-.4 1.1 0 1.6.2.2.5.3.8.3.3 0 .5-.1.7-.3l2.3-2.3 1.7 1.7L11.2 9c-.4.4-.4 1.1 0 1.5.2.2.5.4.8.4.3 0 .6-.2.8-.4l1.1-1.1 2.9 2.8-4.6 4.6-9.6-9.6zm22.2.1l1.5 1.6L8.5 26.7 7 25.2 24.8 7.3zM4.7 32L6 27.3l3.5 3.4L4.7 32zm6.9-2.2L10 28.2l17.9-17.8 1.5 1.5-5.7 5.7-12.1 12.2zm18.1 4.5l-9.8-9.8 4.6-4.6 3.1 3.1-1.2 1.2c-.4.4-.4 1.1 0 1.5.2.2.5.3.8.3.2 0 .5-.1.7-.3l1.2-1.2 1.7 1.7-2.2 2.3c-.5.4-.5 1.1 0 1.5.2.2.4.3.7.3.3 0 .6-.1.8-.3l2.3-2.2 1.9 1.9-4.6 4.6z" fill="#CE0176"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 33" aria-hidden="true" role="presentation"><g fill="#CE0176"><path d="M33.8.1H2.2C1 .1 0 1.1 0 2.3v28.5c0 1.2 1 2.1 2.2 2.1h31.6c1.2 0 2.1-.9 2.1-2.1V2.3c0-1.2-.9-2.2-2.1-2.2zm-6.5 3.6c0-.4.3-.8.8-.8h.8c.4 0 .7.4.7.8v.9c0 .5-.3.8-.7.8h-.8c-.5 0-.8-.3-.8-.8v-.9zm-3.7 0c0-.4.3-.8.7-.8h.8c.5 0 .8.4.8.8v.9c0 .5-.3.8-.8.8h-.8c-.4 0-.7-.3-.7-.8v-.9zm9.7 26.6H2.6V7.9h30.7v22.4zm.1-25.7c0 .5-.4.8-.8.8h-.8c-.5 0-.8-.3-.8-.8v-.9c0-.4.3-.8.8-.8h.8c.4 0 .8.4.8.8v.9z"/><path d="M7.7 19.9l5.8 2.7c.1.1.3.1.5.1s.4 0 .6-.1c.3-.2.5-.6.5-1 0-.5-.3-.9-.7-1l-3.6-1.7 3.6-1.7c.4-.2.7-.6.7-1v-.1c0-.4-.2-.7-.5-.9-.2-.1-.4-.2-.6-.2-.2 0-.4 0-.5.1l-5.8 2.7c-.4.2-.6.6-.6 1v.1c0 .4.2.9.6 1zM15.1 25.4c.2.3.6.5.9.5h.1c.5 0 .9-.3 1-.8l3.8-11.8c.2-.4.1-.8-.1-1.1-.2-.2-.6-.4-.9-.4-.5 0-1 .3-1.1.8L15 24.4c-.1.4-.1.8.1 1zM20.8 16.2c0 .4.3.8.7 1l3.6 1.7-3.6 1.7c-.4.1-.7.5-.7 1 0 .4.2.8.6 1 .1.1.3.1.6.1.1 0 .3 0 .4-.1l5.8-2.7c.4-.1.7-.6.7-1v-.1c0-.4-.3-.8-.7-1l-5.8-2.7c-.1-.1-.3-.1-.4-.1-.3 0-.5.1-.6.2-.4.2-.6.5-.6.9v.1z"/></g></svg>
                                </div>
                        </div>
                </article>
            </cms:show_repeatable>
        </section>
    </main>
    <footer class="footer" role="contentinfo">
        <div class="inner">
            <div class="legal">
                <h2 class="logo-main"><span>Alex</span> Plummer</h2>
                <p>© Copyright 2017</p>
                <ul role="navigation">
                    <li> <a href="<cms:show k_site_link /><cms:show k_site_link />legal.php">Legal</a>
                    </li>
                    <li> <a href="<cms:show k_site_link /><cms:show k_site_link />credits.php">Credits</a>
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
            '@type': 'CollectionPage', 
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
