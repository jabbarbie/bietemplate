<b:includable id='commentsLink'>
    <a class='comment-link' expr:href='data:post.commentsUrl' expr:onclick='data:post.commentsUrlOnclick'>
        <b:include data='{ iconClass: &quot;touch-icon&quot; }' name='commentIcon'/>
        <span class='num_comments'>
        <b:if cond='data:post.numberOfComments &gt; 0'>
            <b:message name='messages.numberOfComments'>
            <b:param expr:value='data:post.numberOfComments' name='numComments'/>
            </b:message>
        <b:else/>
            <data:messages.postAComment/>
        </b:if>
        </span>
    </a>
</b:includable>

<!-- B Judul Post-->
<b:includable id='PostTitle' var='x'>
    <b:if cond='data:view.isMultipleItems'>
        <h3 class='PostTitle entry-title'><a expr:href='data:x.url'><data:x.title/></a></h3>
    <b:else/>
        <h1 class='PostTitle entry-title'><data:x.title/></h1>
    </b:if>
</b:includable>
