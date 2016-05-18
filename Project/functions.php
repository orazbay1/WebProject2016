<?php 
    
    function check_user($email,$password){
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysql_query($query);
	   $row = mysql_fetch_array($result);
	   if ($row['email']==$email) {
		  if ($password!=$row['password']) {
			 echo "Пароль не верен";
        }else{
			 $_SESSION['id'] = $row['id'];
			 echo "";
         }
	   }else{
		  echo "Такого логина не существует";
		
		  }		
	}

	function save_user($arr){
        if (isset($arr['email'])) {
            $email=$arr['email'];
        }
        if (isset($arr['name'])) {
            $name=$arr['name'];
        }
        if (isset($arr['surname'])) {
            $surname=$arr['surname'];
        }
        if (isset($arr['password'])) {
            $password=$arr['password'];
        }
        if (isset($arr['password2'])) {
            $password2=$arr['password2'];
        }
        if (isset($arr['tel'])) {
            $tel=$arr['tel'];
        }
     	if (empty($email) || empty($password)  || empty($name) || empty($surname) || empty($tel) || empty($password2)){
        echo "Введенные данные не верны.Попробуйте еще раз";
        return;
        }
        if ($password2!=$password) {
            echo "Введенные данные не верны.Попробуйте еще раз";
            return;
        }
        $result = mysql_query("SELECT id FROM users WHERE email='$email'");
        $myrow = mysql_fetch_array($result);
        if (!empty($myrow['id'])) {
        echo ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
        return;
        }
    	$result2 = mysql_query("INSERT INTO users (email,password,name,surname,tel) VALUES('$email','$password','$name','$surname','$tel')");
        if ($result2){   
            $result3 = mysql_query("SELECT id FROM users WHERE email='$email'");
            $arr3=mysql_fetch_array($result3);
            $id=$arr3['id'];
            $_SESSION['id']=$id;
            echo "";
        }
     else {
        echo "Ошибка! Вы не зарегистрированы.";
        return;
        }
    }

    function db_result_to_array($result){
        $arr=array();
        while ($row=mysql_fetch_array($result)) {
           $arr[]=$row;
        }
        return $arr;
    }

    function select_all($id){
        $query = "SELECT * FROM product WHERE id=$id";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        return $row;
    }

    function show_products($cat){
        $result = mysql_query("SELECT * FROM `product` WHERE category='$cat'");
        $arr = db_result_to_array($result);
        foreach($arr as $product) {
        ?>
          
            <div class="col-xs-12 col-sm-4 
            -md-3 col-lg-3"> 
              <div class="thumbnail">
               <img src="images/<?=$product['image']?>"  width="400" height="240">
              <div class="caption">
                <a href="telefon.php?id=<?=$product['id']?>"><h3><?=$product['brand']?> <?=$product['model']?></h3></a>
                <p><?=$product['about']?></p>
                <a href="telefon.php?id=<?=$product['id']?>" class="btn btn-success">Подробнее<i class="fa fa-arrow-right"></i></a><br>
                <?php
                    if(isset($_SESSION['id']) && $_SESSION['id']==1){
                ?>
                <a href="update_form.php?id=<?=$product['id']?>">Изменить</a><br>
                <?php 
                    }
                ?>
                <?php
                    if(isset($_SESSION['id']) && $_SESSION['id']==1){
                ?>
                <a href="delete.php?id=<?=$product['id']?>">Удалить</a>
                <?php 
                    }
                ?>
              </div>
            </div>
            </div>
            
        <?php
       }
    }

    function show_box($id){
        $bill=0;
        $res=mysql_query("SELECT `box` FROM `users` WHERE id='$id'");
        $arr=mysql_fetch_array($res);
        $box=unserialize($arr['box']);
        foreach ($box as $key) {
            $res=mysql_query("SELECT * FROM `product` WHERE id='$key'");
            $arr=mysql_fetch_array($res);
            $bill+=$arr['price'];
            ?>
            <div class="container" style="padding: 20px">
                    <img src="images/<?=$arr['image']?>" alt="img" width="100px" height="100px" style="float:left;">
                    <div style="margin-top:-20px;" >
                    <h3><?=$arr['brand']?></h3>
                    <p><?=$arr['model']?></p>
                    <p><?=$arr['price']?>$</p>
                    </div>
            </div>
            <?php
        }
        return $bill;
    }

   


?>