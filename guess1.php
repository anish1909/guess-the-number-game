
<!DOCTYPE html>
<html>
<head>
<title> your result</title>
<style type="text/css">
body
{background-image:url("th3.jpg");
color:red;
background-repeat:no-repeat;
background-size:cover;
font-size:50px;
text-align:center;
	
}
h1{
	margin_top:80px;
}
</style>
</head>
<body>
<script>
confirm("are you ready select at your own risk");


</script>
<h1>
<?php
$rand= rand(1,10);
$number=$_POST['number'];
$submit=$_POST['submit'];
if(isset($submit))
{
	if($number<1||$number>10)
	{
		echo"please select the number between 1 and 10";
	}
	else{
		if($number!=$rand)
		{
			echo"SORRY CORRECT ANSWER IS: $rand";
			echo"\nbetter luck next time";
		}
		else{
			
			
			echo"congrates you have won 100rs";
		}
		
		
	}
}
	else

	{
		header("location:g.php");
		exit();
	}

?>
</h1>

</body></html>
