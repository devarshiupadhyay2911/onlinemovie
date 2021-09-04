  </script>
$Numseats=$_POST['Numseats'];
    $checkbox=$_POST['seat'];
    $chk="";
    foreach($checkbox as$chk1)
    {
      $chk.=$chk1.",";
    }
   //print_r($Numseats);
  $sql = "INSERT INTO screen (Numseats,seat_no)
  VALUES ('$Numseats',$chk')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";