<b:includable id='main' var='x'>
<b:class name='widgetputih'/>
<b:include data='data:title' name='title'/>
<div class='widget-content'> 
    <div class='pops'>
    <b:loop index='i' values='data:posts' var='x'>
        <div class='isi'>
        <div expr:class='data:x.labels.first.name'/>
        
        <div class='judul'>
        
            <h4>
            <a expr:href='data:x.url'>
                <b:eval expr='data:x.title'/>                  
            </a>
            </h4>

            <b:comment>
            <div class='labelpops'>
            <b:loop index='id' values='data:x.labels' var='y'>
                <span><b:evaldata.id/> <b:evaldata:y.name/> /</span>
            </b:loop>
            </div>
            </b:comment>
        </div>

        </div>
    </b:loop>
    </div>
</div>
</b:includable>