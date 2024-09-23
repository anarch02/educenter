<!--APP-SIDEBAR-->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <x-logo />
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg"
                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                @foreach($sidebar as $sub => $menu)
                    <li class="sub-category">
                        <h3>{{ __('app.'.$sub) }}</h3>
                    </li>
                    @foreach ($menu as $item)
                    <li class="slide">
                        <a class="side-menu__item @empty($item['sub_menu']) has-link @endempty" data-bs-toggle="slide" href="{{ isset($item['sub_menu'])? 'javascript:void(0)' : route($item['route']) }}"><i
                                class="side-menu__icon {{$item['icon']}}"></i><span
                                class="side-menu__label">{{ __('app.'.$item['title']) }}</span>
                                @isset($item['sub_menu'])
                                    <i class="angle fe fe-chevron-right"></i>
                                @endisset
                        </a>
                        @isset($item['sub_menu'])
                        <ul class="slide-menu">
                            <li class="side-menu-label1"><a href="javascript:void(0)">{{$item['title'] }}</a></li>
                            @foreach ($item['sub_menu'] as $sub_item)
                                <li class="side-menu-label"><a href="{{ route($sub_item['route']) }}">{{ __('app.'.$sub_item['title']) }}</a></li>
                            @endforeach
                        </ul>
                        @endisset
                    </li>
                    @endforeach
                @endforeach
            </ul>
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>
