<?php
include_once("config.php");
$sid=isset($_GET['sid']) ?$_GET['sid']:'';

if (isset($_POST['submit'])) {
  //print_r($_POST);
  //$Numseats=$_POST['Numseats'];
  $checkbox = $_POST['seat'];
  $chk = "";
  foreach ($checkbox as $chk1)
  //print_r($checkbox);
  {
    $chk .= $chk1 . ",";
  }
  //print_r($Numseats);
  $sql = "INSERT INTO screen (Numseats)
  VALUES ('$chk')";
  // print_r($sql);
  // use exec() because no results are returned
  $conn->exec($sql);
  
     echo "New record created successfully";
   }
   ?>
  
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="seat.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script>
    function onLoaderFunc()
{
  $(".seatStructure *").prop("disabled", true);
  $(".displayerBoxes *").prop("disabled", true);
}
function takeData()
{
  if (( $("#Username").val().length == 0 ) || ( $("#Numseats").val().length == 0 ))
  {
  alert("Please Enter your Name and Number of Seats");
  }
  else
  {
    $(".inputForm *").prop("disabled", true);
    $(".seatStructure *").prop("disabled", false);
    document.getElementById("notification").innerHTML = "<b style='margin-bottom:0px;background:yellow;'>Please Select your Seats NOW!</b>";
  }
}


function updateTextArea() { 
    
  if ($("input:checked").length == ($("#Numseats").val()))
    {
      $(".seatStructure *").prop("disabled", true);
      
     var allNameVals = [];
     var allNumberVals = [];
     var allSeatsVals = [];
  
     //Storing in Array
     allNameVals.push($("#Username").val());
     allNumberVals.push($("#Numseats").val());
     $('#seatsBlock :checked').each(function() {
       allSeatsVals.push($(this).val());
     });
    
     //Displaying 
     $('#nameDisplay').val(allNameVals);
     $('#NumberDisplay').val(allNumberVals);
     $('#seatsDisplay').val(allSeatsVals);
    }
  else
    {
      alert("Please select " + ($("#Numseats").val()) + " seats")
    }
  }


function myFunction() {
  alert($("input:checked").length);
}

/*
function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function ckChange(ckType){
    var ckName = document.getElementsByName(ckType.name);
    var checked = document.getElementById(ckType.id);

    if (checked.checked) {
      for(var i=0; i < ckName.length; i++){

          if(!ckName[i].checked){
              ckName[i].disabled = true;
          }else{
              ckName[i].disabled = false;
          }
      } 
    }
    else {
      for(var i=0; i < ckName.length; i++){
        ckName[i].disabled = false;
      } 
    }*/    


$(":checkbox").click(function() {
  if ($("input:checked").length == ($("#Numseats").val())) {
    $(":checkbox").prop('disabled', true);
    $(':checked').prop('disabled', false);
  }
  else
    {
      $(":checkbox").prop('disabled', false);
    }
});



  </script>
</head>

<body onload="onLoaderFunc()">
  <div class="inputForm">
    <center>
      Number of Seats : <input type="number" id="Numseats" required>
      <br /><br />
      <button onclick="takeData()">Start Selecting</button>
    </center>
  </div>
  <div class="seatStructure">
    <center>
      <form method="POST" action="seat.php" enctype="multipart/form-data">
        <table id="seatsBlock">
          <p id="notification"></p>
          <tr>
            <td colspan="14">
              <div class="screen">SCREEN</div>
            </td>
            <td rowspan="20">
              <div class="smallBox greenBox">Selected Seat</div> <br />
              <div class="smallBox redBox">Reserved Seat</div><br />
              <div class="smallBox emptyBox">Empty Seat</div><br />
            </td>

            <br />
          </tr>

          <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td></td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>


          </tr>

          <tr>
            <td>A</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A4"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="A8"></td>

          </tr>

          <tr>
            <td>B</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B4"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="B8"></td>
          </tr>

          <tr>
            <td>C</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C4"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="C8"></td>

          </tr>
          <tr class="seatVGap"></tr>

          <tr>
            <td>D</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D4"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="D8"></td>

          </tr>

          <tr>
            <td>E</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E4"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="E8"></td>
          </tr>


          <tr>
            <td>F</td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F1"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F2"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F3"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F4"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F5"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F6"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F7"></td>
            <td><input type="checkbox" name="seat[]" class="seats" value="F8"></td>
          </tr>
        </table>


        <br />
        <input type="submit" name="submit" value="submit">
      </form>


    </center>
    <br /><br />
  </div>

</body>

</html>