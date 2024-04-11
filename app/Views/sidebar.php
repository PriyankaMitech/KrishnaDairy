<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
    <title>
        Krushna Dairy
    </title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="public/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="public/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="public/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/css/inventry.css">
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-+T0N9zGSux6fE4P9plQ9vZdo23UyJYzdJX7g0BkyKdTLtjENii+g2d8KrSfTYnm/" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+nq+toPnvG5ZBh/Q7Witfsy2JT2rGM9hXUiREwE" crossorigin="anonymous">
    </script>
   

</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="">
                <img src="public/assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Krushna Dairy</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('dashboard'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('view_inventory_dairy'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dairy Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('view_inventory_non_dairy'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Non-Dairy Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('view_product'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Product</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="#">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Customer</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  dropdown-toggle" href="<?php echo base_url('view_inventory'); ?>"
                        id="inventoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">inventory</i>
                        </div>
                        <span class="nav-link-text ms-1">Masters</span>
                    </a>
                    <ul class="dropdown-menu bg-gradient-dark text-white " aria-labelledby="inventoryDropdown">
                        <li><a class="dropdown-item text-white text-center me-2 d-flex align-items-center justify-content-left "
                                href="<?php echo base_url('view_product_master'); ?>">Product master</a></li>
                        <li><a class="dropdown-item text-white text-center me-2 d-flex align-items-center justify-content-left"
                                href="<?php echo base_url('view_vendor'); ?>">Vendor master</a></li>

                    </ul>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link text-white " href="<?php echo base_url('view_reports'); ?>">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Reports</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>