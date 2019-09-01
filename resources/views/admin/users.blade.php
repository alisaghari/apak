@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">افزودن کاربر جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">کاربران</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن کاربر جدید
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
                        <label class="card-title primary" for="inputDanger"><strong>افزودن کاربر جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">
                            @if(!isset($user))
                            <form action="{{url("admin")}}/user/add" method="post" class="needs-validation was-validated" novalidate="">
                                @else
                                    <form action="{{url("admin")}}/user/update" method="post" class="needs-validation was-validated" novalidate="">
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
                                            <input type="text" name="address" class="form-control position-relative" id="validationTooltipUsername" placeholder="آدرس" value="@if(isset($user->address)){{$user->address}}@endif" aria-describedby="validationTooltipUsernamePrepend" required="">
                                            <div class="invalid-tooltip">
                                              لطفا آدرس را وارد نمایید
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationTooltip03">شماره شبا</label>
                                        <input type="text" name="shaba" class="form-control position-relative" id="validationTooltip03" value="@if(isset($user->shaba)){{$user->shaba}}@endif" placeholder="شماره شبا" required="">
                                        <div class="invalid-tooltip">
                                         لطفا شماره شبا معتبر وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip04">شماره حساب</label>
                                        <input type="text" name="hesab" class="form-control position-relative" id="validationTooltip04" value="@if(isset($user->hesab)){{$user->hesab}}@endif" placeholder="شماره حساب" required="">
                                        <div class="invalid-tooltip">
                                            لطفا شماره حساب معتبر وارد نمایید
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip05">نام صاحب حساب</label>
                                        <input type="text" name="owner_name" class="form-control position-relative" id="validationTooltip05" value="@if(isset($user->owner_name)){{$user->owner_name}}@endif" placeholder="نام صاحب حساب" required="">
                                        <div class="invalid-tooltip">
                             صاحب حساب های وارد شده چه کسی می باشد؟
                                        </div>
                                    </div>
                                </div>
                                        @if(!isset($user))
                                <button class="btn btn-primary" type="submit">افزودن کاربر</button>
                                            @else
                                            <button class="btn btn-success" type="submit">ویرایش کاربر</button>
                                            <a class="btn btn-primary" href="{{url("admin/users")}}">لغو ویرایش</a>
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
                        <form action="{{url("admin")}}/user/search" method="post" class="needs-validation" novalidate="">
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
                        <button class="btn btn-primary" type="submit" style="float: right ; margin-right: 15px">جستجو کاربر</button>
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
                                <th>تاریخ تولد</th>
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
                                    <td>{{$user->birthdate}}</td>
                                    <td>{{$user->address}}</td>
                                    <td><a href="{{url("admin")}}/user/update/{{$user->id}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                    <td><a href="{{url("admin")}}/user/delete/{{$user->id}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
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