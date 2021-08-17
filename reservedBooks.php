<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <style>
    .H2{
    text-align:right;
    display:block;
    color:black;
    background:lavender;
    width:100%;
    margin:0px;
}
</style>
</head>

<body>

<?php
        // put your code here
        session_start();
        if($_SESSION["username"]){?>
        <h3 class="H2"><?php
        echo "welcome ". $_SESSION["username"]; ?>
        </h3>
        <?php
        }

        
        ?>
<!-- displaying the reserved books -->

		
		<?php 
		//put your code here
		 
		include ('connectioString.php');
                    
                   
		
		if (isset($_POST['Reserved'])) {
            
		 //include ('connectioString.php');
       // $con = mysqli_connect("localhost","root","","library");
        
        //if (mysqli_connect_errno())
                   // {
                   // echo "Failed to connect to MySQL: " . mysqli_connect_error();
                   // }
                    
                    $sql ="select * from books where available='no'  ";                     
                    $result=mysqli_query($con,$sql);
					
					?>
		<h2>Lists Of Reserved Books</h2>
		<table class="table table-dark">
		<h1 style="text-align:center; background:#222; margin-top:0px;margin-bottom:20px; color:white;">Reserved Books</h1>
         <thead style="background-color:#009879;">
             <tr>
             <th scope="col">Book_Id</th>
             <th scope="col">Title</th>
             <th scope="col">Author</th>
           
             </tr>
         </thead>
		 
		       <?php
                    if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
								
								?>
		 
		 
         <tbody>
            <tr>
            
            <td> <?php echo $row['book_id'] ?> </td>
            <td> <?php echo $row['title'] ?> </td>
            <td> <?php echo $row['author'] ?> </td>
			
			
            </tr>
          </tbody>
		  
		  <?php

                }
               }
                   else{
                         echo "<script>
                         alert('No books found');
                         window.location.href='home.php'</script>";
						 
                           }
			  }
		?>
</table>

<form>
            
       <br>Click here to <button class="btn btn-sm btn-primary"> <a href="home.php" title="search" style="color:white">Search</a></button></br>
       <br>Click here to <button class="btn btn-sm btn-primary"> <a href="logout.php" title="logout" style="color:white">Logout</a></button></br>		
        </form>
</body>
</html>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>