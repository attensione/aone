<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:12:08
  from '/home/aoneplyczi/www/templates/inc/heading.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6654243871d532_26682790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a256cdf2d6a3453a03827f8e6ff2c875cb78d6ec' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/heading.tpl',
      1 => 1622271381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654243871d532_26682790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '99393855566542438714736_40423827';
?>
<!-- Page title -->
<section id="page-title" class="text-uppercase text-light" style="background-image:url(/assets/images/heading-<?php echo end($_smarty_tpl->tpl_vars['breadcumbs']->value);?>
.jpg); background-size: cover; background-position: center center;">
    <div class="bg-overlay" data-style="9"></div>
    <div class="container">
        <div class="breadcrumb">
            <ul>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcumbs']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                  <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
                    <li><a href="/"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a> </li>
                  <?php } elseif ((count($_smarty_tpl->tpl_vars['breadcumbs']->value)-1) == $_smarty_tpl->tpl_vars['key']->value) {?>
                    <li class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
                  <?php } else { ?>
                    <li><a href="/<?php echo $_smarty_tpl->tpl_vars['item']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a> </li>
                  <?php }?>
                 <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="page-title">
            <h1><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</h1>
        </div>
    </div>
</section>
<!-- end: Page title -->
<?php }
}
