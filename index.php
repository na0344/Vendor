<!DOCTYPE html>
<html lang="en">
<?php  include('config.php');?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">


</head>
  <?php


                
                if(isset($_POST['btn'])){
              
                
          if(empty($_POST["Email"] )|| empty($_POST["Password"])){
            
            $err="<p class='text-danger'>Fill the Required Fields</p>";   
              }
              else{
                 $Email = $_POST['Email'];
                $Password  =$_POST['Password'];
        
              
              $query="select * from vendor where email='$Email' and password='$Password'";
    
              $sql=mysqli_query($conn,$query);
              
              if(mysqli_num_rows($sql) > 0){          
                $row=mysqli_fetch_assoc($sql);
            $_SESSION['vendor']=$row['bakeyname'];
            $_SESSION['vid']=$row['vid'];
                echo "<script> window.location='dashboard.php'</script>";
              
              }
              
              else{
                $err2="<p class='text-danger'>Invalid Username or Password</p>";    
              }
              }
                }
              
              
              ?>
                            
                            
                            
                            
                            
                            
                            
                            
                                <form role="form" action="" method="post">
                                       <br />
                                       <?php
                     if(isset($err)){
                       echo "$err";
                     }
                     if(isset($err2)){
                       echo "$err2";
                     }
                     
                     ?>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
              <input type="submit" name="btn" class="btn btn-primary " value="Login Here">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
