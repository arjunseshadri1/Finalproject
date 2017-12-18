<?php


$record = new account();
$record->id = $_GET['id'];
$record->delete();
session_destroy();
header('Location: index.php');
