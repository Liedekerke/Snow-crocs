<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
  <link rel="manifest" href="manifest.json" />
  <meta name="theme-color" content="#317EFB" />
  <meta name="Description" content="oui" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Va & Vins</title>
</head>

<body style="background:black !important">

  <section>

<?php include('assets/includes/header.php'); ?>

  </section>

assets/

  <section class="entreelol">

    <div>
      <h1> Plat</h1>
    </div>

    <div id="2page" class="imagee1">
      <p>
        <img src="assets/images/plat1.jpg" alt="plat1" id="plat1" />
        <img src="assets/images/plat2.jpg" alt="plat2" id="plat2" />
        <img src="assets/images/plat3.jpg" alt="plat3" id="plat3" />
      </p>
    </div>

  </section>
  <section>

<?php include('assets/includes/footer.php'); ?>

  </section>
  <script>
    if ('serviceWorker' in navigator) {
      window.addEventListener('load', function() {
        navigator.serviceWorker.register('service-worker.js').then(function(registration) {
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
