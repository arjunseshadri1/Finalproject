



<?php
if(isset($_POST['submit'])){
echo $_POST['name'];
}
?>


<html>
<body>
<form>
<form action="index.php"  method="POST">
 <p>Email id:</p>
 <input type="text" name="name" /><br/>
 <input type="submit" value="DONE"/> 
</form> 

</body>
</html>