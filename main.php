<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рецепты</title>
    <link rel="stylesheet" href="main.css">
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

    <main>
        <div class="recipe-container">
            <div class="recipe-image">
                <img src="img\zmed-hero.jpg" alt="">
            </div>
            <div class="navigation">
                <button class="prev">←</button>
                <button class="next">→</button>
            </div>
            <a href="receipt.php"> 
                <button class="recipes-btn">Рецепты</button>
            </a>
        </div>
        
        <section class="popular-recipes">
            <h2>Самые популярные рецепты</h2>
            <p>Все рецепты подборки проверены нашими авторами, и вы можете быть уверены, что у вас получится их приготовить быстро и вкусно!</p>
            <div class="container-wrapper">
                <div class="container">
                    <div class="image-container">
                        <img src="img\kristina.jpg" alt="">
                    </div>
                    <h3 class="title">Сосиски в тесте</h3>
                    <div class="info">
                        <div class="icons">
                            <div class="icon">
                                <img src="img/free-icon-time-3239945.png" alt="">
                                <p>1 час</p>
                            </div>
                            <div class="icon">
                                <img src="img/free-icon-cutlery-4441954.png" alt="">
                                <p>280 ккал</p>
                            </div>
                        </div>
                        <div class="bju">
                            <p>Б: 17г</p>
                            <p>Ж: 10г</p>
                            <p>У: 21г</p>
                        </div>
                    </div>
                    <p class="description">Сосиски в тесте - очень вкусный перекус. Их можно брать с собой в школу, на работу или пикник. Сосиска в тесте - это сочетание мягкого нежного теста и вкусной начинки.</p>
                </div>
        
                <div class="container">
                    <div class="image-container">
                        <img src="img\carbonara.jpg" alt="">
                    </div>
                    <h3 class="title">Паста Карбонара</h3>
                    <div class="info">
                        <div class="icons">
                            <div class="icon">
                                <img src="img/free-icon-time-3239945.png" alt="">
                                <p>30 мин</p>
                            </div>
                            <div class="icon">
                                <img src="img/free-icon-cutlery-4441954.png" alt="">
                                <p>318 ккал</p>
                            </div>
                        </div>
                        <div class="bju">
                            <p>Б: 10г</p>
                            <p>Ж: 15г</p>
                            <p>У: 18г</p>
                        </div>
                    </div>
                    <p class="description">Спагетти Карбонара — классическое итальянское блюдо, которое завоевало популярность во всем мире.</p>
                </div>
        
                <div class="container">
                    <div class="image-container">
                        <img src="img\cesar.jpg" alt="">
                    </div>
                    <h3 class="title">Классический салат Цезарь с курицей</h3>
                    <div class="info">
                        <div class="icons">
                            <div class="icon">
                                <img src="img/free-icon-time-3239945.png" alt="">
                                <p>55 мин</p>
                            </div>
                            <div class="icon">
                                <img src="img/free-icon-cutlery-4441954.png" alt="">
                                <p>73 ккал</p>
                            </div>
                        </div>
                        <div class="bju">
                            <p>Б: 107г</p>
                            <p>Ж: 164г</p>
                            <p>У: 72г</p>
                        </div>
                    </div>
                    <p class="description">Цезарь с курицей — это один из самых популярных салатов на праздничном столе и вечная классика в кафе и ресторанах. Однако такой шедевр под силу приготовить и в домашних условиях, из классического набора продуктов к салату можно воплотить несколько простых разновидностей цезаря.</p>
                </div>
            </div>
        </section>
        
        
    </main>

    <footer>
        <div class="contact-info">
            <div class="phone">
                <img src="img\free-icon-phone-call-126509.png" alt="" class="icon">
                <span>+7(999)999-99-99</span>
            </div>
            <div class="email">
                <img src="img\free-icon-envelope-481659.png" alt="" class="icon">
                <span>RICHEPTI_TOP@MPT.RU</span>
            </div>
        </div>
        <div class="footer-text">
            <p>Добро пожаловать на наш сайт рецептов, где каждый найдет вдохновение для кулинарных шедевров! Мы предлагаем простые и вкусные рецепты на любой вкус - от быстрых закусок до изысканных десертов. Исследуйте разнообразие блюд, делитесь своими находками и начинайте готовить с любовью.</p>
        </div>
    </footer>
    
    

    <script src="main.js"></script>
</body>
</html>