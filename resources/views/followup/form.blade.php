
<div class="form-group">
    <label for="reply">Reply</label>
    {!! Form::textarea('reply', null, [
        'class' => 'form-control',
        'rows' => 8
    ]) !!}
</div>





<div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
</div>
{!! Form::close() !!}
