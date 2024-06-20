<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:16:30
  from '/home/aoneplyczi/www/templates/inc/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af636e19b0a4_64070387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b311142a158a0c9380509514558e5de68866efc1' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/header.tpl',
      1 => 1622018173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/nav.tpl' => 1,
    'file:inc/slider.tpl' => 1,
    'file:inc/heading.tpl' => 1,
  ),
),false)) {
function content_60af636e19b0a4_64070387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config.conf', null, 0);
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="pl">
	  <meta name="description" content="<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'description');?>
">
    <link rel="icon" type="image/svg" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
    <!-- Document title -->
    <title><?php if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 | <?php }
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'title');?>
</title>
    <!-- Open Graph meta tags -->
    <meta property="og:title" content="<?php if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 | <?php }
echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'title');?>
" />
    <meta property="og:description" content="<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'description');?>
" />
    <meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'];?>
" />
    <meta property="og:site_name" content="<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'title');?>
" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/images/coffee.png" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <!-- Stylesheets & Fonts -->
    <link href="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/css/plugins.css" rel="stylesheet">
    <link href="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/css/style.css" rel="stylesheet">
    <link href="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/css/plugins/pageloader.css" rel="stylesheet">
    <link href="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/css/custom.css" rel="stylesheet">
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
                            <img class="d-inline-block" src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="logo" style="width:auto;height:30px;">
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
                    <?php $_smarty_tpl->_subTemplateRender("file:inc/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </header>
        <!-- end: Header -->

<?php if ($_smarty_tpl->tpl_vars['page']->value == 'home') {
$_smarty_tpl->_subTemplateRender("file:inc/slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['page']->value != '404') {
$_smarty_tpl->_subTemplateRender("file:inc/heading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
}
