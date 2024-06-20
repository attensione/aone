<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:11:56
  from '/home/aoneplyczi/www/templates/pages/oferta/strona.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6654242cdd1148_19878796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4717c1a75ae0d36b07eaaebc47c0489852be5bd' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/oferta/strona.tpl',
      1 => 1622270957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/smartphone.tpl' => 1,
    'file:sections/timeline.tpl' => 1,
  ),
),false)) {
function content_6654242cdd1148_19878796 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13826877966654242cdce167_20209059';
$_smarty_tpl->_assignInScope('pagetitle', "Strona internetowa" ,false ,32);?>



<section id="site"><div class="container">
  <div class="row mb-5 pb-5">
    <div class="col-md-6">
    <img data-lazyloaded="1" src="/assets/images/product-site.png" class="img-fluid litespeed-loaded" data-src="/assets/images/product-site.png" alt="site" data-was-processed="true"></div><div class="col-md-6"><p class="lead">Przygotowuję profesjonalne strony www dostosowane do indywidualnych potrzeb klienta.<br />
    Używam najnowszych technologii poprawiających prędkość wczytywania strony a także wyniki w google PageSpeed.<br />
    W przypadku CMS WordPress używam autorskiego admin panela, obsługa corowych funkcji strony takich jak np. wymiana loga na stronie lub ikonki nie jest już problemem.<br />
    Na koniec zapewniam również cacheowanie strony – poprawia to szybkość wczytywania oraz zabezpiecza przed atakami.</p>

    <a href="#modal-contact" type="button" class="btn btn-dark btn-rounded btn-outline" data-lightbox="inline">Zamów bezpłatną wycenę</a>

    </div>
  </div>

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
              <p>Strona dostosowana do wyświetlania na urządzeniach mobilnych.</p>
          </div>
      </div>
      <!--End: Box 2-->
      <!--Box 3-->
      <div class="col-lg-3 col-6">
          <div class="text-box hover-effect text-dark" style="height: 343.667px;">
              <i class="icon-shield"></i>
              <h3>Zabezpieczenia</h3>
              <p>Strona z wbudowanymi mechanizmami poprawiającymi bezpieczęństwo w sieci.</p>
          </div>
      </div>
      <!--End: Box 3-->
      <!--Box 4-->
      <div class="col-lg-3 col-6">
          <div class="text-box hover-effect text-dark" style="height: 343.667px;">
              <i class="icon-globe"></i>
              <h3>Wielojęzyczność</h3>
              <p>Rozwiązanie pozwalające na stworzenie strony internetowej w wielu językach.</p>
          </div>
      </div>
      <!--End: Box 4-->
  </div>
</div></section>
<?php $_smarty_tpl->_subTemplateRender("file:sections/smartphone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/timeline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
