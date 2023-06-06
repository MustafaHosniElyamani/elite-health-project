@extends('layouts.main')
@section('content')
<div class="container-fluid" style="background-color: #3fbbc0; padding: 20px; margin-top: 140px;">
    <h2 style="color: white; text-align: center;">بيانات الصيدلية</h2>
    <form method="post" action="{{ route('client.pharmacy.store') }}">
        @csrf

        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="name" class="form-label" style="color: white;">الاسم</label>
                <input type="text" class="form-control" name="name" style="background-color: white;">
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="password" class="form-label" style="color: white;">كلمة المرور</label>
                <input type="password" class="form-control" name="password" style="background-color: white;">
            </div>
            <div class="col-md-6 mb-3">
                <label for="age" class="form-label" style="color: white;">العنوان</label>
                <input type="text" class="form-control" name="address" style="background-color: white;">
            </div>
        </div>
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="phone" class="form-label" style="color: white;">رقم التليفون</label>
          <input type="text" class="form-control" name="phone" style="background-color: white;">
        </div>
        <div class="col-md-6 mb-3">
          <label for="governorate" class="form-label" style="color: white;">المحافظة</label>
          <select class="form-select" name="governorate" style="background-color: white;">
            <option value="" selected>اختر المحافظة </option>
            <option value="القاهرة">القاهرة</option>
            <option value="الاسكندرية">الاسكندرية</option>
            <option value="الدقهلية">الدقهلية</option>

          </select>
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary mx-auto"
                style="background-color: #EE7F9F; color: white; border: 0ch;">سجل الان</button>
      </div>
    </form>
  </div>
@endsection
