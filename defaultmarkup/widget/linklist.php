<b:includable id='main' var='x'>
  <h2 class="title">Rekomendasi</h2>
  <ul>
    <b:loop values='data:links' var='link'>
      <li><a expr:href='data:link.target'><data:link.name/></a></li>
    </b:loop>
  </ul>
  </b:includable>