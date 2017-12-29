<div class="sidebar">
    <ul class="sidebar__item">
        <li>
            <a href="#">
                <i class="fa fa-home fa-fw"></i>
                <span>داشبورد</span>
                <i class="fa fa-angle-down  pull-right"></i>
            </a>
            <ul>
                <li><a href="{{ route('home') }}">مشاهده سایت</a></li>
                <li><a href="#">کارتابل</a></li>
                <li><a href="#">پروفایل</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-tags fa-fw"></i>
                <span>کلمات کلیدی</span>
                <i class="fa fa-angle-down  pull-right"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-info fa-fw"></i>
                <span>درباره ما</span>
                <i class="fa fa-angle-down  pull-right"></i>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-mobile-phone fa-fw"></i>
                <span>تماس با ما</span>
                <i class="fa fa-angle-down  pull-right"></i>
            </a>
        </li>
    </ul>
</div>

@push('scripts')
    <script type="text/javascript">
        $(function () {
            var $sidebarNavigateCheck = true;
            $('.sidebar__item > li').click(function () {
                if ($sidebarNavigateCheck) {
                    $sidebarNavigateCheck = false;
                    var $this = $(this);
                    $this.toggleClass('active');
                    var $icon = $this.find('.pull-right');
                    if ($icon.hasClass('fa-angle-down'))
                        $icon.removeClass('fa-angle-down').addClass('fa-angle-up');
                    else
                        $icon.removeClass('fa-angle-up').addClass('fa-angle-down');
                    $sidebarNavigateCheck = true;
                }
            });
        });
    </script>
@endpush