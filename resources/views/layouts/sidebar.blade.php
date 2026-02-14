<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{auth()->user()->name}}/ اسم المستخدم<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kosh.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>جميع الكوش</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ---
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>جميع الصالات   </span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ----
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">

        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>المستخدمين</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/blogadmin">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>المدونه</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/booking">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>حجوزات العملاء </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contactadmin">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>الرسائل الوارده -من الزوائر</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>كوافير عرايس</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>اضاف عرايس </span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-chart-area"></i>
            <span> </span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link text-start w-100 p-0">
                <i class="fas fa-sign-out-alt me-2"></i>
                <span>تسجيل الخروج</span>
            </button>
        </form>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->


    <!-- Sidebar Message -->


</ul>
