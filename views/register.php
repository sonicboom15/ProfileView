<html>
   <head>
      <title>Profile Login</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
         rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
         integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <link href="resources/css/style.css" rel="stylesheet" link type="text/css">
   </head>
   <body>
      <div class="container">
         <div class="h-100 row align-items-center">
            <div class="col-4 mx-auto login-box">
                <form>
               <div class="form-group">
                  <input type="text" class="form-control" id="username" placeholder="Username" required autofocus>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="pass" placeholder="Password" required>
               </div>
               <div class="form-group">
                  <input type="password" class="form-control" id="pass" placeholder="Confirm Password" required>
               </div>
               <div class="form-group">
                  <input type="email" class="form-control" id="pass" placeholder="Email Address" required>
               </div>
               <div class="form-group">
                  <input type="number" class="form-control" id="pass" placeholder="Contact Number" required maxlength="10">
               </div>
               <div class="form-group">
                  <input class="form-control" id="datepicker" placeholder="Date of Birth" required>
               </div>
               <div class="form-group">
                <input type="button" class="btn btn-danger btn-block" onclick="window.location.href = 'https://www.w3docs.com';" value="Register"/>
               </div>
               <div class="form-group">
                  <div class="col mx-auto">
                     <p><a href="index.html">Back to Login</a></p>
                  </div>
               </div>
            </form>
            </div>
         </div>
      </div>
      <script src="resources/js/scripts.js"></script>
   </body>
</html>