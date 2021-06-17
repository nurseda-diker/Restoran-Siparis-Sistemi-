<?php 
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Giriş Yap</title>
    <link rel="stylesheet" type="text/css" href="start.css"></link>
           
    </head>  

    <body>
        <div class="login">
            <div class="login-screen">
                <div class="title">
                <h1>Kayıt Ol</h1>
                </div>
            <form action="islem.php" method="post">
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="username" class="login-area" placeholder="Kullanıcı Adı" id="login-name">
                        <label class="login-area-icon fui-user" for="login-name"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" name="lastname" class="login-area" placeholder="Kullanıcı Soyadı" id="login-lastname">
                        <label class="login-area-icon fui-user" for="login-lastname"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" name="mail" class="login-area" placeholder="Mail" id="login-mail">
                        <label class="login-area-icon fui-user" for="login-mail"></label>
                    </div>
                    <div class="control-group">
                        <input type="password" name="password" class="login-area" placeholder="Şifre" id="login-pass">
                        <label class="login-area-icon fui-user" for="login-pass"></label>
                    </div>
                    <button href="kayit.php" name="kayit" class="btn">Kayıt Ol</button>
                </div>
            </form>
            <a href="giris.php"><button name="uyegiris" class="btn">Giriş Yap</button></a>
                
            </div>
            
        </div>
        
    </body>
    
    
    
</html>


 

