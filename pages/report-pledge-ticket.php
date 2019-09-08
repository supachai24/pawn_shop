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
                        <h1>รายงานตั๋วจำนำ</h1>
                    </div>

                    <div class="section-body">
                        <div class="card card-primary">
                            <div class="card-header">
                                <div class="card-body">
                                    <div class="row">
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pledgeTable" class="table table-striped table-md">
                                        <thead>
                                            <tr>
                                                <th width="5%">ลำดับ</th>
                                                <th width="15%">ตั๋วรับจำนำ</th>
                                                <th width="20%">ทรัพย์สิน</th>
                                                <th width="15%">หมวดหมู่</th>
                                                <th width="15%">ราคารับจำนำ</th>
                                                <th width="15%">ราคาไถ่ถอน</th>
                                                <th width="15%">สถานะ</th>
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
    <script src="../assets/js/page/report-pledge-ticket.js"></script>
</body>
</html>
