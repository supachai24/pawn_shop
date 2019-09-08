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

    <!-- Modal -->
    <div class="modal fade" id="pledgeTicketModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content animated fadeInUp">
                <div class="modal-header">
                    <h5 class="modal-title">รายละเอียดตั๋วจำนำ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4>รายละเอียด</h4>
                                </div>
                                <div class="card-body">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-pledge-ticker-tab" data-toggle="pill" href="#v-pills-pledge-ticker" role="tab" aria-controls="v-pills-pledge-ticker" aria-selected="true">รายละเอียดตั๋วจำนำ</a>
                                        <a class="nav-link" id="v-pills-asset-tab" data-toggle="pill" href="#v-pills-asset" role="tab" aria-controls="v-pills-asset" aria-selected="false">รายละเอียดทรัพย์สิน</a>
                                        <a class="nav-link" id="v-pills-continue-rate-tab" data-toggle="pill" href="#v-pills-continue-rate" role="tab" aria-controls="v-pills-continue-rate" aria-selected="false">รายละเอียดต่อดอกเบี้ย</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-pledge-ticker" role="tabpanel" aria-labelledby="v-pills-pledge-ticker-tab">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4>รายละเอียดตั๋วจำนำ</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row mb-4">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">ตั๋วรับจำนำ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="pledgeTicketID"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">ราคารับจำนำ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="price"></span><span>&nbsp;</span><span>บาท</span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">อัตราดอกเบี้ย : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="interestRate"></span><span>&nbsp;</span><span>บาท</span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">วันที่จำนำ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="pledgeStartDate"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">วันที่ครบกำหนด : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="pledgeEndDate"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">จำนวนเงินไถ่ถอน : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="redeemPrice"></span><span>&nbsp;</span><span>บาท</span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">สถานะ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="pledgeStatus"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-asset" role="tabpanel" aria-labelledby="v-pills-asset-tab">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4>รายละเอียดทรัพย์สิน</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group row mb-4">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">รหัสทรัพย์สิน : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="assetID"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">ทรัพย์สิน : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="titleAsset"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">หมวดหมู่ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="category"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">ยี่ห้อ : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="brand"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">รุ่น : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="model"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">สี : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="color"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">ขนาด : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="size"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-6">
                                                <span class="text-md-right col-12 col-md-6 col-lg-6">รายละเอีด : </span>
                                                <div class="col-sm-12 col-md-6">
                                                    <span id="description"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-continue-rate" role="tabpanel" aria-labelledby="v-pills-continue-rate-tab">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h4>รายละเอียดต่อดอกเบี้ย</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="continueRateTable" class="table table-striped table-md">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">ครั้งที่</th>
                                                            <th width="50%">จำนวนเงิน</th>
                                                            <th width="40%">วันที่/เวลา ต่อดอกเบี้ย</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
