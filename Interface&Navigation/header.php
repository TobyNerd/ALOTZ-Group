<?php
include_once 'core/init.php'
?>

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!-- ^ "imports" a stylesheet from the link, which contains a number of
icons, we reffer to it in the body as 'fa fa-search' -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- ^ the link tag defines the browser tab image, here we use our
zakilicious logo -->
<link rel="icon" href="https://i.imgur.com/0CVNTap.png">

<!-- ^ "imports" the main CSS stylesheet from the local link -->
<link type="text/css" rel="stylesheet" href="style.css"/>

<?php
$user = new User();
if($user->isLoggedIn()) {
?>  
  <nav class="z-depth-0">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"><img src="https://i.imgur.com/0CVNTap.png" height="45px" alt=""></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="logout.php">Sign out</a></li>
    </ul>
  </div>
</nav>
<?php
} else {
?>
<nav class="z-depth-0">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo"><img src="https://i.imgur.com/0CVNTap.png" height="45px" alt=""></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="#">Become a physiotherapist</a></li>
      <li><a href="login.php">Sign in</a></li>
    </ul>
  </div>
</nav>
<?php
}
?>
      
      
      
