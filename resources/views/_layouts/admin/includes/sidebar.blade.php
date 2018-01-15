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
                <i class="fa fa-users fa-fw"></i>
                <span>کاربران</span>
                <i class="fa fa-angle-down  pull-right"></i>
            </a>
            <ul>
                <li><a href="{{ route('admin.user.create') }}">افزودن کاربر</a></li>
                <li><a href="{{ route('admin.user.index') }}">لیست کاربران</a></li>
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