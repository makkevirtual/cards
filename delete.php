<?php
session_start();
if($_SESSION['username'] == 'username') {
 include "connect.php";
 print("<html>");
 $conn = connect_db();
// delete with id
 $sql = "DELETE FROM Addresses WHERE id=" . $_GET['id'];
 $result = mysqli_query($conn, $sql);
 print("Delete completed.");
 print("</html>");
 mysqli_close($conn);
}
?>
