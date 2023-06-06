
<div class="form-group">
    <label for="name">Name</label>
    {!! Form::text('name',null,[
        'class' => 'form-control '
    ]) !!}
</div>

<div class="form-group">
    <label for="phone">phone</label>
    {!! Form::text('phone',null,[
        'class' => 'form-control '
    ]) !!}
</div>
<div class="form-group">
    <label for="password">password</label>
    {!! Form::password('password', [
        'class' => 'form-control '
    ]) !!}
</div>
<div class="form-group">
    <label for="age">age</label>
    {!! Form::text('age',null,[
        'class' => 'form-control '
    ]) !!}
</div>
<div class="form-group">
    <label>Gender</label>
    <div class="radio">
        <label>
            {!! Form::radio('gender', 'male') !!} Male
        </label>
    </div>
    <div class="radio">
        <label>
            {!! Form::radio('gender', 'female') !!} Female
        </label>
    </div>
</div>
<div class="form-group">
    <label for="governorate">Governorate</label>
    {!! Form::select('governorate', [
        'القاهرة' => 'القاهرة',
        'الاسكندرية' => 'الاسكندرية',
        'الدقهلية' => 'الدقهلية',
        // Add more governorates and their display names here
    ], null, [
        'class' => 'form-control'
    ]) !!}
</div>




<div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
</div>
{!! Form::close() !!}
