<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href=""/>
    <title>انجمن مدیریت پروژه</title>
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}">
    <link rel='stylesheet' href="{{asset('css/bootstrap.min.css')}}" type='text/css' media='all'/>
    <link rel="stylesheet" href="{{asset('css/stylefont.css')}}" type='text/css' media='all'>
    <link rel="stylesheet" href="{{asset('css/fontiran.css')}}" type='text/css' media='all'>
    <link rel="stylesheet" href="{{asset('css/all.css')}}" type='text/css' media='all'>
    <link rel="stylesheet" href="{{asset('css/style-main.css')}}" type='text/css' media='all'>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}" type='text/css' media='all'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body style="overflow-x: hidden">

<header id="header">

    <div class="header-top-bar back-dark-violet pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('img/logo.png')}}" alt="انجمن مدیریت پروژه">
                    <h1 class="text-white d-inline-block font-18 text-regular ml-2"
                        style="font-weight: bold;font-size: 27px;">انجمن مدیریت پروژه ایران</h1>
                </div>
                <div class="col-md-6 text-right">
                    <img src="{{asset('img/ipma-logo.png')}}" alt="انجمن مدیریت پروژه">
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
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
                                @auth()
                                    <a class="nav-link nav-login" href="{{route('profile',auth()->user()->slug)}}">
                                        <i class="fa fa-user mr-1"></i>
                                        <span>پروفایل</span>
                                    </a>
                                @else
                                    <a class="nav-link nav-login" data-toggle="modal" data-target="#ModalLogin">
                                        <i class="fa fa-user mr-1"></i>
                                        <span href="/res">   ورود کاربران</span>
                                    </a>
                                @endauth
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
                                    <a class="nav-link " href="{{route("main")}}">صفحه اول</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link " href="{{route('message.create')}}">تماس با ما</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">درباره
                                        انجمن</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{route('about-us')}}#history">تاریخچه</a>
                                        <a class="dropdown-item" href="{{route('about-us')}}#target">اهداف و نقشه
                                            راهبردی</a>
                                        <a class="dropdown-item" href="{{route('about-us')}}#creator">موسسین</a>
                                        <a class="dropdown-item" href="{{route('about-us')}}#board-of-directors">هیات
                                            مدیره</a>
                                        <a class="dropdown-item" href="{{route('about-us')}}#chart">چارت سازمانی</a>
                                        <div class="dropdown-divider">برای دانلود</div>
                                        <a class="dropdown-item" href="#">اسناد مرجع</a>
                                        <a class="dropdown-item" href="{{url('files/certificate.pdf')}}"
                                           target="_blank">مجوزها</a>
                                        <a class="dropdown-item" href="#">گزارش ها</a>
                                    </div>
                                </li>
                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        شبکه اعضا </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">كميته عضويت</a>
                                        <a class="dropdown-item" href="{{route('user.search')}}">يافتن اعضا</a>
                                        <a class="dropdown-item" href="#">شبكه اعضا جوان</a>
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
                                    {{--                                    <div class="dropdown-menu">--}}
                                    {{--                                        <a class="dropdown-item" href="#">Link 1</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#">Link 2</a>--}}
                                    {{--                                        <a class="dropdown-item" href="#">Link 3</a>--}}
                                    {{--                                    </div>--}}
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('search')}}">جستجو</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('job.index')}}">فرصت های شغلی</a>
                                </li>
                            @auth()
                                <!-- Dropdown -->
                                    @if(auth()->user()->roles == 0 || auth()->user()->roles == 1)
                                        <li class="nav-item ">
                                            <a class="nav-link" href="{{route('cms.index')}}">پنل مدیریت</a>
                                        </li>
                                    @endif
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{route('logout')}}">خروج</a>
                                    </li>
                            @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="slider-text pt-5 pb-5">
            <div class="row align-items-center justify-content-around">
                <div class="slider-form-out col-md-4 col-lg-2 order-2 order-md-1 z-index "
                     style="margin-right: -144px ;">
                    <input type="submit" value="هوادار شوید" style="transform: rotate(-90deg);margin-top: 150px;"
                           class="form-submit text-white font-16 text-medium">
                </div>
                <div class="col-md-6 order-1 order-md-2 " style="margin-right: 490px;margin-bottom: 90px">
                    <h2 class="font-28 text-white mb-5 "><span class="text-yellow">{{$ipma->head_title}}</span></h2>
                    <h3 class="font-22 text-white mb-4">{{$ipma->head_subtitle}}</h3>
                    <p class="font-18 text-white ">{{$ipma->head_description}}</p>
                    <a class="btn btn-white font-16 text-black mt-5">در رویداد شرکت کنید</a>
                </div>
            </div>
        </div>
    </div>
</header>

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

                            <div
                                class="popular-pack-in-info mt-xl-0 mt-4 mt-sm-0 mt-md-4 order-2 order-sm-1   order-md-2 order-lg-1">
                                <div class="popular-pack-in-info-titles">
                                    <h4 class="popular-pack-in-info-title font-16 text-medium text-black mb-3 ">
                                        <a class="text-black hover-text-black"
                                           href="{{route('event',[$event->id])}}">
                                            {{$event->title}}
                                        </a></h4>
                                    <div class="popular-pack-in-info-title-sub text-yellow font-16 text-light2 mb-2">
                                        {{explode(" ",jdate($event->from_date))[0]}}
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
                                    <a href="{{route('event',[$event->id])}}" class="popular-pack-in-img-more font-16">شرکت
                                        در رویداد</a>

                                </div>
                            </div>
                            <div class="popular-svg">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 361.1 62.7">
                                    <path
                                        d="M59.2,19.4c91.2-28.9,166.6,27.1,224,33.9c37.7,4.5,67.8-9.4,77.9-53.3H0v62.4C11.5,45.7,30.5,29.4,59.2,19.4z"></path>
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

                <h2 class="text-center font-24 text-medium text-black col-12 mb-4">آخرین رویدادها
                </h2>

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

                                <div
                                    class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                    <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                </div>
                            </div>

                        </div>
                        <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                            <div class="row align-items-center">
                                <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                    <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span
                                            class="pl-3">۲۶/۵/۹۸</span>
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

                                <div
                                    class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
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

                                <div
                                    class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                    <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                </div>
                            </div>

                        </div>
                        <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                            <div class="row align-items-center">
                                <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                    <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span
                                            class="pl-3">۲۶/۵/۹۸</span>
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

                                <div
                                    class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
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

                                <div
                                    class="last-pack-content-in-more text-center col-12 col-lg-2 text-lg-left text-center">
                                    <a href="/" class="btn btn-white-border">شرکت در رویداد</a>
                                </div>
                            </div>

                        </div>
                        <div class="last-pack-content-in col-12 col-md-6 col-lg-12  mb-3 mt-3 pt-4 pb-4">
                            <div class="row align-items-center">
                                <div class="last-pack-content-in-time col-12 col-lg-2 text-lg-left text-center">
                                    <p class="text-medium font-14 mb-1 mb-lg-2">شروع ثبت نام :<span
                                            class="pl-3">۲۶/۵/۹۸</span>
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

                                <div
                                    class="last-pack-content-in-more text-center text-lg-left text-center col-12 col-lg-2">
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
                    <a class="btn text-center last-pack-calender-btn" href="{{route('event.calender')}}">مشاهده تقویم رویدادها</a>
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
                                <a class="Committee-icons-text d-block text-white text-medium" href="/">
                                    شاخه ها </a>
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
                    <h2 class="font-24 text-medium text-black  mb-4">اخبارانجمن</h2>
                </div>
                <div class="col-12 col-lg-7 align-self-end">
                    <p class="text-black-light font-16">
                </div>
                <div class="col-12 col-lg-2">
                    <a href="/" class="btn btn-white-border">آرشیو خبر</a>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($news as $singleNews)
                    <div class="col-12 col-md-4 mb-3 mb-md-0">
                        <div class="card card-news">
                            <div class="card-news-img">
                                <img src="{{asset('img/events/'.$singleNews->photo)}}" class=""
                                     style="width: 100% !important;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title font-14 text-black">
                                    <span>[</span>{{\Morilog\Jalali\Jalalian::forge($singleNews->created_at)->format('%A, %d %B %y')}}
                                    <span>]</span>
                                </h5>
                                <p class="card-text font-14">{{$singleNews->title}}</p>
                                <a href="{{route('news.show',[$singleNews->id])}}"
                                   class="btn btn-news text-yellow text-medium">ادامه مطلب</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--                    <div class="col-12 col-md-4 mb-3 mb-md-0">--}}
                {{--                        <div class="card card-news">--}}
                {{--                            <div class="card-news-img">--}}
                {{--                                <img src="img/last3.jpg" class="" alt="...">--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>--}}
                {{--                                </h5>--}}
                {{--                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و--}}
                {{--                                    با--}}
                {{--                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>--}}
                {{--                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-md-4 mb-3 mb-md-0">--}}
                {{--                        <div class="card card-news">--}}
                {{--                            <div class="card-news-img">--}}
                {{--                                <img src="img/last2.jpg" class="" alt="...">--}}
                {{--                            </div>--}}
                {{--                            <div class="card-body">--}}
                {{--                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>--}}
                {{--                                </h5>--}}
                {{--                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و--}}
                {{--                                    با--}}
                {{--                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>--}}
                {{--                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-12 col-md-4 ">--}}
                {{--                        <div class="card card-news">--}}
                {{--                            <div class="card-news-img">--}}
                {{--                                <img src="img/last3.jpg" class="" alt="...">--}}
                {{--                            </div>--}}

                {{--                            <div class="card-body">--}}
                {{--                                <h5 class="card-title font-14 text-black"><span>[</span> 23 شهریور 1398 <span>]</span>--}}
                {{--                                </h5>--}}
                {{--                                <p class="card-text font-14">ورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و--}}
                {{--                                    با--}}
                {{--                                    استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله </p>--}}
                {{--                                <a href="/" class="btn btn-news text-yellow text-medium">ادامه مطلب</a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
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

<footer id="footer">
    <div class="container">
        <div class="row mb-3">
            <div class="contact-footer col-12 col-lg-5">
                <div class="footer-logo mb-3">
                    <img src="img/logo-foo.png" alt="..">
                    <span class="text-regular text-white">تماس با انجمن</span>
                </div>
                <div class="contact-footer-in">
                    <p class="text-gray font-14"><span>آدرس:</span><span>{{$ipma->address}}</span>
                    </p>
                </div>
                <div class="contact-footer-in">
                    <p class="text-gray font-14"><span>تلفن:</span><span>{{$ipma->tel}}</span></p>
                </div>
                <div class="contact-footer-in">
                    <p class="text-gray font-14"><span>نمابر:</span><span>{{$ipma->fax}}</span></p>
                </div>
                <div class="contact-footer-in">
                    <p class="text-gray font-14">
                        <span>پست الكترونيك دبیرخانه:</span><span>{{$ipma->secretariat_email}}</span></p>
                </div>
                <div class="contact-footer-in">
                    <p class="text-gray font-14">
                        <span>پست الکترونیک عضویت: </span><span>{{$ipma->membership_email  }}</span></p>
                </div>
            </div>
            <div class="link-footer col-6 col-sm-6 col-md-3 col-lg-2">
                <p class="text-regular text-white pt-2">لینک انجمن</p>
                <nav class="navbar p-0">

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">تاریخچه انجمن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">سازمان انجمن</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">اساسنامه و مجوزها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">اعضای هیات مدیره</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">موسسین انجمن</a>
                        </li>

                    </ul>

                </nav>
            </div>
            <div class="link-footer col-6 col-sm-6 col-md-3 col-lg-2">
                <p class="text-regular text-white pt-2">خدمات انجمن</p>
                <nav class="navbar p-0">

                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">دوره های آموزشی</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">کارگاه ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">همایش ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">جوایز</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">گواهی نامه ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-gray font-14" href="#">مسابقات</a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="register-footer col-12 col-md-6 col-lg-3">
                <p class="text-regular text-white pt-2">عضویت در خبرنامه</p>
                <form action="">
                    <div class="form-group">

                        <input type="email" class="form-control" placeholder="ایمیل" id="email">
                    </div>

                    <button type="submit" class="btn ">عضویت</button>
                </form>
            </div>
        </div>
        <div class="footer-copy row align-items-center pt-4 pb-3">

            <div class="col-12 col-lg-6 text-center text-lg-left">
                <p class="text-gray font-14 ">تمامی حقوق این سایت محفوظ و متعلق به انجمن پروژه ایران می باشد</p>
            </div>
            <div class="col-12 col-lg-6 ">
                <ul class="social m-0 text-center text-lg-right">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>

                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade " id="ModalLogin">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header pb-0 ">

                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center pt-0 pr-3 pl-3 pr-sm-5 pl-sm-5">
                <img src="{{asset('img/logo-login.png')}}" alt="" class="mb-4">
                <h4 class="modal-title text-black">ورود به انجمن مدیریت پروژه</h4>
                <p class="text-black-light font-18 text-light2 mt-4 mb-4">جهت ورورد به سایت اطلاعات زیر را تکمیل
                    نمایید</p>
                <form class="sidebar-form-body">
                    <div class="input-form">
                        <input type="text" name="username" id="input_username" value="" size="40" aria-invalid="false"
                               placeholder="ایمیل یا شماره موبایل*">
                        <img src="{{asset('img/003-envelope.png')}}" class="form-icon">
                        <div id="username-error" class="error text-danger pl-3" for="username"
                             style="display: block;">
                            <strong id="username-error-text"></strong>
                        </div>
                    </div>
                    <div class="input-form">
                        <input class="mb-3" type="password" name="password" id="input_password" value="" size="40"
                               aria-invalid="false" placeholder="پسورد*">
                        <img src="{{asset('img/002-telephone.png')}}" class="form-icon">
                        <div id="password-error" class="error text-danger pl-3" for="password"
                             style="display: block;">
                            <strong id="password-error-text"></strong>
                        </div>
                    </div>
                    <a href="/" class="d-block text-left text-dark-violet font-14 text-light2">رمز عبور خود را فراموش
                        کرده ام؟</a>
                    <div id="text-error" class="error text-danger pl-3"
                         style="display: block;">
                        <strong id="text-error"></strong>
                    </div>
                    <input type="button" value="وارد شوید" class="form-submit mt-5 text-white font-16 text-medium"
                           onclick="login()">

                </form>
            </div>


        </div>
    </div>
</div>

<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script type='text/javascript' src='{{asset('js/bootstrap.min.js')}}'></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.logo-slid').slick({
            dots: false,
            infinite: true,
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
<script>
    function clearLoginErrors() {
        $('#text-error').text('');
        $('#username-error-text').text('');
        $('#password-error-text').text('');
    }

    function login() {
        clearLoginErrors();
        var username = $('#input_username').val();
        var password = $('#input_password').val();
        $.post("/login",
            {
                '_token': $('meta[name=csrf-token]').attr('content'),
                username: username,
                password: password
            },
            function (json) {
                if (!json.status) {
                    if (json.code == 100) {
                        $('#text-error').text(json.errors.username[0]);
                    } else {
                        if (typeof json.errors.username !== 'undefined') {
                            $('#username-error-text').text(json.errors.username[0]);
                        }
                        if (typeof json.errors.password !== 'undefined') {
                            $('#password-error-text').text(json.errors.password[0]);
                        }
                    }
                } else {
                    location.reload();
                }
            });
    }
</script>
</body>
</html>
