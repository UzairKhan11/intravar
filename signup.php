<html>
  <head>
       <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Social Media</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
  </head>

<body>
    
  <div class='body-inside' style="min-height: 700px">
  <!--  Request me for a signup form or any type of help  -->
<div class="login-form">    
    <form action="signup_server.php" method="post" enctype="multipart/form-data" >
    <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Register Your Account</h4>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
        </div>
        <?php if (isset($_GET['Invalid'])) { ?>
          <p style="color: red"><?php echo $_GET['Invalid']; ?></p>
        <?php } ?>
        <div class="form-group">
            <input type="text" class="form-control" name="contact" placeholder="Phone Number" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div> 
        <div class="form-group">
            <input type="password" class="form-control" name="c_password" placeholder="Confirm Password" required="required">
        </div>
        <input type="submit" name="register" class="btn btn-primary btn-block btn-lg" value="Login">              
    </form>     
    <div class="text-center small">Already Have An Account? <a href="login.php">Sign In</a></div>
</div>   
  </div>
 
  
</body>
</html>