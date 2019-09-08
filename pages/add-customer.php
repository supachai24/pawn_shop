<!-- Session -->
<?php include '../libraries/session.php'; ?>

<!-- Header -->
<?php include '../libraries/header.php'; ?>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- Navbar -->
            <?php include '../libraries/navbar.php'; ?>

            <!-- Sidebar -->
            <?php include '../libraries/sidebar.php'; ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>รายละเอียดลูกค้า</h1>
                    </div>

                    <div class="section-body">
                        <div class="card card-primary">
                            <div class="card-header d-flex justify-content-between">
                                <h4>เพิ่มข้อมูลลูกค้า</h4>
                                <button type="button" class="btn btn-secondary icon-left" onClick="goBack()"><i class="far fa-arrow-alt-circle-left"></i> Back</button>
                            </div>
                            <div class="card-body">
                                <form id="submitCustomer">
                                    <?php include "../libraries/input-customer.php" ?>
                                    <div class="form-group row">
                                        <div class="col-md-4"></div>
                                        <div class="col-lg-4 col-md-6 text-right">
                                            <button type="submit" class="btn btn-success btn-icon icon-right">Submit <i class="far fa-check-circle"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
    <!-- Footer -->
    <?php include '../libraries/footer.php'; ?>

    <!-- JS Libraies -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/add-customer.js"></script>
</body>
</html>
