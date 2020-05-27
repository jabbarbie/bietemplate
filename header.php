<?php 
	$thumbnail = "";
	// $thumbnail = "https://2.bp.blogspot.com/-jzRScNk43hE/XRBW-4eV12I/AAAAAAAAPwU/fkL4AWCq0jUxEhCOnyxxgz16GGKCEJTFACLcBGAs/s1600/Thumbnail_Logo.jpg";
?>

<meta content='text/html; charset=utf-8' http-equiv='Content-Type'/>
<meta content='width=device-width, initial-scale=1, shrink-to-fit=yes' name='viewport'/>
<?php include('title.php') ?>

<!-- Index halaman -->
<b:if cond='data:view:isSingleItem or data:view:isHomePage'>
	<meta content='index, follow' name='robots' />
<b:elseif cond='data:view.isError'/>
  <meta content='noindex, nofollow' name='robots'/>
</b:if>

<b:if cond='data:blog.postImageThumbnailUrl'>
	<meta expr:content='data:blog.postImageThumbnailUrl' property='og:image'/>
<b:else/>
	<meta content='<?=$thumbnail?>' property='og:image'/>
</b:if>

<!-- Jika Posisi Halaman -->
<!-- single post -->
<b:if cond='data:blog.metaDescription and data:view.isSingleItem'>
	<meta expr:content='data:blog.metaDescription' property='og:description'/>  
</b:if>


<!-- Handle Thumbnail-->
<!-- View Beranda -->
<b:if cond='data:view.isMultipleItems'>
	<link href='<?= $thumbnail?>' rel='image_src'/>
	<link expr:href='data:view.featuredImage' rel='image_src' />
	<meta expr:content='data:view.featuredImage' property='og:image' />
	
	<meta content='200' property='og:image:width'/>
  <meta content='200' property='og:image:height'/>
<!-- View Post -->
<b:elseif cond='data:view.isSingleItem'/>
	<!-- with thumbnail -->
	<b:if cond='data:view.featuredImage'>
		<link expr:href='data:view.featuredImage' rel='image_src' />
		<meta expr:content='data:view.featuredImage' property='og:image' />
	
	<b:else/>
	<!-- no thumbnail -->
		<link expr:href='<?= $thumbnail?>' rel='image_src' />
		<meta expr:content='<?= $thumbnail?>' property='og:image' />
	</b:if>

	<meta content='200' property='og:image:width'/>
  <meta content='200' property='og:image:height'/>
</b:if>
<!-- end of handle thumbnail -->

<!-- Facebook selain thumbnail -->
<meta expr:content='data:blog.canonicalUrl' property='og:url'/>
<meta content='article' property='og:type'/>
<meta expr:content='data:blog.title' property='og:title'/>
<meta expr:content='data:blog.title' property='og:site_name'/>
<b:if cond='data:view.isMultipleItems'>
	<meta content='website' property='og:type'/>
<b:else/>
  <meta content='article' property='og:type'/>
</b:if>
<!-- end Facebook -->


<!-- Meta generator -->
<meta content='blogger' name='generator'/>
<!-- end Meta generator -->
<meta content="Jabbar Bie" name="author" />
<link href="Jabbar Bie" ref="author" />

<!-- dns-prefetch -->
<link href="//www.blogger.com/" rel="dns-prefetch"/>
<link href='//1.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='//2.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='//3.bp.blogspot.com/' rel='dns-prefetch'/>
<link href='//4.bp.blogspot.com/' rel='dns-prefetch'/>

<link href='//cdnjs.cloudflare.com/' rel='dns-prefetch'/>

<?php if ($disqus): ?>
<link href='//disqus.com' rel='dns-prefetch'/>
<link href='//c.disqus.com' rel='dns-prefetch'/>
<link href='//asadako-kun.disqus.com' rel='dns-prefetch'/>
<?php endif; ?>

<link href='//pagead2.googlesyndication.com' rel='dns-prefetch'/>
<link href='//fonts.googleapis.com' rel='dns-prefetch'/>
<!-- end of dns-prefetch-->

<link href='https://fonts.googleapis.com/css?family=Overpass' rel='stylesheet'/> 