<!DOCTYPE html>
<html lang="en">
<head>
      <base href="<?= base_url() ?>"></base>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="images/favicon.png" type="image/png">
      <title>SmartTracking</title>
      <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">


       <link href="assets/css/style.default.css" rel="stylesheet">

       <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

       <!--link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css"-->
       <!--link rel="stylesheet" href="vendor/whirl/dist/whirl.css"-->
       <!--link rel="stylesheet" href="vendor/site/css/app.css" id="maincss"-->
       <link rel="stylesheet" href="assets/site/css/app.css" id="maincss">

       <style type="text/css"> #mapa{width: 100%; height: 500px; }</style>
   <!-- JQUERY-->
       <script src="assets/jquery/dist/jquery.js"></script>
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> SmartTracking <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href=""><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="<?php base_url() ?>index.php/Home/index"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
         <li class="nav-parent"><a href=""><i class="fa fa-edit"></i> <span>Users</span></a>
          <ul class="children">
            <li><a href="hola.html"><i class="fa fa-caret-right"></i> New Users</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href=""><i class="fa fa-edit"></i> <span>Routes</span></a>
          <ul class="children">
            <li><a href="<?php base_url() ?>index.php/Rutas/generarRuta"><i class="fa fa-caret-right"></i> New Route</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  <div class="mainpanel">
    <div class="headerbar">
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      <form class="searchform" action="index.html" method="post">
        <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
      </form>

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="assets/images/photos/loggeduser.png" alt="" />
                John Doe
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="<?php echo site_url('login/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->

    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard <span>Routes control system</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="#">Bracket</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
