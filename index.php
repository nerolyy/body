<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<header>
        <div class="logo">
            <a href="main.php">
                <img src="img\e360a1217fb79485bf0cbe786f05c35e.png"/>
            </a>
            <p>Рецепты №1</p>
        </div>
        <nav>
            <ul>
                <li><a href="receipt.php">Рецепты</a></li>
                <li><a href="news.php">Статьи</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="index.php">Вход</a></li>
                
            </ul>
        </nav>
    </header>
<h2>Регистрация</h2>
    <form action="register.php" method="post">
        <input type="text" placeholder="Логин" name="login">
        
        <div class="password-container">
            <input type="password" placeholder="Пароль" name="pass" id="password1">
            <i class="fas fa-eye" onclick="togglePassword('password1')"></i>
        </div>
        
        <div class="password-container">
            <input type="password" placeholder="Повторите пароль" name="repeatpass" id="password2">
            <i class="fas fa-eye" onclick="togglePassword('password2')"></i>
        </div>
        
        <input type="text" placeholder="Почта" name="email">
        <button type="submit">Зарегистрироваться</button>
    </form>

    <div class="divider"></div>

    <h2>Авторизация</h2>
    <form action="login.php" method="post">
        <input type="text" placeholder="Логин" name="login">
        
        <div class="password-container">
            <input type="password" placeholder="Пароль" name="pass" id="loginPassword">
            <i class="fas fa-eye" onclick="togglePassword('loginPassword')"></i>
        </div>
        
        <button type="submit">Войти</button>
    </form>

<script src="login.js"></script>

</body>
</html>