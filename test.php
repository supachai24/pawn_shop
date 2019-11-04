<?php
require_once __DIR__ . '/vendor/autoload.php';
//custom font
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];
$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];
$mpdf = new \Mpdf\Mpdf([
    'format' => 'A5',
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/fonts',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNew Italic.ttf',
            'B' =>  'THSarabunNew Bold.ttf',
        ]
    ],
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 40,
    'margin_bottom' => 25,
    'margin_header' => 5,
    'margin_footer' => 5,
    'autoPageBreak' => true,
]);
$mpdf->mirrorMargins = 2;

$header = '
<div class="container-header">
    <h1>มนตรี เซ็นเตอร์ 2</h1>
    <div class="header-detail">
        <p>รับฝาก เครื่องใช้ไฟฟ้า - จำหน่ายสินค้าหลุดจำนำคุณภาพดี</p>
        <p>47/31-32 หมู่ 2 ซอยนิคมฯ 15 (ติดโค้งต้นโพธิ์) ต.ท่าทราย อ.เมือง จังหวัดสมุทรสาคร</p>
        <p>เปิดบริการทุกวัน 09:00 - 21:00 น. โทรศัพท์ 034-462240</p>
    </div>
</div>
';
$mpdf->SetHTMLHeader($header);
$mpdf->SetHTMLHeader($header, 'E');

$html = '
    <h2><u>สัญญารับซื้อ</u></h2>
    <div style="text-align: right;">
        <p>เลขที่ตั๋วรับจำนำ xxxxxxxxxxxx</p>
        <p>วันที่ xx เดือน xxxxxxxxx พ.ศ. xxxx</p>
    </div>
    <div>สัญญานี้ทำระหว่าง <b>มนตรี เซ็นเตอร์ 2</b> ซึ่งต่อไปนี้เรียกว่า "ผู้ซื้อฝาก" กับ xxxxxxxxxxxxxxx 
    อายุ xx ปี ที่อยู่ xxxxxxxxxxxxxxxxxxxxx ถือบัตรประชาชนเลขที่ xxxxxxxxxxxxxxxxxxxxxxxxxxxx 
    ซึ่งต่อไปนี้ในสัญญาจะเรียกว่า "ผู้ฝากขาย" ผู้ฝากขาย ตกลงขายฝาก xxxxxxxxxxxxxxxxxxxxxxxxxxxxx 
    ในราคา xxxxxxxx บาท แก้ผู้ซื้อฝาก ซึ่งมีกำหนดระยะเวลา <b>หนึ่งเดือน</b> นับแต่วันที่ทำสัญญานี้</div>
';
$content = '
<style>
    .container-header {
        font-family: "sarabun";
        line-height: 1px;
        margin-top: 16px;
    }
    .container {
        font-family: "sarabun";
    }

    .header-detail {
        text-align: center;
        font-size: 14px;
        line-height: 1px;
    }
    
    h1, h2 {
        text-align: center;
    }
</style>
<div class="container">
    <p>
    '.$html.'
    </p>
</div>
';
$mpdf->autoPageBreak = true;
$mpdf->AddPage();
$mpdf->WriteHTML($content);
$mpdf->Output();
?>
<script>
    window.print();
</script>
