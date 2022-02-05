<?php
  require "connection.php";

  $sqlQuery = "SELECT * FROM pizza";
	$query = mysqli_query($connection, $sqlQuery);
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
<table border="1">
			<tr>
				<th>Nome</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Preço</th>    
        <th>Alterar</th>    
        <th>Apagar</th>
			</tr>
			<?php
				while ($pizza = mysqli_fetch_assoc($query)){
					echo "<tr>
						      <td>$pizza[name]</td>
                  <td>$pizza[description]</td>
                  <td>$pizza[category]</td>
                  <td>$pizza[price]</td>
                  <td><a href='changeForm.php?id=$pizza[ID]'>Alterar dados</a></td>
                  <td><a href='delete.php?id=$pizza[ID]'>Apaga produto</a></td>	
						    </tr>
					";
				}
			?>
		</table>		
    <script src="./js/themeSwitcher.js"></script>
    <script src="./js/mobileMenu.js"></script>
</body>
</html>