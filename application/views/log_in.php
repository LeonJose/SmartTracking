


<!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?= base_url() ?>"></base>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">

  <title>SisPro - SmartTracking</title>

  <link href="assets/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin" style="color: #F2F2F2;">


<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">
                <div class="signin-info">
                    <div>
                        <h1><span style="color: #1caf9a;">[</span> SmartTracking <span style="color: #1caf9a;">]</span></h1>
                        <img src="assets/images/logo_128.png" />
                    </div>
                    <div class="mb20"></div>
                    <h5><strong>Bienvenido a SisPro - SmartTracking</strong></h5>
                    <div class="mb20"></div>
                </div><!-- signin0-info -->
            </div><!-- col-sm-7 -->

            <div class="col-md-5">
              <?php $atributos = array('id' => 'login-form', 'class' => 'login-form', 'method' => 'post', 'role'=>'login');
                    echo form_open('login/validar', $atributos); ?>

                    <h4 class="nomargin">Iniciar Sesi&oacute;n</h4>
                    <p class="mt5 mb20">Inicia para ingresar a tu cuenta.</p>
                    <?php if($valido == false){ ?>
                    <div class="alert alert-danger">
                      <strong>Usuario/Contrase&ntilde;a invalido.</strong>
                    </div>
                    <?php } ?>
                    <input type="email" name="correo" id="correo" class="form-control uname" placeholder="Correo" required/>
                    <input type="password" name="contrasena" id="contrasena" class="form-control pword" placeholder="Contrase&ntilde;a" required/>
                    <button type="submit" class="btn btn-success btn-block">Iniciar Sesi&oacute;n</button>

                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016. All Rights Reserved. SisPro
            </div>
        </div>

    </div><!-- signin -->

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

        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>

</body>
</html>
