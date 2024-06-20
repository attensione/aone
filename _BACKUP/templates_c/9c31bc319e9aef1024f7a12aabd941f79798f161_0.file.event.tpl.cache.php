<?php
/* Smarty version 3.1.39, created on 2021-06-09 12:07:06
  from '/home/aoneplyczi/www/templates/sections/event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c092cac9c448_68232756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c31bc319e9aef1024f7a12aabd941f79798f161' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/event.tpl',
      1 => 1622195616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c092cac9c448_68232756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21773003060c092cac96483_47643591';
?>
 <?php $_smarty_tpl->_assignInScope('event', array('name'=>'WordCamp Europe','url'=>'https://europe.wordcamp.org','date'=>'2021/06/07 00:00:00'));?>

<section id="event" class="bg-dark text-light">
  <div id="particles-dots" class="particles"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="449"></canvas></div>
  <div class="container">
    <div class="heading-text heading-section text-center"><h4><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
 rozpocznie się za</h4></div>
    <div class="countdown" data-countdown="<?php echo $_smarty_tpl->tpl_vars['event']->value['date'];?>
"></div>
    <p class="text-center">Więcej informacji znajduje się pod adresem <a href="<?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['event']->value['url'];?>
</a></p>
  </div>
</section>
<!-- Partical js base file  -->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/particles.js" type="text/javascript"><?php echo '</script'; ?>
>
<!--Particles-->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/particles-dots.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php }
}
