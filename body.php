<b:class cond='data:view.isMobile' name='mobilex' />
<b:class cond='data:view.isPage' name='page-template-default page'/>
<b:class cond='data:view.isPost' name='post-template-default single single-format-standard'/>
<b:class cond='data:view.isHomepage' name='home blog'/>
<b:class cond='data:view.isSearch' name='search search-results'/>
<b:class cond='data:view.isLabelSearch' name='archive category'/>

<div itemscope='itemscope' itemtype='http://schema.org/Blog'>
  <div id="wrapper">
    <div class="atas">

    <header>
      <div id="headerputih">
        <h1><data:blog.title/></h1>
        <p><data:blog.description/></p>
      </div>

    </header>
  
    	<nav id="nav">
        <a onclick="bukasitik()" class='menuhp'><i class="fa fa-home"></i> Menu</a>
        <ul class="nav" >
          <li><a expr:href="data:blog.homepageUrl" class='active'>Home</a></li>
<!--         
          <li><a href="/p/blog-page.html">About Us</a></li>
          <li><a href="/search/label/Manhwa">Manhwa</a></li>
          <li><a href="/search/label/Manhua">Manhua</a></li>
          <li><a href="/search/label/Rekomendasi" >Rekomendasi</a></li>
 -->        
        </ul>
        <div class="pencarian menuhp">
          <form action="/search"><input type="text" placeholder="Pencarian..." name="q" /></form>
        </div>
      </nav>
    </div>

		<main>
			<b:section id='main' showaddelement='yes'>
      	<b:widget id='Blog1' type='Blog'/>
    	</b:section>
		</main>
		
    <aside>
     
			<b:section id='aside' showaddelement='yes'>
				<b:widget id='PopularPosts1' type='PopularPosts' title='Artikel Teratas' />
				<b:widget id='Label1' type='Label' title="Kategori" />


			</b:section>

    <b:if cond="data:view.isSingleItem or data:view.isPost">
      <b:section id='iklansidebar' showaddelement='no'>
        <?php if ($adsense): ?>
        <b:widget id='AdSense1' type='AdSense' title="Iklan Sidebar">
          <b:widget-settings>          
            <b:widget-setting name='style.layout'>300x1050</b:widget-setting>
            <b:widget-setting name='style.unittype'>TextAndImage</b:widget-setting>
          </b:widget-settings>
        </b:widget>    
      <?php endif; ?>
      </b:section>
    </b:if>
          
		</aside>
    
  </div>  
</div> <!-- End of Wrapper -->
  <footer>
    <div class=''>
   
    </div>
    
    <div class="creditw">
      <div class="copyright">
        <h2>Copyright 2019 <a href="mailto:krotopal@gmail.com">JABBARBIE</a> All Right Reserved - Powered by <a href='https://blogger.com'>BLOGGER</a></h2>  
      </div>
      <div class="menuf">
        <a href="/p/about.html">About Me</a>
        <a href="/p/contact-form.html">Contact </a>
        <a href="/p/privacy-policy.html">Privacy Policy</a>
        <a href="/p/disclaimer.html">Disclaimer</a>
        <a href="/p/sitemap.html">Sitemap</a>
      </div>
    </div>
  </footer>

<!-- JS -->
