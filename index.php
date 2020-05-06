<!DOCTYPE html>
<html class="js bx-core bx-no-touch bx-no-retina bx-firefox no-save-data network-unknown webp js-focus-visible ready-js" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link href="/dvec/files/template_d65927b2366295fa669a84fb9437b45c_v1.css" type="text/css" data-template-style="true" rel="stylesheet">

	<title>Modal Callback</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- head-js -->
    <script>
        (document.documentElement && document.documentElement.className && (function($html, $conn) {
            // js test
            $html.className = $html.className.replace('no-js', 'js');
            // webp support test
            var webp = new Image();
            webp.onload = webp.onerror = function() {
                $html.className += (webp.width == 1 && webp.height == 1 ? ' webp' : ' no-webp');
            };
            webp.src = 'data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=';
            // save-data header test
            $html.className += ($conn && $conn.saveData ? ' save-data' : ' no-save-data');
            // network information test: 'slow-2g', '2g', '3g', or '4g'
            $html.className += ($conn && $conn.effectiveType ? ' network-detected network-' + $conn.effectiveType : ' network-unknown');
        })(document.documentElement, navigator.connection || navigator.mozConnection || navigator.webkitConnection));
    </script>
	<script src="/dvec/files/js.js"></script>
	<script src="/dvec/files/dvec_head.js"></script>
	<script src="/dvec/files/vendor.js"></script>
	<script src="/dvec/files/app.js"></script>
	<script src="/dvec/files/dvec.js"></script>
    <!-- /head-js -->

	<script src="/dvec/js/jquery.mask.min.js"></script>
	<script src="/dvec/js/script.js"></script>

    <link href="/dvec/files/app.css" rel="stylesheet">
	<link href="/dvec/files/correction.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100" style="">

    <div class="flex-shrink-0">
        <div class="container"><a name="pagetop"></a>
            <header class="header">
                <div class="header-fixed-nav">
                    <div class="container">
                        <div class="row">
                            <div class="col-7 col-lg-5 col-md-6">
                                <div class="row">
                                    <div class="header-col header-col--gidro">
                                        <a href="https://esc-rushydro.ru/" target="_blank" class="header-fixed-nav__link header-fixed-nav__link--svg-right">
                                            ЭСК РусГидро
                                            <img src="/dvec/files/ico-gidro-link.svg" width="18" height="18">
                                            <!-- /"source/partials/svg/ico-gidro-link.svg" -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 col-md-6 col-lg-7 header-fixed-nav__right-links justify-content-end">
                                <div class="header-fixed-nav__link header-fixed-nav__link--svg-left header-fixed-nav__link--vision">
                                    <img src="/dvec/files/ico-vision-link.svg" width="18" height="18">
                                    Версия для слабовидящих
                                </div>
                                <div class="header-fixed-nav__links-share">
									<div class="header-fixed-nav__link header-fixed-nav__link--share">
                                        <img src="/dvec/files/ico-social-link.svg" width="18" height="18">
                                    </div>
                                    <div class="header-fixed-nav__share-links">
										<div id="share_fb" class="footer-nav__social-link" title="Поделиться на FaceBook">
											<img src="/dvec/files/soc-fb.svg">
										</div>
                                        <div id="share_ok" class="footer-nav__social-link" title="Поделиться в Одноклассниках">
                                            <img src="/dvec/files/soc-od.svg">
                                        </div>
                                        <div id="share_twitter" class="footer-nav__social-link" title="Твитнуть">
                                            <img src="/dvec/files/soc-telegram.svg">
                                        </div>
                                        <div id="share_vk" class="footer-nav__social-link" title="Поделиться Вконтакте">
                                            <img src="/dvec/files/soc-vk.svg">
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="header-fixed-nav__link header-fixed-nav__link--search" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="/dvec/files/ico-search-link.svg" width="18" height="18">
                                        <!-- /"source/partials/svg/ico-search-link.svg" -->
                                    </a>
                                    <div class="header-fixed-nav--search-input-wrap dropdown-menu header-nav__dropdown-menu dropdown-menu-right" aria-labelledby="dropdownSearch">
                                        <form action="/search" method="get" id="topSearchForm">
                                            <button class="header-fixed-nav--search-input-button" type="submit">
                                                <img src="/dvec/files/ico-search-link.svg" width="18" height="18">
                                                <!-- /"source/partials/svg/ico-search-link.svg" -->
                                            </button>
                                            <input class="form-control" type="text" name="q" id="topSearchField" placeholder="Введите поисковый запрос">
                                        </form>
                                        <div class="input-hdr-close">
                                            <img src="/dvec/files/input-hdr-close.svg" width="16" height="16">
                                            <!-- /"source/partials/svg/input-hdr-close.svg" -->
                                        </div>
                                    </div>
                                </div>
                                <button class="hdr-menu-adaptiv" data-toggle="modal" data-target="#menu-adaptiv">
                                    <span class="header-nav__menu-ico">
                                        <span class="header-nav__menu-ico-row"></span>
                                        <span class="header-nav__menu-ico-row"></span>
                                        <span class="header-nav__menu-ico-row"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-b">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="header-col header-col--2 header-col--logo">
                                    <div class="header-b__img-wrap">
                                        <a href="https://www.dvec.ru/">
                                            <span class="logo-big">
												<img class="logo-dek" src="/dvec/files/logo_dek_hrz.png" height="74">
                                            </span>
                                            <span class="logo-mobile">
												<img class="logo-dek" src="/dvec/files/logo_dek_hrz.png" height="36">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="header-col header-col--3 header-col--contacts">
                                    <div class="header-b__phones">
                                        <div class="dropdown">
                                            <div class="header-b__phones-phone" id="dropdownPhones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                8 (800) 100-3-777<br>
												8 (800) 775-3-777
                                                <img src="/dvec/files/ico-phones-more.svg" width="14" height="8">
                                            </div>
                                            <div class="header-b__phones-phone dropdown-menu" aria-labelledby="dropdownPhones">
                                                <p class="dropdown-item">
                                                    <a href="tel:84232406845" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">
														Приемная:</span>
                                                        8 (423) 240-68-45
                                                    </a>
                                                </p>
                                                <p class="dropdown-item">
                                                    <a href="tel:84232406855" class="header-b__phones-phone-link">
                                                        <span class="header-b__phones-phone-link-department">Факс:</span>
                                                        8 (423) 240-68-55
                                                    </a>
                                                </p>
												<p class="dropdown-item">
                                                    <span class="header-b__phones-phone-link-department">
														Контакт-центр:</span>
													<a href="tel:88001003777" class="header-b__phones-phone-link">
														8 (800) 100-3-777
													</a>
													<br>
													<a href="tel:88007753777" class="header-b__phones-phone-link">
														8 (800) 775-3-777
													</a>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="header-b__phones-mode">
                                            понедельник – пятница: с 8:00 до 19:00<br>
											суббота: с 8:00 до 17:00
                                        </p>
                                        <!-- <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-b__phones-call">
                                            Заказать обратный звонок
                                        </a> -->
										<!-- <div>Текущее время: <span id="time_in_office"></span>
										</div> -->
                                    </div>
                                    <a href="https://www.dvec.ru/private_clients/service/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-1.svg" -->
											<img src="/dvec/files/ico-hdr-card-1.svg" style="float:left" width="44" height="30">
                                            <p class="header-b__card-text">Отделения и участки</p>
                                        </a>
                                    <a href="https://www.dvec.ru/private_clients/priemnaya/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-2.svg" -->
											<img src="/dvec/files/ico-hdr-card-2.svg" style="float:left" width="44" height="25">
                                            <p class="header-b__card-text">Интернет приемная</p>
                                    </a>
                                    <a href="https://www.dvec.ru/private_clients/cabinet/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-3.svg" -->
											<img src="/dvec/files/ico-hdr-card-3.svg" style="float:left" width="44" height="26">
                                            <p class="header-b__card-text">Личный кабинет</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="header-nav header-nav--desktop">
                <div class="row no-gutters justify-content-between">
                    <div class="header-nav__left">


									<div id="dropdown-city2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="header-nav__item" style="cursor:pointer">Частным клиентам</div>
                        <div class="dropdown-menu" style="margin:0" aria-labelledby="dropdown-city2">
                            <a onclick="RegionChange('amursbyt')" href="https://www.dvec.ru/amursbyt" class="dropdown-item">
                                Амурская область
                            </a>
                            <a onclick="RegionChange('yakutiya')" href="https://www.dvec.ru/yakutiya" class="dropdown-item">
                                Нерюнгринский район
                            </a>
                            <a onclick="RegionChange('eaosbyt')" href="https://www.dvec.ru/eaosbyt" class="dropdown-item">
                                Еврейская АО
                            </a>
                            <a onclick="RegionChange('khabsbyt')" href="https://www.dvec.ru/khabsbyt" class="dropdown-item">
                                Хабаровский край
                            </a>
                            <a onclick="RegionChange('dalsbyt')" href="https://www.dvec.ru/dalsbyt" class="dropdown-item">
                                Приморский край
                            </a>
                            <a onclick="RegionChange('sakhalin')" href="https://www.dvec.ru/sakhalin" class="dropdown-item">
                                Сахалинская область
                            </a>
                            <a onclick="RegionChange('kamchatka')" href="https://www.dvec.ru/kamchatka" class="dropdown-item">
                                Камчатский край
                            </a>
                        </div>
				
						<a href="https://www.dvec.ru/organisations/" class="header-nav__item">Корпоративным клиентам</a>
				
						<a href="https://www.dvec.ru/iku/" class="header-nav__item">Исполнителям коммунальных&nbsp;услуг</a>
				
						<a href="https://www.dvec.ru/stockholder/" class="header-nav__item">Акционерам и&nbsp;инвесторам</a>
				

                    </div>
                    <div class="header-nav__right">
<div class="dropdown">
                            <button class="btn dropdown-toggle header-nav__menu" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="header-nav__menu-ico">
                                    <span class="header-nav__menu-ico-row"></span>
                                    <span class="header-nav__menu-ico-row"></span>
                                    <span class="header-nav__menu-ico-row"></span>
                                </span>
                            </button>
                            <div class="dropdown-menu header-nav__dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu">
                                <a href="https://www.dvec.ru/company/" class="dropdown-item">О компании</a>
                                <a href="https://www.dvec.ru/normative_documents/" class="dropdown-item">Законодательство</a>
								<a href="https://www.dvec.ru/electric_market/" class="dropdown-item">Рынок электроэнергии</a>
                                <a href="https://www.dvec.ru/company/disclosure/" class="dropdown-item">Раскрытие информации</a>
								<a href="https://www.dvec.ru/company/licensing/" class="dropdown-item">Лицензионные требования</a>
								<a href="https://www.dvec.ru/company/liniya_doveriya/" class="dropdown-item">Линия доверия</a>
                                <a href="https://www.dvec.ru/customs/" class="dropdown-item">Закупки</a>
                                <a href="https://www.dvec.ru/press_center/" class="dropdown-item">Пресс-центр</a>
								<a href="https://www.dvec.ru/sitemap/" class="dropdown-item">Карта сайта</a>
                            </div>
                        </div>                    </div>
                </div>
            </div>
<!-- мобильное меню -->
<div class="modal fade menu-adaptiv__modal" id="menu-adaptiv" tabindex="-1" role="dialog" aria-labelledby="menu-adaptiv" aria-hidden="true">
                <div class="modal-dialog menu-adaptiv__dialog" role="document">
                    <div class="modal-content menu-adaptiv__content">
                        <div class="menu-adaptiv__fix-hdr-wrap">
                            <div class="container">
                                <div class="menu-adaptiv__fix-hdr">
                                    <div class="collapse multi-collapse show" id="multiCollapseTop">
                                        <p class="menu-adaptiv__title">Навигация</p>
                                    </div>
                                    <div class="collapse multi-collapse" id="multiCollapseBot">
                                        <a onclick="return false;" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="menu-adaptiv__link-hdr" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseTop multiCollapseBot">
                                            <!-- "source/partials/svg/menu-adaptiv-arrow-left.svg" -->
                                            <img src="/dvec/files/menu-adaptiv-arrow-left.svg">
                                            <span class="menu-adaptiv__link-hdr-title">Навигация</span>
                                        </a>
                                    </div>
                                    <button type="button" class="btn menu-adaptiv-btn" data-dismiss="modal" aria-label="Close">
                                        <img src="/dvec/files/menu-adaptiv-close.svg">
                                        <!-- /"source/partials/svg/menu-adaptiv-close.svg" -->
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="collapse multi-collapse show" id="multiCollapseTop">
                                        <div class="menu-adaptiv__nav-block menu-adaptiv__nav-block--top">
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/private_clients/" class="menu-adaptiv__nav-link">
                                                    Частным клиентам
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/organisations/" class="menu-adaptiv__nav-link">
                                                    Корпоративным клиентам
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/iku/" class="menu-adaptiv__nav-link">
                                                    Исполнителям коммунальных услуг
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/stockholder/" class="menu-adaptiv__nav-link">
                                                    Акционерам и инвесторам
                                                </a>
                                            </p>
                                        </div>

                                        <div class="menu-adaptiv__nav-block menu-adaptiv__nav-block--bot">
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/company/" class="menu-adaptiv__nav-link" data-links="1" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseTop multiCollapseBot">
                                                    О компании
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/normative_documents/" class="menu-adaptiv__nav-link">
                                                    Законодательство
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/company/disclosure/" class="menu-adaptiv__nav-link">
                                                    Раскрытие информации
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.e-disclosure.ru/portal/company.aspx?id=11385" target="_blank" class="menu-adaptiv__nav-link">
                                                    Раскрытие на e-disclosure.ru
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/company/licensing/" class="menu-adaptiv__nav-link">
                                                    Лицензионные требования
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/company/liniya_doveriya/" class="menu-adaptiv__nav-link">
                                                    Линия доверия
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/customs/" class="menu-adaptiv__nav-link" data-links="5" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseTop multiCollapseBot">
                                                    Закупки
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/press_center/" class="menu-adaptiv__nav-link" data-links="6" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseTop multiCollapseBot">
                                                    Пресс-центр
                                                </a>
                                            </p>
                                            <p class="menu-adaptiv__nav-link-wrap">
                                                <a href="https://www.dvec.ru/sitemap/" class="menu-adaptiv__nav-link">
                                                    Карта сайта
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="collapse multi-collapse" id="multiCollapseBot">
                                        <div class="typical-aside-nav menu-adaptiv__links" data-links="1">
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/contacts/" class="typical-aside-nav__link">
                                                    Контакты
                                                </a>
                                            </p>
											<p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/control/" class="typical-aside-nav__link">
                                                    Управление
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/filials/" class="typical-aside-nav__link">
                                                    Филиалы
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/dzo/" class="typical-aside-nav__link">
                                                    Дочерние общества 
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/documents/" class="typical-aside-nav__link">
                                                    Документы 
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/disclosure/" class="typical-aside-nav__link">
                                                    Раскрытие информации
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/service_territory/" class="typical-aside-nav__link">
                                                    Территория обслуживания
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/social_responsibility/" class="typical-aside-nav__link">
                                                    Социальная ответственность
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/counter_corruption/" class="typical-aside-nav__link">
                                                    Противодействие коррупции
                                                </a>
                                            </p>
											<p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/liniya_doveriya/" class="typical-aside-nav__link">
                                                    Линия доверия Группы РусГидро
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/career/" class="typical-aside-nav__link">
                                                    Карьера
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/company/history/" class="typical-aside-nav__link">
                                                    Наша история
                                                </a>
                                            </p>
                                        </div>
										<div class="typical-aside-nav menu-adaptiv__links" data-links="5">
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/annual_comprehensive_programme/" class="typical-aside-nav__link">
                                                    Анонсирование закупок
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/notice/" class="typical-aside-nav__link">
                                                    Извещения о закупках
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/non-core/" class="typical-aside-nav__link">
                                                    Непрофильное имущество
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/debts/" class="typical-aside-nav__link">
                                                    Продажа задолженности физ.лиц 
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/results/" class="typical-aside-nav__link">
                                                    Информация о результатах закупок
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/contract_data/" class="typical-aside-nav__link">
                                                    Сведения о заключенных договорах
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/documents/" class="typical-aside-nav__link">
                                                    Управление закупочной деятельностью (документы)
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/etp_rushydro/" class="typical-aside-nav__link">
                                                    Единая электронная торговая площадка rushydro.roseltorg.ru
                                                </a>
                                            </p>
											<p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/customs/archive_notice.php" class="typical-aside-nav__link">
                                                    Архив закупок
                                                </a>
                                            </p>
                                        </div>
										<div class="typical-aside-nav menu-adaptiv__links" data-links="6">
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/press_center/news_dvec/" class="typical-aside-nav__link">
                                                    Новости компании 
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/press_center/subscriptions/" class="typical-aside-nav__link">
                                                    Подписка
                                                </a>
                                            </p>
                                            <p class="typical-aside-nav__item">
                                                <a href="https://www.dvec.ru/press_center/publications/" class="typical-aside-nav__link">
                                                    СМИ о нас
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="menu-adaptiv__contacts">
                                        <a href="https://www.dvec.ru/private_clients/service/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-1.svg" -->
											<img src="/dvec/files/ico-hdr-card-1.svg" style="float:left; margin-right:1rem" width="44" height="30">
                                            <p class="header-b__card-text">Отделения и участки</p>
                                        </a>
                                        <a href="https://www.dvec.ru/private_clients/questions_answers/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-2.svg" -->
											<img src="/dvec/files/ico-hdr-card-2.svg" style="float:left; margin-right:1rem" width="44" height="25">
                                            <p class="header-b__card-text">Вопросы и ответы</p>
                                        </a>
                                        <a href="https://www.dvec.ru/private_clients/cabinet/" class="header-b__card">
                                            <!-- "source/partials/svg/ico-hdr-card-3.svg" -->
											<img src="/dvec/files/ico-hdr-card-3.svg" style="float:left; margin-right:1rem" width="44" height="26">
                                            <p class="header-b__card-text">Личный кабинет</p>
                                        </a>
                                    </div>

                                    <div class="menu-adaptiv__footer-links">
                                        <!-- <p class="menu-adaptiv__footer-link-wrap">
                                            <a onclick="return false" href="/PleaseEnableJavascript.html" class="header-fixed-nav__link header-fixed-nav__link--svg-left">
                                                <img src="/design2019/img/ico-map-link.svg">
                                                Регион: общий
                                            </a>
                                        </p> -->
                                        <p class="menu-adaptiv__footer-link-wrap">
											<a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="header-fixed-nav__link header-fixed-nav__link--svg-left header-fixed-nav__link--vision">
                                                <img src="/dvec/files/ico-vision-link.svg">
                                                <!-- /"source/partials/svg/ico-vision-link.svg" -->
                                                Версия для слабовидящих
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="menu-adaptiv__footer-social">
                            <div class="container">
                                <div class="footer-nav__social-links">
                                    <a href="https://www.facebook.com/DVEC.RU" class="link_FB" target="_blank" title="Мы на Facebook"></a>
									<a href="https://www.youtube.com/channel/UChTnjEP3wpTtRUXo-20Rfmg" class="link_youtube" target="_blank" title="ДЭК на YouTube"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="main">
                <nav aria-label="breadcrumb">
                    <div class="breadcrumb breadcrumb--typical">
					</div>
                </nav>
                <div class="row row--typical">
                    <div class="col-md-12 col-lg-5">
						<hr class="menu-mobile-divider">
                        <nav class="typical-aside-nav">
                        </nav>

                        <!--  block aside  -->
<!-- баннер -->
<div class="card-slider-big swiper-container js-card-slider-big swiper-container-initialized swiper-container-horizontal">
	<div class="swiper-wrapper">

<div class="swiper-slide swiper-slide-active" style="width: 369px;">
	<a href="https://www.dvec.ru/press_center/news_dvec/?ID=18251" class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_covid.jpg'); background-color: #94C8F9; background-position:center top">
		<span class="card-slide-big__img-wrap">
		</span>
		<span class="card-slider-big__details">
			<span class="card-slider-big__text">
				Офисы ДЭК перешли на дистанционное обслуживание клиентов
			</span>
		</span>
	</a>
</div>

<!-- <div class="swiper-slide">
	<a href="/press_center/news_dvec/?ID=18120" class="card-slider-big__slide" 
	style="background-image: url('/design2019/img/upload/20200214_eric_blg.jpg'); background-color: #94C8F9; background-position:center top">
		<span class="card-slide-big__img-wrap">
		</span>
		<span class="card-slider-big__details">
			<span class="card-slider-big__text">
				РусГидро открыло третий высокотехнологичный центр оплаты услуг ЖКХ в Амурской области
			</span>
		</span>
	</a>
</div>

<div class="swiper-slide">
	<a href="https://www.dvec.ru/press_center/news_dvec/index.php?ID=17991" 
	class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_iku_2019.jpg'); background-color: #94C8F9; background-position:center top">
		<span class="card-slide-big__img-wrap">
		</span>
		<span class="card-slider-big__details">
			<span class="card-slider-big__text">
				Лучшие ИКУ -  2019
			</span>
		</span>
	</a>
</div>

<div class="swiper-slide">
	<a href="/press_center/news_dvec/index.php?ID=17981" class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_terr_dek.png'); background-color: #94C8F9; background-position:center top">
		<span class="card-slide-big__img-wrap">
		</span>
		<span class="card-slider-big__details">
			<span class="card-slider-big__text">
				По итогам 2019 г ДЭК стала одной из крупнейших энергосбытовых компаний России
			</span>
		</span>
	</a>
</div>

<div class="swiper-slide">
	<a href="https://www.dvec.ru/press_center/news_dvec/index.php?ID=17993" 
	class="card-slider-big__slide" style="background-image: url('/design2019/img/upload/br_sber.jpg'); background-color: #94C8F9; background-position:center top">
		<span class="card-slide-big__img-wrap">
		</span>
		<span class="card-slider-big__details">
			<span class="card-slider-big__text">
				Бонусы клиентам!
			</span>
		</span>
	</a>
</div>

								<!-- <div class="swiper-slide">
                                    <div class="card-slider-big__slide" style="background-image: url(/design2019/img/upload/br_2019_go2019_w453.png); background-color: #94C8F9; background-position:center top">
                                        <div class="card-slide-big__img-wrap">
                                        </div>
                                        <div class="card-slider-big__details">
                                            <a href="/stockholder/disclosure_documents/annual_reports/" class="card-slider-big__text">
                                                Годовой отчет ПАО «ДЭК» - 2018
                                            </a>
                                        </div>
                                    </div>
                                </div> -->

<!--								<div class="swiper-slide">
                                    <a href="/stockholder/disclosure_documents/annual_reports/" class="card-slider-big__slide" style="background-image: url(/design2019/img/upload/br_2019_go2019_w453.png); background-color: #94C8F9; background-position:center top">
                                        <span class="card-slide-big__img-wrap">
                                            <!-- <picture>
                                                <img src="/design2019/img/upload/br_2019_go2019_w453.png" loading="lazy"  alt="Годовой отчет ПАО «ДЭК» - 2018">
                                            </picture> -->
<!--                                        </span>
                                        <span class="card-slider-big__details">
                                            <span class="card-slider-big__text">
                                                Годовой отчет ПАО «ДЭК» - 2018
                                            </span>
                                        </span>
                                    </a>
                                </div>

                                 <div class="swiper-slide">
                                    <a href="/stockholder/disclosure_documents/quarterly_reports/" class="card-slider-big__slide" style="background-image: url(); background-color: #94C8F9;">
                                        <span class="card-slide-big__img-wrap">
                                            <picture>
                                                <img src="/design2019/img/ico-chart.svg" loading="lazy" width="311" height="332" intrinsicsize="311x332" alt="Ежеквартальный отчет">
                                            </picture>
                                        </span>
                                        <span class="card-slider-big__details">
                                            <span class="card-slider-big__text">
                                                Ежеквартальный отчет за III квартал 2019
                                            </span>
                                        </span>
                                    </a>
                                </div>
								<div class="swiper-slide">
                                    <a href="/customs/non-core/" class="card-slider-big__slide" style="background-image: url(); background-color: #94C8F9;">
                                        <span class="card-slide-big__img-wrap">
                                            <picture>
                                                <img src="/design2019/img/ico-neprof.svg" loading="lazy" width="311" height="332" intrinsicsize="311x332" alt="Непрофильное имущество">
                                            </picture>
                                        </span>
                                        <span class="card-slider-big__details">
                                            <span class="card-slider-big__text">
                                                Продажа непрофильного имущества
                                            </span>
                                        </span>
                                    </a>
                                </div>
-->

                            </div>


                            <div class="card-slider-big__controls">
                                <div class="card-slider-big__nav">
                                    <div class="card-slider__btn--prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">
                                        <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-left.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17L1 9.136 9 1"></path>
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                        </a>
                                    </div>
                                    <div class="card-slider__btn--next swiper-button-disabled" tabindex="0" role="button" aria-label="Next slide" aria-disabled="true">
                                        <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-right.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 17l8-7.864L1 1"></path>
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-pagination card-slider-big__pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span></div>
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>                        <div class="card-slider swiper-container js-card-slider swiper-container-initialized swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2555px, 0px, 0px);">
<!-- важные объявления -->
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">17 апреля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/substantial_facts/" class="card-slider__text">
				о проведении заседания совета директоров (наблюдательного совета) эмитента и его повестке дня
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">14 апреля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/substantial_facts/" class="card-slider__text">
				Об отдельных решениях, принятых советом директоров (наблюдательным советом) эмитента
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">13 апреля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/substantial_facts/" class="card-slider__text">
				О раскрытии эмитентом консолидированной финансовой отчетности, а также о представлении аудиторского заключения
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">31 марта 2020</p>
			<a href="https://www.dvec.ru/press_center/news_dvec/index.php?ID=18261" class="card-slider__text">
				Сотрудники ДЭК перешли на «удаленную работу»
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">3 апреля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/substantial_facts/" class="card-slider__text">
				О проведении заседания совета директоров (наблюдательного совета) эмитента и его повестке дня
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">2 апреля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/affiliated_persons/" class="card-slider__text">
				Список аффилированных лиц по состоянию на 31.03.2020
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide swiper-slide-prev" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">11 марта 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/substantial_facts/" class="card-slider__text">
				О раскрытии акционерным обществом на странице в сети Интернет годовой бухгалтерской (финансовой) отчетности
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide swiper-slide-active" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">26 февраля 2020</p>
			<a href="https://www.dvec.ru/press_center/publications/index.php?ELEMENT_ID=18131" class="card-slider__text">
				СМИ о нас: интервью исполнительного директора Александра ЮРОВА 
			</a>
		</div>
	</div>
</div>
<div class="swiper-slide swiper-slide-next" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">14 февраля 2020</p>
			<a href="https://www.dvec.ru/stockholder/disclosure_documents/quarterly_reports/" class="card-slider__text">
				Ежеквартальный отчет Общества за 4 квартал 2019 г. 
			</a>
		</div>
	</div>
</div>

<div class="swiper-slide" style="width: 365px;">
	<div class="card-slider__slide">
		<div class="card-slider__details">
			<p class="card-slider__date">29 января 2020</p>
			<a href="https://www.dvec.ru/company/disclosure/" class="card-slider__text">
				Уведомление о смене фирменной печати ПАО «ДЭК» с 27.01.2020
			</a>
		</div>
	</div>
</div>                            </div>
                            <div class="card-slider__controls">
                                <div class="card-slider__nav">
                                    <div class="card-slider__btn--prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false">
                                        <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-left.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 17L1 9.136 9 1"></path>
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                        </a>
                                    </div>
                                    <div class="card-slider__btn--next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                        <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="card-slider__btn">
                                            <!-- "source/partials/svg/slide-nav-right.svg" -->
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 17l8-7.864L1 1"></path>
                                            </svg>
                                            <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-pagination card-slider__pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        <!--  /block aside  -->
                    </div>
                    <div class="col-md-12 col-lg-7">

                        <div class="wysiwyg">
							<h1>Modal Callback</h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCallback">
  Заказать обратный звонок
</button>

                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <footer class="footer mt-auto">
        <div class="container">
            <div class="row no-gutters">
                <div class="partners swiper-container js-partners swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                    <div class="partners-top">
                        <h3 class="partners-title">
                            Наши партнеры
                        </h3>
                        <div class="partners-nav">
                            <div class="partners-nav__btn--prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true">
                                <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="partners-nav__btn">
                                    <!-- "source/partials/svg/slide-nav-left.svg" -->
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 17L1 9.136 9 1"></path>
                                    </svg>
                                    <!-- /"source/partials/svg/slide-nav-left.svg" -->
                                </a>
                            </div>
                            <div class="partners-nav__btn--next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                <a onclick="return false" href="https://www.dvec.ru/PleaseEnableJavascript.html" class="partners-nav__btn">
                                    <!-- "source/partials/svg/slide-nav-right.svg" -->
                                    <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 17l8-7.864L1 1"></path>
                                    </svg>
                                    <!-- /"source/partials/svg/slide-nav-right.svg" -->
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="partners-botttom swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="https://esc-rushydro.ru/" target="_blank" class="partner__slide__link">
									<picture>
                                        <img src="/dvec/files/partner-esc.png" loading="lazy" intrinsicsize="180x120" title="АО Энергосбытовая компания РусГидро" width="180" height="120">
									</picture>
                                </a>
                            </div>
                        </div>
						<div class="swiper-slide swiper-slide-next" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="http://npgp.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-1.png" loading="lazy" intrinsicsize="180x120" title="Ассоциация гарантирующих поставщиков
и энергосбытовых компаний" width="180" height="120">
                                    </picture>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="http://nprating.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-4.png" loading="lazy" intrinsicsize="180x120" title="Проект Надежный партнер" width="180" height="120">
                                    </picture>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="https://xn--b1agaa6a0afi1cwe.xn--p1ai/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-vmy2.png" loading="lazy" intrinsicsize="180x120" title="Фестиваль ВместеЯрче" width="180" height="120">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="https://minenergo.gov.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-5.png" loading="lazy" intrinsicsize="180x120" title="Министерство энергетики Российской Федерации" width="180" height="120">
                                    </picture>

                                </a>
                            </div>
                        </div>
						<div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="https://so-ups.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-3.png" loading="lazy" intrinsicsize="180x120" title="Системный оператор Единой энергетической системы" width="180" height="120">
                                    </picture>

                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="https://www.atsenergo.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-6.png" loading="lazy" intrinsicsize="180x120" title="Администратор торговой системы" width="180" height="120">
                                    </picture>

                                </a>
                            </div>
                        </div>
						<div class="swiper-slide" style="width: 179.667px; margin-right: 20px;">
                            <div class="partner__slide">
                                <a href="http://www.orael.ru/" target="_blank" class="partner__slide__link">
                                    <picture>
                                        <img src="/dvec/files/partner-orael.png" loading="lazy" intrinsicsize="180x120" title="Объединение работодателей электроэнергетики" width="180" height="120">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>

        <div class="footer-nav-wrap">
            <div class="container">
                <div class="row no-gutters">
                    <div class="footer-nav col-12">
                        <div class="footer-nav__contacts">
                            <div class="footer-nav__address">
                                Публичное акционерное общество
								<br>«Дальневосточная энергетическая компания»
                                <br>690091, г. Владивосток, ул.&nbsp;Тигровая, 19
                            </div>
                            <div class="footer-nav__map">
                                <a href="https://www.dvec.ru/company/contacts/#linkmap">Карта проезда</a>
                            </div>
                            <div class="footer-nav__map-phones">
                                <p class="footer-nav__map-phone-link">
                                    Приемная:
                                    <a href="tel:84232406845" class="footer-nav__map-phone-link">8 (423) 240-68-45</a>
                                </p>
                                <p class="footer-nav__map-phone-link">
                                    Факс:
                                    <a href="tel:84232406855" class="footer-nav__map-phone-link">8 (423) 240-68-55</a>
                                </p>
                                <p class="footer-nav__map-phone-link">
                                    Контакт-центр:<br>
                                    <a href="tel:88001003777" class="footer-nav__map-phone-link">8 (800) 100-3-777</a>, 
									<a href="tel:88007753777" class="footer-nav__map-phone-link">8 (800) 775-3-777</a>
                                </p>
                            </div>
                            <div class="footer-nav__mail">
                                <a href="mailto:priemn@dvec.ru" class="footer-nav__mail-link">priemn@dvec.ru</a>
                            </div>
                            <div class="footer-nav__virtual-reception">
                                <a href="https://www.dvec.ru/private_clients/priemnaya/" class="footer-nav__virtual-reception-link">Интернет приемная</a>
                            </div>
                            <div class="footer-nav__social-links">
                                <a class="footer-nav__social-link" href="https://www.facebook.com/DVEC.RU" target="_blank" title="ПАО ДЭК на Facebook">
                                    <img src="/dvec/files/soc-fb.svg">
                                </a>
                                <a class="footer-nav__social-link" href="https://www.youtube.com/channel/UChTnjEP3wpTtRUXo-20Rfmg" target="_blank" title="ПАО ДЭК на YouTube">
									<img src="/dvec/files/soc-youtube.svg">
								</a>
								<a class="footer-nav__social-link" href="https://www.instagram.com/dvec.ru/" target="_blank" title="ПАО ДЭК в Instagram">
									<img src="/dvec/files/soc-instagram.svg">
								</a>
                            </div>
                        </div>
                        <div class="footer-nav__map-site-wrap">
                            <!-- <div class="footer-nav__search-documents-wrap">
                                <h3 class="footer-nav__search-title">Поиск входящего документа</h3>
                                <div class="row no-gutters">
                                    <form class="col-12">
                                        <div class="row">
                                            <div class="col-md-4 col-xl-5">
                                                <div class="form-group">
                                                    <label for="numberDocument">Номер документа</label>
                                                    <input type="text" class="form-control" id="numberDocument">
                                                </div>
                                            </div>
                                            <div class="col-md-5 col-xl-5">
                                                <div class="form-group">
                                                    <label for="dateRegDocument">Дата регистрации документа</label>
                                                    <input type="text" class="form-control" id="dateRegDocument">
                                                </div>
                                            </div>
                                            <div class="col-2 col-lg-1">
                                                <label><br></label>
                                                <input type="submit" class="btn btn-primary" value="Поиск">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <div class="footer-nav__map-site">
                                <div class="row">
                                    <div class="col-5">
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/private_clients/" class="footer-nav__map-link">Частным клиентам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/organisations/" class="footer-nav__map-link">Корпоративным клиентам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/iku/" class="footer-nav__map-link">Исполнителям коммунальных услуг</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/stockholder/" class="footer-nav__map-link">Акционерам и инвесторам</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/customs/" class="footer-nav__map-link">Закупки</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/press_center/" class="footer-nav__map-link">Пресс-центр</a>
                                        </div>
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/" class="footer-nav__map-link">О компании</a>
                                        </div>
                                    </div>
                                    <div class="col-6">
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/disclosure/" class="footer-nav__map-link">Раскрытие информации</a>
                                        </div>
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.e-disclosure.ru/portal/company.aspx?id=11385" target="_blank" class="footer-nav__map-link">
											Раскрытие информации на e-disclosure.ru</a>
                                        </div>
										<div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/licensing/" class="footer-nav__map-link">Лицензионные требования</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/private_clients/dps/" class="footer-nav__map-link">Товары и услуги</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/career/" class="footer-nav__map-link">Карьера</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/contacts/" class="footer-nav__map-link">Реквизиты</a>
                                        </div>
                                        <div class="footer-nav__map-link-wrap">
                                            <a href="https://www.dvec.ru/company/documents/#pol_pers_dan" class="footer-nav__map-link">Политика обработки персональных данных</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <a href="https://www.dvec.ru/sitemap/" class="btn btn--footer-map-site">Карта сайта</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="footer-nav-bootom col-12">
                        <div class="copy-wrap">
                            <p class="footer-nav__copy">
                                © Публичное акционерное общество «Дальневосточная энергетическая компания» 2007-2019 г.
                            </p>
                        </div>
                        <!-- <div class="pitcher-logo">
                            <a href="https://www.intecmedia.ru" target="_blank" class="pitcher-logo__link" alt="pitcher">
                                <span class="pitcher-logo__title">
                                </span>
                                <img src="/design2019/svg/pitcher-logo.svg">
                            </a>
                        </div> -->
                        <button class="btn btn-footer-arrow-up" onclick="scrollToAnchor('pagetop');">
                            <!-- "source/partials/svg/btn-arrow-up.svg" -->
                            <svg width="28" height="15" viewBox="0 0 28 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 14L13.78 1 27 14" stroke="#165280" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <!-- /"source/partials/svg/btn-arrow-up.svg" -->
                            <span class="btn-footer-arrow-up__text">
                                наверх
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>

<!-- Modal -->
<div class="modal fade" id="ModalCallback" tabindex="-1" role="dialog" aria-labelledby="ModalCallbackTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Закажите обратный звонок, и мы перезвоним в&nbsp;удобное Вам время:</h4>
			</div>
			<div class="modal-body">
				<form id="itc-form">
					<div class="form-group">
						<label for="itc-phone" class="col-form-label">Ваш телефон:</label>
						<input type="tel" class="form-control" id="itc-phone" placeholder="+7 (914) 123-45-67">
					</div>
					<div class="form-group">
						<label for="itc-fio" class="col-form-label">ФИО:</label>
						<input type="text" class="form-control" id="itc-fio">
					</div>
					<div class="form-group">
						<label class="col-form-label">Удобное время для звонка:</label>
						<div class="form-row align-items-center">
							<div class="col-md-1">
								С
							</div>
							<div class="col-md-3">
								<select id="itc-time-from" class="form-control"></select>
							</div>
							<div class="col-md-1 text-center">
								до
							</div>
							<div class="col-md-3">
								<select id="itc-time-to" class="form-control"></select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="itc-theme" class="col-form-label">Тема обращения:</label>
						<select id="itc-theme" class="form-control">
							<option value="" selected disabled>Выберите...</option>
						</select>
					</div>
					<div class="form-group">
						<label for="itc-email" class="col-form-label">Ваш адрес электронной почты:</label>
						<input type="email" class="form-control" id="itc-email" placeholder="adres@mail.ru">
						<small class="form-text text-muted">
							ПАО «ДЭК» проинформирует Вас посредством электронной почты о времени совершенного звонка, 
							в случае если до Вас дозвониться не удалось. Поле не является обязательным для заполнения.
						</small>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
				<button type="button" class="btn btn-primary" id="itc-send">Отправить</button>
			</div>
		</div>
	</div>
</div>

</body>
</html>