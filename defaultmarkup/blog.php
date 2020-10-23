<!-- B CONSTRUCTOR -->
<b:includable id='main'><?php include('blog/main.php')?></b:includable>
<!-- B CEK POSISI HALAMAN -->

<b:includable id='PostMain' var='x'><?php include('blog/cekposisi.php')?></b:includable>

<b:includable id='Beranda' var='x'><?php include('blog/beranda.php')?></b:includable>
<b:includable id='PostDetail' var='x'><?php include('blog/detail.php')?></b:includable>

<?php include('blog/paggination.php') ?>
<?php include("komentar.php")?>




<b:includable id='postMeta' var='post'><b:include data='post' name='postMetadataJSON'/></b:includable>
<b:includable id='postIklan' var='x'><?php include('blog/adsensedalam.php') ?></b:includable>
<b:includable id='Breadcrumbs' var='post'><?php include('blog/breadcumb.php') ?></b:includable>
<b:includable id='disqusx'><?php include('blog/disquss.php') ?></b:includable>




<!-- B Post Label / Kategori -->
<b:includable id='PostLabel' var='x'>
  <div class='label'>
    <b:loop values='data:x' var='label'>
      <span><a expr:href='data:label.url'><data:label.name/></a></span>
    </b:loop>  
  </div>
</b:includable>

<!-- B FUNGSI CEK GAMBAR -->
<b:includable id='FungsiGambar' var='pic'>
  <b:if cond='data:view.isMultipleItems or data:view.isHomepage'>
    <img expr:src='resizeImage(data:pic, 330, &quot;330:220&quot;)'/>
  </b:if>
</b:includable>

<!-- B FUNGSI POST -->
<b:includable id='FungsiPost' var='x'>
  <div>
    <b:if cond='data:view.isHomepage or data:view.isMultipleItems'>
      <b:eval cond='data:view.isHomepage' expr='data:x.snippets.long snippet {length: 200, links: false, linebreaks: false, ellipsis: true}'/>
      <b:class name='postBodyBeranda'/>
    </b:if>
  </div>
</b:includable>