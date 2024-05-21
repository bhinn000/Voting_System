<!doctype html>
<html lang="en">

<head>

  <title>Ballot paper</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    .radio-images input[type="radio"] {
      display: none;
    }

    .radio-images label {
      display: inline-block;
      margin-right: 10px;
    }

    .radio-images img {
      border: 2px solid #ccc;
      cursor: pointer;
      height: 80px;
      width: 100px;
    }

    /* .radio-images img.selected {
      border-color: #333;
    } */

    .radio-images input[type="radio"]:checked+img {
      border: 2px solid blue;
    }
  </style>
</head>

<body>
  <form method="POST" id="mainForm" onsubmit="formSubmit(event)">

    <table class="table table-striped">
      <thead>
        <tr>
          <th>Mayor</th>
          <th>Sub Mayor</th>
          <th>President</th>
          <th>Vice President</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="apple">
              <img src="images/apple.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="apple">
              <img src="images/apple.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="apple">
              <img src="images/apple.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="apple">
              <img src="images/apple.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>

        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="motorola">
              <img src="images/motorola.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="motorola">
              <img src="images/motorola.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="motorola">
              <img src="images/motorola.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="motorola">
              <img src="images/motorola.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>

        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="samsung">
              <img src="images/samsung.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="samsung">
              <img src="images/samsung.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="samsung">
              <img src="images/samsung.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="samsung">
              <img src="images/samsung.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>

        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="mi">
              <img src="images/mi.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="mi">
              <img src="images/mi.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="mi">
              <img src="images/mi.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="mi">
              <img src="images/mi.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>

        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="oppo">
              <img src="images/oppo.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="oppo">
              <img src="images/oppo.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="oppo">
              <img src="images/oppo.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="oppo">
              <img src="images/oppo.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>

        <tr>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_mayor" value="nokia">
              <img src="images/nokia.png" class="image" data-value="selectedCandidate_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_sub_mayor" value="nokia">
              <img src="images/nokia.png" class="image" data-value="selectedCandidate_sub_mayor">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_President" value="nokia">
              <img src="images/nokia.png" class="image" data-value="selectedCandidate_President">
            </label>
          </td>
          <td class="radio-images">
            <label>
              <input type="radio" name="selectedCandidate_Vice_President" value="nokia">
              <img src="images/nokia.png" class="image" data-value="selectedCandidate_Vice_President">
            </label>
          </td>
        </tr>


      </tbody>
    </table>
    <div style="text-align:center">
      <span class="requiredError" style="display:none;">please select all fields</span><br />
      <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
    </div>

  </form>
</body>



<script>
  function formSubmit(event) {
    const form = document.forms["mainForm"];
    const mayor = form["selectedCandidate_mayor"].value;
    const subMayor = form["selectedCandidate_sub_mayor"].value;
    const president = form["selectedCandidate_President"].value;
    const vicePresident = form["selectedCandidate_Vice_President"].value;

    if (
      !(mayor &&
        subMayor &&
        president &&
        vicePresident)) {
      event.preventDefault();
      document.querySelector(".requiredError").style.display = "inline";

    }
  }
</script>

</html>

<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {


  // connect with database
  $conn = mysqli_connect('127.0.0.1:3307', 'root', '', '_Voting', 7882);

  function errorUpdate()
  {
    global $conn;
    global $sql;
    if (!mysqli_query($conn, $sql)) {
      echo "Error updating record: " . mysqli_error($conn);
    }
  }
  if (!$conn) {
    echo "Problem in connecting with your database";
  }

  // Get the selected option from the radio buttons
  else if ($_POST['selectedCandidate_mayor'] && $_POST['selectedCandidate_sub_mayor'] &&  $_POST['selectedCandidate_President'] && $_POST['selectedCandidate_Vice_President']) {

    if ($selectedCandidate_m = $_POST['selectedCandidate_mayor']) {
      $sql = "UPDATE mayor_vote_received SET $selectedCandidate_m = $selectedCandidate_m + 1";
      errorUpdate();
    }
    if ($selectedCandidate_sm = $_POST['selectedCandidate_sub_mayor']) {
      $sql = "UPDATE sub_mayor_vote_received SET $selectedCandidate_sm = $selectedCandidate_sm + 1";
      errorUpdate();
    }

    if ($selectedCandidate_p = $_POST['selectedCandidate_President']) {
      $sql = "UPDATE president_vote_received SET $selectedCandidate_p = $selectedCandidate_p + 1";
      errorUpdate();
    }

    if ($selectedCandidate_vp = $_POST['selectedCandidate_Vice_President']) {
      $sql = "UPDATE vice_president_vote_received SET $selectedCandidate_vp = $selectedCandidate_vp + 1";
      errorUpdate();
    }
  } else {
    echo "Please select candidate for each ones! ";
  }

  // Close the database connection
  mysqli_close($conn);

  echo "<style> body { display:none; } </style>";
  // echo "Thank you for submitting the form!";
  exit;
}







?>



</body>



</html>