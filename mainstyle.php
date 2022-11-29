<?php
header('content-type: text/css;') //connect css in php



 ?>
 *{

 margin: 0; padding:0; box-sizing: border-box;
 font-family: 'Montserrat', sans-serif;
}

.site-header {
 width: 100%;
 height: 100vh;
 background: #0f8a9d;
 background: linear-gradient(57deg, #00C6A7 , #1E4D92 );
 /*clip-path: polygon(0% 0%, 100% 0%, 100% 80%, 0% 100%);*/
}


nav{
 width: 100%; height: 100px;
 /*background: linear-gradient(180deg, #f5683d, yellow );*/
 display: flex; color: white;

}

.logo{
 width: 50%;
 height: 100px;
}

.logo h1{
 line-height: 100px;
 font-family: "Times New Roman", Times, serif;
 font-weight: bold;
 padding-left: 50px;
}

.menu{
 width: 50%; height: 100px;
}

.menu ul{
 width: 100%;
 height: 100px;
 display: flex;
 flex-direction: row;
 justify-content: space-around;
 align-items:  center;
}

.menu ul li{
 list-style: none;
 font-size: 12px;
 font-weight: bold;
text-transform: uppercase;
}
.menu ul li a{
  text-decoration: none;
  color: #fff;
}
section{ display: flex;  }

.leftside { width: 45%; height: auto; overflow: hidden; margin-top: 20px;}

.leftside img{
  padding-left: 40px;
  width: 500px;
  height: 533px;
  box-shadow: 2px 1px 10px 0px ;
  animation: slider 9s infinite linear;
}
@keyframe slider{
  0% {background-image: url('https://www.w3schools.com/css/img_5terre.jpg'); }
  35% {background-image:url('https://www.w3schools.com/css/img_forest.jpg');}
  75% {background-image: url('https://www.w3schools.com/css/img_lights.jpg');}
}

.rightside{ width: 55%; height: 300px; color: white; text-align: center; margin-top: 80px; padding: 40px;}

.rightside h1{ text-align: center;
    color: #ffffff;
    font-size: 50px;
    font-weight: 900;
    text-transform: uppercase; }

.rightside p {
    font-size: 1.1rem; padding: 30px 0;
  }
.rightside button{   font-size: 17px;
    font-weight: 600;
    color: white;
    text-transform: uppercase;
    background: linear-gradient(57deg, #00C6A7 , #1E4D92 );
    border-radius: 4px 4px 4px 4px;
    padding: 20px 35px ;
}
.rightside button:hover{
      background: linear-gradient(57deg, #1E4D92, #00C6A7 );
}
.rightside button a{
      color: white;
      text-decoration: none;
    }
