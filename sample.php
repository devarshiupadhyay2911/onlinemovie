 <?php
   $sid=isset($_GET['sid']) ?$_GET['sid']:'';
    if($_POST['checkbox'])
    {
  // $select = $conn->prepare("SELECT * FROM seat");
  //$select->execute();
   $seat_no=$_POST['seat_no'];
   
   $result ="UPDATE seat set status='0' where seat_no ='$seat_no'";
   print_r($result);
  $stmt = $conn->prepare($result);

  // execute the query
  $stmt->execute();
  if($status=1)
  {
    echo "seat is aviable";

  }
  else
  {
    echo"seat is booked and please select other seat";
  }
  }
?>
