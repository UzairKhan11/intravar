  <?php require_once 'db_connection/db_connect.php';
        include 'session.php';
        if(!isset($user_check))
         {
             header("location:login.php?Invalid=Invalid email or password"); // Redirecting To Profile Page
          } ?>
  <html>
  <head>

      
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
  <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/profile.css">
  </head>

  <body>
      
    <div class='body-inside' style="min-height: 800px">
    <div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
    <div class="nav-title">
      Welcome <span style="color: red"><?php echo $roww['username']; ?></span> 
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
    </div>
    <form action="profile_server.php" method="POST" enctype="multipart/form-data">
  <div class="container">
      <h1 class="text text-success"> Your Contact 
          <small>Upload Your Image</small>
      </h1>
      
      <div class="avatar-upload">
          <div class="avatar-edit">
              <input type='file' name="image" id="imageUpload" value="<?php echo $roww['image']; ?>" accept=".png, .jpg, .jpeg" />
              <label for="imageUpload"></label>
          </div>
          <div class="avatar-preview">
           <?php if ($roww['image']=='') {?>
              <div id="imagePreview" style="background-image: url(assets/images/user.png);">
           <?php }else{ ?>
               <div id="imagePreview" style="background-image: url('assets/images/<?php echo $roww['image']; ?>');">
            <?php } ?>
              </div>
          </div>
      </div>
      
       
   <h3 style="text-align: center;" class="text text-success">Your DATA</h3>
  <input type="hidden" name="id" value="<?php echo $roww['id'];?>">
  <div class="from-group" style="margin-left: 100px">
        <label>Username:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="username" value="<?php echo $roww['username']; ?>" class="from-control"  required>
      </div>
     <div class="from-group" style="margin-left: 100px">
        <label>Email:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="email" name="email" value="<?php echo $roww['email']; ?>" class="from-control" readonly>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>Phone No:</label>&nbsp&nbsp&nbsp&nbsp&nbsp 
        <input type="text" name="contact" value="<?php echo $roww['contact']; ?>" class="from-control" required>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>Password:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="password" value="<?php echo $roww['password']; ?>" class="from-control" required>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>Massenger ID:</label>
        <input type="text" name="massenger" placeholder="Your Massenger ID" class="from-control" value="<?php echo $roww['massenger'];?>" required>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>weChat ID:</label>&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="wechat" placeholder="Your weChat ID" class="from-control" value="<?php echo $roww['wechat'];?>" required>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>Skype ID:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="skype" placeholder="Your Skype ID" class="from-control" value="<?php echo $roww['skype'];?>" required>
      </div>
      <div class="from-group" style="margin-left: 100px">
        <label>Website:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="website" placeholder="Your Website" class="from-control"value="<?php echo $roww['website'];?>" required>
      </div>  
      <div class="from-group" style="margin-left: 150px">
        <br>
        <input type="submit" name="save" class="btn btn-success" value="Update & SAVE" >
      </div> 
  </div>

     </form>      
    </div>
    
  </body>
  </html>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script >
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              $('#imagePreview').css('background-image', 'url('+e.target.result +')');
              $('#imagePreview').hide();
              $('#imagePreview').fadeIn(650);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $("#imageUpload").change(function() {
      readURL(this);
  });
  </script>