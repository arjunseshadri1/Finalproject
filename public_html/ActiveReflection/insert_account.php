<?php

require_once './staticDatabase.php';

$html = '<h2>Insert into accounts</h2>';
$records = accounts::findall();
$html .= '<form action="" method="post" >';
$html .= 'id: <input type="text" name="id" placeholder="' . (sizeof($records) + 1) . '"><br>';
$html .= 'email: <input type="text" name="email" ><br>';
$html .= 'fname: <input type="text" name="fname" ><br>';
$html .= 'lname: <input type="text" name="lname" ><br>';
$html .= 'phone: <input type="text" name="phone" ><br>';
$html .= 'birthday: <input type="text" name="birthday" ><br>';
$html .= 'gender: <input type="text" name="gender" ><br>';
$html .= 'password: <input type="text" name="password" ><br>';
$html .= '<input type="submit" name="insert" value="Insert"><br>';
$html .= '</form>';


if (isset($_POST['insert'])) {

    $vals = '';
    $fields = '';
    foreach ($_POST as $k => $v) {
        if ($k != 'insert') {
            if ($v == '') {
                if ($k == 'birthday') {
                    $v = '0000-00-00';
                } else {
                    $v = null;
                }
            }
            $vals .= '"' . $v . '",';
            $fields .= $k . ',';
        }
    }
    $vals = substr($vals, 0, (strlen($vals) - 1));
    $fields = substr($fields, 0, (strlen($fields) - 1));

    $record = new account();
    $record->insert($fields,$vals);

    $html .= '<script>alert("record with id ' . $_POST['id'] . ' updated successfully."); window.location.href="index.html";</script>';
}
$html .= '<a href="index.html">Go to Start Page</a>';

print_r($html);
