<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Кафе - "Радуга"</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php require ('modules/header.php');?>
    <div class="content">
        <div class="container">
            <div class="container flex">
                <div class="left-container col-md-4">
                    <h1>Наши контакты:</h1>
                    <h2>Позвоните нам:</h2>
                    <p>+7 (495) 429-88-88; +7 (966) 099-48-48</p>
                    <h2>Наш адрес:</h2>
                    <p>Кафе Радуга располагается в 10 минутах пешком от метро Ясенево. Наш адрес: г. Москва ул. Вильнюсская д.5</p>
                </div>
                <div class="right-container col-md-8">
                   <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A7fe9e7fe2624409507051151143ec132e730ca236277d44bc9547f16e21ae250&amp;source=constructor" width="625" height="401" frameborder="0"></iframe>
                </div>
                

            </div>
            <div class="container">
               <div class="feedback">
                   
               
                <h2>Оставьте свой отзыв: </h2>
            
            <form action="">
                <input type="text" placeholder="Ваше имя">
                <input type="email" placeholder="Ваш E-mail">
                <input type="phone" placeholder="Ваш телефон">
                <p>Ваше сообщение:</p>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button>Отправить</button>
            </form>
            </div>
            </div>
        </div>




    
    </div>
    <?php require ('modules/footer.php');?>
</body>

</html>
