<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>6S Checksheet Digitization</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.min.css'); ?>" />
    <!-- font awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/6s_checksheet_no_bg.png'); ?>" type="image/x-icon">

    <!-- select2 -->
    <link rel="stylesheet" href="<?= base_url('assets/css/select2.min.css'); ?>">

    <!-- data table -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.css">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/dataTables.bootstrap5.css'); ?>> -->

    <!-- izitoast -->
    <link rel="stylesheet" href="iziToast.min.css">
    <script src="iziToast.min.js" type="text/javascript"></script>


</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="offcanvas-lg offcanvas-start" id="sidebar">
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="#" class="text-nowrap logo-img">
                        <img src="<?= base_url('assets/images/6s_checksheet_no_bg.png'); ?>" alt="" class="img-fluid w-25" />
                    </a>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">Home</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('/dashboard'); ?>" aria-expanded="false">
                                <span>
                                    <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                                </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                            <span class="hide-menu">PAGES</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('checklist'); ?>" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M22 7h-9v2h9zm0 8h-9v2h9zM5.54 11L2 7.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41zm0 8L2 15.46l1.41-1.41l2.12 2.12l4.24-4.24l1.41 1.41z" />
                                    </svg>
                                </span>
                                <span class="hide-menu">Checklist</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('checksheet'); ?>" aria-expanded="false">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M3 10h11v2H3zm0-4h11v2H3zm0 8h7v2H3zm17.59-2.07l-4.25 4.24l-2.12-2.12l-1.41 1.41L16.34 19L22 13.34z" />
                                    </svg>
                                </span>
                                <span class="hide-menu">Checksheet Data</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="<?= base_url('maintenance'); ?>">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46a.5.5 0 0 0-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65A.49.49 0 0 0 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1a.6.6 0 0 0-.18-.03c-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46a.5.5 0 0 0 .61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1q.09.03.18.03c.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64zm-1.98-1.71c.04.31.05.52.05.73s-.02.43-.05.73l-.14 1.13l.89.7l1.08.84l-.7 1.21l-1.27-.51l-1.04-.42l-.9.68c-.43.32-.84.56-1.25.73l-1.06.43l-.16 1.13l-.2 1.35h-1.4l-.19-1.35l-.16-1.13l-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7l-1.06.43l-1.27.51l-.7-1.21l1.08-.84l.89-.7l-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13l-.89-.7l-1.08-.84l.7-1.21l1.27.51l1.04.42l.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43l.16-1.13l.2-1.35h1.39l.19 1.35l.16 1.13l1.06.43c.43.18.83.41 1.23.71l.91.7l1.06-.43l1.27-.51l.7 1.21l-1.07.85l-.89.7zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4m0 6c-1.1 0-2-.9-2-2s.9-2 2-2s2 .9 2 2s-.9 2-2 2" />
                                    </svg>
                                </span>
                                <span class="hide-menu">Maintenance</span>
                            </a>
                            <!-- <div class="collapse p-3" id="collapseExample">
                                <ul class="navbar-nav">
                                    <li class="sidebar-item">
                                        <a href="#" class="nav-link">&bull; Areas</a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="#" class="nav-link">&bull; Buildings</a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="#" class="nav-link">&bull; Findings</a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="#" class="nav-link">&bull; Items</a>
                                    </li>

                                    <li class="sidebar-item">
                                        <a href="#" class="nav-link">&bull; Users</a>
                                    </li>
                                </ul>
                            </div> -->
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- sidebar trigger -->
                    <button class="btn btn-light d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </button>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11.99 2c-5.52 0-10 4.48-10 10s4.48 10 10 10s10-4.48 10-10s-4.48-10-10-10m3.61 6.34c1.07 0 1.93.86 1.93 1.93s-.86 1.93-1.93 1.93s-1.93-.86-1.93-1.93c-.01-1.07.86-1.93 1.93-1.93m-6-1.58c1.3 0 2.36 1.06 2.36 2.36s-1.06 2.36-2.36 2.36s-2.36-1.06-2.36-2.36c0-1.31 1.05-2.36 2.36-2.36m0 9.13v3.75c-2.4-.75-4.3-2.6-5.14-4.96c1.05-1.12 3.67-1.69 5.14-1.69c.53 0 1.2.08 1.9.22c-1.64.87-1.9 2.02-1.9 2.68M11.99 20c-.27 0-.53-.01-.79-.04v-4.07c0-1.42 2.94-2.13 4.4-2.13c1.07 0 2.92.39 3.84 1.15c-1.17 2.97-4.06 5.09-7.45 5.09" />
                                    </svg> Hi, <?= session()->get('fcempfname'); ?> <?= session()->get('fcemplname'); ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m1 15h-2v-6h2zm0-8h-2V7h2z" />
                                            </svg>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="<?= base_url('/'); ?>" class="btn btn-outline-danger mx-3 mt-2 d-block" type="submit">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <main class="container-fluid">
                <?= $this->renderSection('content'); ?>
                <!-- <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex align-items-center gap-2 mb-4">
                                    Traffic Overview
                                    <span>
                                        <iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="Traffic Overview"></iconify-icon>
                                    </span>
                                </h5>
                                <div id="traffic-overview">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="../assets/images/backgrounds/product-tip.png" alt="image" class="img-fluid" width="205">
                                <h4 class="mt-7">Productivity Tips!</h4>
                                <p class="card-subtitle mt-2 mb-3">Duis at orci justo nulla in libero id leo
                                    molestie sodales phasellus justo.</p>
                                <button class="btn btn-primary mb-3">View All Tips</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">View by page title and screen class</h5>
                                <div class="table-responsive">
                                    <table class="table text-nowrap align-middle mb-0">
                                        <thead>
                                            <tr class="border-2 border-bottom border-primary border-0">
                                                <th scope="col" class="ps-0">Page Title</th>
                                                <th scope="col">Link</th>
                                                <th scope="col" class="text-center">Pageviews</th>
                                                <th scope="col" class="text-center">Page Value</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr>
                                                <th scope="row" class="ps-0 fw-medium">
                                                    <span class="table-link1 text-truncate d-block">Welcome to our
                                                        website</span>
                                                </th>
                                                <td>
                                                    <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/index.html</a>
                                                </td>
                                                <td class="text-center fw-medium">18,456</td>
                                                <td class="text-center fw-medium">$2.40</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-0 fw-medium">
                                                    <span class="table-link1 text-truncate d-block">Modern Admin
                                                        Dashboard Template</span>
                                                </th>
                                                <td>
                                                    <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/dashboard</a>
                                                </td>
                                                <td class="text-center fw-medium">17,452</td>
                                                <td class="text-center fw-medium">$0.97</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-0 fw-medium">
                                                    <span class="table-link1 text-truncate d-block">Explore our
                                                        product catalog</span>
                                                </th>
                                                <td>
                                                    <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/product-checkout</a>
                                                </td>
                                                <td class="text-center fw-medium">12,180</td>
                                                <td class="text-center fw-medium">$7,50</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-0 fw-medium">
                                                    <span class="table-link1 text-truncate d-block">Comprehensive
                                                        User Guide</span>
                                                </th>
                                                <td>
                                                    <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/docs</a>
                                                </td>
                                                <td class="text-center fw-medium">800</td>
                                                <td class="text-center fw-medium">$5,50</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-0 fw-medium border-0">
                                                    <span class="table-link1 text-truncate d-block">Check out our
                                                        services</span>
                                                </th>
                                                <td class="border-0">
                                                    <a href="javascript:void(0)" class="link-primary text-dark fw-medium d-block">/services</a>
                                                </td>
                                                <td class="text-center fw-medium border-0">1300</td>
                                                <td class="text-center fw-medium border-0">$2,15</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title d-flex align-items-center gap-2 mb-5 pb-3">Sessions by
                                    device<span><iconify-icon icon="solar:question-circle-bold" class="fs-7 d-flex text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="tooltip-success" data-bs-title="Locations"></iconify-icon></span>
                                </h5>
                                <div class="row">
                                    <div class="col-4">
                                        <iconify-icon icon="solar:laptop-minimalistic-line-duotone" class="fs-7 d-flex text-primary"></iconify-icon>
                                        <span class="fs-11 mt-2 d-block text-nowrap">Computers</span>
                                        <h4 class="mb-0 mt-1">87%</h4>
                                    </div>
                                    <div class="col-4">
                                        <iconify-icon icon="solar:smartphone-line-duotone" class="fs-7 d-flex text-secondary"></iconify-icon>
                                        <span class="fs-11 mt-2 d-block text-nowrap">Smartphone</span>
                                        <h4 class="mb-0 mt-1">9.2%</h4>
                                    </div>
                                    <div class="col-4">
                                        <iconify-icon icon="solar:tablet-line-duotone" class="fs-7 d-flex text-success"></iconify-icon>
                                        <span class="fs-11 mt-2 d-block text-nowrap">Tablets</span>
                                        <h4 class="mb-0 mt-1">3.1%</h4>
                                    </div>
                                </div>

                                <div class="vstack gap-4 mt-7 pt-2">
                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Computers</span>
                                            <h6 class="fs-3 fw-medium text-dark lh-base mb-0">87%</h6>
                                        </div>
                                        <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 100%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Smartphones</span>
                                            <h6 class="fs-3 fw-medium text-dark lh-base mb-0">9.2%</h6>
                                        </div>
                                        <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-secondary" style="width: 50%"></div>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="hstack justify-content-between">
                                            <span class="fs-3 fw-medium">Tablets</span>
                                            <h6 class="fs-3 fw-medium text-dark lh-base mb-0">3.1%</h6>
                                        </div>
                                        <div class="progress mt-6" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 35%"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="../assets/images/blog/blog-img1.jpg" class="card-img-top" alt="matdash-img">
                                </a>
                                <span class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                                    min Read</span>
                                <img src="../assets/images/profile/user-3.jpg" alt="matdash-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="card-body p-4">
                                <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Social</span>
                                <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">As yen tumbles, gadget-loving
                                    Japan goes
                                    for secondhand iPhones</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-eye text-dark fs-5"></i>9,125
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>3
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Mon, Dec 19
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="../assets/images/blog/blog-img2.jpg" class="card-img-top" alt="matdash-img">
                                </a>
                                <span class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                                    min Read</span>
                                <img src="../assets/images/profile/user-2.jpg" alt="matdash-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="card-body p-4">
                                <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Gadget</span>
                                <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">Intel loses bid to revive
                                    antitrust case
                                    against patent foe Fortress</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-eye text-dark fs-5"></i>4,150
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>38
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Sun, Dec 18
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card overflow-hidden hover-img">
                            <div class="position-relative">
                                <a href="javascript:void(0)">
                                    <img src="../assets/images/blog/blog-img3.jpg" class="card-img-top" alt="matdash-img">
                                </a>
                                <span class="badge text-bg-light text-dark fs-2 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                                    min Read</span>
                                <img src="../assets/images/profile/user-3.jpg" alt="matdash-img" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Georgeanna Ramero">
                            </div>
                            <div class="card-body p-4">
                                <span class="badge text-bg-light fs-2 py-1 px-2 lh-sm  mt-3">Health</span>
                                <a class="d-block my-4 fs-5 text-dark fw-semibold link-primary" href="">COVID outbreak deepens as more
                                    lockdowns
                                    loom in China</a>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-eye text-dark fs-5"></i>9,480
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="ti ti-message-2 text-dark fs-5"></i>12
                                    </div>
                                    <div class="d-flex align-items-center fs-2 ms-auto">
                                        <i class="ti ti-point text-dark"></i>Sat, Dec 17
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 px-6 text-center">
                        <p class="mb-0 fs-4">Design and Developed by <a href="https://adminmart.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">AdminMart.com</a>Distributed by <a href="https://themewagon.com/" target="_blank"
                                class="pe-1 text-primary text-decoration-underline">ThemeWagon</a></p>
                    </div>
                </div> -->
            </main>

            <footer class="p-3">
                <div class="container text-center">
                    <p>
                        @ <?= date('Y'); ?> |
                        <a href="https://www.nidec.com/en/corporate/network/factory/philippines_p/">
                            Nidec Philippines Corporation.
                        </a>
                    </p>
                </div>
            </footer>
        </div>
        <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/apexcharts/dist/apexcharts.min.js'); ?>"></script>
        <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
        <script src="<?= base_url('assets/js/sidebarmenu.js'); ?>"></script>
        <script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
        <script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
        <script src="<?= base_url('assets/js/dataTables.js'); ?>"></script>
        <script src="<?= base_url('assets/js/dataTables.bootstrap5.js'); ?>"></script>

        <?= $this->renderSection('maintenance_js'); ?>
        <?= $this->renderSection('checklist_js'); ?>


</body>

</html>