<!DOCTYPE html>
<html>
<body>
<form>
<form action="reverse.php"
method="post" enctype="multipart/form-data">
  Enter a string:<br>
  <input type="text" name="string"  value=" ">
  <br>
  <input type="submit"  name="go"  value="submit">  
</form> 
</body>
</html>



<?php
$str = " ";
if (isset('submit')){
$i = 0;
while ($d = $str[$i]) 
{
    if($d == " ") 
{
        $out = " ".$temp.$out;
        $temp = "";
    }
    else
        $temp .= $d;

    $i++;
}
echo $temp.$out;
}else{
echo "enter a string";
}
?>

