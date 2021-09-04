<?php 
include_once("config.php");
if(isset($_POST['submit']))
{
  //print_r($_POST);
    $Numseats=$_POST['Numseats'];
 //  print_r($Numseats);
  $sql = "INSERT INTO screen (Numseats)
  VALUES ('$Numseats')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>seat add</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
<hr>
<form method="post"action="seatinsert.php">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="Numseats" class="form-control" placeholder="seat" type="text">
    </div> <!-- form-group// -->
                                
    <div class="form-group">
        <input type="submit" name="submit" class="btn btn-primary btn-block" value="submit">
    </div> <!-- form-group// -->      
                                                                  
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
<p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com  
 <i class="fa fa-window-restore "></i></a></p>
</div>
<br><br>
</article>
</body>
</html>