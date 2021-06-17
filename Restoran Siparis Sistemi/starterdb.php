<?php   

session_start();  
 $connect = mysqli_connect("localhost", "root", "12345", "restaurant");  
 if(isset($_POST["add_to_cart"]))  
 {  
    if(isset($_SESSION["shopping_cart"])){
        $session_array_id=array_column($_SESSION["shopping_cart"],"id");

        if(!in_array($_GET['id'],$session_array_id)){
            $count = count($_SESSION["shopping_cart"]);  
            $session_array=array(
                'id' => $_GET['id'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
                "quantity"=>$_POST['quantity']
            );
            $_SESSION["shopping_cart"][$count]=$session_array;
        }

    }else{
        $session_array=array(
            'id' => $_GET['id'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
            "quantity"=>$_POST['quantity']
        );
        $_SESSION["shopping_cart"][0]=$session_array;
    }
}
if(isset($_GET["action"]))
{

if($_GET["action"]=="delete"){
     foreach($_SESSION["shopping_cart"] as $keys => $values){
         if($values['id'] == $_GET['id']){
             unset($_SESSION["shopping_cart"][$keys]);
         }
     }
 }

}

      

 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
      </head>
      <style>
           * {
               box-sizing: border-box;
               margin: 0;
               padding: 0;
	     


             }
           .container{
              
               width: 50%;
               height:30px;
               margin-right: auto;
               margin-left: auto;
               display: grid;
               grid-template-columns: repeat(3,1fr);
               padding: 80px 60px;
               grid-column-gap: 20px;
               grid-row-gap:30px;
           }
           .img-responsive{
               width: 100%;
               height: auto;
           
              
           }
           .col{
               padding-top: 10px;
               padding-bottom: 10px;
               object-fit: cover;
               cursor:pointer;
               transform: 0.2s ease;
    
           }
          table{
               border-collapse:collapse;
               width:50%;
               position:fixed;
               bottom:160px;
          }
          th,td{
               border:1px solid black;
               text-align:center;
          }
          .btn{
               padding: 5px 30px;
               border:none;
               outline: none;
               background-color:brown;
               color:white;
               cursor:pointer;
               border-radius: 4px;
               font-size: 20px;
               display: block;
               margin:0 auto;
               transition: 0.2s all;
          }
          .btn:hover{
               transform:scale(1.08);
          }
          h3{
               text-align:left;
          }
          button{
               padding: 10px 30px;
               border:none;
               outline: none;
               background-color:#1EAE98;
               color:white;
               cursor:pointer;
               border-radius: 4px;
               font-size: 20px;
               display: block;
               transition: 0.2s all;
               margin-left:50px;
               margin-top:450px;
               
               }
          button:hover{
               transform:scale(1.08);
          }

          

         
          
      </style>
      <body>  
           <br />  
           <div class="container">   
                <?php  
                $query = "SELECT * FROM starters ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col">  
                     <form method="post" action="starterdb.php?action=add&id=<?php echo $row['id']; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4><?php echo $row["name"]; ?></h4>  
                               <h4><?php echo $row["price"]; ?> TL</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn" value="Sepete Ekle" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>
			<br />
			
                 
                     <table> 
                     
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  

                               <td><?php echo $values["name"]; ?></td>  
                               <td><?php echo $values['quantity']; ?></td>  
                               <td><?php echo $values["price"]; ?> TL</td>  
                               <td><?php echo number_format($values["quantity"] * $values["price"], 2); ?> TL</td>  
                               <td><a href="starterdb.php?action=delete&id= <?php echo $values['id']; ?>">Remove</a></td> 
                          </tr>  
                          <?php  
                                    $total = $total + ($values["quantity"] * $values["price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?>TL</td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
          
    
     <form action="menu.php">
        <button>Menuye Dön</button>
        </form>
     

      </body>  
 </html>