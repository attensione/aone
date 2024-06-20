<?php
/* Smarty version 3.1.39, created on 2021-03-12 20:08:03
  from '/home/aoneplyczi/www/templates/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604bbc135aad62_42090376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad3c54f3152eab22a0051e093da5aa8502a563b' => 
    array (
      0 => '/home/aoneplyczi/www/templates/search.tpl',
      1 => 1615576018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604bbc135aad62_42090376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '621526507604bbc135a8392_27796479';
?>
<div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
    <form class="search-form" action="search-results-page.html" method="get">
        <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
        <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
    </form>
</div>
<?php }
}
