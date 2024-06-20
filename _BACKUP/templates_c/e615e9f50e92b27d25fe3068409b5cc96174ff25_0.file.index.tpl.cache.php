<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:46:01
  from '/home/aoneplyczi/www/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542c29597643_69530101',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e615e9f50e92b27d25fe3068409b5cc96174ff25' => 
    array (
      0 => '/home/aoneplyczi/www/templates/index.tpl',
      1 => 1622193299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/header.tpl' => 1,
    'file:inc/footer.tpl' => 1,
  ),
),false)) {
function content_66542c29597643_69530101 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '153657847866542c2958efa2_21101211';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "config.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- Content -->
<section id="page-content" class="py-0">
<?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['page']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</section>
<!-- end: Content -->



<?php $_smarty_tpl->_subTemplateRender("file:inc/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
