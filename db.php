<?php
    
    session_start();
    $con = mysqli_connect("localhost","root","","project");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $user_email = $_POST["Email"];
      $user_number = $_POST["Number"];
      $user_password = $_POST["Password"];
		if ($_POST["Password"] === $_POST["Cpassword"]) 
	 	{
			if(!empty($user_email) && !empty($user_number) && !empty($user_password) && !is_numeric($user_email))
			{
			  $query = "INSERT into login(email_id , mobile_no , pass) values ('$user_email', '$user_number', '$user_password')";
	  
			  mysqli_query($con, $query);
	  
			  echo "<script type='text/javascript'> alert('Successfully Registered')</script>";
			  header("location: main.php");
			} 
		} 
	  	else 
	  	{
			echo "<script type='text/javascript'> alert('Both passwords are not same. Pls try again')</script>";
		}
		return;
      
      
    }   

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
		$user_email1 = $_POST["Mail"];
    	$user_password1 = $_POST["Pass"];
    	if(!empty($user_email1) && !empty($user_password1) && !is_numeric($user_email1))
    	{
    	    $query = "SELECT * from login where email_id = '$user_email1' limit 1";
    	    $result = mysqli_query($con, $query);
 	  		 if($result)
        	{

        	  if($result && mysqli_num_rows($result) > 0)
        	  {
        	    $user_data = mysqli_fetch_assoc($result);

            	if($user_data['pass'] == $user_password1)
            	{
            	  echo "<script type='text/javascript'> alert('Login Successfully')</script>";
            	  header("location: main.php");
				  die;
            	}
        	  }
        	}
        	echo "<script type='text/javascript'> alert('Wrong email or password. Pls try again')</script>";
      	}
      	
	}
?>

