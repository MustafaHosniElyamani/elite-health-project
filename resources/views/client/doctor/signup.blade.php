@extends('layouts.main')
@section('content')
    <div class="container-fluid" style="background-color: #3fbbc0; padding: 20px; margin-top: 140px;">
        <h2 style="color: white; text-align: center;">بيانات الطبيب</h2>
        <form method="post" action="{{ route('client.doctor.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="name" class="form-label" style="color: white;">الاسم</label>
                    <input type="text" class="form-control" id="name" name="name"
                        style="background-color: white;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label" style="color: white;">كلمة المرور</label>
                    <input type="password" class="form-control" id="password" name="password"
                        style="background-color: white;">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="age" class="form-label" style="color: white;">السن</label>
                    <input type="text" class="form-control" id="age" name='age'
                        style="background-color: white;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="specialty" class="form-label" style="color: white;">التخصص</label>
                    <select class="form-select" id="specialty" style="background-color: white; "name="speciality">
                        <option value="" selected>اختر التخصص </option>
                        <option value="القلب">القلب والأوعية الدموية</option>
                        <option value="العصبي">الجهاز العصبي</option>
                        <option value="الجلدية">الجلدية</option>
                        <option value="الاطفال">طب الأطفال</option>
                    </select>
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
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="phone" class="form-label" style="color: white;">رقم التليفون</label>
                    <input type="text" class="form-control" name="phone" style="background-color: white;">
                </div>
                <div class="col-md-6 mb-3">


                    <div class="col-md-3 mb-3">
                        <label for="sex" class="form-label" style="color: white;">النوع</label>
                        <div class="form-check">
                            <input class="form-check-input form-radio-input" type="radio" name="gender" value="male"
                                id="male">
                            <label class="form-check-label form-radio-label" for="male">ذكر</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input form-radio-input" type="radio" name="gender" value="female"
                                id="female">
                            <label class="form-check-label form-radio-label" for="female">أنثى</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mx-auto"
                    style="background-color: #EE7F9F; color: white; border: 0ch;">سجل الان</button>
            </div>
        </form>
    </div>
@endsection
