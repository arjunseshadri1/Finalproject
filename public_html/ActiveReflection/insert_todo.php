<?php

require_once './staticDatabase.php';

$html = '<h2>Insert into todos</h2>';
$records = todos::findall();
$html .= '<form action="" method="post" >';
$html .= 'id: <input type="text" name="id" placeholder="' . (sizeof($records) + 1) . '"><br>';
$html .= 'owneremail: <input type="text" name="owneremail"><br>';
$html .= 'ownerid: <input type="text" name="ownerid" ><br>';
$html .= 'createddate: <input type="text" name="createddate" ><br>';
$html .= 'duedate: <input type="text" name="duedate" ><br>';
$html .= 'message: <input type="text" name="message"><br>';
$html .= 'isdone: <input type="text" name="isdone" ><br>';
$html .= '<input type="submit" name="insert" value="Insert"><br>';
$html .= '</form>';


if (isset($_POST['insert'])) {

    $vals = '';
    $fields = '';
    foreach ($_POST as $k => $v) {
        if ($k != 'insert') {
            if ($v == '') {
                $v=null;
            }
            $vals .= '"' . $v . '",';
            $fields .= $k . ',';
        }
    }
    $vals = substr($vals, 0, (strlen($vals) - 1));
    $fields = substr($fields, 0, (strlen($fields) - 1));

    $record = new todo();
    $record->insert($fields,$vals);

    $html .= '<script>alert("record with id ' . $_POST['id'] . ' updated successfully."); window.location.href="index.html";</script>';
}
$html .= '<a href="index.html">Go to Start Page</a>';

print_r($html);
