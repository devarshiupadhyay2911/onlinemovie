<?php
include_once("config.php");
if(isset($_POST['submit']))
{
 print_r($_POST);
$movie_name=$_POST['movie_name'];
$Description=$_POST['Description'];
$Language=$_POST['Language'];
$Launch_date=$_POST['Launch_date'];
$duration_time=$_POST['duration_time'];
$Screen_no=$_POST['Screen_no'];
$Image = $_FILES["Image"]["name"];
 if($_FILES['Image']['name'])
       {
          //$time=date("d-m-y")."-".time();
    $fileName=$_FILES['Image']['name'];
    move_uploaded_file($_FILES['Image']['tmp_name'],"image/".$fileName);
    $Image="image/".$_FILES['Image']['name'];
  }
$City=$_POST['City'];
$amount=$_POST['amount'];
$status=$_POST['status'];
try{
  // set the PDO error mode to exception
  //$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "INSERT INTO Add_movie (movie_name,Description,Language,Launch_date,duration_time,Screen_no,Image,City,amount,status)
VALUES ('$movie_name','$Description','$Language','$Launch_date','$duration_time','$Screen_no','$fileName','$City',$amount,'$status')";

  // use exec() because no results are returned
  $con->exec($sql);

  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
}
$con = null;

?>