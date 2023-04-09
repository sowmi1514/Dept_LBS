<?php
include('develop.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="http://localhost/project_LBS(xampp)/std_form/table.css">

  <title>Student Details</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <?php echo $deleteMsg ?? ''; ?>

        <input id="myInput" type="text" placeholder="search here..!" onkeyup="search_student()">

        <div class="table-responsive">
          <table class="table table-bordered" id="myTable">
            <thead>
              <tr>
                <th>S.N</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Roll No</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Degree</th>
                <th>Department</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (is_array($fetchData)) {
                $sn = 1;
                foreach ($fetchData as $data) {
                  ?>
                  <tr class="std_srch">
                    <td>
                      <?php echo $sn; ?>
                    </td>
                    <td>
                      <?php echo $data['First_Name'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Last_Name'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Roll_No'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Email'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Date_of_Birth'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Degree'] ?? ''; ?>
                    </td>
                    <td>
                      <?php echo $data['Department'] ?? ''; ?>
                    </td>
                  </tr>
                  <?php
                  $sn++;
                }
              } else { ?>
                <tr>
                  <td colspan="8">
                    <?php echo $fetchData; ?>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    function search_student() {
      let input = document.getElementById('myInput').value
      input = input.toLowerCase();
      let x = document.getElementsByClassName('std_srch');

      for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
          x[i].style.display = "none";
        }
        else {
          x[i].style.display = "";
        }
      }
    }
  </script>

</body>

</html>