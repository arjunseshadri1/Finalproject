<?php

require_once './staticDatabase.php';

$id = $_GET['id'];


$record = accounts::findOne($id);
$html = '<label>Id: ' . $id . '</label><br>';
$html .= '<form action="" method="post" >';
$html .= 'email: <input type="text" name="email" placeholder="' . $record->email . '"><br>';
$html .= 'fname: <input type="text" name="fname" placeholder="' . $record->fname . '"><br>';
$html .= 'lname: <input type="text" name="lname" placeholder="' . $record->lname . '"><br>';
$html .= 'phone: <input type="text" name="phone" placeholder="' . $record->phone . '"><br>';
$html .= 'birthday: <input type="text" name="birthday" placeholder="' . $record->birthday . '"><br>';
$html .= 'gender: <input type="text" name="gender" placeholder="' . $record->gender . '"><br>';
$html .= 'password: <input type="text" name="password" placeholder="' . $record->password . '"><br>';
$html .= '<input type="submit" name="update" value="Update"><br>';
$html .= '</form>';


if (isset($_POST['update'])) {
    $fields = array();
    $sep = '=';

    foreach ($_POST as $k => $v) {
        if ($v != '' && $v != 'Update') {
            $fields[] = $k . $sep .'"'. $v.'"';
        }
    }

    $values = implode(',', $fields);
    
    $record = new account();
    
    $record->update($values,$id);
    $html.= '<script>alert("record with id ' . $id . ' updated successfully."); window.location.href="index.html";</script>';
}
$html .= '<a href="index.html">Go to Start Page</a>';

print_r($html);
