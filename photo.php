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

  <section class="devienFou">
    <nav aria-label="photos">
      <ul class="pagination">
        <li>
          <a href="dessert.html">
            <<< </a>
        </li>
        <li><a href="photo.html"> 1 </a></li>
        <li><a href="plat.html"> 2 </a></li>
        <li><a href="dessert.html"> 3 </a></li>
        <li><a href="plat.html"> >>> </a></li>
      </ul>
    </nav>

  </section>

  <section class="entreelol">

    <div>
      <h1> Entrée</h1>
    </div>

    <div id="1page" class="imagee1">
      <p>
        <img src="images/entree1.jpg" alt="entree1" id="entree1" />
        <img src="images/entree2.jpg" alt="entree2" id="entree2" />
        <img src="images/entree3.jpg" alt="entree3" id="entree3" />
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
