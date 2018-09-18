<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125263120-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-125263120-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="imagetoolbar" content="no">
    <meta name="msthemecompatible" content="no">
    <meta name="cleartype" content="on">
    <meta name="HandheldFriendly" content="True">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="google" value="notranslate">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="application-name" content="">
    <meta name="msapplication-tooltip" content="">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-large.png">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-square70x70logo" content="/mstile-small.png">
    <meta name="msapplication-square150x150logo" content="/mstile-medium.png">
    <meta name="msapplication-wide310x150logo" content="/mstile-wide.png">
    <meta name="msapplication-square310x310logo" content="/mstile-large.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Hvoinui kvartal</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="assets/styles/app.min.css" rel="stylesheet">
    <link link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Playfair+Display:400,400i,700,700i,900,900i&amp;amp;subset=cyrillic"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDObzF8A8Vqz2T9AsISL_wkI8EmpjFzpRE"></script>
    <style>


        .slick-slide{
            min-height: unset !important;
        }

        i{
            color: white;
        }
        .js-next-photo,.js-prev-photo{
            font-size: 30px;
        }
        .js-next-photo{
            position: fixed;
            top: 50%;
            right: 35px;
            z-index: 999;
        }
        .js-prev-photo{
            position: fixed;
            top: 50%;
            left: 35px;
            z-index: 999;
        }

        @media screen and (max-width: 680px){
            .js-prev-photo{
                left: 4px
            }
            .js-next-photo{
                 right: 4px
            }

        }
        .js-close-modal{
            position: fixed;
            right: 10px;
            top: 10px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        .hvoinui__slider-item{
            cursor: pointer;
        }
        .hide{
            display: none !important;

        }
        .modal-wrapper{
            height: 0;
            width: 100%;
            position: fixed;
            top: 0px;
            left: 0px;
            z-index: 998;
        }
        .modal{
            top: 0px;
            left: 0px;
            z-index: 998;
            width: 100vw;
            height: 100vh;
            position: fixed;
            background-color: rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .modal img{
            max-width: 95%;
            max-height: 100%;
        }

        @media screen and (max-width: 420px){
            .hvoinui__banner-title{
                padding-bottom: 65px;
            }
        }

        .slick-dots{
            pointer-events: none;
        }

        .js-open-full{
            transform: none !important;
            opacity: 1 !important;
        }

    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P3KSH6K"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="hvoinui">
    <div class="hvoinui__header">
        <div class="hvoinui__content hvoinui__content_flex">
            <img src="assets/images/logo-hvoinui.svg" class="hvoinui__logo" alt="" />
            <div class="hvoinui__nav">
                <ul class="hvoinui__nav-list">
                    <li class="hvoinui__nav-list-item">
                        <a href="#about" class="hvoinui__nav-list-item hvoinui__nav-list-item_link">о комплексе</a>
                    </li>
                    <li class="hvoinui__nav-list-item">
                        <a href="#plans" class="hvoinui__nav-list-item hvoinui__nav-list-item_link">планы коттеджей</a>
                    </li>
                    <li class="hvoinui__nav-list-item">
                        <a href="#tech-description" class="hvoinui__nav-list-item hvoinui__nav-list-item_link">тех.характеристики</a>
                    </li>
                    <li class="hvoinui__nav-list-item">
                        <a href="#gallery" class="hvoinui__nav-list-item hvoinui__nav-list-item_link">галерея</a>
                    </li>
                    <li class="hvoinui__nav-list-item">
                        <a href="#map" class="hvoinui__nav-list-item hvoinui__nav-list-item_link">инфраструктура</a>
                    </li>
                </ul>
                <div class="hvoinui__nav-mobile">
                    <p class="hvoinui__banner-location">Обуховский район, ул.Придорожная, 8/22</p>
                    <a href="tel:+380675770944" class="hvoinui__banner-phone">+380 (67) 577-09-44</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hvoinui__banner">
        <div class="hvoinui__banner-left"></div>
        <div class="hvoinui__content">
            <div class="hvoinui__banner-main">
                <h1 class="hvoinui__banner-title js-box">Хвойный Квартал</h1>
                <h1 class="hvoinui__banner-title js-box" style="
                    font-size:  20px;
                    color: black;
                    font-weight: 600;
                    padding-bottom:  20px;
                    margin-top: -70px;
                ">Конча Заспа</h1>
                <div class="hvoinui__banner-caption js-box">КОТТЕДЖНЫЙ ГОРОДОК 1.5 КМ ОТ ЧЕРТЫ Г.КИЕВА</div>
                <ul class="hvoinui__banner-list">
                    <li class="hvoinui__banner-list-item js-box">8 полностью готовых коттеджей</li>
                    <li class="hvoinui__banner-list-item js-box">высокий уровень комфорта</li>
                    <li class="hvoinui__banner-list-item js-box">высококачественные материалы</li>
                </ul>
                <a href="#form" class="hvoinui__banner-cta">заказать просмотр</a>
            </div>
            <div class="hvoinui__banner-contact">
                <p class="hvoinui__banner-location js-box">Обуховский район, пгт Козин, ул.Придорожная, 8/22</p>
                <a href="tel:+380675770944" class="hvoinui__banner-phone js-box">+380 (67) 577-09-44</a>
            </div>
        </div>
        <div class="hvoinui__banner-right js-right">
            <!--<img src="assets/images/hk-plan.jpg" class="hvoinui__banner-image" alt="" />-->
            <img src="assets/new2/avatar.jpg" class="hvoinui__banner-image" alt="" />
        </div>
    </div>
    <a name="about" class="hvoinui__name"></a>
    <div class="hvoinui__description">
        <div class="hvoinui__content hvoinui__content_flex">
            <div class="hvoinui__description-left js-left">
                <div class="hvoinui__block-flex">
                    <h2 class="hvoinui__block-title hvoinui__block-title_1">О
                        <br/> комплексе</h2>
                    <p class="hvoinui__text">Закрытый Коттеджный городок расположен в респектабельном живописном пригороде Киева, Конча Заспа по Старообуховской трассе в экологически чистом пгт Козин. Вам не нужно представлять,
                        что будет – просто посмотрите, что уже есть. "Хвойный Квартал" построен в единой архитектурной концепции, объединен
                        живописной улицей, прекрасное место для круглогодичного проживания. Мы постарались учесть все требования к идеальному
                        дому. Близость городской черты, элитное окружение, а также удобное транспортное сообщение привлекает самых взыскательных
                        покупателей.</p>
                </div>
                <img src="assets/images/2.jpg" class="hvoinui__description-image" alt="" />
            </div>
            <div class="hvoinui__description-right">
                <ul class="hvoinui__description-list">
                    <li class="hvoinui__description-list-item js-box">100% готовность</li>
                    <li class="hvoinui__description-list-item js-box">высокий уровень комфорта</li>
                    <li class="hvoinui__description-list-item js-box">экология</li>
                    <li class="hvoinui__description-list-item js-box">всего 8 коттеджей</li>
                    <li class="hvoinui__description-list-item js-box">престиж</li>
                    <li class="hvoinui__description-list-item js-box">функциональная планировка</li>
                </ul>
            </div>
        </div>
    </div>

    <a name="plans" class="hvoinui__name"></a>
    <div class="hvoinui__plans">
        <div class="hvoinui__content">
            <div class="hvoinui__block-flex">
                <h2 class="hvoinui__block-title hvoinui__block-title_2">Планировки
                    <br/> коттеджей</h2>
                <p class="hvoinui__text">Въезд на каждый участок осуществляется через откатные автоматические ворота или калитку, оснащённую  системой видеонаблюдения и автоматическим отпиранием. Каждый двор вымощен натуральным гранитом инсталлированным на бетонном основании . Для вашего внимания – сосновые и экзотические породы деревьев и кустарника,газоны с морозоустойчивой травой на каждом участке.
                    Коттеджи исполнены в стиле современного европейского авангарда из современных технологичных, только экологически чистых и натуральных, сертифицированных материалов.
                    Каждый коттедж построен в одном уровне на монолитной плите из высококачественного бетона, толщиной 40 см и площадью 300 квадратных метров и представляет собой:
                    Уличную, накрытую террасу на два паркоместа, входную группу с просторным холлом и выходом в отдельный Гаражный бокс с котельной и бытовым помещением , гардеробом. Далее : гостиная – столовая, три отдельных спальни со своими санузлами и наконец закрытая просторная терраса с подвижным остеклением и обустроенной зоной барбекью с выходом к открытому бассейну с летним душем и соответственно на приусадебную  территорию.</p>
            </div>
            <div class="hvoinui__plans-block">
                <div class="hvoinui__plans-card">
                    <img src="assets/images/hk-plan.jpg" class="hvoinui__plans-image js-left" alt="" />
                    <div class="hvoinui__plans-description hvoinui__plans-description_1 js-right">
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Площадь коттеджа </span> - 240м2</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Высота потолков </span> - 3м</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Отопление </span> - радиаторы и полы с подогревом</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Полы </span> - кафель и массив дерева</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Сантехника </span> фирмы "Toto" (Япония)</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Коттедж </span> полностью меблирован!</p>
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> На участке </span> - 16-метровый открытый бассейн, ландшафтный дизайн</p>
                    </div>
                </div>
                <div class="hvoinui__plans-card">
                    <div class="hvoinui__plans-description hvoinui__plans-description_2 js-left">
                        <p class="hvoinui__plans-description-text hvoinui__plans-description-text_bold">
                            <span class='hvoinui__plans-description-text_normal'> Коттеджный городок состоит из </span> 8 домов типового проекта, все готовы к эксплуатации, некоторые частично меблированы.</p>
                    </div>
                    <img src="assets/images/house-plan.jpg" class="hvoinui__plans-image js-right js-open-full" data-index="99" alt="" />
                </div>
            </div>
        </div>
    </div>
    <a name="tech-description" class="hvoinui__name"></a>
    <div class="hvoinui__tech-description">
        <div class="hvoinui__content">
            <h2 class="hvoinui__block-title hvoinui__block-title_3">технические
                <br/> характеристики</h2>
            <div class="hvoinui__tech-block">
                <!--<h3 class="hvoinui__tech-description-title">Строительные материалы</h3>-->
                <div class="hvoinui__tech-description-block">
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_1 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Стены: </span> керамический кирпич Керма Терм + минеральная вата 150мм</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_2 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Двери: </span> алюминиевый профиль + стекло</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_3 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Окна: </span> 5-ти камерный алюминиевый профиль, 2х камерный стеклопакет и 6(i)мм-4мм-4(i)мм</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_4 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Газификация: </span> автономная ГРП на коттеджный городок, котел Viessmann, мощностью 27кВт</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_5 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Электричество: </span> мощность до 15 кВт на каждый коттедж, автономная ветка на КГ</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_6 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Канализация: </span> каскадная система септиков с принудительной аэрацией и датчиком на заполнение, GSM модуль с
                        смс уведомлением</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_7 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Вентиляция: </span> система кондиционирования и винтилирования</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_8 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Водоснабжение: </span> отдельные линии для питьевой воды (артезианская скважина, глубиной 77 м)</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_9 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Отопление: </span> газовый экономичный котел VIESSMANN (производство Германия), полы с водяным подогревом (гибкая
                        бесшовная труба, система без стыков), возможность установки камина</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_10 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Полы: </span> керамическое покрытие, натуральная массив смереки 40 мм, покрытый масло-воском (ОSМO), установленный
                        на фанерное основание.</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_11 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Радиаторы: </span> стальные (производство Австрия)</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_12 js-box">
                        <span class='hvoinui__tech-description-card_bold'> Проводка: </span> медь</p>
                </div>
                <h3 class="hvoinui__tech-description-title">Внутренняя Отделка</h3>
                <div class="hvoinui__tech-description-block">
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Система кондиционирования: </span> разведена и предполагает установку 2 сплитсистем</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Электрофурнитура: </span> электророзетки, выключатели Schneider (производства Франция)</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Интернет, телевидение: </span> оптико-волоконный высокоскоростной интернет, WI FI, адаптированный ТV пакет</p>
                    <p
                        class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Сантехническое оборудование: </span> компакт, раковина, биде, ТОТО (производство JAPAN), душевая кабина , смесители
                        Hansgroe (производство Германия), гидро-массажная душевая кабинa, электрические радиаторы (производство Австрия)</p>
                    <p
                        class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Санузлы: </span> керамическая плитка, каленое декоративное стекло</p>
                    <p class="hvoinui__tech-description-card hvoinui__tech-description-card_romb js-box">
                        <span class='hvoinui__tech-description-card_bold'> Мебель: </span> коттеджи полностью укомплектован мебелью и предметами интерьера (название, наименование)</p>
                </div>
            </div>
        </div>
    </div>
    <a name="gallery" class="hvoinui__name"></a>
    <div class="hvoinui__gallery">
        <div class="hvoinui__content">
            <h2 class="hvoinui__block-title hvoinui__block-title_4">Наша
                <br/> Галерея</h2>
            <div class="hvoinui__slider js-right js-slick">
                <img src="assets/images/hk-g-2.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="1"/>
                <img src="assets/images/hk-g-4.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="2"/>
                <img src="assets/images/hk-g-5.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="3"/>
                <img src="assets/images/hk-g-6.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="4"/>


                <img src="assets/new/3.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="5"/>
                <img src="assets/new/4.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="6"/>
                <img src="assets/new/5.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="7"/>
                <img src="assets/new2/1.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="8"/>
                <img src="assets/new2/2.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="9"/>
                <img src="assets/new2/3.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="10"/>
                <img src="assets/new2/4.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="11"/>
                <img src="assets/new2/5.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="12"/>
                <img src="assets/new2/6.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="13"/>
                <img src="assets/new2/7.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="14"/>
                <img src="assets/new2/8.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="15"/>
                <img src="assets/new2/9.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="16"/>
                <img src="assets/new2/10.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="17"/>
                <img src="assets/new2/11.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="18"/>
                <img src="assets/new2/12.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="19"/>



                <img src="assets/new3/1.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="20"/>
                <img src="assets/new3/2.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="21"/>
                <img src="assets/new3/3.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="22"/>
                <img src="assets/new3/5.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="23"/>
                <img src="assets/new3/6.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="24"/>
                <img src="assets/new3/7.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="25"/>
                <img src="assets/new3/8.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="26"/>
                <img src="assets/new3/9.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="27"/>
                <img src="assets/new3/12.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="28"/>
                <img src="assets/new3/13.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="29"/>
                <img src="assets/new3/14.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="30"/>
                <img src="assets/new3/15.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="31"/>
                <img src="assets/new3/17.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="32"/>
                <img src="assets/new3/18.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="33"/>
                <img src="assets/new3/19.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="34"/>
                <img src="assets/new3/20.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="35"/>
                <img src="assets/new3/21.JPG" class="hvoinui__slider-item js-open-full" alt=""  data-index="36"/>



            </div>
        </div>
    </div>
    <a name="map" class="hvoinui__name"></a>
    <div class="hvoinui__map">
        <div class="hvoinui__content">
            <h2 class="hvoinui__block-title hvoinui__block-title_5">Удобная
                <br/> Инфраструктура</h2>
            <div class="hvoinui__map-content-list">
                <div class="hvoinui__map-content-item js-box">Самая удобная и малозагруженная развязка в окрестностях г.Киева, отсутствие пробок в любое время суток.</div>
                <div class="hvoinui__map-content-item js-box">Сеть ресторанов(Тандыр, Подкова, Платинум, Купеческий Двор и др.) и лучших супермаркетов(Мегамаркет, Favore и др.).</div>
                <div
                    class="hvoinui__map-content-item js-box">Спортивные и медицинские комлексы: теннисные корты, оборудованная пляжная территория, конно-развлекательный комплекс,
                    прогулочные зоны, велодорожки, спортивный клуб "Sportlife".</div>
                <div class="hvoinui__map-content-item js-box">Англоязычный детский сад "Play Room" и частная школа "Atlantis".</div>
                <div class="hvoinui__map-content-item js-box">Также, рядом с "Хвойным Кварталом" находятся комлексы для отдыха и развлечений(Queen country club, GIARDINO и тд) и
                    торговые центры.</div>
            </div>
        </div>
        <div class="hvoinui__map-right js-right">
            <div id="map" class="hvoinui__map-init"></div>
        </div>
    </div>
    <div class="hvoinui__dignity">
        <div class="hvoinui__content">
            <h2 class="hvoinui__block-title hvoinui__block-title_6">Наши
                <br/> достоинства</h2>
            <ul class="hvoinui__dignity-block">
                <li class="hvoinui__dignity-block-item js-box">элитный район</li>
                <li class="hvoinui__dignity-block-item js-box">экологически чистое место</li>
                <li class="hvoinui__dignity-block-item js-box">коттеджи введены в эксплуатацию</li>
                <li class="hvoinui__dignity-block-item js-box">никаких инвестиций</li>
                <li class="hvoinui__dignity-block-item js-box">документами о частной собственности</li>
                <li class="hvoinui__dignity-block-item js-box">всего 1,5 км от черты города (до центра 20 мин)</li>
            </ul>
        </div>
    </div>
    <div class="hvoinui__video">
        <div class="hvoinui__content">
            <h2 class="hvoinui__block-title hvoinui__block-title_7">Съемка
                <br/> с квадрокоптера</h2>
            <div class="hvoinui__youtube-video js-block">

                <iframe width="69%" height="100%" src="https://www.youtube.com/embed/9WotyjgKykQ?rel=0" id="video" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <a name="form" class="hvoinui__name"></a>
    <div class="hvoinui__form">
        <div class="hvoinui__content hvoinui__content_flex-center">
            <div class="hvoinui__form-block js-block">
                <h3 class="hvoinui__form-title">запишитесь на просмотр</h3>
                <form method="post" class="hvoinui__form-content js-form" action="send.php">
                    <input placeholder="Ваше имя" class="hvoinui__form-input js-name" type="text" name="name"/>
                    <input placeholder="Ваш e-mail" class="hvoinui__form-input js-email" type="text" name="email"/>
                    <input placeholder="Ваш номер телефона" class="hvoinui__form-input js-number-input" type="text" name="phone"/>
                    <input type="submit" name="submit" class="hvoinui__form-button js-submit-button" value="Заказать просмотр">
                </form>
            </div>
        </div>
    </div>
    <div class="hvoinui__footer">
        <div class="hvoinui__content hvoinui__content_flex-center-between">
            <p class="hvoinui__banner-location hvoinui__banner-location_white">Обуховский район, пгт Козин, ул.Придорожная, 8/22</p>
            <a href="tel:+380675770944" class="hvoinui__banner-phone hvoinui__banner-phone_white">+380 (67) 577-09-44</a>
        </div>
    </div>
</div>
<aside class="modal-wrapper">
    <div class="js-modal-photo modal hide" data-index="1">
        <i class="far fa-times-circle js-close-modal" data-index="1"></i>
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="1"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="1"></i>
        <img src="assets/images/hk-g-2.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="1"/>
    </div>


    <div class="js-modal-photo modal hide" data-index="2">
        <i class="far fa-times-circle js-close-modal" data-index="2"></i>
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="2"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="2"></i>
        <img src="assets/images/hk-g-4.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="2"/>
    </div>
    <div class="js-modal-photo  modal hide" data-index="3">
        <i class="far fa-times-circle js-close-modal" data-index="3"></i>
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="3"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="3"></i>
        <img src="assets/images/hk-g-5.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="3"/>
    </div>

   <!--<div class="js-modal-photo  modal hide" data-index="4">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="4"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="4"></i>
        <i class="far fa-times-circle js-close-modal" data-index="4"></i>
        <img src="assets/images/hk-g-6.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="4"/>
    </div>

    <div class="js-modal-photo  modal hide" data-index="5">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="5"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="5"></i>
        <i class="far fa-times-circle js-close-modal" data-index="5"></i>
        <img src="assets/images/hk-g-7.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="5"/>
    </div>
    <div class="js-modal-photo  modal hide" data-index="6">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="6"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="6"></i>
        <i class="far fa-times-circle js-close-modal" data-index="6"></i>
        <img src="assets/images/hk-g-8.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="6"/>
    </div>


    <div class="js-modal-photo  modal hide" data-index="7">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="7"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="7"></i>
        <i class="far fa-times-circle js-close-modal" data-index="7"></i>
        <img src="assets/images/hk-g-10.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="7"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="8">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="8"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="8"></i>
        <i class="far fa-times-circle js-close-modal" data-index="8"></i>
        <img src="assets/images/hk-g-11.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="8"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="9">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="9"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="9"></i>
        <i class="far fa-times-circle js-close-modal" data-index="9"></i>
        <img src="assets/images/hk-g-12.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="9"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="10">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="10"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="10"></i>
        <i class="far fa-times-circle js-close-modal" data-index="10"></i>
        <img src="assets/images/hk-g-14.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="10"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="11">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="11"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="11"></i>
        <i class="far fa-times-circle js-close-modal" data-index="11"></i>
        <img src="assets/images/hk-g-16.jpg" class="hvoinui__slider-item js-open-full"  alt="" data-index="11"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="12">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="12"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="12"></i>
        <i class="far fa-times-circle js-close-modal" data-index="12"></i>
        <img src="assets/images/hk-g-17.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="12"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="13">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="13"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="13"></i>
        <i class="far fa-times-circle js-close-modal" data-index="13"></i>
        <img src="assets/images/hk-g-18.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="13"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="14">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="14"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="14"></i>
        <i class="far fa-times-circle js-close-modal" data-index="14"></i>
        <img src="assets/images/hk-g-19.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="14"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="15">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="15"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="15"></i>
        <i class="far fa-times-circle js-close-modal" data-index="15"></i>
        <img src="assets/images/hk-g-20.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="15"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="16">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="16"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="16"></i>
        <i class="far fa-times-circle js-close-modal" data-index="16"></i>
        <img src="assets/images/hk-g-21.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="16"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="17">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="17"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="17"></i>
        <i class="far fa-times-circle js-close-modal" data-index="17"></i>
        <img src="assets/new/2.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="17"/>
    </div>
    -->

    <div class="js-modal-photo modal hide" data-index="4">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="4"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="4"></i>
        <i class="far fa-times-circle js-close-modal" data-index="4"></i>
        <img src="assets/new/3.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="4"/>
    </div>


    <div class="js-modal-photo modal hide" data-index="5">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="5"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="5"></i>
        <i class="far fa-times-circle js-close-modal" data-index="5"></i>
        <img src="assets/new/4.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="5"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="6">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="6"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="6"></i>
        <i class="far fa-times-circle js-close-modal" data-index="6"></i>
        <img src="assets/new/5.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="6"/>
    </div>


    <div class="js-modal-photo modal hide" data-index="7">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="7"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="7"></i>
        <i class="far fa-times-circle js-close-modal" data-index="7"></i>
        <img src="assets/new2/1.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="7"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="8">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="8"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="8"></i>
        <i class="far fa-times-circle js-close-modal" data-index="8"></i>
        <img src="assets/new2/2.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="8"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="9">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="9"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="9"></i>
        <i class="far fa-times-circle js-close-modal" data-index="9"></i>
        <img src="assets/new2/3.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="9"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="10">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="10"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="10"></i>
        <i class="far fa-times-circle js-close-modal" data-index="10"></i>
        <img src="assets/new2/4.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="10"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="11">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="11"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="11"></i>
        <i class="far fa-times-circle js-close-modal" data-index="11"></i>
        <img src="assets/new2/5.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="11"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="12">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="12"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="12"></i>
        <i class="far fa-times-circle js-close-modal" data-index="12"></i>
        <img src="assets/new2/6.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="12"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="13">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="13"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="13"></i>
        <i class="far fa-times-circle js-close-modal" data-index="13"></i>
        <img src="assets/new2/7.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="13"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="14">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="14"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="14"></i>
        <i class="far fa-times-circle js-close-modal" data-index="14"></i>
        <img src="assets/new2/8.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="14"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="15">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="15"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="15"></i>
        <i class="far fa-times-circle js-close-modal" data-index="15"></i>
        <img src="assets/new2/9.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="15"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="16">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="16"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="16"></i>
        <i class="far fa-times-circle js-close-modal" data-index="16"></i>
        <img src="assets/new2/10.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="16"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="17">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="17"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="17"></i>
        <i class="far fa-times-circle js-close-modal" data-index="17"></i>
        <img src="assets/new2/11.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="17"/>
    </div>

    <div class="js-modal-photo modal hide" data-index="18">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="18"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="18"></i>
        <i class="far fa-times-circle js-close-modal" data-index="18"></i>
        <img src="assets/new2/12.jpg" class="hvoinui__slider-item js-open-full" alt="" data-index="18"/>
    </div>

    <!--  NEW3  -->


    <div class="js-modal-photo modal hide" data-index="19">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="19"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="19"></i>
        <i class="far fa-times-circle js-close-modal" data-index="19"></i>
        <img src="assets/new3/1.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="19"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="20">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="20"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="20"></i>
        <i class="far fa-times-circle js-close-modal" data-index="20"></i>
        <img src="assets/new3/2.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="20"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="21">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="21"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="21"></i>
        <i class="far fa-times-circle js-close-modal" data-index="21"></i>
        <img src="assets/new3/3.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="21"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="22">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="22"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="22"></i>
        <i class="far fa-times-circle js-close-modal" data-index="22"></i>
        <img src="assets/new3/4.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="22"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="23">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="23"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="23"></i>
        <i class="far fa-times-circle js-close-modal" data-index="23"></i>
        <img src="assets/new3/5.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="23"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="24">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="24"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="24"></i>
        <i class="far fa-times-circle js-close-modal" data-index="24"></i>
        <img src="assets/new3/6.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="24"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="25">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="25"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="25"></i>
        <i class="far fa-times-circle js-close-modal" data-index="25"></i>
        <img src="assets/new3/7.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="25"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="26">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="26"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="26"></i>
        <i class="far fa-times-circle js-close-modal" data-index="26"></i>
        <img src="assets/new3/8.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="26"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="27">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="27"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="27"></i>
        <i class="far fa-times-circle js-close-modal" data-index="27"></i>
        <img src="assets/new3/9.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="27"/>
    </div>


    <div class="js-modal-photo modal hide" data-index="28">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="28"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="28"></i>
        <i class="far fa-times-circle js-close-modal" data-index="28"></i>
        <img src="assets/new3/12.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="28"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="29">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="29"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="29"></i>
        <i class="far fa-times-circle js-close-modal" data-index="29"></i>
        <img src="assets/new3/13.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="29"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="30">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="30"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="30"></i>
        <i class="far fa-times-circle js-close-modal" data-index="30"></i>
        <img src="assets/new3/14.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="30"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="31">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="31"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="31"></i>
        <i class="far fa-times-circle js-close-modal" data-index="31"></i>
        <img src="assets/new3/15.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="31"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="32">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="32"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="32"></i>
        <i class="far fa-times-circle js-close-modal" data-index="33"></i>
        <img src="assets/new3/17.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="32"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="33">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="33"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="33"></i>
        <i class="far fa-times-circle js-close-modal" data-index="33"></i>
        <img src="assets/new3/18.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="33"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="34">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="34"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="34"></i>
        <i class="far fa-times-circle js-close-modal" data-index="34"></i>
        <img src="assets/new3/19.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="34"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="35">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="35"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="35"></i>
        <i class="far fa-times-circle js-close-modal" data-index="35"></i>
        <img src="assets/new3/20.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="35"/>
    </div>
    <div class="js-modal-photo modal hide" data-index="36">
        <i class="fas fa-arrow-circle-right js-next-photo" data-index="36"></i>
        <i class="fas fa-arrow-circle-left js-prev-photo" data-index="36"></i>
        <i class="far fa-times-circle js-close-modal" data-index="36"></i>
        <img src="assets/new3/21.JPG" class="hvoinui__slider-item js-open-full" alt="" data-index="36"/>
    </div>





    <div class="js-modal-photo modal hide" data-index="99">
        <i class="far fa-times-circle js-close-modal" data-index="99"></i>
        <img src="assets/images/house-plan.jpg" class="hvoinui__plans-image js-right js-open-full" alt="" />
    </div>




</aside>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/scripts/app.min.js"></script>

</html>
<!--
                <img src="assets/images/hk-g-7.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="5"/>
                <img src="assets/images/hk-g-8.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="6"/>
                <img src="assets/images/hk-g-10.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="7"/>
                <img src="assets/images/hk-g-11.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="8"/>
                <img src="assets/images/hk-g-12.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="9"/>
                <img src="assets/images/hk-g-14.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="10"/>
                <img src="assets/images/hk-g-16.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="11"/>
                <img src="assets/images/hk-g-17.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="12"/>
                <img src="assets/images/hk-g-18.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="13"/>
                <img src="assets/images/hk-g-19.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="14"/>
                <img src="assets/images/hk-g-20.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="15"/>
                <img src="assets/images/hk-g-21.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="16"/>
                -->

<!-- <img src="assets/new/1.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="19"/>-->
<!--<img src="assets/images/hk-g-3.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="2"/>-->
<!--<img src="assets/images/hk-g-9.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="8"/>-->
<!--<img src="assets/new/6.jpg" class="hvoinui__slider-item js-open-full" alt=""  data-index="24"/>-->