<?php include('assets/includes/head.php'); ?>
<title>carte</title>
</head>
<!-- <body style="background-color:#1e2226b8 !important;"> -->
<body id="bg-menu" style="background-image: url('assets/images/imgtest/bg-menus.jpg' );">

   <!-- HEADER -->
   <?php include('assets/includes/header.php'); ?>
   <!-- MAIN -->
   <!-- <iframe src="assets/images/imgtest/bg-menus.jpg" id="contentFrame" frameborder="0" seamless="seamless" scrolling="no"></iframe> -->

   <div  class="grid-container">
     <div class="item1">
   <div class="container-fluid bg-dark text-white" id="entree">
      <h2 class="soustitre">Entrée</h2>
      <div class="row container">
         <p class="col-sm-9 col-md-9 col-lg-9">Tomate Crevettes Grises – revisitée – // Millefeuille / Persil / Sablé</p>
         <p class=" col-sm-3 col-md-3 col-lg-3 "><span id="bad1" class="badge"> 400€</span><br></p>
         <p class="col-sm-9 col-md-9 col-lg-9">
            Foie Gras de Canard – mi-cuit – // Gelée Gingembre / Chutney Airelles / Brioche
         </p>
         <p class=" col-sm-3 col-md-3 col-lg-3"><span id="bad2" class="badge ">401€</span></p>
      </div>
   </div>
   <div class="container-fluid bg-dark text-white" id="plat">
      <h2 class="soustitre">Plat</h2>
            <div class="row container">
      <p class="col-sm-9 col-md-9 col-lg-9">
         Solette – façon Ostendaise – // Crevettes Grises / Epinards Frais
      </p>
      <p class=" col-sm-3 col-md-3 col-lg-3 "><span id="bad3" class="badge"> 400€</span><br></p>
      <p class="col-sm-9 col-md-9 col-lg-9">
         Chicon au Gratin – revisité – // Fruits Secs / Crème de Vieux Bruges
      </p>
      <p class=" col-sm-3 col-md-3 col-lg-3"><span id="bad4" class="badge ">401€</span><br></p>
      <p class="col-sm-9 col-md-9 col-lg-9">
         Bavette de
         Bœuf – Irish Hereford – // Jus Corsé / Béarnaise / Gros Légumes
      </p>
      <p class=" col-sm-3 col-md-3 col-lg-3 "><span id="bad5" class="badge"> 400€</span></p>
   </div>
   </div>
   <div class="container-fluid bg-dark text-white" id="dessert">
      <h2 class="soustitre">dessert</h2>
            <div class="row container">
      <p class="col-sm-9 col-md-9 col-lg-9">
         La Merveilleuse Boule Surprise // Chocolat / Bergamote / Calamansi / Meringue
      </p>
      <p class=" col-sm-3 col-md-3 col-lg-3"><span id="bad6" class="badge"> 800€</span><br></p>
      <p class="col-sm-9 col-md-9 col-lg-9">
         Crémeux Chocolat Noir – free gluten & lactose – // Confit Orange / Streusel Noisette
      </p>
      <p class=" col-sm-3 col-md-3 col-lg-3"><span id="bad7" class="badge"> 500€</span></p>
   </div>
 </div>
   </div>
</div>
   <!-- FOOTER -->

     <footer>
     <div class="main-footer">
       <p id="copiriri"> <span class="glyphicon glyphicon-copyright-mark"></span> Copyright- Nicolas de Liedekerke </p>
     </div>
   </footer>

   <script type="text/javascript">
       jarallax(document.querySelectorAll('.jarallax'));
       jarallax(document.querySelectorAll('.jarallax-keep-img'), {
           keepImg: true,
       });
   </script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>



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
