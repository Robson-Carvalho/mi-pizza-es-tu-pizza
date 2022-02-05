<?php 
  require "connection.php";

  if(isset($_POST)){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $price = $_POST["price"];


    $sqlInsert =  "INSERT INTO `pizza`(`ID`, `name`, `description`, `category`, `price`, `image`) VALUES ('','$name','$description','$category','$price','')";

    $register = mysqli_query($connection, $sqlInsert);

    if ($register){
      echo '<script>alert("Inserção Realizada com Sucesso");</script>';	
    }else{
      echo '<script>alert("Infelizmente Não foi possível realizar a Inserção");</script>';
    }

      echo '<script>location.href="registerForm.php"</script>';
    }  
?>