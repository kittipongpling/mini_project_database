<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover">Sign Up </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://scontent.fnak3-1.fna.fbcdn.net/v/t1.0-9/p960x960/78115973_2726291467391459_4705118152869019648_o.jpg?_nc_cat=111&_nc_ohc=SFRNReinpzMAX92_KPT&_nc_ht=scontent.fnak3-1.fna&_nc_tp=6&oh=e7e6d153523164cfa870b893646d8d08&oe=5EC1449C" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
      <input onclick="window.location.href = './../index.php';" type="button" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="./../index.php">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>