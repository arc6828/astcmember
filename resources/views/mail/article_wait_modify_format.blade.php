<h2>เรียน  {{ $article->purubpitshop }} และคณะวิจัย</h2>
<p>
    รหัสบทความ: <strong>{{ $article->code }}</strong> <br>
    ชื่อเรื่อง: <strong>{{ $article->name_th }}</strong> 
<p>

<p>
ฝ่ายวิชาการได้ดำเนินการตรวจรูปแบบ นิพนธ์ต้นฉบับของท่านแล้ว โดยนิพนธ์ต้นฉบับของท่านอาจมีรูปแบบบางรายการไม่ตรงตามคู่มือ 
กรุณาแก้ไขตาม หัวข้อต่อไปนี้
</p>
<ul>
   @if( isset($article->fix_abstract) )
      <li>บทคัดย่อเกิน 250 คำ / ภาษา</li>
   @endif
   @if( isset($article->fix_keyword) )
      <li>คำสำคัญเกิน 5 คำ</li>
   @endif
   @if( isset($article->fix_page) )
      <li>จำนวนหน้าน้อยกว่า 8 หรือมากกว่า  10 หน้า</li>
   @endif
   @if( !empty($article->another) )
      <li>{{ $article->another }}</li>
   @endif
</ul>
<p>
หลังจากที่ท่านได้ทำการแก้ไขบทความของท่านแล้ว ท่านสามารถอัพโหลดบทความของท่านมาที่ระบบได้ผ่านทางช่องทางเดิมที่ท่านเคยอัพโหลดบทความ ภายใน 7 วัน
</p>

<p>
ขอแสดงความนับถือ<br>
ฝ่ายวิชาการ<br>
ASTC Conference 2020<br>
</p>
