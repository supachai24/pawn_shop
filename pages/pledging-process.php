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
                        <h1>รับจำนำ</h1>
                    </div>

                    <div class="section-body">
                        
                        <!-- <h2 class="section-title">Wizard</h2>
                        <p class="section-lead">The wizard is a component to simplify a process with a step-by-step method.</p> -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h4>เพิ่มตั๋วรับจำนำ</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mt-4">
                                            <div class="col-12 col-lg-8 offset-lg-2">
                                                <div class="wizard-steps">
                                                    <div class="wizard-step step1 wizard-step-active">
                                                        <div class="wizard-step-icon">
                                                            <i class="far fa-user"></i>
                                                        </div>
                                                        <div class="wizard-step-label">
                                                            ข้อมูลลูกค้า
                                                        </div>
                                                    </div>
                                                    <div class="wizard-step step2">
                                                        <div class="wizard-step-icon">
                                                            <i class="fas fa-box-open"></i>
                                                        </div>
                                                        <div class="wizard-step-label">
                                                            ข้อมูลทรัพย์สิน
                                                        </div>
                                                    </div>
                                                    <div class="wizard-step step3">
                                                        <div class="wizard-step-icon">
                                                            <i class="fas fa-hand-holding-usd"></i>
                                                        </div>
                                                        <div class="wizard-step-label">
                                                            ข้อมูลรับจำนำ
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <form class="wizard-content mt-2" id="wizard-steps" role="tablist">
                                            <input type="hidden" id="customerId">
                                            <input type="hidden" id="pledgeTicketId">

                                            <!-- STEP 1 -->
                                            <div class="wizard-pane active" id="step1">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left"></label>
                                                    <div class="col-lg-4 col-md-6 text-md-right">
                                                        <button type="button" id="searchCustomer" class="btn btn-warning btn-icon icon-left"><i class="fas fa-search"></i> ค้นหา</button>
                                                    </div>
                                                </div>
                                                <?php include "../libraries/input-customer.php" ?>
                                                <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-6 text-right">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" class="btn btn-icon icon-right btn-primary next-step">Next <i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 2 -->
                                            <div class="wizard-pane" role="tabpanel" id="step2" style="display: none;">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ทรัพย์สิน <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="titleAsset" id="titleAsset" class="form-control">
                                                        <div class="invalid-titleAsset">
                                                            -- กรุณากรอกชื่อทรัพย์สิน --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">หมวดหมู่ <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <select name="category" id="category" class="form-control">
                                                            <option value="">เลือกหมวดหมู่</option>
                                                        </select>
                                                        <div class="invalid-category">
                                                            -- เลือกหมวดหมู่ --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ยี่ห้อ</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="brand" id="brand" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">Serial/Barcode <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="serialno" id="serialno" class="form-control">
                                                        <div class="invalid-serialno">
                                                            -- กรุณากรอกรหัสทรัพย์สิน --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">รุ่น</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="model" id="model" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">สี</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="color" id="color" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ขนาด</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="size" id="size" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">รายละเอียด</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <textarea class="form-control" name="description" id="description"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-6 text-right">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" class="btn btn-icon icon-right btn-secondary prev-step"><i class="fas fa-arrow-left"></i> Previous</a>
                                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" class="btn btn-icon icon-right btn-primary next-step">Next <i class="fas fa-arrow-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- STEP 3 -->
                                            <div class="wizard-pane" role="tabpanel" id="step3" style="display: none;">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ราคาทรัพย์สิน <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="price" id="price" class="form-control">
                                                        <div class="invalid-price">
                                                            -- กรุณากรอกราคาทรัพย์สิน --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ดอกเบี้ย</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="interestRate" id="interestRate" class="form-control" value="1.25">
                                                        <div class="invalid-interestRate">
                                                            -- กรุณากรอกดอกเบี้ย --
                                                        </div>
                                                        <div class="invalid-format-interestRate">
                                                            -- กรุณากรอกทศนิยมอย่างน้อย 2 ตำแหน่ง --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ราคารวมดอกเบี้ย</label>
                                                        <div class="col-lg-4 col-md-6">
                                                            <input type="number" name="totalPrice" id="totalPrice" class="form-control" readonly>
                                                        </div>
                                                </div>
                                                <input type="hidden" id="interestPeriod" value="30">
                                                <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-6 text-right">
                                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" class="btn btn-icon icon-right btn-secondary prev-step"><i class="fas fa-arrow-left"></i> Previous</a>
                                                        <button type="submit" class="btn btn-icon icon-right btn-success">Submit <i class="far fa-check-circle"></i></button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>

    <!-- Modal -->
    <div class="modal fade" id="customerModal" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animated fadeInUp">
                <div class="modal-header">
                    <h5 class="modal-title">ค้นหาข้อมูลลูกค้า</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="customerTable" class="table table-striped table-md">
                            <thead>
                                <tr>
                                    <th width="5%">ลำดับ</th>
                                    <th width="30%">รหัสลูกค้า</th>
                                    <th width="30%">ชื่อ-นามสกุล</th>
                                    <th width="30%">เลขบัตรประชาชน</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            
    <!-- Footer -->
    <?php include '../libraries/footer.php'; ?>

    <!-- JS Libraies -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/select.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/select.bootstrap4.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/pledging-process.js"></script>
    
    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
