<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Кафе - "Радуга"</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/menu.css">
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
                            <p>400 <span style="font-size: 25px;">₽</span></p>
                            <button class="add-cart">В корзину</button>
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
                            <p>400 <span style="font-size: 25px;">₽</span></p>
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
