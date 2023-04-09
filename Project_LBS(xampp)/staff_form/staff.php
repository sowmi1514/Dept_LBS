<?php
  
  $hostName = "localhost";
  $userName = "sowmiya";
  $password = "sow";
  $databaseName = "staff_reg_form";
  $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }

?>

<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $staffid = $_POST['staffid'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $degree = $_POST['degree'];
        $dept = $_POST['dept'];
        $pswd = $_POST['pswd'];
    

        // database details
        $host = "localhost";
        $username = "sowmiya";
        $password = "sow";
        $dbname = "staff_reg_form";

        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // to ensure that the connection is made
        if (!$con)
        {
           die("Connection failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $sql = "INSERT INTO staff_details(Id,First_Name, Last_Name, Staff_Id, Email, Date_of_Birth, Degree, Department, Password) 
        VALUES ('0','$fname', '$lname', '$staffid', '$email', '$age', '$degree', '$dept', '$pswd')";
        $empty ="DELETE FROM staff_details WHERE First_Name='' OR Last_Name='' OR 
        Staff_Id='' OR Email='' OR Password='' ";
  
        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        $es = mysqli_query($con, $empty);
        if($rs and ($fname==''or $lname==''or $staffid=='' or $email=='' or $pswd=='')){
          header('Location:http://localhost/project_LBS(xampp)/staff_form/regstaff_html.html');
          // echo"add CRT info ";
        }
        else{
          echo"Entries added";}
  
        // close connection
        mysqli_close($con);
    }
?>
