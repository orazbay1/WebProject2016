<?php 
include 'header.php';
?>

<div class="container">
    <div class="row ">
      <h2 class="center">Моя корзина</h2>
      <div class="container border">
          <?php
            $bill=show_box($id);
           ?>
           <div class="text-center">
                <h2>Сумма заказа <span style="font-weight: bold;color: red;"><?=$bill?>$</span></h2>
            </div>
        
      </div>
    </div>
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