<?php
session_start();
include 'libs/database.php';
include 'libs/config.php';
include 'functions.php';
$db = new database();

$query = "SELECT * FROM posts order by id DESC";

$post = $db->select($query);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>PHP Blog in OOP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">
    <script src="bootstrap.js"></script>
    <!-- Bootstrap core CSS -->

    <link href="bootstrap.css" rel="stylesheet">
    <link href="custom.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Web Development</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="index.php">Home</a>

            <a class="p-2 text-muted" href="about.php">About</a>
            <a class="p-2 text-muted" href="contact.php">Contact Us</a>
            <?php  if(isset($_SESSION['email'])):?>
            <a class="p-2 text-muted" href="admin/index.php">Go to Admin Panel </a>
            <?php endif;?>
        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">PHP Tutorials Blog</h1>
            <p class="lead my-3">It's all about PHP Tutorials and hacks in English/Urdu/Hindi.</p>

        </div>
    </div>


</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>
            <?php
            while($row = $post->fetch_array()):
            ?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
                <p class="blog-post-meta"><?php echo formateDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

                <p><?php echo substr($row['content'],0, 100);?></p>
                <a class="readmore" href="single.php?id=<?php echo $row['id'];?>">Read More</a>
            </div><!-- /.blog-post -->
            <?php endwhile;?>
