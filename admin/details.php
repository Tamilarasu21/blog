<?php 
session_start();
include_once "../config.php";
include_once "includes/header.php"; 
if (isset($_GET["id"])); {
    $id = $_GET["id"];
    $sq = "select * from blog where id='" . $id . "'";
    $ru = mysqli_query($con, $sq);
    while ($ro = mysqli_fetch_array($ru)) {
?>
        <div class="container justify-content-center p-2">
            <div class="row">
                <div class="col-md-10">
                    <h2 class="text-left text-info font-weight-bold"><b><?php echo $ro["title"] ?></b></h2>
                    <small class="text-center text-black"><?php echo "<b class='text-secondary'>Created at : </b>".$ro["created_at"] ?> | <?php echo "<b>Posted by : </b>".$ro["uploaded_by"] ?></small><hr class="border border-black"><br>
                    <img src="../blog/images/<?php echo $ro["image"] ?>" alt="img" class="img-responsive" style="height:200px;width:950px">
                    <p>&emsp;&emsp;&emsp;&emsp;<?php echo $ro["content"] ?></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
<?php
    }
}
?>
<?php include_once "includes/footer.php"; ?>