<?php 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: views/home.php");
    exit;
}
?>
<html>
   <head>
      <title>Profile Login</title>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
         rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
         integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <link href="resources/css/style.css" rel="stylesheet" link type="text/css">
      
   </head>
   <body>
      <div class="container">
         <div class="h-100 row align-items-center">
            <div class="col-4 mx-auto login-box">
               <form method="post">
               <div class="form-group">
                  <input type="text" class="form-control" id="username" placeholder="Username" autofocus>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="pass" placeholder="Password">
               </div>
               <div class="form-group">
                <input type="button" id="buttonlogin" class="btn btn-danger btn-block" value="Login"/>
               </div>
               <div id="message" class="alert alert-danger message form-group"></div>
               <div class="form-group">
                  <div class="col mx-auto">
                     <p><a href="register.html">Or Sign up here</a></p>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
      <script src="resources/js/login.js" type="text/javascript"></script>
   </body>
</html>