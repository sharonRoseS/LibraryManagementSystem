
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
   <body style="overflow:hidden;">
    <style>
    tbody{
        border-bottom:1px solid #dddddd;
        
        color:#222;
        margin-top:0px;
    }
    .H2{
    text-align:right;
    display:block;
    color:black;
    background:lavender;
    width:100%;
    margin:0px;
}
.b1{
  justify-content:right;
  align-items:right;
 margin-right:3px
}
    </style>
      <?php
        // put your code here
        session_start();
        if($_SESSION["username"]){ ?>
        <h3 class="H2"><?php
        echo "Welcome " . $_SESSION["username"]; ?>
        </h3>
        <?php }
        ?>
		
		<div class="card">
		<div class="card-body">
		
		
		<?php 
		include ('connectioString.php');
                    
                    $sql="select * from books";                    
                    $result=mysqli_query($con,$sql);
					
					?>
		<nav class="navbar navbar-inverse " style="width:100%">
           <div style="display:flex;">
            <div >
              <div style="color:white; padding-top:0px">
                <h2> Happy Learning Library</h2>
        <!--<ul style="display:flex;padding-left:0px;padding-top:5px">
         <li><form style="margin-top:4px" class="navbar-form" role="form" id="templatemo-preferences-form" name="Search" action="search.php" method="post">
            <div style="margin-top:0px" class="center form-group">
                <input style="height:33px;" type="text" id="search" placeholder="Enter the title" name="searching" required>
            <button  style="margin-top:0px" class="glyphicon glyphicon-search btn btn-md" type="submit" class="btn btn-danger" name="search" value="Search" >Search</button>
             </div>
        </form>
        </li>
		<li>
             <form role="form" id="templatemo-preferences-form" name="reservation" action="reservedBooks.php" method="post">
            <div class="center ">
           
            <button style="margin:5px;" type="submit" class="btn btn-success btn-md resButton " name="Reserved" value="Reserve" >Reserved books</button>
             </div>
        </li>
        </form> 
        </ul>-->
        </div>
        </div>
        <div style="padding:10px; width:50%;padding-left:50%;display:flex;">
		    <button type="button" class="btn btn btn-primary btn-md b1" data-toggle="modal" data-target="#add">  Add Books</button>
        <button type="button" class="btn btn btn-primary btn-md b1" data-toggle="modal" data-target="#alter">  Alter Books</button>
        <button type="button" class="btn btn btn-primary btn-md b1" data-toggle="modal" data-target="#delete">  Delete Books</button>
      </div>
      </div>
      </nav>
      <h2 style="text-align:center;">Lists Of Available Books</h2>
		<form style="border-left:0px; color:white;" >
    
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
                    if(mysqli_num_rows($result)>=1){
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
		

		
		




<!-- Modal to add books-->
<div  class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div  class="modal-dialog modal-dialog-centered" role="document">
    <div style="background-color:#222; opacity:1; color:#fff; " class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLongTitle" >Add Books</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form  class="form-example" action="addBooks.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="background:lightblue; color:#222;" class="form-group">
                    <label  for="book_id">Book_Id</label>
                    <input required type="text" class="form-control book_id"  placeholder="Enter the book_id" name="book_id">
                </div>
				<div style="background:lightblue; color:#222;" class="form-group">
                    <label for="title">Title</label>
                    <input required type="text" class="form-control title"  placeholder="Enter the book title" name="title">
                </div>
                <div style="background:lightblue; color:#222;" class="form-group">
                    <label for="author">Author</label>
                    <input required type="text" class="form-control author"  placeholder="Enter the author name" name="author">
                </div>
				<div style="background:lightblue; color:#222;" class="form-group">
                    <label for="available">Availability</label>
                    <input required type="text" class="form-control available"  placeholder="Enter the availablity" name="available">
                </div>
			
				  <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#00C5BE; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add" >Add Books</button>
      </div>
	  </form>
    </div>
  </div>
</div>






        
<!-- Modal for altering books availablity-->

<div class="modal fade" id="alter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div  style="background:#222;"class="modal-content">
      <div class="modal-header">
        <h3 " class="modal-title" id="exampleModalLongTitle" style="color:white">Alter the availablity of book</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
	  <form style="background:#222;" class="form-example" action="alterBooks.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="background:lightblue; color:#222;" class="form-group">
                    <label for="book_id">Book_Id</label>
                    <input required type="text" class="form-control book_id"  placeholder="Enter the book_id" name="book_id">
                </div>
               
				
                <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#00C5BE; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="alter">Alter</button>
      </div>
	  </form>
    </div>
  </div>
</div>


<!-- Modal for deleting the books-->

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div  style="background:#222;"class="modal-content">
      <div class="modal-header">
        <h3 " class="modal-title" id="exampleModalLongTitle" style="color:white">Delete book</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  
	  
	  <form style="background:#222;" class="form-example" action="deleteBooks.php" method="POST">
      <div class="modal-body">
         
                
                <!-- Input fields -->
                <div style="background:lightblue; color:#222;" class="form-group">
                    <label for="book_id">Book_Id</label>
                    <input required type="text" class="form-control book_id"  placeholder="Enter the book_id" name="book_id">
                </div>
               
				
                <!-- End input fields -->
                
            
      </div>
      <div class="modal-footer">
        <button style="background:#00C5BE; color:white;" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="alter">Delete</button>
      </div>
	  </form>
    </div>
  </div>
</div>


      
		
</body>
</html>
<?php 
include('footer.php');
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>