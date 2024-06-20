<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:46:01
  from '/home/aoneplyczi/www/templates/inc/cookies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542c29617f42_09878116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f65e1b0a5623a51401be905907a09e0fd816872' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/cookies.tpl',
      1 => 1622278959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66542c29617f42_09878116 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '115056945866542c29617767_38411484';
?>
<div id="cookieNotify" class="modal-strip cookie-notify bg-light text-dark py-5 border-top" data-delay="3000" data-expire="1" data-cookie-name="aone-cookies" data-cookie-enabled="true">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-sm-center sm-center sm-m-b-10 m-t-5">Ta strona korzysta z plików cookie, aby zapewnić najlepszą jakość korzystania z witryny.<a href="/polityka-prywatnosci" class="text-light"><span> Więcej informacji <i class="fa fa-info-circle"></i></span></a></div>
            <div class="col-lg-4 d-flex align-items-center justify-content-lg-end justify-content-center">
              <button type="button" class="btn btn-outline btn-rounded btn-dark btn-sm m-r-10 modal-close">Zamknij</button>
              <button type="button" class="btn btn-outline btn-rounded btn-sm modal-confirm">Zgadzam się</button>
            </div>
        </div>
    </div>
</div>
<?php }
}
