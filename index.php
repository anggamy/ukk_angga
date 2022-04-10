<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>

    <link href="css/bootstrap5.0.1.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="bg-primary">

    

    <div class="container col-md-4 col-md-offset-4 form-login">
    
    

        <div class="form outter-form-login">
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login mb-5">Login </h3>
                <div class="form-group">
                    <input type="text" class="form-control mb-4" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control mb-4" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green container mb-3" value="LOGIN" />
                
                
            </form>
                <button onclick="window.location.href='dashboard.php'" class="btn btn-block btn-primary" id="guest">As Guest</button>
        </div>
    </div>
    <div class="col-sm-4 position-absolute top-0 start-50 translate-middle" style="margin-top: 3rem;">
        <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> -->
        <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap5.0.1.bundle.min.js"></script>
  </body>
</html>