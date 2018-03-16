<!DOCTYPE html>

<html>
<head><title>php game </title>
<style type="text/css">
h1{
	color:pink;
	text-align:center;
}
h2{
	color:yellow;
	text-align:center;
}
form ,input{
	color:red;
	font-size:45px;
	text-align:center;
	font-style:italic;
	padding:40px;
		
}
#s1{
	margin:50px;
	padding-bottom:30px;
	border-radius:4rem;
	border-color:blue;
	width:800px;
}
body{
	background-image:url("th.jpg");
	background-repeat:no-repeat;
	background-size:cover;
	
}

</style>
</head>
<body >
<script> alert("are you ready to play with us");</script>
<h1>lets play the game</h1>
<h2> guess my number and won the prize</h2>
<form action="guess1.php" method="post">
GUESS:<input type="number" name="number" placeholder="enter the number" ></br>
<input type="submit" name="submit" value="guess" id="s1">
</form>

</body>
</html>