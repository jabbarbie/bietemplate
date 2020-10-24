<?php require_once('config.php') ?>
<?xml version="1.0" encoding="UTF-8" ?>

<!DOCTYPE html>
<html b:css='false' b:js='false' b:defaultwidgetversion='2' b:layoutsVersion='3' b:responsive='true' b:templateUrl='indie.xml' b:templateVersion='1.3.0' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
  <?php include("header.php") ?>

  <!-- CSS -->
  <b:skin version='1.3.0'><![CDATA[
    /*
    <?php include("css/variable.php") ?>
    */

    <?php include("css/style.css") ?>
    <?php include("css/komentar.php") ?>
  ]]></b:skin>
  
  <!-- Defaultmarkup -->
  <b:defaultmarkups><?php require('defaultmarkup.php') ?></b:defaultmarkups>

  <!-- Adsense -->
  <?php if (adsense): ?>
  <?php include('adsense.php') ?>
  <?php endif;?>


  <!-- Template Tata Letak-->
  <?php include('css/tataletak.css') ?>

</head>
<body>
  <script><?php //include('js/sitemap.php') ?> </script>


  <?php include('body.php') ?>

  <!-- Fungsi JS Beranda -->
  <b:if cond='data:view.isHomepage or data:view.isMultipleItems'>
    <script><?php include('js.php') ?> </script>
    <script src="/feeds/posts/summary?max-results=9999&amp;alt=json-in-script&amp;callback=jsku"></script>
  </b:if>

</body>
</html>