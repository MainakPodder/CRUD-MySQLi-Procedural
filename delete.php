<?php include "connection.php" ?>

<?php
$did = $_GET["id"];
$dsql = "DELETE FROM `student` WHERE id=$did";

$result = mysqli_query($conn, $dsql);

echo ($result) ? "<script>alert('🕺,DATA DELETED PROPERLY');</script>" : "<script>alert('😪,DATA NOT DELETED PROPERLY');</script>";

header('location:display.php');
?>