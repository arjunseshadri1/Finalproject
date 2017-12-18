<?php

$task = new todo();
$task->id = $_GET['id'];
$task->delete();
header('Location: index.php?page=tasks&action=all');
