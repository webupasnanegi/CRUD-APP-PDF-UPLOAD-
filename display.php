<html>
    <head>
        <title>Display</title>
        <style>
            body{

                background: #D071f9;
            }
            table{
                background-color:white;
            }
        </style>
    </head>
</html>


<?php
include ("connection.php");
// error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn, $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

echo  $result[fname];

// echo $total;

if($total != 0)
{
    ?>

    <h2 style="align:center"><mark>Display All Records</mark></h2>
    <center>
    <table style= "border:1 cellspacing: 7 width:60%">
    <tr>
            <th width="10%">First Name</th>
            <th width="10%">Lase Name</th>
            <th width="10%">Age</th>
            <th width="10%">Email Address</th>
            <th width="10%">Gender</th>
            <th width="10%">Phone Number</th>
        </tr>
       
    

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
      echo " <tr>
            <td>".$result[fname]."</td>
            <td>".$result[lname]."</td>
            <td>".$result[age]."<td>
            <td>".$result[email]."</td>
            <td>".$result[gender]."</td>
            <td>".$result[phone]."</td>
             </tr>";
    }
   
}
else{
    echo "No record found"; 
     
}
?>
</table>
</center>