<?php if (adsense): ?>
  <b:includable id='main'>
    <div class='widget-content'>
    <b:if cond='data:adCode'>
      <data:adCode/>
    <b:else/>
      <b:include name='defaultAdUnit'/>
    </b:if>
    </div>
  </b:includable>
<?php endif; ?>