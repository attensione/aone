<?php
/* Smarty version 3.1.39, created on 2021-03-12 20:08:03
  from '/home/aoneplyczi/www/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604bbc1359a2a1_23338689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d4e0f905b3cfb9ab06d472cee19a99bafbb3877' => 
    array (
      0 => '/home/aoneplyczi/www/templates/header.tpl',
      1 => 1615576082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:search.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:slider.tpl' => 1,
  ),
),false)) {
function content_604bbc1359a2a1_23338689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1479394964604bbc13585e67_85932892';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="AONE.PL" />
	  <meta name="description" content="Themeforest Template Polo, html template">
    <link rel="icon" type="image/svg" href="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <!-- Stylesheets & Fonts -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="modern breakpoint-xl b--desktop">
    <!-- Body Inner -->
    <div class="body-inner">
        <!-- Header -->
        <header id="header" class="light" data-fullwidth="true">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="/">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="logo" style="width:auto;height:60px;">
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <?php $_smarty_tpl->_subTemplateRender("file:search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>PL</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
        </header>
        <!-- end: Header -->
        <?php $_smarty_tpl->_subTemplateRender("file:slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
