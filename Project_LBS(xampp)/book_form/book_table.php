<?php
  include('book_develop.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="book_table.css">

    <title>Book Details</title>
</head>

<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">

    <?php echo $deleteMsg??''; ?>

    <input id="myInput" type="text" placeholder="search here..!" onkeyup="search_books()" > 

    <div class="table-responsive">
      <table class="table table-bordered" id="myTable">
       <thead>
        <tr>
         <th>S.N</th>
         <th>ID Code</th>
         <th>Author</th>
         <th>Book Title</th>
         <th>Publisher</th>
         <th>Edition</th>
         <th>Year</th>
         <th>Rack No</th>
         <th>Status</th>
        </tr>
      </thead>
      <tbody>
       <?php
         if(is_array($fetchData)){      
         $sn=1;
         foreach($fetchData as $data){
        ?>
       <tr class="books_srch">
        <td><?php echo $sn; ?></td>
        <td><?php echo $data['Id_Code']??''; ?></td>
        <td><?php echo $data['Author']??''; ?></td>
        <td><?php echo $data['Book_Title']??''; ?></td>
        <td><?php echo $data['Publisher']??''; ?></td>
        <td><?php echo $data['Edition']??''; ?></td>
        <td><?php echo $data['Year']??''; ?></td>
        <td><?php echo $data['Rack_No']??''; ?></td> 
        <td><?php echo $data['Status']??''; ?></td> 
       </tr>
        <?php
         $sn++;}}else{ ?>
       <tr>
        <td colspan="9">
           <?php echo $fetchData; ?>
        </td>
         </tr>
          <?php   }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>


<script>

function search_books() {
    let input = document.getElementById('myInput').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('books_srch');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="";                 
        }
    }
}
 
</script>
</body>
</html>