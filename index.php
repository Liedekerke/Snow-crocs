<!DOCTYPE html>
<html>

<head>

<?php include('assets/includes/head.php'); ?>

  <title>oui</title>
</head>

<body>

<header class="container-fluid">

<?php include('assets/includes/header.php'); ?>

</header>

<main>
<div class="jarallax jarallax-home" style="background-image: url('/assets/images/splashart3.jpg'); background-repeat: no-repeat;position: absolute;top: 0px; left:0px; width:100%; height: 100%; overflow: hidden; pointer-events:none; z-index: -100;">

</div>
</main>
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






<footer class="container-fluid text-center">
<?php include('assets/includes/footer.php'); ?>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  <!-- <script>
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
  </script> -->
</body>
</html>
