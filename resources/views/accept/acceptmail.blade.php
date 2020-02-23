<h3>เรียน {{ $reviewer->name }}</h3>
<p>กรุณาประเมินบทความ โดยคลิกที่ลิงค์ด้านล่าง</p><br>
<p>{{ url('/article-evaluation/create?article_id=' . $item->id) }}</p>
