<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./resize.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3581082d4b.js" crossorigin="anonymous"></script>
    <title>Медтехника</title>
</head>
<body>
    <header>
        <div class="header-mobile d-block d-md-none">
            <div class="container d-flex justify-content-between">
                <div class="d-flex">
                    <button class="navbar-toggler">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>
                    <div class="header-logo">
                        <img src="./images/logo-mob.svg" alt="">
                    </div> 
                </div>
                <div class="d-flex header-right">
                    <div class="header-phone d-none d-sm-block">
                        <p>+7 (391) 215-31-20</p>
                    </div>
                    <div class="heder-call d-none d-sm-block">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="heder-logout d-none d-sm-block">
                        <a href=""><img src="./images/iconenter-left-mobile.svg" alt=""></a>
                    </div>
                    <div class="basket d-block d-sm-none">
                        <div class="basket-count">
                            <p>22</p>
                        </div>
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="heder-find">
                        <i class="fas fa-search"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-md-flex container justify-content-between d-none">
            <div class="logo">
                <img src="./images/logo.svg" alt="">
            </div>
            <div class="header-info pl-5 w-100">
                <div class="header-info_up d-flex justify-content-between">
                    <div class="header-info_up-text">
                        <p>Товары для здоровья, медицинская техника и ортопедические товары в Красноярске</p>
                    </div>
                    <div class="header-info_up-social d-flex">
                        <a href=""><img src="./images/vk.svg" alt=""></a>
                        <a href=""><img src="./images/od.svg" alt=""></a>
                        <a href=""><img src="./images/insta.svg" alt=""></a>
                    </div>
                </div>
                <div class="header-info_down d-flex justify-content-between">
                    <div class="header-info_down-search col-md-4 col-xl-7 p-0">
                        <form action="">
                            <input type="text" placeholder="Поиск">
                        </form>
                    </div>
                    <div class="header-info_down-info d-flex w-100 col-md-8 col-xl-5 p-0">
                        <div class="header-info_down-info-phone text-right">
                            <div class="header-info_down-info-phone-time">
                                <p>Пн – Вс: 10.00 – 20.00</p>
                            </div>
                            <div class="header-info_down-info-phone-phone">
                                <p>+7 (391) 216-81-27</p>
                            </div>
                        </div>
                        <div class="header-info_down-info-call">
                            <button class="button">Заказать звонок</button>
                        </div>
                        <div class="header-info_down-info-logout">
                            <a href=""><img src="./images/iconenter-left.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="header-menu d-none d-md-block">
        <div class="container">
            <ul>
                <a href="#"><button class="navbar-toggler">
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                    <span class="toggler-icon"></span>
                </button>Каталог</a>
                <a href="">Акции</a>
                <a href="" class="have-sub">Услуги</a>
                <a href="" class="have-sub">Как купить</a>
                <a href="" class="have-sub">Компания</a>
                <a href="">Контакты</a>
            </ul>
        </div>
    </section>
    <section class="breadcrumbs mt-4">
        <div class="breadcrumbs-name container">
            <ul class="justify-content-left m-0 p-0">
                <li><a href="/">Главная</a></li>
                <li class="active">Новости</li>
            </ul>
            <h1>Новости</h1>
        </div>
    </section>
    <section class="content">
        <div class="container d-flex">
            <div class="col-md-3 d-none d-md-block pl-0">
                <div class="category">
                    <ul>
                        <li><a href="">Статьи</a></li>
                        <li><a class="active" href="">Новости</a></li>
                    </ul>
                </div>
                <div class="dropdown-rubriks">
                    <button class="w-100 d-flex justify-content-between p-0" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <div class="dropdown-rubriks-name d-flex justify-content-between w-100"><p>Рубрики</p><div><i class='fas fa-chevron-down'></i></div></div>
                      </button>
                    <div class="collapse" id="collapseExample">
                        <hr>
                        <form>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Все</label>
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Современный уход за ранами</label>
                              </div>
                              <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                <label class="form-check-label" for="exampleCheck3">Трофические язвы</label>
                              </div>
                        </form>
                    </div>
                </div>
                <div class="subscribe">

                </div>
            </div>
            <div class="col-md-9 pr-0 pl-0 pl-md-2">
                <div class="row m-0">
                    <?php require 'loading.php'; ?>
                    <div class="load mt-4 w-100">
                        <button type="button" class="load-more">
                            <i class="fas fa-redo-alt"></i><div class="spinner-grow text-primary d-none" style="width: 1rem; height: 1rem;" role="status">
                            <span class="sr-only">Loading...</span>
                          </div>Показать еще
                        </button>
                    </div>
                    <div class="pagination mt-4">
                        <ul>
                            <li><a href="" class="no_hover"><i class="fas fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li class="active"><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="" class="no_hover"><i class="fas fa-ellipsis-h"></i></a></li>
                            <li><a href="">8</a></li>
                            <li><a href="" class="no_hover"><i class="fas fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-mobile container pb-4 d-md-none">
            <div class="dropdown-company">
                <button class="w-100 d-flex justify-content-between p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    <div class="dropdown-company-name d-flex justify-content-between w-100"><p>Компания</p><div><i class='fas fa-chevron-down'></i></div></div>
                  </button>
                <div class="collapse" id="collapseExample1">
                    <div class="form-group pl-0 form-check">
                        <ul>
                            <li><a href="" target="_blank">Новости</a></li>
                            <li><a href="" target="_blank">Сотрудники</a></li>
                            <li><a href="" target="_blank">Вакансии</a></li>
                            <li><a href="" target="_blank">Магазины</a></li>
                            <li><a href="" target="_blank">Политика</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="dropdown-garanty">
                <button class="w-100 d-flex justify-content-between p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    <div class="dropdown-company-name d-flex justify-content-between w-100"><p>Гарантия на товар</p><div><i class='fas fa-chevron-down'></i></div></div>
                  </button>
                <div class="collapse" id="collapseExample2">
                    <div class="form-group pl-0 form-check">
                        <ul>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="dropdown-help">
                <button class="w-100 d-flex justify-content-between p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <div class="dropdown-company-name d-flex justify-content-between w-100"><p>Помощь</p><div><i class='fas fa-chevron-down'></i></div></div>
                  </button>
                <div class="collapse" id="collapseExample3">
                    <div class="form-group pl-0 form-check">
                        <ul>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="dropdown-contacts">
                <button class="w-100 d-flex justify-content-between p-0 collapsed" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                    <div class="dropdown-company-name d-flex justify-content-between w-100"><p>Наши контакты</p><div><i class='fas fa-chevron-down'></i></div></div>
                  </button>
                <div class="collapse" id="collapseExample4">
                    <div class="form-group pl-0 form-check">
                        <ul class="d-sm-flex d-block">
                            <li class="d-flex footer-contacts col-sm-4">
                                <div class="footer-label-icon">
                                    <img src="./images/call.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time">
                                        <p>Пн – Вс: 10.00 – 20.00</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>+7 (391) 216-81-27</p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-sm-none">
                                <div class="footer-info-call text-left">
                                    <button class="button">Заказать звонок</button>
                                </div>
                            </li>
                            <li class="d-flex footer-contacts col-sm-4">
                                <div class="footer-label-icon">
                                    <img src="./images/gis.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time text-left">
                                        <p>г. Красноярск</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>ул. Батурина, 20</p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex footer-contacts col-sm-4">
                                <div class="footer-label-icon">
                                    <img style="border: 1px solid #2795D2;" src="./images/email.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time text-left">
                                        <p>Почта</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>dir@novacoast.ru</p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-none d-sm-flex col-sm-4">
                                <div class="footer-info-call text-center">
                                    <button class="button">Заказать звонок</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="second-footer-mobile pt-4 d-md-none d-block d-sm-flex">
            <div class="footer-label col-sm-6">
                <p>Будьте всегда в курсе!</p>
                <form action="" class="send-email">
                    <div class="email">
                        <input type="email" placeholder="Ваш e-mail">
                        <button><i class="fas fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-1">

            </div>
            <div class="footer-label col-sm-5">
                <p>Оставайтесь на связи</p>
                <div class="header-info_up-social d-flex mt-3">
                    <a href=""><img src="./images/vk.svg" alt=""></a>
                    <a href=""><img src="./images/od.svg" alt=""></a>
                    <a href=""><img src="./images/insta.svg" alt=""></a>
                </div>
            </div>
        </div>
        <section class="down-footer d-md-none">
            <div class="container text-left d-block d-sm-flex">
                <div class="col-sm-6">
                    <div class="mb-2">
                        <div class="ipp-name">
                            <p class="">&#169; ИП Петров Сергей Николаевич 2014&#8212;2019</p>
                            <a href="" target="_blank">Разработка сайта - ITConstruct</a>
                        </div>
                    </div>
                    <div class="pechat mb-2">
                        <a href=""><i class="fas fa-print"></i>Версия для печати</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="./images/Bitmap.svg" alt="">
                </div>
            </div>
        </section>  
        <div class="container d-none d-md-block">
            <section class="upper-footer d-flex">
                <div class="col-lg-2">
                    <div class="footer-label">
                        <p>Компания</p>
                        <ul>
                            <li><a href="" target="_blank">Новости</a></li>
                            <li><a href="" target="_blank">Сотрудники</a></li>
                            <li><a href="" target="_blank">Вакансии</a></li>
                            <li><a href="" target="_blank">Магазины</a></li>
                            <li><a href="" target="_blank">Политика</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-label">
                        <p>Гарантия на товар</p>
                        <ul>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-label">
                        <p>Помощь</p>
                        <ul>
                            <li><a href="" target="_blank">Бренды</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                            <li><a href="" target="_blank">Пункт</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-label">
                        <p>Наши контакты</p>
                        <ul class="">
                            <li class="d-flex footer-contacts">
                                <div class="footer-label-icon">
                                    <img src="./images/call.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time">
                                        <p>Пн – Вс: 10.00 – 20.00</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>+7 (391) 216-81-27</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="footer-info-call text-center">
                                    <button class="button">Заказать звонок</button>
                                </div>
                            </li>
                            <li class="d-flex footer-contacts">
                                <div class="footer-label-icon">
                                    <img src="./images/gis.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time text-left">
                                        <p>г. Красноярск</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>ул. Батурина, 20</p>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex footer-contacts">
                                <div class="footer-label-icon">
                                    <img style="border: 1px solid #2795D2;" src="./images/email.svg" alt="">
                                </div>
                                <div class="footer-label-info-phone text-right">
                                    <div class="footer-label-time text-left">
                                        <p>Почта</p>
                                    </div>
                                    <div class="footer-label-phone">
                                        <p>dir@novacoast.ru</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-label">
                        <p>Будьте всегда в курсе!</p>
                        <form action="" class="send-email">
                            <div class="email">
                                <input type="email" placeholder="Ваш e-mail">
                                <button><i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="footer-label">
                        <p>Оставайтесь на связи</p>
                        <div class="header-info_up-social d-flex mt-3">
                            <a href=""><img src="./images/vk.svg" alt=""></a>
                            <a href=""><img src="./images/od.svg" alt=""></a>
                            <a href=""><img src="./images/insta.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section class="down-footer d-none d-md-block">
            <div class="container d-flex">
                <div class="col-lg-6">
                    <div class="ipp-name">
                        <p>&#169; ИП Петров Сергей Николаевич 2014&#8212;2019</p>
                        <a href="" target="_blank">Разработка сайта - ITConstruct</a>
                    </div>
                </div>
                <div class="col-lg-3 text-left pechat">
                    <a href=""><i class="fas fa-print"></i>Версия для печати</a>
                </div>
                <div class="col-lg-3 text-right">
                    <img src="./images/Bitmap.svg" alt="">
                </div>
            </div>
        </section>
    </footer>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="./index.js"></script>
    <script>
        var j = 3;

        $('.load-more').click(function() {
            const btn = $(this);
            const loader = btn.find('.spinner-grow ');
            const icon = btn.find('.fa-redo-alt');

            btn.attr('disabled', true);
            loader.removeClass('d-none');
            icon.addClass('d-none');

            setTimeout(function() {
                loader.addClass('d-none');
                btn.attr('disabled', false);
                icon.removeClass('d-none');

                $.ajax({
                    url: './loading.php',
                    type: 'POST',
                    cache: false,
                    data: {
                        j: j
                    },
                    success: function(data) {
                        if(data !== '') {
                            $(".load").before(data);
                            j += 3;
                        }
                    }
                });
            }, 200);
        });
      </script>
</body>
</html>