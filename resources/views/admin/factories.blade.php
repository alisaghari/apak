@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">افزودن شرکت جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">شرکت ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن شرکت جدید
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
                        <label class="card-title primary" for="inputDanger"><strong>افزودن شرکت جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            @if(!isset($user))
                            <form action="{{url("admin")}}/factory/add" method="post" class="needs-validation was-validated" novalidate="">
                                @else
                                    <form action="{{url("admin")}}/factory/update" method="post" class="needs-validation was-validated" novalidate="">
                                        <input type="hidden" name="id" value="{{$id}}">
                                @endif
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip01">نام</label>
                                        <input type="text" name="f_name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام" value="@if(isset($user->f_name)){{$user->f_name}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip02">نام خانوادگی</label>
                                        <input type="text" name="l_name" class="form-control position-relative" id="validationTooltip02" placeholder="نام خانوادگی" value="@if(isset($user->l_name)){{$user->l_name}}@endif" required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltipUsername">شماره همراه</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ft-phone"></i> </span>
                                            </div>
                                            <input type="text" name="phone" class="form-control position-relative" id="validationTooltipUsername" value="@if(isset($user->phone)){{$user->phone}}@endif" placeholder="شماره همراه" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            <div class="invalid-tooltip">
                                                شماره همراه
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip01">کد ملی</label>
                                        <input type="text" name="n_code" class="form-control position-relative" id="validationTooltip01" placeholder="کد ملی" value="@if(isset($user->n_code)){{$user->n_code}}@endif" required="">
                                        <div class="valid-tooltip">
                            لطفا کد ملی را وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltip02">تاریخ تولد</label>
                                        <input type="text" name="birthdate" class="form-control position-relative" id="validationTooltip02" placeholder="تاریخ تولد" value="@if(isset($user->birthdate)){{$user->birthdate}}@endif" required="">
                                        <div class="valid-tooltip">
                                           لطفا تاریخ تولد را وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="validationTooltipUsername">آدرس</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ft-map"></i> </span>
                                            </div>
                                            <input type="text" name="address" class="form-control position-relative" id="validationTooltipUsername" placeholder="آدرس " value="@if(isset($user->address)){{$user->address}}@endif" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            <div class="invalid-tooltip">
                                         آدرس
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">نام وبسایت به فارسی</label>
                                        <input type="text" name="fa_website" class="form-control position-relative" id="validationTooltip03" value="@if(isset($user->fa_website)){{$user->fa_website}}@endif" placeholder="نام وبسایت به فارسی" required="">
                                        <div class="invalid-tooltip">
                                         لطفا نام وبسایت به فارسی وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip04">توضیحات وبسایت</label>
                                        <input type="text" name="description" class="form-control position-relative" id="validationTooltip04" value="@if(isset($user->description)){{$user->description}}@endif" placeholder="توضیجات مختصری درباره وبسایت" required="">
                                        <div class="invalid-tooltip">
                                            لطفا شماره حساب معتبر وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltipUsername">آدرس وبسایت</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ft-server"></i> </span>
                                            </div>
                                            <input type="text" name="website" class="form-control position-relative" id="validationTooltipUsername" placeholder="آدرس وبسایت" value="@if(isset($user->website)){{$user->website}}@endif" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            <div class="invalid-tooltip">
                                                آدرس وبسایت
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        @if(!isset($user))
                                <button class="btn btn-primary" type="submit">افزودن شرکت</button>
                                            @else
                                            <button class="btn btn-success" type="submit">ویرایش شرکت</button>
                                            <a class="btn btn-primary" href="{{url("admin/factories")}}">لغو ویرایش</a>
                                            @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card" style="padding: 15px">
                    <div class="col-sm-12" style="padding-bottom: 15px">
                        <form action="{{url("admin")}}/factory/search" method="post" class="needs-validation" novalidate="">
                        <div class="input-group" style="width: 400px ; float: right">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="ft-phone"></i> </span>
                            </div>
                            <input type="text" name="phone" class="form-control position-relative" id="validationTooltipUsername" value="@if(isset($user->phone)){{$user->phone}}@endif" placeholder="شماره همراه" aria-describedby="validationTooltipUsernamePrepend" required="">
                            <div class="invalid-tooltip">
                                شماره همراه
                            </div>
                        </div>
                            @csrf
                        <button class="btn btn-primary" type="submit" style="float: right ; margin-right: 15px">جستجو شرکت</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="bg-primary white">
                            <tr>
                                <th>#</th>
                                <th>نام</th>
                                <th>نام خانوادگی</th>
                                <th>شماره تلفن</th>
                                <th>کد ملی</th>
                                <th>آدرس وبسایت</th>
                                <th>آدرس</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i=0;
                            ?>
                            @foreach($users as $user)
                                <?php
                                $i++;
                                ?>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$user->f_name}}</td>
                                    <td>{{$user->l_name}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->n_code}}</td>
                                    <td>{{$user->website}}</td>
                                    <td>{{$user->address}}</td>
                                    <td><a href="{{url("admin")}}/factory/update/{{$user->id}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                    <td><a href="{{url("admin")}}/factory/delete/{{$user->id}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
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