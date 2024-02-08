<?php


$host = "localhost";
$username = "root";
$password = "";
$dbname = "php";


$con = mysqli_connect($host, $username, $password, $dbname);

if (!$con) {
    echo "fail coonection";
}
else{
    echo "connected to data successfully";
}

echo "<br>";
echo "<br>";
echo "<br>";

$result = mysqli_query($con, "SELECT * FROM Persons;");

?>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
      while($row = mysqli_fetch_assoc($result)) { 
         
        ?>
        <p><?php echo $row["FirstName"];?></p>
        <p><?php echo $row["LastName"]; ?></p>

        <?php
      }
        ?>
    </body>
    </html>


   
