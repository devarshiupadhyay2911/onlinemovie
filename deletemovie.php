<?php
include_once("config.php");
  $sql = "DELETE FROM Add_movie WHERE id='$id'";

  $conn->exec($sql);
  echo "Record deleted successfully";

?>