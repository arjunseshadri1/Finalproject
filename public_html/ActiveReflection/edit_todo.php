<?php

require_once './staticDatabase.php';

$id = $_GET['id'];


$record = todos::findOne($id);
$html = '<label>Id: ' . $id . '</label><br>';
$html .= '<form action="" method="post" >';
$html .= 'owneremail: <input type="text" name="owneremail" placeholder="' . $record->owneremail . '"><br>';
$html .= 'ownerid: <input type="text" name="ownerid" placeholder="' . $record->ownerid . '"><br>';
$html .= 'createddate: <input type="text" name="createddate" placeholder="' . $record->createddate . '"><br>';
$html .= 'duedate: <input type="text" name="duedate" placeholder="' . $record->duedate . '"><br>';
$html .= 'message: <input type="text" name="message" placeholder="' . $record->message . '"><br>';
$html .= 'isdone: <input type="text" name="isdone" placeholder="' . $record->isdone . '"><br>';
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
    
    $record = new todo();
    $record->update($values,$id);
    
    $html .= '<script>alert("record with id ' . $id . ' updated successfully."); window.location.href="index.html";</script>';
}
$html .= '<a href="index.html">Go to Start Page</a>';
print_r($html);
