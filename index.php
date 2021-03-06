<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>ТОП-ТОП</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="apple-touch-icon" href="appleIcon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://raw.github.com/defunkt/jquery-pjax/master/jquery.pjax.js"></script>
    <script src="js/javaScript.js" defer></script>
    <script src="js/cycle2.js"></script>
    <script src="js/jquery.maskedinput.min.js" ></script>
    <script src="application.php" ></script>
    <script type="text/javascript">
      jQuery(function($){
      $("#phone").mask("+375 (99) 999-99-99");
      });
      </script>
    </head>

  <body>

       <div class="pim1" id="firstImageSuit">
            <header class="menuHeader" id="menu">
                <div class="logoMenu"> <img id="imageLogoMenu" src="css/image/logoSuite.png" alt=""> </div>
                <nav>
                  <ul>
                    <li><a href="#firstImageSuit" class="active scrollTo">Наверх</a></li>
                    <li><a href="#container2" class="scrollTo">Спецпредложение</a></li>
                    <li><a href="#secondImageSuit" class="scrollTo">Почему мы?</a></li>
                    <li><a href="#thirdPage" class="scrollTo">Ассортимент</a></li>
                    <li><a href="#fourthPage" class="scrollTo">О нас</a></li>
                  </ul>
                </nav>
                <div class="menu-toggle"><i class="fas fa-bars"></i></div>
            </header>


        <div id="nameSuit">
          <h1>Одежда для новорождённых и детей до 5 лет в Бресте</h1>
        </div>

        <div class="ptext">
          <div id="nameStock" class="container">
            <form id="topForm">

              <h2 id="nameOkna">Узнай прямо сейчас наличие товара и получи 10% скидки!</h2>
                <div class="dws-input">
                  <i id="iconUser"class="fas fa-user"></i>
                  <input type="text" id="username" name="username" placeholder="Введите имя"  autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                </div>
                <div id="iconPhone" class="dws-input">
                  <i class="fas fa-phone"></i>
                  <input type="text" id="phone" name="namberPhone" placeholder="+375 (__) ___-__-__"  autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
                </div>
                <div class="dwsSubmit">
                  <input type="button" class="dws-submit" name="submit" value="Получить скидку прямо сейчас">
                </div>
                  <br>
            </form>
          </div>
          <span class="border">

          </span>
        </div>

      </div>


      <div id="container2" align='center'>


       <div id="slideshow" class="cycle-slideshow"
       data-cycle-fx="fade"
       data-cycle-manual-fx="scrollHorz"
       data-cycle-pager-fx = "fade"
       data-cycle-manual-speed="400"
       data-cycle-prev="#prev"
       data-cycle-next="#next"
       data-cycle-speed="600"
       data-cycle-timeout="4000"
       data-cycle-pager = "#pager"
       data-cycle-pager-template="<a href='#'><img src='{{src}}' ></a>">


              <img src="css/image/speTovar/1.png" id="intro_img"/>
               <img src="css/image/speTovar/2.png" id="intro_img"/>
               <img src="css/image/speTovar/3.png" id="intro_img"/>
               <div id="prev_c"><img id="prev" src="css/image/prev1.svg"/></div>
               <div id="next_c"><img id="next" src="css/image/next1.svg"/></div>
              </div>

              <div id="pager"></div>

      </div>


      <section class="section-light" id="secondImageSuit">

        <div class="nameSecondPage">
          <h1>Почему выгодно у нас покупать?</h1>
        </div>

        <div class="blockBenefit">
          <div class="benefit">
            <div id="imageFirstBenefit" class="imageBenefit">
              <img src="css/image/percent.png" alt="">
            </div>
            <div class="captionBenefit">
              <h3>Гибкая система скидок</h3>
            </div>
            <div class="textBenefit">
              <p>Для наших постоянных клиентов действует гибкая система скидок.
                Мы всегда стараемся учитывать все пожелания по ценообразованию своих клиентов.</p>
            </div>
          </div>


          <div class="benefit">
            <div id="imageSecondBenefit" class="imageBenefit">
              <img src="css/image/eco.png" alt="">
            </div>
            <div class="captionBenefit">
              <h3>Гарантия качества товара</h3>
            </div>
            <div class="textBenefit">
              <p>Вся одежда изготовлена исключительно из натуральных, мягких тканей, приятных на ощупь, 100%-ый хлопок. ЭКО-линия белья.
              Товар сертифицирован. </p>
            </div>
          </div>

          <div class="benefit">
            <div id="imageThirdBenefit" class="imageBenefit">
              <img src="css/image/package.png" alt="">
            </div>
            <div class="captionBenefit">
              <h3>Обмен товара в течении 20 дней</h3>
            </div>
            <div class="textBenefit">
              <p> Покупатель в праве в течении 20 дней с момента передачи ему товара возвратить товар надлежащего качества или обменять его на аналогичный товар других размера, фасона, расцветки, если товар небыл в употреблении.</p>
            </div>
          </div>
        </div>

      </section>






      <section class="section section-dark1" id="thirdPage">
        <div class="nameFritiumPage">
          <h1>Что у нас продаётся?</h1>
        </div>

      <div id="assort" align='center'>
          <div class="container-assort">

                            <div class="card" onclick="openModal1()" >
                                <div class="poster">
                                    <img src="css/image/iconTovar/meloch.jpg" alt="">
                                    <div class="details">
                                        <h2> Мелочёвка для детей <br> <span>Ассортимент товара</span> </h2>
                                        <div class="tags">
                                           <span class="vareshki"> Варежки </span>
                                           <span class="shapochki"> Шапочки </span>
                                           <span class="kolgotki"> Колготки </span>
                                           <span class="nosochki"> Носочки </span>
                                           <span class="chepchiki"> Чепчики </span>
                                        </div>
                                        <div class="info">
                                           <p> Размеры: от 0 - 3 лет <br>
                                                Состав: 100% хлопок <br>
                                                Цвета в ассортименте, вариантов расцветок гораздо больше, чем указано на фото! Уточняйте у продавца! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card" onclick="openModal2()">
                                <div class="poster">
                                    <img src="css/image/iconTovar/top.png" alt="">
                                    <div class="details">
                                        <h2> Верхняя одежда <br> <span>Ассортимент товара</span> </h2>
                                        <div class="tags">
                                           <span class="vareshki"> Комбинезоны-трансформеры </span>
                                           <span class="shapochki"> Комбинезоны </span>
                                           <span class="kolgotki"> Куртки </span>
                                           <span class="nosochki"> Жилетки </span>
                                        </div>
                                        <div class="info">
                                           <p> Размеры: рост 68 - 120 см. <br>
                                               Цвета в ассортименте, вариантов расцветок гораздо больше, чем указано на фото! Уточняйте у продавца! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card" onclick="openModal3()">
                                <div class="poster">
                                    <img src="css/image/iconTovar/custome.jpg" alt="">
                                    <div class="details">
                                        <h2> Костюмы <br> <span>Ассортимент товара</span> </h2>
                                        <div class="tags">
                                           <span class="vareshki"> Сарафаны </span>
                                           <span class="shapochki"> Платья </span>
                                           <span class="kolgotki"> Джемпера </span>
                                           <span class="nosochki"> Гольфы </span>
                                           <span class="chepchiki"> Комбинезоны </span>
                                        </div>
                                        <div class="info">
                                           <p> Широкий ассортимент для мальчиков и девочек. <br>
                                                Цвета в ассортименте, вариантов расцветок гораздо больше, чем указано на фото! Уточняйте у продавца! </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cardBig" onclick="openModal4()">
                                <div class="posterBig">
                                    <img src="css/image/iconTovar/clothes.jpg" alt="">
                                    <div class="detailsBig">
                                        <h2> Бельё <br> <span>Ассортимент товара</span> </h2>
                                        <div class="tags">
                                           <span class="vareshki"> Комплекты для новорождённых </span>
                                           <span class="shapochki"> Комплекты для крещения </span>
                                           <span class="kolgotki"> Боди </span>
                                           <span class="nosochki"> Слипы </span>
                                           <span class="chepchiki"> Кофточки </span>
                                           <span class="shapochki"> Распашонки </span>
                                           <span class="kolgotki"> Ползунки </span>
                                           <span class="nosochki"> Полотенце </span>
                                           <span class="vareshki"> Конверты </span>
                                        </div>
                                        <div class="info">
                                           <p> Размеры: рост от 50 - 92 см. <br>
                                               Широкий выбор расцветок.
                                             </p>
                                        </div>
                                    </div>
                                </div>
                            </div>



            </div>
        </div>

        </section>







      <section class="section-dark" id="fourthPage">

        <div class="font1">
          <h3>Контакты:</h3>
          <p>ИП Герчук А.В., УНП 200033222 <br>
          Герчук Александр Витальевич <br>
        тел. +375 (29) 642-80-82 (LIFE) <br>
        город: Брест <br>
        улица: Волгоградская, 19 <br>
      павильон: №213 (рынок 'Лагуна')</p>
        </div>

        <div class="font2">
          <h3>Предлагаем товар производства:</h3>
          <p>Республики Беларуси, <br>
            Украины, <br>
            Польши.</p>
        </div>

        <div align='center' class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.092379206352!2d23.753291215279635!3d52.07804817973298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x584a40dd5602d1b5!2z0JzQsNCz0LDQt9C40L0g0LTQtdGC0YHQutC-0Lkg0L7QtNC10LbQtNGL!5e0!3m2!1sru!2sby!4v1530701269133" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="containerContact">
            <div class="boxContact">
                <div class="iconContact" id="iconContact1"></div>
                <div class="detailsContact"> <a href="tel:+375296428082">+375(29)642-80-82</a> </div>
            </div>
            <div class="boxContact">
                <div class="iconContact" id="iconContact2"></div>
                <div class="detailsContact"><a href="mailto:gerchuk67@mail.ru">gerchuk67@mail.ru</a></div>
            </div>
        </div>

      </section>





      <div id="footers">
        <div class="footer">
          Copyright (c) 2018 Copyright Holder All Rights Reserved.
        </div>
      </div>






<wrapper>
  <div class="dws-wrapper">
    <input type="checkbox" name="toggle" id='dws-form' class="toggleForm">
      <div class="dws-container">
          <label for="dws-form" class="toggleForm">Задать вопрос</label>
          <form class="formBox" id="formBox" action="send.php" method="post" name=" application ">

              <div class="inputBox">
                  <label class="labelText">Ваше имя:</label>
                  <input type="text" class="userInput" name="userName1" required autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false">
              </div>

              <div class="inputBox">
                  <label class="labelText">E-mail:</label>
                  <input type="email" class="userInput" name="emailUser1" required>
              </div>

              <div class="inputBox">
                  <label class="labelText">Номер телефона:</label>
                  <input type="phone" class="userInput" name="telUser1" required pattern="\d+">
              </div>

              <div class="inputBox">
                  <label class="labelText">Сообщение:</label>
                  <textarea class="userInput" name="textUser1" required></textarea >
              </div>

              <div class="inputBox">
                  <input type="checkbox" required>
                  <label class="personalDoc">Я согласен на обработку моих <a href="#">персональных данных</a></label>

              </div>
              <input type="submit" value="Отправить" class='button' form="application">
          </form>
      </div>
  </div>
</wrapper>


<div class="modal pjax-container" id="simpleModal">
    <div class="modal-content">
        <span class="closeBtn">&times;</span>
        <div class="tabContainer">
            <div class="buttonContainer">
                <button id="but1" onclick="showPannel1()">Мелочёвка</button>
                <button id="but2" onclick="showPannel2()">Верхняя одежда</button>
                <button id="but3" onclick="showPannel3()">Костюмы</button>
                <button id="but4" onclick="showPannel4()">Бельё</button>
            </div>
            <div class="tabPanel1" id="tabPanel1">
              <div id="containerTab1">


               <div id="slideshowTab1" class="cycle-slideshow"
               data-cycle-fx="fade"
               data-cycle-manual-fx="scrollHorz"
               data-cycle-pager-fx = "fade"
               data-cycle-manual-speed="400"
               data-cycle-prev="#prevTab1"
               data-cycle-next="#nextTab1"
               data-cycle-speed="600"
               data-cycle-timeout="10000"
               data-cycle-pager = "#pagerTab1"
               data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
                   >

                      <img src="css/image/tovar/носички/1.jpg" id="intro_img"/>
                      <img src="css/image/tovar/носички/tr5_b.jpg" id="intro_img"/>
                      <img src="css/image/tovar/носички/SKC_BUC_WHITE_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/слюнявчики/sl2_b.jpg" id="intro_img"/>
                      <img src="css/image/tovar/слюнявчики/vr1_i_b_l.jpg" id="intro_img"/>
                      <img src="css/image/tovar/шапочки чепчики/ShP2_icon.jpg" id="intro_img"/>
                      <img src="css/image/tovar/шапочки чепчики/shp33_b.jpg" id="intro_img"/>
                    </div>



                    <div id="prev_cTab1"><img id="prevTab1" src="css/image/prev1.svg"/></div>
                    <div id="next_cTab1"><img id="nextTab1" src="css/image/next1.svg"/></div>
            </div>
          </div>
            <div class="tabPanel2" id="tabPanel2">
                    <div id="containerTab2">

                    <div class="">
                     <div id="slideshowTab2" class="cycle-slideshow"
                     data-cycle-fx="fade"
                     data-cycle-manual-fx="scrollHorz"
                     data-cycle-pager-fx = "fade"
                     data-cycle-manual-speed="400"
                     data-cycle-prev="#prevTab2"
                     data-cycle-next="#nextTab2"
                     data-cycle-speed="600"
                     data-cycle-timeout="10000"
                     data-cycle-pager = "#pagerTab2"
                     data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
                         >

                            <img src="css/image/tovar/верхняя одежда/5_gl20_a.jpg" id="intro_img"/>
                            <img src="css/image/tovar/верхняя одежда/1196.kol_a.jpg" id="intro_img"/>
                            <img src="css/image/tovar/верхняя одежда/gl31_a.jpg" id="intro_img"/>

                          </div>



                          <div id="prev_cTab2"><img id="prevTab2" src="css/image/prev1.svg"/></div>
                          <div id="next_cTab2"><img id="nextTab2" src="css/image/next1.svg"/></div>

            </div>
          </div>

          </div>
            <div class="tabPanel3" id="tabPanel3">

              <div id="containerTab3">

              <div class="">
               <div id="slideshowTab3" class="cycle-slideshow"
               data-cycle-fx="fade"
               data-cycle-manual-fx="scrollHorz"
               data-cycle-pager-fx = "fade"
               data-cycle-manual-speed="400"
               data-cycle-prev="#prevTab3"
               data-cycle-next="#nextTab3"
               data-cycle-speed="600"
               data-cycle-timeout="10000"
               data-cycle-pager = "#pagerTab3"
               data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
                   >

                      <img src="css/image/tovar/Гольфики кофточки/gf1_icon.jpg" id="intro_img"/>
                      <img src="css/image/tovar/Гольфики кофточки/gf2_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/Гольфики кофточки/gf22hl_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/Гольфики кофточки/gf68_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/джемпера/e134eb2f58f2c6b1eb3757af716bc1b8.jpg" id="intro_img"/>
                      <img src="css/image/tovar/джемпера/fa3f21027d0d5228f0382f949fbed98d.jpg" id="intro_img"/>
                      <img src="css/image/tovar/Платья сарафаны/10567a_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/Платья сарафаны/PL198_a.jpg" id="intro_img"/>
                      <img src="css/image/tovar/слипы, комбинезоны/pk135_b.jpg" id="intro_img"/>
                      <img src="css/image/tovar/слипы, комбинезоны/PK136_b.jpg" id="intro_img"/>

                    </div>



                    <div id="prev_cTab3"><img id="prevTab3" src="css/image/prev1.svg"/></div>
                    <div id="next_cTab3"><img id="nextTab3" src="css/image/next1.svg"/></div>

      </div>
    </div>



            </div>
            <div class="tabPanel4" id="tabPanel4">


                            <div id="containerTab4">

                            <div class="">
                             <div id="slideshowTab4" class="cycle-slideshow"
                             data-cycle-fx="fade"
                             data-cycle-manual-fx="scrollHorz"
                             data-cycle-pager-fx = "fade"
                             data-cycle-manual-speed="400"
                             data-cycle-prev="#prevTab4"
                             data-cycle-next="#nextTab4"
                             data-cycle-speed="600"
                             data-cycle-timeout="10000"
                             data-cycle-pager = "#pagerTab4"
                             data-cycle-pager-template="<a href='#'><img src='{{src}}' width=150 height=100></a>"
                                 >

                                 <img src="css/image/tovar/слипы, комбинезоны/344_kb2_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/слипы, комбинезоны/kb2_b.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/слипы, комбинезоны/kb2_e.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/слипы, комбинезоны/kb89_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/слипы, комбинезоны/kp172_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd58a_e.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd59a_b.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd59b_d.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd69_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd76_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/Bd103-1_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd106-3-600x800_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/боди/bd127_a.jpg" id="intro_img"/>
                                 <img src="css/image/tovar/для крещения/pl131_a.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/для крещения/pl190_a.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/распашонки/rb_5_a.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/распашонки/rb1_c.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/распашонки/RB1_icon.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/распашонки/rp_7_a.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/распашонки/RP7_icon.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/штанишки, ползунки/pz1_b.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/штанишки, ползунки/pz9_d.jpg" id="intro_img"/>
                                  <img src="css/image/tovar/футболки майки/fb140_a.jpg" id="intro_img"/>

                                  </div>



                                  <div id="prev_cTab4"><img id="prevTab4" src="css/image/prev1.svg"/></div>
                                  <div id="next_cTab4"><img id="nextTab4" src="css/image/next1.svg"/></div>

                    </div>
                  </div>



            </div>
        </div>



          <div class="callNamber" >
              <div class="pulse">
                <div class="blos"> Указанный товар не весь, а приведён для наглядности ассортимента. </div>
                  <div class="phone"><i class="fas fa-exclamation-circle"></i>  </div>
                  <!-- <div class="text"> Кнопка связи </div> -->
              </div>
          </div>

    </div>
</div>






  </body>
</html>
