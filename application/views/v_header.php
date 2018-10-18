<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url()?>assets/style/images/favicon.png">
<title><?php echo $title?></title>
<!-- Bootstrap core CSS -->
<link href="<?php echo base_url()?>assets/style/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style/css/plugins.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/style/css/color/aqua.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>assets/style/type/icons.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
  <nav class="navbar">
    <div class="navbar-header">
      <div class="basic-wrapper"> 
        <div class="navbar-brand"><img src="<?php echo base_url()?>" srcset="<?php echo base_url()?>assets/style/images/logo.png 1x, <?php echo base_url()?>assets/style/images/logo@2x.png 2x" class="logo-light" alt="" /></div>
        <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
      </div>
      <!-- /.basic-wrapper -->  
    </div>
    <!-- /.navbar-header -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url()?>">Beranda<span class="caret"></span></a></li>
        <li><a href="<?php echo base_url()?>Blog">Blog<span class="caret"></span></a></li>
        <li><a href="<?php echo base_url()?>Tentang">Tentang<span class="caret"></span></a></li>
      </ul>
      <!-- /.navbar-nav --> 
    </div>
    <!-- /.navbar-collapse -->
    
    <div class="social-wrapper">
      <ul class="social naked">
        <li><a href="https://www.facebook.com/Digital-Creative-1215092261929408/" target="blank"><i class="icon-s-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/digital_creative/" target="blank"><i class="icon-s-instagram"></i></a></li>
      </ul>
      <!-- /.social --> 
    </div>
    <!-- /.social-wrapper --> 
  </nav>
  <!-- /.navbar -->