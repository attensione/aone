<?php
/* Smarty version 3.1.39, created on 2024-05-27 01:58:31
  from '/home/aoneplyczi/www/templates/pages/oferta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6653cca79223c1_61164230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fed14b26e0c18b1a94a14344135d126345eacf13' => 
    array (
      0 => '/home/aoneplyczi/www/templates/pages/oferta.tpl',
      1 => 1622195466,
      2 => 'file',
    ),
    '26583c6bebc2358117ce7494c585f81b2281687b' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/smartphone.tpl',
      1 => 1622195635,
      2 => 'file',
    ),
    'f486d6a6147345e359de4ff659e7eadda72de6ef' => 
    array (
      0 => '/home/aoneplyczi/www/templates/sections/timeline.tpl',
      1 => 1622193415,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_6653cca79223c1_61164230 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="offer">
  <div class="container-fluid">
    <!-- Pricing Table -->
    <div class="row pricing-table mt-5 pt-5">
        <div class="col-4">
            <a href="/sklep">
            <div class="plan">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-shop.png" alt="shop">
                </div>
            </div>
            </a>
        </div>
        <div class="col-4">
            <a href="/strona">
            <div class="plan featured">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-site.png" alt="page">
                </div>
            </div>
            </a>
        </div>
        <div class="col-4">
            <a href="/system">
            <div class="plan">
                <div class="plan-header">
                    <img class="img-fluid" src="/assets/images/product-system.png" alt="system">
                </div>
            </div>
            </a>
        </div>
    </div>
    <!-- end: Pricing Table -->
  </div>
</section>
<!-- Section -->
<section id="smartphone" class="fullscreen">
    <div class="bg-overlay" data-style="9"></div>
    <div class="shape-divider" data-style="3" data-flip-horizontal="true" data-color="#fff"></div>
    <div class="shape-divider" data-style="3" data-position="top" data-flip-vertical="true" data-color="#fff"></div>

    <div class="container py-5">
        <div class="container-fullscreen py-5">
            <div class="row align-items-center text-middle">
                <div class="heading-text text-white col-lg-7">
                    <h2 class="font-weight-800"><span>Tworzenie stron dostosowanych na smartphone</span></h2>
                    <p>W dzisiejszych czasach strona ładnie wyglądająca zarówno na komputerach desktopowych jak i na urządzeniach mobilnych to podstawa.</p>
                    <a href="#modal-contact" type="button" class="btn btn-light text-dark btn-outline btn-rounded" data-lightbox="inline">Zamów bezpłatną wycenę</a>
                </div>
                <div class="col-lg-5 text-lg-right text-center"> <img alt="smartphone" src="/assets/images/smartphone.png"> </div>
            </div>
        </div>
    </div>
</section>
<!-- end: Section -->
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
                <div class="timeline-item-date">27.05.2024</div>
                <p>Użytkownik wysyła zapytanie o wycenę bądź bezpośrednio email na adres <a href="mailto:info@aone.pl">info@aone.pl</a>.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">2</div>
                <h4>Wstępne omówienie</h4>
                <div class="timeline-item-date">27.05.2024</div>
                <p>Omawiamy telefonicznie lub mailowo szczegóły dotyczące projektu.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">3</div>
                <h4>Przedstawienie rozwiązania</h4>
                <div class="timeline-item-date">28.05.2024</div>
                <p>Klientowi zostaje zaprezentowane wstępne rozwiązanie i szczegółowy plan działań.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">4</div>
                <h4>Przyjęcie do realizacji</h4>
                <div class="timeline-item-date">28.05.2024</div>
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
