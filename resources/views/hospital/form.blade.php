
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
    <label for="address">address</label>
    {!! Form::text('address',null,[
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
    <label>Speciality</label>
    @foreach(['الاطفال' => 'الاطفال', 'القلب' => 'القلب', 'العصبي' => 'العصبي', 'الجلدية' => 'الجلدية'] as $value => $label)
        <div class="checkbox">
            <label>
                {!! Form::checkbox('specialties[]', $value, null) !!} {{ $label }}
            </label>
        </div>
    @endforeach
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
