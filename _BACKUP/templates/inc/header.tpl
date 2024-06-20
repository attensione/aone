{config_load file='config.conf'}

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="pl">
	  <meta name="description" content="{$smarty.config.description}">
    <link rel="icon" type="image/svg" href="/assets/icon.svg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <!-- Document title -->
    <title>{if $pagetitle neq ''}{$pagetitle} | {/if}{$smarty.config.title}</title>
    <!-- Open Graph meta tags -->
    <meta property="og:title" content="{if $pagetitle neq ''}{$pagetitle} | {/if}{$smarty.config.title}" />
    <meta property="og:description" content="{$smarty.config.description}" />
    <meta property="og:url" content="https://{$smarty.server.SERVER_NAME}" />
    <meta property="og:site_name" content="{$smarty.config.title}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="/assets/images/coffee.png" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <!-- Stylesheets & Fonts -->
    <link href="//{$smarty.server.SERVER_NAME}/assets/css/plugins.css" rel="stylesheet">
    <link href="//{$smarty.server.SERVER_NAME}/assets/css/style.css" rel="stylesheet">
    <link href="//{$smarty.server.SERVER_NAME}/assets/css/plugins/pageloader.css" rel="stylesheet">
    <link href="//{$smarty.server.SERVER_NAME}/assets/css/custom.css" rel="stylesheet">
</head>
<body class="modern breakpoint-xl b--desktop" data-animation-in="fadeIn" data-icon="1" data-icon-color="#76aa00" data-speed-in="1000">
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" class="light" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo" class="brand">
                        <a href="/">
                            <img class="d-inline-block" src="/assets/logo.svg" alt="logo" style="width:auto;height:30px;">
                        </a>
                    </div>
                    <!--End: Logo-->
                    <div class="header-extras">
                      <a href="#modal-contact" type="button" class="ml-3 btn btn-rounded btn-dark btn-outline btn-sm d-none d-lg-inline-block" data-lightbox="inline">Zamów bezpłatną wycenę</a>
                    </div>
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    {include file="inc/nav.tpl"}
                </div>
            </div>
        </header>
        <!-- end: Header -->

{if $page eq 'home'}
{include file="inc/slider.tpl"}
{elseif $page neq '404'}
{include file="inc/heading.tpl"}
{/if}
