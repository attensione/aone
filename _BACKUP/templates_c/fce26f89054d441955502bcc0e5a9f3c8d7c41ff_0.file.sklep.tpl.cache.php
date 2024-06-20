<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:11:50
  from '/home/aoneplyczi/www/templates/pages/oferta/sklep.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_665424263b4d08_21927258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fce26f89054d441955502bcc0e5a9f3c8d7c41ff' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/oferta/sklep.tpl',
      1 => 1622270922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/smartphone.tpl' => 1,
    'file:sections/timeline.tpl' => 1,
  ),
),false)) {
function content_665424263b4d08_21927258 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2125562019665424263b2872_07711184';
$_smarty_tpl->_assignInScope('pagetitle', "Sklep internetowy" ,false ,32);?>



<section id="shop"><div class="container">
  <div class="row mb-5 pb-5"><div class="col-md-6">
<img data-lazyloaded="1" src="/assets/images/product-shop.png" class="img-fluid litespeed-loaded" data-src="/assets/images/product-shop.png" alt="shop" data-was-processed="true"></div><div class="col-md-6"><p>Przygotowuję profesjonalne sklepy www dostosowane do indywidualnych potrzeb klienta.<br>
Klient sam na własny koszt musi zakupić szablon/motyw np. na stronie Themeforest.net odpowiednio dostosowany do potrzeb e-commerce.<br>
Jeśli klient zakupi plik PSD ja muszę pierw pociąć ten szablon na kod HTML co wydłuża czas realizacji.<br>
Jeśli klient zdecyduje się na zakup gotowego szablonu HTML wtedy pozostaje tylko kwestia zakodowania do odpowiedniego CMS np. WordPress WooCommerce, PrestaShop.<br>
Jeśli klient zdecyduje się na zakup gotowego motywu np. do WordPress wtedy obniżam cenę o połowę i konfiguruję całą platformę wtyczki, domenę, hosting itd. do gotowego użytku.<br>
Na koniec pracy zapewniam również cacheowanie strony – poprawia to szybkość wczytywania oraz poprawę zabezpieczeń przed atakami.</p>

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
            <i class="icon-smartphone"></i>
            <h3>Responsywność</h3>
            <p>Sklep dostosowany do wyświetlania na urządzeniach mobilnych.</p>
        </div>
    </div>
    <!--End: Box 2-->
    <!--Box 3-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-shield"></i>
            <h3>Zabezpieczenia</h3>
            <p>Sklep z wbudowanymi mechanizmami poprawiającymi bezpieczęństwo w sieci.</p>
        </div>
    </div>
    <!--End: Box 3-->
    <!--Box 4-->
    <div class="col-lg-3 col-6">
        <div class="text-box hover-effect text-dark" style="height: 343.667px;">
            <i class="icon-globe"></i>
            <h3>Wielojęzyczność</h3>
            <p>Rozwiązanie pozwalające na stworzenie sklepu internetowego w wielu językach.</p>
        </div>
    </div>
    <!--End: Box 4-->
</div>

</div></section>
<?php $_smarty_tpl->_subTemplateRender("file:sections/smartphone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/timeline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
