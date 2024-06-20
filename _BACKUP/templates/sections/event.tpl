 {assign var="event" value=['name'=>'WordCamp Europe', 'url'=>'https://europe.wordcamp.org', 'date'=>'2021/06/07 00:00:00']}

<section id="event" class="bg-dark text-light">
  <div id="particles-dots" class="particles"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1903" height="449"></canvas></div>
  <div class="container">
    <div class="heading-text heading-section text-center"><h4>{$event['name']} rozpocznie się za</h4></div>
    <div class="countdown" data-countdown="{$event['date']}"></div>
    <p class="text-center">Więcej informacji znajduje się pod adresem <a href="{$event['url']}" target="_blank">{$event['url']}</a></p>
  </div>
</section>
<!-- Partical js base file  -->
<script src="//{$smarty.server.SERVER_NAME}/assets/js/plugins/particles.js" type="text/javascript"></script>
<!--Particles-->
<script src="//{$smarty.server.SERVER_NAME}/assets/js/plugins/particles-dots.js" type="text/javascript"></script>
