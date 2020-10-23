<!-- B Paggination -->
<b:includable id='Paggination'>
    <div id='paggination'>
      
      <span><a href="">1</a></span>
      <span><a href="">2</a></span>
      <span><a href="">3</a></span>
      
      <b:comment>
        <b:include cond='data:newerPageUrl' name='previousPageLink'/>
        <b:include cond='data:olderPageUrl' name='nextPageLink'/>
        <b:include cond='data:view.url != data:blog.homepageUrl' name='homePageLink'/>
      </b:comment>
    </div>
  </b:includable>
  <b:includable id='previousPageLink'>
    <a class='prev' expr:href='data:newerPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-newer-link&quot;' expr:title='data:messages.newerPosts'>
     <i class='fas fa-arrow-alt-circle-left'/> Sebelumnya
    </a>
  </b:includable>
  <b:includable id='nextPageLink'>
    <a class='next' expr:href='data:olderPageUrl' expr:id='data:widget.instanceId + &quot;_blog-pager-older-link&quot;' expr:title='data:messages.olderPosts'>
      Selanjutnya <i class='fas fa-arrow-alt-circle-right'/>
    </a>
  </b:includable>
  <b:includable id='homePageLink'>
    <b:comment>Disabled</b:comment> 
  </b:includable>