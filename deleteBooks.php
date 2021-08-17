<?php 
	
	    if (isset($_POST['alter'])) {
	    if (isset($_POST['book_id'])) {
        $book_id = $_POST['book_id']; }    
        
        
        $con = mysqli_connect("localhost","root","","library");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
		
		
		    $sql="DELETE FROM books Where book_id = '$book_id'  ";
            $result=mysqli_query($con,$sql);
                       
					   if($result==1)
                        {
                         echo"<script>
                         alert('Deleted Successfully');
                         window.location.href='adminhome.php';
                         </script>";
                            
                        }  
                            else {
                                echo(" Book not found");
                            }
                            
                        
                      
	      }
		  
		 
?>
