<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?= base_url() ?>"></base>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">



  <title>Sign in</title>

  <link href="assets/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="notfound">
  <section>
  
    <?php 
    $atributos = array('id' => 'login-form', 'class' => 'login-form', 'method' => 'post', 'role'=>'login');
    echo form_open('login/validar', $atributos);
    ?>
    <div class="lockedpanel">

        <div class="loginuser">
            <img src="assets/images/photos/sesion.jpg" alt="" />
        </div>
        <div class="logged">
            <h4>Sign in</h4>
        </div>
        <form method="post" action="index.html">
            <input type="email" name="emailinput" class="form-control" placeholder="Enter your user name" /><br>
            <input type="password" name="passwordinput" class="form-control" placeholder="Enter your password" /><br>
            <button class="btn btn-success btn-block">Unlock</button>
        </form>
    </div><!-- lockedpanel -->
  
  </section>


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.min.js"></script>
<script src="assets/js/jquery.sparkline.min.js"></script>
<script src="assets/js/jquery.cookies.js"></script>

<script src="assets/js/toggles.min.js"></script>
<script src="assets/js/retina.min.js"></script>

<script src="assets/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        "use strict";
        
        // Do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
        
    });
</script>
</body>
</html>
