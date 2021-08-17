
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
    margin:0px
}
</style>
</head>
   <body>
     <?php
        // put your code here
        session_start();
        if($_SESSION["username"]){
        ?> <h3 class="H2">
       <?php echo "Welcome ".$_SESSION["username"]; ?></h3>
      <?php  
      }

        
        ?>
		
		<div class="card">
		<div class="card-body">
		
		
		<?php 
		//put your code here
		
		if (isset($_POST['search'])) {
        $name = $_POST['searching']; 
        include ('connectioString.php');    
		    $sql ="select * from books where title LIKE '%$name%' and available='yes'  ";                     
        $result=mysqli_query($con,$sql);
					
					?>
		
		<table style="margin:0px" class="table table-dark">
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
        <div class="navbar navbar-inverse" style="height:5px">
		   <form role="form" id="templatemo-preferences-form" name="reservation" action="reserve.php" method="post">
            <div style="display:flex;padding-bottom:5px; margin:2px;" class="center">
            <input type="text" id="reserve" placeholder="Enter Book ID" name="bookid" required><br/>
            <br/>
            <button class="btn btn-success btn-sm" type="submit"  name="Reserve"  value="Reserve" >Reserve</button>
             </div>
             </div>
        </form> 
                            </div>
		  <?php

                }
               }
                   else{
                         echo "<script>
                         var nobooks=' No Books Found';
                         alert(nobooks);
                         window.location.href='home.php';
                          </script>";  }
                           
			  }
       
		?>
</table>
		
		
		</div>
		</div>
   
         
		
		
<form>
            
       	<br>Click here to <button class="btn btn-sm btn-primary"> <a href="home.php" title="search" style="color:white">Search</a></button></br>
       <br>Click here to <button class="btn btn-sm btn-primary"> <a href="logout.php" title="logout" style="color:white">Logout</a></button></br>		
        </form>
   
   </body>
 </html>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>