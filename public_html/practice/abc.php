<!DOCTYPE html>
<head>
<title>Hello</title>
</head>
<body>

<?php




$cookieName = 'count';
$count = isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : '';

$newCount = $count+1;
setcookie($cookieName,$newCount);
echo " new no is : $newCount"
?>
</body>
</html>
