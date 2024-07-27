@include('App.Content.header')
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-fluid">


                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center">

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">جان اسنو</span>
                                                <small>مدیر</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-profile-user.html">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">پروفایل من</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-account.html">
                                        <i class="bx bx-cog me-2"></i>
                                        <span class="align-middle">تنظیمات</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-account-settings-billing.html">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                          <span class="flex-grow-1 align-middle">صورتحساب</span>
                          <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-help-center-landing.html">
                                        <i class="bx bx-support me-2"></i>
                                        <span class="align-middle">راهنمایی</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-faq.html">
                                        <i class="bx bx-help-circle me-2"></i>
                                        <span class="align-middle">سوالات متداول</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="pages-pricing.html">
                                        <i class="bx bx-dollar me-2"></i>
                                        <span class="align-middle">قیمت گذاری</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">خروج</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sm"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto secondary-font">اعلان‌ها</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">تبریک می‌گوییم کلارک</h6>
                                                    <p class="mb-1">شما نشان فروشنده برتر ماه را برنده شدید</p>
                                                    <small class="text-muted">1 ساعت قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-danger">اک</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">دیوید بکهام</h6>
                                                    <p class="mb-1">درخواست شما را قبول کرد.</p>
                                                    <small class="text-muted">12 ساعت قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/2.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">پیام جدید</h6>
                                                    <p class="mb-1">شما پیام جدید از ناتالی دارید</p>
                                                    <small class="text-muted">1 ساعت قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">هورا! شما سفارش جدید دارید</h6>
                                                    <p class="mb-1">شرکت گوگل یک سفارش جدید ثبت کرد</p>
                                                    <small class="text-muted">1 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/9.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">برنامه مورد تایید قرار گرفت</h6>
                                                    <p class="mb-1">برنامه پروژه مدیریت شما پذیرفته شد.</p>
                                                    <small class="text-muted">2 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-pie-chart-alt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">گزارش ماهانه ایجاد شد</h6>
                                                    <p class="mb-1">گزارش ماهانه ماه خرداد ایجاد شد</p>
                                                    <small class="text-muted">3 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/5.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">ارسال درخواست ارتباط</h6>
                                                    <p class="mb-1">پیتر یک درخواست ارتباط برای شما ارسال کرد</p>
                                                    <small class="text-muted">4 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="../../assets/img/avatars/6.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">پیام جدید از جین</h6>
                                                    <p class="mb-1">شما پیام جدید از سمت جین دارید</p>
                                                    <small class="text-muted">5 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">میزان مصرف CPU بالاست</h6>
                                                    <p class="mb-1">میران مصرف CPU در حال حاضر 88.63% است</p>
                                                    <small class="text-muted">5 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                        مشاهده همه اعلان‌ها
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-grid-alt bx-sm"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto secondary-font">میانبرها</h5>
                                        <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="افزودن میانبر"><i class="bx bx-sm bx-plus-circle"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-calendar fs-4"></i>
                          </span>
                                            <a href="app-calendar.html" class="stretched-link">تقویم</a>
                                            <small class="text-muted mb-0">قرارهای ملاقات</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-food-menu fs-4"></i>
                          </span>
                                            <a href="app-invoice-list.html" class="stretched-link">برنامه صورتحساب</a>
                                            <small class="text-muted mb-0">مدیریت حساب‌ها</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-user fs-4"></i>
                          </span>
                                            <a href="app-user-list.html" class="stretched-link">برنامه کاربر</a>
                                            <small class="text-muted mb-0">مدیریت کاربران</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-check-shield fs-4"></i>
                          </span>
                                            <a href="app-access-roles.html" class="stretched-link">مدیریت نقش‌‌ها</a>
                                            <small class="text-muted mb-0">مجوزها</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                          </span>
                                            <a href="index.html" class="stretched-link">داشبورد</a>
                                            <small class="text-muted mb-0">پروفایل کاربر</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-cog fs-4"></i>
                          </span>
                                            <a href="pages-account-settings-account.html" class="stretched-link">تنظیمات</a>
                                            <small class="text-muted mb-0">تنظیمات حساب</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-help-circle fs-4"></i>
                          </span>
                                            <a href="pages-help-center-landing.html" class="stretched-link">مرکز راهنمایی</a>
                                            <small class="text-muted mb-0">سوالات متداول و مقالات</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                          <span class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                            <i class="bx bx-window-open fs-4"></i>
                          </span>
                                            <a href="modal-examples.html" class="stretched-link">مودال‌ها</a>
                                            <small class="text-muted mb-0">پاپ‌آپ‌های کاربردی</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->
                    </ul>
                </div>

                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0">
                    <a href="{{ config('app.url') }}" class="app-brand-link gap-2 mb-2">
                        <img src="{{ asset('/images/logo/Original-Logo.png') }}" style="width: 200px;position: relative;top: 4px;">
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                        <i class="bx bx-x bx-sm align-middle"></i>
                    </a>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper container-fluid d-none">
                    <input type="text" class="form-control search-input border-0" placeholder="جستجو ..." aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                    <div class="container-fluid d-flex h-100">
                        <ul class="menu-inner">
                            <!-- Dashboards -->
                            <li class="menu-item @if(Session::get('menuSelection') == 'dashboard') active @endif">
                                <a href="{{ route('panel_dashboard') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bxs-dashboard"></i>
                                    <div>داشبورد</div>
                                </a>
                            </li>

                            <!-- Layouts -->
                            <li class="menu-item @if(Session::get('menuSelection') == 'analysis_chart' || Session::get('menuSelection') == 'market_plan' || Session::get('menuSelection') == 'market_news' || Session::get('menuSelection') == 'market_cap' || Session::get('menuSelection') == 'analysis_tecnical') active @endif">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class='menu-icon tf-icons bx bx-bar-chart'></i>
                                    <div>تحلیل بازار</div>
                                </a>

                                <ul class="menu-sub">
                                    <li class="menu-item @if(Session::get('menuSelection') == 'analysis_chart') active @endif">
                                        <a href="{{ route('panel_analysis_chart') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-bar-chart"></i>
                                            <div>تحلیل نمودار</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'analysis_tecnical') active @endif">
                                        <a href="{{ route('panel_analysis_tecnical') }}" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-cog'></i>
                                            <div>تحلیل تکنیکال</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'market_cap') active @endif">
                                        <a href="{{ route('panel_market_cap') }}" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-candles'></i>
                                            <div>شاخص های مهم بازار</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'market_news') active @endif">
                                        <a href="{{ route('panel_market_news') }}" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-news'></i>
                                            <div>اخبار</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'market_plan') active @endif">
                                        <a href="{{ route('panel_market_plan') }}" class="menu-link">
                                            <i class='menu-icon tf-icons bx bx-map-alt'></i>
                                            <div>نقشه بازار</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item @if(Session::get('menuSelection') == 'connection') active @endif">
                                <a href="{{ route('panel_exchange_conection') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-link"></i>
                                    <div>اتصال به صرافی</div>
                                </a>
                            </li>
                            <li class="menu-item @if(Session::get('menuSelection') == 'spot_smart') active @endif">
                                <a href="{{ route('panel_spot_smart') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-line-chart"></i>
                                    <div>بازار یکطرفه</div>
                                </a>
                            </li>
                            <li class="menu-item @if(Session::get('menuSelection') == 'future_smart') active @endif">
                                <a href="{{ route('panel_future_smart') }}" class="menu-link">
                                    <i class="menu-icon tf-icons bx bx-candles"></i>
                                    <div>بازار دوطرفه</div>
                                </a>
                            </li>
                            <li class="menu-item @if(Session::get('menuSelection') == 'am' || Session::get('menuSelection') == 'activities' || Session::get('menuSelection') == 'transactions' || Session::get('menuSelection') == 'tp' || Session::get('menuSelection') == 'network') active @endif">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class='menu-icon tf-icons bx bx-cog'></i>
                                    <div>اطلاعات کاربری</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item @if(Session::get('menuSelection') == 'am') active @endif">
                                        <a href="{{ route('panel_accountManagement') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bxs-user"></i>
                                            <div>مدیریت حساب کاربری</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'tp') active @endif">
                                        <a href="{{ route('panel_tradePassword') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-lock-alt"></i>
                                            <div>رمز معامله</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'network') active @endif">
                                        <a href="{{ route('panel_networking') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bxs-network-chart"></i>
                                            <div>معرفی به دوستان</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'transactions') active @endif">
                                        <a href="{{ route('panel_transactions_list') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                                            <div>لیست صورتحساب ها</div>
                                        </a>
                                    </li>
                                    <li class="menu-item @if(Session::get('menuSelection') == 'activities') active @endif">
                                        <a href="{{ route('panel_activities') }}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-message-square-check"></i>
                                            <div>لیست فعالیت ها</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
