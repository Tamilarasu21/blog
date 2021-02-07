<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
if (!isset($_SESSION["admin"])) {
    header("Location:../index.php");
}
$s = "select * from user where email='" . $_SESSION["admin"] . "'";
$r = mysqli_query($con, $s);
foreach ($r as $w) {
    $uname = ucwords($w["firstname"] . " " . $w["lastname"]);
}

$sql = "select * from blog where uploaded_by='" . $uname . "'";
$run = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($run)) { ?>
    <div class="row featurette">
        <div class="col-md-7">
            <h3 class="featurette-heading text-info"><a href="details.php?id=<?php echo $row["id"] ?>" class="text-decoration-none"><b><?php echo $row["title"] ?></b></a></h3>
            <p class="lead">
                <?php
                $stringCut      = substr($row["content"], 0, 300);
                $endPoint       = strrpos($stringCut, ' ');
                //if the string doesn't contain any space then it will cut without word basis.
                $row["content"] = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                echo $row["content"];
                ?>
                <a href="details.php?id=<?php echo $row["id"] ?>"> Read more...</a>
            </p>
            <p><a href="edit blog.php?id=<?php echo $row["id"] ?>" class="btn btn-info rounded-0"><i class="fa fa-pencil"></i>&nbsp;Edit</a>&emsp;&emsp;&emsp;&emsp;<a href="delete post.php?id=<?php echo $row["id"] ?>" class="btn btn-danger rounded-0"><i class="fa fa-trash"></i>&nbsp;Delete</a></p>
        </div>
        <div class="col-md-5">
            <img class="img-fluid" src="../blog/images/<?php echo $row["image"] ?>" id="thumbnail" alt="img" width="400px" height="100px" onerror="this.src='../assets/tech-blog.png'">
        </div>
    </div>
    <hr class="featurette-divider">
<?php
}
?>
<?php include_once "includes/footer.php"; ?>