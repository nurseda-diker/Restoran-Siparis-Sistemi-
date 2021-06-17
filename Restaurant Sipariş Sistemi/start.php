<?php 
include 'connect.php';
?>

<!<!DOCTYPE html>
<html>
    <head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" href="start.css">
          
    </head>  

    <body>
        <div class="login">
            <div class="login-screen">
                <div class="title">
                <h1>Giriş Yap</h1>
                </div>
            <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="mail" class="login-area" placeholder="Mail" id="login-mail"></input>
                        <label class="login-area-icon fui-user" for="login-mail"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-area" placeholder="Şifre" id="login-pass"></input>
                        <label class="login-area-icon fui-user" for="login-pass"></label>
                    </div>
                    <button href="giris.php" name="uyegiris" class="btn">Giriş Yap</button>
                    
                </div>
            </form>
            <a href="kayit.php"><button class="btn" name="kayit">Kayıt Ol</button></a>
                
            </div>
            
        </div>
        
    </body>
    
    
    
</html>

 

