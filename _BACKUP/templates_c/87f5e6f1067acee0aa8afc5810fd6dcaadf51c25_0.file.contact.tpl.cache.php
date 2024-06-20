<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:46:01
  from '/home/aoneplyczi/www/templates/inc/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542c29608ae4_44258687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f5e6f1067acee0aa8afc5810fd6dcaadf51c25' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/contact.tpl',
      1 => 1622194512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/contact.tpl' => 1,
  ),
),false)) {
function content_66542c29608ae4_44258687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '146081302466542c29607732_22751516';
?>
<!-- Modal -->
<div id="modal-contact" class="modal cookie-notify" data-delay="3000" data-cookie-enabled="true" data-cookie-name="cookieContact">
    <h2 class="modal-title">Zamów bezpłatną wycenę</h2>
    <?php $_smarty_tpl->_subTemplateRender("file:sections/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!--end: Modal -->
<?php }
}
