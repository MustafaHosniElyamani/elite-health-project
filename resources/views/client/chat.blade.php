@extends('layouts.main')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="margin-top: 140px;">

    <!-- Page header start -->
    <div class="page-title">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2 class="title text-center my-5" style="color: #3fbbc0;">للاستفسارات الصحية ارسل وسيرد عليك فريق العمل</h5>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> </div>
        </div>
    </div>
    <!-- Page header end -->

    <!-- Content wrapper start -->
    <div class="content-wrapper" >

        <!-- Row start -->
        <div class="row gutters" style="background-color: #c3f4f6;">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="background-color: #85c4c7;">

                <div class="card m-0">

                    <!-- Row start -->
                    <div class="row no-gutters" style="background-color: #c3f4f6;">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                            <div class="chat-container">
@if ($record)
<ul class="chat-box chatContainerScroll">
    <li class="chat-left">
        <div class="chat-avatar">
            <img src="https://www.bootdey.com/img/Content/avatar/avatar3.png"
                alt="Retail Admin">
            <div class="chat-name" >اسم المريض</div>
        </div>
        <div class="chat-text" style="font-weight:bold; font-size:larger; vertical-align: middle">
            {{ $q }}

        </div>
    </li>
    <li class="chat-right">
        <div class="chat-text" style="font-weight:bold; font-size:larger; vertical-align: middle">
            {{$record->answer}}
        </div>
        <div class="chat-avatar">
           <div class="mr-5"><img src="https://www.bootdey.com/img/Content/avatar/avatar3.png"
                alt="Retail Admin"></div>
            <div class="chat-name">فريق العمل</div>
        </div>
    </li>

</ul>
                            @endif
                                <div class="form-group mt-3 mb-0">
                                    <form action="" method="get"><div><textarea name="chat" class="form-control mb-3" rows="3"
                                        placeholder="عن ماذا تريد ان تسال"></textarea></div>
                                   <div class="text-center"> <button class="btn btn-primary btn-block" >ارسل</button>
                                </div>    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row end -->
                </div>

            </div>

        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

</div>


@endsection
