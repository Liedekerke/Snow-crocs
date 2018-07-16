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
      <h1> Dessert</h1>
    </div>

    <div id="3page" class="imagee1">
      <img src="assets/images/dessert1.jpg" alt="dessert1" id="dessert1" />
      <img src="assets/images/dessert2.jpg" alt="dessert2" id="dessert2" />
      <img src="assets/images/dessert3.jpg" alt="dessert3" id="dessert3" />
      <img src="assets/images/dessert4.jpg" alt="dessert4" id="dessert4" />
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
