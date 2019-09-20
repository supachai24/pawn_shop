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
                        <h1>รายละเอียดตั๋วจำนำ</h1>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>รายละเอียด</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" id="v-pills-pledge-ticker-tab" data-toggle="pill" href="#v-pills-pledge-ticker" role="tab" aria-controls="v-pills-pledge-ticker" aria-selected="true">รายละเอียดตั๋วจำนำ</a>
                                            <a class="nav-link" id="v-pills-customer-tab" data-toggle="pill" href="#v-pills-customer" role="tab" aria-controls="v-pills-customer" aria-selected="false">รายละเอียดลูกค้า</a>
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

                                    <div class="tab-pane fade" id="v-pills-customer" role="tabpanel" aria-labelledby="v-pills-customer-tab">
                                         <div class="card card-primary">
                                            <div class="card-header">
                                                <h4>รายละเอียดลูกค้า</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group row mb-4">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">รหัสลูกค้า : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="customerID"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-6">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">เลขที่บัตรประชาชน : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="citizenID"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-6">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">ชื่อ-นามสกุล : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="customerName"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-6">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">ที่อยู่ : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="currentAddress"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-6">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">เบอร์โทรศัพท์ : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="phone"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-6">
                                                    <span class="text-md-right col-12 col-md-6 col-lg-6">อีเมล์ : </span>
                                                    <div class="col-sm-12 col-md-6">
                                                        <span id="email"></span>
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
                                <div class="text-right">
                                    <button type="button" id="btnRedeem" class="btn btn-primary m-2">ไถ่ถอน</button>
                                    <button type="button" id="btnContinueRate" class="btn btn-warning">ต่อดอกเบี้ย</button>
                                    <button <?= $_SESSION["access"] != "Admin" ? "style='display:none;'" : "style='display:inline-block;'" ?> type="button" id="btnCancel" class="btn btn-danger m-2">ยกเลิก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="continueRateModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInUp">
                        <div class="modal-header">
                            <h5 class="modal-title">ต่อดอกเบี้ย <span id="modalPledgeTicketID"></span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row mb-6">
                                <span class="text-md-right col-12 col-md-6 col-lg-6">ราคารับจำนำ : </span>
                                <div class="col-sm-12 col-md-6">
                                    <span id="modalPrice"></span><span>&nbsp;</span><span>บาท</span>
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <span class="text-md-right col-12 col-md-6 col-lg-6">อัตราดอกเบี้ย : </span>
                                <div class="col-sm-12 col-md-6">
                                    <span id="modalInterestRate"></span><span>&nbsp;</span><span>บาท</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <span class="text-md-right col-12 col-md-6 col-lg-6">ดอกเบี้ย : </span>
                                <div class="col-sm-12 col-md-6">
                                    <span id="priceRate"></span><span>&nbsp;</span><span>บาท</span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="btnConfirm" class="btn btn-success">Submit</button>
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
    <script src="../assets/js/page/pledge-ticket-details.js"></script>
</body>
</html>
