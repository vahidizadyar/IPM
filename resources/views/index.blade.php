@extends('master')
@section('sidebar')
    <div class="sidebar ">
        <div class="header-menu pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg  navbar-dark col-12">


                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <ul class="navbar-nav nav-login-out ml-auto  order-lg-1">
                            <li class="nav-item ">
                                <a class="nav-link nav-login" data-toggle="modal" data-target="#ModalLogin">
                                    <i class="fa fa-user mr-1"></i>
                                    <span>   ورود کاربران</span>
                                </a>

                            </li>
                            <!-- Dropdown -->
                            <li class="nav-item dropdown nav-lang">
                                <a class="nav-link dropdown-toggle nav-lang-persian" href="#" id="navbardrop5"
                                   data-toggle="dropdown">
                                    <span>فارسی</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item nav-lang-eng" href="#"><span>انگلیسی</span></a>

                                </div>
                            </li>
                        </ul>
                        <!-- Navbar links -->
                        <div class="collapse navbar-collapse order-lg-0" id="collapsibleNavbar">
                            <ul class="navbar-nav header-main">
                                <li class="nav-item active">
                                    <a class="nav-link " href="#">صفحه اول</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">درباره انجمن</a>
                                </li>

                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        شبکه اعضا </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </li>
                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop2"
                                       data-toggle="dropdown">
                                        محصولات و خدمات </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </li>
                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop3"
                                       data-toggle="dropdown">
                                        ارکان انجمن </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Link 1</a>
                                        <a class="dropdown-item" href="#">Link 2</a>
                                        <a class="dropdown-item" href="#">Link 3</a>
                                    </div>
                                </li>

                            </ul>

                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <div class="slider-text pt-5 pb-5">
            <div class="container">
                <div class="row align-items-center justify-content-around">
                    <div class="slider-form-out col-md-6 col-lg-4 order-2 order-md-1 z-index">
                        <div class="sidebar-form">
                            <div class="sidebar-form-header text-center pb-3">
                                <p class="font-18 text-medium text-black sidebar-form-header-text pb-3">همین حالا در
                                    جریان قرار بگیر</p>
                                <p class="font-14 text-light2 text-black-light  pb-1">جهت در جریان قرار گرفتن تمام
                                    رویداد های
                                    انجمن فرم زیر را پر کنید</p>
                                <form class="sidebar-form-body">
                                    <div class="input-form">
                                        <input type="text" name="text-759" value="" size="40" aria-invalid="false"
                                               placeholder="نام و نام خانوادگی*">
                                        <img src="img/001-user.png" class="form-icon">

                                    </div>
                                    <div class="input-form">
                                        <input type="text" name="text-759" value="" size="40" aria-invalid="false"
                                               placeholder="کد ملی*">
                                        <img src="img/004-key.png" class="form-icon">
                                    </div>
                                    <div class="input-form">
                                        <input type="text" name="text-759" value="" size="40" aria-invalid="false"
                                               placeholder="شماره تماس*">
                                        <img src="img/002-telephone.png" class="form-icon">
                                    </div>
                                    <div class="input-form">
                                        <input type="email" name="text-759" value="" size="40" aria-invalid="false"
                                               placeholder="ایمیل*">
                                        <img src="img/003-envelope.png" class="form-icon">
                                    </div>
                                    <input type="submit" value="هوادار شوید"
                                           class="form-submit text-white font-16 text-medium">

                                </form>
                            </div>

                            <div class="sidebar-form-footer text-center pt-3 pb-3">
                                <p class="text-white font-14 text-regular  m-0">میخواهید عضو شوید؟ <a
                                            class="text-yellow" href="/">عضویت انجمن</a></p>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 order-1 order-md-2  ">
                        <h2 class="font-28 text-white mb-5">چهاردهمین <span class="text-yellow">کنفرانس بین المللی مدیریت پروژه</span>
                        </h2>
                        <h3 class="font-22 text-white mb-4">ثبت نام پیش از تاریخ ۲۰/۵/۹۸ دارای ۱۰ درصد تخفیف است</h3>
                        <p class="font-18 text-white ">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                            استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و</p>
                        <a class="btn btn-white font-16 text-black mt-5">در رویداد شرکت کنید</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <main id="content" role="main">
        <div class="popular-pack pt-5 pb-5 ">
            <div class="container">
                <div class="row">
                    <h2 class="text-center font-24 text-medium text-black col-12 mb-4 mb-sm-5"><span
                                class="text-yellow">پرطرفدارترین </span>رویدادها
                    </h2>
                    @foreach($events as $event)
                        <div class="col-12 col-md-6 mb-4">
                            <div class="popular-pack-in  d-flex flex-column flex-sm-row  flex-md-column flex-lg-row">

                                <div class="popular-pack-in-info mt-xl-0 mt-4 mt-sm-0 mt-md-4 order-2 order-sm-1   order-md-2 order-lg-1">
                                    <div class="popular-pack-in-info-titles">
                                        <h4 class="popular-pack-in-info-title font-16 text-medium text-black mb-3 ">
                                            <a class="text-black hover-text-black"
                                               href="{{route('event',[$event->id])}}">
                                                {{$event->title}}
                                            </a></h4>
                                        <div class="popular-pack-in-info-title-sub text-yellow font-16 text-light2 mb-2">
                                            {{$event->date}}
                                        </div>
                                    </div>
                                    <div class="popular-pack-in-info-title-excerpt text-black-light font-14 text-light2">
                                        {{substr($event->description,0,150)."..."}}
                                    </div>
                                </div>
                                <div class="popular-pack-in-images mt-4 mt-sm-0 order-1 order-sm-2  order-md-1 order-lg-2">
                                    <div class="popular-pack-in-img">
                                        <img class="rounded" src="img/events/{{$event->photo}}" alt="انجمن مدیریت پروژه">
                                    </div>
                                    <div class="popular-pack-in-img-mores">
                                        <a href="#" class="popular-pack-in-img-more font-16">شرکت در رویداد</a>

                                    </div>
                                </div>
                                <div class="popular-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.1 62.7">
                                        <path d="M59.2,19.4c91.2-28.9,166.6,27.1,224,33.9c37.7,4.5,67.8-9.4,77.9-53.3H0v62.4C11.5,45.7,30.5,29.4,59.2,19.4z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="last-pack pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <h3 class="font-20 text-yellow text-light2 text-center col-12 mb-3">رویدادها</h3>
                    <h2 class="text-center font-24 text-medium text-black col-12 mb-4">آخرین رویدادها
                    </h2>
                    <p class="col-md-6 text-center text-black-light font-16">لورم ایپسوم متن ساختگی با تولید سادگی
                        نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه </p>
                    <div class="w-100"></div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs d-block d-md-flex nav-justified last-pack-tabs col-12 mt-4">
                        <li class="nav-item">
                            <a class="nav-link active font-22 text-black text-regular" data-toggle="tab" href="#home">آزمون
                                ها

                                <p class="font-14 text-black-light text-regular m-0 m-md-2">تعداد آزمون ها
                                    <span>۲۵</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  font-22 text-black-light text-regular" data-toggle="tab" href="#menu1">جوایز
                                و مسابقات

                                <p class="font-14 text-black-light text-regular m-0 m-md-2">تعداد آزمون ها
                                    <span>۲۵</span></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-22 text-black-light text-regular" data-toggle="tab" href="#menu2">گواهینامه
                                ها

                                <p class="font-14 text-black-light text-regular m-0 m-md-2">تعداد آزمون ها
                                    <span>۲۵</span></p>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content col-12 last-pack-content ">
                        <div class="tab-pane row  active" id="home">
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time text-lg-left text-center col-12 col-lg-2">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last1.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>

                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex  align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last2.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex text-lg-left text-center  align-items-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last3.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex text-lg-left text-center align-items-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last3.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row fade" id="menu1">
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time text-lg-left text-center col-12 col-lg-2">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last1.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>

                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex  align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last2.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex text-lg-left text-center  align-items-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last3.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane row fade" id="menu2">
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time text-lg-left text-center col-12 col-lg-2">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last1.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>

                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex  align-items-center text-lg-left text-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last2.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                            <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                                <div class="row align-items-center">
                                    <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                        <p class="text-medium font-14  mb-1 mb-lg-2">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                                        </p>
                                        <p class="text-medium font-14 m-0">تاریخ برگزاری : <span
                                                    class="pl-3">۲۶/۵/۹۸</span></p>
                                    </div>
                                    <div class="col-12 col-lg-8 d-lg-flex text-lg-left text-center  align-items-center">
                                        <div class="last-pack-content-in-img mt-3 mt-lg-0 mb-3 mb-lg-0">
                                            <div class="last-pack-content-in-img-in">
                                                <img src="img/last3.jpg" alt="anjoman">
                                            </div>

                                        </div>
                                        <div class="last-pack-content-in-description pl-3">
                                            <h2 class="text-black font-16 text-medium mb-3">آزمون اخذ گواهینامه های
                                                سطوح </h2>
                                            <h3 class="text-light2 text-black-light font-14">لورم ایپسوم متن ساختگی با
                                                تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                                برای شرایط</h3>
                                        </div>
                                    </div>

                                    <div class="last-pack-content-in-more text-lg-left text-center col-12 col-lg-2">
                                        <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center last-pack-calender">
                        <a class="btn text-center last-pack-calender-btn" href="/">مشاهده تقویم رویدادها</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Committee  ">
            <div class="d-none d-lg-block container-fluid Committee-cont">
                <div class="row Committee-cont">
                    <div class="col-12 col-lg-5 Committee-cont Committee-violet">


                    </div>
                    <div class="col-12 col-lg-7">

                    </div>
                </div>

            </div>
            <div class=" Committee-content ">
                <div class="container">
                    <div class="row  align-items-center">
                        <div class="col-12 col-lg-5 Committee-icons">
                            <div class="row">
                                <div class="col-6 text-center bl-1 bb-1 pt-5 pb-5">
                                    <img class="mb-3" src="img/003-patent-1.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">مرکز
                                        گواهینامه ها</a>
                                </div>
                                <div class="col-6 text-center  bb-1 pt-5 pb-5">
                                    <img class="mb-3" src="img/006-sports-and-competition-1.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">کمیته جایزه
                                        ها</a>
                                </div>
                                <div class="col-6 text-center bl-1 bb-1 pt-5 pb-5">
                                    <img class="mb-3" src="img/001-user-group.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">کمیته
                                        عضویت</a>
                                </div>
                                <div class="col-6 text-center  bb-1 pt-5 pb-5">
                                    <img class="mb-3" src="img/009-exam.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">کمیته
                                        آموزش</a>
                                </div>
                                <div class="col-6 text-center bl-1  pt-5 pb-5">
                                    <img class="mb-3" src="img/002-loupe.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">کمیته
                                        پژوهش</a>
                                </div>
                                <div class="col-6 text-center pt-5 pb-5">
                                    <img class="mb-3" src="img/003-crowd-of-users.png" alt="anjoman">
                                    <a class="Committee-icons-text d-block text-white text-medium" href="/">کمیته
                                        گردهمایی </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-none d-lg-block col-lg-2"></div>
                        <div class="col-12 col-lg-5 Committee-text pl-0 pt-5 pt-lg-0 text-center text-lg-left">
                            <h2 class="font-26 text-white mb-4">چهاردهمین <span class="text-yellow">کنفرانس بین المللی مدیریت پروژه</span>
                            </h2>
                            <h3 class="font-20 text-white mb-5">ثبت نام پیش از تاریخ ۲۰/۵/۹۸ دارای ۱۰ درصد تخفیف
                                است</h3>
                            <p class="font-18 text-white text-center ">شروع ثبت نام :<span class="pl-3">۲۶/۵/۹۸</span>
                            </p>
                            <div class="text-center">
                                <a class="btn btn-violet font-16 text-black mt-3">در رویداد شرکت کنید</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="news pt-5 pb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-3">
                        <h3 class="font-20 text-yellow text-light2 mb-3">اخبارانجمن</h3>
                        <h2 class="font-24 text-medium text-black  mb-4">از انجمن بیشتر بدانید
                        </h2>
                    </div>
                    <div class="col-12 col-lg-7 align-self-end">
                        <p class="text-black-light font-16">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                            با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه </p>

                    </div>
                    <div class="col-12 col-lg-2">
                        <a href="/" class="btn btn-white-border">بیشتر بخوانید</a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news-img">
                                <img src="img/last3.jpg" class="" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>
                                </h5>
                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                    با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news-img">
                                <img src="img/last2.jpg" class="" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>
                                </h5>
                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                    با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <div class="card card-news">
                            <div class="card-news-img">
                                <img src="img/last3.jpg" class="" alt="...">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>
                                </h5>
                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و
                                    با
                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>
                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="counter pt-0 pt-md-5 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="counters pt-4 pb-4 justify-content-around  row">
                            <div class="counter-in text-center col-6 col-md-3 mb-4 mb-md-0">

                                <h2 class="timer count-title count-number text-white font-42 text-bold" data-to="300"
                                    data-speed="1500"></h2>
                                <p class="count-text text-yellow font-18 text-regular m-0">شمارش پروژه ها</p>
                            </div>
                            <div class="counter-in text-center col-6  col-md-3 mb-4 mb-md-0">

                                <h2 class="timer count-title count-number text-white font-42 text-bold" data-to="60"
                                    data-speed="1500"></h2>
                                <p class="count-text text-yellow font-18 text-regular m-0">شمارش پروژه ها</p>
                            </div>
                            <div class="counter-in text-center col-6 col-md-3  mb-md-0">

                                <h2 class="timer count-title count-number text-white font-42 text-bold" data-to="100"
                                    data-speed="1500"></h2>
                                <p class="count-text text-yellow font-18 text-regular m-0">شمارش پروژه ها</p>
                            </div>
                            <div class="counter-in text-center col-6 col-md-3 ">

                                <h2 class="timer count-title count-number text-white font-42 text-bold" data-to="40"
                                    data-speed="1500"></h2>
                                <p class="count-text text-yellow font-18 text-regular m-0">شمارش پروژه ها</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="logo mt-5 pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-sm-5 pt-sm-5">
                        <div class="logo-slid  ">
                            <div><img src="img/b1.png" alt=""></div>
                            <div><img src="img/b2.png" alt=""></div>
                            <div><img src="img/b3.png" alt=""></div>
                            <div><img src="img/b4.png" alt=""></div>
                            <div><img src="img/b5.png" alt=""></div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </main>
@endsection
<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.logo-slid').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 5,
            rtl: true,

            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true

                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });


</script>
<script>
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>