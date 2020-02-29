@extends('cms.master')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="col-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">ویرایش خبر</h4>
            </div>
            <div class="card-body table-responsive yourPlan pack-info">
                <div class="row">
                    <div class="col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
                    <div class="col-lg-10 col-md-10 col-sm-12">
                        <div class="card card-stats">
                            <div class="card-header card-header-warning card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">sync</i>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{route('cms.user.update',[$news->id])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>عنوان خبر</label>
                                            <input class="form-control" name="title" type="text" placeholder="عنوان خبر"
                                                   value="{{$news->title}}">
                                            @error('title')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>خلاصه خبر</label>
                                            <input class="form-control" name="description" type="text"
                                                   placeholder="خلاصه خبر"
                                                   value="{{$news->description}}">
                                            @error('description')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-lg-12 mb-4">
                                            <label>متن خبر</label>
                                            <div class="editor">
                                                <textarea id="detail" name="detail"
                                                          class="form-control ckeditor cke_rtl">{{ $news->detail }}</textarea>
                                            </div>
                                            @error('detail')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-4">
                                            <label>عکس خبر ( برای تغییر عکس ، عکس جدید را بارگذاری کنید )</label>
                                            <input class="form-control-file my-2" type="file" name="image" id="image">
                                            @error('image')
                                                <div class="error text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mb-4">

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-success" type="submit">ویرایش</button>
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
    {{--    <script src="{{ asset('material/js/core/jquery.min.js') }}"></script>--}}
    <script type="text/javascript">
        CKEDITOR.replace('detail', {
            contentsLangDirection: "rtl",
        });
    </script>
@endsection