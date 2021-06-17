<?php 


include 'connect.php';
session_start();


if(isset($_POST['kayit'])){
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if(!$username){
        die("Kullanıcı adınızı girin");
    }
    else if(!$lastname){
        die("Soyadınızı girin");
    }
    else if(!$mail){
        die("Mailinizi girin");
    }
    else if(!$password){
        die("Şifrenizi girin");
    }
    else{
        $sql="INSERT INTO users (username,lastname,mail,password)";
        $sql = $sql . "VALUES ('$username','$lastname','$mail', '$password')"; 
        $result=mysqli_query($mysqli,$sql);
        if(!$result){
            echo("Error description: ".$mysqli->error);
            exit;
            
        }
        header('Location:giris.php');
    }
}

if(isset($_POST['uyegiris'])){
    
    $mail=$_POST['mail'];
    $password=$_POST['password'];

    if(!$mail && !$password){
        die('Bütün alanlar doldurulmalı');
    }
    else{
        echo 'aaaa';
        $sql=("SELECT * FROM users WHERE mail='$mail' AND password='$password' LIMIT 1");
        $result=mysqli_query($mysqli,$sql);

        echo 'bbb';

       
        if(!$result)
        {
            echo '<br>Hata:' . mysqli_error($mysqli); 
        }
        $say = mysqli_num_rows($result); 
        if ($say == 1){ 
            echo 'hıı';
   
            $_SESSION['mail'] = $mail; 
        
         }else{ 
        
        $mesaj = "<h1> Hatalı Kullanıcı adı veya Şifre!</h1>"; 
        
         } 

    }
    if(isset($_SESSION['mail'])){
        header('Location:menu.php');
    }


}




?>
