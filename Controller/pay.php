
<?php
  $massage="";
   if(isset($_POST["submit"]))  
   { 
       if(empty($_POST["name"]))
       {
          $massage= "Invalid Transaction";
       }
       else if(empty($_POST["id"]))
       {
        $massage= "Invalid Transaction"; 
       }
       else if(empty($_POST["price"]))
       {
        $massage= "Invalid Transaction"; 
       }
       else
       {
        $massage= "Transaction Sucsessfull";
       }

   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo $massage;
?>
<p>Transaction Complete</p>
<a href="../Dashboad.php">Click Me</a>
</body>
</html>
