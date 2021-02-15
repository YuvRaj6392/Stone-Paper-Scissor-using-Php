<?php
$p="yuvraj123";
$k="";
$s="";
if((isset($_POST['name']))&&(isset($_POST['password'])))
{
$k=$_POST['password'];
if($k==$p)
{
$s=$_POST['name'];
session_start();
$_SESSION['username']=$s;
$_SESSION['password']=$k;
header("Location:game.php?name=".urlencode($s));
return;
}
else
{
echo "Wrong Password";
}
}
?>
<html>
<head>
<meta name=viewport content="width=device-width,initial-scale=1">
</head>
<body bgcolor=#f0f0f0>
<h1 align=center>Stone,Paper,Scissor</h1>
<br>
<form method=POST>
<label>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input type=text name=name required</input>
<br>
<br>
<label>Password:</label>
<input type=password name=password required>
<h6 align=center>(Password Hint:Admin's name followed my 123)</h6>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=submit value=Login>
</form>
<h4>If you want to play the stone,paper,scissor&nbsp<a href=game.php>game</a>&nbspmake sure you Login first</h4>
</body>
</html>


