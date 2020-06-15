<?php
include '../libs/database.php';
include '../libs/config.php';
include '../functions.php';
$db = new database();

$query = "SELECT * FROM posts";

$post = $db->select($query);

$query2 = "SELECT * FROM categories";
$cats = $db->select($query2);
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
    <script src="../bootstrap.js"></script>
    <!-- Bootstrap core CSS -->

    <link href="../bootstrap.css" rel="stylesheet">
    <link href="../custom.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">Admin Panel</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">

            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted active" href="index.php">Dashboard</a>
            <a class="p-2 text-muted" href="add_post.php">Add Posts</a>
            <a class="p-2 text-muted" href="add_category.php">Add Category</a>
            <a class="p-2 text-muted pull-right " href="../index.php">View Blog </a>
            <a class="p-2 text-muted pull-right" href="logout.php">Logout</a>

        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Manage Posts</h1>

        </div>
    </div>


</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <?php
            if(isset($_GET['msg'])){
                echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
            }
            ?>
            <table class="table table-striped table-dark">
                <thead>

                <tr>
                    <th scope="col">Post ID</th>
                    <th scope="col">Post Title</th>
                    <th scope="col">Post Author</th>
                    <th scope="col">Post Date</th>

                </tr>
                </thead>
                <tbody>
                <?php while($row = $post->fetch_array()):?>

                <tr>

                    <td><?php echo $row['id'] ?></td>
                    <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title'] ?></a></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo formateDate($row['date']) ?></td>
                </tr>
                <?php endwhile; ?>
                </tbody>

            </table>
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">Manage Categories</h1>

                </div>
            </div>
            <table class="table table-striped table-dark">
                <thead>

                <tr>
                    <th scope="col">Category ID</th>
                    <th scope="col">Category Title</th>


                </tr>
                </thead>
                <tbody>
                <?php while($row1 = $cats->fetch_array()):?>

                    <tr>

                        <td><?php echo $row1['id'] ?></td>
                        <td><a href="edit_category.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['title'] ?></a></td>

                    </tr>
                <?php endwhile; ?>
                </tbody>

            </table>
