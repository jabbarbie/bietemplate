<b:includable id='main'>
<h2 class="title"><data:title/></h2>
    <b:if cond='data:team'>
    <div class='userw'>
        <b:loop index='m' values='data:authors' var='u'>
        <div class='user'>            
            <img cond='data:u.profileLogo' expr:src='resizeImage(data:u.authorPhoto.image, 30, &quot;1:1&quot;)'/>
            <a expr:href='data:u.userUrl'><data:u.display-name/></a>
        </div>

        </b:loop>
    </div>

    </b:if>
</b:includable>