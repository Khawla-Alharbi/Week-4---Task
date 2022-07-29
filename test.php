
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
<meta charset="utf-8">
<title>Sensors</title>
<link rel="stylesheet" href="style.css" />

    </head>
    <body>
        <header> <h1>ارسل قيمة الحساسات</h1>  </header>
        <hr>
        <p>قيمة الحساس:</p>
        
       
        <form >
            <input type = "number" name = "ss" />
            <input type="submit" >
       
        <p id ="done"></p>
    </form>
      
    </body>
   
</html>
<?php
if($_GET["ss"]){
$SData=  $_GET["ss"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensors";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "UPDATE sensor_data SET data='$SData' WHERE id=1";

if ($conn->query($sql) === TRUE) {
    $s="yes";
  } else {
    echo "Error updating record: " . $conn->error;
  }
$conn->close();

}
?>