<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:11:46
  from '/home/aoneplyczi/www/templates/pages/kontakt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542422184e88_65044604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3f1d889308f493cbbc2834ae1cd8f6ee94cc54' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/kontakt.tpl',
      1 => 1622195499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/contact.tpl' => 1,
  ),
),false)) {
function content_66542422184e88_65044604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '69329520466542422183bd4_22084153';
$_smarty_tpl->_assignInScope('pagetitle', "Kontakt" ,false ,32);?>


<section class="contact-page">

  <div class="container"><div class="row"><div class="col-lg-5"><p>Zajmuję się tworzeniem responsywnych stron, sklepów i systemów internetowych w głównej mierze opartych o najbardziej popularną platformę WWW WordPress.</p><p>Pozdrawiam,</p>
<address><div id="logo" class="mb-2"><a href="https://aone.pl"><span class="logo-default logo-dark"><img data-lazyloaded="1" data-placeholder-resp="autox30px" src="/assets/logo.svg" loading="lazy" data-src="/assets/logo.svg" alt="logo" style="background-color:transparent;" class="litespeed-loaded" data-was-processed="true" width="auto" height="30px"></span></a></div><p>email: <a href="mailto:info@aone.pl" target="_blank" rel="noopener noreferrer">info@aone.pl</a><br>
tel: <a href="tel:+48518518335" target="_blank" rel="noopener noreferrer">518 518 335</a><br>
</p></address></div><div class="col-lg-6 offset-lg-1">
<?php $_smarty_tpl->_subTemplateRender("file:sections/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div></div></div>

</section>
<?php }
}
