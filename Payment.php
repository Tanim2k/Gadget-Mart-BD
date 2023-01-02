<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
       <h1 style="color: blanchedalmond; ">
          <b>Gadget Mart <sup>BD</sup></b> 
       </h1>
     </nav> 

     <h3 align= "right">
		 
		 
         <a href="Dashboad.php"><b>Welcome  <?php echo $_SESSION["Name"]?></b></a>
        <a style="color:SlateBlu;" href="Homepage.html">|  Logout   </a>  
        
       
   
    </h3>

       <h2 align="center"><b>Payment</b></h2>
       <h3 align="center">
       <form action="Controller/pay.php">

       <label for="name">Product Name :</label> 
       <input type="text" name="name"> <br>
       <label for="id"> Product ID :</label>
       <input type="text" name="id"> <br>
       <label for="price"> Price :</label>
       <input type="text" name="price"> <br>
       <label for=""> Payment method</label> <br>
       <input type="radio" id="Bkash" name="Payment" value="Bkash">
                     <label for="i">Bkash</label>                     
                     <input type="radio" id="Credit Card" name="Payment" value="Credit Card">
                     <label for="j">Credit Card</label>
                     <input type="radio" id="Roket" name="Payment" value="Roket">
                     <label for="k">Rocket</label>
                     <br>
                    <input type="submit" value="Pay" name="submit"> <br>

       </form>
       </h3>
</body>
</html>
