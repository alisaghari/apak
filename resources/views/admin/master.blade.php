<!DOCTYPE html>
<html class="loading" lang="fa" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Barat Hadian">
    <title>داشبورد مدیریت</title>
    <link rel="apple-touch-icon" href="{{url("/adminui")}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url("/adminui")}}/app-assets/images/ico/favicon.ico">
    <link href='{{url("/adminui")}}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/core/colors/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/custom-rtl.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/pages/gap-application.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/plugins/forms/checkboxes-radios.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/forms/icheck/custom.css">
    <!--jquey persian date picker-->
    <link type="text/css" rel="stylesheet" href="{{url("/component")}}/date_picker/css/persianDatepicker-default.css" />
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index.html"><img class="brand-logo" alt="creaative admin logo" src="{{url("/adminui")}}/app-assets/images/logo/logo.png">
                    <h3 class="brand-text">آپاک</h3></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    <li class="dropdown nav-item mega-dropdown d-none d-md-block"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">مگا</a>
                        <ul class="mega-dropdown-menu dropdown-menu row">
                            <li class="col-md-2">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-link"></i> لینک های سریع</h6>
                                <ul>
                                    <li><a class="my-1" href="gap-application.html"><i class="ft-home"></i> چت</a></li>
                                    <li><a class="my-1" href="table-bootstrap.html"><i class="ft-grid"></i> جداول</a></li>
                                    <li><a class="my-1" href="chartist-charts.html"><i class="ft-bar-chart"></i> نمودار</a></li>
                                    <li><a class="my-1" href="gallery-grid.html"><i class="ft-sidebar"></i> گالری</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-star"></i> نشانک های من</h6>
                                <ul class="ml-2">
                                    <li class="list-style-circle"><a class="my-1" href="card-bootstrap.html">
                                            کارت ها</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="full-calender.html"> تقویم</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="invoice-template.html"> صورتحساب</a></li>
                                    <li class="list-style-circle"><a class="my-1" href="users-contacts.html"> تماس</a></li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase"><i class="ft-layers"></i> محصولات اخیر</h6>
                                <div class="carousel slide pt-1" id="carousel-example" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="carousel-item active"><img class="d-block w-100" src="{{url("/adminui")}}/app-assets/images/carousel/08.jpg" alt="First slide"></div>
                                        <div class="carousel-item"><img class="d-block w-100" src="{{url("/adminui")}}/app-assets/images/carousel/03.jpg" alt="Second slide"></div>
                                        <div class="carousel-item"><img class="d-block w-100" src="{{url("/adminui")}}/app-assets/images/carousel/01.jpg" alt="Third slide"></div>
                                    </div><a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev"><span class="la la-angle-left" aria-hidden="true"></span><span class="sr-only">قبلی</span></a><a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next"><span class="la la-angle-right icon-next" aria-hidden="true"></span><span class="sr-only">بعدی</span></a>
                                    <h5 class="pt-1">عنوان ویژه</h5>
                                    <p>لوبیا سبز آلو قارچ.</p>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="ft-thumbs-up"></i> در تماس باشید</h6>
                                <form class="form form-horizontal pt-1">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputName1">نام</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputName1" type="text" placeholder="برات هادیان">
                                                    <div class="form-control-position pl-1"><i class="ft-user"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputContact1">تماس</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputContact1" type="text" placeholder="(123)-456-7890">
                                                    <div class="form-control-position pl-1"><i class="ft-smartphone"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputEmail1">ایمیل</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" id="inputEmail1" type="email" placeholder="john@example.com">
                                                    <div class="form-control-position pl-1"><i class="ft-mail"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputMessage1">پیام</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <textarea class="form-control" id="inputMessage1" rows="2" placeholder="متن ساده"></textarea>
                                                    <div class="form-control-position pl-1"><i class="ft-message-circle"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-1">
                                                <button class="btn btn-danger float-right" type="button"><i class="ft-arrow-right"></i> ثبت کن</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown d-none d-md-block mr-1"><a class="dropdown-toggle nav-link" id="apps-navbar-links" href="#" data-toggle="dropdown">
                            برنامه ها</a>
                        <div class="dropdown-menu">
                            <div class="arrow_box"><a class="dropdown-item" href="email-application.html"><i class="ft-user"></i> ایمیل</a><a class="dropdown-item" href="gap-application.html"><i class="ft-mail"></i> چت</a><a class="dropdown-item" href="project-summary.html"><i class="ft-briefcase"></i> خلاصه ی پروژه            </a><a class="dropdown-item" href="full-calender.html"><i class="ft-calendar"></i> تقویم            </a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                        <ul class="dropdown-menu">
                            <li class="arrow_box">
                                <form>
                                    <div class="input-group search-box">
                                        <div class="position-relative has-icon-right full-width">
                                            <input class="form-control" id="search" type="text" placeholder="جستجو در اینجا ...">
                                            <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language"></span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-ru"></i> Russian</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a></div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell bell-shake" id="notification-navbar-link"></i><span class="badge badge-pill badge-sm badge-danger badge-up badge-glow">5</span></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">اطلاعیه</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-share info font-medium-4 mt-2"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">سفارش جدید دریافت شده</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است!</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:30 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-save font-medium-4 mt-2 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading warning">کاربر جدید ثبت شده است</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">10:05 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-repeat font-medium-4 mt-2 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading danger">خرید جدید</h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">لورم ایپسوم متن ساختگی است?</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-shopping-cart font-medium-4 mt-2 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading primary">مورد جدید در سبد خرید شما</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">هفته گذشته</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-heart font-medium-4 mt-2 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading info">فروش جدید</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">ماه گذشته</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item info text-right pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail">             </i></a>
                        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                            <div class="arrow_box_right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">پیام ها</span></h6>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">سارا مونتری<i class="ft-circle font-small-2 success float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">همه چیز خوب است من ارائه خواهم داد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">3:55 صبح</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><span class="media-object rounded-circle text-circle bg-warning">E</span></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">الیزا الیوت<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">باشه. در اینجا برخی از جزئیات بیشتر است...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">2:10 عصر</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">کلی رییس<i class="ft-circle font-small-2 warning float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">یک بار چک کنید و به من اطلاع دهید...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">دیروز</time></small>
                                            </div>
                                        </div></a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm rounded-circle"><img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading text-bold-700">تونی دیپ<i class="ft-circle font-small-2 danger float-right"></i></h6>
                                                <p class="notification-text font-small-3 text-muted text-bold-600">ما شروع به توسعه پروژه جدید خواهیم کرد...</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">جمعه</time></small>
                                            </div>
                                        </div></a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-right info pr-1" href="javascript:void(0)">خواندن همه</a></li>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">برات هادیان</span></span></a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> ویرایش مشخصات</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> صندوق ورودی من</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> وظیفه</a><a class="dropdown-item" href="gap-application.html"><i class="ft-message-square"></i> نمودار</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ft-power"></i> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
    <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="ft-home"></i><span>داشبورد</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown">تجارت الکترونیک</a>
                        </li>
                        <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown">تجزیه و تحلیل</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-users"></i><span>مدیریت کاربران</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin")}}/users" data-toggle="dropdown"> افزودن کاربر جدید و مدیریت کاربران</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin")}}/factories" data-toggle="dropdown">افزودن شرکت جدید و مدیریت شرکت ها</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-monitor"></i><span>پکیج ها</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="dropdown-item"><a  href="{{url("admin")}}/packages/link" data-toggle="dropdown">پکیج های متنی</a></li>
                        <li class="dropdown-item"><a  href="{{url("admin")}}/packages/download" data-toggle="dropdown">پکیج های دانلودی</a></li>
                        <li class="dropdown-item"><a  href="{{url("admin")}}/packages/image" data-toggle="dropdown">پکیج های تصویری</a></li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-layout"></i><span>مشتریان</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">نوار کناری محتوا</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle="dropdown">نوار کناری چپ</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">نوار کناری چپ چسبنده</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle="dropdown">نوار کناری راست</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">نوار کناری سمت چپ</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle="dropdown">ناوبری ثابت</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle="dropdown">طرح ثابت</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle="dropdown">طرح جعبه</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle="dropdown">طرح استاتیک</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle="dropdown">ناوبری تاریک</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-zap"></i><span>محصولات</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">نوار کناری محتوا</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-content-detached-left-sidebar.html" data-toggle="dropdown">نوار کناری چپ</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">نوار کناری چپ چسبنده</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-content-detached-right-sidebar.html" data-toggle="dropdown">نوار کناری راست</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">نوار کناری چپ</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-fixed-navigation.html" data-toggle="dropdown">ناوبری ثابت</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-fixed.html" data-toggle="dropdown">طرح ثابت</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-boxed.html" data-toggle="dropdown">طرح جعبه</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-static.html" data-toggle="dropdown">طرح استاتیک</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("/adminui")}}/starter-kit/rtl/horizontal-menu-template-nav/layout-dark.html" data-toggle="dropdown">ناوبری تاریک</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="nav-item" ><a class="nav-link" href="{{url("admin/auctions")}}" ><i class="ft-aperture"></i><span>مزایده</span></a>

            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-box"></i><span>تسویه</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">بوت استرپ</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle="dropdown">هشدارها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-buttons.html" data-toggle="dropdown">دکمه ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle="dropdown">چرخ فلک</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle="dropdown">فروپاشی</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle="dropdown">رها کردن</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle="dropdown">فهرست گروه</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle="dropdown">مدال ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle="dropdown">صفحه بندی</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle="dropdown">ناوبر</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle="dropdown">زبانه ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle="dropdown">قرص ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle="dropdown">راهنمای ابزار</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle="dropdown">پروپاور</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle="dropdown">نشان ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle="dropdown">قرص نشان ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle="dropdown">پیشرفت</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle="dropdown">اشیاء رسانه ای</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-spinner.html" data-toggle="dropdown">اسپینر</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-toast.html" data-toggle="dropdown">توست</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">اضافی</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle="dropdown">هشدارهای شیرین</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle="dropdown">توستر</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle="dropdown">امتیازات</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-tour.html" data-toggle="dropdown">تور</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">ویراستاران</a>
                                        <ul class="dropdown-menu">
                                            <div class="arrow_box">
                                                <li data-menu=""><a class="dropdown-item" href="editor-ckeditor.html" data-toggle="dropdown">CKEditor</a>
                                                </li>
                                                <li data-menu=""><a class="dropdown-item" href="editor-tinymce.html" data-toggle="dropdown">TinyMCE</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="pickers-date-&amp;-time-picker.html" data-toggle="dropdown">تاریخ و تایمر زمان</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="block-ui.html" data-toggle="dropdown">رابط کاربری بلوک</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="file-uploader-dropzone.html" data-toggle="dropdown">فایل آپلود کننده</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-edit"></i><span>پنل مالی</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">عناصر فرم</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown">ورودی فرم</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown">تعویض</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle="dropdown">انتخاب 2</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle="dropdown">جعبه ابزارها و رادیوها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle="dropdown">ورودی برچسب ها</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown">اعتبار سنجی</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle="dropdown">ورودی های توسعه یافته</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">چیدمان فرم</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle="dropdown">فرم های پایه</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle="dropdown">فرم های افقی</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle="dropdown">برچسب های پنهان</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown">فرم جادوگر</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle="dropdown">فرم تکرار کننده</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-grid"></i><span>تنظیمات</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/slider")}}" data-toggle="dropdown">مدیریت اسلایدر</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/blog/category")}}" data-toggle="dropdown">تعریف دسته بندی مطالب</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="{{url("admin/blogs")}}" data-toggle="dropdown">افزودن مطالب</a>
                        </li>
                        
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-bar-chart-2"></i><span>مشاهده سایت</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="chartist-charts.html" data-toggle="dropdown">چارتیست</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="chartjs-charts.html" data-toggle="dropdown">مشاهده سایت</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">نقشه</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="google-maps.html" data-toggle="dropdown">نقشه گوگل</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="jvector-maps.html" data-toggle="dropdown">نقشه jVector</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-sidebar"></i><span>تیکت ها</span></a>
                <ul class="dropdown-menu">
                    <div class="arrow_box">
                        <li data-menu=""><a class="dropdown-item" href="gallery-grid.html" data-toggle="dropdown">گالری</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="search.html" data-toggle="dropdown">جستجوگر</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">احراز هویت</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="login.html" data-toggle="dropdown">ورود</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="register.html" data-toggle="dropdown">ثبت نام</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="unlock-user.html" data-toggle="dropdown">باز کردن کاربر</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="recover-password.html" data-toggle="dropdown">بازیابی رمز عبور</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">خطا</a>
                            <ul class="dropdown-menu">
                                <div class="arrow_box">
                                    <li data-menu=""><a class="dropdown-item" href="error-400.html" data-toggle="dropdown">خطا 400</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-401.html" data-toggle="dropdown">خطا 401</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-403.html" data-toggle="dropdown">خطا 403</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-404.html" data-toggle="dropdown">خطا 404</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-500.html" data-toggle="dropdown">خطا 500</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="coming-soon.html" data-toggle="dropdown">به زودی</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="under-maintenance.html" data-toggle="dropdown">تعمیر و نگهداری</a>
                        </li>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
@yield("content")
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->

<!-- End: Customizer-->


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2019  &copy; کپی رایت: تمامی حقوق این قالب محفوظ است. طراحی و توسعه توسط <a class="text-bold-800 grey darken-2" href="https://www.rtl-theme.com/author/barat/" target="_blank">Barat Hadian</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/author/barat/" target="_blank"> قالب های بیشتر</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://www.rtl-theme.com/user-profile/barat/" target="_blank"> پشتیبانی</a></li>
        </ul>
    </div>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="{{url("/adminui")}}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="{{url("/adminui")}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{url("/adminui")}}/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/js/core/app.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/jquery.sharrre.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>

<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{url("/adminui")}}/app-assets/js/scripts/pages/dashboard-analytics.min.js" type="text/javascript"></script>
<!-- END: Page JS-->
<!-- jquey persian date picker-->
<script type="text/javascript" src="{{url("/component")}}/jquery.min.js"></script>
<script type="text/javascript" src="{{url("/component")}}/date_picker/js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="{{url("/component")}}/date_picker/js/persianDatepicker.min.js"></script>

<script>
    $("#birthdate").persianDatepicker({
        cellWidth:45,
        cellHeight:40,
        fontSize:14,
    });
</script>

@yield('footer')
</body>
<!-- END: Body-->
</html>