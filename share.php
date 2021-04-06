  <?php require_once 'db_connection/db_connect.php';
        include 'session.php';
        if(!isset($user_check))
         {
             header("location:login.php?Invalid=Invalid email or password"); // Redirecting To Profile Page
          } ?>
      <?php if ($roww['image']=='') {
        echo '<script> alert ("Please Upload your image First")</script>';
        echo '<script> window.location = "profile.php"</script>';
} ?>

<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
  </head>
 
<body>   
  <div class='body-inside'>
        <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
    <div class="nav-title">
      Welcome <a href="profile.php"><span style="color: red"><?php echo $roww['username']; ?></a></span> 
    </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <div class="nav-links">
       <a href="share.php" target="_blank">Share Profile</a>
      <a href="logout.php" target="_blank">Logout</a> 
    </div>
    <div class="container">
<h2 class="text text-secondary" style="margin-right: 550px">Social Media Accounts</h2>
  <form>
  	<div class="row">
  		<br>
    <div class="col-xs-2"> 
    <img src="assets/images/facebook.png" style="margin-left: 100px">
    </div>
    <br>
    <div class="col-xs-3" >
     <input class="form-control" id="ex3" type="text" placeholder="Facebook Page/ID Link " >   
    </div>
  </div>
  <div class="row">
  		<br>
    <div class="col-xs-2"> 
    <img src="assets/images/facebook.png" style="margin-left: 100px">
    </div>
    <br>
    <div class="col-xs-3" >
     <input class="form-control" id="ex3" type="text" placeholder="Facebook Page/ID Link " >   
    </div>
  </div>
  </form>
</div>
  </div>
</body>
</html>