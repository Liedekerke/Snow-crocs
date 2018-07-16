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

  <!-- <section class="container justify-content-center"> -->
  <section class="row">

    <div id="resto1" class="col-lg-6">
      <!-- <div id="resto1" class="col-lg-4 col⁻lg-offset-2"> -->
      <h1>Va & Vins</h1>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2519.233764731581!2d4.3550966!3d50.8453553!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbe!4v1527514264246" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></br></iframe></br> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.2337658368315!2d4.355096615745739!3d50.845355279531816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47fce0ba71d%3A0x2f634768a374d3b0!2sCantersteen+10%2C+1000+Bruxelles!5e0!3m2!1sfr!2sbe!4v1527539858581"
        width="50%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p>adress: Cantersteen 10, Bruxelles</br>
      </p>
      <p> H24 7/7</p>
    </div>

    <div id="resto2" class="col-lg-6">
      <!-- <div id="resto2" class="col-lg-4 col-lg-offset-1"> -->
      <h1>Va & Vins</h1>
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2519.233764731581!2d4.3550966!3d50.8453553!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sbe!4v1527514264246" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></br></iframe></br> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.2337658368315!2d4.355096615745739!3d50.845355279531816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c47fce0ba71d%3A0x2f634768a374d3b0!2sCantersteen+10%2C+1000+Bruxelles!5e0!3m2!1sfr!2sbe!4v1527539858581"
        width="50%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      <p>adress: Cantersteen 10, Bruxelles</br>
      </p>
      <p> H24 7/7</p>
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
