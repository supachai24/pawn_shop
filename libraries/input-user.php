<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
    <div class="col-lg-4 col-md-6">
        <input type="text" name="fullname" id="fullname" class="form-control">
        <div class="invalid-fullname">
            -- กรุณากรอกชื่อ-นามสกุล --
        </div>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">ชื่อผู้ใช้ <span class="text-danger">*</span></label>
    <div class="col-lg-4 col-md-6">
        <input type="text" name="username" id="username" class="form-control">
        <div class="invalid-username">
            -- กรุณากรอกชื่อผู้ใช้ --
        </div>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">รหัสผู้ใช้ <span class="text-danger">*</span></label>
    <div class="col-lg-4 col-md-6">
        <input type="password" name="password" id="password" class="form-control">
        <div class="invalid-password">
            -- กรุณากรอกรหัสผู้ใช้ --
        </div>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">ยืนยันรหัสผู้ใช้ <span class="text-danger">*</span></label>
    <div class="col-lg-4 col-md-6">
        <input type="password" name="confirmPassword" id="confirmPassword" class="form-control">
        <div class="invalid-confirmPassword">
            -- กรุณากรอกยืนยันรหัสผู้ใช้ --
        </div>
        <div class="invalid-format-confirmPassword">
            -- ยืนยันรหัสผู้ใช้ไม่ถูกต้อง --
        </div>
    </div>
</div>
<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">สิทธิ <span class="text-danger">*</span></label>
    <div class="col-lg-4 col-md-6">
        <select name="access" id="access" class="form-control">
            <option value="0">-- เลือกสิทธิ --</option>
        </select>
        <div class="invalid-access">
            -- กรุณาเลือกสิทธิ --
        </div>
    </div>
</div>