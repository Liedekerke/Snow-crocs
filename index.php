<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="manifest" href="assets/manifest.json" />
  <meta name="theme-color" content="#317EFB" />
  <meta name="Description" content="oui" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Va & Vins</title>
</head>

<body style="background:black !important">

  <section>

<?php include('assets/includes/header.php'); ?>

  </section>

  <section>

    <div class="container-fluid">

      <div class="panel panel-info" style="background:black !important">
        <div id="panelOne">
          <div class="panel-heading">-30% sur la pate !!!</div>
          <div class="panel-body"><img src="assets/images/dessert1.jpg" alt="dessert1" id="dessert1" /></div>
        </div>
        <div id="panelTow">
          <div class="panel-heading">-2% sur le plaisir !!!</div>
          <div class="panel-body"><img src="assets/images/dessert3.jpg" alt="dessert3" id="dessert3" /></div>
        </div>
      </div>
    </div>

  </section>

  <!-- <section>
            <header class="header">

                <button id="butRefresh" class="headerButton"></button>
                <button id="butAdd" class="headerButton"></button>
              </header>

              <main class="main">
                <div class="card cardTemplate weather-forecast" hidden>
                . . .
                </div>
              </main>

              <div class="dialog-container">
              . . .
              </div>

              <div class="loader">
                <svg viewBox="0 0 32 32" width="32" height="32">
                  <circle id="spinner" cx="16" cy="16" r="14" fill="none"></circle>
                </svg>
              </div>

<script src="ap.js" async></script>
            <!- <script>
            scripts/ap.js
            app
            add/refresh
            add/cancel
            app.updateForecastCard()
            app.getForecast()
            app.updateForecasts(initialWeatherForecast)
            </script> -->

  <!-- </section> -->

  <section>

<?php include('assets/includes/footer.php'); ?>

  </section>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('assets/JS/service-worker.js').then(function(registration) {
          // Registration was successful
          console.log('ServiceWorker registration successful with scope: ', registration.scope);
        }, function(err) {
          // registration failed :(
          console.log('ServiceWorker registration failed: ', err);
        });
      });
    }
  </script>
</body>
</html>
