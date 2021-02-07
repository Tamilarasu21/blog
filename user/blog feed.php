<?php
session_start();
include_once "../config.php";
include_once "includes/header.php";
$sql = "select * from blog";
$rn = mysqli_query($con, $sql);
foreach ($rn as $row) { ?>
    <div class="container">
        <div class="row featurette">
            <div class="col-md-7">
                <a href="details.php?id=<?php echo $row["id"] ?>" class="text-decoration-none">
                    <h3 class="featurette-heading text-info"><b><?php echo $row["title"] ?></b></h3>
                </a>
                <p class="lead">
                    <?php
                    $stringCut = substr($row["content"], 0, 300);
                    $endPoint = strrpos($stringCut, ' ');

                    //if the string doesn't contain any space then it will cut without word basis.
                    $row["content"] = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                    echo $row["content"];
                    ?>
                    <a href="details.php?id=<?php echo $row["id"] ?>"> Read more...</a>
                </p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="../blog/images/<?php echo $row["image"] ?>" alt="Thumbnail image" width="400px" height="100px" onerror="this.src='../assets/tech-blog.png'">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
<?php
}
include_once "includes/footer.php";
?>