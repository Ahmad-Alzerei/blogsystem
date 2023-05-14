<?php
session_start();
require_once('../classes/Post.php');
require_once('../config/database.php');
if ($_POST && isset($_POST['add'])) {
    $post = new post($pdo);
    $t1 = $post->addPost($_POST['title'], $_POST['context']);
    $h12 = "error";
    if ($t1) {
        $h12 = "success";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styleFile.css/home.css">
    <title>Document</title>
</head>

<body>
    <div class="div1">
        <div><a href="">Blog System</a></div>
        <div><a href="home.php">Home</a></div>
    </div>
    <form action="" method="post">
        <br>
        <label for="">enter the title:</label><br>
        <input type="text" name="title">
        <br>
        <label for="">enter the blog:</label><br>
        <textarea name="context" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" name="add" value="add">

    </form>

</body>

</html>