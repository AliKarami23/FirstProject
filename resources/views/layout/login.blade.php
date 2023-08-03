<!doctype html>
<html lang="en" dir="rtl">
@include('layout.css');
<head>
    @include('layout.css');
</head>



<body class="sidebar-mini sidebar-open" style="height: auto;">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom navbar-dark bg-success">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="panel.blade.php" class="nav-link">خانه</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">تماس</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav mr-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-comments-o"></i>
                    <span class="badge badge-danger navbar-badge">۳</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 ml-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    حسام موسوی
                                    <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">با من تماس بگیر لطفا...</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> ۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    پیمان احمدی
                                    <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">من پیامتو دریافت کردم</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> ۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle ml-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    سارا وکیلی
                                    <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                                </h3>
                                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>۴ ساعت قبل</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">۱۵</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                    <span class="dropdown-item dropdown-header">۱۵ نوتیفیکیشن</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope ml-2"></i> ۴ پیام جدید
                        <span class="float-left text-muted text-sm">۳ دقیقه</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users ml-2"></i> ۸ درخواست دوستی
                        <span class="float-left text-muted text-sm">۱۲ ساعت</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-file ml-2"></i> ۳ گزارش جدید
                        <span class="float-left text-muted text-sm">۲ روز</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-dark-info" style="min-height: 689.2px;">
        <!-- Brand Logo -->
        <a href="panel.blade.php" class="brand-link bg-success">

            <span class="brand-text font-weight-light">پنل مدیریت</span>
        </a>

        <div class="sidebar" style="direction: ltr">
            <div style="direction: rtl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                    </div>
                    <div class="info">
                        <a href="#" class="d-block">حسام موسوی</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-pie-chart"></i>
                                <p>
                                    کاربران
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="login.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>کاربر جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="users.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست کاربران </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-tree"></i>
                                <p>
                                    محصولات
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Newproduct.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>محصول جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="productsList.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست محصولات</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    سفارشات
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Neworder.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>سفارش جدید </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="Listoforders.blade.php" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست سفارشات</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    فاکتور ها
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>فاکتور جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست فاکتور ها</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    فرصت های فروش
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ثبت فرصت جدید</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>لیست فرصت ها</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-table"></i>
                                <p>
                                    پروفایل
                                    <i class="fa fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>ویرایش پروفایل</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>تغییر رمز عبور</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>تغییر عکس پروفایل </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-circle-o nav-icon"></i>
                                        <p>خروج</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
           git      </nav>
                <!-- /.sidebar-menu -->
            </div>
        </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 689.2px;">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-7">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"> کاربران</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">نام</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="  نام را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام خانوادگی</label>
                                        <input name="fname" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام خانوادگی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">نام پدر</label>
                                        <input name="dadname" type="text" class="form-control" id="exampleInputPassword1" placeholder="نام پدر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">آدرس ایمیل</label>
                                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="ایمیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شماره تماس</label>
                                        <input name="phonenumber" type="number" class="form-control" id="exampleInputPassword1" placeholder="شماره تماس را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کشور</label>
                                        <input name="country" type="text" class="form-control" id="exampleInputPassword1" placeholder="کشور را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر</label>
                                        <input name="City" type="text" class="form-control" id="exampleInputPassword1" placeholder="شهر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>آدرس</label>
                                        <textarea name="Address" class="form-control" rows="3" placeholder="آدرس را کامل وارد کنید"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>جنسیت</label>
                                        <select name="gender" class="form-control">
                                            <option>مرد</option>
                                            <option>زن</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">کد ملی</label>
                                        <input name="nationalcode" type="number" class="form-control" id="exampleInputPassword1" placeholder="کد ملی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شغل</label>
                                        <input name="job" type="text" class="form-control" id="exampleInputPassword1" placeholder=" شغل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="imageUpload">آپلود عکس</label>
                                        <input name="image" type="text" class="form-control" id="imageUpload" placeholder="لینک عکس مورد نظر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label>تحصیلات</label>
                                        <select name="education" class="form-control">
                                            <option>زیر دیپلم</option>
                                            <option>دیپلم</option>
                                            <option>کارشناسی</option>
                                            <option>کارشناسی ارشد</option>
                                            <option>دکترا</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">شهر محل تحصیل</label>
                                        <input name="cityofeducation" type="text" class="form-control" id="exampleInputPassword1" placeholder="شهر محل تحصیل را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">رمز عبور</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">تکرار رمز عبور</label>
                                        <input name="confrim" type="password" class="form-control" id="exampleInputPassword1" placeholder="رمز را تکرار کنید">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">مرا بخاطر بسپار</label>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">ارسال</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                        <!-- Form Element sizes -->

                    </div>
                </div>
            </div>
    </div>
</div>
</section>




<footer class="main-footer">
    <strong>CopyLeft © ۲۰۱۸ <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">

    </div>



    @include('layout.js');

</body>
</html>
