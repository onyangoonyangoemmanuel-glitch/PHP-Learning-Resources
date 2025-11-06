<?php
$servername = "localhost";
$username = "root"; // default for XAMPP
$password = "";
$dbname = "user_accounts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hash

$sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Account created successfully!'); window.location='login.php';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
