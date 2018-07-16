<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <link rel="manifest" href="assets/manifest.json" />
  <meta name="theme-color" content="#317EFB" />
  <meta name="Description" content="oui" />


  <title>Va & Vins</title>
</head>

<body>



<?php include('assets/includes/header.php'); ?>



  <section>

    <!-- <div class="container-fluid">

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
    </div> -->

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
