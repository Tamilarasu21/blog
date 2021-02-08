<?php include_once "includes/header.php"; ?>
    <div class="container">
        <?php
        include_once "config.php";

        $sql = "select * from blog";
        $run = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($run)) {
        ?>
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
                        <a href="details.php?id=<?php echo $row["id"] ?>"> read more...</a>
                    </p>
                </div>
                <div class="col-md-5">
                    <img  src="blog/images/<?php echo $row["image"] ?>" alt="img" width="500px" height="200px">
                </div>
            </div>
            <hr class="featurette-divider">
        <?php
        }
        ?>
    </div>
<?php include_once "includes/footer.php"; ?>
</main>