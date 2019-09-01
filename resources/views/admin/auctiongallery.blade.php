@extends("admin.master")
@section("content")
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-4 col-12 mb-2">
                <h3 class="content-header-title">افزودن گالری جدید</h3>
            </div>
            <div class="content-header-right col-md-8 col-12">
                <div class="breadcrumbs-top float-md-right">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">خانه</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">گالری ها</a>
                            </li>
                            <li class="breadcrumb-item active">افزودن گالری جدید
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
                        <label class="card-title primary" for="inputDanger"><strong>افزودن تصویر جدید</strong></label>
                    </div>
                    <div class="card-block">
                        <div class="card-body">

                            <form action="{{url("admin")}}/auction/gallery/add" method="post" class="needs-validation was-validated" novalidate="" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">

                                    <input type="hidden" name="id" value="{{$id}}">




                                    <div class="col-md-3 mb-3">
                                        <label for="validationTooltip02">تصویر</label>
                                        <input type="file" name="image" class="form-control position-relative" id="validationTooltip02"  required="">
                                        <div class="valid-tooltip">
                                            به نظر خوب میاد!
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                            <button class="btn btn-primary" type="submit" style="margin-top: 25px ; width: 100%">افزودن تصویر</button>
                                    </div>

                                </div>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-wrapper">
        <div class="row match-height">
        @foreach($auctions_galleries as $aug)
                <div class="col-sm-3" style="background-color: white ; padding: 10px">
                <img src="{{url("/")}}/upload/au/gallery/{{$aug->image}}" style="width: 100%"/>
                    <a href="{{url("admin")}}/auction/gallery/delete/{{$aug->id}}" class="btn btn-icon btn-danger mr-1" style="margin-top: 10px"><i class="ft-trash"></i></a>
                </div>
        @endforeach


        </div>
        </div>
    </section>
    </div>
    </div>
@endsection