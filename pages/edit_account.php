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

                <label ><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" ><br>

                <label><b>E-mail</b></label>
                <input type="text" placeholder="Enter E-mail" name="email" ><br>

                <label><b>First Name</b></label>
                <input type="text" placeholder="Enter First Name" name="fname" ><br>

                <label><b>Last Name</b></label>
                <input type="text" placeholder="Enter Last Name" name="lname" ><br>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required="true"><br>

                <button type="submit" name="update">Update</button>
            </form>
        </div>
    </center>



    <a href="index.php">Go To Homepage</a>

</body>
</html>
<?php
if (isset($_POST['update'])) {


    $record = new account();
    $record->id = $_GET['id'];
    if (isset($_POST['username'])) {
        $record->username = $_POST['username'];
        $_SESSION['logged_in'] = $_POST['username'];
    }


    $record->email = $_POST['email'];
    $record->fname = $_POST['fname'];
    $record->lname = $_POST['lname'];
    
    

    if (!empty($_POST['password'])) {
        $options = [
            'cost' => 10
        ];
        $hash = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
        $record->password = $hash;
    }

    $record->save();
    print_r($_POST);
}