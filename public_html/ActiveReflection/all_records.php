<?php

require './staticDatabase.php';

$table = $_GET['table'];
$html = '<h2 style="text-align:center">All records from ' . $table . '</h2>';
$html .= '<center><table border="1">';
if ($table == 'accounts') {

    $records = accounts::findAll();

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

    for ($i = 0; $i < sizeof($records); $i++) {
        $html .= '<tr>';
        $html .= '<td>' . $records[$i]->id . '</td>';
        $html .= '<td>' . $records[$i]->email . '</td>';
        $html .= '<td>' . $records[$i]->fname . '</td>';
        $html .= '<td>' . $records[$i]->lname . '</td>';
        $html .= '<td>' . $records[$i]->phone . '</td>';
        $html .= '<td>' . $records[$i]->birthday . '</td>';
        $html .= '<td>' . $records[$i]->gender . '</td>';
        $html .= '<td>' . $records[$i]->password . '</td>';
        $html .= '<td><a href="edit_account.php?id=' . $records[$i]->id . '">Edit</a></td>';
        $html .= '<td><a href="delete_record.php?id=' . $records[$i]->id . '&table=accounts">Delete</a></td>';
        $html .= '</tr>';
    }
} else if ($table == 'todos') {
    $records = todos::findAll();

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

    for ($i = 0; $i < sizeof($records); $i++) {
        $html .= '<tr>';
        $html .= '<td>' . $records[$i]->id . '</td>';
        $html .= '<td>' . $records[$i]->owneremail . '</td>';
        $html .= '<td>' . $records[$i]->ownerid . '</td>';
        $html .= '<td>' . $records[$i]->createddate . '</td>';
        $html .= '<td>' . $records[$i]->duedate . '</td>';
        $html .= '<td>' . $records[$i]->message . '</td>';
        $html .= '<td>' . $records[$i]->isdone . '</td>';
        $html .= '<td><a href="edit_todo.php?id=' . $records[$i]->id . '">Edit</a></td>';
        $html .= '<td><a href="delete_record.php?id=' . $records[$i]->id . '&table=todos">Delete</a></td>';
        $html .= '</tr>';
    }
}
$html .= '</table></center>';
$html .= '<a href="index.html">Go to Start Page</a>';
print_r($html);
