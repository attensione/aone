<?php
/* Smarty version 3.1.39, created on 2024-05-27 18:30:32
  from '/home/aoneplyczi/www/_backup/templates/inc/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6654b528d21799_83157149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c37128b11df7eec0dc154a9cf63463e7429024' => 
    array (
      0 => '/home/aoneplyczi/www/_backup/templates/inc/nav.tpl',
      1 => 1622193413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6654b528d21799_83157149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4287504026654b528d1fe70_85810696';
?>
<!--Navigation-->
<div id="mainMenu" class="menu-creative">
    <div class="container">
        <nav class="text-uppercase">
            <ul>
                <li> <a href="/">O mnie</a></li>
                <li> <a href="/realizacje">Realizacje</a></li>
                <li class="dropdown"> <a href="#" onclick="location.href='/oferta';">Oferta</a>
                    <ul class="dropdown-menu">
                        <li><a href="/oferta/strona">Strona WWW</a></li>
                        <li><a href="/oferta/sklep">Sklep WWW</a></li>
                        <li><a href="/oferta/system">System WWW</a></li>
                    </ul>
                </li>
                <li> <a href="/kontakt">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</div>


<!--end: Navigation-->
<?php }
}
