<?php
        // put your code here
		
        if(isset($_POST['admin'])){
	    if(isset($_POST['Username'])){
        $Username = $_POST['Username'];	}
       
        $Password = $_POST['Password'];
        include ('connectioString.php');
		
		
			$query = "SELECT * FROM `admin` WHERE name= '$Username' and Password='$Password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                session_start();
                                $_SESSION['username'] = $Username;
                               
                                header("Location: adminhome.php");
                            }
                            else{ 
                                echo '<script>
                                alert("Invalid credenatials");
                                window.location.href="index.php"</script>';
                            }
                            
                        }                     
                        else{
                            echo '<script>
                            alert("Invalid");
                            window.location.href="index.php";
                            </script>';
                        }
	      }
               
        include('footer.php');
        
        
        
        
        ?>