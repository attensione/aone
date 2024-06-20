<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:16:30
  from '/home/aoneplyczi/www/templates/inc/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af636e1aedf4_94651210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a92a6a2067351a5bcb8c54566f3355b479851af' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/nav.tpl',
      1 => 1621622549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af636e1aedf4_94651210 (Smarty_Internal_Template $_smarty_tpl) {
?><!--Navigation-->
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
