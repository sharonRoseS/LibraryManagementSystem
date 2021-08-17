<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <style>
      .H2{
    text-align:right;
    display:block;
    color:black;
    background:lavender;
    width:100%;
    margin:0px
}
</style>
</head>
   <body>
   <?php
        // put your code here
        session_start();
        if($_SESSION["username"]){ ?>
        <h3 class="H2">
        <?php
        echo "Welcome " . $_SESSION["username"]; 
        ?></h3>
        <?php 
        }
        
        ?>
		
		<div class="card">
		<div class="card-body">
		
		
		<?php 
	
	    if (isset($_POST['Reserve'])) {
        $bookid = $_POST['bookid'];     
        $name1= $_SESSION["username"];
        
        $con = mysqli_connect("localhost","root","","library");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
		
		
		    $sql="UPDATE books SET available='no' Where book_id = '$bookid'  ";
            $result=mysqli_query($con,$sql);
            mysqli_close($con);
                       
					   if($result==1)
                        {
                        $alert="<script>alert('Reservation Succesful');</script>";
                         echo $alert;
                         //header('location:http://' .$_SERVER['HTTP_HOST']. '/home.php');
                         echo '<script>window.location.href="home.php"</script>';
                          }  
                            else {
                               $alert1="<script>alert('Reservation failed/ book not found')</script>";
                                echo $alert1;
                                echo '<script>window.location.href="home.php"</script>';
                            }
                            
                        
                      
	      }
		  
		 
?>

<form>
            
       <br><h5 style="display:inline">Click here to</h5> <button class="btn btn-primary"><a href="home.php" title="search"><span style="color:white">Search</span></a></button></br>  
       <br><h5 style="display:inline">Click here to</h5> <button class="btn btn-primary"><a href="logout.php" title="logout"><span style="color:white">Logout</span></a></button></br>		
        </form>
		
	    </body>
		</html>
		
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>