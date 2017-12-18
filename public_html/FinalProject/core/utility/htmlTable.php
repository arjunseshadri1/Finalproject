<?php

namespace utility;

//namespace MyProject\mvcName;

class htmlTable {

    public static function genarateTableFromMultiArray($array) {


        $tableGen = '<div class="container">';
        $tableGen .= '<div class="row col-md-6 col-md-offset-2 custyle">';
        $tableGen .= '<table class="table table-striped custab">';
        $tableGen .= '<tr>';
        //this grabs the first element of the array so we can extract the field headings for the table
        $fieldHeadings = $array[0];
        $fieldHeadings = get_object_vars($fieldHeadings);
        $fieldHeadings = array_keys($fieldHeadings);
        //this gets the page being viewed so that the table routes requests to the correct controller
        $referingPage = $_REQUEST['page'];
        foreach ($fieldHeadings as $heading) {
            if ($heading != 'account_id')
                $tableGen .= '<th>' . $heading . '</th>';
        }

        $tableGen .= '</tr>';
        foreach ($array as $record) {
            $tableGen .= '<tr>';
            foreach ($record as $key => $value) {
                if ($key == 'id') {
                    $tableGen .= '<td><a class="btn btn-primary btn-xs" href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">View</a></td>';
                } else {
                    if ($key != 'account_id')
                        $tableGen .= '<td>' . $value . '</td>';
                }
            }
//            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">Edit</a></td>';
//            $tableGen .= '<td><a href="index.php?page=' . $referingPage . '&action=show&id=' . $value . '">Delete</a></td>';
            $tableGen .= '</tr>';
        }

        $tableGen .= '</table>';
        $tableGen .= '</div>';
        $tableGen .= '</div>';

        return $tableGen;
    }

    public static function generateTableFromOneRecord($innerArray) {
        $tableGen = '<div class="container">';
        $tableGen .= '<div class="row col-md-6 col-md-offset-2 custyle">';
        $tableGen .= '<table class="table table-striped custab">';
        $tableGen .= '<tr>';

        foreach ($innerArray as $innerRow => $value) {
            if ($innerRow != 'account_id')
                $tableGen .= '<th>' . $innerRow . '</th>';
        }
        $tableGen .= '<th>Edit</th>';
        $tableGen .= '<th>Delete</th>';
        $tableGen .= '</tr>';

        foreach ($innerArray as $key => $value) {
            if ($key != 'account_id')
                $tableGen .= '<td>' . $value . '</td>';
        }
        $tableGen .= '<td><a class="btn btn-info btn-xs" href="index.php?page=' . $_GET['page'] . '&action=edit&id=' . $_GET['id'] . '">Edit</a></td>';
        $tableGen .= '<td><a class="btn btn-danger btn-xs" href="index.php?page=' . $_GET['page'] . '&action=remove&id=' . $_GET['id'] . '">Delete</a></td>';
        $tableGen .= '</tr></table><hr>';
        $tableGen .= '</div>';
        $tableGen .= '</div>';
        return $tableGen;
    }

}

?>