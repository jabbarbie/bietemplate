<?php
// konfigurasi
$adsense = false;
$disqus = false;

?>
<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html b:css='false' b:defaultwidgetversion='2' b:layoutsVersion='3' b:responsive='true' b:version='2' class='v2' expr:dir='data:blog.languageDirection' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr' xmlns:og='http://ogp.me/ns#'>
<head>
<?php include("header.php") ?>

<b:skin version='1.3.0'><![CDATA[
/* */
<?php include("css.php") ?>
<?php include("warnalabel.php") ?>
<?php include("cssmobile.php") ?>
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



</body>
</html>