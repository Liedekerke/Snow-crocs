<!DOCTYPE html>
<html>

<head>
<?php include('assets/includes/head.php'); ?>
  <title>Va & Vins</title>
</head>

<body style="background:black !important">



<?php include('assets/includes/header.php'); ?>



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





<?php include('assets/includes/footer.php'); ?>

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
