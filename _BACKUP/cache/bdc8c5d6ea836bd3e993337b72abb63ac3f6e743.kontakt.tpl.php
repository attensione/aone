<?php
/* Smarty version 3.1.39, created on 2024-05-27 08:11:46
  from '/home/aoneplyczi/www/templates/pages/kontakt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66542422135f29_59633426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b3f1d889308f493cbbc2834ae1cd8f6ee94cc54' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/kontakt.tpl',
      1 => 1622195499,
      2 => 'file',
    ),
    'a65ea49c16de27d5a68b243c09b494703d43ef44' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/contact.tpl',
      1 => 1622273481,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_66542422135f29_59633426 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="contact-page">

  <div class="container"><div class="row"><div class="col-lg-5"><p>Zajmuję się tworzeniem responsywnych stron, sklepów i systemów internetowych w głównej mierze opartych o najbardziej popularną platformę WWW WordPress.</p><p>Pozdrawiam,</p>
<address><div id="logo" class="mb-2"><a href="https://aone.pl"><span class="logo-default logo-dark"><img data-lazyloaded="1" data-placeholder-resp="autox30px" src="/assets/logo.svg" loading="lazy" data-src="/assets/logo.svg" alt="logo" style="background-color:transparent;" class="litespeed-loaded" data-was-processed="true" width="auto" height="30px"></span></a></div><p>email: <a href="mailto:info@aone.pl" target="_blank" rel="noopener noreferrer">info@aone.pl</a><br>
tel: <a href="tel:+48518518335" target="_blank" rel="noopener noreferrer">518 518 335</a><br>
</p></address></div><div class="col-lg-6 offset-lg-1">
<form id="contact-form" class="widget-contact-form form-validate" novalidate="novalidate" action="include/contact-form.php" role="form" method="post">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" aria-required="true" name="widget-contact-form-email" required class="form-control required email" placeholder="">
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Telefon</label>
            <input type="number" aria-required="true" name="widget-contact-form-phone" required class="form-control required phone" placeholder="">
        </div>
    </div>
    <div class="form-group">
        <label for="message">Wiadomość</label>
        <textarea type="text" name="widget-contact-form-message" required rows="5" class="form-control required" placeholder=""></textarea>
    </div>
    <div class="form-group">
      <div class="custom-control custom-checkbox">
          <input type="checkbox" name="reminders" id="reminders" class="custom-control-input" value="1" required="">
          <label class="custom-control-label" for="reminders">Wyrażam zgodę na przetwarzanie danych osobowych w celu udzielenia odpowiedzi na przesłane zapytanie zgodnie z <a href="/polityka-prywatnosci">regulaminem</a>.</label>
      </div>
    </div>
    <div class="form-group">
      <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
      This site is protected by reCAPTCHA and the Google
        <a href="https://policies.google.com/privacy" target="_blank">Privacy Policy</a> and
        <a href="https://policies.google.com/terms" target="_blank">Terms of Service</a> apply.
    </div>
    <button id="form-submit" class="btn btn-dark btn-rounded btn-outline" type="submit"><i class="icon-send"></i>&nbsp;Wyślij</button>
</form>
</div></div></div>

</section>
<?php }
}
