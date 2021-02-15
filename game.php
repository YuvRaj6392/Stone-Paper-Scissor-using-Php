<?php
session_start();
if(!isset($_SESSION['username']))
{
header("Location:index.php");
return;
}
$computer=rand(1,3);
$game="";
if(isset($_POST['logout']))
{
session_unset();
session_destroy();
header("Location:index.php");
return;
}
if(!isset($_REQUEST['name']))
{
die("LOGIN IS REQUIRED");
}
if(isset($_REQUEST['name']))
{
if((isset($_POST['object'])=="Stone")&&($computer==1))
{
$game="MATCH TIED";
}
else if((isset($_POST['object'])=="Paper")&&($computer==1))
{
$game="YOU WIN";
}
else if((isset($_POST['object'])=="Scissor")&&($computer==1))
{
$game="YOU LOST";
}
else if((isset($_POST['object'])=="Stone")&&($computer==2))
{
$game="YOU LOST";
}
else if((isset($_POST['object'])=="Paper")&&($computer==2))
{
$game="MATCH TIED";
}
else if((isset($_POST['object'])=="Scissor")&&($computer==2))
{
$game="YOU WIN";
}
else if((isset($_POST['object'])=="Stone")&&($computer==3))
{
$game="YOU WIN";
}
else if((isset($_POST['object'])=="Paper")&&($computer==3))
{
$game="YOU LOST";
}
else if((isset($_POST['object'])=="Scissor")&&($computer==3))
{
$game="MATCH TIED";
}
}



?>
<html>
<head>
<meta name=viewport content="width=device-width,initial-scale=1">
</head>
<body bgcolor=#f0f0f0>
<h1 align=center>Stone,Paper,Scissor</h1>
<?php
if(isset($_REQUEST['name']))
{
echo "WELCOME"." ". htmlentities($_REQUEST['name']);
echo "<br>"."<br>";
}
?>
<form method=POST>
<label>Select any one from Stone Paper Scissor to play with the computer:</label>
<br>
<br>
<select name=object>
<option>Stone</stone>
<option>Paper</stone>
<option>Scissor</option>
</select>
&nbsp&nbsp&nbsp<input type=submit value=&#9658play>
&nbsp&nbsp<input type=submit name=logout value=Logout>
</form>
</body>
</html>
<?php
echo " "." ".$game;
?>
