<html>
<head>
<title>
ODD OR EVEN</title>
</head>
<body>
<form name="fomrs" method ="post" action="<?php echo
 $_SERVER['PHP_SELF'];?>">
Name:<input type="text"name="name "><br><br>
Email id:<input type="email"name="mail"><br><br>
Address:<textarea name ="address"></textarea><br><br>
gender:<input type="radio" id="male"name="gender " value="male">male<br><br>
<input type="radio" id="female"name="gender " value="female">female<br><br>
date of birth:<input type="date"name="dob"><br><br>
<input type="submit"name="submit "value="submit"><br><br>
</form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
$Name=$_REQUEST['name'];
$Email=$_REQUEST['mail'];
$Address=$_REQUEST['address'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
echo "Name:".$name."<br>";
echo "Email id:".$email."<br>";
echo "Address:".$address."<br>";
echo  "gender:".$gender."<br>";
echo"date of birth:".$dob."<br>";
}?>

