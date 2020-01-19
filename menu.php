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
            <h1><a name="pizza"></a>Пицца 32см</h1>
            <div class="article flex">

                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/pizza/margarita.jpg" alt="" style="
    justify-content: flex-start;">
                        <h2>Маргарита</h2>
                        <p>Специальный соус, сыр Моцарелла, помидоры</p>
                        <div class="buy flex">
                            <p>440 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart" data-id="1" data-title="Пицца Маргарита" data-price="440">В корзину</button>
                        </div>
                    </div>
                </div>

                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/pizza/fiesta.jpg" alt="">
                        <h2>Фиеста</h2>
                        <p>Соус, сыр Моцарелла, ветчина, бекон</p>
                        <div class="buy flex">
                            <p>520 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart" data-id="2" data-title="Пицца Фиеста" data-price="520">В корзину</button>
                        </div>
                    </div>
                </div>

                <div class="item-wrapper col-md-4">
                    <div class="item-card ">
                        <img src="/image/menu/pizza/gribnaya.jpg" alt="">
                        <h2>Грибная</h2>
                        <p>Спец. соус, сыр Моцарелла, шампиньоны, зелень</p>
                        <div class="buy flex">
                            <p>520 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart" data-id="3" data-title="Пицца Грибная" data-price="520">В корзину</button>
                        </div>
                    </div>
                </div>

            </div>




            <h1>Пицца 38см</h1>
            <div class="article flex">

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

    <?php require ('modules/footer.php');?>
</body>

</html>
