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
