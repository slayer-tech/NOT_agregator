<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="logo"></div>
            <nav class="nav-list">
                <a href="">
                    <img src="{{ asset("img/house.svg")  }}" alt="">
                    <span>Главная</span>
                </a>
                <a href="">
                    <img src="{{ asset("img/catalog.svg") }}" alt="">
                    <span>Каталог</span>
                </a>
                <a href="">
                    <img src="{{ asset("img/contact.svg") }}" alt="">
                    <span>Контакты</span>
                </a>
            </nav>
        </div>
    </header>
    <div class="under-header">
        <div class="container">
            <ul class="categories">
                <li>Еда</li>
                <li>Кинотеатры</li>
                <li>Театры</li>
                <li>Развлечения</li>
            </ul>
        </div>
    </div>

    <div class="filters">
        <select name="" id=""></select>
    </div>

</body>
</html>
