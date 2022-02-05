<?php
  require 'connection.php';
  if(isset($_GET)){
    $id = $_GET["id"];
    $sqlQuery = "SELECT * FROM pizza WHERE ID = '$id'";
    $query = mysqli_query($connection, $sqlQuery);
    $pizza = mysqli_fetch_assoc($query);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/defaultStyles.css">
  <link rel="stylesheet" href="./styles/responsive.css">
  <title>Document</title>
</head>
<body>
<header class="header">
    <nav class="nav">
      <img class="logo" src="./image/logo.png" alt="logo">
      <ul class="menu">
        <li class="link"><a href="./index.php">Home</a></li>
        <li class="link"><a href="./registerForm.php">Cadastrar</a></li>
        <li class="link"><a href="./listingData.php">Listagem</a></li>
      </ul>
      <div class="menuMobile">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </nav>
  </header>
  <form method="POST" action="update.php">
  <input type="hidden" name="id" id="id" value ="<?php echo "$pizza[ID]"?>"/>
  <div>
      <label for="name">Nome</label>
      <input type="text" name="name" id="name" value="<?php echo "$pizza[name]"?>">
    </div>
    <div>
      <label for="description">Descrição</label>
      <input type="text" name="description" id="description" value="<?php echo "$pizza[description]"?>">
    </div>
    <div>
      <label for="category">Categoria</label>
      <select name="category" id="category" required>
        <option value="" disabled selected>Selecione</option>
        <option value="Pequena">Pequena</option>
        <option value="Media">Média</option>
        <option value="Grande">Grande</option>
      </select>
    </div>
    <div>
      <label for="price">Preço</label>
      <input type="number" name="price" id="price" value="<?php echo "$pizza[price]"?>">
    </div>

    <div>
      <button type="submit">Alterar</button>
      <a href="./listingData.php">Cancelar</a>
    </div>
  </form>
  <script src="./js/themeSwitcher.js"></script>
  <script src="./js/mobileMenu.js"></script>
</body>
</html>