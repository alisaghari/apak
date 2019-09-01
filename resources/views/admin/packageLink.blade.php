@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">افزودن پکیج متنی جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">پکیج ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن پکیج جدید
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
                        <label class="card-title primary" for="inputDanger"><strong>افزودن پکیج جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            @if(!isset($package))
                            <form action="{{url("admin")}}/package/link/add" method="post" class="needs-validation was-validated" novalidate="">
                                @else
                                    <form action="{{url("admin")}}/package/link/update" method="post" class="needs-validation was-validated" novalidate="">
                                        <input type="hidden" name="id" value="{{$id}}">
                                @endif
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip01">نام</label>
                                        <input type="text" name="title" class="form-control position-relative" id="validationTooltip01"  placeholder="عنوان پکیج" value="@if(isset($package->title)){{$package->title}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">تعداد کلیک</label>
                                        <input type="text" name="count" class="form-control position-relative" id="validationTooltip02" placeholder="تعداد کلیک" value="@if(isset($package->count)){{$package->count}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>

                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">مبلغ پکیج</label>
                                        <input type="text" name="price" class="form-control position-relative" id="validationTooltip02" placeholder="مبلغ پکیج" value="@if(isset($package->price)){{$package->price}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">لینک</label>
                                        <input type="text" name="link" class="form-control position-relative" id="validationTooltip02" placeholder="لینک" value="@if(isset($package->link)){{$package->link}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        @if(!isset($package))
                                            <button class="btn btn-primary" type="submit" style="margin-top: 0px ; width: 100%">افزودن پکیج</button>
                                        @else
                                            <button class="btn btn-success" type="submit">ویرایش پکیج</button>
                                            <a class="btn btn-primary" href="{{url("admin/packages/link")}}">لغو ویرایش</a>
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
                                <th>عنوان پکیج</th>
                                <th>مبلغ پکیج</th>
                                <th>تعداد کلیک</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($packages as $package)
                                <?php
                                $i++;
                                ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$package->title}}</td>
                                    <td>{{$package->price}}</td>
                                    <td>{{$package->count}}</td>
                                    <td><a href="{{url("admin")}}/package/link/update/{{$package->id}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                    <td><a href="{{url("admin")}}/package/delete/{{$package->id}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
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