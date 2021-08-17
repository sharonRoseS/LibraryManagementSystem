<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
   <body>
    <style>
    tbody{
        border-bottom: #dddddd;
        background-color:#f3f3f3;
        color:#222;
    }
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
        if($_SESSION["username"]){ ?>
        <h3 class="H2">
        <?php
        echo "Welcome " . $_SESSION["username"]; 
        }
        ?></h3>
		
		<div class="card">
		<div class="card-body">
		
		
		<?php 
		include ('connectioString.php');
                    
                    $sql="select * from books";                    
                    $result=mysqli_query($con,$sql);
					
					?>
		<nav class="navbar navbar-inverse " role="navigation">
           <div>
            <div class="container-fluid" >
            <div >
        <ul style="display:flex;">
         <li><form class="navbar-form" role="form" id="templatemo-preferences-form" name="Search" action="search.php" method="post">
            <div class="center form-group">
                <input  type="text" id="search" placeholder="Enter the title" name="searching" required>
            <button class="glyphicon glyphicon-search" type="submit" class="btn btn-danger" name="search" value="Search" >Search</button>
             </div>
        </form>
        </li>
		<li>
             <form role="form" id="templatemo-preferences-form" name="reservation" action="reservedBooks.php" method="post">
            <div class="center ">
           
            <button style="margin:5px;" type="submit" class="btn btn-success btn-sm resButton " name="Reserved" value="Reserve" >Reserved books</button>
             </div>
        </li>
        </form> 
        </ul>
        </div>
        </div>
        </div>
        </nav>
		<h3 style="text-align:center">List of Available Books</h3>
		<form style="background-color:#222; color:white;" >
		<table class="table table-dark">
         <thead style="background-color:#009879;">
             <tr style="margin-bottom:0px;">
             <th scope="col">Book_Id</th>
             <th scope="col">Title</th>
             <th scope="col">Author</th>
             <th scope="col">Availability</th>
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
			<td> <?php echo $row['available'] ?> </td>
			
            </tr>
          </tbody>
		  
		  <?php

                }
               }
                   else{
                         echo "<script>alert('No books found')</script>";
                           }
		
		?>
</table>
		
		
		</div>
		</div>

<!-- end of displaying the available books -->		



		
		
            
      
       <br><h5 style="display:inline;">Click here to </h5><button class="btn btn-primary"><a href="logout.php" title="logout" style="color:white">Logout</a></button></br>		
        </form>
        </form>
		
</body>
</html>
<?php include('footer.php');
?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>