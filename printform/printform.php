<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pledge Ticket</title>

    <!-- Paper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    @page { size: A5 }

    body {
        font-family: "sarabun";
        width: 100%;
    }

    .header-container {
        text-align: center;
        font-size: 14px;
    }

    .header-container p {
        margin: 0;
    }

    .contents {
        font-size: 14px;
    }

    .footer {
        font-size: 14px;
    }

    @media print {
        body.A3.landscape          { width: 420mm }
        body.A3, body.A4.landscape { width: 297mm }
        body.A4, body.A5.landscape { width: 210mm }
        body.A5                    { width: 148mm }
        body.letter, body.legal    { width: 216mm }
        body.letter.landscape      { width: 280mm }
        body.legal.landscape       { width: 357mm }
    }

</style>
</head>
<body class="A5">
    <section class="sheet padding-10mm">
        <div class="col-12">
            <div class="row justify-content-center">
                <article class="header-container">
                    <h4 class="my-3">มนตรี เซ็นเตอร์ 2</h4>
                    <p>รับฝาก เครื่องใช้ไฟฟ้า - จำหน่ายสินค้าหลุดจำนำคุณภาพดี</p>
                    <p>47/31-32 หมู่ 2 ซอยนิคมฯ 15 (ติดโค้งต้นโพธิ์) ต.ท่าทราย อ.เมือง จังหวัดสมุทรสาคร</p>
                    <p>เปิดบริการทุกวัน 09:00 - 21:00 น. โทรศัพท์ 034-462240</p>
                </article>
            </div>
            <div class="contents my-5">
                <div class="text-center">
                    <h5><u>สัญญารับซื้อ</u></h5>
                </div>
                <div class="row justify-content-end">
                    <p>เลขที่ตั๋วรับจำนำ <span id="pledgeTicketId"></span></p>
                </div>
                <div class="row justify-content-end">
                    <p>วันที่ <span id="date">xx</span> เดือน <span id="month">xxxxxxxxx</span> พ.ศ. <span id="ba">xxxx</span></p>
                </div>
                <div>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สัญญานี้ทำระหว่าง <b>มนตรี เซ็นเตอร์ 2</b> ซึ่งต่อไปนี้เรียกว่า "ผู้ซื้อฝาก" กับ <span id="customerName"></span> 
                    ที่อยู่ <span id="address"></span> ถือบัตรประชาชนเลขที่ <span id="citizenId"></span> 
                    ซึ่งต่อไปนี้ในสัญญาจะเรียกว่า "ผู้ฝากขาย" ผู้ฝากขาย ตกลงขายฝาก <span id="asset"></span> 
                    ในราคา <span id="price"></span> บาท แก้ผู้ซื้อฝาก ซึ่งมีกำหนดระยะเวลา <b>หนึ่งเดือน</b> นับแต่วันที่ทำสัญญานี้
                </div>
            </div>
            <div class="footer">
                <div class="col-10 offset-2">
                    <p>ลงชื่อ....................................... (ผู้ขายฝาก)</p>
                    <p>ลงชื่อ....................................... (ผู้รับซื้อฝาก)</p>
                    <p>ลงชื่อ....................................... (พยาน)</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="../assets/modules/store-js/store.legacy.min.js"></script>
    <script src="../assets/js/custom.js"></script>
    <script src="./printform.js"></script>
    <script>
        window.print();
    </script>
</body>
</html>