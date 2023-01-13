<html>
<body>
<form method="POST">
enter a number:
<input type="number" name="number" id="number">
<input type="submit" value="submit" value="submit">
</form>
<?php
if($_POST){
$fact=1;
$number=$_POST['number'];
echo"factorial of a $number:";
for($i=1;$i<=$number;$i++){
$fact=$fact *$i;
}
echo $fact."<br><br>";
}
?>
</body>
</html>