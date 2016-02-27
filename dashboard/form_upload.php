<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
?>
<?php if(isset($_SESSION['username'])): ?>
<?php include 'includes/header.php';?>
            <!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Upload </h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Dropzone multiple file uploader</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <p>Drag multiple files to the box below for multi upload or click to select files. This is for demonstration purposes only, the files are not uploaded to any server.</p>
                                    <form action="choices/form_upload.html" class="dropzone" style="border: 1px solid #e5e5e5; height: 300px; "></form>

                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer content -->
                <footer>
                    <div class="">
                        <p class="pull-right">Gentelella Alela! a Bootstrap 3 template by <a>Kimlabs</a>. |
                            <span class="lead"> <i class="fa fa-paw"></i> Gentelella Alela!</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->

            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- dropzone -->
    <script src="js/dropzone/dropzone.js"></script>

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
