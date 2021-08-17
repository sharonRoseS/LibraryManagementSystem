        <?php
        // put your code here
		
        $Username = $Email = $Contact = $Password = $Student_USN = "" ;
        
		 if(isset($_POST['insert'])){
        
            $Username = $_POST['Username'];
			$Student_USN = $_POST['Student_USN'];
            $Email = $_POST['Email'];
            $Contact = $_POST['Contact'];
            $Password = $_POST['Password'];
			
            include ('connectioString.php');                   
       
			$query = "INSERT INTO `student` (Username, Student_USN, Email, Contact, Password) VALUES ('$Username', '$Student_USN', '$Email', '$Contact', '$Password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo '<script>
             alert("Registration Succesfull!");
             window.location.href="index.php";
             </script>';
			            }
                                    else
                                    {
                                        echo ("Opps! Enter the valid details"); 
                                    }
		}     
 
        
        ?>