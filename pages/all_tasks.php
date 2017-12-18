<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>The HTML5 Herald</title>
        <meta name="description" content="The HTML5 Herald">
        <meta name="author" content="SitePoint">

        <link rel="stylesheet" href="css/styles.css?v=1.0">

        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
    </head>

    <body>

        <?php
//this is how you print something

        if (isset($_SESSION['logged_in'])) {
            $record = \accounts::findUser($_SESSION['logged_in']);
            echo '<h2>Welcome, <a href="index.php?page=accounts&action=show&id=' . $record->id . '">' . $_SESSION['logged_in'] . '</a>.</h2><br>';
            $html = '<h3><a href="index.php?page=accounts&action=logout">Logout</a></h3>';
            print_r($html);
        }
        
        if ($data != NULL) {
            print utility\htmlTable::genarateTableFromMultiArray($data);
        }
        ?>

        <a href="index.php?page=tasks&action=create">Create Todo</a><br>
        
        <script src="js/scripts.js"></script>
    </body>
</html>