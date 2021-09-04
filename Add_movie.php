<?php
include_once("config.php");
if (isset($_POST['submit'])) {
  //print_r($_POST);
  $movie_name = $_POST['movie_name'];
  $Description = $_POST['Description'];
  $Language = $_POST['Language'];
  $Launch_date = date('Y-m-d');
  //$Launch_date = $_POST['Launch_date'];
  

  $duration_time = $_POST['duration_time'];
  $Screen_no = $_POST['Screen_no'];
  $Image = $_FILES["Image"]["name"];
  $City = $_POST['City'];
  $amount = $_POST['amount'];
  $status = $_POST['status'];
  if ($_FILES['Image']['name']) {

    // here is the current date time timestamp
    $time = date("d-m-Y") . "-" . time();

    // here we set it to the image name
    $fileName = $_FILES['Image']['name'];
    $fileName = $time . "-" . $fileName;

    // upload that image into the directory name: images
    move_uploaded_file($_FILES['Image']['tmp_name'], "image/" . $fileName);
    $Image = "image/" . $_FILES['Image']['name'];

    try{
    $sql = "Insert Into Add_movie(movie_name,Description,Language,Launch_date,duration_time,Screen_no,Image,City,amount,status)VALUES(
'$movie_name','$Description','$Language','$Launch_date','$duration_time','$Screen_no','$Image','$City','$amount
','$status')";
    //print_r($sql);

    // use exec() because no results are returned
    $conn->exec($sql);
    // print_r($conn);

    echo "New record created successfully";
  }
}
catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="/examples/css/form-style.css">
  
</head>

<body>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


  <div class="container">
    <br>
    <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
    <hr>





    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <form method="post" action="Add_movie.php" enctype="multipart/form-data">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="movie_name" class="form-control" placeholder="movie_name" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="Description" class="form-control" placeholder="Description" type="Description">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>

            <input name="Language" class="form-control" placeholder="Language" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fas fa-calendar-alt"></i> </span>
              <input name="Launch_date " class="form-control" placeholder="Launch_date " type="date">

            </div>

          </div> <!-- form-group end.// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="far fa-clock"></i> </span>
            </div>
            <input class="form-control" placeholder="duration_time" name="duration_time" type="Time">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input class="form-control" placeholder="Screen_no " name="Screen_no" type="text">
          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="file" class="form-control" name="Image" id="Image">

          </div> <!-- form-group// -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" placeholder="city" name="City" id="city">

          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" placeholder="amount" name="amount" id="amount">

          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input type="text" class="form-control" placeholder="status" name="status" id="status">

          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" name="submit" value="submit">
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
      <p class="h5 text-white">Components and templates <br> for Ecommerce, marketplace, booking websites
        and product landing pages</p> <br>
      <p><a class="btn btn-warning" target="_blank" href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com
          <i class="fa fa-window-restore "></i></a></p>
    </div>
    <br><br>
  </article>
</body>

</html>