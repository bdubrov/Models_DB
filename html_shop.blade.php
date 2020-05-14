<div class="first">
    <a href="/index/page=shop&lib=shop&shop_type=1">Стартові набори</a>
    <a href="/index/page=shop&lib=shop&shop_type=2">Головні модулі керування</a>
    <a href="/index/page=shop&lib=shop&shop_type=3">Модулі та датчики</a>
</div>

<div class="body">
        <div class="catalog">
            @yield('shop_content')
            <div class="last">
                <img src="{{asset('/img/Mobileapp.jpg')}}">
                <div class="last_content">
                    <h6>Мобільний додаток</h6>
                    <p>
                        За допомогою мобільного додатку ви можете керувати модулями
                        Home In Phone, створювати особисті сценарії та завжди
                        бути впевненими у безпеці свого будинку.
                        <br><br>
                        Перетворіть свій дім у розумного помічника разом з<br>
                        Home In Phone!
                    </p>
                    <button>Завантажити</button>
                </div>
            </div>
            <div class="last_small">
                <h6>Мобільний додаток</h6>
                <img src="{{asset('/img/Mobileapp.jpg')}}">
                <p>
                    За допомогою мобільного додатку ви можете керувати модулями
                    Home In Phone, створювати особисті сценарії та завжди
                    бути впевненими у безпеці свого будинку.
                    <br><br>
                    Перетворіть свій дім у розумного помічника разом з<br>
                    Home In Phone!
                </p>
                <button>Завантажити</button>
            </div>
        </div>
</div>

