<?php include('assets/includes/head.php'); ?>
<title>photos</title>
</head>
<body style="background-color:#1e2226b8 !important;">
   <!-- HEADER -->
   <?php include('assets/includes/header.php'); ?>
   <!-- MAIN -->

  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/image2.jpg" alt="Cookie" height="500">
      <div class="carousel-caption">
        <h3>Entrée</h3>
        <p>Une explosion de saveur</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/image3.jpg" alt="oui" height="500">
      <div class="carousel-caption">
        <h3>Entrée</h3>
        <p>Une explosion de saveur</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/image4.jpg" alt="hehe" height="500">
      <div class="carousel-caption">
        <h3>Plat</h3>
        <p>Une explosion de saveur</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/image5.jpg" alt="true" height="500">
      <div class="carousel-caption">
        <h3>Dessert</h3>
        <p>Une explosion de saveur</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>




   <!-- FOOTER -->
   <?php include('assets/includes/footer.php'); ?>
