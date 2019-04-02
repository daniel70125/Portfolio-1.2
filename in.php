<?PHP
	$name = $_GET['rname'];
	$email = $_GET['remail'];
	$number = $_GET['rnumber'];
	$comment = $_GET['rcomment'];
	// Database Connection code
	$servername = "localhost";
	$username = "id8692564_reg";
	$password = "kidflight504";
	$dbname = "id8692564_registration";
	$con = mysqli_connect($servername,$username,$password,$dbname);
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	
		$sql = "INSERT INTO `registration`(`name`, `email`, `number`, `comment`) VALUES('$name','$email','$number','$comment');";
		if(mysqli_query($con,$sql))
		{
			echo "Information sent! I will get back to you within 24hrs";
		}
		else
		{
			echo "Something went Wrong...";
		}
	
	
	mysqli_close($con);
?>
