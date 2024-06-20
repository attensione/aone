<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:46:01
  from '/home/aoneplyczi/www/templates/inc/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542c295ed862_78130003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd755b1ceb180ff672f237381a041f31c23c38f4e' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/footer.tpl',
      1 => 1623233502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/advantages.tpl' => 1,
    'file:sections/faq.tpl' => 1,
    'file:inc/contact.tpl' => 1,
    'file:inc/cookies.tpl' => 1,
  ),
),false)) {
function content_66542c295ed862_78130003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '120109760966542c295e4db7_14300961';
$_smarty_tpl->_subTemplateRender("file:sections/advantages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:sections/faq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/contact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:inc/cookies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Footer -->
<footer id="footer" class="inverted">
    <div class="footer-content py-5">
      <div class="bg-overlay" data-style="9"></div>
        <div class="container">
          <h5 class="text-center text-uppercase">
            <span class="mr-3">Copyright</span>
            <a class="scroll-to" href="html"><img class="d-inline" src="/assets/logo.svg" alt="logo" style="width:auto;height:30px;"></a>
            <span class="ml-3">2021</span>
          </h5>
        </div>
    </div>
</footer>
<!-- end: Footer -->
</div>
<!-- end: Body Inner -->
<!-- Scroll top -->
<a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
<!-- Plugins -->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins.js"><?php echo '</script'; ?>
>
<!-- Template functions -->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/functions.js"><?php echo '</script'; ?>
>
<!-- Plugins -->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/pageloader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/pageloader.init.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/plugins/valildate-rules.js"><?php echo '</script'; ?>
>
<!-- Google -->
<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?render=6LfcAoEUAAAAALfOrGPbpzLfYnDMMHDG5xk-eK8S"><?php echo '</script'; ?>
>
<!-- Custom scripts -->
<?php echo '<script'; ?>
 src="//<?php echo $_SERVER['SERVER_NAME'];?>
/assets/js/custom.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
