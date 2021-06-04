<?php include 'inc/header.php';?>

<div class="container my-5 text-center">
<h1 class="text-center">Welcome : <?php echo $_SESSION["adminname"]; ?></h1>
    <a class="btn btn-outline-dark m-5" href="addstudent.php">Add Student</a>
    <a class="btn btn-outline-dark m-5" href="showstudents.php">Show Students</a>
    <hr style="border:1px solid gray"></hr>
    <div class="text-center">
        <a class="btn btn-outline-dark m-5" href="level1exam.php">LEVEL One EXAM</a>
        <a class="btn btn-outline-dark m-5" href="level2exam.php">LEVEL Two EXAM</a>
        <a class="btn btn-outline-dark m-5" href="level3exam.php">LEVEL Three EXAM</a>
        <a class="btn btn-outline-dark m-5" href="level4exam.php">LEVEL Four EXAM</a>
    </div>
<br><br><br>
    </div>
<?php include 'inc/footer.php';?>