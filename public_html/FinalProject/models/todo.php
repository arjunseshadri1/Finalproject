<?php

final class todo extends database\model {

    public $id;
//    public $owneremail;
//    public $ownerid;
    public $createddate;
    public $duedate;
    public $message;
    public $isdone;
    public $account_id;
    protected static $modelName = 'todo';

    public static function getTablename() {

        $tableName = 'todos';
        return $tableName;
    }

}

?>
