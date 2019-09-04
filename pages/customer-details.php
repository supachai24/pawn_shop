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
                            <div class="card-header justify-content-between">
                                <div class="d-flex">
                                    <h4>ข้อมูลค้า <span id="customerName"></span></h4>
                                    <button type="button" id="btnDelete" class="btn btn-danger icon-left"><i class="far fa-trash-alt"></i> Delete</button>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-secondary icon-left" onClick="goBack()"><i class="far fa-arrow-alt-circle-left"></i> Back</button>
                                    <button type="button" id="btnEdit" class="btn btn-warning icon-left"><i class="far fa-edit"></i> Edit</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row py-2">
                                    <div class="col-lg-2">รหัสลูกค้า</div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-9"><span id="customerId"></span></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-2">เลขบัตรประชาชร</div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-9"><span id="citizenId"></span></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-2">ที่อยู่</div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-9"><span id="address"></span></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-2">เบอร์โทรศัพท์</div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-9"><span id="phone"></span></div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-2">อีเมล์</div>
                                    <div class="col-lg-1">:</div>
                                    <div class="col-lg-9"><span id="email"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>ประวัติรับจำนำ</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="pledgeTable" class="table table-striped table-md">
                                        <thead>
                                            <tr>
                                                <th width="5%">ลำดับ</th>
                                                <th width="15%">ตั๋วรับจำนำ</th>
                                                <th width="20%">ทรัพย์สิน</th>
                                                <th width="12%">ราคารับจำนำ</th>
                                                <th width="12%">ราคาไถถ่อน</th>
                                                <th width="16%">วันที่จำนำ</th>
                                                <th width="7%">สถานะ</th>
                                                <th width="13%"></th>
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
    <script src="../assets/js/page/customer-details.js"></script>
</body>
</html>
