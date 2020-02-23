<p>กรุณาประเมินบทความ โดยคลิกที่ลิงค์ด้านล่าง</p><br>
@foreach($articleevaluation as $item)
<p> {{ url('/article-evaluation/create?article_id=' . $item->id) }} </p> 
@endforeach