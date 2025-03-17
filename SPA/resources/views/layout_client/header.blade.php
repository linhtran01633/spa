<header>
    <nav id="fixNav">
        <ul class="menu">
            <li><a href="/test">{{__('menu.home')}}</a></li>
            <li>
                <a href="#">{{__('menu.service')}}</a>
                <ul class="sub-menu">
                    @for ($i = 1; $i <= 10; $i++)
                        <li><a href="/services/{{$i}}"> {{__('menu.service.service'. $i)}} </a></li>
                    @endfor
                </ul>
            </li>
            <li><a href="#">{{__('menu.promotion')}}</a></li>
            <li><a href="/access">{{__('menu.access')}}</a></li>
            <li><a href="{{ url('locale/en') }}" class="@if($language == 'en') border-b @endif">EN</a></li>
            <li><a href="{{ url('locale/ja') }}" class="@if($language == 'jp') border-b @endif">JP</a></li>
            <li><a href="{{ url('locale/vn') }}" class="@if($language == 'vn') border-b @endif">VN</a></li>
            <li>
                <div class="appointment">
                    <a href="/appointment" class="flex items-center px-6 py-3 px-4 bg-button rounded-full text-white no-underline">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span class="no-underline">{{__('appointment')}}</span>
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <nav class="mobile-nav">
        <div id="menu_toggle"><i class="fa-solid fa-bars"></i> <i class="fa-solid fa-xmark hidden"></i></div>
        <ul id="menu_mobile" class="hidden">
            <li><a href="/test">{{__('menu.home')}}</a></li>
            <li>
                <a href="#">{{__('menu.service')}}</a>
                <ul class="sub-menu-mobile">
                    @for ($i = 1; $i <= 10; $i++)
                        <li><a href="/services/{{$i}}"> {{__('menu.service.service'. $i)}} </a></li>
                    @endfor
                </ul>
            </li>
            <li><a href="#">{{__('menu.promotion')}}</a></li>
            <li><a href="/access">{{__('menu.access')}}</a></li>
            <li><a href="{{ url('locale/en') }}" class="@if($language == 'en') border-b @endif">EN</a></li>
            <li><a href="{{ url('locale/ja') }}" class="@if($language == 'jp') border-b @endif">JP</a></li>
            <li><a href="{{ url('locale/vn') }}" class="@if($language == 'vn') border-b @endif">VN</a></li>
            <li>
                <div class="appointment" style="padding: 20px 0px;">
                    <a href="/appointment" class="flex items-center px-6 py-3 px-4 bg-button rounded-full text-white no-underline">
                        <i class="fa-regular fa-calendar-check"></i>
                        <span class="no-underline">{{__('appointment')}}</span>
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</header>
