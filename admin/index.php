<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/eafcaa75eb.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../src/img/apple.png">
</head>

<body>
    <!-- container -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Apple Shop Admin panel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Logout</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        Wassup Ivan
                    </span>
                </div>
            </div>
        </nav>

        <div class="container-fluid pt-5">
            <div class="row button text-center pt-3 gy-2 gx-1">
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href="index.php?add_product"
                            class="nav-link text-light">Add product</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href="index.php?add_category"
                            class="nav-link text-light">Add category</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href=""
                            class="nav-link text-light">Users</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href="" class="nav-link text-light">All
                            products</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href="" class="nav-link text-light">All
                            categories</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href=""
                            class="nav-link text-light">Orders</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-primary w-100 h-100"><a href=""
                            class="nav-link text-light">Payments</a></button>
                </div>
                <div class="col">
                    <button class="btn btn-danger w-100 h-100"><a href="../phpmyadmin"
                            class="nav-link text-light">PHPMyAdmin</a></button>
                </div>
            </div>
        </div>

    </div>

    <!-- forms -->
    <div class="container w-100">
        <?php
        if (isset($_GET['add_category'])) {
            include('add_category.php');
        } elseif (isset($_GET['add_product'])) {
            include('add_product.php');
        }
        ?>
    </div>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>