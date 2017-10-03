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
                <img data-src="<cms:show article_image />" alt="<cms:show article_image_alt />">
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
                    </article>
                    <aside class="content-right" role="complementary">
                        <img src="<cms:show k_site_link />img/media/content-sample.jpg" alt="some alt text">
                    </aside>
                </div>
            </div>
        </div>
        <section class="related-news">
            <div class="inner">
                <h2>Further reading</h2>
                <article class="news-link">
                    <picture>
                        <img data-src="<cms:show k_site_link />img/media/screen-euromoney.jpg">
                    </picture>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci.</p><a class="btn" href="<cms:show k_site_link />article.php">Continue reading</a>
                </article>
                <article class="news-link">
                    <picture>
                        <img data-src="<cms:show k_site_link />img/media/screen-euromoney.jpg">
                    </picture>
                    <h3>Lorem ipsum dolor sit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, adipisci.</p><a class="btn" href="<cms:show k_site_link />article.php">Continue reading</a>
                </article>
            </div>
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
        [<cms:editable name='json_ld' label='JSON_LD' desc='JSON_LD for the page' group='group_meta' type='textarea'>{ 
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
            'headline': 'Brand new JSON-LD website launched!',
            'author': 'Andrew Ders Smith',
            'datePublished': '29 October, 2016',
            'dateModified': '29 October, 2016',
            'dateline': 'NY, USA',
            'mainEntityOfPage': 'true',
            'articleSection': 'Internet',
            'articleBody': 'The whole article copyed here',
            'image': {
                '@type': 'imageObject',
                'url': 'http://example.com/image.png',
                'height': '400',
                'width': '300'
            },
            'publisher': {
                '@type': 'Organization',
                'name': 'Publisher Name',
                'logo': {
                    '@type': 'imageObject',
                    'url': 'http://example.com/images/logo.png'
                }
            }
        }</cms:editable>]
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
