<b:includable id='main'>
<b:include data='data:title' name='title'/>
<div class="widget-content">

    <b:class name='bels'/>
    <b:class name='widgetputih'/>
    
    <ul class="labelcloud">
    <b:loop index='i' values='data:labels' var='l'>
        <li expr:class='data:l.name'><a expr:href='data:l.url'>
        <data:l.name/></a></li>
        </b:loop> 
    </ul>
</div>
</b:includable>