<?php
$servername = "localhost";
$database = "cv";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='item'>
        <img src='./".$row["link"]."/image/".$row["image"].".jpg' alt='avatar'>
        <div class='info'>
            <h3 class='name'>".$row["name"]."</h3>
            <a href='./".$row["link"]."/'>Xem thêm</a>
        </div>
    </div>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>