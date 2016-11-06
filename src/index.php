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
      <div id="absolute-img-container-1">
          <img class="absolute-img" src="img/parts/blue-part-1.png" alt="">
      </div>
      <div id="absolute-img-container-2">
          <img class="absolute-img" src="img/parts/blue-part-2.png" alt="">
      </div>
      <div id="absolute-img-container-3">
          <img class="absolute-img" src="img/parts/blue-part-3.png" alt="">
      </div>
      <div id="absolute-img-container-4">
          <img class="absolute-img" src="img/parts/blue-part-4.png" alt="">
      </div>
      <div id="absolute-img-container-5">
          <img class="absolute-img" src="img/parts/blue-part-5.png" alt="">
      </div>
        <!-- header -->
        <div id="header">
            <a href="#"><img src="img/logo.png" alt="logo" class="logo"></a>
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
                      <input type="hidden" name="form_subject" value="Order">
                      <!-- END Hidden Required Fields -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Замовлення</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="vinCode">VIN Номер автомобіля</label>
                                        <input type="text" class="form-control" id="vinCode" name="vinCode" placeholder="WBA3A9C59EF479042">
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-6">
                                  <label for="year">Рік випуску</label>
                                  <select class="selectpicker show-tick" id="year" name="year" data-width="170px">
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
                                    <input id="engineVolumeInput" name="engineVolume" value="1.5">

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
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="marks">Марка</label>
                                        <input type="text" class="form-control" id="marks" name="marka_id" placeholder="BMW">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="model">Модель</label>
                                        <input type="text" class="form-control" id="models" name="models" placeholder="E39">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="inputSearch">Яку запчастину шукаєте?</label>
                                        <textarea class="form-control" id="inputSearch" name="inputSearch" placeholder='Наприклад: “амортизатор задній”, “датчик температури”' rows="3" ></textarea>
                                    </div>
                                    <a id="searchNumber" class="pull-left" href="#">Пошук за номером запчастини</a>
                                    <div class="form-group" style="display:none;">
                                        <label for="partNumber">Пошук за номером запчастини</label>
                                        <input type="text" id="partNumber" name="partNumber" class="form-control" placholder="9091520003">
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
