<?php
  
  $hostName = "localhost";
  $userName = "sowmiyapk";
  $password = "sow";
  $databaseName = "book_reg_form";
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
        $idcode = $_POST['idcode'];
        $author = $_POST['author'];
        $booktitle = $_POST['booktitle'];
        $publisher = $_POST['publisher'];
        $edition = $_POST['edition'];
        $year = $_POST['year'];
        $rackno = $_POST['rackno'];
        $status = $_POST['status'];
    

        // database details
        $host = "localhost";
        $username = "sowmiyapk";
        $password = "sow";
        $dbname = "book_reg_form";

        // creating a connection
        $con = mysqli_connect($host, $username, $password, $dbname);

        // to ensure that the connection is made
        if (!$con)
        {
           die("Connection failed!" . mysqli_connect_error());
        }

        // using sql to create a data entry query
        $sql = "INSERT INTO book_details(Id,Id_Code, Author, Book_Title, Publisher, Edition, Year, Rack_No, Status) 
        VALUES ('0', '$idcode', '$author', '$booktitle', '$publisher', '$edition', '$year', '$rackno', '$status')";
  
        // send query to the database to add values and confirm if successful
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
           echo "Entries added!";
        }
  
        // close connection
        mysqli_close($con);
    }
?>