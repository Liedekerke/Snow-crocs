<!DOCTYPE html>
<html>

<head>
  <?php include('assets/includes/head.php'); ?>
  <title>Va & Vins</title>
</head>

<body style="background:black !important">

  <section>

<?php include('assets/includes/header.php'); ?>

  </section>

  <?php include('assets/includes/photos.php'); ?>

  <section class="entreelol">

    <div>
      <h1> Entrée</h1>
    </div>

    <div id="1page" class="imagee1">
      <p>
        <img src="assets/images/entree1.jpg" alt="entree1" id="entree1" />
        <img src="assets/images/entree2.jpg" alt="entree2" id="entree2" />
        <img src="assets/images/entree3.jpg" alt="entree3" id="entree3" />
      </p>
    </div>

  </section>

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
