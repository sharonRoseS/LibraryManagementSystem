<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
   <body>
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
     <?php
        // put your code here
        session_start();
        if($_SESSION["username"]){?>
        <h3 class="H2">
         <?php echo "Welcome". $_SESSION["username"];?> </h2>
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
                       
					   if($result==1)
                        {
                         echo '<script>
                         alert("Reservation Succesful");
                         window.location.href="home.php";
                         </script>';
                            
                        }  
                            else {
                                echo '<script>
                                alert("Reservation failed/ book not found");
                                window.location.href="home.php";
                                </script>';
                            }
                            
                        
                      
	      }
		  
		 
?>

		
	  
		
	    </body>
		</html>
		
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>