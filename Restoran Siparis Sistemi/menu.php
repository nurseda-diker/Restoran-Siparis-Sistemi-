<?php
    session_start();
    
    
?>
<html>


<head>

</head>
<style>
    body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
    background:#D291BC;
   
}
a{
    transition: all 0.5s;
    text-decoration: none;
    color:#fff;

}
img{
    width:100%;
    transition:all 0.5s;
}
section{
    padding:70px 0;
    margin-top:50px;
    background:url();
    text-align:center;
}
.container{
    max-width: 1200px;
    width:100%;
    margin:0 auto;
}
main{
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-gap:30px;
    margin:30px 15px 0px 15px;
}
header{
    width:70%;
    margin:0 auto;
}
header h1{
    margin:0;
    font-size:50;
    color:white;
}
.card{
    position:relative;
    overflow: hidden;
    max-height: 580px;
    height:100%;
    box-shadow: 0 2px 10px #ccc;
    transition:all 0.5s;
}
.card:hover{
    box-shadow: 0 2px 10px #ccc;
    transition:all 0.5s;
}

.card:hover img{
    transform:scale(1.1);
    transition:all 0.4s;
}
.content{
    position:absolute;
    left:0;
    bottom:-45px;
    width:100%;
    color:#fff;
    padding:10px 5px;
    transition:all 0.5s;
}

.content h3{
    font-size:20px;
    font-weight:500;
    margin:0;
    color:#FF005C;
    
}

.content h3  span{
    display:block;
    font-size:60%;
    margin-top:5px;
    font-weight:600;
    color:rgb(52,73,94,1);
}

.card:hover .content{
    bottom:0;
    transition:all 0.5s;
}
.content a{
    font-size:14px;
    font-weight:50;
}
.content .btn{
    display:block;
    padding:5px 10px;
    border:1px solid #F29191;
    border-radius:3px;
    font-weight:400;


}
.content .btn:hover{
    background:rgba(52,152,219,1);
    transition:all 0.5s;
    text-decoration:none;
}
.content a:hover{
    text-decoration:underline;
}
@media(max-width:992px){
    main{
        grid-template-column:repeat(3,ifr);
        grid-gap:20px;
    }
}
@media(max-width:767px){
    main{
        grid-template-column:repeat(2,ifr);
        grid-gap:15px;
    }
    header{
        width:95%;
    }
    .content{
        bottom:0;
    }
}


@media(max-width:500px){
    main{
        grid-template-columns:repeat(3,ifr);

    }
}
button{
    width:200px;
    padding: 15px 0;
    text-align: center;
    margin:20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid #009688;
    
    color:#520556;
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


</style>


<body>

    <section>
        <div class="container">
            <header>
                <h1>MENU</h1>
            </header>
            <main>
                <div class="card">
                    <img src="cheff.jpg">
                    <div class="content">
                    <a href="starter.php" class="btn"><h3>Başlangıç Yemekleri<span></span></h3></a>
                </div>  
                </div>
                <div class="card">
                    <img src="cheff.jpg">
                    <div class="content">
                    <a href="maindish.php" class="btn"><h3>Ana Yemekler<span></span></h3></a>
                </div>  
                </div>
                <div class="card">
                    <img src="cheff.jpg">
                    <div class="content">
                    <a href="desserts.php" class="btn"><h3>Tatlılar<span></span></h3></a>
                </div>  
                </div>
                <div class="card">
                    <img src="cheff.jpg">
                    <div class="content">
                    <a href="drink.php" class="btn"><h3>İçecekler<span></span></h3></a>
                </div>  
                </div>
            </main>

        </div>

    </section>

    <div style="float:right">

        <?php
        if($_SESSION['mail']) {
        ?>
        <a href="logout.php"><button>Oturumu Kapat</button></>
        <?php
        }
        ?>
        
        </div>
        
        


</body>


</html>