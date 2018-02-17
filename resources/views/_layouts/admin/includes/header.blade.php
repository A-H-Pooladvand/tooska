<nav class="nav-bar text-info">
    <a href="http://itooska.ir" class="pull-left text-center brand-name" target="_blank">
        <img src="{{ asset('files/_root/tooska.png') }}" width="180" height="50" alt="ITOOSKA.IR" title="itooska.ir" class="hidden-xs hidden-sm">
    </a>

    <button type="button" class="hamburger btn btn-info  hidden-md hidden-lg" id="hamburger">
        <i class="fa fa-bars"></i>
        <span class="sr-only">Toggle navigation</span>
    </button>

    <div class="dropdown pull-right profile">
        <img width="45" height="45" src="{{ asset('files/_test/9.jpg') }}" class="dropdown-toggle" data-toggle="dropdown">
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

    {{--<span class="pull-right m-l-1"> {{ Auth::user()->fullName() }} </span>--}}

</nav>

@push('scripts')
    <script>
        $(function () {
            let $dark_layout = document.getElementById("dark-layout");
            let $sideBar = $('.sidebar');
            let $check = true;

            $('#hamburger').click(function () {
                if ($check) {
                    $check = false;
                    if ($dark_layout.style.display === 'block') {
                        $dark_layout.style.display = 'none';
                        $sideBar.animateCss('fadeOutRight', function () {
                            $sideBar.removeClass('active');
                            $check = true;
                        });
                    } else {
                        $sideBar.addClass('active');
                        $dark_layout.style.display = 'block';
                        $sideBar.animateCss('fadeInRight', function () {
                            $check = true;
                        });
                    }
                }
            });

            $('#dark-layout').click(function () {
                if ($check) {
                    $check = false;
                    $dark_layout.style.display = 'none';
                    $sideBar.animateCss('fadeOutRight', function () {
                        $sideBar.removeClass('active');
                        $check = true;
                    });
                }
            });
        });
    </script>
@endpush