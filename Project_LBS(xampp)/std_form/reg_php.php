<?php
  
  $hostName = "localhost";
  $userName = "sowmi";
  $password = "sow";
  $databaseName = "std_reg_form";
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
        $rollno = $_POST['rollno'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $degree = $_POST['degree'];
        $dept = $_POST['dept'];
        $pswd = $_POST['pswd'];
    

        // database details
        $host = "localhost";
        $username = "sowmi";
        $password = "sow";
        $dbname = "std_reg_form";

        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // to ensure that the connection is made
        if (!$con)
        {
           die("Connection failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $sql = "INSERT INTO student_details(Id,First_Name, Last_Name, Roll_No, Email, Date_of_Birth, Degree, Department, Password) 
                VALUES ('0','$fname', '$lname', '$rollno', '$email', '$age', '$degree', '$dept', '$pswd')";
        $empty ="DELETE FROM staff_details WHERE First_Name='' OR Last_Name='' 
                 OR Roll_No='' OR Email='' OR Password='' ";
  
  
        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        $es = mysqli_query($con, $empty);
        if($rs and ($fname==''or $lname==''or $rollno=='' or $email=='' or $pswd==''))
        {
          header('Location:http://localhost/project_LBS(xampp)/std_form/table.php');
        }
        else{
          echo"Entries added";
        }
        
  
        // close connection
        mysqli_close($con);
    }
?>
