<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:12:01
  from '/home/aoneplyczi/www/templates/pages/oferta/system.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542431d93a39_17009985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '462ea8a91b47c16088562a3f7c2af794af959771' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/oferta/system.tpl',
      1 => 1622270821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/smartphone.tpl' => 1,
    'file:sections/timeline.tpl' => 1,
  ),
),false)) {
function content_66542431d93a39_17009985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '61835530866542431d908d4_04953760';
$_smarty_tpl->_assignInScope('pagetitle', "System" ,false ,32);?>



<section id="system"><div class="container">

<div class="row mb-5 pb-5"><div class="col-md-6">
<img data-lazyloaded="1" src="/assets/images/product-system.png" class="img-fluid litespeed-loaded" data-src="/assets/images/product-system.png" alt="system" data-was-processed="true"></div><div class="col-md-6"><p class="lead">Przygotowuję profesjonalne systemy www dostosowane do indywidualnych potrzeb klienta, takie jak:<ul><li>systemy rezerwacji,</li><li>wewnętrzny indywidualny system informacyjny dla firm,</li><li>systemy bookingowe, prywatne chmury z interfejsem www, systemy ogłoszeń,</li><li>fora internetowe,</li><li>systemy e-learningowe oparte na platformie moodle,</li><li>interfejs z dokumentami dla pracowników w plikach PDF,</li><li>systemy rekrutacji,</li><li>interfejs przeprowadzania ankiet,</li><li>panele ułatwiające konfigurację sprzętu.</li></ul></p>

<a href="#modal-contact" type="button" class="btn btn-dark btn-rounded btn-outline" data-lightbox="inline">Zamów bezpłatną wycenę</a>

</div></div>

<div class="row col-no-margin">
    <!--Box 1-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-code"></i>
            <h3>Autorski CORE</h3>
            <p>Autorskie pliki "core.css" oraz "core.js".</p>
        </div>
    </div>
    <!--End: Box 1-->
    <!--Box 2-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-codepen"></i>
            <h3>Laravel</h3>
            <p>Stosowanie jednego z najbardziej znanych frameworków php na świecie.</p>
        </div>
    </div>
    <!--End: Box 2-->
    <!--Box 3-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-monitor"></i>
            <h3>Wieloplatformowość</h3>
            <p>Rozwiązanie pozwalające na wyświetlanie systemu na wielu dostępnych platformach.</p>
        </div>
    </div>
    <!--End: Box 3-->
    <!--Box 4-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-shield"></i>
            <h3>Zabezpieczenia</h3>
            <p>System z wbudowanymi mechanizmami poprawiającymi bezpieczęństwo w sieci.</p>
        </div>
    </div>
    <!--End: Box 4-->
</div>

</div></section>
<?php $_smarty_tpl->_subTemplateRender("file:sections/smartphone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/timeline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
