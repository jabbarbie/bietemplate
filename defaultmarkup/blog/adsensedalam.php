<?php if (adsense): ?>
  <b:if cond='!data:view.isPreview'>
    <div class='postIklan'>          
    <!-- Jika bukan dalam mode preview -->
    <b:if cond='data:this.adCode or data:this.adClientId or data:blog.adsenseClientId'>
      <!-- Jika Iklan tersedia / siap untuk ditayangkan -->
      <b:if cond='data:this.adCode != &quot;&quot; '>
        <!-- Jika code adsense tidak kosong -->
        <data:this.adCode/>
      <b:else/>
        <b:include name='defaultAdUnit'/>
        <!-- defaultAdUnit fungsi bawaan -->
      </b:if>
      
    <b:else/>
      <!-- Jika iklan 404 -->
      <div class='postIklan404'>
        <span><b:message name='messages.adsGoHere'/></span>
      </div>
    </b:if>
    </div>
  </b:if>
<?php endif ;?>