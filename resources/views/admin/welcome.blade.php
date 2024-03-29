@extends("admin.master")
@section("content")
    <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Revenue, Hit Rate & Deals -->
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">درآمد پروژه</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><button type="button" class="btn btn-glow btn-round btn-bg-gradient-x-red-pink">بیشتر</button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-0 pb-0">
                            <div class="chartist">
                                <div id="project-stats" class="height-350 areaGradientShadow1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card pull-up">
                            <div class="card-header">
                                <h4 class="card-title float-left">پروژه ایکس</h4><a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <span class="badge badge-pill badge-info float-right m-0">در حال پیشرفت</span>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body pt-0 pb-1">
                                    <h6 class="text-muted font-small-3"> وظیفه تکمیل شده : 4/10</h6>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media d-flex">
                                        <div class="align-self-center">
                                            <h6 class="text-bold-600 mt-2"> مشتری: <span class="info">زئون.</span></h6>
                                            <h6 class="text-bold-600 mt-1"> ضرب الاجل: <span class="blue-grey">5 مهر, 1397</span></h6>
                                        </div>
                                        <div class="media-body text-right mt-2">
                                            <ul class="list-unstyled users-list">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="کاترین نیکولس" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="جوزف ویور" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card pull-up bg-gradient-directional-danger">
                            <div class="card-header bg-hexagons-danger">
                                <h4 class="card-title white">تجزیه و تحلیل</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li>
                                            <a class="btn btn-sm btn-white danger box-shadow-1 round btn-min-width pull-right" href="#" target="_blank">گزارش <i class="ft-bar-chart pl-1"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show bg-hexagons-danger">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="align-self-center width-100">
                                            <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                                        </div>
                                        <div class="media-body text-right mt-1">
                                            <h3 class="font-large-2 white">12,515</h3>
                                            <h6 class="mt-1"><span class="text-muted white">تجزیه و تحلیل در <a href="#" class="darken-2 white">سال گذشته.</a></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Revenue, Hit Rate & Deals -->
        <!-- Emails Products & Avg Deals -->
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="card">
                    <div class="card-header p-1">
                        <h4 class="card-title float-left">پروژه ایکس - <span class="blue-grey lighten-2 font-small-3 mb-0">24 مهر 1397 - 09 آذر 1397</span></h4>
                        <span class="badge badge-pill badge-info float-right m-0">تایید شده</span>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-footer text-center p-1">
                            <div class="row">
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">وظایف</p>
                                    <p class="font-medium-5 text-bold-400">26</p>
                                </div>
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">تکمیل شده</p>
                                    <p class="font-medium-5 text-bold-400">58%</p>
                                </div>
                                <div class="col-md-3 col-12 border-right-blue-grey border-right-lighten-5 text-center">
                                    <p class="blue-grey lighten-2 mb-0">در انتظار</p>
                                    <p class="font-medium-5 text-bold-400">42%</p>
                                </div>
                                <div class="col-md-3 col-12 text-center">
                                    <p class="blue-grey lighten-2 mb-0">نسخه</p>
                                    <p class="font-medium-5 text-bold-400">4.5</p>
                                </div>
                            </div>
                            <hr>
                            <span class="text-muted">آمار <a href="#" class="danger darken-2">پروژه ایکس</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-4">
                <div class="card pull-up border-top-info border-top-3 rounded-0">
                    <div class="card-header">
                        <h4 class="card-title">مشتریان جدید <span class="badge badge-pill badge-info float-right m-0">5+</span></h4>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body p-1">
                            <h4 class="font-large-1 text-bold-400">18.5% <i class="ft-users float-right"></i></h4>
                        </div>
                        <div class="card-footer p-1">
                            <span class="text-muted"><i class="la la-arrow-circle-o-up info"></i> 23.67% توسعه</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Emails Products & Avg Deals -->
        <!-- Chat and Recent Projects -->
        <div class="row match-height">
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="card card-transparent">
                    <div class="card-header bg-transparent pl-0">
                        <h5 class="card-title text-bold-700">درآمد پروژه</h5>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="card-content">
                        <div id="project-income-chart" class="height-450 BarChartShadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-6 col-md-12">
                <h5 class="card-title text-bold-700 my-2">پروژه های اخیر</h5>
                <div class="card">
                    <div class="card-content">
                        <div id="recent-projects" class="media-list position-relative">
                            <div class="table-responsive">
                                <table class="table table-padded table-xl mb-0" id="recent-project-table">
                                    <thead>
                                    <tr>
                                        <th class="border-top-0">نام پروژه</th>
                                        <th class="border-top-0">اختصاص یافته به</th>
                                        <th class="border-top-0">ضرب الاجل</th>
                                        <th class="border-top-0">وضعیت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-truncate align-middle">
                                            <a href="#">مدیر ایکس</a>
                                        </td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="کاترین نیکولس" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="جوزف ویور" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+2 بیشتر</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate pb-0">
                                            <span>15 مهر, 1397</span>
                                            <p class="font-small-2 text-muted"> 1 روز باقی مانده</p>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate align-middle">
                                            <a href="#">رابط کاربری آنالوگ</a>
                                        </td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="کاترین نیکولس" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-14.png" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate pb-0">
                                            <span>26 مهر, 1397</span>
                                            <p class="font-small-2 text-muted danger"> بعد از</p>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate align-middle">
                                            <a href="#">تراول تریپ</a>
                                        </td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate pb-0">
                                            <span>23 مهر, 1397</span>
                                            <p class="font-small-2 text-muted"> در 11 روز</p>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate align-middle">
                                            <a href="#">افقی نازک</a>
                                        </td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="کاترین نیکولس" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="جوزف ویور" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                                </li>
                                                <li class="avatar avatar-sm">
                                                    <span class="badge badge-info">+1 بیشتر</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate pb-0">
                                            <span>13 مهر, 1397</span>
                                            <p class="font-small-2 text-muted"> 1 ماه</p>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-truncate align-middle">
                                            <a href="#">مدیریت</a>
                                        </td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled users-list m-0">
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="برات هادیان" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-11.png" alt="Avatar">
                                                </li>
                                                <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="کاترین نیکولس" class="avatar avatar-sm pull-up">
                                                    <img class="media-object rounded-circle" src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar">
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="text-truncate pb-0">
                                            <span>18th July, 2018</span>
                                            <p class="font-small-2 text-muted danger"> بعد از</p>
                                        </td>
                                        <td>
                                            <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                                <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Products sell and New Orders -->
        <!-- Total earning & Recent Sales  -->
        <div class="row mt-1">
            <div class="col-md-12 col-lg-6 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">پروژه های جدید</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content mt-1">
                        <div id="new-projects" class="height-400 GradientlineShadow"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">چت</h4>
                        <a class="heading-elements-toggle">
                            <i class="la la-ellipsis-v font-medium-3"></i>
                        </a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li>
                                    <a data-action="reload">
                                        <i class="ft-rotate-cw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body chat-application">
                            <div class="chats height-300">
                                <div class="chats">
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>چطور میتوانیم کمک کنیم؟ ما برای شما اینجا هستیم</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>سلام یعقوب، آیا می توانید به من کمک کنید تا آن را بیابم؟</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>کاملا!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>من به دنبال بهترین قالب مدیریت زاویه ای هستم.</p>
                                                <p>باید بوت استرپ 4 سازگار باشد.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>آفتاب پرست, قالب واکنشگرای آنگولار 5 بوت استرپ 4 و قالب مدیریتی است.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>به نظر می رسد رابط کاربری تمیز و تازه است.</p>
                                            </div>
                                            <div class="chat-content">
                                                <p>این برای پروژه بعدی من مناسب است.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>خیلی ممنون!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>چطور می توانم آن را خریداری کنم؟</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>از بوت استرپ.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat chat-left">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-15.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>من آن را کاملا مطمئن خریدم.</p>
                                            </div>
                                            <div class="chat-content">
                                                <p>ممنون.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-avatar">
                                            <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                                <img src="{{url("/adminui")}}/app-assets/images/portrait/small/avatar-s-19.jpg" alt="avatar" />
                                            </a>
                                        </div>
                                        <div class="chat-body">
                                            <div class="chat-content">
                                                <p>عالی!!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form class="chat-app-input mt-1 row">
                                <div class="col-12">
                                    <fieldset>
                                        <div class="input-group position-relative has-icon-left">
                                            <div class="form-control-position">
                                                <span id="basic-addon3"><i class="ft-image"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="ارسال پیام" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">ارسال</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total earning & Recent Sales  -->
    </div>
</div>
@endsection