<?php if ($disqus): ?>

<?php include('js/lazy.php') ?>
<?php // include('js/lazyversijs.php') ?>

<?php endif; ?>

const currentPage = "https://bie.my.id/";

function jsku(e){
	const jumlahpostperpage = 5; 
  
    const halaman = document.getElementById("paggination");
    const post = e.feed.entry;
    
    halaman.innerHTML = "";

  
    for(let i = 0; i &lt; (Math.round(post.length / jumlahpostperpage)); i++){
  		console.log(post[i].title)
        let span = document.createElement("span"),
            a    = document.createElement("a")
        
        a.innerText = i + 1;		
        a.href = currentPage ;
  		
  		if (i > 0) {
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