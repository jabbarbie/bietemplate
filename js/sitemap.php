function sitemapku(json){
  // console.log(json);
  const feeds = json.feed;
  // const ul    = document.createElement("ul");
  document.write("<ul>");
  feeds.category.forEach(kategori => {
    // let li = document.createElement("li");
    // li.textContent = kategori;
    // ul.appendChild(li);
    // const cek = `https://asadako-kun.blogspot.com/feeds/posts/default/-/${kategori.term}?orderby=published&amp;amp;max-results=50&amp;alt=json`;
    // fetch(cek).then(j => j.json()).then(d => {
      // console.log(d.feed.entry);
      // d.feed.entry.forEach(judul => {
        // document.write("<ul>");
          // document.write(`<li><a href="${judul.link[2].href}">${judul.link[2].title}</a></li>`);
        // console.log(judul.link[2].title);
        // console.log(judul.link[2].href);
        // document.write("<li>" + judul.link[2].title + "</li>");

        // document.write("</ul>");

      // })      
    // })
    // console.log(kategori);
    document.write(`<li>${kategori.term}</li>`);
  })
  document.write("</ul>");
  // for (let i = 0; i &lt;=numposts; i++){
  //   let entry = json.feed.entry[i];
  //   let posttitle = entry.title.$t;
  //   let posturl;
    
  //   if (i == json.feed.entry.length) break;
    
  //   for (let k = 0; k &lt;=entry.link.length; k++){
  //     if (entry.link[k].rel == 'alternate'){
  //       posturl = entry.link[k].href;break;
  //     }
  //   }
        
  //   posttitle = posttitle.link(posturl);
  //   if (standardstyling) document.write('<li>');
    
  //   document.write(posttitle);
  // }
  
  // if (standardstyling) document.write('</li>');
}