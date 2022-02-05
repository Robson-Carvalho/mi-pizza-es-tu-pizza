<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/defaultStyles.css">
  <link rel="stylesheet" href="./styles/responsive.css">
  <title>Mi pizza es tu pizza - Home</title>
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
  <main class="main">
    <section class="theme">
      <div class="switcher">
        <img src="./assets/moon.svg" alt="">
        <img src="./assets/sun.svg" alt="">
        <div class="ball"></div>
      </div>
    </section>
  </main>

  <script src="./js/themeSwitcher.js"></script>
  <script src="./js/mobileMenu.js"></script>
</body>

</html>