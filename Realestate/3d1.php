<html>
<head>
<style>
@mixin tab($col,$tabPos){
  &::after{
    content:'';     
    position:absolute;
    width:5vw;
    height:25vh;
    background:$col;
    border-radius:0 20px 20px 0;
    top:$tabPos;
    right:-4vw;
  }
}

$col1: #E6B098;
$col2: #CC4452;
$col3: #723147;
$col4: #31152B;

html,body{
  height:100%;
  margin:0;
}

.tab{
  height:100%;
  position:absolute;
  box-shadow:6px 0px 6px rgba(0,0,0,0.3);
  transition: all 0.5s ease;
  &:hover ~ div{
    transform:translateX(-80vw);
  }
}

#tab0{
  @extend .tab;
  width:100vw;
  background:black;
}

#tab1{
  @extend .tab;
  width:95vw;
  background:$col4;
  background: url(Desert.jpg);
}

#tab2{
  @extend .tab;
  width:90vw;
  background:$col3;
   background: url(Desert.jpg);
}

#tab3{
  @extend .tab;
  width:85vw;
  background:$col2;
  background: url(Desert.jpg);
}

#tab4{
  @extend .tab;
  width:80vw;
  background:$col1;
   background: url(Desert.jpg);
}

</style>
</head>
<body>
<div id="tab0"></div>
<div id="tab1"></div>
<div id="tab2"></div>
<div id="tab3"></div>
<div id="tab4"></div>
</body>
</html>