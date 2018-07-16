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

  <section class="padd">
    <div id="contact">
      <form action="" method="post" id="form">
        <div>
          <label class="name">  <span class="glyphicon glyphicon-user"></span>Firstname</label><input type="text" name="Firstname">
        </div>
        <div>
          <label class="name">  <span class="glyphicon glyphicon-user"></span>Lastname</label><input type="text" name="Lastname">
        </div>
        <div>
          <label class="name"><span class="glyphicon glyphicon-envelope"></span> e-mail</label><input type="text" name="e-mail">
        </div>
        <div class="marge">
          <select>
                      <option value="we">WEEEEEEEEEEE</option>
                      <option value="woe">WOEEEEEEEEE</option>
                      <option value="wa">WAAAAAAAAAAA</option>
                      <option value="wo">WOOOOOOOOOO</option>
                    </select>
        </div>
        <div>
          <label class="name"> <span class="glyphicon glyphicon-pencil"></span> Message</label>
          <textarea name="message"></textarea>
          <button type="submit">Send</button>
        </div>
      </form>

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
