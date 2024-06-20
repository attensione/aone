<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:46:01
  from '/home/aoneplyczi/www/templates/sections/advantages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542c295f73b9_38236979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '488d27f0581a7b69009f0200b12703eb5e2469da' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/advantages.tpl',
      1 => 1623236691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66542c295f73b9_38236979 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '127289104466542c295f5479_10029560';
?>
<section id="advantages" class="bg-dark text-light">
  <div id="particles-dots" class="particles"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="449"></canvas></div>
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-4 py-3">
        <div class="icon-box medium fancy">
          <div class="icon animated flip infinite visible" data-animate="flip infinite"> <i class="icon-star"></i> </div>
          <h3>Nowoczesny design</h3>
          <p>Design na miarę nowoczesnych trendów.</p>
        </div>
      </div>
      <div class="col-lg-4 py-3">
        <div class="icon-box medium fancy">
          <div class="icon animated swing infinite visible" data-animate="swing infinite"> <i class="icon-smartphone"></i> </div>
          <h3>Responsywność</h3>
          <p>Rozwiązanie polegające na dostosowaniu do wyświetlania na urządzeniach mobilnych.</p>
        </div>
      </div>
      <div class="col-lg-4 py-3">
        <div class="icon-box medium fancy">
          <div class="icon animated pulse infinite visible" data-animate="pulse infinite"> <i class="icon-shield"></i> </div>
          <h3>Bezpieczeństwo</h3>
          <p>Wbudowane mechanizmamy poprawiające bezpieczęństwo w sieci.</p>
        </div>
      </div>
    </div>
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
