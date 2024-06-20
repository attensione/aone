<?php
/* Smarty version 3.1.39, created on 2021-03-14 21:12:19
  from '/home/aoneplyczi/www/templates/inc/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604e6e23161597_45587669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae37b80d71a5a8b66c67194c9ddef7acbf74cfa' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/search.tpl',
      1 => 1615576018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604e6e23161597_45587669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1535877664604e6e23161058_58504130';
?>
<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
    <form class="search-form" action="search-results-page.html" method="get">
        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
    </form>
</div>
<?php }
}
