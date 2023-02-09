<?php
  session_start();
  if(!empty($_SESSION['username'])){
  header("Location:dashboard");
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>SPP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="assets/image/logo.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('assets/image/upacara.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>


<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
  <img class="w3-circle" src="assets/image/logospp.png">
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('login').style.display='block'" class="w3-button w3-black">Login</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">monday - friday 10-23 | saturday 14-02</p>
    <p class="w3-large">42 village St, New York</p>
    <p>powered by dhini<a href="assets/image/logo.ico" target="_blank"> </a></p>
  </div>
</div>

<!-- login Modal -->
<div id="login" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Login</h1>
    </div>
    <div class="w3-container">
      <p>Login untuk masuk ke halaman :</p>
      <form action="proses/proses_login.php" method="POST">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Username" required name="username"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="password"></p>
        <p><button class="w3-button" type="submit">Submit</button></p>
      </form>
    </div>
  </div>
</div>

</body>
</html>