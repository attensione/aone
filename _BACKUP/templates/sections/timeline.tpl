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
                <div class="timeline-item-date">{$smarty.now|date_format:"%d.%m.%Y"}</div>
                <p>Użytkownik wysyła zapytanie o wycenę bądź bezpośrednio email na adres <a href="mailto:info@aone.pl">info@aone.pl</a>.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">2</div>
                <h4>Wstępne omówienie</h4>
                <div class="timeline-item-date">{$smarty.now|date_format:"%d.%m.%Y"}</div>
                <p>Omawiamy telefonicznie lub mailowo szczegóły dotyczące projektu.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">3</div>
                <h4>Przedstawienie rozwiązania</h4>
                <div class="timeline-item-date">{"+1 day"|date_format:"%d.%m.%Y"}</div>
                <p>Klientowi zostaje zaprezentowane wstępne rozwiązanie i szczegółowy plan działań.</p>
            </li>
            <!--end: Timeline item-->
            <!--Timeline item-->
            <li class="timeline-item">
                <div class="timeline-icon">4</div>
                <h4>Przyjęcie do realizacji</h4>
                <div class="timeline-item-date">{"+1 day"|date_format:"%d.%m.%Y"}</div>
                <p>W przypadku akceptacji rozwiązania przechodzimy do ustalenia <b>terminu końcowego</b> oraz realizacji projektu.</p>
            </li>
            <!--end: Timeline item-->
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- end: Section -->
