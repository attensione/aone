<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:16:30
  from '/home/aoneplyczi/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af636e1665b6_97156062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e615e9f50e92b27d25fe3068409b5cc96174ff25' => 
    array (
      0 => '/home/aoneplyczi/www/templates/index.tpl',
      1 => 1621495754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_60af636e1665b6_97156062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "config.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- Content -->
<section id="page-content" class="py-0">
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</section>
<!-- end: Content -->



<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
