<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       body{
           padding-top: 3rem;
       }
       .container {
           width: 400px;
       }
   </style>
</head>
<body>
<div class="container">
       <?php if(!isset($_SESSION['auth'])):?>
       <h3>Вход</h3>
       <form action="?action=auth" method="post">
           <div class="row">
               <div class="field">
                   <label>Почта: <input type="email" name="email"></label>
               </div>
           </div>
           <div class="row">
               <div class="field">
                   <label>Пароль: <input type="password" name="password"><br></label>
               </div>
           </div>
           <input type="submit" class="btn" value="Login">
       </form>
       <div>
            <a class="btn" href="?controller=users">Список всех пользователей</a>
            <a class="btn" href="?controller=roles">Список всех ролей</a>
       </div>
       <?php else:?>
        <h3>Вы вошли</h3>
        <a class="btn" href="?action=logout">Выход</a>
        <a class="btn" href="?controller=users">Список всех пользователей</a>
        <a class="btn" href="?controller=roles">Список всех ролей</a>
        <a class="btn" href="?action=contacts">Отправить электронную почту</a>
        <?php endif;?>
</div>
</body>
</html>
