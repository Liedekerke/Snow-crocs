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
