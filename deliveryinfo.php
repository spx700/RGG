<?php
session_start();
if($_SESSION['CName']==NULL)
{
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico">
    <title>Order Placed!</title>
</head>
<body>
<div class=page>
<div class=pic>
<img src="images/orderplaced.png" width=320px height=320px>
</div>
<div class = 'heading'>
Thank you for shopping! Your order will be delivered within 2 hours. Pay the delivery man by cash.
</div>
</div>
<!-- <a href='home.php' class="back"> <div id="backbutton"> BACK </div> </a> -->
<a href="shopping.php"><div id=backbutton><img src="images/back.png"  width=61.5px height=61.5px></div></a>
<a href="logout.php"><div id=logoutbutton><img src="images/logout.png"  width=61.5px height=61.5px></div></a>




<div id=footText>
                        <span id=copyright>&copy;</span>2019 SANTOSH PANDEY  |  ALL RIGHTS RESERVED  |  RGG&#x2122;
                </div>

</body>
</html>


<style>
@font-face { font-family: "XiaoWei"; 
    src: url('fonts/XiaoWei.ttf'); } 
@font-face { font-family: "Comfortaa";
    src: url('fonts/Comfortaa.ttf'); }
@font-face {font-family: 'creteround';
    src:url('fonts/Crete_Round/CreteRound-Regular.ttf');}
@font-face {font-family: 'OldStandard';
    src:url('fonts/Old Standard/OldStandardTT-Regular.ttf');}

    body {
    /* margin:0;
    background-image: url("background-images/green-bg.jpg");
    background-size: 120vmax;
    background-attachment: fixed; */
   
}

.page{
    position:absolute;
    width:fit-content;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);

}
.heading{

    margin-top:2vw;
    font-family:comfortaa;
    color:orangered;
    width:80vw;
    text-align:center;
    font-size:60px;
    font-weight:800;

    
   
}
.pic{
    width:320px;
    height:320px;
    margin:0 auto;

}

#backbutton{
    
    display:inline;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    left:2vw;
    top:0.4vw;    
    width:60px;
    height:60px;
}

#backbutton:active{
    transform:translateY(2px);  
    
}

#logoutbutton{
    
    display:inline;
    position:absolute;
    margin:35px auto;
    cursor: pointer;
    right:2vw;
    top:0.4vw;    
    width:60px;
    height:60px;
}

#logoutbutton:active{
    transform:translateY(2px);  
    
}



/*This is the footer...which contains information about the author and copywright info*/
#footText {
    color:white;
    position:fixed;
    bottom:0;
    left:0;
    right:0;
    background-image: linear-gradient(to right,rgb(0,0,0,.5),rgb(0,0,0,.2),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7),rgb( 0, 0,0,0.7),rgb(0,0,0,.2),rgb(0,0,0,.5));
    font-family: xiaowei;
    text-align: center;
    font-size: 14px;
    letter-spacing: 7px;
    padding: 2px;
    margin: 0 4px;
    margin-bottom: 2px;
    margin-top: 1vw;
    border-radius: 10px;
    text-shadow:0px 0px 50px black;
}
#copyright{
    font-size: 18px;
    vertical-align: -.75px;
    text-shadow:0px 0px 10px black;
 }
 
</style>