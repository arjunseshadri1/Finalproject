
<html>
    <head>
        <style type="text/css">
            .container {
                width: 200px;
                clear: both;
                text-align: left;
                padding: 100px;
            }
            .container input {
                width: 100%;
                clear: both;
                margin-top: 3px;
                margin-bottom: 10px;
            }


        </style>
    </head>

    <body>
    <center>

        <div class="container">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <label ><b>ID: <?php echo $_GET['id']; ?></b></label><br>

<!--                <label ><b>Owneremail</b></label>
                <input type="text" placeholder="Owneremail" name="owneremail"><br>

                <label ><b>OwnerId</b></label>
                <input type="number" placeholder="OwnerId" name="ownerid"><br>-->

                <label ><b>Created Date</b></label>
                <input type="datetime" placeholder="Created Date" name="createddate"><br>

                <label ><b>Due Date</b></label>
                <input type="datetime" placeholder="Due Date" name="duedate"><br>

                <label ><b>Message</b></label>
                <input type="text" placeholder="Message" name="message"><br>

                <label ><b>Is Done</b></label>
                <input type="number" placeholder="Is Done" name="isdone"><br>

                <button type="submit" name="update">Update</button>
            </form>
        </div>


    </body>
</html>

<?php
if (isset($_POST['update'])) {
    $task = new todo();
    $task->id = $_GET['id'];
//    $task->owneremail = $_POST['owneremail'];
//    $task->ownerid = $_POST['ownerid'];
    $task->createddate = $_POST['createddate'];
    $task->duedate = $_POST['duedate'];
    $task->message = $_POST['message'];
    $task->isdone = $_POST['isdone'];
    $task->save();
    header('Location: index.php?page=tasks&action=all');
}
