<?php

    if(isset($_GET['name'])){
        // print_r($_GET);
        $name = htmlentities ($_GET['name']);
    }

    /*
    if(isset($_POST['name'])){
        // print_r($_POST);
        //echo htmlentities ($_GET['name']);
        $name = htmlentities ($_POST['name']);
        echo $name;
    }
    */

    if(isset($_REQUEST['name'])){
        // print_r($_GET);
        //echo htmlentities ($_REQUEST['name']);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- <form method="GET" action="get_post.php"> -->
    <form method="POST" action="get_post.php">        
        <div>
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div>
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="get_post.php?name=bruno">Bruno</a>
            <a href="get_post.php?name=sam">Sam</a>   
        </li>
    </ul>
    <?php echo "$name" ?>
</body>
</html>