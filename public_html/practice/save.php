<?php
     if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$email=$_POST['email'];
$username=$_POST['uname'];
$password=$_POST['pword'];

echo "name is :".$fname."<br>";
echo "email is :".$email."<br>";
echo "username is :".$uname."<br>";
echo "password is :".$pword."<br>";

}

?>

<html>
<body>
<form action="save.php"   method="post">
First name : <input type="text" name="fname"><br>
Email : <input type="text"  name="email"><br>
username : <input type="text" name="uname"><br>
password : <input type="text"  name="pword"><br>
<input type="submit"  name="submit" value="submit"><br>
</form>
</body>
</html>