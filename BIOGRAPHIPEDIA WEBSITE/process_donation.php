<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Leave empty unless you've set one
$dbname = "donations_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$message = $_POST['message'];

$sql = "INSERT INTO donations (name, email, amount, message)
        VALUES ('$name', '$email', '$amount', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Thank you, $name!</h2>";
  echo "<p>Your donation of Ksh $amount has been recorded successfully.</p>";
  echo "<a href='donate.html'>Back to Donation Page</a>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
