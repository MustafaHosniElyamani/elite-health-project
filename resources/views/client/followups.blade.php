@extends('layouts.main')
@section('content')
    <!--Section: Contact v.2-->
    <section class="mb-4 container">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <h3 class="text-center w-responsive mx-auto mb-5" style="color: #3fbbc0;">للمتابعة الطبية ارسل البيانات التالية
            وسيتم الرد عليك في اقرب فرصة </h3>

        <div class="row ">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 ">
                <form id="contact-form" name="contact-form" action="{{route('client.followup.store')}}" method="POST" enctype="multipart/form-data">

@csrf
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <input style="border-color: #3fbbc0;" type="text" id="subject" name="name"
                                    class="form-control" placeholder="عنوان الرسالة">

                            </div>
                        </div>
                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row mb-4">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea style="border-color: #3fbbc0;" type="text" id="message" name="message" rows="4"
                                    placeholder="الرسالة" class="form-control md-textarea"></textarea>

                            </div>

                        </div>
                    </div>

                    <!--Grid row-->
                    <div class="row mb-4">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <label for="file" class="mb-2" style="color: #3fbbc0;">أرسل ملف متعلق بالحالة</label>
                                <input style="border-color: #3fbbc0;" type="file" id="file" name="file"
                                    class="form-control">

                            </div>

                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="text-center text-md-left mb-5">
                        <button type="submit" class="btn btn-lg"
                            style="background-color: #EE7F9F; color: white;">إرسال</button>
                    </div>
                </form>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fas fa-map-marker-alt fa-2x" style="color: #EE7F9F;"></i>
                        <p>San Francisco, CA 94126, USA</p>
                    </li>

                    <li><i class="fas fa-phone mt-4 fa-2x" style="color: #EE7F9F;"></i>
                        <p>+ 01 234 567 89</p>
                    </li>

                    <li><i class="fas fa-envelope mt-4 fa-2x" style="color: #EE7F9F;"></i>
                        <p>contact@mdbootstrap.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->
    <div class="container" style="margin-bottom: 150px;">
        <hr style="color: #3fbbc0; border-top: 3px solid #3fbbc0; " class="mb-5">

    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css"
        integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <div class="container mt-4">
        <div class="row align-items-center">

            <div class="col-md-12 text-center">

                <div>
                    <h1 style="color: #3fbbc0;">قائمة المتابعات</h1>
                </div>



            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div class="table-responsive">
                        <table class="table project-list-table table-nowrap align-middle table-borderless">
                            <thead>
                                <tr>

                                    <th scope="col">رقم المتابعة</th>
                                    <th scope="col">عنوان المتابعة</th>
                                    <th scope="col">حالة المتابعة</th>
                                    <th scope="col">الرد</th>
                                    <!-- <th scope="col" style="width: 200px;">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($models as $model)
 <tr>

                                    <td>{{ $model->id }}</td>
                                    <td>{{ $model->name }}</td>
                                    @if ($model->reply)
                                        <td><span class="badge badge-soft-success mb-0">تم الرد</span></td>
                                    @else
                                        <td><span class="badge badge-soft-danger mb-0">لم يتم الرد</span></td>
                                    @endif

                                    @if ($model->reply)
                                        <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                اضغط هنا
                                            </button></td>      <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel"
                                                        style="color: #3fbbc0; margin-left: 90%;">الرد</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                 <h1> {{ $model->reply }}</h1>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">اغلاق</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                        <td></td>
                                    @endif




                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
