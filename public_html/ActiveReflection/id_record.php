<?php

require './staticDatabase.php';

$table = $_GET['table'];

$html = '<form action="" method="post" >';
$html .= 'Id: <input type="number" name="id"><br>';
$html .= '<input type="submit" name="find" value="Find"><br>';
$html .= '</form>';

if (isset($_POST['find'])) {

    $id = $_POST['id'];

    $html = '<center><table border="1">';
    if ($table == 'accounts') {

        $records = accounts::findOne($id);

        $html .= '<tr>';
        $html .= '<td>' . 'id' . '</td>';
        $html .= '<td>' . 'email' . '</td>';
        $html .= '<td>' . 'fname' . '</td>';
        $html .= '<td>' . 'lname' . '</td>';
        $html .= '<td>' . 'phone' . '</td>';
        $html .= '<td>' . 'birthday' . '</td>';
        $html .= '<td>' . 'gender' . '</td>';
        $html .= '<td>' . 'password' . '</td>';
        $html .= '<td>' . 'Edit' . '</td>';
        $html .= '<td>' . 'Delete' . '</td>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td>' . $records->id . '</td>';
        $html .= '<td>' . $records->email . '</td>';
        $html .= '<td>' . $records->fname . '</td>';
        $html .= '<td>' . $records->lname . '</td>';
        $html .= '<td>' . $records->phone . '</td>';
        $html .= '<td>' . $records->birthday . '</td>';
        $html .= '<td>' . $records->gender . '</td>';
        $html .= '<td>' . $records->password . '</td>';
        $html .= '<td><a href="edit_account.php?id=' . $records->id . '">Edit</a></td>';
        $html .= '<td><a href="delete_record.php?id=' . $records->id . '&table=accounts">Delete</a></td>';
        $html .= '</tr>';
    } else if ($table == 'todos') {
        $records = todos::findOne($id);

        $html .= '<tr>';
        $html .= '<td>' . 'id' . '</td>';
        $html .= '<td>' . 'owneremail' . '</td>';
        $html .= '<td>' . 'ownerid' . '</td>';
        $html .= '<td>' . 'createddate' . '</td>';
        $html .= '<td>' . 'duedate' . '</td>';
        $html .= '<td>' . 'message' . '</td>';
        $html .= '<td>' . 'isdone' . '</td>';
        $html .= '<td>' . 'Edit' . '</td>';
        $html .= '<td>' . 'Delete' . '</td>';
        $html .= '</tr>';


        $html .= '<tr>';
        $html .= '<td>' . $records->id . '</td>';
        $html .= '<td>' . $records->owneremail . '</td>';
        $html .= '<td>' . $records->ownerid . '</td>';
        $html .= '<td>' . $records->createddate . '</td>';
        $html .= '<td>' . $records->duedate . '</td>';
        $html .= '<td>' . $records->message . '</td>';
        $html .= '<td>' . $records->isdone . '</td>';
        $html .= '<td><a href="edit_todo.php?id=' . $records->id . '">Edit</a></td>';
        $html .= '<td><a href="delete_record.php?id=' . $records->id . '&table=todos">Delete</a></td>';
        $html .= '</tr>';
    }
    $html .= '</table></center>';
}
$html .= '<a href="index.html">Go to Start Page</a>';
print_r($html);
