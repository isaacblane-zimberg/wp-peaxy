<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title();?></title>
    <meta name="description" content="">

    <?php wp_head();?>
</head>
<body>

    <!-- HEADER -->
    <!--Testing two-->
    <div class="main-header">
        <a class="peaxy-logo" href="/">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="Peaxy Logo">
        </a>
        <a class="mobile-menu" href="javascript:void(0);">MENU</a>
        <ul class="nav" id="main-navigation">
            <li>
                <a href="/digital-twin">Digital Twin</a>
            </li>
            <li>
                <a href="/industrial-analytics/">Industrial Analytics</a>
            </li>
            <li>
                <a href="/support/">Support</a>
            </li>
            <li>
                <a href="/about/">About</a>
            </li>
            <li>
                <a href="/news/">News</a>
            </li>
            <li>
                <a href="/blog/">Blog</a>
            </li>
            <!-- <li>
                <form action="https://www.google.com/search" role="search" method="get" class="search-form">
                    <div class="field-wrapper">
                        <input type="text" class="search-field" name="q" id="search">
                    </div>
                    <input type="hidden" name="sitesearch" value="peaxy.net">
                </form>
            </li> -->
        </ul>
    </div>
