<!DOCTYPE html>
<html lang="en">
<head>
    <link href="@yield('library')" rel="stylesheet" type="text/css" >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home in Phone</title>
</head>
<body>
    <div class="head">
        <div>
            <div class="logo">Home in Phone</div>
            <div class="logo2">Система розумного будинку</div>
        </div>
        <div class="head_text">
            <a href="/index/page=landing&lib=landing">Головна</a>
            <a href="/index/page=shop&lib=shop&shop_type=0">Каталог</a>
            <a href="/index/page=inform&lib=inform">Про нас</a>
            <button id="btn_search"></button>
            <button id="btn_phone"></button>
            <button id="btn_buy"></button>
            <button id="btn_menu"></button>
        </div>
    </div>

    @yield('content')

    <div class="foot">
        <div class="foot_1">
            <a href="/index/page=landing&lib=landing">Головна</a>
            <a href="/index/page=shop&lib=shop&shop_type=0">Каталог</a>
            <a>Кошик</a>
            <a href="/index/page=inform&lib=inform">Про нас</a>
        </div>
        <div class="foot_2">
            <a>т.+38(066)-450-61-23</a>
            <button id="button_t"></button>
            <button id="button_e"></button>
            <button id="button_i"></button>
        </div>
    </div>
    <div class="foot_small">
        <div class="foot_1">
            <div>
                <a href="/index/page=landing&lib=landing">Головна</a>
                <a href="/index/page=shop&lib=shop&shop_type=0">Каталог</a>
                <a>Кошик</a>
                <a href="/index/page=inform&lib=inform">Про нас</a>
            </div>
            <div>
                <button id="button_t_s"></button>
                <button id="button_e_s"></button>
                <button id="button_i_s"></button>
            </div>
        </div>
        <div class="foot_2">
            <a>т.+38(066)-450-61-23</a>
        </div>
    </div>
</body>
</html>

