<?php 
include 'header.php';

 ?>
 <div class="container bbb">
  <div id="carousel" class="carousel slide aaa">
      <ol class="carousel-indicators">
        <li class="active data" data-target="#carousel" data-slide-to="0"></li>
        <li  data-target="#carousel" data-slide-to="1"></li>
        <li  data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <a href="#"><img src="images/11.jpg" width="1920" height="800"></a>
          <div class="carousel-caption">
            <!-- <h3>First slde</h3>
            <p>Opisanie</p> -->
          </div>
        </div>
        <div class="item">
         <a href="#"><img src="images/7.jpg" width="1920" height="800"></a>
          <div class="carousel-caption">
           <!--  <h3>Second slde</h3>
            <p>Opisanie</p> -->
          </div></div>
        <div class="item">
         <a href="#"><img src="images/7.jpg" width="1920" height="800"></a>
          <div class="carousel-caption">
           <!--  <h3>Third slde</h3>
            <p>Opisanie</p> -->
          </div></div>
      </div>
      <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#carousel"class="right carousel-control" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>

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
        <li>Смартфоны</li>
      </ol>

    </div>
    <!-- <div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a href="#">1 <span class="badge">18</span></a></li>
    <li ><a href="#">2<span class="badge">18</span></a></li>
    <li ><a href="#">3<span class="badge">18</span></a></li>
    <li ><a href="#">4<span class="badge">18</span></a></li>
    
  </ul></div> -->
  

 </div>

<?php 
  show_products($cat);
 ?>


</div>



<div class="container">
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
                    <li><a href="#">Site status</a></li>
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