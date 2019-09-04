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
                        <h1>รายการตั๋วจำนำ</h1>
                    </div>

                    <div class="section-body">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pledgeTable" class="table table-striped table-md">
                                        <thead>
                                            <tr>
                                                <th width="5%">ลำดับ</th>
                                                <th width="13%">ตั๋วรับจำนำ</th>
                                                <th width="17%">วันที่จำนำ</th>
                                                <th width="15%">ลูกค้า</th>
                                                <th width="12%">เบอร์โทรศัพท์</th>
                                                <th width="16%">วันที่ครบกำหนด</th>
                                                <th width="10%">เหลืออีก(วัน)</th>
                                                <th width="12%"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Footer -->
            <?php include '../libraries/footer.php'; ?>

    <!-- JS Libraies -->
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/select.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/select.bootstrap4.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/index.js"></script>
</body>
</html>
