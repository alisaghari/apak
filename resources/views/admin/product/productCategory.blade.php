@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title"> دسته بندی برای محصولات</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">دسته بندی محصولات</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن دسته بندی جدید
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
                                <label class="card-title primary" for="inputDanger"><strong>افزودن دسته بندی جدید</strong></label>
                            </div>
                            <div class="card-block">
                                <div class="card-body">
                                    @if(!isset($category))
                                        <form action="{{url("admin")}}/product_category/add" method="post" class="needs-validation was-validated" novalidate="">
                                            @else
                                                <form action="{{url("admin")}}/product_category/update" method="post" class="needs-validation was-validated" novalidate="">
                                                    <input type="hidden" name="id" value="{{@$id}}">
                                                    @endif
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="col-md-3 mb-3">
                                                            <label for="validationTooltip01">نام دسته بندی</label>
                                                            <input type="text" name="name" class="form-control position-relative" id="validationTooltip01"  placeholder="نام دسته بندی" value="@if(isset($category->name)){{$category->name}}@endif" required="">
                                                            @if($errors->has('name'))
                                                                <div class="invalid-tooltip" style="display: block">
                                                                    {{ $errors->first('name') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="parent_id">تعیین سردسته</label>
                                                            <select name="parent_id" id="parent_id" class="form-control position-relative">

                                                                <option value="0">لطفا یک دسته بندی انتخاب کنید</option>
                                                                @foreach($categories as $key=>$value)
                                                                    <option value='{{$value['id']}}'
                                                                    @if(isset($category))
                                                                        @if($value['id'] == $category->parent_id)
                                                                            {{'selected'}}
                                                                                @endif
                                                                            @endif >{{$value['name']}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            @if($errors->has('parent_id'))
                                                                <div class="invalid-tooltip" style="display: block">
                                                                    {{ $errors->first('parent_id') }}
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            @if(!isset($category))
                                                                <button class="btn btn-primary" type="submit" style="margin-top: 27px ; width: 100%">افزودن دسته بندی</button>
                                                            @else
                                                                <button class="btn btn-success" type="submit"style="margin-top: 27px ;">ویرایش دسته بندی</button>
                                                                <a class="btn btn-primary" href="{{url("admin/product_category")}}"style="margin-top: 27px">لغو ویرایش</a>
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
                                        <th>نام دسنه بندی</th>
                                        <th>ویرایش</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    ?>
                                    @foreach($categories as $key =>$value)
                                        <?php $i++; ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$value['name']}}</td>
                                            <td><a href="{{url("admin")}}/product_category/update/{{$value['id']}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                            <td><a href="{{url("admin")}}/product_category/delete/{{$value['id']}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
                                        </tr>
                                        <?php
                                        $subCategory = \App\Product_category::where('parent_id',$value['id'])->get()->toArray();
                                        ?>
                                        @foreach($subCategory as $key1 =>$value1)
                                            <?php $i++; ?>
                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>__{{$value1['name']}}</td>
                                                <td><a href="{{url("admin")}}/product_category/update/{{$value1['id']}}" class="btn btn-icon btn-success mr-1"><i class="ft-edit"></i></a></td>
                                                <td><a href="{{url("admin")}}/product_category/delete/{{$value1['id']}}" class="btn btn-icon btn-danger mr-1"><i class="ft-trash"></i></a></td>
                                            </tr>
                                        @endforeach
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