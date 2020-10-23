<article>
      
      <b:comment>
      <?php if ($postwithimage): ?>        
        <div class='PostBerandaImage'>
          <b:if cond='data:x.featuredImage'>
            <b:include data='data:x.featuredImage' name='FungsiGambar'/>     
          </b:if>
        </div>
      <?php endif; ?>
      </b:comment>

      <div class="post-outer">
        <!-- ThumbnailPost Index-->
        <b:include data='data:x' name='PostTitle'/>
        <b:include data='data:x' name='FungsiPost'/>


        <b:comment>
            <div class='date'><b:eval expr='data:x.date format "MMM dd" ' /></div>
          </b:comment>


        <div class="postBerandaFooter">
          
          <div class="labels-outer">
            <b:loop values='data:x.labels' var='label'>
              <span class='label'><a expr:href='data:label.url'><data:label.name/></a></span>
            </b:loop>  
          </div>
        </div>

      </div>
        <!-- Snippet Body Post Index-->

    </article>