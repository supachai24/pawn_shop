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
                        <h1>หมวดหมู่</h1>
                    </div>

                    <div class="section-body">
                        <div class="card card-primary">
                            <div class="card-header justify-content-between">
                                <div class="d-flex">
                                    <h4>แก้ไขข้อมูลหมวดหมู่ <span id="categoryName"></span></h4>
                                    <button type="button" id="btnDelete" class="btn btn-danger icon-left"><i class="far fa-trash-alt"></i> Delete</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-secondary icon-left" onClick="goBack()"><i class="far fa-arrow-alt-circle-left"></i> Back</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="submitCategory">
                                    <input type="hidden" id="categoryId">
                                    <?php include "../libraries/input-category.php" ?>
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

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/edit-category.js"></script>
</body>
</html>
