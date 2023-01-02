<?php

session_start();
  $istrue=false;
  if(isset($_POST["submit"]))  
  { 
     $istrue=true;
  }

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
<br> 
		
       
		   <div> 
		   
           <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
       
       <h1 style="color: blanchedalmond; ">
          <b>Gadget Mart <sup>BD</sup></b> 
       </h1>
     </nav> 
		 
		   
		       <h3 align= "right">
		 
		 
		        <a href="Dashboad.php"><b>Welcome  <?php echo $_SESSION["Name"]?></b></a>
		       <a style="color:SlateBlu;" href="Homepage.html">|  Logout   </a>  
		       
		      
		  
		   </h3>
		   
		  <hr>
		  
		</div> 
         <fieldset><fieldset>
         
       <legend><h2> <u> Account </u> </h2> <style="color: rgb(255, 255, 255);"> </legend> 
        
         
        
         <h2>
         <ul>
         <li> <a style="color:SlateBlu;" href="Dashboad.php">  Dashboard   </a></li> 
             <li> <a style ="color:SlateBlu;"  href= "ViewProfile.php"> View Profile </a> </li>
             <li> <a style ="color:SlateBlu;" href="Editprofile.php"> Edit Profile </a></li>
             
             <li> <a style ="color:SlateBlu;" href="Changepass.php">Change Password</a> </li>
             
              
          </ul>  
          </h2></fieldset>
      </fieldset><br>
	   
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
       

      
       <b><p align="center" <label for="email"> Enter Email : </label> </b>
       <input type="email" name="" id="email">
       <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>

     </form>
  

     <?php

     if($istrue)
     echo "An Email has been sent to your Account <br>";
     ?>

</body>
</html>