<?php
if(!isset($menu)){
	$menu = "home";
}
	include('inc/AutoLoad.php');
	if(!isset($is_package_form))
		$is_package_form = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TG-Travel Tour and Travel Management System">
    <meta name="keywords" content="travel, tour, fresh, portfolio, personal, developer, beautiful,personal resume, clean, modern">
    <meta name="author" content="Tanvir Rahman Hridoy">
    <!-- PAGE TITLE -->
    <title>TG-Travel Tour and Travel Management System</title>
    <link rel="icon" type="image/x-icon" href="assets/images/faviicon.png">
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- ALL CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/contact.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/css/single.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header-info-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-info-top-left">
                        <ul>
                            <li><i class="fa fa-envelope"></i><a href="mailto:hello@touristguide.com">hello@touristguide.com</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:01968922171">01968922171</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-info-top-left text-right">
                        <ul>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook Group</span>
                                </a>
                            </li>
                            <li>
                                <a class="facebook" href="#">
                                    <i class="fab fa-youtube"></i>
                                    <span>Youtube Channel</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-rs">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto main_menu">
                        <li class="nav-item <?php echo getMenuClass($menu,"home"); ?>  ">
                            <a class="nav-link" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"place"); ?> ">
                            <a class="nav-link" href="Places.php">
                                Places
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <ul>
                                <?php
									foreach (GetDivision() as $keyDivision => $valueDivision){
										echo "<li>";
										echo '<a class="dropdown-item" href="Places.php?division='.$valueDivision.'">'.$valueDivision.'</a>';
										echo "</li>";
									}
								?>
                            </ul>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"gallery"); ?>  ml-xl-2">
                            <a class="nav-link" href="Gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"package"); ?>  ml-xl-2">
                            <a class="nav-link" href="Package.php">packages</a>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"restaurant"); ?>  ml-xl-2">
                            <a class="nav-link" href="restaurents.php">Restaurants</a>
                        </li>

                        <li class="nav-item <?php echo getMenuClass($menu,"offers"); ?>  ml-xl-2">
                            <a class="nav-link" href="Hotels.php">Hotel<i class="fas fa-caret-down"></i></a>
                            <ul>
                                <li><a class="nav-link" href="Hotels.php">All Hotel</a></li>
                                <li><a class="nav-link" href="Hotels.php?s=offer">Offers</a></li>
                            </ul>

                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"about"); ?>  ml-xl-2">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"contact"); ?>  ml-xl-2">
                            <a class="nav-link" href="Contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item <?php echo getMenuClass($menu,"account"); ?>  dropdown ml-xl-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Account
                                <i class="fas fa-caret-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
									if(isLogin()):
								?>
                                <a class="dropdown-item" href="<?php echo ($_SESSION['user']['role'] == 'admin' ? 'admin.php' : "My_account.php"); ?>">Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Login.php">Logout</a>
                                <?php
									else:
								?>
                                <a class="dropdown-item" href="Register.php">Register</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Login.php">Login</a>
                                <?php endif; ?>
                            </div>
                        </li>
                        <li class="nav-item menu_serch <?php echo getMenuClass($menu,"home"); ?>  ml-xl-2">
                            <a class="nav-link  dropdown-toggle" href="" id="navbarDropdownSearch" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search"></i>

                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownSearch">
                                <form style="" action="Places.php" method="get">
                                    <input type="text" class="form-control" name="s" placeholder="Type here.">
                                    <div class="dropdown-divider"></div>
                                    <button type="submit" class="btn btn-info">Search</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--banner-rs-->
        <?php
			if($is_package_form){
				include('inc/template/package_search_form.php');
			}else if(isset($page_title)){
				?>
        <div class="banner-rs-info rs_page_main_title">
            <!--/search_form -->
            <div id="search_form" class="search_top text-center">

                <h3><?php echo $page_title; ?></h3>
            </div>
            <!--//search_form -->
        </div>
        <?php
			}
		?>
        <!--//banner-rs-->
    </div>
