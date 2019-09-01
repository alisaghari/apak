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
    <title>ثبت نام</title>
    <link rel="apple-touch-icon" href="{{url("/adminui")}}/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url("/adminui")}}/app-assets/images/ico/favicon.ico">
    <link href='{{url("/adminui")}}/app-assets/css-rtl/Vazir-FD.css' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/plugins/forms/switch.min.css">
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/core/colors/palette-switch.min.css">
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
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/app-assets/css-rtl/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url("/adminui")}}/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0">
                                <div class="text-center mb-1">
                                    <img src="{{url("/adminui")}}/app-assets/images/logo/logo.png" alt="branding logo">
                                </div>
                                <div class="font-large-1  text-center">
                                  عضویت
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" id="user-name" name="f_name" placeholder="نام" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6">
                                                <fieldset class="form-group position-relative has-icon-left">
                                                    <input type="text" class="form-control round" id="user-name"  name="l_name" placeholder="نام خانوادگی" required>
                                                    <div class="form-control-position">
                                                        <i class="ft-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="phone" class="form-control round" id="user-email" name="phone" placeholder="شماره همراه" required>
                                            <div class="form-control-position">
                                                <i class="ft-phone"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" name="password" placeholder="رمز عبور را وارد کنید" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control round" id="user-password" name="password_confirmation" placeholder="تکرار رمز عبور" required>
                                            <div class="form-control-position">
                                                <i class="ft-lock"></i>
                                            </div>
                                        </fieldset>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">ثبت نام</button>
                                        </div>

                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2 ">
                                    <span>یا ثبت نام کنید</span>
                                </p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-facebook">
                                        <span class="ft-facebook"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-twitter">
                                        <span class="ft-twitter"></span>
                                    </a>
                                    <a href="#" class="btn btn-social-icon round mr-1 mb-1 btn-instagram">
                                        <span class="ft-instagram"></span>
                                    </a>
                                </div>

                                <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                        <span>در حال حاضر یک عضو هستید؟
                            <a href="{{url("login")}}" class="card-link">ورود</a>
                        </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{url("/adminui")}}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script type="text/javascript" src="{{url("/adminui")}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{url("/adminui")}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{url("/adminui")}}/app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="{{url("/adminui")}}/app-assets/js/core/app.min.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{url("/adminui")}}/app-assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>