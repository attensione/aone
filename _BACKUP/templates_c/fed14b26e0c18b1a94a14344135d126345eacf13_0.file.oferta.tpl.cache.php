<?php
/* Smarty version 3.1.39, created on 2024-05-27 01:58:31
  from '/home/aoneplyczi/www/templates/pages/oferta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6653cca796b430_37271367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed14b26e0c18b1a94a14344135d126345eacf13' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/oferta.tpl',
      1 => 1622195466,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/smartphone.tpl' => 1,
    'file:sections/timeline.tpl' => 1,
  ),
),false)) {
function content_6653cca796b430_37271367 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7232017236653cca7969b43_20694355';
$_smarty_tpl->_assignInScope('pagetitle', "Oferta" ,false ,32);?>


<section id="offer">
  <div class="container-fluid">
    <!-- Pricing Table -->
    <div class="row pricing-table mt-5 pt-5">
        <div class="col-4">
            <a href="/sklep">
            <div class="plan">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-shop.png" alt="shop">
                </div>
            </div>
            </a>
        </div>
        <div class="col-4">
            <a href="/strona">
            <div class="plan featured">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-site.png" alt="page">
                </div>
            </div>
            </a>
        </div>
        <div class="col-4">
            <a href="/system">
            <div class="plan">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-system.png" alt="system">
                </div>
            </div>
            </a>
        </div>
    </div>
    <!-- end: Pricing Table -->
  </div>
</section>
<?php $_smarty_tpl->_subTemplateRender("file:sections/smartphone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/timeline.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
