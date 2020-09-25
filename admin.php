
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AdminPage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <?php include_once('includes/nav.php'); ?>
    <section class="landingPage" id="landingPage">
      <div class="landingContainer">
        <div class="landingContent">
          <h3>Welcome To the Admin Panel</h3>
          <p>Here You Can Manage the User Response of the current survey Happening.</p>
          <button class="btn" style="background-color:#00BFA6;" onclick="window.location.href='#surveyPage'">Customer Response</button>
        </div>

        <div class="landingImg">
          <img src="img/b.svg">
        </div>
      </div>
    </section>

    <section class="customerResponse" id="customerResponse">
      <h3>Customer Response</h3>
      <?php
        include 'dB.php';
        getuserResponse();
              ?>


    </section>

    <section class="changePassword" id="updatePassword">
      <div class="passwordContainer">
        <h3>Change Password</h3>
        <form action="admin.php" method="post">
          <p>Old Password</p>
          <input type="password" name="oldPassword">
          <p>New Password</p>
          <input type="password" name="newPassword">
          <p>Repeat Password</p>
          <input type="password" name="repeatPassword"><br>
          <button type="submit" name="updatePassword" class="btn" style="width:350px;margin-left:0px; margin-top:40px;">Update Password</button>


        </form>

      </div>
    </section>
  </body>
</html>
