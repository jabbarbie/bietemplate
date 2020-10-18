<b:class cond='data:view.isMobile' name='mobilex' />
<b:class cond='data:view.isPage' name='page-template-default page'/>
<b:class cond='data:view.isPost' name='post-template-default single single-format-standard'/>
<b:class cond='data:view.isHomepage' name='home blog'/>
<b:class cond='data:view.isSearch' name='search search-results'/>
<b:class cond='data:view.isLabelSearch' name='archive category'/>

<div itemscope='itemscope' itemtype='http://schema.org/Blog'>

  <div id="wrapper">
    <header>
      <nav>
          <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/detail.html">About</a></li>
              <li><a href="http://">Project</a></li>
              <li><a href="http://">Source Code</a></li>
              <li><a href="http://">Tutorial</a></li>
              <li><a href="http://">Galery</a></li>
          </ul>

          <div id='sosialmedia'>
              <a href='https://fb.me/faisal.kaskuserholic' target='_blank'>
                <img  src='https://3.bp.blogspot.com/-djgio4rJu8k/XtNebPfZt0I/AAAAAAAAQ10/9ySdIsGPffMVdT-NfOzUSAIibI3x2wY1wCNcBGAsYHQ/s1600/iconfinder_Logo_facebook_6214511%2B%25281%2529.png' />
              </a>
              <a href='https://github.com/jabbarbie' target='_blank'>
                <img  src='https://3.bp.blogspot.com/-ybxabY-CkBE/XtNeYyua20I/AAAAAAAAQ1Q/94uJ9gPKiZs6ObxBiniHDNz3jtbxJX1FACNcBGAsYHQ/s1600/iconfinder_Logo_Github_6214513.png' />
              </a>
              <a href='mailto:krotopal@gmail.com' target='_blank'>
                <img  src='https://4.bp.blogspot.com/--ftMQ3lPBcw/XtNeZoM_C8I/AAAAAAAAQ1U/JLjML-RNIMs1jYPQFzhcHpPKpL6YgN5TgCNcBGAsYHQ/s1600/iconfinder_Logo_Gmail_envelope_letter_email_6214507.png' />
              </a>
              <a href='https://instagram.com/biejabbar' target='_blank'>
                <img  src='https://2.bp.blogspot.com/-AjOR3h-WdfU/XtNeZ73evmI/AAAAAAAAQ1Y/ceLSuXgkmkAn6YbRCykkmiYwBkeNprqpQCNcBGAsYHQ/s1600/iconfinder_Logo_Instagram_6214515.png' />
              </a>
              <a href='https://www.youtube.com/channel/UC0RoxVXhgg8koMrQCkZ68sg?view_as=subscriber' target='_blank'>
                <img  src='https://2.bp.blogspot.com/-v4vvESJotWI/XtNeaxbx2nI/AAAAAAAAQ1w/CoFR5AzEt8gs2v_E55E0BfytI_xUDDt8ACNcBGAsYHQ/s1600/iconfinder_Logo_Youtube_6214533.png' />
              </a>
          </div>
      </nav>
      </header>
      
		<main>
			<b:section id='main' showaddelement='yes'>
      	<b:widget id='Blog1' type='Blog'/>
      </b:section>
      
		</main>
		
    <aside>
      <form expr:action='data:blog.searchUrl'>
        <b:attr cond='not data:view.isPreview' name='target' value='_top'/>
        <b:include name='urlParamsAsFormInput'/>
        <div class='search-input'>
          <input type='search' autocomplete='off' expr:aria-label='data:messages.searchThisBlog'  expr:value='data:view.isSearch ? data:view.search.query.escaped : &quot;&quot;' name='q' placeholder="Ketik apapun di sini untuk Pencarian" />
        </div>
      </form>
              
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
    
  
  <footer>
    <ul>
      <li>Template Created By <a href="https://bie.my.id">JABBARBIE</a> 2020 - Powered by BLOGGER</li>
      <li>
          <ul>
              <li>
                  <a href="http://">About</a>
              </li>
              <li>
                  <a href="http://">Contact</a>
              </li>
              <li>
                  <a href="http://">Disclammer</a>
              </li>
              <li>
                  <a href="">Privacy Policy</a>
              </li>
          </ul>
      </li>
    </ul>
  </footer>

  </div><!-- End of Wrapper -->
</div> 


<!-- JS -->
