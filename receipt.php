<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Рецепты</title>
    <link rel="stylesheet" href="receipt.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="main.php">
                <img src="img/e360a1217fb79485bf0cbe786f05c35e.png" alt="Логотип">
            </a>
            <p>Рецепты №1</p>
        </div>
        <nav>
            <ul>
                <li><a href="receipt.php">Рецепты</a></li>
                <li><a href="news.php">Статьи</a></li>
                <li><a href="contacts.php">Контакты</a></li>
                <li><a href="about.php">О нас</a></li>
                <li><a href="login.php">Вход</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1 class="recipes-heading">Рецепты</h1>
        <div class="divider"></div> 
        
        <div class="recipes-container">
            <?php
            $recipes = [
                ['id' => '1', 'name' => 'Вишневый штрудель', 'image' => 'img/cherry.jpg'],
                ['id' => '2', 'name' => 'Картофельный гратен', 'image' => 'img/potato.jpg'],
                ['id' => '3', 'name' => 'Марокканский молочный коктейль c бананом', 'image' => 'img/coctale.jpg'],
                ['id' => '4', 'name' => 'Крабовый салат', 'image' => 'img/crab.jpg'],
                ['id' => '5', 'name' => 'Шоколадный торт', 'image' => 'img/cake_chocolate.jpg'],
                ['id' => '6', 'name' => 'Том Ям', 'image' => 'img/tomyam.jpg'],
                ['id' => '7', 'name' => 'Сырные палочки', 'image' => 'img/cheesestrips.jpg'],
                ['id' => '8', 'name' => 'Голубцы', 'image' => 'img/golubci.jpg'],
                ['id' => '9', 'name' => 'Фаршированные перцы', 'image' => 'img/pepper.jpg'],
                ['id' => '10', 'name' => 'Тартильи', 'image' => 'img/mexico.jpg'],
                ['id' => '11', 'name' => 'Сладкие блины с ягодами', 'image' => 'img/blini.jpg'],
                ['id' => '12', 'name' => 'Домашняя пицца', 'image' => 'img/pizza.jpg']
            ];

            foreach ($recipes as $recipe) {
                echo '<div class="recipe-item" data-id="' . $recipe['id'] . '">';
                echo '<img src="' . $recipe['image'] . '" alt="' . htmlspecialchars($recipe['name']) . '">';
                echo '<p>' . htmlspecialchars($recipe['name']) . '</p>';
                echo '<button class="favorite-btn">Добавить в избранное</button>';
                echo '</div>';
            }
            ?>
        </div>
    </main>

    <footer>
        <div class="contact-info">
            <div class="phone">
                <img src="img/free-icon-phone-call-126509.png" alt="Телефон" class="icon">
                <span>+7(999)999-99-99</span>
            </div>
            <div class="email">
                <img src="img/free-icon-envelope-481659.png" alt="Почта" class="icon">
                <span>RICHEPTI_TOP@MPT.RU</span>
            </div>
        </div>
    </footer>

    <script src="favorite.js"></script>
</body>
</html>
