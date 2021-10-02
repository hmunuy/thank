<?php 

header("Content-Type: application/json;charset=utf-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "ccstrans_thank";
$password = "nuy037964";
$dbname = "ccstrans_thank";

$thank = $_POST["thank"];
$date_thank = date("Y-m-d");

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `ccstrans_thank`(`text_thank`, `date-thank`, `like_thank`) 
        VALUES ('$thank','$date_thank','0')";
  if (mysqli_query($conn, $sql)) {
    echo json_encode(array('status' => '1','message'=> 'Record add successfully'));
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);

?>