<?php include_once("dB.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>loginPage</title>
    <link rel=" stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Mono&display=swap" rel="stylesheet">

  </head>
  <body>
    <section class="loginSection">
      <div class="loginContainer">
        <div class="loginLogo">
          <h3>Survey</h3>
        </div>
        <div class="loginForm">
          <form class="" action="#" method="post">
            <p>UserName</p>
            <input type="text" name="userName">
            <br>
            <p>Password</p>
            <input type="password" name="userPassword"><br>
            <button type="submit" name="login">Login</button>
          </form>

        </div>
      </div>
    </section>
  </body>
</html>
