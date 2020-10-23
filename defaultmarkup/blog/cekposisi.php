<b:switch var='data:blog.pageType'>
        <b:case value='index'/>
          <b:include data='x' name='Beranda'/>
        <b:case value='item'/>
          <b:include data='x' name='PostDetail'/>
        <b:case value='static_page'/>
          <b:include data='x' name='PostDetail'/>

      </b:switch>