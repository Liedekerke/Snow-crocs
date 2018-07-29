<?php include('assets/includes/head.php'); ?>
<title>photo</title>
</head>
<body style="background-color:#1e2226b8 !important;">
   <!-- HEADER -->
   <?php include('assets/includes/header.php'); ?>
   <!-- MAIN -->

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



     <!-- FOOTER -->
     <?php include('assets/includes/footer.php'); ?>
