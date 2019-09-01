@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">افزودن مزایده جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">مزایده ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن مزایده جدید
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
    <section class="tooltip-validations" id="tooltip-validation">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <label class="card-title primary" for="inputDanger"><strong>افزودن مزایده جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            @if(!isset($auction))
                            <form action="{{url("admin")}}/auction/add" method="post" class="needs-validation was-validated" novalidate="" enctype="multipart/form-data">
                                @else
                                    <form action="{{url("admin")}}/auction/update" method="post" class="needs-validation was-validated" novalidate=""  enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="{{$id}}">
                                @endif
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip01">عنوان</label>
                                        <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان مزایده" value="@if(isset($auction->title)){{$auction->title}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">توضیحات</label>
                                        <input type="text" name="desc" class="form-control position-relative" id="validationTooltip02" placeholder="توضیحات" value="@if(isset($auction->desc)){{$auction->desc}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">مبلغ شروع مزایده</label>
                                        <input type="text" name="price" class="form-control position-relative" id="validationTooltip02" placeholder="مبلغ مزایده" value="@if(isset($auction->price)){{$auction->price}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">مدت زمان مزایده</label>
                                        <input type="text" name="countdown" class="form-control position-relative" id="validationTooltip02" placeholder="مدت زمان" value="@if(isset($auction->countdown)){{$auction->countdown}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label>در اولویت باشد</label>
                                        <input type="checkbox" id="input-15" name="fav">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">تصویر</label>
                                        <input type="file" name="image" class="form-control position-relative" id="validationTooltip02"  required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        @if(!isset($auction))
                                            <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن مزایده</button>
                                        @else
                                            <button class="btn btn-success" type="submit" style="margin-top: 25px">ویرایش مزایده</button>
                                            <a class="btn btn-primary" href="{{url("admin/auction")}}" style="margin-top: 25px ">لغو ویرایش</a>
                                        @endif
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card" style="padding: 15px">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-primary white">
                            <tr>
                                <th>#</th>
                                <th>عکس مزایده</th>
                                <th>عنوان مزایده</th>
                                <th>مبلغ مزایده</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                                <th>تعریف گالری</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($auctions as $au)
                                <?php
                                $i++;
                                ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td><img src="{{url("upload/au")}}/{{$au->image}}" style="height: 70px"></td>
                                    <td>{{$au->title}}</td>
                                    <td>{{$au->price}}</td>
                                    <td><a href="{{url("admin")}}/auction/update/{{$au->id}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                    <td><a href="{{url("admin")}}/auction/delete/{{$au->id}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
                                    <td><a href="{{url("admin")}}/auction/gallery/{{$au->id}}" class="btn btn-icon btn-primary mr-1"><i class="ft-image"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    </div>
@endsection