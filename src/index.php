<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Пошук та підбір найдешевших автозапчастин у Тернополі | tuning.te.ua</title>
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta property="og:url"           content="https://tuning.te.ua" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="Пошук та підбір найдешевших автозапчастин у Тернополі" />
  	<meta property="og:description"   content="Ми допоможемо вам придбати оригінальні запчастини за найнижчим цінами" />
  	<meta property="og:image"         content="https://tuning.te.ua/img/share.png" />

    <meta property="fb:app_id" content="1220091984700643" />
    <meta name="yandex-verification" content="e9309def113a0348" />
    <?php require_once 'phplib/Mobile_Detect.php';
      $detect = new Mobile_Detect;
    ?>

    <script type="text/javascript">
      var IS_DESKTOP = <?php echo !$detect->isMobile()&&!$detect->isTablet() ? '1' : '0'; ?>,
        IS_TABLET = <?php echo $detect->isTablet() ? '1' : '0'; ?>,
        IS_MOBILE = <?php echo  $detect->isMobile() && !$detect->isTablet() ? '1' : '0'; ?>;
    </script>
</head>
<body class="<?php echo $detect->isMobile() ? 'mobile-view' : 'desktop-view'; ?>">
  <style media="screen">
    .mobile-view input,
    .mobile-view textarea {
      font-size: 16px; /* prevent zooming on mobile when focus; */
    }
  </style>

      <div id="wrapper">
        <div id="parallax-scene">
          <div data-depth="0.10" class="layer" id="absolute-img-container-0">
            
          </div>
          <div data-depth="0.20" class="layer" id="absolute-img-container-1">
            <img class="absolute-img" src="img/parts/blue-part-1.png" alt="">
          </div>
          <div data-depth="0.60"  class="layer" id="absolute-img-container-2">
            <img class="absolute-img" src="img/parts/blue-part-2.png" alt="">
          </div>
          <div  data-depth="0.40"  class="layer" id="absolute-img-container-3">
            <img class="absolute-img" src="img/parts/blue-part-3.png" alt="">
          </div>
          <div  data-depth="0.80"  class="layer" id="absolute-img-container-4">
            <img class="absolute-img" src="img/parts/blue-part-4.png" alt="">
          </div>
          <div  data-depth="1.00"  class="layer" id="absolute-img-container-5">
            <img class="absolute-img" src="img/parts/blue-part-5.png" alt="">
          </div>
        </div>
        <!-- header -->
        <div id="header">
            <a href="#">
              <svg class="logo" width="230" height="107">
                <image class="" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/logo.svg" itemprop="logo" src="img/logo.png" width="230" height="107" alt="Tuning.te.ua"></image>
              </svg>
            </a>
        </div>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- parallax images-->
                        <div class="caption">
                            <h1>Автозапчастини на замовлення</h1>
                            <p>Ми допоможемо вам придбати оригінальні запчастини за найнижчим цінами.</p>
                            <p>Не витрачайте час на пошук, це наша робота. Спробуйте — це абсолютно безкоштовно:</p>
                            <p><a href="#" class="btn-primary hvr-ripple-out" data-toggle="modal" data-target="#myModal">Дізнатись ціни</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        tuning.te.ua — Пошук та підбір найдешевших автозапчастин у Тернополі
    </div>
    <!-- Modal window -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <!-- <div class=""> -->
            <div class="row">
                <div class="modal-content .col-md-8 .col-md-offset-2">
                    <form id="sendOrder">
                      <!-- Hidden Required Fields -->
                      <input type="hidden" name="project_name" value="tuning.te.ua">
                      <input type="hidden" name="admin_email" value="admin@tuning.te.ua">
                      <input type="hidden" name="form_subject" value="Замовлення">
                      <!-- END Hidden Required Fields -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Замовлення</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-holder">
                              <div class="row">
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="vinCode">VIN Номер автомобіля</label>
                                          <input type="text" class="form-control" id="vinCode" name="vinCode" placeholder="WBA3A9C59EF479042">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-xs-6">
                                    <label for="year">Рік випуску</label>
                                    <select class="selectpicker show-tick" id="year" name="year" title="Нічого не обрано" data-width="226px">
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2002">2002</option>
                                            <option value="2001">2001</option>
                                            <option value="2000">2000</option>
                                            <option value="1999">1999</option>
                                            <option value="1998">1998</option>
                                            <option value="1997">1997</option>
                                            <option value="1996">1996</option>
                                            <option value="1995">1995</option>
                                            <option value="1994">1994</option>
                                            <option value="1993">1993</option>
                                            <option value="1992">1992</option>
                                            <option value="1991">1991</option>
                                            <option value="1990">1990</option>
                                            <option value="1989">1989</option>
                                            <option value="1988">1988</option>
                                            <option value="1987">1987</option>
                                            <option value="1986">1986</option>
                                            <option value="1985">1985</option>
                                            <option value="1984">1984</option>
                                            <option value="1983">1983</option>
                                            <option value="1982">1982</option>
                                            <option value="1981">1981</option>
                                            <option value="1980">1980</option>
                                            <option value="1979">1979</option>
                                            <option value="1978">1978</option>
                                            <option value="1977">1977</option>
                                            <option value="1976">1976</option>
                                            <option value="1975">1975</option>
                                            <option value="1974">1974</option>
                                            <option value="1973">1973</option>
                                            <option value="1972">1972</option>
                                            <option value="1971">1971</option>
                                            <option value="1970">1970</option>
                                          </select>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                    <div class="form-group range-holder">
                                      <label for="engineVolumeInput">Об'єм двигуна</label>
                                      <input id="engineVolumeInput" type="number" name="engineVolume" value="1.5">

                                      <input class=""
                                        type="range"
                                        min="0.4"
                                        max="8"
                                        step="0.1"
                                        value="1.5"
                                        data-orientation="horizontal"
                                        id="engineVolume"
                                      >

                                    </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="marks">Марка</label>
                                          <input type="text" class="form-control" id="marks" name="marka_id" placeholder="BMW">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="model">Модель</label>
                                          <input type="text" class="form-control" id="models" name="models" placeholder="E39">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="fuel">Вид палива</label>
                                          <select class="selectpicker show-tick" id="fuel" name="fuel" title="Нічого не обрано" data-width="226px">
                                                  <option value="patrol">бензин</option>
                                                  <option value=diesel>дизель</option>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12 col-xs-12">
                                      <div class="form-group">
                                          <label for="inputSearch">Яку запчастину шукаєте?</label>
                                          <textarea class="form-control" id="inputSearch" name="inputSearch" placeholder='Наприклад: “амортизатор задній”, “датчик температури”' rows="3" ></textarea>
                                      </div>
                                      <a id="searchNumber" class="underline" href="#">Пошук за номером запчастини</a>
                                      <div class="form-group" style="display:none;">
                                          <input type="text" id="partNumber" name="partNumber" class="form-control" placholder="9091520003">
                                      </div>
                                      <a id="catalogueLink" class="underline" href="#">Оригінальні каталоги</a>
                                      <div class="dropdown" id="catalogueLinkDrop" style="display:none;">
                                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Посилання на каталоги
                                            <span class="caret"></span>
                                          </button>
                                          <ul class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenu1">
                                            <li><a target=_blank href="http://eper.fiatforum.com">ALFA ROMEO</a></li>
                                            <li><a target=_blank href="http://audi.afora.ru/RDW/">AUDI</a></li>
                                            <li><a target=_blank href="http://www.neoriginal.ru/cat/bmw">BMW</a></li>
                                            <li><a target=_blank href="https://ngpc.cnh.com">CASE</a></li>
                                            <li><a target=_blank href="http://www.ilcats.ru/clid/1">CHRYSLER</a></li>
                                            <li><a target=_blank href="http://www.exsale.ru/citroen-katalog-originalnih-zapchastey/">CITROEN</a></li>
                                            <li><a target=_blank href="http://autocats.info/catalog/models/2/">DAEWOO</a></li>
                                            <li><a target=_blank href="http://lanos-chevrolet.ru">DAEWOO</a></li>
                                            <li><a target=_blank href="http://www.at-part.ru/daf-parts-catalog.html">DAF</a></li>
                                            <li><a target=_blank href="http://www.at-part.ru/daf-parts-catalog.html">DAF</a></li>
                                            <li><a target=_blank href="http://eper.fiatforum.com">FIAT</a></li>
                                            <li><a target=_blank href="http://www.fordcat.ru/shop/1">FORD</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/ford/">FORD</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/honda/">HONDA</a></li>
                                            <li><a target=_blank href="https://estore.honda.com/">HONDA</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/hyundai/">HYUNDAI</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/isuzu/">ISUZU</a></li>
                                            <li><a target=_blank href="http://catalog.isuzu-astra.com/">ISUZU</a></li>
                                            <li><a target=_blank href="http://80.68.67.6:8090/mycatric/mainAct.jsp">IVECO</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/kia/">KIA</a></li>
                                            <li><a target=_blank href="http://www.avtoall.ru/acat/index1.php">LADA</a></li>
                                            <li><a target=_blank href="http://eper.fiatforum.com">LANCIA</a></li>
                                            <li><a target=_blank href="http://www.lrcat.com/">LAND ROVER</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/mazda/">MAZDA</a></li>
                                            <li><a target=_blank href="http://mbfans.info/RU/mercedes/c/5/a/FG/cat/56L/600353">MERCEDES</a></li>
                                            <li><a target=_blank href="http://catalog.all4car.com.ua/mercedes/">MERCEDES</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/mitsubishi/">MITSUBISHI</a></li>
                                            <li><a target=_blank href="http://nissan-cat.ru/">NISSAN</a></li>
                                            <li><a target=_blank href="http://opel.vdopel.ru/opel_eu.lmz">OPEL</a></li>
                                            <li><a target=_blank href="http://www.auto-parts.spb.ru/cat/cats/m.mycat?cat=op&client=dr2000">OPEL</a></li>
                                            <li><a target=_blank href="http://www.exsale.ru/pego-katalog-originalnih-zapchastey/">PEUGEOT</a></li>
                                            <li><a target=_blank href="http://renault.afora.ru/">RENAULT</a></li>
                                            <li><a target=_blank href="http://renault-catalog.ru/">RENAULT</a></li>
                                            <li><a target=_blank href="http://www.numcat.ru/mgrover/">ROVER</a></li>
                                            <li><a target=_blank href="http://carcats.ru/epc/">SAAB</a></li>
                                            <li><a target=_blank href="http://ww1.safholland.ru/sites/russia/en-US/aftermarket/partsdocu/manual/Pages/default.aspx">SAF</a></li>
                                            <li><a target=_blank href="http://scania-catalog.ru/">SCANIA</a></li>
                                            <li><a target=_blank href="http://seat.afora.ru/E/">SEAT</a></li>
                                            <li><a target=_blank href="http://skoda.afora.ru/CZ/">SKODA</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/ssangyong/">SSANGYONG</a></li>
                                            <li><a target=_blank href="http://www.ssangyong.pro/">SSANGYONG</a></li>
                                            <li><a target=_blank href="http://cats.plentycar.ru/subaru/">SUBARU</a></li>
                                            <li><a target=_blank href="http://suzuki-cat.ru/">SUZUKI</a></li>
                                            <li><a target=_blank href="http://catalog.autodoc.ru/toyota/">TOYOTA</a></li>
                                            <li><a target=_blank href="http://volkswagen.afora.ru/RDW/">VOLKSWAGEN</a></li>
                                            <li><a target=_blank href="http://www.volvo-catalog.ru/initMenu.do">VOLVO</a></li>
                                            <li><a target=_blank href="http://www.volvopentashop.com">VOLVO</a></li>
                                            <li><a target=_blank href="http://carcats.ru/">VOLVO</a></li>
                                          </ul>
                                        </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <h3>Як з Вами зв'язатись?</h3>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="name">Iм'я</label>
                                          <input type="text" class="form-control" id="name" name="name" placeholder="Микола">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="email">E-mail</label>
                                          <input type="email" class="form-control" id="email" name="email" placeholder="user@mail.com">
                                      </div>
                                  </div>
                                  <div class="col-md-4 col-xs-12">
                                      <div class="form-group">
                                          <label for="tel">Телефон</label>
                                          <input type="tel" class="form-control" id="tel" name="tel" placeholder="0631231234">
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="form-success">
                            <img class="img-responsive" src="img/sent.svg" alt="Заявку прийнято, очікуйте відповідь найближчим часом">
                            <p class="text-center">Заявку прийнято, очікуйте відповідь найближчим часом</p>
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary hvr-ripple-out" id="submitOrder">Взнати ціну</button>
                        </div>
                    </form>
                </div>
                <!-- </div> -->
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/app.min.js"></script>
        <!-- metrika -->
        <?php include  'metrika.php' ?>
        <!-- metrika end -->


</body>

</html>
