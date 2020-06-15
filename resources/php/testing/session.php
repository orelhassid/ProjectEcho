<?php
/*
$query = "SELECT * FROM users WHERE userID = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
*/
$query = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
    if ($result == true) {
$_SESSION['id'] = $row['userID'];
$_SESSION['active'] = $row['active'];
$_SESSION['username'] = $row['username'];

$query_update = "UPDATE accounts SET active = '1' WHERE userID='$row[userID]'";
$result_update = mysqli_query($conn, $query_update);
}else {
  die("Error");
}
?>
