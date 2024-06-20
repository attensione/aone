<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:45:17
  from '/home/aoneplyczi/www/templates/inc/slider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542bfd16da33_61723779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57f53261f96a5c192e5733054b9f241eac2138e3' => 
    array (
      0 => '/home/aoneplyczi/www/templates/inc/slider.tpl',
      1 => 1622209463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66542bfd16da33_61723779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/aoneplyczi/www/include/plugins/function.img.php','function'=>'smarty_function_img',),));
$_smarty_tpl->compiled->nocache_hash = '21172744566542bfd165ed8_60572816';
?>
<!-- Inspiro Slider -->
<div id="slider" class="inspiro-slider slider-halfscreen dots-creative" data-fade="true" data-arrows="false" data-autoplay="8000" data-loop="true">
    <!-- Slide 1 -->
    <div class="slide background-image" style="background-image:url('<?php echo smarty_function_img(array('name'=>'person-typing-on-his-macbook-pro.jpg'),$_smarty_tpl);?>
');">
        <div class="bg-overlay" data-style="9"></div>
        <div class="container">
            <div class="slide-captions text-center text-light">
                <!-- Captions -->
                <span class="strong"><a href="/oferta" class="business"><span class="business">Oferta</span></a>
                </span>
                <h2>Tworzenie stron www dla firm lub klientów indywidualnych</h2>
                <a type="button" href="#modal-contact" data-lightbox="inline" class="btn btn-light btn-rounded">Zamów bezpłatną wycenę</a>
                <a href="/oferta/strona" type="button" class="btn btn-light btn-rounded btn-outline">Czytaj więcej</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 1 -->

    <!-- Slide 2 -->
    <div class="slide kenburns background-image" style="background-image:url('<?php echo smarty_function_img(array('name'=>'daria-nepriakhina.jpg'),$_smarty_tpl);?>
');">
        <div class="bg-overlay" data-style="9"></div>
        <div class="container">
            <div class="slide-captions text-left text-light">
                <!-- Captions -->
                <span class="strong"><a href="/oferta" class="business"><span class="business">Oferta</span></a>
                </span>
                <h2>Tworzenie sklepów www dla małych i dużych przedsiębiorstw</h2>
                <a type="button" href="#modal-contact" data-lightbox="inline" class="btn btn-light btn-rounded">Zamów bezpłatną wycenę</a>
                <a href="/oferta/sklep" type="button" class="btn btn-light btn-rounded btn-outline">Czytaj więcej</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 2 -->

    <!-- Slide 3 -->
    <div class="slide kenburns background-image" style="background-image:url('<?php echo smarty_function_img(array('name'=>'luca-bravo.jpg'),$_smarty_tpl);?>
');">
        <div class="bg-overlay" data-style="9"></div>
        <div class="container">
            <div class="slide-captions text-right text-light">
                <!-- Captions -->
                <span class="strong"><a href="/oferta" class="business"><span class="business">Oferta</span></a>
                </span>
                <h2>Tworzenie systemów www na potrzeby specyficznych usług</h2>
                <a type="button" href="#modal-contact" data-lightbox="inline" class="btn btn-light btn-rounded">Zamów bezpłatną wycenę</a>
                <a href="/oferta/system" type="button" class="btn btn-light btn-rounded btn-outline">Czytaj więcej</a>
                <!-- end: Captions -->
            </div>
        </div>
    </div>
    <!-- end: Slide 4 -->
</div>
<!--end: Inspiro Slider -->
<?php }
}
