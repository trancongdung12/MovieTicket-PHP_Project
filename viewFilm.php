<?php
require_once 'data.php';
error_reporting(0);
if (isset($_POST['login'])) {
    login();
}
if (isset($_POST['signup'])) {
    register();
}

if (isset($_POST['logout'])) {
    logout();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Ticket</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap3.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap3.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrapv4.4.1.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="https://i1.wp.com/batdongsanngach.com/wp-content/uploads/2018/01/ticket-icon.png?fit=440%2C440&ssl=1" />
    <script type="text/javascript">
        $(document).on("click", ".navbar-right .dropdown-menu", function(e) {
            e.stopPropagation();
        });
    </script>
    <style>
        #nameLogo {
            position: absolute;
            top: 5px;
            left: 100px;
            color: #f60;
        }

        .icon-ticket {

            position: absolute;
            top: -5px;
            right: 100px;
        }

        .num-ticket {
            color: red;
            font-size: 12px;
            position: relative;
            top: 15px;
            left: -10px;
            font-weight: bold;
        }

        .contaiFilm {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            /* width: 100%; */
        }

        /* .product-slide{
            margin-right: 20px;
           
        } */
        .product-slide img {
            width: 150px;
            height: 200px;
        }

        .middle {
            display: block;
            margin-top: -100px;
            margin-left: 20px;
        }

        .text {
            margin-bottom: 30px;
            margin-left: 13px;
        }

        .text1 {
            margin-left: 13px;
        }

        .text,
        .text1 {
            width: 80px;
        }

        .header-order {
            margin-top: 100px;
        }

        .icon-ticket {

            position: absolute;
            top: -5px;
            right: 100px;
        }

        .num-ticket {
            color: red;
            font-size: 12px;
            position: relative;
            top: 15px;
            left: -10px;
            font-weight: bold;
        }

        #myModal {
            margin-left: 200px;
            margin-top: 50px;
        }
    </style>
    <script src="index.js"></script>
</head>

<body>
    <div id="navbar">
        <nav class="navbar navbar-default navbar-expand-lg navbar-light">
            <div class="navbar-header d-flex col">
                <a class="navbar-brand" href="index.php"><span><img src="image/logo.png" alt="" height="70px" width="100px"></span>
                    <p id="nameLogo"><b>Movie <br>Tickets</b></p>
                </a>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Services</a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item">Web Design</a></li>
                            <li><a href="#" class="dropdown-item">Web Development</a></li>
                            <li><a href="#" class="dropdown-item">Graphic Design</a></li>
                            <li><a href="#" class="dropdown-item">Digital Marketing</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
                <form class="navbar-form form-inline" method="post">
                    <div class="input-group search-box">
                        <input type="text" id="search" name="text-search" class="form-control" placeholder="Search here...">
                        <span class="input-group-addon"><button style="border: none;background: none" type="submit" name="search"><i class="material-icons">&#xE8B6;</i></button></span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <li class="nav-item" id="login" <?php if ($_SESSION['login'] == true) {
                                                        echo 'style="display: none"';
                                                    } ?>>
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
                        <ul class="dropdown-menu form-wrapper">
                            <li>
                                <form method="post">
                                    <p class="hint-text">Sign in with your social media account</p>
                                    <div class="form-group social-btn clearfix">
                                        <a href="#" class="btn btn-primary pull-left"><i class="fab fa-facebook-f"></i> Facebook</a>
                                        <a href="#" class="btn btn-info pull-right"><i class="fab fa-twitter"></i> Twitter</a>
                                    </div>
                                    <div class="or-seperator"><b>or</b></div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                    <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                                    <div class="form-footer">
                                        <a href="#">Forgot Your password?</a>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item" id="signup" <?php if ($_SESSION['login'] == true) {
                                                            echo 'style="display: none"';
                                                        } ?>>
                        <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
                        <ul class="dropdown-menu form-wrapper">
                            <li>
                                <form method="post" enctype="multipart/form-data">
                                    <p class="hint-text">Fill in this form to create your account!</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Rename" placeholder="Full name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Rephone" placeholder="Phone" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Readdress" placeholder="Address" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="Reimage" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="Reuser" placeholder="Username" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="Repass" placeholder="Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="Recomfirm" placeholder="Confirm Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block" name="signup" value="Sign up">
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>

        <div class="dropdown" id="avatar-drop">
            <img <?php if ($_SESSION['login'] == true) {
                        echo 'style="display: block"';
                    } else {
                        echo 'style="display: none"';
                    } ?> class="img-circle dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="image/avt/<?php echo $_SESSION['image']; ?>" alt="Avatar">
            <form method="post">
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

                    <!-- <button class="dropdown-item" type="button">Another action</button> -->
                    <button name="profile" class="dropdown-item" type="button"><i class="fas fa-address-card"></i>&emsp;Profile</button>
                    <button name="logout" class="dropdown-item" type="submit"><i class="fas fa-sign-out-alt"></i>&emsp;Logout</button>

                </div>
            </form>
        </div>
    </div>
    <div class="icon-ticket" <?php if ($_SESSION['login'] == true) {
                                    echo 'style="display: block"';
                                } else {
                                    echo 'style="display: none"';
                                } ?>>

        <img style="border: none" src="image/tickets-icon.png" data-toggle="modal" data-target="#myModal" alt="" height="70px" width="70px" value="1" name="ticket-order">
        <small class="num-ticket">(
            <?php
            if (isset($_SESSION['id_cus'])) {
                countQuantityOrderById($_SESSION['id_cus']);
            } else {
                echo 0;
            }

            ?>
            )</small>
        </a>
    </div>

    <!-- Modal: modalCart -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Your ticket</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped" id="tblGrid">
                        <thead id="tblHead">
                            <tr>
                                <th>#</th>
                                <th>Film</th>
                                <th>Image</th>
                                <th>Theater</th>
                                <th>Seat</th>
                                <th>Time</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_SESSION['id_cus'])) {
                                getFilmByIdUser($_SESSION['id_cus']);
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="header-order">
            <h2 style="color: #f60;"><b>
                    <?php
                    if (isset($_GET['type'])) {
                        if (($_GET['type']) == 'nowplay') {
                            echo 'NOW PLAYING';
                        } else if (($_GET['type']) == 'thisweek') {
                            echo 'OPEN THIS WEEK';
                        } else {
                            echo 'COMING SOON';
                        }
                    }
                    ?>
                </b>
            </h2>
            <hr class="hr-order">
        </div>
        <div class="contaiFilm">
            <?php
            if (isset($_POST['search'])) {
                searchByName($_POST['text-search']);
            } else {
                displayFilm($_GET['type']);
            }

            ?>
        </div>

    </div>



    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Information</h5>
                    <p> This is a website of a future programmer. Everyone please support me.I love you so much.</p>
                </div>
            </div>
        </div>
        <div class="second-bar">
            <div class="container">
                <h2 class="logo"><a href="#"> LOGO </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
                    <a href="#" class="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" class="google"><i class="fab fa-google-plus-square"></i></a>
                    <span>© 2019 DungxDev</span>
                </div>
            </div>
        </div>
    </footer>


    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>

</html>