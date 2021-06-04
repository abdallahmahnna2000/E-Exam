<?php include 'inc/header.php';?>

<div class="container my-5 text-center" style="bg color :gray;">
<h1 class="text-center">Welcome : <?php echo $_SESSION["name"]; ?></h1>
    <div class="text-center">
        <a class="btn btn-outline-dark m-5" href="level1.php">LEVEL One</a>
        <a class="btn btn-outline-dark m-5" href="level2.php">LEVEL Two</a>
        <a class="btn btn-outline-dark m-5" href="level3.php">LEVEL Three</a>
        <a class="btn btn-outline-dark m-5" href="level4.php">LEVEL Four</a>
    </div>
    <div class="home"></div>
    </div>
<?php include 'inc/footer.php';?>