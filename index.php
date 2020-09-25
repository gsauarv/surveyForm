<?php include_once("dB.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Survey</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto+Mono&display=swap" rel="stylesheet">

  </head>
  <body>
    <section class="navSection">
      <div class="navContainer">
        <div class="navLogo">
          <h3>Survey</h3>
        </div>
        <div class="navLinks">
          <nav>
            <ul>
              <li><a href="#landingPage">Home</a></li>
              <li><a href="#aboutPage">About Us</a></li>
              <li><a href="#surveyPage">Take a Survey</a></li>
              <button name="loginBtn" class="loginBtn" onclick="window.location.href='login.php'">Login</button>

            </ul>
          </nav>
        </div>
      </div>
    </section>
    <!-- Main Body Started -->
    <section class="landingPage" id="landingPage">
      <div class="landingContainer">
        <div class="landingContent">
          <h3>Creating the Community Stronger,Help Us Improve Our Company.</h3>
          <p>Hello and Welcome to the Survey, Here you can provide your feedback and suggestion to help us build our Community Stronger Then Ever. Together We Can Make Somthing Beautiful.</p>
          <button class="btn"  onclick="window.location.href='#surveyPage'">Take A Survey</button>
        </div>

        <div class="landingImg">
          <img src="img/a.svg">
        </div>
      </div>
    </section>

    <section class="aboutUs" id="aboutPage">
      <div class="aboutUsContainer">
        <div class="aboutHeading">
          <h3>About Us</h3>
        </div>
        <div class="aboutContent">
          <p>Here In Survey, We are collabrating with you all, to build our Community Stronger and hoping to impact in the betterment in the services and the product of our company.
            <br><br><br>We Are Very Happy to announce that we are taking each and every suggestion and complaint seriously so that it will be for the further improvement of the company and best possible services to customers.
          </p><div>
    </section>

    <section class="surveyPage" id="surveyPage">
          <h3>Take a Survey</h3>
      <div class="surveyFormContainer">
        <form action="index.php" method="post">
          <p>Enter Name</p>
          <br>
          <input type="text" name="fullName">
          <br>
          <p>Enter Email</p>
          <br>
          <input type="text" name="email">

          <br>
          <p>How long have you being using our products?</p>
          <br>
          <input type="number" name="serviceUsage">

          <br><br><br>
          <p>Write Us Something</p>
          <br>
          <textarea name="feedback"></textarea><br>
          <button type="submit" name="submit">Send Us</button>
        </form>
      </div>
    </section>
  </body>
</html>
