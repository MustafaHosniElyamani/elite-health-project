@extends('layouts.main')
@section('content')

@include('flash::message')
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
<div class="container" style="margin-top: 160px;">
<div class="row">
    <div class="col-lg-10 mx-auto mb-1">
        <div class="section-title text-center ">
            <h1 class="top-c-sep" style="color: #3fbbc0;">قائمة الصيدليات</h3>

    </div>
</div>
<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="career-search mb-60">
            <form action="" method="get" class="career-form mb-60">
                <div class="row">
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="input-group position-relative">
                            <input type="text" name="name" class="form-control" placeholder="ابحث باسم الصيدلية"
                                id="keywords">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="select-container ">
                            <select class="custom-select" name="governorate" style="color: #3c3c3c; text-align: right;">
                                <option value="">اختر المحافظة</option>
                                @if (Auth::guard('patient')->check())
                                <option selected value='{{ Auth::guard('patient')->user()->governorate}}'>بالقرب مني</option>
                                @endif


                                <option value="القاهرة">القاهرة</option>
                                <option value="الدقهلية">الدقهلية</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 my-3">
                        <button type="submit" class="btn btn-lg btn-block btn-light btn-custom"
                            id="contact-submit">
                            ابحث
                        </button>
                    </div>
                </div>
            </form>
            <div class="filter-result">
                @foreach ($records as $record)
                <div class="filter-result">
                                          <p class="mb-30 ff-montserrat"></p>
                                          <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                              <div class="job-left my-4 d-md-flex align-items-center ">
                                                <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                                    <span style="font-size: medium;">صيدلية</span>
                                                </div>
                                                  <div class="job-content" style="margin-right: 10%">
                                                      <h5 class="text-right text-md-left mb-3 mr-5">{{$record->name}}</h5>
                                                    <div class="d-flex"><i class="zmdi zmdi-pin " style="margin-left: 10%"></i> {{$record->governorate}}
    </div>

                                                  </div>
                                              </div>
                                              <div class="job-right my-4 flex-shrink-0">
                                                  <button style="background-color: #3fbbc0; border: 0;" type="button"
                                                      class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                      اضغط هنا للتفاصيل
                                                  </button>
                                              </div>
                                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                                  aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h1 class="modal-title fs-5" id="exampleModalLabel"
                                                                  style="color: #3fbbc0; margin-left: 70%;">معلومات الصيدلية</h1>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                  aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                         <h3>العنوان: {{$record->address}}</h3>
                                                         <h3>رقم التليفون: {{$record->phone}}</h3>

                                                          </div>
                                                          <div class="modal-footer">
                                                              <button type="button" class="btn btn-secondary"
                                                                  data-bs-dismiss="modal">اغلاق</button>

                                                          </div>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>
                                      @endforeach


            </div>
        </div>



    </div>
</div>
</div>











@endsection
