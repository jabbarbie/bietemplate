<?php
// konfigurasi
$adsense = false;
$disqus = false;

// model content
$postwithimage = true;

?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:css='false' b:defaultwidgetversion='2' b:layoutsVersion='3' b:responsive='true' b:templateUrl='indie.xml' b:templateVersion='1.3.0' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>

<head>
<?php include("header.php") ?>

<b:skin version='1.3.0'><![CDATA[
/*
<?php include("cssvariable.php") ?>
*/

<?php include("master/css/style.css") ?>
<?php include("komentarcss.php") ?>
<?php //include("warnalabel.php") ?>
<?php //include("cssmobile.php") ?>
]]></b:skin>
<b:defaultmarkups><?php require('defaultmarkup.php') ?></b:defaultmarkups>


<?php if ($adsense): ?>
<script data-ad-client="ca-pub-5665035628787532" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php //include('adsense.php') ?>
<?php endif ;?>

<?php if($disqus): ?>
<b:if cond='data:blog.pageType == &quot;item&quot;'>
  <script async='async' src='//asadako-kun.disqus.com/blogger_item.js'/>
</b:if>
<?php endif; ?>

<!-- Template Tata Letak -->
<b:if cond='data:view.isLayoutMode'>
<b:template-skin>
<![CDATA[
  ul,ol,li {display: none}
  #layout {
    padding: 0;
  }
  #layout #wrapper {
    width: 100%;
    display: flex;
    background-color: lightblue;
  }    
  #layout main {
    padding: 0;
    flex: 0 0 65%;
  }
]]>
</b:template-skin>
</b:if>


</head>
<body>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script><?php //include('js/sitemap.php') ?> </script>


<?php include('body.php') ?>
<script><?php include('js.php') ?> </script>
<script src="/feeds/posts/summary?max-results=9999&amp;alt=json-in-script&amp;callback=jsku"></script>


</body>
</html>