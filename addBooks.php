
 <?php
        // put your code here
		
       
        
		 if(isset($_POST['add'])){
        
            $book_id = $_POST['book_id'];
			$title = $_POST['title'];
            $author = $_POST['author'];
		    $available = $_POST['available'];
            
			
            include ('connectioString.php');                   
       
			$query = "INSERT INTO `books` (book_id, title, author, available) VALUES ('$book_id', '$title', '$author', '$available')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo '<script>
             alert("Books added Succesfully!");
             window.location.href="adminhome.php";
             </script>';
			            }else{
                                     echo '<script>
                                            alert("Opps! Enter the valed credentials");
                                            
                                            </script>';
		}
		 }		
 
        
        ?>


