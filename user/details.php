<?php
session_start(); 
include_once "includes/header.php";
include_once "../config.php";

if (isset($_GET["id"])); {
    $id = $_GET["id"];
    $sq = "select * from blog where id='" . $id . "'";
    $ru = mysqli_query($con, $sq);
    while ($ro = mysqli_fetch_array($ru)) {
?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h2 class="text-left text-info font-weight-bold"><b><?php echo $ro["title"] ?></b></h2>
                    <small class="text-center text-black"><?php echo "<b class='text-secondary'>Created at : </b>".$ro["created_at"] ?> | <?php echo "<b>Posted by : </b>".$ro["uploaded_by"] ?></small><hr class="border border-black"><br>
                    <img src="../blog/images/<?php echo $ro["image"] ?>" alt="img" class="img-responsive" style="height:200px;width:950px">
                    <p>&emsp;&emsp;&emsp;&emsp;<?php echo $ro["content"] ?></p>
                    <hr>
                    <h4>Comments</h4>
                    <form action="">
                    <input type="hidden" name="">
                    <textarea name="comment" id="" cols="10" rows="10" class="form-control rounded-0" style="resize:none;height:50px;"></textarea>
                    <input type="submit" value="comment" class="btn btn-secondary rounded-0 m-2 p-2" style="float:right;">
                    </form>
                </div>
            </div>
        </div>
<?php
    }
}
?>
<?php include_once "includes/footer.php"; ?>