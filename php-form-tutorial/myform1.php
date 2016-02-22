<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formMovie']))
	{
		$errorMessage .= "<li>You forgot to enter a movie!</li>";
	}
	if(empty($_POST['formName']))
	{
		$errorMessage .= "<li>You forgot to enter a name!</li>";
	}
	
	$varSRNo = $_POST['SRNo'];
	$varBookName = $_POST['BookName'];
	$varCategory = $_POST['Category'];
	$varAuthorName = $_POST['AuthorName'];
	$varRemarks = $_POST['Remarks'];

	if(empty($errorMessage)) 
	{
		$fs = fopen("mydata.csv","a");
		fwrite($fs,$varSRNo .", " $varBookName .", " $varCategory .", " $varAuthorName .", " $varRemarks . "\n");
		fclose($fs);
		
		header("Location: thankyou.html");
		exit;
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Library Forms</title>
</head>

<center> Welcome to ZZZZ.com </center>

<body>
	<?php
		if(!empty($errorMessage)) 
		{
			echo("<p>There was an error with your form:</p>\n");
			echo("<ul>" . $errorMessage . "</ul>\n");
		} 
	?>
	<form action="myform1.php" method="post">
		<p>
			SR.No<br>
			<input type="text" name="formMovie" maxlength="50" value="<?=$SRNo;?>" />
		</p>


                 <p>
			Book Name<br>
			<input type="text" name="formMovie" maxlength="50" value="<?=$BookName;?>" />
		</p>

		<p>
			Category<br>
			<input type="text" name="formName" maxlength="50" value="<?=$Category;?>" />
		</p>	

                 <p>
			Author Name<br>
			<input type="text" name="formName" maxlength="50" value="<?=$AuthorName;?>" />
		</p>	

  <p>
			Remarks<br>
			<input type="text" name="formName" maxlength="50" value="<?=$Remarks;?>" />
		</p>	
			



		<input type="submit" name="formSubmit" value="Submit" />

	</form>
</body>
</html>
