<?php
include 'header.php';
$id = $_GET['id'];
$res = mysql_query("SELECT `brand`, `model`, `price`, `about`, `image` FROM `product` WHERE id='$id'");
$arr=mysql_fetch_array($res);

?>
<div class="container">
  <div class="row">
    <div class="container">
      <ol class="breadcrumb">
        <li>
          <a href="project.php">
            <i class="fa fa-home"></i>Главная
          </a>
        </li>
        <li><a href="#">Сотовые телефоны</a></li>
        <li><a href="#">Смартфоны</a></li>
        <li>Модель телефона</li>
      </ol>
    </div>
   </div>
<!-- INFORMATION -->
 <div class="container">
 	<div class="col-lg-6">
 		<img src="images/<?=$arr['image']?>" width="400" height="450">

 		 </div>
 	<div class="col-lg-6">
 		<h2><?=$arr['model']?></h2>
 		<p><span class="ty">Brand:</span><?=$arr['brand']?></p>
 		<span class="ty">Краткое описание:</span>
 		<p><?=$arr['about']?></p>
 		<p><span class="ambal"><?=$arr['price']?>$</span></p>
    <?php 
      if(isset($_SESSION['id'])){
     ?>
    <button class="btn btn-success lll" id="add"><i class="fa fa-shopping-basket"></i> Добавить в корзину </button>
    <?php 
      }
     ?>
 	</div>
	 	</div>

    <script>
      $("#add").click(function(){
         $.ajax({
          type:"get",
          url:"add_to_box.php",
          data:{"id":<?=$id?>},
          cache:false,
          success:function(response){
              $("#add").text("Товар добавлен в корзину").attr("disabled","disabled");

          }
         });
         return false;
      });
    </script>

      <div class="container">
        <div class="row">
        <div class="tabs">
              <ul class="nav nav-tabs www">
              <li class="active"><a href="#1" data-toggle="tab">Технические характеристеки</a> </li>
            <li><a href="#2" data-toggle="tab">Отзывы</a> </li></ul>
              <div class="tab-content"> 
              <div class="active tab-pane fade in" id="1">
                    <div class="headline">Серия модели</div>
      <table>
        <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Серия</td>
              <td>
                                IPhone 5S &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>

                <div class="headline">Операционная система</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Операционная система</td>
              <td>
                                iOS 7 &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">Процессор</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Производитель процессора</td>
              <td>
                                ARM &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Модель процессора</td>
              <td>
                                Apple A7 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Тактовая частота процессора, Ггц</td>
              <td>
                                1.3 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Количество ядер</td>
              <td>
                                2 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Акселерация 3D-графики</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">SIM карта</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Количество SIM-карт</td>
              <td>
                                1 &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">Электропитание</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Аккумулятор в комплекте</td>
              <td>
                                1 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Тип аккумулятора</td>
              <td>
                                встроенный Li-Po &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Емкость аккумулятора, mAh</td>
              <td>
                                1560 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Время в режиме разговора, ч</td>
              <td>
                                10 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Время в режиме ожидания, ч</td>
              <td>
                                250 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Время зарядки аккумулятора, ч</td>
              <td>
                                3 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Зарядка от USB порта</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">Передача Данных</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Передача Данных</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка GPRS</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка EDGE</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка HSDPA</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка HSUPA</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка HTTP</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка HTML</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка xHTML</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка 3G</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Поддержка 4G</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">Корпус</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Материал корпуса</td>
              <td>
                                Пластик и металл &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>

  <div class="headline">Цвет и вес</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Вес, гр</td>
              <td>
                                112 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Цвет</td>
              <td>
                                <span class="color-feature" style="background-color: #999999"></span>
                                                </td>
            </tr>
          </tbody>
      </table>
      <div class="headline">Габариты</div>
      <table>
         <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Высота, мм</td>
              <td>
                                124 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Ширина, мм</td>
              <td>
                                59 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Толщина, мм</td>
              <td>
                                8 &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>










                <div class="headline">Камера</div>
              <table>
                 <colgroup>
    <col style="width: 50%" />
    <col style="width: 50%" />
    
  </colgroup>
        <tbody>
          <tr>
              <td class="attrib">
                  Встроенная фотокамера</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Разрешение основной камеры, мпикс</td>
              <td>
                                8 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Максимальное разрешение снимка, пикс</td>
              <td>
                                3264x2448 &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Встроенная вспышка</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Автофокус</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Стабилизатор изображения</td>
              <td>
                                Нет &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Запись GPS-координат снимка</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Запись видео</td>
              <td>
                                Да &nbsp;
                                            </td>
            </tr>
          <tr>
              <td class="attrib">
                  Разрешение фронтальной камеры, мпикс</td>
              <td>
                                5 &nbsp;
                                            </td>
            </tr>
          </tbody>
      </table>





              </div>
              <div class="tab-pane fade" id="2"><div class="container">
  <div class="row">
    <h2>Carousel Reviews</h2>
  </div>
</div>
<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner">
                    <div class="item active">
                      <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <pApple Iphone 5s, ну не смогла я тебя полюбить всей душой, в тебе есть большие минусы, зато ты мой любимый "фотоаппарат" для написания отзывов! 2 года использования 5s gray, чем он хорош, и почему я хочу его поменять? МНОГО ФОТО с аппарата</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                        <img src="images/5.png"/>
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Айфон 6: отзыв меняла несколько раз. Шок- Разочарование - Смирение - Презрение- Сожаление об утрате. И это все о нем. / + характеристики, Сравнение фото iPhone 6 и Samsung Galaxy S5"  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                        <img src="images/5.png"/>
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>▶▶▶ Отличный смартфон для любителей ОС Android, которые ищут неплохую камеру и не хотят заряжать телефон 2 раза в день! Много текста, фото, скриншоты и мини-видеообзор! </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Смартфон за 6990 руб., с отличной камерой, 2 сим-картами и множеством достоинств. Всё ли так хорошо на самом деле? + очень много фотографий и скриной.</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Samsung Galaxy s6 edge. Подробно о моих впечатлениях через несколько недель использования. Как я боролась с голосовым помощником )) Добавила много фото со смартфона."  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>Лучший телефон,который покоряет внешним видом и крутой камерой!!! LG G4. МНОГО ФОТО!</p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>
                    <div class="item">
                        <div class="col-md-4 col-sm-6">
                    <div class="block-text rel zmin">
                    <a title="" href="#">Hercules</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>Пользуясь Samsung я всегда думаю о том, что переплатила за бренд. В целом хороший телефончик, но не без недостатков. Истинному любителю гаджетов не понравиться, а для повседневного использования подойдет..</p>
                  <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                  </div>
              <div class="person-text rel">
                <img alt="" src="http://myinstantcms.ru/images/img13.png">
                <a title="" href="#">Anna</a>
                <i>from Glasgow, Scotland</i>
              </div>
            </div>
                  <div class="col-md-4 col-sm-6 hidden-xs">
                <div class="block-text rel zmin">
                    <a title="" href="#">The Purge: Anarchy</a>
                  <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star-empty"></span><span data-value="3" class="glyphicon glyphicon-star-empty"></span><span data-value="4" class="glyphicon glyphicon-star-empty"></span><span data-value="5" class="glyphicon glyphicon-star-empty"></span>  </span></div>
                    <p>мне муж подарил GSM LG D-856.AKAZKG THX-AD-5.5-13-4 G3 DS Gold на нашу годовщину. пользуюсь с удовольствием. алтел очень хорошо поддерживает. и батарея не плохая. всем советую купить этот телефон. не пожалеете.  </p>
                      <ins class="ab zmin sprite sprite-i-triangle block"></ins>
                    </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                    <a title="" href="#">Ella Mentree</a>
                <i>United States</i>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 hidden-sm hidden-xs">
              <div class="block-text rel zmin">
                <a title="" href="#">Planes: Fire & Rescue</a>
                <div class="mark">My rating: <span class="rating-input"><span data-value="0" class="glyphicon glyphicon-star"></span><span data-value="1" class="glyphicon glyphicon-star"></span><span data-value="2" class="glyphicon glyphicon-star"></span><span data-value="3" class="glyphicon glyphicon-star"></span><span data-value="4" class="glyphicon glyphicon-star"></span><span data-value="5" class="glyphicon glyphicon-star"></span>  </span></div>
                  <p>купил телефон хороший всё идёт не лагает советую купить </p>
                <ins class="ab zmin sprite sprite-i-triangle block"></ins>
              </div>
              <div class="person-text rel">
                <img src="images/5.png"/>
                <a title="" href="#">Rannynm</a>
                <i>Indonesia</i>
              </div>
            </div>
                    </div>                    
                </div>
                <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>
</div></div>


           
            </div></div>
       
        </div>
      </div>
       <hr>
    <div class="row">            

      <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li><p class="vvv">8(701)153-92-08</p></li>
                    <li><p class="vvv">8(711)306-11-84</p></li>
                  
                    <li><p>г. Алматы ул.Жибек жолы 115</p></li>
                    <li class="kot"><a href="#"><p class="u">ho4u.kz</p></a></li>
                </ul>
            </div>

            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li><a href="#">О компании</a></li>
                    <li><a href="#">Новости</a></li>
                    <li><a href="#">Акции</a></li>
                    <li><a href="#">Контакты</a></li>
                                    </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li><a href="#">Оплата</a></li>
                    <li><a href="#">Доставка</a></li>
                    <li><a href="#">Гарантия</a></li>
                    <li><a href="#">Помощь покупателю</a></li>
                </ul>
            </div>
            <div class="col-xs-3">
                <ul class="list-unstyled">
                    <li><a href="#">Возврат товара</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Получить скидку</a></li>
                    <li><a href="#">Услуги сервисного центра</a></li>
                </ul>
            </div>
    </div>
    <hr>
    <div class="row">
            <div class="col-xs-8">
                <ul class="list-unstyled list-inline pull-left">
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-xs-4">
                <p class="text-muted pull-right">© 2015 Company Name. All rights reserved</p>
            </div>
        </div>
</div>
  
















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>