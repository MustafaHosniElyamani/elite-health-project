@extends('layouts.main')

@section('content')
@include('flash::message')
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset('assets/img/slide/slide-1.jpg') }});margin-right:0;">
          <div class="container">
            <h2>مرحبا بكم في <span>Elite Care</span></h2>
            <p>يقدم مركز Elite Care رعاية علاجية شاملة لأمراض المشيمة المتقدمة والمشيمة الملتصقة وكل ما يتعلق بأمراض
              النساء والتوليد والصحة الإنجابية.

            </p>
            <a href="#about" class="btn-get-started scrollto">المزيد</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-2.jpg') }});margin-right:0;">
          <div class="container">
            <h2>نهتم بسلامة مرضانا </h2>
            <p>نستخدم أحدث الأجهزة والمعدات لعلاج حالات المشيمة الملتصقة والمشيمة المتقدمة لضمان سلامة الأم وطفلها ،
              ونقوم بإجراء العمليات بأكثر الطرق والأساليب أمانًا لضمان راحة وصحة المرضى. </p>
            <a href="#about" class="btn-get-started scrollto">المزيد</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{ asset('assets/img/slide/slide-3.jpg') }});margin-right:0;">
          <div class="container">
            <h2>أطباؤنا </h2>
            <p>أطباؤنا رواد في عمليات المشيمة المتقدمة والمشيمة الملتصقة ، وجميع العاملين من أطباء وممرضات وخبراء تغذية
              لديهم خبرة سابقة وطويلة في هذه العمليات وفي أمراض النساء والتوليد. ولكل منهم امتيازات علمية وشهادات معتمدة
              محليًا ودوليًا.

            </p>
            <a href="#about" class="btn-get-started scrollto">المزيد</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">رعاية شخصية ومتخصصة </a></h4>
              <p class="description"> نحرص أن تكون التجربة التي يمر بها المريض أثناء زيارته إلي مركزنا خالية من المتاعب
                ونهتم بتوفير رعاية شخصية بحيث يتم إيلاء اهتمام فردي لكل مريض </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">الخدمات الصحية </a></h4>
              <p class="description">نهتم بتقديم كل الخدمات الصحية التي تساعد مرضانا ونهتم بأدق التفاصيل التي تميزنا
                بيها دوما </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">الجراحة بدون ألم </a></h4>
              <p class="description"> إجراء العمليات بدون ألم أو عذاب ما بعد الولادة، بل والأكثر من ذلك أن السيدة الحامل
                تستطيع الحركة بكل سهولة بعد إجراء عملية الولادة بساعات قليلة</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">الطب الشخصي</a></h4>
              <p class="description">تقديم الطب الشخصي، حيث يتم بناء الخطة العلاجية لكل مريض على حدا بناء على حالته
                واحتياجاته الطبية. </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>في حالة طوارئ؟ بحاجة الى مساعدة الآن؟</h3>

          <a class="cta-btn scrollto" href="#appointment">إحجز موعد</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>من نحن </h2>
          <p>تأسس مركز Elite Care من قبل مجموعة من أشهر وأفضل الأطباء في أمراض النساء والتوليد في مصر لعلاج أمراض
            المشيمة المتقدمة والمشيمة الملتصقة ، والتي أصبحت من الأمراض الإنجابية السائدة بين النساء وتضع حياتهن في خطر
            حقيقي وشديد </p>
        </div>

        <div class="d-flex flex-row-reverse mod">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>يقدم مركز Elite Care رعاية علاجية شاملة لأمراض المشيمة المتقدمة والمشيمة الملتصقة . </h3>
            <p class="fst-italic">
              خدماتنا
            </p>
            <ul>
              <li> <i class="bi bi-check-circle"></i>رعاية شخصية ومتخصصة للمرضى</li>
              <li> <i class="bi bi-check-circle"></i>القيود الغذائية</li>

            </ul>
            <p>

              أطباؤنا هم رواد في عمليات المشيمة والمشيمة الملتصقة ، وجميع العاملين هم أطباء وممرضات وخبراء تغذية لديهم
              خبرة سابقة وطويلة في هذه العمليات وفي أمراض النساء والتوليد. ولكل منهم امتيازات علمية وشهادات معتمدة
              محليًا ودوليًا
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1"
                class="purecounter"></span>

              <p><strong>الأطباء</strong> أطباؤنا هم رواد في عمليات المشيمة الملتصقة والمشيمة المتقدمة</p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>العمليات الجراحية</strong> أدت العديد من العمليات إلى اكتساب الخبرة والمهارات</p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="112" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>المؤتمرات العلمية</strong> العديد من المؤتمرات حول المزيد من المعلومات وأحدث الأساليب والعلاج
                والعمليات</p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>الجوائز </strong> حصل أطبائنا على العديد من الجوائز وشهادات التقدير تقديراً لجهودهم في خدمة
                المرضى</p>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>تفاعل أفضل
              </h4>
              <p> هدفنا تقديم أفضل تواصل مع مرضانا وتوفير أقصي إحساس لهم بالراحه </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>خدمات صحية
              </h4>
              <p>هدفنا تقديم الخدمات الصحية المتخصصة لمرضانا

              </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>الطب الشخصي </h4>
              <p>تقديم الطب الشخصي، حيث يتم بناء الخطة العلاجية لكل مريض على حدا بناء على حالته واحتياجاته الطبية. </p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>الجراحة بدون ألم </h4>
              <p>إجراء العمليات بدون ألم كما أن السيدة الحامل تستطيع الحركة بكل سهولة بعد إجراء عملية الولادة بساعات
                قليلة</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{ asset('assets/img/features.jpg') }}");'
            data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>خدماتنا</h2>
          <p>يقدم مركز Elite Care رعاية علاجية شاملة لأمراض المشيمة المتقدمة والمشيمة الملتصقة وكل ما يتعلق بأمراض
            النساء والتوليد والصحة الإنجابية.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box divHover" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">الفحص الشامل </a></h4>
            <p class="description">فحص طبي شامل ودوري للأم وجنينها لمعرفة  مدى الضرر الناتج من الاصابة بتلك الأمراض ووضع
              الخطة العلاجية المناسبة. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box divHover" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">الصيدلية الإكلينيكة </a></h4>
            <p class="description">يتوفر لدينا قسم الصيدلة الإكلينيكية لإعداد جرعات الدواء الخاصة بكل حالة لحمايتها من
              أي نوع من الحساسية أو أي مرض مزمن. </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box divHover" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">الإستشارة </a></h4>
            <p class="description">إستشارة أطبائنا مباشرة طوال فترة الحمل وبعد الولادة مما يعطي الأم والأسرة إحساسًا
              بالأمان بأن هذا المرض لن يشكل أي تهديد أو خطر </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box divHover" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">التحاليل الجينية </a></h4>
            <p class="description">التحاليل الجينية للأم ولطفلها بعد الحمل للتأكد من عدم وجود أمراض متوارثة أو جينية  قد
              تضر بالطفل أو بنسله </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box divHover" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">الأشعة </a></h4>
            <p class="description">لدينا  أحدث تقنيات التصوير والأشعة والموجات فوق الصوتية التي تمكننا من متابعة الحالة
              الصحية للأم وجنينها طوال فترة الحمل.
              كما يمكنكم الإستمتاع بها في إلتقاط صور لأطفالكم وهم أجنة في أرحام أمهاتهم</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">التغذية</a></h4>
            <p class="description">لدينا خبراء تغذية من الدرجة الأولى الذين يقدمون برامج صحية جيدة المراجعة ومدروسة
              جيدًا ومصممة خصيصًا للحالة المحددة ، مما يضمن توفير جميع العناصر الغذائية اللازمة لصحة الأم وجنينها. </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>إحجز موعد</h2>
          <p>برجاء تسجيل البيانات لحجز موعد معنا وسوف نتصل بك لتأكيد تاريخ وتفاصيل الحجز والاستفسار عن أي معلومات إضافية
          </p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
          data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="بريدك الالكتروني" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="هاتفك" required>
            </div>
          </div>
          <div class="row">
            <div class=" form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="تاريخ الموعد"
                required>
            </div>



            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="الرسالة (اختياري)"></textarea>
            </div>
            <div class="my-3">
              <div class="loading">جار التحميل</div>
              <div class="error-message"></div>
              <div class="sent-message">تم إرسال طلب موعدك بنجاح. شكرًا لك!</div>
            </div>
            <div class="text-center"><button type="submit">إحجز موعد</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>التخصصات</h2>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column mod2">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>أمراض النساء والتوليد</h4>
                  <p>قسم الطب المختص برعاية المرأة</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>جراحة المسالك البولية</h4>
                  <p>
                    يعالج أطباء المسالك البولية مشاكل الجهاز البولي الأنثوي والتي تتأثر نتيجة أمراض المشيمة </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>التخدير</h4>
                  <p>
                    التخدير هو التخصص الطبي المعني بالرعاية المحيطة بالجراحة الشاملة للمرضى</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>التمريض</h4>
                  <p>
                    قسم التمريض هو الهيكل التنظيمي الذي من خلاله تقدم الممرضات الرعاية التمريضية للمرضى</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>أمراض النساء والتوليد</h3>
                <img src="{{ asset('assets/img/departments-1.jpg') }}" alt="" class="img-fluid">
                <p>قسم الطب المتخصص في رعاية المرأة أثناء الحمل والولادة وتشخيص وعلاج أمراض الأعضاء التناسلية الأنثوية
                </p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>جراحة المسالك البولية</h3>
                <img src="{{ asset('assets/img/departments-2.jpg') }}" alt="" class="img-fluid">
                <p>يعالج أطباء المسالك البولية مشاكل الجهاز البولي الأنثوي و يقومون بتشخيص وعلاج اضطرابات الكلى والحالب
                  والمثانة والبروستاتا والأعضاء التناسلية.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>التخدير </h3>
                <img src="{{ asset('assets/img/departments-3.jpg') }}" alt="" class="img-fluid">
                <p>التخدير هو التخصص الطبي المعني بالرعاية الشاملة المحيطة بالجراحة للمرضى قبل الجراحة وأثناءها وبعدها.
                  ويشمل التخدير وطب الآلام.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>التمريض</h3>
                <img src="{{ asset('assets/img/departments-4.jpg') }}" alt="" class="img-fluid">
                <p>قسم التمريض هو الهيكل التنظيمي الذي من خلاله تقدم الممرضات الرعاية التمريضية للمرضى. الغرض الأساسي من
                  خدمة التمريض هو توفير رعاية تمريضية شاملة وآمنة وفعالة وجيدة التنظيم من خلال موظفي القسم. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>آراء العملاء</h2>
          <p>آراءكم تعني الكثير لناء</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  دكتور محمد انا بشكر حضرتك جدا على تعبك معايا اثناء الحمل من اول ما تابعت مع حضرتك وبشكرك جداا على حسن
                  استماعك ليا وان حضرتك كنت دايما موجود و متواصل ف اى وقت بحتاج اسأل حضرتك عن حاجه واحساس الاطمئنان اللى
                  كنت حساه وانا داخله اولد و خرجت كويسه انا وابنى بفضل الله ثم حضرتك حقيقي حضرتك احسن دكتور نساء في
                  الدنيا شكرا جدا 😍😊😍😊
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/LOGO.jpg') }}" class="testimonial-img" alt="">
                <h3>آية حمدي</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  دكتور شاطر ومحترم جدا ربنا يوفقك يارب 🤲
                  فعلا الدكتور الفرفوش رزق 👍

                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/LOGO.jpg') }}" class="testimonial-img" alt="">
                <h3>عبير حسني</h3>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  بصراحه احسن دكتور تابعنا عنده مستمع جيد جدا معندوش حته يالا عشان اشوف الي بعدك ابدا وبيوجه صح وشاطر
                  جدا جدا جدا جدا
                  ويارب يكون كله في ميزان حسنات حضرتك
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/LOGO.jpg') }}" class="testimonial-img" alt="">
                <h3>عبد الرحمن أحمد</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  د محمد بجد مش عارفة اشكرك حضرتك ازاى ... ظروف ولادتى كانت أصعب من كل ولادة لكن بفضل الله ثم حضرتك كانت
                  اسهل واحدة ...
                  كانت ولادة بدون الم بمعنى الكلمة و اتحركت بعدها بسهولة و الله ما حستش بحاجة و بعد توكلى على ربنا وحود
                  حضرتك كان مطمنى ..
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                </p>

                <img src="{{ asset('assets/img/testimonials/LOGO.jpg') }}" class="testimonial-img" alt="">
                <h3>سارة محمد سعيد</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                  بجد من الناس الأخلاق بجد ونعمه الأخلاق والزوق بجد لو فضلات اشكرك العمر كله مش كفايه والله انت بعد ربنا
                  كانت سبب اني ربنا يكرمني على ايدك وفعلاً من دكتور شاطر جد والله انا بجد كانت رايح اول مره كانت فاقد
                  الأمل والله بجد اول كلمه طلعت مني ليه قولتله انا متفائل بوشك بجد والله مسبنيش في المستشفى بعد الولاده
                  بجد انا مبسوط اني عرفتك وبتشرف بيك وربنا يباركلك في أولادك وفي صحتك ويارب تكون احسن واكبر دكتور في مصر
                  شكرآ ليك ولزوقك ولاخلاقك بجد <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('assets/img/testimonials/LOGO.jpg') }}" class="testimonial-img" alt="">
                <h3>يوسف</h3>

              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>فريق العمل</h2>

        </div>

        <div class="row">



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="{{ asset('assets/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>ساره جيبسون</h4>
                <span>طبيب تخدير</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="{{ asset('assets/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>ويليام اندريسون</h4>
                <span>طبيب قلب</span>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{ asset('assets/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4>اماندا جيبسون</h4>
                <span>طبيبة اعصاب</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->


    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>موضوعات قد تهمك</h2>

        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">ما هي المشيمة الملتصقة؟ <i
                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>المشيمة الملتصقة هي إحدى مضاعفات الحمل عالية الخطورة التي تحدث عندما تصبح المشيمة مغروسة بعمق شديد في
                جدار الرحم
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">



              ما الذي يسبب المشيمة الملتصقة؟ <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p> يمكن أن تحدث المشيمة الملتصقة أثناء الحمل عندما تلتصق المشيمة بعمق شديد بجدار الرحم. يُعتقد أن هذه
                الحالة ناتجة عن تندب على بطانة الرحم
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">

              ما هي مخاطر المشيمة الملتصقة على الطفل؟ <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p> االولادة المبكرة والمضاعفات اللاحقة للطفل . وقد يكون النزيف خلال الثلث الثالث من الحمل علامة تحذير على
                وجود المشيمة الملتصقة ، وعندما تحدث المشيمة الملتصقة ، فإنها تؤدي عادةً إلى الولادة المبكرة </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">

              ما مدى شيوع المشيمة الملتصقة؟ <i class="bi bi-chevron-down icon-show"></i><i
                class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p> المشيمة الملتصقة أمر نادر الحدوث ، حيث تصيب 1.7 حالة حمل لكل 10000. ومع ذلك ، هناك بعض العوامل التي
                تزيد من المخاطر ، بما في ذلك ما إذا كنت قد خضعت لعملية قيصرية سابقة أو كنت تعاني من هبوط المشيمة
                (المشيمة المنخفضة
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"> كم من الوقت يستغرق التعافي من
              المشيمة الملتصقة؟ <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
            </div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>

                تتم جميع عمليات استئصال الرحم المصابة بالتصاق المشيمة بعد الولادة مباشرة. قد تتطلب الحالات الشديدة
                استئصال الرحم المتأخر بعد عدة أسابيع. في كلتا الحالتين ، ستبقى في المستشفى عدة أيام وقد يستغرق الشفاء
                التام حوالي ثمانية أسابيع
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question"> ما هي أعراض المشيمة الملتصقة؟ <i
                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>

                غالبًا لا تسبب المشيمة الملتصقة أي علامات أو أعراض أثناء الحمل ، على الرغم من احتمال حدوث نزيف مهبلي
                خلال الثلث الثالث من الحمل. من حين لآخر ، يتم الكشف عن المشيمة الملتصقة خلال الموجات فوق الصوتية
                الروتينية
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>تواصل معنا</h2>

        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13809.324560379293!2d31.3265744!3d30.0847013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf206cf5b3750b34f!2z2K_Zg9iq2YjYsSDZhtiz2KfYoSDZiNiq2YjZhNmK2K8g2K8gLtmF2K3ZhdivINi52KjYryDYp9mE2YHYqtin2K0g2KfZhNiz2YbZiti32Yk!5e0!3m2!1sar!2seg!4v1666969642266!5m2!1sar!2seg"
          frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>العنوان</h3>
                  <p>68 السيد الميرغني، المنتزه، قسم مصر الجديدة، محافظة القاهرة 11757</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>راسلنا</h3>
                  <p>info@elitecare.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>اتصل بنا </h3>
                  <p>+201101620826</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" required>
                </div>
                <div class="col form-group ">
                  <input type="email" class="form-control" name="email" id="email" placeholder="البريد الالكتروني"
                    required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="عنوان الرسالة"
                  required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="الرساله" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">جاري التحميل</div>
                <div class="error-message"></div>
                <div class="sent-message">تم ارسال رسالتك بنجاح شكرا لك</div>
              </div>
              <div class="text-center"><button type="submit">ارسل رساله</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection
