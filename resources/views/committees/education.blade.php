@extends('master')
@section('content')
    <main id="content-page" role="main">
        <div class="history-about pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        {{--<h1 class="font-23 text-yellow text-center text-light2 mb-4">معرفی شاخه ها </h1>--}}

                        <div class="card img-top-detail mb-3">
                            <div class="card-body">

                            </div>
                        </div>

                        <p class="text-black-light font-16 font-line-30">
                            معرفی کمیته آموزش
                            <br>
                            چشم‌انداز كميته آموزش:
                            <br>
                            شناخته شدن انجمن مديريت پروژه ايران به‌عنوان:
                            <br>
                            مرجع تصمیم‌گیری و اعتبار دهی آموزش‌های تخصصي مديريت پروژه كشور تا سال 1400
                            <br>
                            اهداف اصلي:
                            <br>
                            • اعتبار سازی براي گواهينامه آموزشي انجمن مديريت پروژه ايران
                            <br>
                            • استانداردسازي آموزش‌های مديريت پروژه‌ای در ايران
                            <br>
                            • طراحي و اجراي حداقل يك برنامه پودماني تربيت كارشناس مديريت پروژه
                            <br>
                            • ارتقاء مؤثر و هدفمند دانش مديريت پروژه در دو بعد تئوري و كاربردي
                            <br>
                            • ايجاد درآمد آموزشي در جهت تقويت و تحقق اهداف آموزشي درازمدت

                        </p>

                        <h4 class="card-title text-white m-0 text-center ">
                            اركان كميته آموزش
                        </h4>
                        <img src="{{asset('img/committees/education/chart.jpg')}}" />

                        <h4 class="card-title text-white m-0 text-center ">
                            اعضای کمیته آموزش
                        </h4>

                        <div class="row ">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="ceo-out">
                                    <div class="ceo-in">
                                        <div class="ceo-img">
                                            <img class="rounded" src="{{asset('img/committees/education/1.jpg')}}"
                                                 alt="انجمن مدیریت پروژه">
                                        </div>
                                        <div class="ceo-more-out hidden">
                                            <a href="#" class="ceo-more font-16"><i class="fas fa-address-card"></i>مشاهده
                                                رزومه</a>

                                        </div>
                                        <div class="ceo-text text-center">
                                            <p class="text-black text-medium font-16 mb-0 mt-3">
                                                مهندس حسین رادمهر
                                            </p>
                                            <p class="text-yellow font-16 m-0">
                                                رئیس کمیته آموزش

                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="ceo-out">
                                    <div class="ceo-in">
                                        <div class="ceo-img">
                                            <img class="rounded" src="{{asset('img/committees/education/2.jpg')}}"
                                                 alt="انجمن مدیریت پروژه">
                                        </div>
                                        <div class="ceo-more-out hidden">
                                            <a href="#" class="ceo-more font-16"><i class="fas fa-address-card"></i>مشاهده
                                                رزومه</a>

                                        </div>
                                        <div class="ceo-text text-center">
                                            <p class="text-black text-medium font-16 mb-0 mt-3">
                                                مهندس منصور فردوسی
                                            </p>
                                            <p class="text-yellow font-16 m-0">
                                                عضو کمیته آموزش
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div> 
                            <div class="col-12 col-sm-6 col-lg-3 ">
                                <div class="ceo-out">
                                    <div class="ceo-in">
                                        <div class="ceo-img">
                                            <img class="rounded" src="{{asset('img/committees/education/3.jpg')}}"
                                                 alt="انجمن مدیریت پروژه">
                                        </div>
                                        <div class="ceo-more-out hidden">
                                            <a href="#" class="ceo-more font-16"><i class="fas fa-address-card"></i>مشاهده
                                                رزومه</a>

                                        </div>
                                        <div class="ceo-text text-center">
                                            <p class="text-black text-medium font-16 mb-0 mt-3">
                                                دکتر شهرام قبادی
                                            </p>
                                            <p class="text-yellow font-16 m-0">
                                                عضو کمیته آموزش

                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="ceo-out">
                                    <div class="ceo-in">
                                        <div class="ceo-img">
                                            <img class="rounded" src="{{asset('img/committees/education/4.jpg')}}"
                                                 alt="انجمن مدیریت پروژه">
                                        </div>
                                        <div class="ceo-more-out hidden">
                                            <a href="#" class="ceo-more font-16"><i class="fas fa-address-card"></i>مشاهده
                                                رزومه</a>

                                        </div>
                                        <div class="ceo-text text-center">
                                            <p class="text-black text-medium font-16 mb-0 mt-3">
                                                مهندس سید وحید معینی
                                            </p>
                                            <p class="text-yellow font-16 m-0">
                                                عضو کمیته آموزش
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="ceo-out">
                                    <div class="ceo-in">
                                        <div class="ceo-img">
                                            <img class="rounded" src="{{asset('img/committees/education/5.jpg')}}"
                                                 alt="انجمن مدیریت پروژه">
                                        </div>
                                        <div class="ceo-more-out hidden">
                                            <a href="#" class="ceo-more font-16"><i class="fas fa-address-card"></i>مشاهده
                                                رزومه</a>

                                        </div>
                                        <div class="ceo-text text-center">
                                            <p class="text-black text-medium font-16 mb-0 mt-3">
                                                 دکتر امیر حسین خامنه
                                            </p>
                                            <p class="text-yellow font-16 m-0">
                                                عضو کمیته آموزش
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </main>
@endsection