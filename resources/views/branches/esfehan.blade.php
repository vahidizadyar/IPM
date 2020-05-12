@extends('master')
@section('header')

@stop

@section('content')

    <main id="content-page" role="main">
        <div class="history-about pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        {{--<h1 class="font-23 text-yellow text-center text-light2 mb-4">معرفی شاخه ها </h1>--}}

                        <div class="card img-top-detail mb-3">
                            <div class="card-body">
                                <h4 class="card-title text-white m-0 text-center">اعضاء هیأت رئیسه نمایندگی انجمن در استان اصفهان
                                </h4></div>
                        </div>
                        <p class="text-black-light font-16 font-line-30">
                            اطلاعات هیات موسس شاخه اصفهان
                            <br>
                            دومین جلسه هیئت موسس انجمن مدیریت پروژه ایران در استان اصفهان در تاریخ ۹۴/۰۵/۱۵ در محل سالن اجتماعات استانداری اصفهان و به ریاست آقای مهندس طرفه معاونت عمرانی استانداری اصفهان برگزار شد. در ابتدا و پس از قرائت دستور جلسه به استناد مفاد صورتجلسه مورخ ۹۴/۰۱/۲۷، لیست هیئت موسس انجمن مدیریت پروژه در استان اصفهان با توجه به امضاء شخصیت های حقیقی و حقوقی به شرح زیر نهایی گردید.
                            <br>
                            1-	جناب آقای مهندس محمد علی طرفه به نمایندگی از استانداری اصفهان
                            <br>
                            2-	جناب آقای دکتر ابطحی به نمایندگی از دانشگاه صنعتی اصفهان
                            <br>
                            3-	جناب آقای دکتر امیر حسین نوارچیان به نمایندگی از دانشگاه اصفهان
                            <br>
                            4-	جناب آقای مهندس نصوحی به نمایندگی از شهرداری اصفهان
                            <br>
                            5-	جناب آقای مهندس مرتضی طهرانی به نمایندگی از شرکت بین المللی صنایع نفت و گاز (OILMICO)
                            <br>
                            6-	جناب آقای مهندس مسعود صرامی به نمایندگی از شرکت پرستیژلند (سیتی سنتر اصفهان)
                            <br>
                            7-	جناب آقای مهندس سهیل مهابادی به نمایندگی از شرکت ساخت تجهیزات سپاهان (گروه مپنا)
                            <br>
                            8-	جناب آقای محمد فلاحتیان به نمایندگی از شرکت پرشین فولاد
                            <br>
                            9-	جناب آقای مهندس حمید ظهرابی به نمایندگی از اداره کل حفاظت محیط زیست استان اصفهان
                            <br>
                            10-	جناب آقای مهندس قاسم علی جباری به نمایندگی از اتاق بازرگانی، صنایع، معادن و کشاورزی اصفهان
                            <br>
                            11-	جناب آقای علی محمد رجالی به نمایندگی از شرکت پتروشیمی رجال
                            <br>
                            12-	جناب آقای مهندس عبدالله کوپایی به نمایندگی از ماهنامه دانش نما
                            <br>
                            13-	جناب آقای مهندس مهران محجوب نژاد به نمایندگی از شرکت فولاد تکنیک
                            <br>
                            14-	جناب آقای مهندس مهرداد ضیغمی به نمایندگی از شرکت تولید مواد اولیه الیاف مصنوعی (DMT)
                            <br>
                            15-	جناب آقای مهندس بانک به نمایندگی از شرکت خدمات علمی و صنعتی ایرانیان
                            <br>
                            16-	جناب آقای مهندس علیرضا همدانیان، معاون برنامه ریزی استانداری اصفهان
                            <br>
                            17-	جناب آقای ماشاالله کاظمی، مدیر کل دفتر فنی استانداری اصفهان
                            <br>
                            18-	جناب آقای دکتر بهروز ارباب شیرانی، عضو هیئت علمی دانشگاه صنعتی اصفهان
                            <br>
                            19-	جناب آقای دکتر غلامعلی رئیسی اردلی، عضو هیئت علمی دانشگاه صنعتی اصفهان
                            <br>
                            در ادامه جلسه انتخابات هیأت رئیسه برگزار شد و پس از شمارش آراء افراد زیر (به ترتیب حروف الفبا) به عنوان اعضاء هیأت  رئیسه و جناب آقای مهندس مهابادی به نمایندگی از شرکت ساخت تجهیزات سپاهان (گروه مپنا) به عنوان دبیر هیأت موسس نمایندگی انجمن مدیریت پروژه ایران در استان اصفهان انتخاب شدند:
                            <br>
                            - جناب آقای دکتر ابطحی به نمایندگی از دانشگاه صنعتی اصفهان
                            <br>
                            - جناب آقای مهندس قاسم علی جباری به نمایندگی از اتاق بازرگانی، صنایع، معادن و کشاورزی اصفهان
                            <br>
                            - جناب آقای مهندس مسعود صرامی به نمایندگی از شرکت پرستیژلند (سیتی سنتر اصفهان)
                            <br>
                            - جناب آقای مهندس مرتضی طهرانی به نمایندگی از شرکت بین المللی صنایع نفت و گاز (OILMICO)
                            <br>
                            - جناب آقای مهندس مهران محجوب نژاد به نمایندگی از شرکت فولاد تکنیک
                            <br>
                            تاریخ جلسه: ۱۵ مردادماه ۱۳۹۴
                            <br>

                        </p>

                        <h4 class="card-title v-purple text-white text-center mt-5 mb-3">
                            تماس با شاخه اصفهان
                        </h4>

                        <p>
                            تلفن : 5001-031  داخلی  5148     همراه : 09301374204
                            <br>
                            آدرس : اصفهان – ورودی جنوب سپاهان شهر - مجموعه اصفهان سیتی سنتر – طبقه سوم – رو به روی کهکشان عجایب – دفتر انجمن مدیریت پروژه شاخه اصفهان
                            <br>
                            ایمیل : isfahan@ipma.ir
                        </p>



                        <a class="btn btn-white-border " href="">لینک به سایت شاخه</a>

                    </div>
                </div>

                <div class="row mt-5 @if(count($events) == 0)hidden @endif">
                    <div class="v-purple col-12 mt-5 mb-5 row">
                        <h2 class="text-white font-24 text-medium col-10 ">رویداد های مرتبط با کمیته</h2>
                        <a href="{{route('events')}}" class="btn btn-white-border col-1">مشاهده تمامی رویداد</a>
                    </div>
                    @foreach($events as $event)
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card card-news">
                                <div class="card-news-img">
                                    <img src="{{asset('img/posts/'.$event->photo)}}" class=""
                                         style="width: 100% !important;">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title font-14 text-black">
                                        <span>[</span>{{\Morilog\Jalali\Jalalian::forge($event->created_at)->format('%A, %d %B %y')}}
                                        <span>]</span>
                                    </h5>
                                    <p class="card-text font-14">{{$event->title}}</p>
                                    <a href="{{route('news.show',[$event->id])}}"
                                       class="btn btn-news text-yellow text-medium">ادامه مطلب</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@stop
