@extends('layouts.main')
@section('content')

<div class="container-fluid" style="background-color: #3fbbc0; padding: 20px; margin-top: 140px;">
    <h2 style="color: white; text-align: center;">تسجيل دخول الطبيب</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="{{route('client.doctor.signin')}}">
        @csrf
      <div class="row">
        <div class="col-md-6 mx-auto mb-3">
          <label for="phone" class="form-label" style="color: white;">رقم التليفون</label>
          <input type="text" class="form-control" name="phone" style="background-color: white;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto mb-3">
          <label for="password" class="form-label" style="color: white;">كلمة المرور</label>
          <input type="password" class="form-control" name="password" style="background-color: white;">
        </div>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary mx-auto"
                style="background-color: #EE7F9F; color: white; border: 0ch;">تسجيل الدخول</button>

      </div>
    </form>
  </div>
@endsection
