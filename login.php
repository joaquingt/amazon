<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
?>
<?php if(!isset($_SESSION['username'])): ?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="noindex" name="robots">
    <title>Login</title>
        <meta content="width=device-width, initial-scale=1" name="viewport">
    <link id="bootstrap-css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
</head>
<body>
<div class="container">
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="validate.php" role="login">
          <img src="images/amazon-logo.jpg" class="img-responsive" alt="" />
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="" />
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          <div class="pwstrength_viewport_progress"></div>
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <!-- <a href="#">Create account</a> or <a href="#">reset password</a> -->
          </div>
        </form>
        <div class="form-links">
         <a href="#">www.inkjockdash.com</a>
        </div>
      </section>
      </div>
      <div class="col-md-4"></div>
  </div>
</div>
</body>
</html>

<?php else: ?>
  <html lang="en"><head>
      <meta charset="utf-8">
      <meta content="noindex" name="robots">
      <title>Login</title>
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <link id="bootstrap-css" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/login.css">
      <style type="text/css">
      </style>
      <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="js/login.js"></script>
  </head>
  <body>
  <div class="container">
    <div class="row" id="pwd-container">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <section class="login-form">
          <form role="login">
            <img src="images/amazon-logo.jpg" class="img-responsive" alt="" />
            <div>
              <li><a href="logout.php"> Log Out</a>

              <!-- <a href="#">Create account</a> or <a href="#">reset password</a> -->
            </div>
          </form>
          <div class="form-links">
           <a href="#">www.inkjockdash.com</a>
          </div>
        </section>
        </div>

        <div class="col-md-4"></div>


    </div>
  </div>

  </body>
  </html>

<?php endif; ?>
