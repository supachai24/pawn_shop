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
                                            <!-- STEP 1 -->
                                            <div class="wizard-pane active" id="step1">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left"></label>
                                                    <div class="col-lg-4 col-md-6 text-md-right">
                                                        <button type="button" class="btn btn-warning btn-icon icon-left"><i class="fas fa-search"></i> ค้นหา</button>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">คำนำหน้า</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <select name="title" id="" class="form-control">
                                                            <option value="นาย">นาย</option>
                                                            <option value="นาง">นาง</option>
                                                            <option value="นางสาว">นางสาว</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ชื่อ <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="name" id="name" class="form-control">
                                                        <div class="invalid-name">
                                                            -- กรุณากรอกชื่อ --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">นามสกุล <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="surname" id="surname" class="form-control">
                                                        <div class="invalid-surname">
                                                            -- กรุณากรอกนามสกุล --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">เลขบัตรประชาชน <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="citizenId" id="citizenId" class="form-control">
                                                        <div class="invalid-citizenId">
                                                            -- กรุณากรอกเลขบัตรประชาชน --
                                                        </div>
                                                        <div class="invalid-format-citizenId">
                                                            -- กรุณากรอกเลขบัตรประชาชน 13 หลัก --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 text-md-right text-left mt-2">ที่อยู่ <span class="text-danger">*</span></label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <textarea class="form-control" name="address" id="address"></textarea>
                                                        <div class="invalid-address">
                                                            -- กรุณากรอกที่อยู่ --
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 text-md-right text-left mt-2">เบอร์โทรศัพท์</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="phone" id="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">อีเมล์</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="email" name="email" id="email" class="form-control">
                                                    </div>
                                                </div>
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
                                                        <input type="number" name="price" id="price" class="form-control">
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
            
    <!-- Footer -->
    <?php include '../libraries/footer.php'; ?>

    <!-- JS Libraies -->
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-mask-plugin@1.14.16/dist/jquery.mask.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/pledging-process.js"></script>
    
    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
