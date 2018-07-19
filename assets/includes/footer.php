<footer class="container-fluid text-center">
  <div class="main-footer">
    <p id="copiriri"> <span class="glyphicon glyphicon-copyright-mark"></span> Copyright- Nicolas de Liedekerke </p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

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

<script type="text/javascript" src="assets/js/jarallax-0.2.3b.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<!-- <script>
init = function(){
      var jarallax = new Jarallax();

      jarallax.addAnimation('.jarallax_background', [{progress:'0%', top:'-500'},{progress:'100%', top:'-1000px'}])
    }
    init();
</script> -->

</body>
</html>
