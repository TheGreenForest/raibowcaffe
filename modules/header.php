<div class="header ">
    <div class="up-menu"> <a name="top"></a>
        <a href="#top" class="up">
            <div class="inner-up">
                <div class="left"></div>
                <div class="right"></div>
            </div>
        </a>
        <div class="container flex s-between ">
            <a href="index.php">
                <div class="logo">
                    <div class="logo-image"><img src="image/logo/rainbow-logo.svg" alt="Логотип" style="width: 100%;"></div>
                    <div class="logo-text">
                        <div class="logo-text-main">Кафе Радуга</div>
                        <div class="logo-text-discription">"Хорошее блюдо - это блюдо из свежих продуктов. <br>Каждое блюдо требует свою порцию любви".</div>
                    </div>
                </div>
            </a>

            <div class="delivery">
                <p>При заказе от <span style="font-size:25px">500</span> рублей <br> доставка бесплатно</p>
            </div>
            <div class="nav">
                <ul type="none" class="nav-menu">
                    <li><a href="/index.php">Главная</a></li>
                    <li><a href="/about.php">О нас</a></li>
                    <li><a href="/contact.php">Контакты</a></li>
                    <li style="padding-right:0;">
                        <div class="dropdown">
                            <a href="/menu.php" class="dropbtn">Меню</a>
                            <div class="dropdown-content">
                                <a href="/menu.php#pizza32">Пицца 32</a>
                                <a href="/menu.php#pizza38">Пицца 38</a>
                                <a href="/menu.php#sushi">Суши и роллы</a>
                                <a href="/menu.php#hot">Горячие<br> блюда</a>
                                <a href="/menu.php#shashlik">Шашлык</a>
                                <a href="/menu.php#pasta">Паста</a>
                                <a href="/menu.php#garnir">Гарниры</a>
                                <a href="/menu.php#soup">Супы</a>
                                <a href="/menu.php#cold">Холодные блюда</a>
                                <a href="/menu.php#salati">Салаты</a>
                                <a href="/menu.php#vipechka">Выпечка</a>
                                <a href="/menu.php#dessert">Десерты</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
                if($_SERVER['REQUEST_URI'] == "/menu.php")
                echo '<div class="open-cart" id="open">
                    <div class="cart-container flex">
                        <img src="/image/logo/cart.svg" alt="" class="open-cart"> <span class="count"></span>
                    </div>
                </div>';
            ?>
            <div class="header-phone">
                <p>+7 (495) 429-88-88</p>
                <p>+7 (966) 099-48-48</p>
            </div>
        </div>
    </div>
</div>
