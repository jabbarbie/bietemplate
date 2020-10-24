const currentPage = &quot;https://bie.my.id/&quot;;




<?php if(berandaJS): ?>
const artikelJS = document.querySelector(&quot;.Beranda&quot;);
artikelJS.innerHTML = ""

function buatpost(data){
	console.log(data)
	let isiartikel = `
&lt;div class=post-outer&gt;
&lt;h3 class=&quot;PostTitle entry-title&quot;&gt;
&lt;a href=${data.link[4].href	}&gt;${data.link[4].title}&lt;/a&gt;&lt;/h3&gt;
&lt;div class=&quot;postBodyBeranda&quot;&gt;
Bagi pengguna modem usb mungkin sedikit kesusahan jika harus mengirim dan menerima sms di sistem operasi Linux, tapi jika itu di windows kita tinggal menginstall driver bawaan yang telah disediakan d…
&lt;/div&gt;
&lt;div class=&quot;postBerandaFooter&quot;&gt;
&lt;div class=&quot;labels-outer&quot;&gt;
&lt;span class=&quot;label&quot;&gt;&lt;a href=&quot;https://www.bie.my.id/search/label/Linux&quot;&gt;Linux&lt;/a&gt;&lt;/span&gt;
&lt;span class=&quot;label&quot;&gt;&lt;a href=&quot;https://www.bie.my.id/search/label/Tutorial&quot;&gt;Tutorial&lt;/a&gt;&lt;/span&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
`;

	let artikel = document.createElement(&quot;article&quot;);
	artikel.innerHTML = isiartikel;
	artikelJS.appendChild(artikel)
}
<?php endif; ?>

function jsku(e){
	
	const jumlahpostperpage = 5; 
  
    const halaman = document.getElementById(&quot;paggination&quot;);
    const post = e.feed.entry;
    
    halaman.innerHTML = &quot;&quot;;

  
    for(let i = 0; i &lt; (Math.round(post.length / jumlahpostperpage)); i++){
		<?php if(berandaJS): ?>
			buatpost(post[i]);
		<?php endif; ?>
        let span = document.createElement(&quot;span&quot;),
            a    = document.createElement(&quot;a&quot;)
        
        a.innerText = i + 1;		
        a.href = currentPage ;
  		
  		if (i &gt; 0) {
  			// karena dimulai dari 0.. maka jika page 2, post yg diambil adalah.. yg ke 5 (0,1,2,3,4) (5,6,7,8,9) (10....)
  			// 2020-06-08T15:29:00%2B07:00 getTimezoneOffset
  
  			let updatedmax = ( post[i*jumlahpostperpage].published.$t);
  			let tgl = new Date(updatedmax), 
  				timezone = tgl.getTimezoneOffset(),
  				timezones = (timezone / 60) * -1;
 			let tglfix = `${tgl.getFullYear()}-${tgl.getMonth()+1}-${tgl.getDate()}T${tgl.getHours()}:${tgl.getMinutes()}:${tgl.getSeconds()}%2B0${timezones}:00` 

  			a.href +=  `search?max-results=${jumlahpostperpage}&amp;updated-max=${tglfix}`
  		}

        span.appendChild(a);
        halaman.appendChild(span);
    }
}