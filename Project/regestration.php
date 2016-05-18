<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Регистрация на Soileseik</title>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/registration_style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<script type="text/javascript" src="js.bootstrap.min.js">
	</script>
	<script type="text/javascript" src="js.npm.js"></script>
	<script type="text/javascript" src="js.bootstrap.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
</head>
<body>
	
    <div class="col-lg-2 col-md-2" id="right">
    </div>
    <div class="col-lg-8 col-md-8">
    	<h1>Регистрация</h1>

    	<div class="text-center">
			<div class="form">
			<form method="post" action="save_user.php">	

				<input class="input" name="login" type="text"  required maxlength="50" size="30px;" 
    					 placeholder="Эл.адрес или номер моб. телефона" spellcheck='true'>
                         
				<input class="input" name="name" type="text" required maxlength="50" size="30px;" 
    					 placeholder="Имя" spellcheck='true'>

    			<input class="input" name="surname" type="text" required maxlength="50" size="30px;" 
    					 placeholder="Фамилия" spellcheck='true'>
    		

     		 	<input class="input" name="password" type="password" required="" maxlength="30" size="30px;"
    					 placeholder="Пароль" >

    			<input class="input" type="password"  maxlength="30" required="" size="30px;"
    					 placeholder="Повторите пароль" >
    					

				
				
				 
				 
				<h2>Cведения</h2>
				 <input class="input" name="univer" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Университет" spellcheck='true'>

    			<input class="input" name="faculty" type="text"  maxlength="50" size="30px;" 
    					 placeholder="Факультет" spellcheck='true'>
    		

     		 	<input class="input" name="spec" type="text"  maxlength="30" size="30px;"
    					 placeholder="Специальность" >

    			<select name="city">
    				<option disabled selected="selected">Выбирите город</option>
    				<option>Алматы</option>
    				<option>Астана</option>
    			</select>

    			<select name="gender">
    				<option disabled selected="selected">Пол</option>
    				<option>Мужской</option>
    				<option>Женский</option>
    			</select>

    			<select name="age">
    				<option disabled selected="selected">Возраст</option>
    				<option>18</option>
    				<option>19</option>
    				<option>20</option>	
    				<option>21</option>
    			</select>

    			

    			<select name="status" >
    				<option disabled="disabled" selected>Статус</option>
    				<option>Влюблен</option>
    				<option>Встречаюсь</option>
    				<option>В активном поиске</option>	
    				<option>Всесложно</option>
    				<option>Помовлен</option>
    				<option>Учусь</option>
    			</select>

    			<textarea class="input" name="about"  id="about"></textarea>


    			<input class="btn"  type="submit" value="Зарегестрироваться"></input>
    	</form>

		</div>
		
	</div>		
    </div>
    
    <div class="col-lg-2 col-md-2" id="left"></div>
    </div>
</div>

</body>
</html>