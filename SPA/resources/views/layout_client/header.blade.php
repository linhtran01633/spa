<header>
    <nav id="fixNav">
        <ul class="menu">
            <li><a href="/test">{{__('menu.home')}}</a></li>
            <li>
                <a href="#">{{__('menu.service')}}</a>
                <ul class="sub-menu">
                    <li><a href="/traditional-massage"> {{__('menu.service.service1')}} </a></li>
                    <li><a href="/acupressure-massage"> {{__('menu.service.service2')}} </a></li>
                    <li><a href="/thai-massage"> {{__('menu.service.service3')}} </a></li>
                    <li><a href="/neck-and-shoulder-therapy"> {{__('menu.service.service4')}} </a></li>
                    <li><a href="/foot-massage"> {{__('menu.service.service5')}} </a></li>
                    <li><a href="/healthy-shampoo"> {{__('menu.service.service6')}} </a></li>
                    <li><a href="/facial"> {{__('menu.service.service7')}} </a></li>
                    <li><a href="/other-services"> {{__('menu.service.service8')}} </a></li>
                    <li><a href="/vip-room"> {{__('menu.service.service9')}} </a></li>
                    <li><a href="/combo"> {{__('menu.service.service10')}} </a></li>
                </ul>
            </li>
            <li><a href="#">{{__('menu.promotion')}}</a></li>
            <li><a href="/recruitment">{{__('menu.recruitment')}}</a></li>
            <li><a href="/access">{{__('menu.access')}}</a></li>
            <li><a href="{{ url('locale/en') }}" class="@if($language == 'en') border-b @endif">EN</a></li>
            <li><a href="{{ url('locale/ja') }}" class="@if($language == 'jp') border-b @endif">JP</a></li>
            <li><a href="{{ url('locale/vn') }}" class="@if($language == 'vn') border-b @endif">VN</a></li>
        </ul>
    </nav>

    <nav class="mobile-nav">
        <div id="menu_toggle"><i class="fa-solid fa-bars"></i> <i class="fa-solid fa-xmark hidden"></i></div>
        <ul id="menu_mobile" class="hidden">
            <li><a href="/test">{{__('menu.home')}}</a></li>
            <li>
                <a href="#">{{__('menu.service')}}</a>
                <ul class="sub-menu-mobile">
                    <li><a href="/traditional-massage"> {{__('menu.service.service1')}} </a></li>
                    <li><a href="/acupressure-massage"> {{__('menu.service.service2')}} </a></li>
                    <li><a href="/thai-massage"> {{__('menu.service.service3')}} </a></li>
                    <li><a href="/neck-and-shoulder-therapy"> {{__('menu.service.service4')}} </a></li>
                    <li><a href="/foot-massage"> {{__('menu.service.service5')}} </a></li>
                    <li><a href="/healthy-shampoo"> {{__('menu.service.service6')}} </a></li>
                    <li><a href="/facial"> {{__('menu.service.service7')}} </a></li>
                    <li><a href="/other-services"> {{__('menu.service.service8')}} </a></li>
                    <li><a href="/vip-room"> {{__('menu.service.service9')}} </a></li>
                    <li><a href="/combo"> {{__('menu.service.service10')}} </a></li>
                </ul>
            </li>
            <li><a href="#">{{__('menu.promotion')}}</a></li>
            <li><a href="/recruitment">{{__('menu.recruitment')}}</a></li>
            <li><a href="/access">{{__('menu.access')}}</a></li>
            <li><a href="{{ url('locale/en') }}" class="@if($language == 'en') border-b @endif">EN</a></li>
            <li><a href="{{ url('locale/ja') }}" class="@if($language == 'jp') border-b @endif">JP</a></li>
            <li><a href="{{ url('locale/vn') }}" class="@if($language == 'vn') border-b @endif">VN</a></li>
        </ul>
    </nav>
</header>
