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
    <form action="login_server.php" method="post" enctype="multipart/form-data">
    <div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
      <h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="checkbox-inline"><input type="checkbox"> Remember me</label>
            
        </div> 
        <input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">
        <?php if (isset($_GET['reg'])) {?>
        <p style="color: green;font-size: 170%;text-align: center;margin-top: 5px"><?php echo $_GET['reg']; ?> </p>
        <?php } ?>
        <?php if (isset($_GET['Invalid'])) {?>
        <p style="color: red;font-size: 170%;text-align: center;margin-top: 5px"><?php echo $_GET['Invalid']; ?> </p>
        <?php } ?>               
    </form>     
    <div class="text-center small">Don't have an account? <a href="signup.php">Sign up</a></div>
</div>   
  </div>
  
</body>
</html>