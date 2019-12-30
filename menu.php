<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Кафе - "Радуга"</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/jqcart.css">
</head>

<body>
    <?php require ('modules/header.php');?>
    <div class="content">

        <div class="container">
            <h1><a name="pizza"></a>Пицца</h1>
            <div class="article flex">

                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/pizza/tunec.jpg" alt="">
                        <h2>Пицца "Тунец"</h2>
                        <p>Сырок, тунец, тесто там есть. Вооооот. Оч вкусно... наверное=)</p>
                        <div class="buy flex">
                            <p>440 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart" data-id="1" data-title="Пицца с тунцом" data-price="440">В корзину</button>
                        </div>
                    </div>
                </div>

                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/pizza/tunec.jpg" alt="">
                        <h2>Пицца "Тунец"</h2>
                        <p>Сырок, тунец, тесто там есть. Вооооот. Оч вкусно... наверное=)</p>
                        <div class="buy flex">
                            <p>400 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart" data-id="2" data-title="Пицца не с тунцом" data-price="400">В корзину</button>
                        </div>
                    </div>
                </div>

            </div>




            <h1><a name="sushi"></a>Суши</h1>
            <div class="article flex">

            </div>
            <h1><a name="hot"></a>Горячие блюда</h1>
            <div class="article flex">

            </div>
            <h1><a name="shashlik"></a>Шашлык</h1>
            <div class="article flex">

            </div>
            <h1><a name="pasta"></a>Паста</h1>
            <div class="article flex">

            </div>
            <h1><a name="garnir"></a>Гарниры</h1>
            <div class="article flex">

            </div>
            <h1><a name="soup"></a>Супы</h1>
            <div class="article flex">

            </div>
            <h1><a name="cold"></a>Холодные блюда</h1>
            <div class="article flex">
                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/cold/solenya.jpg" alt="">
                        <h2>Соленья"</h2>
                        <p>Квашенная капуста, огурцы маринованные, чеснок маринованный, помидоры маринованные</p>
                        <div class="buy flex">
                            <p>440 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart">В корзину</button>
                        </div>
                    </div>
                </div>

            </div>

            <h1><a name="salati"></a>Салаты</h1>
            <div class="article flex">

            </div>
            <h1><a name="vipechka"></a>Выпечка</h1>
            <div class="article flex">

            </div>
            <h1><a name="dessert"></a>Десерты</h1>
            <div class="article flex">

            </div>
        </div>

    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jqcart.js"></script>
    <script type="text/javascript">
        $(function() {
            'use strict';
            // инициализация плагина
            $.jqCart({
                buttons: '.add-cart', // селектор кнопок, аля "Добавить в корзину"
                handler: '/php/handler.php', // путь к обработчику
                visibleLabel: false, // показывать/скрывать ярлык при пустой корзине (по умолчанию: false)
                openByAdding: false, // автоматически открывать корзину при добавлении товара (по умолчанию: false)
                currency: '₽', // валюта: строковое значение, мнемоники (по умолчанию "$")
                cartLabel: '.count'
                /* селектор элемента, где будет размещен ярлык, 
                                                        он же - "кнопка" для открытия корзины */
            });

        });
        $('#open').click(function() {
            $.jqCart('openCart'); // открыть корзину
        });
        $('#clear').click(function() {
            $.jqCart('clearCart'); // очистить корзину
        });

    </script>
    <?php require ('modules/footer.php');?>
</body>

</html>
