<!-- begin:: Header -->
<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
    <div class="kt-container  kt-container--fluid ">

        <!-- begin:: Brand -->
        <div class="kt-header__brand " id="kt_header_brand">
            <div class="kt-header__brand-logo">
                <a href="{{ route('home') }}">
                    <img alt="Logo" src="{{ asset('logo.png') }}"/>
                </a>
            </div>
        </div>

        <!-- end:: Brand -->

        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: Language bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--langs">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                <span class="kt-header__topbar-icon">
                    <img class="" src="{{ asset('img/flags/' .  app()->getLocale() . '.svg') }}" alt=""/>
                </span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim">
                    <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                        <li class="kt-nav__item kt-nav__item--active">
                            <a href="" class="kt-nav__link lang" data-lang="nl">
                                <span class="kt-nav__link-icon">
                                    <img src="{{ asset('img/flags/nl.svg') }}" alt=""/>
                                </span>
                                <span class="kt-nav__link-text">@lang('languages.dutch')</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a href="" class="kt-nav__link lang" data-lang="en">
                                <span class="kt-nav__link-icon">
                                    <img src="{{ asset('img/flags/en.svg') }}" alt=""/>
                                </span>
                                <span class="kt-nav__link-text">@lang('languages.english')</span>
                            </a>
                        </li>
                        <form id="lang-form" action="{{ route('switch-lang') }}" method="POST" style="display: none;">
                            @csrf
                            <input type="hidden" name="lang">
                        </form>
                    </ul>
                </div>
            </div>

            <!--end: Language bar -->

            <!--begin: User bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">
                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                    <span class="kt-header__topbar-welcome kt-visible-desktop">@lang('header.hi'), </span>
                    <span class="kt-header__topbar-username kt-visible-desktop">{{ auth()->user()->name }}</span>
                    <span class="kt-header__topbar-icon kt-bg-brand kt-hidden"><b>S</b></span>
                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                        <div class="kt-user-card__name">
                            {{ auth()->user()->name }}
                        </div>
                    </div>
                    <!--end: Head -->

                    <!--begin: Navigation -->
                    <div class="kt-notification">
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-calendar-3 font-primary"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title kt-font-bold">
                                    @lang('header.my profile')
                                </div>
                                <div class="kt-notification__item-time">
                                    @lang('header.account and more')
                                </div>
                            </div>
                        </a>
                        <div class="kt-notification__custom kt-space-between">
                            <a href="{{ route('logout') }}" target="_blank"
                               class="btn btn-label btn-label-brand btn-sm btn-bold"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">@lang('auth.sign out')</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <!--end: Navigation -->
                </div>
            </div>

            <!--end: User bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>
</div>
<!-- end:: Header -->