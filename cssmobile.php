
@media (max-width: 1024px){
#wrapper {width: 90%}
footer{width: 90%}

}
@media (max-width: 992px){
body {font-size: 16px}    
#wrapper {width: 100%; grid-gap: 0px; padding: 0}
main {grid-column: 1 / 4; padding: 1em 0; }
aside {grid-row: 3; grid-column: 1 / 4}
.Beranda {grid-gap: 0.5em}

.PostTitle a {font-size: 0.7em; text-align: center; line-height: 1.5}
.postLabelBeranda {line-height: 1.5; font-size: 0.7em}
.PostKanan {padding: 0 5px}
.postBodyBeranda {display: none;}

.PostDetail {
  padding: 0 0.5em;
}
.PostDetailBody {
  font-size: 1.2em; 
  line-height: 2;
}
.creditw { display: none}

#startx {margin: 1em}
footer {grid-row: 4; height: auto; width: 100%}
footer:after {display: none;}
#footer {flex-direction: column; min-height: 220px}
.container {width: 100%}
.creditw {flex-direction: column}
.creditw, .menuf {text-align: center}

ol.rekomendasi {
  list-style: inside decimal;
/*    padding-left: 0em;*/
}
.rekomendasi li {
  margin: 0;
  padding: 0;
  border-top: 1px solid #000;
  border-bottom: 1px solid #000;
}
#detail img {
  flex: 2;
  width: 100%;
  max-width: 250px !important;
  margin: auto;
  padding: 0.4em;
  border: 1px solid #ddd;
}
.rekomendasi p {line-height: 1.5em; font-size: 0.9em; margin: 0.5em 0}
.rekomendasi span {
  color: #000;
}
.rekomendasi img {
  width: 100%;
  height: 100%;
}

aside .widget {
  margin: 0.5em 0.5em;
  /*box-shadow: 0 2px 2px rgba(0,0,0,0.16);*/

}
.widget .title {
  background-color: $maincolor;
  border-top-left-radius: 0.4em;
  border-top-right-radius: 0.4em;
}
aside .widget h3 {
  text-align: center;
  
}

}
@media (max-width: 768px){
header {display: none;}
body {background-color: white}
#wrapper {width: 100%;}
.nav a {
  overflow-y: scroll;
}   
.nav li{
  flex: 0 0 30%;    
}
#detail {
  flex-direction: column;
}
.informasi {width: 100%; font-size: 0.9em; margin: 1em 0}
.thumbpost {
  width: 100%
  margin: auto;
}
#detail img {
  max-height: 100%;
}
/*! Tablet - Pablet 
.post {flex-direction: column; max-height: 100vh;}
article {margin: 0}

.nav {display: none;}
.menuhp {display: block; background-color: #4CAF50}    
.nav {flex-wrap: wrap;}
.nav li {flex: 0 50%;}

#nav {flex-wrap: wrap; flex-direction: column;}
#nav form > input[type="text"]{
  width: 100%;
}
.wrapper {width: 100%}      

.bukasitik {
  display: flex;
}

/*! End Menu HP */
}
@media (max-width: 576px; background-color: green){
/*! HP */
}
