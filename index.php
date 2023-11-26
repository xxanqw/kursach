<!-- DATABASE -->
<?php
include ('includes/connect.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Devices Shop</title>
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/eafcaa75eb.js" crossorigin="anonymous"></script>
    <!-- my css -->
    <link href="src/css/main.css" rel="stylesheet">
    <link rel="icon" href="src/img/apple.png">
</head>

<body>

    <div class="container-fluid overflow-x-hidden p-0">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><i class="fa-brands fa-apple"></i> Apple Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">iPhone</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Explore All iPhone</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                            $select_iphone="select * from `iphone`";
                            $result_iphone=mysqli_query($con,$select_iphone);
                            while($raw_data=mysqli_fetch_assoc($result_iphone)){
                                $iphone_title=$raw_data['iphone_title'];
                                $iphone_id=$raw_data['iphone_id'];
                                echo "<li><a class='dropdown-item' href='?iphone=$iphone_id'>$iphone_title</a></li>";
                            }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">iPad</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Explore All iPad</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                            $select_ipad="select * from `ipad`";
                            $result_ipad=mysqli_query($con,$select_ipad);
                            while($raw_data=mysqli_fetch_assoc($result_ipad)){
                                $ipad_title=$raw_data['ipad_title'];
                                $ipad_id=$raw_data['ipad_id'];
                                echo "<li><a class='dropdown-item' href='?ipad=$ipad_id'>$ipad_title</a></li>";
                            }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Mac</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Explore All Mac</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                            $select_mac="select * from `mac`";
                            $result_mac=mysqli_query($con,$select_mac);
                            while($raw_data=mysqli_fetch_assoc($result_mac)){
                                $mac_title=$raw_data['mac_title'];
                                $mac_id=$raw_data['mac_id'];
                                echo "<li><a class='dropdown-item' href='?mac=$mac_id'>$mac_title</a></li>";
                            }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">Watch</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Explore All Apple Watch</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <?php
                            $select_watch="select * from `watch`";
                            $result_watch=mysqli_query($con,$select_watch);
                            while($raw_data=mysqli_fetch_assoc($result_watch)){
                                $watch_title=$raw_data['watch_title'];
                                $watch_id=$raw_data['watch_id'];
                                echo "<li><a class='dropdown-item' href='?watch=$watch_id'>$watch_title</a></li>";
                            }
                            ?>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">All Products</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-right mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i> Cart (0)</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="iPhone 15 Pro Max"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- products screen -->
        <div>
            <h3 class="text-center">
                Our Products
            </h3>
            <p class="text-center">
                Most popular products
            </p>
        </div>
        <div class="container">
            <div class="card text-bg-dark">
                <img src="src/img/promaxfull.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">iPhone 15 Pro Max <span class="badge bg-secondary">New</span></h5>
                    <p class="card-text">iPhone 15 Pro and iPhone 15 Pro Max. Titanium design. A17 Pro chip. Action
                        button. 48MP Main camera. USB-C.</p>
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center gy-2">
                <div class="col-sm">
                    <div class="card h-100">
                        <img src="src/img/15pro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 15 Pro <span class="badge bg-secondary">New</span></h5>
                            <p class="card-text">iPhone 15 Pro and iPhone 15 Pro Max. Titanium design. A17 Pro chip.
                                Action button. 48MP Main camera. USB-C.</p>
                            <a href="#" class="btn btn-primary ">Buy</a>
                            <a href="#" class="btn btn-secondary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card h-100">
                        <img src="src/img/15.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">iPhone 15 <span class="badge bg-secondary">New</span></h5>
                            <p class="card-text">iPhone 15 and iPhone 15 Plus. Dynamic Island. 48MP Main camera with 2x
                                Telephoto. All-day battery life. USB-C. 6.1” and 6.7” sizes.</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-secondary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card h-100">
                        <img src="src/img/macbookpro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Macbook Pro</h5>
                            <p class="card-text">MacBook Pro with M3, M3 Pro, and M3 Max chips. Up to 22 hours of
                                battery life. The world’s best laptop display. Now in a new color: Space Black.</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-secondary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card h-100">
                        <img src="src/img/macmini.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mac mini</h5>
                            <p class="card-text">Supercharged by the M2 or M2 Pro chip, Mac mini has a wide array of
                                ports and Wi-Fi 6E for a phenomenal desktop experience.</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-secondary">More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card h-100">
                        <img src="src/img/macbookair.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Macbook Air</h5>
                            <p class="card-text">MacBook Air is supercharged by M1 and M2 chips. Featuring FaceTime HD
                                camera, Touch ID, and vibrant Retina display.</p>
                            <a href="#" class="btn btn-primary">Buy</a>
                            <a href="#" class="btn btn-secondary">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- copyright -->
        <div class="p-1 text-center mt-5">
            <p>All rights reserved ©2023 Ivan Potiienko<br>All logos and photos is reserved by Apple Inc.</p>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>