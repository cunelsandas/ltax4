@extends('dashboard.base')

@section('content')

    {{--   print ภ.ด.ส.3--}}

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-nrix{text-align:center;vertical-align:middle}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>

    <h2>ภ.ด.ส.3</h2>
    <table class="tg">
        <tr>
            <th class="tg-9wq8" colspan="14">รายการที่ดิน</th>
            <th class="tg-baqh" colspan="11">รายการสิ่งปลูกสร้าง</th>
        </tr>
        <tr>
            <td class="tg-9wq8" rowspan="2">ที่</td>
            <td class="tg-9wq8" rowspan="2">ประเภท<br>ที่ดิน</td>
            <td class="tg-9wq8" rowspan="2">เลขที่<br>เอกสาร<br>สิทธิ์</td>
            <td class="tg-nrix" colspan="2">ตำแหน่งที่ดิน</td>
            <td class="tg-nrix" rowspan="2">สถานที่ตั้ง<br>(หมู่/ชุมชน,<br>ตำบล)</td>
            <td class="tg-nrix" colspan="3">จำนวนเนื้อที่ดิน</td>
            <td class="tg-baqh" colspan="5">ลักษณะการทำประโยชน์(ตร.ว.)</td>
            <td class="tg-nrix" rowspan="2">ที่</td>
            <td class="tg-nrix" rowspan="2">บ้านเลขที่</td>
            <td class="tg-nrix" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง<br>(ตามบัญชี<br>กรมธนารักษ์)</td>
            <td class="tg-nrix" rowspan="2">ลักษณะ<br>สิ่งปลูกสร้าง<br>(ตึก/ไม้/<br>ครึ่งตึกครึ่งไม้)</td>
            <td class="tg-nrix" rowspan="2">ขนาดพื้นที่รวม<br>ของสิ่งปลูกสร้าง<br>(ตร.ม.)</td>
            <td class="tg-nrix" colspan="4">ลักษณะการทำประโยชน์ (ตร.ม.)</td>
            <td class="tg-nrix" rowspan="2">อายุโรงเรือน<br>หรือ<br>สิ่งปลูกสร้าง<br>(ปี)</td>
            <td class="tg-nrix" rowspan="2">หมายเหตุ</td>
        </tr>
        <tr>
            <td class="tg-nrix">เลขที่ดิน</td>
            <td class="tg-nrix">หน้า<br>สำรวจ</td>
            <td class="tg-nrix">ไร่</td>
            <td class="tg-nrix">งาน</td>
            <td class="tg-nrix">ตร.ว.</td>
            <td class="tg-nrix">ประกอบ<br>เกษตรกรรม</td>
            <td class="tg-nrix">อยู่อาศัย</td>
            <td class="tg-nrix">อื่นๆ</td>
            <td class="tg-nrix">ว่างเปล่า/<br>ไม่ทำ<br>ประโยชน์</td>
            <td class="tg-nrix">ใช้<br>ประโยชน์<br>หลาย<br>ประเภท</td>
            <td class="tg-nrix">ประกอบ<br>เกษตรกรรม</td>
            <td class="tg-nrix">อยู่อาศัย</td>
            <td class="tg-nrix">อื่นๆ</td>
            <td class="tg-nrix">ว่างเปล่า/<br>ไม่ทำ<br>ประโยชน์</td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>

    <br>


    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>

    <h2>ภ.ด.ส.4</h2>
    <table class="tg">
        <tr>
            <th class="tg-0pky" rowspan="2">ที่</th>
            <th class="tg-0pky" rowspan="2">ชื่ออาคารชุด</th>
            <th class="tg-0pky" rowspan="2">เลขทะเบียนอาคารชุด</th>
            <th class="tg-9wq8" colspan="4">ที่ตั้ง</th>
            <th class="tg-0pky" rowspan="2">เลขที่ห้องชุด</th>
            <th class="tg-0pky" rowspan="2">ขนาดพื้นที่รวม<br>(ตร.ม.)</th>
            <th class="tg-9wq8" colspan="3">ลักษณะการทำประโยชน์ (ตร.ม.)</th>
            <th class="tg-0pky" rowspan="2">หมายเหตุ</th>
        </tr>
        <tr>
            <td class="tg-lboi">โฉนด<br>เลขที่</td>
            <td class="tg-lboi">หน้าสำรวจ</td>
            <td class="tg-lboi">ตำบล</td>
            <td class="tg-lboi">อำเภอ</td>
            <td class="tg-lboi">อยู่อาศัย</td>
            <td class="tg-lboi">อื่นๆ</td>
            <td class="tg-lboi">ว่างเปล่า/ไม่ทำประโยชน์</td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>



{{--   print ภ.ด.ส.1--}}

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-0lax{text-align:left;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
    </style>
    {{--    <div class="container-fluid">--}}
    {{--        <div class="animated fadeIn">--}}

    {{--                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="card-header">--}}
    {{--                            <i class="fa fa-align-justify"></i>ภ.ด.ส.3</div>--}}
    {{--                        <div class="card-body">--}}
    <h2>ภ.ด.ส.1</h2>
    <table class="tg">
        <tr>
            <th class="tg-9wq8" rowspan="3">ที่</th>
            <th class="tg-9wq8" rowspan="3">ประเภทที่ดิน</th>
            <th class="tg-9wq8" rowspan="3">หน้าสำรวจ</th>
            <th class="tg-9wq8" rowspan="3">เลขที่</th>
            <th class="tg-9wq8" rowspan="3">สถานที่ตั้ง<br>(หมู่/ชุมชน/ตำบล)</th>
            <th class="tg-9wq8" rowspan="3">ลักษณะ<br>การใช้<br>ประโยชน์</th>
            <th class="tg-9wq8" colspan="6">ราคาประเมินทุนทรัพย์ของที่ดิน</th>
            <th class="tg-9wq8" colspan="11">ราคาประเมินทุนทรัพย์ของสิ่งปลูกสร้าง</th>
            <th class="tg-baqh" rowspan="3"><br><br><br>รวมราคาประเมิน<br>ของที่ดิน<br>และสิ่งปลูกสร้าง<br>(บาท)</th>
            <th class="tg-baqh" rowspan="3"><br><br><br>ราคาประเมิน<br>ของที่ดินและสิ่ง<br>ปลูกสร้างตาม<br>สัดส่วนการใช้<br>ประโยชน์<br>(บาท)</th>
            <th class="tg-baqh" rowspan="3"><br><br><br>หักมูลค่า<br>ฐานภาษี<br>ที่ได้รับยกเว้น<br>(บาท)</th>
            <th class="tg-baqh" rowspan="3"><br><br><br>คงเหลือ<br>ราคาประเมิน<br>ทุนทรัพย์<br>ที่ต้องเสียภาษี<br>(บาท)</th>
            <th class="tg-c3ow" rowspan="3"><br><br><br>อัตราภาษี<br>(ร้อยละ)</th>
        </tr>
        <tr>
            <td class="tg-9wq8" colspan="3">จำนวน<br>เนื้อที่ดิน</td>
            <td class="tg-9wq8" rowspan="2">คำนวณ<br>เป็น<br>ตารางวา</td>
            <td class="tg-9wq8" rowspan="2">ราคาประเมิน<br>ต่อตารางวา<br>(บาท)</td>
            <td class="tg-9wq8" rowspan="2">รวมราคา<br>ต่อตารางวา<br>(บาท)</td>
            <td class="tg-9wq8" rowspan="2">ที่</td>
            <td class="tg-9wq8" rowspan="2">ประเภท<br>สิ่งปลูกสร้าง</td>
            <td class="tg-9wq8" rowspan="2">ลักษณะ<br>สิ่งปลูกสร้าง</td>
            <td class="tg-c3ow" rowspan="2"><br><br>ลักษณะ<br>การใช้<br>ประโยชน์<br></td>
            <td class="tg-c3ow" rowspan="2"><br><br>ขนาดพื้นที่<br>สิ่งปลูกสร้าง<br>(ตารางเมตร)</td>
            <td class="tg-c3ow" rowspan="2"><br>คิดเป็น<br>สัดส่วนตาม<br>การใช้<br>ประโยชน์</td>
            <td class="tg-c3ow" rowspan="2"><br>ราคาประเมิน<br>ต่อ<br>ตารางเมตร<br>(บาท)</td>
            <td class="tg-c3ow" rowspan="2"><br>รวมราคา<br>สิ่งปลูกสร้าง<br>(บาท)</td>
            <td class="tg-c3ow" colspan="2">ค่าเสื่อม</td>
            <td class="tg-baqh" rowspan="2">ราคาประเมิน<br>สิ่งปลูกสร้าง<br>หลักหัก<br>ค่าเสื่อม<br>(บาท)</td>
        </tr>
        <tr>
            <td class="tg-0lax">ไร่</td>
            <td class="tg-0lax">งาน</td>
            <td class="tg-0lax">วา</td>
            <td class="tg-baqh">อายุ<br>โรงเรือน<br>(ปี)</td>
            <td class="tg-baqh">คิดเป็น<br>ค่าเสื่อม<br>(บาท)</td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0pky"></td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0pky"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-9wq8"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-c3ow"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-c3ow"></td>
        </tr>
        </tr>
    </table>
    <br>

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
        .tg .tg-9wq8{border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <h2>ภ.ด.ส.2</h2>
    <table class="tg">
        <tr>
            <th class="tg-9wq8">ที่</th>
            <th class="tg-9wq8">ชื่ออาคารชุด</th>
            <th class="tg-9wq8">เลขทะเบียนอาคารชุด</th>
            <th class="tg-9wq8">ที่ตั้งอาคารชุด</th>
            <th class="tg-9wq8">ลักษณะการทำประโยชน์</th>
            <th class="tg-9wq8">เลขที่ห้องชุด</th>
            <th class="tg-9wq8">ขนาดพื้นที่รวม<br>(ตารางเมตร)</th>
            <th class="tg-9wq8">ราคาประเมินต่อตารางเมตร<br>(บาท)</th>
            <th class="tg-9wq8">ราคาประเมินห้องชุด<br>(บาท)</th>
            <th class="tg-9wq8">หักมูลค่าฐานภาษีที่ได้รับ<br>การยกเว้น<br>(บาท)</th>
            <th class="tg-9wq8">คงเหลือราคาประเมิน<br>ทุนทรัพย์ที่ต้องเสียภาษี<br>(บาท)</th>
            <th class="tg-baqh">อัตราภาษี<br>(ร้อยละ)</th>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>

    <br>

    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle}
        .tg .tg-e3bp{background-color:#caf08a;text-align:center;vertical-align:top}
        .tg .tg-tej8{background-color:#caf08a;border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-qk24{background-color:#caf08a;border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <h2>ภ.ด.ส.8</h2>
    <table class="tg">
        <tr>
            <th class="tg-tej8">ที่</th>
            <th class="tg-tej8">ชื่ออาคารชุด/ห้องชุด</th>
            <th class="tg-tej8">เลขทะเบียนอาคารชุด</th>
            <th class="tg-tej8">ที่ตั้งอาคารชุด/ห้องชุด</th>
            <th class="tg-tej8">ลักษณะการทำประโยชน์</th>
            <th class="tg-tej8">เลขที่ห้องชุด</th>
            <th class="tg-tej8">ขนาดพื้นที่รวม<br>(ตารางเมตร)</th>
            <th class="tg-tej8">ราคาประเมินต่อตารางเมตร<br>(บาท)</th>
            <th class="tg-tej8">ราคาประเมินห้องชุด/อาคารชุด<br>(บาท)</th>
            <th class="tg-tej8">หักมูลค่าฐานภาษีที่ได้รับ<br>การยกเว้น<br>(บาท)</th>
            <th class="tg-tej8">คงเหลือราคาประเมิน<br>ทุนทรัพย์ที่ต้องเสียภาษี<br>(บาท)</th>
            <th class="tg-qk24">อัตราภาษี<br>(ร้อยละ)</th>
            <th class="tg-e3bp">จำนวนภาษี<br>ที่ต้องชำระ<br>(บาท)</th>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-lboi"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>


    <br>
    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-4i9n{background-color:#ffcc67;text-align:center;vertical-align:middle}
        .tg .tg-baqh{text-align:center;vertical-align:top}
        .tg .tg-fpdb{background-color:#34cdf9;text-align:center;vertical-align:middle}
        .tg .tg-nbv9{background-color:#caf08a;text-align:center;vertical-align:middle}
        .tg .tg-adx7{background-color:#ffcc67;text-align:center;vertical-align:top}
        .tg .tg-nrix{text-align:center;vertical-align:middle}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <h2>ภ.ด.ส.7</h2>
    <table class="tg">
        <tr>
            <th class="tg-nbv9" rowspan="3">ที่</th>
            <th class="tg-nbv9" rowspan="3">ประเภท<br>ที่ดิน/เลขที่</th>
            <th class="tg-nbv9" rowspan="3">ลักษณะ<br>การทำ<br>ประโยชน์</th>
            <th class="tg-nbv9" colspan="6">คำนวณราคาประเมินทุนทรัพย์ของที่ดิน</th>
            <th class="tg-4i9n" colspan="8">คำนวณราคาประเมินทุนทรัพย์ของสิ่งปลูกสร้าง</th>
            <th class="tg-fpdb" rowspan="3">รวมราคา<br>ประเมินของ<br>ที่ดินและ<br>สิ่งปลูกสร้าง<br>(บาท)</th>
            <th class="tg-fpdb" rowspan="3">หักมูลค่า<br>ฐานภาษี<br>ที่ได้รับ<br>ยกเว้น<br>(บาท)</th>
            <th class="tg-fpdb" rowspan="3">คงเหลือ<br>ราคาประเมิน<br>ทุนทรัพย์<br>ที่ต้องชำระ<br>(บาท)</th>
            <th class="tg-fpdb" rowspan="3">อัตรา<br>ภาษี<br>(ร้อยละ)</th>
            <th class="tg-fpdb" rowspan="3">จำนวน<br>ภาษีที่ต้อง<br>ชำระ<br>(บาท)</th>
        </tr>
        <tr>
            <td class="tg-nbv9" colspan="3">จำนวนที่ดิน</td>
            <td class="tg-nbv9" rowspan="2">คำนวณเป็น<br>ตร.ว.</td>
            <td class="tg-nbv9" rowspan="2">ราคาประเมิน<br>ต่อตร.ว.<br>(บาท)</td>
            <td class="tg-nbv9" rowspan="2">ราคาประเมิน<br>ของที่ดิน<br>(บาท)</td>
            <td class="tg-4i9n" rowspan="2">ที่</td>
            <td class="tg-4i9n" rowspan="2">ประเภทของ<br>สิ่งปลูกสร้าง</td>
            <td class="tg-4i9n" rowspan="2">ขนาดพื้นที่<br>สิ่งปลูกสร้าง<br>(ตร.ม.)</td>
            <td class="tg-4i9n" rowspan="2">ราคาประเมิน<br>ต่อ ตร.ม.<br>(บาท)</td>
            <td class="tg-adx7" rowspan="2">รวมราคา<br>ประเมิน<br>สิ่งปลูกสร้าง<br>(บาท)</td>
            <td class="tg-adx7" colspan="2">ค่าเสื่อม</td>
            <td class="tg-adx7" rowspan="2">ราคาประเมิน<br>สิ่งปลูกสร้าง<br>หลังหัก<br>ค่าเสื่อม(บาท)</td>
        </tr>
        <tr>
            <td class="tg-nbv9">ไร่</td>
            <td class="tg-nbv9">งาน</td>
            <td class="tg-nbv9">ตร.ว.</td>
            <td class="tg-adx7">อายุ<br>โรงเรือน<br>(ปี)</td>
            <td class="tg-adx7">คิดเป็น<br>ค่าเสื่อม<br>(บาท)</td>
        </tr>
        <tr>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-nrix"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
            <td class="tg-baqh"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>

<br>
    <h2>ภ.ด.ส.6</h2>
    <p style="text-align: center;">&nbsp;</p>
    <p style="text-align: center;">&nbsp;</p>
    <h5 style="text-align: center;"><strong>หนังสือแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้าง</strong></h5>
    <h5 style="text-align: center;"><strong>ประจำปี ภาษี พ.ศ. .....</strong></h5>
    <p>&nbsp;</p>
    <p style="text-align: left;"><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ที่.................../...................&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; สำนักงาน/ที่ทำการ....................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;วันที่.........เดือน............................พ.ศ. .......</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;เรื่อง แจ้งการประเมินเพื่อเสียภาษีที่ดินและสิ่งปลูกสร้าง</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;เรียน .........................................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตามที่ท่านเป็นเจ้าของทรัพย์สิน ประกอบด้วย</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ๑. ที่ดิน จำนวน ....... แปลง</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ๒. สิ่งปลูกสร้าง จำนวน .......... หลัง</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ๓. อาคารชุด/ห้องชุด จำนวน ........ ห้อง/หลัง</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; พนักงานประเมินได้ทำการประเมินภาษีที่ดินและสิ่งปลูกสร้างแล้ว เป็นจำนวนเงิน ............. บาท (...................................................)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตามรายการที่ปรากฏในแบบแสดงรายการคำนวณภาษีที่ดินและสิ่งปลูกสร้างแนบท้ายหนังสือฉบับนี้</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ฉะนั้น ขอให้ท่านนำเงินภาษีที่ดินและสิ่งปลูกสร้างไปชำระ ณ สำนักงาน/ที่ทำการ.........................................................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ภายในเดือนเมษายนของทุกปี หรือ ..........................................................................................................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ถ้าไม่ชำระภาษีภายในกำหนดจะต้องเสียเบี้ยปรับและเงินเพิ่มตามมาตรา ๖๘ มาตรา ๖๙ และมาตรา ๗๐ แห่งพระราชบัญญัติภาษีที่ดินและสิ่งปลูกสร้าง</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; พ.ศ. ๒๕๖๒</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; อนึ่ง หากท่านได้รับแจ้งการประเมินภาษีที่ดินและสิ่งปลูกสร้างแล้ว เห็นว่าการประเมินไม่ถูกต้อง มีสิทธิยื่นคำร้องคัดค้านต่อผู้บริหารท้องถิ่นเพื่อพิจารณา</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ทบทวนตามแบบ ภ.ด.ส. ๙ ภายในสามสิบวันนับแต่วันที่ได้รับแจ้งการประเมิน และหากผู้บริหารท้องถิ่นไม่เห็นชอบกับคำร้องคัดค้านนี้ ให้มีสิทธิอุทธรณ์</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ต่อคณะกรรมการพิจารณาอุทธรณ์การประเมินภาษี โดยยื่นอุทธรณ์ต่อผู้บริหารท้องถิ่นภายในสามสิบวันนับแต่วันที่ได้รับหนังสือแจ้ง และกรณีไม่เห็นด้วย</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; กับคำวินิจฉัยอุทธรณ์ มีสิทธิฟ้องเป็นคดีต่อศาลภายในสามสิบวันนับแต่วันที่ได้รับแจ้งคำวินิจฉัยอุทธรณ์ ทั้งที่ ตามมาตรา ๗๓ และมาตรา ๘๒&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; แห่งพระราชบัญญติภาษีที่ดินและสิ่งปลูกสร้าง พ.ศ. ๒๕๖๒</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ขอแสดงความนับถือ</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(................................)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ตำแหน่ง...................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;พนักงานประเมิน</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--        </div>--}}

{{--   end ภ.ด.ส.--}}


    {{--ภป.1--}}


    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
        .tg .tg-wa1i{font-weight:bold;text-align:center;vertical-align:middle}
        .tg .tg-7btt{font-weight:bold;border-color:inherit;text-align:center;vertical-align:top}
        .tg .tg-fymr{font-weight:bold;border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-uzvj{font-weight:bold;border-color:inherit;text-align:center;vertical-align:middle}
        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
        .tg .tg-0lax{text-align:left;vertical-align:top}
    </style>
    <h2>ภ.ป.1</h2>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
    <h2>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>ภ.ป. 1</strong></h2>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แบบแสดงรายการปภาษีป้าย</strong></p>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ประจำปี พ.ศ. ...............</strong></p>
    <p>&nbsp;</p>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ชื่อเจ้าของป้าย............................................................ ชื่อสถานที่ประกอบการค้าหรือกิจกรรมอื่น........................................................</strong></p>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;เลขที่...................... ตรอก, ซอบ............................................. ถนน.............................................................. หมู่ที่...................</strong></p>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตำบล.................................... อำเภอ...................................... จังหวัด..................................................โทรศัพท์........................</strong></p>
    <p><strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ขอยื่นแบบแสดงรายการภาษีป้ายต่อพนักงานเจ้าหน้าที่ ณ ............................................................................................ตามรายการต่อไปนี้</strong></p>
    <table class="tg">
        <tr>
            <th class="tg-7btt" rowspan="2">1<br>ประเภท<br>ป้าย</th>
            <th class="tg-7btt" colspan="2">2<br>ขนาดป้าย ซ.ม.</th>
            <th class="tg-7btt" rowspan="2">3<br>เนื้อที่ป้าย<br>ตาราง ซ.ม.</th>
            <th class="tg-7btt" rowspan="2">4<br>จำนวนป้าย<br><br> </th>
            <th class="tg-7btt" rowspan="2">5<br>ข้อความหรือภาพหรือเครื่องหมายที่ปรากฏ<br>ในป้ายโดยย่อ</th>
            <th class="tg-7btt" rowspan="2">6<br>สถานที่ติดตั้งป้ายและวันติดตั้ง (แสดงป้าย)<br>ถนน, ตรอก, ซอย, ตำบล, อำเภอ, สถานที่ใกล้เคียง<br>หรือระหว่าง ก.ม. ที่</th>
            <th class="tg-fymr" rowspan="2">หมายเหตุ</th>
        </tr>
        <tr>
            <td class="tg-7btt">กว้าง</td>
            <td class="tg-7btt">ยาว</td>
        </tr>
        <tr>
            <td class="tg-uzvj" rowspan="4"><br><br>(1)<br>มีอักษร<br>ไทยล้วน<br><br> <br> <br></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
        </tr>
        <tr>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
            <td class="tg-0pky"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-wa1i" rowspan="4">(2)<br>มีอักษร<br>ไทยปน<br>อักษร<br>ต่างประเทศ<br>หรือ<br>เครื่องหมาย</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-wa1i" rowspan="4"><br><br>(3)<br>ป้ายที่ไม่มี<br>อักษรไทย<br><br> <br>&nbsp;&nbsp;</td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
        <tr>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
            <td class="tg-0lax"></td>
        </tr>
    </table>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้าพเจ้าขอรับรองว่ารายการที่แจ้งไว้ในแบบนี้ถูกต้องและครบถ้วนตามความจริงทุกประการ</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; วันที่..................... เดือน................................ พ.ศ. ..................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ลงชื่อ............................................................. เจ้าของป้าย</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>



    <h2>ภ.ป.3</h2>

    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; ภ.ป. ๓</p>
    <p>&nbsp; &nbsp; &nbsp; หนังสือแจ้งการประเมิน</p>
    <p>&nbsp; &nbsp; &nbsp; ที่............../...............&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;องค์การบริหารส่วนตำบลดอนเปา</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; อำเภอแม่แตง&nbsp; จังหวัดเชียงใหม่ 50360</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เดือน...........&nbsp; พ.ศ. ........... </p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; เรื่อง&nbsp; &nbsp; แจ้งการประเมินภาษีป้าย</p>
    <p>&nbsp; &nbsp; &nbsp; เรียน&nbsp; &nbsp;..................................................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ตามที่ ท่านได้ยื่นแบบแสดงรายการภาษีป้ายไว้ตามแบบ ภ.ป.1 เลขรับที่ ............................/.............................</p>
    <p>&nbsp; &nbsp; &nbsp; ลงวันที่.......................เดือน...........................พ.ศ. ............................ไว้ นั้น</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;บัดนี้&nbsp; พนักงานเจ้าหน้าที่ ได้ทำการประเมินเสร็จแล้ว เป็นเงินภาษี.........................................................บาท</p>
    <p>&nbsp; &nbsp; &nbsp; ................สตางค์ และเงินเพิ่ม...................บาท..................สตางค์&nbsp; รวมเป็นเงินทั้งสิ้น........................................บาท</p>
    <p>&nbsp; &nbsp; &nbsp; ................สตางค์ โปรดนำเงินจำนวนดังกล่าวไปชำระภายใน 15 นับแต่วันที่ได้รับหนังสือนี้ หากพ้นกำหนดจะต้องเสียเงินเพิ่มตามกฏหมาย</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ขอแสดงความนับถือ</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ......................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;(......................................)</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; พนักงานเจ้าหน้าที่</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="text-decoration: underline;"><strong>ใบรับ ภ.ป. ๓</strong></span></p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ข้าพเจ้า...............................................อยู่บ้านเลขที่.....................ตรอก......................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp;ซอย.......................................ถนน........................................หมู่ที่...............ตำบล.....................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp;อำเภอ.........................................จังหวัด...........................................เกี่ยวข้องเป็น.........................................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp;กับเจ้าของป้าย ได้รับ&nbsp; ภ.ป.๓ ที่..................../........................&nbsp; ลงวันที่............................เดือน...............................</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp;พ.ศ. ...................... ไว้แล้ว&nbsp;&nbsp;ตั้งแต่วันที่................................เดือน..................................พ.ศ. ..........................</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; (ลงชื่อ)........................................................ผู้รับ&nbsp; &nbsp; &nbsp;(ลงชื่อ)..........................................................ผู้ส่ง</p>
@endsection


@section('javascript')

@endsection
