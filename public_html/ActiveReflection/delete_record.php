<?php

require_once './staticDatabase.php';

$table = $_GET['table'];
$id = $_GET['id'];


$record = new model();
if($table == 'accounts')
{
    $record = new account();
    $record->delete($id);
}else if($table == 'todos')
{
    $record = new todo();
    $record->delete($id);
}


echo '<script>alert("record with id ' . $id . ' has been deleted successfully."); window.location.href="index.html";</script>';




