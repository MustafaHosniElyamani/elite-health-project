<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Elite</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Favicons -->
    <link href="{{ asset('assets/img/LOGO.jpg') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/stylear.css') }}" rel="stylesheet">


</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> الاثنين - السبت, من الثامنه صباحا حتى العاشره مساءً
            </div>
            <div class="d-flex align-items-center flex-row-reverse">
                اتصل بنا على 01101620826<i class="bi bi-phone"></i>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="  {{ url('/') }}" class="logo mx-3"><img src="{{ asset('assets/img/LOGO.jpg') }}"
                    alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0 ">
                <ul>
                    <li><a class="nav-link scrollto fs-6" href="#hero">الرئيسية</a></li>
                    <li><a class="nav-link scrollto fs-6" href="#about">من نحن </a></li>
                    <li><a class="nav-link scrollto fs-6" href="#services">خدماتنا</a></li>
                    @if (Auth::guard('patient')->check())
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.doctor.index') }}"> الاطباء </a>
                        </li>
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.hospital.index') }}"> المستشفيات
                            </a></li>
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.pharmacy.index') }}"> الصيدليات
                            </a>
                        </li>
                        <li><a class="nav-link scrollto fs-6" href="{{ route('client.chat.index') }}"> الاستفسارات
                                الصحية
                            </a></li>
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.followup.index') }}"> المتابعة
                                الطبية </a></li>

                        </li>
                    @elseif(Auth::guard('doctor')->check())
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.doctor.index') }}"> الاطباء </a>
                        </li>
                    @elseif(Auth::guard('hospital')->check())
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.hospital.index') }}"> المستشفيات
                            </a></li>
                    @elseif(Auth::guard('pharmacy')->check())
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.pharmacy.index') }}"> الصيدليات
                            </a>
                        </li>
                    @else
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.doctor.index') }}"> الاطباء </a>
                        </li>
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.hospital.index') }}"> المستشفيات
                            </a></li>
                        <li><a class="nav-link scrollto fs-6" href="  {{ route('client.pharmacy.index') }}"> الصيدليات
                            </a>
                        </li>

                        <li><a class="nav-link scrollto fs-6" href="{{ route('client.chat.index') }}"> الاستفسارات
                                الصحية
                            </a></li>
                    @endif




                    <li><a class="nav-link scrollto fs-6" href="#contact">تواصل معنا</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->













            @if (Auth::guard('patient')->check())
                <div class="dropdown" style="margin-right: 30px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="registerDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        مرحبا, {{ Auth::guard('patient')->user()->name }}!
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registerDropdown"
                        style="text-align: right;">
                        <li>
                            <form action="{{ route('client.patient.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">تسجيل الخروج</button>
                            </form>
                        </li>

                        <li><a class="dropdown-item"
                                href="  {{ route('client.patient.edit') }}">
                                تعديل الحساب </a>


                    </ul>
                </div>
            @elseif(Auth::guard('doctor')->check())
                <div class="dropdown" style="margin-right: 30px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="registerDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        مرحبا, {{ Auth::guard('doctor')->user()->name }}!
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registerDropdown"
                        style="text-align: right;">

                        <li>
                            <form action="{{ route('client.doctor.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">تسجيل الخروج</button>
                            </form>
                        </li>

                        <li><a class="dropdown-item"
                                href="  {{ route('client.doctor.edit') }}">
                                تعديل الحساب </a>


                    </ul>
                </div>
            @elseif(Auth::guard('hospital')->check())
                <div class="dropdown" style="margin-right: 30px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="registerDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        مرحبا, {{ Auth::guard('hospital')->user()->name }}!

                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registerDropdown"
                        style="text-align: right;">
                        <li>
                            <form action="{{ route('client.hospital.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">تسجيل الخروج</button>
                            </form>
                        </li>

                        <li><a class="dropdown-item"
                                href="  {{ route('client.hospital.edit') }}">
                                تعديل الحساب </a>


                    </ul>
                </div>
            @elseif(Auth::guard('pharmacy')->check())
                <div class="dropdown" style="margin-right: 30px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="registerDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        مرحبا, {{ Auth::guard('pharmacy')->user()->name }}!

                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registerDropdown"
                        style="text-align: right;">

                        <li>
                            <form action="{{ route('client.pharmacy.logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">تسجيل الخروج</button>
                            </form>
                        </li>

                        <li><a class="dropdown-item"
                                href="  {{ route('client.pharmacy.edit') }}">
                                تعديل الحساب </a>


                    </ul>
                </div>
            @else
            <div class="d-flex flex-row ">
                <div class="dropdown " style="margin-right: 30px; ">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="loginDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        تسجيل الدخول
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="loginDropdown"
                        style="text-align: right;">
                        <li><a class="dropdown-item" href="  {{ route('client.patient.login') }}">مريض </a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.doctor.login') }}">طبيب </a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.hospital.login') }}">مستشفى </a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.pharmacy.login') }}">صيدلية </a></li>
                    </ul>
                </div>
                <div class="dropdown" style="margin-right: 30px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="registerDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="background-color: #3fbbc0; border-color: #3fbbc0;">
                        حساب جديد
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="registerDropdown"
                        style="text-align: right;">
                        <li><a class="dropdown-item" href="  {{ route('client.patient.create') }}"> مريض</a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.doctor.create') }}"> طبيب</a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.hospital.create') }}">مستشفى </a></li>
                        <li><a class="dropdown-item" href="  {{ route('client.pharmacy.create') }}"> صيدلية</a></li>
                    </ul>
                </div>
            </div>

            @endif



        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    @yield('content')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3><img src="{{ asset('assets/img/LOGO.jpg') }}"></h3>
                            <p>
                                68 السيد الميرغني،<br>
                                المنتزه، قسم مصر الجديدة، محافظة القاهرة 11757<br><br>
                                <strong>الهاتف:</strong> +201101620826<br>
                                <strong>البريد الالكترون:</strong> info@elitecare.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>روابط مفيده</h4>
                        <ul>
                            <li><i class="bx bx-chevron-left"></i> <a href="#hero">الرئسية</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#about">من نحن </a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#services">خدماتنا</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#appointment">حجز ميعاد</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="#departments">الأقسام</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>خدماتنا</h4>
                        <ul>
                            <li><i class="bx bx-chevron-left"></i> <a href="">الفحص الشامل</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="">الصيدلية الإكلينيكة</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="">الإستشارة</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="">
                                    التحاليل الجينية</a></li>
                            <li><i class="bx bx-chevron-left"></i> <a href="">الأشعة</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>لمزيد من الأخبار</h4>

                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="اشترك الان">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                EliteCare <strong><span>&copy; جميع </span></strong>. الحقوق محفوظة
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
