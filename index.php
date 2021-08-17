<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style>
    .span1{
      color:red;
      font-weight:bolder;
    }
    .span2{
      color:blue;
      font-weight:900;
     
    }
    *{
      box-sizing:border-boxing;
      margin-left:0px;
    }
    </style>
</head>
<body style="overflow:hidden;margin-left:0px;padding-left:0px;border-left:0px">
  <nav class="navbar navbar-inverse" style="color:#222;margin-bottom:0px;margin-left:0px;border-radius:0px;">
	<div>
        <h1 class="navbar-text" style="color:white">Happy Learning Library</h1>
<div class="navbar-right">

<button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal" data-target="#login">
  Sign In
</button>
<button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal" data-target="#register">
  Sign Up
</button>
<button type="button" class="btn btn btn-primary btn-lg" data-toggle="modal" data-target="#admin">
  Admin Login
</button>
       
    </nav>
    
        
<!-- Modal for login -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div  style="background:#00C5BE;"class="modal-content">
      <div class="modal-header">
        <h3 " class="modal-title" id="exampleModalLongTitle">Sign In</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
	  <form style="background:#00C5BE;" class="form-example" action="login.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="color:#222;" class="form-group">
                    <label for="username">Username</label>
                    <input required type="text" class="form-control username"  placeholder="Enter the Username" name="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input required type="password" class="form-control password"  placeholder="Enter the Password" name="Password">
                </div>
				
                <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#222; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Sign-In</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<!-- Modal for register-->
<div  class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div style="background-color:#00C5BE; opacity:1; color:black;border-left:0px" " class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle" >Sign Up</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form  class="form-example" action="register.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="background:lightgray; color:#222;" class="form-group">
                    <label  for="username">Username</label>
                    <input type="text" class="form-control username"  placeholder="Enter the Username" name="Username">
                </div>
				<div style="background:lightgray; color:#222;" class="form-group">
                    <label for="studentusn">Student USN</label>
                    <input type="text" class="form-control studentusnt"  placeholder="Enter student usn" name="Student_USN">
                </div>
                <div style="background:lightgray; color:#222;" class="form-group">
                    <label for="password">Set Password</label>
                    <input type="password" class="form-control password"  placeholder="Enter the Password" name="Password">
                </div>
				<div style="background:lightgray; color:#222;" class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control email"  placeholder="Enter the valid Email" name="Email">
                </div>
				<div style="background:lightgray; color:#222;" class="form-group">
                    <label for="tel">Contact</label>
					
                    <input type="tel" class="form-control contact"  placeholder="Enter the Contact Number" name="Contact">
                </div>
				
                <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#222; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="insert" >Register</button>
      </div>
	  </form>
    </div>
  </div>
</div>


<!-- Modal for admin login -->
<div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div  style="background:#00C5BE;"class="modal-content">
      <div class="modal-header">
        <h3 " class="modal-title" id="exampleModalLongTitle">Welcome Admin</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
	  <form style="background:#00C5BE;" class="form-example" action="admin.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="color:#222;" class="form-group">
                    <label for="username">Admin</label>
                    <input required type="text" class="form-control username"  placeholder="AdminName" name="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input required type="password" class="form-control password"  placeholder="AdminPassword" name="Password">
                </div>
				
                <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#222; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="admin">Sign-In</button>
      </div>
	  </form>
    </div>
  </div>
</div>

<div style="margin-top:0px;padding-top:0px;margin-left:0px;background-image:url(images/literature.jpg);background-size:100%;overflow:hidden;width:100%;background-repeat:no-repeat";>

<blockquote  class="blockquote" style="border-left:0px">
  <footer style="padding-left:0px; padding-top:200px; color:white" class="blackquote-footer">
    <h1 style="display:inline; font-weight:700;font-family:Comic Sans MS;transition:0.5s;text-shadow:3px 3px red;">Libraries always remaind me that <br/> there are good things in this world</h1><br/>
    <h3 style="color:yellow; font-weight:bold;padding-left:35%"><span class="span1">L</span>auren <span class="span1">W</span>ard</h3>
  </footer>    
  <?php include('footer.php');?>
  </div>
    </body>
</html>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
