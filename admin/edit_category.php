<?php
include '../libs/database.php';
include '../libs/config.php';
include '../functions.php';
$db = new database();
$cat_id = $_GET['id'];
//Select data
$query4="SELECT * FROM categories WHERE id='$cat_id'";
$cat = $db->select($query4);
$single = $cat->fetch_array();


$query2 = "SELECT * FROM categories";
$cats = $db->select($query2);
if(isset($_POST['update'])){
    $cat= mysqli_real_escape_string($db->link, $_POST['title']);


    if($cat==''){
        echo "Please fill all the fields!";
    }else{
        $query3="UPDATE categories SET title='$cat' WHERE id='$cat_id'";
        $run = $db->update($query3);
        if($run){
            echo "Successfull!!";
        }
    }
}

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
            <a class="p-2 text-muted" href="index.php">Dashboard</a>
            <a class="p-2 text-muted" href="posts.php">Add Posts</a>
            <a class="p-2 text-muted" href="add_category.php">Add Category</a>
            <a class="p-2 text-muted pull-right " href="localhost/blog.php">View Blog </a>
            <a class="p-2 text-muted pull-right" href="contact.php">Logout</a>

        </nav>
    </div>

    <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Update Category:</h1>

        </div>
    </div>


</div>

<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main">
            <form action="edit_category.php?id=<?php echo $cat_id;?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Category Name:</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control"  value="<?php echo $single['title'];?>">
                    </div>
                </div>






                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" name="update" class="btn btn-primary">Update Post</button>
                        <a href="index.php" class="btn btn-success">Cancel</a>
                        <a href="delete_cat.php?delete_id=<?php echo $cat_id; ?>" class="btn btn-danger">Delete</a>

                    </div>
                </div>
            </form>