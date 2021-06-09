<?php
include('connection.php');
?>
<html>

<head>
  <!-- Meta tags -->
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- Bootstrap css -->

  <link rel="stylesheet" href="css/loginstyle.css">
  <link href="css/bootstrap.css" rel="stylesheet">

  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.default.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.js"></script>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
  <!-- Header -->
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"></span>CHAMPARN ORGANIC</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="about.html"><span class="glyphicon glyphicon-user"></span> About</a></li>

        

          <li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login/Sign Up</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--Header end-->


    
    
    
    
    
    
    
    
    <!--tab-->
        <br><br><br><br><br><br>    
	<div class="container">
        <ul class=" nav nav-pills " >
            <li class="nav-link active"> <a href="#signin" data-toggle="pill"> login</a> </li>
            <li class="nav-link"> <a href="#signup" data-toggle="pill"> signup</a> </li>
            
        
        </ul>
        
        
        
        
<!--        <hr style="margin-top: 0px; ">-->
        
        
        <div class="tab-content">
            
            <div id="signin" class="tab-pane fade in active">    
                <div class="w3l-services">
                    
    
                    <div class="container" id="login">

                            <form class=" form-area mx-auto ">
                                <div class="text-center">
                                <h2>Login</h2>
                               </div>
                                <hr>
                                
                              <div class="form-group">
                                <label for="email-id">E-mail ID</label>
                                <input type="email" class="form-control" placeholder="Enter your email address">
                              </div>
                              <div class="form-group">
                                <label for="InputPassword">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Enter your password">
                              </div>

                              <div class="form-group form-check">
                                <a href="reset.html" style="color:white">Forgot password</a>
                              </div>
                              <div class="col text-center">
                                <button type="submit" class=" customBtn  btn-lg" aria-pressed="true" style="color:black">Login</button><br><br>
<!--
                                <div class="panel-footer" style=" background-color: black;">
                                  <p style="font-size: 20px;  ">Don't have an account? <a href="login.html#signup">Register</a></p>
                                </div>
-->
                                <!-- <a href="signup.html"><button class="customBtn btn-lg" style="color:black">Sign Up</button></a>  -->

                              </div>


                            </form>
                        </div>

                          
                    </div>
            </div>
          
            
            <div id="signup" class="tab-pane fade"><div class="values">
		<div class="container"> 
			
			
             <div class="container " id="register" >
                  <form class="  form-area mx-auto " method="POST"  >
                       <div class="form-group mt-5 p-3 text-center">
                        <h2>Sign up with us👍</h2>
                       </div>
                      <hr>

                      <div class="form-group">
                        <div  class="row">
                          <div class="col-lg-6">
                            <!-- <label for="InputPassword">First Name</label> -->
                            <input type="text" class="form-control"  name = "First_name" placeholder="First Name" id="InputPassword">
                          </div>
                          <div class="col-lg-6">
                            <!-- <label for="InputPassword">Last Name</label> -->
                            <input type="text" class="form-control" placeholder="Last Name" name = "Last_name" id="InputPassword">
                          </div>

                        </div>

                      </div>

                      <div class="form-group">
                        <!-- <label for="example-tel-input">E-Mail-ID</label> -->
                        <input type="email" class="form-control" name = "email"  placeholder="Email-ID" id="example-tel-input">

                      </div>

                      <div class="form-group">
                        <!-- <label for="InputPassword">Password</label> -->
                        <input type="password" class="form-control" name = "pass" placeholder="Password" id="InputPassword">
                      </div>

                      <div class="form-group">
                        <!-- <label for="InputPassword">Confirm Password</label> -->
                        <input type="password" class="form-control" name = "respass" placeholder="Confirm Password" id="InputPassword">
                      </div>

                      <div class="form-group">
                        <!-- <label for="example-tel-input">Mobile Number</label> -->
                        <input type="code" class="form-control"  name = "mob_number" placeholder="Mobile Number" id="">
                      </div>

                      <div class="col text-center">
                        <button type="submit" class="btn btn-outline-success btn-lg" aria-pressed="true" style="color:black">Signup</button>
                      </div>

                      <div class="or-container">
                        <div class="line-separator"></div>
                        <div class="or-label">or</div>
                      </div>
                      <br>

                       <div class="row">
                        <div class="col-lg-6 ">
                          <center><a class=" customBtn btn btn-lg btn-google btn-block  btn-outline" style="background-color:white;margin-top: 100px;color:black;margin:auto; " href="#"><img src="https://img.icons8.com/color/16/000000/google-logo.png"> Google
                                signup</a></center></div>

                        <div class="col-lg-6 " >
                          <a class="btn btn-lg btn-social btn-facebook" style="margin-top: 10px;margin:auto;width:100%">
                            <i class="fa fa-facebook fa-fw"></i> Sign in with Facebook</a></div>

                            <br><br>

<!--                      <div class="text-center" style="font-size: 20px; margin-top: 30px; text-decoration-color: black; background-color: black; padding: 10px;"><p>Already have an account? <a href="login.html">login</a></p></div> -->
                      </div>


                    </form>
                 <br><br><br><br><br><br><br><br>
                    </div>
            
            
		</div>
	</div>
            </div>
            
        </div>
        
		
	</div>
   
    
        
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 



  <!--Footer-->
  
  <!--Footer end-->




  <!-- Bootstrap jquery and javasript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="login.js" charset="utf-8"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
 <?php
  $First_name = $_POST['First_name'];
 $Last_name = $_POST['Last_name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $repass = $_POST['repass'];
 $mob_number = $_POST['mob_number'];
 $query= "INSERT INTO register (First_name,Last_name,email,pass,repass,mob_number) VALUES ('$First_name','$Last_name','$email','$pass','$repass','$mob_number')";
 mysqli_query($conn, $query);
?> 


</body>

</html>
