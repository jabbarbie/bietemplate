<div>
    <b:class cond='data:view.isMultipleItems' name='Beranda'/>
    <b:loop index='i' values='data:posts' var='x'>
    <b:include data='x' name='PostMain'/>
    <b:if cond='data:x.includeAd'>
        <b:include cond='data:view.isMultipleItems and data:view.isHomepage and data:x.includeAd' data='x' name='postIklan'/>  
    </b:if>
    </b:loop>
</div>
<b:include cond='data:view.isMultipleItems and !data:view.isLabelSearch' name='Paggination'/>
