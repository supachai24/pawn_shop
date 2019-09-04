<div class="form-group row align-items-center">
    <label class="col-md-4 text-md-right text-left">คำนำหน้า</label>
    <div class="col-lg-4 col-md-6">
        <select name="title" id="title" class="form-control">
            <option value="0">-- เลือกคำนำหน้า --</option>
            <option value="นาย">นาย</option>
            <option value="นาง">นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select>
        <div class="invalid-title">
            -- กรุณากรอกชื่อ --
        </div>
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