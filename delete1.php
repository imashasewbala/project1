<?php
include "config.php";
$id = $_GET["id"];
$sql = "DELETE FROM `crud2` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {

  header("Location: table1.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}
?>