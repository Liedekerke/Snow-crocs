<!DOCTYPE html>
<html>

<head>
  <?php include('assets/includes/head.php'); ?>
  <title>Va & Vins</title>
</head>

<body style="background:black !important">


<?php include('assets/includes/header.php'); ?>



  <?php include('assets/includes/photos.php'); ?>

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


<?php include('assets/includes/footer.php'); ?>


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
