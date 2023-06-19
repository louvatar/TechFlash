<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style-home.css">
    <title>webSite</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <img src="img/logo-home.png" class="logo-home" alt="imagem_test">
            <a href="#" class="logo">T<span>ech</span>F<span>lash</span></a>
            <ul class="nav-menu">
                <li class="nav-item"><a href="#">Home</a></li><!--tu pode mudar o link do href-->
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Menu</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>
            </ul>
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Bem-vindo a TechFlash</h4><!--tu pode mudar o texto se quiser-->
                <h1 class="text-h1">O serviço de maior qualidade e agilidade criado.</h1>
                <p>Estamos sempre à disposição para oferecer o serviço de maior prontidão e confiabilidade.</p>
                <a href="cadastrar.php" class="home-btn">Cadastre-se</a>
                <a href="login.php" class="home-btn2">Conecte-se</a>
            </div>
            <div class="home-img">
                <img class="home-image" src="img/home.jpg" alt="imagem_test"><!-- O NOME DA IMAGEM QUE TU QUER COLOCAR TEM QUE SER "home"-->
            </div>
        </section>
    </main>
    <script src="script2.js"></script>
</body>
</html>