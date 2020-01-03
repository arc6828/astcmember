<div class="form-group {{ $errors->has('total') ? 'has-error' : ''}}">
    <label for="total" class="control-label">{{ 'ราคาทั้งหมด' }}</label>
    <input class="form-control" name="total" type="text" id="total" value="{{ isset($payment->total) ? $payment->total : ''}}" >
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('remark') ? 'has-error' : ''}}">
    <label for="remark" class="control-label">{{ 'หมายเหตุ'}}</label>
    <textarea class="form-control" rows="5" name="remark" type="textarea" id="remark" value="{{ isset($payment->remark) ? $payment->remark : ''}}" > </textarea>
    {!! $errors->first('remark', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('receipt') ? 'has-error' : ''}}">
    <label for="receipt" class="control-label">{{ 'ใบเสร็จ' }}</label>
    <input class="form-control" name="receipt" type="file" id="receipt" value="{{ isset($payment->receipt) ? $payment->receipt : ''}}" >
    {!! $errors->first('receipt', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'เล่มที่'}}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($payment->user_id) ? $payment->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
