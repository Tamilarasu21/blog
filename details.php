<?php
include_once "config.php";

if (isset($_GET["id"])); {
    $id = $_GET["id"];
    $sq = "select * from blog where id='" . $id . "'";
    $ru = mysqli_query($con, $sq);
    while ($ro = mysqli_fetch_array($ru)) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <?php
        $stringCut = substr($ro["content"], 0, 300);
        $endPoint = strrpos($stringCut, ' ');
        //if the string doesn't contain any space then it will cut without word basis.
        $row["content"] = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        ?>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $ro["title"] ?></title>
            <meta name="keywords" content="<?php echo $ro["keywords"] ?>">
            <meta name="description" content="<?php echo strip_tags($row["content"]); ?>">
            <meta name="author" content="<?php echo $ro["uploaded_by"]?>">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        </head>

        <body>
            <header style="z-index:999 !important;">
                <nav class="navbar navbar-expand-sm fixed-top navbar-dark primary-nav">
                    <div class="container">
                        <a class="navbar-brand" href="#"><img src="assets/logo.png" alt="" id="brand-logo" class="img-fluid" width="50px" height="50px"></a>
                        <button class="navbar-toggler border-0 outline-0 hamburger collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon hamburger-icon"></span>
                            <span class="close-icon py-1">✖</span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') {
                                                        echo 'active';
                                                    } ?>">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'about.php') {
                                                        echo 'active';
                                                    } ?>">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'blog.php' || basename($_SERVER['SCRIPT_FILENAME']) == 'details.php') {
                                                        echo 'active';
                                                    } ?>">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item <?php if (basename($_SERVER['SCRIPT_FILENAME']) == 'contact.php') {
                                                        echo 'active';
                                                    } ?>">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="modal" data-target="#signup">Signup</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="" data-toggle="modal" data-target="#signin">Signin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- modal signup -->
            <!-- modal signup -->
            <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0 col-md-8 col-md-offset-2">
                        <div class="modal-header">
                            <div class="modal-title w-100 text-center"><img src="assets/logo.png" alt="" class="img-circle" width="50px" height="50px"><br>Signup</div>
                            <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-signin" action="signup.php" method="post">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="firstname" id="firstname" class="form-control rounded-0" name="firstname" pattern="[A-Za-z]{2,20}" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="lastname" id="lastname" class="form-control rounded-0" name="lastname" pattern="[A-Za-z]{1,20}" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control rounded-0" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email address" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control rounded-0" name="password" pattern=".{5,}" placeholder="Password" onkeyup="checkPass();" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="cpassword" class="form-control rounded-0" name="cpassword" pattern=".{5,}" placeholder="Confirm Password" onkeyup="checkPass();" required>
                                </div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <input class="btn btn-primary rounded-0" type="submit" name="signup" value="Sign up">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal signup ends -->
            <!-- modal signin -->
            <div class="modal fade" id="signin">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0 col-md-8 col-md-offset-2">
                        <div class="modal-header">
                            <div class="modal-title w-100 text-center"><img src="assets/logo.png" alt="" class="img-circle" width="50px" height="50px"><br>Signin</div>
                            <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form-signin" method="post" action="signin.php">
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control rounded-0" name="email" placeholder="Email address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control rounded-0" name="password" pattern=".{5,}" placeholder="Password" required>
                                </div>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button class="btn btn-primary rounded-0" type="submit" name="signin">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal signin end -->
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <h2 class="text-left text-info font-weight-bold"><b><?php echo $ro["title"] ?></b></h2>
                            <small class="text-center text-black"><?php echo "<b class='text-secondary'>Created at : </b>" . $ro["created_at"] ?> | <?php echo "<b>Posted by : </b>" . $ro["uploaded_by"] ?></small>
                            <hr class="border border-black"><br>
                            <img src="blog/images/<?php echo $ro["image"] ?>" alt="img" class="img-fluid" style="height:200px;width:950px" onerror="this.src='blog/images/techblog.png'">
                            <p class="content">&emsp;&emsp;&emsp;&emsp;<?php echo $ro["content"] ?></p>
                            <hr>
                            <h4>Comments</h4>
                            <p>You must <a href="" data-toggle="modal" data-target="#signin">login</a> to comment</p>
                        </div>
                    </div>
                </div>
        <?php
    }
}
        ?>
        </main>
        <?php include_once "includes/footer.php"; ?>
            
