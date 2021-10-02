<?php 

header("Content-Type: application/json;charset=utf-8");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "ccstrans_thank";
$password = "nuy037964";
$dbname = "ccstrans_thank";

$thank = $_POST["like_id"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM ccstrans_thank WHERE id = '$thank' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { 
        (int)$like = $row["like_thank"];
              }
}
$sum_like = $like+1;
$sql2 = "UPDATE ccstrans_thank SET like_thank= $sum_like WHERE id='$thank'";
        if (mysqli_query($conn, $sql2)) {
echo json_encode(array('status' => '1','message'=> $like ));

        }
mysqli_close($conn);
?>