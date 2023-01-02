<?php
$con = mysqli_connect('localhost','root', '', 'finalterm');
$sql = "select * from products where Name like '%".$_GET['q']."%' ";
$result = mysqli_query($con,$sql);    
$output='';


    foreach ($result as $key) 
    {
    $output.= '<tr>';
    $output.= '<td>'.$key['id'].'</td>';
    $output.= '<td>'.$key['Name'].'</td>';
    $output.= '<td>'.$key['owner'].'</td>';
    $output.= '<td>'.$key['price'].'</td>';
    $output.= '<td><a href="Payment.php">Click me</a></td>';
    $output.= '</tr>';
    }



echo $output;


?>