<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}} d-none">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control " name="email" type="text" id="email" value="{{ isset($accept->email) ? $accept->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('article_id') ? 'has-error' : ''}}">
    <label for="article_id" class="control-label">{{ 'ชื่อบทความ' }}</label>
    <input class="form-control" name="name_th" type="text" id="name_th" value="{{ isset($article->name_th) ? $article->name_th : ''}}"  readonly="">
    
    <input class="form-control d-none" name="article_id" type="number" id="article_id" value="{{ isset($article->id) ? $article->id : ''}}"  readonly="">
    {!! $errors->first('article_id', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('reviewer_id') ? 'has-error' : ''}}">
    <label for="reviewer_id" class="control-label">{{ 'ผู้ประเมิน' }}</label>
        <select name="reviewer_id" class="form-control form-control-sm" id="reviewer_id" required >
                @foreach ($reviewers as $item)
                    <option value="{{ $item->id }}" {{ (isset($accept->reviewer_id) && $accept->reviewer_id == $item->id) ? 'selected' : ''}}>{{ $item->title }} {{ $item->name }} {{ $item->lastname }} : {{ $item->school }} ({{ $item->group }}) : {{ $item->email }} : ได้รับมอบหมายแล้ว {{ $item->accepts->count('id') }} บทความ </option>
                @endforeach
        </select>
</div>

<div class="form-group {{ $errors->has('feedback') ? 'has-error' : ''}} d-none">
    <label for="feedback" class="control-label">{{ 'Feedback' }}</label>
    <input class="form-control" name="feedback" type="text" id="feedback" value="{{ isset($accept->feedback) ? $accept->feedback : ''}}" >
    {!! $errors->first('feedback', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}} d-none">
    <label for="remark" class="control-label">{{ 'Remark' }}</label>
    <input class="form-control" name="remark" type="text" id="remark" value="{{ isset($accept->remark) ? $accept->remark : ''}}" >
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>

<!-- ปุ่มป็อปอัพ -->

 

<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
  เพิ่มผู้ประเมิน
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document" style="max-width: 80% !important ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">รายชื่อผู้ประเมิน</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <div class="card">
                    <div class="card-header">ผู้ประเมินบทความ</div>
                    <div class="card-body">
                        <a href="{{ url('/reviewer/create') }}" class="btn btn-success btn-sm d-none" title="Add New Reviewer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <div class="table-responsive">
                            <table id="exsearch" class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Email</th>
                                        <th>Title</th><th>Name</th><th>Lastname</th>
                                        <th>Group</th>
                                        <th>Expert</th>
                                        <!--th>School</th>
                                        <th>Major</th>
                                        <th>Address</th><th>District</th><th>Amphoe</th><th>Province</th><th>Postnumber</th><th>Tel</th><th>Fax</th>
                                        <th>Type</th><th>Remark</th-->
                                        <th>Status</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($reviewers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->title }}</td><td>{{ $item->name }}</td><td>{{ $item->lastname }}</td>
                                        <td>{{ $item->group }}</td>
                                        <td>{{ $item->expert }}</td>
                                        <!--td>{{ $item->school }}</td><td>{{ $item->major }}</td><td>{{ $item->address }}</td><td>{{ $item->district }}</td><td>{{ $item->amphoe }}</td><td>{{ $item->province }}</td><td>{{ $item->postnumber }}</td><td>{{ $item->tel }}</td><td>{{ $item->fax }}</td><td>{{ $item->type }}</td><td>{{ $item->remark }}</td-->
                                        <th>{{ $item->status }}</th>
                                        <td>
                                            <a href="{{ url('/reviewer/' . $item->id) }}" title="View Reviewer"><button class="btn btn-info btn-sm d-none"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/reviewer/' . $item->id . '/edit') }}" title="Edit Reviewer"><button class="btn btn-primary btn-sm d-none"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            


                                            

                                            <button class="btn btn-success btn-sm" type="button"
                                                 onclick="selectElement({{ $item->id }}); $('#exampleModal').modal('hide')"> เลือก</button>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            
                        </div>

                    </div>
                </div>


      </div>
      
    </div>
  </div>
</div>

<br><br>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'แก้ไข' : 'ยืนยันการเลือกผู้ประเมิน' }}">
</div>

<script type="text/javascript">

function selectElement(reviewer_id) {    
    let element = document.getElementById("reviewer_id");
    element.value = reviewer_id;
}

$(document).ready(function() {
    $('#exsearch').DataTable();
} );
</script>