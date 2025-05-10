<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>6S Checksheet Digitization</title>
    <link rel="stylesheet" href="<?= base_url('node_modules/simplebar/dist/simplebar.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.min.css'); ?>" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/6s_checksheet_no_bg.png'); ?>" type="image/x-icon">
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="<?= base_url('assets/images/6s_checksheet_no_bg.png'); ?>" alt="" width="100px">
                                </a>
                                <form method="POST" action="<?= base_url('login'); ?>">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" class="form-control" name="username" placeholder="" id="username" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="" id="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 align-items-center d-flex justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M11 7L9.6 8.4l2.6 2.6H2v2h10.2l-2.6 2.6L11 17l5-5zm9 12h-8v2h8c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-8v2h8z" />
                                        </svg>&nbsp;Sign In
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
    <script src="<?= base_url('assets/js/sidebarmenu.js'); ?>"></script>
    <script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>