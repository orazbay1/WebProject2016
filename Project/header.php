<?php 
session_start();
include 'connection.php';
include 'functions.php';
$cat='smart';
if (isset($_GET['cat'])) {
  $cat=$_GET['cat'];
}
$name="";
$surname="";
$bill="";
if (isset($_SESSION['id'])) {
   $id=$_SESSION['id'];
   $res=mysql_query("SELECT `name`, `surname`,`bill` FROM `users` WHERE id='$id'");
   $arr=mysql_fetch_array($res);
   $name=$arr['name'];
   $surname=$arr['surname'];
   $bill=$arr['bill'];
   if($bill==0) $bill="";
   else $bill=$bill."$";
}

 ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Хочу</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .aaa{
      margin-top: -22px;
      font-size: 35px;
    }
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">

        <div class="navbar-header vis">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
             <span class="sr-only">open navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>

          </button>
          <a class="navbar-brand aaa" href="project.php">Х<span class="fa-stack fa-1x">
            <i class="fa fa-circle-thin fa-stack-2x"></i>
            <i class="glyphicon glyphicon-phone fa-stack-1x"></i>
          </span>чу
        </a>

      </div>  
        <div class="collapse navbar-collapse" id="responsive-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Сотовые телефоны <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="project.php?cat=mobile">Мобильные телефоны</a></li> 
                <li><a href="project.php?cat=smart">Смартфоны</a></li> 
                </ul>
              </li>
                <li><a href="project.php?cat=tablet">Планшеты</a></li>
                <li><a href="project.php?cat=gadget">Гаджеты</a></li>
                <li><a href="project.php?cat=accessory">Аксессуары для телефонов</a></li>
            <?php 
            if(!isset($_SESSION['id'])){
             ?>
            <li id="login" class="dropdown x"><a  href="#" class="dropdpwn-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Личный кабинет</a>
            <ul  class="dropdown-menu">
                <li data-toggle="modal" data-target="#modal1"><a href="#">Войти</a></li> 
                <li data-toggle="modal" data-target="#modal2"><a href="#">Зарегестрироваться</a></li> 
            </ul>
              </li>
            </li>
            
            <?php 
              }else{
                ?>
                <li style="color: white;margin-top: 10px;margin-left: 50px;"><h4><?=$name?> <?=$surname?> <?=$bill?></h4></li>
                 <?php 
                  if (isset($_SESSION['id']) && $_SESSION['id']==1) {
                   echo ' <li style="text-decoration: underline;margin-top:5px;"><a href="add_form.php">Добавить товар</a></li>';
                  }
                  if(isset($_SESSION['id'])) echo "<li style='text-decoration: underline;margin-top:5px;'><a href='lkzak.php'>Корзина</a></li>
                                                  <li style='text-decoration: underline;margin-top:5px;'><a href='out.php'>Выйти</a></li>";

                 ?>
                <?php
              }
             ?>
           </ul> 
        </div>
      

  </div>
</div>

    <!-- VKLADKI
      <div class="container">
        <div class="row">
          <div class="col-md-6"><div class="tabs">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#1" data-toggle="tab">Vkladka 1</a> </li>
              <li><a href="#2" data-toggle="tab">Vkladka 1</a> </li>
            <li><a href="#3" data-toggle="tab">Vkladka 1</a> </li></ul>
              <div class="tab-content"> 
              <div class="tab-pane active fade in" id="1"><p>Ididididididi</p></div> 
              <div class="tab-pane fade" id="2"><p>Ididididididisasasasaasa</p></div>
              <div class="tab-pane fade" id="3"><p>Ididididididieqwwqeqewqewq</p></div>


            </div>
            </div></div>
            
           <div class="col-md-6"></div>
        </div>
      </div> -->
      <div class="modal fade" id="modal1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">
                <i class="fa fa-close"></i>
              </button>
              <h4 class="modal-title">Заполните логин и пароль</h4>
             
            </div>
            <div class="modal-body">
             <!--  <form action="" class=navbar-form>
                <div class="form-group">
                  <input type="text" placeholder="Login" value="">
                  <input type="password" placeholder="password" value="">
                  <button class="btn btn-success" type="button" data-dismiss="modal">Войти</button>
                </div>
              </form> -->
<form role="form" >
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="email" class="form-control" id="email" >
  </div>
  <div class="form-group">
    <label for="pwd">Пароль:</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox">Запомнить меня</label>
  </div>
  <button type="submit" id="submit" class="btn btn-default">Войти</button>
  <p id="error"></p>
</form>


<script>
$("#submit").click(function(){
  var email=$("#email").val();
  var password=$("#password").val();
  $.ajax({
    type:"post",
    url:"check_login.php",
    data:{"email":email,"password":password},
    cache:false,
    success: function(response){
      if (response=="") {
       $(location).attr("href","project.php");
      }
      else $("#error").html(response);
    }
  });
  return false;
});

</script>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-dismiss="modal">Отмена</button>
            </div>
          </div>
        </div>  
      </div>
      
      <div class="modal fade" id="modal2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" type="button" data-dismiss="modal">
                <i class="fa fa-close"></i>
              </button>
              <h4 class="modal-title">Заполните логин и пароль</h4>
             
            </div>
            <div class="modal-body">
             <!--  <form action="" class=navbar-form>
                <div class="form-group">
                  <input type="text" placeholder="Login" value="">
                  <input type="password" placeholder="password" value="">
                  <button class="btn btn-success" type="button" data-dismiss="modal">Войти</button>
                </div>
              </form> -->
<form role="form" name="form">
  <div class="form-group">
    <label for="email">Имя:</label>
    <input required="required" type="text" name="name" class="form-control" id="reg_name">
  </div>
  <div class="form-group">
    <label for="email">Фамилия:</label>
    <input required="required" type="text" name="surname" class="form-control" id="reg_surname">
  </div>
  <div class="form-group">
    <label for="email">Номер телефона:</label>
    <input required="required" type="text" name="tel" class="form-control" id="reg_tel">
  </div>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input required="required" type="text" name="email" class="form-control" id="reg_email">
  </div>
  <div class="form-group">
    <label for="pwd">Придумайте пароль:</label>
    <input required="required" type="password" name="password" class="form-control" id="reg_password">
  </div>
  <div class="form-group">
    <label for="pwd">Подтвердите пароль:</label>
    <input required="required" type="password"  class="form-control" id="reg_password2">
    <p id="err"></p>
  </div>
  <div class="checkbox">
    <label><input type="checkbox">Запомнить меня</label>
  </div>
  <button  type="submit" id="reg_submit" class="btn btn-default">Зарегестрироваться</button>
</form>
<p id="reg_error" style="color: red"></p>

<script>
  $("#reg_password2").blur(function(){
      if ($(this).val()==$("#reg_password").val()) {
         $("#err").text("Пароли  совпадают!").css({color:"green"});
        
      }else{
        $("#err").text("Пароли не совпадают!").css({color:"red"});
        
      }
  });

  $("#reg_submit").click(function(){
  var email=$("#reg_email").val();
  var name=$("#reg_name").val();
  var surname=$("#reg_surname").val();
  var password=$("#reg_password").val();
  var password2=$("#reg_password2").val();
  var tel=$("#reg_tel").val();
  $.ajax({
    type:"post",
    url:"save_user.php",
    data:{"email":email,"password":password,"password2":password2,"tel":tel,"name":name,"surname":surname},
    cache:false,
    success: function(response){
      if (response=="") {
        $("#login").remove();
        alert("Вы успешно зарегестрированы");
        $(location).attr("href","project.php");
      }
      else $("#reg_error").html(response);
    }
  });
  return false;
});
</script>
            </div>
            <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-dismiss="modal">Отмена</button>
            </div>
          </div>
        </div>  
      </div>
    </div>
</div>