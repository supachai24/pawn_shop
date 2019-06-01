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
                                <div class="card">
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
                                                            <h6>ข้อมูลลูกค้า</h6> 
                                                        </div>
                                                    </div>
                                                    <div class="wizard-step step2">
                                                        <div class="wizard-step-icon">
                                                            <i class="fas fa-box-open"></i>
                                                        </div>
                                                        <div class="wizard-step-label">
                                                            <h6>ข้อมูลทรัพย์สิน</h6> 
                                                        </div>
                                                    </div>
                                                    <!-- <div class="wizard-step step3">
                                                        <div class="wizard-step-icon">
                                                            <i class="fas fa-server"></i>
                                                        </div>
                                                        <div class="wizard-step-label">
                                                            Server Information
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>

                                        <form class="wizard-content mt-2" id="wizard-steps" role="tablist">
                                            <!-- STEP 1 -->
                                            <div class="wizard-pane active" id="step1">
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ค้นหาลูกกค้า</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="searchCustomer" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left"></label>
                                                    <div class="col-lg-4 col-md-6 text-md-right">
                                                        <button type="button" class="btn btn-warning btn-icon icon-left"><i class="fas fa-user-plus"></i> เพิ่มลูกค้า</button>
                                                        <button type="button" class="btn btn-primary btn-icon icon-left"><i class="fas fa-search"></i> ค้นหา</button>
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
                                                    <label class="col-md-4 text-md-right text-left">ชื่อ</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="name" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">นามสกุล</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="surname" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 text-md-right text-left mt-2">ที่อยู่</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <textarea class="form-control" name="address"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-md-4 text-md-right text-left mt-2">เบอร์โทรศัพท์</label>
                                                    <div class="col-lg-4 col-md-6">
                                                    <input type="text" name="phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">อีเมล์</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group row">
                                                    <label class="col-md-4 text-md-right text-left mt-2">Role</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="selectgroup w-100">
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="developer" class="selectgroup-input">
                                                            <span class="selectgroup-button">Developer</span>
                                                        </label>
                                                        <label class="selectgroup-item">
                                                            <input type="radio" name="value" value="ceo" class="selectgroup-input">
                                                            <span class="selectgroup-button">CEO</span>
                                                        </label>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <!-- <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                                        </div>
                                                    </div>
                                                </div> -->
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
                                                    <label class="col-md-4 text-md-right text-left">ประเภทหลัก</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <select name="category" id="" class="form-control">
                                                            <option value="">เลือกประเภทหลัก</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ประเภทย่อย</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <select name="sub-category" id="" class="form-control">
                                                            <option value="">เลือกประเภทย่อย</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ยี่ห้อ</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="brand" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">รุ่น</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="model" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">สี</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="color" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ขนาด</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <input type="text" name="size" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label class="col-md-4 text-md-right text-left">ขนาด</label>
                                                    <div class="col-lg-4 col-md-6">
                                                        <textarea class="form-control" name="size"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-lg-4 col-md-6 text-right">
                                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" class="btn btn-icon icon-right btn-primary prev-step"><i class="fas fa-arrow-left"></i> Previous</a>
                                                        <a href="#step2" data-toggle="tab" aria-controls="step3" role="tab" class="btn btn-icon icon-right btn-primary next-step">Submit <i class="far fa-check-circle"></i></a>
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

    <!-- Page Specific JS File -->
    <script src="../assets/js/page/pledging-process.js"></script>
    
    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>
</body>
</html>
