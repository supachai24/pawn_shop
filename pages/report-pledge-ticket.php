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
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label for="">วันรับจำนำเริ่มต้น</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control datepicker" id="startDate" name="startDate">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label for="">วันรับจำนำสิ้นสุด</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control datepicker" id="endDate" name="endDate">
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <label for="">หมวดหมู่</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="0">ทั้งหมด</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3">
                                            <label for="">สถานะ</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="ทั้งหมด">ทั้งหมดยกเว้นยกเลิก</option>
                                                <option value="จำนำ">จำนำ</option>
                                                <option value="ไถ่ถอน">ไถ่ถอน</option>
                                                <option value="ยกเลิก">ยกเลิก</option>
                                                <option value="ทั้งหมด">ทั้งหมด</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="text-right mt-4">
                                        <button type="button" id="btnSearch" class="btn btn-warning btn-icon icon-left"><i class="fas fa-search"></i> ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="reportPledgeTable" class="table table-striped table-md">
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
    <script src="../assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="../assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/th.js"></script>

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/report-pledge-ticket.js"></script>
</body>
</html>
