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

<b:includable id='addComments'>
  <a expr:href='data:post.commentsUrl' expr:onclick='data:post.commentsUrlOnclick'>
    <b:message name='messages.postAComment'/>
  </a>
</b:includable>
                    <b:includable id='commentAuthorAvatar'>
  <div class='avatar-image-container'>
    <img class='author-avatar' expr:src='data:comment.authorAvatarSrc' height='35' width='35'/>
  </div>
</b:includable>
                    <b:includable id='commentDeleteIcon' var='comment'>
  <span expr:class='&quot;item-control &quot; + data:comment.adminClass'>
    <b:if cond='data:showCmtPopup'>
      <div class='goog-toggle-button'>
        <div class='goog-inline-block comment-action-icon'/>
      </div>
    <b:else/>
      <a class='comment-delete' expr:href='data:comment.deleteUrl' expr:title='data:messages.deleteComment'>
        <img src='https://resources.blogblog.com/img/icon_delete13.gif'/>
      </a>
    </b:if>
  </span>
</b:includable>
                    <b:includable id='commentForm' var='post'>
  <div class='comment-form'>
    <a name='comment-form'/>
    <h4 id='comment-post-message'><data:messages.postAComment/></h4>
    <b:if cond='data:this.messages.blogComment != &quot;&quot;'>
      <p><data:this.messages.blogComment/></p>
    </b:if>
    <b:include data='post' name='commentFormIframeSrc'/>
    <iframe allowtransparency='allowtransparency' class='blogger-iframe-colorize blogger-comment-from-post' expr:height='data:cmtIframeInitialHeight ?: &quot;90px&quot;' frameborder='0' id='comment-editor' name='comment-editor' src='' width='100%'/>
    <data:post.cmtfpIframe/>
    <script type='text/javascript'>
      BLOG_CMT_createIframe(&#39;<data:post.appRpcRelayPath/>&#39;);
    </script>
  </div>
</b:includable>
<b:includable id='commentFormIframeSrc' var='post'>
  <a expr:href='data:post.commentFormIframeSrc' id='comment-editor-src'/>
</b:includable>
                    <b:includable id='commentItem' var='comment'>
  <div class='comment' expr:id='&quot;c&quot; + data:comment.id'>
    <b:include cond='data:blog.enabledCommentProfileImages' name='commentAuthorAvatar'/>

    <div class='comment-block'>
      <div class='comment-author'>
        <b:if cond='data:comment.authorUrl'>
          <b:message name='messages.authorSaidWithLink'>
            <b:param expr:value='data:comment.author' name='authorName'/>
            <b:param expr:value='data:comment.authorUrl' name='authorUrl'/>
          </b:message>
        <b:else/>
          <b:message name='messages.authorSaid'>
            <b:param expr:value='data:comment.author' name='authorName'/>
          </b:message>
        </b:if>
      </div>
      <div expr:class='&quot;comment-body&quot; + (data:comment.isDeleted ? &quot; deleted&quot; : &quot;&quot;)'>
        <data:comment.body/>
      </div>
      <div class='comment-footer'>
        <span class='comment-timestamp'>
          <a expr:href='data:comment.url' title='comment permalink'>
            <data:comment.timestamp/>
          </a>
          <b:include data='comment' name='commentDeleteIcon'/>
        </span>
      </div>
    </div>
  </div>
</b:includable>


<b:includable id='commentList' var='comments'>
  <div id='comments-block'>
    <b:loop values='data:comments' var='comment'>
      <b:include data='comment' name='commentItem'/>
    </b:loop>
  </div>
</b:includable>
                    <b:includable id='commentPicker' var='post'>
  <b:if cond='data:post.showThreadedComments'>
    <b:include data='post' name='threadedComments'/>
  <b:else/>
    <b:include data='post' name='comments'/>
  </b:if>
</b:includable>



<b:includable id='comments' var='post'>
  <section expr:class='&quot;comments&quot; + (data:post.embedCommentForm ? &quot; embed&quot; : &quot;&quot;)' expr:data-num-comments='data:post.numberOfComments' id='comments'>
    <a name='comments'/>
    <b:if cond='data:post.allowComments'>

      <b:include name='commentsTitle'/>

      <div expr:id='data:widget.instanceId + &quot;_comments-block-wrapper&quot;'>
        <b:include cond='data:post.comments' data='post.comments' name='commentList'/>
      </div>

      <b:if cond='data:post.commentPagingRequired'>
        <div class='paging-control-container'>
          <b:if cond='data:post.hasOlderLinks'>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.oldestLinkUrl'>
              <data:messages.oldest/>
            </a>
            <a expr:class='data:post.oldLinkClass' expr:href='data:post.olderLinkUrl'>
              <data:messages.older/>
            </a>
          </b:if>

          <span class='comment-range-text'>
            <data:post.commentRangeText/>
          </span>

          <b:if cond='data:post.hasNewerLinks'>
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newerLinkUrl'>
              <data:messages.newer/>
            </a>
            <a expr:class='data:post.newLinkClass' expr:href='data:post.newestLinkUrl'>
              <data:messages.newest/>
            </a>
          </b:if>
        </div>
      </b:if>

      <div class='footer'>
        <b:if cond='data:post.embedCommentForm'>
          <b:if cond='data:post.allowNewComments'>
            <b:include data='post' name='commentForm'/>
          <b:else/>
            <data:post.noNewCommentsText/>
          </b:if>
        <b:else/>
          <b:if cond='data:post.allowComments'>
            <b:include data='post' name='addComments'/>
          </b:if>
        </b:if>
      </div>
    </b:if>
    <b:if cond='data:showCmtPopup'>
      <div id='comment-popup'>
        <iframe allowtransparency='allowtransparency' frameborder='0' id='comment-actions' name='comment-actions' scrolling='no'>
        </iframe>
      </div>
    </b:if>
  </section>
</b:includable>
