<div class="footer">
    <div class="container flex">
        <div class="footer-left-menu col-md-6">
            <div class="logo">
                <div class="logo-image"><img src="/image/logo/rainbow-logo.svg" alt="Логотип" style="width: 100%;"></div>
                <div class="logo-text">
                    <div class="logo-text-main">Кафе Радуга</div>
                    <div class="logo-text-discription">"Хорошее блюдо - это блюдо из свежих продуктов. <br>Каждое блюдо требует свою порцию любви".</div>
                </div>
            </div>
            <ul type="none" class="footer-nav">
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/about.php">О нас</a></li>
                <li><a href="/contact.php">Контакты</a></li>
                <li><a href="/menu.php">Меню</a></li>
            </ul>
        </div>
        <!--
        <div class="footer-right-menu col-md-6">
            <div class="social">
                <ul type="none" class="footer-nav flex">
                    <li><a href="">ВК</a></li>
                    <li><a href="">Феисбук</a></li>
                </ul>
                <ul type="none" class="footer-nav flex">
                    <li><a href="">ВК</a></li>
                    <li><a href="">Феисбук</a></li>
                </ul>
            </div>
        </div>
-->

    </div>
    <div class="copy col-md-12">© RainbowPizza2005 - 2020</div>
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/js/jqcart.js"></script>
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
<script type="text/javascript">
    //    $(window).scroll(function() {
    //        var scrolled = $(this).scrollTop();
    //        //        if (scrolled >= 107) {
    //        //            $('.up').addClass('hiden');
    //        //
    //        //        }
    //        //        if (scrolled <= 107) {
    //        //            $('.up').removeClass('hiden');
    //        //        }
    //        if (scrolled >= 110) {
    //            $('.header').addClass('fixed');
    //
    //        }
    //        if (scrolled <= 110) {
    //            $('.header').removeClass('fixed');
    //        }
    //    });

</script>
