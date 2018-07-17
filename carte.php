<!DOCTYPE html>
<html>

<head>
<?php include('assets/includes/head.php'); ?>
  <title>Va & Vins</title>
</head>

<body style="background:black !important">



<?php include('assets/includes/header.php'); ?>



  <section class="cartouchette">
    <div id="entree">
      <h2 class="soustitre">Entrée</h2>
      <p>Tomate Crevettes Grises – revisitée – // Millefeuille / Persil / Sablé <span id="bad1" class="badge"> 400€</span></a><br> Foie Gras de Canard – mi-cuit – // Gelée Gingembre / Chutney Airelles / Brioche<span id="bad2" class="badge">401€</span></a><br></p>
    </div>
    <div id="plat">
      <h2 class="soustitre">plat</h2>
      <p>Solette – façon Ostendaise – // Crevettes Grises / Epinards Frais <span id="bad3" class="badge">600€</span></a><br> Chicon au Gratin – revisité – // Fruits Secs / Crème de Vieux Bruges <span id="bad4" class="badge">666€</span></a><br> Bavette de
        Bœuf – Irish Hereford – // Jus Corsé / Béarnaise / Gros Légumes <span id="bad5" class="badge">669€</span></a>
        </br>
      </p>

    </div>
    <div id="dessert">
      <h2 class="soustitre">dessert</h2>
      <p>La Merveilleuse Boule Surprise // Chocolat / Bergamote / Calamansi / Meringue <span id="bad6" class="badge">898€</span></a><br> Crémeux Chocolat Noir – free gluten & lactose – // Confit Orange / Streusel Noisette <span id="bad7" class="badge">900€</span></a>
        </br>
      </p>
    </div>
    <!-- menu presente sous form de listes groupee avec badgeS??
                  <a href="#">News <span class="badge">5</span></a><br>
                  <a href="#">Comments <span class="badge">10</span></a><br>
                  <a href="#">Updates <span class="badge">2</span></a> -->
  </section>



<?php include('assets/includes/footer.php'); ?>


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
