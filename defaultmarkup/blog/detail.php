<div class='PostDetail'>
    <b:include data='x' name='postMeta'/>
    <b:include data='data:x' name='Breadcrumbs'/>
    <b:include data='data:x' name='PostTitle'/>
    
    <div class="tanggallabel">
        <b:if cond='data:view.isPost'>
        <span><b:eval expr='data:x.lastUpdated' /></span>
        <b:include  data='data:x.labels' name='PostLabel' />
        </b:if>
    </div>



    <div class='PostDetailBody'>
    <data:x.body/>           
    </div>
    <div class='clear'>
    
    </div>
    <b:include cond='data:view.isPost' name='postIklan'/>

    <b:include data='x' name='disqusx'/>
    <b:comment>
        <b:include cond='data:view.isPost' data='x' name='postDetailFooter'/>
        <b:include cond='data:view.isSingleItem' data='x' name='commentPicker'/>



    </b:comment>
    <b:include cond='data:view.isSingleItem' data='x' name='commentPicker'/>




</div>