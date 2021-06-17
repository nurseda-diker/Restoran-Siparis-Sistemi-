<html>

<head>

</head>
<style>
*{
    margin:0%;
    padding: 0%;
}

body{
    font-family: latha;
    color:white;
    background-color:#656565;
}
.content{
    width:100%;
    position: absolute;
    top:50%;
    transform: translateY(-50%);
    text-align:center ;
    color:white;
    }
.content h1{
    font-size: 50px;
    margin-top: 80px;
}
button{
    width:200px;
    padding: 15px 0;
    text-align: center;
    margin:20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    background: transparent;
    color:#fff;
    cursor:pointer;
    position:relative;
    overflow: hidden;
}
span{
    background: #009688;
    height:100%;
    width:0;
    border-radius: 25px;
    position:absolute;
    left:0;
    bottom:0;
    z-index:-1;
    transition: 0.5s;

}
button:hover span{
    width:100%;
}
button:hover{
    border:none;
}
h1{
    color:black;
}
img{
    position:absolute;
    right:20px;
    bottom:200px;
    height:400px;
   
    
}


</style>

<body>
    <?php
    if(isset($_SESSION["id"]) && $_SESSION["id"]>0){


    ?>
    <a href="logout.php"><button>Oturumu Kapat</button></a>
    <?php
    }
    else{
    ?> 
    

    <img src="chefs.jpg">
    <div class="content">
            <h1>MAKE YOUR ORDER</h1>
            <div>
                
                <a href="giris.php"><button type="button"><span></span>LOGIN</button></a>
                <a href="kayit.php"><button type="button"><span></span>SIGN UP</button></a>
            </div>
        </div>
    


        
    <?php
    }
    ?>
   
    

</body>


</html>