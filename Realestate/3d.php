<html>
<head>
<style>

title {
  text-align: center;
  color: #333;
  font: 24px Helvetica, Arial, serif;
}
.creds {
  text-align: center;
  color: #666;
  font: 12px Helvetica, Arial, serif;
}
.creds a {
  color: #000;
  text-decoration: none;
  border-bottom: 1px dotted #000;
}
.three-d-container{
margin:30px auto;
width:300px;
height:300px;
border-radius: 3px;
position:relative;
-webkit-perspective:1000px;
   -moz-perspective:1000px;
    -ms-perspective:1000px;
     -o-perspective:1000px;
        perspective:1000px;
-webkit-box-shadow:0 20px 60px rgba(0,0,0,0.2),                       0 0 40px rgba(0,0,0,0.2) inset;
   -moz-box-shadow:0 20px 60px rgba(0,0,0,0.2),                       0 0 40px rgba(0,0,0,0.2) inset;
        box-shadow:0 20px 60px rgba(0,0,0,0.2),                       0 0 40px rgba(0,0,0,0.2) inset;
}
.three-d-cube{
width:100%;
height:100%;
position:absolute;
-webkit-transition:-webkit-transform 1s;
   -moz-transition:   -moz-transform 1s;
     -o-transition:     -o-transform 1s;
        transition:        transform 1s;
-webkit-transform-style:preserve-3d;
   -moz-transform-style:preserve-3d;
    -ms-transform-style:preserve-3d;
     -o-transform-style:preserve-3d;
        transform-style:preserve-3d;
-webkit-transform:translateZ( -150px );
   -moz-transform:translateZ( -150px );
    -ms-transform:translateZ( -150px );
     -o-transform:translateZ( -150px );
        transform:translateZ( -150px );
}
.three-d-cube .three-d-item{
width:100%;
height:100%;
display:block;
margin:0;
position:absolute;
}
.three-d-cube .three-d-item img{
width:100%;
height:100%;
display:block;
margin:0;
}
.three-d-item:nth-child(1){
-webkit-transform:rotateY(   0deg ) translateZ( 150px );
   -moz-transform:rotateY(   0deg ) translateZ( 150px );
    -ms-transform:rotateY(   0deg ) translateZ( 150px );
     -o-transform:rotateY(   0deg ) translateZ( 150px );
        transform:rotateY(   0deg ) translateZ( 150px );
}
.three-d-item:nth-child(2){
-webkit-transform:rotateX( 180deg ) translateZ( 150px );
   -moz-transform:rotateX( 180deg ) translateZ( 150px );
    -ms-transform:rotateX( 180deg ) translateZ( 150px );
     -o-transform:rotateX( 180deg ) translateZ( 150px );
        transform:rotateX( 180deg ) translateZ( 150px );
}
.three-d-item:nth-child(3){
-webkit-transform:rotateY(  90deg ) translateZ( 150px );
   -moz-transform:rotateY(  90deg ) translateZ( 150px );
    -ms-transform:rotateY(  90deg ) translateZ( 150px );
     -o-transform:rotateY(  90deg ) translateZ( 150px );
        transform:rotateY(  90deg ) translateZ( 150px );
}
.three-d-item:nth-child(4){
-webkit-transform:rotateY( -90deg ) translateZ( 150px );
   -moz-transform:rotateY( -90deg ) translateZ( 150px );
    -ms-transform:rotateY( -90deg ) translateZ( 150px );
     -o-transform:rotateY( -90deg ) translateZ( 150px );
        transform:rotateY( -90deg ) translateZ( 150px );
}
.three-d-item:nth-child(5){
-webkit-transform:rotateX(  90deg ) translateZ( 150px );
   -moz-transform:rotateX(  90deg ) translateZ( 150px );
    -ms-transform:rotateX(  90deg ) translateZ( 150px );
     -o-transform:rotateX(  90deg ) translateZ( 150px );
        transform:rotateX(  90deg ) translateZ( 150px );
}
.three-d-item:nth-child(6){
-webkit-transform:rotateX( -90deg ) translateZ( 150px );
   -moz-transform:rotateX( -90deg ) translateZ( 150px );
    -ms-transform:rotateX( -90deg ) translateZ( 150px );
     -o-transform:rotateX( -90deg ) translateZ( 150px );
        transform:rotateX( -90deg ) translateZ( 150px );
}
.a:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateY(    0deg );
   -moz-transform:translateZ( -150px ) rotateY(    0deg );
    -ms-transform:translateZ( -150px ) rotateY(    0deg );
     -o-transform:translateZ( -150px ) rotateY(    0deg );
        transform:translateZ( -150px ) rotateY(    0deg );
}
.b:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateX( -180deg );
   -moz-transform:translateZ( -150px ) rotateX( -180deg );
    -ms-transform:translateZ( -150px ) rotateX( -180deg );
     -o-transform:translateZ( -150px ) rotateX( -180deg );
        transform:translateZ( -150px ) rotateX( -180deg );
}
.c:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateY(  -90deg );
   -moz-transform:translateZ( -150px ) rotateY(  -90deg );
    -ms-transform:translateZ( -150px ) rotateY(  -90deg );
     -o-transform:translateZ( -150px ) rotateY(  -90deg );
        transform:translateZ( -150px ) rotateY(  -90deg );
}
.d:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateY(   90deg );
   -moz-transform:translateZ( -150px ) rotateY(   90deg );
    -ms-transform:translateZ( -150px ) rotateY(   90deg );
     -o-transform:translateZ( -150px ) rotateY(   90deg );
        transform:translateZ( -150px ) rotateY(   90deg );
}
.e:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateX(  -90deg );
   -moz-transform:translateZ( -150px ) rotateX(  -90deg );
    -ms-transform:translateZ( -150px ) rotateX(  -90deg );
     -o-transform:translateZ( -150px ) rotateX(  -90deg );
        transform:translateZ( -150px ) rotateX(  -90deg );
}
.f:checked ~ .three-d-cube{
-webkit-transform:translateZ( -150px ) rotateX(   90deg );
   -moz-transform:translateZ( -150px ) rotateX(   90deg );
    -ms-transform:translateZ( -150px ) rotateX(   90deg );
     -o-transform:translateZ( -150px ) rotateX(   90deg );
        transform:translateZ( -150px ) rotateX(   90deg );
}
.three-d-bullet{
margin:350px 10px 0 0;
float:left;
}
.three-d-bullet:first-child{
margin:350px 10px 0 88px;
}


</style>
</head>

<body>



<h1 class="title">3D slider with pure CSS3</h1>
<p class="creds">
  Created by <a target="_blank" href="https://twitter.com/fornyhucker">fornyhucker</a></p>
<section class="three-d-container">
            <input type="radio" checked class="three-d-bullet a" name="three-d">
            <input type="radio" class="three-d-bullet b" name="three-d">
            <input type="radio" class="three-d-bullet c" name="three-d">
            <input type="radio" class="three-d-bullet d" name="three-d">
            <input type="radio" class="three-d-bullet e" name="three-d">
            <input type="radio" class="three-d-bullet f" name="three-d">
            <div class="three-d-cube">
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/1" alt="">
                </figure>
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/2" alt="">
                </figure>
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/3" alt="">
                </figure>
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/4" alt="">
                </figure>
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/5" alt="">
                </figure>
                <figure class="three-d-item">
                    <img src="http://lorempixel.com/500/500/food/6" alt="">
                </figure>
            </div>
        </section>




</body>

</html>
