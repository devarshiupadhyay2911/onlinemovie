<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php
include_once("config.php");
//$sid=isset($_GET['sid']) ?$_GET['sid']:'';

if (isset($_POST['submit'])) {
  //print_r($_POST);
  //$Numseat_nos=$_POST['Numseat_nos'];

  $checkbox = $_POST['seat'];
  $chk = "";
  foreach ($checkbox as $chk1)
  //print_r($checkbox);
  {
    $chk .= $chk1 . ",";
  }
  //print_r($Numseat_nos);
  $sql = "INSERT INTO screen (Numseats)
                VALUES ('$chk')";
  // print_r($sql);
  // use exec() because no results are returned
  $conn->exec($sql);

  echo "New record created successfully";

  if ($sql) {


    $select = $conn->query("SELECT seat_no FROM seat");
    $select->execute();
    // $users = $select->fetchAll();
    // $seat_no = $users['seat_no'];
    //print_r($seat_no);

    while ($row = $select->fetchAll()) {
      //print_r($row);
      $seat = isset($row['chk']);
      // print_r($seat_no);
    }

    //

    $seat_no = isset($_POST['chk']);
    //var_dump($seat_no);
    $stmt = $conn->prepare("UPDATE seat SET status = 0 WHERE seat_no ='$chk'");
    // $stmt->bind_param('s',$_POST['seat_no']);
    $stmt->execute();
    //  echo $stmt->rowCount() . " records UPDATED successfully";
    print_r($stmt);
  }
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
    function ckChange(ckType) {
      var ckName = document.getElementsByName(ckType.name);
      var checked = document.getElementById(ckType.id);

      if (checked.checked) {
        for (var i = 0; i < ckName.length; i++) {

          if (!ckName[i].checked) {
            ckName[i].disabled = true;
          } else {
            ckName[i].disabled = false;
          }
        }
      } else {
        for (var i = 0; i < ckName.length; i++) {
          ckName[i].disabled = false;
        }
      }
    }

    function onLoaderFunc() {
      $(".seatStructure *").prop("disabled", true);
      $(".displayerBoxes *").prop("disabled", true);
    }

    function takeData() {
      if (($("#Numseats").val().length == 0)) {
        alert("Please Enter no of people");
      } else {
        $(".inputForm *").prop("disabled", true);
        $(".seatStructure *").prop("disabled", false);
        document.POSTElementById("notification").innerHTML = "<b style='margin-bottom:0px;background:yellow;'>Please Select your seats NOW!</b>";
      }
    }

    function updateTextArea() {

      if ($("input:checked").length == ($("#Numseats").val())) {
        $(".seatStructure *").prop("disabled", true);

        var allNumberVals = [];
        var allseatsVals = [];

        //Storing in Array

        allNumberVals.push($("#Numseats").val());
        $('#seatsBlock :checked').each(function() {
          allseatsVals.push($(this).val());
        });

        //Displaying 
        $('#NumberDisplay').val(allNumberVals);
        $('#seatsDisplay').val(allseatsVals);
      } else {
        alert("Please select " + ($("#Numseats").val()) + " seats")
      }
    }

    function myFunction() {
      alert($("input:checked").length);
    }

    /*
    function POSTCookie(cname) {
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
    */



    $(":checkbox").click(function() {
      if ($("input:checked").length == ($("#Numseats").val())) {
        $(":checkbox").prop('disabled', true);
        $(':checked').prop('disabled', true);
      } else {
        $(":checkbox").prop('disabled', false);
      }
    });
  </script>
</head>

<body onload="onLoaderFunc()">
  <div class="inputForm">
    <center>
      Number of seats : <input type="number" id="Numseats" required>
      <br /><br />
      <button onclick="takeData()">Start Selecting</button>
    </center>
  </div>
  <div class="seatStructure">
    <center>

      <form method="POST" action="seat.php">
        <table id="seatsBlock">
          <p id="notification"></p>
          <tr>
            <td colspan="14">
              <div class="screen">SCREEN</div>
            </td>
            <td rowspan="20">
              <div class="smallBox greenBox">Selected seat</div> <br />
              <div class="smallBox redBox">Reserved seat</div><br />
              <div class="smallBox emptyBox">Empty seat</div><br />
            </td>

            <br />
          </tr>

          <tr>
            <th></th>
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
            <td><input type="checkbox" name="seat[]" class="seats" id="A1" value="A1" onClick="ckChange(this)"></td>

            <td><input type="checkbox" name="seat[]" class="seats" id="A2" value="A2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A3" value="A3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A4" value="A4"></td>
            <td class="seat_noGap" onClick="ckChange(this) "></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A5" value="A5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A6" value="A6" onClick="ckChange(this) "></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A7" value="A7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="A8" value="A8" onClick="ckChange(this)"></td>

          </tr>

          <tr>
            <td>B</td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B1" value="B1" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B2" value="B2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B3" value="B3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B4" value="B4" onClick="ckChange(this)"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B5" value="B5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B6" value="B6" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B7" value="B7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="B8" value="B8" onClick="ckChange(this)"></td>
          </tr>

          <tr>
            <td>C</td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c1" value="C1" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c2" value="C2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c3" value="C3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c4" value="C4" onClick="ckChange(this)"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c5" value="C5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c6" value="C6" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c7" value="C7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="c8" value="C8" onClick="ckChange(this)"></td>

          </tr>
          <tr class="seat_noVGap"></tr>

          <tr>
            <td>D</td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D1" value="D1" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D2" value="D2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D3" value="D3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D4" value="D4" onClick="ckChange(this)"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D5" value="D5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D6" value="D6" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D7" value="D7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="D8" value="D8" onClick="ckChange(this)"></td>

          </tr>

          <tr>
            <td>E</td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E1" value="E1" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E2" value="E2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E3" value="E3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E4" value="E4" onClick="ckChange(this)"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E5" value="E5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E6" value="E6" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E7" value="E7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seats" id="E8" value="E8" onClick="ckChange(this)"></td>
          </tr>


          <tr>
            <td>F</td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F1" value="F1" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F2" value="F2" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F3" value="F3" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F4" value="F4" onClick="ckChange(this)"></td>
            <td></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F5" value="F5" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F6" value="F6" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F7" value="F7" onClick="ckChange(this)"></td>
            <td><input type="checkbox" name="seat[]" class="seat_nos" id="F8" value="F8" onClick="ckChange(this)"></td>
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