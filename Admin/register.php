<?php
include '../User/db_config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HuTbAzAR | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Admin/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../Admin/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>Registration</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new admin</p></a>

      <form  method="post" action="">
          
          
          <?php
                if (isset($_POST['submit'])) {
                    $fullname= $_POST['full_name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $rpassword = $_POST['retype_password'];

                    if ($password == $rpassword) {

                        $insert = mysql_query("INSERT INTO admin(id,fname,email,password,re_password) VALUES('','$fullname','$email','$password','$rpassword')");
                        if ($insert) {
                            echo "Your Registration is successfully.";
                        } else {
                            echo "Sorry , Registration is successfully.";
                        }
                    }
                    else {
                    echo 'Sorry , Passwoard Is Not Match';
                }
                } 
                ?>
          
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" name="full_name">
          <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <span class="fa fa-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="retype_password">
          <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

    <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../Admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../Admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>