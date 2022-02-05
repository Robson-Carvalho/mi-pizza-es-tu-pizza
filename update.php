<?php
require 'connection.php';

if (isset($_POST)) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $description = $_POST["description"];
  $category = $_POST["category"];
  $price = $_POST["price"];

  $sqlUpdate = "UPDATE `pizza` SET `name`='$name',`description`='$description',`category`='$category',`price`='$price' WHERE ID = '$id'";
  $update = mysqli_query($connection, $sqlUpdate);

  if (mysqli_affected_rows($connection) > 0) {
    echo '<script>alert("Alteração Realizada com Sucesso")</script>';
  } else {
    echo '<script>alert("Infelizmente não foi possível realizar a Alteração")</>';
  }

  echo '<script>location.href="listingData.php"</script>';
}
?>
