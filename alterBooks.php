<?php 
	
	    if (isset($_POST['alter'])) {
	    if (isset($_POST['book_id'])) {
        $book_id = $_POST['book_id']; }    
        
        
        $con = mysqli_connect("localhost","root","","library");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    }
		
		
		    $sql="UPDATE books SET available='yes' Where book_id = '$book_id'  ";
            $result=mysqli_query($con,$sql);
                       
					   if($result==1)
                        {
                         echo "<script>
                         alert('Altered Successfully');
                         window.location.href='adminhome.php';
                         </script>";
                            
                        }  
                            else {
                                echo "<script>
                                alert('Unaltered book not found');
                                window.location.href='adminhome.php';
                                </script>";
                            }
                            
                        
                      
	      }
		  
		 
?>
