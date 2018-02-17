
<div class="sidebar">

    <ul class="sidebar__item">
        @foreach($sidebar_menus as $menu)
            <li>
                <a href="#">
                    <i class="{{ $menu['icon'] }}"></i>
                    <span>{{ $menu['title'] }}</span>
                    <i class="fa fa-angle-down  pull-right sidebar-angles"></i>
                </a>
                @if(!empty($menu['sub']))
                    <ul>
                        @foreach($menu['sub'] as $sub)
                            <li><a href="{{ $sub['link'] }}">{{ $sub['title'] }}</a></li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>

</div>