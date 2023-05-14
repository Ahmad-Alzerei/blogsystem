<?php
session_start();
require_once('../classes/Post.php');
require_once('../config/database.php');
$post1 = new Post($pdo);
$view = $post1->viewAllPost();
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
        <div><a href="">The Main Page</a></div>
        <div>
            <div><a href="deletePost.php">Delete Blog</a></div>
            <div><a href="addPost.php">Add Blog</a></div>
        </div>


    </div>

    <?php
    foreach ($view as $views) { ?>
        <div>
            <h1><?= $views['title'] ?></h1>
            <h1>the id is : <?= $views['id'] ?></h1>
            <h2>the author_id is <?= $views['author_id'] ?></h2>
            <p>the context is <br> <?= $views['context'] ?></p>
            <h3>created at <?= $views['created_at'] ?></h3>
            <hr>
        </div>
    <?php } ?>
</body>

</html>