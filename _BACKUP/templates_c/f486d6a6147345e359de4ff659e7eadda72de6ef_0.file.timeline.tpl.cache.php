<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:12:01
  from '/home/aoneplyczi/www/templates/sections/timeline.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542431da98e9_56219038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f486d6a6147345e359de4ff659e7eadda72de6ef' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/timeline.tpl',
      1 => 1622193415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66542431da98e9_56219038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/aoneplyczi/www/include/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '2038329966542431da4515_24988340';
?>
<!-- Section -->
<section id="timeline">
  <div class="container">
    <div class="heading-text heading-line text-center">
      <h4>Przykładowy harmonogram</h4>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <ul class="timeline">
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">1</div>
                <h4>Wysłanie zgłoszenia</h4>
                <div class="timeline-item-date"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
</div>
                <p>Użytkownik wysyła zapytanie o wycenę bądź bezpośrednio email na adres <a href="mailto:info@aone.pl">info@aone.pl</a>.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">2</div>
                <h4>Wstępne omówienie</h4>
                <div class="timeline-item-date"><?php echo smarty_modifier_date_format(time(),"%d.%m.%Y");?>
</div>
                <p>Omawiamy telefonicznie lub mailowo szczegóły dotyczące projektu.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">3</div>
                <h4>Przedstawienie rozwiązania</h4>
                <div class="timeline-item-date"><?php echo smarty_modifier_date_format("+1 day","%d.%m.%Y");?>
</div>
                <p>Klientowi zostaje zaprezentowane wstępne rozwiązanie i szczegółowy plan działań.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">4</div>
                <h4>Przyjęcie do realizacji</h4>
                <div class="timeline-item-date"><?php echo smarty_modifier_date_format("+1 day","%d.%m.%Y");?>
</div>
                <p>W przypadku akceptacji rozwiązania przechodzimy do ustalenia <b>terminu końcowego</b> oraz realizacji projektu.</p>
            </li>
            <!--end: Timeline item-->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end: Section -->
<?php }
}
