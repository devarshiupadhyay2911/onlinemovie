<?php
include_once("config.php");
try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
//  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE  Add_movie SET movie_name='$movie_name',Description='$Description',Language='$Language',Launch_date='$Launch_date',duration_time='$duration_time',Screen_no='$Screen_no',Image='$Image',City='$City',amount='$amount',status='$status'WHERE id='$id'";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
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





<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
    <form method="post" action="Addmovie.php">
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="movie_name" class="form-control" placeholder="movie_name" type="text" value="<?php echo $movie_name; ?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
         </div>
        <input name="Description" class="form-control" placeholder="Description" type="Description" value="<?php echo $Description; ?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        
        <input name="Language" class="form-control" placeholder="Language" type="text" value="<?php echo $Language; ?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
            <input name="Launch_date " class="form-control" placeholder="Launch_date " type="Date" value="<?php echo $Launch_date; ?>">
            
        </div>
        
    </div> <!-- form-group end.// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="far fa-clock"></i> </span>
        </div>
        <input class="form-control" placeholder="duration_time"  name="duration_time"type="Time" value="<?php echo $duration_time; ?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input class="form-control" placeholder="Screen_no " name="Screen_no" type="text" value="<?php echo $Screen_no; ?>">
    </div> <!-- form-group// -->
    <div class="form-group input-group">   
       <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input type="file" class="form-control" name="Image" id="Image" value="<?php echo $Image; ?>">
     
    </div> <!-- form-group// -->  
    <div class="form-group input-group">   
       <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input type="text" class="form-control"placeholder="city" name="City" id="city" value="<?php echo $city; ?>">
     
    </div>   
     <div class="form-group input-group">  
     <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input type="text" class="form-control"placeholder="amount" name="amount" id="amount" value="<?php echo $amount; ?>">
     
    </div>  
     <div class="form-group input-group"> 
     <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input type="text" class="form-control"placeholder="status" name="status" id="status" value="<?php echo $status; ?>" >
     
    </div> 
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-block"name="submit" value="submit">  
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