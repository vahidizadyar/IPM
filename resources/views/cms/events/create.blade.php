@extends('cms.master')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">افزودن رویداد</h4>
            </div>
            <div class="card-body table-responsive yourPlan pack-info">
                <div class="row">
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">add_box</i>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data" id="ccreeateForm">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>عنوان رویداد</label>
                                            <input class="form-control" name="title" type="text"
                                                   placeholder="عنوان رویداد"
                                                   value="{{old('title')}}">
                                            @if($errors->has('title'))
                                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>خلاصه دوره</label>
                                            <input class="form-control" name="description" type="text"
                                                   placeholder="خلاصه دوره"
                                                   value="{{old('description')}}">
                                            @if($errors->has('description'))
                                                <div class="error text-danger">{{ $errors->first('description') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>سرفصل های دوره</label>
                                            <div class="editor">
                                                <textarea id="course_headings" name="course_headings"
                                                          class="form-control ckeditor cke_rtl">{{ old('course_headings') }}</textarea>
                                            </div>
                                            @if($errors->has('course_headings'))
                                                <div class="error text-danger">{{ $errors->first('course_headings') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>متن رویداد</label>
                                            <div class="editor">
                                                <textarea id="detail" name="detail"
                                                          class="form-control ckeditor cke_rtl">{{ old('detail') }}</textarea>
                                            </div>
                                            @if($errors->has('detail'))
                                                <div class="error text-danger">{{ $errors->first('detail') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <lable>از تاریخ</lable>
                                            <input class="form-control datePickerInputs" name="from_date_display" id="from_date_display"
                                                   type="text"
                                                   placeholder="از تاریخ"
                                                   value="{{old('from_date_display')}}">
                                            <input class="form-control datePickerInputs" name="from_date" id="from_date"
                                                   type="hidden"
                                                   value="{{old('from_date')}}">
                                            @if($errors->has('from_date'))
                                                <div class="error text-danger">{{ $errors->first('from_date') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <lable>تا تاریخ</lable>
                                            <input class="form-control datePickerInputs" name="to_date_display" id="to_date_display"
                                                   type="text"
                                                   placeholder="تا تاریخ"
                                                   value="{{old('to_date_display')}}">
                                            <input class="form-control datePickerInputs" name="to_date" id="to_date"
                                                   type="hidden"
                                                   value="{{old('to_date')}}">
                                            @if($errors->has('to_date'))
                                                <div class="error text-danger">{{ $errors->first('to_date') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>تاریخ شروع ثبت نام</label>
                                            <input class="form-control datePickerInputs" name="start_register_date_display"
                                                   type="text"
                                                   id="start_register_date_display"
                                                   placeholder="تاریخ شروع ثبت نام"
                                                   value="{{old('start_register_date_display')}}">
                                            <input class="form-control " name="start_register_date"
                                                   type="hidden"
                                                   id="start_register_date"
                                                   value="{{old('start_register_date')}}">
                                            @if($errors->has('start_register_date'))
                                                <div class="error text-danger">{{ $errors->first('start_register_date') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>قیمت (ریال به صورت عدد)</label>
                                            <input class="form-control" name="price" type="text" placeholder="قیمت"
                                                   value="{{old('price')}}">
                                            @if($errors->has('price'))
                                                <div class="error text-danger">{{ $errors->first('price') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>شماره تلفن</label>
                                            <input class="form-control" name="tel" type="text" placeholder="شماره تلفن"
                                                   value="{{old('tel')??"(5خط) 88229406 021"}}">
                                            @if($errors->has('tel'))
                                                <div class="error text-danger">{{ $errors->first('tel') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>آدرس</label>
                                            <input class="form-control" name="address" type="text" placeholder="آدرس"
                                                   value="{{old('address')??":تهران، امیرآباد شمالی، بالاتر از بزرگراه جلال آل احمد، پردیس دانشکده های فنی دانشگاه تهران، ساختمان انستیتو مهندسی نفت، طبقه همکف"}}">
                                            @if($errors->has('address'))
                                                <div class="error text-danger">{{ $errors->first('address') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>عرض جغرافیایی</label>
                                            <input class="form-control" name="latitude" type="text"
                                                   placeholder="عرض جغرافیایی"
                                                   value="{{old('latitude')??35.733249}}">
                                            @if($errors->has('latitude'))
                                                <div class="error text-danger">{{ $errors->first('latitude') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>طول جغرافیایی</label>
                                            <input class="form-control" name="longitude" type="text"
                                                   placeholder="طول جغرافیایی"
                                                   value="{{old('longitude')??51.388087}}">
                                            @if($errors->has('longitude'))
                                                <div class="error text-danger">{{ $errors->first('longitude') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>دسته بندی</label>
                                            <select class="form-control" name="event_category_id">
                                                @foreach(\App\EventCategory::all() as $category)
                                                    <option value="{{$category->id}}"> {{$category->name}} </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('event_category_id'))
                                                <div class="error text-danger">{{ $errors->first('event_category_id') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>استان</label>
                                            <select class="form-control" name="province_id">
                                                @foreach(\App\Province::all() as $province)
                                                    <option value="{{$province->id}}" @if($province->id == 24) selected @endif> {{$province->title}} </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('province_id'))
                                                <div class="error text-danger">{{ $errors->first('province_id') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>شاخه</label>
                                            <select class="form-control" name="branch_id">
                                                <option value="0">هیچ کدام</option>
                                                @foreach($branchs as $branch)
                                                    <option value="{{$branch->id}}" > {{$branch->title}} </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('branch_id'))
                                                <div class="error text-danger">{{ $errors->first('branch_id') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group col-lg-6 mb-4">
                                            <label>کارگروه</label>
                                            <select class="form-control" name="working_group_id">
                                                <option value="0">هیچ کدام</option>
                                                @foreach($workGroups as $group)
                                                    <option value="{{$group->id}}"  > {{$group->title}} </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('working_group_id'))
                                                <div class="error text-danger">{{ $errors->first('working_group_id') }}</div>
                                            @endif
                                        </div>

                                        <div class="form-group col-lg-6 mb-4">
                                            <lable>کمیته</lable>
                                            <select class="form-control" name="committee_id">
                                                <option value="0">هیچ کدام</option>
                                                @foreach($committee as $committe)
                                                    <option value="{{$committe->id}}" {{ ($committe->id == request()->all('committee_id')) ? 'selected' : '' }} > {{$committe->title}} </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('event_category_id'))
                                                <div class="error text-danger">{{ $errors->first('event_category_id') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-lg-6 mb-4 mt-3">
                                            <label>عکس رویداد</label>
                                            <input class="form-control-file my-2" type="file" name="image" id="image">
                                            @if($errors->has('image'))
                                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                                            @endif
                                        </div>

                                        <div class="col-12 mb-4 mt-3 form-group">
                                            <label>لینک</label>
                                            <input class="form-control my-2" type="url" name="link"
                                                   placeholder="مثلا http://www.example.com یا https://example.com "
                                            >
                                            @if($errors->has('link'))
                                                <div class="error text-danger">{{ $errors->first('link') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-4 ">
                                            <label class="col-1">انتشار</label>
                                            <input class="option-input"
                                                   name="state" type="checkbox" @if((old('state') ?? request('state'))== 1) checked @endif >
                                            @if($errors->has('state'))
                                                <div class="error text-danger">{{ $errors->first('state') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-4 ">
                                            <label class="col-2">مخاطبین</label>
                                            <input class="form-control "
                                                   name="contacts" type="text" value="{{(old('contacts') ?? request('contacts'))}}">
                                            @if($errors->has('contacts'))
                                                <div class="error text-danger">{{ $errors->first('contacts') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-lg-12 mb-4 ">
                                            <label class="col-1">مدرس</label>
                                            <input class="form-control "
                                                   name="teacher" type="text" value="{{(old('teacher') ?? request('teacher'))}}" >
                                            @if($errors->has('teacher'))
                                                <div class="error text-danger">{{ $errors->first('teacher') }}</div>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-success" type="submit">افزودن</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('material/js/core/jquery.min.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('detail', {
            contentsLangDirection: "rtl",
        });
        CKEDITOR.replace('course_headings', {
            contentsLangDirection: "rtl",
        });
        $(document).ready(function() {
            $("#to_date_display").pDatepicker(
                {
                    initialValue:false,
                    responsive:true,
                    format:'L H:m',
                    altFormat:'X',
                    altField: '#to_date',
                    calendarType:'persian',
                    timePicker: {
                        enabled:true,
                        second:{
                            enabled:false
                        }
                    },
                    toolbox: {
                        enabled: false,
                    }
                }
            );
            $("#from_date_display").pDatepicker(
                {
                    initialValue:false,
                    responsive:true,
                    format:'L H:m',
                    altFormat:'X',
                    altField: '#from_date',
                    calendarType:'persian',
                    timePicker: {
                        enabled:true,
                        second:{
                            enabled:false
                        }
                    },
                    toolbox: {
                        enabled: false,
                    }
                }
            );
            $("#start_register_date_display").pDatepicker(
                {
                    initialValue:false,
                    responsive:true,
                    format:'L H:m',
                    altFormat:'X',
                    altField: '#start_register_date',
                    calendarType:'persian',
                    timePicker: {
                        enabled:true,
                        second:{
                            enabled:false
                        }
                    },
                    toolbox: {
                        enabled: false,
                    }
                }
            );
        });
    </script>
@endsection
