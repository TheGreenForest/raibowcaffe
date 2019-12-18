<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Кафе - "Радуга"</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css" />
</head>

<body>

    <?php require ('modules/header.php');?>

    <div class="content">
        <div class="top-container">
            <div class="container flex">
                <div class="left-container col-md-4">
                    <p>Накопленный с годами опыт позволяет нам приготовить и осуществить доставку пиццы или других блюд так, чтобы все наши клиенты остались довольны, как качеством продукции, так и уровнем обслуживания.</p>
                    <p>Мы начинаем готовить пиццу сразу после Вашего заказа и уже через 50 минут заказанная пицца будет у Вас на столе!</p>
                    <p>Доставка пиццы и любых других блюд от кафе Радуга осуществляется в термо-сумках, и Вы можете быть уверены, что Ваш заказ не успеет остыть.</p>
                    <p>Мы работаем только с самыми свежими и высококачественными продуктами, соблюдая все необходимые технологии приготовления, и хранения приготовленных блюд.</p>
                    <p>Кафе Радуга в Ясенево - это всегда отменное качество и безупречная доставка пиццы и горячих обедов!</p>
                </div>
                <div class="rightcontainer col-md-8">
                    <h2>Как нас найти?</h2>
                    <p>Кафе Радуга располагается в 10 минутах пешком от метро Ясенево.
                        Наш адрес: г. Москва ул. Вильнюсская д.5, тел. +7(495) 421-88-88; +7(966) 099-48-48
                        часы работы: c 11:00 до 23:00 тел.</p>
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7fe9e7fe2624409507051151143ec132e730ca236277d44bc9547f16e21ae250&amp;source=constructor" width="625" height="401" frameborder="0"></iframe>
                </div>
            </div>
        </div>

        <div class="bottom-container flex" style="">
            <div class="container flex">
                <div class="left-container col-md-6">
                    <h1>Летнее кафе "Радуга"</h1>
                    <p>С наступлением долгожданного лета приглашаем Вас, уважаемые господа, в изысканное летнее кафе. <br>
                        Шелест распустившейся зелени создают атмосферу уюта и покоя. Здесь свежо и прохладно в знойный полдень и необыкновенно умиротворяющее вечером.</p>
                    <p>Московское лето не часто балует хорошей погодой, но уж если выдаются жаркие деньки, то хочется как можно больше времени проводить на открытом воздухе.</p>
                    <p>Если после напряженного трудового дня вы хотите отдохнуть и подкрепиться в тенистом укромном уголке - посетите летнюю веранду кафе "Радуга".</p>
                    <p>Здесь можно вкусно поесть, поболтать с друзьями за бокалом охлажденного пива, полакомиться вместе с детьми мороженым, вкусными фруктовыми коктейлями или любимыми прохладительными напитками, почитать газету за чашечкой ароматного кофе.</p>
                </div>
                <div class="rightcontainer col-md-6">
                    <h1>Шашлычек на свежем воздухе, что может быть лучше!</h1>
                    <p>Наш повар приготовит для Вас специальное меню: нежный сочный шашлык из баранины, свинины, говядины, семги, куриные крылышки, аппетитные котлетки люля, легкие витаминные салатики, выпечку и многое многое другое..</p>
                    <p>Приходите в кафе "Радуга" с коллегами, друзьями или всей семьей и получите удовольствие от общения, изобилия освежающих напитков и замечательной кухни!</p>
                    <div class="img"></div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="slider multiple-items">
                <div><img src="image/about/cafe1.jpg" alt=""></div>
                <div><img src="image/about/cafe2.jpg" alt=""></div>
                <div><img src="image/about/cafe3.jpg" alt=""></div>
                <div><img src="image/about/cafe4.jpg" alt=""></div>
                <div><img src="image/about/cafe5.jpg" alt=""></div>
                <div><img src="image/about/cafe6.jpg" alt=""></div>
            </div>
        </div>

    </div>
    <?php require ('modules/footer.php');?>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });

    </script>
</body>

</html>
