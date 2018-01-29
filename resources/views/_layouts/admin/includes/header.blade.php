<nav class="nav-bar">
    <a href="#" class="pull-left text-center brand-name">i<span>TOOSKA.</span>i<span>R</span></a>

    <div class="dropdown pull-right profile">
        <img width="45" height="45" src="{{ asset('files/_test/9.jpg') }}" class="dropdown-toggle"
             data-toggle="dropdown">
        <ul class="dropdown-menu">
            <li>
                <a href="#">
                    <i class="fa fa-user fa-fw"></i>
                    <span>پروفایل</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-gear fa-fw"></i>
                    <span>تنظیمات</span>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out fa-fw"></i>
                    <span>خروج</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </div>

    <span class="pull-right"> {{ Auth::user()->fullName() }} </span>

</nav>