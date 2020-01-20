@extends('master')
@section('header')
    @stop

@section('content')
<main id="content-page" role="main">
    <!-- calender main -->
    <div class="container">
        <div class="detail-main mt-5 mb-5">
            <div class="row">
                <div class="col-lg-9">
                        <div class="card img-top-detail" >
                            <img class="card-img-top" src="{{asset("img/events/$event->photo")}}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title text-white m-0">{{$event->title}}</h4>


                            </div>
                        </div>
                    <div class="text-detail mt-4">
                        <h2 class=" font-24 text-medium text-black  mb-4">توضیحات دوره
                        </h2>
                        {{--<p class=" text-black-light font-16 "></p>--}}
                        <p class=" text-black-light font-16 ">{{$event->description}}</p>

                    </div>
                    <div class="list-detail mt-4">
                        <h2 class=" font-24 text-medium text-black  mb-4">سر فصل های دوره
                        </h2>
                        <p>
                            {{$event->course_headings}}
                        </p>
                        {{--<ul class="list-detail-in">
                            <li class="text-black-light mb-2">فصل اول: کار با صفحات گسترده</li>
                            <li class="text-black-light mb-2">آشنایی با نرم افزار EXCEL 2016</li>
                            <li class="text-black-light mb-2">معرفی نرم افزار EXCEL</li>
                            <li class="text-black-light mb-2">بازکردن برنامه وایجاد فایل</li>
                            <li class="text-black-light mb-2">آشنایی با محیط کاریEXCEL </li>
                            <li class="text-black-light mb-2">بستن فایل</li>
                            <li class="text-black-light mb-2">مفاهیم اصل</li>
                            <li class="text-black-light mb-2">انتخاب ها</li>
                            <li class="text-black-light mb-2">حذف و اضافه کردن سطرها و ستون ها</li>
                            <li class="text-black-light mb-2">تغییر عرض ستون ها وارتفاع سطرها</li>
                            <li class="text-black-light mb-2">مخفی کردن ستون و ردیف </li>
                            <li class="text-black-light mb-2">ثابت کردن ستون و ردیف</li>
                            <li class="text-black-light mb-2">انتقال مکان نما به کمک کلیدهای میانبر</li>
                            <li class="text-black-light mb-2">تغییر جهت کلید Enter</li>
                            <li class="text-black-light mb-2">مخفی کردن عنوان ستون ها،شماره سطرها و خطوط سلول ها</li>

                        </ul>--}}
                    </div>
                    <div class="address-detail mt-4">
                        <h2 class=" font-24 text-medium text-black  mb-4">اطلاعات برگذاری
                        </h2>
                        <p class=" text-black-light font-16 ">
                            {{$event->address}}
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1020.2035107695417!2d{{$event->longitude}}!3d{{$event->latitude}}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e0728f1286b91%3A0xf8a61ce1468a9dcd!2sKuy-e-Daneshgah%2C%20District%206%2C%20Tehran%2C%20Tehran%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1578650567409!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="bar-detail pt-4 pb-4 pr-3 pl-3">
                        <h2 class="title-bar-detail text-white font-18 text-medium mb-4">زمانبندی دوره</h2>
                        <ul class="list-detail-in">
                            <li><span class="text-black pr-1 text-regular ">شروع ثبت نام : </span><span class="text-red">2/5/1398</span></li>
                            <li><span class="text-black pr-1 text-regular">شروع دوره : </span><span class="text-black-light">2/5/1398</span></li>
                            <li ><span class="text-black pr-1 text-regular">پایان دوره : </span><span class="text-black-light">2/5/1398</span></li>
                            <li ><span class="text-black pr-1 text-regular">زمان دوره : </span><span class="text-black-light">2/5/1398</span></li>

                        </ul>
                        <h2 class="title-bar-detail text-white font-18 text-medium mb-4">جزییات دوره</h2>

                        <ul class="list-detail-in">
                            {!! $event->detail  !!}
                        </ul>

                        <a href="/" class="btn btn-bar-detail mt-3 mb-4">میخواهم شرکت کنم</a>
                        <div class="d-flex justify-content-end mt-2">
                            <a href="/" class="ml-2">
                                <img src="{{asset('img/save.png')}}" alt="..">
                            </a>
                            <a href="/" class="ml-2">
                                <img src="{{asset('img/print.png')}}" alt="..">
                            </a>
                            <a href="/" class="ml-2">
                                <img src="{{asset('img/pdf.png')}}" alt="..">
                            </a>
                        </div>
                    </div>
                    <div class="bar-detail pt-4 pb-4 pr-3 pl-3 mt-4">
                        <h2 class="title-bar-detail text-white font-18 text-medium mb-4">دوره های مرتبط</h2>
                        @foreach($similars as $similar)
                        <div class="Related-post row mb-4 pr-3 pr-lg-0 pl-3 pl-lg-0">
                            <div class="col-12 col-sm-3 col-md-2 col-lg-5 col-xl-4">
                                <div class="Related-post-img ">
                                    <img class="rounded" src="{{asset("img/events/$similar->photo")}}" alt="">
                                </div>
                            </div>
                            <div class="Related-post-titles pl-0 col-12 col-sm-9 col-md-10 col-lg-7 col-xl-8 mt-2 mt-sm-0">
                                <h4 class="Related-post-title font-14 text-medium text-black mb-2 ">
                                    <a class="text-black hover-text-black" href="{{route('event',[$similar->id])}}" >
                                        {{$similar->title}}
                                </a></h4>
                                <div class="Related-post-title-sub text-yellow font-14 text-light2 mb-0">
                                    {{$similar->date}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

                </div>
    </div>

</main>

<script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>

@stop