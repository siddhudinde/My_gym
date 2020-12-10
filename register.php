
<?php ob_start();?>
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form action="" method="POST" class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="U_firstname" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text"  name="U_lastname" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="U_email" required class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="date" name="U_date" class="form-control form-control-user" id="exampleInputdate" placeholder="Date of Birth">
                </div>
                <div class="form-group ">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input  type="password" name="U_password" required class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <!-- <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div> -->
                </div>
              
                    <button type="submit" name="register_btn" class="btn btn-primary btn-user btn-block">
                      Register
                    </button>
                
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="index.php">Already have an account? Login!</a>
              </div>
                 <?php
                    if(isset($_POST['register_btn']))
                    {
                        $firstname =$_POST['U_firstname'];
                        $lastname =$_POST['U_lastname'];
                        $email =$_POST['U_email'];
                        $dob =$_POST['U_date'];
                        $password =$_POST['U_password'];

                        $connection = mysqli_connect('localhost','root','','cdu_gym');
                        if($connection)
                        {
                            $create_query = "INSERT INTO gym(first_name,last_name,user_email,user_dob,user_password) VALUES('$firstname','$lastname','$email','$dob','$password')";

                            $result_create_query = mysqli_query($connection,$create_query);

                            if($result_create_query)
                            {
                                header("Location:index.php");
                            }
                            else
                            {
                                echo "Error in Code";
                            }
                        }
                        else
                        {
                            echo "Error in code";
                        }
                    }
                 ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
