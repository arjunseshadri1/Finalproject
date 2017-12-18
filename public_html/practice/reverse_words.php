<?php
if (isset($_POST['submit'])) {
$s=explode(" ",$_POST['name']);

for($i=sizeof ($s)-1;$i>=0;$i--)
{
echo $s[$i]." ";
}


}
?>





<html>
<body>

<form action="reverse_words.php" method="post" >

  String:<input type="text" name="name" /> <br>
  <input type="submit"  name="submit" value="submit"/>  
</form> 

</body>
</html>











